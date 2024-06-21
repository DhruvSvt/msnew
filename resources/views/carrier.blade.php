@extends('layouts.app')
@section('content')
<div class="fullbody mtop"></div>
<div class="fullbody homebanner innerbanner">
    <div id="home_banner" data-interval="5000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ config('app.url') }}/assets/images/3.jpg" alt="security guard services">
                <div class="bannerTxt">
                    <h3 class="fullbody"><a href="{{ route('home') }}">Home</a> / Carrier</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="wave-shape">
        <div class="river-wave"></div>
        <div class="river-wave"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="txt wow fadeInLeft" style="width:100%;">
                <div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
                    <div class="fullpage">
                        <div class="txt wow fadeInLeft" style="width:100%;">
                            <h1 class="fullbody">Registerations & Licences</h1>
                            <div class="container text-center">
                                <h6 class="p-1"> - Registeration of Firm Under Indian Partnership Act.</h6>
                                <h6 class="p-1"> - Registeration Under Shop & Estb.</h6>
                                <h6 class="p-1"> - Registeration Under Income Tax.</h6>
                                <h6 class="p-1"> - Registeration Under CGST.</h6>
                                <h6 class="p-1"> - Registeration Under EPFO Act.</h6>
                                <h6 class="p-1"> - Registeration Under ESIC Act.</h6>
                                <h6 class="p-1"> - Registeration Under Contract Labour Act. 1970</h6>
                                <h6 class="p-1"> - Registeration Under PASARA.</h6>
                                <h6 class="p-1"> - Registeration Under ISO Certification Body.</h6>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="fullbody aboutBlock" style="padding: 50px 0 20px 0;">
                <div class="fullpage">
                    <div class="txt wow fadeInLeft" style="width:100%;">
                        <h1 class="fullbody">Training & Development</h1>
                        <div class="container text-center">
                            <h5 class="p-1">For Fire Fighting Trainig following aids are provided in the Academy</h5>
                            <h6 class="p-1"> - Fire Point</h6>
                            <h6 class="p-1"> - Fire Point Bucket Water</h6>
                            <h6 class="p-1"> - Fire Point Bucket Sand</h6>
                            <h6 class="p-1"> - Fire Hook</h6>
                            <h6 class="p-1"> - Spade</h6>
                            <h6 class="p-1"> - Axe</h6>
                            <h6 class="p-1"> - Axe Pick</h6>
                            <h6 class="p-1"> - Fire Extinguishers ABC - 5kgs</h6>
                            <h6 class="p-1"> - Fire Extinguishers Foam AB - 9Ltrs</h6>
                            <h6 class="p-1"> - Fire Extinguishers Dry Powder BC - 5Kgs</h6>
                            <h6 class="p-1"> - Fire Extinguishers BC Co - 2 Gas 4.5Kgs</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbody careerform wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="fullpage">

        <h2 style="margin-bottom: 0">For Finding a Best Job Opportunity</h2>

        <form action="" class="form-group" method="post" enctype="multipart/form-data" name="frmContact"
            id="frmContact">
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" name="fullname" placeholder="Full Name" class="form-control" required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="phn_no" placeholder="Phone Number" class="form-control" required="">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="address" placeholder="Address" class="form-control" required="">
                </div>
                <div class="col-sm-12">
                    <label for="resume">Resume :</label>
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                </div>

                <div class="col-sm-12">
                    <input type="submit" name="subres" value="Submit" class="subres">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
