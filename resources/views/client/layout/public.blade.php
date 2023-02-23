<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Marketplace HTML5 Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('client/assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="{{ asset('client/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('client/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('client/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('client/assets/fonts/wolmart87d5.woff?png09e') }}" as="font"
        type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Plugins CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('client/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/demo1.min.css') }}">

</head>

<body class="home">
    <div class="page-wrapper">
        @include('client.layout.header')
        @include('client.layout.sidebar')
    </div>
    @yield('content')
    @include('client.layout.footer')
    <!-- Start of Scroll Top -->


    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button">
        <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35"
                cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>



    <script src="{{ asset('client/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/assets/vendor/skrollr/skrollr.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('client/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('client/assets/js/main.min.js') }}"></script>
</body>


</html>
