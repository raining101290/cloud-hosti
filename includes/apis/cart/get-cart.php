<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

/* ==================================================
   LOAD HOSTING PRODUCTS
   ================================================== */
$productCachePath = __DIR__ . '/../../../cache/products.json';
$productList = [];
$productNameMap = [];

if (file_exists($productCachePath)) {
    $productList = json_decode(file_get_contents($productCachePath), true);

    foreach ($productList as $product) {
        $productNameMap[$product['pid']] = $product['name'];
    }
}

/* ==================================================
   LOAD DOMAIN PRICING
   ================================================== */
$domainPricingPath = __DIR__ . '/../../../cache/domainPricing.json';
$domainPricing = [];

if (file_exists($domainPricingPath)) {
    $domainPricing = json_decode(file_get_contents($domainPricingPath), true);
}

$html = "";

if (empty($cart)) {
    $html = '<div class="text-center text-muted py-3">Your cart is empty</div>';
}

foreach ($cart as $index => $item) {

    /* ========================================
       DOMAIN ITEM
       ======================================== */
    if ($item["type"] === "domain") {

        $domain = $item["domain"];
        $tld = strtolower(pathinfo($domain, PATHINFO_EXTENSION));

        $price = isset($domainPricing[$tld]['register']['1'])
            ? floatval($domainPricing[$tld]['register']['1'])
            : 0;

        $html .= '
            <div class="d-flex align-items-center justify-content-between border-bottom py-2">

                <div>
                    <div class="fw-bold">Domain Registration</div>
                    <small class="text-muted">'.$domain.'</small>

                    <div class="text-dark fw-bold">$'.number_format($price, 2).'</div>
                </div>

                <button onclick="removeCartItem('.$index.')" 
                    class="btn btn-sm btn-danger">X</button>
            </div>
        ';

        continue;
    }

    /* ========================================
       HOSTING ITEM (existing logic)
       ======================================== */
    $prodName = $productNameMap[$item['pid']] ?? "Product #" . $item['pid'];
    $cycle = strtolower($item['billingcycle']);

    // Match full product record
    $productData = null;
    foreach ($productList as $p) {
        if ($p['pid'] == $item['pid']) {
            $productData = $p;
            break;
        }
    }

    // Get hosting price
    $price = 0;
    $currency = "";
    if ($productData && isset($productData['pricing']['USD'][$cycle])) {
        $price = floatval($productData['pricing']['USD'][$cycle]);
        $currency = $productData['pricing']['USD']['prefix']; // "$"
    }

    // Promo discount (percentage)
    $discountedPrice = $price;
    $discountText = "";

    if (!empty($item['promo'])) {
        preg_match('/(\d+)/', $item['promo'], $m);
        $discountPercent = isset($m[1]) ? intval($m[1]) : 0;

        if ($discountPercent > 0) {
            $discountAmount = ($price * $discountPercent) / 100;
            $discountedPrice = $price - $discountAmount;

            $discountText = '
                <div>
                    <small class="text-success fw-bold">
                        Promo: '.$item['promo'].' ('.$discountPercent.'% Off)
                    </small>
                </div>
            ';
        }
    }

    $priceHtml = '
        <div class="text-dark fw-bold">
            '.$currency . number_format($price, 2).'
            <span class="text-success"> → '.$currency.number_format($discountedPrice, 2).'</span>
        </div>
    ';

    $html .= '
        <div class="d-flex align-items-center justify-content-between border-bottom py-2">

            <div>
                <div class="fw-bold">'.htmlspecialchars($prodName).'</div>
                <small class="text-muted">'.ucfirst($item['billingcycle']).'</small>

                '.$priceHtml.'
                '.$discountText.'
            </div>

            <button onclick="removeCartItem('.$index.')" 
                class="btn btn-sm btn-danger">X</button>
        </div>
    ';
}

/* ==================================================
   RESPONSE
   ================================================== */
echo json_encode([
    "count" => count($cart),
    "html"  => $html
]);
exit;
