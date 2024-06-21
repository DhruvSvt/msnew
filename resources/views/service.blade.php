@extends('layouts.app')
@section('content')
<div class="fullbody mtop"></div>
<div class="fullbody homebanner innerbanner">
    <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ config('app.url') }}/assets/images/5.jpg" alt="security guard services">
                <div class="bannerTxt">
                    <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / Services</h3>
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
            <h1 class="fullbody">Our Services</h1>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i1">
    <div class="fullpage">
        <div class="">
            <div class="col-sm-6 pull-left">
                <h2>Security Services</h2>
                <p>M.S Services offers a robust security solution tailored to the unique needs of various clients,
                    ranging from residential
                    properties to large commercial establishments. Their team of well-trained security guards is
                    equipped to handle all
                    aspects of safety, including access control, surveillance, emergency response, and crowd management.
                    With a focus on
                    proactive security measures, M.S Services ensures a secure environment, reducing the risk of theft,
                    vandalism, and other
                    security threats.</p>
            </div>
            <div class="col-sm-5 pull-right">
                <div class="round-image image-shadow">
                    <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                            alt="Dot Circle"></div>
                    <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                            src="{{ config('app.url') }}/assets/images/security.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i2">
    <div class="fullpage">
        <div class="col-sm-5 pull-left">
            <div class="round-image image-shadow">
                <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                        alt="Dot Circle"></div>
                <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                        src="{{ config('app.url') }}/assets/images/house.jpg" alt=""></div>
            </div>
        </div>
        <div class="col-sm-6 pull-right">
            <h2>House Keeping</h2>
            <p>The housekeeping services provided by M.S Services are designed to maintain high standards of cleanliness
                and hygiene.
                They offer comprehensive cleaning solutions for offices, hotels, hospitals, and other facilities,
                including daily
                cleaning, deep cleaning, and specialized services like carpet cleaning and window washing. Their
                professional staff uses
                advanced cleaning techniques and eco-friendly products to ensure a healthy and pleasant environment for
                occupants.</p>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i3">
    <div class="fullpage">
        <div class="">
            <div class="col-sm-6 pull-left">
                <h2>Facility Services</h2>
                <p>M.S Services excels in providing integrated facility management services that streamline operations
                    and enhance the
                    efficiency of buildings and infrastructure. These services encompass everything from routine
                    maintenance and repair work
                    to managing utilities and ensuring compliance with safety regulations. By leveraging their
                    expertise, clients can
                    benefit from reduced operational costs and improved facility performance, leading to a better
                    overall user experience.</p>
            </div>
            <div class="col-sm-5 pull-right">
                <div class="round-image image-shadow">
                    <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                            alt="Dot Circle"></div>
                    <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                            src="{{ config('app.url') }}/assets/images/facility.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i4">
    <div class="fullpage">
        <div class="col-sm-5 pull-left">
            <div class="round-image image-shadow">
                <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                        alt="Dot Circle"></div>
                <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                        src="{{ config('app.url') }}/assets/images/cctv.jpeg" alt=""></div>
            </div>
        </div>
        <div class="col-sm-6 pull-right">
            <h2>CCTV Security</h2>
            <p>In the realm of electronic security, M.S Services offers state-of-the-art CCTV surveillance systems. They
                handle the
                complete process from design and installation to monitoring and maintenance. Their systems are equipped
                with
                high-definition cameras, remote viewing capabilities, and advanced analytics to detect and respond to
                security incidents
                in real-time. This service provides an added layer of security, deterring criminal activity and aiding
                in incident
                investigations.</p>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i5">
    <div class="fullpage">
        <div class="">
            <div class="col-sm-6 pull-left">
                <h2>Third-Party Out Sourcing</h2>
                <p>Recognizing the need for businesses to focus on their core functions, M.S Services provides
                    third-party outsourcing
                    solutions for various administrative and operational tasks. This includes staffing solutions,
                    payroll management,
                    customer service, and more. By outsourcing these tasks to M.S Services, businesses can enhance
                    efficiency, reduce costs,
                    and ensure high-quality service delivery.</p>
            </div>
            <div class="col-sm-5 pull-right">
                <div class="round-image image-shadow">
                    <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                            alt="Dot Circle"></div>
                    <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                            src="{{ config('app.url') }}/assets/images/cinema.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section2 wow fadeInUp" id="i6">
    <div class="fullpage">
        <div class="col-sm-5 pull-left">
            <div class="round-image image-shadow">
                <div class="dottedcircle"><img src="{{ config('app.url') }}/assets/images/dots-circle.svg"
                        alt="Dot Circle"></div>
                <div class="rounded-image feature-image image-shadow"><img class="promptimg"
                        src="{{ config('app.url') }}/assets/images/abe3ccb654cff8fff1e1a735e052ecd5.jpg" alt=""></div>
            </div>
        </div>
        <div class="col-sm-6 pull-right">
            <h2>Asset Management</h2>
            <p>M.S Services offers comprehensive asset management services that help businesses manage their physical
                assets
                effectively. This includes asset tracking, maintenance scheduling, and performance optimization. Their
                goal is to extend
                the lifecycle of assets, ensure regulatory compliance, and improve return on investment. By utilizing
                cutting-edge
                technology and best practices, M.S Services provides clients with detailed insights and control over
                their assets,
                ensuring they are utilized to their fullest potential.</p>
        </div>
    </div>
</div>

@endsection
