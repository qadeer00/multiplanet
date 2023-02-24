

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    
    <title>Provis Cookie Policy</title>
    <meta name="description" content="Read the cookie policy for Provis website.">
    <meta name="keywords">
    <meta property="og:title" content="Provis Cookie Policy">
    <meta property="og:description" content="Read the cookie policy for Provis website.">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/cookie-policy" />
    <link rel="stylesheet" type="text/css" href="/styles/main.css?2" />
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

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="nyt2jw24plqxcy7xnsrq-f-c1b3210db-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":188,"ak.ipv":4,"ak.proto":"h2","ak.rid":"11b52612","ak.r":32748,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"110.39.164.0","ak.cport":14723,"ak.gh":"92.122.225.109","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1677159587","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==70vsxz0q4fZP0ijljX/Jx4fIbGgVT/j0fyNeP6sUKJpIsQDUy79rNHLwplJmYdszxfxNoHvMir9NNrCoVElDOZyTRnw6KRtEXDic8iy6iMDdev77GEiE/y+fwOS/WX7S1Px/CM5xnxW5YEZV6S4dlRfRgN8dU+A0mU1WHKWgjNCBRVHRnXEBwxwHh0jjXfTNOaEg5zTbbemjLHw4HqDHzFlP5ZB9gLJxUISTNstzIHZsgSyA8ipweVapqxZQnfr7qxkjzBgpl0HvC1LB9HoSqOVZlmjYKBrM2NiuSqwRm/3I0O4Qjx0fc+ZHayE6PvQ6QXrrA00rOi3mD70RGG8JqF1qzGokyhUEW7Ju5i/zbH85aNkj/D8iQnb47Nt+vCC7no9joIscR+kt3ARTrx+AC/7hcCOMlsl2KoXF2g2ssOA=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body class="terms-and-conditions ">
   



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
        <a class="navbar-brand" href="/en/"><img src="/images/logo.png" alt="Provis"></a>
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
                        <a class="dropdown-item activated" href="/en/cookie-policy">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/cookie-policy">العربية </a>
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
                        <a class="dropdown-item activated" href="/en/cookie-policy">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/cookie-policy">العربية </a>
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
                    <img src="/media/1078/background-policy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132075823840000000" alt="Cookie Policy" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="/media/1078/background-policy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132075823840000000" alt="Cookie Policy" class="img-fluid d-flex justify-content-center img-mob" />

            <h1>Cookie Policy</h1>
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
        <div class="col-12">
            <p><strong>Cookie policy</strong></p>
