<section class="blog_details_page pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_details mt-50">
                    <div class="details_image">
                        <img src="{{ $post->image_path ? (Str::startsWith($post->image_path, 'posts/') ? asset('storage/' . $post->image_path) : asset('frontend/assets/images/' . basename($post->image_path))) : asset('frontend/assets/images/blog-placeholder.jpg') }}" alt="{{ $post->title ?? 'Post' }}" onerror="this.src='{{ asset('frontend/assets/images/blog-placeholder.jpg') }}';">
                    </div>
                    <div class="details_content">
                        <span class="date"><span>{{ $post->created_at->format('d') }}</span> {{ $post->created_at->format('M') }}</span>
                        <div class="blog_content_wrapper">
                            <ul class="blog_meta">
                                <li><span>{{ $post->category ?? 'General' }}</span></li>
                                <li><span>{{ $post->created_at->format('d M Y') }}</span></li>
                            </ul>
                            <h4 class="blog_title">{{ $post->title ?? 'Untitled Post' }}</h4>
                        </div>
                    </div>
                    <div class="blog_content">{!! $post->content !!}</div>
                    @if($post->pdf_path)
                        <a href="{{ asset('storage/' . $post->pdf_path) }}" class="main-btn mt-20" target="_blank">Download PDF</a>
                    @endif
                    @if(!empty($post->tags))
                        <div class="blog_tags mt-20">
                            <strong>Tags:</strong>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('posts', ['tag' => $tag]) }}" class="tag">{{ $tag }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
                {{-- <div class="blog_details_share d-flex mt-30">
                    <span>Share:</span>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div> --}}
                {{-- <div class="blog_details_comment mt-45">
                    <div class="blog_comment_items">
                        <h4 class="blog_details_comment_title">Comments ({{ $post->comments->count() }})</h4>
                        <ul>
                            @forelse($post->comments as $comment)
                                <li>
                                    <div class="single_comment d-sm-flex">
                                        <div class="comment_author">
                                            <img src="{{ asset('frontend/assets/images/blog-placeholder.jpg') }}" alt="Author">
                                        </div>
                                        <div class="comment_content media-body">
                                            <h5 class="author_name">{{ $comment->author_name ?? 'Anonymous' }}</h5>
                                            <p>{{ $comment->content ?? 'No content' }}</p>
                                            <ul class="comment_meta">
                                                <li><a href="#"><i class="fa fa-retweet"></i> Repost</a></li>
                                                <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> {{ $comment->created_at->diffForHumans() }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li><p>No comments yet.</p></li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="blog_comment_form mt-45">
                        <h4 class="blog_details_comment_title pb-15">Leave Comment</h4>
                        <form action="#" method="POST">
                            @csrf
                            <div class="single_form">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="single_form">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="single_form">
                                <textarea name="comment" placeholder="Comment" required></textarea>
                            </div>
                            <div class="single_form">
                                <button type="submit" class="main-btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
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
                                <li><a href="{{ route('posts', ['tag' => $tag]) }}">{{ $tag }}</a></li>
                            @endforeach
                        </ul>
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
                'comment_count' => $post->comments->count(),
            ]);
        @endphp
    </div>
</section>
