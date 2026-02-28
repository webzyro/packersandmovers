<x-layout :title="$city->meta_title" :meta_desc="$city->meta_description" :meta_keywords="$city->meta_keywords">

    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <!-- Hero Content Box Start -->
                    <div class="hero-content-box">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h1 class="text-anime-style-2" data-cursor="-opaque">Effortless moving
                                    <span>experiences</span>
                                </h1>
                                <p class="wow fadeInUp">Experts in Hassle-Free Relocation</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Hero Content Start -->

                        <!-- Hero Customer Box Start -->
                        <div class="hero-customer-box">
                            <div class="hero-customer-content wow fadeInUp">
                                <p>Experience a stress-free move with our professional services. From careful packing to
                                    seamless transportation and timely delivery.</p>
                            </div>

                            <!-- Satisfy Customer Box Start -->
                            <div class="satisfy-customer-box">
                                <!-- Satisfy Customer Images Start -->
                                <div class="satisfy-customer-images">
                                    <div class="satisfy-customer-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/images/satisfy-customer-img-1.jpg')}}"
                                                alt="first-review">
                                        </figure>
                                    </div>
                                    <div class="satisfy-customer-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/images/satisfy-customer-img-2.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-customer-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/images/satisfy-customer-img-3.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Satisfy Customer Images End -->

                                <!-- Satisfy Customer Content Start -->
                                <div class="satisfy-customer-content">
                                    <h3>Customer Satisfied</h3>
                                    <p><span class="counter">4.8</span> (15K Reviews)</p>
                                </div>
                                <!-- Satisfy Customer Content End -->
                            </div>
                            <!-- Satisfy Customer Box End -->

                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#getQuoteModal"
                                    class="btn-default btn-highlighted">Request a
                                    Quote</button>
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Customer Box End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <h3 class="text-anime-style-1 mb-3 text-center">{{ $city->title }}</h3>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        {!! $city->about_desc !!}
                    </div>
                    <div class="col-md-6">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ $city->image ? Storage::disk('uploads')->url($city->image) : asset('assets/images/placeholder.jpg') }}"
                                    alt="{{ $city->title }}">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            {!! $city->description !!}


                            <!-- Service Solution Box Start -->
                            <div class="service-solution-box">
                                <!-- Service Entry Step List Start -->
                                <div class="service-solution-steps">
                                    <!-- Service Entry Step Item Start -->
                                    <h3 class="text-anime-style-2 mb-3">Moving made <span>simple and secure</span>with
                                        ease</h3>
                                    <div class="service-solution-step-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h4>01</h4>
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
                                                alt="Step 1: Personalized Planning">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->

                                    <!-- Service Entry Step Item Start -->
                                    <div class="service-solution-step-item active wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h4>02</h4>
                                            </div>
                                            <div class="service-solution-step-content">
                                                <h3>Connecting you to the right services</h3>
                                                <p>Our team connects you with the best moving resources, offering
                                                    personalized support for every step of your move.</p>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-solution-step-2.svg') }}"
                                                alt="Step 2: Connecting with Resources">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->

                                    <!-- Service Entry Step Item Start -->
                                    <div class="service-solution-step-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-solution-step-box">
                                            <div class="service-solution-step-no">
                                                <h4>03</h4>
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
                                                alt="Step 3: Feedback & Improvement">
                                        </div>
                                    </div>
                                    <!-- Service Entry Step Item Endtart -->
                                </div>
                                <!-- Service Entry Step List End -->
                            </div>
                            <!-- Service Solution Box End -->

                            <!-- Service Secure Box Start -->
                            <div class="service-secure-box">
                                <h3 class="text-anime-style-2">Moving made <span>simple and secure
                                    </span>{{ $cityName }}
                                </h3>

                                <!-- Services Start -->
                                <div class="row g-4 mt-3">
                                    @foreach ($city->services->where('is_active', true) as $service)
                                        <div class="col-md-4">
                                            <div class="rounded-4 overflow-hidden shadow-lg">
                                                <div class="service-secure-box-image">
                                                    <img src="{{ $service->image ? Storage::disk('uploads')->url($service->image) : asset('assets/images/placeholder.jpg') }}"
                                                        alt="{{ $service->title }}">
                                                </div>
                                                <div class="p-4">
                                                    <h5>{{ $service->title }}</h5>
                                                    <p>{{ Str::limit(strip_tags($service->description), 80) }}</p>
                                                    <div class="service-btn">
                                                        <a href="{{ route('city.service', [$city->slug, $service->slug]) }}"
                                                            class="readmore-btn">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Services End -->
                            </div>
                            <!-- Service Secure Box End -->

                            <!-- Service Entry Item Box Start -->
                            <div class="service-entry-item-box">
                                <!-- Service Entry Item List Start -->
                                <div class="service-entry-item-list">
                                    <!-- Service Entry Item Start -->
                                    <div class="service-entry-item wow fadeInUp">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-entry-item-1.svg') }}" alt=""
                                                aria-hidden="true">
                                        </div>
                                        <div class="service-entry-item-content">
                                            <h3>Smooth Relocation</h3>
                                            <p>
                                                Professional planning and execution for a stress-free moving
                                                experience.
                                            </p>

                                        </div>
                                    </div>
                                    <!-- Service Entry Item End -->

                                    <!-- Service Entry Item Start -->
                                    <div class="service-entry-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-service-entry-item-2.svg') }}" alt=""
                                                aria-hidden="true">
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
                                <h3 class="text-anime-style-2" data-cursor="-opaque">Answers to your <span>moving
                                        questions</span></h3>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="faqaccordion">
                                <!-- FAQ Item Start -->
                                @foreach ($city->faqs as $faq)
                                    <div class="accordion-item wow fadeInUp">
                                        <h4 class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                                aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h4>
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

    <x-why-choose />

    <x-work-process />

    <x-latest-move :cityName="$cityName" />

    <x-routes />

    <x-testimonial-section />

    <x-video-testimonial />

    <x-modal />

    @if(!empty($city->schema_markup))
        {!! $city->schema_markup !!}
    @endif
</x-layout>