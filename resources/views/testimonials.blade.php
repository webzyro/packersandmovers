<x-layout title="Customer Reviews | Packers and Movers in Patna"
    meta_desc="Read genuine customer reviews and testimonials about our trusted packers and movers services in Patna. See why clients choose us for safe relocation."
    meta_keywords="packers and movers reviews Patna, moving company testimonials, relocation customer feedback">
    <x-breadcrumb title="Our testimonials" />
    <div class="page-testimonials">
        <div class="container">
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial-item wow fadeInUp">
                            <div class="author-image">
                                <figure class="image-anime">
                                    <img src="{{ Storage::disk('uploads')->url($testimonial->image) }}"
                                        alt="{{ $testimonial->id }}">
                                </figure>
                            </div>
                            <div class="author-content">
                                <div class="author-title">
                                    <h3>{{ $testimonial->name }}</h3>
                                </div>
                                <div class="author-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>{{ $testimonial->message }}</p>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-modal />
</x-layout>