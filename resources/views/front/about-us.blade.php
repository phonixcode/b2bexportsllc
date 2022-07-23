@extends('layouts.front')

@section('title', 'About Us')

@section('content')

<!-- Start Banner Area -->

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li> <a href="/"> Home </a> </li>
                <li class="act">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End Banner Area -->

<!-- Start About Area -->
<section class="about-area-two pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pl-0 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="about-content text-center">
                    <h2>About Us</h2>
                    <div class="second-heading">
                        <p>{{ $settings->about_us_summary }}</p>
                    </div>
                    <p>{!! $settings->about_us_desc !!}</p>
                </div>
            </div>

            <div id="all"></div>
        </div>
    </div>
    </div>
</section>
<!-- End About Area -->

@if (count($facilities) != 0)
<section class="about-section facility-area-three ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section22">
                    <p>All of our services are sustainable, help in reducing e-waste, e-scrap and are cost-effective.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($facilities as $item)
            <div class="col-lg-3 col-sm-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-facility"> <img src="{{ $item->photo }}" alt="Image">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Start About Area -->
<section class="about-area-two pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pl-0 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="mission">
                    <img src="front/img/vision.png">
                    <h2>Our Mission</h2>

                    <p>{{ $settings->site_mission }}</p>
                </div>
            </div>
            <div class="col-lg-6 pl-0 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="mission">
                    <img src="front/img/mision.png">
                    <h2>Our Vision</h2>

                    <p>{{ $settings->site_vision }}</p>
                </div>
            </div>

            {{-- <div class="col-lg-12 pt-70 pb-40 wow fadeInLeft"
                style="visibility:visible; animation-name:fadeInLeft;">

                <p>B2B Exports LLC handles your equipment and components with care. We understand your need to stay safe
                    and secure, which is why we also offer Data Destruction services once we have acquired your
                    equipment. As a responsible entity, we destroy all the data that your equipment and component may
                    have, and this destruction allows us to assure our clients that the data will not be misused. We put
                    in maximum efforts to provide best E waste Recycling services in USA.</p>

                <p>To ensure the security is provided to you, we either destroy, destruct or overwrite on the components
                    so that the initial data is impossible to extract.</p>

                <p>Furthermore, we have come up with a service that helps us remove all the traces of data ever stored
                    on any device. Once you are done using the components that store data, and such data is not to be
                    used later on, give us a call, we will provide data shredding services.</p>

            </div> --}}


        </div>
    </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start About Area -->
<section class="about-area-two pt-70 pb-70">
    <div class="container">
        <div class="row">

            <div class="image-column col-lg-4 md-mb-50 wow fadeInLeft"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="inner-column mb-50 md-mb-0">
                    <div class="image"> <img src="front/img/director.jpg" alt=""> </div>
                    <div class="team-content text-center">
                        <h5>Mr. Manish Balani</h5>
                        <div class="text">
                            (Company Director)
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-column col-lg-8 md-pl-15 md-pt-0 wow fadeInLeft"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="inner-column">
                    <div class="about-content message-president">
                        <h2 class="sl-title mb-40 md-mb-20">Director’s Message</h2>
                        <p>Dear All,</p>

                        <p>With the increasing amount of waste generated year after year we established B2B exports with
                            a singular objective of making sustainability attainable by businesses one step at a time.
                            Our wide range of services include IT Asset Disposition (ITAD), IT Asset Re-marketing,
                            Electronic Recycling, and Data Destruction. Right from disposing old computers, computer
                            components, to flash drives, hard disks, cell phones, printers, or CDs, name an IT related
                            component you want to dispose and we have an eco-friendly solution for it!</p>

                        <p>We understand sustainability is one of the most pivotal objectives of your business
                            irrespective of which domain you are operating from. It is no more a choice but a necessity.
                            It requires innovative thinking and willingness to take steps in the direction which help in
                            bringing down the carbon footprint of your organization as much as possible. And we are
                            happy to become your proud partners in this process and make this whole experience
                            comfortable and seamless.</p>

                        <p>In the end, I would like to thank you all for being part of this journey and I hope for your
                            continued trust in us as the best IT asset disposition company. Let us make our carbon
                            footprint a little less and our contribution to mother earth a little more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End About Area -->


@endsection
