<section class="courses_details_area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-lg-last">
                <div class="courses_details_sidebar">
                    <div class="courses_sidebar_image">
                        <img src="{{ $service->image_path ? (Str::startsWith($service->image_path, 'services/') ? asset('storage/' . $service->image_path) : asset('frontend/assets/images/' . $service->image_path)) : asset('frontend/assets/images/courses-placeholder.jpg') }}" alt="{{ $service->title ?? 'Service' }}" onerror="this.src='{{ asset('frontend/assets/images/courses-placeholder.jpg') }}';">
                        <div class="price">
                            <div class="price_wrapper">
                                <p>Price</p>
                                <span>${{ number_format($service->price ?? 0, 2) }}</span>
                            </div>
                        </div>
                        <div class="courses_btn">
                            <a class="main-btn" href="{{ route('cart.add', $service->id) }}">Buy Now</a>
                        </div>
                    </div>
                    <div class="courses_sidebar_title">
                        <h4 class="title">Service Details</h4>
                    </div>
                    <div class="courses_sidebar_list">
                        <ul class="list">
                            <li><i class="fa fa-users"></i> Enrolled <span>{{ $service->enrollment_count ?? 0 }}</span></li>
                            <li><i class="fa fa-star"></i> Rating <span>{{ number_format($service->rating ?? 0, 1) }}</span></li>
                            <li><i class="fa fa-list"></i> Category <span>{{ $service->category ?? 'General' }}</span></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-lg-first">
                <div class="courses_details_content">
                    <div class="single_courses_details mt-40">
                        <h4 class="courses_details_title">Description</h4>
                        <p>{{ $service->description ?? 'No description available.' }}</p>
                    </div>
                    <div class="courses_reviews mt-50">
                        <div class="courses_top_bar">
                            <div class="courses_title">
                                <h4 class="courses_details_title">Reviews</h4>
                            </div>
                        </div>
                        <div class="courses_reviews_wrapper d-md-flex align-items-center">
                            <div class="average_rating text-center">
                                <span class="rating_value">{{ number_format($service->rating ?? 0, 1) }}</span>
                                <ul class="review_star">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><span><i class="fa {{ $i <= round($service->rating ?? 0) ? 'fa-star' : 'fa-star-o' }}"></i></span></li>
                                    @endfor
                                </ul>
                                <p>Rated {{ number_format($service->rating ?? 0, 1) }} out of 5</p>
                            </div>
                        </div>
                        <div class="courses_reviews_comment d-sm-flex">
                            <div class="comment_author">
                                <img src="{{ asset('frontend/assets/images/author-6.jpg') }}" alt="author">
                            </div>
                            <div class="comment_content media-body">
                                <h5 class="author_name">Mike Helcher</h5>
                                <ul class="star">
                                    <li><span>Great</span></li>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><i class="fa fa-star"></i></li>
                                    @endfor
                                </ul>
                                <p>This service provides practical skills that can be applied immediately, making it highly valuable for professionals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            \Log::info('Service Details Component Rendered', [
                'service_id' => $service->id,
                'title' => $service->title,
                'image_path' => $service->image_path,
                'author_image' => $service->author_image,
                'category' => $service->category,
            ]);
        @endphp
    </div>
</section>
