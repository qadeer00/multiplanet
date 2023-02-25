@extends('layouts.main')
@section('main-container')
<body class="home ">



    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ9RB8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
   



<!-- Header start -->


<section class="consent-cookie" >
    <div class="container cookie-row justify-content-md-center">
        <div class="col-md-7 col-12"><p>We use cookies to offer you a better user experience. By continuing to use this website, you consent to the use of cookies in accordance with our <a data-udi="umb://document/4e2e4f21eb2c4ccd9150b4337641b9b0" href="{{route('privacy')}}" title="Privacy Policy">Privacy Policy.</a></p></div>
        <div class="col-md-2 col-5 text-center"><button class="accept-cookies" type="button"><span class="d-flex justify-content-center align-content-center">Accept</span></button></div>
        <div class="col-md-3 col-7 text-center  d-inline-flex align-items-center">
            <a class="reject-cookies" href="{{route('privacy')}}">
No, I want more info
            </a>
        </div>
    </div>
</section>


<!-- Header end -->


<!-- Carousel section -->
<div class="container container-header text-center" >
    <div class="row" >
        <div id="hero-carousel" class="owl-carousel owl-theme" >
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/provis-mobile-application-2.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     <span style="line-height:1.3em">The Provis App.<br />Living Made Easier.</span>
 </h3>
 <a href="the-provis-app-living-made-easier" rel="noopener noreferrer">Download now!</a>
</div>
            </div>
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/sales-and-leasing-carousel.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     Expertise you can trust
 </h3>
 <a href="{{route('leasing')}}" rel="noopener noreferrer">Sales &amp; Leasing</a>
</div>
            </div>
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/background-consultancy.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     Expert advice for your property
 </h3>
 <a href="consultancy-services.html" rel="noopener noreferrer">Consultancy Services</a>
</div>
            </div>
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/propertymanagement-background-hero.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     Your property is our priority
 </h3>
 <a href="property-management.html" rel="noopener noreferrer">Property Management</a>
</div>
            </div>
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/ownersassociation-background-hero.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     Put your property in the right hands
 </h3>
 <a href="owners-association.html" rel="noopener noreferrer">Owners’ Association</a>
</div>
            </div>
            <div class="item item-slide" style="background-image: url('{{asset('frontend/images/clubhouse-background-hero2.jpg')}}')">
<div class="opaque-bg"></div>
<div class="container">
 <h3>
     Keeping your communities active and engaged
 </h3>
 <a href="clubhouse-and-lifestyle.html" rel="noopener noreferrer">Clubhouse and Lifestyle</a>
</div>
            </div>
        </div><!-- Share buttons at right -->
        <div class="share-buttons">



<span class="label">Share</span>
<span class="divider"></span>
<ul>
    <li>
        <a href="https://www.facebook.com/provis.estatemanagement/" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg></a>
    </li>
    <li>
        <a href="https://twitter.com/provis_em" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg></a>
    </li>
    <li>
        <a href="https://www.linkedin.com/company/provisestatemanagement" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg></a>
    </li>
    <li>
        <a href="https://www.instagram.com/provisem/" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></a>
    </li>
</ul>
        </div>
    </div>
</div>
</div>

<!-- Search for property sections -->



<section class="container text-center search-for-property" style="display: block">
    <div class="row">
        <h4>Search for property</h4>
    </div>
</section>
<section class="container-fluid container-custom text-center search-for-property" style="display: block">
    <div class="row">
        <div class="col-12">
            <div class="container">
<div class="row">
    <form action="/en/property-search" method="GET" id="search-for-property" class="col-12">
        <div class="row">
            <div class="col-12 error-message">Field(s) highlighted in red are required</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<select name="p" id="p" aria-placeholder="Select" class="form-control" data-default="">
     <option value="Rent" "selected=\selected\")>Rent</option>
     <option value="Sale" "selected=\selected\")>Sale</option>
</select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<select name="c" id="c" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="City">
 <option value="">City</option>
     <option value="Abu Dhabi" >Abu Dhabi</option>
     <option value="Al Ain" >Al Ain</option>
     <option value="Al Ain" >Fujairah</option>
     <option value="Al Ain" >Ras Al Khaimah</option>
     <option value="Al Ain" >Sharjah</option>
     <option value="Al Ain" >Dubai</option>
</select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<select name="a" id="a" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="Area">
 <option value="">Area</option>
     <option value="Al Ghadeer" >Al Ghadeer</option>
     <option value="Al Oyoun Village" >Al Oyoun Village</option>
     <option value="Al Raha Beach" >Al Raha Beach</option>
     <option value="Al Raha Gardens" >Al Raha Gardens</option>
     <option value="Al Reef Villas" >Al Reef Villas</option>
     <option value="Al Reem Island" >Al Reem Island</option>
     <option value="Al Shamkha" >Al Shamkha</option>
     <option value="Corniche Area" >Corniche Area</option>
     <option value="Eastern Road" >Eastern Road</option>
     <option value="Khalifa City A" >Khalifa City A</option>
     <option value="Saadiyat Island" >Saadiyat Island</option>
     <option value="Sas Al Nakhl" >Sas Al Nakhl</option>
     <option value="Yas Island" >Yas Island</option>
     <option value="Al Barsha" >Al Barsha</option>
     <option value="Al Furjan" >Al Furjan</option>
     <option value="Arabian Ranches" >Arabian Ranches</option>
     <option value="Business Bay" >Business Bay</option>
     <option value="Damac Hils" >Damac Hils</option>
     <option value="DIFC" >DIFC</option>
     <option value="DownTown Dubai" >DownTown Dubai</option>
     <option value="Dubai Hils State" >Dubai Hils State</option>
     <option value="Dubai Marina" >Dubai Marina</option>
     <option value="Dubai Sports City" >Dubai Sports City</option>
     <option value="Dubailand" >Dubailand</option>
     <option value="Emirates Hils" >Emirates Hils</option>
     <option value="Green Comunity" >Green Comunity</option>
     <option value="Greens" >Greens</option>
     <option value="Jumeriah" >Jumeriah</option>
     <option value="Jumeriah Beach Residence" >Jumeriah Beach Residence</option>
     <option value="Jumeriah Golf State" >Jumeriah Golf State</option>
     <option value="Jumeriah Lakes Tower" >Jumeriah Lakes Tower</option>
     <option value="Jumeriah Park" >Jumeriah Park</option>
     <option value="Jumeriah Village Circle" >Jumeriah Village Circle</option>
     <option value="Jumeriah Village Triangle" >Jumeriah Village Triangle</option>
     <option value="Mirdif" >Mirdif</option>
     <option value="Mirdif" >Mohammd Bin Rashid City</option>
     <option value="Mirdif" >Motor City</option>
     <option value="Mirdif" >Old Town</option>
     <option value="Mirdif" >Palm Jumeirah</option>
     <option value="Mirdif" >The Views</option>
     <option value="Mirdif" >The Villa</option>
     <option value="Mirdif" >Other Comunity</option>

</select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<select name="t" id="t" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="Unit type">
 <option value="">Unit type</option>
     <option value="Apartment" >Apartment</option>
     <option value="Duplex" >Duplex</option>
     <option value="Land Residential" >Land Residential</option>
     <option value="Loft Apartment" >Loft Apartment</option>
     <option value="Penthouse" >Penthouse</option>
     <option value="Staff Accommodation" >Staff Accommodation</option>
     <option value="Townhouse" >Townhouse</option>
     <option value="Villa" >Villa</option>
</select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<select name="b" id="b" aria-placeholder="Select" class="form-control" data-default="-1" data-dafault-name="Number of beds">
 <option value="-1">Number of beds</option>
 <option value="0" >Studio</option>
 <option value="1" >1</option>
 <option value="2" >2</option>
 <option value="3" >3</option>
 <option value="4" >4</option>
 <option value="5" >5</option>
 <option value="6" >6</option>
 <option value="7" >7</option>
</select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group other-features-col">
  <select name="f" id="f" aria-placeholder="Select" class="form-control" multiple="multiple" data-default="" data-default-name="Other features" data-template-single="1 feature" data-template-multiple="%s features">
         <option value="24 hours Maintenance" >24 hours Maintenance</option>
         <option value="Balcony" >Balcony</option>
         <option value="Bank/ATM Facility" >Bank/ATM Facility</option>
         <option value="Basement parking" >Basement parking</option>
         <option value="Basketball Court" >Basketball Court</option>
         <option value="BBQ area" >BBQ Area</option>
         <option value="Beach Access" >Beach access</option>
         <option value="Broadband ready" >Broadband ready</option>
         <option value="Built in wardrobes" >Built in wardrobes</option>
         <option value="Bus services" >Bus services</option>
         <option value="Business Center" >Business Center</option>
         <option value="Central air conditioning" >Central Air Conditioning</option>
         <option value="Central heating" >Central heating</option>
         <option value="Children&#39;s nursery" >Children&#39;s nursery</option>
         <option value="Children&#39;s play area" >Children&#39;s play area</option>
         <option value="Clubhouse" >Clubhouse</option>
         <option value="Communal gardens" >Communal gardens</option>
         <option value="Community View" >Community View</option>
         <option value="Concierge service" >Concierge Service</option>
         <option value="Covered parking" >Covered parking</option>
         <option value="Cycling tracks" >Cycling tracks</option>
         <option value="Fitness Center" >Fitness Center</option>
         <option value="Fully fitted kitchen" >Fully Fitted Kitchen</option>
         <option value="Fully furnished" >Fully furnished</option>
         <option value="Gazebo and outdoor entertaining area" >Gazebo and outdoor entertaining area</option>
         <option value="Golf club and clubhouse" >Golf club and clubhouse</option>
         <option value="Gymnasium" >Gymnasium</option>
         <option value="Intercom" >Intercom</option>
         <option value="Jacuzzi" >Jacuzzi</option>
         <option value="Kitchen white goods" >Kitchen white goods</option>
         <option value="Landscaped Garden" >Landscaped Garden</option>
         <option value="Laundry Service" >Laundry Service</option>
         <option value="Laundry/washing room" >Laundry/washing room</option>
         <option value="Maid&#39;s room" >Maid&#39;s room</option>
         <option value="Marble floors" >Marble floors</option>
         <option value="Metro station" >Metro station</option>
         <option value="Mosque" >Mosque</option>
         <option value="On high floor" >On high floor</option>
         <option value="On low floor" >On low floor</option>
         <option value="On mid floor" >On mid floor</option>
         <option value="Pets allowed" >Pets allowed</option>
         <option value="Private garage" >Private garage</option>
         <option value="Private garden" >Private garden</option>
         <option value="Private swimming pool" >Private swimming pool</option>
         <option value="Public park" >Public park</option>
         <option value="Public parking" >Public parking</option>
         <option value="Public transport" >Public transport</option>
         <option value="Recreational Facilities" >Recreational Facilities</option>
         <option value="Restaurants" >Restaurants</option>
         <option value="Satellite/Cable TV" >Satellite/Cable TV</option>
         <option value="Sauna" >Sauna</option>
         <option value="School" >School</option>
         <option value="Shared swimming pool" >Shared swimming pool</option>
         <option value="Shopping mall" >Shopping mall</option>
         <option value="Shops" >Shops</option>
         <option value="Solid wood floors" >Solid wood floors</option>
         <option value="Sports academies" >Sports academies</option>
         <option value="Squash courts" >Squash courts</option>
         <option value="Steam room" >Steam Room</option>
         <option value="Storage room" >Storage room</option>
         <option value="Study" >Study</option>
         <option value="Tennis courts" >Tennis courts</option>
         <option value="Valet Service" >Valet Service</option>
         <option value="View of gardens" >View of gardens</option>
         <option value="View of golf course" >View of golf course</option>
         <option value="View of parkland" >View of parkland</option>
         <option value="View of sea/water" >View of sea/water</option>
         <option value="Walking Trails" >Walking Trails</option>
</select>
            </div>
            <div class="col-12">
<div id="other-features-container-wrapper"></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<label for="price-range">Area size (sq. feet)</label>
<input type="hidden" name="af" data-default="-1">
<input type="hidden" name="at" data-default="-1">
<input type="text" name="area-size" id="area-size" data-min="258" data-from="258" data-max="18000" data-hide-min-max="true" data-to="18000" data-type="double" data-grid-margin="false" data-prettify-separator="," data-extra-classes="custom-range-slider">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
<label for="price-range">Price (AED)</label>
<input type="hidden" name="pf" data-default="-1">
<input type="hidden" name="pt" data-default="-1">
<input type="text" name="price-range" id="price-range" data-min="20000" data-from="20000" data-max="9900000" data-hide-min-max="true" data-to="9900000" data-type="double" data-grid-margin="false" data-prettify-separator="," data-extra-classes="custom-range-slider">
            </div>
            <div class="col-12 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-4 offset-lg-0 mt-md-0 mt-lg-0 form-group">
<button type="submit">Send Your Query</button>
            </div>
        </div>
    </form>
</div>
            </div>
        </div>
    </div>
</section>
<div class="no-form-separator" style="margin-bottom:80px; display: none"></div>

<!-- Who we are sections -->
<section class="container text-center who-we-are">
    <div class="row">
        <h4>Who we are</h4>
    </div>
</section>
<section class="container-fluid container-custom who-we-are">
    <div class="row">
        <div class="col-12">
            <div class="container">
<div class="row" >
    <div class="col-12 col-md-8 pl-md-0">

        <a href="our-vision-and-mission.html" class="our-passion"   style="background-image:url('frontend/images/background-our-vision-and-mission-en.jpg');">
            <span class="section" style="color:black ;">WHO WE ARE</span>
            <h5>
<p style="color:black ;">Setting a new benchmark in integrated estate service solutions.</p>
            </h5>
            <span style="color:black ;"><i class="zmdi zmdi-long-arrow-right"></i> OUR MISSION & VISION</span>
        </a>
    </div>
    <div class="col-12 col-md-4 pr-md-0">
        <div class="row" >
            <div class="col-12 col-sm-12"  style="background-image:url('frontend/images/who-we-are-careers.png'); align-content: center; height:330px;width:10px; margin-bottom: 50px;;">

<a href="careers.html" class="careers">
  <span class="section">Careers</span>
  <h5><p>Working for Provis</p></h5>
  <span><i class="zmdi zmdi-long-arrow-right"></i> Discover opportunities</span>
</a>
            </div>
            <div class="col-12 col-sm-12">

<a href="contact-us.html" class="contact">
  <h5>Contact us</h5>
  <p>Contact us anytime to discuss your property needs. Our knowledgeable, multi-lingual team is on call 24/7 to make sure you get the answers and service you need.<br />Call us now on <strong>600-505056</strong></p>
  <span><i class="zmdi zmdi-long-arrow-right"></i> send enquiry</span>
</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 pl-md-0">
        <div class="properties-employes">
            <span class="subtitle">Over</span>
            <span class="value">800</span>
            <span class="type">EMPLOYEES</span>
            <span class="separator"></span>
            <span class="subtitle">Over</span>
            <span class="value">53000</span>
            <span class="type">RESIDENTIAL UNITS</span>
        </div>
    </div>
    <div class="col-12 col-md-8 pr-md-0">

        <a href="corporate-social-responsibility.html" class="corporate-social">
            <span class="section">Corporate Social Responsibility</span>
            <h5>
<p>We are committed to initiatives around saving energy, promoting sustainability, ethical practices and workplace diversity.</p>
            </h5>
            <span><i class="zmdi zmdi-long-arrow-right"></i>  How we care</span>
        </a>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
<section class="property-search-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 pr-md-0 pl-md-0">
<div class="banner">
    <div class="image">
        <!-- desktop image -->
        <img src="media/1313/website-banner.jpg?anchor=center&amp;mode=crop&amp;width=1080&amp;height=200&amp;rnd=132374966150000000" alt="" class="d-none d-md-block">
        <!-- mobile image -->
        <img src="media/1313/website-banner.jpg?anchor=center&amp;mode=crop&amp;width=768&amp;height=507&amp;rnd=132374966150000000" alt="" class="d-block d-md-none">
    </div>
    <div class="text">

        <div>
            <div class="top-label">
The Provis App
            </div>
            <div class="title">
Living Made Easier
            </div>
            <a href="en/the-provis-app-living-made-easier" class="link">
<i class="zmdi zmdi-long-arrow-right"></i>
Download Now
            </a>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>

<section class="social-feed">
    <div class="container">
        <div class="row">
            <div class="col-12">
<h4>Social Wall </h4>
<ul class="juicer-feed" data-feed-id="provis_em" data-per="12" data-gutter="30"></ul>
            </div>
        </div>
    </div>
</section>

<!-- Associated Services sections -->
<section class="container text-center associated-services">
    <div class="row">
        <h4>Associated Services</h4>
    </div>
</section>
<section class="container-fluid container-custom associated-services" style=" background-image: url('{{asset('frontend/images/associated-services.png')}}')">
    <div class="row">
        <div class="col-12">
            <div class="container">
<div class="row">
    <div class="col-12 col-sm-4">
        <h5>Owners&#39; Association</h5>
    </div>
    <div class="col-12 col-sm-7">
        <p>We have Owners’ Association and Master Community Management Solutions to satisfy the needs of your property and tenants.</p>

        <a href="owners-association.html" target="_blank" rel="noopener noreferrer">About our Solutions</a>
    </div>
</div>
            </div>
        </div>
    </div>
</section>





@endsection