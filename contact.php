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

    <!-- Breadcrumb -->
    <section class="banner-bg bg-custom-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <span class="fs-18 fw-bold text-primary mb-2 sal-animate" 
                            data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" 
                            data-sal-easing="ease-in-out-sine">
                            Contact Us
                        </span>

                        <h1 class="text-white mb-3 sal-animate" 
                            data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" 
                            data-sal-easing="ease-in-out-sine">
                            Let’s Connect &amp; Build Your Digital Success Together
                        </h1>

                        <p class="text-white mb-0 max-text-60 mx-auto text-opacity-75 sal-animate" 
                        data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" 
                        data-sal-easing="ease-in-out-sine">
                            Whether you need reliable hosting, expert guidance, or a solution tailored to your business, 
                            our team at CloudHosti is here to help. Reach out anytime and let’s take your online presence 
                            to the next level.
                        </p>
                    </div>

                </div>
            </div>
            <div class="pt-80">
                <div class="row justify-content-between g-4">
                    <div class="col-lg-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="d-flex align-items-center gap-3 mb-5">
                            <div class="w-11 h-1 bg-primary"></div>
                            <h6 class="fs-16 text-white mb-0">Office Address</h6>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                            <li>
                                <p class="text-white text-opacity-75 fw-medium mb-0">Head Office : CloudHosti</p>
                            </li>
                            <li>
                                <p class="text-white text-opacity-75 fw-medium mb-0">House# 27/1/B, Road# 3, Shyamoli</p>
                            </li>
                            <li>
                                <p class="text-white text-opacity-75 fw-medium mb-0"> Dhaka, Bangladesh</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                        <div class="d-flex align-items-center gap-3 mb-5">
                            <div class="w-11 h-1 bg-primary"></div>
                            <h6 class="fs-16 text-white mb-0">Hotline</h6>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                            <li>
                                <a href="#" class="text-decoration-none">
                                    <p class="text-white text-opacity-75 fw-medium mb-0">+88 01312 448800</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">
                                    <p class="text-white text-opacity-75 fw-medium mb-0">+88 01670 225611</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">
                                    <p class="text-white text-opacity-75 fw-medium mb-0"> support@cloudhosti.com</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="d-flex align-items-center gap-3 mb-5">
                            <div class="w-11 h-1 bg-primary"></div>
                            <h6 class="fs-16 text-white mb-0">Social Media</h6>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                            <li>
                                <a href="https://www.facebook.com/cloudhosti" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/cloud-hosti" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                    Linkedin
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/cloudhosti" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                    Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Breadcrumb -->

    <!-- Contact Form -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="h3 mb-2" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Send US a Message</h2>
                    <p class="mb-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Your email address will not be published Required fields are marked *</p>
                    <form action="" method="post" class="contact-form">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <label class="text-black fs-14 fw-bold mb-2">Full Name: <span class="text-primary">*</span></label>
                                <input type="text" placeholder="Name" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                            </div>
                            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                                <label class="text-black fs-14 fw-bold mb-2">Email Address: <span class="text-primary">*</span></label>
                                <input type="email" placeholder="Email" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                            </div>
                            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <label class="text-black fs-14 fw-bold mb-2">Subject:</label>
                                <input type="text" placeholder="Enter Your Subject" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                            </div>
                            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="300" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                                <label class="text-black fs-14 fw-bold mb-2">Phone:</label>
                                <input type="number" placeholder="Number" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                            </div>
                            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <label class="text-black fs-14 fw-bold mb-2">Message: <span class="text-primary">*</span></label>
                                <textarea class="form-control px-6 py-4 border h-30 bg-white bg-opacity-50"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-arrow btn-arrow-lg btn-lg fs-14 fw-medium rounded mt-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <span class="btn-arrow__text">
                                Post Comment
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/contact.svg" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="300" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Form -->

    <?php include('./components/footer.php') ?>
</body>

</html>