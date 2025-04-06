<section class="header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_wrapper d-flex justify-content-center justify-content-md-between">
                <div class="header_top_info d-none d-md-block">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/images/call.png') }}" alt="call"><a href="tel:+91458654528"> +220-2530620, +2203285061</a></li>
                        <li><img src="{{ asset('frontend/assets/images/mail.png') }}" alt="mail"><a href="mailto:info@example.com">info@e-learning.gm</a></li>
                    </ul>
                </div>
                <div class="header_top_login">
                    <ul>
                        @guest
                            <li><a href="{{ route('login') }}" class="main-btn"><i class="fa fa-user-o"></i> Log In</a></li>
                            <li><a href="{{ route('register') }}">Create An Account</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="main-btn dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        @auth('admin')
                            <li><a href="{{ route('admin.dashboard') }}" class="main-btn"><i class="fa fa-user-o"></i> Admin Dashboard</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
