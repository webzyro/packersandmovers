<div class="our-team dark-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">team member</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Professionals making your <span>move
                            seamless</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ Storage::disk('uploads')->url($team->image) }}" alt="team-1">
                            </figure>
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    @if($team->instagram)
                                        <li><a href="{{ $team->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                    @endif
                                    @if($team->facebook)
                                        <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($team->twitter)
                                        <li><a href="{{ $team->twitter }}"><i class="fa-brands fa-square-x-twitter"></i></a>
                                        </li>
                                    @endif
                                    @if($team->linkedin)
                                        <li><a href="{{ $team->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>{{ $team->name }}</h3>
                            <p>{{ $team->position }}</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Item End -->
                </div>
            @endforeach
        </div>
    </div>
</div>