<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'helper/utils.php';
include 'includes/meta.php';
include 'includes/apis/domainPricing.php';
include 'includes/apis/productPricing.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$meta = getMetaData($currentPage);

$cacheFile       = __DIR__ . "/cache/domainPricing.json";
$productFile     = __DIR__ . "/cache/products.json";
$featuresFile    = __DIR__ . "/cache/productFeatures.json";

// Load domain pricing
$tlds = file_exists($cacheFile)
    ? json_decode(file_get_contents($cacheFile), true)
    : [];

// Load WHMCS products
$products = file_exists($productFile)
    ? json_decode(file_get_contents($productFile), true)
    : [];

// Load your custom features JSON
$features = file_exists($featuresFile)
    ? json_decode(file_get_contents($featuresFile), true)
    : [];
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="author" content="CloudHosti">
    <meta name="keywords" content="">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- endbuild -->
    <link href="assets/lib/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <!-- endbuild -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body class="bg-secondary">

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            <img class="mb-2" src="assets/images/cloudhosti-logo.png" alt="CloudHosti logo" height="41px">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <?php include('./components/header.php') ?>

    <!-- Banner  -->
    <section class="banner banner-security bg-custom-5 control-panel-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <span class="fs-18 fw-semibold text-primary mb-2" data-sal="slide-up" data-sal-duration="300"
                        data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Up to 20% off
                    </span>
                    <h1 class="text-white mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Shared Hosting
                        for Every Website
                    </h1>
                    <p class="mb-8 text-white max-text-72 text-opacity-75" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Fast, secure, and affordable hosting plans for any budget
                    </p>
                    <!-- <div class="d-flex align-items-center gap-5 flex-wrap" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <a href="#" class="btn btn-primary btn-arrow btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                Start with 
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <h4 class="text-white mb-0">$1.20 <span class="fw-normal fs-16">/mo</span></h4>
                    </div> -->
                    <!-- <span class="d-block fs-14 text-white text-opacity-75 mt-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Worry-free - 45 Days Money Back
                    </span> -->
                </div>
                <div class="col-lg-5 col-xl-6 text-lg-end">
                    <img src="assets/img/shared-hosting-img.png" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner  -->

    <!-- Price  -->
    <section class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center">
                            <h2>Web Hosting Plans for Your Website</h2>
                            <p class="mb-0 max-text-56 mx-auto">
                                Launch your website with powerful hosting optimized for speed, security, and reliability. Choose the perfect plan and get online today.
                            </p>
                        </div>

                        <div class="d-flex align-items-center justify-content-center gap-3 mt-5">
                            <small class="fw-semibold">Monthly</small>
                            <div class="form-check form-switch toggle-switch">
                                <input class="form-check-input pricing-toggle" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                            <small class="fw-semibold">Yearly</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row g-4 g-xl-0">
                <?php foreach ($products as $product): ?>
                    <?php
                        if ($product['gid'] != 1) continue;

                        $pid = $product['pid'];
                        if (!isset($features[$pid])) continue;

                        $f = $features[$pid];

                        // --- Extract WHMCS values ---
                        $title   = $product['name'] ?? 'Hosting Plan';
                        $monthly = floatval($product['pricing']['USD']['monthly'] ?? -1);
                        $yearly  = floatval($product['pricing']['USD']['annually'] ?? -1);

                        // Normal / original price (optional field inside your features JSON)
                        $normal  = $f['normal_price'] ?? '';

                        $discountPercent = $f['percentage'] ?? 0;

                        $monthly_discounted = ($monthly > 0)
                            ? $monthly - (($monthly * $discountPercent) / 100)
                            : -1;

                        $yearly_discounted = ($yearly > 0)
                            ? $yearly - (($yearly * $discountPercent) / 100)
                            : -1;
                        
                        // Tagline from features.json
                        $tagline = $f['tagline'] ?? '';

                        // Renewal text (optional)
                        $renew   = $f['renew_text'] ?? '';

                        // Features list
                        $featList = $f['features'] ?? [];
                    ?>

                    <div class="col-xl-4 col-md-4 col-12 mb-3">
                        <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end">

                            <!-- Optional Discount Badge -->
                            <?php if ($discountPercent > 0): ?>
                                <div class="discount-badge gradient-bg">
                                    <p class="text-white fw-bold mb-0"><?= $discountPercent ?>% OFF</p>
                                </div>
                            <?php endif; ?>

                            <!-- Title -->
                            <h6 class="mb-1 text-truncate"><?= htmlspecialchars($title) ?></h6>
                            <!-- Tagline (optional) -->
                            <?php if (!empty($tagline)): ?>
                                <small class="d-block mb-1"><?= htmlspecialchars($tagline) ?></small>
                            <?php endif; ?>
                            <!-- Pricing -->
                            <div class="mt-5">
                                <?php if ($monthly > 0): ?>
                                <div class="monthly-price">
                                    <?php if ($discountPercent > 0): ?>
                                        <!-- Discounted monthly price -->
                                        <h4>
                                            <small class="text-decoration-line-through">
                                            $<?= number_format($monthly, 2) ?>
                                            </small>
                                            $<?= number_format($monthly_discounted, 2) ?>
                                            <span class="fs-14 text-muted">/month</span>
                                        </h4>
                                        <!-- Original price -->
                                        
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <?php if ($yearly > 0): ?>
                                <div class="yearly-price">
                                    <?php if ($discountPercent > 0): ?>
                                        <!-- Discounted yearly price -->
                                        <h4>
                                            <small class="text-decoration-line-through">
                                            $<?= number_format($yearly, 2) ?>
                                            </small>
                                            $<?= number_format($yearly_discounted, 2) ?>
                                            <span class="fs-14 text-muted">/year</span>
                                        </h4>
                                        <!-- Original yearly price -->
                                        
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($monthly > 0): ?>
                            <div class="monthly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="javascript:void(0)" onClick="addToCart(<?= $pid ?>, 'monthly', '<?= $f['promo'] ?>', 'hosting')"
                                >
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if ($yearly > 0): ?>
                            <div class="yearly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="javascript:void(0)" onClick="addToCart(<?= $pid ?>, 'annually', '<?= $f['promo'] ?>', 'hosting')">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <?php endif; ?>

                            <!-- Features Section -->
                            <div class="mt-6">
                                <h6 class="mb-5">Top Featured</h6>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">

                                    <?php foreach ($featList as $feature): ?>
                                        <?php if (!empty($feature)): ?>
                                        <li class="d-flex align-items-center gap-3">
                                            <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white 
                                                d-flex align-items-center justify-content-center flex-shrink-0">
                                                <i class="las la-check"></i>
                                            </div>
                                            <small><?= htmlspecialchars($feature) ?></small>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- <div class="domain-list-section position-relative pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0" data-sal="slide-up" data-sal-duration="350" data-sal-delay="50" data-sal-easing="ease-in-out-sine">
                        <div class="card-body price-card-item-one position-relative overflow-hidden px-xl-7 py-xl-9">
                            <h6 class="mb-1">SSL Starter</h6>
                            <small>Our most affordable, single domain,
                                WordPress Hosting plan.</small>
                            <div class="mt-5">
                                <div class="monthly-price">
                                    <h4>$30.99</h4>
                                    <small class="fw-bold">Normally $99.99</small>
                                </div>
                                <div class="yearly-price">
                                    <h4>$299.00</h4>
                                    <small class="fw-bold">Normally $24.91</small>
                                </div>
                            </div>
                            <div class="monthly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="yearly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>

                            <div class="mt-6">
                                <h6 class="mb-5">Top Featured</h6>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Standard  <span class="fw-bold">Performance</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 <span class="fw-bold">Websites</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                        <div class="card-body price-card-item-one position-relative overflow-hidden px-xl-7 py-xl-9">
                            <h6 class="mb-1">SSL Silver</h6>
                            <small>Our most affordable, single domain,
                                WordPress Hosting plan.</small>
                            <div class="mt-5">
                                <div class="monthly-price">
                                    <h4>$30.99</h4>
                                    <small class="fw-bold">Normally $99.99</small>
                                </div>
                                <div class="yearly-price">
                                    <h4>$299.00</h4>
                                    <small class="fw-bold">Normally $24.91</small>
                                </div>
                            </div>
                            <div class="monthly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="yearly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="mt-6">
                                <h6 class="mb-5">Top Featured</h6>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Standard  <span class="fw-bold">Performance</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 <span class="fw-bold">Websites</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                        <div class="card-body price-card-item-one position-relative overflow-hidden px-xl-7 py-xl-9">
                            <div class="discount-badge gradient-bg">
                                <p class="text-white fw-bold mb-0">30% Sale</p>
                            </div>
                            <h6 class="mb-1">SSL Gold</h6>
                            <small>Our most affordable, single domain,
                                WordPress Hosting plan.</small>
                            <div class="mt-5">
                                <div class="monthly-price">
                                    <h4>$30.99</h4>
                                    <small class="fw-bold">Normally $99.99</small>
                                </div>
                                <div class="yearly-price">
                                    <h4>$299.00</h4>
                                    <small class="fw-bold">Normally $24.91</small>
                                </div>
                            </div>
                            <div class="monthly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="yearly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="mt-6">
                                <h6 class="mb-5">Top Featured</h6>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Standard  <span class="fw-bold">Performance</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 <span class="fw-bold">Websites</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="card-body price-card-item-one position-relative overflow-hidden px-xl-7 py-xl-9">
                            <h6 class="mb-1">SSL Diamond</h6>
                            <small>Our most affordable, single domain,
                                WordPress Hosting plan.</small>
                            <div class="mt-5">
                                <div class="monthly-price">
                                    <h4>$30.99</h4>
                                    <small class="fw-bold">Normally $99.99</small>
                                </div>
                                <div class="yearly-price">
                                    <h4>$299.00</h4>
                                    <small class="fw-bold">Normally $24.91</small>
                                </div>
                            </div>
                            <div class="monthly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                            </div>
                            <div class="yearly-price">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <small class="d-block fw-medium mt-2">$5.99/mo when you renew</small>
                            </div>
                            <div class="mt-6">
                                <h6 class="mb-5">Top Featured</h6>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Standard  <span class="fw-bold">Performance</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 <span class="fw-bold">Websites</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                            <i class="las la-check"></i>
                                        </div>
                                        <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /Price  -->

    <!-- Featured List  -->
    <!-- <div class="pt-120 pb-120 bg-primary bg-opacity-5">
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6 text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="d-inline-block fw-semibold text-primary mb-2">
                            Domain Registration
                        </span>
                        <h2 class="mb-0">
                            Shared Hosting Features
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-10.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                One-click Installs
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-11.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                Free Domain
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-12.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                Daily Backups
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-13.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                Free CDN
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-14.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                cPanel Access
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="mb-8">
                                <img src="assets/img/icon-features-15.png" alt="image" class="img-fluid">
                            </div>
                            <h6 class="mb-4">
                                Reliable Email Service
                            </h6>
                            <p class="mb-0">
                                Install hundreds of apps like WordPress, Joomla, and Drupal with a click of a button.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /Featured List  -->

    <!-- Why Choose Section  -->
    <div class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="fs-18 fw-semibold text-primary mb-2">
                            Technology Overview
                        </span>
                        <h2 class="mb-0">
                            Transfer a Domain Name
                            in 4 Simple Steps
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card rounded-3">
                        <div class="card-body p-md-6 p-xl-10">
                            <div class="tab-content pb-40">
                                <div class="tab-pane fade show active" id="validDomain">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6">
                                            <img src="assets/img/setp-img-1.png" alt="image" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <span class="badge fw-medium text-bg-primary">
                                                Step 01
                                            </span>
                                            <h5 class="mt-3 mb-4">
                                                Domain Name you want to transfer
                                            </h5>
                                            <p class="mb-8">
                                                To initiate the transfer of your domain name, please enter the domain name
                                                you wish to transfer in the field provided below. Ensure that your domain
                                                name is unlocked and that you have access.
                                            </p>
                                            <ul class="list-unstyled p-0 m-0">
                                                <li class="d-flex align-items-start gap-2 mb-4 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Name:</strong> Enter the full domain name you want to
                                                        transfer
                                                    </span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Unlock:</strong> Ensure your domain is unlocked for
                                                        transfer
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="unlockedDomain">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6">
                                            <img src="assets/img/setp-img-1.png" alt="image" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <span class="badge fw-medium text-bg-primary">
                                                Step 02
                                            </span>
                                            <h5 class="mt-3 mb-4">
                                                Domain Name you want to transfer
                                            </h5>
                                            <p class="mb-8">
                                                To initiate the transfer of your domain name, please enter the domain name
                                                you wish to transfer in the field provided below. Ensure that your domain
                                                name is unlocked and that you have access.
                                            </p>
                                            <ul class="list-unstyled p-0 m-0">
                                                <li class="d-flex align-items-start gap-2 mb-4 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Name:</strong> Enter the full domain name you want to
                                                        transfer
                                                    </span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Unlock:</strong> Ensure your domain is unlocked for
                                                        transfer
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="actNow">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6">
                                            <img src="assets/img/setp-img-1.png" alt="image" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <span class="badge fw-medium text-bg-primary">
                                                Step 03
                                            </span>
                                            <h5 class="mt-3 mb-4">
                                                Domain Name you want to transfer
                                            </h5>
                                            <p class="mb-8">
                                                To initiate the transfer of your domain name, please enter the domain name
                                                you wish to transfer in the field provided below. Ensure that your domain
                                                name is unlocked and that you have access.
                                            </p>
                                            <ul class="list-unstyled p-0 m-0">
                                                <li class="d-flex align-items-start gap-2 mb-4 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Name:</strong> Enter the full domain name you want to
                                                        transfer
                                                    </span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Unlock:</strong> Ensure your domain is unlocked for
                                                        transfer
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="optionDomain">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-6">
                                            <img src="assets/img/setp-img-1.png" alt="image" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <span class="badge fw-medium text-bg-primary">
                                                Step 04
                                            </span>
                                            <h5 class="mt-3 mb-4">
                                                Domain Name you want to transfer
                                            </h5>
                                            <p class="mb-8">
                                                To initiate the transfer of your domain name, please enter the domain name
                                                you wish to transfer in the field provided below. Ensure that your domain
                                                name is unlocked and that you have access.
                                            </p>
                                            <ul class="list-unstyled p-0 m-0">
                                                <li class="d-flex align-items-start gap-2 mb-4 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Name:</strong> Enter the full domain name you want to
                                                        transfer
                                                    </span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2 max-text-36">
                                                    <div class="w-5 h-5 d-grid place-content-center bg-primary rounded-circle fs-10 text-white flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <span class="d-block">
                                                        <strong>Domain Unlock:</strong> Ensure your domain is unlocked for
                                                        transfer
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-tab-list justify-content-center">
                                <li class="nav-item">
                                    <button class="nav-tab__btn nav-link active" data-bs-toggle="pill" data-bs-target="#validDomain" type="button">
                                        <span class="d-flex align-items-center gap-1">
                                            <span class="nav-tab__line flex-shrink-0"></span>
                                        <span
                                                class="d-inline-block fw-medium fs-14 text-primary nav-tab__subtitle">01</span>
                                        </span>
                                        <span class="nav-tab__title d-block fw-semibold h6 fs-14 mb-0">
                                            Domain is Valid
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-tab__btn nav-link" data-bs-toggle="pill" data-bs-target="#unlockedDomain" type="button">
                                        <span class="d-flex align-items-center gap-1">
                                            <span class="nav-tab__line flex-shrink-0"></span>
                                        <span
                                                class="d-inline-block fw-medium fs-14 text-primary nav-tab__subtitle">02</span>
                                        </span>
                                        <span class="nav-tab__title d-block fw-semibold h6 fs-14 mb-0">
                                            Domain is Unlocked
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-tab__btn nav-link" data-bs-toggle="pill" data-bs-target="#actNow" type="button">
                                        <span class="d-flex align-items-center gap-1">
                                            <span class="nav-tab__line flex-shrink-0"></span>
                                        <span
                                                class="d-inline-block fw-medium fs-14 text-primary nav-tab__subtitle">03</span>
                                        </span>
                                        <span class="nav-tab__title d-block fw-semibold h6 fs-14 mb-0">
                                            Act Now
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-tab__btn nav-link" data-bs-toggle="pill" data-bs-target="#optionDomain" type="button">
                                        <span class="d-flex align-items-center gap-1">
                                            <span class="nav-tab__line flex-shrink-0"></span>
                                        <span
                                                class="d-inline-block fw-medium fs-14 text-primary nav-tab__subtitle">04</span>
                                        </span>
                                        <span class="nav-tab__title d-block fw-semibold h6 fs-14 mb-0">
                                            Available Options
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Why Choose Section  -->

    <!-- Buy Domain  -->
    <div class="pt-120 pb-120 bg-primary bg-opacity-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-xxl-5" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <h2 class="h3 mb-3">
                        Why Buy Domains at
                        CloudHosti?
                    </h2>
                    <p class="mb-8 max-text-48">
                        Grab a 36-month hosting plan and get a free domain for one year. You can
                        get popular generic
                        top-level domain names like .com, .net, .org, and other extensions for free.
                    </p>
                    <!-- <a href="price.php" class="btn btn-primary btn-arrow btn-arrow-lg btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            View Pricing
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a> -->
                </div>
                <div class="col-xxl-7">
                    <div class="row g-4">
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card hover-shadow rounded-3 border border-secondary transition">
                                <div class="card-body p-xl-6">
                                    <div class="mb-4">
                                        <img src="assets/img/domain-icon-1.png" alt="icon" class="img-fluid">
                                    </div>
                                    <h6 class="mb-4">
                                        Domain Locking
                                    </h6>
                                    <p class="mb-0">We offer a large number of supported domain extensions, can match the
                                        demand
                                        of every customer competitive prices!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card hover-shadow rounded-3 border border-secondary transition">
                                <div class="card-body p-xl-6">
                                    <div class="mb-4">
                                        <img src="assets/img/domain-icon-2.png" alt="icon" class="img-fluid">
                                    </div>
                                    <h6 class="mb-4">
                                        Great Renewal Rates
                                    </h6>
                                    <p class="mb-0">We offer a large number of supported domain extensions, can match the
                                        demand
                                        of every customer competitive prices!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card hover-shadow rounded-3 border border-secondary transition">
                                <div class="card-body p-xl-6">
                                    <div class="mb-4">
                                        <img src="assets/img/domain-icon-3.png" alt="icon" class="img-fluid">
                                    </div>
                                    <h6 class="mb-4">
                                        Low prices & huge selection
                                    </h6>
                                    <p class="mb-0">We offer a large number of supported domain extensions, can match the
                                        demand
                                        of every customer competitive prices!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card hover-shadow rounded-3 border border-secondary transition">
                                <div class="card-body p-xl-6">
                                    <div class="mb-4">
                                        <img src="assets/img/domain-icon-1.png" alt="icon" class="img-fluid">
                                    </div>
                                    <h6 class="mb-4">
                                        Easy management
                                    </h6>
                                    <p class="mb-0">We offer a large number of supported domain extensions, can match the
                                        demand
                                        of every customer competitive prices!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Buy Domain  -->

    <!-- <div class="pt-120 pb-60">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <span class="d-inline-block fw-semibold text-primary mb-2" data-sal="slide-up"
                                data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                Hosting Packages
                            </span>
                            <h2>
                                Managed VPS Hosting Plans
                            </h2>
                            <p class="mb-0 max-text-52 mx-auto">
                                Take your online presence to the next level with our all-inclusive shared hosting plans,
                                crafted for faster page load times!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0">
                        <div class="card-body p-md-6 p-xl-8">
                            <div class="card border-0">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-collapsible mb-0">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="h5 mb-0">
                                                            Compare Our Cloud VPS Hosting Plans
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="text-center">
                                                            <p class="mb-1 fw-bold text-light-emphasis">
                                                                Cloud VPS_1
                                                            </p>
                                                            <div class="h5">
                                                                $27.40
                                                            </div>
                                                            <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                (on a 12 month plan)
                                                            </span>
                                                            <a href="price.php" class="btn btn-sm btn-primary btn-arrow btn-arrow-md fs-14 fw-medium rounded">
                                                                <span class="btn-arrow__text">
                                                                    Get Started
                                                                    <span class="btn-arrow__icon">
                                                                        <i class="las la-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="text-center">
                                                            <p class="mb-1 fw-bold text-light-emphasis">
                                                                Cloud VPS_2
                                                            </p>
                                                            <div class="h5">
                                                                $40.40
                                                            </div>
                                                            <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                (on a 12 month plan)
                                                            </span>
                                                            <a href="price.php" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
                                                                <span class="btn-arrow__text">
                                                                    Get Started
                                                                    <span class="btn-arrow__icon">
                                                                        <i class="las la-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="text-center">
                                                            <p class="mb-1 fw-bold text-light-emphasis">
                                                                Cloud VPS_3
                                                            </p>
                                                            <div class="h5">
                                                                $48.50
                                                            </div>
                                                            <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                (on a 12 month plan)
                                                            </span>
                                                            <a href="price.php" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
                                                                <span class="btn-arrow__text">
                                                                    Get Started
                                                                    <span class="btn-arrow__icon">
                                                                        <i class="las la-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="text-center">
                                                            <p class="mb-1 fw-bold text-light-emphasis">
                                                                Cloud VPS_4
                                                            </p>
                                                            <div class="h5">
                                                                $90.00
                                                            </div>
                                                            <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                (on a 12 month plan)
                                                            </span>
                                                            <a href="price.php" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
                                                                <span class="btn-arrow__text">
                                                                    Get Started
                                                                    <span class="btn-arrow__icon">
                                                                        <i class="las la-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion accordion-table-pricing">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fs-14 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion1" aria-expanded="true">
                                            EXCLUSIVE VPS HOSTING FEATURES
                                        </button>
                                    </h2>
                                    <div id="tableAccordion1" class="accordion-collapse collapse show">
                                        <div class="accordion-body p-0">
                                            <div class="card border-0">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-collapsible mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Websites Hosted
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Bandwidth
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            12 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24 TB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            CPU (Cores)
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Memory
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            16GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24GB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Free cPanel/WHM
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Full Management
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Priority Technical Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Softaculous 1-Click Install
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            7-Days MoneyBack Guarantee
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Multiple Server Locations
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion2" aria-expanded="false">
                                            EXCLUSIVE VPS HOSTING FEATURES
                                        </button>
                                    </h2>
                                    <div id="tableAccordion2" class="accordion-collapse collapse">
                                        <div class="accordion-body p-0">
                                            <div class="card border-0">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-collapsible mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Websites Hosted
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Bandwidth
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            12 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24 TB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            CPU (Cores)
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Memory
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            16GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24GB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Free cPanel/WHM
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Full Management
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Priority Technical Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Softaculous 1-Click Install
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            7-Days MoneyBack Guarantee
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Multiple Server Locations
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion3" aria-expanded="false">
                                            EXCLUSIVE VPS HOSTING FEATURES
                                        </button>
                                    </h2>
                                    <div id="tableAccordion3" class="accordion-collapse collapse">
                                        <div class="accordion-body p-0">
                                            <div class="card border-0">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-collapsible mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Websites Hosted
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Bandwidth
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            12 TB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24 TB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            CPU (Cores)
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            2 x 2.20GHz
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Memory
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            4GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            8GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            16GB
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24GB
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Free cPanel/WHM
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Full Management
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            24/7 Support
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Priority Technical Support
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Softaculous 1-Click Install
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            7-Days MoneyBack Guarantee
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-success">
                                                                            <i class="las la-check"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="d-block fw-semibold fs-14">
                                                                            Multiple Server Locations
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="d-block text-light-emphasis fs-14">
                                                                            Unlimited
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- FAQ  -->
    <div class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <span class="fs-18 fw-semibold text-primary mb-2" data-sal="slide-up" data-sal-duration="300"
                                data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                FAQ
                            </span>
                            <h2>
                                Shared Hosting Related FAQ’s
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="accordion border-0 vps-hosting-accordion" id="accordionFaq2">
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOneA" aria-expanded="false" aria-controls="faq-collapseOneA">
                                    <span class="text-body fs-16 fw-bold">What kind of web hosting do I need?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseOneA" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We offer many hosting packages on Linux OS with cPanel. Which one you need depends on what you want to do with your site, like whether you want to create a shopping cart, blog or podcast with a specific Web application. If you're not sure if you need which package, you can always call our hosting support team. We're here to help 24/7.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwoA" aria-expanded="false" aria-controls="faq-collapseTwoA">
                                    <span class="text-body fs-16 fw-bold">What can I use to build my website?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">You can build your website in several different ways – from hand-coding with HTML to using a website builder program. If you require a lot of functionality and versatility from your website, you’ll benefit from programs and applications that can help you build your site. Our Web hosting plans give you access to free, server-side applications that can be used to develop and customize your website, including popular Content Management System (CMS) applications like WordPress® and Joomla!®.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3A" aria-expanded="false" aria-controls="faq-collapse3A">
                                    <span class="text-body fs-16 fw-bold">How do I transfer my web pages to your server?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse3A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes, If you’ve built your websites in a HTML editor, like Dreamweaver or Microsoft Expression Studio, you have to upload your website files via FTP (File Transfer Protocol). We have a built-in FTP File Manager that you can access in our Hosting Control Center.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4A" aria-expanded="false" aria-controls="faq-collapse4A">
                                    <span class="text-body fs-16 fw-bold">What Payment method do you accept?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse4A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We accept payment through Bangladeshi's Top payment gateway <b>SSLCommerz</b> which support all the major channels.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse8A" aria-expanded="false" aria-controls="faq-collapse8A">
                                    <span class="text-body fs-16 fw-bold">If I already have a website, can I transfer it to your web hosting?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse8A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Moving your website to EyHost is a simple process. If you have access to your existing website files, you can upload them through our Hosting Control Center or via an FTP client. If you don’t have a current copy of your website, you should be able to request one from your current website hosting provider.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse5A" aria-expanded="false" aria-controls="faq-collapse5A">
                                    <span class="text-body fs-16 fw-bold">Do I need technical knowledge to use web hosting?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse5A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We’ve made our web hosting services accessible for everyone. We’ve designed our control panel so that it is easy to manage your domains and web hosting in one place. The FTP feature of our web hosting services makes it simple to upload your website. If you’ve never used web hosting before, our support team are available on the phone and online to help you get started.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse6A" aria-expanded="false" aria-controls="faq-collapse6A">
                                    <span class="text-body fs-16 fw-bold">How do I know which Web hosting package is best for me?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse6A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">In order to choose a hosting package that will fit your needs, begin by thinking about the goals of your business. The biggest differentiators between hosting packages are the size of disk space, monthly data transfer, the number of mailboxes and tools such as open source applications and programming languages. After you determine how you plan to use your site and the amount of traffic you expect on your site, you'll be able to identify which package is best for your business.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse7A" aria-expanded="false" aria-controls="faq-collapse7A">
                                    <span class="text-body fs-16 fw-bold">Can I Upgrade/Downgrade My Hosting plan in future?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse7A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes, you can upgrdae or downgrade your hosting plan anytime you want.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /FAQ  -->


    <?php include('./components/footer.php') ?>
</body>

</html>