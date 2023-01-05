@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/questionpaper.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/courses.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/icons.css') }}">
<div class="inner-pages">

	<div class="container">
            <div class="row">
               <div class="mobile-filter" onclick="openNav()"> <img src="https://www.matrixedu.in/assets/default/images/course/filter-icon.png" /> </div>
                <!--Left SideBar-->
                <div class="col-12 col-md-3 box-shadow left-sidebar filter-sidebar" id="filterSideBar">
                    <div class="row">
                        <a href="javascript:void(0)" class="filter-close" onclick="closeNav()">&times;</a>
                        <!--//Left Previous year tabs-->
                        <div class="questionpaper-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                               <li class="nav-item">
                                    <a class="nav-link active" id="jeemain-tab" data-toggle="tab" href="#jeemain" role="tab" aria-controls="home" aria-selected="true">JEE Main<br>(Previous year paper & solution)</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link " id="jeeadvanced-tab" data-toggle="tab" href="#jeeadvanced" role="tab" aria-controls="home" aria-selected="true">JEE Advanced<br>(Previous year paper & solution)</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link " id="ijso-tab" data-toggle="tab" href="#ijso" role="tab" aria-controls="home" aria-selected="true">IJSO<br>(Previous year paper & solution)</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link " id="neet-tab" data-toggle="tab" href="#neet" role="tab" aria-controls="home" aria-selected="true">NEET<br>(Previous year paper & solution)</a>
                                </li>
                                                           </ul>
                        </div>
                    </div>
                </div>
                <!--//Left SideBar-->
                <!--Content Section-->
                <div class="col-12 col-md-9 col-lg-6 col-xl-6 right-section1">
                    <!-- Course Block-->
                    <div class="topbreadcrumb">
                        <ul>
                            <li><a href="https://www.matrixedu.in/"> Home </a> </li>
                            <li><span>Question Paper & Solutions </a></span> </li>
                        </ul>
                    </div>
                    <div class="box-shadow mtb-25">
                        <div class="questionpaper-content">
                            <div class="tab-content" id="myTabContent">
                                                               <div class="tab-pane fade show active" id="jeemain" role="tabpanel" aria-labelledby="jeemain-tab">                                 
                                    <div class="pt-3">
                                        <h4 class="answer-title mb-0 pb-0">JEE Main</h4>
                                        <p>Joint Entrance Examination (JEE) MAIN will be conducted by the NTA from 2019 onwards. This Examination was being conducted by the Central Board of Secondary Education (CBSE) till 2018.  JEE Main is applicable for admission to NITs, IIITs and CFTIs participating though Central Seat Allocation Board subject to the condition that the candidate should have secured at least 75% marks in the 12th class examination, or be in the top 20 percentile in the 12th class examination conducted by the respective Boards. For SC/ST candidates the qualifying marks would be 65% in the 12th class examination.</p>
                                                                            </div>
                                    <div class="yearlylist mb-3">
                                                                                <div class="jeeadvance-table">
                                            <div class="subtitle"> JEE Main papers<i class="icon-03"></i></div>
                                            <table class="table table-bordered jeeque-title">
                                                <tbody class="yearlypaperlinks">
													                                                    <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-Aug-2021-Answerkey-Solution"> JEE (Main) Aug 2021  </a>&nbsp;:&nbsp;<spa>JEE (Main) Aug 2021 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-July-2021-Answerkey-Solution"> JEE (Main) July 2021  </a>&nbsp;:&nbsp;<spa>JEE (Main) July 2021 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-March-2021-Answerkey-Solution"> JEE (Main) March 2021  </a>&nbsp;:&nbsp;<spa>JEE (Main) March 2021 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-Feb-2021-Answerkey-Solution"> JEE (Main) Feb 2021  </a>&nbsp;:&nbsp;<spa>JEE (Main) Feb 2021 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/NTA-JEE-Main-Sep-2020-Answerkey-Solution"> JEE (Main) Sep 2020  </a>&nbsp;:&nbsp;<spa>JEE (Main) Sep 2020 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-2020-Answerkey-Solution"> JEE (Main) Jan 2020  </a>&nbsp;:&nbsp;<spa>JEE (Main) Jan 2020 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-Apr-2019-Answerkey-Solution"> JEE (Main) Apr 2019  </a>&nbsp;:&nbsp;<spa>JEE (Main) Apr 2019 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-Jan-2019-Answerkey-Solution"> JEE (Main) Jan 2019  </a>&nbsp;:&nbsp;<spa>JEE (Main) 2019 Jan Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-2018-Answerkey-Solution"> JEE (Main) 2018  </a>&nbsp;:&nbsp;<spa>JEE (Main) 2018 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-2017-Answerkey-Solution"> JEE (Main) 2017  </a>&nbsp;:&nbsp;<spa>JEE (Main) 2017 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-2016-Answerkey-Solution"> JEE (Main) 2016  </a>&nbsp;:&nbsp;<spa>JEE (Main) 2016 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Main-2015-Answerkey-Solution"> JEE (Main) 2015  </a>&nbsp;:&nbsp;<spa>JEE (Main) 2015 Question Paper with Solution</spa></td>
                                                    </tr>
                                                                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                    </div>
						                                       <div class="tab-pane fade show " id="jeeadvanced" role="tabpanel" aria-labelledby="jeeadvanced-tab">                                 
                                    <div class="pt-3">
                                        <h4 class="answer-title mb-0 pb-0">JEE Advanced</h4>
                                        <p>Joint Entrance Examination – Advanced (JEE-Advanced), formerly the Indian Institutes of Technology-Joint Entrance Examination (IIT-JEE), is an academic examination held annually in India. It is conducted by one of the seven zonal IITs (IIT Roorkee, IIT Kharagpur, IIT Delhi, IIT Kanpur, IIT Bombay, IIT Madras, and IIT Guwahati) under guidance of the Joint Admission Board (JAB).</p>
                                                                            </div>
                                    <div class="yearlylist mb-3">
                                                                                <div class="jeeadvance-table">
                                            <div class="subtitle"> JEE Advanced papers<i class="icon-03"></i></div>
                                            <table class="table table-bordered jeeque-title">
                                                <tbody class="yearlypaperlinks">
													                                                    <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2022-Answerkey-Video-Solution"> JEE (ADVANCED) 2022  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2022 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2021-Answerkey-Video-Solution"> JEE (ADVANCED) 2021  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2021 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2020-Answerkey-Video-Solution"> JEE (ADVANCED) 2020  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2020 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2019-Answerkey-Video-Solution"> JEE (ADVANCED) 2019  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2019 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2018-Answerkey-with-Solution"> JEE (ADVANCED) 2018   </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2018 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2017-Answerkey-with-Solution"> JEE (ADVANCED) 2017  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2017 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2016-Answerkey-with-Solution"> JEE (ADVANCED) 2016  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2016 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/JEE-Advanced-2015-Answerkey-with-Solution"> JEE (ADVANCED) 2015  </a>&nbsp;:&nbsp;<spa>JEE (Advanced) 2015 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                    </div>
						                                       <div class="tab-pane fade show " id="ijso" role="tabpanel" aria-labelledby="ijso-tab">                                 
                                    <div class="pt-3">
                                        <h4 class="answer-title mb-0 pb-0">IJSO</h4>
                                        <p></p>
                                                                            </div>
                                    <div class="yearlylist mb-3">
                                                                                <div class="jeeadvance-table">
                                            <div class="subtitle"> IJSO papers<i class="icon-03"></i></div>
                                            <table class="table table-bordered jeeque-title">
                                                <tbody class="yearlypaperlinks">
													                                                    <tr>
                                                        <td><a href="https://www.matrixedu.in/viewpdf/IJSO 2018 Question Papers and Solutions.pdf"> IJSO 2018   </a>&nbsp;:&nbsp;<spa>IJSO 2018 Question Papers and Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/viewpdf/IJSO 2017 Question Papers and Solutions.pdf"> IJSO 2017  </a>&nbsp;:&nbsp;<spa>IJSO 2017 Question Papers and Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/viewpdf/IJSO 2016 Question Papers and Solutions.pdf"> IJSO 2016  </a>&nbsp;:&nbsp;<spa>IJSO 2016 Question Papers and Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="https://www.matrixedu.in/viewpdf/IJSO 2015 Question Papers and Solutions.pdf"> IJSO 2015  </a>&nbsp;:&nbsp;<spa>IJSO 2015 Question Papers and Solutions</spa></td>
                                                    </tr>
                                                                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                    </div>
						                                       <div class="tab-pane fade show " id="neet" role="tabpanel" aria-labelledby="neet-tab">                                 
                                    <div class="pt-3">
                                        <h4 class="answer-title mb-0 pb-0">NEET</h4>
                                        <p></p>
                                                                            </div>
                                    <div class="yearlylist mb-3">
                                                                                <div class="jeeadvance-table">
                                            <div class="subtitle"> NEET papers<i class="icon-03"></i></div>
                                            <table class="table table-bordered jeeque-title">
                                                <tbody class="yearlypaperlinks">
													                                                    <tr>
                                                        <td><a href="NEET-UG-2022-Answerkey-Text-Video-Solution"> NEET 2022  </a>&nbsp;:&nbsp;<spa>NEET 2022 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="NEET-2021-Answerkey-Video-Solution"> NEET 2021  </a>&nbsp;:&nbsp;<spa>NEET 2021 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="NEET-2020-Answerkey-Video-Solution"> NEET 2020  </a>&nbsp;:&nbsp;<spa>NEET 2020 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td><a href="NEET-2019-Answerkey-Video-Solution"> NEET 2019  </a>&nbsp;:&nbsp;<spa>NEET 2019 Question Paper with Solutions</spa></td>
                                                    </tr>
                                                                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                    </div>
						       	
                            </div>
                        </div>
                    </div>
                    <!--//.Course Block-->
                </div>
                <!--//Content Section-->
                <!--Right SideBar-->
                <div class="col-12 col-md-12 col-lg-3 col-xl-3 box-shadow addsidebar">
	<div class="rightadd-sidebar panelrightDownloads">
		<ul class="sidebarad">		
			<li>
				<div class="ad-admission mt-3 ">
					<a href="https://www.matrixedu.in/result/advanced" title="Best JEE Advanced Result in Sikar"><img src="https://www.matrixedu.in/assets/default/images/Best_jee_adv_result.jpg" alt=""/></a>
				</div>
			</li>	
			<li>
				<div class="ad-admission mt-3 pb-2">
					<a href="https://www.matrixedu.in/applyonline" title="Admissions are open for JEE Main & Advanced"><img src="https://www.matrixedu.in/assets/default/images/Admissions_are_open.jpg" alt=""/></a>
				</div>
			</li>
			<li>
				<div class="ad-admission mt-3 ">
					<a href="https://www.matrixedu.in/result/main" title="Best JEE Main Result in Sikar"><img src="https://www.matrixedu.in/assets/default/images/Best_jee_main_result.jpg" alt=""/></a>
				</div>
			</li>
			<li>
				<div class="ad-admission mt-3 pb-2">
					<a href="https://www.matrixedu.in/applyonline" title="Admissions are open for JEE Main & Advanced"><img src="https://www.matrixedu.in/assets/default/images/agileCourse.jpg" alt=""/></a>
				</div>
			</li>
					</ul>
	</div>
</div>                <!--//Right SideBar-->
            </div>
        </div>
</div>
<script>
	function openNav() {
		$("#filterSideBar").css({
			"width": "250px",
			"paddingLeft": "10px",
			"paddingRight": "10px"
		});
	}

	function closeNav() {
		$("#filterSideBar").css({
			"width": "0px",
			"paddingLeft": "0px",
			"paddingRight": "0px"
		});
	}
</script>


@include('front.pages.matrix_form')
@stop