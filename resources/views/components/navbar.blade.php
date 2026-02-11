<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'house-shifting']) }}">House
                                            Shifting</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'office-relocation']) }}">Office
                                            Relocation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'car-transport']) }}">Car
                                            Transportation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'bike-transport']) }}">Bike
                                            Transportation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'packing-unpacking']) }}">Packing
                                            & Unpacking</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'local-moving']) }}">Local
                                            Shifting</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'intercity-moving']) }}">Intercity
                                            Relocation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('services.show', ['slug' => 'storage-warehouse']) }}">Warehouse
                                            & Storage</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('branches') }}">Branches</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('clients') }}">Clients</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="{{ route('contact') }}" class="btn-default btn-highlighted">get started</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>