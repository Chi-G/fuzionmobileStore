<section class="courses_area pt-100 pb-130">
    <div class="container">
        @if($services->isNotEmpty())
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('services.show', $service->id) }}" class="single_courses courses_gray mt-30" style="text-decoration: none;">
                            <div class="courses_image">
                                <img src="{{ $service->image_path ? (Str::startsWith($service->image_path, 'services/') ? asset('storage/' . $service->image_path) : asset('frontend/assets/images/' . $service->image_path)) : asset('frontend/assets/images/courses-placeholder.jpg') }}" alt="{{ $service->title ?? 'Service' }}" onerror="this.src='{{ asset('frontend/assets/images/courses-placeholder.jpg') }}';">
                            </div>

                            <div class="courses_content" style="margin-top: 20px;">
                                @if($service->category)
                                    <ul class="tag">
                                        <li><span>{{ $service->category }}</span></li>
                                    </ul>
                                @endif
                                <div class="courses_author d-flex">
                                    <div class="author_image">
                                        <img src="{{ $service->author_image ? asset('frontend/assets/images/' . $service->author_image) : asset('frontend/assets/images/author-placeholder.jpg') }}" alt="{{ $service->author_name ?? 'Author' }}" onerror="this.src='{{ asset('frontend/assets/images/author-placeholder.jpg') }}';">
                                    </div>
                                    <div class="author_name media-body">
                                        <span>{{ $service->author_name ?? 'Unknown' }}</span>
                                    </div>
                                </div>
                                <h4 class="title">{{ $service->title ?? 'Untitled Service' }}</h4>
                                <div class="meta d-flex justify-content-between">
                                    <ul>
                                        <li><i class="fa fa-user-o"></i> {{ $service->enrollment_count ?? 0 }}</li>
                                        <li><i class="fa fa-star-o"></i> {{ number_format($service->rating ?? 0, 1) }}</li>
                                    </ul>
                                    <span>${{ number_format($service->price ?? 0, 2) }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ $services->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>No services available at this time.</p>
                </div>
            </div>
        @endif
        @php
            \Log::info('Services Component Rendered', [
                'service_count' => $services->count(),
                'image_paths' => $services->pluck('image_path')->toArray(),
                'author_images' => $services->pluck('author_image')->toArray(),
                'categories' => $services->pluck('category')->toArray(),
            ]);
        @endphp
</section>
