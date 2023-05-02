<div 
         class="style-full-width-layout page-layout theme25 clearfix ">
         <div class="header-wrapper main-header-wrapper horizontal-header-wrapper ">
            <div class="header-row  header-row-top"
               style="background-color: #ffffff;">
               <div class="header-row-space top" style="height: 8px"></div>
               <div class="flex flex-row align-center flex-header container relative">
                  <div class="flex-1 header-widget-container flex flex-row">
                     <div class="header-widget-space" style="width: 0px"></div>
                     <div class="header-widget" id="header-widget-1582544254326" data-type="headers/Icon">
                        <div class="icon">
                           <i class="fa fa-map-marker" 
                              style="color: #3a3a3a; font-size: 22px;"></i>
                        </div>
                     </div>
                     <div class="header-widget-space" style="width: 26px"></div>
                     <div class="header-widget" id="header-widget-1582544254325"
                        data-type="headers/Text">
                        <!--textWidget-->
                        <div class="text-widget-content">
                           <p>{{ADDRESS}}</p>
                        </div>
                     </div>
                     <div class="header-widget-space" style="width: 35px"></div>
                     <div class="header-widget" id="header-widget-1582544254324" data-type="headers/Icon">
                        <div class="icon">
                           <i class="fa fa-phone" 
                              style="color: #3a3a3a; font-size: 22px;"></i>
                        </div>
                     </div>
                     <div class="header-widget-space" style="width: 28px"></div>
                     <div class="header-widget" id="header-widget-1582544254323"
                        data-type="headers/Text">
                        <!--textWidget-->
                        <div class="text-widget-content">
                           <p><a href="#">{{PHONE_NO[0]}}</a>, 
                              <a href="#">{{PHONE_NO[1]}}</a>, 
                              <a href="#">{{PHONE_NO[2]}}</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="flex-none header-widget-container flex flex-row">
                  </div>
                  <div class="flex-1 header-widget-container flex flex-row justify-flex-end">
                     <div class="header-widget" id="header-widget-1582544254322" data-type="headers/SocialMedia">
                        <a class="social-media-button slow-transition-bg" href="{{FACEBOOK}}" target="_blank">
                        <i class="fa fa-facebook bg-color-primary"></i>
                        </a>
                        <a class="social-media-button slow-transition-bg" href="{{TWITTER}}" target="_blank">
                        <i class="fa fa-twitter bg-color-primary"></i>
                        </a>
                        <a class="social-media-button slow-transition-bg" href="{{LINKEDIN}}" target="_blank">
                        <i class="fa fa-linkedin-square bg-color-primary"></i>
                        </a>
                        <a class="social-media-button slow-transition-bg" href="{{YOUTUBE}}" target="_blank">
                        <i class="fa fa-youtube-play bg-color-primary"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-row  header-row-main"
               style="background-color: #ffffff;">
               <div class="header-row-space top" style="height: 15px"></div>
               <div class="flex flex-row align-center flex-header container relative">
                  <div class="flex-1 header-widget-container flex flex-row">
                     <div class="header-widget-space" style="width: 0px"></div>
                     <div class="header-widget" id="header-widget-1582544097160"
                        data-type="headers/Logo">
                        <div class="theme-logo" data-role="logo">
                           <a href="" rel="home">
                           <span>
                           <img src="{{ asset('assets/images/logo.png') }}" alt="hh" style="max-height: 90px;" />
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="flex-none header-widget-container flex flex-row">
                  </div>
                  <div class="flex-1 header-widget-container flex flex-row justify-flex-end">
                     <div class="header-widget" id="header-widget-1582544097161"
                        data-type="headers/Menu">
                        
                        <div class=" right-submenu menu-widget with-border   
                           left mobile-column horizontal-menu-styling"
                           style="background: transparent">
                           <nav class="mobile-headerBackgroundColor">
                              <ul class="clearfix">
                                 <li  class=" ">
                                    <a class="website-nav-link" rel="tab" href="{{ url('/') }}"
                                       >
                                    Home
                                    </a>
                                 </li>
                                 <li  class="  with-submenu">
                                    <a class="website-nav-link" rel="tab" href="javascript:void(0)"
                                       >
                                    About
                                    <i class="submenu-arrow fa fa-angle-right"></i>
                                    </a>
                                    <div>
                                       <ul class=" ">
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('/gallery') }}" >Photo Gallery</a>
                                          </li>
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('videogallery') }}" >Video Gallery</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li  class=" ">
                                    <a class="website-nav-link" rel="tab" href="{{ route('selection.show') }}"
                                       >
                                    Selection Corner
                                    </a>
                                 </li>
                                 <li  class="  with-submenu">
                                    <a class="website-nav-link" rel="tab" href="javascript:void(0)"
                                       >
                                    Admission
                                    <i class="submenu-arrow fa fa-angle-right"></i>
                                    </a>
                                    <div>
                                       <ul class=" ">
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('/hostel') }}" >Hostel</a>
                                          </li>
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('documents') }}" >Documents</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li  class=" ">
                                    <a class="website-nav-link" rel="tab" href="/postove"
                                       >
                                    News
                                    </a>
                                 </li>
                                 <li  class=" ">
                                    <a class="website-nav-link" rel="tab" href="/free-consultation"
                                       >
                                    Contact
                                    </a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mobile-header-overlay"></div>
         <div class="mobile-menu "
            style="background: #ffffff">
            <ul class="navToggle burger slide mobile-burger">
               <li class="before"></li>
               <li class="middle"></li>
               <li class="after"></li>
            </ul>
            <div class="mobile-menu-logo">
               <div class="header-widget" id="header-widget-1582544097160-mobile"
                  data-type="headers/Logo">
                  <div class="theme-logo" data-role="logo">
                     <a href="//sakilkhan.myschooldesign.com" rel="home">
                     <span>
                     <img src="assets/images/logo.png" alt="hh" style="max-height: 110px;" />
                     </span>
                     </a>
                  </div>
               </div>
            </div>
            <style type="text/css">
               
            </style>
            <div class="mobile-header-wrapper " style="background: #ffffff">
               <div class="header-widget" id="header-widget-1582544097161-mobile"
                  data-type="headers/Menu">
                  
                  <div class=" right-submenu menu-widget with-border   
                     design-4 center mobile-column vertical-menu-styling"
                     style="background: transparent">
                     <nav class="mobile-headerBackgroundColor">
                        <ul class="clearfix">
                           <li  class=" ">
                              <a class="website-nav-link" rel="tab" href="/za-fakulteta"
                                 >
                              School
                              </a>
                           </li>
                           <li  class="  with-submenu">
                              <a class="website-nav-link" rel="tab" href="/about"
                                 >
                              About
                              <i class="submenu-arrow fa fa-angle-right"></i>
                              </a>
                              <div>
                                       <ul class=" ">
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('/gallery') }}" >Photo Gallery</a>
                                          </li>
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('videogallery') }}" >Video Gallery</a>
                                          </li>
                                       </ul>
                                    </div>
                           </li>
                           <li  class=" ">
                                    <a class="website-nav-link" rel="tab" href="{{ route('selection.show') }}"
                                       >
                                    Selection Corner
                                    </a>
                           </li>
                           <li  class="  with-submenu">
                                    <a class="website-nav-link" rel="tab" href="javascript:void(0)"
                                       >
                                    Admission
                                    <i class="submenu-arrow fa fa-angle-right"></i>
                                    </a>
                                    <div>
                                       <ul class=" ">
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('/hostel') }}" >Hostel</a>
                                          </li>
                                          <li>
                                             <a class="website-nav-link" rel="tab" href="{{ url('documents') }}" >Documents</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                           <li  class=" ">
                              <a class="website-nav-link" rel="tab" href="/postove"
                                 >
                              News
                              </a>
                           </li>
                           <li  class=" ">
                              <a class="website-nav-link" rel="tab" href="/free-consultation"
                                 >
                              Contact
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="header-widget" id="header-widget-1582544254325-mobile"
                  data-type="headers/Text">
                  <!--textWidget-->
                  <div class="text-widget-content">
                     <p>{{ADDRESS}}</p>
                  </div>
               </div>
               <div class="header-widget" id="header-widget-1582544254323-mobile"
                  data-type="headers/Text">
                  <!--textWidget-->
                  <div class="text-widget-content">
                     <p><a href="#">{{PHONE_NO[0]}}</a>, 
                              <a href="#">{{PHONE_NO[1]}}</a>, 
                              <a href="#">{{PHONE_NO[2]}}</a></p>
                  </div>
               </div>
               <div class="header-widget" id="header-widget-1582544254322-mobile" data-type="headers/SocialMedia">
                  <style type="text/css">
                     #header-widget-1582544254322-mobile .social-media-button i {
                     color: #ffffff;
                     padding: 10px;
                     font-size: 12px;
                     height: 12px;
                     width: 12px;
                     line-height: 12px;
                     border-radius: 0px;
                     }
                     #header-widget-1582544254322-mobile .social-media-button:hover i {
                     background: #444 !important;
                     }
                  </style>
                  <a class="social-media-button slow-transition-bg" href="{{FACEBOOK}}" target="_blank">
                  <i class="fa fa-facebook bg-color-primary"></i>
                  </a>
                  <a class="social-media-button slow-transition-bg" href="{{TWITTER}}" target="_blank">
                  <i class="fa fa-twitter bg-color-primary"></i>
                  </a>
                  <a class="social-media-button slow-transition-bg" href="{{LINKEDIN}}" target="_blank">
                  <i class="fa fa-linkedin-square bg-color-primary"></i>
                  </a>
                  <a class="social-media-button slow-transition-bg" href="{{YOUTUBE}}" target="_blank">
                  <i class="fa fa-youtube-play bg-color-primary"></i>
                  </a>
               </div>
            </div>
            <ul class="shopping-cart shopping-cart-mobile  none  with-quick-cart ">
               <li class="cart-button">
                  <a href="/store/cart" class="website-nav-link" title="Cart">
                     <svg enable-background="new 0 0 96 96" height="96px" id="bag" version="1.1" viewBox="0 0 96 96" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 24 24; width: 24px; height: 24px;
                        fill: #3e3e3e;">
                        <path d="M68,24v-4C68,8.954,59.046,0,48,0S28,8.954,28,20v4H12v60c0,6.63,5.37,12,12,12h48c6.63,0,12-5.37,12-12V24H68z M36,20  c0-6.627,5.373-12,12-12c6.627,0,12,5.373,12,12v4H36V20z M76,84c0,2.21-1.79,4-4,4H24c-2.21,0-4-1.79-4-4V32h56V84z"></path>
                     </svg>
                     <span class="cart-items-number primaryColor-bg2"></span>
                  </a>
               </li>
            </ul>
         </div>
<a class="scrollToTop transition-all fa fa-angle-up" title="Scroll To Top"></a>