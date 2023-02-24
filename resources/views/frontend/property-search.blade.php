

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <title>Leasing Solutions - Property for Sale - Provis</title>
    <meta name="description" content="Provis offers leasing solutions for residential, commercial and retail properties. Get expert advice from fully-licensed leasing specialists.">
    <meta name="keywords">
    <meta property="og:title" content="Leasing Solutions - Property for Sale - Provis">
    <meta property="og:description" content="Provis offers leasing solutions for residential, commercial and retail properties. Get expert advice from fully-licensed leasing specialists.">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/property-search" />
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet" />


    
    



	<script type="text/javascript">
		window._genesys = {
		  widgets: {
		  	main: {
				theme: "light",
				preload: [ "webchat", "sidebar", "common" ]
			},
		    webchat: {
		      transport: {
		        type: 'purecloud-v2-sockets',
		        dataURL: 'https://api.mypurecloud.de',     // replace with API URL matching your region
		        deploymentKey : '78c6ce9d-3de5-41f1-80a5-b785eb47cd31',  // replace with your Deployment ID
		        orgGuid : '774efaa0-b8b4-4c80-8e63-3b56e06a8c6d',              // replace with your Organization ID
		        interactionData: {
		          routing: {
		            targetType: 'QUEUE',
		            targetAddress: 'Default Queue',
		            priority: 2
		          }
		        }
		      },
		      userData: {
		      	webUrl: window.location.href
		      }
		    },
		    sidebar: {
				showOnStartup: true,
				position: 'right',
				expandOnHover: true,
				channels: [
					{
						name: 'Webchat', 
						clickOptions: {}, 
						displayName: 'Web Chat', 
						displayTitle: 'Web Chat', 
						icon: 'chat', 
						onClick: function ($, CXBus, Common) {
							 CXBus.command( "WebChat.open", getAdvancedConfig() );
						} 
					}
				]
			}
		  }
		};

		function getAdvancedConfig() {
		    return {
			  formJSON: {
				    wrapper: "<table></table>",
				    inputs: [
						{  
			                id: 'cx_webchat_form_firstname',
			                name: 'firstName',
			                maxlength: '100',
			                placeholder: 'Required',
			                label: 'First Name',
			                "validate": function(event, form, input, label, $, CXBus, Common){
			                    return validateTextField(event, form, input, label, $, CXBus, Common);
			                }
			            },
			            {  
			                id: 'cx_webchat_form_lastname',
			                name: 'lastName',
			                maxlength: '100',
			                placeholder: 'Required',
			                label: 'Last Name',
			                "validate": function(event, form, input, label, $, CXBus, Common){
			                    return validateTextField(event, form, input, label, $, CXBus, Common);
			                }
			            },
			            {  
			                id: 'cx_webchat_form_email',
			                name: 'email',
			                maxlength: '100',
			                placeholder: 'Required',
			                label: 'Email',
			                "validate": function(event, form, input, label, $, CXBus, Common){
			                    return validateTextField(event, form, input, label, $, CXBus, Common);
			                }
			            },
			            {  
			                id: 'cx_webchat_form_phone',
			                name: 'phone',
			                maxlength: '100',
			                placeholder: 'Required',
			                label: 'Phone',
			                "validate": function(event, form, input, label, $, CXBus, Common){
			                    return validateTextField(event, form, input, label, $, CXBus, Common);
			                }
			            },
			            {  
			                id: 'cx_webchat_form_topic',
			                name: 'topic',
			                maxlength: '100',
			                placeholder: 'Required',
			                label: 'Topic',
			                type: "select",
							options: [
								{
									"text": "General Enquiry",
									"value": "General Enquiry"
								},
								{
									"text": "Leasing",
									"value": "Leasing"
								},
								{
									"text": "Consultancy Services",
									"value": "Consultancy Services",
								},
								{
									"text": "Property Management",
									"value": "Property Management",
								},
								{
									"text": "Owners' Association",
									"value": "Owners' Association",
								},
								{
									"text": "Clubhouse and Lifestyle",
									"value": "Clubhouse and Lifestyle",
								}
							]
			            }
					]
			   }
		    };
		}

		function validateTextField(event, form, input, label, $, CXBus, Common){
		    if(event.type != "blur" && event.type != "keyup"){	
		        if(input != undefined){
		            if(input[0].value === '' || input[0].value === undefined){
		                return false;
		            }
		        }
		    }
		    return true;
		}
	</script>
	<script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://apps.mypurecloud.de/widgets/9.0/cxbus.min.js" onload="javascript:CXBus.configure({debug:false,pluginsPath:'https://apps.mypurecloud.de/widgets/9.0/plugins/'}); CXBus.loadPlugin('widgets-core');"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#chat').click( function() {
				CXBus.command("WebChat.open", getAdvancedConfig());
			});
		});
		
		//Predictive 
		
		(function (a, t, c, l, o, u, d) {
			a['_genesysJourneySdk'] = o;
			(a[o] =
				a[o] ||
				function () {
					(a[o].q = a[o].q || []).push(arguments);
				}),
				(a[o].l = 1 * new Date());
			(u = t.createElement(c)), (d = t.getElementsByTagName(c)[0]);
			u.async = 1;
			u.src = l;
			u.charset = 'utf-8';
			d.parentNode.insertBefore(u, d);
		})(window, document, 'script', 'https://apps.mypurecloud.de/journey/sdk/js/web/v1/ac.js', 'ac');
		ac('init', '774efaa0-b8b4-4c80-8e63-3b56e06a8c6d', { region: 'euc1' });
		ac('pageview');

		ac('forms:track', 'form', {
			captureFormDataOnAbandon: true,
		});

		ac(
			'load',
			'autotrackScrollDepth',
			{
				scrollDepthEvents: [{ percentage: 100, eventName: 'scroll_depth_100' }],
			},
			function () {
				console.log('"autotrackScrollDepth" has been loaded');
			}
		);

		setTimeout(function () {
			ac('record', 'timeout-30');
		}, 30000);

		let oPlugin = CXBus.registerPlugin('Plugin');
		oPlugin.before('WebChat.open', function (oData) {
			try {
				if (oData.proactive) {
					oData.form = getAdvancedConfig().form;
					oData.formJSON = getAdvancedConfig().formJSON;

					return oData;
				}

				return oData;
			} catch (error) {
				return oData;
			}
		});
		
		
	</script>
}

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="nyt2jwycci63ey7tupsa-f-c30daf4ef-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":129,"ak.ipv":4,"ak.proto":"h2","ak.rid":"2acc258c","ak.r":46096,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"110.39.164.0","ak.cport":56264,"ak.gh":"2.18.60.50","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1676911588","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==AzB1ba4CJTgMaaLw0Rvh+BnapdxdrDp3XZ91CAoQ0djzzazq187FR34H1Hk9cNI+KvIM/vvs4QgmGJrjUWUBUPCRv0PUKgi+/PUehJg4yxjfCO5ZbJpDNPHtEIdkZH+jjYVFKQRyMPXm45Y2khj7a/rc+dlE4al4BOiBcacT40+AxawxhkVtTDHKNqf44wh1r21LMeK4UEFEN0IiP27MQTgiRCOH3EP0g9tfx+z3O7xCTpWGlYG+HOPrX8sPJ+XZksGJb3wHbapE9T4c2zktKZDbESXfZ02RKB1OQUb/Cemc/NxF5kT7TUtQdckxiqwHP68HnlX0M+vnJ4ubvvQSzIIlkbnmi7nMrY32RmFMWVku2WgOJc0xnnBShs2GRFCU201G7lUemUrJbhiR8ubeYPUsEedmNTDOW+nvoxggx9M=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body class="sales-and-leasing-solutions-search ">
   



