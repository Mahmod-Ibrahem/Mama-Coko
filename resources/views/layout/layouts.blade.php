<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Character Encoding -->
    <meta charset="UTF-8">

    <!-- Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Travlla - Travel & Tour Tailwind CSS Template | Home Page Style 3</title>

    <meta name="title" content="Travlla - Travel & Tour Tailwind CSS Template | DexignZone">
    <meta name="description"
        content="Travlla is a responsive Travel & Tour Tailwind CSS template designed for travel agencies, tour operators, holiday planners, and booking websites.">
    <meta name="keywords"
        content="travel HTML template, tour booking template, Tailwind travel website, tourism Tailwind template, holiday booking, responsive travel design, tour operator website, Travlla template, modern travel design, travel agency web design">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <!-- CANONICAL URL -->
    <link rel="canonical" href="https://travlla.dexignzone.com/tailwind/demo/index-3.html">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Travlla - Travel & Tour Tailwind CSS Template | DexignZone">
    <meta property="og:description"
        content="Travlla is a responsive Travel & Tour Tailwind CSS template designed for travel agencies, tour operators, holiday planners, and booking websites.">
    <meta property="og:image" content="https://travlla.dexignzone.com/tailwind/demo/social-image.png">
    <meta property="og:url" content="https://travlla.dexignzone.com/demo/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Travlla">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Travlla - Travel & Tour Tailwind CSS Template | DexignZone">
    <meta name="twitter:description"
        content="Travlla is a responsive Travel & Tour Tailwind CSS template designed for travel agencies, tour operators, holiday planners, and booking websites.">
    <meta name="twitter:image" content="https://travlla.dexignzone.com/tailwind/demo/social-image.png">

    <!-- IE Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/flaticon/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/feather/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/css/flatpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    @vite('resources/css/app.css')
    <!-- style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Kaushan+Script&display=swap"
        rel="stylesheet">

</head>

<body class="selection:bg-[#484848] selection:text-white">
    {{-- @component('layout.ContactNav')
    @endcomponent --}}
    @include('layout.navbar')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')
            @include('layout.footer')
        </div>
    </div>

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up relative" id="btn-vibrate"></span></button>

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/gsap/ScrollSmoother.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src=" {{ asset('assets/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src=" {{ asset('assets/js/lc_lightbox.lite.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/group-slide/group-loop.js') }}"></script>
    <script src="{{ asset('assets/vendor/xmenu/xmenu.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>