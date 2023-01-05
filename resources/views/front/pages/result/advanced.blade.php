@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/result.css') }}">   

<section class="innerheader">
    <div class="container">
        <h2><span>Results </span></h2>
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

                <li><span>JEE Advanced Results</span></li>
            </ul>
        </ul>
    </div>
</section>

<section class="result-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 contentcenter">
                <div class="result-bannertext">
                    <h3 class="text-uppercase">JEE Advanced 2022 Result Highlights</h3>

                    <p>Top <span>JEE</span> Coaching of <span>India</span></p>

                    <ul>
                        <li>Highest selections in Sikar</li>
                        <li>3 students under 1000 AIR (Gen)</li>
                        <li>11 students under 2500 AIR (Gen)</li>
                        <li>19 students under 3500 AIR (Gen)</li>
                        <li>434+ Students qualified for JEE Advanced</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-7">
                <img src="https://www.matrixedu.in/assets/default/images/JEE_Advanced_Growth.png" alt="JEE Advanced restult" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <!--<div class="totalbox">

			Our Results Speak for Us

			<p>Selections in jee advanced <span>1250+</span></p>

		</div>-->

        <div class="row justify-content-md-center">
            <h2>Detailed JEE Advanced result of last 8 years</h2>
            <div class="col-sm-12 col-lg-9">
                <div class="resuly-year my-5">
                    <ul>
                        <li>
                            <div class="year">Year <span>2022</span></div>
                            <div class="examinfor">
                                JEE Advanced 2022
                                <p><span>434+</span> students have qualified for JEE Advanced 2021</p>
                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/jeeadvancedresult2022.pdf">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="year">Year <span>2021</span></div>
                            <div class="examinfor">
                                JEE Advanced 2021
                                <p><span>410+</span> students have qualified for JEE Advanced 2021</p>
                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/jeeadvancedresult2021.pdf">View More</a>
                            </div>
                        </li>
                        <li>
                            <div class="year">Year <span>2020</span></div>
                            <div class="examinfor">
                                JEE Advanced 2020
                                <p><span>425+</span> students have qualified for JEE Advanced 2020</p>
                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/jeeadvancedresult2020.pdf">View More</a>
                            </div>
                        </li>

                        <li>
                            <div class="year">Year <span>2019</span></div>

                            <div class="examinfor">
                                JEE Advanced 2019

                                <p><span>402+</span> students have qualified for JEE Advanced 2019</p>

                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/a19.pdf">View More</a>
                            </div>
                        </li>

                        <li>
                            <div class="year">Year <span>2018</span></div>

                            <div class="examinfor">
                                JEE Advanced 2018

                                <p><span>360+</span> students have qualified for JEE Advanced 2019</p>

                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/a18.pdf">View More</a>
                            </div>
                        </li>

                        <li>
                            <div class="year">Year <span>2017</span></div>

                            <div class="examinfor">
                                JEE Advanced 2017

                                <p><span>295+</span> students have qualified for JEE Advanced 2019</p>

                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/a17.pdf">View More</a>
                            </div>
                        </li>

                        <li>
                            <div class="year">Year <span>2016</span></div>

                            <div class="examinfor">
                                JEE Advanced 2016

                                <p><span>126+</span> students have qualified for JEE Advanced 2019</p>

                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/a16.pdf">View More</a>
                            </div>
                        </li>

                        <li>
                            <div class="year">Year <span>2015</span></div>

                            <div class="examinfor">
                                JEE Advanced 2015

                                <p><span>51+</span> students have qualified for JEE Advanced 2019</p>
                                <a target="_parent" href="https://www.matrixedu.in/viewpdf/a15.pdf">View More</a>
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