@props(['services' => []])

<div class="our-services dark-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">our services</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Professional Moving Solutions <span>Built
                            Around You</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{asset('assets/images/icon-service-item-1.svg')}}" alt="icon-service-item-1">
                        </div>
                        <div class="service-content">
                            <h3><a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a></h3>
                            <p>
                                {{ Str::limit(strip_tags($service->description), 80) }}
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="{{ route('services.show', $service->slug) }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            @endforeach

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                    <p>Expert packing for your move. <a href="{{ route('contact') }}">Contact us now</a></p>
                    <a href="{{ route('services.index') }}" class="btn-default btn-highlighted">view all services</a>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
</div>