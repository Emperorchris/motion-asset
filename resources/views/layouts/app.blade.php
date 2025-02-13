<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/quivox/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 15:44:48 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Motion Trade ') }}</title>

    <meta name="description"
        content="Top and reliable Crypto Trading Firm, concentrated in producing favourable financing solutions.  We Have Provided Over 60,000 Customers With Financial Solutions That Match Their Financial Goals.">
    <meta name="keywords"
        content="motion,motion-investment,motion hub,bitcoin,investment,Ethereum,Cryptocurrency,Finance,bitcoincash">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">


    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/icon.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="motionrade - Sign Up">

    <meta itemprop="name" content="BitTrade - Sign Up">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="placeholder-image/600x315.jpg">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Top and reliable Trading Platform">
    <meta property="og:description"
        content="Top and reliable Crypto Trading Firm, concentrated in producing favourable financing solutions.  We Have Provided Over 60,000 Customers With Financial Solutions That Match Their Financial Goals.">
    <meta property="og:image" content="placeholder-image/undefined.html" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="{{ route('register') }}">

    <meta name="twitter:card" content="summary_large_image">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav css -->
    <link href="{{ asset('frontend/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome icon css-->
    <link href="{{ asset('frontend/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated css -->
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific css -->
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="tt-magic-cursor">
    <style>
        .pricing-item {
            border: 1px solid #ddd;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .pricing-item:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .pricing-header {
            margin-bottom: 20px;
        }

        .pricing-header h3 {
            font-size: 24px;
            font-weight: 600;
        }

        .pricing-header .price h2 {
            font-size: 48px;
            font-weight: bold;
        }

        .pricing-features {
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-bottom: 20px;
        }

        .pricing-features li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .pricing-footer .btn {
            padding: 12px 30px;
            font-size: 16px;
        }

        .active .pricing-item {
            border: 2px solid #007bff;
        }
    </style>

    @include('layouts.frontend-includes.nav')

    @yield('content')

    @include('layouts.frontend-includes.footer')

    <!-- Jquery Library File -->
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('frontend/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('frontend/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('frontend/js/splitType.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js file -->
    <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('frontend/js/function.js') }}"></script>
</body>

</html>
