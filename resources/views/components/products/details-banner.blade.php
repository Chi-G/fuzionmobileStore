<section class="blog_details_page pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_details_image">
                    <img src="{{ $product->image_path ? (Str::startsWith($product->image_path, 'products/') ? asset('storage/' . $product->image_path) : asset('frontend/assets/images/' . basename($product->image_path))) : asset('frontend/assets/images/product-placeholder.jpg') }}" alt="{{ $product->name ?? 'Product' }}" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                </div>
                <h1 class="blog_details_title">{{ $product->name ?? 'Unnamed Product' }}</h1>
                <ul class="blog_meta">
                    <li><span><i class="fa fa-tag"></i> {{ ucfirst($product->type) }}</span></li>
                    <li><span><i class="fa fa-dollar-sign"></i> ${{ number_format($product->price, 2) }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
