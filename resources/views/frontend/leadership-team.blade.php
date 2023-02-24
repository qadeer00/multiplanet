

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <title>Provis Leadership Team</title>
    <meta name="description">
    <meta name="keywords">
    <meta property="og:title" content="Provis Leadership Team">
    <meta property="og:description">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/who-we-are/leadership-team" />
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

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="nyt2jw3ilf2qoy7pvgrq-f-4a0e90aa1-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":164,"ak.ipv":4,"ak.proto":"h2","ak.rid":"fdfce5","ak.r":43431,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"110.39.164.0","ak.cport":38921,"ak.gh":"23.34.62.135","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1676650915","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==ol5AuX9XK8YAs9t6dPgDul20wVVNH3e3+OdwEk7tBuxqeFnzxmeq1AxM6Fvue72qpcpTETwCV0WOZZAcR/duIw6XnkZC3Z58OjqWFehyj4WFH9oMxxaOADRZHogVedM0WJQMAegEbiJpb2i1r717A/lNAnY+U4Ht0jmCiEZ9uMm8zJiYIpK3a9OIqYnhtkqdNsSGStdDZzg823AmqXZuTbr5R1SWOd2mh3AqDSaQvkhfYYtKkbmaLlAqXzCCpy3w56SKgZIcir2U9wQBPQ8ayQSNgfNNAvyU9UORx7xxr5e9nB1lkV7vCYtHeuh8gUGE0rVxerhvD6xf1M4Wx+2a4NegumrIvEbU1jc3ZnxqHhw2ExqK8WwTB54G4S8G2C/ykJlxRMs0tRYXZ7RKOGmSpd48bz5KP8nWff1IPuXia8g=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body class="board-of-directors page ">



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
                        <a class="dropdown-item activated" href="/en/who-we-are/leadership-team">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/who-we-are/leadership-team">العربية </a>
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
                        <a class="dropdown-item activated" href="/en/who-we-are/leadership-team">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/who-we-are/leadership-team">العربية </a>
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
                    <img src="/media/1416/leadership-team.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132402415440000000" alt="Leadership Team" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="/media/1416/leadership-team.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132402415440000000" alt="Leadership Team" class="img-fluid d-flex justify-content-center img-mob" />

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

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url('images/talal-bio.jpg')">
                                            <img src="images/talal-bio.jpg" alt="Talal Al Dhiyebi"/>
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

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url(/media/1332/jassem-busaibe.jpg?center=0.95121951219512191,0.445&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132376564840000000)">
                                            <img src="/media/1332/jassem-busaibe.jpg?center=0.95121951219512191,0.445&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132376564840000000" alt="Jassem Saleh Busaibe"/>
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

                                        <div class="col-2 col-sm-2 col-md-12 review-image" style="background-image: url(/media/1411/hp-aengaar-ceo-at-provis.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132402346900000000)">
                                            <img src="/media/1411/hp-aengaar-ceo-at-provis.jpg?anchor=center&amp;mode=crop&amp;width=340&amp;height=325&amp;rnd=132402346900000000" alt="Hemanth ‘HP’ Aengaar "/>
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