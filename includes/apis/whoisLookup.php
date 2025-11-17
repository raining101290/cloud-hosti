<?php
// header("Content-Type: application/json");

// Load environment
include_once __DIR__ . '/env.php';
loadEnv(__DIR__ . '/../../.env');

// Validate domain
$domain = $_GET['domain'] ?? '';
if (!$domain) {
    echo json_encode(["status" => "error", "message" => "No domain"]);
    exit;
}

// WHMCS credentials
$whmcsUser = getenv('WHMCS_USERNAME');
$whmcsPass = getenv('WHMCS_PASSWORD');
$whmcsKey  = getenv('WHMCS_ACCESS_KEY');
$apiUrl    = getenv('WHMCS_API_URL');

$postfields = [
    'action'      => 'DomainWhois',
    'domain'      => $domain,
    'username'    => $whmcsUser,
    'password'    => md5($whmcsPass),
    'accesskey'   => $whmcsKey,
    'responsetype'=> 'json'
];

// cURL Request
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

if (!$response) {
    echo json_encode(["status" => "error", "message" => "cURL error"]);
    exit;
}

$data = json_decode($response, true);

// WHMCS failed?
if (!isset($data['result']) || $data['result'] !== 'success') {
    echo json_encode(["status" => "error", "message" => "WHMCS error"]);
    exit;
}

// final status
$status = strtolower($data['status']);

echo json_encode([
    "domain" => $domain,
    "status" => $status    // available | unavailable | invalid
]);
exit;
