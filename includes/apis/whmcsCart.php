<?php
session_start();

// ========================================================
// Load ENV
// ========================================================
include_once __DIR__ . '/env.php';
loadEnv(__DIR__ . '/../../.env');

$whmcsBase = 'https://portal.cloudhosti.com';

// ========================================================
// 1. CREATE WHMCS SESSION IF NOT EXISTS
// ========================================================

if (empty($_SESSION['whmcs_session_cookie'])) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $whmcsBase . '/cart.php?a=view');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);  
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    curl_close($ch);

    if (!$response) {
        echo json_encode(['result' => 'error', 'message' => 'CURL Error initializing WHMCS']);
        exit;
    }

    // Extract header section
    list($header) = explode("\r\n\r\n", $response, 2);

    // Extract cookies
    preg_match_all('/Set-Cookie:\s*([^=]+)=([^;]+);/i', $header, $matches);

    $sessionCookie = null;

    foreach ($matches[1] as $i => $cookieName) {
        $cookieValue = $matches[2][$i];

        if (preg_match('/^WHMCS/i', $cookieName)) {

            // Detect if site is running on HTTPS
            $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

            if ($isHttps) {
                // Production (HTTPS)
                $sessionCookie = $cookieName . '=' . $cookieValue . '; path=/; secure;';
            } else {
                // Localhost (HTTP) → avoid secure attribute
                $sessionCookie = $cookieName . '=' . $cookieValue . '; path=/;';
            }
            break;
        }
    }


    $_SESSION['whmcs_session_cookie'] = $sessionCookie;
}

// ========================================================
// 2. VALIDATE ACTION
// ========================================================

$action = $_POST['action'] ?? '';

if (!in_array($action, ['AddToCart', 'GetCart'])) {
    echo json_encode(['result' => 'error', 'message' => 'Invalid action']);
    exit;
}

// ========================================================
// 3. ADD TO CART
// ========================================================

if ($action === 'AddToCart') {

    $pid          = $_POST['pid'] ?? null;
    $billingcycle = $_POST['billingcycle'] ?? null;
    $promocode    = $_POST['promocode'] ?? '';

    if (!$pid || !$billingcycle) {
        echo json_encode(['result' => 'error', 'message' => 'Missing pid or billingcycle']);
        exit;
    }

    $postData = [
        'pid' => $pid,
        'billingcycle' => $billingcycle,
        'promocode' => $promocode,
        'skipconfig' => 'true'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $whmcsBase . '/cart.php?a=add');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIE, $_SESSION['whmcs_session_cookie']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_exec($ch);
    curl_close($ch);

    echo json_encode(['result' => 'success']);
    exit;
}

// ========================================================
// 4. GET CART COUNT
// ========================================================

if ($action === 'GetCart') {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $whmcsBase . '/cart.php?a=view');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIE, $_SESSION['whmcs_session_cookie']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $html = curl_exec($ch);
    curl_close($ch);

    // Extract count from <span id="cartItemCount">X</span>
    $count = 0;

    if (preg_match('/id=[\'"]cartItemCount[\'"]\s*class=[\'"][^\'"]*[\'"]\s*>(\d+)<\/span>/i', $html, $match)) {
        $count = (int)$match[1];
    }

    echo json_encode([
        'result' => 'success',
        'count' => $count
    ]);
    exit;
}

?>
