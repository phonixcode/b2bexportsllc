    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <ul class="header-content-right">
                            <li> <a href="mailto:helpdesk@b2bexportsllc.com"><i class="bx bx-envelope"></i>
                                    helpdesk@b2bexportsllc.com
                                </a> </li>
                            <li> <a href="tel:(252) 266-0299"> <i class="bx bx-phone-call"></i> (252) 266-0299 </a>
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
                <div class="mobile-nav"> <a href="/" class="logo"> <img src="front/img/logo.png" alt="Logo">
                    </a>
                </div>

                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container"> <a class="navbar-brand" href="index-2.html"> <img
                                    src="front/img/logo.png" alt="Logo"> </a>
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
                                            <li class="nav-item"> <a href="/re-manufacturer" class="nav-link">IT
                                                    Re-Manufacturer</a> </li>
                                            <li class="nav-item"> <a href="/remarketing" class="nav-link">IT
                                                    Re-Marketing</a> </li>
                                            <li class="nav-item"> <a href="/it-disposition" class="nav-link">IT
                                                    Asset Disposition</a>
                                            </li>
                                            <li class="nav-item"><a href="/data-destruction" class="nav-link">IT
                                                    Data Destruction</a></li>
                                            <li class="nav-item"> <a href="/end-of-life-cycle-processing"
                                                    class="nav-link">End Of Life
                                                    Cycle Processing</a> </li>
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
