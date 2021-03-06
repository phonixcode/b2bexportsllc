    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <ul class="header-content-right">
                            <li> <a href="mailto:{{ $settings->site_email }}"><i class="bx bx-envelope"></i>
                                {{ $settings->site_email }}
                                </a> </li>
                            <li> <a href="tel:{{ $settings->site_phone_number }}"> <i class="bx bx-phone-call"></i> {{ $settings->site_phone_number }} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Navbar Area -->
        <div class="nav-area">
            <div class="navbar-area">

                <!-- Menu For Mobile Device -->
                <div class="mobile-nav"> <a href="/" class="logo"> <img src="{{ $settings->site_logo }}" alt="Logo">
                    </a>
                </div>

                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container"> <a class="navbar-brand" href="/"> <img
                                    src="{{ $settings->site_logo }}" alt="Logo"> </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}"> Home
                                            <i class="bx bx-plus"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/about-us" class="nav-link {{ request()->is('about-us') ? 'active' : '' }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/industries" class="nav-link {{ request()->is('industries') ? 'active' : '' }}">Industries</a>
                                    </li>

                                    <li class="nav-item {{ (request()->is('re-manufacturer') || request()->is('remarketing') || request()->is('it-disposition') || request()->is('re-manufacturer') || request()->is('data-destruction') || request()->is('end-of-life-cycle-processing')) ? 'active' : '' }}"> <a href="javascript:void(0);" class="nav-link dropdown-toggle"> Services <i
                                                class="bx bx-plus"></i> </a>
                                        <ul class="dropdown-menu">
                                            @foreach (\App\Models\Service::where('status', 'active')->get() as $item)
                                            <li class="nav-item">
                                                <a href="{{ $item->slug }}" class="nav-link">{{ $item->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/contact-us" class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a>
                                    </li>
                                </ul>
                                <!-- Start Other Option -->
                                <div class="others-option">
                                    <div class="subscribe"> <a href="/contact-us"> Get A Quote </a> </div>
                                </div>
                                <!-- End Other Option -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
