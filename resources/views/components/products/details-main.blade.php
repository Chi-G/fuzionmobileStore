<section class="courses_details_area pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-lg-last">
                <div class="courses_details_sidebar">
                    <div class="courses_sidebar_image">
                        <img src="{{ $product->image_path }}" alt="{{ $product->name ?? 'Product' }}" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                        <div class="price">
                            <div class="price_wrapper">
                                <p>Price</p>
                                <span>${{ number_format($product->price ?? 0, 2) }}</span>
                            </div>
                        </div>
                        <div class="courses_btn">
                            <form action="{{ route('cart.buy-now', $product->id) }}" method="POST" class="flex items-center gap-2">
                                @csrf
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="main-btn">Buy Now</button>
                            </form>
                            <form action="{{ route('cart.add') }}" method="POST" class="flex items-center gap-2 mt-2">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="main-btn">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="courses_sidebar_title">
                        <h4 class="title">Product Details</h4>
                    </div>
                    <div class="courses_sidebar_list">
                        <ul class="list">
                            <li><i class="fa fa-users"></i> Purchases <span>{{ $product->enrollment_count ?? 0 }}</span></li>
                            <li><i class="fa fa-star"></i> Rating <span>{{ number_format($product->rating ?? 0, 1) }}</span></li>
                            <li><i class="fa fa-list"></i> Category <span>{{ $product->category ?? 'General' }}</span></li>
                            <li><i class="fa fa-box"></i> Stock <span>{{ $product->stock ?? 0 }}</span></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-lg-first">
                <div class="courses_details_content">
                    <div class="single_courses_details mt-30">
                        <h4 class="courses_details_title">Description</h4>
                        <p>{{ $product->description ?? 'No description available.' }}</p>
                    </div>
                    <div class="courses_reviews mt-50">
                        <div class="courses_top_bar">
                            <div class="courses_title">
                                <h4 class="courses_details_title">Reviews</h4>
                            </div>
                        </div>
                        <div class="courses_reviews_wrapper d-md-flex align-items-center">
                            <div class="average_rating text-center">
                                <span class="rating_value">{{ number_format($product->rating ?? 0, 1) }}</span>
                                <ul class="review_star">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><span><i class="fa {{ $i <= round($product->rating ?? 0) ? 'fa-star' : 'fa-star-o' }}"></i></span></li>
                                    @endfor
                                </ul>
                                <p>Rated {{ number_format($product->rating ?? 0, 1) }} out of 5</p>
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
                                <p>This product offers excellent features and value, highly recommended for tech enthusiasts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            \Log::info('Product Details Component Rendered', [
                'product_id' => $product->id ?? 'null',
                'name' => $product->name ?? 'null',
                'image_path' => $product->image_path ?? 'null',
                'author_image' => $product->author_image ?? 'null',
                'category' => $product->category ?? 'null',
            ]);
        @endphp
    </div>
</section>
