<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'helper/utils.php';
include 'includes/meta.php';
include 'includes/apis/domainPricing.php';
include 'includes/apis/productPricing.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$meta = getMetaData($currentPage);


$cacheFile = __DIR__ . "/cache/domainPricing.json";

if (file_exists($cacheFile)) {
    $tlds = json_decode(file_get_contents($cacheFile), true);
} else {
    $tlds = [];
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--title-->
    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="author" content="Cloud Hosti">
    <meta name="keywords" content="">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">
    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- endbuild -->
</head>

<body class="bg-secondary">
    <!--preloader start-->
    <div class="preloader bg-light-subtle">
      <div class="preloader-wrap">
        <img src="assets/images/cloudhosti-logo.png" alt="Cloud Hosti logo" height="61px">
        <div class="loading-bar"></div>
      </div>
    </div>
    <!--preloader end-->    
    <?php include('./components/header.php') ?>
    
    <!-- Hero -->
    <section class="hero-1 pb-32 bg-gradient-primary position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="fs-14 text-white">
                        <div class="d-flex align-items-center gap-3" data-sal="fade" data-sal-duration="300"
                            data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <span><img src="assets/img/shape/bage-1.png" alt=""></span>
                            <span>
                                Don't miss limited-time savings: <span class="text-warning">Savings 10%</span>
                            </span>
                        </div>
                    </div>
                    <h1 class="text-white mt-1" data-sal="fade" data-sal-duration="300" data-sal-delay="300"
                        data-sal-easing="ease-in-out-sine">Fast
                        <span class="text-warning d-inline-block">.</span>
                        Secure
                        <span class="text-warning d-inline-block">.</span>
                        Stable
                        <span class="text-warning d-inline-block">.</span>
                        
                        Web Hosting
                    </h1>
                    <p class="text-white mt-5 max-text-68 mb-8" data-sal="fade" data-sal-duration="300" data-sal-delay="300"
                        data-sal-easing="ease-in-out-sine">Save time & money with simple and reliable cloud
                        hosting trusted by <span class="text-success">3,000+ Customers,</span>  that demand high performance from their websites!</p>
                </div>
                <div class="col-xl-5">
                    <div class="position-relative z-1">
                        <div class="hero-1__map">
                            <img class="img-fluid hero-1__map-img" src="assets/img/shape/hero-map.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="domain-container position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card rounded-4 glass-box">
                        <div class="card-body pt-60 pb-60">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="text-center h4 text-white" data-sal="slide-up" data-sal-duration="300"
                                        data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                        Find the Right Plan & Register a Domain Now!</h2>
                                    <form id="domainSearchForm" class="domain-form-one mx-auto position-relative mt-8">
                                        <input name="domain-name" type="text" class="form-control p-4 domain-name"
                                            placeholder="Domain Name">
                                        <div class="domain-submit-box d-flex align-items-center gap-3 position-absolute">
                                            <select id="extSelect" class="tld-dropdown form-control">
                                                <option value=".com">.com</option>
                                                <option value=".net">.net</option>
                                                <option value=".org">.org</option>
                                                <option value=".info">.info</option>
                                                <option value=".biz">.biz</option>
                                                <option value=".me">.me</option>
                                                <option value=".xyz">.xyz</option>
                                            </select>
                                            <button class="btn btn-primary rounded-2 fw-bold" type="submit">Search</button>
                                        </div>
                                        <div id="domainResult" class="mt-4"></div>
                                    </form>

                                    <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap flex-xl-nowrap mt-6">
                                        <?php foreach ($featuredTLDs as $tld => $color): ?>
                                            <?php 
                                                $oldPrice = $tlds[$tld]['register'][1] ?? null; 
                                                $newPrice = $discounts[$tld] ?? $oldPrice;
                                                if (!$oldPrice) continue;
                                            ?>
                                            
                                            <button type="button"
                                                class="btn btn-sm btn-light d-inline-flex align-items-center gap-2 border border-gray-100">

                                                <span class="h6 mb-1 <?= $color ?> d-inline-block">.<?= $tld ?></span>
                                                <?php if ($newPrice < $oldPrice): ?>
                                                    <small class="fw-medium d-inline-block">
                                                        <s class="text-danger">$<?= number_format($oldPrice, 2) ?></s>
                                                        <span class="text-success fw-bold">$<?= number_format($newPrice, 2) ?></span>/Year
                                                    </small>
                                                <?php else: ?>
                                                    <small class="fw-medium d-inline-block">
                                                        $<?= number_format($oldPrice, 2) ?>/Year
                                                    </small>
                                                <?php endif; ?>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="pt-120 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <p class="mb-6 fw-semibold text-center" data-sal="slide-up" data-sal-duration="300"
                        data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        See how over 7,700+ Customers <a href="#" class="text-decoration-none">Help the world work</a>
                    </p>
                    <div class="d-flex justify-content-center align-items-center gap-6 flex-wrap flex-lg-nowrap">
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-1.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-3.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-2.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="600"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-3.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="700"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-4.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                        <a href="#" class="d-inline-block" data-sal="slide-up" data-sal-duration="300" data-sal-delay="800"
                            data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/brand-2.png" alt="image"
                                class="img-fluid transition opacity-50 brand-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Service -->
    <section class="service-area pt-60">
        <div class="pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <h2 class="mb-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Checkout All of Best Services that We Provide for You</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <?php foreach ($products as $product): ?>
                    <?php
                        if ($product['type'] === 'server') {
                            continue;
                        }
                        $price = $product['pricing']['USD']['annually']/12;
                        $formattedPrice = ($price > 0) ? "$" . $price . " /month" : "Contact Us";
                    ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card service-card-item shadow-sm rounded-3 h-100 price-card-item-one" data-sal="slide-up"
                            data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                            <div class="card-body px-md-7 py-md-8">
                                <h6><?= htmlspecialchars($product['name']) ?></h6>
                                <div class="d-flex gap-5 flex-wrap flex-sm-nowrap mt-6">
                                    <div>
                                        <img src="assets/img/service-icon-2.png" alt="">
                                    </div>
                                    <div>
                                        <p><?= nl2br(htmlspecialchars(strip_tags
                                        ($product['description']))) ?></p>

                                        <div class="monthly-price">
                                            <span>Starting at: </span>
                                            <h4><?= $formattedPrice ?></h4>
                                        </div>
                                        <!-- <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                                class="text-primary fw-bold"><?= $formattedPrice ?></span>
                                        </h6> -->

                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="<?= htmlspecialchars($product['product_url']) ?>">
                                            <span class="btn-arrow__text">
                                                Buy Now
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <!-- <div class="col-lg-6 col-xl-4">
                    <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up"
                        data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                        <div class="card-body px-md-7 py-md-8">
                            <h6>WordPress Hosting</h6>
                            <div class="d-flex gap-5 flex-wrap flex-sm-nowrap mt-6">
                                <div>
                                    <img src="assets/img/service-icon-1.png" alt="">
                                </div>
                                <div>
                                    <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                        websitesoptimized servers</p>
                                    <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                            class="text-primary fw-bold">$20.00/mo</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up"
                        data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                        <div class="card-body px-md-7 py-md-8">
                            <h6>Shared Hosting</h6>
                            <div class="d-flex gap-5 flex-wrap flex-sm-nowrap mt-6">
                                <div>
                                    <img src="assets/img/service-icon-2.png" alt="">
                                </div>
                                <div>
                                    <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                        websites optimized</p>
                                    <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                            class="text-primary fw-bold">$20.00/mo</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up"
                        data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="card-body px-md-7 py-md-8">
                            <h6>Cloud Servers</h6>
                            <div class="d-flex flex-wrap flex-sm-nowrap gap-5 mt-6">
                                <div>
                                    <img src="assets/img/service-icon-3.png" alt="">
                                </div>
                                <div>
                                    <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                        websites optimized</p>
                                    <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                            class="text-primary fw-bold">$20.00/mo</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up"
                        data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                        <div class="card-body px-md-7 py-md-8">
                            <div class="row align-items-center g-4">
                                <div class="col-md-4">
                                    <img src="assets/img/service-img.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h6>Free 24/7 Support </h6>
                                    <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                        websitesoptimized servers</p>
                                    <a href="contact.php" class="btn btn-primary btn-arrow btn-arrow-sm fs-14 fw-medium rounded">
                                        <span class="btn-arrow__text">
                                            Live Chat
                                            <span class="btn-arrow__icon">
                                                <i class="las la-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up"
                        data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="card-body px-md-7 py-md-8">
                            <h6>Virtual Private Service</h6>
                            <div class="d-flex flex-wrap flex-sm-nowrap gap-5 mt-6">
                                <div>
                                    <img src="assets/img/service-icon-4.png" alt="">
                                </div>
                                <div>
                                    <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                        websitesoptimized servers</p>
                                    <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                            class="text-primary fw-bold">$20.00/mo</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section><!-- Service -->
    
    <!-- Price -->
    <section class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center">
                            <h2 data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine"> Webhosting Plan for Your Site</h2>
                            <p class="mb-0 max-text-56 mx-auto" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">SSL is industry-standard encryption! Protect important data,
                                win visitors Pick a
                                plan from the SSL certificates below.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mt-5" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <small class="fw-semibold">Monthly</small>
                            <div class="form-check form-switch toggle-switch">
                                <input class="form-check-input pricing-toggle" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                            </div>
                            <small class="fw-semibold">Yearly</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 g-xl-0">
                <div class="col-xl-3 col-md-6">
                    <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="350" data-sal-delay="50" data-sal-easing="ease-in-out-sine">
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
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Standard  <span class="fw-bold">Performance</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 <span class="fw-bold">Websites</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
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
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Standard  <span class="fw-bold">Performance</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 <span class="fw-bold">Websites</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
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
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Standard  <span class="fw-bold">Performance</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 <span class="fw-bold">Websites</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Warranty <span class="fw-bold"> 10,000</span></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="price-card-item-one bg-white px-7 py-9" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
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
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Standard  <span class="fw-bold">Performance</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 <span class="fw-bold">Websites</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div
                                        class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
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
        <div class="pt-40">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                        <h6>Free Setup & Installation*</h6>
                        <p>Need help? We will set up and install your SSL
                            certificate free of charge!*</p>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                        <h6>Best in Class Encryption</h6>
                        <p>Need help? We will set up and install your SSL
                            certificate free of charge!*</p>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h6>24x7 Support</h6>
                        <p>Need help? We will set up and install your SSL
                            certificate free of charge!*</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Price -->
    
    <!-- Why -->
    <section class="why-area-one bg-dark pt-120 pb-120 position-relative z-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7">
                    <h2 class="text-white" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Why Choose CloudHosti for Your Hosting Needs?</h2>
                </div>
                <div class="col-xl-4">
                    <p class="text-white" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">SSL is industry-standard encryption! Protect important data, win visitors Pick a
                        plan from the SSL certificate</p>
                </div>
            </div>
            <div class="mt-8">
                <div class="row g-4">
                    <div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="why-card px-6 py-9 rounded-3 transition">
                            <img src="assets/img/why-icon-1.png" alt="image" class="img-fluid">
                            <img src="assets/img/why-icon-1-dark.png" alt="image" class="img-fluid dark">
                            <h6 class="text-white mt-7">Up To 20x
                                Faster Turbo</h6>
                            <p class="text-white text-opacity-75 mb-0">WordPress Hosting provides a specialized environt tailored to
                                the needs of WordPress websites With optimized servers. </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="why-card px-6 py-9 rounded-3 transition">
                            <img src="assets/img/why-icon-2.png" alt="image" class="img-fluid">
                            <img src="assets/img/why-icon-2-dark.png" alt="image" class="img-fluid dark">
                            <h6 class="text-white mt-7">Free Website
                                Migration</h6>
                            <p class="text-white text-opacity-75 mb-0">WordPress Hosting provides a specialized environt tailored to
                                the needs of WordPress websites With optimized servers. </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                        <div class="why-card px-6 py-9 rounded-3 transition">
                            <img src="assets/img/why-icon-3.png" alt="image" class="img-fluid">
                            <img src="assets/img/why-icon-3-dark.png" alt="image" class="img-fluid dark">
                            <h6 class="text-white mt-7">High
                                Server Security</h6>
                            <p class="text-white text-opacity-75 mb-0">WordPress Hosting provides a specialized environt tailored to
                                the needs of WordPress websites With optimized servers. </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="why-card px-6 py-9 rounded-3 transition">
                            <img src="assets/img/why-icon-4.png" alt="image" class="img-fluid">
                            <img src="assets/img/why-icon-4-dark.png" alt="image" class="img-fluid dark">
                            <h6 class="text-white mt-7">Money-Back
                                Guarantee </h6>
                            <p class="text-white text-opacity-75 mb-0">WordPress Hosting provides a specialized environt tailored to
                                the needs of WordPress websites With optimized servers. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="why-service-item text-center position-relative" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h5 class="text-white mb-3"><span class="counter">99.9</span>% Uptime</h5>
                            <p class="text-white text-opacity-75">Globally distributed <br>
                                Datacenters</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-service-item text-center position-relative" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h5 class="text-white mb-3"><span class="counter">6</span> Data Centers</h5>
                            <p class="text-white text-opacity-75">Uptime SLA for Droplets & <br>
                                Volumes block storage</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-service-item last text-center position-relative" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                            <h5 class="text-white mb-3"><span class="counter">250</span>k VMs</h5>
                            <p class="text-white text-opacity-75">Customers building with <br>
                                CloudHosti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Why -->
    
    <!-- Video -->
    <section class="video-area-one pt-120 pb-60 position-relative z-0">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center">
                            <h2 class="text-white mb-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                                data-sal-easing="ease-in-out-sine">CloudHosti is the Industry’s Best Hosting Solution
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="bg-white p-3 shadow-lg rounded position-relative" data-sal="slide-up"
                        data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <img src="assets/img/video-bg.png" alt="" class="img-fluid w-100">
                        <a href="https://www.youtube.com/watch?v=eoY1Mc70uTo" class="video-btn popup-init position-absolute top-50 start-50 translate-middle">
                            <span
                                class="w-16 h-16 rounded-circle d-flex align-items-center justify-content-center bg-primary">
                                <span class="text-white fs-5">
                                    <i class="las la-play"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Video -->
    
    <!-- Feedback -->
    <section class="pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">We Love our Customers & They Love us too</h2>
                </div>
            </div>
            <div class="mt-8 position-relative" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                <div class="feedback-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white p-7 shadow-sm rounded-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                    <img src="assets/img/feedback-brand-1.png" alt="iamge" class="img-fluid">
                                    <img src="assets/img/shape/feedback-quate.png" alt="iamge" class="img-fluid">
                                </div>
                                <h6 class="mt-5">The Most Creative Designer 
                                    Highly Recommended.</h6>
                                <p class="mt-3">The best thing we love about CloudHosti is it does two way sync with Google Apps. It has helped us to better organize  everything on track.</p>
                                <div class="d-flex align-items-center gap-4 mt-7">
                                    <img src="assets/img/user-img-1.png" alt="image" class="img-fluid">
                                    <div>
                                        <h6 class="fs-16 mb-0">Lola Ross</h6>
                                        <small>Digital Marketing Director</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-7 shadow-sm rounded-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                    <img src="assets/img/feedback-brand-2.png" alt="iamge" class="img-fluid">
                                    <img src="assets/img/shape/feedback-quate.png" alt="iamge" class="img-fluid">
                                </div>
                                <h6 class="mt-5">The Most Creative Designer 
                                    Highly Recommended.</h6>
                                <p class="mt-3">The best thing we love about CloudHosti is it does two way sync with Google Apps. It has helped us to better organize  everything on track.</p>
                                <div class="d-flex align-items-center gap-4 mt-7">
                                    <img src="assets/img/user-img-3.png" alt="image" class="img-fluid">
                                    <div>
                                        <h6 class="fs-16 mb-0">Lola Ross</h6>
                                        <small>Digital Marketing Director</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-7 shadow-sm rounded-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                    <img src="assets/img/feedback-brand-3.png" alt="iamge" class="img-fluid">
                                    <img src="assets/img/shape/feedback-quate.png" alt="iamge" class="img-fluid">
                                </div>
                                <h6 class="mt-5">The Most Creative Designer 
                                    Highly Recommended.</h6>
                                <p class="mt-3">The best thing we love about CloudHosti is it does two way sync with Google Apps. It has helped us to better organize  everything on track.</p>
                                <div class="d-flex align-items-center gap-4 mt-7">
                                    <img src="assets/img/user-img-4.png" alt="image" class="img-fluid">
                                    <div>
                                        <h6 class="fs-16 mb-0">Lola Ross</h6>
                                        <small>Digital Marketing Director</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-7 shadow-sm rounded-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                    <img src="assets/img/feedback-brand-3.png" alt="iamge" class="img-fluid">
                                    <img src="assets/img/shape/feedback-quate.png" alt="iamge" class="img-fluid">
                                </div>
                                <h6 class="mt-5">The Most Creative Designer 
                                    Highly Recommended.</h6>
                                <p class="mt-3">The best thing we love about CloudHosti is it does two way sync with Google Apps. It has helped us to better organize  everything on track.</p>
                                <div class="d-flex align-items-center gap-4 mt-7">
                                    <img src="assets/img/user-img-5.png" alt="image" class="img-fluid">
                                    <div>
                                        <h6 class="fs-16 mb-0">Lola Ross</h6>
                                        <small>Digital Marketing Director</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-navs d-flex align-items-center justify-content-between position-relative w-100 z-2 d-none d-md-flex">
                    <span class="feedback-button-next w-10 h-10 rounded-circle bg-dark d-flex align-items-center justify-content-center text-white"><i class="las la-arrow-right"></i></span>
                    <span class="feedback-button-prev w-10 h-10 rounded-circle bg-dark d-flex align-items-center justify-content-center text-white"><i class="las la-arrow-left"></i></span>
                </div>
            </div>
        </div>
    </section><!-- Feedback -->
    
    <!-- Wp Hosting -->
    <section class="pt-60 pb-60">
        <div class="container">
            <div class="row align-items-center g-6">
                <div class="col-lg-6">
                    <img src="assets/img/wp-hosting.png" alt="image" class="img-fluid" data-sal="slide-up"
                        data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                    data-sal-easing="ease-in-out-sine">
                    <span class="text-primary fw-semibold fs-16 mb-2">WordPress Hosting</span>
                    <h2 class="mb-6">Build your website with Optimized WordPress Hosting</h2>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3">
                            <div
                                class="w-4 h-4 bg-primary rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i></div>
                            <p class="fw-medium mb-0">Dedicated WordPress support team.</p>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div
                                class="w-4 h-4 bg-primary rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i></div>
                            <p class="fw-medium mb-0">WordPress optimized servers performance.</p>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div
                                class="w-4 h-4 bg-primary rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i></div>
                            <p class="fw-medium mb-0">Manage up to 100 websites.</p>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center gap-5 flex-wrap mt-10">
                        <a href="wp-hosting.php" class="btn btn-primary btn-arrow btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                Get Started
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <div>
                            <p class="fs-14 mb-0">Starting at:</p>
                            <h4>$24.09 <span class="fs-16">/mo</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Wp Hosting -->
    
    <!-- Blog -->
    <section class="bg-dark pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xxl-5 col-xl-7">
                        <div class="px-3 py-1 border border-primary rounded d-inline-flex align-items-center gap-2 mb-3"
                            data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <div class="w-2 h-2 rounded-circle bg-primary"></div>
                            <small class="text-primary fw-bold">News & Articles</small>
                        </div>
                        <h2 class="text-white mb-0">News & Views From
                            CloudHosti Blog</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-xl-end" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <a href="blog-listing.php" class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    See More Articles
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7" data-sal="fade" data-sal-duration="300" data-sal-delay="300"
                    data-sal-easing="ease-in-out-sine">
                    <div class="single-blog-post">
                        <img src="assets/img/blog-1.png" alt="image" class="img-fluid w-100">
                        <div class="blog-post-content px-6 px-md-8 py-9">
                            <div class="d-flex flex-wrap align-items-center gap-2 gap-md-4 mb-3">
                                <div class="d-flex align-items-center gap-1 lh-1">
                                    <span class="text-white fs-20"><i class="las la-calendar"></i></span>
                                    <p class="text-white fs-14 fw-medium mb-0">Feb 18, 20223</p>
                                </div>
                                <div class="d-flex align-items-center gap-1 lh-1">
                                    <span class="text-white fs-20"><i class="las la-edit"></i></span>
                                    <p class="text-white fs-14 fw-medium mb-0">Saiful Talukdar</p>
                                </div>
                            </div>
                            <h5 class="mb-6">
                                <a href="blog-details.php"
                                    class="text-decoration-none text-white hover:text-primary transition">
                                    WordPress 6.4 Release Updates Unleashing
                                    The Potential for Innovation
                                </a>
                            </h5>
                            <a href="blog-details.php"
                                class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-semibold btn-arrow">
                                <span class="d-inline-block btn-arrow__text">
                                    Read More
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-12" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <div
                                class="side-blog-item px-6 py-7 d-flex align-items-center justify-content-between gap-5 rounded-3 transition">
                                <div>
                                    <a href="blog-listing.php"
                                        class="d-flex align-items-center gap-2 text-decoration-none mb-1">
                                        <span class="text-white text-opacity-75 fs-20"><i class="las la-edit"></i></span>
                                        <span class="d-inline-block text-white text-opacity-75 fs-14 fw-medium mb-0">Saiful
                                            Talukdar</span>
                                    </a>
                                    <h6 class="text-white mb-4">
                                        <a href="blog-details.php"
                                            class="d-inline-block text-decoration-none text-white hover:text-primary transition max-text-28">
                                            Traditional Real Estate Marketing Holds Firm Despite
                                            Pandemic.
                                        </a>
                                    </h6>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="text-white text-opacity-75 fs-20"><i
                                                class="las la-calendar"></i></span>
                                        <p class="text-white text-opacity-75 fs-14 fw-medium mb-0">Feb 18, 20223</p>
                                    </div>
                                </div>
                                <a href="blog-details.php"
                                    class="arrow-btn d-grid place-content-center w-8 h-8 rounded-circle border border-secondary flex-shrink-0 transition opacity-25">
                                    <span class="text-secondary fs-16 d-inline-block"><i
                                            class="las la-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400"
                            data-sal-easing="ease-in-out-sine">
                            <div
                                class="side-blog-item px-6 py-7 d-flex align-items-center justify-content-between gap-5 rounded-3 transition">
                                <div>
                                    <a href="blog-listing.php"
                                        class="d-flex align-items-center gap-2 text-decoration-none mb-1">
                                        <span class="text-white text-opacity-75 fs-20"><i class="las la-edit"></i></span>
                                        <span class="d-inline-block text-white text-opacity-75 fs-14 fw-medium mb-0">Saiful
                                            Talukdar</span>
                                    </a>
                                    <h6 class="text-white mb-4">
                                        <a href="blog-details.php"
                                            class="d-inline-block text-decoration-none text-white hover:text-primary transition max-text-28">
                                            What is cPanel? Complete Guide To Master The Control Panel
                                        </a>
                                    </h6>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="text-white text-opacity-75 fs-20"><i
                                                class="las la-calendar"></i></span>
                                        <p class="text-white text-opacity-75 fs-14 fw-medium mb-0">Feb 18, 20223</p>
                                    </div>
                                </div>
                                <a href="blog-details.php"
                                    class="arrow-btn d-grid place-content-center w-8 h-8 rounded-circle border border-secondary flex-shrink-0 transition opacity-25">
                                    <span class="text-secondary fs-16 d-inline-block"><i
                                            class="las la-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <div
                                class="side-blog-item px-6 py-7 d-flex align-items-center justify-content-between gap-5 rounded-3 transition">
                                <div>
                                    <a href="blog-listing.php"
                                        class="d-flex align-items-center gap-2 text-decoration-none mb-1">
                                        <span class="text-white text-opacity-75 fs-20"><i class="las la-edit"></i></span>
                                        <span class="d-inline-block text-white text-opacity-75 fs-14 fw-medium mb-0">Saiful
                                            Talukdar</span>
                                    </a>
                                    <h6 class="text-white mb-4">
                                        <a href="blog-details.php"
                                            class="d-inline-block text-decoration-none text-white hover:text-primary transition max-text-28">
                                            Color Palettes 2024 Best Styles To Shade Your Websites
                                        </a>
                                    </h6>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="text-white text-opacity-75 fs-20"><i
                                                class="las la-calendar"></i></span>
                                        <p class="text-white text-opacity-75 fs-14 fw-medium mb-0">Feb 18, 20223</p>
                                    </div>
                                </div>
                                <a href="blog-details.php"
                                    class="arrow-btn d-grid place-content-center w-8 h-8 rounded-circle border border-secondary flex-shrink-0 transition opacity-25">
                                    <span class="text-secondary fs-16 d-inline-block"><i
                                            class="las la-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Blog -->
    
    <!-- Cta -->
    <section class="mt-n10">
        <div class="container">
            <div class="cta-wrapper-one pt-60 pb-60 px-6 rounded-3">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-9">
                        <div class="d-flex justify-content-center" data-sal="slide-up" data-sal-duration="300"
                            data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="px-3 py-1 border border-primary rounded d-inline-flex align-items-center gap-2">
                                <div class="w-2 h-2 rounded-circle bg-primary"></div>
                                <small class="text-primary fw-bold">Migrate Your Website</small>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <h2 class="mb-5" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                                data-sal-easing="ease-in-out-sine">Migrate your Website for Free</h2>
                            <p class="mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                                data-sal-easing="ease-in-out-sine">We’ll take care of the process of moving your website
                                from your old web hosting company to our platform so you can focus on what matters. </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap flex-md-nowrap"
                            data-sal="slide-up" data-sal-duration="300" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            <a href="contact.php" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    Start Now
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            <a href="contact.php" class="btn btn-dark btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    Learn More
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Cta -->
    
    <?php include('./components/footer.php') ?>
    <script>
        document.getElementById('domainSearchForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let domainInput = document.querySelector('.domain-name').value.trim();
            const selectedExt = document.getElementById('extSelect').value;
            const resultBox = document.getElementById('domainResult');
            if (!domainInput) {
                resultBox.innerHTML = `
                    <div class='alert alert-danger' role='alert'><p class="text-danger mb-0" style="font-weight:bold;">
                        Please enter a domain name.
                    </p></div>
                `;
                return;
            }

            // Check if user has provided a TLD manually
            const hasTLD = domainInput.includes(".") && !domainInput.endsWith(".");

            // Final domain to search
            const domain = hasTLD ? domainInput : domainInput + selectedExt;

            // const resultBox = document.getElementById('domainResult');
            resultBox.innerHTML = "<div class='alert alert-light' role='alert'><p class=' mb-0'>Checking domain availability...</p></div>";

            fetch("includes/apis/whoisLookup.php?domain=" + encodeURIComponent(domain))
                .then(res => res.json())
                .then(data => {

                    if (data.status === "available") {
                        resultBox.innerHTML = `
                             <div class='alert alert-success' role='alert'><p class="text-success mb-0 d-flex justify-content-between align-items-center" style="font-weight:bold;">
                                ✔ ${domain} is available <a class="btn btn-sm btn-success" href="https://portal.cloudhosti.com/cart.php?a=add&domain=register&query=${domain}">Buy Now</a>
                            </p></div>
                        `;
                    }
                    else if (data.status === "unavailable") {
                        resultBox.innerHTML = `
                            <div class='alert alert-danger' role='alert'><p class="text-danger mb-0" style="font-weight:bold;">
                               Sorry, ${domain} is taken.
                            </p></div>
                        `;
                    }
                    else if (data.status === "invalid") {
                        resultBox.innerHTML = `
                            <div class='alert alert-danger' role='alert'><p class="text-warning mb-0" style="font-weight:bold;">
                                Invalid domain format ⚠
                            </p></div>
                        `;
                    }
                    else {
                        resultBox.innerHTML = `
                            <div class='alert alert-danger' role='alert'><p class="text-white mb-0" style="font-weight:bold;">Unknown result 🤔</p></div>
                        `;
                    }
                })
                .catch(err => {
                    resultBox.innerHTML = `<div class='alert alert-danger' role='alert'><p class="text-danger mb-0">API Error: ${err}</p></div>`;
                });
        });
        </script>



</body>

</html>