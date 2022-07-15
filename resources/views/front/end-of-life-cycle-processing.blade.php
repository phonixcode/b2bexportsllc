@extends('layouts.front')

@section('title', 'End Of Life Cycle Processing')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
      <div class="page-title-content">
        <h2>IT End Of Life Cycle Processing </h2>
        <ul>
          <li> <a href="/">Home</a> </li>
          <li class="act">End Of Life Cycle Processing</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title Area -->

    <section class="news-details-area pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12  wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    @include('partials.min-sidebar')
                </div>

                <div class="col-lg-9 col-md-12  wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="blog-details-desc">
                        <h2>End Of Life Cycle Processing</h2>
                        <div class="clear"></div>
                            <div class="pt-70">
                                <div class="subscribe2">
                                    <a href="/contact-us"> Get A Quote </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
