<section class="courses_area pt-1 pb-5">
    <div class="container">
        @if($products->isNotEmpty())
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('products.show', $product->id) }}" class="single_courses courses_gray mt-30" style="text-decoration: none;">
                            <div class="courses_image">
                                <img src="{{ \Str::startsWith($product->image_path, 'http') ? $product->image_path : ($product->image_path ? asset('frontend/assets/images/' . $product->image_path) : asset('frontend/assets/images/product-placeholder.jpg')) }}" alt="{{ $product->name ?? 'Product' }}" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                            </div>
                            <div class="courses_content" style="margin-top: 20px;">
                                @if($product->category)
                                    <ul class="tag">
                                        <li><span>{{ $product->category }}</span></li>
                                    </ul>
                                @endif
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="{{ \Str::startsWith($product->author_image, 'http') ? $product->author_image : ($product->author_image ? asset('frontend/assets/images/' . $product->author_image) : asset('frontend/assets/images/author-placeholder.jpg')) }}" alt="{{ $product->author_name ?? 'Author' }}" onerror="this.src='{{ asset('frontend/assets/images/author-placeholder.jpg') }}';">
                                    </div>
                                    <div class="author_name media-body">
                                        <span>{{ $product->author_name ?? 'Unknown' }}</span>
                                    </div>
                                </div>
                                <h4 class="title">{{ $product->name ?? 'Unnamed Product' }}</h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><i class="fa fa-user-o"></i> {{ $product->enrollment_count ?? 0 }}</li>
                                        <li><i class="fa fa-star-o"></i> {{ number_format($product->rating ?? 0, 1) }}</li>
                                    </ul>
                                    <span>${{ number_format($product->price ?? 0, 2) }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    {{ $products->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>No products available at this time.</p>
                </div>
            </div>
        @endif
        @php
            \Log::info('Products Component Rendered', [
                'product_count' => $products->count(),
                'image_paths' => $products->pluck('image_path')->toArray(),
                'categories' => $products->pluck('category')->toArray(),
                'author_images' => $products->pluck('author_image')->toArray(),
            ]);
        @endphp
</section>
