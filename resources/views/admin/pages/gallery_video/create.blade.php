@extends('admin.layouts.header')
@section('title',__('Add Video'))
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">

<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Video</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                
                           <form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Youtube Video Link <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="youtube_link" value="{{ old('youtube_link') }}" placeholder="Enter youtube video link">
                                    @error('youtube_link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <small>You can only upload youtube video link.</small>
                                </div>
                                <div class="form-group">
                                    <label for="title">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>InActive</option>
                                    </select>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop
