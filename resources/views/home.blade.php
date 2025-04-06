@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Welcome to FuzionMobile - Empowering education through innovation.')
 
@section('content')
    <!-- Slider -->
    <section class="slider_area slider-active">
        <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('frontend/assets/images/slider-1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_content text-center">
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Your Mobile Innovation Hub</h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">Discover <span>FuzionMobile</span></h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">Unleash your potential with premium mobile products, expert-led webinars, <br> and transformative services—all in one dynamic platform.</p>
                            <a class="main-btn" href="{{ route('products.index') }}" data-animation="fadeInUp" data-delay="1.1s">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('frontend/assets/images/slider-3.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_content text-center">
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Connect and Grow</h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">Events & <span>Webinars</span></h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">Join our vibrant community through exclusive events and webinars designed <br> to inspire innovation and skill-building.</p>
                            <a class="main-btn" href="{{ route('webinars.index') }}" data-animation="fadeInUp" data-delay="1.1s">Register Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features_area">
        <div class="container">
            <div class="features_wrapper">
                <div class="row no-gutters">
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="{{ asset('frontend/assets/images/f-icon-1.png') }}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="{{ route('products.index') }}">Mobile Store</a></h4>
                                <p>Browse our premium selection of SD cards, devices, and licenses, curated to power your mobile needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="{{ asset('frontend/assets/images/f-icon-2.png') }}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="{{ route('services.index') }}">Expert Services</a></h4>
                                <p>Unlock tailored solutions—from corporate training to content development—designed for success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="{{ asset('frontend/assets/images/f-icon-3.png') }}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="{{ route('events.index') }}">Engaging Events</a></h4>
                                <p>Participate in virtual or in-person events that connect you with industry leaders and innovators.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about_area pt-80">
        <img class="shap_1" src="{{ asset('frontend/assets/images/shape/shape-1.png') }}" alt="shape">
        <img class="shap_2" src="{{ asset('frontend/assets/images/shape/shape-2.png') }}" alt="shape">
        <img class="shap_3" src="{{ asset('frontend/assets/images/shape/shape-3.png') }}" alt="shape">
        <img class="shap_4" src="{{ asset('frontend/assets/images/shape/shape-4.png') }}" alt="shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_content mt-45">
                        <h3 class="about_title">Empowering Your Mobile World</h3>
                        <p class="text">FuzionMobile is your gateway to innovative mobile solutions, blending premium products with expert-driven resources.</p>
                        <p>Our vision is to redefine how you engage with technology—through seamless shopping, impactful events, and cutting-edge services.</p>
                        <a href="{{ route('about.index') }}" class="main-btn">Learn About Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image mt-50">
                        <img src="{{ asset('frontend/assets/images/about-1.jpg') }}" alt="about" class="about_image-1">
                        <img src="{{ asset('frontend/assets/images/about-2.jpg') }}" alt="about" class="about_image-2">
                        <img src="{{ asset('frontend/assets/images/about-3.jpg') }}" alt="about" class="about_image-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="counter_area pt-80 pb-130">
        <div class="container">
            <div class="row counter_wrapper">
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/count_icon-1.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">500</span>+</span>
                            <p>Products Sold</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/count_icon-2.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">5</span>k+</span>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/count_icon-3.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">150</span>+</span>
                            <p>Events Hosted</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter_col">
                    <div class="single_counter text-center mt-50">
                        <div class="counter_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/count_icon-4.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="counter_content">
                            <span class="cont"><span class="counter">1200</span>+</span>
                            <p>Webinars Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About 2 -->
    <section class="about_area_2 d-flex flex-wrap">
        <div class="about_video bg_cover" style="background-image: url({{ asset('frontend/assets/images/about_bg.jpg') }})">
            <div class="video">
                <a class="video_play" href="{{ asset('frontend/assets/videos/fuzionmobile_intro.mp4') }}"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <div class="about_content_2">
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="{{ route('products.index') }}">Unmatched Mobile Value</a></h4>
                        <p>Shop with confidence—our premium SD cards, devices, and licenses deliver top performance and reliability.</p>
                        <a href="{{ route('products.index') }}" class="main-btn">Explore Store</a>
                    </div>
                </div>
                <div class="about_2_image bg_cover" style="background-image: url({{ asset('frontend/assets/images/about-4.jpg') }})"></div>
            </div>
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content order-md-last">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="{{ route('events.index') }}">Thriving Mobile Community</a></h4>
                        <p>Connect with innovators through exclusive events and webinars that inspire and elevate your mobile expertise.</p>
                        <a href="{{ route('events.index') }}" class="main-btn">Join Us</a>
                    </div>
                </div>
                <div class="about_2_image bg_cover order-md-first" style="background-image: url({{ asset('frontend/assets/images/about-5.jpg') }})"></div>
            </div>
        </div>
    </section>

    <!-- Program -->
    <section class="program_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title section_title_2 text-center pb-50">
                        <h3 class="main_title">Our Offerings</h3>
                        <p>Explore a suite of mobile-focused solutions and experiences designed to empower your digital journey.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters program_wrapper">
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-1 d-flex flex-wrap">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-1.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('products.index') }}">Mobile <br> Devices</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-2 d-flex flex-wrap program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-2.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('products.index') }}">SD Card <br> Solutions</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-3 d-flex flex-wrap program_3">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-3.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('services.index') }}">Corporate <br> Training</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-4 d-flex flex-wrap program_2 program_3 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-4.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('services.index') }}">Content <br> Development</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-5 d-flex flex-wrap program_2">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-5.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('webinars.index') }}">Expert <br> Webinars</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-6 d-flex flex-wrap program_2 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{ asset('frontend/assets/images/p-icon-6.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="{{ route('events.index') }}">Community <br> Events</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why_choose_area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why_choose_content">
                        <div class="section_title pb-20">
                            <h3 class="main_title">Why Choose FuzionMobile?</h3>
                            <p>Experience a platform designed to empower your mobile journey with innovative solutions and exceptional value.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-1.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="{{ route('products.index') }}">Premium Quality</a></h5>
                                        <p>Shop top-tier mobile products backed by reliability and performance guarantees.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-2.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="{{ route('services.index') }}">Expert Support</a></h5>
                                        <p>Access tailored training and content development from industry professionals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-3.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="{{ route('events.index') }}">Community Focus</a></h5>
                                        <p>Join events that connect you with innovators and thought leaders.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-4.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="{{ route('webinars.index') }}">Learning Hub</a></h5>
                                        <p>Gain insights through webinars designed to elevate your mobile expertise.</p>
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
                <img src="{{ asset('frontend/assets/images/choose_bg.png') }}" alt="">
            </div>
        </div>
    </section>

    <!-- Courses -->
    <section class="courses_area courses_bg pt-120 pb-130">
        <img class="shape-1" src="{{ asset('frontend/assets/images/shape/shape-1.png') }}" alt="shape">
        <img class="shape-2" src="{{ asset('frontend/assets/images/shape/shape-2.png') }}" alt="shape">
        <img class="shape-3" src="{{ asset('frontend/assets/images/shape/shape-3.png') }}" alt="shape">
        <img class="shape-4" src="{{ asset('frontend/assets/images/shape/shape-4.png') }}" alt="shape">
        <img class="shape-5" src="{{ asset('frontend/assets/images/shape/shape-5.png') }}" alt="shape">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <h3 class="main_title">Featured Webinars</h3>
                        <p>Unlock mobile expertise with expert-led webinars tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="{{ asset('frontend/assets/images/courses-1.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Mobile Tech</a></li>
                                <li><a href="#">Innovation</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-1.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">James Carter</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="{{ route('webinars.index') }}">Mastering Mobile Storage Solutions</a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 150</a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i> 4.8</a></li>
                                </ul>
                                <span>Free</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="{{ asset('frontend/assets/images/courses-2.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Business</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-2.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Sarah Brooks</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="{{ route('webinars.index') }}">Mobile Strategies for Enterprises</a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 200</a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i> 4.7</a></li>
                                </ul>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="{{ asset('frontend/assets/images/courses-3.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Content</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-3.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Liam Hayes</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="{{ route('webinars.index') }}">Creating Mobile Content That Converts</a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 120</a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i> 4.6</a></li>
                                </ul>
                                <span>$29</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_courses mt-30">
                        <div class="courses_image">
                            <img src="{{ asset('frontend/assets/images/courses-1.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Tech Trends</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-2.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Emma Stone</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="{{ route('webinars.index') }}">Future of Mobile Innovation</a></h4>
                            <div class="meta d-flex justify-content-between">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i> 180</a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i> 4.9</a></li>
                                </ul>
                                <span>Free</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial_area pt-80 pb-130 bg_cover" style="background-image: url({{ asset('frontend/assets/images/testimonial_bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial_title mt-50">
                        <img src="{{ asset('frontend/assets/images/quota.png') }}" alt="quota">
                        <h2 class="title">Success Stories from Our Community</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_items mt-50">
                        <div class="single_testimonial">
                            <p>FuzionMobile’s SD cards transformed our workflow reliable and fast. The webinars also gave us actionable insights.</p>
                            <h6 class="name">Michael Reed</h6>
                            <span>Business Owner</span>
                        </div>
                        <div class="single_testimonial">
                            <p>The training sessions were a game-changer for our team, and the store’s quality products exceeded expectations.</p>
                            <h6 class="name">Olivia Grant</h6>
                            <span>Corporate Trainer</span>
                        </div>
                        <div class="single_testimonial">
                            <p>I loved the community events connecting with experts and getting hands-on mobile tips was invaluable.</p>
                            <h6 class="name">Ethan Cole</h6>
                            <span>Tech Enthusiast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-50">
                        <h3 class="main_title">Meet Our Experts</h3>
                        <p>Our team drives innovation and delivers exceptional mobile solutions for you.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 team_col_1">
                    <div class="single_team d-sm-flex flex-wrap align-items-center">
                        <img class="team_arrow" src="{{ asset('frontend/assets/images/left.png') }}" alt="left">
                        <div class="team_image">
                            <img src="{{ asset('frontend/assets/images/team-1.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Dr. Lisa Harper</a></h4>
                                <span>Mobile Tech Specialist</span>
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
                        <img class="team_arrow" src="{{ asset('frontend/assets/images/right.png') }}" alt="left">
                        <div class="team_image">
                            <img src="{{ asset('frontend/assets/images/team-3.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Mark Evans</a></h4>
                                <span>Event Coordinator</span>
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
                        <img class="team_arrow" src="{{ asset('frontend/assets/images/left.png') }}" alt="left">
                        <div class="team_image">
                            <img src="{{ asset('frontend/assets/images/team-2.jpg') }}" alt="team">
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
                        <img class="team_arrow" src="{{ asset('frontend/assets/images/right.png') }}" alt="left">
                        <div class="team_image">
                            <img src="{{ asset('frontend/assets/images/team-4.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <div class="team_content_wrapper">
                                <h4 class="title"><a href="#">Sophie Kim</a></h4>
                                <span>Content Developer</span>
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

    <!-- Events -->
    <section class="events_area d-flex flex-wrap">
        <div class="events_left">
            <div class="single_events d-flex flex-wrap">
                <div class="events_content bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-1.jpg') }})">
                    <div class="events_wrapper">
                        <ul class="events_meta">
                            <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 15 May, 2025</a></li>
                            <li><a class="color-2" href="#"><i class="fa fa-video-camera"></i> Virtual (Zoom)</a></li>
                        </ul>
                        <h4 class="events_title"><a href="{{ route('events.index') }}">Mobile Tech Summit <br> 2025</a></h4>
                    </div>
                </div>
                <div class="events_content_title">
                    <div class="events_wrapper">
                        <h2 class="title">Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="single_events d-flex flex-wrap">
                <div class="events_content events_content_2 bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-1.jpg') }})">
                    <div class="events_wrapper">
                        <ul class="events_meta">
                            <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 20 June, 2025</a></li>
                            <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i> The Gambia, GA</a></li>
                        </ul>
                        <h4 class="events_title"><a href="{{ route('events.index') }}">FuzionMobile <br> Innovation Day</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events_right bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-3.jpg') }})">
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <ul class="events_meta">
                        <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 10 July, 2025</a></li>
                        <li><a class="color-2" href="#"><i class="fa fa-video-camera"></i> Virtual (Google Meet)</a></li>
                    </ul>
                    <h4 class="events_title"><a href="{{ route('events.index') }}">SD Card Solutions <br> Workshop</a></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <h3 class="main_title">Latest Blog Posts</h3>
                        <p>Stay informed with insights on mobile trends, tips, and updates from FuzionMobile.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{ asset('frontend/assets/images/blog-1.jpg') }}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span>06</span> Apr</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Kelly Mason</a></li>
                                    <li><a href="#">06 Apr 2025</a></li>
                                </ul>
                                <h4 class="blog_title"><a href="{{ route('posts.index') }}">Top 5 Mobile Storage Tips</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{ asset('frontend/assets/images/blog-2.jpg') }}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span>10</span> Apr</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Tom Nguyen</a></li>
                                    <li><a href="#">10 Apr 2025</a></li>
                                </ul>
                                <h4 class="blog_title"><a href="{{ route('posts.index') }}">Why Events Matter in Tech</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{ asset('frontend/assets/images/blog-3.jpg') }}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span>15</span> Apr</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Nina Patel</a></li>
                                    <li><a href="#">15 Apr 2025</a></li>
                                </ul>
                                <h4 class="blog_title"><a href="{{ route('posts.index') }}">Maximizing SD Card Performance</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
