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
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your</h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">First <span>Learning</span> Platform</h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna <br> etquisque euismod orci ut et lobortis.</p>
                            <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
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
                            <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">Welcome to your</h4>
                            <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s">First <span>Learning</span> Platform</h2>
                            <p data-animation="fadeInUp" data-delay="0.8s">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna <br> etquisque euismod orci ut et lobortis.</p>
                            <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.1s">Learn More</a>
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
                                <h4 class="features_title"><a href="#">Quality Teachers</a></h4>
                                <p>What do you think is better to receive after each lesson a lovely looking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="{{ asset('frontend/assets/images/f-icon-2.png') }}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="#">Best Curriculum</a></h4>
                                <p>What do you think is better to receive after each lesson a lovely looking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center">
                            <div class="features_icon">
                                <img src="{{ asset('frontend/assets/images/f-icon-3.png') }}" alt="Icon">
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
                        <h3 class="about_title">We are the top learning platform</h3>
                        <p class="text">What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice</p>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice? We thought you might choose the latter.</p>
                        <a href="#" class="main-btn">Learn More</a>
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
                            <span class="cont"><span class="counter">78</span>+</span>
                            <p>University Faculties</p>
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
                            <p>Total Students</p>
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
                            <span class="cont"><span class="counter">400</span>k</span>
                            <p>Library Books</p>
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
                            <span class="cont"><span class="counter">1200</span></span>
                            <p>Seminars Held</p>
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
                <a class="video_play" href="#"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <div class="about_content_2">
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">Scholarships</a></h4>
                        <p>What do you think is better to receive after each lesson: a lovely looking</p>
                        <a href="#" class="main-btn">Learn More</a>
                    </div>
                </div>
                <div class="about_2_image bg_cover" style="background-image: url({{ asset('frontend/assets/images/about-4.jpg') }})"></div>
            </div>
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content order-md-last">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">Alumni</a></h4>
                        <p>What do you think is better to receive after each lesson: a lovely looking</p>
                        <a href="#" class="main-btn">Learn More</a>
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
                        <h3 class="main_title">Our Programs</h3>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
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
                                <h5 class="title"><a href="#">Applied <br> Physics</a></h5>
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
                                <h5 class="title"><a href="#">Political <br> Science</a></h5>
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
                                <h5 class="title"><a href="#">Business <br> Studies</a></h5>
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
                                <h5 class="title"><a href="#">Rocket <br> Science</a></h5>
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
                                <h5 class="title"><a href="#">Art & <br> Design</a></h5>
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
                                <h5 class="title"><a href="#">Medical <br> Science</a></h5>
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
                            <h3 class="main_title">Why choose us?</h3>
                            <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-1.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Big Library</a></h5>
                                        <p>What do you think is better to receive after each lesson: a lovely looking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-2.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Certification</a></h5>
                                        <p>What do you think is better to receive after each lesson: a lovely looking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-3.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Alumni</a></h5>
                                        <p>What do you think is better to receive after each lesson: a lovely looking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 choose_col">
                                <div class="single_choose mt-30">
                                    <div class="choose_icon">
                                        <img src="{{ asset('frontend/assets/images/choose_icon-4.png') }}" alt="Icon">
                                    </div>
                                    <div class="choose_content">
                                        <h5 class="title"><a href="#">Abroad Student</a></h5>
                                        <p>What do you think is better to receive after each lesson: a lovely looking.</p>
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
                        <h3 class="main_title">Featured Courses</h3>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
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
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-1.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Andrew Paker</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="#">Developing android app with v4 pad</a></h4>
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
                            <img src="{{ asset('frontend/assets/images/courses-2.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Language</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-2.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Maria Flevour</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="#">Fundamental basic of learning english</a></h4>
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
                            <img src="{{ asset('frontend/assets/images/courses-3.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">UI/UX</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-3.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Robart Molt</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="#">Basic techniques of learning design</a></h4>
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
                            <img src="{{ asset('frontend/assets/images/courses-1.jpg') }}" alt="courses">
                        </div>
                        <div class="courses_content">
                            <ul class="tag">
                                <li><a href="#">Design</a></li>
                            </ul>
                            <div class="courses_author d-flex">
                                <div class="author_image">
                                    <img src="{{ asset('frontend/assets/images/author-2.jpg') }}" alt="author">
                                </div>
                                <div class="author_name media-body">
                                    <a href="#">Maria Flevour</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="#">Fundamental basic of learning english</a></h4>
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

    <!-- Testimonial -->
    <section class="testimonial_area pt-80 pb-130 bg_cover" style="background-image: url({{ asset('frontend/assets/images/testimonial_bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial_title mt-50">
                        <img src="{{ asset('frontend/assets/images/quota.png') }}" alt="quota">
                        <h2 class="title">Success stories of students who took best from us</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_items mt-50">
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
                            <h6 class="name">Arnold Holder</h6>
                            <span>Student, Language</span>
                        </div>
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
                            <h6 class="name">Arnold Holder</h6>
                            <span>Student, Language</span>
                        </div>
                        <div class="single_testimonial">
                            <p>I found myself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
                            <h6 class="name">Arnold Holder</h6>
                            <span>Student, Language</span>
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
                        <h3 class="main_title">Top Teachers</h3>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
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
                            <img src="{{ asset('frontend/assets/images/team-3.jpg') }}" alt="team">
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

    <!-- Events -->
    <section class="events_area d-flex flex-wrap">
        <div class="events_left">
            <div class="single_events d-flex flex-wrap">
                <div class="events_content bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-1.jpg') }})">
                    <div class="events_wrapper">
                        <ul class="events_meta">
                            <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                            <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i> New York Grand City 1247</a></li>
                        </ul>
                        <h4 class="events_title"><a href="#">Conference for reducing global warming with mr <br> helmet</a></h4>
                    </div>
                </div>
                <div class="events_content_title">
                    <div class="events_wrapper">
                        <h2 class="title">Our Featured Event</h2>
                    </div>
                </div>
            </div>
            <div class="single_events d-flex flex-wrap">
                <div class="events_content events_content_2 bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-1.jpg') }})">
                    <div class="events_wrapper">
                        <ul class="events_meta">
                            <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                            <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i> New York Grand City 1247</a></li>
                        </ul>
                        <h4 class="events_title"><a href="#">Conference for reducing global warming with <br> mr helmet</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events_right bg_cover" style="background-image: url({{ asset('frontend/assets/images/event-3.jpg') }})">
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <ul class="events_meta">
                        <li><a class="color-1" href="#"><i class="fa fa-calendar"></i> 09 Dec, 2019</a></li>
                        <li><a class="color-2" href="#"><i class="fa fa-map-marker"></i> New York Grand City 1247</a></li>
                    </ul>
                    <h4 class="events_title"><a href="#">Conference for reducing global warming with <br> mr helmet</a></h4>
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
                        <h3 class="main_title">Latest Blogs</h3>
                        <p>What do you think is better to receive after each lesson: a lovely looking badge or important skills you can immediately put into practice.</p>
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
                            <span class="date"><span>23</span> Sept</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Arnold Brisben</a></li>
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
                            <img src="{{ asset('frontend/assets/images/blog-2.jpg') }}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span>23</span> Sept</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Arnold Brisben</a></li>
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
                            <img src="{{ asset('frontend/assets/images/blog-3.jpg') }}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <span class="date"><span>23</span> Sept</span>
                            <div class="blog_content_wrapper">
                                <ul class="blog_meta">
                                    <li><a href="#">Arnold Brisben</a></li>
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
@endsection
