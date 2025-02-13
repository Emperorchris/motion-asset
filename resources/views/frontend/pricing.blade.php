@extends('layouts.app')

@section('title')
    Pricing
@endsection

@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Subpage Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">Pricing</h1>
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
    <div class="pricing-page mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Pricing Plans</h3>
                        <h2 class="text-anime">Our Packages</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <!-- Pricing Plan Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="pricing-header">
                            <h3>Basic Plan</h3>
                            <div class="price">
                                <h2>$500.00</h2>
                                <p>/weekly</p>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li>Min Deposit: $500.00</li>
                            <li>Max Deposit: $19,999.99</li>
                            <li>Profit Percentage: 1%</li>
                            <li>Referral Commission: 5%</li>
                            <li>Duration: 2 months</li>
                            <li>Smart Trading Modules</li>
                            <li>Real-time Analytics</li>
                            <li>24/7 Support</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="{{ route('userdashboard.deposit') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing Plan End -->

                <!-- Pricing Plan Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item active wow fadeInUp" data-wow-delay="0.5s">
                        <div class="pricing-header">
                            <h3>Standard Plan</h3>
                            <div class="price">
                                <h2>$20,000.00</h2>
                                <p>/weekly</p>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li>Min Deposit: $20,000.00</li>
                            <li>Max Deposit: $99,999.99</li>
                            <li>Profit Percentage: 1.5%</li>
                            <li>Referral Commission: 5%</li>
                            <li>Duration: 2 months</li>
                            <li>Adaptive Social Assistant</li>
                            <li>Advanced Analytics</li>
                            <li>24/7 Support</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="{{ route('userdashboard.deposit') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing Plan End -->

                <!-- Pricing Plan Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="pricing-header">
                            <h3>Premium Plan</h3>
                            <div class="price">
                                <h2>$100,000.00</h2>
                                <p>/weekly</p>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li>Min Deposit: $100,000.00</li>
                            <li>Max Deposit: UNLIMITED</li>
                            <li>Profit Percentage: 2%</li>
                            <li>Referral Commission: 5%</li>
                            <li>Duration: 2 months</li>
                            <li>Analyzer of the News</li>
                            <li>Exchange Order Management</li>
                            <li>24/7 Support</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="{{ route('userdashboard.deposit') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing Plan End -->
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
