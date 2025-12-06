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
    <!--title-->
    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="author" content="CloudHosti">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords']); ?>">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">
    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
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

    <!-- Hero 6 -->
    <section class="hero-6 position-relative z-1">
        <div class="container">
            <div class="row g-4 align-items-lg-center">
                <div class="col-lg-7">
                    <small class="mt-0 mt-lg-20 d-inline-block mb-2 fw-bold bg-success-subtle text-success-emphasis border border-success-subtle px-3 py-1 rounded">
                        <span class="d-inline-block w-2 h-2 bg-success rounded-circle me-1"></span>Google Workspace 
                        <span class="ms-1 text-body">Up To 10% OFF</span>
                    </small>
                    <h1 class="mb-4">
                        Google Workspace Solutions for Businesses in Bangladesh
                    </h1>
                    <p class="max-text-64 mb-8 fw-semibold">
                        Boost your company’s communication and productivity with Google Workspace from CloudHosti — your trusted Google Workspace partner in Bangladesh.
                    </p>
                    <div class="hstack gap-4 flex-wrap">
                        <a href="contact.php" class="btn btn-success btn-arrow btn-arrow-md btn-lg fs-14 fw-semibold rounded">
                            <span class="btn-arrow__text">
                                View Plans
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-6__img">
                        <img src="assets/images/gmail-app.webp" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing  -->
    <section class="pt-80 pb-120 bg-secondary mt-20">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-8">
                        <svg width="100%" viewBox="0 0 1000 500" xmlns="http://www.w3.org/2000/svg">
                            <!-- Gmail Browser -->
                            <image 
                                x="180" 
                                y="70" 
                                width="659" 
                                height="486"
                                opacity="0"
                                xlink:href="assets/images/gsuite-hero-browser.png">
                                <animate attributeName="opacity" from="0" to="1" dur="0.5s" fill="freeze" />
                            </image>

                            <!-- Calendar -->
                            <image
                                x="551"
                                y="5"
                                width="170"
                                height="70"
                                opacity="0"
                                xlink:href="assets/images/calendar-hero.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.3s" fill="freeze"/>
                            </image>

                            <!-- Chat -->
                            <image
                                x="670"
                                y="160"
                                width="327"
                                height="347"
                                opacity="0"
                                xlink:href="assets/images/chat-n-meet-pattern.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.3s" fill="freeze"/>
                                <animate attributeName="y" from="500" to="160" dur="2s" begin="0.2s" fill="freeze"/>
                            </image>

                            <!-- Slides -->
                            <image
                                x="750"
                                y="58"
                                width="398"
                                height="111"
                                opacity="0"
                                xlink:href="assets/images/slides-pattern.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.2s" fill="freeze"/>
                                <animate attributeName="x" from="1200" to="750" dur="2s" begin="0.2s" fill="freeze"/>
                            </image>

                            <!-- Drive -->
                            <image
                                x="865"
                                y="20"
                                width="116"
                                height="116"
                                opacity="0"
                                xlink:href="assets/images/drive-hero.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.3s" fill="freeze"/>
                            </image>

                            <!-- Admin -->
                            <image
                                x="71"
                                y="13"
                                width="92"
                                height="92"
                                opacity="0"
                                xlink:href="assets/images/admin-hero.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.3s" fill="freeze"/>
                            </image>

                            <!-- Docs -->
                            <image
                                x="-355"
                                y="117"
                                width="728"
                                height="294"
                                opacity="0"
                                xlink:href="assets/images/docs-sheet-pattern.png">
                                <animate attributeName="opacity" from="0" to="1" dur="1.5s" begin="0.2s" fill="freeze"/>
                                <animate attributeName="x" from="-800" to="-355" dur="2s" begin="0.2s" fill="freeze"/>
                            </image>

                        </svg>
                    </div>
                    <div class="col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="mb-4"> Google Workspace Plan </h2>
                            <p class="max-text-60 mx-auto">
                                Get secure business email, powerful collaboration tools, cloud storage, and everything your team needs to work smarter.
                            </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <small class="fw-semibold">Monthly</small>
                            <div class="form-check form-switch toggle-switch">
                                <input class="form-check-input pricing-toggle" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            </div>
                            <small class="fw-semibold">Yearly</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row g-4 g-xl-0 align-items-stretch">
                        <div class="col-md-3 col-12 d-flex">
                            <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end sal-animate">
                                <div class="card-body price-card-item-one position-relative overflow-hidden">
                                    <h6 class="mb-1 package-title">Starter</h6>
                                    <p class="tagline">The essential tools for your brand, including professional email</p>
                                    <div class="mt-5">
                                        <div class="monthly-price">
                                            <h4>$6.65 </h4>
                                            <p class="sub-title">/user per month</p>
                                            <small class="fw-bold">Normally $8.40 <small>/month</small></small>
                                        </div>
                                        <div class="yearly-price">
                                            <h4>$72.00 </h4>
                                            <p class="sub-title">/user per year</p>
                                            <small class="fw-bold">Normally $100.80 <small>/year</small></small>
                                        </div>
                                    </div>
                                    <div class="monthly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="yearly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mt-6">
                                        <h6 class="mb-5 hanger">Starter includes:</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/cloud.svg" class="img-fluid" />
                                                </div>
                                                <p class="bigger mb-0">30 GB <small class="fw-bold">pooled storage per person*</small></p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gmail.svg" class="img-fluid" />
                                                </div>
                                                <div class="">
                                                    <p class="fw-medium mb-0">Secure custom business email </p>
                                                    <p><small>you@your-company.com</small></p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gemini.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Gemini AI assistant in Gmail</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/chat.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Chat with AI in the Gemini app</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/meet.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Video meetings, 100 participants</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/vids.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Google Vids AI-powered video creator and editor</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/security.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Security and management controls</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 d-flex">
                            <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end sal-animate">
                                <div class="card-body price-card-item-one position-relative overflow-hidden">
                                    <h6 class="mb-1 package-title">Standard</h6>
                                    <p class="tagline">Empower your team with better storage, AI, and collaboration</p>
                                    <div class="mt-5">
                                        <div class="monthly-price">
                                            <h4>$15.00 </h4>
                                            <p class="sub-title">/user per month</p>
                                            <small class="fw-bold">Normally $16.80 <small>/month</small></small>
                                        </div>
                                        <div class="yearly-price">
                                            <h4>$162.00 </h4>
                                            <p class="sub-title">/user per year</p>
                                            <small class="fw-bold">Normally $201.60 <small>/year</small></small>
                                        </div>
                                    </div>
                                    <div class="monthly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="yearly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mt-6">
                                        <h6 class="mb-5 hanger">All of Starter, and:</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/cloud.svg" class="img-fluid" />
                                                </div>
                                                <p class="bigger mb-0">2 TB <small class="fw-bold">65x more than Starter*</small></p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gmail.svg" class="img-fluid" />
                                                </div>
                                                <div class="">
                                                <p class="fw-medium mb-0">Secure custom business email </p>
                                                <p><small>you@your-company.com + custom layouts, and mail merge</small></p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gemini.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Gemini AI assistant in Gmail, Docs, Meet, and more</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/notebook.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">NotebookLM with expanded access to features</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/chat.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Chat with AI in the Gemini app with expanded access to models and features</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/meet.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Video meetings with recording, noise cancellation, 150 participants</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/vids.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Google Vids AI-powered video creator and editor</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/calendar.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Appointment booking pages</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/esign.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">eSignature with Docs and PDFs</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/security.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Google Workspace Migrate tool for data migration</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 d-flex">
                            <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end sal-animate">
                                <div class="card-body price-card-item-one position-relative overflow-hidden">
                                    <h6 class="mb-1 package-title">Plus</h6>
                                    <p class="tagline">Protect your organization with robust security and compliance</p>
                                    
                                    <div class="mt-5">
                                        <div class="monthly-price">
                                            <h4>$24.59 </h4>
                                            <p class="sub-title">/user per month</p>
                                            <small class="fw-bold">Normally $26.40 <small>/month</small></small>
                                        </div>
                                        <div class="yearly-price">
                                            <h4>$295.08 </h4>
                                            <p class="sub-title">/user per year</p>
                                            <small class="fw-bold">Normally $316.80 <small>/year</small></small>
                                        </div>
                                    </div>
                                    <div class="monthly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="yearly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mt-6">
                                        <h6 class="mb-5 hanger">All of Standard, and:</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/cloud.svg" class="img-fluid" />
                                                </div>
                                                <p class="bigger mb-0">5 TB 
                                                    <small class="fw-bold">2.5x more than Standard*</small>
                                                </p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gmail.svg" class="img-fluid" />
                                                </div>
                                                <div class="">
                                                <p class="fw-medium mb-0">Secure custom business email </p>
                                                <p><small>+ eDiscovery</small></p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/meet.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Video meetings with attendance tracking, 500 participants</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/vault.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Vault to retain, archive, and search data</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/security.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Secure LDAP</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Advanced endpoint management</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Enhanced security and management controls</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 d-flex">
                            <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end sal-animate">
                                <div class="card-body price-card-item-one position-relative overflow-hidden">
                                    <h6 class="mb-1 package-title">Enterprise</h6>
                                    <p class="tagline">Get enterprise-grade security, compliance, and limitless scale</p>
                                    
                                    <div class="mt-5">
                                        <div class="monthly-price">
                                            <h4>$52.44 </h4>
                                            <p class="sub-title">/user per month</p>
                                            <small class="fw-bold">Normally $55.40 <small>/month</small></small>
                                        </div>
                                        <div class="yearly-price">
                                            <h4>$551.28 </h4>
                                            <p class="sub-title">/user per year</p>
                                            <small class="fw-bold">Normally $628.80 <small>/year</small></small>
                                        </div>
                                    </div>
                                    <div class="monthly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="yearly-price">
                                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                            <span class="btn-arrow__text">
                                                Coming Soon
                                                <span class="btn-arrow__icon">
                                                    <i class="las la-arrow-right"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mt-6">
                                        <h6 class="mb-5 hanger">All of Standard, and:</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/cloud.svg" class="img-fluid" />
                                                </div>
                                                <p class="bigger mb-0">Unlimited Cloud Storage 
                                                </p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/gmail.svg" class="img-fluid" />
                                                </div>
                                                <div class="">
                                                <p class="fw-medium mb-0">Secure custom business email </p>
                                                <p><small>+ eDiscovery</small></p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/meet.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Video meetings with in-domain live streaming, 1000 participants</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 d-flex justify-content-center flex-shrink-0">
                                                    <img src="assets/images/security.svg" class="img-fluid" />
                                                </div>
                                                <p class="fw-medium mb-0">Google Workspace Migrate tool for data migration</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Context-aware access</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Enterprise data regions</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Cloud Identity Premium</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Enterprise endpoint management</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">AI classification for Google Drive</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Assured Controls and AI classification available as add-on</p>
                                            </li>
                                            <li class="d-flex align-items-start gap-3">
                                                <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>
                                                <p class="fw-medium mb-0">Enhanced Support for faster response times for critical issues</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pricing  -->

    <!-- Why Choose Section  -->
    <div class="pt-60 pb-60">
        <div class="pb-40">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h2 class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Leverage the power of Google's machine intelligence to build a smarter team
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="pricing-nav-pills pricing-nav-pills--success d-block mx-auto border-bottom border-light-subtle" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <ul class="nav nav-pills justify-content-center" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2 active" href="#" data-bs-toggle="pill" data-bs-target="#linuxHosting" aria-selected="true" role="tab">
                                        Effectively Communicate
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#windowsHosting" aria-selected="true" role="tab">
                                        Seamlessly Collaborate
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#cloudHosting" aria-selected="true" role="tab">
                                        Easily Manage
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="tab-pane fade show active" id="linuxHosting" role="tabpanel">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-md-6 col-xl-4">
                                    <!-- <h5 class="mb-4">
                                        Slow Websites are Universally
                                        Disliked!
                                    </h5>
                                    <p class="mb-8">
                                        Experience our high-speed web hosting, with 24/7 a novice or a thriving e-commerce
                                        enterprise.
                                    </p> -->
                                    <ul class="list-unstyled vstack gap-4">
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/gmail.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Get the power of Gmail
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Get a professional email for your business with all the powerful features of Gmail.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/calendar.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Keep your schedule organized
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Add reminders, schedule meetings and never miss a thing with Google's smart calendar.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/meet.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Communicate on the go
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Stay connected with your colleagues via HD video calls and instant messages using Google Meet and Google Chat.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-7">
                                    <div class="text-center">
                                        <img src="assets/images/gsuite-communicate-feat.png" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="windowsHosting" role="tabpanel">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-md-6 col-xl-4">
                                    <!-- <h5 class="mb-4">
                                        Slow Websites are Universally
                                        Disliked!
                                    </h5>
                                    <p class="mb-8">
                                        Experience our high-speed web hosting, with 24/7 a novice or a thriving e-commerce
                                        enterprise.
                                    </p> -->
                                    <ul class="list-unstyled vstack gap-4">
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/drive.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Intelligent Collaboration
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Collaborate in real time, store your files on the cloud, share and access them from anywhere.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/search.png" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Smart Cloud search
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Search across all your organizations content. From Gmail and Drive to Docs, Sheets, Slides, Calendar, and more.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/sync.png" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Stay updated
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Discuss new ideas, engage in meaningful conversations and stay up to date with Currents.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-7">
                                    <div class="text-center">
                                        <img src="assets/images/drive.png" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cloudHosting" role="tabpanel">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-md-6 col-xl-4">
                                    <!-- <h5 class="mb-4">
                                        Slow Websites are Universally
                                        Disliked!
                                    </h5>
                                    <p class="mb-8">
                                        Experience our high-speed web hosting, with 24/7 a novice or a thriving e-commerce
                                        enterprise.
                                    </p> -->
                                    <ul class="list-unstyled vstack gap-4">
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/security.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Efficient control from a single place
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Manage users, groups, permissions and migrate existing accounts to Google Workspace easily from the Admin Console.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/vault.svg" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Archive your data with ease
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Retain and manage how your organizations data is stored and save what's important with Vault.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card transition why-choose-card">
                                                <div class="card-body p-xxl-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img class="w-6 me-2" src="assets/images/secure.png" class="img-fluid">
                                                        <h6 class="mb-0">
                                                            Stay Secure
                                                        </h6>
                                                    </div>
                                                    <p class="mb-0 fs-14">
                                                        Manage and give access to your employees on their devices while keeping your data secure with Endpoint Management.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-7">
                                    <div class="text-center">
                                        <img src="assets/images/gsuite-manage-feat.png" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="pt-32 text-center">
                        <a href="about-us.php" class="btn btn-success btn-arrow btn-arrow-lg btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text">
                                Explore More
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section  -->

    <!-- price -->
    <!-- <div class="pt-60 pb-60">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="mb-0">
                                Compare WordPress Hosting
                                Plans & Features
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
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
                                                    <button type="button" class="btn btn-success btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                                        <span class="btn-arrow__text">
                                                            Get Started
                                                            <span class="btn-arrow__icon">
                                                                <i class="las la-arrow-right"></i>
                                                            </span>
                                                        </span>
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
                                                    <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                        (on a 12 month plan)
                                                    </span>
                                                    <button type="button" class="btn btn-dark btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                                        <span class="btn-arrow__text">
                                                            Get Started
                                                            <span class="btn-arrow__icon">
                                                                <i class="las la-arrow-right"></i>
                                                            </span>
                                                        </span>
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
                                                    <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                        (on a 12 month plan)
                                                    </span>
                                                    <button type="button" class="btn btn-dark btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                                        <span class="btn-arrow__text">
                                                            Get Started
                                                            <span class="btn-arrow__icon">
                                                                <i class="las la-arrow-right"></i>
                                                            </span>
                                                        </span>
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
                                                    <span class="d-block fw-normal mb-4 fs-12 text-light-emphasis">
                                                        (on a 12 month plan)
                                                    </span>
                                                    <button type="button" class="btn btn-dark btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                                        <span class="btn-arrow__text">
                                                            Get Started
                                                            <span class="btn-arrow__icon">
                                                                <i class="las la-arrow-right"></i>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-table-pricing" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
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
    </div> -->
    <!-- /price -->

    <!-- <div class="pt-60 pb-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6">
                    <div class="text-center" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <img src="assets/img/migrate-img-1.png" alt="image" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6">
                    <h2 class="mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        The Hassle-Free Way to Migrate Your WordPress Website
                    </h2>
                    <p class="mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Migrating your site to a new hosting provider is easier than you think. Our experts will do it for
                        FREE when you purchase any web hosting plan. Kick back with a cold one and let us do the work. It
                        will take less than an hour without any interruption.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <div class="mb-8">
                                        <img src="assets/img/icon-features-9.png" alt="image" class="img-fluid">
                                    </div>
                                    <h6 class="mb-5">
                                        Submit a Support Ticket
                                    </h6>
                                    <p class="mb-0">
                                        Try our new WordPress toolkit, it makes installing, managing and updating your
                                        WordPress website
                                        a breeze data.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <div class="mb-8">
                                        <img src="assets/img/icon-features-9.png" alt="image" class="img-fluid">
                                    </div>
                                    <h6 class="mb-5">
                                        Choose Migrations
                                    </h6>
                                    <p class="mb-0">
                                        Try our new WordPress toolkit, it makes installing, managing and updating your
                                        WordPress website
                                        a breeze data.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Feedback -->
    <!-- <section class="pt-120 pb-120 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="text-white mb-8" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">What our Customers Have
                        to Say About us.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="feedback-slider-4 swiper" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white p-10 rounded-3 position-relative z-1">
                                    <img src="assets/img/shape/feedback-5-shape.png" alt="img" class="img-fluid position-absolute top-0 end-0 z-n1">
                                    <div class="d-flex align-items-center justify-content-between gap-3 mb-6">
                                        <img src="assets/img/feedback-5-user-1.png" alt="img" class="img-fluid">
                                        <img src="assets/img/feedback-5-logo-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for my retirement. Their expert financial advisors provided personalized guidance, and I feel confident about my financial future.”</p>
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
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for my retirement. Their expert financial advisors provided personalized guidance, and I feel confident about my financial future.”</p>
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
                                    <p class="fs-16 fw-semibold mb-6">“CloudHosti has been instrumental in helping me plan for my retirement. Their expert financial advisors provided personalized guidance, and I feel confident about my financial future.”</p>
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
    </section> -->
    <!-- Feedback -->

    <!-- FAQ -->
    <div class="pt-120 pb-120">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2>
                                FAQs
                            </h2>
                            <p class="mb-0 max-text-52 mx-auto">
                                All questtions about our Google Workspace plans answered here.
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
                                    <span class="text-body fs-16 fw-bold">Can I use my existing domain with Google Workspace?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseOneA" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes, you can use an existing domain with your Google Workspace order.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwoA" aria-expanded="false" aria-controls="faq-collapseTwoA">
                                    <span class="text-body fs-16 fw-bold">What happens to my existing mail, contacts, and calendar data when I move to Google Workspace?</span>
                                </button>
                            </h2>
                            <div id="faq-collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">When switching to Google Workspace from another program or web service, you and your users can bring your existing mail, contacts, and calendar data with you. You have a variety of options for migrating data into Google Workspace, depending on the size of your organization and the system you're migrating from. Tools are available for migration from Microsoft Exchange, Lotus Notes, IMAP servers and other Google accounts.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse3A" aria-expanded="false" aria-controls="faq-collapse3A">
                                    <span class="text-body fs-16 fw-bold">What is the space provided per Email Account?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse3A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Each email account comes with 30 GB space.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse4A" aria-expanded="false" aria-controls="faq-collapse4A">
                                    <span class="text-body fs-16 fw-bold">Is Google Workspace compatible with the email client I use today?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse4A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">In addition to accessing Google Workspace mail from the Gmail web interface, you can send and receive mail from your favorite desktop client. Depending on the client, you can use either the IMAP or POP mail protocol. If you’re switching to Google Workspace from Microsoft Exchange or some other Outlook service, you can use Google Workspace Sync. This is a plug-in for Outlook 2003, 2007, 2010 or 2013 that lets you use Outlook to manage your Google Workspace mail, calendar and contacts—along with your Outlook notes, tasks and journal entries.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse5A" aria-expanded="false" aria-controls="faq-collapse5A">
                                    <span class="text-body fs-16 fw-bold">Which Email Clients and protocols are supported?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse5A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">You can send and receive emails using any desktop-based email client such as Microsoft Outlook, Outlook Express, Mozilla Thunderbird, Eudora, Entourage 2004, Windows Mail, etc. We also have a guide on how you can configure different email clients to send/receive emails. The enterprise email product supports the POP, IMAP and MAPI protocols.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse6A" aria-expanded="false" aria-controls="faq-collapse6A">
                                    <span class="text-body fs-16 fw-bold">Which mobile phones can I access my mail from?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse6A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Your email can be accessed using any Smartphone or Tablet. The Gmail interface is compatible on all major Operating systems such as iOS, Android, Windows Mobile, Symbian and Blackberry.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse7A" aria-expanded="false" aria-controls="faq-collapse7A">
                                    <span class="text-body fs-16 fw-bold">If I only want one of the products, do I have to buy the entire suite?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse7A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes. Google Workspace is designed as an all-in-one solution with integrated tools that work seamlessly together. For instance, you can receive a message in Gmail and instantly convert it into a Calendar event. When you make a comment in Docs, Sheets or Slides, collaborators automatically receive email alerts. With a single click, you can launch a Hangouts video meeting from your inbox or calendar. Using these tools as a complete package improves productivity while giving your business the most value. However, you are welcome to purchase the suite and only use the services of your choice.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse8A" aria-expanded="false" aria-controls="faq-collapse8A">
                                    <span class="text-body fs-16 fw-bold">Can I create mailing lists?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse8A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes, you can create mailing lists and add/delete users, select a moderator, restrict people from joining a list or even ban users from a list.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse9A" aria-expanded="false" aria-controls="faq-collapse9A">
                                    <span class="text-body fs-16 fw-bold">What is your SPAM policy?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse9A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">When you sign up for a Google Workspace account, you agree not to use the account to send spam, distribute viruses, or otherwise abuse the service. All users on your domain are subject to these agreements, which are part of the Google Workspace Acceptable Use Policy. If Google identifies a Google Workspace user who is violating these agreements, we reserve the right to immediately suspend the user. If the problem is domain-wide, we reserve the right to suspend the entire account and deny administrator access to all the Google Workspace services. In such cases, we send a notification to the registered secondary email address for the domain administrator.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse10A" aria-expanded="false" aria-controls="faq-collapse10A">
                                    <span class="text-body fs-16 fw-bold">Can I use Auto Responders?</span>
                                </button>
                            </h2>
                            <div id="faq-collapse10A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes, you can. Use Gmail's vacation responder to let people know that you won't be able to get back to them right away. While your vacation responder is turned on, Gmail will send your reply to people who email you.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collaps11A" aria-expanded="false" aria-controls="faq-collaps11A">
                                    <span class="text-body fs-16 fw-bold">Can I transfer my existing Google Workspace?</span>
                                </button>
                            </h2>
                            <div id="faq-collaps11A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">Yes. During the transfer, we move all your email accounts from the old provider to us by keeping the data intact. However, your existing tenure with the other provider, if any does not get moved to us.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 mb-4" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collaps11A" aria-expanded="false" aria-controls="faq-collaps11A">
                                    <span class="text-body fs-16 fw-bold">How do I generate a transfer token?</span>
                                </button>
                            </h2>
                            <div id="faq-collaps11A" class="accordion-collapse collapse" data-bs-parent="#accordionFaq2">
                                <div class="accordion-body pt-0">If you have access to the Google Workspace Admin Console, you can generate the transfer token yourself. Follow the steps below to generate the transfer token:</div>
                                <ul class="list-unstyled d-flex flex-column gap-3 mb-3 ps-4">
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">Go to <a href="https://admin.google.com/TransferToken">https://admin.google.com/TransferToken.</a> 
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">Sign in with your Google Workspace Administrator username and password.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">Click on transfer if you bought your package through google or a reseller.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">The page will generates a token.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">The transfer token is valid for a period of 30 days.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start gap-3">
                                        <div class="w-6 h-6 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="las la-check"></i>
                                        </div>
                                        <p class="mb-0">After expiry, a new transfer token can be generated from Google Workspace Admin Console.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./components/footer.php') ?>
</body>

</html>