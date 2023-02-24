

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <title>Provis - Master Destination - Yas Island</title>
    <meta name="description" content="Yas Island, now one of Abu Dhabi’s most prominent landmarks is an ideal destination to live, work and play.">
    <meta name="keywords">
    <meta property="og:title" content="Provis - Master Destination - Yas Island">
    <meta property="og:description" content="Yas Island, now one of Abu Dhabi’s most prominent landmarks is an ideal destination to live, work and play.">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/destinations/yas-island" />
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

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="w25bzcix2exj2y7rxfma-f-763d7fecb-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":127,"ak.ipv":4,"ak.proto":"h2","ak.rid":"6ea2e8f6","ak.r":45664,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"182.186.28.0","ak.cport":54344,"ak.gh":"23.48.172.29","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1676786008","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==b1aRqu30JtdvyWgl+/Rh5QLoS8UMkVdwbzGaSjM6oiPbu3mSENX1CAzFKfOG9eFXeOv9GV+pwBjnjnvROV5xdho0lThJsm5sSYanq0BmF1qB9PlEMdW0McSC7p7VMWRzny91QQHL1HnxPQWHBwFC0PuhGnJEahnKC+AJS8t4YEF+8Uq6GilBrRzMrMBS87NSu4MMXi8qiJus2oXeCCHjBQisjvHZgr1uU//8s+p/DVFJxV9Utcw9IxtOJ66HT0HZW2ox77TqlkTN31IcxZEdLNmlHcZnHl8mgGzmcYN6WQ2+URHJd3ThZOFjHb3UF8JBtLlWvIM7Ys+dPHuuZ6Wx9j3ehEgM14d1tw5DbcbgjfMfsMYFoLjbdv3xp4NwFqgduJf+CHz3fhNqu4/hugHAMZfKfXmWYeIduUAj/f15tDM=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body class="destination-detail page ">



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
                        <a class="dropdown-item activated" href="/en/destinations/yas-island">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/destinations/yas-island">العربية </a>
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
                        <a class="dropdown-item activated" href="/en/destinations/yas-island">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/destinations/yas-island">العربية </a>
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
                    <img src="/media/1911/yas-island-banner.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132555429660000000" alt="" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="/media/1911/yas-island-banner.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132555429660000000" alt="" class="img-fluid d-flex justify-content-center img-mob" />

            <h1 class="d-none d-sm-block">Yas Island</h1>
            <h1 class="d-block d-sm-none title-internal-mobile">Yas Island</h1>
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

<section class="breadcrumb">
    <div class="container breadcrumb-overview-section-space ">
        <ul>
            <li>
                <a href="/en/destinations">
                    Destinations
                </a>
            </li>
            <li>
                Yas Island
            </li>
        </ul>
    </div>
</section>

