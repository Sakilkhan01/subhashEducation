@extends('front.layouts.app') @section('content')
<link rel="stylesheet" href="{{ url('assets/css/achivers.css') }}" />
<section class="innerheader">
    <div class="container">
        <h2><span>MATRIX ACHIEVERS </span></h2>
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

                <li><span>MATRIX ACHIEVERS</span></li>
            </ul>
        </ul>
    </div>
</section>

<section class="search-achivers">
    <div class="container">
        <form action="https://www.matrixedu.in/matrix_alumni" method="get" accept-charset="utf-8" autocomplete="off" id="dialog_form" enctype="multipart/form-data" class="my-form">
            <div class="row">
                <div class="form-group col-sm-12 col-lg-6">
                    <input
                        name="name"
                        value=""
                        placeholder="Search result by student name, selected in college name, roll no, address."
                        title="Search result by student name, selected in college name, roll no, address."
                        type="text"
                        class="form-control"
                    />
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                    <select name="batch" id="batch" class="form-control">
                        <option value="">Select Batch</option>

                        <option value="2014_2015">2014-2015</option>

                        <option value="2015_2016">2015-2016</option>

                        <option value="2016_2017">2016-2017</option>

                        <option value="2017_2018">2017-2018</option>

                        <option value="2018_2019">2018-2019</option>
                        <option value="2019_2020">2019-2020</option>
                        <option value="2020_2021">2020-2021</option>
                    </select>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                    <button type="submit" class="btn btn-primary findbtn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20138.jpg" alt="Nishant" title="Nishant" />
                </div>

                <div class="stdent-nam">
                    Nishant
                    <span>S/D of Shri SANJAY KUMAR</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20138</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> House No. 135, Bhiwani</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20267.jpg" alt="Narender Meena" title="Narender Meena" />
                </div>

                <div class="stdent-nam">
                    Narender Meena
                    <span>S/D of Shri RAMAVATAR MEENA</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20267</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Railway Colony Churu, Churu</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22551.jpg" alt="Satish Saini" title="Satish Saini" />
                </div>

                <div class="stdent-nam">
                    Satish Saini
                    <span>S/D of Shri SAGAR MAL SAINI</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22551</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Dhani Jairamka Wali, Shrimadhopur, Sikar</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22367.jpg" alt="Rohit Kumar" title="Rohit Kumar" />
                </div>

                <div class="stdent-nam">
                    Rohit Kumar
                    <span>S/D of Shri MOHAN RAM</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22367</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Lunoda, Didwana, Nagaur</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/21544.jpg" alt="Ashok Saran" title="Ashok Saran" />
                </div>

                <div class="stdent-nam">
                    Ashok Saran
                    <span>S/D of Shri SANWATA RAM</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>21544</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Jyak, Bidasar, Churu</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20769.jpg" alt="Rohit Pachar" title="Rohit Pachar" />
                </div>

                <div class="stdent-nam">
                    Rohit Pachar
                    <span>S/D of Shri MANSARAM PACHAR</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20769</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Vpo Bhairunpura, Dhod, Sikar</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20438.jpg" alt="Sahil" title="Sahil" />
                </div>

                <div class="stdent-nam">
                    Sahil
                    <span>S/D of Shri MAHENDER SINGH</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20438</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Amirwas, Loharu, Bhiwani</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20753.jpg" alt="Chandan Soni" title="Chandan Soni" />
                </div>

                <div class="stdent-nam">
                    Chandan Soni
                    <span>S/D of Shri GAURI SHANKER SONI</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20753</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Nohar, Hanumangarh</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20387.jpg" alt="Divya" title="Divya" />
                </div>

                <div class="stdent-nam">
                    Divya
                    <span>S/D of Shri JAISINGH</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20387</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Alipur, Chirawa, Jhunjhunu</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22514.jpg" alt="Ashish Kumar Saini" title="Ashish Kumar Saini" />
                </div>

                <div class="stdent-nam">
                    Ashish Kumar Saini
                    <span>S/D of Shri DAULAT RAM SAINI</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22514</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Nangal, Shrimadhopur, Sikar</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22382.jpg" alt="Rekha Sharma" title="Rekha Sharma" />
                </div>

                <div class="stdent-nam">
                    Rekha Sharma
                    <span>S/D of Shri Ramratan Sharma</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22382</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress">
                    <span> Address: </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20313.jpg" alt="Ramswarup Rathi" title="Ramswarup Rathi" />
                </div>

                <div class="stdent-nam">
                    Ramswarup Rathi
                    <span>S/D of Shri SHARWAN RAM</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20313</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Mindasari, Ladnun, Nagaur</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22444.jpg" alt="Rinkesh Jhajhria" title="Rinkesh Jhajhria" />
                </div>

                <div class="stdent-nam">
                    Rinkesh Jhajhria
                    <span>S/D of Shri HAWA SINGH</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22444</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Gordhan Pura, Buhana, Jhunjhunu</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20666.jpg" alt="Kirtan Bhaskar" title="Kirtan Bhaskar" />
                </div>

                <div class="stdent-nam">
                    Kirtan Bhaskar
                    <span>S/D of Shri BHAGIRATH MAL</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20666</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Bhakharon Ki Dhani, Laxmangarh, Sikar</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22333.jpg" alt="lakshay" title="lakshay" />
                </div>

                <div class="stdent-nam">
                    lakshay
                    <span>S/D of Shri dharmander Singh</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22333</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress">
                    <span> Address: </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22424.jpg" alt="Himanshu Poonia" title="Himanshu Poonia" />
                </div>

                <div class="stdent-nam">
                    Himanshu Poonia
                    <span>S/D of Shri Indraj Singh</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22424</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress">
                    <span> Address: </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22387.jpg" alt="Tejas Khyalia" title="Tejas Khyalia" />
                </div>

                <div class="stdent-nam">
                    Tejas Khyalia
                    <span>S/D of Shri MAHENDRA SINGH</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>22387</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Katrathal, Sikar</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/20224.jpg" alt="Raj Kumar" title="Raj Kumar" />
                </div>

                <div class="stdent-nam">
                    Raj Kumar
                    <span>S/D of Shri SOHAN LAL</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Bombay</li>

                        <li>Matrix Roll No.: <span>20224</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Siriyasar Kalan, Jhunjhunu</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/22769.jpg" alt="Pankaj Kumar" title="Pankaj Kumar" />
                </div>

                <div class="stdent-nam">
                    Pankaj Kumar
                    <span>S/D of Shri SATYAWAN</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Delhi</li>

                        <li>Matrix Roll No.: <span>22769</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress"><span> Address: </span> Shekhupur Daroli, Fatehabad</div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="studentbox">
                <div class="studentimgth">
                    <img src="https://www.matrixedu.in/assets/uploads/ourstars/noImage.jpg" alt="Ravindra Kumar" title="Ravindra Kumar" />
                </div>

                <div class="stdent-nam">
                    Ravindra Kumar
                    <span>S/D of Shri Subhash Chander</span>
                </div>

                <div class="student-otherinfo">
                    <ul>
                        <li>IIT - Delhi</li>

                        <li>Matrix Roll No.: <span>21886</span></li>

                        <li>Batch: <span>2020-2021</span></li>
                    </ul>
                </div>

                <div class="studnetaddress">
                    <span> Address: </span>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="text-center py-5 pagina">

			<nav aria-label="Page navigation example">

				<ul class="pagination" id="pagination1">

					<li class="page-item"><a class="page-link" href="#">Previous</a></li>

					<li class="page-item"><a class="page-link" href="#">1</a></li>

					<li class="page-item"><a class="page-link" href="#">2</a></li>

					<li class="page-item"><a class="page-link" href="#">3</a></li>

					<li class="page-item"><a class="page-link" href="#">Next</a></li>

				</ul>

			</nav>



		</div>-->
