<x-layout>
    <x-breadcrumb title="Page not found" />

    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp">
                        <img src="{{asset('assets/images/404-error-img.png')}}" alt="404 image">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Oops! page <span>not found</span></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">The page you are looking for does not exist.
                            </p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.4s" href="{{ route('home') }}">back to
                                home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal />
</x-layout>