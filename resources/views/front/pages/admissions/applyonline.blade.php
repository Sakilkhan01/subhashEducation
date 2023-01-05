@extends('front.layouts.app')
@section('content')


<section class="innerheader">
    <div class="container">
        <h2><span>Apply Online</span></h2>
        <p>Register for the Program you want to apply</p>
    </div>
</section>
<style type="text/css">
    #banner {
        background-image: url("https://www.matrixedu.in/assets/default/img/banner/default.png");
    }

    .formbox {
        border-radius: 8px;
        background-color: rgb(255, 255, 255);
        box-shadow: 0px 2px 73px 0px rgba(56, 91, 169, 0.11);
        padding: 15px 25px;
    }

    /*.formbox .applynlines #programyouwanttoapply{
        border: none;
         width: 100%;
    }*/

    .formbox .applynlines #medium {
        border: none;
        width: 100%;
    }

    .btns {
        background-color: #385ba9;
        text-transform: uppercase;
        text-align: center;
        min-width: 180px;
        color: #fff;
        font-size: 17px;
        padding: 6px 15px;
        border: none;
        box-shadow: none;
    }

    @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
        #banner {
            background-image: url("https://www.matrixedu.in/assets/default/img/banner/default_m.png");
        }
    }

    ul {
        list-style: inside;
    }

    .registration-page-area {
        padding: 35px 0 100px;
    }
    .errorlabel {
        color: red;
    }
    .form-control.error {
        border: 1px solid red;
    }
</style>

<!-- Inner Page Banner Area End Here -->

<!-- Registration Page Area Start Here -->

