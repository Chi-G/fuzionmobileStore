<section class="counter_area pt-30 pb-30">
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
                        <span class="cont"><span class="counter">{{ $companyInfo?->faculties ?? 78 }}</span>+</span>
                        <p>University Faculties</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 counter_col">
                <div class="single_counter text-center mt-30">
                    <div class="counter_icon">
                        <div class="icon_wrapper">
                            <img src="{{ asset('frontend/assets/images/count_icon-2.png') }}" alt="Icon">
                        </div>
                    </div>
                    <div class="counter_content">
                        <span class="cont"><span class="counter">{{ $companyInfo?->students ?? 5000 }}</span>k+</span>
                        <p>Total Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 counter_col">
                <div class="single_counter text-center mt-30">
                    <div class="counter_icon">
                        <div class="icon_wrapper">
                            <img src="{{ asset('frontend/assets/images/count_icon-3.png') }}" alt="Icon">
                        </div>
                    </div>
                    <div class="counter_content">
                        <span class="cont"><span class="counter">{{ $companyInfo?->books ?? 400000 }}</span>k</span>
                        <p>Library Books</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 counter_col">
                <div class="single_counter text-center mt-30">
                    <div class="counter_icon">
                        <div class="icon_wrapper">
                            <img src="{{ asset('frontend/assets/images/count_icon-4.png') }}" alt="Icon">
                        </div>
                    </div>
                    <div class="counter_content">
                        <span class="cont"><span class="counter">{{ $companyInfo?->seminars ?? 1200 }}</span></span>
                        <p>Seminars Held</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
