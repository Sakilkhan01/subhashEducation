@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/result.css') }}">   
<style>
    .result-bannertext {
        font-size: 18px;
        margin-top: 25px;
    }
</style>
<section class="innerheader">
    <div class="container">
        <h2><span>Competitive Exams Result</span></h2>
    </div>
</section>
<section class="breadcrumbs-nav">
    <div class="container">
        <ul class="">
            <ul>
                <li><a href="https://www.matrixedu.in/">Home</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><a href="#">Results</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><span>Competitive Exams Result</span></li>
            </ul>
        </ul>
    </div>
</section>
<section class="result-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contentcenter">
                <div class="result-bannertext">
                    <h3 class="text-uppercase">Other Exam (KVPY, NTSE, Olympiads etc.) Result</h3>
                    <p>Top <span>Pre-foundation</span> Coaching of <span>India</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <!--<div class="totalbox">
			Our Results Speak for Us
			<p>Best result in Sikar in <span>Olympiad</span></p>
		</div>-->
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-lg-12">
                <div class="resuly-year my-5">
                    <ul>
                        <li>
                            <div class="examinfor">
                                Kishore Vaigyanik Protsahan Yojana (KVPY) Result
                                <!--<p><span>12</span> students selected in KVPY 2021 along with AIR 6</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/kvpy-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                Pre-Regional Mathematical Olympiad (PRMO) Result
                                <!--<p><span>7</span> students qualified in PRMO 2019</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/prmo-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                IOQM & IOQJS Result
                                <!--<p><span>4</span> selections in INMO - Highest & First time in Sikar</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/inmo-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                National Mathematics Talent Contests (NMTC) Result
                                <!--<p><span>27</span>  selections for STSE 2020-21 are straight from Matrix. </p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/nmtc-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                National Talent Search Examination (NTSE) stage 2 Result
                                <!--<p><span>17</span> students selected in NTSE Stage-1 2019-2020</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/ntsestage2-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                National Talent Search Examination (NTSE) Result
                                <!--<p><span>17</span> students selected in NTSE Stage-1 2019-2020</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/ntse-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                State Talent Search Examination (STSE) Result
                                <!--<p><span>27</span>  selections for STSE 2020-21 are straight from Matrix. </p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/stse-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                Science Olympiad foundation Result
                                <!--<p><span>12</span> Students qualified National Science Olympiad 2019</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/nso-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                Australian National Chemistry Quiz (ANCQ) Result
                                <!--<p><span>76</span> students rewarded in ANCQ 2019-2020</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/ancq-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                Silverzone foundation Result
                                <!--<p><span>Best</span> result in Sikar yet!</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/szf-result">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="examinfor">
                                Unified Council foundation
                                <!--<p><span>Best</span> result in Sikar yet!</p>-->
                                <p></p>
                                <a target="_parent" href="https://www.matrixedu.in/ucf-result">View More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('front.pages.matrix_form')
@stop