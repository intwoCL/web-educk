<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEO::generate() !!}
    {{-- <title>Tivo - SaaS App HTML Landing Page Template</title> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('vendor/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('me/styles.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('me/favicon-educk.svg') }}">
    <meta name="google-site-verification" content="VAdi2dHhY3pOInpWE-78TbdO7ah7CXbrrKRZP3hmGrY" />
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    @yield('content')

    <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/js/swiper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/js/validator.min.js') }}"></script>
    <script src="{{ asset('vendor/js/scripts.js') }}"></script>
    @stack('js')
  </body>
</html>
