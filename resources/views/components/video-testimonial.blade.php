@php
    function getYouTubeId($url)
    {
        preg_match('%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $url, $match);
        return $match[1] ?? null;
    }
@endphp

<div class="video-testimonials">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Video Testimonials</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Watch our <span>satisfied customers</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="video-testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($videoTestimonials as $testimonial)
                                @php $youtubeId = getYouTubeId($testimonial->video_link); @endphp
                                <!-- Video Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item video-testimonial-item">
                                        <div class="author-video-container">
                                            <div class="author-video" data-youtube-id="{{ $youtubeId }}">
                                                @if($youtubeId)
                                                    <img src="https://img.youtube.com/vi/{{ $youtubeId }}/maxresdefault.jpg"
                                                        alt="{{ $testimonial->name }}" class="testimonial-video-thumbnail">
                                                @else
                                                    <video class="testimonial-video" muted playsinline>
                                                        <source src="{{ $testimonial->video_link }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                                <div class="video-play-button">
                                                    <i class="fa-solid fa-play"></i>
                                                </div>
                                                <div class="video-iframe-container"></div>
                                            </div>
                                        </div>
                                        <div class="author-content">
                                            <div class="author-title">
                                                <h3>{{ $testimonial->name }}</h3>
                                            </div>
                                            <div class="author-rating">
                                                @for($i = 0; $i < 5; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>{{ $testimonial->message }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Video Testimonial Slide End -->
                            @endforeach
                        </div>
                        <div class="testimonial-btn">
                            <div class="testimonial-btn-prev"></div>
                            <div class="testimonial-btn-next"></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const videoSliders = document.querySelectorAll('.video-testimonial-slider');

        videoSliders.forEach(slider => {
            const swiper = new Swiper(slider.querySelector('.swiper'), {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: slider.querySelector('.testimonial-btn-next'),
                    prevEl: slider.querySelector('.testimonial-btn-prev'),
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        });

        // Video Play Logic for YouTube and Local Videos
        const videoContainers = document.querySelectorAll('.author-video');
        videoContainers.forEach(container => {
            const youtubeId = container.getAttribute('data-youtube-id');
            const playButton = container.querySelector('.video-play-button');
            const iframeContainer = container.querySelector('.video-iframe-container');
            const thumbnail = container.querySelector('.testimonial-video-thumbnail');
            const localVideo = container.querySelector('video');

            container.addEventListener('click', function () {
                if (youtubeId) {
                    // Load YouTube Iframe
                    iframeContainer.innerHTML = `<iframe src="https://www.youtube.com/embed/${youtubeId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                    iframeContainer.style.display = 'block';
                    if (thumbnail) thumbnail.style.display = 'none';
                    playButton.style.display = 'none';
                } else if (localVideo) {
                    if (localVideo.paused) {
                        localVideo.play();
                        playButton.style.display = 'none';
                    } else {
                        localVideo.pause();
                        playButton.style.display = 'flex';
                    }
                }
            });

            if (localVideo) {
                localVideo.addEventListener('ended', function () {
                    playButton.style.display = 'flex';
                });
            }
        });
    });
</script>