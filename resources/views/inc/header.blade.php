<div class="fullbody header">
    <div class="fullpage">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ config('app.url') }}/assets/images/mslogo1.png" alt="Logo">
            </a>
        </div>
        <div class="icons">
            <a href="tel:+918899927801" target="_blank" title="Download Brochure" class="pdfIcon">
                <i class="fa fa-phone"></i>
                <!-- <img src="images/download.svg" width="24px;" alt=""> -->
            </a>
            <a href="mailto:ms.services98@gmail.com" title="Request Estimate" class="cntIcon">
                <!-- <i class="fa fa-envelope-o"></i> -->
                <svg xmlns="#" width="24" height="17" viewBox="0 0 32 23" class="svg_icon svg_mail">
                    <path fill="#ffffff"
                        d="M429.631,56H402.368A2.35,2.35,0,0,1,400,53.67V35.331A2.35,2.35,0,0,1,402.368,33h27.263A2.349,2.349,0,0,1,432,35.331V53.67A2.349,2.349,0,0,1,429.631,56ZM402.368,34.555a0.784,0.784,0,0,0-.789.776V53.67a0.783,0.783,0,0,0,.789.775h27.263a0.783,0.783,0,0,0,.789-0.775V35.331a0.784,0.784,0,0,0-.789-0.776H402.368ZM416,49.17a2.294,2.294,0,0,1-1.612-.654L400.232,34.6l1.116-1.1L415.5,47.418a0.711,0.711,0,0,0,.993,0L430.651,33.5l1.116,1.1-14.155,13.92A2.3,2.3,0,0,1,416,49.17Z"
                        transform="translate(-400 -33)"></path>
                </svg>
            </a>
            <a href="javascript:;" id="micon" class="micon"><span></span></a>
        </div>
        <div class="mainMenu">
            <ul id="mainMenu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('certifications') }}">Certifications</a></li>
                {{-- <li><a href="{{ route('gallery') }}">Gallery </a></li> --}}
                <li><a href="{{ route('carrier') }}">Carrier</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