<div class="registration-page-area about-page2-area">
    <div class="container">
        <div class="registration-details-area inner-page-padding">
            <div class="row justify-content-md-center">
                <div class="col-12 col-sm-10">
                    <div class="formbox">
                        <form action="" method="post" accept-charset="utf-8" autocomplete="off" id="dialog_form" enctype="multipart/form-data" class="my-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Student Name *</label>

                                        <input name="name" value="" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email Address *</label>

                                        <input name="email" value="" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Student's Mobile Number *</label>

                                        <input name="mobile" value="" type="text" class="form-control" id="onlynumeric" maxlength="10" /><span style="color: red;" id="errmsg"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Current School Name *</label>

                                        <input type="text" id="currentschool" name="currentschool" value="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Father's Name *</label>

                                        <input type="text" id="first-name" name="fname" value="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Father's Mobile Number *</label>

                                        <input type="text" id="onlynumeric1" maxlength="10" name="f_mobile" value="" type="text" class="form-control" /><span style="color: red;" id="errmsg1"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="programyouwanttoapply">Program You Want to Apply *</label>
                                        <div class="custom-select1 applynlines">
                                            <select id="programyouwanttoapply" class="form-control" name="course">
                                                <option value="">Select Program You want to Apply</option>
                                                <optgroup label="JEE Main & Advanced Classroom Courses">
                                                    <option name="course" value="Momentum: 2 Years Integrated Foundation Program for JEE Main & Advanced for 10th to 11th Moving Students" class="form-check-input">
                                                        Momentum: 2 Years Integrated Foundation Program for JEE Main & Advanced for 10th to 11th Moving Students
                                                    </option>
                                                    <option name="course" value="Early Momentum: 2 Years Integrated Foundation Program for JEE Main & Advanced for current 10th class Students" class="form-check-input">
                                                        Early Momentum: 2 Years Integrated Foundation Program for JEE Main & Advanced for current 10th class Students
                                                    </option>
                                                    <option name="course" value="Impulse: 1 Year Integrated Foundation Program for JEE Main & Advanced for 11th to 12th Moving Students" class="form-check-input">
                                                        Impulse: 1 Year Integrated Foundation Program for JEE Main & Advanced for 11th to 12th Moving Students
                                                    </option>
                                                    <option name="course" value="Agile: 1 Year Target Program for JEE Main & Advanced for 12th Passed Students" class="form-check-input">
                                                        Agile: 1 Year Target Program for JEE Main & Advanced for 12th Passed Students
                                                    </option>
                                                </optgroup>
                                                <optgroup label="NEET Classroom Courses">
                                                    <option name="course" value="Momentum: 2 Years Integrated Foundation Program for NEET for 10th to 11th Moving Students" class="form-check-input">
                                                        Momentum: 2 Years Integrated Foundation Program for NEET for 10th to 11th Moving Students
                                                    </option>
                                                    <option name="course" value="Early Momentum: 2 Years Integrated Foundation Program for NEET/AIIMS for current 10th class Students" class="form-check-input">
                                                        Early Momentum: 2 Years Integrated Foundation Program for NEET/AIIMS for current 10th class Students
                                                    </option>
                                                    <option name="course" value="Impulse: 1 Year Integrated Foundation Program for NEET for 11th to 12th Moving Students" class="form-check-input">
                                                        Impulse: 1 Year Integrated Foundation Program for NEET for 11th to 12th Moving Students
                                                    </option>
                                                    <option name="course" value="Agile: 1 Year Target Program for NEET for 12th Passed Students" class="form-check-input">
                                                        Agile: 1 Year Target Program for NEET for 12th Passed Students
                                                    </option>
                                                </optgroup>

                                                <optgroup label="Pre-foundation Classroom Courses">
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class X students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class X students
                                                    </option>
                                                    <option name="course" value="10 AJM: 1 Year Integrated Program for Advanced Preparation of Medical, JEE, NDA, CLAT along with Junior Olympiads" class="form-check-input">
                                                        10 AJM: 1 Year Integrated Program for Advanced Preparation of Medical, JEE, NDA, CLAT along with Junior Olympiads
                                                    </option>
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class IX students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class IX students
                                                    </option>
                                                    <option name="course" value="9 AJM: 2 Year Integrated Program for Advanced Preparation of Medical, JEE, NDA, CLAT along with Junior Olympiads" class="form-check-input">
                                                        9 AJM: 2 Year Integrated Program for Advanced Preparation of Medical, JEE, NDA, CLAT along with Junior Olympiads
                                                    </option>
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class VIII students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class VIII students
                                                    </option>
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class VII students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class VII students
                                                    </option>
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class VI students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class VI students
                                                    </option>
                                                    <option name="course" value="Matrix Edge: Pre-foundation program for students of Class V students" class="form-check-input">
                                                        Matrix Edge: Pre-foundation program for students of Class V students
                                                    </option>
                                                </optgroup>
                                                <optgroup label="Workshop Online courses">
                                                    <option value="IJSO Workshop" class="form-check-input">IJSO Workshop</option>
                                                    <option value="Pre-RMO Workshop" class="form-check-input">Pre-RMO Workshop</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="country">Medium *</label>

                                        <div class="custom-select applynlines">
                                            <select id="medium" class=" " name="medium">
                                                <option name="medium" value="english" class="form-check-input">English</option>

                                                <option name="medium" value="hindi" class="form-check-input">Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Matrix Reg No <span style="font-size: 8px; text-transform: none;">(Only if you are an Ex-MATRIX student)</span></label>

                                        <input type="text" id="otp" name="matrixregno" value="" class="form-control" maxlength="5" />
                                    </div>
                                </div>

                                <input type="hidden" name="applicationid" value="" />

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>CAPTCHA</label> <br />
                                    <img src="https://www.matrixedu.in/assets/captcha/1670829529.3419.jpg" style="width: 100px; height: 35px; border: 0;" alt=" " />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Please enter CAPTCHA code shown on left <span>*</span></label>
                                    <input type="text" autocomplete="off" name="userCaptcha" placeholder="Please enter CAPTCHA" value="" class="form-control" maxlength="6" />
                                </div>
                                <input type="hidden" name="footerForm" value="" />
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pLace-order mt-30" style="margin-top: 27px;">
                                        <button class="view-all-accent-btn disabled btns" type="submit" value="Login">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop