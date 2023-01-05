@extends('front.layouts.app') 
@section('content')

        <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}" />
        <style type="text/css">
            /* this demo specifc styles */
            .imgContainer {
                width: 100px;
                height: 100px;
                overflow: hidden;
                text-align: center;
                margin: 10px 20px 10px 0;
                float: left;
                border: solid 1px #999;
                display: block;
            }
            .imgContainer:hover {
                border-bottom: solid 1px #444;
                border-left: solid 1px #444;
                -webkit-box-shadow: -3px 3px 10px 1px #777;
                -moz-box-shadow: -3px 3px 10px 1px #777;
                box-shadow: -3px 3px 10px 1px #777;
                margin: 9px 19px 11px 1px;
            }
            #galleryTab {
                margin: 40px 0px 94px 0px;
                /* top: 133px; */
                width: 100%;
            }
            .galleryWrap {
                padding: 0px 0 128px;
            }
          

            #gallery {
                position: relative;
                top: 0;
                bottom: 0;
                left: 12%;
                right: 0%;
                margin: auto;
            }

            @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
                #gallery {
                    position: relative;
                    top: 0;
                    bottom: 0;
                    left: 3%;
                    right: 0%;
                    margin: auto;
                }
            }

            @media only screen and (min-device-width: 370px) and (max-device-width: 375px) {
                #gallery {
                    position: relative;
                    top: 0;
                    bottom: 0;
                    left: 10%;
                    right: 0%;
                    margin: auto;
                }
            }
            .frontlayer img{
                width:100%;
                height:100%;
            }

            
/*Carousel Gallery*/
.carousel-gallery {
  margin: 50px 0;
  padding: 0 30px;
}
.carousel-gallery .swiper-slide a {
  display: block;
  width: 100%;
  height: 200px;
  border-radius: 4px;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
}
.carousel-gallery .swiper-slide a:hover .image .overlay {
  opacity: 1;
}
.image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
}
.image .overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(20, 20, 20, 0.8);
  text-align: center;
  opacity: 0;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.image .overlay em {
  color: #fff;
  font-size: 26px;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: inline-block;
}
.carousel-gallery .swiper-pagination {
  position: relative;
  bottom: auto;
  text-align: center;
  margin-top: 25px;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet {
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet:hover {
  opacity: 0.7;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #d63031;
  transform: scale(1.1, 1.1);
}

/*# Carousel Gallery*/
.plugins {
  text-align: center;
}
.plugins h3 {
  text-align: center;
  margin: 0;
  padding: 0;
  font-family: Arial;
  text-transform: uppercase;
  color: #111;
}
.plugins a {
  display: inline-block;
  font-family: Arial;
  color: #777;
  font-size: 14px;
  margin: 10px;
  transition: all 0.2s linear;
}
.plugins a:hover {
  color: #d63031;
}
        </style>
        <section class="innerheader">
            <div class="container">
                <h2><span>Photo Gallery</span></h2>
            </div>
        </section>
        <section class="breadcrumbs-nav mb-60">
            <div class="container">
                <ul class="">
                    <ul>
                        <li><a href="https://www.matrixedu.in/">Home</a></li>
                        <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                        <li><a href="#">About us</a></li>
                        <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                        <li><span>Photo Gallery</span></li>
                    </ul>
                </ul>
            </div>
        </section>
        <div class="gallery-area2">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
                        <div id="" class="photo-gallery-page">
                            @if(!empty($images))
                            @foreach($images[0]['gallery'] as $item)
                                <a href="{{asset('upload')}}/{{$item->image}}?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
                                <div class="image" style="background-image: url({{asset('upload')}}/{{$item->image}}?auto=compress&cs=tinysrgb&dpr=1&w=500)">
                                    <div class="overlay">
                                    <em class="mdi mdi-magnify-plus"></em>
                                    </div>
                                </div>
                                </a>
                            @endforeach
                            @else
                            <div class="py-5">
                            <h4>Comming soon</h4>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
        <!--wrap-->

       
        @include('front.pages.matrix_form')
@stop