@props(['blogs' => []])

<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title ">
                    <h3 class="wow fadeInUp">latest blogs</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Expert Advice for Stress- <span>Free
                            Moves</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                    <p>Stay informed with our expert moving advice and practical insights. Whether you're relocating
                        locally or long-distance, our blog has everything you need to make your journey seamless.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.show', $blog->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ Storage::disk('uploads')->url($blog->image) }}" alt="post-1">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blog.show', $blog->slug) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            @endforeach
        </div>
    </div>
</div>