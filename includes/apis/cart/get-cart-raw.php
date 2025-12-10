<?php
session_start();

// $cart = json_decode(base64_decode("W3sicGlkIjoxLCJiaWxsaW5nY3ljbGUiOiJhbm51YWxseSIsInByb21vIjoiMjBPRkYiLCJ0eXBlIjoiaG9zdGluZyJ9XQ=="), true);

// echo $cart;
echo json_encode([
    "cart" => $_SESSION['cart'] ?? []
]);
exit;
