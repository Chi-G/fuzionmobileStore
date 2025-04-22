<section class="blog_list_page pt-20 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if($posts->isNotEmpty())
                    @foreach($posts as $post)
                        <div class="single_blog_list mt-50">
                            <div class="blog_list_image">
                                <img src="{{ $post->image_path ? (Str::startsWith($post->image_path, 'posts/') ? asset('storage/' . $post->image_path) : asset('frontend/assets/images/' . basename($post->image_path))) : asset('frontend/assets/images/blog-placeholder.jpg') }}" alt="{{ $post->title ?? 'Post' }}" onerror="this.src='{{ asset('frontend/assets/images/blog-placeholder.jpg') }}';">
                            </div>
                            <div class="blog_list_content">
                                <span class="date"><span>{{ $post->created_at->format('d') }}</span> {{ $post->created_at->format('M') }}</span>
                                <div class="blog_content_wrapper">
                                    <ul class="blog_meta">
                                        <li><span>{{ $post->category ?? 'General' }}</span></li>
                                        <li><span>{{ $post->created_at->format('d M Y') }}</span></li>
                                    </ul>
                                    <h4 class="blog_title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title ?? 'Untitled Post' }}</a></h4>
                                    <p>{{ Str::limit(strip_tags($post->content), 150) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $posts->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <p>No posts available at this time.</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="sidebar mt-50">
                    <div class="sidebar_search">
                        <form action="{{ route('posts') }}" method="GET">
                            <input type="text" name="search" placeholder="Search" value="{{ request('search') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar_post mt-30">
                        <h5 class="sidebar_title">Popular Posts</h5>
                        <ul>
                            @foreach($popularPosts as $popularPost)
                                <li>
                                    <div class="single_sidebar_post d-flex mt-30">
                                        <div class="post_image">
                                            <img src="{{ $popularPost->image_path ? (Str::startsWith($popularPost->image_path, 'posts/') ? asset('storage/' . $popularPost->image_path) : asset('frontend/assets/images/' . basename($popularPost->image_path))) : asset('frontend/assets/images/blog-placeholder.jpg') }}" alt="{{ $popularPost->title ?? 'Post' }}" onerror="this.src='{{ asset('frontend/assets/images/blog-placeholder.jpg') }}';">
                                        </div>
                                        <div class="post_content media-body">
                                            <h6 class="title"><a href="{{ route('posts.show', $popularPost->id) }}">{{ $popularPost->title ?? 'Untitled Post' }}</a></h6>
                                            <p class="date">{{ $popularPost->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar_list mt-30">
                        <h5 class="sidebar_title">Archives</h5>
                        <ul class="archives_list">
                            @foreach($archives as $archive)
                                <li><a href="{{ route('posts', ['month' => $archive['month'], 'year' => $archive['year']]) }}"><i class="fa fa-angle-right"></i> {{ \Carbon\Carbon::create($archive['year'], $archive['month'])->format('M Y') }} <span>({{ $archive['count'] }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar_tag mt-30">
                        <h5 class="sidebar_title">Tags</h5>
                        <ul class="archives_tag">
                            @foreach($tags as $tag)
                                @if(is_array($tag))
                                    @foreach($tag as $innerTag)
                                        <li><a href="{{ route('posts', ['tag' => $innerTag]) }}">{{ $innerTag }}</a></li>
                                    @endforeach
                                @else
                                    <li><a href="{{ route('posts', ['tag' => $tag]) }}">{{ $tag }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @php
            \Log::info('Posts Component Rendered', [
                'post_count' => $posts->count(),
                'image_paths' => $posts->pluck('image_path')->toArray(),
                'categories' => $posts->pluck('category')->toArray(),
                'tags' => $tags,
            ]);
        @endphp
    </div>
</section>
