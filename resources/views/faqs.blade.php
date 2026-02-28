<x-layout title="Customer Reviews | Packers and Movers in Patna"
    meta_desc="Read genuine customer reviews and testimonials about our trusted packers and movers services in Patna. See why clients choose us for safe relocation."
    meta_keywords="packers and movers reviews Patna, moving company testimonials, relocation customer feedback">
    <x-breadcrumb title="Faqs" />
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if ($faqs->isNotEmpty())
                        <div class="faq-accordion" id="faqaccordion">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item wow fadeInUp">
                                    <h4 class="accordion-header" id="heading{{ $faq->id }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $faq->id }}">
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
                        </div>
                    @else
                        <div class="faq-empty-state text-center py-5 wow fadeInUp">
                            <div class="empty-icon mb-4">
                                <i class="fa-regular fa-circle-question fa-4x" style="color: var(--accent-color);"></i>
                            </div>
                            <h3 class="mb-3">No FAQs available yet</h3>
                            <p class="mb-4">We're currently gathering common questions to help you better. Please
                                check back soon!</p>
                            <a href="{{ route('contact') }}" class="btn-default">Still have questions? Contact Us</a>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </section>

    <x-modal />
</x-layout>