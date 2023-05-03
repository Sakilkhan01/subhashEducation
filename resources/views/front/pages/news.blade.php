@extends('front.layouts.app')
@section('content')

<link rel="stylesheet" href="{{ url('assets/css/gallery.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Poppins&display=swap" rel="stylesheet">
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
.title-default-left-bold {
    font-size: 20px;
    text-transform: capitalize;
    text-align: left;
    font-weight: 500;
    margin-bottom: 12px;
    color: #002147;
    font-family: 'Montserrat', sans-serif;
}
.news_card h5 {
    font-weight: 400;
    font-family: 'Poppins';
    margin: 0 0 20px 0;
    color: #212121;
    font-size: 14px;
    line-height: 22px;
}
.news-comments {
    padding-bottom: 10px;
}
.news-comments li {
    display: inline-block;
    margin-right: 20px;
    font-family: 'Montserrat', sans-serif;
}
.hr_line{
	border: 1px solid gray;
}
</style>
<div class="py-5 bg-banner">
      <div class="container">
        <h1 class="mt10 font50" style="font-family: revert;">News Updates</h1>
      </div>
</div>
<section class="breadcrumbs-nav">
        <div class="container">
            <ul class="">
                <ul>
                    <li><a href="#">Home</a> </li>
		                <li><img src="{{ asset('assets/images/right-arrow-gray.png') }}" class="right-arrow"></li>
                    <li><span class="">News</span> </li>
                </ul>
            </ul>
        </div>
</section> 
<section class="py-4">
	<div class="container">
        @if(!empty($news))
        <div class="row">
        @php $i =1; @endphp
        @foreach($news as $key => $v)
        <div class="col-12 col-12 news_card">
            <h2 class="title-default-left-bold">{{$v->title}}</h2>
            <h5>{{$v->description}}</h5>
            <ul class="title-bar-high news-comments">
            <li><img src="https://www.matrixedu.in/assets/default/images/newgif.gif" style="width:48px;"> {{ date("d F, Y", strtotime($v->created_at)) }}</li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> Admin</a></li>
            </ul>
        </div>
            @if($i < count($news)) 
            <div class="hr_line col-12 col-12 mb-3"></div>
            @endif

            @php $i++; @endphp
        @endforeach
       </div>
     @else
        <div class="col-12 col-12 news_card">
            <p>News not available</p>
        </div>
     @endif
    </div>
</section>
@stop