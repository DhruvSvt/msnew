@extends('layouts.app')
@section('head')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* .container{
                        width:90%
                        margin:10px auto;
                        } */
        .portfolio-menu {
            text-align: center;
        }

        .portfolio-menu ul li {
            display: inline-block;
            margin: 0;
            list-style: none;
            padding: 10px 15px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all 0.5s ease;
        }

        .portfolio-item {
            /*width:100%;*/
        }

        .portfolio-item .item {
            /*width:303px;*/
            float: left;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="fullbody mtop"></div>
    <div class="fullbody homebanner innerbanner">
        <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ config('app.url') }}/assets/images/5.jpg" alt="security guard services">
                    <div class="bannerTxt">
                        <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-shape">
            <div class="river-wave"></div>
            <div class="river-wave"></div>
        </div>
    </div>
    <div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
        <div class="fullpage">
            <div class="txt wow fadeInLeft" style="width:100%;">
                <h1 class="fullbody">Our Gallery</h1>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark active" data-filter="*">All</li>
                <li class="btn btn-outline-dark" data-filter=".gts">Training</li>
                <li class="btn btn-outline-dark" data-filter=".lap">Laptops</li>
                <li class="btn btn-outline-dark text" data-filter=".selfie">
                    selfie
                </li>
            </ul>
        </div> --}}
        <div class="portfolio-item row">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ config('app.url') }}/assets/images/1.jpg" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ config('app.url') }}/assets/images/1.jpg" alt="" />
                    <p>Click to preview</p>
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ config('app.url') }}/assets/images/2.jpg" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ config('app.url') }}/assets/images/2.jpg" alt="" />
                    <p>Click to preview</p>
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ config('app.url') }}/assets/images/3.jpg" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ config('app.url') }}/assets/images/3.jpg" alt="" />
                    <p>Click to preview</p>
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ config('app.url') }}/assets/images/4.jpg" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ config('app.url') }}/assets/images/4.jpg" alt="" />
                    <p>Click to preview</p>
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ config('app.url') }}/assets/images/5.jpg" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ config('app.url') }}/assets/images/5.jpg" alt="" />
                    <p>Click to preview</p>
                </a>
            </div>

        </div>
    </div>
@section('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        $(".portfolio-menu ul li").click(function() {
            $(".portfolio-menu ul li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".portfolio-item").isotope({
                filter: selector,
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $(".popup-btn");
            popup_btn.magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        });
    </script>
@endsection
@endsection
