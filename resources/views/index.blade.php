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
<div class="fullbody homebanner">
    <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ config('app.url') }}/assets/images/nn5.jpg" alt="Best Security Companies">
                <div class="bannerTxt">
                    <h3 class="fullbody">Your Security, Our Commitment. Always</h3>
                    <!--<div class="fullbody p"></div>-->
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{ config('app.url') }}/assets/images/nn2.jpg" alt="security services provider">
                <div class="bannerTxt">
                    <h3 class="fullbody">Your trusted partner in spotless living.</h3>
                    <!--<div class="fullbody p"></div>-->
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{ config('app.url') }}/assets/images/nn3.jpg" alt="security guard services">
                <div class="bannerTxt">
                    <h3 class="fullbody">Cost-effective management that keeps your facility running smoothly.</h3>
                    <!--<div class="fullbody p"></div>-->
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{ config('app.url') }}/assets/images/nn4.jpg" alt="Best Security Companies">
                <div class="bannerTxt">
                    <h3 class="fullbody">Your complete cleaning solution, for life and business.</h3>
                    <!--<div class="fullbody p"></div>-->
                    <a href="">Learn More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control carousel-control-prev" href="#" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control carousel-control-next" href="#" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
        </a>
    </div>
    <div class="wave-shape">
        <div class="river-wave"></div>
        <div class="river-wave"></div>
    </div>
</div>
<!--section4-->
<section class="fullbody section4">
    <div class="fullpage">
        <div class="row">
            <div class="col-sm-3 sec4bx1 dasdada0">
                <div class="funfact-img">
                    <img src="{{ config('app.url') }}/assets/images/1615790123l2.png" alt="">
                </div>
                <div class="funfact-count text-uppercase">
                    <h2><span class="counter"> 35</span>+</h2>
                    <h3>Years of Experience</h3>
                </div>
            </div>
            <div class="col-sm-3 sec4bx1 dasdada1">
                <div class="funfact-img">
                    <img src="{{ config('app.url') }}/assets/images/1615790150l1.png" alt="">
                </div>
                <div class="funfact-count text-uppercase">
                    <h2><span class="counter"> 500</span>+</h2>
                    <h3>Professional Team</h3>
                </div>
            </div>
            <div class="col-sm-3 sec4bx1 dasdada2">
                <div class="funfact-img">
                    <img src="{{ config('app.url') }}/assets/images/1615790203l3.png" alt="">
                </div>
                <div class="funfact-count text-uppercase">
                    <h2><span class="counter">1100</span>+</h2>
                    <h3>Happy Clients </h3>
                </div>
            </div>
            <div class="col-sm-3 sec4bx1 dasdada3">
                <div class="funfact-img">
                    <img src="{{ config('app.url') }}/assets/images/1615790226l4.png" alt="">
                </div>
                <div class="funfact-count text-uppercase">
                    <h2><span class="counter">25</span>+</h2>
                    <h3>Awards</h3>
                </div>
            </div>
            <div class="col-sm-3 sec4bx1 dasdada4">
                <div class="funfact-img">
                    <img src="{{ config('app.url') }}/assets/images/17168351161615790123l2.png" alt="">
                </div>
                <div class="funfact-count text-uppercase">
                    <h2><span class="counter">7</span>+</h2>
                    <h3>Cities</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section2_end-->
<div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
    <div class="fullpage">
        <div class="txt wow fadeInLeft" style="width:100%;">
            <h1 class="fullbody">M.S Services</h1>

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
            <a href="{{ route('about') }}" class="regButton">Learn more <span></span></a>
        </div>
    </div>
