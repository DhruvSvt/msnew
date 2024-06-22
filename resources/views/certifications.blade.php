@extends('layouts.app')
@section('content')
    <div class="fullbody mtop"></div>
    <div class="fullbody homebanner innerbanner">
        <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ config('app.url') }}/assets/images/5.jpg" alt="security guard services">
                    <div class="bannerTxt">
                        <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / Certifications</h3>
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
                <h1 class="fullbody">Our Certificates</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c1.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c1.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c2.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c2.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c3.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c3.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c4.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c4.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c5.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c5.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c6.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c6.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c7.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c7.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c9.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c9.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ config('app.url') }}/assets/images/c10.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c10.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="fullbody home_contact">
        <div class="fullpage">
            <ul class="fullbody">
                <li class="wow zoomIn">
                    <a href="tel:+918899927801">
                        <img src="{{ config('app.url') }}/assets/images/cnt3.jpg">
                        <h4 class="fullbody">Chat with an expert</h4>
                        <p>We would be happy to answer your questions - +91 8899927801/02/03/04 </p>
                    </a>
                </li>
                <li class="wow zoomIn">
                    <a href="mailto:ms.services98@gmail.com">
                        <img src="{{ config('app.url') }}/assets/images/cnt2.png">
                        <h4 class="fullbody">Drop a Line</h4>
                        <p>Share your comments on ms.services98@gmail.com</p>
                    </a>
                </li>
                <li class="wow zoomIn">
                    <a href="#">
                        <img src="{{ config('app.url') }}/assets/images/cnt4.jpg">
                        <h4 class="fullbody">Visit our Office</h4>
                        <p>You are most welcome to visit our office in U.P & Delhi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
