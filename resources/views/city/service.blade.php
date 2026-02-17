<x-layout>
    <x-breadcrumb :title="$service->title" />
    <div class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="rounded-4 overflow-hidden">
                        <img src="{{ Storage::disk('uploads')->url($service->image) }}" alt="service image"
                            class="img-fluid object-fit-cover">
                    </div>
                    <div class="py-3">
                        <h2>{{ $service->title }}</h2>
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>