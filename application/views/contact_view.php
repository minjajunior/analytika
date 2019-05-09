<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Contacts</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,300italic">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page">
    <div class="page-loader">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
            <p class="loader-header">Loading</p>
        </div>
    </div>
    <!-- Page Header-->
    <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up-clone="true" data-md-stick-up-offset="80px" data-lg-stick-up-offset="80px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-inner-body">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url('assets/images/logo.png')?>" alt="" />
                            </a>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="<?php echo base_url()?>">HOME</a></li>
                                <li><a href="<?php echo base_url('about')?>">ABOUT US</a></li>
                                <li><a href="<?php echo base_url('service')?>">SERVICES</a></li>
                                <li class="active"><a href="<?php echo base_url('contact')?>">CONTACTS</a></li>
                            </ul>
                        </div>
                        <div class="block-right">
                            <ul class="list-inline">
                                <li><a class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-facebook novi-icon" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-twitter novi-icon" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-google-plus novi-icon" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Page Content-->
    <section class="parallax-container bg-river-bed" data-parallax-img="<?php echo base_url('assets/images/about-bg.jpg')?>">
        <div class="parallax-content section-45 section-sm-top-60 section-sm-bottom-68">
            <div class="shell text-center">
                <div class="range range-fix">
                    <div class="cell-xs-12">
                        <h2>Contacts</h2>
                        <hr class="hr-block hr-white"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom border-bottom-gray-lighter novi-background bg-cover">
        <div class="shell">
            <div class="range range-fix">
                <div class="cell-xs-12">
                    <ul class="breadcrumbs-custom">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Feedback-form-->
    <section class="section-top-55 section-bottom-85 novi-background bg-cover">
        <div class="shell">
            <div class="range range-60 range-fix">
                <div class="cell-xs-12 cell-sm-7 cell-md-8">
                    <h3>Feedback form</h3>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform-label-outside text-left offset-top-15" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_prod-18349/bat/rd-mailform.php">
                        <div class="range">
                            <div class="cell-xs-12 cell-md-4-9">
                                <div class="form-group form-validation-outside">
                                    <label class="form-label-outside" for="contact-name-1">Your Name</label>
                                    <input class="form-control" id="contact-name-1" type="text" name="name" data-constraints="@Required"/>
                                </div>
                                <div class="form-group form-validation-outside">
                                    <label class="form-label-outside" for="contact-email-1">Your Email</label>
                                    <input class="form-control" id="contact-email-1" type="email" name="email" data-constraints="@Required @Email"/>
                                </div>
                                <div class="form-group form-validation-outside">
                                    <label class="form-label-outside" for="contact-phone-1">Phone</label>
                                    <input class="form-control" id="contact-phone-1" type="text" name="phone" data-constraints="@Required @Numeric"/>
                                </div>
                            </div>
                            <div class="cell-xs-12 cell-md-5-9 offset-top-19 offset-md-top-0">
                                <div class="form-group form-validation-outside">
                                    <label class="form-label-outside" for="contact-message-1">Your Message</label>
                                    <textarea class="form-control" id="contact-message-1" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-34">
                            <button class="btn btn-sm btn-curious-blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="cell-xs-12 cell-sm-5 cell-md-4">
                    <div class="inset-md-left-30 inset-md-right-30 inset-lg-left-70">
                        <h3>Contact Details</h3>
                        <ul class="list-terms-list-1">
                            <li>
                                <dl class="list-terms-info-1">
                                    <dt class="h5">Address</dt>
                                    <dd>Plot N0. 2203-5/32, Block No. 106,</dd>
                                    <dd>1st Floor Tancot House,</dd>
                                    <dd>Sokoine Drive.</dd>
                                    <dd>P. O. Box 76619 Dar es Salaam,</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-info-1">
                                    <dt class="h5">Phone</dt>
                                    <dd><a href="tel:#">+255 22 2110535</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-info-1">
                                    <dt class="h5">Email</dt>
                                    <dd>info@safarianalytika.co.tz</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('shared/footer')?>