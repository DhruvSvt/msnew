@extends('layouts.app')
@section('head')
<style>
    .clients img {
        height: 91px;
        width: 100% !important;
        object-fit: contain;

    }

    .gallery-img {
        cursor: pointer;
        transition: transform 0.2s;
    }

    .gallery-img:hover {
        transform: scale(1.05);
    }

    #demo {
        height: 100%;
        position: relative;
        overflow: hidden;
    }


    .green {
        background-color: #6fb936;
    }

    .thumb {
        margin-bottom: 30px;
    }

    .page-top {
        margin-top: 85px;
    }


    img.zoom {
        width: 100%;
        height: 200px;
        border-radius: 5px;
        object-fit: cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }


    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .modal-header {

        border-bottom: none;
    }

    .modal-title {
        color: #000;
    }

    .modal-footer {
        display: none;
    }
</style>
@endsection
@section('content')
<div class="fullbody mtop"></div>
<div class="fullbody homebanner innerbanner">
    <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ config('app.url') }}/assets/images/3.jpg" alt="security guard services">
                <div class="bannerTxt">
                    <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / About Us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="wave-shape">
        <div class="river-wave"></div>
        <div class="river-wave"></div>
    </div>
</div>

<!--section2_end-->
<div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
    <div class="fullpage">
        <div class="txt wow fadeInLeft" style="width:100%;">
            <h1 class="fullbody">About-Us</h1>

        </div>
    </div>
</div>
<div class="fullbody aboutBlock" style="padding: 20px 0 50px 0;">
    <div class="fullpage">

        <div class="txt wow fadeInLeft" style="width:100%;">
            <div class="fullbody" style="font-size:18px;">
                <p>Nisha Shukla has been started the Business for the supply of Manpower Services since 2008 as
                    a Proprietorship Firm and
                    later on, she started the Business in the name of M. S. Services from 2011, with the aim of
                    providing optimum and allied
                    services in the various states of our country. In 2011 Changed M. S. Services became an ISO
                    9001: 2008 Certified
                    Organization on 22nd October 2012 to cater to the phenomenal demands in the industrial and
                    corporate sectors in the new
                    millennium.
                    The Regd. Office of firm is at Agra with Many Regional Office & Branches. We also providing
                    different category of
                    manpower in the state of Rajasthan, Gujarat, Maharashtra, Uttarakhand, Punjab, Haryana and
                    Madhya Pradesh including
                    Delhi NCR.
                </p>
            </div>

        </div>
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
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c2.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c2.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c3.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c3.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c4.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c4.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c5.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c5.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c6.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c6.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c7.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c7.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c8.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c8.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c9.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c9.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{ config('app.url') }}/assets/images/c10.jpg" class="fancybox" rel="ligthbox" target="_blank">
                <img src="{{ config('app.url') }}/assets/images/c10.jpg" class="zoom img-fluid "
                    style="border:1px solid darkgrey" alt="">
            </a>
        </div>



    </div>




</div>
<div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
    <div class="fullpage">
        <div class="txt wow fadeInLeft" style="width:100%;">
            <h1 class="fullbody">Our-Clients</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/1honda.png" class="img-responsive">
                                </div>
                            </div>

                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/logoford.png"
                                        class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/cina.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/gamon1.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/vcc.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/hin.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/jio.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/berger.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/maruti.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/arshiya.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/bank.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/angel.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/nrhm.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/ram.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/pp.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/nhai.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/delhi.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/up.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/upavp.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/icar.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/cdgi.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/agra.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/iitbhu.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/rampur.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/gecb.jpeg" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients">
                                    <img src="{{ config('app.url') }}/assets/images/lic.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
