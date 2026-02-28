<x-layout :title="$service->meta_title" :meta_desc="$service->meta_description"
    :meta_keywords="$service->meta_keywords">
    <x-breadcrumb :title="$service->title" />
    <div class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="rounded-4 overflow-hidden">
                        <img src="{{ Storage::disk('uploads')->url($service->image) }}" alt="service image"
                            class="img-fluid object-fit-cover">
                    </div>
                    <div class="py-3">
                        <h2>{{ $service->title }}</h2>
                        {!! $service->description !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="page-single-sidebar">
                        <!-- Page Sidebar Category List Start -->
                        <div class="page-sidebar-catagery-list wow fadeInUp">


                        </div>
                        <!-- Page Sidebar Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Cta Logo Start -->
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset('assets/images/grand-packers-and-movers.svg') }}" alt="logo">
                            </div>
                            <!-- Sidebar Cta Logo End -->

                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>How can we help?</h3>
                                <p>
                                    Sorangpur, Near Devi Asthan Mandir, East Ram Krishna Nagar,
                                    Patna, Bihar-800027</p>
                                <p><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a></p>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Button Start -->
                            <div class="sidebar-cta-btn">
                                <a href="tel:+919546988569"><img src="{{ asset('assets/images/icon-phone.svg') }}"
                                        alt="">+91-9546988569</a>
                            </div>
                            <!-- Sidebar CTA Button End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-why-choose />


    <x-routes />

    <x-testimonial-section />

    <x-work-process />
    <x-video-testimonial />

    <x-modal />

    @if (!empty($service->schema_markup))
        {!! $service->schema_markup !!}
    @endif
</x-layout>