<section class="overview">
    <div class="container content-internal">
        <div class="row breadcrumb-overview-section-space ">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2 class="section-title">
                    Overview
                </h2>
                <h3 class="subtitle">
                    Yas Island, now one of Abu Dhabi’s most prominent landmarks is an ideal destination to live, work and play.
                </h3>
                <p>
                    Aldar’s vision of turning the island into a multi-purpose leisure, shopping and entertainment destination has been realized through various developments. Imagine living in Yas Island, the host of different fantasy worlds that include Yas Waterworld, Warner Bros. and Ferrari World.  Yas Mall, one of Abu Dhabi’s largest and most luxurious shopping centers, is located on the island. It is also the hub of a wide variety of food and beverage outlets offering an extensive variety of cuisines and surrounded by a racetrack that is the home to Formula 1. Yas Island is a place you want to belong.
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="/media/1874/yas-island-overview-1.jpg?anchor=center&amp;mode=crop&amp;width=525&amp;height=360&amp;rnd=132555410690000000" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

        <section class="amenities-and-key-facts">
                    <div class="amenities">
                        <div class="container">
                            <h2 class="section-title">
                                Amenities
                            </h2>
                            <div class="carousel-wrapper">
                                <div class="owl-carousel">
                                            <div class="item">
                                                <p>
                                                    Discover splashing excitement at Yas Waterworld, experience speed and thrills at Ferrari World, Abu Dhabi and meet 35 live characters at Warner Bros. World, Abu Dhabi.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Enjoy the Formula 1® World Championship at Yas Marina Circuit, considered as one of the most technologically-advanced Formula 1® circuits in the world and a home for motorsports in the Middle East.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    A few select retail and dining outlets along with a Waitrose supermarket are located in the community centre by Saadiyat Beach. There is also a Spinneys supermarket on Saadiyat Island at The Collection.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Yas Mall offers an incredible shopping, dining and entertainment experience for residents and tourists alike, all under one roof.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Enjoy breathtaking views from across an extensive waterfront area, including Fishermen's Marina and the Yacht Marina.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Dine in with scenic views of the Arabian Gulf and choose from a wide variety of cusines at any of the restaurants and cafes by the Marina.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Experience a unique diving experience through any of the diving clubs based out of the Marina on the island.
                                                </p>
                                            </div>
                                            <div class="item">
                                                <p>
                                                    Residents and visitors can enjoy the serene Saadiyat Beach that is only a short car ride away.  Apart from the luxurious beach spots, the Saadiyat Island Public Beach is one of the most favoured leisure spots for the residents. The sprawling white-sand beach has plenty of water sports options, changing rooms and rental chairs available.
                                                </p>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="key-facts">
                        <div class="container">
                            <h2 class="section-title">
                                Key Facts
                            </h2>
                                    <div class="row">

                                            <div class="col-12 col-sm-6 col-md-3 box-wrapper">
                                                <div class="box">
                                                    <div>
                                                        <div class="number">14</div>
                                                        <div class="description">MINUTES AWAY</div>
                                                        <div class="text">
                                                            <p>from Abu Dhabi International Airport</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 box-wrapper">
                                                <div class="box">
                                                    <div>
                                                        <div class="number">25</div>
                                                        <div class="description">MINUTES AWAY</div>
                                                        <div class="text">
                                                            <p>from Abu Dhabi city center</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 box-wrapper">
                                                <div class="box">
                                                    <div>
                                                        <div class="number">60</div>
                                                        <div class="description">MINUTES AWAY</div>
                                                        <div class="text">
                                                            <p>from Dubai city center</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 box-wrapper">
                                                <div class="box">
                                                    <div>
                                                        <div class="number">75</div>
                                                        <div class="description">MINUTES AWAY</div>
                                                        <div class="text">
                                                            <p>from Dubai International Airport</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

                        </div>
                    </div>

        </section>


<section class="lifestyle" style="background-image: url(/media/1321/gettyimages-596753614.png?anchor=center&amp;mode=crop&amp;width=1440&amp;height=490&amp;rnd=132374998340000000)">
    <div class="container">
        <div class="row">
            <div class="col-md-5 image ">
                <img src="/media/1647/yas-island-lifestyle.jpg?anchor=center&amp;mode=crop&amp;width=433&amp;height=360&amp;rnd=132488768010000000" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1">
                <h2 class="section-title">Lifestyle</h2>
                <div class="text">
                    <p>
                        Take a dip into a refreshing lifestyle, with every activity under the sun just moments away. Dive into the cool Arabian Gulf, navigate the winding mangroves, browse the collections at Yas Mall and sip a sundowner in the buzzing Yas Marina, all without ever leaving the island. Whenever you’re in the mood for an adrenaline rush, Yas Waterworld and Ferrari World are just around the corner.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="attractions">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Attractions</h2>
                    </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1907/attractions-yas-mall.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424190000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Mall
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.yasmall.ae/" target="_blank">
                                                    Yas Mall
                                                </a>
                                            </h2>
                                        <p>
                                            Yas Mall offers an incredible shopping, dining and entertainment experience for residents and tourists alike, all under one roof.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1909/attractions-ferrari-world-abu-dhabi.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424190000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Ferrari World Abu Dhabi
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.ferrariworldabudhabi.com/" target="_blank">
                                                    Ferrari World Abu Dhabi
                                                </a>
                                            </h2>
                                        <p>
                                            Welcome to the first Ferrari branded theme park in the world. Ferrari World Abu Dhabi features a winning mix of rides and attractions for visitors of all ages, in addition to a wide variety of Italian delicacies and unique shopping experiences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1906/attractions-yas-marina-circuit.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424180000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Marina Circuit
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.yasmarinacircuit.com" target="_blank">
                                                    Yas Marina Circuit
                                                </a>
                                            </h2>
                                        <p>
                                            Enjoy the Formula 1® World Championship at Yas Marina Circuit, which is considered one of the most technologically-advanced Formula 1® circuits in the world and a home for motorsports in the Middle East.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1908/attractions-yas-waterworld.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424190000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Waterworld
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.yaswaterworld.com" target="_blank">
                                                    Yas Waterworld
                                                </a>
                                            </h2>
                                        <p>
                                            Welcome to Yas Waterworld, the region’s iconic waterpark, promising legendary adventure for all ages with over 40 rides, slides and attractions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1898/attractions-warner-bros-world-abu-dhabi.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424150000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Warner Bros. World
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.wbworldabudhabi.com" target="_blank">
                                                    Warner Bros. World
                                                </a>
                                            </h2>
                                        <p>
                                            One of the world’s biggest, fully air-conditioned indoor theme parks, Warner Bros. World™ Abu Dhabi brings together all legendary characters from the studio under one roof.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1910/attractions-yas-marina.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555427230000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Marina
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                Yas Marina
                                            </h2>
                                        <p>
                                            Yas Marina is not only one of Abu Dhabi’s finest marinas but also a vibrant venue offering dining, fitness and leisure facilities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1905/attractions-seaworld-abu-dhabi.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424180000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            SeaWorld Abu Dhabi
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                SeaWorld Abu Dhabi
                                            </h2>
                                        <p>
                                            SeaWorld Abu Dhabi is a destination that looks to educate and inspire our visitors by bringing them up close to marine life on two dimensions, through an immersive marine life themed park and a dedicated marine research center – the first of its kind in the UAE focusing on the local marine life and habitats.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1902/attractions-yas-beach.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424170000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Beach
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://www.yasbeach.ae" target="_blank">
                                                    Yas Beach
                                                </a>
                                            </h2>
                                        <p>
                                            Yas Beach is a beautiful serene antidote to the hustle and bustle of the island’s other attractions. With its white sands, crystal clear waters and natural mangrove surrounds, it’s an idyllically tranquil getaway. From adventures through the mangroves to adrenaline rushing sports, there’s no end to the fun at Yas Beach.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1901/attractions-yas-link-golf-course.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424170000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            Yas Links Golf Course
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                <!-- if not clickable, just remove the <a> tag -->
                                                <a href="https://troonabudhabi.com/yas-links" target="_blank">
                                                    Yas Links Golf Course
                                                </a>
                                            </h2>
                                        <p>
                                            Set among rolling hills and delicate mangrove plantations, Yas Links Abu Dhabi – the world-renowned course architect – is the Middle East’s only true links course. Nestled on the western shores of Yas Island, Abu Dhabi’s landmark entertainment destination, every daunting, dynamic Yas Links hole has sparkling coastline views of the Arabian Gulf – indeed eight run right up along the coastline.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="attraction-item">
                                <div class="image">
                                    <img src="/media/1900/attractions-w-hotel.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=360&amp;rnd=132555424160000000" alt="" class="img-fluid">
                                    <div class="title">
                                        <h2>
                                            W Hotel
                                        </h2>
                                    </div>
                                </div>
                                <div class="over">
                                    <div>
                                            <h2>
                                                W Hotel
                                            </h2>
                                        <p>
                                            This 5-star venue is strategically located in Yas Island district, directly opposite Yas Marina Circuit. Ferrari World Abu Dhabi stands about 1.8 km from the rooms. Enclosed by a mosque and a tower, the hotel offers a superb view over the sea.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>



        <section class="attractions-map">
            <div id="destination-detail-map" data-markers='[{ "lat" : 24.4884556, "lng" : 54.6065275, "title" : "Yas Mall", "address" : "Yas Mall" },{ "lat" : 24.4835431, "lng" : 54.6050911, "title" : "Ferrari World Abu Dhabi", "address" : "Ferrari World" },{ "lat" : 24.4699413, "lng" : 54.603318, "title" : "Yas Marina Circuit", "address" : "Yas Marina Circuit" },{ "lat" : 24.487617, "lng" : 54.5974583, "title" : "Yas Waterworld", "address" : "Yas Waterworld" },{ "lat" : 24.4909273, "lng" : 54.5970472, "title" : "Warner Bros. World", "address" : "Warner Bros. World Abu Dhabi" },{ "lat" : 24.466494, "lng" : 54.6071633, "title" : "Yas Marina", "address" : "Yas Marina" },{ "lat" : 24.4909354, "lng" : 54.6130713, "title" : "SeaWorld Abu Dhabi", "address" : "SeaWorld Abu Dhabi" },{ "lat" : 24.4624218, "lng" : 54.5899662, "title" : "Yas Beach", "address" : "Yas Beach" },{ "lat" : 24.478296, "lng" : 54.5994238, "title" : "Yas Links Golf Course", "address" : "Yas Links Golf Course" },{ "lat" : 24.467233, "lng" : 54.605415, "title" : "W Hotel", "address" : "W Hotel" }]'>
            </div>
        </section>


        <section class="communities">
            <div class="container">
                <h2 class="section-title">
                    Communities
                </h2>
                    <div class="row">
                            <div class="col-md-4 community-wrapper">
                                <a href="/en/destinations/yas-island/communities/ansam" class="community-item">
                                    <div class="image">

                                        <img style="height:120px;" src="/media/1671/ansam.png" alt="">
                                    </div>
                                    <div class="title">
                                        Ansam
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 community-wrapper">
                                <a href="/en/destinations/yas-island/communities/west-yas" class="community-item">
                                    <div class="image">

                                        <img style="height:120px;" src="/media/1672/west-yas.png" alt="">
                                    </div>
                                    <div class="title">
                                        West Yas
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 community-wrapper">
                                <a href="/en/destinations/yas-island/communities/the-cedars-at-yas-acres" class="community-item">
                                    <div class="image">

                                        <img style="height:120px;" src="/media/1673/yas-acres.png" alt="">
                                    </div>
                                    <div class="title">
                                        The Cedars at Yas Acres
                                    </div>
                                </a>
                            </div>
                    </div>
            </div>
        </section>




