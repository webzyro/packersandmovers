<x-layout>
    <x-breadcrumb :title="$project->project_name" />

    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-box wow fadeInUp">
                            <!-- Project Deatil Title Start -->
                            <div class="project-detail-title">
                                <h3>Project details</h3>
                            </div>
                            <!-- Project Deatil Title End -->

                            <!-- Project Detail List Start -->
                            <div class="project-detail-list">
                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-project-detail-1.svg')}}" alt="icon">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Project name</h3>
                                        <p>{{ $project->project_name }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-project-detail-2.svg')}}" alt="icon 2">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Category</h3>
                                        <p>{{ $project->category }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-project-detail-3.svg')}}" alt="icon 3">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Budgets</h3>
                                        <p>₹{{$project->budget}}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-project-detail-4.svg')}}" alt="icon 4">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Date</h3>
                                        <p>{{$project->published_date->format('j F, Y')}}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->

                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-project-detail-5.svg')}}" alt="icon 5">
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Duration</h3>
                                        <p>{{ $project->duration_days }} day</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->
                            </div>
                            <!-- Project Detail List End -->
                        </div>
                        <!-- Project Detail List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Cta Content Start -->
                            <div class="sidebar-cta-logo">
                                <img src="{{asset('assets/images/grand-packers-and-movers.svg')}}" alt="logo">
                            </div>

                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>How can we help?</h3>
                                <p>Sorangpur, Near Devi Asthan Mandir, East Ram Krishna Nagar,
                                    Patna, Bihar-800027</p>
                                <p><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a></p>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Button Start -->
                            <div class="sidebar-cta-btn">
                                <a href="tel:+91-9971062018"><img src="{{asset('assets/images/icon-phone.svg')}}"
                                        alt="icon 6">+91-9971062018</a>
                            </div>
                            <!-- Sidebar CTA Button End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{Storage::disk('uploads')->url($project->image)}}"
                                    alt="{{ $project->project_name }}">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            {!! $project->description !!}
                        </div>
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
</x-layout>