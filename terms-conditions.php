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
                        <span class="fs-18 fw-bold text-success mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Terms & Conditions</span>
                        <h1 class="text-white mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            Terms & Conditions
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
                            <h3>CloudHosti Terms &amp; conditions</h3>
                            <p class="lead">Effective date: 1 January 2024</p>
                        </div>
                        <div id="nav-id-1" class="pt-5">
                            <p>All services provided by CloudHosti. may be used for lawful purposes only. Transmission, storage or presentation of any information, data or material in violation of any United States federal, state or city law and Bangladesh Govt law is prohibited. This includes, but is not limited to: copyrighted material, material we judge to be threatening or obscene, or material protected by trade secret and other statute. The subscriber agrees to indemnify and hold harmless CloudHosti. from any claims resulting from the use of service which damages the subscriber or any other party. Prohibited are sites that promote any illegal activity or present content that may be damaging to CloudHosti' servers, or any other server on the Internet. Links to such materials are also prohibited.</p>
                            <h5>Unacceptable content or links for shared hosting,windows hosting:</h5>
                            <p>This privacy policy (statement) covers all websites that are operated by CloudHosti. Because CloudHosti wants to demonstrate its commitment to our users' privacy, we have agreed to disclose our information practices.</p>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Topsites</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>IRC Scripts/Bots</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Proxy Scripts/Anonymizers</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Pirated Software/Warez</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>IP Scanners</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Bruteforce Programs/Scripts/Applications</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Mail Bombers/Spam Scripts</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Potential harm to minors is strictly forbidden, including but not limited to child pornography or content perceived to be child pornography (Lolita):</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Any site found to host child pornography or linking to child pornography will be suspended immediately without notice.</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>File Dump/Mirror Scripts (similar to rapidshare)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Commercial Audio Streaming (more than one or two streams)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Escrow/Bank Debentures</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>High-Yield Interest Programs (HYIP) or Related Sites</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Investment Sites (FOREX, E-Gold Exchange, Second Life/Linden Exchange, Ponzi, MLM/Pyramid Scheme)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Sale of any controlled substance without prior proof of appropriate permit(s)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Prime Banks Programs</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Lottery Sites</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>MUDs/RPGs/PBBGs</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Hateful/Racist/Harassment oriented sites</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Hateful/Racist/Harassment oriented sites</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Hacker focused sites/archives/programs</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Sites promoting illegal activities</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Forums and/or websites that distribute or link to warez/pirated/illegal content</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Bank Debentures/Bank Debenture Trading Programs</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Fraudulent Sites (Including, but not limited to sites listed at aa419.org & escrow-fraud.com)</small>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Mailer Pro</small>
                                </li>
                            </ul>
                            <h5 class="mt-5 mb-5">Unacceptable content or links for Cpanel Reseller, Master Reseller, Cloud Servers and dedicated servers:</h5>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>IRCD (irc servers)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>IRC Scripts/Bots</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Pirated Software/Warez</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>IP Scanners</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Bruteforce Programs/Scripts/Applications</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Mail Bombers/spam Scripts</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Escrow</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Potential harm to minors is strictly forbidden, including but not limited to child pornography or content perceived to be child pornography (Lolita): Any site found to host child pornography or linking to child pornography will be suspended immediately without notice.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>High-Yield Interest Programs (HYIP) or Related Sites</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Investment Sites (FOREX, E-Gold Exchange, Second Life/Linden Exchange, Ponzi, MLM/Pyramid Scheme)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Sale of any controlled substance without prior proof of appropriate permit(s)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Prime Banks Programs</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Lottery Sites</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Hateful/Racist/Harassment oriented sites</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Hacker focused sites/archives/programs</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Sites promoting illegal activities</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Forums and/or websites that distribute or link to warez/pirated/illegal content</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Bank Debentures/Bank Debenture Trading Programs</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Fraudulent Sites (Including, but not limited to sites listed at aa419.org & escrow-fraud.com)</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Mailer Pro</small>
                                </li>
                            </ul>

                            <h5 class="mt-5 mb-5">Overselling / Fair Usage</h5>
                            <p>You must not needlessly create accounts, install any script/software or upload any files which add space usage if you have no intention of using them. As part of our fair usage policy, excessive CPU usage is not allowed. You may not initiate the following on our shared hosting servers:</p>

                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Run any type of interactive real-time chat applications that require server resources. Remotely-hosted services are fully allowed.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Run stand-alone, unattended server-side processes at any point in time on the server.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Run any type of web spider or indexer (including Google Cash / AdSpy) on shared servers.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Run cron entries with intervals of less than 15 minutes.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Run download sites.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>cPanel backup file is disabled as customers are abusing it by generating 10 or more backups at one time or running an automated backup every 5 minutes. This is not allowed. You can however request from us to backup an account for you and we will gladly do it.</small>
                                </li>

                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Customer may not use disk space as a file repository, or dump site. This includes but is not limited to warez, serialz, sound files (mp3/wav), applications, zip/rar/iso files. Your account is to be used for hosting a website and not for file storage.</small>
                                </li>
                            </ul>
                            
                            <h5 class="mt-5 mb-5">Resource Limitations</h5>
                            <p>In order to provide the best uptime possible, your sites must comply with the following limitations:</p>
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>PHP:</small><br/>
                                    <span>upload_max_filesize=20M</span>
                                    <span>memory_limit=120M</span>
                                    <span>max_execution_time=30</span>
                                    <span>max_input_time=60</span>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>MySQL:</small><br/>
                                    <span>max_user_connection=25</span>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>CPU:</small><br/>
                                    <span>No script may use more than 20% of CPU</span>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Memory:</small><br/>
                                    <span>No Script may use more than 300 MB of memory or executing more than 20 processes continuously for longer than 15 minutes</span>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center">
                                        <i class="las la-check"></i>
                                    </div>
                                    <small>Email:</small><br/>
                                    <span>100 emails per hour, per domain</span>
                                </li>
                            </ul> 

                            <h5 class="mt-5 mb-5">File Usage and Storage</h5>
                            <p>Hosting accounts are not to be used for the purposes of distributing and/or storing an unusual amount of files. We are a web hosting service not a remote file storage service. Any web site whose disk space usage for storing the files exceed 75% of its total usage, either in terms of total size or number of files, will be deemed to be using unusual amount of files. At that point, if we find that those files are illegal or harmful in any way, you will be suspended or terminated with or without prior notice depending on the severity of the harm.</p>
                            <h5 class="mt-5 mb-5">Unlimited Space & Bandwidth</h5>
                            <p>Nothing in the world is unlimited, and that includes server space and bandwidth. Here at CloudHosti, we do not keep track of how much space you are using. Clients are allowed to use as much as long as they are not crippling the servers with the amount of space, bandwidth, accounts and server resources they are using. Generally, with unlimited space and bandwidth, you will be able to use it without encountering problems but if your website is crippling the server then CloudHosti has the right to suspend or terminate your site with or without prior notice.</p>
                            <h5 class="mt-5 mb-5">Traffic Usage</h5>
                            <p>All account plans come with a predetermined amount of traffic allowance. We monitor all accounts and bill $2.00 for each gig of traffic exceeded. This amount is not prorated, meaning that 1 mb - 1 gig will be treated and billed as the same.</p>
                            <h5 class="mt-5 mb-5">Server Abuse</h5>
                            <p>Any attempt to undermine or cause harm to a server or customer of CloudHosti is strictly prohibited. As our customer you are responsible for all your accounts. Should you violate the Terms of Services outlined within, your account will be cancelled without chance of refund.</p>
                            <h5 class="mt-5 mb-5">Support</h5>
                            <p>CloudHosti provide provide support by ticket system and live chat. CloudHosti response of support ticket within 45 minutes. And maximum response time within 24 hours. Live chat is available 10 AM to 6 PM during Dhaka, Bangladesh business hours.</p>
                            <h5 class="mt-5 mb-5">Billing</h5>
                            <p>By the Account Activation Date of each month, CloudHosti shall either:</p> 
                            <p>(1) debit the client's credit card (when such information has been provided by the client); or</p>
                            <p>(2) deliver, by e-mail or regular mail, an invoice in accordance with the applicable Service Fees for services rendered for the current month.</p>
                            <p>When an invoice is delivered to the client, payment shall be remitted to CloudHosti by no later than the specified payment due date. CloudHosti shall be entitled to immediately terminate this agreement for client's failure to make timely payments. You will be provided with an invoice on a monthly basis. All credit cards are billed automatically on a monthly basis. It is the client's responsibility to ensure that they have sufficient credit to cover this transaction. In the event that there is insufficient credit, we will send an e-mail notification, at which point we will need to be provided with another credit card account number within 24 hours. If we do not receive a response within 24 hours, the account, and all accounts under that account plan, will be suspended.</p>
                            <h5 class="mt-5 mb-5">Bangladesh Business Hours</h5>
                            <p>10:00 AM-6:00 PM (Sat-Thu) except Bangladesh government holidays.</p>
                            <h5 class="mt-5 mb-5">Compliance with local laws</h5>
                            <p>CloudHosti. makes no representation or warranty that the content available on this Site or the Services found at this Site are appropriate in every country or jurisdiction, and access to this Site or the Services found at this Site from countries or jurisdictions where its content is illegal is prohibited. Users who choose to access this Site or the Services found at this Site are responsible for compliance with all local laws, rules and regulations.</p>
                            <h5 class="mt-5 mb-5">Disclaimer</h5>
                            <p>CloudHosti cannot be held liable for system down time, crashes or data loss. We cannot be held liable for any predicated estimate of profits which a client would have gained if their site was functioning. Certain services provided by CloudHosti are resold. Thus, certain equipment, routing, software and programming used by CloudHosti are not directly owned or written by CloudHosti. Moreover, CloudHosti holds no responsibility for the use of our clients' accounts. Failure to comply with any terms or conditions will result in the automatic deactivation of the account in question. We reserve the right to remove any account, without advance notice for any reason without restitution, as CloudHosti sees fit.</p>
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