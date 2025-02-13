@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Subpage Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">Services</h1>
                        {{-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav> --}}
                    </div>
                    <!-- Subpage Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Services Page Section Start -->
    <div class="services-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime">Explore Quivox Services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-1.svg ') }}" alt="">
                        </div>

                        <h3>Smart Trading Modules</h3>
                        <p>Enhance your trading experience with our intelligent modules designed to optimize strategies and
                            maximize returns. Our smart trading solutions adapt to market changes and provide actionable
                            insights.</p>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item active wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-2.svg ') }}" alt="">
                        </div>

                        <h3>Adaptive Social Assistant</h3>
                        <p>Our adaptive social assistant leverages advanced algorithms to enhance user interactions and
                            provide personalized support. Stay connected and receive tailored recommendations based on your
                            preferences.</p>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-3.svg ') }}" alt="">
                        </div>

                        <h3>News Analyzer with Powerful AI</h3>
                        <p>Our AI-driven news analyzer processes vast amounts of information to deliver accurate and timely
                            insights. Stay informed with comprehensive analysis and reports tailored to your interests and
                            needs.</p>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-4.svg ') }}" alt="">
                        </div>

                        <h3>Exchange Order Management</h3>
                        <p>Streamline your trading operations with our exchange order management system. Efficiently track,
                            execute, and manage orders to ensure seamless trading and optimal performance.</p>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-5.svg ') }}" alt="">
                        </div>

                        <h3>Price Notification Module</h3>
                        <p>Stay ahead of market movements with our price notification module. Receive real-time alerts and
                            updates on price changes to make informed decisions and seize opportunities.</p>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-6.svg ') }}" alt="">
                        </div>

                        <h3>Crypto Trading Platform</h3>
                        <p>Our cutting-edge crypto trading platform offers a secure and intuitive environment for trading
                            digital assets. Access advanced features, real-time data, and seamless transactions to enhance
                            your trading experience.</p>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Services Page Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Dashboard</h3>
                        <h2 class="text-anime">Watch Our Demo Video</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <div class="intro-video-image">
                            <img src="{{ asset('frontend/images/video-bg.png') }}" alt="">
                        </div>

                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                                <img src="{{ asset('frontend/images/play.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Download Apps Section Start -->
    <div class="serivces-download-apps">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- Download App Content Start -->
                    <div class="download-apps-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Download App</h3>
                            <h2 class="text-anime">Download Bitcoin App</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Download App Body Start -->
                        <div class="download-app-body wow fadeInUp" data-wow-delay="0.25s">
                            <p>Get ready to revolutionize your crypto trading experience with our upcoming app. Designed for
                                seamless trading, real-time updates, and comprehensive portfolio management, our app will be
                                your go-to tool for navigating the cryptocurrency market with ease.</p>
                        </div>
                        <!-- Download App Body End -->
                    </div>
                    <!-- Download App Content End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Download App Item Start -->
                    <div class="download-app-item wow fadeInUp" data-wow-delay="0.5s">
                        <h3>Get App for IOS</h3>
                        <a href="#" class="btn-default"><i class="fa-brands fa-app-store"></i> Download Now</a>

                        <div class="download-app-img">
                            <img src="images/mobile-img.png" alt="">
                        </div>
                    </div>
                    <!-- Download App Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Download App Item Start -->
                    <div class="download-app-item wow fadeInUp" data-wow-delay="0.75s">
                        <h3>Get App for IOS</h3>
                        <a href="#" class="btn-default"><i class="fa-brands fa-google-play"></i> Download Now</a>

                        <div class="download-app-img">
                            <img src="images/mobile-img.png" alt="">
                        </div>
                    </div>
                    <!-- Download App Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Download Apps Section End -->
@endsection
