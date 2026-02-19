<x-layout>
    <x-breadcrumb title="Faqs" />
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
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
                        <!-- FAQ Item End -->
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layout>