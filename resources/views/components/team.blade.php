<section class="team_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center pb-50">
                    <h3 class="main_title">Meet Our Experts</h3>
                    <p>Our team drives innovation and delivers exceptional mobile solutions for you.</p>
                </div>
            </div>
        </div>
        @if($teamMembers->isNotEmpty())
            <div class="row no-gutters">
                <div class="col-lg-6 team_col_1">
                    @foreach($teamMembers->take(2) as $index => $member)
                        <div class="single_team d-sm-flex flex-wrap align-items-center {{ $index === 1 ? 'flex-row-reverse' : '' }}">
                            <img class="team_arrow" src="{{ asset('frontend/assets/images/' . ($index === 1 ? 'right.png' : 'left.png')) }}" alt="arrow">
                            <div class="team_image">
                                <img src="{{ $member->image_path ? asset('frontend/assets/images/' . basename($member->image_path)) : asset('frontend/assets/images/team-placeholder.jpg') }}" alt="{{ $member->name ?? 'Team Member' }}">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">{{ $member->name ?? 'Unknown' }}</a></h4>
                                    <span>{{ $member->role ?? 'Specialist' }}</span>
                                    @if($member->social_links && is_array($member->social_links))
                                        <ul class="social">
                                            @if(!empty($member->social_links['facebook']))
                                                <li><a href="{{ $member->social_links['facebook'] }}"><i class="fa fa-facebook-f"></i></a></li>
                                                @endif
                                            @if(!empty($member->social_links['twitter']))
                                                <li><a href="{{ $member->social_links['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
                                            @endif
                                            @if(!empty($member->social_links['linkedin']))
                                                <li><a href="{{ $member->social_links['linkedin'] }}"><i class="fa fa-linkedin"></i></a></li>
                                            @endif
                                            @if(!empty($member->social_links['instagram']))
                                                <li><a href="{{ $member->social_links['instagram'] }}"><i class="fa fa-instagram"></i></a></li>
                                            @endif
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @php
                            \Log::info('Team Member Image Path', [
                                'name' => $member->name,
                                'image_path' => $member->image_path,
                                'resolved_path' => $member->image_path ? asset('frontend/assets/images/' . basename($member->image_path)) : asset('frontend/assets/images/team-placeholder.jpg')
                            ]);
                        @endphp
                    @endforeach
                </div>
                <div class="col-lg-6 team_col_2">
                    @foreach($teamMembers->slice(2, 2) as $index => $member)
                        <div class="single_team d-sm-flex flex-wrap align-items-center {{ $index === 1 ? 'flex-row-reverse' : '' }}">
                            <img class="team_arrow" src="{{ asset('frontend/assets/images/' . ($index === 1 ? 'right.png' : 'left.png')) }}" alt="arrow">
                            <div class="team_image">
                                <img src="{{ $member->image_path ? asset('frontend/assets/images/' . basename($member->image_path)) : asset('frontend/assets/images/team-placeholder.jpg') }}" alt="{{ $member->name ?? 'Team Member' }}">
                            </div>
                            <div class="team_content">
                                <div class="team_content_wrapper">
                                    <h4 class="title"><a href="#">{{ $member->name ?? 'Unknown' }}</a></h4>
                                    <span>{{ $member->role ?? 'Specialist' }}</span>
                                    @if($member->social_links && is_array($member->social_links))
                                        <ul class="social">
                                            @if(!empty($member->social_links['facebook']))
                                                <li><a href="{{ $member->social_links['facebook'] }}"><i class="fa fa-facebook-f"></i></a></li>
                                            @endif
                                            @if(!empty($member->social_links['twitter']))
                                                <li><a href="{{ $member->social_links['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
                                            @endif
                                            @if(!empty($member->social_links['linkedin']))
                                                <li><a href="{{ $member->social_links['linkedin'] }}"><i class="fa fa-linkedin"></i></a></li>
                                            @endif
                                            @if(!empty($member->social_links['instagram']))
                                                <li><a href="{{ $member->social_links['instagram'] }}"><i class="fa fa-instagram"></i></a></li>
                                            @endif
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @php
                            \Log::info('Team Member Image Path', [
                                'name' => $member->name,
                                'image_path' => $member->image_path,
                                'resolved_path' => $member->image_path ? asset('frontend/assets/images/' . basename($member->image_path)) : asset('frontend/assets/images/team-placeholder.jpg')
                            ]);
                        @endphp
                    @endforeach
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>No team members available at this time.</p>
                </div>
            </div>
        @endif
</section>
