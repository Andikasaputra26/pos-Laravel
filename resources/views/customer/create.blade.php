@extends('layout.app');
@section('content')
    <!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Form Add Customers</h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
				</div>
				<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-xxl">
					<!--begin::Form-->
					<form class="form d-flex flex-column flex-lg-row" action="{{ route('customer.simpan') }}" method="post">
						@csrf
						<!--begin::Main column-->
						<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
							<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab pane-->
									<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<!--begin::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Name Customers</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="name_customers" class="form-control mb-2" placeholder="name customers" value="{{ old('name_customers') }}" required />
														<!--end::Input-->

														<!--begin::Label-->
														<label class="required form-label mt-4">Email</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="email" name="email" class="form-control mb-2" placeholder="email" value="{{ old('email') }}" required />
														<!--end::Input-->

                                                        <!--begin::Label-->
														<label class="required form-label mt-4">Telephone</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="number" name="telephone" class="form-control mb-2" placeholder="telephone" value="{{ old('telephone') }}" required />
														<!--end::Input-->

                                                        <!--begin::Label-->
														<label class="required form-label mt-4">Addrress</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="address" class="form-control mb-2" placeholder="address" value="{{ old('address') }}" required />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::General options-->
										</div>
									</div>
									<!--end::Tab pane-->
								</div>
							{{-- </form> --}}
							<!--end::Tab content-->
							<div class="d-flex justify-content-end">
								<!--begin::Button-->
								<a href="{{ route('customer') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
								<button type="submit" class="btn btn-primary">Simpan</button>								
								<!--end::Button-->
							</div>
						</div>
						<!--end::Main column-->
					</form>
					<!--end::Form-->
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