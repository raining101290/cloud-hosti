<?php

// ========================================================
// CACHE FILE
// ========================================================
$cacheFile = __DIR__ . '/../../cache/domainPricing.json';
$cacheTime = 3600; // 1 hour cache

// ========================================================
// LOAD CACHE IF FRESH
// ========================================================
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {

    $tlds = json_decode(file_get_contents($cacheFile), true);
    
} else {

    // ========================================================
    // LOAD ENV
    // ========================================================
    include_once __DIR__ . '/env.php';
    loadEnv(__DIR__ . '/../../.env');

    $whmcsUser = getenv('WHMCS_USERNAME');
    $whmcsPass = getenv('WHMCS_PASSWORD');
    $whmcsKey  = getenv('WHMCS_ACCESS_KEY');
    $apiUrl    = getenv('WHMCS_API_URL');

    // ========================================================
    // CALL WHMCS API
    // ========================================================
    $postfields = [
        'action'      => 'GetTldPricing',
        'username'    => $whmcsUser,
        'password'    => md5($whmcsPass),
        'accesskey'   => $whmcsKey,
        'responsetype'=> 'json'
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data && $data['result'] === 'success') {

        $tlds = $data['pricing'];

        // Save to cache
        file_put_contents($cacheFile, json_encode($tlds));
        
    } else {
        $tlds = []; // fallback
    }
}

// ========================================================
// ALWAYS DEFINE FEATURED TLDs
// ========================================================
$featuredTLDs = [
    'com'  => 'text-primary',
    'co'   => 'text-danger',
    'info' => 'text-warning',
    'org'  => 'text-success',
    'biz'  => 'text-info',
    'net'  => 'text-primary'
];

// ========================================================
// ALWAYS DEFINE DISCOUNTS
// ========================================================
$discounts = [
    'com' => 14.73,
    'net' => 13.50,
    'org' => 15.12,
    'info' => 13.46,
    'biz' => 23.59,
];
