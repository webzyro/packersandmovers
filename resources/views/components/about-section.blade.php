<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <!-- About Us Image Start -->
                <div class="about-us-image">
                    <figure class="image-anime reveal">
                        <img src="{{asset('assets/images/about-image.jpg')}}" alt="about-image">
                    </figure>
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6  order-lg-2 order-1">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Setting new standards in the <span>moving
                                industry</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Delivering professional, reliable, and hassle-free packing
                            and moving services you can trust.
                        </p>

                    </div>
                    <!-- Section Title End -->

                    <!-- About Counter Box Start -->
                    <div class="about-counter-box">
                        <!-- About Counter Item Start -->
                        <div class="about-counter-item">
                            <h2><span class="counter">92</span>%</h2>
                            <p>Our customer satisfaction rate stands at impressive</p>
                        </div>
                        <!-- About Counter Item End -->

                        <!-- About Counter Item Start -->
                        <div class="about-counter-item">
                            <h2><span class="counter">1082</span>+</h2>
                            <p>Helping families and businesses to their new destinations</p>
                        </div>
                        <!-- About Counter Item End -->
                    </div>
                    <!-- About Counter Box End -->

                    <!-- About Us Button Start -->
                    <div class="about-us-btn wow fadeInUp" data-wow-delay="0.4s">
                        @if(request()->is('about'))
                            <button type="button" data-bs-toggle="modal" data-bs-target="#getQuoteModal"
                                class="btn-default">Request a Quote</button>
                        @else
                            <a href="{{ route('about') }}" class="btn-default">more about us</a>
                        @endif
                    </div>
                    <!-- About Us Button End -->
                </div>
                <!-- About Us Content End -->
            </div>

            <div class="col-lg-12 order-3">
                <!-- About Owner Box Start -->
                <div class="about-owner-box">
                    <!-- About Owner Info Start -->
                    <div class="about-owner-info">
                        <div class="about-owner-content wow fadeInUp">
                            <p>“Moving isn't just about transporting items, it's about embracing change and starting
                                fresh. We're dedicated to ensuring your journey is seamless, so you can focus on
                                settling into your new beginning.”</p>
                        </div>
                        <div class="about-owner-info-body wow fadeInUp" data-wow-delay="0.2s">
                            <div class="about-owner-signature">
                                <img src="{{asset('assets/images/about-owner-signature.png')}}"
                                    alt="about-owner-signature">
                            </div>
                            <div class="about-owner-info-content">
                                <h3>Aditya Singh</h3>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <!-- About Owner Info End -->

                    <!-- About Owner Image Start -->
                    <div class="about-owner-image">
                        <figure class="image-anime reveal">
                            <img src="{{asset('assets/images/about-owner-image.jpg')}}" alt="about-owner-image">
                        </figure>
                    </div>
                    <!-- About Owner Image End -->
                </div>
                <!-- About Owner Box End -->
            </div>
        </div>
    </div>
</div>