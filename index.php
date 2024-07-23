<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>PILKADA GK</title>
	<meta charset="utf-8" />
	<meta name="description" content="
			The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
			Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
			Grab your copy now and get life-time updates for free.
		" />
	<meta name="keywords" content="
			metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
			Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
			free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
			bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
		" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="
			Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
			Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
		" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />
	<!--end::Fonts-->

	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->


	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<style>
		/* * {
			scrollbar-width: none !important;
		} */
	</style>
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
		if (window.top != window.self) {
			window.top.location.replace(window.self.location.href);
		}
	</script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true"
	data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true"
	data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;

		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}

			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}

			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--Begin::Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!--End::Google Tag Manager (noscript) -->


	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


			<!--begin::Header-->
			<div id="kt_app_header" class="app-header " data-kt-sticky="true"
				data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
				data-kt-sticky-offset="{default: false, lg: '300px'}">

				<!--begin::Header container-->
				<div class="app-container  container-fluid d-flex flex-stack " id="kt_app_header_container">
					<!--begin::Sidebar toggle-->
					<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2"
							id="kt_app_sidebar_mobile_toggle">
							<i class="ki-outline ki-abstract-14 fs-2"></i>
						</div>

						<!--begin::Logo image-->
						<a href="index.php">
							<img alt="Logo" src="assets/media/logos/default-small.svg"
								class="h-30px theme-light-show" />
							<img alt="Logo" src="assets/media/logos/default-small-dark.svg"
								class="h-30px theme-dark-show" />
						</a>
						<!--end::Logo image-->
					</div>
					<!--end::Sidebar toggle-->

					<!--begin::Header wrapper-->
					<div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">

						<!--begin::Page title-->
						<div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="1"
							data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
							data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">

							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">

								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
									<a href="index.php" class="text-gray-700 text-hover-primary me-1">
										<i class="ki-outline ki-home text-gray-700 fs-6"></i> </a>
								</li>
								<!--end::Item-->

								<!--begin::Item-->
								<li class="breadcrumb-item">
									<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
								</li>
								<!--end::Item-->


								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
									Input Data </li>
								<!--end::Item-->

								<!--begin::Item-->
								<li class="breadcrumb-item">
									<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
								</li>
								<!--end::Item-->


								<!--end::Title-->
						</div>
						<!--end::Page title-->
					</div>
					<!--end::Header wrapper-->
				</div>
				<!--end::Header container-->
			</div>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

				<!--begin::Sidebar-->
				<?php include "nav-bubble/sidebar.php" ?>
				<!--end::Sidebar-->
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<?php include "content/input-user.php" ?>
					<!--end::Content wrapper-->

					<!--begin::Footer-->
					<div id="kt_app_footer" class="app-footer ">
						<!--begin::Footer container-->
						<div
							class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2024&copy;</span>
								<a href="https://keenthemes.com/" target="_blank"
									class="text-gray-800 text-hover-primary">uzanlatif</a>
							</div>
							<!--end::Copyright-->

						</div>
						<!--end::Footer container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "";
	</script>

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->

	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
	<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->

	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
	<script src="assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->

</body>
<!--end::Body-->

</html>