<section class="about_area_2 d-flex flex-wrap">
    <div class="about_video bg_cover" style="background-image: url({{ asset('frontend/assets/images/about_bg.jpg') }})">
        <div class="video">
            <a class="video_play" href="{{ $companyInfo?->video_url ?? '#' }}"><i class="fa fa-play"></i></a>
        </div>
    </div>

    <div class="about_content_2">
        <div class="single_about_2 d-flex flex-wrap about_color_1">
            <div class="about_2_content">
                <div class="about_2_content_wrapper">
                    <h4 class="title"><a href="#">Scholarships</a></h4>
                    <p>{{ $companyInfo?->scholarships ?? 'We offer scholarships to support deserving students.' }}</p>
                    <a href="{{ route('services') }}" class="main-btn">Learn More</a>
                </div>
            </div>
            <div class="about_2_image bg_cover" style="background-image: url({{ asset('frontend/assets/images/about-4.jpg') }})"></div>
        </div>

        <div class="single_about_2 d-flex flex-wrap about_color_2">
            <div class="about_2_content order-md-last">
                <div class="about_2_content_wrapper">
                    <h4 class="title"><a href="#">Alumni</a></h4>
                    <p>{{ $companyInfo?->alumni ?? 'Our alumni network empowers graduates to succeed.' }}</p>
                    <a href="{{ route('services') }}" class="main-btn">Learn More</a>
                </div>
            </div>
            <div class="about_2_image bg_cover order-md-first" style="background-image: url({{ asset('frontend/assets/images/about-5.jpg') }})"></div>
        </div>
    </div>
</section>
