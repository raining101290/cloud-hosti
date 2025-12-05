<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);

$domain = $data["domain"] ?? null;

if (!$domain) {
    echo json_encode(["status" => "error", "message" => "No domain provided"]);
    exit;
}

// Restrict: 1 domain only
foreach ($_SESSION['cart'] ?? [] as $item) {
    if ($item['type'] === 'domain') {
        echo json_encode(["status" => "error", "message" => "Domain already exists"]);
        exit;
    }
}

// Add domain item
$_SESSION['cart'][] = [
    "type" => "domain",
    "domain" => $domain,
];

echo json_encode([
    "status" => "success",
    "count" => count($_SESSION['cart'])
]);
exit;
