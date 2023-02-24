

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <title>Consultancy Services - Property Consultancy Services - Provis</title>
    <meta name="description" content="Provis offers holistic consultancy services for your property. Connect for expert advice on development design review, waste management, fire safety and a lot more.">
    <meta name="keywords">
    <meta property="og:title" content="Consultancy Services - Property Consultancy Services - Provis">
    <meta property="og:description" content="Provis offers holistic consultancy services for your property. Connect for expert advice on development design review, waste management, fire safety and a lot more.">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/our-services/consultancy-services" />
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet" />




    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '711566605911691');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=711566605911691&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->



    <!-- LikedIn Pixel -->
    <script type="text/javascript">
        _linkedin_partner_id = "499699";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function () {
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript"; b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=499699&fmt=gif" />
    </noscript>
    <!-- End LikedIn Pixel -->



    <!-- Google Tag Manager -->
    <script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KJ9RB8S');</script>
    <!-- End Google Tag Manager -->



    <!-- Global site tag (gtag.js) - Google Ads: 762788491 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-762788491"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        } gtag('js', new Date());
        gtag('config', 'AW-762788491');
        //below for google analytics
        gtag('config', 'UA-134272116-1');
        //below for floodlight tag
        gtag('config', 'DC-9200188');
    </script>
        <!--
        Event snippet for Provis_Landing Pages on Provis Landing Pages: Please do not remove.
        Place this snippet on pages with events you’re tracking.
        Creation date: 02/16/2019
        -->
        <script>
            gtag('event', 'conversion', {
                'allow_custom_scripts': true,
                'send_to': 'DC-9200188/landi0/provi0+standard'
            });
        </script>
        <noscript>
            <img src="https://ad.doubleclick.net/ddm/activity/src=9200188;type=landi0;cat=provi0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" alt="" />
        </noscript>
        <!-- End of event snippet: Please do not remove -->

    
    



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

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="w25bzcix2exj2y7rw7nq-f-515ae38b5-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":132,"ak.ipv":4,"ak.proto":"h2","ak.rid":"6e9bb0ca","ak.r":45664,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"182.186.28.0","ak.cport":54154,"ak.gh":"23.48.172.29","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1676785627","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==d5LZuXXbB9fppGOpZmc/8KDmCupJQ0jBqWEdAcjLlcRItLYhP05sETv39Nn5HviqeHq/ne40fnkSD9VAV0gHO5TRLx9T5hKmEn5Lvdr615L91ILqkJNskEIlv90ynOzCTn5chhA+Q9V5SuCwMoHNfNekm4PL6/1mBsazPVVlqRlDhqbmy9IFCe+gQIAZPaLy0WJZNSXbnY6O7DJpshc68uDQ91vasQ4ak4BVUKZD5js8WQ9U5ruKVTMzboIUTYaoHVgBEj+S/l2nJaPgSaGqHWUz5v+o5AxE96V0zM99sNIqn+9wYdmTHWwYC5rChiIJxs8FQru7P6rd6ypt6Guk02aMz2R8jMB8HSjKhdS03wkHA0M+iParIJ/1G08By3/l3sch8iqzGDkbVpcaA5vytQz34v5Oqr+gd5cfpfh4SpU=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body class="consultancy ">



    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ9RB8S"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
   



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
                        <a class="dropdown-item activated" href="consultancy-services.html">English <i class="zmdi zmdi-check"></i></a>
                       
                    </div>
                </li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who we are <i class="zmdi zmdi-chevron-down d-block d-lg-none"></i></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item icon-text" href="about-us.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>About Us</span> </a>
  <a class="dropdown-item icon-text" href="our-vision-and-mission.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Vision and Mission</span> </a>
  <a class="dropdown-item icon-text" href="corporate-social-responsibility.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Corporate Social Responsibility</span> </a>
  <a class="dropdown-item icon-text" href="our-clients.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Clients</span> </a>
  <a class="dropdown-item icon-text" href="leadership-team.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Leadership Team</span> </a>
  <a class="dropdown-item icon-text" href="our-values.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Our Values</span> </a>
                            </div>
                    </li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our services <i class="zmdi zmdi-chevron-down d-block d-lg-none"></i></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="leasing.html"><span class="title">Leasing</span> <span class="description">Provis delivers market-leading leasing solutions that you can trust.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
  <a class="dropdown-item" href="consultancy-services.html"><span class="title">Consultancy Services</span> <span class="description">Our development design review service is a highly technical and critical aspect of building management.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
  <a class="dropdown-item" href="property-management.html"><span class="title">Property Management</span> <span class="description">Provis makes property ownership easy and delivers outstanding returns on your property investment.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
  <a class="dropdown-item" href="owners-association.html"><span class="title">Owners&#39; Association</span> <span class="description">Provis provides bespoke Owners’ Association and Master Community management solutions that serve all the needs of your property and tenants.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
  <a class="dropdown-item" href="clubhouse-and-lifestyle.html"><span class="title">Clubhouse and Lifestyle</span> <span class="description">Provis boosts your returns by keeping your communities active and engaged.</span> <span class="sub-link"><i class="zmdi zmdi-long-arrow-right"></i> View service</span> </a>
                            </div>
                    </li>
                        <li class="nav-item separator"></li>
                    <li class="nav-item dropdown container-width">
                            <a class="nav-link" href="/en/destinations">Destinations</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item icon-text" href="yas-island.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Yas Island</span> </a>
  <a class="dropdown-item icon-text" href="saadiyat-island.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Saadiyat Island</span> </a>
  <a class="dropdown-item icon-text" href="al-raha-beach.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Al Raha Beach</span> </a>
  <a class="dropdown-item icon-text" href="al-reem-island.html"><i class="zmdi zmdi-long-arrow-right d-none d-lg-inline-block"></i> <span>Al Reem Island</span> </a>
                            </div>
                    </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="media.html">Media</a>
      </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="contact-us.html">Contact us</a>
      </li>
                        <li class="nav-item separator"></li>
                <li class="nav-item dropdown language d-none d-lg-flex">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ع</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item activated" href="consultancy-services.html">English <i class="zmdi zmdi-check"></i></a>
                        
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
                    <img src="images/background-consultancy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132376881950000000" alt="Consultancy Services" class="img-fluid img-desk" />
                    <img src="images/background-consultancy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132376881950000000" alt="Consultancy Services" class="img-fluid img-mob" />

            <h1>Consultancy Services</h1>
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
            <h3>Development Design Review</h3>
            <p>Our improvement layout overview carrier is a especially technical and essential issue of constructing management.</p>
<p><br />Defects are identified and corrected at an early stage, and periodic design reviews are conducted to ensure that the design accurately reflects customer requirements, meets all relevant safety and sustainability standards, and is ready for future operation. , maintenance, or replacement costs.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 review-of-development">
            <h3>Review of Development Strategies</h3>
        </div>
    </div>
</div>

<div class="container container-review-of-development">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row justify-content-center">

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/3204/recycling.jpeg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=133053039560000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="1" data-title="Waste Management" data-text="We monitor and regulate all aspects of the waste management process to ensure the cleanliness of your property and the health of everybody who lives, works or visits the community.  We ensure that a specialized waste management team manages your waste in the best possible way for your business and the environment, from waste inception to its final disposal.  Our holistic approach encompasses the monitoring of the collection, mobilization, treatment and disposal of waste, as well as recycling and continuous monitoring and regulation of the waste management process.">
      Waste Management <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1013/energy-consumption.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131951805780000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="1" data-title="Energy Consumption" data-text="We monitor your assets' energy consumption to optimise your energy levels and reduce your energy spend. Energy consumption is also an indication of asset condition, so monitoring energy consumption may also identify faulty equipment, so action can be taken to reduce the risk of breakdowns and avoid disruption to your business.">
      Energy Consumption <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1008/chilled-water-metering.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131951805730000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="1" data-title="Chilled Water Metering" data-text="Our involvement from the early stages of the property’s life cycle allows us to ensure the quality and accuracy of all metering systems. We make sure that each of your tenants pay the correct amount for their A/C bills each month. By calculating and tracking bills for private and common areas, we give you all the up-to-date information you need to settle your community or district cooling bills with confidence.">
      Chilled Water Metering <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12 toggle-review desktop" data-row="1">
                                    <div class="row">
  <div class="col-md-7 offset-lg-1 col-lg-7">
      <h5></h5>
      <p></p>
  </div>
  <div class="col-md-5 col-lg-3">
      <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
          Submit an enquiry
      </a>
  </div>
                                    </div>
                                </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1022/firesafety.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131953294820000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="2" data-title="Fire Safety" data-text="We provide advice and support that you can trust for every aspect of ensuring the fire safety and prevention of your facility. Our highly-trained and experienced teams bring in international standards and best practices and apply them to the unique context of your facility, from assessments & audits, advice on fire safety legislation, policies and issues, and fire safety education and training. We take a holistic approach to fire safety systems, ensuring that your fire alarms, emergency lighting and project management services work perfectly together, while also supporting you with business continuity planning and management to ensure that your risks are minimised.">
      Fire Safety <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12 toggle-review desktop" data-row="2">
                                    <div class="row">
  <div class="col-md-7 offset-lg-1 col-lg-7">
      <h5></h5>
      <p></p>
  </div>
  <div class="col-md-5 col-lg-3">
      <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
          Submit an enquiry
      </a>
  </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container content-internal">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 development-design-review">
            <h3>Service Charge Budget and Cost modelling</h3>
            <p>Our experienced and highly skilled finance and budgeting team supports your business:</p>
        </div>
    </div>
</div>

<div class="container container-review-of-development">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row justify-content-center">

                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1023/costmodelling.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131953301550000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="3" data-title="Cost Modelling" data-text="Our cost modelling service allows you to determine the most cost-effective way to run your asset or investment and maximise the value you derive from it. We work with you to understand all the associated costs, benefits and risks of each possible action, so you can make business decisions with confidence.">
      Cost Modelling <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1007/budget.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131951805720000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="3" data-title="Budget Preparation" data-text="Our budget preparation service secures and enhances your asset's value through professional administration, budget control and efficient allocation of funds. We provide the financial and reporting support you need throughout the entire property life cycle, including budget preparation, financial audits and reports, service charges billing and other services to maximise your cost savings.">
      Budget Preparation <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1010/lease-agreement.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131951805750000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="3" data-title="Service Provider Service Level Agreements (SLAs)" data-text="We enhance your community living standards while reducing your costs by applying our expertise and best practices in vendor contracting and service procurement. By setting best practices SLA’s and closely monitoring and managing all your preventive and reactive service provider needs, we raise overall efficiency and quality, ensuring that all your third-party service providers comply with safety and quality standard procedures and policies.">
      Service Provider Service Level Agreements (SLAs) <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12 toggle-review desktop" data-row="3">
                                    <div class="row">
  <div class="col-md-7 offset-lg-1 col-lg-7">
      <h5></h5>
      <p></p>
  </div>
  <div class="col-md-5 col-lg-3">
      <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
          Submit an enquiry
      </a>
  </div>
                                    </div>
                                </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="row review-box">
                                    <div class="col-4 col-sm-12 review-image">
          <div style="background-image: url(/media/1009/property-handover2.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=131951805740000000);"></div>
                                    </div>
                                    <div class="col-8 col-sm-12 review-link">
  <a href="#" data-row="4" data-title="Property Handover Process &amp; Documentation" data-text="Our estate management experts ensure that your handover process is hassle and stress-free, not just for you but for your customers too. We offer a full range of services, from scheduling of initial inspections to handing over the keys, and we can also provide move-in packages, community rules, and customer communications at every step of the process.">
      Property Handover Process &amp; Documentation <i class="zmdi zmdi-plus showing"></i> <i class="zmdi zmdi-close closing"></i>
  </a>
                                    </div>
                                    <div class="col-12 toggle-review mobile">
  <div class="row">
      <div class="col-md-7 offset-lg-1 col-lg-7">
          <h5></h5>
          <p></p>
      </div>
      <div class="col-md-5 col-lg-3">
          <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
              Submit an enquiry
          </a>
      </div>
  </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12 toggle-review desktop" data-row="4">
                                    <div class="row">
  <div class="col-md-7 offset-lg-1 col-lg-7">
      <h5></h5>
      <p></p>
  </div>
  <div class="col-md-5 col-lg-3">
      <a href="/en/contact-us?origin=1216#contact-us-form-anchor">
          Submit an enquiry
      </a>
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
                    <input name="__RequestVerificationToken" type="hidden" value="GP6Q8VhWWM3lqhy-gsKlYArLynMD1VLRixkmm4nh-OM4ESYGisW1lY5W2-OJ-KVVzIbSBfjYpecVBcMj09JjP-hKu3SRsTjzDHh5OvZ9a-A1" />
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