<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
					data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
					data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
					data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

					<!--begin::Header-->
					<div class="app-sidebar-header d-none d-lg-flex px-6 pt-8 pb-4" id="kt_app_sidebar_header">
						<!--begin::Toggle-->
						<button type="button" data-kt-element="selected"
							class="btn btn-outline btn-custom btn-flex w-100" data-kt-menu-trigger="click"
							data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
							<!--begin::Logo-->
							<span class="d-flex flex-center flex-shrink-0 w-40px me-3">
								<img alt="Logo" src="assets/media/avatars/300-20.jpg" data-kt-element="logo"
									class="h-30px" />
							</span>
							<!--end::Logo-->

							<!--begin::Info-->
							<span class="d-flex flex-column align-items-start flex-grow-1">
								<span class="fs-5 fw-bold text-white text-uppercase" data-kt-element="title">
									DASHBOARD </span>
								<span class="fs-7 fw-bold text-gray-700 lh-sm" data-kt-element="desc">
									PILKADA GK </span>
							</span>
							<!--end::Info-->

							<!--begin::Arrows-->
							<span class="d-flex flex-column me-n4">
								<i class="ki-outline ki-up fs-2 text-gray-700"></i> <i
									class="ki-outline ki-down fs-2 text-gray-700"></i> </span>
							<!--end::Arrows-->
						</button>
						<!--end::Toggle-->

						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-state-bg menu-rounded w-300px ps-3"
							data-kt-menu="true">
							<!--begin::Menu wrapper-->
							<?php include 'nav-bubble/nav-profile.php'; ?>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Header-->
					<!--begin::Navs-->
					<div class="app-sidebar-navs flex-column-fluid mx-2 py-6" id="kt_app_sidebar_navs">
						<div data-simplebar id="kt_app_sidebar_navs_wrappers" class="my-2" data-kt-scroll="true"
							data-kt-scroll-activate="true" data-kt-scroll-height="auto"
							data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer"
							data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">


							<!--begin::Quick links-->
							<div class="menu menu-rounded menu-column">
								<!--begin::Menu Item-->
								<div class="menu-item">
									<!--begin::Menu link-->
									<a href="index.php" class="menu-link">
										<!--begin::Icon-->
										<span class="menu-icon">
											<i class="ki-outline ki-notification-status fs-1"></i> </span>
										<!--end::Icon-->

										<!--begin::Title-->
										<span class="menu-title">
											Input Data </span>
										<!--end::Title-->

									</a>
									<!--end:::Menu link-->
								</div>
								<div class="menu-item">
									<!--begin::Menu link-->
									<a href="dashboard.php" class="menu-link">
										<!--begin::Icon-->
										<span class="menu-icon">
											<i class="ki-outline ki-notification-status fs-1"></i> </span>
										<!--end::Icon-->

										<!--begin::Title-->
										<span class="menu-title">
											Dashboard </span>
										<!--end::Title-->

									</a>
									<!--end:::Menu link-->
								</div>
								<!--end::Menu Item-->

							</div>
							<!--end::Quick links-->

							<!--begin::Separator-->
							<div class="separator mx-10"></div>
							<!--end::Separator-->
							<!--begin::Sidebar menu-->

							<!--begin::Separator-->
							<div class="separator mx-10"></div>
							<!--end::Separator-->
						</div>
					</div>
					<!--end::Navs-->

					<!--begin::Footer-->
					<div class="app-sidebar-footer d-flex flex-stack px-11 pb-10" id="kt_app_sidebar_footer">
						<!--begin::User menu-->
						<div class="">
							<!--begin::Menu wrapper-->
							<div class="cursor-pointer symbol symbol-circle symbol-40px"
								data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
								data-kt-menu-placement="top-start">
								<img src="assets/media/avatars/300-2.jpg" alt="image" />
							</div>


							<!--begin::User account menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
									data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">
											Mode
											<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
												<i class="ki-outline ki-night-day theme-light-show fs-2"></i> <i
													class="ki-outline ki-moon theme-dark-show fs-2"></i> </span>
										</span>
									</a>

									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
										data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
												data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-night-day fs-2"></i> </span>
												<span class="menu-title">
													Light
												</span>
											</a>
										</div>
										<!--end::Menu item-->

										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
												data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-moon fs-2"></i> </span>
												<span class="menu-title">
													Dark
												</span>
											</a>
										</div>

									</div>
									<!--end::Menu-->

								</div>

							</div>
							<!--end::User account menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::User menu-->

					</div>
					<!--end::Footer-->
				</div>