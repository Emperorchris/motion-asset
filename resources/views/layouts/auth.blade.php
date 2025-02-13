<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Motion Asset') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/coinex.min862f.css?v=4.1.0') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/custom.min862f.css?v=4.1.0') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="">
    <!-- loader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('frontend/images/loader.svg') }}" alt=""></div>
        </div>
    </div>
    {{-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div> --}}
    <!-- loader END -->
    @include('layouts.userdashboard-includes.sidebar')
    <main class="main-content">
        @include('layouts.userdashboard-includes.nav')
        @if (auth()->user()->promo == '1')
            <marquee>🔥🔥🔥PROMO🔥🔥🔥PROMO🔥🔥🔥PROMO... DEAR {{ strtoupper(auth()->user()->lastname) }}
                THIS IS TO INFORM YOU THAT OUR COMPANY IS CURRENTLY ON PROMO⚡️🔥. Opportunities
                arise daily and are numerous, and we provide you with the means to connect from one
                to the other</marquee>
        @endif
        @if ($errors->any())
            <div style="margin-top: 30px;" class="d-flex justify-content-center">

                <div class="col-md-8 alert alert-bottom alert-danger alert-dismissible fade show " role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                        <use xlink:href="#exclamation-triangle-fill"></use>
                    </svg>
                    @forelse ($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @empty
                    @endforelse
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>

        @endif

        @if (session()->has('error'))
            <div style="margin-top: 30px;" class="d-flex justify-content-center">

                <div class="col-md-8 alert alert-bottom alert-danger alert-dismissible fade show " role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                        <use xlink:href="#exclamation-triangle-fill"></use>
                    </svg>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>
        @endif
        @if (session()->has('success'))
            <div style="margin-top: 30px;" class="d-flex justify-content-center">

                <div class="col-md-8 alert alert-bottom alert-success alert-dismissible fade show " role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                        <use xlink:href="#exclamation-triangle-fill"></use>
                    </svg>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>
        @endif


        @yield('content')
        @include('layouts.userdashboard-includes.footer')
    </main>


    <!-- Loader Library File -->
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/function.js') }}"></script>

    <script src="{{ asset('userdashboard/assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/core/external.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/widgetcharts.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/vector-chart.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/dashboard.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/coinex.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/apexcharts.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/gsap.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script>
        alertify.set('notifier', 'position', 'top-right');

        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
        }
    </script>

</body>

</html>
