<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'helper/utils.php';
include 'includes/meta.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$meta = getMetaData($currentPage);
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

    <!-- Hero 4 -->
    <section class="hero-4 position-relative z-1">
        <div class="container">
            <div class="row g-4 align-items-lg-center">
                <div class="col-lg-7 col-xl-6">
                    <small class="d-inline-block mb-2 fw-bold">
                        Cloud VPS <span class="text-primary">Up To 75% OFF</span>
                    </small>
                    <h1 class="mb-4">
                        Managed Virtual Private Server
                    </h1>
                    <p class="max-text-52 mb-6 fw-medium">
                        We offer high quality Virtual Private Servers with the best price-to-performance featuring NVMe
                        SSDs.
                    </p>
                    <p class="mb-8">
                        Starting <a href="#" class="text-decoration-none fw-bold">at $2.49 including</a>
                    </p>
                    <div class="hstack gap-4 flex-wrap">
                        <a href="contact.html" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                Get Started
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <a href="price.html" class="btn btn-dark btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                View All Plan
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <ul class="list-unstyled p-0 d-flex flex-xl-column align-items-center flex-wrap gap-3 mt-8 mt-xl-0 vertical-social-media">
                        <li>
                            <a href="#" class="text-decoration-none d-inline-block text-body hover:text-primary fs-24 transition">
                                <i class="lab la-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-inline-block text-body hover:text-primary fs-24 transition">
                                <i class="lab la-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-inline-block text-body hover:text-primary fs-24 transition">
                                <i class="lab la-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-inline-block text-body hover:text-primary fs-24 transition">
                                <i class="lab la-discord"></i>
                            </a>
                        </li>
                        <li>
                            <span
                                class="vertical-social-media__text d-inline-flex align-items-center gap-2 fw-semibold">Follow
                                on <span class="vertical-social-media__text-stroke"></span> </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <div class="text-center">
                        <img src="assets/img/hero-img-4.png" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero 4 -->

    <!-- Partner 3 -->
    <section class="partner-section-3 position-relative z-1 bg-dark overflow-hidden">
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="partner-section-3__container position-relative z-1 pt-80 pb-80">
                        <div class="row g-4">
                            <div class="col-xl-10">
                                <small class="d-block mb-2 fw-semibold text-white" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                    A Trusted Partner Since 2001
                                </small>
                                <h3 class="text-white max-text-24 mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                    Our Experience Web Hosting Business
                                </h3>
                                <div class="row g-4">
                                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                        <div class="why-service-item position-relative">
                                            <h5 class="text-white mb-3"><span class="counter">99.9</span>% Uptime</h5>
                                            <div class="w-12 h-1 bg-primary mb-4"></div>
                                            <p class="text-white fw-medium text-opacity-75">Globally distributed <br>
                                                Datacenters</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                                        <div class="why-service-item position-relative">
                                            <h5 class="text-white mb-3"><span class="counter">6</span> Data Centers</h5>
                                            <div class="w-12 h-1 bg-primary mb-4"></div>
                                            <p class="text-white fw-medium text-opacity-75">Uptime SLA for Droplets & <br>
                                                Volumes block storage</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                        <div class="why-service-item last position-relative">
                                            <h5 class="text-white mb-3"><span class="counter">250</span>k VMs</h5>
                                            <div class="w-12 h-1 bg-primary mb-4"></div>
                                            <p class="text-white fw-medium text-opacity-75">Customers building with <br>
                                                CloudHosti Hosting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <p class="mb-0 text-white fw-semibold partner-section-3__vertical-text">
                                    With Over a Decade of Experience <br> We're Prepared to Assist
                                </p>
                            </div>
                        </div>
                        <img src="assets/img/shape/round-arrow.png" alt="image" class="img-fluid partner-section-3__shape">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Partner 3 -->

    <!-- Why Choose Section -->
    <section class="pt-120 pb-120">
        <div class="pb-60">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/img/why-img-1.png" alt="image" class="img-fluid" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-xl-2">
                            <span class="d-block text-primary fs-18 fw-bold mb-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                Why Windows VPS?
                            </span>
                            <h2 class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                Empower Your Hosting Experience with Proactive Control
                            </h2>
                            <div class="w-12 h-1 bg-primary mb-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine"></div>
                            <p class="mb-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                With a Windows VPS (Virtual Private Server), you get your own operating system and server
                                environment dedicated to you, complete
                            </p>
                            <p class="mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                With a Windows VPS (Virtual Private Server), you get your own operating system and server
                                environment dedicated to you, complete
                            </p>
                            <a href="contact.html" class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <span class="btn-arrow__text">
                                    Talk to Specialist
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
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card">
                        <div class="card-body p-xl-8">
                            <div class="hstack gap-3 mb-4">
                                <span class="d-inline-block flex-shrink-0">
                                    <img src="assets/img/icon-hosting-info-1.png" alt="image" class="img-fluid">
                                </span>
                                <h6 class="mb-0 flex-grow-1">
                                    30-Day Guarantee
                                </h6>
                            </div>
                            <p class="mb-0">
                                CloudHosti is the strategic partner for your online journey you every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="card">
                        <div class="card-body p-xl-8">
                            <div class="hstack gap-3 mb-4">
                                <span class="d-inline-block flex-shrink-0">
                                    <img src="assets/img/icon-hosting-info-4.png" alt="image" class="img-fluid">
                                </span>
                                <h6 class="mb-0 flex-grow-1">
                                    MSSQL & ASP.NET
                                </h6>
                            </div>
                            <p class="mb-0">
                                CloudHosti is the strategic partner for your online journey you every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card">
                        <div class="card-body p-xl-8">
                            <div class="hstack gap-3 mb-4">
                                <span class="d-inline-block flex-shrink-0">
                                    <img src="assets/img/icon-hosting-info-5.png" alt="image" class="img-fluid">
                                </span>
                                <h6 class="mb-0 flex-grow-1">
                                    24x7 Pro Support
                                </h6>
                            </div>
                            <p class="mb-0">
                                CloudHosti is the strategic partner for your online journey you every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Why Choose Section -->

    <!-- price -->
    <section class="bg-dark pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="text-white">
                                Managed VPS Hosting Plans
                            </h2>
                            <p class="mb-0 text-white max-text-52 mx-auto text-opacity-75">
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
                <div class="col-12">
                    <div class="pricing-nav-pills d-block mx-auto border-bottom border-light border-opacity-25" data-sal="fade" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="partner-tab-nev d-inline-block text-decoration-none text-white fw-bold px-3 pb-2 active" href="#" data-bs-toggle="pill" data-bs-target="#linuxHostingA" aria-selected="true" role="tab">
                                    Linux VPS Hosting
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="partner-tab-nev d-inline-block text-decoration-none text-white fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#windowsHostingA" aria-selected="true" role="tab">
                                    Windows VPS Hosting
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="partner-tab-nev d-inline-block text-decoration-none text-white fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#cloudHostingA" aria-selected="true" role="tab">
                                    Cloud VPS Hosting
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade show active" id="linuxHostingA" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-hover table-vps-pricing table-vps-pricing--dark">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $4/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $12/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $16/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $20/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $50/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $90/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="windowsHostingA" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-hover table-vps-pricing table-vps-pricing--dark">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $4/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $12/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $16/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $20/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $50/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $90/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cloudHostingA" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-hover table-vps-pricing table-vps-pricing--dark">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $4/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $12/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $16/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $20/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $50/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="text-white max-text-24 text-wrap">
                                                    Hyperslice VPS SG1
                                                </h6>
                                                <p class="mb-0 fs-14 text-white max-text-40 text-wrap text-opacity-75">
                                                    CloudHosti is the strategic partner for your online journey.We are of the
                                                    way. you every step of the way.
                                                </p>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled p-0 m-0 gap-3">
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-microchip"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                8 CPU Cores
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="lab la-windows"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                300 GB NVMe Storage
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center gap-2 opacity-75">
                                                            <span class="d-inline-block flex-shrink-0 fs-20">
                                                                <i class="las la-server"></i>
                                                            </span>
                                                            <span class="d-inline-block fs-14">
                                                                Windows Server 2023
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-center">
                                                <h5 class="text-primary mb-4">
                                                    <span class="fw-normal fs-14 text-white">Starting at:</span> $90/mo
                                                </h5>
                                                <button type="button" class="btn btn-outline-light fs-14 fw-medium">Order
                                                    Now</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pt-32 text-center">
                        <a href="vps-server.html" class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                Need Custom VPS
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /price -->

    <!-- Partner  -->
    <section class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xxl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="mb-2">Our Technology Partners</h2>
                            <p class="mb-0 max-text-52 mx-auto">With over two decades of experience in high-quality,
                                secure web hosting CloudHosti Strategic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center border-bottom" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="pricing-nav-pills d-inline-block mx-auto border-bottom">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-body fw-bold px-3 pb-2 active" href="#" data-bs-toggle="pill" data-bs-target="#partner-1" aria-selected="true" role="tab">
                                        Operating System
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-body fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#partner-2" aria-selected="true" role="tab">
                                        Panels & Apps
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content mt-6" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="tab-pane fade show active" id="partner-1" role="tabpanel">
                            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 justify-content-center">
                                <div class="col">
                                    <div class="card shadow-sm h-100">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/opensuse.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Open Suse</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/webmin.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Webmin</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/docker.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Docker</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/proxmox.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Proxmox</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/cpanel.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Cpanel</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/rockylinux.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Rocky Linux</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/almalinux.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Alma Linux</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/debian.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Debian</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/freebsd.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Free BSD</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/ubuntu.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Ubuntu</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="partner-2" role="tabpanel">
                            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 justify-content-center">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/ubuntu.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Ubuntu</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/freebsd.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Free BSD</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/debian.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Debian</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/almalinux.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Alma Linux</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm h-100">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/opensuse.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Open Suse</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/webmin.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Webmin</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/docker.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Docker</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/proxmox.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Proxmox</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/cpanel.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Cpanel</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-body d-flex align-items-center gap-3">
                                            <div class="w-12 h-12 d-flex justify-content-center align-items-center flex-shirnk-0">
                                                <img src="assets/img/rockylinux.svg" alt="icon" class="w-100 h-100 object-fit-contain">
                                            </div>
                                            <h6 class="m-0 flex-grow-1 fs-16 fw-bold">Rocky Linux</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Partner  -->

    <!-- VPS Features -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark pt-80 pb-80 px-5 px-md-8 px-xl-12 rounded-4 position-relative z-1" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-10 col-lg-7 col-xl-5">
                            <h2 class="text-white">
                                Take a Fast Glance at Our VPS Features
                            </h2>
                            <p class="mb-8 text-white text-opacity-75">
                                With over two decades of experience in high-quality, secure web hosting CloudHosti Strategic
                                experts will migrate.
                            </p>
                            <a href="control-panel.html" class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    Advance Features
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-xl-7">
                            <div class="row g-4 g-xl-0 feature-card">
                                <div class="col-md-6 feature-card__list">
                                    <div class="feature-card__is border border-light border-opacity-25 rounded-3">
                                        <div class="mb-4">
                                            <img src="assets/img/icon-features-5.png" alt="image" class="img-fluid">
                                        </div>
                                        <h6 class="mb-4 text-white">
                                            Managed Performance
                                            Security & Updates
                                        </h6>
                                        <p class="mb-0 text-light text-opacity-50">
                                            We deliver round-the-clock, for your fast expanding business!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 feature-card__list">
                                    <div class="feature-card__is border border-light border-opacity-25 rounded-3">
                                        <div class="mb-4">
                                            <img src="assets/img/icon-features-6.png" alt="image" class="img-fluid">
                                        </div>
                                        <h6 class="mb-4 text-white">
                                            Unhindered Performance with Own Server Resources
                                        </h6>
                                        <p class="mb-0 text-light text-opacity-50">
                                            We deliver round-the-clock, for your fast expanding business!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 feature-card__list">
                                    <div class="feature-card__is border border-light border-opacity-25 rounded-3">
                                        <div class="mb-4">
                                            <img src="assets/img/icon-features-7.png" alt="image" class="img-fluid">
                                        </div>
                                        <h6 class="mb-4 text-white">
                                            Unlimited Bandwidth
                                            And traffic
                                        </h6>
                                        <p class="mb-0 text-light text-opacity-50">
                                            We deliver round-the-clock, for your fast expanding business!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 feature-card__list">
                                    <div class="feature-card__is border border-light border-opacity-25 rounded-3">
                                        <div class="mb-4">
                                            <img src="assets/img/icon-features-8.png" alt="image" class="img-fluid">
                                        </div>
                                        <h6 class="mb-4 text-white">
                                            SSDs, Email, SSL & Unlimited Domains included
                                        </h6>
                                        <p class="mb-0 text-light text-opacity-50">
                                            We deliver round-the-clock, for your fast expanding business!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/shape/vps-feature-shape.png" alt="image" class="img-fluid d-none d-xl-block position-absolute left-0 top-0 z-n1">
                </div>
            </div>
        </div>
    </div><!-- /VPS Features -->

    <!-- FAQ -->
    <div class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2>
                                Windows VPS Hosting
                                with Plesk
                            </h2>
                            <p class="mb-0 max-text-52 mx-auto">
                                Control and more resources or for when you no longer want to be limited by the
                                restrictions of a shared hosting account.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 col-xxl-5" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="accordion border-0 vps-hosting-accordion" id="accordionFaq">
                        <div class="accordion-item border rounded-3 mb-4">
                            <h2 class="accordion-header" id="faq-headingOne">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="faq-collapseOne">
                                    <span class="text-body fs-16 fw-bold">What is Shared hosting?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq-headingOne" data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4">
                            <h2 class="accordion-header" id="faq-headingTwo">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="faq-collapseTwo">
                                    <span class="text-body fs-16 fw-bold">How many websites can I host?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq-headingTwo" data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4">
                            <h2 class="accordion-header" id="faq-heading3">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3" aria-expanded="false" aria-controls="faq-collapse3">
                                    <span class="text-body fs-16 fw-bold">Do you include SSL Certificates?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse3" class="accordion-collapse collapse" aria-labelledby="faq-heading3" data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4">
                            <h2 class="accordion-header" id="faq-heading4">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4" aria-expanded="false" aria-controls="faq-collapse4">
                                    <span class="text-body fs-16 fw-bold">ow to use the Track Delivery feature in the
                                        cPanel?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse4" class="accordion-collapse collapse" aria-labelledby="faq-heading4" data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="text-center">
                        <img src="assets/img/vps-hosting-faq-img.png" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /FAQ -->

    <!-- VPS Slider Pricing -->
    <div class="pt-120 pb-120 bg-dark">
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="text-white">
                                Managed VPS Hosting Plans
                            </h2>
                            <p class="mb-0 text-white max-text-52 mx-auto text-opacity-75">
                                Take your online presence to the next level with our all-inclusive shared hosting plans,
                                crafted for faster page load times!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card bg-dark vps-plan-card border-light border-opacity-10 rounded-3 transition">
                                <div class="card-body p-sm-6 p-md-8">
                                    <div class="hstack flex-wrap gap-2 justify-content-between mb-3">
                                        <h6 class="mb-0 fs-18 text-white">
                                            Starter Plan
                                        </h6>
                                        <h6 class="fs-16 fw-normal mb-0 text-white">
                                            Starting at:
                                            <span class="text-primary fw-bold">$4/mo</span>
                                        </h6>
                                    </div>
                                    <p class="fs-14 text-white text-opacity-75 mb-6 max-text-40">
                                        CloudHosti is the strategic partner for your online journey. We
                                        are of the way. you every step of the way.
                                    </p>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 mb-3 fs-14">Intel E3-1240 V2</li>
                                                <li class="text-white text-opacity-75 fs-14">Gbit Port Speed</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 fs-14 mb-3">8 GB RAM</li>
                                                <li class="text-white text-opacity-75 fs-14">480 GB SSD</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card bg-dark vps-plan-card border-light border-opacity-10 rounded-3 transition">
                                <div class="card-body p-sm-6 p-md-8">
                                    <div class="hstack flex-wrap gap-2 justify-content-between mb-3">
                                        <h6 class="mb-0 fs-18 text-white">
                                            Popular Plan
                                        </h6>
                                        <h6 class="fs-16 fw-normal mb-0 text-white">
                                            Starting at:
                                            <span class="text-primary fw-bold">$10/mo</span>
                                        </h6>
                                    </div>
                                    <p class="fs-14 text-white text-opacity-75 mb-6 max-text-40">
                                        CloudHosti is the strategic partner for your online journey. We
                                        are of the way. you every step of the way.
                                    </p>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 mb-3 fs-14">Intel E3-1240 V2</li>
                                                <li class="text-white text-opacity-75 fs-14">Gbit Port Speed</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 fs-14 mb-3">8 GB RAM</li>
                                                <li class="text-white text-opacity-75 fs-14">480 GB SSD</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card bg-dark vps-plan-card border-light border-opacity-10 rounded-3 transition">
                                <div class="card-body p-sm-6 p-md-8">
                                    <div class="hstack flex-wrap gap-2 justify-content-between mb-3">
                                        <h6 class="mb-0 fs-18 text-white">
                                            Enterprise Plan
                                        </h6>
                                        <h6 class="fs-16 fw-normal mb-0 text-white">
                                            Starting at:
                                            <span class="text-primary fw-bold">$14/mo</span>
                                        </h6>
                                    </div>
                                    <p class="fs-14 text-white text-opacity-75 mb-6 max-text-40">
                                        CloudHosti is the strategic partner for your online journey. We
                                        are of the way. you every step of the way.
                                    </p>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 mb-3 fs-14">Intel E3-1240 V2</li>
                                                <li class="text-white text-opacity-75 fs-14">Gbit Port Speed</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="m-0">
                                                <li class="text-white text-opacity-75 fs-14 mb-3">8 GB RAM</li>
                                                <li class="text-white text-opacity-75 fs-14">480 GB SSD</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-xl-12">
                        <h5 class="mb-4 text-white">
                            Pricing that Works for
                            your Need
                        </h5>
                        <p class="mb-8 text-white text-opacity-75">
                            Managed Web Hosting Solutions bringing the success of your next
                            online mission! Starting at <a href="#" class="text-decoration-none fw-semibold">$2.49 including</a>
                        </p>
                        <h6 class="mb-15 text-white fw-bold">
                            Processor
                        </h6>
                        <div class="vps-slider vps-slider--processor mb-12">
                            <input type="text" class="vps-slider-amount" readonly="">
                            <div class="vps-slider__progress vps-slider__progress-1"></div>
                            <div class="ui-slider-handle vps-slider__controller">
                                <div id="custom-handle" class="vps-slider__tooltip"></div>
                            </div>
                        </div>
                        <div class="vps-slider-details bg-primary bg-opacity-5 rounded-4 p-4 p-xl-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6 col-lg-12 col-xxl-6">
                                    <div class="p-4 p-xl-6 rounded-4 text-center vps-slider-details__info">
                                        <h5 class="text-white">
                                            Estimated Prices
                                        </h5>
                                        <p class="mb-6 fs-14 text-white text-opacity-75">
                                            Managed Web Hosting Solutions
                                            online mission! Starting
                                        </p>
                                        <h3 class="mb-4 text-white">
                                            $14.06
                                        </h3>
                                        <a href="#" class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded-1 w-100">
                                            <span class="btn-arrow__text">
                                                Order Now
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xxl-6">
                                    <h6 class="mb-4 text-white">
                                        What’s Included Package
                                    </h6>
                                    <ul class="list-unstyled m-0 p-0">
                                        <li class="d-flex align-items-center gap-2 mb-3">
                                            <span
                                                class="d-grid place-content-center flex-shrink-0 w-6 h-6 rounded-circle bg-primary bg-opacity-25 text-primary fs-14">
                                                <i class="las la-check"></i>
                                            </span>
                                            <span class="d-block text-white text-opacity-75 fs-14">
                                                Core <span class="d-inline-block config-info-1"></span>
                                            </span>
                                        </li>

                                        <li class="d-flex align-items-center gap-2 mb-3">
                                            <span
                                                class="d-grid place-content-center flex-shrink-0 w-6 h-6 rounded-circle bg-primary bg-opacity-25 text-primary fs-14">
                                                <i class="las la-check"></i>
                                            </span>
                                            <span class="d-block text-white text-opacity-75 fs-14">
                                                <span class="d-inline-block config-info-2"></span>
                                            GB RAM
                                            </span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-3">
                                            <span
                                                class="d-grid place-content-center flex-shrink-0 w-6 h-6 rounded-circle bg-primary bg-opacity-25 text-primary fs-14">
                                                <i class="las la-check"></i>
                                            </span>
                                            <span class="d-block text-white text-opacity-75 fs-14">
                                                <span class="d-inline-block config-info-3"></span> GB SSD Storage
                                            </span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2 mb-3">
                                            <span
                                                class="d-grid place-content-center flex-shrink-0 w-6 h-6 rounded-circle bg-primary bg-opacity-25 text-primary fs-14">
                                                <i class="las la-check"></i>
                                            </span>
                                            <span class="d-block text-white text-opacity-75 fs-14">
                                                24/7 Uptime
                                            </span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <span
                                                class="d-grid place-content-center flex-shrink-0 w-6 h-6 rounded-circle bg-primary bg-opacity-25 text-primary fs-14">
                                                <i class="las la-check"></i>
                                            </span>
                                            <span class="d-block text-white text-opacity-75 fs-14">
                                                360 Support
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- VPS Slider Pricing -->

    <!-- About -->
    <div class="pt-60 pb-60 bg-primary-subtle">
        <div class="pt-60 pb-60">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="position-relative" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <img src="assets/img/about-img-3.png" alt="image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-8">
                            <h2 class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                VPS Hosting Support That's Always Online
                            </h2>
                            <p data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                The Loading Speed of every website is undoubtedly one of the leading SEO ranking factors
                                today. With that in mind, we meticulously optimized
                            </p>
                            <p class="mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                Our Web Hosting plans to meet the Loading Speed requirements of every website
                                out-of-the-box. Of course, that is not always optimal due to the website optimization for
                                every website that we host.
                            </p>
                            <a href="contact.html" class="btn btn-dark btn-arrow btn-lg fs-14 fw-medium rounded" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <span class="btn-arrow__text">
                                    Speek Sales Team
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
        <div class="pb-60">
            <div class="pb-40">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
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
                    <div class="col-12">
                        <div class="pricing-nav-pills d-block mx-auto" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <ul class="nav nav-pills justify-content-center" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-body fw-bold px-3 pb-2 active" href="#linuxHosting" data-bs-toggle="pill" data-bs-target="#linuxHosting" aria-selected="true" role="tab">
                                        Linux VPS Hosting
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-body fw-bold px-3 pb-2" href="#windowsHosting" data-bs-toggle="pill" data-bs-target="#windowsHosting" aria-selected="true" role="tab">
                                        Windows VPS Hosting
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-body fw-bold px-3 pb-2" href="#cloudHosting" data-bs-toggle="pill" data-bs-target="#cloudHosting" aria-selected="true" role="tab">
                                        Cloud VPS Hosting
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="tab-pane fade show active" id="linuxHosting" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-primary btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                            <div class="tab-pane fade" id="windowsHosting" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-primary btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <a href="price.html" class="btn btn-sm btn-dark btn-arrow btn-arrow-md fs-14 fw-medium rounded">
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
                                                    <button class="accordion-button fs-14 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion1A" aria-expanded="true">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion1A" class="accordion-collapse collapse show">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                    <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion2A" aria-expanded="false">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion2A" class="accordion-collapse collapse">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                    <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion3A" aria-expanded="false">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion3A" class="accordion-collapse collapse">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                            <div class="tab-pane fade" id="cloudHosting" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <button type="button" class="btn btn-sm btn-primary">
                                                                            Get Started
                                                                        </button>
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <button type="button" class="btn btn-sm btn-dark hover:bg-primary hover:border-primary">
                                                                            Get Started
                                                                        </button>
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <button type="button" class="btn btn-sm btn-dark hover:bg-primary hover:border-primary">
                                                                            Get Started
                                                                        </button>
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
                                                                        <span
                                                                            class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                                            (on a 12 month plan)
                                                                        </span>
                                                                        <button type="button" class="btn btn-sm btn-dark hover:bg-primary hover:border-primary">
                                                                            Get Started
                                                                        </button>
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
                                                    <button class="accordion-button fs-14 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion1B" aria-expanded="true">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion1B" class="accordion-collapse collapse show">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                    <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion2B" aria-expanded="false">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion2B" class="accordion-collapse collapse">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                    <button class="accordion-button fs-14 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tableAccordion3B" aria-expanded="false">
                                                        EXCLUSIVE VPS HOSTING FEATURES
                                                    </button>
                                                </h2>
                                                <div id="tableAccordion3B" class="accordion-collapse collapse">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        12 TB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        2 x 2.20GHz
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        4GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        8GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        16GB
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        24/7 Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
                                                                                        Unlimited
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="d-block text-light-emphasis fs-14">
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
                </div>
            </div>
        </div>
        <div class="pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="mb-4">
                                Got Questions? We Have Answers!
                            </h2>
                            <p class="mb-8 max-text-52 mx-auto" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                Get started by reaching out to our awesome support team today! Our english to help you with
                                answers to your questions.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <a href="price.html" class="btn btn-lg btn-primary btn-arrow fs-14 fw-medium rounded">
                                    <span class="d-inline-block me-1 flex-shrink-0">
                                        <i class="las la-comment-dots"></i>
                                    </span>
                                    <span class="btn-arrow__text">
                                        Get Started
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                <a href="contact.html" class="btn btn-lg btn-dark btn-arrow fs-14 fw-medium rounded">
                                    <span class="d-inline-block me-1 flex-shrink-0">
                                        <i class="las la-comment-dots"></i>
                                    </span>
                                    <span class="btn-arrow__text">
                                        Chat with Expert
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
        </div>
    </div><!-- /About -->

    <!-- Feedback 4 -->
    <section class="pt-120 pb-120 bg-dark">
        <div class="pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h2 class="text-white mb-0">What our Customers Have
                            to Say About us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="feedback-slider-4 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white p-10 rounded-3 position-relative z-1">
                                    <img src="assets/img/shape/feedback-5-shape.png" alt="img" class="img-fluid position-absolute top-0 end-0 z-n1">
                                    <div class="d-flex align-items-center justify-content-between gap-3 mb-6">
                                        <img src="assets/img/feedback-5-user-1.png" alt="img" class="img-fluid">
                                        <img src="assets/img/feedback-5-logo-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for
                                        my retirement. Their expert financial advisors provided personalized guidance, and I
                                        feel confident about my financial future.”</p>
                                    <div>
                                        <h6 class="fs-16 mb-0">Saiful Talukdar</h6>
                                        <small>Dubai</small>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-10 rounded-3 position-relative z-1">
                                    <img src="assets/img/shape/feedback-5-shape.png" alt="img" class="img-fluid position-absolute top-0 end-0 z-n1">
                                    <div class="d-flex align-items-center justify-content-between gap-3 mb-6">
                                        <img src="assets/img/feedback-5-user-2.png" alt="img" class="img-fluid">
                                        <img src="assets/img/feedback-5-logo-2.png" alt="img" class="img-fluid">
                                    </div>
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for
                                        my retirement. Their expert financial advisors provided personalized guidance, and I
                                        feel confident about my financial future.”</p>
                                    <div>
                                        <h6 class="fs-16 mb-0">Saiful Talukdar</h6>
                                        <small>Dubai</small>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-10 rounded-3 position-relative z-1">
                                    <img src="assets/img/shape/feedback-5-shape.png" alt="img" class="img-fluid position-absolute top-0 end-0 z-n1">
                                    <div class="d-flex align-items-center justify-content-between gap-3 mb-6">
                                        <img src="assets/img/feedback-5-user-1.png" alt="img" class="img-fluid">
                                        <img src="assets/img/feedback-5-logo-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for
                                        my retirement. Their expert financial advisors provided personalized guidance, and I
                                        feel confident about my financial future.”</p>
                                    <div>
                                        <h6 class="fs-16 mb-0">Saiful Talukdar</h6>
                                        <small>Dubai</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
                    <p class="text-white fw-bold mb-0">Ranked among the top server providers in the industry on</p>
                    <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap">
                        <img src="assets/img/feedback-4-sub-1.png" alt="img" class="img-fluid">
                        <img src="assets/img/feedback-4-sub-2.png" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Feedback 4 -->

    <!-- FAQ 3 -->
    <div class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2>
                                Managed VPS Hosting FAQs
                            </h2>
                            <p class="mb-0 max-text-52 mx-auto">
                                Control and more resources or for when you no longer want to be limited by therestrictions
                                of a shared hosting account.
                            </p>
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
                                    <span class="text-body fs-16 fw-bold">What is Shared hosting?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseOneA" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwoA" aria-expanded="false" aria-controls="faq-collapseTwoA">
                                    <span class="text-body fs-16 fw-bold">How many websites can I host?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3A" aria-expanded="false" aria-controls="faq-collapse3A">
                                    <span class="text-body fs-16 fw-bold">Do you include SSL Certificates?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse3A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4A" aria-expanded="false" aria-controls="faq-collapse4A">
                                    <span class="text-body fs-16 fw-bold">ow to use the Track Delivery feature in the
                                        cPanel?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse4A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">We care about safety big time — and so do your site's
                                    visitors. With a Shared Hosting account, you get an SSL certificate for free to add to
                                    your site. In this day and age, having an SSL for your site is a no-brainer best
                                    practice. Not only does an SSL help your visitors feel safe interacting with your site —
                                    this is particularly important if you run an e-commerce site.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /FAQ 3 -->

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
</body>

</html>