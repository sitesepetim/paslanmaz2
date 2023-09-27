<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="tr">
<!--begin::Head-->
<head><base href="">
    <title>Huzey Metal Panel</title>
    <meta name="description" content="Huzey Metal Panel" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ASAF SİGORTA POLİÇE TAKİP SİSTEMİ" />
    <meta property="og:url" content="http://sitesepetim.com/" />
    <meta property="og:site_name" content="Site Sepetim" />
{{--    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />--}}
    <link rel="shortcut icon" href="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" />

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="{{route('index')}}">
                    <img alt="Logo" src="https://sitesepetim.com/wp-content/uploads/2021/05/site-sepetim-1024x1024-2-e1622382620502.png" class="h-35px logo" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                    <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Panel</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{request()->is('admin') ? "active" : ""}} " href="{{route('admin')}}">
										<span class="menu-icon">
											<i class="bi bi-grid fs-3"></i>
										</span>
                                <span class="menu-title">Panel</span>
                            </a>
                        </div>


                        <div  {{\Illuminate\Support\Facades\Auth::user()->role==1 ? "":"hidden"}} data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<span class="menu-link {{request()->is('admin/musteri*') ? "active" : ""}}">
										<span class="menu-icon">
											<i class="bi bi-person fs-2"></i>
										</span>
										<span class="menu-title">Müşteriler</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/musteri/ekle') ? "btn-secondary" : ""}}" href="{{route('admin.musteri_ekle')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Müşteri Ekle</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/musteri') ? "btn-secondary" : ""}}" href="{{route('admin.musteri')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Müşteri Listesi</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<span class="menu-link  {{request()->is('admin/blog*') ? "active" : "" || request()->is('admin/kategori') ? "active" : "" || request()->is('admin/etiket') ? "active" : "" || request()->is('admin/spin') ? "active" : "" }}">
										<span class="menu-icon">
											<i class="bi bi-person fs-2"></i>
										</span>
										<span class="menu-title">Blog</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link  {{request()->is('admin/blog/ekle') ? "btn-secondary" : ""}}" href="{{route('admin.blog.create')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Blog Ekle</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link  {{request()->is('admin/blog/ai/ekle') ? "btn-secondary" : ""}}" href="{{route('admin.blog.ai')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Yapay Zeka Blog Ekle</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/blog') ? "btn-secondary" : ""}}" href="{{route('admin.blog.ai')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Blog Listesi</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/spin') ? "btn-secondary" : ""}}" href="{{route('admin_spin')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Spin Listesi</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/kategori*') ? "btn-secondary" : ""}}" href="{{route('admin.categories')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Kategoriler</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/etiket') ? "btn-secondary" : ""}}" href="{{route('admin.tags')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Etiketler</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div {{\Illuminate\Support\Facades\Auth::user()->role==1 ? "":"hidden"}} data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<span class="menu-link {{request()->is('admin/index') ? "active" : ""}}">
										<span class="menu-icon">
											<i class="bi bi-person fs-2"></i>
										</span>
										<span class="menu-title">İndex</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">

                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/index') ? "btn-secondary" : ""}}" href="{{route('admin.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">İndex Linkleri</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div  data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<span class="menu-link {{request()->is('admin/teksms') ? "active" : ""}}">
										<span class="menu-icon">
											<i class="bi bi-person fs-2"></i>
										</span>
										<span class="menu-title">Fiyat Listesi</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">

                                <div class="menu-item">
                                    <a class="menu-link {{request()->is('admin/teksms') ? "btn-secondary" : ""}}" href="{{route('backend_fiyat')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Fiyat Listesi</span>
                                    </a>
                                </div>

                            </div>
                        </div>




                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                            <i class="bi bi-list fs-1"></i>
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="../../demo13/dist/index.html" class="d-lg-none">
                            <img alt="Logo" src="assets/media/logos/logo-demo13-compact.svg" class="h-25px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                <!--begin::Menu-->
                                <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                    <div class="menu-item me-lg-1">
                                        <a class="menu-link active py-3" href="{{route('admin')}}">
                                            <span class="menu-title">Panel</span>
                                        </a>
                                    </div>


                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Toolbar wrapper-->
                            <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Search-->

                                <!--end::Notifications-->
                                <!--begin::User-->
                                <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                        <img src="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" alt="metronic" />
                                    </div>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="https://sitesepetim.com/wp-content/uploads/2021/06/fav.png" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">{{\Illuminate\Support\Facades\Auth::user()->name}}
                                                      </div>
                                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div hidden class="menu-item px-5">
                                            <a href="../../demo13/dist/pages/projects/list.html" class="menu-link px-5">
                                                <span class="menu-text">Hesabım</span>

                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="{{route('cikis.yap')}}" class="menu-link px-5">Çıkış Yap</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User -->
                                <!--begin::Heaeder menu toggle-->
                                <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
                                    <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                                        <i class="bi bi-text-left fs-1"></i>
                                    </div>
                                </div>
                                <!--end::Heaeder menu toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
             @yield('content')
            <!--end::Content-->
            <!--begin::Footer-->

            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->

<!--end::Scrolltop-->
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Javascript-->
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/modals/upgrade-plan.js')}}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
