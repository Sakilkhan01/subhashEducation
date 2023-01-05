@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/questionpaper.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/courses.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/icons.css') }}">

<style>
    .course-info {
        width: 100%;
    }
    .sidebar-col {border-bottom: none;}
    .sidebar-col .form-control {
        border-radius: 0;
    }
	thead input {
        width: 100%;
    }
	#selectionDiv {
		border: 1px solid lightgray;
		padding: 1px;
		margin: 10px;
	}
</style>


<div class="inner-pages mt-35">
    <div class="container">
        <div class="row">
            <!--Right SideBar-->
            <div class="col-12 col-md-12 right-section">
                <!-- Course Block-->
                <div class="box-shadow mtb-25">
                    <div class="d-flex flex-row justify-content-start">
                        <form class="col-12" method="post">
                            <div class="course-info">
                                <div class="d-flex">
                                    <h3 class="heading sub-heading text-center m-bot-30">JEE Main Rank Predictor<span>Powered by MATRIX IT Team</span></h3>
                                </div>

                                <div class="row justify-content-md-center advantage-row">
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Category </label>
                                        <select id="" name="category" class="form-control">
                                            <option value="">Please select category</option>
                                            <option value="General">General</option>
                                            <option value="GEN-EWS">GEN-EWS</option>
                                            <option value="OBC-NCL"> OBC-NCL </option>
                                            <option value="SC">SC</option>
                                            <option value="ST"> ST </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy">JEE Main %tile <span>(Real or Expected)</span> </label>
                                        <input type="text" name="jeemainpercentile" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-request-call">Submit</button>
                            </div>
                            <input type="hidden" name="formtype" value="firstForm" />
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--//.Course Block-->
            </div>
            <!--//Right SideBar-->
        </div>
    </div>
</div>



@include('front.pages.matrix_form')
@stop