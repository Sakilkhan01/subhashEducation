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
                            @foreach($images as $item)
                            <div class="photoalbum">
                                <a href="{{ url('gallery',$item->slug) }}">
                                    <div>
                                        <div class="frontlayer" style="width: 210px; height: 146px; line-height: 146px;">
                                            <img src="{{asset('upload')}}/{{$item['getImages']->image}}" alt="{{strtoupper($item->title)}}" title="{{strtoupper($item->title)}}" />
                                        </div>

                                        <div class="midlelayer" style="width: 210px; height: 146px;"></div>

                                        <div class="bottomlayer" style="width: 210px; height: 146px;"></div>
                                    </div>
                                </a>
                                <a href="{{ url('gallery',$item->slug) }}"><div class="albumheading">{{$item->title}} ({{$item->get_images_count}})</div></a>
                            </div>
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