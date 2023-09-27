@extends('page.hizmetler.layouts')

@section('title')
    {{$data['title']}} |  Huzey Metal
@endsection

@section('desc')
    {{$data['meta_desc']}}@endsection

@section('content')

    <section class="page-title" style="background-image: url({{asset('public/'.$data['image_path'])}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1> {{$data['title']}}</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li> {{$data['title']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">

                <div class="col-lg-12">
                    <h2>{{$data['title']}}</h2>
{{--                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK DİLME.jpeg')}}" alt="PASLANMAZ ÇELİK DİLME"></div>--}}

                    <div class="text"> {!! html_entity_decode($data['content']) !!}
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
