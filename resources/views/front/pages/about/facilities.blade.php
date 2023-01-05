@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/facilities.css') }}" />
        <style>
            .facilitiesouter li {
                list-style: disclosure-closed;
            }
        </style>
        <section class="innerheader">
            <div class="container">
                <h2><span>Facilities </span></h2>
            </div>
        </section>
        <section class="breadcrumbs-nav">
            <div class="container">
                <ul class="">
                    <ul>
                        <li><a href="https://www.matrixedu.in/">Home</a></li>
                        <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                        <li><a href="#">About us</a></li>
                        <li><img src="https://www.matrixedu.in/assets/default/images/right-arrow-gray.png" class="right-arrow" /></li>
                        <li><span>Facilities</span></li>
                    </ul>
                </ul>
            </div>
        </section>
        <section class="py-5 facilitiesouter">
            <div class="container">
                <div class="row mb-sm-1 mb-lg-5 flex-wrap-reverse flex-sm-wrap-reverse">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities01.png" alt="" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Infrastructure</h4>
                            <ul>
                                <li>Every classroom is properly designed with sitting arrangement, proper cooling system and appropriate lighting for a better environment of the students.</li>
                                <li>Proper Water facility is also available via R.O and water cooler.</li>
                                <li>Power failure types of issue are managed by the use of generators.</li>
                                <li>Washrooms for boys and girls are also regularly cleaned in order to maintain better hygiene.</li>
                                <li>Information about the attendance of students are recorded and their visibility remains up-to-date and regular provided to their parents.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5">
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Classrooms</h4>
                            <ul>
                                <li>Classrooms are developed with proper furnishing and ventilated system.</li>
                                <li>Whiteboard is also provided for smooth teaching and dustless writing.</li>
                                <li>Smartboard is also available for advanced technology teaching.</li>
                                <li>Well designed benches are available and each student has provided with fixed seat number.</li>
                                <li>For security concern, every classroom is equipped with CCTV cameras.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities02.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="row mb-sm-1 mb-lg-5 flex-wrap-reverse flex-sm-wrap-reverse">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities03.png" alt="" />
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Online Testing and Video Classes</h4>

                            <ul>
                                <li>
                                    Online testing is really helpful in analyzing student performance during IIT JEE, NEET preparation. Tests are conducted regularly and students can easily check their performance in Matrix Website and
                                    Application.
                                </li>
                                <li>Matrix provides high-quality content-based videos on each topic. This enables each student to keep continue their classes even when they miss their classes due to some reason.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5">
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Faculties</h4>
                            <ul>
                                <li>Team of Highly Qualified Faculties Graduated from Top IITs, Medical colleges and other colleges.</li>
                                <li>100+ qualified faculties.</li>
                                <li>Student-teacher ratio is properly maintained.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities04.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="row mb-sm-1 mb-lg-5 flex-wrap-reverse flex-sm-wrap-reverse">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities05.png" alt="" />
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Regular tests</h4>
                            <ul>
                                <li>Regular tests are conducted for students.</li>
                                <li>Attempting test helps students to practice and helps in solving different level of question within fixed time limit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5">
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Doubt Counter</h4>
                            <ul>
                                <li>Separate counters for solving doubts are provided for the students.</li>
                                <li>
                                    Matrix provides Doubt solving counters as a special platform so that students can discuss, clarify and solve tricky questions with the help of faculty members. This direct interaction helps in boosting
                                    confidence and improving understanding of concepts.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities06.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5 flex-wrap-reverse flex-sm-wrap-reverse">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities07.png" alt="" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Individual Counselling and Mentoring</h4>
                            <ul>
                                <li>Matrix provides individual counseling and guidance from our experienced mentors and experts.</li>
                                <li>During the counselling session, students are encouraged by discussing their issues during preparation. Mentors help them to overcome issues related to exam they joined the coaching.</li>
                                <li>In addition to it, experts also help students to understand the criteria of competitive exams including eligibility, joining of colleges and more.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5">
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Pre-foundation program</h4>
                            <ul>
                                <li>Pre-foundation program is available for VI to X.</li>
                                <li>Students can develop better learning base by joining our re-foundation program.</li>
                                <li>Advantage of the pre-foundation program helps students in improving academic skills.</li>
                                <li>Matrix provides proper and scheduled preparation of advanced competition.</li>
                                <li>Students can also prepare for the exam with videos created by experts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities08.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-1 mb-lg-5 flex-wrap-reverse flex-sm-wrap-reverse">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="facilitiesleft-img">
                            <img src="https://www.matrixedu.in/assets/default/images/facilities09.png" alt="" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 al-center">
                        <div class="facilities-information pl-3">
                            <h4>Study Material</h4>
                            <ul>
                                <li>Matrix Provides world-class study material with deep research on JEE & NEET based content.</li>
                                <li>Proper theory based on courses is provided to students comprises of pattern-wise questions and their level also varies from easy to hard.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 @include('front.pages.matrix_form')
@stop