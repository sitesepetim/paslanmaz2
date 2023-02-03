@extends('layouts.adminapp')

@section('content')



    @if(session('giris'))

        <script>swal("Giriş Başarılı","Giriş Başarı ile Yapılmıştır", "success");</script>

    @endif




    @if(session('status_ok'))

        <script>swal("Müşteri Eklendi","Tebrikler Müşteri Başarı İle Eklendi....", "success");</script>

    @endif


    @if(session('kategories'))

        <script>swal("Kategori Eklendi","Tebrikler Kategori Başarı İle Eklendi....", "success");</script>

    @endif


    @if(session('kategories_edit'))

        <script>swal("Kategori Düzenlendi","Tebrikler Kategori Başarı İle Güncellendi....", "success");</script>

    @endif

    @if(session('kategories_delete'))

        <script>swal("Kategori Silindi","Kategori Başarı İle Silindi....", "success");</script>

    @endif


    @if(session('successtype1'))

        <script>swal("Sms Gönderildi","Müşteriye Sms Gönderildi....", "success");</script>

    @endif

    @if(session('successtype2'))

        <script>swal("Sms Gönderildi","Özel Numaraya Sms Gönderildi....", "success");</script>

    @endif

    @if(session('successtype3'))

        <script>swal("Sms Gönderildi","Müşterilere Toplu Sms Gönderildi....", "success");</script>

    @endif




    <div class="content d-flex flex-column flex-column-fluid" id="app">
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
                    <div hidden id="ekleme" class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->

                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">Sms Gönder</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Müşteriye SMS Gönder</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Özel SMS Gönder</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Toplu Sms Gönder</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div id="kt_account_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form method="post" action="{{route('smstek_Store')}}" id="kt_account_profile_details_form" class="form">
                                        <!--begin::Card body-->
                                        @csrf
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Müşteri Seçimi</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <select name="user_id" class="form-select" id="">
                                                            @foreach(\App\Models\musteri::all() as $key=> $value)
                                                                <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <input type="text" name="type" value="1" hidden>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row ">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Mesaj <span style="color: #c20000">(not: maks 155 karakter sms gönderebilirsiniz.)</span></label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <textarea  v-on:change="changes" v-model="message" :value="message" name="mesaj" id="" cols="30" class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div id="mesaj_sayar">@{{this.message.length}} / 155</div>


                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button v-if="this.submit"  type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Gönder</button>
                                            <button v-if="!this.submit" disabled title="" type="submit" class="btn btn-danger" id="kt_account_profile_details_submit">Mesaj Metni 0 veya 155 olamaz</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div id="kt_account_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form method="post" action="{{route('smstek_Store')}}" id="kt_account_profile_details_form" class="form">
                                        <!--begin::Card body-->
                                        @csrf
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Telefon Numarası</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" class="form-control"  name="number">
                                                        </div>

                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row ">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Mesaj <span style="color: #c20000">(not: maks 155 karakter sms gönderebilirsiniz.)</span></label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <input type="text" name="type" value="2" hidden>
                                                        <div class="col-lg-12 fv-row">
                                                            <textarea  v-on:change="changes" v-model="message" :value="message" name="mesaj" id="" cols="30" class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div id="mesaj_sayar">@{{this.message.length}} / 155</div>


                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button v-if="this.submit"  type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Gönder</button>
                                            <button v-if="!this.submit" disabled title="" type="submit" class="btn btn-danger" id="kt_account_profile_details_submit">Mesaj Metni 0 veya 155 olamaz</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div id="kt_account_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form method="post" action="{{route('smstek_Store')}}" id="kt_account_profile_details_form" class="form">
                                        <!--begin::Card body-->
                                        @csrf
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <input type="text" name="type" value="3" hidden>

                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Müşteri Seçimi</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <select multiple name="user_id[]" class="form-select" id="">
                                                                @foreach(\App\Models\musteri::all() as $key=> $value)
                                                                    <option value="{{$value['id']}}">{{$value['name'] . $value['']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row ">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Mesaj <span style="color: #c20000">(not: maks 155 karakter sms gönderebilirsiniz.)</span></label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <textarea  v-on:change="changes" v-model="message" :value="message" name="mesaj" id="" cols="30" class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div id="mesaj_sayar">@{{this.message.length}} / 155</div>


                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->

                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button v-if="this.submit"  type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Gönder</button>
                                            <button v-if="!this.submit" disabled title="" type="submit" class="btn btn-danger" id="kt_account_profile_details_submit">Mesaj Metni 0 veya 155 olamaz</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                        </div>
                        <!--begin::Content-->

                        <!--end::Content-->
                    </div>

                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Tables Widget 5-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Sms Listesi</span>
                                </h3>
                             <button id="kategori"  onclick="categories_show()" class="btn btn-success"><span style="font-size: 25px">+ Sms Gönder</span> </button>
                             <button  hidden id="gizleme" onclick="categories_hide()" class="btn btn-danger"><span style="font-size: 25px">- Gizle</span> </button>

                                <script>

                                    function categories_show(){
                                        document.getElementById('ekleme').removeAttribute('hidden','hidden');
                                        document.getElementById('gizleme').removeAttribute('hidden','hidden');
                                        document.getElementById('kategori').setAttribute('hidden','hidden');
                                    }

                                    function categories_hide(){
                                        document.getElementById('ekleme').setAttribute('hidden','hidden');
                                        document.getElementById('gizleme').setAttribute('hidden','hidden');
                                        document.getElementById('kategori').removeAttribute('hidden','hidden');

                                    }
                                </script>
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


                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Müşteriye Gönderilen Mesajlar</button>
                                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Özel Numaraya Gönderilen Mesajlar</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Toplu Gönderilen Mesajlar</button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <br>
                                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <tr class="border-0">
                                                            <th class="p-0 min-w-150px">Telefon Numarası</th>
                                                            <th class="p-0 min-w-350px">Mesaj</th>
                                                            <th class="p-0 min-w-100px">Kişi</th>
                                                            <th class="p-0 min-w-100px">Tarih</th>

                                                            <th class="p-0 min-w-50px"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>

                                                        @foreach(\App\Models\smsmSend::where('type','=',1)->orderBy("id",'desc')->get() as $key => $value)
                                                            <tr>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['number']}}</a>

                                                                </td>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['text']}}</a>

                                                                </td>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{\App\Models\musteri::where('id','=',$value['user_id'])->get()[0]['name']}}</a>

                                                                </td>


                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['created_at']}}</a>

                                                                </td>






                                                            </tr>
                                                        @endforeach


                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table> </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <br>
                                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <tr class="border-0">
                                                            <th class="p-0 min-w-250px">Telefon Numarası</th>
                                                            <th class="p-0 min-w-350px">Mesaj</th>
                                                            <th class="p-0 min-w-350px">Tarih</th>

                                                            <th class="p-0 min-w-50px"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>

                                                        @foreach(\App\Models\smsmSend::where('type','=',2)->orderBy("id",'desc')->get() as $key => $value)
                                                            <tr>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['number']}}</a>

                                                                </td>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['text']}}</a>

                                                                </td>


                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['created_at']}}</a>

                                                                </td>








                                                            </tr>
                                                        @endforeach


                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table></div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> <br>
                                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <tr class="border-0">
                                                            <th class="p-0 min-w-150px">Telefon Numarası</th>
                                                            <th class="p-0 min-w-350px">Mesaj</th>
                                                            <th class="p-0 min-w-100px">Kişi</th>
                                                            <th class="p-0 min-w-100px">Tarih</th>

                                                            <th class="p-0 min-w-50px"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>

                                                        @foreach(\App\Models\smsmSend::where('type','=',3)->orderBy("id",'desc')->get() as $key => $value)
                                                            <tr>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['number']}}</a>

                                                                </td>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['text']}}</a>

                                                                </td>

                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{\App\Models\musteri::where('id','=',$value['user_id'])->get()[0]['name']}}</a>

                                                                </td>


                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$value['created_at']}}</a>

                                                                </td>





                                                            </tr>
                                                        @endforeach


                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table></div>
                                            </div>
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

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>




    <script>
        const { createApp } = Vue

        createApp({
            data() {
                return {
                    message: '',
                    message2: "",
                    submit: false
                }
            },
            methods: {
                changes(){


                }
            },
            watch: {
                message: function(val) {
                    //do something when the data changes.

                    if (val.length>155 || val.length<1){
                        this.submit=false;

                    }else {
                        this.submit=true;

                    }

                }
            }

        }).mount('#app')
    </script>
@endsection
