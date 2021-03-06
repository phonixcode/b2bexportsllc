<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="{{ $settings->meta_keywords }}" />
	<meta name="author" content="{{ $settings->site_title }}" />
	<meta name="description" content="{{ $settings->meta_description }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ $settings->meta_description }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $settings->site_favicon }}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <!-- Owl Magnific Min CSS -->
    <link rel="stylesheet" href="front/css/magnific-popup.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="front/css/animate.min.css">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="front/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="front/css/flaticon.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="front/css/meanmenu.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="front/css/nice-select.min.css">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="front/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="front/css/style2.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="front/css/responsive.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-2JYT59VHQY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2JYT59VHQY');
    </script> --}}
