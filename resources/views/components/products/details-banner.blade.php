<section class="courses_details_banner bg_cover" style="background-image: url({{ asset('frontend/assets/images/about_bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-sm-11">
                <div class="details_banner_content">
                    <h4 class="title">{{ $product->name ?? 'Product Details' }}</h4>
                    <div class="details_media_wrapper d-flex flex-wrap">
                        <div class="details_media d-flex align-items-center mt-30">
                            <div class="media_image">
                                <img class="author" src="{{ $product->author_image ? asset('frontend/assets/images/' . $product->author_image) : asset('frontend/assets/images/author-placeholder.jpg') }}" alt="{{ $product->author_name ?? 'Author' }}" onerror="this.src='{{ asset('frontend/assets/images/author-placeholder.jpg') }}';">
                            </div>
                            <div class="media_content media-body">
                                <p>Brand</p>
                                <h6 class="title">{{ $product->author_name ?? 'Unknown' }}</h6>
                            </div>
                        </div>
                        <div class="details_media d-flex align-items-center mt-30">
                            <div class="media_image">
                                <img class="bookmark" src="{{ asset('frontend/assets/images/bookmark.png') }}" alt="bookmark">
                            </div>
                            <div class="media_content media-body">
                                <p>Category</p>
                                <h6 class="title"><a href="#">{{ $product->category ?? 'General' }}</a></h6>
                            </div>
                        </div>
                        <div class="details_media d-flex align-items-center mt-30">
                            <div class="media_image">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="media_content">
                                <p>Rating</p>
                                <ul class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><i class="fa {{ $i <= round($product->rating ?? 0) ? 'fa-star' : 'fa-star-o' }}"></i></li>
                                    @endfor
                                    <li><span>({{ number_format($product->rating ?? 0, 1) }} / 5)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
