@extends('layout.app')
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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">POS System</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <span href="" class="text-muted text-hover-primary">Home</span>
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
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                            <!--begin::Pos food-->
                            <div class="card card-flush card-p-0 bg-transparent border-0">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-8">
                                        <!--begin::Item-->
                                        {{-- <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 120px;height: 90px">
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block ">All</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::Nav link-->
                                        </li> --}}
                                        
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            @foreach ($kategori as $key => $category)
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 120px;height: 90px">
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block" data-kategori data-id="{{ $category->id }}">{{ $category->name_category }}</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            @endforeach
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_pos_food_content_1">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                    <!--begin::Card-->
                                                    @foreach ($product as $row)
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100 produk">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                                <!--begin::Food img-->
                                                            <img src="{{ $row->img_url }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">{{ $row->name_product }}</span>
                                                                    <span class="text-white"style="background-color: red; font-size: 20px;" >{{ $row->diskon }}%</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">{{ ($row->stock) }} Stock</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <div class="mb-1">
                                                                <span class="text-end fw-bold fs-1">Rp. {{ $row->price }}</span>
                                                            </div>
                                                            <!--end::Total-->
                                                        </div>
                                                            <div class="text-center">
                                                                    <button class="btn btn-primary btn-add-cart" data-id="{{ $row->id }}">Add To Cart</button>
                                                            </div>
                                                            <!--end::Body-->
                                                    </div>
                                                    @endforeach 
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Pos food-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-row-auto w-xl-425px">
                            <!--begin::Pos order-->
                            <div class="card card-flush bg-body" id="kt_pos_form">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <select  class="form-select" name="name_customers" id="name_customers" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
                                        <option value="" selected disabled hidden>-- Pilih Customer --</option>
                                        @foreach ($customer as $row)
                                            <option value="{{ $row->id }}">{{ $row->name_customers }}</option>
                                            {{-- <option value="{{ ! empty($row->id) ? $diskon : 0 }}"></option> --}}
                                        @endforeach
                                    </select>
                                    <!--begin::Table container-->
                                    <div class="table-responsive mb-8">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="w-125px"></th>
                                                    <th class="w-125px"></th>
                                                    <th class="w-60px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody id="tableCartItems">
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white">
                                            <span class="d-block lh-1 mb-2">Subtotal</span>
                                            <span class="d-block mb-2">Discounts</span>
                                            <span class="d-block fs-2qx lh-1">Total</span>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white text-end">
                                            <span class="d-block lh-1 mb-2" id="cartTotalPrice" data-cart-total="0">Rp. 0</span>
                                            <span class="d-block mb-2" id="diskon" data-cart-diskon="0" value="0">Rp. 0</span>
                                            <span class="d-block fs-2qx lh-1" id="finalPrice" data-cart-totaal="0">Rp 0</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>

                                    <form method="POST" action="{{ route('pembelian.simpan') }}">
                                        @csrf
                                        <input type="hidden" name="pembelian" id="dataPembelian" value="" />
                                        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
                                    </form>
                                    <!--end::Summary-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Pos order-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
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

    <template id="templateCart">
        <tr data-product-index data-product-count>
            <td class="pe-0">
                <div class="text-end">
                    <img src="" class="product-img w-50px h-50px rounded-3 me-3" alt="" />
                    <td class="text-center">
                    <span class="product-name fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1"></span>
                        <span class="product-total-price">0</span>
                        {{-- <span class="fw-bold text-danger" id="Cartdiskon">Diskon : 5%</span> --}}
                    </td>
                </div>
            </td>
            <td class="pe-0">
                <!--begin::Dialer-->
                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                    <!--begin::Decrease control-->
                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400 btn-product-min">
                        <i class="ki-duotone ki-minus fs-3x"></i>
                    </button>
                    <!--end::Decrease control-->
                    <!--begin::Input control-->
                    <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px input-product-count" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                    <!--end::Input control-->
                    <!--begin::Increase control-->
                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400 btn-product-add">
                        <i class="ki-duotone ki-plus fs-3x"></i>
                    </button>
                    <!--end::Increase control-->
                </div>
                <!--end::Dialer-->
            </td>
            <td>
                <button class="btn-product-delete btn btn-danger">Hapus</button>
            </td>
        </tr>
    </template>

