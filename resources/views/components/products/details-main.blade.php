<section class="blog_details_page pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_details_content">
                    <p>{!! $product->description !!}</p>
                    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    <p><strong>Type:</strong> {{ ucfirst($product->type) }}</p>
                    <!-- Add Buy Now button or payment integration later -->
                </div>
            </div>
        </div>
    </div>
</section>
