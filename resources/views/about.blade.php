@extends('layouts.app')
@section('head')
    <style>
        .clients img {
            height: 91px;
            width: 100% !important;
            object-fit: contain;

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
                <h1 class="fullbody">Welcome to M.S. Services, your trusted partner in manpower outsourcing, housekeeping,
                    catering, placement, and maintenance services.
                </h1>

            </div>
        </div>
    </div>
    <div class="fullbody aboutBlock" style="padding: 20px 0 50px 0;">
        <div class="fullpage">

            <div class="txt wow fadeInLeft" style="width:100%;">
                <div class="fullbody" style="font-size:18px;">
                    <h3>Our Journey</h3>
                    <p class="mt-2">Founded by Nisha Shukla, our journey began in 2008 as a proprietorship firm
                        specializing in the supply of manpower services. In 2011, we rebranded as M.S. Services with the aim
                        of providing optimal and allied services across various states in India. Our commitment to
                        excellence was recognized when we became an ISO 9001:2008 Certified Organization on October 22,
                        2012, a testament to our dedication to meeting the highest standards in the industry.
                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>Our Reach</h3>
                    <p class="mt-2">Headquartered in Agra, we have expanded our presence with numerous regional offices
                        and branches. We proudly serve clients in Rajasthan, Gujarat, Maharashtra, Uttarakhand, Punjab,
                        Haryana, Madhya Pradesh, and the Delhi NCR region.

                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>Our Services</h3>
                    <p class="mt-2">At M.S. Services, we believe in more than just service provision - we are a team of
                        dedicated professionals passionate about helping our clients achieve their goals. Over the past 15
                        years, we have built a reputation for excellence and reliability, thanks to our experienced team
                        committed to delivering exceptional service. Our comprehensive range of services includes:
                    <ul>
                        <li>- Manpower Recruitment </li>
                        <li>- Housekeeping</li>
                        <li>- Hospitality</li>
                        <li>- Catering</li>
                        <li>- Gardening</li>
                        <li>- Environmental Solutions
                        </li>
                        <li>- Event Management
                        </li>
                        <li>- Landscaping</li>
                        <li>- Allied Services</li>
                    </ul>
                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>Our Commitment</h3>
                    <p class="mt-2">
                        Every client deserves personalized attention and care. We take the time to understand your unique
                        needs and tailor our services accordingly. Whether you need manpower outsourcing, housekeeping,
                        catering, placement, or maintenance services, we are here to help.
                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>Client Testimonials </h3>
                    <p class="mt-2">But don’t just take our word for it – hear from our satisfied clients who have
                        experienced our commitment to quality and reliability firsthand.

                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>Contact Us
                    </h3>
                    <p class="mt-2">Ready to achieve your goals with M.S. Services? <a href="{{ route('contact') }}">Contact</a> us today to learn more about
                        how we can assist you.


                    </p>
                </div>
                <div class="fullbody" style="font-size:18px;">
                    <h3>PSARA Approved
                    </h3>
                    <p class="mt-2">We are PSARA approved by the DGP, ensuring compliance and trust in all our
                        security services.
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
                <a href="{{ config('app.url') }}/assets/images/c8.jpg" class="fancybox" rel="ligthbox" target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c8.jpg" class="zoom img-fluid "
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
                <a href="{{ config('app.url') }}/assets/images/c10.jpg" class="fancybox" rel="ligthbox"
                    target="_blank">
                    <img src="{{ config('app.url') }}/assets/images/c10.jpg" class="zoom img-fluid "
                        style="border:1px solid darkgrey;margin-bottom:10px;" alt="">
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
                                        <img src="{{ config('app.url') }}/assets/images/1honda.png"
                                            class="img-responsive">
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
                                        <img src="{{ config('app.url') }}/assets/images/cina.jpeg"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/gamon1.png"
                                            class="img-responsive">
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
                                        <img src="{{ config('app.url') }}/assets/images/berger.png"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/maruti.jpeg"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/arshiya.png"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/bank.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/angel.jpg"
                                            class="img-responsive">
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
                                        <img src="{{ config('app.url') }}/assets/images/delhi.png"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/up.jpeg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/upavp.png"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/icar.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/cdgi.jpeg"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/agra.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/iitbhu.jpeg"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/rampur.jpeg"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="clients">
                                        <img src="{{ config('app.url') }}/assets/images/gecb.jpeg"
                                            class="img-responsive">
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
