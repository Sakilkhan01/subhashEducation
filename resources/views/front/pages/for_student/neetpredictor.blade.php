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
                        <div class="course-info">
                            <div class="d-flex">
                                <h3 class="heading sub-heading text-center m-bot-30">NEET UG 2022 Rank Predictor<span>Powered by MATRIX IT Team</span></h3>
                            </div>
                            <form class="col-12" method="post">
                                <div class="row justify-content-md-center advantage-row">
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy">NEET Expected Score <span style="color: red;">*</span> </label>
                                        <input type="text" name="neetscore" class="form-control" value="" maxlength="3" />
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Name <span style="color: red;">*</span> </label>
                                        <input type="text" name="name" class="form-control" value="" />
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy">WhatsApp No <span style="color: red;">*</span> </label>
                                        <input type="text" name="mobileno" class="form-control" value="" maxlength="10" />
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy">Email <span style="color: red;">*</span> </label>
                                        <input type="text" name="email" class="form-control" value="" />
                                    </div>

                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy">Current Coaching <span style="color: red;">*</span> </label>
                                        <input type="text" name="currentcoaching" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-request-call">Submit</button>
                                </div>
                                <input type="hidden" name="formtype" value="firstForm" />
                            </form>
                        </div>
                    </div>
                    <p style="margin: 10px; padding: 15px; font-size: 13px;">
                        <strong>Disclaimer:</strong> These predictors are based on analysis of question papers, scores and ranks over last 5 years. The actual results may vary every year. Matrix will bear no responsibility if there are any
                        deviations in the actual results from what has been predicted here.
                    </p>
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