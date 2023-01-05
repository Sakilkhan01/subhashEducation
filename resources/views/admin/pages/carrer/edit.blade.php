@extends('admin.layouts.header')
	@section('title',__('Edit Client'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Client
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Edit Client</h3>
            </div>
            <form method="post" action="{{ route('carrer.update', $client->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Title :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Name" name="name" value="{{ old('name',$client->name) }}">
                </div>                             
                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Image :</label><strong class="error">*</strong><br>
                  @if(!empty($client->logo))
                  <img id="preview_img" src="{{ url('upload/client/'.$client->logo) }}" class="" width="200" height="150"/>
                  @else
                  <img id="preview_img" src="{{ url('images/profile.png') }}" class="" width="200" height="150"/>
                  @endif
                  <input type="hidden" name="prelogo" value="{{ $client->logo }}" />
                  <input type="file" name="image" id="image" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
                </div> 
                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label>Status :</label><strong class="error">*</strong>
                  <select class="form-control" name="status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('status',$client->status)==1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status',$client->status)==0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-info" type="submit">Update</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
  </div>
	@endsection
  