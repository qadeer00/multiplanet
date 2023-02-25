@extends('layouts.main')
@section('main-container')
<body class="board-of-directors page ">



    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ9RB8S"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

<div class="container container-header text-center">
    <div class="row">
        <div class="background-top-internal">
            <div class="opaque-bg"></div>
                    <img src="{{asset('frontend/images/leadership-team.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132402415440000000')}}" alt="Leadership Team" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="{{asset('frontend/images/leadership-team.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132402415440000000')}}" alt="Leadership Team" class="img-fluid d-flex justify-content-center img-mob" />

            <h1 class="d-none d-sm-block">Leadership Team</h1>
            <h1 class="d-block d-sm-none title-internal-mobile">Leadership Team</h1>
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
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 development-design-review">
            <h3>United in Provis vision and values</h3>
            <p>Collaboration is one of our core values ​​and an integral part of our culture that we live every day. At Provis, being a team player is critical to our success. We believe that working together towards a common goal is the first step towards achieving our goals, both individually and as an organization.
                Customer focus, agility and responsibility are also the basic principles that make up Provis' identity. we believe in everything You have to keep your customers in mind. Every day, we work tirelessly to improve your experience. We believe that not only are we responsible for everything we do, but there are things we don't do because of it. responsible person.
                
                 Our culture is the result of a collaborative group of agile and responsible individuals working with a single focus in mind: the customer.</p>
        </div>
    </div>
</div>

<div class="container container-review-of-development">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <!-- add class .justify-content-center to row if there is only 1 col inside -->
                <!-- <div class="row justify-content-center"> -->

                        <div class="row" >
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="row review-box">

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url('frontend/images/talal-bio.jpg')">
                                            <img src="{{asset('frontend/images/talal-bio.jpg')}}" alt="Talal Al Dhiyebi"/>
                                        </div>
                                        <div class="col-10 col-sm-10 col-md-12 review-link">
                                            <!-- data-row: the number of the row, as it works on ServicesConsultancyService -->
                                            <!-- data-title: leave it blank. It will not be displayed -->
                                            <!-- data-text: the text of the director, as it works on ServicesConsultancyService -->
                                            <a href="#" data-row="0" data-title="" data-text='Talal Al Dhiyebi is the Chief Executive Officer at Aldar Properties, having previously held the positions of Chief Development Officer and Executive Director of Asset Management following the merger with Sorouh in 2013.

He serves on the boards of numerous companies, including Abu Dhabi Motorsports Management, Miral Asset Management, Aldar Education and Sandooq Al Watan – the UAE’s national fund focused on social contribution.

Mr. Al Dhiyebi is a graduate of Electrical Engineering from the University of Melbourne, Australia.'>
                                                <span>
                                                    Talal Al Dhiyebi
                                                    <br>
                                                    <span class="job">Chairman</span>
                                                </span>
                                                <i class="zmdi zmdi-plus showing"></i>
                                                <i class="zmdi zmdi-close closing"></i>
                                            </a>
                                        </div>
                                        <div class="col-12 toggle-review mobile">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="row review-box">

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url({{asset('frontend/images/jassem-busaibe.jpg?center=0.95121951219512191,0.445&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132376564840000000')}}')">
                                            <img src="{{asset('frontend/images/jassem-busaibe.jpg?center=0.95121951219512191,0.445&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132376564840000000')}}" alt="Jassem Saleh Busaibe"/>
                                        </div>
                                        <div class="col-10 col-sm-10 col-md-12 review-link">
                                            <!-- data-row: the number of the row, as it works on ServicesConsultancyService -->
                                            <!-- data-title: leave it blank. It will not be displayed -->
                                            <!-- data-text: the text of the director, as it works on ServicesConsultancyService -->
                                            <a href="#" data-row="0" data-title="" data-text='Mr. Busaibe has nearly 20 years of experience in the fields of finance and investment, having held a number of high-profile roles at several private and public companies in Abu Dhabi. He was most recently the CFO of SENAAT and prior to that served as CEO of Arady Properties, an investment company focused on the private equity and real estate sectors in the GCC and was formerly Senior Vice President of Private Equities at Invest AD - the Abu Dhabi Investment Company. Prior to that, he spent seven years at the Abu Dhabi Investment Authority (ADIA), where he worked as a Portfolio Manager focusing on European Equities. Mr. Busaibe is a CFA Charter holder and holds a M.Sc. in Finance from London Business School, UK.'>
                                                <span>
                                                    Jassem Saleh Busaibe
                                                    <br>
                                                    <span class="job">Vice Chairman</span>
                                                </span>
                                                <i class="zmdi zmdi-plus showing"></i>
                                                <i class="zmdi zmdi-close closing"></i>
                                            </a>
                                        </div>
                                        <div class="col-12 toggle-review mobile">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="row review-box">

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url({{asset('frontend/images/hp-aengaar-ceo-at-provis.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132402346900000000')}})">
                                            <img src="{{asset('frontend/images/hp-aengaar-ceo-at-provis.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132402346900000000')}}" alt="Hemanth ‘HP’ Aengaar "/>
                                        </div>
                                        <div class="col-10 col-sm-10 col-md-12 review-link">
                                            <!-- data-row: the number of the row, as it works on ServicesConsultancyService -->
                                            <!-- data-title: leave it blank. It will not be displayed -->
                                            <!-- data-text: the text of the director, as it works on ServicesConsultancyService -->
                                            <a href="#" data-row="0" data-title="" data-text='HP is currently the Chief Executive Officer of Provis driving an ambitious program to digitally transform customer service, enhance operational productivity and expand market presence through strategic acquisitions. 
&lt;br /&gt;&lt;br /&gt;
HP brings with him a wealth of experience in the fields of performance transformation, strategic change management and finance &amp; investments in both public and private sector organizations. Before joining Provis, he was instrumental in the corporate transformation &amp; performance improvement program at Farah Leisure on Yas Island and, was Executive Director &amp; Group Head of Strategy and Investments at Miral Asset Management since 2014. Prior to that, he held various leadership roles at McKinsey and worked at Goldman Sachs, engaging with senior stakeholders in government and multinational organizations across the US, Middle East and India. 
&lt;br /&gt;&lt;br /&gt;
He holds two Master degrees from the Massachusetts Institute of Technology (MIT) and a Master’s degree from Harvard University. He has also completed professional certifications from Stanford University (Risk Management) and Oxford University (Private Equity and Venture Capital) and has passed all three levels of the Chartered Financial Analyst (CFA) program.'>
                                                <span>
                                                    Hemanth ‘HP’ Aengaar 
                                                    <br>
                                                    <span class="job">Chief Executive Officer</span>
                                                </span>
                                                <i class="zmdi zmdi-plus showing"></i>
                                                <i class="zmdi zmdi-close closing"></i>
                                            </a>
                                        </div>
                                        <div class="col-12 toggle-review mobile">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-12 toggle-review desktop" data-row="0" style="display: none;">
                                <div class="row">
                                    <div class="col-md-10 offset-lg-1 col-lg-10">
                                        <h5 style="display: none;"></h5>
                                        <p style="display: none;"></p>
                                    </div>
                                </div>
                            </div>

                        </div>

            </div>
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
                    <input name="__RequestVerificationToken" type="hidden" value="nz3gtMd_ssbbnYnJNRoHX97UGuESLReIUa8MlSzf2ncQBOlSeHhSjEkLpgUIWGk_DbgBiE2r0LqYe4DoWDPQgCpS4ImF7jzAKZWKJUuBsZk1" />
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