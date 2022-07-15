@extends('layouts.front')

@section('title', 'Re-Manufacturing')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
      <div class="page-title-content">
        <h2>IT Re-Manufacturing </h2>
        <ul>
          <li> <a href="/">Home</a> </li>
          <li class="act">IT Re-Manufacturing </li>
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
                      <h2>IT Re-Manufacturing</h2>
                     <p><strong>IT Asset Re-manufacturer</strong> to any activity carried to re-manufacture an Asset to restore full functionality with an intense focus on the performance and reliability of the laptop.</p>



              <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                          <div class="imgggggg"><img src="front/img/Re-manufacturer1.jpg"></div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                          <div class="imgggggg"><img src="front/img/Re-manufacturer2.jpg"></div>
                        </div>
                      </div>

                     <p>There are benefits to re-manufacture one you already have, employees become familiar with existing machines. However, the older an asset, the more maintenance will be needed in the future, leading to more downtime. </p>

                    <p>There is also the environmental impact to consider. By re-manufacture an asset, more resources are used in the construction. Cost also becomes a factor.
              All re-manufactured devices are sold to achieve carbon neutrality, helping businesses meet sustainability targets like Sustainable Development Goals, the Climate Change Act, and the carbon zero obligations set via the U.N.
              </p>
              <p>Through the support of clean energy projects, we offset the Carbon dioxide emissions from the re-manufacturing process, enabling an immediate, positive effect so every laptop is a certified carbon-neutral product.</p>

              <h3>It has three major goals:</h3>
              <div class="car-service-list">
              <ul>
              <li>Extending the life of computers.</li>
              <li>Deliver the global net zero carbon ambition.</li>
              <li>Provide unique reporting on the sustainable and positive impact of assets. </li>
              <li>Preventing useful IT from being prematurely thrown away.</li>


              </ul>
              </div>
              <p>We fully support the carbon credit market as a provisional mechanism to ‘internalize’ the true environmental cost of carbon emissions into economic activities.</p>

              <div class="clear"></div>
              <div class="pt-70">
              <div class="subscribe2"> <a href="/contact-us"> Get A Quote </a> </div>     </div>

                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

@endsection
