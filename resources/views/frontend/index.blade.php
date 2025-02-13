@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Motion Capital Asset</h3>
                            <h1 class="text-anime">Easy Way to <span>Crypto</span> Key To Success.</h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <p>Discover limitless opportunities with a platform designed to secure your financial future.
                                From cryptocurrency trading to investment strategies, we empower you to achieve lasting
                                success.</p>
                        </div>

                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('login') }}" class="btn-default">Join for Free</a>
                        </div>
                    </div>
                    <!-- Hero Left Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Coin Ticker Start -->
    <div class="coin-ticker">
        <div class="container-fluid">
            <div class="row no-gap">
                <div class="col-md-12">
                    <!-- Coin Ticker Box Start -->
                    <div class="coin-ticker-box">
                        <div class="scrolling-ticker-box">
                            <div class="scrolling-content">
                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-1.svg') }}" alt="">
                                    </div>

                                    <p>Bitcoin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-2.svg') }}" alt="">
                                    </div>

                                    <p>Etherium</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-3.svg') }}" alt="">
                                    </div>

                                    <p>Tether</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-4.svg') }}" alt="">
                                    </div>

                                    <p>BNB</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-5.svg') }}" alt="">
                                    </div>

                                    <p>Solana</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-6.svg') }}" alt="">
                                    </div>

                                    <p>USD Coin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-7.svg') }}" alt="">
                                    </div>

                                    <p>Cardano</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-8.svg') }}" alt="">
                                    </div>

                                    <p>Cardano</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-9.svg') }}" alt="">
                                    </div>

                                    <p>Dogecoin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-10.svg') }}" alt="">
                                    </div>

                                    <p>Tron</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-11.svg') }}" alt="">
                                    </div>

                                    <p>Polygon</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-12.svg') }}" alt="">
                                    </div>

                                    <p>Shiba INU</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-13.svg') }}" alt="">
                                    </div>

                                    <p>Lite Coin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-14.svg') }}" alt="">
                                    </div>

                                    <p>Stacks</p>
                                </div>
                            </div>

                            <div class="scrolling-content">
                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-ticker-1.svg') }}" alt="">
                                    </div>

                                    <p>Bitcoin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-2.svg" alt="">
                                    </div>

                                    <p>Etherium</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-3.svg" alt="">
                                    </div>

                                    <p>Tether</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-4.svg" alt="">
                                    </div>

                                    <p>BNB</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-5.svg" alt="">
                                    </div>

                                    <p>Solana</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-6.svg" alt="">
                                    </div>

                                    <p>USD Coin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-7.svg" alt="">
                                    </div>

                                    <p>Cardano</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-8.svg" alt="">
                                    </div>

                                    <p>Cardano</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-9.svg" alt="">
                                    </div>

                                    <p>Dogecoin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-10.svg" alt="">
                                    </div>

                                    <p>Tron</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-11.svg" alt="">
                                    </div>

                                    <p>Polygon</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-12.svg" alt="">
                                    </div>

                                    <p>Shiba INU</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-13.svg" alt="">
                                    </div>

                                    <p>Lite Coin</p>
                                </div>

                                <div class="scrolling-item">
                                    <div class="icon-box">
                                        <img src="images/icon-ticker-14.svg" alt="">
                                    </div>

                                    <p>Stacks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Coin Ticker Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Coin Ticker End -->

    <!-- About us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Motion Capital Asset</h3>
                        <h2 class="text-anime">Simple. Faster. Secure</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <!-- About Images Start -->
                    <div class="about-images">
                        <div class="about-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend/images/about-us-1.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="about-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend/images/about-us-2.jpg') }}" alt="">
                            </figure>

                            <div class="about-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-bitcoin-exchange.svg" alt="">
                                </div>

                                <h5>Bitcoin Exchange</h5>
                            </div>
                        </div>
                    </div>
                    <!-- About Images End -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <div class="about-body wow fadeInUp" data-wow-delay="0.25s">
                            <p>Unlock the potential of blockchain technology and cryptocurrency with our cutting-edge
                                solutions. We are dedicated to providing innovative tools that simplify crypto investments,
                                ensuring transparency and security at every step.</p>

                            <p>Our platform empowers you to navigate the digital financial landscape with confidence. From
                                secure transactions to strategic insights, we offer a comprehensive approach to help you
                                maximize your crypto portfolio and achieve long-term growth.</p>

                        </div>

                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Designed for everyone</li>
                                <li>Trade as you go</li>
                                <li>All the tools you want</li>
                                <li>Automatic conversion</li>
                                <li>Multiple asset classes</li>
                                <li>Simple to manage</li>
                                <li>Scan. Convert. Pay.</li>
                                <li>Quick to set up</li>
                            </ul>
                        </div>

                        <div class="about-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('frontend.about') }}" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- How It Works Section Start -->
    <div class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">How it Works</h3>
                        <h2 class="text-anime">Get Started Today with Motion Capital Asset</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- How It Work Item Start -->
                    <div class="how-it-works-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-how-it-work-1.svg') }}" alt="">
                        </div>

                        <h3>Create An Account</h3>
                        <p>Create an account with us and login to your account.</p>
                    </div>
                    <!-- How It Work Item End -->
                </div>

                <div class="col-md-4">
                    <!-- How It Work Item Start -->
                    <div class="how-it-works-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-how-it-work-2.svg') }}" alt="">
                        </div>

                        <h3>Wallet Address</h3>
                        <p>Add your wallet address to recieve payments. Once you place a withdrawal.</p>
                    </div>
                    <!-- How It Work Item End -->
                </div>

                <div class="col-md-4">
                    <!-- How It Work Item Start -->
                    <div class="how-it-works-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-how-it-work-3.svg') }}" alt="">
                        </div>

                        <h3>Invest And Earn</h3>
                        <p>Click On the Deposit button to invest and starting making profit.</p>
                    </div>
                    <!-- How It Work Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Works Section End -->

    <!-- Exclusive Partners Section Start -->
    {{-- <div class="exclusive-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Executive Partners</h3>
                        <h2 class="text-anime">100+ Partners & Supporters</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Partners Logos Start -->
                    <div class="partners-logos wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-1.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-2.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-3.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-4.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-5.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-1.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-2.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-3.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="{{ asset('frontend/images/icon-executive-partners-4.svg') }}" alt="">
                        </div>
                        <!-- Partner Item End -->
                    </div>
                    <!-- Partners Logos End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Exclusive Partners Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime">Explore Motion Capital Asset Services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-1.svg') }}" alt="">
                        </div>

                        <h3>Advanced Trading Modules</h3>
                        <p>Leverage our state-of-the-art trading modules designed to optimize your crypto investments. Our
                            platform offers advanced analytics, real-time data, and automated trading strategies to enhance
                            your trading efficiency and profitability.</p>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item active wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-2.svg') }}" alt="">
                        </div>

                        <h3>Adaptive Crypto Assistant</h3>
                        <p>Experience personalized support with our Adaptive Crypto Assistant, designed to guide you through
                            the complexities of the cryptocurrency market. From tailored investment advice to real-time
                            updates, our assistant adapts to your trading needs and helps you make informed decisions.</p>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-3.svg') }}" alt="">
                        </div>

                        <h3>AI-Powered Crypto News Analyzer</h3>
                        <p>Harness the power of artificial intelligence with our advanced Crypto News Analyzer. Our tool
                            scans and interprets the latest market news, providing you with actionable insights and trends
                            to make informed trading decisions and stay ahead in the dynamic crypto landscape.</p>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-4.svg') }}" alt="">
                        </div>

                        <h3>Optimized Exchange Order Management</h3>
                        <p>Streamline your trading activities with our advanced Exchange Order Management system. Designed
                            for efficiency and precision, our solution offers real-time order tracking, automated execution,
                            and comprehensive management tools to help you navigate the crypto markets with ease.</p>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-5.svg') }}" alt="">
                        </div>

                        <h3>Real-Time Price Notification Module</h3>
                        <p>Stay ahead of market movements with our Real-Time Price Notification Module. Receive instant
                            alerts on price fluctuations and trends, enabling you to make timely decisions and capitalize on
                            market opportunities as they arise.</p>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.50s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-services-6.svg') }}" alt="">
                        </div>

                        <h3>Comprehensive Crypto Trading Platform</h3>
                        <p>Discover a powerful Crypto Trading Platform designed for both novice and experienced traders. Our
                            platform offers a range of features including advanced charting tools, real-time market data,
                            and secure transactions to enhance your trading experience and optimize your investment
                            strategy.</p>

                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Price Section Start -->
    <div class="price-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Price</h3>
                        <h2 class="text-anime">Explore Cryptocurrency Price</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row no-gap">
                <div class="col-md-12">
                    <!-- Price Carousel Start -->
                    <div class="price-carousel price-carousel-left">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-1.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Bitcoin</h4>
                                            <p>$19,325<span class="price-green">12.45%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-2.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Etherium</h4>
                                            <p>$1,843<span class="price-red">-8.32%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-3.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Tether</h4>
                                            <p>$1.00<span class="price-green">0.02%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-4.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>BNB</h4>
                                            <p>$314<span class="price-green">5.87%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-5.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Solana</h4>
                                            <p>$25.67<span class="price-red">-14.26%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-6.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>USD Coin</h4>
                                            <p>$1.00<span class="price-green">0.01%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-7.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Cardano</h4>
                                            <p>$0.37<span class="price-green">6.89%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-8.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Polkadot</h4>
                                            <p>$5.28<span class="price-red">-11.54%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-9.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Dogecoin</h4>
                                            <p>$0.08<span class="price-green">9.72%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-10.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Tron</h4>
                                            <p>$0.07<span class="price-green">3.21%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-11.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Polygon</h4>
                                            <p>$0.95<span class="price-red">-5.60%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-12.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Shiba INU</h4>
                                            <p>$0.00001<span class="price-green">13.20%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Price Carousel End -->

                    <!-- Price Carousel Start -->
                    <div class="price-carousel price-carousel-right">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-13.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Litecoin</h4>
                                            <p>$90.54<span class="price-red">-4.89%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-14.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Stacks</h4>
                                            <p>$1.25<span class="price-green">10.78%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-15.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Toncoin</h4>
                                            <p>$2.45<span class="price-red">-6.43%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-16.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Filecoin</h4>
                                            <p>$4.62<span class="price-green">8.99%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-17.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>VeChain</h4>
                                            <p>$0.22<span class="price-red">-7.21%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-18.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Chainlink</h4>
                                            <p>$6.78<span class="price-green">11.23%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-19.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Dash</h4>
                                            <p>$45.12<span class="price-red">-12.36%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-20.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Basic Attention Token</h4>
                                            <p>$0.82<span class="price-green">7.11%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-21.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Ravencoin</h4>
                                            <p>$0.08<span class="price-red">-5.73%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-22.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Hedera</h4>
                                            <p>$0.17<span class="price-green">6.22%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-23.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Neo</h4>
                                            <p>$10.32<span class="price-green">3.48%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- price Item Start -->
                                    <div class="price-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-ticker-24.svg') }}" alt="">
                                        </div>

                                        <div class="price-body">
                                            <h4>Elrond</h4>
                                            <p>$47.78<span class="price-red">-9.57%</span></p>
                                            <a href="#" class="btn-default">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- Price Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Price Carousel End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Price Section End -->

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

    <!-- Why Choose us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose us ?</h3>
                        <h2 class="text-anime">Know More About Motion Capital Asset</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Why Choose us Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-why-choose-us-1.svg') }}" alt="">
                        </div>

                        <h3>Safe & Secure</h3>
                        <p>Your security is our top priority. Our platform employs advanced encryption and multi-layered
                            security protocols to ensure that your crypto assets and personal data are fully protected
                            against threats and breaches.</p>

                    </div>
                    <!-- Why Choose us Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Why Choose us Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-why-choose-us-2.svg') }}" alt="">
                        </div>

                        <h3>Early Investment Bonus</h3>
                        <p>Take advantage of our Early Investment Bonus. By joining early, you can benefit from exclusive
                            rewards and incentives designed to maximize your returns and enhance your entry into the crypto
                            market.</p>
                    </div>
                    <!-- Why Choose us Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Why Choose us Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-why-choose-us-3.svg') }}" alt="">
                        </div>

                        <h3>Multiple Revenue Streams</h3>
                        <p>Explore various avenues for generating profit with our platform. From diversified investment
                            options to strategic trading opportunities, we provide multiple ways to enhance your earnings
                            and build wealth in the crypto market.</p>

                    </div>
                    <!-- Why Choose us Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us Section End -->

    <!-- Download Apps Section Start -->
    <div class="download-apps">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- Download App Content Start -->
                    <div class="download-apps-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Download App</h3>
                            <h2 class="text-anime">Lauching Our App Soon</h2>
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
                            <img src="{{ asset('frontend/images/mobile-img.png') }}" alt="">
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
                            <img src="{{ asset('frontend/images/mobile-img.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Download App Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Download Apps Section End -->

    <!-- Crypto Calculator Section Start -->
    <div class="crypto-calculator">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Crypto Calculator Box Start -->
                    <div class="crypto-calculator-box">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Bitcoin Calculator</h3>
                                    <h2 class="text-anime">Buy Cryptocurrency</h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="crypto-form-box">
                                    <form id="CryptoCalculator" action="#" method="POST" data-toggle="validator">
                                        <div class="row no-gap">
                                            <div class="form-group col-lg-6 col-12 mb-4">
                                                <select id="cryptocurrency_dropdown" name="cryptocurrency">
                                                    <option value="btc">₿ BTC</option>
                                                    <option value="eth">€ ETH</option>
                                                    <option value="bnb">$ BNB</option>
                                                    <option value="sol">¥ SOL</option>
                                                </select>
                                                <input type="text" name="name" class="form-control"
                                                    id="cryptocurrency_price" placeholder="Crypto Currencies">
                                            </div>

                                            <div class="form-group col-lg-6 col-12 mb-4">
                                                <select id="moneycurrency_dropdown" name="cars">
                                                    <option value="inr">₹ INR</option>
                                                    <option value="euro">€ Euro</option>
                                                    <option value="usd">$ USD</option>
                                                    <option value="cny">¥ CNY</option>
                                                </select>
                                                <input type="text" name="name" class="form-control"
                                                    id="moneycurrency_price" placeholder="Price">
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <button type="button" class="btn-default">Calculate Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Crypto Calculator Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Crypto Calculator Section End -->


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


    <!-- Our Team Section Start -->
    {{-- <div class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Team</h3>
                        <h2 class="text-anime">Our Crypto Exchange Experts</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="team-image-links">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-1.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Social Links Start -->
                            <div class="team-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Links End -->
                        </div>

                        <!-- Team Info Start -->
                        <div class="team-info">
                            <h3>John Doe</h3>
                            <p>(Founder & CEO)</p>
                        </div>
                        <!-- Team Info End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-image-links">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-2.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Social Links Start -->
                            <div class="team-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Links End -->
                        </div>

                        <!-- Team Info Start -->
                        <div class="team-info">
                            <h3>Marco Verratti</h3>
                            <p>(Senior Consultant)</p>
                        </div>
                        <!-- Team Info End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="team-image-links">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-3.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Social Links Start -->
                            <div class="team-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Links End -->
                        </div>

                        <!-- Team Info Start -->
                        <div class="team-info">
                            <h3>Arita Banson</h3>
                            <p>(Creative Manager)</p>
                        </div>
                        <!-- Team Info End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="team-image-links">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-4.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Social Links Start -->
                            <div class="team-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Links End -->
                        </div>

                        <!-- Team Info Start -->
                        <div class="team-info">
                            <h3>Banson Doe</h3>
                            <p>(Senior Consultant)</p>
                        </div>
                        <!-- Team Info End -->
                    </div>
                    <!-- Team Item End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Our Team Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonials">
        <div class="container-fluid">
            <div class="row no-gap">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Client Review</h3>
                        <h2 class="text-anime">Client Testimonials</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row no-gap">
                <div class="col-md-12">
                    <!-- Testimonial Carousel Start -->
                    <div class="testimonial-carousel">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"Motion Capital Asset has transformed my approach to crypto investments.
                                                Their innovative tools and expert advice have been instrumental in
                                                maximizing my returns."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-1.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Olivia Bartlett</h3>
                                                <p>(Crypto Investor)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"The comprehensive services provided by Motion Capital Asset have given me
                                                the edge in the competitive world of cryptocurrency. Their support is
                                                unmatched."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-2.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Charles Park</h3>
                                                <p>(Blockchain Specialist)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"The tools and insights provided by Motion Capital Asset have greatly
                                                enhanced my crypto trading strategy. Highly recommended for serious
                                                traders."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-3.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Alison Banson</h3>
                                                <p>(Investment Advisor)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"Motion Capital Asset has provided exceptional support and resources for
                                                navigating the cryptocurrency market. Their platform is a game changer."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-4.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Tracey Hawkins</h3>
                                                <p>(Crypto Enthusiast)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"With Motion Capital Asset, I have access to top-tier crypto trading tools
                                                and expert insights that have significantly improved my investment
                                                outcomes."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-5.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Christopher Case</h3>
                                                <p>(Financial Analyst)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"The advanced features of Motion Capital Asset' platform have given me
                                                unparalleled insights into the crypto market, helping me make more informed
                                                decisions."</p>
                                        </div>

                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <img src="{{ asset('frontend/images/author-6.jpg') }}" alt="">
                                            </div>

                                            <div class="author-info">
                                                <h3>Edward Johns</h3>
                                                <p>(Crypto Trader)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Testimonial Carousel End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Latest Posts Section Start -->
    {{-- <div class="latest-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Blog & Articles</h3>
                        <h2 class="text-anime">Our Latest News</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <img src="images/post-1.jpg" alt="">
                            </figure>

                            <div class="post-hover-button">
                                <a href="blog-single.html" class="btn-default">Read More</a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <div class="post-meta">
                                <ul>
                                    <li>March 18, 2024</li>
                                </ul>
                            </div>

                            <h2><a href="blog-single.html">Why A Cryptocurrency Dip is An Opportunity</a></h2>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <img src="images/post-2.jpg" alt="">
                            </figure>

                            <div class="post-hover-button">
                                <a href="blog-single.html" class="btn-default">Read More</a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <div class="post-meta">
                                <ul>
                                    <li>March 18, 2024</li>
                                </ul>
                            </div>

                            <h2><a href="blog-single.html">The 4 Most Important Cryptocurrency Trends</a></h2>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <img src="images/post-3.jpg" alt="">
                            </figure>

                            <div class="post-hover-button">
                                <a href="blog-single.html" class="btn-default">Read More</a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <div class="post-meta">
                                <ul>
                                    <li>March 18, 2024</li>
                                </ul>
                            </div>

                            <h2><a href="blog-single.html">Top 10 Cryptos You Can Mine</a></h2>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Latest Posts Section End -->
@endsection
