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
                        <span class="fs-18 fw-bold text-success mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Policy</span>
                        <h1 class="text-white mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Refund Policy
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
                            <h3>CloudHosti Refund Policy</h3>
                            <p class="lead">Effective date: 1 January 2024</p>
                        </div>
                        <div id="nav-id-1" class="pt-5">
                            <!-- STANDARD REFUND TERMS -->
                            <h5>Standard Refund Terms</h5>
                            <p>Products purchased from CloudHosti may be refunded only if they are canceled within <b>30 days</b> from the date of the transaction.</p>

                            <p><strong>Note:</strong> Payments made using cryptocurrencies, tokens, or any digital assets are non-refundable due to their irreversible nature and highly volatile exchange rates. CloudHosti is not responsible for any market or exchange-related risks.</p>

                            <p><strong>Note:</strong> If a client violates any applicable laws or CloudHosti’s <a href="terms-conditions.php">Terms of Service</a>, all payments made to CloudHosti become non-refundable.</p>

                            <p><strong>“Date of the transaction”</strong> refers to the date a product or service is purchased, including the date when an automatic renewal is processed. You may cancel any service at any time; however, refunds are only issued if the cancellation falls within the applicable refund period.</p>

                            <p>Certain products have unique refund terms or may not be refundable at all. Please review the product-specific details below.</p>

                            <!-- PRODUCTS AVAILABLE FOR REFUND -->
                            <h5 class="mt-4">Products Available for Refund Under Standard Terms</h5>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Shared Hosting (all plans except first payment after free trial)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>SSL Certificates</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Daily Backups</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Cloudflare Addons</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>CloudHosti Email Services</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Priority Support Addons</small>
                                </li>
                            </ul>

                            <!-- PRODUCTS NOT AVAILABLE -->
                            <h5 class="mt-4">Products Not Available for Refund</h5>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Redemption Fees</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Domain Name Renewals</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Domain Transfers (if the transfer is successful)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Privacy Protection</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Google Workspace Email</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>VPS Licenses & Addons</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Website Cleanup</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Paid Service Upgrades</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Any services suspended or terminated due to policy violations</small>
                                </li>
                            </ul>

                            <p class="mt-3">Refund abuse (such as repeated refund requests or bulk purchase-refund patterns) will result in CloudHosti declining refund requests.</p>

                            <!-- SPECIAL REFUND TERMS -->
                            <h5 class="mt-4">Products With Special Refund Terms</h5>
                            <p>Certain CloudHosti products require specific conditions to qualify for a refund:</p>

                            <h6 class="mt-4">Domain Registrations</h6>
                            <p>New domain registrations may be refunded only when:</p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>Refund request is initiated within 96 hours of registration</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>No other domain refund has been initiated within the past 24 hours</small>
                                </li>

                            </ul>

                            <p class="mt-3">.br domains (including .com.br / .net.br) are refundable only if the request is made within 168 hours (7 days).</p>

                            <h6 class="mt-4">ccTLDs That Do Not Support Refunds</h6>
                            <p>The following registries do not allow refunds under any circumstances:</p>

                            <p>.ai, .be, .ca, .ch, .cz, .dk, .es, .eu, .fr, .hu, .it, .nl, .nu, .ru, .se, .cat, .asia, .de, .uk, .in, .us, .pl, .pw, .ag, .vc, .tf, .re, .pm, .mn, .lv, .lt, .lc, .jp, .jp.net, .frl, .cl, .bz, .at, .am, .yt, .wf, .tv, .sc, .pt, .mx, .lu, .li, .la, .gr, .fm, .cx, .com.pt, .cn.com, .cc, .ar.com, .com.au, .au, .ae, .gg, .pe, .pk, .fi, .tr, .com.tr</p>

                            <h6 class="mt-4">Domain Transfers</h6>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>Refundable only if the transfer fails</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>Refund request must be initiated within <b>30 days</b></small>
                                </li>
                            </ul>

                            <h6 class="mt-4">VPS Hosting</h6>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>Refundable only if requested within <b>30 days</b> of purchase</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-info"></i>
                                    </div>
                                    <small>No VPS refunds allowed more than once within a 180-day period</small>
                                </li>
                            </ul>

                            <!-- SPECIAL DEALS -->
                            <h5 class="mt-4">Refunds for Special Deals</h5>
                            <p>CloudHosti may offer promotional deals such as free domains with long-term hosting plans. These free domains:</p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-warning rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-exclamation"></i>
                                    </div>
                                    <small>Are non-refundable</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-warning rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-exclamation"></i>
                                    </div>
                                    <small>Cannot be exchanged for other domains or services</small>
                                </li>
                            </ul>

                            <p class="mt-3">CloudHosti may issue a partial refund equal to the hosting fee minus the free domain cost, allowing you to continue using the domain for the remaining term.</p>

                            <!-- PAYMENT METHODS -->
                            <h5>Payment Methods With Special Refund Terms</h5>
                            <p>Certain payment gateways do not support direct refunds:</p>

                            <h6>Payment Methods Not Eligible for Refund to Original Source</h6>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Multibanco (Portugal)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>GCash (Philippines)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Fawry (Egypt)</small>
                                </li>
                            </ul>
                            <p class="mt-2">Refunds for these methods can only be issued to CloudHosti Balance.</p>

                            <h6>Payment Method Supporting Full Refunds Only</h6>
                            <p><small>VTC Pay (Vietnam)</small></p>

                            <!-- REFUNDS TO BALANCE -->
                            <h5>Refunds to CloudHosti Balance</h5>
                            <p>Refunds are generally issued to the original payment source. However, users may choose to receive refunds as CloudHosti Balance. Once credited to balance, this refund becomes non-reversible.</p>

                            <!-- REFUNDS FROM BALANCE -->
                            <h5>Refunds From Balance</h5>
                            <p>Overfunded balance amounts may be refunded within <b>30 days</b> of the overfunding transaction. In special cases, alternative eligible payments may be refunded if within the <b>30-day</b> window.</p>

                            <!-- CHARGEBACKS -->
                            <h5>Chargebacks</h5>
                            <p>A chargeback, payment dispute, or reversal will be treated as a breach of payment obligations. CloudHosti may:</p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Immediately suspend or terminate your CloudHosti account</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Disable credit card payments on your account</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-danger rounded-circle d-flex align-items-center justify-content-center text-white fs-12">
                                        <i class="las la-times"></i>
                                    </div>
                                    <small>Remove or lock access to your services or domain names</small>
                                </li>

                            </ul>

                            <p class="mt-3">Services and access will be restored only when:</p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle text-white d-flex justify-content-center align-items-center"><i class="las la-info"></i></div>
                                    <small>You verify the payment method (proof of payment or censored card photo)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-info rounded-circle text-white d-flex justify-content-center align-items-center"><i class="las la-info"></i></div>
                                    <small>All outstanding fees are paid, including third-party processing fees</small>
                                </li>

                            </ul>

                            <p class="mt-3">Cases involving criminal or obvious fraudulent chargebacks will result in permanent account termination with no recovery option.</p>

                            <p>If you believe a payment was made incorrectly, please contact CloudHosti Support before filing a chargeback to avoid unnecessary service interruption or fees.</p>

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