@endsection
<script>
    let dataProduct = {{ Illuminate\Support\Js::from($product) }};
    let dataSetting = {{ Illuminate\Support\Js::from($setting) }};
    
    document.addEventListener('DOMContentLoaded', function() {
        const inputResult = document.getElementById("dataPembelian");
        const textCartTotalPrice = document.getElementById("cartTotalPrice");
        const cartWrapper = document.getElementById("tableCartItems");
        const TextDiskon = document.getElementById("diskon");
        const finalPrice = document.getElementById("finalPrice");

        const updateResult = (totalPrice,idCustomers,diskonCostumer,totalDiskon,subTotal, payment, products) => {
            const data = {
                pembelian: {
                    total_harga: totalPrice,
                    metode_bayar: payment,
                    id_customers:idCustomers,
                    diskon_customers:diskonCostumer,
                    total_diskon:totalDiskon,
                    subtotal:subTotal,
                },
                products
            };
            inputResult.value = JSON.stringify(data);
        };

        const updateTextTotalPrice = () => {
            const customers = document.getElementById("name_customers").value;

            let totalPrice = Number(textCartTotalPrice.dataset.cartTotal);
            let totalDiskon = 0;
            const products = [];

            cartWrapper.querySelectorAll("tr").forEach(trElm => {
                let productIndex = Number(trElm.dataset.productIndex);
                const currProduct = dataProduct[productIndex];

                const price = currProduct.price;
                const diskon = (currProduct.diskon !== null && currProduct.diskon!== undefined) ? Number(currProduct.diskon) : 0;
                const count = Number(trElm.dataset.productCount);

                let persetaseDiskon =(diskon / 100) * price;
                let hargaSetelahDiskon = price - persetaseDiskon;
                let productTotalPrice = price * count;
                let totalDiskonPerItem = persetaseDiskon * count;

                totalPrice += productTotalPrice;
                totalDiskon += totalDiskonPerItem;

                products.push({
                    id_product: currProduct.id,
                    jumlah_item: count,
                    diskon:diskon,
                    harga_item:price,
                    total:totalDiskonPerItem
                });
            });

            const isHaveCustomer = customers.length > 0;
            const idCustomers = isHaveCustomer  ? customers : null;

            const diskonPercentCostumers = dataSetting[0].diskon;
            let totalDiskonCostumer = 0;

            if(isHaveCustomer){
                totalDiskonCostumer = (totalPrice - totalDiskon) * (parseInt(diskonPercentCostumers)/100);
                totalDiskon = totalDiskon + totalDiskonCostumer
            }
            
            let totalHarga = totalPrice - totalDiskon ;
            
            textCartTotalPrice.innerText = "Rp" + totalPrice;
            TextDiskon.innerText = "Rp" + totalDiskon;
            finalPrice.innerText = "Rp" + totalHarga  ;

            // updateResult
            const payment = "Cash";
            updateResult(totalHarga, idCustomers,diskonPercentCostumers,totalDiskon, totalPrice, payment, products);
        };

        const handlerCartMin = btn => {
            const trElm = btn.closest("tr");
            if(!trElm)
                return;
            let index = Number(trElm.dataset.productIndex);
            const price = dataProduct[index].price;
            let count = Number(trElm.dataset.productCount);
            if(count <= 1)
                return;
            
            count--;
            trElm.dataset.productCount = count;
            trElm.querySelector(".input-product-count").value = count;
            trElm.querySelector(".product-total-price").innerText = `Rp. ${ price * count }`;
            updateTextTotalPrice();
        };

        const handlerCartAdd = btn => {
            const trElm = btn.closest("tr");
            if(!trElm)
                return;
            let index = trElm.dataset.productIndex;
            if(index == "first")
                index = 0;

            const price = dataProduct[index].price;
            let count = Number(trElm.dataset.productCount);
            if(count == dataProduct[index].stock) {
                const productName = dataProduct[index].name_product;
                const productStock = dataProduct[index].stock;
                alert(`Stock ${ productName } hanya tersedia sejumlah ${ productStock } item.`);
                return;
            }
            
            count++;
            trElm.dataset.productCount = count;
            trElm.querySelector(".input-product-count").value = count;
            trElm.querySelector(".product-total-price").innerText = `Rp. ${ price * count }`;
            updateTextTotalPrice();
        };

        // Temukan semua tombol "Add to Cart"
        const btnAddCarts = document.querySelectorAll('.btn-add-cart');

        const selectCostumers = document.getElementById("name_customers");

        selectCostumers.addEventListener("change", function() {
            updateTextTotalPrice();
        });

        // Loop melalui setiap tombol dan tambahkan event listener
        btnAddCarts.forEach(function(btn) {
            btn.addEventListener('click', function() {
                // Ambil id dari button
                const productId = this.dataset.id;

                // Cari data berdasarkan id
                const index = dataProduct.findIndex(item => item.id == productId);
                if(index < 0)
                    return;
                const currProduct = dataProduct[index];

                // Tampilkan informasi produk
                const templateCart = document.getElementById("templateCart");
                const contentNode = templateCart.content.cloneNode(true);
                
                contentNode.querySelector("img.product-img").setAttribute("src", currProduct.img_url);
                contentNode.querySelector(".product-name").innerText = currProduct.name_product;
                contentNode.querySelector(".product-total-price").innerText = "Rp. " + currProduct.price;

                contentNode.querySelector("tr").dataset.productIndex = index;
                contentNode.querySelector("tr").dataset.productCount = 1;

                contentNode.querySelector(".btn-product-min").addEventListener("click", function() {
                    handlerCartMin(this);
                });

                contentNode.querySelector(".btn-product-add").addEventListener("click", function() {
                    handlerCartAdd(this);
                });

                contentNode.querySelector(".btn-product-delete").addEventListener("click", function() {
                    const isConfirmed = confirm("Anda akan menghapus item dari cart. Lanjutkan?");
                    if(!isConfirmed)
                        return;

                    const trElm = this.closest("tr");
                    if(!trElm)
                        return;
                    trElm.querySelector(".btn-product-min").removeEventListener("click", function() {
                        handlerCartMin(this);
                    });
                    trElm.querySelector(".btn-product-add").removeEventListener("click", function() {
                        handlerCartAdd(this);
                    });
                    trElm.remove();
                    updateTextTotalPrice();
                });

                cartWrapper.appendChild(contentNode);
                updateTextTotalPrice();
            });
        });
    });
</script>
