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
    <meta name="keywords" content="">
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

    <!-- Banner -->
    <div class="about-banner pb-120 bg-custom-5">
        <div class="container">
            <div class="row g-4 align-items-center align-items-xxl-end">
                <div class="col-xl-7">
                    <div class="d-flex align-items-center gap-2">
                        <div class="w-3 h-3 rounded-circle bg-success flex-shrink-0"></div>
                        <span class="d-block fw-semibold mb-0 text-success">
                            About CloudHosti
                        </span>
                    </div>
                    <h1 class="mb-6 text-white">
                        Empowering Businesses With Fast, Reliable and Modern Hosting
                    </h1>
                    <p class="text-white max-text-60 mb-8 text-opacity-75">
                        CloudHosti is built on a simple belief — technology should accelerate growth, not complicate it. We provide powerful hosting solutions backed by high-performance servers, enterprise-grade security, and a network engineered for speed and stability. With unmatched support and transparent service, CloudHosti helps businesses, developers, and creators build with confidence in an always-connected world.
                    </p>
                    
                </div>
                <div class="col-xl-5">
                    <div class="about-banner__img">
                        <img src="assets/images/deal-hend.svg" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Banner -->

    <!-- Our Story -->
    <div class="pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <!-- <img src="assets/img/our-story-img-1.png" alt="imge" class="img-fluid"> -->
                     <img src="assets/images/working_with_computer.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <h2 class="h5 d-inline-flex align-items-center gap-2 mb-4 text-primary" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="d-inline-block">
                            Our Story
                        </span>
                        <span class="d-inline-block w-15 h-1 bg-primary"></span>
                    </h2>
                    <p class="mb-6 fw-medium" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        CloudHosti was created with a clear mission — to make powerful hosting accessible, reliable, and simple for everyone. 
                        What began as a small initiative to provide developers with fast, affordable hosting has grown into a platform trusted 
                        by businesses, creators, and tech teams across the globe.
                    </p>
                    <p class="mb-6 fw-medium" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        In the early days, we focused on offering high-performance servers that could be launched within minutes, giving developers 
                        the freedom to build and experiment without complexity. As the digital world evolved, so did we. CloudHosti expanded its 
                        infrastructure, improved its network capacity, and enhanced its product ecosystem to support both beginners and rapidly 
                        scaling businesses.
                    </p>
                    <p class="mb-6 fw-medium" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Today, CloudHosti proudly serves a diverse community — from individuals learning to code, to startups shaping new ideas, 
                        to growing companies that need dependable infrastructure. With advanced solutions including CloudHosting, dedicated 
                        servers, and container-ready environments like Kubernetes, we continue to innovate with one strong belief:
                        <strong>technology should empower growth, not limit it.</strong>
                    </p>
                    <h5 class="text-success">Trade License: TRAD/DNCC/028499/2025</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- /Our Story -->

    <!-- Story Timeline -->
    <section class="story-timeline-section position-relative z-1 bg-gradient-primary pt-120 pb-60">
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="mb-4 text-center text-white" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Our Growth, Your Advantage
                        </h2>
                        <p class="mb-0 text-white text-center mx-auto max-text-60 text-opacity-75" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            CloudHosti’s worldwide data centers give you the power to host closer to your audience. Experience superior speed, reliability, and eco-friendly hosting that supports a cleaner digital environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper timeline-slider-nav" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2020
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2021
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2022
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2023
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2024
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="story-timeline text-center">
                                    <div class="story-timeline__time">
                                        2025
                                    </div>
                                    <div class="story-timeline__dot"></div>
                                </div>
                            </div>
                        </div>
                        <button class="timeline-slider-nav__prev">
                            <i class="las la-angle-left"></i>
                        </button>
                        <button class="timeline-slider-nav__next">
                            <i class="las la-angle-right"></i>
                        </button>
                    </div>
                    <div class="swiper timeline-slider-content" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        VPS Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2020 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        Wordpress Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2021 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        Shared Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2022 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        Linux Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2023 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        VPS Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2024 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 p-md-12 p-xl-15">
                                    <h5 class="mb-4 text-white">
                                        VPS Hosting Launch
                                    </h5>
                                    <p class="mb-0 text-white max-text-60 text-opacity-75">
                                        Hostcity was founded in 2025 to meet the needs of developers who were looking for
                                        simple, affordable cloud computing solutions. Our first product, the Droplet, is an
                                        easy-to-use virtual machine that can be spun up in just minutes. e small-to-
                                        businesses that are at the heart of innovation today.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <div class="pt-60 pb-120">
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="text-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <h2 class="mb-4">
                                Meet The CEO
                            </h2>
                            <!-- <p class="mb-0 max-text-48 mx-auto">
                                130+ dedicated professionals driven by a shared passion for delivering exceptional work.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="team">
                        
                    </div>
                </div>
                <div class="col-md-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="team">
                        <img src="assets/images/imran-gray.jpg" alt="image" class="img-fluid w-100">
                        <div class="team__content p-4 p-xl-8">
                            <div class="d-flex align-items-start gap-2">
                                <div class="flex-grow-1">
                                    <h6 class="mb-2 text-white text-shadow-lg">S R Mohammad Imran</h6>
                                    <span class="d-block text-white fs-14 text-shadow-sm">
                                        Founder & CEO
                                    </span>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="team__social">
                                        <button type="button" class="team__btn-expand">
                                            <i class="las la-plus"></i>
                                        </button>
                                        <ul class="team__social-list">
                                            <li>
                                                <a href="https://www.facebook.com/raining1012900/" class="team__social-link">
                                                    <i class="lab la-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://linkedin.com/in/itsrain" class="team__social-link">
                                                    <i class="lab la-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500" data-sal-easing="ease-in-out-sine">
                    <div class="team">
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Team -->

    <?php include('./components/footer.php') ?>
</body>

</html>