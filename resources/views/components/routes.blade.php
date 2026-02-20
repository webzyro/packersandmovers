<section class="py-3">
    <div class="container">
        <h4 class="text-anime-style-2 text-center mb-4">Top Packers and Movers Routes to Major Cities in Bihar</h4>
        <div class="row g-4">
            @foreach ($routes as $route)
                <div class="col-md-3">
                    <div class="border border-warning rounded-4 p-3 d-flex align-items-center gap-2">
                        <a href="{{ route('route.show', $route->slug) }}"
                            class="text-decoration-none text-dark d-flex align-items-center gap-2">
                            <i class="fa-solid fa-truck-fast icon"></i>
                            <span>{{ $route->title }}</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>