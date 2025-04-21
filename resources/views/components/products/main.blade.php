<section class="blog_list_page pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($products->isNotEmpty())
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="single_blog_list">
                                    <div class="blog_list_image">
                                        <img src="{{ $product->image_path ? (Str::startsWith($product->image_path, 'products/') ? asset('storage/' . $product->image_path) : asset('frontend/assets/images/' . basename($product->image_path))) : asset('frontend/assets/images/product-placeholder.jpg') }}" alt="{{ $product->name ?? 'Product' }}" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                                    </div>
                                    <div class="blog_list_content">
                                        <h4 class="blog_title"><a href="{{ route('products.show', $product->id) }}">{{ $product->name ?? 'Unnamed Product' }}</a></h4>
                                        <ul class="blog_meta">
                                            <li><span>Type: {{ ucfirst($product->type) }}</span></li>
                                            <li><span>Price: ${{ number_format($product->price, 2) }}</span></li>
                                            <li><span>Stock: {{ $product->stock }}</span></li>
                                        </ul>
                                        <p>{{ Str::limit(strip_tags($product->description), 150) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $products->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <p>No products available at this time.</p>
                    </div>
                @endif
            </div>
        </div>
        @php
            \Log::info('Products Component Rendered', [
                'product_count' => $products->count(),
                'image_paths' => $products->pluck('image_path')->toArray(),
            ]);
        @endphp
    </div>
</section>
