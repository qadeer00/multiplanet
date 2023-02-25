@extends('layouts.main')
@section('main-container')
<body class="our-vision-and-mission ">
 <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ9RB8S"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
  


    


<!-- Section BG internal -->
<div class="container container-header text-center">
    <div class="row">
        <div class="background-top-internal">
            <div class="opaque-bg"></div>
                    <img src="{{asset('frontend/images/background-our-vision-and-mission-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132075812980000000 ')}}" alt="Our Vision and Mission" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="{{asset('frontend/images/background-our-vision-and-mission-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132075812980000000')}}" alt="Our Vision and Mission" class="img-fluid d-flex justify-content-center img-mob" />

            <h1 class="d-none d-sm-block">Our Vision and Mission</h1>
            <h1 class="d-block d-sm-none title-internal-mobile">Our Vision and Mission</h1>
        </div>

        <!-- Share buttons at right -->
        <div class="share-buttons">



<span class="label">Share</span>
<span class="divider"></span>
<ul>
    <li>
        <a href="https://www.facebook.com/provis.estatemanagement/" target="_blank" rel="noopener noreferrer"><i class="zmdi zmdi-facebook"></i></a>
    </li>
    <li>
        <a href="https://twitter.com/provis_em" target="_blank" rel="noopener noreferrer"><i class="zmdi zmdi-twitter"></i></a>
    </li>
    <li>
        <a href="https://www.linkedin.com/company/provisestatemanagement" target="_blank" rel="noopener noreferrer"><i class="zmdi zmdi-linkedin"></i></a>
    </li>
    <li>
        <a href="https://www.instagram.com/provisem/" target="_blank" rel="noopener noreferrer"><i class="zmdi zmdi-instagram"></i></a>
    </li>
</ul>
        </div>
    </div>
</div>

<div class="container content-internal">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 our-vision">
            <h2>
                Our Vision
            </h2>
            <p>
                To pioneer new benchmarks in Integrated Estate Service Solutions across the world.
            </p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="box">
                        <img src="{{asset('frontend/images/our-vision.png?anchor=center&amp;mode=crop&amp;width=525&amp;height=360&amp;rnd=131949029150000000')}}" alt="Our Vision" class="img-fluid" />

            </div>
        </div>
    </div>
    <div class="row d-flex flex-wrap-reverse">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="box">
                        <img src="{{asset('frontend/images/mission-small-image.jpg?anchor=center&amp;mode=crop&amp;width=525&amp;height=360&amp;rnd=131954354100000000')}}" alt="Our Mission" class="img-fluid" />

            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 our-mission">
            <h2>
                Our Mission
            </h2>
            <p>
                To provide integrated service solutions based on international standards by providing sustainable added value to our stakeholders’ assets, offering them peace of mind to concentrate on their core businesses.
            </p>
        </div>
    </div>
</div>




<!-- Sign up newsletter start -->
<div class="modal fade" id="signup-email" tabindex="-1" role="dialog" aria-labelledby="signup-email" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign up for email alerts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close close"></i></button>
            </div>
            <div class="modal-body">
                <form action="/umbraco/api/GenericForms/EmailAlertRequest" method="POST" id="modal-signup-newsletter-form">
                    <input name="__RequestVerificationToken" type="hidden" value="XaPRnt510nIYaWQV2d4MJchxkM1qZks71DBq63_3ZIdk4snnCjo4_D70yNGWrtrPakENdJ0JrmcisPxUwF_kole74XIuNVrY-7e-WsFA0VE1" />
                    <input type="hidden" name="language" id="language" value="en">
                    <div class="row">
                        <div class="col-12 error-message">Field(s) highlighted in red are required</div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <input type="text" name="firstName" id="firstName" placeholder="First name" data-required="not-empty">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <input type="text" name="lastName" id="lastName" placeholder="Last name" data-required="not-empty">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <input type="text" name="email" id="email" placeholder="Email address" data-required="email">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <input type="number" maxlength="15" name="phoneNumber" id="phoneNumber" placeholder="Phone number" data-required="phone">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="g-recaptcha" data-sitekey="6LckcJMUAAAAAPz5kG81NIX40twmdTvHOUiMdIqM"></div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 offset-md-4 offset-lg-4 col-lg-4 form-group">
                            <button type="submit" class="newsletter-submit">Register</button>
                        </div>
                    </div>
                </form>
                <div class="col-12 signup-success">
                    <h4>Thank you for your message</h4>
                    <p>Your message has been submitted to our team.</p>
                </div>
                <div class="col-12 signup-error">
                    <h4>An error occurred while processing your request.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection