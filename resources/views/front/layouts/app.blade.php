<!DOCTYPE html>
<html lang="en" class="no-js">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/home.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/dev.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ url('assets/css/abouts.css') }}" />
        <title>Index</title>
        <style type="text/css">
            .dropdown:hover > .dropdown-menu {
                display: block;
            }
        </style>
   </head>
<body>
    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
   </body>
</html>

<script type="text/javascript">
    var owl = $(".home-slider");
    owl.owlCarousel({
        items: 1,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    var ourCourses = $(".our-courses");
    ourCourses.owlCarousel({
        items: 1,
        autoplay: true,
        dots: false,
        autoplayHoverPause: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 4,
                nav: true,
                navText: ['<img src="{{ asset('assets/images/left-arrow.png') }}">', '<img src="{{ asset('assets/images/right-arrow.png') }}">'],
            },
        },
    });

    var perYearPer = $(".perYearPer");
    perYearPer.owlCarousel({
        items: 1,
        autoplay: true,
        dots: false,
        autoplayHoverPause: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 4,
                nav: true,
                navText: ['<img src="{{ asset('assets/images/left-arrow.png') }}">', '<img src="{{ asset('assets/images/right-arrow.png') }}">'],
            },
        },
    });


    var foundtionTeam = $(".foundtion-team");
    foundtionTeam.owlCarousel({
        items: 1,
        autoplay: true,
        dots: true,
        autoplayHoverPause: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 3,
            },
        },
    });



    var Tp = $(".toppers-slider");
    Tp.owlCarousel({
        items: 1,
        autoplay: true,
        dots: false,
        autoplayHoverPause: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
                nav: true,
                navText: ['<img src="{{ asset('assets/images/left-arrow.png') }}">', '<img src="{{ asset('assets/images/right-arrow.png') }}">'],
            },
        },
    });
</script>
<style type="text/css">
    .our-courses .owl-nav button.owl-next,
    .toppers-slider .owl-nav button.owl-next,
    .perYearPer .owl-nav button.owl-next {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 36px;
        height: 36px;
        margin-top: -18px;
        padding: 0px;
        border-radius: 3px;
        cursor: pointer;
        color: transparent;
        border: none;
        outline: none;
        background-color: rgba(0, 7, 14, 0.4);
        z-index: 1;
        right: -30px;
    }

    .our-courses .owl-nav button.owl-prev,
    .toppers-slider .owl-nav button.owl-prev,
    .perYearPer .owl-nav button.owl-prev {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 36px;
        height: 36px;
        margin-top: -18px;
        padding: 0px;
        border-radius: 3px;
        cursor: pointer;
        color: transparent;
        border: none;
        outline: none;
        background-color: rgba(0, 7, 14, 0.4);
        z-index: 1;
        left: -30px;
    }

    .our-courses .owl-nav button img,
    .toppers-slider .owl-nav button img,
    .perYearPer .owl-nav button img {
        width: 20px;
    }
</style>

<style>
    .solutions-bot-heading {
        font-size: 17px;
    }

    .solutions-box {
        color: #000;
    }
    .solutions-box .solutions-overley {
        color: #fff;
    }
    .solutionblock {
        font-size: 14px;
        color: #fff;
    }
    .solutionblock span {
        font-size: 17px;
        color: #fbbf05;
        display: block;
        font-family: "montserratsemibold";
    }
    .solutionblock p {
        margin: 0px;
    }
    .solutionblock p span {
        font-size: 14px;
        color: #fff;
        display: block;
        font-family: "montserratregular";
    }

    .solutions-download-col {
        height: 222px;
    }

    .solutions-download-col .solutions-overley {
        justify-content: center;
        align-items: center;
    }

    .solutions-middle {
        margin-top: 25px;
    }

    .solutions-bot {
        padding: 10px 20px 15px 20px;
    }


    .foundtion-team .owl-dots .owl-dot span {
        width: 10px;
        height: 10px;
        margin: 5px 7px;
        background: #D6D6D6;
        display: block;
        -webkit-backface-visibility: visible;
        transition: opacity .2s ease;
        border-radius: 30px;
}

.foundtion-team .owl-nav.disabled+.owl-dots{
    margin-top: 5%;
    margin-bottom: 5%;
}

.foundtion-team .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #395aa8;
}

        
</style>