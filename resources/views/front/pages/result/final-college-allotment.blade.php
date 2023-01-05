@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/result.css') }}">   

<section class="innerheader">


	<div class="container">

		<h2>Final College Allotment</h2>

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
				<li><span>Final College Allotment</span> </li>
			</ul>

		</ul>

	</div>

</section>

<section>
	<div class="container">
		<!--<div class="totalbox">
			Our Results Speak for Us
			<p>Selections in jee advanced <span>1250+</span></p>
		</div>-->

		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-lg-9">

				<div class="resuly-year my-5">
					<ul>
						<li>
							<div class="year">Year <span>2021</span></div>

							<div class="examinfor">
								2020-2021
								<p>Final College Allotment 2020-2021</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2020_2021">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2020</span></div>
						
							<div class="examinfor">
								2019-2020
								<p>Final College Allotment 2019-2020</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2019_2020">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2019</span></div>

							<div class="examinfor">
								2018-2019
								<p>Final College Allotment 2018-2019</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2018_2019">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2018</span></div>

							<div class="examinfor">
								2017-2018
								<p>Final College Allotment 2017-2018</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2017_2018">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2017</span></div>

							<div class="examinfor">
								2016-2017
								<p>Final College Allotment 2016-2017</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2016_2017">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2016</span></div>

							<div class="examinfor">
								2015-2016
								<p>Final College Allotment 2015-2016</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2015_2016">View More</a>
							</div>
						</li>
						<li>
							<div class="year">Year <span>2015</span></div>

							<div class="examinfor">
								2014-2015
								<p>Final College Allotment 2014-2015</p>
								<a target="_blank" href="https://www.matrixedu.in/result/batch/2014_2015">View More</a>
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