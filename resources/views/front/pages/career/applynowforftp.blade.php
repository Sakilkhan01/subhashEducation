@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/facilities.css') }}" />
<style type="text/css">
	.form-group label span {
		color: red;
	}
	.error, .error p {
    color: red;
    }
	.errorborder { border: 1px solid red;}
  
    .my-form{
            border-radius: 8px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 2px 73px 0px rgba(56, 91, 169, 0.11);
    padding: 15px 25px;
    }
    
    .my-form .form-control {
    height: 40px;
    border-radius: 0;
    }
    
    .btns {
    background-color: #385ba9;
    text-transform: uppercase;
    text-align: center;
    min-width: 180px;
    color: #fff;
    font-size: 17px;
    padding: 6px 15px;
            box-shadow: none;
    border: none;
}
    
.fa-paper-plane {
  background: #002147;
    height: 50px;
    min-width: 50px;
    border-radius: 25px;
    font-size: 18px; 
    color: #FFFFFF;
    margin-bottom: 10px;
    border: 2px solid rgb(0, 33, 71);
    border: 2px solid rgba(0, 33, 71, .52);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    display: inline-flex;
    justify-content: center;
    align-items: center; 
}
    
   
</style>
        <section class="innerheader">
            <div class="container">
                <h2><span>Apply for Faculty Training Program (FTP) </span></h2>
            </div>
        </section>
        <section id="content">
    <div class="content_wrapper">
        <div class="container">
            <div class="col-sm-12 col-lg-12 col-md-12 contact-part">&nbsp;</div>
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-10">
                    <div class="heading-section clearfix">
                        <h2 style="font-size: 25px; margin-bottom: 10px;"><i class="fa fa-paper-plane"></i> Apply <span>Now</span></h2>
                    </div>
                    <form action="" method="post" accept-charset="utf-8" autocomplete="off" id="dialog_form" enctype="multipart/form-data" class="my-form row">
                        <input type="hidden" name="applyFor" value="" />
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" style="z-index: 1;">
                            <label>Your Name <span>*</span></label>
                            <input name="name" value="" type="text" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" style="z-index: 1;">
                            <label>Your Email Address <span>*</span></label>
                            <input name="email" value="" type="email" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" style="z-index: 1;">
                            <label>Department you want to apply for <span>*</span></label>
                            <select class="form-control" name="division" title="Matrix division" id="division">
                                <option value="">Please select your department</option>
                                <option value="IIT JEE">JEE Division (Jee Main &amp; Advanced)</option>
                                <option value="NEET">NEET Division</option>
                                <option value="Pre-foundation">Pre-Foundation Division (6-10 CBSE, olympiads, NTSE etc)</option>
                                <option value="High School">Schooling Division (Class 5-12 CBSE/RBSE)</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="JEEsubject" style="z-index: 1; display: none;">
                            <label>Subject <span>*</span></label>
                            <select class="form-control" name="JEEsubject" title="Subject of interest">
                                <option value="">Please select subject of interest</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Maths">Maths</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="NEETsubject" style="z-index: 1; display: none;">
                            <label>Subject <span>*</span></label>
                            <select class="form-control" name="NEETsubject" title="Subject of interest">
                                <option value="">Please select subject of interest</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Botany">Botany</option>
                                <option value="Zoology">Zoology</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="schoolSubject" style="z-index: 1; display: none;">
                            <label>Subject <span>*</span></label>
                            <select class="form-control" name="schoolSubject" title="Subject of interest">
                                <option value="">Please select subject of interest</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Maths">Maths</option>
                                <option value="Sanskrit">Sanskrit</option>
                                <option value="Science">General Science</option>
                                <option value="SST">SST</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Biology">Biology</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="schoolJobType" style="z-index: 1; display: none;">
                            <label>Teacher Type <span>*</span></label>
                            <select class="form-control" name="schooljobtype" title="Job Title">
                                <option value="">Please select</option>
                                <option value="PRT/PPRT">PRT/PPRT</option>
                                <option value="PGT">PGT</option>
                                <option value="TGT">TGT</option>
                                <option value="Management">Management (Coordinator/Principal/etc.)</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="PreFoundationSubject" style="z-index: 1; display: none;">
                            <label>Subject <span>*</span></label>
                            <select class="form-control" name="PreFoundationSubject" title="Subject of interest">
                                <option value="">Please select subject of interest</option>

                                <option value="Biology">Biology</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Physics">Physics</option>
                                <option value="Maths">Mathematics</option>
                                <option value="English">English</option>

                                <option value="Reasoning &amp; Mental Ability">Reasoning &amp; Mental Ability</option>
                                <option value="Science">Science</option>
                                <option value="SST">SST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="sportsTypeList" style="z-index: 1; display: none;">
                            <label>Positions <span>*</span></label>
                            <select class="form-control" name="sportsList" title="Subject of interest">
                                <option value="">Please select Positions for which you want to apply</option>
                                <option value="PTI">PTI</option>
                                <option value="PET">PET</option>
                                <option value="Sports Teacher">Sports Teacher</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="NonAcademicteam" style="z-index: 1; display: none;">
                            <label>Positions <span>*</span></label>
                            <select class="form-control" name="Non academic team" title="Positions">
                                <option value="">Please select Positions for which you want to apply</option>
                                <option value="Counsellors">Counsellors</option>
                                <option value="Receptionist">Receptionist</option>

                                <option value="Computer Operators">Computer Operators</option>

                                <option value="Graphic Designers">Graphic Designers</option>

                                <option value="Tele-callers">Tele-callers</option>

                                <option value="Operations">Operations</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="Digitallearningdivision" style="z-index: 1; display: none;">
                            <label>Positions <span>*</span></label>
                            <select class="form-control" name="Digital learning division" title="Positions">
                                <option value="">Please select Positions for which you want to apply</option>
                                <option value="Content Manager">Content Manager</option>
                                <option value="Product Manager">Product Manager</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="Digitalmarketingteam" style="z-index: 1; display: none;">
                            <label>Positions <span>*</span></label>
                            <select class="form-control" name="Digital marketing team" title="Positions">
                                <option value="">Please select Positions for which you want to apply</option>
                                <option value="Data Analyst">Data Analyst</option>

                                <option value="Social Media Manager">Social Media Manager</option>

                                <option value="Graphic Designer">Graphic Designer</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xs-6" id="offlinemediamarketingteam" style="z-index: 1; display: none;">
                            <label>Positions <span>*</span></label>
                            <select class="form-control" name="offline media marketing team" title="Positions">
                                <option value="">Please select Positions for which you want to apply</option>
                                <option value="creative head">Creative Head</option>

                                <option value="marketing manager">Marketing Manager</option>

                                <option value="marketing executives">Marketing Executives </option>

                                <option value="field executives">Field Executives</option>
                            </select>
                        </div>
                        <!--?php// }else{?-->

                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Experience Year(s) <span>*</span></label>
                            <select class="form-control" name="experience" title="Experience">
                                <option value="0 Year">0 Year</option>
                                <option value="1 Year">1 Year</option>
                                <option value="2 Year">2 Year</option>
                                <option value="3 Year">3 Year</option>
                                <option value="4 Year">4 Year</option>
                                <option value="5 Year">5 Year</option>
                                <option value="6 Year">6 Year</option>
                                <option value="7 Year">7 Year</option>
                                <option value="8 Year">8 Year</option>
                                <option value="9 Year">9 Year</option>
                                <option value="10 Year">10 Year</option>
                                <option value="11 Year">11 Year</option>
                                <option value="12 Year">12 Year</option>
                                <option value="13 Year">13 Year</option>
                                <option value="14 Year">14 Year</option>
                                <option value="15 Year">15 Year</option>
                                <option value="16 Year">16 Year</option>
                                <option value="17 Year">17 Year</option>
                                <option value="18 Year">18 Year</option>
                                <option value="19 Year">19 Year</option>
                                <option value="20 Year">20 Year</option>
                                <option value="20+ Years">20+ Years</option>
                            </select>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Current Organization<span>*</span></label>
                            <input name="current_organization" value="" type="text" class="form-control" />
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Graduation College <span>*</span></label>
                            <input name="graduation_college" value="" type="text" class="form-control" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Home District <span>*</span></label>
                            <input name="hometown" value="" type="hometown" class="form-control" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Full Address <span>*</span></label>
                            <textarea name="address" style="height: 52px;" class="form-control"></textarea>
                        </div>

                        <div id="inputtype" class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="z-index: 1;">
                            <label>Your Mobile No <span>*</span> <em>We will send you OTP on this number so please enter correct number.</em></label>
                            <input id="onlynumeric" maxlength="10" name="mobile" value="" type="text" class="form-control" /><br />
                            <span style="color: red;" id="errmsg"></span>
                        </div>
                        <div id="inputtype" class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3" style="z-index: 1;">
                            <label>CAPTCHA <span>*</span></label> <br />
                            <img src="https://www.matrixedu.in/assets/captcha/1670843659.4088.jpg" style="width: 100px; height: 35px; border: 0;" alt=" " />
                        </div>
                        <div id="inputtype" class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3" style="z-index: 1;">
                            <label>Please enter CAPTCHA code shown on image</label>
                            <input type="text" autocomplete="off" name="userCaptcha" placeholder="Please enter CAPTCHA" value="" class="form-control" maxlength="6" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="submit" class="view-all-accent-btn btns">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop