@extends('admin.layouts.header')
@section('title',__('Edit Gallery Video'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Gallery Video</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <form method="post" action="{{ route('video.update', $video->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $video->title) }}" placeholder="Enter title">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Youtube Video Link <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="youtube_link" value="{{ old('youtube_link', $video->youtube_link) }}" placeholder="Enter youtube video link">
                                    @error('youtube_link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <small>You can only upload youtube video link.</small>
                                </div>
                                <div class="form-group">
                                    <label for="title">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" {{ $video->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="2" {{ $video->status == 2 ? 'selected' : '' }}>InActive</option>
                                    </select>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
