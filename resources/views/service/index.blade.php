<x-layout>
    <x-breadcrumb title="Our services" />

    <div class="page-services">
        <div class="container">
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-lg-3">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-service-item-1.svg') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3><a href="house-shifting.html">{{ $service->title }}</a></h3>
                                <p>
                                    {!! Str::limit($service->description, 80) !!}
                                </p>

                            </div>
                            <div class="service-btn">
                                <a href="{{ route('services.show', $service->slug) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-why-choose />

    <x-testimonial-section />

    <x-faqs-section />
</x-layout>