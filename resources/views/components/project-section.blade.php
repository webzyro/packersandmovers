<div class="our-projects">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest projects</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Every move counts discover our <span>latest
                            work</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                    <p>Take a closer look at our recent projects and see how we turn every move into a seamless
                        experience. From small local moves to large-scale relocations, we're proud to showcase the care.
                    </p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp">
                        <div class="project-image">
                            <figure class="image-anime">
                                <img src="{{ Storage::disk('uploads')->url($project->image) }}"
                                    alt="{{ $project->project_name }}">
                            </figure>

                            <div class="project-btn">
                                <a href="{{ route('project.show', $project->slug) }}"><img
                                        src="{{asset('assets/images/arrow-white.svg')}}" alt="arrow-white"></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3><a href="{{ route('project.show', $project->slug) }}">{{ $project->project_name }}</a></h3>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div>
            @endforeach


            <div class="col-lg-12">
                <!-- Section Footer Button Start -->
                <div class="section-footer-btn wow fadeInUp" data-wow-delay="1.2s">
                    <a href="{{ route('project.index') }}" class="btn-default">view all projects</a>
                </div>
                <!-- Section Footer Button End -->
            </div>
        </div>
    </div>
</div>