@extends('layouts.adminapp')

@section('content')



    @if(session('giris'))

        <script>swal("Giriş Başarılı","Giriş Başarı ile Yapılmıştır", "success");</script>

    @endif


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Navbar-->

                <!--end::Navbar-->
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            @if($data['status']==3)
                            <h3 class="fw-bolder m-0">Blog Görüntüleme  <span class="badge badge-success">Yayınlandı</span> </h3>
                            @else
                                <h3 class="fw-bolder m-0">Blog Görüntüleme  <span class="badge badge-warning">İşleniyor</span> </h3>
                            @endif
                        </div>

                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form enctype="multipart/form-data" method="post" action="{{route('blog_view_atama_onay')}}" id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            @csrf


                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                                <!--end::Input group-->
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Blog içeriği</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                    <textarea name="content" id="kt_docs_ckeditor_classic">{{$data['gelen_makale']}}</textarea>
                                        <script>ClassicEditor
                                                .create(document.querySelector('#kt_docs_ckeditor_classic'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });</script>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">İşlemler</label>

                                    <div class="col-lg-8 fv-row">

                                        <div class="row">
                                            <div class="col">
                                                <button type="button" onclick="atama(1)" class="btn btn-success">Onayla</button>

                                            </div>
                                            <div class="col">
                                                <button type="button" onclick="atama(2)" class="btn btn-info">Tekrar Yazdır</button>

                                            </div>
                                            <div class="col">
                                                <button type="button" onclick="atama(3)" class="btn btn-danger">Detay vererek Tekrar Yazdır</button>


                                            </div>

                                        </div>
                                        <br>
                                        <br>
                                        <div class="col">
                                            <textarea name="detay" disabled id="detay" cols="30"  class="form-control" placeholder="Detay Belirtiniz..." rows="10"></textarea>


                                        </div>

                                    </div>
                                    <!--end::Col-->
                                </div>

                                <script>
                                    function atama(val){

                                        if (val==1){

                                            document.getElementById('atama_id').value=1;
                                            document.getElementById('kt_account_profile_details_submit').innerText="Onayla";
                                            document.getElementById('detay').setAttribute('disabled','disabled');



                                        }

                                        if (val==2){

                                            document.getElementById('atama_id').value=2;
                                            document.getElementById('kt_account_profile_details_submit').innerText="Tekrar Yazdır";
                                            document.getElementById('detay').setAttribute('disabled','disabled');


                                        }

                                        if (val==3){

                                            document.getElementById('atama_id').value=3;
                                            document.getElementById('kt_account_profile_details_submit').innerText="Detaylı Tekrar Yazdır";
                                            document.getElementById('detay').removeAttribute('disabled','disabled');

                                        }

                                   }
                                </script>
                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <input type="text" hidden name="makale_id" value="{{$data['id']}}">
                                <input type="text" hidden name="atama_id" id="atama_id" >
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">

                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Kaydet</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Basic info-->
                <!--begin::Sign-in Method-->

                <!--end::Deactivate Account-->
                <!--begin::Modals-->
                <!--begin::Modal - Two-factor authentication-->
                <!--end::Modal - Two-factor authentication-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
