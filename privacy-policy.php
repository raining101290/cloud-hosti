<?php
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
    <!-- Breadcrumb -->
    <section class="banner-bg bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <span class="fs-18 fw-bold text-success mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Privacy Policy</span>
                        <h1 class="text-white mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Privacy Policy
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Breadcrumb -->

    <div class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="content-with-sidebar">
                        <div class="section-heading">
                            <h3>Welcome to CloudHosti Privacy Policy</h3>
                            <p class="lead">Effective date: 1 January 2024</p>
                        </div>
                        <div id="nav-id-1" class="pt-5">
                            <h5>1. Information We Collect</h5>
                            <p>
                                CloudHosti is the sole owner of all information collected across our websites and platforms. 
                                We collect information at various points to provide, improve, and secure our services.
                            </p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Personal details (name, email, phone, address)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Account credentials (username and password)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Billing information for service purchases</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Optional demographic or profile data</small>
                                </li>
                            </ul>

                            <br>

                            <h5>2. Registration & Account Information</h5>
                            <p>
                                When creating an account on CloudHosti, users are required to provide basic contact details.
                                This helps us identify users, manage access, and communicate service updates or support notifications.
                            </p>

                            <h5>3. Orders & Billing</h5>
                            <p>
                                When placing orders for hosting, domain registration, SSL, or software services, CloudHosti collects
                                necessary billing information to process payments. Payment details are securely processed via trusted
                                third-party gateways and never stored directly on our servers.
                            </p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Secure payment processing</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Billing verification and order fulfillment</small>
                                </li>
                            </ul>

                            <br>

                            <h5>4. User Profile & Tracking Information</h5>
                            <p>
                                CloudHosti may collect information through cookies, logs, analytics tools, and third-party integrations 
                                to understand user behavior, optimize site performance, and deliver personalized experiences.
                            </p>

                            <p><strong>Your behavioral data is never sold or shared with third parties.</strong></p>

                            <h5>5. Cookies</h5>
                            <p>
                                CloudHosti uses both session cookies and persistent cookies to enhance user experience.
                                Users may disable cookies from their browser settings if they choose.
                            </p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Session cookies terminate when the browser closes</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Persistent cookies help remember preferences</small>
                                </li>
                            </ul>

                            <br>

                            <h5>6. Log Files</h5>
                            <p>
                                CloudHosti automatically collects server log data including IP addresses, browser type, ISP, 
                                referring pages, device info, and timestamps. This data helps us analyze trends and improve service performance.
                            </p>

                            <br>

                            <h5>7. Communications & Marketing</h5>
                            <p>
                                Users may receive service notifications, security alerts, product updates, and promotional messages.
                                Users can opt out of non-essential communication at any time.
                            </p>

                            <h5>8. Newsletter</h5>
                            <p>
                                If users subscribe to our newsletter, only their name and email are stored for mailing purposes.
                                Every email includes an unsubscribe option.
                            </p>

                            <h5>9. Legal Disclosure</h5>
                            <p>
                                CloudHosti may disclose user information only when required to comply with legal obligations such as
                                court orders or government directives.
                            </p>

                            <h5>10. Third-Party Intermediaries</h5>
                            <p>
                                CloudHosti works with trusted partners such as payment gateways, domain registrars, and service providers 
                                necessary for delivering specific services. These parties are prohibited from using personal data for anything 
                                beyond the requested service.
                            </p>

                            <h5>11. Security Measures</h5>
                            <p>
                                We implement industry-standard security measures to safeguard user data, including encryption,
                                access controls, server monitoring, and secure data handling practices.
                            </p>

                            <h5>12. User Rights & Corrections</h5>
                            <p>
                                Users may update, correct, or request assistance regarding their stored information by contacting our support team.
                            </p>

                            <h5>13. Policy Updates</h5>
                            <p>
                                CloudHosti may update this policy periodically. All changes will be posted on this page with an updated revision date.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="footer-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-primary pt-60 pb-60 px-6 px-md-12 rounded-3 overflow-hidden position-relative z-1 text-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-xl-7 col-xxl-6">
                                <h4 class="text-white mb-4">
                                    Experience Our Service with a
                                    7-Day Risk-Free Trial
                                </h4>
                                <a href="contact.html" class="btn btn-light btn-arrow btn-arrow-xl btn-lg fs-14 fw-semibold rounded">
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
    </div> -->
    <?php include('./components/footer.php') ?>
</body>

</html>