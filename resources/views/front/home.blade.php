@extends('layouts.front')

@section('title', 'Home')

@section('content')
<!-- Start Banner Area -->
@if (count($banners) != 0)
<section class="main-slider-area owl-theme owl-carousel">
    @foreach ($banners as $item)
    <div class="slider-item" style="background-image: url('{{ $item->image }}')">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="slider-text one overflow-hidden">
                                <h1>{{ $item->title }}</h1>
                                <div class="slider-btn"> <a href="/contact-us" class="default-btn"> Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endif
<!-- End Banner Area -->

<!-- Start Facility Area -->
@if (count($facilities) != 0)
<section class="facility-area facility-area-three pt-50 pb-50 about-bg">
    <div class="container">
        <div class="row">
            @foreach ($facilities as $item)
            <div class="col-lg-3 col-sm-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-facility"> <img src="{{ $item->photo }}" alt="Image">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                    <a href="/about-us"> <i class="flaticon-right-1"></i> </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- End Facility Area -->

<!-- Start About Area -->
<section class="about-area-two pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center pl-0 wow fadeInLeft"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="about-content">
                    <h2>About B2B Exports LLC</h2>
                    <p>{!! $settings->about_us_desc !!}</p>
                    <a href="/about-us" class="default-btn"> Read More </a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- End About Area -->

@if (count($services) != 0)
<section class="repair-area pt-70 pb-70 jarallax">
    <div class="container">
        <div class="section-title white-title">
            <h2>Our Services For You</h2>
        </div>
        <div class="row">
            @foreach ($services as $item)
            <div class="col-lg-3 col-md-6">
                <div class="single-news">
                    <a href="{{ $item->slug }}">
                        <img src="{{ $item->photo }}" alt="Image">
                    </a>
                    <div class="news-content"> <a href="{{ $item->slug }}">
                            <h3>{{ $item->title }}</h3>
                        </a>
                        <p>{{ mb_substr($item->summary, 0, 150, 'utf-8') }}...</p>
                        <a href="{{ $item->slug }}" class="read-more"> Read More <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="computer-area pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="computer-content">
                    <h6>{{ $blog->title }}</h6>
                    <h2>{{ $blog->sub_title }}</h2>
                    <p>{!! $blog->information !!}</p>
                    <!-- <p>Globally individuals and organizations are showing interest in refurbished machines. Big Brands are introducing refurbished machines in their IT Departments. Companies providing refurbished devices are closing massive deals. B2B Exports being one such company has partnered with numerous MNCs and small organizations. </p> -->
                </div>
            </div>
            <div class="col-lg-5 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="">
                    <div class="about-img-2"> <img src="{{ $blog->image }}"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Counter Area -->
<section class="counter-area pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter"> <i class="flaticon-smile"></i>
                    <h2> <span class="odometer" data-count="{{ $history->happy_clients }}">00</span> <span class="target">+</span> </h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter"> <i class="flaticon-team"></i>
                    <h2> <span class="odometer" data-count="{{ $history->completed_works }}">00</span> <span class="target">+</span> </h2>
                    <p>Completed Works</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter"> <i class="flaticon-trophy"></i>
                    <h2> <span class="odometer" data-count="{{ $history->winning_awards }}">00</span> <span class="traget">+</span> </h2>
                    <p>Winning Awards</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter"> <i class="flaticon-file"></i>
                    <h2> <span class="odometer" data-count="{{ $history->completed_projects }}">00</span> <span class="target">+</span> </h2>
                    <p>Completed Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Area -->

<!-- Start Computer Area -->

<!-- Start Why Us Choose Area -->
<section class="why-us-choose-area-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="choose-img jarallax" data-jarallax='{"speed": 0.3}'> </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="why-us-choose-wrap pt-70 pb-70 wow fadeInRight"
                    style="visibility: visible; animation-name: fadeInRight;">
                    <div class="section-title">
                        <h6>{{ $abt->title }}</h6>
                        <h2>{{ $abt->sub_title }}</h2>
                        <p>{!! $abt->information !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
  <div class="shape wow fadeInLeft" data-wow-delay=".1s">
    <img src="front/img/home-one/choose-shape.png" alt="Image">
  </div>
  -->
</section>
<!-- End Why Us Choose Area -->

@include('partials.contact')

@endsection
