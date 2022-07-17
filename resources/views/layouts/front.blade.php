<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=12098817868" id="whatsapp"
        class="bx bxl-whatsapp text-theme-colored font-36 mt-5 sm-display-block"
        style="padding-top: 7px; color:#ffffff!important;" rel="nofollow" target="_blank">
    </a>

    <!-- Start Preloader Area -->
    {{-- <div class="preloader">
      <div class="lds-ripple">
        <div></div>
        <div></div>
      </div>
    </div> --}}
    <!-- End Preloader Area -->

    @include('partials.navgation')

    @yield('content')

    @include('partials.footer')

    <!-- Start Go Top Area -->
    <div class="go-top"> <i class='bx bx-chevrons-up'></i> <i class='bx bx-chevrons-up'></i> </div>
    <!-- End Go Top Area -->

    @include('partials.script')
</body>

</html>