</div>

<section id="content">
    <div class="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="four-columns" class="grid-container">
                        <?php/* echo $paging;*/?>

                        <div id="pagination"></div>

                        <style>
                            #pagination {
                                display: flex;

                                height: 10vh;

                                align-items: center;

                                justify-content: center;

                                flex-direction: column;
                            }

                            .paging {
                                list-style: none;

                                padding: 0;

                                margin: 0;

                                display: flex;
                            }

                            .paging li {
                                color: #fff;

                                display: flex;
                            }

                            .paging li a {
                                background-color: #002147;

                                padding: 5px 10px;

                                border: 2px solid #002147;

                                border-right: 0;

                                color: #fff;
                            }

                            .paging li.active a {
                                background-color: #9ab87a;
                            }

                            .paging li:first-child a {
                                border-radius: 5px 0 0 5px;
                            }

                            .paging li:last-child a {
                                border-radius: 0 5px 5px 0;

                                border-right: 2px solid #002147;
                            }

                            .paging li.out-of-range {
                                cursor: pointer;
                            }
                        </style>

                        <script>
                            let pages = 105;

                            document.getElementById("pagination").innerHTML = createPagination(pages, 1);

                            function createPagination(pages, page) {
                                let str = '<ul class="paging">';

                                let active;

                                let pageCutLow = page - 1;

                                let pageCutHigh = page + 1;

                                // Show the Previous button only if you are on a page other than the first

                                if (page > 1) {
                                    str += '<li class="page-item previous no"><a  href="https://www.matrixedu.in/matrix_alumni/' + (page - 1) + '" onclick="createPagination(pages, ' + (page - 1) + ')"> << </a></li>';
                                }

                                // Show all the pagination elements if there are less than 6 pages total

                                if (pages < 6) {
                                    for (let p = 1; p <= pages; p++) {
                                        active = page == p ? "active" : "no";

                                        str += '<li class="' + active + '"><a href="https://www.matrixedu.in/matrix_alumni/' + p + '" onclick="createPagination(pages, ' + p + ')">' + p + "</a></li>";
                                    }
                                }

                                // Use "..." to collapse pages outside of a certain range
                                else {
                                    // Show the very first page followed by a "..." at the beginning of the

                                    // pagination section (after the Previous button)

                                    if (page > 2) {
                                        str += '<li class="no page-item"><a href="https://www.matrixedu.in/matrix_alumni/1" onclick="createPagination(pages, 1)">1</a></li>';

                                        if (page > 3) {
                                            str += '<li class="out-of-range"><a onclick="createPagination(pages,' + (page - 2) + ')">...</a></li>';
                                        }
                                    }

                                    // Determine how many pages to show after the current page index

                                    if (page === 1) {
                                        pageCutHigh += 2;
                                    } else if (page === 2) {
                                        pageCutHigh += 1;
                                    }

                                    // Determine how many pages to show before the current page index

                                    if (page === pages) {
                                        pageCutLow -= 2;
                                    } else if (page === pages - 1) {
                                        pageCutLow -= 1;
                                    }

                                    // Output the indexes for pages that fall inside the range of pageCutLow

                                    // and pageCutHigh

                                    for (let p = pageCutLow; p <= pageCutHigh; p++) {
                                        if (p === 0) {
                                            p += 1;
                                        }

                                        if (p > pages) {
                                            continue;
                                        }

                                        active = page == p ? "active" : "no";

                                        str += '<li class="page-item ' + active + '"><a href="https://www.matrixedu.in/matrix_alumni/' + p + '" onclick="createPagination(pages, ' + p + ')">' + p + "</a></li>";
                                    }

                                    // Show the very last page preceded by a "..." at the end of the pagination

                                    // section (before the Next button)

                                    if (page < pages - 1) {
                                        if (page < pages - 2) {
                                            str += '<li class="out-of-range"><a onclick="createPagination(pages,' + (page + 2) + ')">...</a></li>';
                                        }

                                        str += '<li class="page-item no"><a href="https://www.matrixedu.in/matrix_alumni/' + pages + '" onclick="createPagination(pages, pages)">' + pages + "</a></li>";
                                    }
                                }

                                // Show the Next button only if you are on a page other than the last

                                if (page < pages) {
                                    str += '<li class="page-item next no"><a href="https://www.matrixedu.in/matrix_alumni/' + (page + 1) + '" onclick="createPagination(pages, ' + (page + 1) + ')"> >> </a></li>';
                                }

                                str += "</ul>";

                                // Return the pagination string to be outputted in the pug templates

                                document.getElementById("pagination").innerHTML = str;

                                return str;
                            }
                        </script>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-row global-query-form" style="background: url({{ asset('assets/images/student-bg.jpg') }}) center top no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container" style="padding-top: 150px; padding-bottom: 150px;">
        <div class="achivebox text-center">
            <h5>MATRIX ACHIEVERS</h5>
            <a href="https://www.matrixedu.in/applyonline">Join Now</a>
        </div>
    </div>
</div>

@include('front.pages.matrix_form')
@stop
