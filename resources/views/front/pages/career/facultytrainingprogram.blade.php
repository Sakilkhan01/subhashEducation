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
        <h2><span>Faculty Training Program (FTP)</span></h2>
    </div>
</section>

<section id="content">
  <div class="content_wrapper">
     <div class="container">
    	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-part" style="padding: 15px 0px;"> 
        <table class="table table-bordered table-hover">
               <tbody><tr>
            <td><strong> About Programme</strong></td>
            <td>Matrix is one of the fastest growing and respected institution for 6 to 10th pre-foundation, JEE &amp; NEET coaching in north India. To meet its academic requirements, a structured Faculty Training Program (FTP) is being launched.</td>
            </tr>
          <tr>
            <td width="25%"><strong>Eligibility to apply for FTP</strong></td>
            <td width="75%"><ul class="ul">
              <li><b>For JEE Division:</b> B.Tech./B.E./M.Tech./MSc./BSc. or any other relevant Bachelor's Degree</li>
              <li><b>For NEET Division:</b> M.B.B.S./B.Pharma/M.Pharma/MSc./BSc./ or any other relevant Bachelor's Degree</li>
              <li><b>For Pre-foundation/Schooling Division:</b> B.Tech./B.E./M.Tech./MSc./BSc./BA/MA/B.Ed./M.Ed. or any other relevant Bachelor's Degree. Freshers may also apply.</li>
            </ul>    </td>
            </tr>
          <tr>
            <td><strong>Selection Process</strong></td>
            <td>Test (Subject Knowledge &amp; Aptitude Test) followed by personal interview.</td>
            </tr>
          <tr>
          </tr><tr>
            <td><strong>Syllabus for the FTP test</strong></td>
            <td><a href="https://www.matrixedu.in/syllabus-for-ftp-test">Check Here</a></td>
            </tr>
          <tr>
            <td><strong>Training Procedure</strong></td>
            <td>
             <p><strong>Interactive sessions by experts:</strong> On various topics integral to teaching will be taken by Expert Trainers</p>
          <p><strong>Knowledge Development process</strong></p>
          <ul class="ul">
        <li>As per the suggested sequence, FTP will start studying topics and will solve &amp; submit exercise sheets solutions</li>
        <li>Chapter Tests</li>
        <li>Regular feedback shall be given to faculty</li>
        <li>Candidate will prepare teaching notes and will submit for evaluation</li>
        <li>Full Syllabus Tests shall be conducted on completion of training phase.</li>
        </ul>
               </td>
             </tr><tr>
            <td><strong>Training Material</strong></td>
            <td>
             <ul class="ul">
          <li>Online recorded video lecture library and solutions videos of experience faculty ( For 3 months)</li>
          <li>Subject wise Study Material for JEE &amp; NEET / Class VI - X (as the case may be)</li>
          <li>Offline in-person classes would be conducted by senior subject expert faculties.</li>
        </ul>
               </td>
            </tr>
          <tr>
            <td><strong>Training Duration</strong></td>
            <td>
          a. Minimum 3-6 months for JEE/NEET Division <br>
        
            b. Minimum 2 months for Foundation Division (Classes VI - X)<br>
        
            c. A rigorous academic training will be imparted to the candidates before they are entrusted with the teaching responsibilities<br>
        
            d. Trainees will be provided stipend/ salary during the training period as per their qualification and performance in test and interviews.<br>
          </td>
            </tr>
          <tr>
            <td><strong>After Training</strong></td>
            <td><ul class="ul">
          <li>Certificate with grade will be provided to candidates on successful completion of FTP</li>
          <li>All the successful candidates will be assimilated into either Matrix JEE division, NEET division, pre-foundation program or schooling division as per their performance in training programs.</li>
          
        </ul>
        
          </td>
            </tr>
          <tr>
            <td><strong>Subjects</strong></td>
            <td><ul class="ul"><li><strong>JEE/NEET:</strong> Physics | Chemistry | Mathematics | Zoology | Botany</li>
            <li><strong>XI/XII Schooling:</strong> Mathematics | Biology | Arts | Agriculture</li>
            <li><strong>Pre-foundation:</strong> Science | Maths | Reasoning | English | Social Science | Hindi</li></ul>
          </td>
            </tr>
           <tr>
        <th colspan="2" class="blue"><div class="font-15 text-weight"><strong>Registration &amp; Test Process</strong></div></th>
        </tr>
          <tr>
        <th colspan="2" class="blue"><div class="font-15 text-weight"><strong>How to Apply</strong></div></th>
        </tr>
          <tr>
            <td><strong>Apply Online</strong></td>
            <td><a href="https://www.matrixedu.in/applynowforftp" title="Apply for Faculty Training Program at Matrix" class="btn btn-success btn-sm">
                 Apply Now for Faculty Training Program (FTP)  
               </a>
        </td>
            </tr>
            <tr>
            <td><strong>For any query contact</strong></td>
            <td>HR Department: 8854029098 / 8094169246</td>
            </tr>
        </tbody></table>  
      </div>
      
    </div>
  </div>
</section>

@stop