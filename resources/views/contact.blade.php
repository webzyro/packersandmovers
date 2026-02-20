<x-layout>
    <x-breadcrumb title="Contact us" />

    <section class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">contact form</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Get in to <span>touch</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>call to question</p>
                                    <h3><a href="tel:+919971062018">+91 9971062018</a></h3>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>send e-mail</p>
                                    <h3><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>visit anytime</p>
                                    <h3>Sorangpur, Near Devi Asthan Mandir, East Ram Krishna Nagar, Patna, Bihar -
                                        800027</h3>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info List End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-lg-8">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Send message <span>with us</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                                data-wow-delay="0.2s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="First Name" required>
                                        <i class="fa-regular fa-user"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Last Name" required>
                                        <i class="fa-regular fa-user"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email Address" required>
                                        <i class="fa-regular fa-envelope"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone Number" required>
                                        <img src="{{ asset('assets/images/icon-phone-primary.svg') }}" alt="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4"
                                            placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default">submit message</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d636.1640676818664!2d85.14502998192894!3d25.582064564867355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58786714b463%3A0xb15782cb7a202dd2!2sGrand%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1770803305598!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0; border-radius: 15px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>

    <x-modal />
</x-layout>