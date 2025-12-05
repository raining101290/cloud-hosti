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
    <!--title-->
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

<body>

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            <img class="mb-2" src="assets/images/cloudhosti-logo.png" alt="CloudHosti logo" height="41px">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <?php include('./components/header.php') ?>

    <!-- Hero -->
    <section class="hero-1 pb-32 bg-gradient-primary position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 mb-2" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="w-2 h-2 rounded-circle bg-success"></div>
                        <small class="text-success fw-bold">Domain Management Panel</small>
                    </div>
                    <h1 class="text-white mb-2" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Every Website
                        Needs a Great Name!
                    </h1>
                    <p class="text-white max-text-52 fw-semibold mb-8" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Powerful Bare Metal Servers at low prices, so you can do more for less.
                        
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative z-1">
                        <div class="hero-1__map">
                            <img class="img-fluid hero-1__map-img" src="assets/img/shape/hero-map.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Domain -->
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

    <!-- Why -->
    <section class="bg-white pt-120 pb-120 position-relative z-1">
        <img src="assets/img/shape/domain-6-shape.png" alt="image" class="img-fluid position-absolute start-0 bottom-0 z-n1">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-xxl-5">
                    <h2 class="h3 mb-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Why Choose CloudHosti for your Domain Name Registar?</h2>
                    <p class="mb-8 fw-semibold max-text-44" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">We are confident that we can Provide the best Domain Name
                        Services
                        for our customers!</p>
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
                            <div class="hover-shadow bg-white px-5 py-8 rounded-3 border border-secondary transition">
                                <div class="d-flex align-items-center justify-content-between gap-6 mb-6">
                                    <h6 class="mb-0">Vast Selection of
                                        Domain Names!</h6>
                                    <img src="assets/img/domain-icon-1.png" alt="icon" class="img-fluid">
                                </div>
                                <p class="mb-0">We offer a large number of supported domain extensions, can match the demand
                                    of every customer competitive prices!</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                            <div class="hover-shadow bg-white px-5 py-8 rounded-3 border border-secondary transition">
                                <div class="d-flex align-items-center justify-content-between gap-6 mb-6">
                                    <h6 class="mb-0">Continue Domain Notifications</h6>
                                    <img src="assets/img/domain-icon-2.png" alt="icon" class="img-fluid">
                                </div>
                                <p class="mb-0">We offer a large number of supported domain extensions, can match the demand
                                    of every customer competitive prices!</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="hover-shadow bg-white px-5 py-8 rounded-3 border border-secondary transition">
                                <div class="d-flex align-items-center justify-content-between gap-6 mb-6">
                                    <h6 class="mb-0">Carefree Renewal with
                                        flat Pricing</h6>
                                    <img src="assets/img/domain-icon-3.png" alt="icon" class="img-fluid">
                                </div>
                                <p class="mb-0">We offer a large number of supported domain extensions, can match the demand
                                    of every customer competitive prices!</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="600" data-sal-easing="ease-in-out-sine">
                            <div class="hover-shadow bg-white px-5 py-8 rounded-3 border border-secondary transition">
                                <div class="d-flex align-items-center justify-content-between gap-6 mb-6">
                                    <h6 class="mb-0">24/7/365 Domain Name Support</h6>
                                    <img src="assets/img/domain-icon-2.png" alt="icon" class="img-fluid">
                                </div>
                                <p class="mb-0">We offer a large number of supported domain extensions, can match the demand
                                    of every customer competitive prices!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why -->

    <!-- Domain -->
    <section class="domain-3-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="bg-white p-8 shadow-lg">
                        <h5 class="mb-5">Free Domain Name With a Web
                            Hosting Plans*</h5>
                        <p class="fw-medium mb-6">Experience our high-speed web hosting, with 24/7
                            a novice or a thriving e-commerce enterprise, our hosting solutions are tailored to you!"</p>
                        <!-- <a href="price.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-medium btn-arrow">
                            <span class="d-inline-block btn-arrow__text">
                                Explore Hosting Plans
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Domain List -->
    <section class="pt-120 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7">
                    <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h2 class="mb-5">Choose from the Most Popular
                            Domain Extensions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white px-8 py-10 shadow rounded-3" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <form action="#" class="domain-list-form">
                            <div class="row align-items-center g-4">
                                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-7">
                                    <div class="position-relative">
                                        <input type="text" class="form-control bg-transparent py-2 px-8" placeholder="Search Extensions">
                                        <span class="text-body position-absolute start-3 mb-1 top-3"><i class="las la-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                        <select class="border-0 bg-transparent px-1 py-2">
                                            <option value=".net">.net</option>
                                            <option value=".net">.net</option>
                                            <option value=".org">.org</option>
                                        </select>
                                        <button class="btn btn-primary rounded-2 fw-bold" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive mt-6">
                            <table class="table table-borderless domain-list-table mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="h6 mb-0 fs-16">Extension</div>
                                        </th>
                                        <th>
                                            <div class="h6 mb-0 fs-16">Registration</div>
                                        </th>
                                        <th>
                                            <div class="h6 mb-0 fs-16">Renewal</div>
                                        </th>
                                        <th>
                                            <div class="h6 mb-0 fs-16">Transfer</div>
                                        </th>
                                        <th>
                                            <div class="h6 mb-0 fs-16">ID Protection</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.accountant</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.actor</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.adult</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.ae</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.agency</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.ae</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.agency</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.asia</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.ae</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">.agency</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                        <th class="shadow-none">
                                            <p class="text-body fw-semibold mb-0">$35.70</p>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="pt-40 pb-60">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 mb-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="w-2 h-2 rounded-circle bg-primary"></div>
                        <small class="text-primary fw-bold">Get In touch</small>
                    </div>
                    <h2 class="mb-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Questions About Domain Registration?</h2>
                    <p class="mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Contact one of our friendly technical advisors now. Our team is available live chat and is ready to answer any questions you may have.</p>
                    <a href="contact.html" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-semibold rounded transition" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="btn-arrow__text">
                            Live Chat
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/about-5.png" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Step With About -->
    <section class="about-section bg-white pt-120 pb-120 position-relative z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h2 class="mb-10">Get Your Business Online in 3 Easy Steps</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="step-item bg-white px-6 py-8 border rounded-3 position-relative">
                        <div class="step-badge bg-success">
                            <p class="mb-0 text-white">Step-01</p>
                        </div>
                        <img src="assets/img/step-icon-1.png" alt="icon" class="img-fluid mb-4">
                        <h6 class="mb-4">Select a Domain Name</h6>
                        <p class="mb-0">Contact one of our friendly technical advisors now. Our team is available live chat
                            and is ready to answer any questions you may have.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="step-item bg-white px-6 py-8 border rounded-3 position-relative">
                        <div class="step-badge bg-primary">
                            <p class="mb-0 text-white">Step-02</p>
                        </div>
                        <img src="assets/img/step-icon-2.png" alt="icon" class="img-fluid mb-4">
                        <h6 class="mb-4">Select Hosting Plan</h6>
                        <p class="mb-0">Contact one of our friendly technical advisors now. Our team is available live chat
                            and is ready to answer any questions you may have.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="step-item bg-white px-6 py-8 border rounded-3 position-relative">
                        <div class="step-badge bg-warning">
                            <p class="mb-0 text-white">Step-02</p>
                        </div>
                        <img src="assets/img/step-icon-1.png" alt="icon" class="img-fluid mb-4">
                        <h6 class="mb-4">Launch Your Website</h6>
                        <p class="mb-0">Contact one of our friendly technical advisors now. Our team is available live chat
                            and is ready to answer any questions you may have.</p>
                    </div>
                </div>
            </div>
            <div class="pt-120 pb-40">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <img src="assets/img/about-domain-1.png" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-inline-flex align-items-center gap-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="w-2 h-2 rounded-circle bg-primary"></div>
                            <small class="text-primary fw-bold">Transfer Domain</small>
                        </div>
                        <h2 class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Transfer Your Domain to CloudHosti</h2>
                        <p class="mb-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Contact one of our friendly technical advisors now. Our team
                            is available live chat
                            and is ready to answer any questions you may have.
                            <br> <br>
                            Do you already have a unique domain with another service provider? You can move it to with ease
                            by using our Smart Search and choosing the Transfer option. You don’t need to worry if your
                            domain names aren’t ready for renewal. You won’t lose any time you’ve already paid for.
                        </p>
                        <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <a href="domain-page.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-semibold btn-arrow">
                                <span class="d-inline-block btn-arrow__text">
                                    Transfer Your Domain
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="w-2 h-2 rounded-circle bg-primary"></div>
                        <small class="text-primary fw-bold">Transfer Domain</small>
                    </div>
                    <h2 class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Easy Domain Management Powered by CloudHosti</h2>
                    <p class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Contact one of our friendly technical advisors now. Our team is available live chat and
                        is ready to answer any questions you may have.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <li class="d-flex align-items-center gap-3">
                            <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i>
                            </div>
                            <p class="m-0">Manage domain name renewals.</p>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i>
                            </div>
                            <p class="m-0">Add our Whois Hero spam protection.</p>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                <i class="las la-check"></i>
                            </div>
                            <p class="m-0">Build your very own website</p>
                        </li>
                    </ul>
                    <p class="mb-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Do you already have a unique domain with another service
                        provider? You can move it
                        to with ease by using our Smart Search renewal. You won’t lose any time you’ve already paid for</p>
                    <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <a href="domain-page.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-semibold btn-arrow">
                            <span class="d-inline-block btn-arrow__text">
                                Register Domain
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/about-domain-2.png" alt="imgae" class="img-fluid" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                </div>
            </div>
        </div>
    </section>

    <!-- Faq -->
    <div class="container">
        <div class="faq-domain-wrapper bg-dark px-4 px-sm-10 py-16 position-relative z-1">
            <img src="assets/img/shape/faq-domain-shape.png" alt="image" class="img-fluid position-absolute top-0 start-0 z-n1">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <h2 class="text-white mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">FAQ About Domains</h2>
                    <p class="mb-0 text-white" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Control and more resources or for when you no longer want to be the
                        restrictions of a shared hosting account.
                    </p>
                    <a href="contact.html" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-semibold rounded transition mt-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="btn-arrow__text">
                            Contact Us
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-transparent d-flex flex-column" id="accordionFaqMain">
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-headingOne">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="true" aria-controls="faq-collapseOne">
                                    <span class="fs-16 fw-bold">What is Shared hosting?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq-headingOne" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-headingTwo">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="faq-collapseTwo">
                                    <span class="fs-16 fw-bold">How many websites can I host?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq-headingTwo" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-heading3">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3" aria-expanded="false" aria-controls="faq-collapse3">
                                    <span class="fs-16 fw-bold">Do you include SSL Certificates?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse3" class="accordion-collapse collapse" aria-labelledby="faq-heading3" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-heading4">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4" aria-expanded="false" aria-controls="faq-collapse4">
                                    <span class="fs-16 fw-bold">How to manage Redirects in cPanel?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse4" class="accordion-collapse collapse" aria-labelledby="faq-heading4" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-heading5">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse5" aria-expanded="false" aria-controls="faq-collapse5">
                                    <span class="fs-16 fw-bold">ow to use the Track Delivery feature in the
                                        cPanel?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse5" class="accordion-collapse collapse" aria-labelledby="faq-heading5" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header" id="faq-heading6">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse6" aria-expanded="false" aria-controls="faq-collapse6">
                                    <span class="fs-16 fw-bold">ow to use the Track Delivery feature in the
                                        cPanel?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse6" class="accordion-collapse collapse" aria-labelledby="faq-heading6" data-bs-parent="#accordionFaqMain">
                                <div class="accordion-body">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add
                                    to your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your
                                    site — this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <section class="pt-120 pb-120">
        <div class="pb-60">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-md-6 col-xl-5">
                        <h2 class="mb-0" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Stay on Top with Our Resource Hub!
                        </h2>
                    </div>
                    <div class="col-md-6 col-xl-5 col-xxl-4">
                        <p data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Whether you run an e-commerce site or a web business you want to attract as many visitors as
                            possible to your website & theme is no easy task. 
                        </p>
                        <a href="blog-listing.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-semibold btn-arrow" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <span class="d-inline-block btn-arrow__text">
                                Explore News
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card rounded-3 h-100">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="blog-details.html" class="d-block text-decoration-none">
                                <img src="assets/img/blog-img-1.jpg" alt="image" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-1 align-items-center mb-2">
                                <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-calendar-alt"></i>
                                </span>
                                <span class="d-block fs-14">
                                    Feb 18, 20223
                                </span>
                            </div>
                            <h6 class="mb-4">
                                <a href="blog-details.html" class="text-decoration-none text-dark hover:text-primary">
                                    What is cPanel? Complete Guide To Master The Control Panel
                                </a>
                            </h6>
                            <p class="mb-0 tt-line-clamp tt-clamp-2">
                                With over two decades of experience in high secure web hosting journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="700" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="card rounded-3 h-100">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="blog-details.html" class="d-block text-decoration-none">
                                <img src="assets/img/blog-img-2.jpg" alt="image" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-1 align-items-center mb-2">
                                <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-calendar-alt"></i>
                                </span>
                                <span class="d-block fs-14">
                                    Feb 18, 20223
                                </span>
                            </div>
                            <h6 class="mb-4">
                                <a href="blog-details.html" class="text-decoration-none text-dark hover:text-primary">
                                    What is cPanel? Complete Guide To Master The Control Panel
                                </a>
                            </h6>
                            <p class="mb-0 tt-line-clamp tt-clamp-2">
                                With over two decades of experience in high secure web hosting journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card rounded-3 h-100">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="blog-details.html" class="d-block text-decoration-none">
                                <img src="assets/img/blog-img-3.jpg" alt="image" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-1 align-items-center mb-2">
                                <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-calendar-alt"></i>
                                </span>
                                <span class="d-block fs-14">
                                    Feb 18, 20223
                                </span>
                            </div>
                            <h6 class="mb-4">
                                <a href="blog-details.html" class="text-decoration-none text-dark hover:text-primary">
                                    What is cPanel? Complete Guide To Master The Control Panel
                                </a>
                            </h6>
                            <p class="mb-0 tt-line-clamp tt-clamp-2">
                                With over two decades of experience in high secure web hosting journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <div class="footer-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-primary pt-60 pb-60 px-6 px-md-12 rounded-3 overflow-hidden position-relative z-1 text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-xl-7 col-xxl-6">
                                <h4 class="text-white mb-4">
                                    Experience Our Service with a
                                    7-Day Risk-Free Trial
                                </h4>
                                <a href="contact.php" class="btn btn-light btn-arrow btn-arrow-xl btn-lg fs-14 fw-semibold rounded">
                                    <span class="btn-arrow__text">
                                        Sign up - Free Trial
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <img src="assets/img/footer-cta-left.png" alt="image" class="img-fluid d-none d-md-block position-absolute top-0 start-0 z-n1 opacity-75">
                        <img src="assets/img/footer-cta-right.png" alt="image" class="img-fluid d-none d-md-block position-absolute end-0 top-0 z-n1 opacity-75">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Footer CTA -->

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
                                ✔ ${domain} is available <a class="btn btn-sm btn-success" href="https://portal.cloudhosti.com/cart.php?a=add&domain=register&query=${domain}&promocode=20OFF">Buy Now</a>
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