<x-layout title="Our Projects | Successful Packers and Movers Work in Patna"
    meta_desc="Explore our completed house shifting, office relocation, and transportation projects in Patna. See how we deliver safe, timely, and hassle-free moving solutions."
    meta_keywords="packers and movers projects Patna, completed relocation projects, house shifting work Patna, office moving projects, successful relocation services">
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