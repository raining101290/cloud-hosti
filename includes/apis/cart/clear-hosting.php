<?php
session_start();

$_SESSION['cart'] = array_filter(
    $_SESSION['cart'],
    fn($item) => $item['type'] !== 'hosting'
);

echo "ok";
