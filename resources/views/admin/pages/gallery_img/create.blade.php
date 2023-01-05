@extends('admin.layouts.header')
@section('title',__('Add Image'))
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">

<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Image</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           
                           <form method="post" action="{{ route('image.upload') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="title">Images <span class="text-danger">*</span></label>
                                <div class="input-group control-group img_div form-group" >
                                    <input type="file" name="image[]" class="form-control">
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-success btn-add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                </div>
                                <div class="clone hide " style="display: none;">
                                    <div class="control-group input-group form-group" style="margin-top:10px">
                                    <input type="file" name="image[]" class="form-control">
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-danger btn-remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                    </div>
                                </div>
                                <small>You can only upload (.jpeg,.jpg,.png,.gif) files.</small>
                                </div>
                                @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
@stop
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-add-more").click(function(){ 
          var html = $(".clone").html();
          $(".img_div").after(html);
      });
      $("body").on("click",".btn-remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>