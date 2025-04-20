<section class="blog_details_page pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_blog_details mt-50">
                    <div class="blog_details_image">
                        <img src="{{ $post->image_path ? (Str::startsWith($post->image_path, 'posts/') ? asset('storage/' . $post->image_path) : asset('frontend/assets/images/' . $post->image_path)) : asset('frontend/assets/images/blog-placeholder.jpg') }}" alt="{{ $post->title ?? 'Post' }}" onerror="this.src='{{ asset('frontend/assets/images/blog-placeholder.jpg') }}';">
                    </div>
                    <div class="blog_details_content">
                        <span class="date"><span>{{ $post->created_at->format('d') }}</span> {{ $post->created_at->format('M') }}</span>
                        <div class="blog_content_wrapper">
                            <ul class="blog_meta">
                                <li><span>{{ $post->category ?? 'General' }}</span></li>
                                <li><span>{{ $post->created_at->format('d M Y') }}</span></li>
                            </ul>
                            <h4 class="blog_title">{{ $post->title ?? 'Untitled Post' }}</h4>
                            <div class="blog_content">{!! $post->content !!}</div>
                            @if($post->pdf_path)
                                <a href="{{ asset('storage/' . $post->pdf_path) }}" class="main-btn mt-20" target="_blank">Download PDF</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            \Log::info('Post Details Component Rendered', [
                'post_id' => $post->id,
                'title' => $post->title,
                'image_path' => $post->image_path,
                'pdf_path' => $post->pdf_path,
            ]);
        @endphp
    </div>
</section>
