<footer class="fullbody">
    <div class="fullbody posRelative">
        <div class="fullpage">
            <div class="fbox wow fadeInLeft">
                <div class="fullbody"><img src="{{ config('app.url') }}/assets/images/mslogo1.png" alt=""></div>
                <div class="fullbody">
                    We provide a high quality, tailored facility management service. We’ll take care of building
                    space planning, sustainability, compliance and safety, and operations and maintenance
                    requirements.
                </div>
            </div>
            <div class="fbox wow fadeInLeft">
                <h4 class="fullbody">Connect Us</h4>
                <div class="fullbody links"><span>Tel :</span> <a href="tel:+918899927801">+91 8899927801/
                        02/03/04/05/06/07/08/09/10</a></div>
                <div class="fullbody links"><span>Email :</span> <a
                        href="mailto:ms.services98@gmail.com">ms.services98@gmail.com</a></div>
                <div class="fullbody socail">
                    <a href="#" class="fa fa-facebook" target="_blank"></a> <a href="#" class="fa fa-instagram"
                        target="_blank"></a> <a href="#" class="fa fa-linkedin" target="_blank"></a>
                </div>
            </div>
            <div class="fbox wow fadeInLeft">
                <h4 class="fullbody">Quick Links</h4>
                <ul class="fullbody">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('certifications') }}">Certifications</a></li>
                    {{-- <li><a href="{{ route('gallery') }}">Gallery </a></li> --}}
                    <li><a href="{{ route('carrier') }}">Carrier</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="fbox last wow fadeInLeft">
                <h4 class="fullbody">Locations</h4>
                <div class="fbox1">
                    <ul class="fullbody">
                        <li><a href="{{ route('contact') }}">Agra</a></li>
                        <li><a href="{{ route('contact') }}">Kanpur</a></li>
                        <li><a href="{{ route('contact') }}">Meerut</a></li>
                    </ul>
                    <ul class="fullbody">
                        <li><a href="{{ route('contact') }}">Allahabad</a></li>
                        <li><a href="{{ route('contact') }}">Uttrakhand</a></li>
                    </ul>
                    <ul class="fullbody">
                        <li><a href="{{ route('contact') }}">Delhi / NCR</a></li>
                        <li><a href="{{ route('contact') }}">More Cities</a></li>
                    </ul>

                </div>

            </div>
            <div class="fullbody copyrights">
                <span>Copyrights & copy 2024 M.S Security, All Rights Reserved.</span>
                <br>
                <span>Designed By <a href="https://svtindia.in/" style="    color: white;
    opacity: 1;">SVT India</a></span>
            </div>
        </div>
    </div>
</footer>
<div class="contact_rt">
    <a href="javascript:void(0);" class="product-finder-btn contact_anch1">
        <span class="product-finder-btn__text">Any Feedback</span>
    </a>
</div>
<div class="contact_open2">
    <div class="contact_bg2"></div>
    <div class="contact_pop2">
        <div class="cpop_cont">
            <div class="btn_close">
                <a href="javascript:void(0);" class="btn_x">
                </a>
            </div>
            <h3>Any Feedback</h3>
            <form class="form-group" action="#" method="#" enctype="multipart/form-data">
                <input type="text" placeholder="Name" class="form-control" name="txtName6" required>
                <input type="email" placeholder="Email ID" class="form-control" name="txtEmail6" required>
                <input type="text" placeholder="Phone Number" class="form-control" name="txtPhone6" required>
                <textarea name="msg" id="" cols="30" rows="10" placeholder="Enter Your Feedback ..."></textarea>
                {{-- <input type="text" placeholder="Services looking for" class="form-control" name="txtServices6"
                    required>
                <input type="text" placeholder="Location" class="form-control" name="txtLocation6" required> --}}
                <input type="submit" value="Submit" name="popup" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<a href="#top" class="scrollup"><i class="fa fa-angle-up"></i></a>
