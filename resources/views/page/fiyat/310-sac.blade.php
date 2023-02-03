@extends('page.fiyat.layouts')

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>310 PASLANMAZ SAC FIYATLARI</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('fiyat_listesi')}}">FİYAT LİSTESİ</a></li>
                        <li>310 PASLANMAZ SAC FIYATLARI</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="image mb-40"><img src="{{asset('assets/images/resource/project-7.jpg')}}" alt=""></div>
            <div class="row">
                @include('page.fiyat.sidebar')
                <div class="col-lg-9">
                    <h2>310 Paslanmaz Sac Fiyatları</h2>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">KALİTE</th>
                            <th scope="col">KALINLIK</th>
                            <th scope="col">EBAT</th>
                            <th scope="col">KG</th>
                            <th scope="col">BİRİM FİYATI </th>
                            <th scope="col">PLAKA FİYATI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<\App\Models\fiyatListesi::where('type','=',"310_sac")->count();$i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['kalite']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['kalinlik']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['ebat']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['kg']}}</td>
                            <td>${{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['birim']}}</td>
                            <td>${{\App\Models\fiyatListesi::where('type','=',"310_sac")->get()[$i]['plaka']}}</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection
