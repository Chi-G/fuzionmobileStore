<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--====== Title ======-->
        <title>Fuzion Mobile</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="frontend/assets/images/favicon.png" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="frontend/assets/css/animate.css">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="frontend/assets/css/font-awesome.min.css">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">

        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="frontend/assets/css/nice-select.css">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="frontend/assets/css/slick.css">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="frontend/assets/css/default.css">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="frontend/assets/css/style.css">

        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="frontend/assets/css/responsive.css">

        <!-- Styles / Scripts -->

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>


        <!--====== PRELOADER PART START ======-->

        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>

        <!--====== PRELOADER PART ENDS ======-->

        <!--====== Header PART START ======-->

        <section class="header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_wrapper d-flex justify-content-center justify-content-md-between">
                        <div class="header_top_info d-none d-md-block">
                            <ul>
                                <li><img src="frontend/assets/images/call.png" alt="call"><a href="#">+91 458 654 528</a></li>
                                <li><img src="frontend/assets/images/mail.png" alt="mail"><a href="#">info@example.com</a></li>
                            </ul>
                        </div>
                        <div class="header_top_login">
                            <ul>
                                <li><a href="#">Register</a></li>
                                <li><a class="main-btn" href="#"><i class="fa fa-user-o"></i> Log In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="frontend/assets/images/logo.png" alt="logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li>
                                    <a class="active" href="index.html">Home <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a class="active" href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="courses.html">Courses <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="courses-details.html">Courses Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Blog <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar_meta">
                            <ul>
                                <li>
                                    <a id="search" href="#"><img src="frontend/assets/images/search.png" alt="search"></a>
                                    <div class="search_bar">
                                        <input type="text" placeholder="Search">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                </li>
                                <li><a href="#"><img src="frontend/assets/images/cart.png" alt="cart"> <span>0</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <!--====== Header PART ENDS ======-->

        <!--====== Slider PART START ======-->

        <section class="slider_area slider-active">
            <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(assets/images/slider-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider_content text-center">
                                <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your </h4>
                                <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">First <span>Learning</span> Platform</h2>
                                <p data-animation="fadeInUp" data-delay="0.8s">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna <br> etquisque euismod orci ut et lobortis.</p>
                                <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(assets/images/slider-3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider_content text-center">
                                <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your </h4>
                                <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">First <span>Learning</span> Platform</h2>
                                <p data-animation="fadeInUp" data-delay="0.8s">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna <br> etquisque euismod orci ut et lobortis.</p>
                                <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Slider PART ENDS ======-->

        <!--====== Features PART START ======-->

        <section class="features_area ">
            <div class="container">
                <div class="features_wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-4 features_col">
                            <div class="single_features text-center">
                                <div class="features_icon">
                                    <img src="frontend/assets/images/f-icon-1.png" alt="Icon">
                                </div>
                                <div class="features_content">
                                    <h4 class="features_title"><a href="#">Quality Teachers</a></h4>
                                    <p>What do you think is better to receive after each lesson a lovely looking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 features_col">
                            <div class="single_features text-center">
                                <div class="features_icon">
                                    <img src="frontend/assets/images/f-icon-2.png" alt="Icon">
                                </div>
                                <div class="features_content">
                                    <h4 class="features_title"><a href="#">Best Curriculam</a></h4>
                                    <p>What do you think is better to receive after each lesson a lovely looking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 features_col">
                            <div class="single_features text-center">
                                <div class="features_icon">
                                    <img src="frontend/assets/images/f-icon-3.png" alt="Icon">
                                </div>
                                <div class="features_content">
                                    <h4 class="features_title"><a href="#">Global Recognition</a></h4>
                                    <p>What do you think is better to receive after each lesson a lovely looking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Features PART ENDS ======-->

        <!--====== About PART START ======-->

        <section class="about_area pt-80">
            <img class="shap_1" src="frontend/assets/images/shape/shape-1.png" alt="shape">
            <img class="shap_2" src="frontend/assets/images/shape/shape-2.png" alt="shape">
            <img class="shap_3" src="frontend/assets/images/shape/shape-3.png" alt="shape">
            <img class="shap_4" src="frontend/assets/images/shape/shape-4.png" alt="shape">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content mt-45">
                            <h3 class="about_title">We are the top learning platform</h3>
                            <p class="text">What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice</p>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice? We thought you might choose the latter.</p>
                            <a href="#" class="main-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_image mt-50">
                            <img src="frontend/assets/images/about-1.jpg" alt="about" class="about_image-1">
                            <img src="frontend/assets/images/about-2.jpg" alt="about" class="about_image-2">
                            <img src="frontend/assets/images/about-3.jpg" alt="about" class="about_image-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== About PART ENDS ======-->

        <!--====== Counter PART START ======-->

        <section class="counter_area pt-80 pb-130">
            <div class="container">
                <div class="row counter_wrapper">
                    <div class="col-lg-3 col-sm-6 counter_col">
                        <div class="single_counter text-center mt-50">
                            <div class="counter_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/count_icon-1.png" alt="Icon">
                                </div>
                            </div>
                            <div class="counter_content">
                                <span class="cont"><span class="counter">78</span>+</span>
                                <p>University  Faculties</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 counter_col">
                        <div class="single_counter text-center mt-50">
                            <div class="counter_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/count_icon-2.png" alt="Icon">
                                </div>
                            </div>
                            <div class="counter_content">
                                <span class="cont"><span class="counter">5</span>k+</span>
                                <p>Total Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 counter_col">
                        <div class="single_counter text-center mt-50">
                            <div class="counter_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/count_icon-3.png" alt="Icon">
                                </div>
                            </div>
                            <div class="counter_content">
                                <span class="cont"><span class="counter">400</span>k</span>
                                <p>Library Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 counter_col">
                        <div class="single_counter text-center mt-50">
                            <div class="counter_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/count_icon-4.png" alt="Icon">
                                </div>
                            </div>
                            <div class="counter_content">
                                <span class="cont"><span class="counter">1200</span></span>
                                <p>Seminers Held</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Counter PART ENDS ======-->

        <!--====== About 2 PART START ======-->

        <section class="about_area_2 d-flex flex-wrap ">
            <div class="about_video bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
                <div class="video">
                    <a class="video_play" href="#"><i class="fa fa-play"></i></a>
                </div>
            </div>

            <div class="about_content_2">
                <div class="single_about_2 d-flex flex-wrap">
                    <div class="about_2_content">
                        <div class="about_2_content_wrapper">
                            <h4 class="title"><a href="#">Scholarships</a></h4>
                            <p>What do you think is better to receive after each lesson: a lovely looking </p>
                            <a href="#" class="main-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="about_2_image bg_cover" style="background-image: url(assets/images/about-4.jpg)"></div>
                </div>

                <div class="single_about_2 d-flex flex-wrap">
                    <div class="about_2_content order-md-last">
                        <div class="about_2_content_wrapper">
                            <h4 class="title"><a href="#">Alumnai</a></h4>
                            <p>What do you think is better to receive after each lesson: a lovely looking </p>
                            <a href="#" class="main-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="about_2_image bg_cover order-md-first" style="background-image: url(assets/images/about-5.jpg)"></div>
                </div>
            </div>
        </section>

        <!--====== About 2 PART ENDS ======-->

        <!--====== Program PART START ======-->

        <section class="program_area pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_title section_title_2 text-center pb-50">
                            <h3 class="main_title">Our Programe</h3>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters program_wrapper">
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-1 d-flex flex-wrap">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-1.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Applied <br> Physics</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-2 d-flex flex-wrap program_4">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-2.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Political <br> Science</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-3 d-flex flex-wrap program_3">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-3.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Business <br> Studies</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-4 d-flex flex-wrap program_2 program_3 program_4">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-4.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Rocket <br> Science</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-5 d-flex flex-wrap program_2">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-5.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Art & <br> Design</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 program_col">
                        <div class="single_program program_color-6 d-flex flex-wrap program_2 program_4">
                            <div class="program_icon">
                                <div class="icon_wrapper">
                                    <img src="frontend/assets/images/p-icon-6.png" alt="Icon">
                                </div>
                            </div>
                            <div class="program_content">
                                <div class="content_wrapper">
                                    <h5 class="title"><a href="#">Medical <br> Science</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Program PART ENDS ======-->

        <!--====== Why Choose Us PART START ======-->

        <section class="why_choose_area pt-120 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why_choose_content">
                            <div class="section_title pb-20">
                                <h3 class="main_title">Why choose us?</h3>
                                <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 choose_col">
                                    <div class="single_choose mt-30">
                                        <div class="choose_icon">
                                            <img src="frontend/assets/images/choose_icon-1.png" alt="Icon">
                                        </div>
                                        <div class="choose_content">
                                            <h5 class="title"><a href="#">Big Library</a></h5>
                                            <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 choose_col">
                                    <div class="single_choose mt-30">
                                        <div class="choose_icon">
                                            <img src="frontend/assets/images/choose_icon-2.png" alt="Icon">
                                        </div>
                                        <div class="choose_content">
                                            <h5 class="title"><a href="#">Certification</a></h5>
                                            <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 choose_col">
                                    <div class="single_choose mt-30">
                                        <div class="choose_icon">
                                            <img src="frontend/assets/images/choose_icon-3.png" alt="Icon">
                                        </div>
                                        <div class="choose_content">
                                            <h5 class="title"><a href="#">Alumnai</a></h5>
                                            <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 choose_col">
                                    <div class="single_choose mt-30">
                                        <div class="choose_icon">
                                            <img src="frontend/assets/images/choose_icon-4.png" alt="Icon">
                                        </div>
                                        <div class="choose_content">
                                            <h5 class="title"><a href="#">Abroad Student</a></h5>
                                            <p>What do you think is better to receive after each lesson: a lovely looking .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why_choose_image d-none d-lg-table">
                <div class="image">
                    <img src="frontend/assets/images/choose_bg.png" alt="">
                </div>
            </div>
        </section>

        <!--====== Why Choose Us PART ENDS ======-->

        <!--====== Courses PART START ======-->

        <section class="courses_area courses_bg pt-120 pb-130">

            <img class="shape-1" src="frontend/assets/images/shape/shape-1.png" alt="shape">
            <img class="shape-2" src="frontend/assets/images/shape/shape-2.png" alt="shape">
            <img class="shape-3" src="frontend/assets/images/shape/shape-3.png" alt="shape">
            <img class="shape-4" src="frontend/assets/images/shape/shape-4.png" alt="shape">
            <img class="shape-5" src="frontend/assets/images/shape/shape-5.png" alt="shape">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_title text-center pb-20">
                            <h3 class="main_title">Featured Courses</h3>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_courses mt-30">
                            <div class="courses_image">
                                <img src="frontend/assets/images/courses-1.jpg" alt="courses">
                            </div>
                            <div class="courses_content">
                                <ul class="tag">
                                    <li><a href="#">Android</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="frontend/assets/images/author-1.jpg" alt="author">
                                    </div>
                                    <div class="author_name media-body">
                                        <a href="#">Andrew paker</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">Developing android app with v4 pad </a></h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i> 4.5</a></li>
                                    </ul>
                                    <span>$230</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_courses mt-30">
                            <div class="courses_image">
                                <img src="frontend/assets/images/courses-2.jpg" alt="courses">
                            </div>
                            <div class="courses_content">
                                <ul class="tag">
                                    <li><a href="#">Language</a></li>
                                </ul>
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="frontend/assets/images/author-2.jpg" alt="author">
                                    </div>
                                    <div class="author_name media-body">
                                        <a href="#">Maria Flevour</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">Fundamental basic of learning english </a></h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i> 4.5</a></li>
                                    </ul>
                                    <span>$230</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_courses mt-30">
                            <div class="courses_image">
                                <img src="frontend/assets/images/courses-3.jpg" alt="courses">
                            </div>
                            <div class="courses_content">
                                <ul class="tag">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">UI/UX</a></li>
                                </ul>
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="frontend/assets/images/author-3.jpg" alt="author">
                                    </div>
                                    <div class="author_name media-body">
                                        <a href="#">Robart Molt</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">Basic techniqes of learning design </a></h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i> 4.5</a></li>
                                    </ul>
                                    <span>$230</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_courses mt-30">
                            <div class="courses_image">
                                <img src="frontend/assets/images/courses-1.jpg" alt="courses">
                            </div>
                            <div class="courses_content">
                                <ul class="tag">
                                    <li><a href="#">Design</a></li>
                                </ul>
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="frontend/assets/images/author-2.jpg" alt="author">
                                    </div>
                                    <div class="author_name media-body">
                                        <a href="#">Maria Flevour</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">Fundamental basic of learning english </a></h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-o"></i> 100</a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i> 4.5</a></li>
                                    </ul>
                                    <span>$230</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Courses PART ENDS ======-->

        <!--====== Testimonial PART START ======-->

        <section class="testimonial_area pt-80 pb-130 bg_cover" style="background-image: url(assets/images/testimonial_bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial_title mt-50">
                            <img src="frontend/assets/images/quota.png" alt="quota">
                            <h2 class="title">Success stories of students who took best from us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial_items mt-50">
                            <div class="single_testimonial">
                                <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                                <h6 class="name">Arnold Holder</h6>
                                <span>Student, Language</span>
                            </div>

                            <div class="single_testimonial">
                                <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                                <h6 class="name">Arnold Holder</h6>
                                <span>Student, Language</span>
                            </div>

                            <div class="single_testimonial">
                                <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best. </p>
                                <h6 class="name">Arnold Holder</h6>
                                <span>Student, Language</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Testimonial PART ENDS ======-->

        <!--====== Team PART START ======-->

        <section class="team_area pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_title text-center pb-50">
                            <h3 class="main_title">Top Teachers</h3>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 team_col_1">
                        <div class="single_team d-sm-flex flex-wrap align-items-center">
                            <img class="team_arrow" src="frontend/assets/images/left.png" alt="left">
                            <div class="team_image">
                                <img src="frontend/assets/images/team-1.jpg" alt="team">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">Andrew Flecher</a></h4>
                                    <span>Business Studies</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_team d-sm-flex flex-wrap align-items-center flex-row-reverse">
                            <img class="team_arrow" src="frontend/assets/images/right.png" alt="left">
                            <div class="team_image">
                                <img src="frontend/assets/images/team-3.jpg" alt="team">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">Andrew Flecher</a></h4>
                                    <span>Business Studies</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 team_col_2">
                        <div class="single_team d-sm-flex flex-wrap align-items-center">
                            <img class="team_arrow" src="frontend/assets/images/left.png" alt="left">
                            <div class="team_image">
                                <img src="frontend/assets/images/team-2.jpg" alt="team">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">Andrew Flecher</a></h4>
                                    <span>Business Studies</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_team d-sm-flex flex-wrap align-items-center flex-row-reverse">
                            <img class="team_arrow" src="frontend/assets/images/right.png" alt="left">
                            <div class="team_image">
                                <img src="frontend/assets/images/team-4.jpg" alt="team">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">Andrew Flecher</a></h4>
                                    <span>Business Studies</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Team PART ENDS ======-->

        <!--====== Events PART START ======-->

        <section class="events_area d-flex flex-wrap">
            <div class="events_left">
                <div class="single_events d-flex flex-wrap">
                    <div class="events_content bg_cover" style="background-image: url(assets/images/event-1.jpg)">
                        <div class="events_wrapper">
                            <ul class="events_meta">
                                <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                                <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i>New york grand city 1247</a></li>
                            </ul>
                            <h4 class="events_title"><a href="#">Conference for reducing global warming with mr <br> helmet</a></h4>
                        </div>
                    </div>
                    <div class="events_content_title">
                        <div class="events_wrapper">
                            <h2 class="title">Our featured Event</h2>
                        </div>
                    </div>
                </div>

                <div class="single_events d-flex flex-wrap">
                    <div class="events_content events_content_2 bg_cover" style="background-image: url(assets/images/event-1.jpg)">
                        <div class="events_wrapper">
                            <ul class="events_meta">
                                <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                                <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i>New york grand city 1247</a></li>
                            </ul>
                            <h4 class="events_title"><a href="#">Conference for reducing global warming with <br> mr helmet</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events_right bg_cover" style="background-image: url(assets/images/event-3.jpg)">
                <div class="events_content_3 text-center">
                    <div class="events_wrapper">
                        <ul class="events_meta">
                            <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                            <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i>New york grand city 1247</a></li>
                        </ul>
                        <h4 class="events_title"><a href="#">Conference for reducing global warming with <br> mr helmet</a></h4>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Events PART ENDS ======-->

        <!--====== Blog PART START ======-->

        <section class="blog_area pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_title text-center pb-20">
                            <h3 class="main_title">Top Teachers</h3>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single_blog mt-30">
                            <div class="blog_image">
                                <img src="frontend/assets/images/blog-1.jpg" alt="blog">
                            </div>
                            <div class="blog_content">
                                <span class="date"><span>23</span>  Sept</span>

                                <div class="blog_content_wrapper">
                                    <ul class="blog_meta">
                                        <li><a href="#">Arnold brisben</a></li>
                                        <li><a href="#">19 Jun 2019</a></li>
                                    </ul>
                                    <h4 class="blog_title"><a href="#">Best learning practice for java programme</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single_blog mt-30">
                            <div class="blog_image">
                                <img src="frontend/assets/images/blog-2.jpg" alt="blog">
                            </div>
                            <div class="blog_content">
                                <span class="date"><span>23</span>  Sept</span>

                                <div class="blog_content_wrapper">
                                    <ul class="blog_meta">
                                        <li><a href="#">Arnold brisben</a></li>
                                        <li><a href="#">19 Jun 2019</a></li>
                                    </ul>
                                    <h4 class="blog_title"><a href="#">Best learning practice for java programme</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single_blog mt-30">
                            <div class="blog_image">
                                <img src="frontend/assets/images/blog-3.jpg" alt="blog">
                            </div>
                            <div class="blog_content">
                                <span class="date"><span>23</span>  Sept</span>

                                <div class="blog_content_wrapper">
                                    <ul class="blog_meta">
                                        <li><a href="#">Arnold brisben</a></li>
                                        <li><a href="#">19 Jun 2019</a></li>
                                    </ul>
                                    <h4 class="blog_title"><a href="#">Best learning practice for java programme</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Blog PART ENDS ======-->

        <!--====== Footer PART START ======-->

        <footer class="footer_area bg_cover" style="background-image: url(assets/images/footer_bg.jpg)">
            <div class="footer_widget pt-80 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_about mt-50">
                                <a href="#"><img src="frontend/assets/images/logo.png" alt="logo"></a>

                                <p>Lorem ipsum dolor sit amet dolor, con sect etur adipiscing elitorem ipsum dolorsit amet dolor, con sectetur con sectetur adipisci adipiscing.</p>

                                <ul class="footer_social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="footer_widget_wrapper d-flex flex-wrap">
                                <div class="footer_link mt-50">
                                    <h5 class="footer_title">Quick Links</h5>

                                    <div class="footer_link_wrapper d-flex">
                                        <ul class="link">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Our Events</a></li>
                                            <li><a href="#">Our Packages</a></li>
                                        </ul>
                                        <ul class="link">
                                            <li><a href="#">Our Team</a></li>
                                            <li><a href="#">Latest News</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Condations</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer_contact mt-50">
                                    <h5 class="footer_title">Contact</h5>

                                    <ul class="contact">
                                        <li>Location : 27 State, New York, NY 1002, USA</li>
                                        <li>Emal : infoexample@gmail.com</li>
                                        <li>Phone : +(321)948 754</li>
                                        <li>Fax:+1-212-98765543</li>
                                        <li><a href="#">View Location on Google Map</a></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_copyright">
                <div class="container">
                    <div class="footer_copyright_wrapper text-center d-md-flex justify-content-between">
                        <div class="copyright">
                            <p>Designed & Developed By Love</p>
                        </div>
                        <div class="copyright">
                            <p>&copy; Copyrights 2022 Edustdy All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Footer PART ENDS ======-->

        <!--====== BACK TOP TOP PART START ======-->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!--====== BACK TOP TOP PART ENDS ======-->











        <!--====== jquery js ======-->
        <script src="frontend/assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!--====== Bootstrap js ======-->
        <script src="frontend/assets/js/bootstrap.min.js"></script>
        <script src="frontend/assets/js/popper.min.js"></script>

        <!--====== Slick js ======-->
        <script src="frontend/assets/js/slick.min.js"></script>

        <!--====== Magnific Popup js ======-->
        <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>

        <!--====== Counter Up js ======-->
        <script src="frontend/assets/js/waypoints.min.js"></script>
        <script src="frontend/assets/js/jquery.counterup.min.js"></script>

        <!--====== Nice Select js ======-->
        <script src="frontend/assets/js/jquery.nice-select.min.js"></script>

        <!--====== Count Down js ======-->
        <script src="frontend/assets/js/jquery.countdown.min.js"></script>

        <!--====== Appear js ======-->
        <script src="frontend/assets/js/jquery.appear.min.js"></script>

        <!--====== Main js ======-->
        <script src="frontend/assets/js/main.js"></script>










        <!--====== jquery js ======-->
        <script src="frontend/assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!--====== Bootstrap js ======-->
        <script src="frontend/assets/js/bootstrap.min.js"></script>
        <script src="frontend/assets/js/popper.min.js"></script>

        <!--====== Slick js ======-->
        <script src="frontend/assets/js/slick.min.js"></script>

        <!--====== Magnific Popup js ======-->
        <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>

        <!--====== Counter Up js ======-->
        <script src="frontend/assets/js/waypoints.min.js"></script>
        <script src="frontend/assets/js/jquery.counterup.min.js"></script>

        <!--====== Nice Select js ======-->
        <script src="frontend/assets/js/jquery.nice-select.min.js"></script>

        <!--====== Count Down js ======-->
        <script src="frontend/assets/js/jquery.countdown.min.js"></script>

        <!--====== Appear js ======-->
        <script src="frontend/assets/js/jquery.appear.min.js"></script>

        <!--====== Main js ======-->
        <script src="frontend/assets/js/main.js"></script>



        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
