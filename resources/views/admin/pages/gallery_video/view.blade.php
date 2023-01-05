@extends('admin.layouts.header')
@section('title',__('View Gallery Video'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h4 class="page-title">View Gallery Video</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <a href="{{ route('video.index') }}" class="btn btn-primary">Back</a>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h4>{{$video->title}}</h4>
                           <div class="row">
                            <div class="col-lg-12 col-12 text-center">
                                <embed class="w-75" height="350" src="{{$video->youtube_link}}"> </embed>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>             
@stop
