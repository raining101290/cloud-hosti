<?php
session_start();

// No cart?
if (empty($_SESSION['cart'])) {
    header("Location: /cart");
    exit;
}

echo '<form id="redirectForm" action="https://portal.cloudhosti.com/cart.php" method="post">
        <input type="hidden" name="a" value="add">';

foreach ($_SESSION['cart'] as $i => $item) {
    echo '<input type="hidden" name="pid[]" value="'.$item['pid'].'">';
    echo '<input type="hidden" name="billingcycle[]" value="'.$item['billingcycle'].'">';

    if (!empty($item['promo'])) {
        echo '<input type="hidden" name="promocode[]" value="'.$item['promo'].'">';
    }
}

echo '</form>
<script>document.getElementById("redirectForm").submit();</script>';
?>
