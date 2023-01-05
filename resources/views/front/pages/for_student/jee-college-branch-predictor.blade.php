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
                                    <h3 class="heading sub-heading text-center m-bot-30">College &amp; Branch Predictor - JEE 2022<span>Powered by MATRIX IT Team</span></h3>
                                </div>

                                <div class="row justify-content-md-center advantage-row">
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Category </label>
                                        <select id="" name="category" class="form-control">
                                            <option value="">Please select category</option>
                                            <option value="General">General</option>
                                            <option value="EWS">GEN-EWS</option>
                                            <!--GEN-EWS-->
                                            <option value="OBC-NCL"> OBC-NCL </option>
                                            <option value="SC">SC</option>
                                            <option value="ST"> ST </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Gender </label>
                                        <select id="" name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female"> Female </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Do you have your JEE Main Rank? </label>
                                        <select id="haveJEErank" name="doyouknowyourrank" class="form-control">
                                            <option value="yes">Yes, I have my JEE Rank</option>
                                            <option value="no"> No, I only have JEE Main %tile </option>
                                        </select>
                                    </div>
                                    <div id="haveJEErankDiv" class="form-group col-12 col-md-8">
                                        <div class="form-group col-12 col-md-6" style="padding-left: 0; float: left;">
                                            <label for="modeStudy">Category Rank in JEE Main 2022 </label>
                                            <input type="text" name="jeemainrank" class="form-control" value="" />
                                        </div>
                                        <div class="form-group col-12 col-md-6" style="float: left;">
                                            <label for="modeStudy">Category Rank in JEE Advanced 2022 </label>
                                            <input type="text" name="jeeadvancedrank" class="form-control" value="" />
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-4">
                                        <label for="modeStudy"> Your home state </label>
                                        <select id="" name="homestate" class="form-control">
                                            <option value="">Please select your home state</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana ">Telangana </option>
                                            <option value="Tripura ">Tripura </option>
                                            <option value="Uttar Pradesh ">Uttar Pradesh </option>
                                            <option value="Uttarakhand ">Uttarakhand </option>
                                            <option value="West Bengal ">West Bengal </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-request-call">Apply Filter</button>
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