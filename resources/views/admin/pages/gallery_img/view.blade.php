@extends('admin.layouts.header')
@section('title',__('View Gallery Image'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Gallery Image</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <div class="d-flex justify-content-between mb-3">
                                <div>
                                     <h3 class="box-title">{{ $images[0]['title'] }}</h3>
                                </div>
                                <div>
                                    <a href="{{ route('image.index') }}" class="btn btn-primary">Back</a>
                                </div>
                           </div>
                           <div class="row">
                        @if(!empty($images))
                            @foreach($images[0]['gallery'] as $item)
                                <div class="col-lg-2 col-3">
                                    <div class="img-view">
                                        <img class="img-fluid" src="{{ asset('upload') }}/{{ $item['image'] }}">
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="col-lg-12 col-12">
                                    <p>No record found</p>
                                </div>
                        @endif
                                
                           </div>
                        </div>
                    </div>
                </div>
            </div>
           
@stop
<style>
    .img-view{
        width:100%;
        height:80px;
    }
    .img-view img{
        width:100%;
        height:100%;
    }
</style>