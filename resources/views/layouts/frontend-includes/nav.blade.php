<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{ asset('frontend/images/loader.svg') }}" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Magic Cursor Start -->
<div id="magic-cursor">
    <div id="ball"></div>
</div>
<!-- Magic Cursor End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('frontend.index') }}">
                    <img style="max-width: 200px;" src="{{ asset('logo.png') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu start -->
                <div class="collapse navbar-collapse main-menu">
                    <ul class="navbar-nav mr-auto" id="menu">
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                            {{-- <ul>
                                <li class="nav-item"><a class="nav-link" href="index">Home - Image</a>
                                <li class="nav-item"><a class="nav-link" href="index-video">Home - Video</a></li>
                                <li class="nav-item"><a class="nav-link" href="index-slider">Home - Slider</a></li>
                            </ul> --}}
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.about') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.services') }}">Services</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.pricing') }}">Pricing</a></li>
                        {{-- <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="blog-single">Blog Single</a></li>
                                <li class="nav-item"><a class="nav-link" href="team">Our Team</a></li>
                                <li class="nav-item"><a class="nav-link" href="faq">FAQs</a></li>
                                <li class="nav-item"><a class="nav-link" href="404">404</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a></li>
                        @guest
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{ route('login') }}">Sign
                                    in</a></li>
                        @endguest
                        @auth
                            @if (auth()->user()->role == '1')
                                <li class="nav-item highlighted-menu"><a class="nav-link"
                                        href="{{ route('admin.dashboard') }}">Dashboard
                                    </a></li>
                            @else
                                <li class="nav-item highlighted-menu"><a class="nav-link"
                                        href="{{ route('userdashboard.dashboard') }}">Dashboard
                                    </a></li>
                            @endif
                        @endauth
                    </ul>
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
