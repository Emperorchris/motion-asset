@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Subpage Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">Contact</h1>
                        {{-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav> --}}
                    </div>
                    <!-- Subpage Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Contact Details Section Start -->
    <div class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3>Conatct Us</h3>
                        <h2>Our Contact Information</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Contact Detail Item Start -->
                    <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-address.svg" alt="">
                        </div>

                        <div class="contact-detail-body">
                            <h3>Our Address</h3>
                            <p>1111 Brickell Avenue Ste 2725, New  Zealand 33131</p>
                        </div>
                    </div>
                    <!-- Contact Detail Item End -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- Contact Detail Item Start -->
                    <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-contact-info.svg') }}" alt="">
                        </div>

                        <div class="contact-detail-body">
                            <h3>Contact Info</h3>
                            <p><strong>
                                    Mobile: <a href="https://wa.me/+18029621417">+1 (802) 962-1417</a>
                                    <br>
                                    Email: <a
                                        href="mailto:support@motionglobalventures.com">support@motionglobalventures.com</a>
                                </strong></p>
                        </div>
                    </div>
                    <!-- Contact Detail Item End -->
                </div>

                {{-- <div class="col-lg-4 col-12">
                <!-- Contact Detail Item Start -->
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="images/icon-hours-operation.svg" alt="">
                    </div>

                    <div class="contact-detail-body">
                        <h3>Hours of Operation</h3>
                        <p><strong>
                                Mon - Sat: 8:00 - 15:00
                                <br>
                                Sunday: Closed
                            </strong></p>
                    </div>
                </div>
                <!-- Contact Detail Item End -->
            </div> --}}
            </div>
        </div>
    </div>
    <!-- Contact Details Section End -->

    <!-- Contact Form Section Start -->
    <div class="contact-inquiry-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Get in Touch</h3>
                        <h2 class="text-anime">Free to Drop Us a Message</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Contact Form start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.5s">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="msg" class="form-control" id="message" rows="5" placeholder="Write Your Message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-default">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-left hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->

    <!-- Google Map Section Start -->
    <div class="google-location-map">
        <div class="container">
            <div class="no-gap row">
                <div class="col-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116357.3481785401!2d-95.54669749945178!3d39.389498766353576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1707738120250!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection
