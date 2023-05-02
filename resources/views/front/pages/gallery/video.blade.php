@extends('front.layouts.app')
@section('content')

<link rel="stylesheet" href="{{ url('assets/css/gallery.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style>
        .bg-banner{
                background-color: #c4faf2;
                border-bottom: 1px solid #93e1d6;
                background-image: url(../assets/images/innerbanner.png);
                background-repeat: no-repeat;
                background-size: cover;
                padding: 40px 0;
        }
        .py-5{
                padding-top:8%;
                padding-bottom:5%;
        }
        .mt10{
                margin-top:15%;
        }
        .font50{
                font-size: 33px;
                color: #002147;
                font-weight: 600;
        }
        .breadcrumbs-nav {
    border-bottom: 1px solid #e5e8ec;
    padding: 10px 0;
    font-family:Open Sans, arial;
}
.breadcrumbs-nav ul {
    display: flex;
    margin: 0px;
    padding: 0px;
    list-style: none;
    font-size: 12px;
    color: #2f7544;
}
.breadcrumbs-nav ul {
    display: flex;
    margin: 0px;
    padding: 0px;
    list-style: none;
    font-size: 12px;
    color: #2f7544;
}
.breadcrumbs-nav ul li {
    padding: 0 4px;
    display: flex;
    align-items: center;
}
.breadcrumbs-nav ul li a {
    color: #002147;
}
.breadcrumbs-nav ul li img {
    max-width: 10px;
    max-height: 10px;
    display: block;
    width: 100%;
    position: relative;
    top: 1px;
}
.mb-60 {
    margin-bottom: 60px;
}
.row {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.frontlayer{
        width: 210px;
        height: 146px;
        line-height: 146px;
}
.frontlayer img{
        width: 100%;
}
.video_body h6{
    text-transform: uppercase;
}
</style>

<div class="py-5 bg-banner">
      <div class="container">
        <h1 class="mt10 font50">Video Gallery</h1>
      </div>
</div>
<section class="breadcrumbs-nav mb-60">
        <div class="container">
            <ul class="">
                <ul>
                    <li><a href="#">Home</a> </li>
		                <li><img src="{{ asset('assets/images/right-arrow-gray.png') }}" class="right-arrow"></li>
                    <li><span class="">About us</span> </li>
                    <li><img src="{{ asset('assets/images/right-arrow-gray.png') }}" class="right-arrow"></li>
                    <li><span>Video Gallery</span> </li>
                </ul>
            </ul>
        </div>
</section>
<section class="gallery-area2">
<div class="container px-4">
<div class="row">
  @if(!$video->isEmpty())
    @foreach($video as $key => $v)
        <div class="col-lg-4 col-12 text-center mb-3 video_body">
            <iframe style="width:100%;height: 220px;" 
                src="{{$v->youtube_link}}">
                </iframe>
                <h6>{{$v->title}}</h6>
        </div>
      @endforeach
    @else
    <h6>Comming soon</h6>
    @endif
</div>
</div>
</section>
@stop
