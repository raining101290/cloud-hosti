<?php
session_start();

// Read JSON Body
$data = json_decode(file_get_contents("php://input"), true);

$pid = intval($data['pid']);
$billingcycle = $data['billingcycle'];
$promo = $data['promo'];

// Check if this is a hosting product
if ($data['type'] === 'hosting') {
    foreach ($_SESSION['cart'] as $item) {
        if ($item['type'] === 'hosting') {
            echo json_encode([
                'status' => 'error',
                'message' => 'You can only add one hosting package at a time.'
            ]);
            exit;
        }
    }
}

// Initialize cart session if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item
$_SESSION['cart'][] = [
    'pid' => $pid,
    'billingcycle' => $billingcycle,
    'promo' => $promo,
    'type' => $data['type']
];

$response = [
    'status' => 'success',
    'count' => count($_SESSION['cart'])
];

echo json_encode($response);
exit;
?>
