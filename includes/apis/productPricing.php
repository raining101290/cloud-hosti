<?php


$cacheFile = __DIR__ . '/../../cache/products.json';
$cacheTime = 3600; // 1 hour cache

if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    $products = json_decode(file_get_contents($cacheFile), true);
    return;
}

include_once __DIR__ . '/env.php';
loadEnv(__DIR__ . '/../../.env');

// Get values
$whmcsUser = getenv('WHMCS_USERNAME');
$whmcsPass = getenv('WHMCS_PASSWORD');
$whmcsKey  = getenv('WHMCS_ACCESS_KEY');
$apiUrl    = getenv('WHMCS_API_URL');

// If .env is not loading, these will be empty. Let's test:
if (!$whmcsUser || !$whmcsPass || !$apiUrl) {
    echo "<p style='color:red;'>ENV NOT LOADED. Check your .env path.</p>";
    var_dump($whmcsUser, $whmcsPass, $apiUrl);
    exit;
}

// ---------- CALL WHMCS API ----------
$postfields = [
    'action'      => 'GetProducts',
    'include' => 'hidden',
    'username'    => $whmcsUser,
    'password'    => md5($whmcsPass),
    'accesskey'   => $whmcsKey,
    'responsetype'=> 'json'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);



$data = json_decode($response, true);

if ($data['result'] === 'success') {
    $products = $data['products']['product'];

    // Save to cache
    file_put_contents($cacheFile, json_encode($products));
}

?>
