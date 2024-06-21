@extends('layouts.app')
@section('content')
<div class="fullbody mtop"></div>
<div class="fullbody homebanner innerbanner">
    <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ config('app.url') }}/assets/images/contact.jpg" alt="security guard services">
                <div class="bannerTxt">
                    <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / Contact Us</h3>
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
            <h1 class="fullbody">Cities - We're in Available</h1>
        </div>
    </div>
</div>
<div class="fullbody contactpg">
    <div class="fullpage">
        <div class="row">
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Agra</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 8899927801</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Lucknow</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993562</p>
                        <p>+91 - 8899927802</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Kanpur</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993556</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Aligarh</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993558</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Allahabad</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993557</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Muradabad</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993559</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Meerut</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9358993560</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Delhi / NCR</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9891866192</p>
                        <p>+91 - 9412673248</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Ghaziabad</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 7599055498</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Noida</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9871818315</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Uttarakhand</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9412673248</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Rajasthan</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9412589495</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Madhya Pradesh</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9219547301</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow zoomIn" style="visibility: visible; animation-name: zoomInFast;">
                <div class="adbxin">
                    <h2>Punjab & Haryana</h2>
                    <div class="add1 add2">
                        <h5>Phone</h5>
                        <p>+91 - 9910632001</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ftleft1 wow fadeInUp" style="width: 100%; visibility: hidden; animation-name: none;">
            <div class="row">
                <div class="col-sm-4">
                    <div class="fthd1">Follow Us</div>
                    <div class="ft_soc" style="visibility: visible;">
                        <a href="#" target="_blank" style="background-color: #3b5998; color: #fff;"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" target="_blank"
                            style="background-color: #e4475e; color: #fff;"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a> <a href="https://www.linkedin.com/company/m-s-services98/"
                            target="_blank" style="background-color: #007bb6; color: #fff;"><i
                                class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <p>For any Feedback / Suggestions / Complaints, you may reach out to customer relations team at
                        service@jssgroupindia.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbody careerform wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="fullpage">

        <h2 style="margin-bottom: 0">Send Us A Message</h2>

        <form action="" class="form-group" method="post" enctype="multipart/form-data" name="frmContact"
            id="frmContact">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="fullname" placeholder="Full Name" class="form-control"
                        required="">
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" placeholder="Email" class="form-control" required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="phn_no" placeholder="Phone Number" class="form-control"
                        required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="subject" placeholder="Subject" class="form-control"
                        required="">
                </div>

                <div class="col-sm-12">
                    <textarea name="msg" id="msg" placeholder="Message" cols="30" rows=""
                        class="form-control"></textarea>
                </div>
                <div class="col-sm-12">
                    <input type="submit" name="subres" value="Submit" class="subres">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
