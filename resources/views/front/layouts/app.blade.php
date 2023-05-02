<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
      <link rel="preload" as="script" href="https://static.web-repository.com/scripts/platform.client.min.js?v=943" />
      <title>Welcome</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">
      <link href="{{ url('assets/css/platform.client.min.css') }}" type="text/css" rel="stylesheet"/>
      <link href="{{ url('assets/css/trunk.min.css') }}" type="text/css" rel="stylesheet"/>
      <link rel="preload stylesheet" as="style" media="(max-width: 1024px)" href="{{ url('assets/css/trunk-1024.min.css') }}" type="text/css" />
      <link rel="preload stylesheet" as="style" media="(max-width: 768px)" href="{{ url('assets/css/trunk-768.min.css') }}" type="text/css" />
      <link rel="preload stylesheet" as="style" media="(max-width: 480px)" href="{{ url('assets/css/trunk-480.min.css') }}" type="text/css" />
      <meta property="og:image" content="https://content.app-sources.com/" />
      <meta itemprop="image" content="https://content.app-sources.com/" />
      <meta name="twitter:image" content="https://content.app-sources.com/"/>
      <link  rel="preload stylesheet" as="style" href="{{ url('assets/css/fonts-family.css') }}">
      <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.theme.default.min.css') }}">
   </head>
   <body class="theme live-theme" onload="isLoader()">
    <div id="preloader">
            <div id="loderContainer" class="container-preloader">
                <div class="animation-preloader">
                    <div class="txt-loading">
                        <span preloader-text="S" class="characters">S</span>
                        <span preloader-text="U" class="characters">U</span>
                        <span preloader-text="B" class="characters">B</span>
                        <span preloader-text="H" class="characters">H</span>
                        <span preloader-text="A" class="characters">A</span>
                        <span preloader-text="S" class="characters">S</span>
                        <span preloader-text="H" class="characters">H</span>
                        <span preloader-text="" class="characters"></span>
                        <span preloader-text="E" class="characters">E</span>
                        <span preloader-text="D" class="characters">D</span>
                        <span preloader-text="U" class="characters">U</span>
                        <span preloader-text="C" class="characters">C</span>
                        <span preloader-text="A" class="characters">A</span>
                        <span preloader-text="T" class="characters">T</span>
                        <span preloader-text="I" class="characters">I</span>
                        <span preloader-text="O" class="characters">O</span>
                        <span preloader-text="N" class="characters">N</span>
                        <span preloader-text="" class="characters"></span>
                        <span preloader-text="S" class="characters">S</span>
                        <span preloader-text="O" class="characters">O</span>
                        <span preloader-text="C" class="characters">C</span>
                        <span preloader-text="I" class="characters">I</span>
                        <span preloader-text="E" class="characters">E</span>
                        <span preloader-text="T" class="characters">T</span>
                        <span preloader-text="Y" class="characters">Y</span>
                    </div>
                </div>  
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
         </div>
      </div>
      
      <script type="text/javascript" src="{{ url('assets/js/platform.client.min.js') }}" data-cookieconsent="ignore"></script>
      <style>
         @media only screen and (max-width: 768px){
         /* Fix shape divider line on mobile */
         .divider-box {
         margin-bottom: -.5px!important;
         }
         }
      </style>
      <style>
         @media only screen and (max-width: 768px){
         /* Fix text padding on mobile */
         .theme .stretched-mobile .textWidget {
         padding: 0px;
         }
         }
      </style>
      <script src="jquery.min.js"></script>
      <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
      <script type="text/javascript">
        preloader = document.getElementById('preloader');
        function isLoader() {
          preloader.style.display = 'none'; 
        }
      </script>
   </body>
</html>
<script type="text/javascript">
   $('.homeSlider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    autoPlaySpeed: 5000,
    autoPlayTimeout: 5000,
    autoplayHoverPause: true,    
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})
</script>

<style type="text/css">
.open{color:green;background:#000;padding:10px;border-radius:20px;}

/* Preloader */
.container-preloader {
    align-items:center; cursor:none; display:flex; height:100%;
  justify-content:center; position:fixed; left:0; top:0; width:100%; z-index:900;
}
.container-preloader .animation-preloader {
    position:absolute; z-index: 100;}

/* Loading text */
.container-preloader .animation-preloader .txt-loading {
  font: bold 3em 'Montserrat', sans-serif;
    text-align: center; user-select: none;
}
.container-preloader .animation-preloader .txt-loading .characters:before {
  animation: characters 4s infinite;  color: orange;
  content: attr(preloader-text);  left: 0;
  opacity: 0;  position: absolute;  top: 0;
  transform: rotateY(-90deg);
}
.container-preloader .animation-preloader .txt-loading .characters {
    color: rgba(0, 0, 0, 0.2);  position: relative;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(2):before {
  animation-delay: 0.2s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(3):before {
  animation-delay: 0.4s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(4):before {
  animation-delay: 0.6s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(5):before {
  animation-delay: 0.8s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(6):before {
  animation-delay: 1s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(7):before {
  animation-delay: 1.2s;
}
.container-preloader .loader-section {
  background-color: #ffffff;  height: 100%;
  position: fixed;  top: 0;  width: calc(50% + 1px);
}
.container-preloader .loader-section.section-left {
  left: 0;
}
.container-preloader .loader-section.section-right {
  right: 0;
}
/* Fade effect on loading animation */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.3s ease-out;
}
/* Curtain effect */
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
/* Animation of letters loading from the preloader */
@keyframes characters {
  0%,
  75%,
  100% {
 opacity: 0;
 transform: rotateY(-90deg);
  }
  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }}
/* Laptop size back (laptop, tablet, cell phone) */
@media screen and (max-width: 767px) {
    .container-preloader .animation-preloader .txt-loading {
      font: bold 3.5em 'Montserrat', sans-serif;
    }}
@media screen and (max-width: 500px) {
    .container-preloader .animation-preloader .txt-loading {
      font: bold 2em 'Montserrat', sans-serif;
    }}
.origin{text-decoration:none;
font-size:45px;}
a:hover {
    text-decoration: none;
}
</style>

