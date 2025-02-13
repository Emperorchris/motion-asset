@extends('layouts.app')
@section('title')
    About
@endsection

@section('content')
    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Subpage Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">About Us</h1>
                        {{-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav> --}}
                    </div>
                    <!-- Subpage Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- About us Page Section Start -->
    <div class="about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Motion Capital Asset</h3>
                        <h2 class="text-anime">We Are Helping People to Get a Success.</h2>
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
                            <div class="about-info-item">
                                <h3><strong><span>10</span>+</strong> Years of Experience</h3>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Page Section End -->

    <!-- Our Benefits Section Start -->
    <div class="our-benefits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Benefits</h3>
                        <h2 class="text-anime">Benefits of Using Our Solution</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Our Benefits Item Start -->
                    <div class="our-benefits-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-benefits-1.svg') }}" alt="">
                        </div>

                        <h3>Real-Time Updates</h3>
                        <p>Stay informed with up-to-the-minute updates and notifications.</p>
                    </div>
                    <!-- Our Benefits Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Our Benefits Item Start -->
                    <div class="our-benefits-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-benefits-2.svg') }}" alt="">
                        </div>

                        <h3>Cloud-Based Access</h3>
                        <p>Access your data securely from anywhere with our cloud-based solutions.</p>
                    </div>
                    <!-- Our Benefits Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Our Benefits Item Start -->
                    <div class="our-benefits-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-benefits-3.svg') }}" alt="">
                        </div>

                        <h3>No Transaction Fees</h3>
                        <p>Enjoy seamless transactions without any additional fees.</p>
                    </div>
                    <!-- Our Benefits Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Our Benefits Item Start -->
                    <div class="our-benefits-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-our-benefits-4.svg') }}" alt="">
                        </div>

                        <h3>Instant Operations</h3>
                        <p>Experience quick and efficient operations with instant processing.</p>
                    </div>
                    <!-- Our Benefits Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Benefits Section End -->

    <!-- Counter Section Start -->
    <div class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item wow fadeInUp" data-wow-delay="0.25s">
                        <h3>$<span class="counter">77.45</span>B</h3>
                        <p>Market Cap</p>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item wow fadeInUp" data-wow-delay="0.5s">
                        <h3><span class="counter">165</span>k</h3>
                        <p>Daily Transactions</p>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item wow fadeInUp" data-wow-delay="0.75s">
                        <h3><span class="counter">1726</span></h3>
                        <p>Active Account</p>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item wow fadeInUp" data-wow-delay="1.0s">
                        <h3><span class="counter">10</span>+</h3>
                        <p>Years on the Market</p>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

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

    <!-- Our Vision Mission Start -->
    <div class="our-vision-mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Visoin Mission Item Start -->
                    <div class="vision-mission-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="vision-mission-header">
                            <div class="icon-box">
                                <img src="images/icon-mission.svg" alt="">
                            </div>
                            <h3>Our Mission</h3>
                        </div>

                        <div class="vision-mission-body">
                            <p>Our vision is to lead in innovation and excellence, setting new standards in our industry. We
                                are committed to delivering high-quality solutions that meet the evolving needs of our
                                clients. With a focus on continuous improvement and cutting-edge technology, we aim to
                                empower businesses and drive growth.</p>
                        </div>

                    </div>
                    <!-- Visoin Mission Item End -->
                </div>

                <div class="col-md-6">
                    <!-- Visoin Mission Item Start -->
                    <div class="vision-mission-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="vision-mission-header">
                            <div class="icon-box">
                                <img src="images/icon-vision.svg" alt="">
                            </div>
                            <h3>Our Vision</h3>
                        </div>

                        <div class="vision-mission-body">
                            <p>At our core, we are committed to pushing the boundaries of innovation and delivering
                                excellence. Since our inception, we have been dedicated to setting new standards in our
                                industry. Our journey began with a vision to revolutionize the way we approach technology
                                and services. </p>

                        </div>
                    </div>
                    <!-- Visoin Mission Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Vision Mission End -->

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

    <!-- Exclusive Partners Section Start -->
    <div class="about-exclusive-partners">
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
                            <img src="images/icon-executive-partners-1.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-2.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-3.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-4.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-5.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-1.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-2.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-3.svg" alt="">
                        </div>
                        <!-- Partner Item End -->

                        <!-- Partner Item Start -->
                        <div class="partner-item">
                            <img src="images/icon-executive-partners-4.svg" alt="">
                        </div>
                        <!-- Partner Item End -->
                    </div>
                    <!-- Partners Logos End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Exclusive Partners Section End -->
@endsection
