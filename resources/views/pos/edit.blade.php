@extends('layout.app')
@section('title','Form Data Product')
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
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Form Tambah Product</h1>
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
							<li class="breadcrumb-item text-muted">eCommerce</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-400 w-5px h-2px"></span>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">Catalog</li>
							<!--end::Item-->
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page title-->
					<!--begin::Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3">
						<!--begin::Filter menu-->
						<div class="m-0">
							<!--begin::Menu toggle-->
							<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<i class="ki-duotone ki-filter fs-6 text-muted me-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>Filter</a>
							<!--end::Menu toggle-->
							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d510217861">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 text-dark fw-bold">Filter Options</div>
								</div>
								<!--end::Header-->
								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->
								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->
										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641d510217861" data-allow-clear="true">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->
										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1" />
												<span class="form-check-label">Author</span>
											</label>
											<!--end::Options-->
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked" />
												<span class="form-check-label">Customer</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Notifications:</label>
										<!--end::Label-->
										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
											<label class="form-check-label">Enabled</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1-->
						</div>
						<!--end::Filter menu-->
						<!--begin::Secondary button-->
						<!--end::Secondary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
				<div id="kt_app_content_container" class="app-container container-xxl">
					<!--begin::Form-->
					<form class="form d-flex flex-column flex-lg-row" action="/pos/{{ $pos->id }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('patch')
						<!--begin::Main column-->
						<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
							<!--begin:::Tabs-->
							<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
								<!--begin:::Tab item-->
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
								</li>
							</ul>
							<!--end:::Tabs-->
							<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab pane-->
									<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<!--begin::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>General</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Product Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="name_product" class="form-control mb-2" placeholder="Product name" value="{{ $pos->name_product }}" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div>
														<!--begin::Label-->
														<label class="form-label">Description</label>
														<!--end::Label-->
														<!--begin::Editor-->
														<textarea name="description" class="form-control mb-2"  id="description" cols="30" rows="10">{{ $pos->description }}</textarea>
														{{-- <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div> --}}
														<!--end::Editor-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set a description to the product for better visibility.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Stock</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Product Stock</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="stock" class="form-control mb-2" placeholder="Product stock" value="{{ $pos->stock }}" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>

											<!-- Start Kategori-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Category Product</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Category Product</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select class="form-select" name="id_kategori" id="id_kategori" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
															<option value="" selected disabled hidden>-- Pilih Kategori --</option>
															@foreach ($kategori as $row)
																<option value="{{ $row->id }}" {{ isset($pos) ? ($pos->id_kategori = $row->id ? 'selected' : '' ): ''}} >{{ $row->name_category }}</option>
                                                                {{-- <option value="{{ $row->id }}" {{ $kategori->id == $kategori->id ? 'selected' : '' }}>{{ $kategori->name_category }}</option> --}}
															@endforeach
														</select>
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--End Kategori-->

											<!--begin::Pricing-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Price</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Base Price</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="price" class="form-control mb-2" placeholder="Product Price" value="{{ $pos->price }}" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set the product Price.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
														<!--begin::Label-->
														<label class="form-label">Set Discount Percentage</label>
														<!--end::Label-->
														<!--begin::Slider-->
														<div class="d-flex flex-column text-center mb-5">
															<div class="d-flex align-items-start justify-content-center mb-7">
																<span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
																<span class="fw-bold fs-4 mt-1 ms-2">%</span>
															</div>
															<div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
														</div>
														<!--end::Slider-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
														<!--begin::Label-->
														<label class="form-label">Fixed Discounted Price</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price"/>
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													{{-- <!--begin::Tax-->
													
													<!--end:Tax--> --}}
												</div>
												<!--end::Card header-->
											</div>
											<!--end::Pricing-->

											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Diskon</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Diskon</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="diskon" class="form-control mb-2" placeholder="Product diskon" value="{{ $pos->diskon }}" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>

											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Upload Image</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Product Image</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="file" name="img" class="form-control mb-2" placeholder="Product Image" value="{{ $pos->img }}"/>
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
										</div>
									</div>
									<!--end::Tab pane-->
								</div>
							{{-- </form> --}}
							<!--end::Tab content-->
							<div class="d-flex justify-content-end">
								<!--begin::Button-->
								<a href="{{ route('pos.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
								<button type="submit" class="btn btn-primary">Simpan</button>								</button>
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
@section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection