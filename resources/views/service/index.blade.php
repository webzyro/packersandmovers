<x-layout>
    <x-breadcrumb title="Our services" />

    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-1.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="house-shifting.html">House Shifting</a></h3>
                            <p>
                                Safe and hassle-free home relocation with professional packing,
                                careful handling, and on-time delivery.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="{{ route('services.show', '1') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-2.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="office-relocation.html">Office Relocation</a></h3>
                            <p>
                                Professional office relocation services ensuring smooth transitions,
                                minimal business downtime, secure handling, and timely setup.
                            </p>


                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-3.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="car-transport.html">Car Transportation</a></h3>
                            <p>
                                Safe and reliable car transport services with secure loading,
                                enclosed carriers, and timely door-to-door delivery.
                            </p>
                        </div>

                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-4.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="bike-transport.html">Bike Transportation</a></h3>
                            <p>
                                Safe and reliable bike transportation services with secure packing,
                                careful handling, and timely door-to-door delivery.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-5.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="packing-unpacking.html">Packing & Unpacking</a></h3>
                            <p>
                                Professional packing and unpacking services using high-quality materials
                                to keep your belongings safe and organized throughout the move.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-6.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="machinery-moving.html">Machinery Moving</a></h3>
                            <p>
                                Specialized machinery moving services with expert handling,
                                heavy-duty equipment, and secure transportation to ensure
                                safe and damage-free relocation.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-7.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="local-moving.html">Local Shifting</a></h3>
                            <p>
                                Quick and affordable local shifting services with trained professionals,
                                secure handling, and timely delivery within your city.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-item-8.svg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="storage-warehouse.html">Warehouse & Storage</a></h3>
                            <p>
                                Secure and flexible warehousing solutions with 24/7 security,
                                climate-safe storage, and easy access for short- and long-term needs.
                            </p>

                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>

    <x-why-choose />

    <x-testimonial-section />

    <x-faqs-section />
</x-layout>