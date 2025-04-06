<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', 'FuzionMobile - Empowering Education')">
    <meta name="author" content="@yield('description', 'Chijindu Nwokeohuru', 'chijindu.nwokeohuru@gmail.com')">
    <title>FuzionMobile - {{ ucwords(str_replace('.', ' ', Route::currentRouteName() ?? 'Home')) }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/frontend/assets/css/bootstrap.min.css',
        'public/frontend/assets/css/animate.css',
        'public/frontend/assets/css/font-awesome.min.css',
        'public/frontend/assets/css/magnific-popup.css',
        'public/frontend/assets/css/nice-select.css',
        'public/frontend/assets/css/slick.css',
        'public/frontend/assets/css/default.css',
        'public/frontend/assets/css/style.css',
        'public/frontend/assets/css/responsive.css',
    ])
</head>
<body>
    <x-frontend.preloader />
    <x-frontend.header />
    <main>
        @yield('content')
    </main>
    <x-frontend.footer />
    <x-frontend.back-to-top />
    @vite(['resources/js/app.js'])
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.navbar-toggler').on('click', function(e) {
                e.preventDefault();
                var $navbarContent = $('#navbarSupportedContent');
                $navbarContent.toggleClass('show');
            });
        });
    </script>
</body>
</html>
