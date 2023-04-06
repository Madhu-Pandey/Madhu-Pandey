<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Warriors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/mma/mma-logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/contactstyle.css">
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="quiver"><span class="arrows st"></span><span class="arrows nd"></span><span
                    class="arrows rd"></span><span class="arrows th"></span><span class="arrows fth"></span><span
                    class="loading">Loading</span></div>
        </div>
    </div>
    <div class="page">
        <header class="section page-header" data-preset='{"title":","category":"main","reload":true,}'>
            <!--RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-wrap-absolute">
                <nav class="rd-navbar rd-navbar-classic novi-bg novi-bg-img" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="3px" data-xl-stick-up-offset="3px" data-xxl-stick-up-offset="3px"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark"
                                            src="images/mma/mma-logo.png" alt="" width="67" height="37"
                                            loading="lazy" /><img class="brand-logo-light" src="images/mma/mma-logo.png"
                                            alt="" width="67" height="37" loading="lazy" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">

                                        <li class="rd-nav-item active">
                                            <?php if(Request::segment(1)== '/' || Request::segment(1) == ''){?>
                                            <a class="rd-nav-link" style="color:#22E3ff" href="{{url('/')}}">Home</a>
                                            <?php }else{?><a class="nav-link active" style="color:white"
                                                href="{{url('/')}}">Home</a>
                                            <?php } ?>
                                        </li>

                                        <li class="rd-nav-item ">
                                            <?php if(Request::segment(1)== 'about' || Request::segment(1)== 'contact'){?>
                                            <a href="{{url('about')}}" class="rd-nav-link" style="color:#22E3ff">About
                                                Us</a>

                                            <?php }else{?>
                                            <a href="{{url('about')}}" class="rd-nav-link" style="">About Us</a>
                                            <?php } ?>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'about')
                                    {?>
                                                    <a href="{{url('about')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Who We Are</a>
                                                    <?php }
                                    else {?>
                                                    <a href="{{url('about')}}" class="rd-dropdown-link" style="">Who We
                                                        Are</a>
                                                    <?php }?>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'contact')
                                    {?>
                                                    <a href="{{url('contact')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Contact Us</a>
                                                    <?php }
                                    else {?>
                                                    <a href="{{url('contact')}}" class="rd-dropdown-link"
                                                        style="">Contact Us</a>
                                                    <?php }?>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="rd-nav-item ">
                                            <?php if(Request::segment(1)== 'services' || Request::segment(1)== 'services' || Request::segment(1)== 'services' ){?>
                                            <a href="{{url('about')}}" class="rd-nav-link"
                                                style="color:#22E3ff">Services</a>

                                            <?php }else{?>
                                            <a href="{{url('services')}}" class="rd-nav-link" style="">Services</a>
                                            <?php } ?>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'services')
                                    {?>
                                                    <a href="{{url('services')}}" class="rd-dropdown-link"
                                                        style="#22E3ff">Our Services</a>
                                                    <?php }
                                    else {?>
                                                    <a href="{{url('services')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Our Services</a>
                                                    <?php }?>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'programs')
                                    {?>
                                                    <a href="{{url('services')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Our Programs</a>
                                                    <?php }
                                    else {?>
                                                    <a href="{{url('programs')}}" class="rd-dropdown-link" style="">Our
                                                        Programs</a>
                                                    <?php }?>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="rd-nav-item"><?php if(Request::segment(1)== '#'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('/achievements')}}">Achievements</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('/achievements')}}">Achievements</a>
                                            <?php } ?>
                                        </li>

                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'team_founders'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('team_founders')}}">Founders</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('team_founders')}}">Founders</a>
                                            <?php } ?>
                                        </li>
                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'gallery'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('gallery')}}">Gallery</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('gallery')}}">Gallery</a>
                                            <?php } ?>
                                        </li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rd-navbar-right rd-navbar-collapse">
                                <div class="rd-navbar-info">

                                    <div class="rd-navbar-info-item">
                                        <div class="novi-icon rd-navbar-info-icon linearicons-envelope"></div><a
                                            class="rd-navbar-info-text"
                                            href="mailto:#">info.warriorsacademy@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="section intro intro-1 bg-image context-dark novi-bg novi-bg-img"
            style="background-image:url(uploads/022.png); height:450px;"
            data-preset='{"title":"Intro 1","category":"intro","reload":false,"id":"intro-1"}'>

            <div class="intro-inner">
                <div class="container text-center text-xs-left">
                    <b>
                        <h2 style="font-weight:bold; color:#22E3ff">Our Contact</h2>
                    </b>
                </div>
            </div>
        </section>
        <!-- Contacts-->
        <section class="section section-lg bg-default novi-bg novi-bg-img"
            data-preset='{"title":"Contacts","category":"contacts","reload":true,"id":"contacts"}'>
            <!-- <div class="card">  -->
            <div class="container">
                <h2>Contact us</h2>
                <div class="row row-40 justify-content-xl-between row-content-5">
                    <div class="col-md-6 col-xl-5">
                        <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If
                            you are living nearby, come visit us to choose the suitable training program.</p>
                        <ul class="list-lg h4">
                            <li>
                                <div class="list-icons">
                                    <div class="list-icon novi-icon linearicons-telephone"></div><a
                                        class="list-icon-link" href="tel:#">+91 96303 03100</a>
                                </div>
                                <div class="list-icons">
                                    <div class="list-icon novi-icon linearicons-telephone"></div><a
                                        class="list-icon-link" href="tel:#">+91 93406 24717</a>
                                </div>
                            </li>
                            <li>Bhilai (C.G.)</li>
                        </ul>
                        <ul class="list-md h6 font-weight-regular">
                            <li>Weekdays: 9:00 AM – 10:00 PM</li>
                            <li>Weekends: 8:00 AM – 9:00 PM</li>
                        </ul>
                        <ul class="list-sm-1">

                            <li><a class="link-underline" href="#">info.warriorsacademy@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!--RD Mailform-->
                        <form class="rd-mailform text-left" data-form-output="form-output-global"
                            data-form-type="contact" method="post"
                            action="https://ld-wt73.template-help.com/wt_prod-31083/bat/rd-mailform.php">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Your Message</label>
                                <textarea class="form-input form-input-bold" id="contact-message"
                                    name="message"></textarea>
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-name">Name</label>
                                <input class="form-input form-input-bold" id="contact-name" type="text" name="name">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">E-mail</label>
                                <input class="form-input form-input-bold" id="contact-email" type="email" name="email">
                            </div>
                            <div class="form-button">
                                <button class="link-arrow h6"><span>Submit</span><span class="link-arrow-icon">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                            <path
                                                d="M17 7.00002L11.6667 1.66669M17 7.00002L11.6667 12.3334M17 7.00002H0.333344"
                                                stroke-width="2"></path>
                                        </svg></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </section>
    </div>
    @include('layouts/footer')

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>