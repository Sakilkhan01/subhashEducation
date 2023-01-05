@extends('front.layouts.app')
@section('content') 
  <!-- content start -->
      <!--Start Hero-->
      <section class="hero-card-web bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div class="col-lg-5">
                  <div class="hero-heading-sec">
                     <h2 class="wow fadeIn" data-wow-delay="0.3s"><span>Website,</span> <span>Software </span> <span> & Mobile App</span> <span>Development</span></h2>
                     <p class="wow fadeIn" data-wow-delay="0.6s">Leading company in providing smart business solutions for transforming and innovating businesses</p>
                 
                     <a href="#" class="niwax-btn2 wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                    
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                     <div class="video-intro-pp"><a class="video-link play-video" href="https://youtu.be/1ox4Wbq7irc?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                     <div class="title-hero-oth">
                        <p style="font-size:20px;">Checkout Our <span><strong style="color:#ffbb22;font-size:30px;">Video Portfolio</strong></span></p>
                     </div>
                  </div>
                  <div class="hero-right-scmm">
                     <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                           <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('app_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/mobile app development.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Mobile App</span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('web_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/Web-develop.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Web </span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('/DevOps') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/DevOps.png') }}">
                                    </div>
                                    <div class="title-serv-c" style="padding-bottom: 60px;"><span></span>DevOps</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('blockchain_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/blockchain.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Blockchain </span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <!-- <div class="service-slide card-bg-e" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/Game development.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Game </span> Development</div>
                                 </div>
                              </a>
                           </div> -->
                           <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('cyber_security') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ url('assets/images/service/Cyber security.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Cyber </span> Security</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Hero-->
      <!--Start About-->
      <section class="about-sec-rpb pad-tb">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-10">
                  <div class="common-heading">
                     <span>We Are Specialist</span>
                     <h1 class="mb30"><span class="text-second">Most Trusted</span> Mobile Applications and Website Development Company in India</h1>
                     <p><span class="text-bold">Prilient</span> is widely known for it's <span class="text-radius text-light text-animation bg-b">Website & Mobile Application Development</span>solutions globally. Our team of experienced backend and frontend developers makes every solution user friendly and also google friendly. 
                     </p>
                     <h3 class="mt30 mb30">Ideas, Creativity and Trending Technologies</h3>
                   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End About-->
      <!--Start Service-->
      <section class="service-section-prb pad-tb">
         <div class="container">
            <div class="row upset">
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".2s">
                  <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                     <h4 class="mb10">OUR SERVICES</h4>
                     <p>We continues to move forward by specialising in the development of custom IT solutions for mobile, web, desktop, Server Management, DevOps, Security, Game Development.</p>
                     <a href="javascript:void(0)" class="mt20 link-prb">Learn More <i class="fa fa-chevron-right fa-icon"></i></a>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".4s">
                  <div class="service-sec-list srvc-bg-nx srcl1">
                     <img src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                     <h5 class="mb10">Web Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#"><strong>.</strong>Net</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">HTML & CSS</a></li>
                     </ul>
                     <p>Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses and social network services.</p>
                  </div>
               </div>
               <div data-tilt data-tilt-max="3" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".6s">
                  <div class="service-sec-list srvc-bg-nx srcl2">
                     <img src="{{ url('assets/images/icons/Cyber Security.svg') }}" alt="service">
                     <h5 class="mb10">Cyber Securty</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Penetration Testing </a> </li>
                        <li> <a href="#">Virtual CISO</a> </li>
                  
                     </ul>
                     <p>Cyber security provides Information Security Strategy and Design to give you better security.Cyber security provides a secure foundation to transform enterprise and support business.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay=".8s">
                  <div class="service-sec-list srvc-bg-nx srcl3">
                     <img src="{{ url('assets/images/icons/Mobile App.svg') }}" alt="service">
                     <h5 class="mb10">Mobile App Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">iOs </a> </li>
                        <li> <a href="#">Android</a> </li>
                        <li> <a href="#">Wear OS </a></li>
                     </ul>
                     <p>Mobile App Development is the process by which a mobile app is developed for mobile devices. The applications can be pre-installed on phones during the manufacturing process using server side..</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay="1s">
                  <div class="service-sec-list srvc-bg-nx srcl4">
                     <img src="{{ url('assets/images/icons/Blockchain.svg') }}" alt="service">
                     <h5 class="mb10">Blockchain Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Digital Currency </a> </li>
                        <li> <a href="#">IOT </a> </li>
                        <li> <a href="#"> Banking </a></li>
                     </ul>
                     <p>Blockchain is a distributed ledger technology where data exchange happens. Blockchain enables exchange of values to precede any transaction. Blockchain supports a wide range of application which is well known as cryptocurrency like Bitcoins.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp" data-wow-delay="1.2s">
                  <div class="service-sec-list srvc-bg-nx srcl5">
                     <img src="{{ url('assets/images/icons/DevOps.svg') }}" alt="service">
                     <h5 class="mb10">DevOps</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Development </a> </li>
                        <li> <a href="#">Testing</a> </li>
                        <li> <a href="#">Integration </a></li>
                        <li> <a href="#">Delivery</a></li>
                     </ul>
                     <p>DevOps brings business, development and operation teams together and apply automated processes streamline IT. We make it possible to merge your code changes into a central repository.</p>
                  </div>
               </div>
            </div>
            <div class="-cta-btn mt70">
               <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
                  <p>Hire a <span>Dedicated Developer</span></p>
                  <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </section>
      <!--End Service-->
      <!--Start statistics-->
      <div class="statistics-section bg-gradient6 pad-tb tilt3d">
         <div class="container">
            <div class="row justify-content-center t-ctr">
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/startup.svg') }}" alt="years" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">15</span><span>+</span>
                        <p>Year In Business</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/team.svg') }}" alt="team" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">80</span><span>+</span>
                        <p>Team Members</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row small t-ctr">
               <div class="col-lg-3 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/deal.svg') }}" alt="happy" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">450</span>
                        <p>Happy Clients</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/computers.svg') }}" alt="project" class="img-fluid" />
                     </div>
                     <div class="statnumb counter-number">
                        <span class="counter">48</span><span>k</span>
                        <p>Projects Done</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/worker.svg') }}" alt="work" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">95</span><span>k</span>
                        <p>Hours Worked</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="statistics mb0">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/customer-service.svg') }}" alt="support" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">24</span><span>/</span><span class="counter">7</span>
                        <p>Support Available</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End statistics-->
      <!--why choose-->
      <section class="why-choos-lg pad-tb deep-dark">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="common-heading text-l">
                     <span>Why Choose Us</span>
                     <h2 class="mb20">Why <span class="text-second text-bold">Prilient Technologies</span> Ranked Top Among The Leading Web & App Development Companies</h2>
                     <p>Prillient is a well-established and best web development company that is eager to collaborate with you</p>
                     <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ url('assets/images/icons/computers.svg') }}" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Web & Interactive Design</h4>
                              <p>Our team collaborates closely with clients to design, implement, and utilise solutions that help your company prosper in this fast-changing and demanding world.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ url('assets/images/icons/worker.svg') }}" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Branding & Strategy</h4>
                              <p>Prillient Technologies has expertise in web design, custom software development, web development, mobile app development, e-commerce website development, SEO, Social media optimization (SMO) & many more.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ url('assets/images/icons/deal.svg') }}" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Trusted Partner</h4>
                              <p>Hundreds of different brands, ranging from big public sector operations to governments, media houses, banks, private companies, universities, social organisations, startups, and many more, rely on us as their technological partner.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ url('assets/images/about/about-company.jpg') }}" alt="image" class="img-fluid"></div>
         
                  <div class="cta-card mt60 text-center">
                     <h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
                     <p>We are excited to initiate a new project with you.  Our team will be in touch soon, but if you have any questions before then, please feel free to contact us directly at [email protected] and we will get back to you as soon as possible. Thank you for your interest in our services!</p>
                     <a href="#" class="niwax-btn1 mt30"><span>Request A Quote <i class="fa fa-chevron-right fa-icon"></i></span></a>
                  </div>
                  

               </div>
            </div>
         </div>
      </section>
      <!--End why choose-->
      <!--Start Portfolio-->
      <section class="portfolio-section pad-tb">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our Work</span>
                     <h2 class="mb0">Check Our Portfolio</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="isotope_item hover-scale">
                     <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{ url('assets/images/portfolio/image-d.jpg') }}" alt="image" class="img-fluid" /> </a>
                     </div>
                     <div class="item-info">
                        <h4><a href="#">Website Development Project</a></h4>
                        <p><a href="#">Click Here</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
                  <div class="isotope_item hover-scale">
                     <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{ url('assets/images/portfolio/image-1.jpg') }}" alt="image" class="img-fluid" /> </a>
                     </div>
                     <div class="item-info">
                        <h4><a href="#">App Development Projects</a></h4>
                        <p><a href="#">Click Here</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="isotope_item hover-scale">
                     <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{ url('assets/images/portfolio/image-6.jpg') }}" alt="image" class="img-fluid" /> </a>
                     </div>
                     <div class="item-info">
                        <h4><a href="#">Graphics & Video Projects</a></h4>
                        <p><a href="#">Click Here</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
                  <div class="isotope_item hover-scale">
                     <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{ url('assets/images/portfolio/image-c.jpg') }}" alt="image" class="img-fluid" /> </a>
                     </div>
                     <div class="item-info">
                        <h4><a href="#">Software Development Projects</a></h4>
                        <p><a href="#">Click Here</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Portfolio-->
      <!--Start Clients-->
      <section class="clients-section- bg-gradient15 pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our Clients</span>
                     <h2 class="mb30">Our Hard Clients</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="clients-logos text-center col-12">
                     <ul class="row text-center clearfix">
                        @if(!$client->isEmpty())
                           @foreach($client as $v)
                           <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
                              <div class="brand-logo">
                                 <img src="{{ url('upload/client/',$v->logo) }}" alt="{{$v->name}}" class="img-fluid">
                              </div>
                              <p>{{$v->name}}</p>
                           </li>
                           @endforeach
                        @else
                           fff
                        @endif
                        <!-- 
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".4s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-2.png') }}" alt="clients" class="img-fluid"></div>
                           <p>Abhinav Transport Company</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".6s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-3.png') }}" alt="clients" class="img-fluid"></div>
                           <p>Sharma Publication</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".8s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-4.png') }}" alt="clients" class="img-fluid"></div>
                           <p>Jaipur Global Services</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-5.png') }}" alt="clients" class="img-fluid"></div>
                           <p>Shiv Jyoti Cargo</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-6.png') }}" alt="clients" class="img-fluid"></div>
                           <p>Ficuster</p>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
                           <div class="brand-logo"><img src="{{ url('assets/images/client/clients-7.png') }}" alt="clients" class="img-fluid"></div>
                           <p>DBRC Packers & Movers</p>
                        </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Clients-->

      <!--Start Badges-->
      <section class="badges-section bg-gradient5  pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading w-tdxt">
                     <span>Our Technology</span>
                     <h2>Our Hard Technologies</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/azure.png') }}" alt="Azure"  class="img-fluid">
                   
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/angular.png') }}" alt="Angular"  class="img-fluid">
                     
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/cakephp.png') }}" alt="Cakephp"  class="img-fluid">
                    
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/codeigniter.png') }}" alt="Codeigniter"  class="img-fluid">
                   
                  </div>
               </div>
                   <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/django.png') }}" alt="Django"  class="img-fluid">
                   
                  </div>
               </div>
                   <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/elasticsearch.png') }}" alt="Elasticsearch"  class="img-fluid">
                   
                  </div>
               </div>
                   <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/flutter.png') }}" alt="Flutter"  class="img-fluid">
                   
                  </div>
               </div>
                   <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/hyperledger.png') }}" alt="Hyperledger"  class="img-fluid">
                   
                  </div>
               </div>
                <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/laravel.png') }}" alt="Laravel"  class="img-fluid">
                   
                  </div>
               </div>   
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/net.png') }}" alt=".net"  class="img-fluid">
                   
                  </div>
               </div>   
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/node.png') }}" alt="Node"  class="img-fluid">
                   
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/python.png') }}" alt="Python"  class="img-fluid">
                   
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/react.png') }}" alt="React"  class="img-fluid">
                   
                  </div>
               </div>
                 <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                  <div class="badges-content">
                     <img src="{{ url('assets/images/about/vue.png') }}" alt="Vue"  class="img-fluid">
                   
                  </div>
               </div>
             

            </div>
            <div class="-cta-btn mt70">
               <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                  <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                  <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </section>
      <!--End Badges-->
      <!--Start work-category-->
      <section class="work-category pad-tb">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 v-center">
                  <div class="common-heading text-l">
                     <span>Industries we work for</span>
                     <h2>Helping Businesses in All Domains</h2>
                     <p>Protecting your company’s digital footprint can be a tall order. At Prelient, all of our services are designed with your business goals in mind, but we offer special expertise in eCommerce, health services, finance, and more. We prioritize assessing your business’s needs and providing solutions designed to keep your data secure while allowing you to do business with ease.</p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="work-card-set">
                     <div  class="icon-set wow fadeIn" data-wow-delay=".2s">
                        <div class="work-card cd1">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-1.png') }}" alt="Industries" /></div>
                           <p>E-Commerce Development</p>
                        </div>
                     </div>
                     <div  class="icon-set wow fadeIn" data-wow-delay=".4s">
                        <div class="work-card cd2">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-2.png') }}" alt="Industries" /></div>
                           <p>Enterprise Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                        <div class="work-card cd3">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-3.png') }}" alt="Industries" /></div>
                           <p>Educational Servces
                           </p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                        <div class="work-card cd4">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-4.png') }}" alt="Industries" /></div>
                           <p>Health Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-5.png') }}" alt="Industries" /></div>
                           <p>Banking & Finance</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-6.png') }}" alt="Industries" /></div>
                           <p>Hospitality Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-7.png') }}" alt="Industries" /></div>
                           <p>Digital Marketing</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-8.png') }}" alt="Industries" /></div>
                           <p>Tour and Travels</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-9.png') }}" alt="Industries" /></div>
                           <p>Entertainment & Videos</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-10.png') }}" alt="Industries" /></div>
                           <p>Event Planner Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                        <div class="work-card cd11">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-11.png') }}" alt="Industries" /></div>
                           <p>Real Estate Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                        <div class="work-card cd12">
                           <div class="icon-bg"><img src="{{ url('assets/images/icons/icon-12.png') }}" alt="Industries" /></div>
                           <p>Government Organisations</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End  work-category-->
      <!--Start Testinomial-->
      <section class="testinomial-section bg-none pad-tb">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>What our clients say about Prilient.</span>
                     <h2>Over 1200+ Satisfied Clients and Growing</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="video-testimonials owl-carousel">
                     <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        <a class="video-link" href="https://youtu.be/1ox4Wbq7irc">
                           <img src="{{ url('assets/images/client/client-pic-a.jpg') }}" alt="client" class="img-fluid">
                           <div class="review-vid-details">
                              <div class="-vid-ico"><span class="triangle-play2"></span></div>
                              <p>Prilient's Portfolio</p>
                           </div>
                        </a>
                     </div>
                     <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        <a class="video-link" href="https://youtu.be/1ox4Wbq7irc">
                           <img src="{{ url('assets/images/client/client-pic-b.jpg') }}" alt="client" class="img-fluid">
                           <div class="review-vid-details">
                              <div class="-vid-ico"><span class="triangle-play2"></span></div>
                              <p>Prilient's Vision</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="owl-carousel testimonial-card-a pl25">
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Working with Prillient has been a positive experience. They were able to respond to the project's quick requirements and changes by making themselves available for daily standups.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info v-center">
                                 <h5>Amanta R.</h5>
                                 <p><small>Lewis, Swifi, Android, Iphone, ASP.NET Programming.</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Prillient has been a pleasure to work with and has consistently delivered on their promises. I hope to enroll myself with them in the coming future. It was a nice experience to share our work with this developer. It comes highly recommended. As usual, fantastic work. Fantastic Business Partners. It is the best software development company around.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Helsinki Braithwaite</h5>
                                 <p><small>Javascript, Couch &amp; Mongo, NOSQL, SQL, Node JS, JSON.</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>It was a once-in-a-lifetime opportunity. This is a very professional group. Work of outstanding quality. Communication was excellent. We will surely continue to collaborate with this outstanding web development company on future projects.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Luiz Fernandez</h5>
                                 <p><small>ASP.NET Programming, Javascript, Mobile App Development, React JS.</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>A truly exceptional service provider. Available, prompt, and precise. Always willing to take charge and make things right. Count yourself lucky if you can acquire this group.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Mary Daniels</h5>
                                 <p><small>C#, Programming, Azure, SQL, Microsoft, Angular JS, Server.</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>It's been a pleasure working with Prelient. They were really receptive to the adjustments. They thoroughly considered our needs and delivered on time and on budget! Working with Prillient was the greatest because they were available all through the project.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Shinzo Markel</h5>
                                 <p><small>ASP.NET Programming, Angular JS, React JS.</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="testimonial-card">
                        <div class="t-text">
                           <p>Prillient Infotech was always reliable in terms of resolving problems in a timely manner &amp; can be called the topmost custom software development company in town. They have a lot of experienced engineers and developers, and Shalini is a great manager who always gets our requirements right. We will engage them again for future projects without a doubt.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="{{ url('assets/images/user-thumb/girl.jpg') }}" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Mbola Smith</h5>
                                 <p><small>Mobile App Development, Android, Iphone, React JS</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </section>
      <!--End Testinomial-->
      <!--Start CTA-->
      <section class="cta-area pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Let's work together</span>
                     <h2>We Love to Listen to Your Requirements</h2>
                     <a href="javascript:void(0)" class="btn-outline">Estimate Project <i class="fa fa-chevron-right fa-icon"></i></a>
                     <p class="cta-call">Or call us now <a href="tel:7976026086"><i class="fa fa-phone"></i> +91 7976026086</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-a1"><img src="{{ url('assets/images/shape/shape-3.svg') }}" alt="shape"></div>
         <div class="shape shape-a2"><img src="{{ url('assets/images/shape/shape-4.svg') }}" alt="shape"></div>
         <div class="shape shape-a3"><img src="{{ url('assets/images/shape/shape-13.svg') }}" alt="shape"></div>
         <div class="shape shape-a4"><img src="{{ url('assets/images/shape/shape-11.svg') }}" alt="shape"></div>
      </section>
      <!--End CTA-->
      <!--Start Location-->
      <section class="our-office pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our Locations</span>
                     <h2>Our Office</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="{{ url('assets/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>New York (U.S.A.)</h4>
                        <p>603 FA Forest Avenue, New York, USA 10021</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="tel:7976026086" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="mailto:ankit@prilient.com" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="skype:Ankit Ola?chat" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="{{ url('assets/images/location/jaipur.png') }}" alt="Jaipur" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Jaipur (Rajasthan, India)</h4>
                        <p>412-13, 4th Floor, Ever Shine Tower, Amrapali Circle, Vaishali Nagar Jaipur</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="tel:7976026086" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="mailto:ankit@prilient.com" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="skype:Ankit Ola?chat" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
                  <div class="office-card mb0">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="{{ url('assets/images/location/noida.png') }}" alt="rome" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Noida (Uttarpradesh, India)</h4>
                        <p>H-15,2ndfloor,BSI BusinessPark,Sector-63,Noida-201307(UP)</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <!--End Location-->
  <!-- content end -->
@endsection