@extends('layout.app')
@section('content')
    <!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Secondary button-->
										<a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 8-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Performance Overview</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav" id="kt_chart_widget_8_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4,8%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.2%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 8-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
@endsection