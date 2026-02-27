<x-layout>
    <x-breadcrumb title="Project" />

    <div class="page-projects">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{Storage::disk('uploads')->url($project->image)}}"
                                        alt="{{ $project->project_name }}">
                                </figure>

                                <div class="project-btn">
                                    <a href="{{ route('project.show', $project->slug) }}"><img
                                            src="{{asset('assets/images/arrow-white.svg')}}" alt="icon"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">{{$project->project_name}}</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>