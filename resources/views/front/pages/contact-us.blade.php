@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<div class="content slide">
<div class="content-wrapper">
	

<div class="container py-5">
	<div class="col-lg-9 col-12 mx-auto card p-4">
		<form method="POST" action="{{ route('contact_store') }}">
			@csrf
		<div class="row">
		<div class="col-lg-12 col-12">
			<h4 class="text-center mb-4">Contact Us</h4>
			 @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif  
		</div>
		<div class="col-lg-6 col-12">
			<div class="form-group">
		    <label for="name">Name <span class="text-danger">*</span></label>
		    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}">
		     @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		  </div>
		</div>
		<div class="col-lg-6 col-12">
			<div class="form-group">
		    <label for="phone">Phone Number <span class="text-danger">*</span></label>
		    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
		    @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		  </div>
		</div>
		<div class="col-lg-6 col-12">
			<div class="form-group">
		    <label for="email">Email <span class="text-danger">*</span></label>
		    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}">
		    @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		</div>
		<div class="col-lg-6 col-12">
			<div class="form-group">
		    <label for="subject">Subject <span class="text-danger">*</span></label>
		    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Enter subject" value="{{ old('subject') }}">
		    @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		</div>
		<div class="col-lg-12 col-12">
			<div class="form-group">
		    <label for="message">Message <span class="text-danger">*</span></label>
		    <textarea type="text" class="form-control @error('message') is-invalid @enderror" name="message" rows="4" placeholder="Enter message" value="{{ old('message') }}">{{ old('message') }}</textarea> 
		    @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		</div>
		<div class="col-lg-12 col-12">
		  <button type="submit" class="btn text-white" style="background-color: green;">Submit</button>
		</div>
	</div>
		</form>
	</div>
</div>
</div>
</div>
@stop