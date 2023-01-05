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
				<li><a href="https://www.matrixedu.in/">Home</a> </li>
				<li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow"></li>
				<li><a href="#">Results</a> </li>
				<li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow"></li>
				<li><span>JEE Main Results</span> </li>
			</ul>
		</ul>
	</div>
</section>

<section class="result-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 contentcenter">
				<div class="result-bannertext">
					<h3 class="text-uppercase"> JEE Main 2022 Result Highlights</h3>
					<p>Top <span>JEE</span> Coaching of <span>India</span></p>
					<ul>
						<li>6 students More than 99.75%tile</li>
						<li>25 students More than 99.50%tile</li>
						<li>67 students More than 99.00%tile</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-7">
				<img src="https://www.matrixedu.in/assets/default/images/JEE_Main_Growth.png" alt="Best JEE Main Result in Sikar" />
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<!--<div class="totalbox">
			Our Results Speak for Us
			<p>Selections in jee main <span>2048+</span></p>
		</div>-->

		<div class="row justify-content-md-center">
			<h2>Detailed JEE Main result of last 8 years</h2>
			<div class="col-sm-12 col-lg-9">

				<div class="resuly-year my-5">
					<ul>
                    	<li>
							<div class="year">Year <span>2022</span></div>
							<div class="examinfor">
								JEE Main July 2022
								<p><span>3 students</span> above 99.91 %ile (Highest in Sikar)</p>
                                <p><span>7 students</span> above 99.80 %ile (Highest in Sikar)</p>
								<p><span>30 students</span> bove 99.50 %ile (Highest in Sikar)</p>
                                <p><span>78 students</span> above 99.00 %ile (Highest in Sikar)</p>
								<p><span>1120 students </span> qualified for JEE Advanced 2022 (Highest in Sikar)</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-july-result-2022.pdf">View More</a>
							</div>
						</li>
                        <li>
							<div class="year">Year <span>2022</span></div>
							<div class="examinfor">
								JEE Main Jun 2022
								<p><span>6 students</span> More than 99.75%tile (Highest in Sikar)</p>
								<p><span>25 students</span> More than 99.50%tile Highest in Sikar)</p>
                                <p><span>67 students</span> More than 99.00%tile Highest in Sikar)</p>
								<p><span>With 12th </span> Highest in Sikar</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-jun-result-2022.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2021</span></div>
							<div class="examinfor">
								JEE Main Aug/Sep 2021
								<p><span>7 students</span> More than 99.75%tile</p>
								<p><span>15 students</span> More than 99.50%tile</p>
								<p><span>7 out of 11</span> students from Sikar are from Matrix</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-sep-result-2021.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2021</span></div>
							<div class="examinfor">
								JEE Main July 2021
								<p><span>7 students</span> More than 99.75%tile</p>
								<p><span>15 students</span> More than 99.50%tile</p>
								<p><span>7 out of 11</span> students from Sikar are from Matrix</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-july-result-2021.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2021</span></div>
							<div class="examinfor">
								JEE Main March 2021
								<p><span>7 students</span> More than 99.75%tile</p>
								<p><span>15 students</span> More than 99.50%tile</p>
								<p><span>7 out of 11</span> students from Sikar are from Matrix</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-march-result-2021.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2021</span></div>
							<div class="examinfor">
								JEE Main February 2021
								<p><span>7 students</span> More than 99.75%tile</p>
								<p><span>15 students</span> More than 99.50%tile</p>
								<p><span>7 out of 11</span> students from Sikar are from Matrix</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-feb-result-2021.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2020</span></div>

							<div class="examinfor">
								JEE Main September 2020
								<p><span>12 students</span> More than 99.75%tile</p>
								<p><span>32 students</span> More than 99.50%tile</p>
								<p><span>102 students</span> More than 99.00%tile</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-sep-result-2020.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2020</span></div>

							<div class="examinfor">
								JEE Main January 2020
								<p><span>11 students</span> More than 99.70%tile</p>
								<p><span>86 students</span> More than 99.00%tile</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/jee-main-result-2012020.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2019</span></div>

							<div class="examinfor">
								JEE Main April 2019
								<p><span>118 students</span> More than 99.00%tile (Highest in Sikar, More than combined total of 10+ institutes in Sikar)</p>
								<p><span>932 students</span> have qualified for JEE Main</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/mapr19.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2019</span></div>

							<div class="examinfor">
								JEE Main January 2019
								<p><span>73 students</span> More than 99.00%tile (Highest in Sikar, More than combined total of 10+ institutes in Sikar)</p>
								<p><span>3 students</span> All India Topper in Maths with NTA score 100.00</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/mjan19.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2018</span></div>

							<div class="examinfor">
								JEE Main 2018
								<p><span>892 students</span> qualified in JEE Main (Higher in Sikar)</p>
								<p><span>48 students</span> with 200+ Score</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/m18.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2017</span></div>

							<div class="examinfor">
								JEE Main 2017
								<p><span>73 students</span> with 195+ Score and 56 Students with 200+ Score</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/m17.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2016</span></div>

							<div class="examinfor">
								JEE Main 2016
								<p><span>Overall, 452 students</span> qualified JEE Main. This translates to ~75% success rate since 600 odd students had appeared in JEE Main. Also, 27 students scored more than 200 marks - highest in Sikar among all institutes.</p>
								<a target="_parent" href="https://www.matrixedu.in/viewpdf/m16.pdf">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2015</span></div>

							<div class="examinfor">
								JEE Main 2015
								<p><span>176 students</span> qualified JEE Main</p>
								<p><span>7 students</span> with 200+ Score</p>								<a target="_parent" href="https://www.matrixedu.in/viewpdf/m15.pdf">View More</a>
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