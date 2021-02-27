<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name') }} | Reports</title>
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	@yield('styles')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header Mobile-->
				<div id="kt_header_mobile" class="header-mobile">
					<!--begin::Logo-->
					<a href="index.html">
						<img alt="Logo" src="assets/media/logos/logo-default.png" class="max-h-30px" />
					</a>
					<!--end::Logo-->
					<!--begin::Toolbar-->
					<div class="d-flex align-items-center">
						<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
							<span></span>
						</button>
						<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
							<span class="svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header Mobile-->
				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Left-->
						<div class="d-none d-lg-flex align-items-center mr-3">
							<!--begin::Logo-->
							<a href="index.html" class="mr-20">
								<img alt="Logo" src="assets/media/logos/logo-default.png" class="logo-default max-h-35px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Left-->
						<!--begin::Topbar-->
						<div class="topbar topbar-minimize">


							<!--begin::Quick Actions-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
									<!--begin:Header-->
									<div class="d-flex flex-column flex-center py-10 bg-dark-o-5 rounded-top bg-light">
										<h4 class="text-dark font-weight-bold">Quick Actions</h4>
										<span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
									</div>
									<!--end:Header-->
									<!--begin:Nav-->
									<div class="row row-paddingless">
										<!--begin:Item-->
										<div class="col-6">
											<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
												<span class="svg-icon svg-icon-3x svg-icon-success">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
															<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
												<span class="d-block text-dark-50 font-size-lg">eCommerce</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
												<span class="svg-icon svg-icon-3x svg-icon-success">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3" />
															<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
												<span class="d-block text-dark-50 font-size-lg">Console</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
												<span class="svg-icon svg-icon-3x svg-icon-success">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
															<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
												<span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
												<span class="svg-icon svg-icon-3x svg-icon-success">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
												<span class="d-block text-dark-50 font-size-lg">Latest cases</span>
											</a>
										</div>
										<!--end:Item-->
									</div>
									<!--end:Nav-->
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Quick Actions-->
							<!--begin::My Cart-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">
									<form>
										<!--begin::Header-->
										<div class="d-flex align-items-center py-10 px-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
											<span class="btn btn-md btn-icon bg-white-o-15 mr-4">
												<i class="flaticon2-shopping-cart-1 text-success"></i>
											</span>
											<h4 class="text-white m-0 flex-grow-1 mr-3">My Cart</h4>
											<button type="button" class="btn btn-success btn-sm">2 Items</button>
										</div>
										<!--end::Header-->
										<!--begin::Scroll-->
										<div class="scroll scroll-push" data-scroll="true" data-height="250" data-mobile-height="200">
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between p-8">
												<div class="d-flex flex-column mr-2">
													<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
													<span class="text-muted">Best kichen gadget in 2020</span>
													<div class="d-flex align-items-center mt-2">
														<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
														<span class="text-muted mr-1">for</span>
														<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
														<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
															<i class="ki ki-minus icon-xs"></i>
														</a>
														<a href="#" class="btn btn-xs btn-light-success btn-icon">
															<i class="ki ki-plus icon-xs"></i>
														</a>
													</div>
												</div>
												<a href="#" class="symbol symbol-70 flex-shrink-0">
													<img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
												</a>
											</div>
											<!--end::Item-->
											<!--begin::Separator-->
											<div class="separator separator-solid"></div>
											<!--end::Separator-->
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between p-8">
												<div class="d-flex flex-column mr-2">
													<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
													<span class="text-muted">Smart tool for cooking</span>
													<div class="d-flex align-items-center mt-2">
														<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
														<span class="text-muted mr-1">for</span>
														<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
														<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
															<i class="ki ki-minus icon-xs"></i>
														</a>
														<a href="#" class="btn btn-xs btn-light-success btn-icon">
															<i class="ki ki-plus icon-xs"></i>
														</a>
													</div>
												</div>
												<a href="#" class="symbol symbol-70 flex-shrink-0">
													<img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
												</a>
											</div>
											<!--end::Item-->
											<!--begin::Separator-->
											<div class="separator separator-solid"></div>
											<!--end::Separator-->
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between p-8">
												<div class="d-flex flex-column mr-2">
													<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
													<span class="text-muted">Professional camera for edge cutting shots</span>
													<div class="d-flex align-items-center mt-2">
														<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
														<span class="text-muted mr-1">for</span>
														<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
														<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
															<i class="ki ki-minus icon-xs"></i>
														</a>
														<a href="#" class="btn btn-xs btn-light-success btn-icon">
															<i class="ki ki-plus icon-xs"></i>
														</a>
													</div>
												</div>
												<a href="#" class="symbol symbol-70 flex-shrink-0">
													<img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
												</a>
											</div>
											<!--end::Item-->
											<!--begin::Separator-->
											<div class="separator separator-solid"></div>
											<!--end::Separator-->
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between p-8">
												<div class="d-flex flex-column mr-2">
													<a href="#" class="font-weight-bold text-dark text-hover-primary">4DPrinter</a>
													<span class="text-muted">Manufactoring unique objects</span>
													<div class="d-flex align-items-center mt-2">
														<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
														<span class="text-muted mr-1">for</span>
														<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
														<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
															<i class="ki ki-minus icon-xs"></i>
														</a>
														<a href="#" class="btn btn-xs btn-light-success btn-icon">
															<i class="ki ki-plus icon-xs"></i>
														</a>
													</div>
												</div>
												<a href="#" class="symbol symbol-70 flex-shrink-0">
													<img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
												</a>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Scroll-->
										<!--begin::Summary-->
										<div class="p-8">
											<div class="d-flex align-items-center justify-content-between mb-4">
												<span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
												<span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-7">
												<span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
												<span class="font-weight-bolder text-primary text-right">$5640.00</span>
											</div>
											<div class="text-right">
												<button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
											</div>
										</div>
										<!--end::Summary-->
									</form>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::My Cart-->
							<!--begin::User-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
									<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
									<!--begin::Header-->
									<div class="d-flex align-items-center p-8 rounded-top">
										<!--begin::Symbol-->
										<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
											<img src="assets/media/users/300_21.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Text-->
										<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">{{ Auth::user()->name }}</div>
										<span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span>
										<!--end::Text-->
									</div>
									<div class="separator separator-solid"></div>
									<!--end::Header-->
									<!--begin::Nav-->
									<div class="navi navi-spacer-x-0 pt-5">
										<!--begin::Item-->
										<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item px-8">
											<div class="navi-link">
												<div class="navi-icon mr-2">
													<i class="flaticon2-calendar-3 text-success"></i>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">My Profile</div>
													<div class="text-muted">Account settings and more
														<span class="label label-light-danger label-inline font-weight-bold">update</span>
													</div>
												</div>
											</div>
										</a>
										<!--end::Item-->
										<!--begin::Item-->
										<a href="custom/apps/user/profile-3.html" class="navi-item px-8">
											<div class="navi-link">
												<div class="navi-icon mr-2">
													<i class="flaticon2-mail text-warning"></i>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">My Messages</div>
													<div class="text-muted">Inbox and tasks</div>
												</div>
											</div>
										</a>
										<!--end::Item-->
										<!--begin::Item-->
										<a href="custom/apps/user/profile-2.html" class="navi-item px-8">
											<div class="navi-link">
												<div class="navi-icon mr-2">
													<i class="flaticon2-rocket-1 text-danger"></i>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">My Activities</div>
													<div class="text-muted">Logs and notifications</div>
												</div>
											</div>
										</a>
										<!--end::Item-->
										<!--begin::Item-->
										<a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
											<div class="navi-link">
												<div class="navi-icon mr-2">
													<i class="flaticon2-hourglass text-primary"></i>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">My Tasks</div>
													<div class="text-muted">latest tasks and projects</div>
												</div>
											</div>
										</a>
										<!--end::Item-->
										<!--begin::Footer-->
										<div class="navi-separator mt-3"></div>
										<div class="navi-footer px-8 py-5">

											<a class="btn btn-light-primary font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
											<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean font-weight-bold">Upgrade Plan</a>
										</div>
										<!--end::Footer-->
									</div>
									<!--end::Nav-->
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::User-->
						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Header Menu Wrapper-->
				<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
					<div class="container">
						<!--begin::Header Menu-->
						<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
							<!--begin::Header Nav-->
							<ul class="menu-nav">
								<li class="menu-item {{ (Request::segment(1) == 'home' )?'menu-item-here':''}}" aria-haspopup="true">
									<a href="{{route('home')}}" class="menu-link ">
										<span class="menu-text">Balance Overview</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu menu-item-rel {{ (Request::segment(1) == 'accounts' )?'menu-item-here':''}}" data-menu-toggle="click" aria-haspopup="true">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="menu-text">Account</span>
										<span class="menu-desc"></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu menu-submenu-classic menu-submenu-left">
										<ul class="menu-subnav">
											<li class="menu-item {{ (Request::segment(1) == 'wallets' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('wallets.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Wallet</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(2) == 'accounts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('accounts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Account</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(2) == 'accounts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('accounts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Transactions</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(2) == 'accounts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('accounts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Payment</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(2) == 'accounts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('accounts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Budgets</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(1) == 'categories' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('categories.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Category</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(1) == 'contacts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('contacts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Contact</span>
												</a>
											</li>
										</ul>

									</div>
								</li>
								<li class="menu-item menu-item-submenu menu-item-rel {{ (Request::segment(1) == 'accounts' )?'menu-item-here':''}}" data-menu-toggle="click" aria-haspopup="true">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="menu-text">Reports</span>
										<span class="menu-desc"></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu menu-submenu-classic menu-submenu-left">
										<ul class="menu-subnav">
											<li class="menu-item {{ (Request::segment(1) == 'wallets' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('wallets.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Wallet</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(1) == 'categories' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('categories.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Category</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(1) == 'contacts' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('contacts.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Contact</span>
												</a>
											</li>
										</ul>

									</div>
								</li>
								<li class="menu-item menu-item-submenu menu-item-rel {{ (Request::segment(1) == 'accounts' )?'menu-item-here':''}}" data-menu-toggle="click" aria-haspopup="true">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="menu-text">Settings</span>
										<span class="menu-desc"></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu menu-submenu-classic menu-submenu-left">
										<ul class="menu-subnav">
											<li class="menu-item {{ (Request::segment(1) == 'wallets' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('wallets.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Currency</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(1) == 'categories' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('categories.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Profile</span>
												</a>
											</li>
										</ul>

									</div>
								</li>
								<li class="menu-item menu-item-submenu menu-item-rel {{ (Request::segment(1) == 'access-control' )?'menu-item-here':''}}" data-menu-toggle="click" aria-haspopup="true">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="menu-text">Access Control</span>
										<span class="menu-desc"></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu menu-submenu-classic menu-submenu-left">
										<ul class="menu-subnav">
											<li class="menu-item {{ (Request::segment(2) == 'users' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('users.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Users</span>
												</a>
											</li>
											<li class="menu-item  {{ (Request::segment(2) == 'roles' )?'menu-item-here':''}}" aria-haspopup="true">
												<a href="{{route('roles.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Roles</span>
												</a>
											</li>
										</ul>

									</div>
								</li>
							</ul>
							<!--end::Header Nav-->
						</div>
						<!--end::Header Menu-->
					</div>
				</div>
				<!--end::Header Menu Wrapper-->
				<!--begin::Container-->
				<div class="d-flex flex-row flex-column-fluid container">
					<!--begin::Content Wrapper-->

					@yield('content')
					<!--begin::Content Wrapper-->
				</div>
				<!--end::Container-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">2020©</span>
							<a href="http://keenthemes.com/metronic" target="_blank" class="text-white text-hover-primary">Keenthemes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Nav-->
						<div class="nav nav-dark order-1 order-md-2">
							<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary">About</a>
							<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3 text-muted text-hover-primary">Team</a>
							<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contact</a>
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->
	<!--begin::Quick Cart-->
	<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
		<!--begin::Header-->
		<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
			<h4 class="font-weight-bold m-0">Shopping Cart</h4>
			<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
				<i class="ki ki-close icon-xs text-muted"></i>
			</a>
		</div>
		<!--end::Header-->
		<!--begin::Content-->
		<div class="offcanvas-content">
			<!--begin::Wrapper-->
			<div class="offcanvas-wrapper mb-5 scroll-pull">
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between py-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
						<span class="text-muted">The best kitchen gadget in 2020</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between py-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
						<span class="text-muted">Smart tool for cooking</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between py-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
						<span class="text-muted">Professional camera for edge cutting shots</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between py-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
						<span class="text-muted">Manufactoring unique objects</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between py-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
						<span class="text-muted">Perfect animation tool</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Purchase-->
			<div class="offcanvas-footer">
				<div class="d-flex align-items-center justify-content-between mb-4">
					<span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
					<span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
				</div>
				<div class="d-flex align-items-center justify-content-between mb-7">
					<span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
					<span class="font-weight-bolder text-primary text-right">$5640.00</span>
				</div>
				<div class="text-right">
					<button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
				</div>
			</div>
			<!--end::Purchase-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Quick Cart-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->

	<script>
		var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#8950FC",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#6993FF",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#EEE5FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#E1E9FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Vendors(used by this page)-->
	<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('assets/js/pages/widgets.js')}}"></script>
	<!--end::Page Scripts-->
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	{!! Toastr::message() !!}
	<!-- Google analytics script-->
	<script type="text/javascript">
		@if($errors->any())
		@foreach($errors-> all() as $error)
		toastr.error('{{$error}}', 'Error', {
			closeButton: true,
			progressBar: true,
		});
		@endforeach
		@endif
	</script>
	{{-- Includable JS --}}
	@yield('scripts')
</body>
<!--end::Body-->

</html>