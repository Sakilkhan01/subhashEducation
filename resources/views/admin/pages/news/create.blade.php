@extends('admin.layouts.header')
@section('title',__('Add News'))
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">

<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add News</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div>
                                @if($message = Session::get('success'))
                                  <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>    
                                    <strong>{{ $message }}</strong>
                                </div>
                                 @endif
                                 @if($message = Session::get('error'))
                                  <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>    
                                    <strong>{{ $message }}</strong>
                                </div>
                                 @endif
                            </div>
                           <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}" placeholder="Enter description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
