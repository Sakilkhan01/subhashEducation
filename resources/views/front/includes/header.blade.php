<!-- Header start-->
<div class="header-section">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"> <img class="logo" src="{{ asset('assets/images/logo.png') }}" /> </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMatrixContent" aria-controls="navbarMatrixContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction(this)">
                        <div class="bar1"></div>

                        <div class="bar2"></div>

                        <div class="bar3"></div>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarMatrixContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item active">

              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 

            </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About us
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('about-matrix') }}">About Subhash Education Society </a>

                                    <a class="dropdown-item" href="{{ url('why-matrix') }}">Why Subhash Education Society </a>

                                    <a class="dropdown-item" href="{{ url('facilities') }}"> Facilities </a>

                                    <!-- <a class="dropdown-item" href="{{ url('/matrix-online-test-video-lab') }}"> Matrix Online Test &amp; Video Lab </a>

                                    <a class="dropdown-item" href="{{ url('testimonials') }}"> Testimonials </a> -->

                                    <a class="dropdown-item" href="{{ url('gallery') }}"> Photo Gallery </a>

                                    <a class="dropdown-item" href="{{ url('videogallery') }}"> Video Gallery </a>

                                    <a class="dropdown-item" href="{{ url('faq') }}"> FAQs </a>
                                </div>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('courses') }}"> Courses </a>
                            </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Results
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/result/advance') }}">JEE Advanced Result </a>
                                    <a class="dropdown-item" href="{{ url('/result/main') }}"> JEE Main Result </a>
                                    <a class="dropdown-item" href="{{ url('competitive-exams-result') }}">
                                        Other Result<br />
                                        <br />
                                        (KVPY, NTSE, Olympiads etc.)
                                    </a>
                                    <a class="dropdown-item" href="{{ url('final-college-allotment') }}"> Final College Allotment </a>

                                    <a class="dropdown-item" href="{{ url('matrix_alumni') }}"> Subhash Education Society Achievers </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admissions
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('applyonline') }}"> Apply for direct Admission </a>
                                    <a class="dropdown-item" href="{{ url('apply-online-for-matrix-sat') }}"> Apply online for M-SAT</a>
                                    <a class="dropdown-item" href="{{ url('searchmsatcandidate') }}"> Pay M-SAT fee </a>
                                    <a class="dropdown-item" href="{{ url('download-msat-admitcard') }}"> Download M-SAT Admit Card </a>
                                    <a class="dropdown-item" href="{{ url('fee-structure') }}"> Fee structure </a>
                                    <a class="dropdown-item" href="{{ url('matrix-scholarship') }}"> Scholarship </a>
                                    <a class="dropdown-item" href="https://www.matrixedu.in/brochure.pdf" target="_blank">Download admission brochure</a>
                                </div>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    For Students
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('downloads-paper') }}">Question Papers &amp; Solutions </a>
                                    <a class="dropdown-item" href="{{ url('jee-college-branch-predictor') }}" target="_blank">College &amp; Branch Predictor - JEE 2022 </a>
                                    <a class="dropdown-item" href="{{ url('jossacounselling/jeemainrankpredictor') }}" target="_blank">JEE Main Rank Predictor </a>
                                    <a class="dropdown-item" href="{{ url('neetpredictor') }}" target="_blank">NEET Rank Predictor 2022</a>
                                </div>
                            </li> -->

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank"> Student Login </a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Careers
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('applynowforftp') }}">Apply here for FTP programs</a>
                                    <a class="dropdown-item" href="{{ url('applynow/forjob') }}">Apply here for all other vacancies</a>
                                    <a class="dropdown-item" href="{{ url('facultytrainingprogram') }}">Faculty Training Program</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact-us') }}"> Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header end-->