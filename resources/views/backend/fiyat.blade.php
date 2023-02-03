@extends('layouts.adminapp')

@section('content')



    @if(session('giris'))

        <script>swal("Giriş Başarılı","Giriş Başarı ile Yapılmıştır", "success");</script>

    @endif




    @if(session('status_ok'))

        <script>swal("Müşteri Eklendi","Tebrikler Müşteri Başarı İle Eklendi....", "success");</script>

    @endif





    @if(session('eklendii'))

        <script>swal("Müşteri Eklendi","Tebrikler Müşteri Başarı İle Eklendi....", "success");</script>

    @endif






    @if(session('silindi'))

        <script>swal("Müşteri Silindi","Müşteri bilgileri silindi.....", "success");</script>

    @endif




    @if(session('basarili_d'))

        <script>swal("{{session('basarili_d')['name']}} Düzenlendi","Müşteri Dilgileri Düzenlendi.....", "success");</script>

    @endif




    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Panel
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        <!--end::Description--></h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <!--end::Row-->
                <!--begin::Row-->
                <!--end::Row-->
                <!--begin::Row-->
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xxl-8">
                    <!--begin::Col-->
                    <!--end::Col-->

                    <div class="row">

                        <div class="col-2"><a href="{{route('backend_fiyat')}}"><button class="btn btn-{{!isset($_GET['type']) ? "success"  : "dark"}}">304 P. Saç Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_sac")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=316_sac')}}"><button class="btn btn-{{isset($_GET['type']) ? $_GET['type']=="316_sac" ?  "success":"dark"  : "dark"}}">316 P. Saç Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"316_sac")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=430_sac')}}"><button class="btn btn-{{isset($_GET['type']) ? $_GET['type']=="430_sac" ? "success" : "dark" : "dark"}}">430 P. Saç Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"430_sac")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=309_sac')}}"><button class="btn btn-{{isset($_GET['type']) ? ($_GET['type']=="309_sac" ?"success":"dark") : "dark"}}">309 P. Saç Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"309_sac")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=310_sac')}}"><button class="btn btn-{{isset($_GET['type']) ? ($_GET['type']=="310_sac" ?"success":"dark") : "dark"}}">310 P. Saç Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"310_sac")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=304_boru')}}"><button class="btn btn-{{isset($_GET['type']) ? ($_GET['type']=="304_boru" ?"success":"dark") : "dark"}}">304 P. Boru Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_boru")->count()}})</button></a></div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-2"><a href="{{route('backend_fiyat','type=304_kare')}}"><button class="btn btn-{{isset($_GET['type']) ? ($_GET['type']=="304_kare" ?"success":"dark") : "dark"}}">304 P. Kare Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_kare")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=304_dik')}}"><button class="btn btn-{{isset($_GET['type']) ?  ($_GET['type']=="304_dik" ?"success":"dark") : "dark"}}">304 P. Dikdörtgen Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_dik")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=304_cubuk')}}"><button class="btn btn-{{isset($_GET['type']) ?  ($_GET['type']=="304_cubuk" ?"success":"dark") : "dark"}}">304 P. Çubuk Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_cubuk")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=316_cubuk')}}"><button class="btn btn-{{isset($_GET['type']) ?  ($_GET['type']=="316_cubuk" ?"success":"dark") : "dark"}}">316 P. Çubuk Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"316_cubuk")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=310_lama')}}"><button class="btn btn-{{isset($_GET['type']) ?  ($_GET['type']=="310_lama" ?"success":"dark") : "dark"}}">304 P. Lama Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"310_lama")->count()}})</button></a></div>
                        <div class="col-2"><a href="{{route('backend_fiyat','type=304_kose')}}"><button class="btn btn-{{isset($_GET['type']) ?  ($_GET['type']=="304_kose" ?"success":"dark") : "dark"}}">304 P. Köşebent Fiyat Listesi ({{\App\Models\fiyatListesi::where('type','=',"304_kose")->count()}})</button></a></div>
                    </div>

                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Tables Widget 5-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">

                                    <span class="card-label fw-bolder fs-3 mb-1">Fiyat Listesi</span>
                                </h3>
                                @if(isset($_GET['type']))
                                <a href="{{route('backend_fiyat_ekle',"type=".$_GET['type'])}}"> <button  class="btn btn-success"><span style="font-size: 25px">+ Fiyat Ekle</span> </button></a>
                                @else
                                    <a href="{{route('backend_fiyat_ekle','type=304_sac')}}"> <button  class="btn btn-success"><span style="font-size: 25px">+ Fiyat Ekle</span> </button></a>

                                @endif
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="tables2" class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 min-w-150px">KALİTE	</th>
                                                    <th class="p-0 min-w-140px">KALINLIK</th>
                                                    <th class="p-0 min-w-110px">EBAT</th>
                                                    <th class="p-0 min-w-50px">KG</th>
                                                    <th class="p-0 min-w-100px">BİRİM FİYATI	</th>
                                                    <th class="p-0 min-w-10px">PLAKA FİYATI</th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                @if(isset($_GET['type']))
                                                @foreach(\App\Models\fiyatListesi::where('type','=',$_GET['type'])->get() as $key => $value)
                                                <tr>

                                                    <td><a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['kalite']}}</a></td>
                                                    <td class=" text-muted fw-bold">{{$value['kalinlik']}}</td>
                                                    <td class=" text-muted fw-bold">{{$value['ebat']}}</td>
                                                    <td class=" text-muted fw-bold">{{$value['kg']}}</td>
                                                    <td class=" text-muted fw-bold">{{$value['birim']}}</td>
                                                    <td class=" text-muted fw-bold">{{$value['plaka']}}</td>


                                                    <td class="">
                                                        <button  onclick="sil_teklif('{{$value['id']}}}')" class="btn btn-danger"> SİL</button>
                                                        <a href="{{route('musteri_duzenle',['id'=>$value['id']])}}">  <button class="btn btn-primary"> DÜZENLE</button></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                    @foreach(\App\Models\fiyatListesi::where('type','=','304_sac')->get() as $key => $value)
                                                        <tr>

                                                            <td><a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['kalite']}}</a></td>
                                                            <td class=" text-muted fw-bold">{{$value['kalinlik']}}</td>
                                                            <td class=" text-muted fw-bold">{{$value['ebat']}}</td>
                                                            <td class=" text-muted fw-bold">{{$value['kg']}}</td>
                                                            <td class=" text-muted fw-bold">{{$value['birim']}}</td>
                                                            <td class=" text-muted fw-bold">{{$value['plaka']}}</td>


                                                            <td class="">
                                                                <button  onclick="sil_teklif('{{$value['id']}}}')" class="btn btn-danger"> SİL</button>
                                                                <a href="{{route('musteri_duzenle',['id'=>$value['id']])}}">  <button class="btn btn-primary"> DÜZENLE</button></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    @endif




                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <script >
                                                function sil_teklif(val){

                                                    swal.fire({
                                                        title: 'Silmek İstediğinize Eminmisiniz?',
                                                        showDenyButton: true,
                                                        confirmButtonText: `Sil`,
                                                        denyButtonText: `İptal Et`,
                                                    }).then((result) => {
                                                        /* Read more about isConfirmed, isDenied below */
                                                        if (result.isConfirmed) {

                                                            var url = "{{ route('musteri_sil', ':id') }}";
                                                            url = url.replace(':id', val);
                                                            location.href = url;

                                                        } else if (result.isDenied) {
                                                            swal.fire('Silinmedi...', '', 'info')
                                                        }
                                                    })

                                                }

                                                $(document).ready(function () {
                                                    $('#tables2').DataTable();
                                                });
                                            </script>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">React, HTML</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                        <span class="text-muted fw-bold d-block">Most Successful</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                                        <span class="text-muted fw-bold d-block">Best Customers</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
                                                        <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-primary">Success</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                        <span class="text-muted fw-bold d-block">Most Successful</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tables Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
