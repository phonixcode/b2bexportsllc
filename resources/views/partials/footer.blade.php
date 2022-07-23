    <!-- Start Footer Top Area -->
    <footer class="footer-top-area pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>About Info</h3>
                        <p>We, B2B Exports LLC, are an IT Asset Life Cycle Management company. Our wide range of
                            services is focused
                            around helping in augmenting the IT asset sustainability.</p>
                        <div class="social-area">
                            <ul>
                                <li> <a href="" target="_blank"><i
                                            class="bx bxl-facebook"></i></a> </li>
                                <li> <a href=""
                                        target="_blank"><i class="bx bxl-linkedin"></i></a> </li>
                                <li> <a href="" target="_blank"><i
                                            class="bx bxl-instagram"></i></a> </li>
                                <li> <a href=""
                                        target="_blank"><i class="bx bxl-youtube"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Important Links</h3>
                        <ul>
                            <li> <a href="/"> <i class="flaticon-right"></i> Home </a> </li>
                            <li> <a href="/about-us"> <i class="flaticon-right"></i> About Us</a> </li>
                            <li> <a href="/industries"> <i class="flaticon-right"></i> Industries </a> </li>
                            <li> <a href="/contact-us"> <i class="flaticon-right"></i> Contact Us </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Service</h3>
                        <ul>
                            @foreach (\App\Models\Service::where('status', 'active')->get() as $item)
                            <li> <a href="{{ $item->slug }}"><i class="flaticon-right"></i> {{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget contact">
                        <h3>Contact Us</h3>
                        <ul>
                            <li> <i class="flaticon-maps-and-flags"></i> <span>US Office:</span> 5317 Peachtree Blvd
                                suite T 200,
                                Chamblee, GA 30341,
                                United States</li>

                            <li> <i class="flaticon-envelope"></i> <span>Email:</span> <a
                                    href="mailto:helpdesk@b2bexportsllc.com">
                                    helpdesk@b2bexportsllc.com</a> </li>
                            <li> <i class="flaticon-call"></i> <span>Hotline:</span> <a href="tel:(252) 266-0299"> (252) 266-0299</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Top Area -->

    <!-- Start Footer Bottom Area -->
    <footer class="footer-bottom-area footer-bottom-electronics-area">
        <div class="container">
            <div class="copy-right">
                <p> Copyright <i class="bx bx-copyright"></i>{{ Date('Y') }} B2B Exports LLC | All Rights Reserved.</p>
                <p> <a href="https://www.akswebsoft.com/" title="AKS Websoft Consulting Pvt. Ltd." target="_blank"><img
                            src="front/img/aks.png" alt="AKS Websoft Consulting Pvt. Ltd."></a> </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom Area -->