<p>This cookie policy ("Policy") describes what cookies are and how PROVIS Sole Proprietorship LLC ("PROVIS Sole Proprietorship LLC", "we", "us" or "our") uses them on the <a href="https://www.provis.ae/">provis.ae</a> website and any of its products or services (collectively, "Website" or "Services").</p>
<p>You should read this Policy so you can understand what type of cookies we use, the information we collect using cookies and how that information is used. It also describes the choices available to you regarding accepting or declining the use of cookies. For further information on how we use, store and keep your personal data secure, see our <a data-udi="umb://document/4e2e4f21eb2c4ccd9150b4337641b9b0" href="/en/privacy-policy" title="Privacy Policy">Privacy Policy</a>.</p>
<p><strong>What are cookies?</strong></p>
<p>Cookies are small pieces of data stored in text files that are saved on your computer or other devices when websites are loaded in a browser. They are widely used to remember you and your preferences, either for a single visit (through a "session cookie") or for multiple repeat visits (using a "persistent cookie").</p>
<p>Session cookies are temporary cookies that are used during the course of your visit to the Website, and they expire when you close the web browser.</p>
<p>Persistent cookies are used to remember your preferences within our Website and remain on your desktop or mobile device even after you close your browser or restart your computer. They ensure a consistent and efficient experience for you while visiting our Website or using our Services.</p>
<p>Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who serve content or provide advertising or analytics services on the website ("third party cookies"). These third parties can recognize you when you visit our website and also when you visit certain other websites.</p>
<p><strong>What type of cookies do we use?</strong></p>
<p><strong>Necessary cookies</strong><br />Necessary cookies allow us to offer you the best possible experience when accessing and navigating through our Website and using its features. For example, these cookies let us recognize that you have created an account and have logged into that account to access the content.</p>
<p><strong>Functionality cookies</strong><br />Functionality cookies let us operate the Website and our Services in accordance with the choices you make. For example, we will recognize your username and remember how you customized the Website and Services during future visits.</p>
<p><strong>Analytical cookies</strong><br />These cookies enable us and third-party services to collect aggregated data for statistical purposes on how our visitors use the Website. These cookies do not contain personal information such as names and email addresses and are used to help us improve your user experience of the Website.</p>
<p><strong>Advertising cookies</strong><br />Advertising cookies allow us and third parties serve relevant ads to you more effectively and help us collect aggregated audit data, research, and performance reporting for advertisers. They also enable us to understand and improve the delivery of ads to you and know when certain ads have been shown to you.</p>
<p>Your web browser may request advertisements directly from ad network servers, these networks can view, edit, or set their own cookies, just as if you had requested a web page from their website.<br />Although we do not use cookies to create a profile of your browsing behavior on third-party sites, we do use aggregate data from third parties to show you relevant, interest-based advertising.</p>
<p><strong>Social media cookies</strong><br />Third-party cookies from social media sites (such as Facebook, Twitter, etc) let us track social network users when they visit our Website, use our Services or share content, by using a tagging mechanism provided by those social networks.</p>
<p>These cookies are also used for event tracking and remarketing purposes. Any data collected with these tags will be used in accordance with our and social networks’ privacy policies. We will not collect or share any personally identifiable information from the user.</p>
<p><strong>Do we use web beacons or tracking pixels?</strong></p>
<p>Our emails may contain a "web beacon" (or "tracking pixel") to tell us whether our emails are opened and verify any clicks through to links or advertisements within the email.</p>
<p>We may use this information for purposes including determining which of our emails are more interesting to users and to query whether users who do not open our emails wish to continue receiving them.</p>
<p>The pixel will be deleted when you delete the email. If you do not wish the pixel to be downloaded to your device, you should read the email in plain text view or with images disabled.</p>
<p><strong>What are your cookie options?</strong></p>
<p>If you don't like the idea of cookies or certain types of cookies, you can change your browser's settings to delete cookies that have already been set and to not accept new cookies. To learn more about how to do this or to learn more about cookies, visit <a rel="noopener" href="https://www.internetcookies.org/" target="_blank">internetcookies.org</a></p>
<p>Please note, however, that if you delete cookies or do not accept them, you might not be able to use all of the features our Website and Services offer.</p>
<p><strong>Changes and amendments</strong></p>
<p>We reserve the right to modify this Policy relating to the Website or Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>
<p><strong>Acceptance of this policy</strong></p>
<p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to use or access the Website and its Services.</p>
<p><strong>Contacting us</strong></p>
<p>If you have any questions about this Policy or our use of cookies, please contact us.<br />This document was last updated on February 10, 2019</p>
        </div>
    </div>
</div>

<section class="container-fluid container-custom always-available">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5">
                        <h5>We’re always available, because we care</h5>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 offset-md-1">
                        <p>Contact us anytime to discuss your property needs. Our knowledgeable, multi-lingual team is on call 24/7 to make sure you get the answers and service you need.</p>
                        <div class="phone">
                            <span>Call us now on</span><br /><i class="zmdi zmdi-phone"></i>&nbsp; <a href="tel:600-505056">600-505056</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




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
                    <input name="__RequestVerificationToken" type="hidden" value="3cyRlhpv_Gsu2pRix9u57ovQu1HsrKP6XEuo2cL8lr1QUODIGt3mZ-CHdvHGvAvKroF-Q-edNu2XmWg6vdRSrZsYJv_vzNaceL2ieKDe2fU1" />
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
                        <a href="https://apps.apple.com/us/app/provis/id1498747800" target="_blank"><img src="/images/app-app-store-en.svg" alt="Provis app" /></a>
                        <a href="https://play.google.com/store/apps/details?id=ae.provis.myportal" target="_blank"><img src="/images/app-play-store-en.svg" alt="Provis app" /></a>

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