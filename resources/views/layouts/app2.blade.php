<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', 'FuzionMobile - Empowering Education')">
    <meta name="author" content="Chijindu Nwokeohuru, chijindu.nwokeohuru@gmail.com">
    <title>FuzionMobile - {{ ucwords(str_replace('.', ' ', Route::currentRouteName() ?? 'Home')) }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
<body class="flex flex-col min-h-screen">
    <x-frontend.preloader />
    <x-frontend.header2 />
    <main class="flex-grow pt-16 md:pt-20">
        @yield('content')
    </main>
    <x-frontend.footer />
    <x-frontend.back-to-top />
    @vite(['resources/js/app.js'])
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr Initialization and Session Message Handling -->
    @include('partials.toastr')
    @yield('scripts')
</body>
</html>
