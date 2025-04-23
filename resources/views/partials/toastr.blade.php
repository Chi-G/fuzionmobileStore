<script>
    $(document).ready(function() {
        // Toastr config
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 5000,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
        };

        // Laravel session flash messages
        @if(session('success'))
            toastr.success('{{ session('success') }}', 'Success');
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}', 'Error');
        @endif

        @if(session('info'))
            toastr.info('{{ session('info') }}', 'Info');
        @endif

        @if(session('warning'))
            toastr.warning('{{ session('warning') }}', 'Warning');
        @endif

        @if (auth()->guest() && in_array(Route::currentRouteName(), ['cart.index', 'checkout', 'cart.buy-now-checkout']))
            toastr.error('Please log in to access this page.');
            setTimeout(() => { window.location.href = '{{ route('login') }}'; }, 2000);
        @endif

        // Validation errors
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error');
            @endforeach
        @endif

        // Navbar toggle
        $('.navbar-toggler').on('click', function(e) {
            e.preventDefault();
            $('#navbarSupportedContent').toggleClass('show');
        });
    });
</script>
