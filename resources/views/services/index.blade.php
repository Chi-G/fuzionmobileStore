@extends('layouts.app')

@section('content')
    <!-- Page Banner -->
    <x-services.banner />

    <!-- Why Choose Us -->
    <section class="why_choose_area pt-30 pb-30">
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
                                        <h5 class="title"><a href="{{ route('products') }}">Premium Quality</a></h5>
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
                                        <h5 class="title"><a href="{{ route('services') }}">Expert Support</a></h5>
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
                                        <h5 class="title"><a href="{{ route('events') }}">Community Focus</a></h5>
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
                                        <h5 class="title"><a href="{{ route('webinars') }}">Learning Hub</a></h5>
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

    <!-- Program -->
    <section class="program_area pt-30">
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
                                <h5 class="title"><a href="{{ route('products') }}">Mobile <br> Devices</a></h5>
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
                                <h5 class="title"><a href="{{ route('products') }}">SD Card <br> Solutions</a></h5>
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
                                <h5 class="title"><a href="{{ route('services') }}">Corporate <br> Training</a></h5>
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
                                <h5 class="title"><a href="{{ route('services') }}">Content <br> Development</a></h5>
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
                                <h5 class="title"><a href="{{ route('webinars') }}">Expert <br> Webinars</a></h5>
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
                                <h5 class="title"><a href="{{ route('events') }}">Community <br> Events</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
