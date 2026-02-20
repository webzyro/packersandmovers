<section class="py-3">
    <div class="container">
        <div class="row g-4">
            @foreach ($cities as $city)
                <div class="col-md-3">
                    <a href="{{ route('city.show', $city->slug) }}"
                        class="text-decoration-none text-dark d-flex align-items-center gap-2">
                        <i class="fa-solid fa-arrow-right icon"></i>
                        <span>{{ $city->title }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>