<section class="property-search-banner">
    <div class="container">
        <div class="banner">
            <div class="image">
                <!-- desktop image -->
                <img src="/media/1899/yas-island-cta-banner.jpg?anchor=center&amp;mode=crop&amp;width=1080&amp;height=200&amp;rnd=132555424160000000" alt="" class="d-none d-md-block">
                <!-- mobile image -->
                <img src="/media/1904/yas-island-cta-banner-mobile.jpg?anchor=center&amp;mode=crop&amp;width=365&amp;height=241&amp;rnd=132555424180000000" alt="" class="d-block d-md-none">
            </div>
            <div class="text">
                <div>
                    <div class="top-label">
                        Register your interest
                    </div>
                    <div class="title">
                        Fallen in love with Yas Island?
                    </div>


                    <a href="/en/property-search?p=Rent&amp;c=&amp;a=Yas%20Island&amp;t=&amp;b=-1&amp;f=&amp;af=-1&amp;at=-1&amp;pf=-1&amp;pt=-1" class="link">
                        <i class="zmdi zmdi-long-arrow-right"></i>
                        View our complete list of properties on the Island
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


        <section class="most-recent-properties">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="section-title">
                            Properties in Yas Island
                        </h2>
                    </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="row featured-properties-box">
                    <div class="col-12 col-sm-12 featured-properties-image">
                            <div style="background-image: url('https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631373404&amp;aid=1481278&amp;id=1673266851106789&amp;wmt=1561980776&amp;image=09_01_2023-12_25_43-3213-c6456c0d0ab1bceb42d551838e236c70.jpeg');"></div>
                            <span class="photos">
                                <i class="zmdi zmdi-camera"></i> 12
                            </span>
                    </div>
                    <div class="col-12 col-sm-12 featured-properties-title">
                        <h4>Noya 2</h4>
                        <span class="price">AED: 2,120,000</span>
                        <ul>
                            <li>
                                <i class="zmdi zmdi-home"></i> PRO-S-3881
                            </li>
                            <li>
                                <i class="zmdi zmdi-hotel"></i> 3 bedrooms
                            </li>
                            <li>
                                <i class="zmdi zmdi-photo-size-select-small"></i> 1791.65 Sq.Ft.
                            </li>
                        </ul>
                        <p class="description" style="height:100px; overflow:hidden;">
                            Great Investment | Corner Single Row Very Nice Unit 
                        </p>
                        <a href="/en/property-search/property-details?i=PRO-S-3881&d=Great Investment | Corner Single Row Very Nice Unit ">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MORE DETAILS
                        </a>
                        <a href="/en/property-search/property-details?i=PRO-S-3881&d=Great Investment | Corner Single Row Very Nice Unit #make-an-enquiry-modal">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MAKE ENQUIRY
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="row featured-properties-box">
                    <div class="col-12 col-sm-12 featured-properties-image">
                            <div style="background-image: url('https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631373391&amp;aid=1481278&amp;id=16732662075084370&amp;wmt=1561980776&amp;image=09_01_2023-12_16_44-3213-57897beed885e82b4243fddb6082d704.jpeg');"></div>
                            <span class="photos">
                                <i class="zmdi zmdi-camera"></i> 11
                            </span>
                    </div>
                    <div class="col-12 col-sm-12 featured-properties-title">
                        <h4>Noya 1</h4>
                        <span class="price">AED: 2,300,000</span>
                        <ul>
                            <li>
                                <i class="zmdi zmdi-home"></i> PRO-S-3880
                            </li>
                            <li>
                                <i class="zmdi zmdi-hotel"></i> 3 bedrooms
                            </li>
                            <li>
                                <i class="zmdi zmdi-photo-size-select-small"></i> 2301.00 Sq.Ft.
                            </li>
                        </ul>
                        <p class="description" style="height:100px; overflow:hidden;">
                            Ready to Invest or Move In| Brand New &amp; Modern
                        </p>
                        <a href="/en/property-search/property-details?i=PRO-S-3880&d=Ready to Invest or Move In| Brand New &amp; Modern">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MORE DETAILS
                        </a>
                        <a href="/en/property-search/property-details?i=PRO-S-3880&d=Ready to Invest or Move In| Brand New &amp; Modern#make-an-enquiry-modal">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MAKE ENQUIRY
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="row featured-properties-box">
                    <div class="col-12 col-sm-12 featured-properties-image">
                            <div style="background-image: url('https://watermark.propspace.com/watermark?c_id=3213&amp;l_id=1576257631373379&amp;aid=1481278&amp;id=1673265718725514&amp;wmt=1561980776&amp;image=09_01_2023-12_08_15-3213-a6a9c903b2302012724f7612664a12c2.jpeg');"></div>
                            <span class="photos">
                                <i class="zmdi zmdi-camera"></i> 11
                            </span>
                    </div>
                    <div class="col-12 col-sm-12 featured-properties-title">
                        <h4>Noya 1</h4>
                        <span class="price">AED: 2,200,000</span>
                        <ul>
                            <li>
                                <i class="zmdi zmdi-home"></i> PRO-S-3879
                            </li>
                            <li>
                                <i class="zmdi zmdi-hotel"></i> 3 bedrooms
                            </li>
                            <li>
                                <i class="zmdi zmdi-photo-size-select-small"></i> 2301.00 Sq.Ft.
                            </li>
                        </ul>
                        <p class="description" style="height:100px; overflow:hidden;">
                            Brand New Project| Corner Single Row| Huge Garden
                        </p>
                        <a href="/en/property-search/property-details?i=PRO-S-3879&d=Brand New Project| Corner Single Row| Huge Garden">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MORE DETAILS
                        </a>
                        <a href="/en/property-search/property-details?i=PRO-S-3879&d=Brand New Project| Corner Single Row| Huge Garden#make-an-enquiry-modal">
                            <i class="zmdi zmdi-long-arrow-right arrow-property"></i> MAKE ENQUIRY
                        </a>
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
                    <input name="__RequestVerificationToken" type="hidden" value="GqXc7FYrQQ5MWe6buToR64iKluKAX0Ih9Z4ci7OAwRQFkehS0aNjlZKtgZr5gGNO7Cd1L86UZY3WCgCoNbVJRw0O7eRDnGJhpUXIWZFgWhw1" />
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
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfaBnvAhh8EPPFOrJ437LQCtrDDOQWE18&callback=renderDestinationDetailMap"></script>
    <script>
        var urlIcon = "https://www.provis.ae/images/pin.png";
    </script>




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