<!-- Header start -->


<section class="consent-cookie">
    <div class="container cookie-row justify-content-md-center">
        <div class="col-md-7 col-12"><p>We use cookies to offer you a better user experience. By continuing to use this website, you consent to the use of cookies in accordance with our <a data-udi="umb://document/4e2e4f21eb2c4ccd9150b4337641b9b0" href="/en/privacy-policy" title="Privacy Policy">Privacy Policy.</a></p></div>
        <div class="col-md-2 col-5 text-center"><button class="accept-cookies" type="button"><span class="d-flex justify-content-center align-content-center">Accept</span></button></div>
        <div class="col-md-3 col-7 text-center  d-inline-flex align-items-center">
            <a class="reject-cookies" href="/en/privacy-policy">
                No, I want more info
            </a>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/en/"><img src="images/logo.png" alt="Provis"></a>
        <div class="call-us-mobile">
            <a href="tel:600-505056">Call us <i class="zmdi zmdi-phone"></i> <b>600-505056</b></a>
        </div>
        <div class="call-us-mobile login">
            <a href="https://myportal.provis.ae" target="_blank"><b>Log In</b></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-mobile-navigation" aria-controls="menu-mobile-navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
            <i class="zmdi zmdi-close close"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end flex-wrap" id="menu-mobile-navigation">
            <ul class="navbar-nav contact d-none d-lg-flex" style="top:4px;">
                <li class="nav-item">
                    <a href="tel:600-505056" class="nav-link" style="font-size:15px; line-height:19px; min-height:54px;">
                        Call us
                        <br>
                        <i class="zmdi zmdi-phone"></i>
                        <b>600-505056</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://myportal.provis.ae" target="_blank" class="nav-link">
                        <b>Log In</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav main-menu">
                <li class="nav-item dropdown d-block d-lg-none">
                    <a class="nav-link dropdown-toggle language" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language: ع <i class="zmdi zmdi-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item activated" href="/en/property-search?p=Rent&amp;c=&amp;a=&amp;t=Apartment&amp;b=0&amp;f=24 hours Maintenance&amp;af=258&amp;at=13998&amp;pf=20000&amp;pt=7774940">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/en/property-search?p=Rent&amp;c=&amp;a=&amp;t=Apartment&amp;b=0&amp;f=24 hours Maintenance&amp;af=258&amp;at=13998&amp;pf=20000&amp;pt=7774940">العربية </a>
                    </div>
                </li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who we are <i class="zmdi zmdi-chevron-down d-block d-lg-none"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/about-us"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>About Us</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/our-vision-and-mission"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Vision and Mission</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/corporate-social-responsibility"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Corporate Social Responsibility</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/our-clients"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Clients</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/leadership-team"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Leadership Team</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/who-we-are/our-values"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Values</span> </a>
                            </div>
                    </li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our services <i class="zmdi zmdi-chevron-down d-block d-lg-none"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/en/our-services/leasing"><span class="title">Leasing</span> <span class="description">Provis delivers market-leading leasing solutions that you can trust.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                                        <a class="dropdown-item" href="/en/our-services/consultancy-services"><span class="title">Consultancy Services</span> <span class="description">Our development design review service is a highly technical and critical aspect of building management.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                                        <a class="dropdown-item" href="/en/our-services/property-management"><span class="title">Property Management</span> <span class="description">Provis makes property ownership easy and delivers outstanding returns on your property investment.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                                        <a class="dropdown-item" href="/en/our-services/owners-association"><span class="title">Owners&#39; Association</span> <span class="description">Provis provides bespoke Owners’ Association and Master Community management solutions that serve all the needs of your property and tenants.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                                        <a class="dropdown-item" href="/en/our-services/clubhouse-and-lifestyle"><span class="title">Clubhouse and Lifestyle</span> <span class="description">Provis boosts your returns by keeping your communities active and engaged.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                            </div>
                    </li>
                        <li class="nav-item separator"></li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link" href="/en/destinations">Destinations</a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item icon-text" href="/en/destinations/yas-island"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Yas Island</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/destinations/saadiyat-island"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Saadiyat Island</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/destinations/al-raha-beach"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Al Raha Beach</span> </a>
                                        <a class="dropdown-item icon-text" href="/en/destinations/al-reem-island"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Al Reem Island</span> </a>
                            </div>
                    </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="/en/media">Media</a>
                                            </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="/en/contact-us">Contact us</a>
                                            </li>
                        <li class="nav-item separator"></li>
                <li class="nav-item dropdown language d-none d-lg-flex">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ع</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item activated" href="/en/property-search?p=Rent&amp;c=&amp;a=&amp;t=Apartment&amp;b=0&amp;f=24 hours Maintenance&amp;af=258&amp;at=13998&amp;pf=20000&amp;pt=7774940">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/en/property-search?p=Rent&amp;c=&amp;a=&amp;t=Apartment&amp;b=0&amp;f=24 hours Maintenance&amp;af=258&amp;at=13998&amp;pf=20000&amp;pt=7774940">العربية </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header end -->

    

<!-- Section BG internal -->
<div class="container container-header text-center">
    <div class="row">
        <div class="background-top-internal">
            <div class="opaque-bg"></div>
            <img src="images/sales-and-leasing-solutions-hero.png" alt="" class="img-fluid">
            <h1>Property search</h1>
        </div><!-- Share buttons at right -->
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



<section class="container text-center search-for-property" style="display: none">
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
                        <a href="#" class="toggle-search-for-property-box closed" data-toggle="form">
                            Search for property <i class="zmdi zmdi-chevron-up"></i>
                        </a>
                        <div class="row">
                            <div class="col-12 error-message">Field(s) highlighted in red are required</div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
                                <select name="p" id="p" aria-placeholder="Select" class="form-control" data-default="">
                                        <option value="Rent" "selected=\"selected\")>Rent</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
                                <select name="c" id="c" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="City">
                                    <option value="">City</option>
                                        <option value="Abu Dhabi" >Abu Dhabi</option>
                                        <option value="Al Ain" >Al Ain</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
                                <select name="a" id="a" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="Area">
                                    <option value="">Area</option>
                                        <option value="Al Ghadeer" >Al Ghadeer</option>
                                        <option value="Al Oyoun Village" >Al Oyoun Village</option>
                                        <option value="Al Raha Beach" >Al Raha Beach</option>
                                        <option value="Al Raha Gardens" >Al Raha Gardens</option>
                                        <option value="Al Reef" >Al Reef</option>
                                        <option value="Al Reef Villas" >Al Reef Villas</option>
                                        <option value="Al Reem Island" >Al Reem Island</option>
                                        <option value="Al Shamkha" >Al Shamkha</option>
                                        <option value="Corniche Area" >Corniche Area</option>
                                        <option value="Eastern Road" >Eastern Road</option>
                                        <option value="Khalifa City A" >Khalifa City A</option>
                                        <option value="Saadiyat Island" >Saadiyat Island</option>
                                        <option value="Sas Al Nakhl" >Sas Al Nakhl</option>
                                        <option value="Yas Island" >Yas Island</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
                                <select name="t" id="t" aria-placeholder="Select" class="form-control" data-default="" data-dafault-name="Unit type">
                                    <option value="">Unit type</option>
                                        <option value="Apartment" selected=&quot;selected&quot;>Apartment</option>
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
                                    <option value="0" selected=&quot;selected&quot;>Studio</option>
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
                                            <option value="24 hours Maintenance" selected=&quot;selected&quot;>24 hours Maintenance</option>
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
                                <input type="hidden" name="af" data-default="258">
                                <input type="hidden" name="at" data-default="13998">
                                <input type="text" name="area-size" id="area-size" data-min="258" data-from="258" data-max="18000" data-hide-min-max="true" data-to="13998" data-type="double" data-grid-margin="false" data-prettify-separator="," data-extra-classes="custom-range-slider">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 form-group">
                                <label for="price-range">Price (AED)</label>
                                <input type="hidden" name="pf" data-default="20000">
                                <input type="hidden" name="pt" data-default="7774940">
                                <input type="text" name="price-range" id="price-range" data-min="20000" data-from="20000" data-max="9900000" data-hide-min-max="true" data-to="7774940" data-type="double" data-grid-margin="false" data-prettify-separator="," data-extra-classes="custom-range-slider">
                            </div>
                            <div class="col-12 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-4 offset-lg-0 mt-md-0 mt-lg-0 form-group">
                                <button type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="no-form-separator" style="margin-bottom:80px; display: none"></div>



    <div class="container content-internal">
        <div class="row justify-content-center">
            <div class="col-12 search-and-sort">
                <h4 class="search-title">
                    Search results <span class="split">–</span> <span class="numUnits">8 units</span>
                </h4>
                <select name="ob" id="sort" aria-placeholder="Sort by" class="form-control" data-default="0">
                    <option disabled selected="selected">Sort by</option>
                    <option value="pa" >Price (low)</option>
                    <option value="pd" >Price (high)</option>
                    <option value="ba" >Beds (least)</option>
                    <option value="bd" >Beds (most)</option>
                </select>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257630841517&amp;aid=1481297&amp;id=16326367775988988&amp;wmt=1561980776&amp;image=26_09_2021-06_37_59-3213-14e9ad95b5cf47a1905f512abb3e902c.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 16</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Reem Island</h4>
                            <span class="price">AED: 39,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-5144
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 432.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Perfect Home | Flexible Payments | No Commission!!</p>
                            <a href="/en/property-search/property-details?i=PRO-R-5144&amp;d=perfect-home-flexible-payments-no-commission"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-5144&amp;d=perfect-home-flexible-payments-no-commission#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631218184&amp;aid=1481250&amp;id=16553697240816207&amp;wmt=1561980776&amp;image=16_06_2022-08_57_38-3213-ff9d4a69a63dba8a0343cef6a68b2560.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 11</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Yas Island</h4>
                            <span class="price">AED: 38,999</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-5276
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 467.04 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Nice View | Modern Lifestyle| Peaceful Living!</p>
                            <a href="/en/property-search/property-details?i=PRO-R-5276&amp;d=nice-view-modern-lifestyle-peaceful-living"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-5276&amp;d=nice-view-modern-lifestyle-peaceful-living#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257630723478&amp;aid=1481280&amp;id=1625138216046720&amp;wmt=1561980776&amp;image=01_07_2021-11_24_07-3213-d2fb46ac6e30edb4134ed30577ef9035.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 16</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Reem Island</h4>
                            <span class="price">AED: 50,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-4973
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 570.48 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Hot Deal | 12 Payments| Zero % Leasing Commission</p>
                            <a href="/en/property-search/property-details?i=PRO-R-4973&amp;d=hot-deal-12-payments-zero-leasing-commission"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-4973&amp;d=hot-deal-12-payments-zero-leasing-commission#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257630745172&amp;aid=1481280&amp;id=1627123493701993&amp;wmt=1561980776&amp;image=24_07_2021-10_45_56-3213-8adb06ab597b32968371fcb22a3e0d79.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 17</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Reem Island</h4>
                            <span class="price">AED: 48,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-4978
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 605.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Ready to Move In | No Commission | Twelve Payments</p>
                            <a href="/en/property-search/property-details?i=PRO-R-4978&amp;d=ready-to-move-in-no-commission-twelve-payments"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-4978&amp;d=ready-to-move-in-no-commission-twelve-payments#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631324603&amp;aid=1481286&amp;id=1666069696482512&amp;wmt=1561980776&amp;image=18_10_2022-09_16_05-3213-156005c5baf40ff51a327f1c34f2975b.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 14</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Ghadeer</h4>
                            <span class="price">AED: 40,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-5321
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 419.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Furnished Studio I A Quiet and Highly Desirable Location</p>
                            <a href="/en/property-search/property-details?i=PRO-R-5321&amp;d=furnished-studio-i-a-quiet-and-highly-desirable-location"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-5321&amp;d=furnished-studio-i-a-quiet-and-highly-desirable-location#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257630749104&amp;aid=1481280&amp;id=1627386630934651&amp;wmt=1561980776&amp;image=27_07_2021-11_54_25-3213-2d635d36ca9a287c8b575d41a136f23f.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 16</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Reem Island</h4>
                            <span class="price">AED: 39,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-5002
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 578.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Flexible &amp; Easy Payments with 0% Agent Commission</p>
                            <a href="/en/property-search/property-details?i=PRO-R-5002&amp;d=flexible-easy-payments-with-0-agent-commission"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-5002&amp;d=flexible-easy-payments-with-0-agent-commission#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257627817646&amp;aid=1481280&amp;id=1603223484513753&amp;wmt=1561980776&amp;image=21_10_2020-00_44_58-3213-556a86a9a5ad4dad612b9768bfd5fac7.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 16</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Al Reem Island</h4>
                            <span class="price">AED: 45,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-4381
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 368.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Discounted Price | Brand New Studio with Balcony </p>
                            <a href="/en/property-search/property-details?i=PRO-R-4381&amp;d=discounted-price-brand-new-studio-with-balcony"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-4381&amp;d=discounted-price-brand-new-studio-with-balcony#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                    <div class="row search-properties-box">
                        <div class="col-12 col-sm-4 search-properties-image">
                                <div class="lazy" data-src="https://www.provis.ae/remote.axd?https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631061172&amp;aid=1481280&amp;id=16431278292301681&amp;wmt=1561980776&amp;image=25_01_2022-16_27_20-3213-0e2c5601ec49fd5bfbb00dedb48e697d.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=242"></div>
                                <span class="photos"><i class="zmdi zmdi-camera"></i> 13</span>

                        </div>
                        <div class="col-12 col-sm-8 search-properties-title">
                            <h4>Eastern Road</h4>
                            <span class="price">AED: 60,000</span>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-home"></i> PRO-R-5208
                                </li>
                                <li>
                                    <i class="zmdi zmdi-hotel"></i> studio 
                                </li>
                                <li>
                                    <i class="zmdi zmdi-photo-size-select-small"></i> 619.00 Sq.Ft.
                                </li>
                            </ul>
                            <p class="description">Zero % Commission | Reduced Price | Unfurnished</p>
                            <a href="/en/property-search/property-details?i=PRO-R-5208&amp;d=zero-commission-reduced-price-unfurnished"><i class="zmdi zmdi-long-arrow-right"></i> MORE DETAILS </a>

                            <a href="/en/property-search/property-details?i=PRO-R-5208&amp;d=zero-commission-reduced-price-unfurnished#make-an-enquiry-modal"><i class="zmdi zmdi-long-arrow-right"></i> MAKE ENQUIRY</a>
                        </div>
                    </div>
                <div class="row ml-0 mr-0">
                    <div class="col-12 search-pagination">


    <ul>
            <li>
                <span class="disabled next"><i class="zmdi zmdi-long-arrow-left"></i> Prev</span>
            </li>
                        <li>
                    <a href="#" class="disabled">1</a>
                </li>
                    <li>
                <span class="disabled next">Next <i class="zmdi zmdi-long-arrow-right"></i></span>
            </li>
    </ul>

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
                    <input name="__RequestVerificationToken" type="hidden" value="OLNXQyGFzvxssySes-DkUj1ZWOrCPJMmw90mOHRG6fKSNs6Dbgyjb9yBYFsnWWNvNdfshvOC6RjVK3tpEHpojaUitpiaf2J7TzDFVi5ssCY1" />
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
<!-- Sign up newsletter end -->
<!-- Footer start -->
<footer class="container-fluid container-custom">
    <div class="row">
        <div class="col-12 col-md-5 col-lg-4">
            <p>Email subscriptions</p>
            <a href="#" target="_blank" rel="noopener noreferrer" class="signup-email" data-toggle="modal" data-target="#signup-email">Sign up for email alerts</a>
            <div class="app-links">
                        <a href="https://apps.apple.com/us/app/provis/id1498747800" target="_blank"><img src="images/app-app-store-en.svg" alt="Provis app" /></a>
                        <a href="https://play.google.com/store/apps/details?id=ae.provis.myportal" target="_blank"><img src="images/app-play-store-en.svg" alt="Provis app" /></a>

            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-8 company-link-wrapper">
            <div class="share-buttons">
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
            <div class="company-links">
                <ul>
                                <li><a href="/en/contact-us" rel="noopener noreferrer">Contact us</a></li>
                                <li><a href="/en/terms-conditions" rel="noopener noreferrer">Terms &amp; Conditions</a></li>
                                <li><a href="/en/privacy-policy" rel="noopener noreferrer">Privacy Policy</a></li>
                                <li><a href="/en/cookie-policy" rel="noopener noreferrer">Cookie Policy</a></li>
                <li>
<a href="https://secure.ethicspoint.eu/domain/media/en/gui/103052/index.html" target="_blank" rel="noopener noreferrer">Whistleblowing Policy</a></li>
                </ul>
            </div>
            <p class="copyright">2022 Provis. All rights reserved.</p>
        </div>
    </div>
</footer><!-- Footer end -->
    <!-- Main script -->
    <script src="/scripts/main.js?2"></script>
    <script src="/scripts/quantum-aldar.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    



    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "Provis",
            "image" : "https://www.provis.ae/images/logo.png",
            "telephone" : "600-505056",
            "email" : "info@provis.ae",
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "Yas Mall, Yas Island",
                "addressLocality" : "Abu Dhabi",
                "addressCountry" : "UAE",
                "postalCode" : "130520"
            }
        }
    </script>

</body>
</html>