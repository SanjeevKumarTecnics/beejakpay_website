<?php 
    
    if(isset($_POST['submit'])){
       
        $captchaTest = $_POST['captchaTest'];
        $cpatchaTextBox = $_POST['cpatchaTextBox'];
        
        if($captchaTest == $cpatchaTextBox){
           
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $company = $_POST['company'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $job_title = $_POST['job_title'];
            $comments = $_POST['comments'];
            $avgMonInovoice = $_POST['avgMonInovoice'];
            $circulus = $_POST['circulus'];
            $country_code = $_POST['country_code'];
        
            $to = "info@beejakpay.com,vpraveen.designer@gmail.com,sanjusingh736@gmail.com";
            $subject = "BEEJAKPAY NOTIFICATION";
            $message = "Hello BEEJAKPAY, \n".$fname." ".$lname." try to contact you and bleow are the details : \nCompany : ".$company."\nPhone Number :".$country_code." ".$phone."\nEamil-Id : ".$email."\nJob Title : ".$job_title."\nAverage Monthly Invoices Processed : ".$avgMonInovoice."\nAbout Circulus : ".$circulus."\nComments : ".$comments;
            
           
            $headers = 'From: info@beejakpay.com' ."\r\n";
            $headers .= 'Cc: vpraveen.designer@gmail.com' . "\r\n";
            $headers .='Reply-To: info@beejakpay.com'. "\r\n" ;
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            if(mail($to,$subject,$message,$headers)){
                ?>
<script>
    $('#success_modal').modal('show');
</script>
<?php
            }
            else{
                ?>
<script>
    $('#warning_modal').modal('show');
</script>
<?php
            }
            
        }

    }

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riyaqas - Sass Landing HTML Template</title>
    <!-- favicon -->
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- animated slider -->
    <link rel="stylesheet" href="assets/css/animated-slider.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body onload="createCaptcha()">

    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="http://zwin.io/html/riyaqas/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar area start -->
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper mobile-logo">
                    <a href="index-2.html" class="logo">
                        <img src="assets/img/logo.png" alt="logo" style="max-width: auto;">
                    </a>
                </div>
                <div class="nav-right-content">
                    <ul>
                        <li class="search">
                            <i class="ti-search"></i>
                        </li>
                        <li class="cart">
                            <div class="cart-icon"><i class="la la-shopping-cart"></i></div>
                            <div class="widget_shopping_cart_content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/img/checkout/7.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <a class="title" href="#">Smart watch red color</a>
                                                <p>Quantity: 1</p>
                                                <span class="price">$150.00</span>
                                            </div>
                                        </div>
                                        <a class="remove-product" href="#"><span class="ti-close"></span></a>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/img/checkout/8.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <a class="title" href="#">Smart watch red color</a>
                                                <p>Quantity: 1</p>
                                                <span class="price">$150.00</span>
                                            </div>
                                        </div>
                                        <a class="remove-product" href="#"><span class="ti-close"></span></a>
                                    </li>
                                </ul>
                                <p class="total">
                                    <strong>Subtotal:</strong>
                                    <span class="amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>129.00
                                    </span>
                                </p>
                                <p class="buttons">
                                    <a href="checkout.html" class="button">View Card & Check out</a>
                                </p>
                            </div>
                        </li>
                        <li class="notification">
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span class="notification-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Riyaqas_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="Riyaqas_main_menu">
                <div class="logo-wrapper desktop-logo">
                    <a href="index-2.html" class="logo">
                        <img src="assets/img/logo.png" alt="logo" style="max-width: inherit !important;">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li>
                        <a href="#">Overview</a>
                    </li>
                    <li>
                        <a href="#">Benefits</a>
                    </li>
                    <li>
                        <a href="#">Process Flow</a>
                    </li>
                    <li>
                        <a href="#">About Tecnics</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Software Home</a></li>
                            <li><a href="home02.html">App Home</a></li>
                            <li><a href="home03.html">Startup Company</a></li>
                            <li><a href="home04.html">Management software</a></li>
                            <li><a href="home05.html">Tech-company</a></li>
                            <li><a href="home06.html">New Technology</a></li>
                            <li><a href="home07.html">Digital Marketing</a></li>
                            <li><a href="home08.html">Pos Device</a></li>
                            <li><a href="home09.html">Hosting</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="offer.html">Offer</a></li>
                            <li><a href="error.html">Error 404</a></li>
                            <li><a href="comming-soon.html">Coming Soon</a></li>
                            <li><a href="work-processing.html">Work Processing</a></li>
                            <li><a href="job-listing.html">Job listing</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                            <li><a href="job-apply.html">Job Apply</a></li>
                            <a href="contact.html">Contact</a>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li>
                        <a href="#" class="btn btn-radius btn-red" style="color: #fff;">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->

    <!-- header area start -->
    <div class="header-area header-bg" style="background-image:url(assets/img/bg/banner-bg.png);">
        <div class="container">
            <div class="banner-slider banner-slider-one">
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Slow & <span>Inefficent</span> Invoice Process ?</h1>
                                    <p class="s-animate-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since.</p>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <!-- <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a> -->
                                        <h4 class="s-animate-3 extra_content">DIGITIZE | AUTOMATE | INTEGRATE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/banner/1.png" alt="banner-img">
                                    <img class="banner-1-img2" src="assets/img/banner/2.png" alt="banner-img">
                                    <img class="banner-1-img3" src="assets/img/banner/3.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6  offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Fed-Up with <span>Manual</span> Data Entry ?</h1>
                                    <p class="s-animate-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since.</p>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <!-- <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a> -->
                                        <h4 class="s-animate-3 extra_content">DIGITIZE | AUTOMATE | INTEGRATE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/banner/01.png" alt="banner-img">
                                    <img class="banner-1-img2" src="assets/img/banner/02.png" alt="banner-img">
                                    <img class="banner-1-img3" src="assets/img/banner/03.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6  offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Lost Vendors <span>Invoices ?</span></h1>
                                    <p class="s-animate-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since.</p>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <!-- <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a> -->
                                        <h4 class="s-animate-3 extra_content">DIGITIZE | AUTOMATE | INTEGRATE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/banner/1.png" alt="banner-img">
                                    <img class="banner-1-img2" src="assets/img/banner/2.png" alt="banner-img">
                                    <img class="banner-1-img3" src="assets/img/banner/03.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6  offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Overdues and <span>Penalties ?</span></h1>
                                    <p class="s-animate-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since.</p>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <!-- <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a> -->
                                        <h4 class="s-animate-3 extra_content">DIGITIZE | AUTOMATE | INTEGRATE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/banner/1.png" alt="banner-img">
                                    <img class="banner-1-img2" src="assets/img/banner/2.png" alt="banner-img">
                                    <img class="banner-1-img3" src="assets/img/banner/03.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area End -->

    <!-- vidoe section start-->
    <div class="sba-work-area img-with-video-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 order-lg-12 desktop-center-item">
                    <div class="section-title ml-xl-4 mb-lg-0 style-two text-lg-left text-center wow  fadeInRight animated"
                        data-wow-duration="1s" data-wow-delay="0.3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <h2 class="title">Need
                            for <span>our product</span></h2>
                        <p>Is your
                            organisation looking for a solution that can Digitize,
                            Automate and Integrate your day-to-day invoicing and
                            accounts payable process? We are here to cater to your needs
                            and provide you an Accounts Payable solution leveraging AI-ML
                            that will digitally transform your manual efforts and errors into
                            a seamless automated workflow.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 order-lg-1 wow  fadeInLeft animated" data-wow-duration="1s"
                    data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <div class="img-with-video">
                        <div class="img-wrap">
                            <img src="assets/img/we-provide/01.png" alt="video">
                            <div class="hover">
                                <a href="assets/img/intro.mp4" class="video-play-btn mfp-iframe"><img
                                        src="assets/img/we-provide/3.svg" alt="video"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video section end -->





    <!-- pain point area start -->
    <div class="sbs-what-riyaqas pd-default-120 "
        style="background-image:url(assets/img/bg/9.png); background-position: right;">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title"><span>Pain Points</span></h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release of Letraset.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Manual Data Entry</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Lost Vendor Invoice</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Payment Error & Compliance</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Slow & Inefficeint Process</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Overdues & Penalties</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Skilled Resources</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animated fadeInRight text-center" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets/img/we-provide/pain_point.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- pain point area End -->

    <!-- Benfit start -->
    <div class="sbst-offer-area pd-top-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center">
                        <h2 class="title wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.1s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.1s; animation-name: fadeInUp;">
                            Benfit With <span>Beejakpay</span></h2>
                        <p class="wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.2s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            Riyaqas One of the best Software Development company. Riyaqas is at the forefront as the
                            most
                            <br> innovative web development company. Our cost efficient and structured teamwork.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-28 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.1s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/9.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Collating and sorting invoices intelligently.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.3s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/15.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Extracting data from the invoice into structured information.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.5s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/16.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Improve approval time and compliance to pay suppliers on time</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.7s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/17.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Improves efficiency, Takes &lt; 1 day to process invoice</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="0.8s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/16.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Eliminates invoice transport cost by digitizing invoices locally</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="1.0s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 1s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/14.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Increases visibility, productivity and compatibility.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="1.0s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 1s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/17.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Seamless integration with your ERP.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow  fadeInUp animated" data-wow-duration="0.6s" data-wow-delay="1.0s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 1s; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="assets/img/icons/15.svg" alt="offer" style="width: 60px;">
                            <div class="media-body align-self-center">
                                <h6>Top-notch platform leveraging AI-ML.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benfit end -->















    <!-- testimonial area Start -->
    <div class="testimonial-section sbs-testimonial-section pd-top-105 pd-bottom-120"
        style="background-image:url(assets/img/bg/1h3.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pd-xl-5 order-lg-12 align-self-center ">
                    <div class="section-title style-two mb-0">
                        <h2 class="title">What Our <span>Client Say?</span></h2>
                        <p>Our support team will get assistance from AI-powered <br> suggestions, making it quicker than
                            ever to handle support <br>requests. assistance from AI-powered</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="sbs-testimonial-slider">
                        <div class="choose_slider">
                            <div class="choose_slider_items">
                                <ul id="testimonial-slider">
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/4.png" alt="client">
                                            <div class="media-body">
                                                <h6>Wilson Mojika</h6>
                                                <p class="designation">Founder at todo</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/5.png" alt="client">
                                            <div class="media-body">
                                                <h6>Ema Wilson</h6>
                                                <p class="designation">CEO at craft</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/6.png" alt="client">
                                            <div class="media-body">
                                                <h6>John Mojika</h6>
                                                <p class="designation">CTO of Uxa</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/4.png" alt="client">
                                            <div class="media-body">
                                                <h6>Refule Mia</h6>
                                                <p class="designation">CEO at craft</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/5.png" alt="client">
                                            <div class="media-body">
                                                <h6>Madeniko Mojika</h6>
                                                <p class="designation">Branding Idendity</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <img class="media-left" src="assets/img/client/6.png" alt="client">
                                            <div class="media-body">
                                                <h6>Madeniko Mojika</h6>
                                                <p class="designation">CTO of Uxa</p>
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sbs-arrowleft"><a id="btn_next" href="#"><i class="fa fa-long-arrow-left"></i></a>
                        </div>
                        <div class="sbs-arrowright"><a id="btn_prev" href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area End -->


    <!-- contact us start -->
    <div class="contact-form-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center w-100">
                        <h2 class="title">Send you <span>inquary</span></h2>
                        <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse
                            over
                            tit, excuse my French owt to do with me up the kyver matie boy.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-info">
                        <h4 class="title">Contact info:</h4>
                        <p><span>GLOBAL DEVELOPMENT CENTER:</span></p>
                        <!-- <p class="sub-title">Plot: 12/1, Sector 1, HUDA Techno Enclave Madhapur, HITEC City
                            Hyderabad-500081, India</p> -->
                        <p>Plot: 12/1, Sector 1, HUDA Techno Enclave Madhapur, HITEC City
                            Hyderabad-500081, India</p>
                        <p><b><i class="fa fa-phone" aria-hidden="true"></i> </b> +91-800-826-6133</p>
                        <p><b><i class="fa fa-fax" aria-hidden="true"></i></b> +91-40-29805495</p>

                        <p><span></span></p>
                        <div class="col-mob-12">
                            <p>
                                <span>
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                    Middle East (DubaiOffice):
                                </span>
                            </p>
                            <p>P O Box 96642, Dubai, UAE</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +971-55-797-1221</p>
                        </div>
                        <div class="col-mob-12">
                            <p>
                                <span>
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                    Corporate Office:
                                </span>
                            </p>
                            <p>5177 Richmond Ave #570, Houston TX 77056
                            <p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 281-501-1418</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-xl-1">
                    <!-- <form class="riyaqas-form-wrap mt-5 mt-lg-0">
                        <div class="row custom-gutters-16">
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input">
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input">
                                    <label>E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input">
                                    <label>Subject</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <textarea class="single-input textarea" cols="20"></textarea>
                                    <label class="single-input-label">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-red mt-0" href="#">Send</a>
                            </div>
                        </div>
                    </form> -->

                    <form action="" method="post" onsubmit="validateCaptcha()">
                        <div class="form-group">
                            <label for="Name">Name <span class="mandField">*</span></label>
                            <div class="row">
                                <div class="col-sm-6 col-tab-6">
                                    <input type="text" class="form-control" placeholder="First" id="fname" name="fname"
                                        required>
                                </div>
                                <div class="col-sm-6 col-tab-6">
                                    <input type="text" class="form-control" placeholder="Last" id="lname" name="lname"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Company">Company <span class="mandField">*</span></label>
                            <input type="text" class="form-control" name="company" id="company" required>
                        </div>

                        <div class="form-group country_selection">
                            <label for="Phone">Phone <span class="mandField">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img src="assets/img/ind.png" class="selected_country"
                                            id="selected_country_img" />
                                        <input type="hidden" name="selected_country" value="assets/img/ind.png"
                                            id="selected_country" />
                                        <span class="caret"></span>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        <li><input type="radio" name="country_code" value="+91-" checked /><img
                                                src="assets/img/ind.png" />
                                            (IND)</li>
                                        <li><input type="radio" name="country_code" value="+44" /><img
                                                src="assets/img/us.png" /> (USA)</li>
                                    </ul>
                                </span>
                                <input type="number" class="form-control" name="phone" id="phone" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="Company">Email <span class="mandField">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="Company">Job Title <span class="mandField">*</span></label>
                            <input type="text" class="form-control" name="job_title" id="job_title" required>
                        </div>
                        <div class="average_monthly">
                            <label for="Company" style="margin-bottom:0px;">Average Monthly Invoices Processed <span
                                    class="mandField">*</span></label>
                            <div class="row">
                                <div class="col-sm-6 col-tab-6 col-xsm-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="avgMonInovoice" value="100-499" required> 100-499
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="avgMonInovoice" value="1000-2499" required>
                                            1000-2499
                                        </label>
                                    </div>

                                </div>
                                <div class="col-sm-6 col-tab-6 col-xsm-12">

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="avgMonInovoice" value="500-999" required> 500-999
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="avgMonInovoice" value="2500+" required> 2500+
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="about_circulus" style="margin-top:10px;">
                            <label for="Company" style="margin-bottom:0px;">How Did you Hear About Us? <span
                                    class="mandField">*</span></label>
                            <div class="row">
                                <div class="col-sm-6 col-tab-6 col-xsm-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Email Campaign" required> Email
                                            Campaign
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Social Media" required> Social
                                            Media
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Referral / Word of Mouth"
                                                required> Referral / Word
                                            of Mouth
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-tab-6 col-xsm-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Search Engine" required> Search
                                            Engine
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Trade Show / Event" required>
                                            Trade Show / Event
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="circulus" value="Other" required> Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Company">Comments</label>
                            <textarea rows="5" class="form-control" name="comments" id="comments"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="captcha_view">
                                <div id="captcha"></div>
                                <i class="fa fa-refresh" aria-hidden="true" onclick="createCaptcha()"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="form-group">
                            <input type="hidden" placeholder="Captcha" name="captchaTest" id="captchaTest"
                                style="padding: 7px;border: 1px solid #ccc;outline: none;" autocomplete="off" />
                            <input type="text" placeholder="Captcha" name="cpatchaTextBox" id="cpatchaTextBox"
                                style="padding: 7px;border: 1px solid #ccc;outline: none;" autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-danger"
                                style="border-radius:0">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us end -->



    <!-- footer area start -->
    <footer class="footer-area mg-top-120" style="background-image:url(assets/img/bg/footer.png);">
        <div class="footer-top pd-top-120 padding-bottom-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="footer-widget widget text-center">
                            <div class="footer_top_widget">
                                <a href="index-2.html" class="footer-logo">
                                    <img src="assets/img/logo.png" alt="footer logo">
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen
                                    book.</p>
                            </div>
                        </div>
                        <div class="footer-widget widget widget_nav_menu text-center">
                            <ul>
                                <li><a href="index.html">Overview</a></li>
                                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Process Flow</a></li>
                                <li><a href="#">About Tecnics</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="copyright-inner">
                            <div class="row custom-gutters-16">
                                <div class="col-lg-7">
                                    <div class="copyright-text">
                                        &copy; Beejakpay 2022 All rights reserved, Powered <a href="#"
                                            target="_blank"></a>
                                        by <span>Tecnics.com</span></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="social-icon text-right">
                                        <li>
                                            <a class="dribbble" href="#"><i class="fa fa-dribbble  "></i></a>
                                        </li>
                                        <li>
                                            <a class="facebook" href="#" target="_blank"><i
                                                    class="fa fa-facebook  "></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" target="_blank"><i
                                                    class="fa fa-twitter  "></i></a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="#" target="_blank"><i
                                                    class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a class="pinterest" href="#" target="_blank"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- jquery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- slick slider -->
    <script src="assets/js/slick.js"></script>
    <!-- cssslider slider -->
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- world map -->
    <script src="assets/js/worldmap-libs.js"></script>
    <script src="assets/js/worldmap-topojson.js"></script>
    <script src="assets/js/mediaelement.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $(".dropdown-menu  li").click(function () {
                var selected_country = $(this).find("img").attr("src");
                $(".selected_country").attr("src", selected_country);
                $("#selected_country").val(selected_country);
            });
            $(".menu_icon").click(function () {
                $("nav").toggleClass("display_block");
            });


            // -- for submenu options and plus minus symbole --

            // $(".has_submenu").click(function(){
            //   $(".sub_menu").toggleClass("display_block");
            //   if($(this).find("i").hasClass('fa-plus')){
            //     $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
            //   }
            //   else{
            //     $(this).find("i").removeClass("fa-minus").addClass("fa-plus");
            //   }
            // });

            $(".input-group-addon input[type=radio]").on("click", function () {
                $(".country_selection .dropdown-menu li").click();
            });

            setTimeout(function () {
                $('#success_modal').modal('hide');
            }, 2000);


            // for header fixed
            $(window).scroll(function () {
                var header = $('#myHeader'),
                    scroll = $(window).scrollTop();

                if (scroll >= 120) header.addClass('stick_header');
                else header.removeClass('stick_header');
            });
        });


        //   for captcha
        var code;
        function createCaptcha() {
            //clear the contents of captcha div first 
            document.getElementById('captcha').innerHTML = "";
            var charsArray =
                "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var lengthOtp = 6;
            var captcha = [];
            for (var i = 0; i < lengthOtp; i++) {
                //below code will not allow Repetition of Characters
                var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) == -1)
                    captcha.push(charsArray[index]);
                else i--;
            }
            var canv = document.createElement("canvas");
            canv.id = "captcha";
            canv.width = 100;
            canv.height = 50;
            var ctx = canv.getContext("2d");
            ctx.font = "25px Georgia";
            ctx.strokeText(captcha.join(""), 0, 30);
            //storing captcha so that can validate you can save it somewhere else according to your specific requirements
            code = captcha.join("");
            document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
            document.getElementById("captchaTest").value = code;
            document.getElementById("cpatchaTextBox").value = "";
        }
        function validateCaptcha() {
            if (!(document.getElementById("cpatchaTextBox").value == code)) {
                $('#captchaError_modal').modal('show');
                event.preventDefault();
                createCaptcha();
            }
        }
    </script>
</body>


</html>