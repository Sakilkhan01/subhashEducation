@extends('front.layouts.app')
@section('content')

<section class="innerheader">
        <div class="container">
            <h2><span>Why Matrix</span></h2>
        </div>
</section>

<section class="breadcrumbs-nav mb-60">
    <div class="container">
        <ul class="">
            <ul>
                <li><a href="https://www.matrixedu.in/">Home</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><a href="#">About us</a></li>
                <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                <li><span>Why Matrix</span></li>
            </ul>
        </ul>
    </div>
</section>

<div class="container">
    <div class="pagetitle text-center">
        <h3>Why Choose Matrix?</h3>
        <p>Not just the quality of faculty at Matrix is excellent; Matrix also offers a commitment to personally care for students.</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6 pb-4">
            <div class="frameworkbox">
                <img src="https://www.matrixedu.in/assets/default/images/icon-student.png" alt="" />
                <h3>Promise of Best Results for JEE &amp; NEET</h3>
                <p>Over the years of our existence, we have produced outstanding results in both JEE Main and JEE Advanced. We are determined to produce similar results in NEET as well.</p>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 pb-4">
            <div class="frameworkbox">
                <img src="https://www.matrixedu.in/assets/default/images/team.png" alt="" />
                <h3>Best faculty team</h3>
                <p>The faculty team of MATRIX is an unmatched intellectual pool of mentors for IIT-JEE &amp; NEET who have outstanding combination of proven record, experience and qualification.</p>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 pb-4">
            <div class="frameworkbox">
                <img src="https://www.matrixedu.in/assets/default/images/icon-student2.png" alt="" />

                <h3>Best Teaching Methodology</h3>

                <p>At Matrix, we provide a three-layered preparatory schedule to our students to ensure that they excel in JEE advanced &amp; NEET while doing equally good in board examinations.</p>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6 pb-4">
            <div class="frameworkbox">
                <img src="https://www.matrixedu.in/assets/default/images/icon-student4.png" alt="" />

                <h3>Matrix Online &amp; Video Lab</h3>

                <p>Online tests have many advantage over offline paper based tests. You can choose any topics of your choice and take a test to check your preparation level.</p>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6 pb-4">

            <div class="frameworkbox">
                <img src="https://www.matrixedu.in/assets/default/images/team.png" alt="" />

                <h3>Managed by team of IIT, IIM &amp; Medical Graduates</h3>

                <p>
                    Matrix is managed by graduates from top institutes such as IIT, IIM &amp; Medical Graduates. Their experience and expertise in academic management has ensured that MATRIX students reach newer heights every passing year.
                </p>
            </div>
        </div>
    </div>
</div>


@include('front.pages.matrix_form')
@stop