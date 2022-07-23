<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="{{ $settings->meta_keywords }}" />
	<meta name="author" content="{{ $settings->site_title }}" />
	<meta name="description" content="{{ $settings->meta_description }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_title }} - Admin Dashboard | {{ $settings->meta_description }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $settings->site_favicon }}">
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('back/vendor/datatables/css/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back/vendor/jquery-nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('back/vendor/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('back/vendor/nouislider/nouislider.min.css') }}">

	<!-- Style css -->
    <link rel="stylesheet" href="{{ asset('back/css/style.css') }}">
    @stack('css')

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="{{ route('admin.dashboard') }}" class="brand-logo">
				<img src="{{ $settings->site_logo }}" alt="" width="90">
				{{-- <div class="brand-title">
					<h2 class="">b2bexportsllc</h2>
					<span class="brand-sub-title">Admin Dashboard</span>
				</div> --}}
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							{{-- <div class="dashboard_bar">
                                Dashboard
                            </div> --}}
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"/>
										<path d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z" fill="#717579"/>
									</svg>
                                    <span class="badge light text-white bg-warning rounded-circle">0</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2022 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>


							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="{{ asset('media/default.jpg') }}" width="56" alt=""/>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="{{ route('profile') }}" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
                                    <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li>
                        <a class="" href="{{ route('admin.dashboard') }}" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>

                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Banner Mgt</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('banners.create') }}">Create Banner</a></li>
							<li><a href="{{ route('banners.index') }}">List Banner</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Facility Mgt</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('facilities.create') }}">Create Facility</a></li>
							<li><a href="{{ route('facilities.index') }}">List Facility</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Services Mgt</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('services.create') }}">Create Service</a></li>
							<li><a href="{{ route('services.index') }}">List Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Industries Mgt</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('industries.create') }}">Create Industry</a></li>
							<li><a href="{{ route('industries.index') }}">List Industry</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Contact Mail</span>
						</a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Support Ticket</span>
						</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('settings') }}" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Site Settings</span>
						</a>
                    </li>

                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © {{ Date('Y') }}</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('back/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('back/vendor/chart.js/Chart.bundle.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('back/vendor/apexchart/apexchart.js') }}"></script>

	<script src="{{ asset('back/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('back/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back/js/plugins-init/datatables.init.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('back/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('back/js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ asset('back/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('back/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('back/js/custom.min.js') }}"></script>
	<script src="{{ asset('back/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('back/js/demo.js') }}"></script>

    @stack('js')

</body>
</html>
