<?php use Illuminate\Support\Facades\Request; ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Warriors Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="icon" href="images/mma/mma-logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
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
    <style>
    /* .zoom {
      padding: 50px;
      background-color: green;
      transition: transform .2s; /* Animation */
    /* width: 200px;
      height: 200px;
      margin: 0 auto; */
    /* } */

    .zoom:hover {
        transform: scale(1.2);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    </style>
    <style type="text/css">
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        filter: alpha(opacity=70);
        -moz-opacity: 0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        z-index: 100;
        display: none;
    }

    .popup1 a {
        text-decoration: none;
    }


    #a1 {
        display: block;
        width: 150px;
        position: relative;
        margin: 10px auto;
        text-align: center;
        background-color: #0f72e5;
        border-radius: 20px;
        color: #ffffff;
        text-decoration: none;
        padding: 6px 0;
        font-size: 14px;
    }

    /* #notice-bar {
    background-color: #ffcc00;
    color: #000;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    } */

    #notice-bar {
  background-color: #ffcc00;
  color: #000;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  overflow: hidden;
}

.notice-animation {
  display: inline-block;
  margin-left: 100%;
  animation: moveNotice 10s linear infinite;
}

@keyframes moveNotice {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

</style>
</head>

<body>
    {{-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div> --}}
    <div class="preloader">
        <div class="preloader-body">
            <div class="quiver"></span> <span class="arrows rd"></span><span class="arrows th"></span><span
                    class="arrows fth"></span><span class="loading">Loading</span>
            </div>
        </div>
    </div>
    <div class="page">
         <header class="section page-header"
            data-preset='{"title":"Header transparent","category":"main","reload":true,"id":"header-transparent"}'>
            <!--RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-wrap-absolute">
                <nav class="rd-navbar rd-navbar-classic novi-bg novi-bg-img" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="3px" data-xl-stick-up-offset="3px" data-xxl-stick-up-offset="3px"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
                    </div>
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
                                        <li class="rd-nav-item">
                                            <?php if(Request::segment(1)== '/' || Request::segment(1) == ''){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;" href="{{url('/')}}">Home</a>
                                            <?php }else{?><a class="rd-nav-link" style="" href="{{url('/')}}">Home</a>
                                            <?php } ?>
                                        </li>

                                        <li class="rd-nav-item ">
                                            <?php if(Request::segment(1)== 'services' || Request::segment(1)== 'programs' || Request::segment(1)== 'Physiotherapy'){?>
                                            <a href="{{url('services')}}" class="rd-nav-link"
                                                style="color:#22E3ff">Services</a>
                                            <?php }else{?>
                                            <a href="{{url('services')}}" class="rd-nav-link" style="">Services</a>
                                            <?php } ?>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'services'){?>
                                                    <a href="{{url('services')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Our Services</a>
                                                    <?php }else {?>
                                                    <a href="{{url('services')}}" class="rd-dropdown-link" style="">Our
                                                        Services</a>
                                                    <?php }?>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'programs'){?>
                                                    <a href="{{url('programs')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Our Programs</a>
                                                    <?php }else {?>
                                                    <a href="{{url('programs')}}" class="rd-dropdown-link" style="">Our
                                                        Programs</a>
                                                    <?php }?>
                                                </li>
                                                <li class="rd-dropdown-item">
                                                    <?php if(Request::segment(1)== 'Physiotherapy'){?>
                                                    <a href="{{url('Physiotherapy')}}" class="rd-dropdown-link"
                                                        style="color:#22E3ff">Our Physiotherapy</a>
                                                    <?php }else {?>
                                                    <a href="{{url('Physiotherapy')}}" class="rd-dropdown-link"
                                                        style="">Our Physiotherapy</a>
                                                    <?php }?>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'achievements'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('achievements')}}">Achievements</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('achievements')}}">Achievements</a>
                                            <?php } ?>
                                        </li>

                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'gallery'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('gallery')}}">Gallery</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('gallery')}}">Gallery</a>
                                            <?php } ?>
                                        </li>
                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'team_founders'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('team_founders')}}">Founders</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('team_founders')}}">Founders</a>
                                            <?php } ?>
                                        </li>
                                        <li class="rd-nav-item"><?php if(Request::segment(1)== 'contact'){?>
                                            <a class="rd-nav-link" style="color:#22E3ff;"
                                                href="{{url('contact')}}">Contact Us</a>
                                            <?php }else{?><a class="rd-nav-link" style=""
                                                href="{{url('contact')}}">Contact Us</a>
                                            <?php } ?>
                                        </li>
                                        <li class="rd-nav-item "><?php if(Request::segment(1)== 'about'){?>
                                            <a href="{{url('about')}}" class="rd-nav-link" style="color:#22E3ff">About
                                                Us</a>
                                            <?php }else{?>
                                            <a href="{{url('about')}}" class="rd-nav-link" style="">About Us</a>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </header>
