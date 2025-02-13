<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Footer Newsletters Start -->
                <div class="footer-newsletters">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Newsletter Title Start -->
                            <div class="newsletter-title">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-stay-info.svg') }}" alt="">
                                </div>
                                <h2>Stay Informed And Never Miss A Motion Asset Update!</h2>
                            </div>
                            <!-- Newsletter Title End -->
                        </div>

                        <div class="col-lg-6">
                            <!-- Newsletter Form Start -->
                            <div class="newsletter-form">
                                <form id="newsletter_form" action="#" data-toggle="validator">
                                    <div class="row no-gap align-items-center">
                                        <div class="form-group col-md-8">
                                            <input type="email" name="email" class="form-control" id="news_email" placeholder="Enter Your Email Address" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <button type="submit" class="btn-default disabled">Subscribe Now</button>
                                            <div id="news_letter_Submit" class="h3 text-left hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Newsletter Form End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Newsletters End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Mega Footer Start -->
                <div class="mega-footer">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <!-- Footer About Start -->
                            <div class="footer-about">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img style="max-width: 200px;" src="{{ asset('frontend/images/logo.svg') }}" alt="">
                                </div>
                                <!-- Footer Logo End -->

                                <!-- Footer About Content Start -->
                                <div class="footer-about-content">
                                    <p>Discover limitless opportunities with Motion Capital Asset to secure your financial future. </p>
                                </div>
                                <!-- Footer About Content End -->

                                <!-- Footer Social Links Start -->
                                <div class="footer-social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Footer Social Links End -->
                            </div>
                            <!-- Footer About End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <!-- Footer Title Start -->
                                <div class="footer-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <!-- Footer Title End -->

                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                        <li><a href="{{ route('frontend.services') }}">Services</a></li>
                                        <li><a href="{{ route('frontend.pricing') }}">Pricing</a></li>
                                        <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <!-- Footer Title Start  -->
                                <div class="footer-title">
                                    <h3>Authentication</h3>
                                </div>
                                <!-- Footer Title End -->

                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('userdashboard.deposit') }}">Invest</a></li>
                                        {{-- <li><a href="#">Token Sale</a></li>
                                        <li><a href="#">Faqs</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Contact information Start -->
                            <div class="footer-contact-information">
                                <!-- Footer Title Start -->
                                <div class="footer-title">
                                    <h3>Contact Information</h3>
                                </div>
                                <!-- Footer Title End -->

                                <div class="footer-contact-info">
                                    <!-- Footer Contact info Item Start -->
                                    <div class="footer-contact-info-item">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <p>+1 (802) 962-1417</p>
                                    </div>
                                    <!-- Footer Contact info Item End -->

                                    <!-- Footer Contact info Item Start -->
                                    <div class="footer-contact-info-item">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <p style="font-size: 15px;">support@motionglobalventures.com</p>
                                    </div>
                                    <!-- Footer Contact info Item End -->

                                    <!-- Footer Contact info Item Start -->
                                    <div class="footer-contact-info-item">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p>1111 Brickell Avenue Ste 2725, New  Zealand 33131</p>
                                    </div>
                                    <!-- Footer Contact info Item End -->
                                </div>
                            </div>
                            <!-- Footer Contact information End -->
                        </div>
                    </div>
                </div>
                <!-- Mega Footer End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Copyright Footer Start -->
                <div class="footer-copyrights">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Copyright Content Start -->
                            <div class="footer-copyright">
                                <p>Copyright &copy; 2024 Motion Asset. All Rights Reserved.</p>
                            </div>
                            <!-- Copyright Content End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Footer Policy Menu Start -->
                            <div class="footer-policy-menu">
                                <ul>
                                    {{-- <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li> --}}
                                </ul>
                            </div>
                            <!-- Footer Policy Menu End -->
                        </div>
                    </div>
                </div>
                <!-- Copyright Footer End -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
