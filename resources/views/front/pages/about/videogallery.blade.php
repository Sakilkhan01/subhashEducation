@extends('front.layouts.app') 
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/achivers.css') }}" />

<section class="innerheader">
    <div class="container">
        <h2><span>Video Gallery </span></h2>
    </div>
</section>
<section class="breadcrumbs-nav">
    <div class="container">
        <ul class="">
            <ul>
                <li><a href="https://www.matrixedu.in/">Home</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><a href="#">About us</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><span>Video Gallery </span></li>
            </ul>
        </ul>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->
<section id="content">
    <div class="content_wrapper">
        <div class="container">
            <div class="row">
                @if(!$video->isEmpty())
                    @foreach($video as $v)
                    <div class="col-xs-12 col-lg-4 col-md-8 col-sm-12 margin-top-40">
                        <embed
                            width="100%"
                            height="215"
                            src="{{ $v->youtube_link }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></embed>
                        <h5 style="min-height: 50px;">{{ $v->title }}</h5>
                    </div>
                    @endforeach
                @else
                <div class="d-flex align-items-center" style="height:40vh">
                <h4>Comming soon</h4>
                </div>
                @endif
                
                
            </div>
        </div>
    </div>
</section>
<style>
    .margin-top-40 {
        margin-top: 40px;
    }
</style>
@include('front.pages.matrix_form')
@stop