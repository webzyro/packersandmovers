<div class="latest-move">
    <div class="container">

        {{-- Section Title --}}
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">our portfolio</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Our <span>Latest</span> Moves
                        @if(!empty($cityName))
                            in {{ $cityName }}
                        @endif
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        A glimpse into our most recent successful relocations — handled with care, precision, and
                        professionalism.
                    </p>
                </div>
            </div>
        </div>

        {{-- Swiper Carousel --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="latest-move-slider">
                    <div class="swiper latest-move-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($works as $work)
                                {{-- Card 1 --}}
                                <div class="swiper-slide">
                                    <div class="latest-move-item">
                                        <div class="latest-move-image">
                                            <figure class="image-anime">
                                                <img src="{{ Storage::disk('uploads')->url($work->image) }}"
                                                    alt="{{ $work->title }}">
                                            </figure>
                                            {{-- <span class="latest-move-tag">Household</span> --}}
                                        </div>
                                        <div class="latest-move-body">
                                            <h4>{{ $work->title }}</h4>
                                            <p>{{ $work->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Navigation Buttons --}}
                    <div class="latest-move-btn">
                        <div class="latest-move-btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="latest-move-btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>