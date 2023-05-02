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
</style>

<div class="py-5 bg-banner">
      <div class="container">
        <h1 class="mt10 font50">Photo Gallery</h1>
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
                    <li><span>Photo Galleryddd</span> </li>
                </ul>
            </ul>
        </div>
</section>
<div class="container">
  @if(!$images->isEmpty())
  <div class="gallery">
  @foreach($images as $key => $v)
    <div class="img-w"><img src="{{ asset('upload') }}/{{$v->image}}" alt="" /></div>
    @endforeach
    </div>
  </div>
  @else
  <h6>Comming soon</h6>
  @endif
@stop
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
.gallery {
  width: 100%;
  overflow: hidden;
}

.img-c {
  width: 31%;
  height: 200px;
  float: left;
  position: relative;
  overflow: hidden;
  margin:1%
}

.img-w {
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  cursor: pointer;
  transition: transform ease-in-out 300ms;
}

.img-w img {
  display: none;
}

.img-c {
  transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
}

.img-c:hover .img-w {
  transform: scale(1.08);
  transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
}

.img-c.active {
  width: 100% !important;
  height: 100% !important;
  position: absolute;
  z-index: 2;
}

.img-c.postactive {
  position: absolute;
  z-index: 2;
  pointer-events: none;
}

.img-c.active.positioned {
  left: 0 !important;
  top: 0 !important;
  transition-delay: 50ms;
}
</style>

<script>
    $(function() {
  $(".img-w").each(function() {
    $(this).wrap("<div class='img-c'></div>")
    let imgSrc = $(this).find("img").attr("src");
     $(this).css('background-image', 'url(' + imgSrc + ')');
  })
            
  
  $(".img-c").click(function() {
    let w = $(this).outerWidth()
    let h = $(this).outerHeight()
    let x = $(this).offset().left
    let y = $(this).offset().top
    
    
    $(".active").not($(this)).remove()
    let copy = $(this).clone();
    copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
    $(".active").css('top', y - 8);
    $(".active").css('left', x - 8);
    
      setTimeout(function() {
    copy.addClass("positioned")
  }, 0)
    
  }) 
  
  

  
})

$(document).on("click", ".img-c.active", function() {
  let copy = $(this)
  copy.removeClass("positioned active").addClass("postactive")
  setTimeout(function() {
    copy.remove();
  }, 500)
})
</script>