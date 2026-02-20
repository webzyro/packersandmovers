<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!-- About Footer start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="Logo">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Contact Box Start -->
                    <div class="about-footer-content">
                        <p>
                            Grand Packers and Movers — trusted for safe, reliable,
                            and stress-free relocation services.
                        </p>

                    </div>
                    <!-- Footer Contact Box End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-3 col-md-5">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>quick link</h3>
                    <ul class="ps-2">
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrow-right icon"></i>
                            <a href="{{ route('about') }}">About us</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrow-right icon"></i>
                            <a href="{{ route('services.index') }}">our services</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrow-right icon"></i>
                            <a href="{{ route('faqs') }}">FAQs</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrow-right icon"></i>
                            <a href="{{ route('contact') }}">Contact us</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrow-right icon"></i>
                            <a href="{{ route('testimonials') }}">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-7">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>contact us</h3>
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{asset('assets/images/icon-location.svg')}}" alt="location-icon">
                        </div>
                        <div class="footer-contact-content">
                            <p>Sorangpur, Near Devi Asthan Mandir, East Ram Krishna Nagar, Patna, Bihar - 800027</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{asset('assets/images/icon-mail.svg')}}" alt="mail-icon">
                        </div>
                        <div class="footer-contact-content">
                            <p><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a></p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="phone-icon">
                        </div>
                        <div class="footer-contact-content">
                            <p><a href="tel:+123456789">+91 9546988569</a></p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-12">
                <!-- Footer Newsletter Form Start -->
                <div class="footer-links footer-newsletter-form">
                    <h3>Get in touch</h3>
                    <p>Contact Grand Packers and Movers</p>
                    <form id="newslettersForm" action="#" method="POST">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" id="mail"
                                placeholder="Enter your email" required>
                            <button type="submit" class="btn-default btn-highlighted">subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Footer Newsletter Form End -->
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Section Start -->
                <div class="footer-copyright">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>&copy; 2026 All Rights Reserved by Grand Packers and Movers.</p>
                    </div>
                    <!-- Footer Copyright Text End -->

                    <div>
                        <p class="text-white fw-bold">Developed by <a target="_blank" href="https://www.webzyro.com"
                                class="icon">Webzyro Technologies</a>
                        </p>
                    </div>

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- Footer Copyright Section End -->
            </div>
        </div>
    </div>
</footer>