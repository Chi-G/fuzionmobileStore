<section class="about_area pt-30">
    <img class="shap_1" src="{{ asset('frontend/assets/images/shape/shape-1.png') }}" alt="shape">
    <img class="shap_2" src="{{ asset('frontend/assets/images/shape/shape-2.png') }}" alt="shape">
    <img class="shap_3" src="{{ asset('frontend/assets/images/shape/shape-3.png') }}" alt="shape">
    <img class="shap_4" src="{{ asset('frontend/assets/images/shape/shape-4.png') }}" alt="shape">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_content mt-45">
                    <h3 class="about_title">FuzionMobile: Empowering Education</h3>
                    <p class="text">{{ $companyInfo?->description ?? 'FuzionMobile is dedicated to revolutionizing learning through innovative technology.' }}</p>
                    <p>{{ $companyInfo?->mission ?? 'Our mission is to provide accessible and impactful educational solutions.' }}</p>
                    <a href="{{ route('services') }}" class="main-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_image mt-30">
                    <img src="{{ asset('frontend/assets/images/about-1.jpg') }}" alt="about" class="about_image-1">
                    <img src="{{ asset('frontend/assets/images/about-2.jpg') }}" alt="about" class="about_image-2">
                    <img src="{{ asset('frontend/assets/images/about-3.jpg') }}" alt="about" class="about_image-3">
                </div>
            </div>
        </div>
    </div>
</section>
