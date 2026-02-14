<x-layout>
    <x-breadcrumb title="{{ $service->title }}" />

    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Sidebar Category List Start -->
                        <div class="page-sidebar-catagery-list wow fadeInUp">
                            <h3>services category</h3>
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- Page Sidebar Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Cta Logo Start -->
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                            </div>
                            <!-- Sidebar Cta Logo End -->

                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>How can we help?</h3>
                                <p>Ram Krishna Nagar,Patna, Bihar(800027)</p>
                                <p><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a></p>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Button Start -->
                            <div class="sidebar-cta-btn">
                                <a href="tel:+919546988569"><img src="{{ asset('assets/images/icon-phone.svg') }}"
                                        alt="">+91 9546988569</a>
                            </div>
                            <!-- Sidebar CTA Button End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-contemt">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ $service->image ? Storage::disk('uploads')->url($service->image) : asset('assets/images/placeholder.jpg') }}"
                                    alt="{{ $service->title }}">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            {!! $service->description !!}


                            <!-- Service Solution Box Start -->
                            <div class="service-solution-box">
                                <!-- Service Entry Step List Start -->
                                <div class="service-solution-steps">
                                    <!-- Service Entry Step Item Start -->
                                    <div class="service-solution-step-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h2>01</h2>
                                            </div>
                                            <div class="service-solution-step-content">
                                                <h3>Personalized Moving Plans</h3>
                                                <p>
                                                    We create customized moving plans tailored to your specific
                                                    relocation
                                                    requirements, ensuring a smooth, efficient, and stress-free moving
                                                    experience.
                                                </p>

                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-solution-step-1.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->

                                    <!-- Service Entry Step Item Start -->
                                    <div class="service-solution-step-item active wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h2>02</h2>
                                            </div>
                                            <div class="service-solution-step-content">
                                                <h3>Connecting you to the right services</h3>
                                                <p>Our team connects you with the best moving resources, offering
                                                    personalized support for every step of your move.</p>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-solution-step-2.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->

                                    <!-- Service Entry Step Item Start -->
                                    <div class="service-solution-step-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h2>03</h2>
                                            </div>
                                            <div class="service-solution-step-content">
                                                <h3>Feedback & continuous improvement</h3>
                                                <p>We value your feedback and continuously refine our services to
                                                    provide you with the best possible moving experience, tailored to
                                                    your needs.</p>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-solution-step-3.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->
                                </div>
                                <!-- Service Entry Step List End -->
                            </div>
                            <!-- Service Solution Box End -->

                            <!-- Service Secure Box Start -->
                            <div class="service-secure-box">
                                <h2 class="text-anime-style-2">Moving made <span>simple and secure</span></h2>

                                <!-- Service Entry Image Content Start -->
                                <div class="service-entry-image-content">
                                    <!-- Service Entry Image Start -->
                                    <div class="service-entry-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/service-entry-image.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Service Entry Image End -->

                                    <!-- Service Entry Content Start -->
                                    <div class="service-entry-content">
                                        <!-- Service Entry Content Item Start -->
                                        <div class="service-entry-content-item wow fadeInUp">
                                            <h3>Quality packing materials</h3>
                                            <p>We use premium materials to ensure the safety & security of your
                                                belongings during the move.</p>
                                        </div>
                                        <!-- Service Entry Content Item End -->

                                        <!-- Service Entry Content Item Start -->
                                        <div class="service-entry-content-item wow fadeInUp" data-wow-delay="0.2s">
                                            <h3>Expert moving team</h3>
                                            <p>Our experienced professionals handle every step of moving process with
                                                precision & care.</p>
                                        </div>
                                        <!-- Service Entry Content Item End -->

                                        <!-- Service Entry Content Item Start -->
                                        <div class="service-entry-content-item wow fadeInUp" data-wow-delay="0.4s">
                                            <h3>Enhanced relocation experience</h3>
                                            <p>Our services are designed to make your move smooth, efficient and
                                                stress-free.</p>
                                        </div>
                                        <!-- Service Entry Content Item End -->
                                    </div>
                                    <!-- Service Entry Content End -->
                                </div>
                                <!-- Service Entry Image Content End -->
                            </div>
                            <!-- Service Secure Box End -->

                            <!-- Service Entry Item Box Start -->
                            <div class="service-entry-item-box">
                                <!-- Service Entry Item List Start -->
                                <div class="service-entry-item-list">
                                    <!-- Service Entry Item Start -->
                                    <div class="service-entry-item wow fadeInUp">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-entry-item-1.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="service-entry-item-content">
                                            <h3>Smooth Relocation</h3>
                                            <p>
                                                Professional planning and execution for a stress-free moving experience.
                                            </p>

                                        </div>
                                    </div>
                                    <!-- Service Entry Item End -->

                                    <!-- Service Entry Item Start -->
                                    <div class="service-entry-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-entry-item-2.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="service-entry-item-content">
                                            <h3>Complete Care & Safety</h3>
                                            <p>
                                                We treat your belongings with care, precision, and responsibility
                                                throughout the relocation process.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- Service Entry Item End -->
                                </div>
                                <!-- Service Entry Item List End -->

                                <!-- Service Entry List Start -->
                                <div class="service-entry-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Smooth Transitions to Your Perfect City Home</li>
                                        <li>Simplifying Relocations for Busy City Lifestyles</li>
                                        <li>Reliable Moves for Comfortable Urban Living</li>
                                        <li>Trusted Moving Solutions for Urban Dreams</li>
                                    </ul>
                                </div>
                                <!-- Service Entry List End -->
                            </div>
                            <!-- Service Entry Item Box End -->
                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single FAQs Start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Answers to your <span>moving
                                        questions</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="faqaccordion">
                                <!-- FAQ Item Start -->
                                @foreach ($service->faqs as $faq)
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                                aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqaccordion">
                                            <div class="accordion-body">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
</x-layout>