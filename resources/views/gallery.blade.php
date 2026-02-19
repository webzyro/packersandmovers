<x-layout>
    <x-breadcrumb title="Image gallery" />

    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-6">
                        <!-- image gallery start -->
                        <div class="photo-gallery wow fadeInUp">
                            <a href="{{ Storage::disk('uploads')->url($photo->image) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ Storage::disk('uploads')->url($photo->image) }}" alt="gallery-1">
                                </figure>
                            </a>
                        </div>
                        <!-- image gallery end -->
                    </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
</x-layout>