</div>
<div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
    <div class="fullpage">
        <div class="txt wow fadeInLeft" style="width:100%;">
            <h1 class="fullbody">Financial Status of M.S Services (in Lakhs)</h1>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="s1" style="visibility: visible; animation-name: fadeInUp;">
    <div class="fullpage">
        <div class="">
            <div class="col-sm-6 pull-left">
                <p>The chart illustrates an impressive growth trajectory for the company over the past decade,
                    highlighting a significant
                    increase in profits. Starting from a modest 8.93 lac in 2011-12, the company's revenue has soared to
                    an outstanding
                    2530.40 lac in 2020-21. This remarkable growth underscores the company's strategic vision, effective
                    management, and
                    dedication to excellence. Each year has seen consistent progress, reflecting the company's ability
                    to adapt, innovate,
                    and meet market demands. The substantial rise in profits is a testament to the hard work and
                    commitment of the entire
                    team, setting a solid foundation for continued success in the future.
                </p>
            </div>
            <div class="col-sm-5 pull-right">
                <div class="round-image image-shadow">
                    <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                            alt="Dot Circle"></div>
                    <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                            src="{{ config('app.url') }}/assets/images/profitgraph.jpg"
                            alt="security services provider">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbody aboutLinks" style="background-image: url(assets/images/banner3.png);">
    <ul class="fullbody" id="aboutLinks">
        <li rel="2176d0efddeac65a776fa9a41ea52890.jpg">
            <div class="content wow zoomIn">
                <h2 class="fullbody">OUR VISION</h2>
                <div class="fullbody showonhover">
                    To become a leading and finest provider of property and facility management services. </div>
            </div>
            <a href="{{ route('service') }}" class="showonhover">read more <span></span></a>
        </li>
        <li rel="d81ff8666b9c5f97508c846d72011ae1.jpg">
            <div class="content wow zoomIn">
                <h2 class="fullbody">OUR VALUES</h2>
                <div class="fullbody showonhover">
                    Throughout our organization, we adhere to the principle of trust, ethics, lawfulness. </div>
            </div>
            <a href="{{ route('certifications') }}" class="showonhover">read more <span></span></a>
        </li>
        <li rel="780b57878e354425e862b6c3c695f449.jpg">
            <div class="content wow zoomIn">
                <h2 class="fullbody">OUR MISSION</h2>
                <div class="fullbody showonhover">
                    To give our clients complete value for money and peace of mind. </div>
            </div>
            <a href="{{ route('contact') }}" class="showonhover">read more <span></span></a>
        </li>
    </ul>
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
<div class="fullbody servicesBlock">
    <div class="fullpage">
        <h3 class="fullbody">Company Profile</h3>
        <ul class="fullbody">
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img src="{{ config('app.url') }}/assets/images/security.jpeg" alt="">
                    </div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> Security Services</h4>
                        <div class="fullbody onhover">
                            Whether you require customer facing security for your commercial premises, mobile
                            patrols for vacant properties or traffic management for a construction and
                            infrastructure site </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img src="{{ config('app.url') }}/assets/images/house.jpg" alt=""></div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> House Keeping</h4>
                        <div class="fullbody onhover">
                            Our Housekeeping team is flexible and efficient in providing excellent housekeeping
                            services to suit different client needs. Our friendly team can provide you with a
                            variety </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img src="{{ config('app.url') }}/assets/images/facility.jpeg" alt="">
                    </div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> Facility Services</h4>
                        <div class="fullbody onhover">
                            Our team of industry professionals manage all your building and facilities
                            requirements to provide reliability and exceptional value for money without
                            compromising on safety </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img src="{{ config('app.url') }}/assets/images/cctv.jpeg" alt=""></div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> CCTV Security</h4>
                        <div class="fullbody onhover">
                            Electronic security solutions are essential for any business with a physical
                            location to help keep your premises secure and your workers safe. Having effective
                            security </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img src="{{ config('app.url') }}/assets/images/cinema.jpeg" alt=""></div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> Third-Party Out Sourcing</h4>
                        <div class="fullbody onhover">
                            Access the resources you need efficiently and effectively with our outsourcing
                            services. Whatever your organization, whatever your industry, accessing specialist
                            skills </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
            <li class="wow zoomIn">
                <a href="{{ route('service') }}" class="a">
                    <div class="img fullbody"><img
                            src="{{ config('app.url') }}/assets/images/abe3ccb654cff8fff1e1a735e052ecd5.jpg" alt="">
                    </div>
                    <div class="text fullbody">
                        <h4 class="fullbody"><span>Services</span> Asset Management</h4>
                        <div class="fullbody onhover">
                            M.S Security operates a Tenant is King philosophy when it comes to asset management,
                            because we believe that good relationships are the foundation of a strong and
                            sustainable </div>
                        <span class="link">read more</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<style>
    .clients ul {
        box-shadow: unset;
    }

    .clients li {
        padding: 10px;
    }

    .techList li {
        width: auto;
    }
</style>

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
