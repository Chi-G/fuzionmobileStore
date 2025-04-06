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
    <div class="header_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="FuzionMobile Logo">
                </a>
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                        <li><a class="{{ request()->routeIs('about.index') ? 'active' : '' }}" href="{{ route('about.index') }}">About</a></li>
                        <li><a class="{{ request()->routeIs('services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a></li>
                        <li><a class="{{ request()->routeIs('events.index') ? 'active' : '' }}" href="{{ route('events.index') }}">Events</a></li>
                        <li><a class="{{ request()->routeIs('webinars.index') ? 'active' : '' }}" href="{{ route('webinars.index') }}">Webinars</a></li>
                        <li><a class="{{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">Store</a></li>
                        <li><a class="{{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="navbar_meta">
                    <ul>
                        <li>
                            <a id="search" href="#"><img src="{{ asset('frontend/assets/images/search.png') }}" alt="search"></a>
                            <div class="search_bar">
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </li>
                        <li><a href="{{ route('products.index') }}"><img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart"> <span>{{ $cartCount ?? 0 }}</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>
