<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);
$index = intval($data['index']);

if (isset($_SESSION['cart'][$index])) {
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

echo json_encode([
    'status' => 'success',
    'count' => count($_SESSION['cart'])
]);
exit;
?>
