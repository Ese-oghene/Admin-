<?php

include "class/user.class.php";


if (isset($_POST["login"])) {
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];

   
    $login = new Login();
     $login->getUser($uid,$pwd);
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/remixicon.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/odometer.min.css">
<link rel="stylesheet" href="assets/css/fancybox.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/dark-theme.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<title>Raxa - Money Transfer & Banking HTML Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="loader js-preloader">
<div></div>
<div></div>
<div></div>
</div>


<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>


<div class="page-wrapper">

<header class="header-wrap style1">
<div class="header-top">
<button type="button" class="close-sidebar">
<i class="ri-close-fill"></i>
</button>
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-12">
<div class="header-top-left">
<ul class="contact-info list-style">
<li><i class="flaticon-call"></i> <a href="tel:02459271449">(+024) 592 71 449</a></li>
<li><i class="flaticon-email-1"></i> <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#90f8f5fcfcffd0e2f1e8f1bef3fffd"><span class="__cf_email__" data-cfemail="acc4c9c0c0c3ecdecdd4cd82cfc3c1">[email&#160;protected]</span></a></li>
<li><i class="flaticon-pin"></i><p>St. Here Mandalay, New York, U.K</p></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="header-top-right">
<ul class="header-top-menu list-style">
<li><a href="contact.html">Support</a></li>
<li><a href="contact.html">Help</a></li>
</ul>
<div class="select-lang">
<i class="ri-global-line"></i>
<div class="navbar-option-item navbar-language dropdown language-option">
<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="lang-name"></span>
</button>
<div class="dropdown-menu language-dropdown-menu">
<a class="dropdown-item" href="#">
<img src="assets/img/uk.png" alt="flag">
 English
</a>
<a class="dropdown-item" href="#">
<img src="assets/img/china.png" alt="flag">
简体中文
</a>
<a class="dropdown-item" href="#">
<img src="assets/img/uae.png" alt="flag">
العربيّة
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img class="logo-light" src="assets/img/logo.png" alt="logo">
<img class="logo-dark" src="assets/img/logo-white.png" alt="logo">
</a>
<div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
<div class="menu-close xl-none">
<a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
</div>
<ul class="navbar-nav ms-auto">

<li class="nav-item  has-dropdown">

</li> 


<div class="header-btn lg-none">
<a href="register.html" class="btn style1">Login</a>
</div>
</div>
</div>
</nav>
<div class="mobile-bar-wrap">
<div class="mobile-sidebar">
<i class="ri-menu-4-line"></i>
</div>
<button class="searchbtn xl-none" type="button">
<i class="flaticon-search"></i>
</button>
<div class="mobile-menu xl-none">
<a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
</div>
</div>
</div>
<div class="search-area">
<div class="container">
<form action="#">
<div class="form-group">
<input type="search" placeholder="Search Here" autofocus>
</div>
</form>
<button type="button" class="close-searchbox">
<i class="ri-close-line"></i>
</button>
</div>
</div>
</div>
</header>


<div class="content-wrapper">

<div class="breadcrumb-wrap bg-spring">
<img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
<img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
<img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
<img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7 col-md-8 col-sm-8">
<div class="breadcrumb-title">
<h2>Login</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index.html">Home </a></li>
 <li>Login</li>
</ul>
</div>
</div>
<div class="col-lg-5 col-md-4 col-sm-4 xs-none">
<div class="breadcrumb-img">
<img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
<img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
<img src="assets/img/breadcrumb/breadcrumb-3.png" alt="Image">
</div>
</div>
</div>
</div>
</div>


<section class="Login-wrap ptb-100">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="login-form-wrap">
<div class="login-header">
<h3>Login Here</h3>
<p>Welcome Back!! Login To Your Account</p>
</div>
<div class="login-form">
<div class="login-body">
<form class="form-wrap" action="" method="POST">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input id="text" name="uid" type="text" placeholder="Username">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input id="pwd" name="pwd" type="password" placeholder="Password">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6">
<div class="checkbox style3">
<input type="checkbox" id="test_1">
<label for="test_1">
Remember Me</a>
</label>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
<a href="recover-password.html" class="link style1">Forgot Password?</a>
</div>
<div class="col-lg-12">
<div class="form-group">
<button class="btn style1" name="login">Login Now</button>
</div>
</div>
<div class="col-md-12 text-center">
<p class="mb-0">Don’t Have an Account? <a class="link style1" href="register.html">Create One</a></p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>


<footer class="footer-wrap bg-rock">
<div class="container">
<img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one">
<img src="assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two">
<div class="row pt-100 pb-75">
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="footer-widget">
<a href="index.html" class="footer-logo">
<img src="assets/img/logo-white.png" alt="Image">
</a>
<p class="comp-desc">
On the other hand, we denounce whteous indig nation and dislike men wh beguiled moraized er hand consec teturus adipis iscing elit eiusmod tempordunt labore dolore magna aliqua consector tetur adip iscing.
</p>
<div class="social-link">
<ul class="social-profile list-style style1">
<li>
<a target="_blank" href="https://facebook.com/">
<i class="ri-facebook-fill"></i>
</a>
</li>
<li>
<a target="_blank" href="https://twitter.com/">
<i class="ri-twitter-fill"></i>
</a>
</li>
<li>
<a target="_blank" href="https://linkedin.com/">
<i class="ri-linkedin-fill"></i>
</a>
</li>
<li>
<a target="_blank" href="https://instagram.com/">
<i class="ri-pinterest-fill"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
<div class="footer-widget">
<h3 class="footer-widget-title">Our Company</h3>
<ul class="footer-menu list-style">
<li>
<a href="about.html">
<i class="flaticon-next"></i>
Company &amp; Team
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Our Services
 </a>
</li>
<li>
<a href="team.html">
<i class="flaticon-next"></i>
News &amp; Blog
</a>
</li>
<li>
<a href="pricing.html">
<i class="flaticon-next"></i>
Pricing Plan
</a>
</li>
<li>
<a href="contact.html">
<i class="flaticon-next"></i>
Contact Us
</a>
</li>
<li>
<a href="privacy-policy.html">
<i class="flaticon-next"></i>
Privacy Policy
</a>
</li>
</ul>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
<div class="footer-widget">
<h3 class="footer-widget-title">Products</h3>
<ul class="footer-menu list-style">
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Online Payment
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Deposit Skim
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Online Shopping
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Master Card
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Receive Money
</a>
</li>
<li>
<a href="service-one.html">
<i class="flaticon-next"></i>
Affiliate Program
</a>
</li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
<div class="footer-widget">
<h3 class="footer-widget-title">Subscribe</h3>
 <p class="newsletter-text">Tablished fact that a reader will be distrated by the readable content</p>
<form action="#" class="newsletter-form">
<input type="email" placeholder="Your Email">
<button type="button">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
<div class="copyright-text">
<p> <i class="ri-copyright-line"></i><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Raxa. All Rights Reserved By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</footer>

</div>


<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/tweenmax.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/raxa/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Oct 2022 03:55:15 GMT -->
</html>