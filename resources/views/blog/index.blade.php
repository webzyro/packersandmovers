<x-layout title="Relocation Tips & Moving Guides | Packers and Movers Blog"
    meta_desc="Read expert tips, relocation guides, and moving advice from professional packers and movers in Patna to make your shifting smooth and stress-free."
    meta_keywords="moving tips, relocation blog, house shifting tips, packing guide, moving advice Patna">
    <x-breadcrumb title="Our blog" />

    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <a href="{{ route('blog.show', $blog->slug) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ Storage::disk('uploads')->url($blog->image) }}"
                                            alt="{{ $blog->title }}">
                                    </figure>
                                </a>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <!-- Post Item Content Start -->
                                <div class="post-item-content">
                                    <h3><a href="blog-single.html">{{ $blog->title }}</a></h3>
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

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        {{ $blogs->links() }}
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>

    <x-modal />
</x-layout>