@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/courses.css') }}">   
<style>
.sidebar-col {border-bottom: none;}
.sidebar-col .form-control {
    border-radius: 0;
}
</style>
<div class="inner-pages mt-35">   
    <div class="container"> 
        <div class="row"> 
        <!--Right SideBar-->
        <div class="col-12 col-md-12 right-section"  > 
            <!-- Course Block--> 
            <div class="box-shadow mtb-25"> 
                <div class="d-flex flex-row justify-content-start"> 
					<form method="post" name="filtercourse" action="" class="col-12">
                    <div>  
                        <div class="d-flex">
                            <h3 class="heading text-center m-bot-30">Filter your courses</h3>   
                        </div>                        
			<div class="row justify-content-md-center advantage-row">   
                       <div class="col-12 col-md-4">   
                <div class="sidebar-col">  
                    <h4 class="sidebar-subheading">  Stream </h4>  
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="stream" value="engineering" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1"> Engineering </label>
                    </div>
                    <div class="clearfix"> </div> 
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="stream" value="medical" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3"> Medical </label>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="stream" value="prefoundation" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2"> Pre-foundation </label>
                    </div> 
                    	
             </div> 
            </div>
            <div class="col-12 col-md-4">   
                <div class="sidebar-col">  
                    <h4 class="sidebar-subheading">  Mode of Study </h4>  
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="modeStudy" name="modeofstudy" value="classroom" class="custom-control-input">
                        <label class="custom-control-label" for="modeStudy"> Classroom </label>
                    </div>
                    <div class="clearfix"> </div> 
                                        	
             </div>
            </div>
            <div class="col-12 col-md-4">   
                <div class="sidebar-col">  
                    <h4 class="sidebar-subheading">  Your Class </h4>  
                    <div class="form-group"> 
                        <select id="" name="studentclass" class="form-control">
						  <option value="">Class</option>
						  <option value="5"> 5th </option>
						  <option value="6"> 6th </option>
						  <option value="7"> 7th </option>
						  <option value="8"> 8th </option>
						  <option value="9"> 9th </option>
						  <option value="10"> 10th </option>
						  <option value="11"> 11th </option>
						  <option value="12"> 12th </option>
						  <option value="13"> 12th Pass </option>
						</select>
                    </div>
             </div>
            </div>
 			</div> 
                    </div>
                    <div class="col-12 text-center">
					<button type="submit" class="btn btn-request-call">Apply Filter</button>  </div>
             
              </form> 
                </div>                
                <div class="clearfix"> </div>
            </div>
            <!--//.Course Block--> 
        </div>
        <!--//Right SideBar-->
 
        </div>
    </div>   
 
</div>
<style>
	.class_filter_no_data {
		font-size: 16px;
		text-align: center;
		margin: 60px 0;
	}
</style>


@include('front.pages.matrix_form')
@stop