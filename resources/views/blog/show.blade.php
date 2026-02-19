<x-layout>
    <x-breadcrumb :title="$blog->title" />

    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ Storage::disk('uploads')->url($blog->image) }}" alt="{{ $blog->title }}">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            {!! $blog->description !!}
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags:
                                            <a href="#">Strategy</a>
                                            <a href="#">Collaboration</a>
                                            <a href="#">Excellence</a>
                                        </span>
                                    </div>
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Sidebar Category List Start -->
                        <div class="page-sidebar-catagery-list wow fadeInUp">
                            <h3>Recent Blogs</h3>
                            <ul>
                                @if ($sidebarBlogs->isNotEmpty())
                                    @foreach ($sidebarBlogs as $sidebarBlog)
                                        <li><a href="{{ route('blog.show', $sidebarBlog->slug) }}">{{ $sidebarBlog->title }}</a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>No Recent Blogs</li>
                                @endif

                            </ul>

                        </div>
                        <!-- Page Sidebar Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Cta Logo Start -->
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="{{ $blog->title }}">
                            </div>
                            <!-- Sidebar Cta Logo End -->

                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>How can we help?</h3>
                                <p>Ram Krishna Nagar,Patna, Bihar(800027)</p>
                                <p><a href="mailto:grandpackerspatna@gmail.com">grandpackerspatna@gmail.com</a></p>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Button Start -->
                            <div class="sidebar-cta-btn">
                                <a href="tel:+919546988569"><img src="{{ asset('assets/images/icon-phone.svg') }}"
                                        alt="">+91 9546988569</a>
                            </div>
                            <!-- Sidebar CTA Button End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>
            </div>
        </div>
    </div>

    @if(!empty($blog->schema_markup))
        {!! $blog->schema_markup !!}
    @endif
</x-layout>