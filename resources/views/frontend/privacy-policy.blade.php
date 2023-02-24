

<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    
    <title>Provis Privacy Policy</title>
    <meta name="description" content="Provis values user rights and their right to keep personal information private. Learn the website privacy policy to know more.">
    <meta name="keywords">
    <meta property="og:title" content="Provis Privacy Policy">
    <meta property="og:description" content="Provis values user rights and their right to keep personal information private. Learn the website privacy policy to know more.">

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.provis.ae/images/og-image.jpg" />
    <meta property="og:url" content="https://www.provis.ae/en/privacy-policy" />
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

                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YQC88-CUP5U-JZ5CV-94EPH-VKYAL",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"YQC88-CUP5U-JZ5CV-94EPH-VKYAL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="nyt2jw24plqxcy7xnsqq-f-453420be5-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"34","ak.cp":"1065735","ak.ai":parseInt("631806",10),"ak.ol":"0","ak.cr":196,"ak.ipv":4,"ak.proto":"h2","ak.rid":"11b516d5","ak.r":32748,"ak.a2":e,"ak.m":"dscb","ak.n":"essl","ak.bpcip":"110.39.164.0","ak.cport":14723,"ak.gh":"92.122.225.109","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1677159585","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==WUjVOco6gU89yO1KKvt4JIAN4albAy7Kv2hMPmDtxP6EhoZrgINE6Db0uPZRDrkNFTcejbxDmORKSJo4Deh+lnX6dcF6whymm7f92Gukt98uqWA9R7y4yGGj9h9inNSZxYq+dFjvq2RNlLO9B23JYHliS0/7g0kqaPYRcfWn9v+Q4OdghGe+bqoS8wJrxxywjYtFf1A71Jkku27HEl3wwKoseRCGQRBtU021mTiNSQrWhau2Yo09BxM9tgKz8ayY1UhSBo1H5zaFRIBzgi10IvehJcVI+Efv8IztM9UNMXl8f6DY0eItyg4geNJNl1pGWob863hhW65st9c22UkozP6O/3NnzJoYezXLX8UUknhSnDqgSA3Hz7akQ7mZSUwHzhjx+2Snroyc9NbQg3RS+OB8pPQae73/5OWSURp/Rao=","ak.pv":"33","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
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
                        <a class="dropdown-item activated" href="/en/privacy-policy">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/privacy-policy">العربية </a>
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
                        <a class="dropdown-item activated" href="/en/privacy-policy">English <i class="zmdi zmdi-check"></i></a>
                        <a class="dropdown-item " href="/ar/privacy-policy">العربية </a>
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
                    <img src="/media/1078/background-policy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=450&amp;rnd=132075823840000000" alt="Privacy Policy" class="img-fluid d-flex justify-content-center img-desk" />
                    <img src="/media/1078/background-policy-en.jpg?anchor=center&amp;mode=crop&amp;width=1400&amp;height=750&amp;rnd=132075823840000000" alt="Privacy Policy" class="img-fluid d-flex justify-content-center img-mob" />

            <h1>Privacy Policy</h1>
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
            <p><strong>Privacy policy</strong></p>
<p>This privacy policy ("Policy") describes how PROVIS Sole Proprietorship LLC ("PROVIS Sole Proprietorship LLC", "we", "us" or "our") collects, protects and uses the personally identifiable information ("Personal Information") you ("User", "you" or "your") may provide on the <a href="https://www.provis.ae/">provis.ae</a> website and any of its products or services (collectively, "Website" or "Services"). It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.</p>
<p><strong>Collection of personal information</strong></p>
<p>We receive and store any information you knowingly provide to us when you create an account, make a purchase, fill any online forms on the Website. When required this information may include your email address, name, phone number, address, credit card information, bank information, or other Personal Information. You can choose not to provide us with certain information, but then you may not be able to take advantage of some of the Website's features. Users who are uncertain about what information is mandatory are welcome to contact us.</p>
<p><strong>Collection of non-personal information</strong></p>
<p>When you visit the Website our servers automatically record information that your browser sends. This data may include information such as your device's IP address, browser type and version, operating system type and version, language preferences or the webpage you were visiting before you came to our Website, pages of our Website that you visit, the time spent on those pages, information you search for on our Website, access times and dates, and other statistics.</p>
<p><strong>Managing personal information</strong></p>
<p>You are able to access, add to, update and delete certain Personal Information about you. The information you can view, update, and delete may change as the Website or Services change. When you update information, however, we may maintain a copy of the unrevised information in our records. Some information may remain in our private records after your deletion of such information from your account. We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you personally. Once the retention period expires, Personal Information shall be deleted. Therefore, the right to access, the right to erasure, the right to rectification and the right to data portability cannot be enforced after the expiration of the retention period.</p>
<p><strong>Use and processing of collected information</strong></p>
<p>Any of the information we collect from you may be used to personalize your experience; improve our Website; improve customer service and respond to queries and emails of our customers; process transactions; send notification emails such as password reminders, updates, etc; run and operate our Website and Services. Non-Personal Information collected is used only to identify potential cases of abuse and establish statistical information regarding Website usage. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.</p>
<p>We may process Personal Information related to you if one of the following applies: (i) You have given their consent for one or more specific purposes. Note that under some legislations we may be allowed to process information until you object to such processing (by opting out), without having to rely on consent or any other of the following legal bases below. This, however, does not apply, whenever the processing of Personal Information is subject to European data protection law; (ii) Provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereof; (ii) Processing is necessary for compliance with a legal obligation to which you are subject; (iv) Processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in us; (v) Processing is necessary for the purposes of the legitimate interests pursued by us or by a third party. In any case, we will be happy to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Data is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p>
<p><strong>Information transfer and storage</strong></p>
<p>Depending on your location, data transfers may involve transferring and storing your information in a country other than your own. You are entitled to learn about the legal basis of information transfers to a country outside the European Union or to any international organization governed by public international law or set up by two or more countries, such as the UN, and about the security measures taken by us to safeguard your information. If any such transfer takes place, you can find out more by checking the relevant sections of this document or inquire with us using the information provided in the contact section.</p>
<p><strong>The rights of users</strong></p>
<p>You may exercise certain rights regarding your information processed by us. In particular, you have the right to do the following: (i) you have the right to withdraw consent where you have previously given your consent to the processing of your information; (ii) you have the right to object to the processing of your information if the processing is carried out on a legal basis other than consent; (iii) you have the right to learn if information is being processed by us, obtain disclosure regarding certain aspects of the processing and obtain a copy of the information undergoing processing; (iv) you have the right to verify the accuracy of your information and ask for it to be updated or corrected; (v) you have the right, under certain circumstances, to restrict the processing of your information, in which case, we will not process your information for any purpose other than storing it; (vi) you have the right, under certain circumstances, to obtain the erasure of your Personal Information from us; (vii) you have the right to receive your information in a structured, commonly used and machine readable format and, if technically feasible, to have it transmitted to another controller without any hindrance. This provision is applicable provided that your information is processed by automated means and that the processing is based on your consent, on a contract which you are part of or on pre-contractual obligations thereof.</p>
<p><strong>The right to object to processing</strong></p>
<p>Where Personal Information is processed for the public interest, in the exercise of an official authority vested in us or for the purposes of the legitimate interests pursued by us, you may object to such processing by providing a ground related to your particular situation to justify the objection. You must know that, however, should your Personal Information be processed for direct marketing purposes, you can object to that processing at any time without providing any justification. To learn, whether we are processing Personal Information for direct marketing purposes, you may refer to the relevant sections of this document.</p>
<p><strong>How to exercise these rights</strong></p>
<p>Any requests to exercise User rights can be directed to the Owner through the contact details provided in this document. These requests can be exercised free of charge and will be addressed by the Owner as early as possible and always within one month.</p>
<p><strong>Billing and payments</strong></p>
<p>We use third-party payment processors to assist us in processing your payment information securely. Such third-party processors' use of your Personal Information is governed by their respective privacy policies which may or may not contain privacy protections as protective as this Privacy Policy. We suggest that you review their respective privacy policies.</p>
<p><strong>Product and service providers</strong></p>
<p>We may contract with other companies to provide certain products and services. These service providers are not authorized to use or disclose the information except as necessary to perform services on our behalf or comply with legal requirements. We may share Personal Information for these purposes only with third-parties whose privacy policies are consistent with ours or who agree to abide by our policies with respect to Personal Information Our service providers are given the information they need to perform their designated functions, and we do not authorize them to use or disclose Personal Information for their own marketing or other purposes.</p>
<p><strong>Privacy of children</strong></p>
<p>We do not knowingly collect any Personal Information from children under the age of 13. If you are under the age of 13, please do not submit any Personal Information through our Website or Service. We encourage parents and legal guardians to monitor their children's Internet usage and to help enforce this Policy by instructing their children never to provide Personal Information through our Website or Service without their permission. If you have reason to believe that a child under the age of 13 has provided Personal Information to us through our Website or Service, please contact us. You must also be at least 16 years of age to consent to the processing of your personal data in your country (in some countries we may allow your parent or guardian to do so on your behalf).</p>
<p><strong>Newsletters</strong></p>
<p>We offer electronic newsletters to which you may voluntarily subscribe at any time. You may choose to stop receiving our newsletter or marketing emails by following the unsubscribe instructions included in these emails or by contacting us. However, you will continue to receive essential transactional emails.</p>
<p><strong>Cookies</strong></p>
<p>The Website uses "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. We may use cookies to collect, store, and track information for statistical purposes to operate our Website and Services. You have the ability to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the Website and Services.</p>
<p>In addition to using cookies and related technologies as described above, we also may permit certain third-party companies to help us tailor advertising that we think may be of interest to users and to collect and use other data about user activities on the Website. These companies may deliver ads that might also place cookies and otherwise track user behavior.</p>
<p><strong>Do Not Track signals</strong></p>
<p>Some browsers incorporate a Do Not Track feature that signals to websites you visit that you do not want to have your online activity tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to collecting personally identifiable information from consumers who use or visit a website or online service as they move across different websites over time. Our Website does not track its visitors over time and across third party websites. However, some third party sites may keep track of your browsing activities when they serve you content, which enables them to tailor what they present to you.</p>
<p><strong>Links to other websites</strong></p>
<p>Our Website contains links to other websites that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other websites or third-parties. We encourage you to be aware when you leave our Website and to read the privacy statements of each and every website that may collect Personal Information.</p>
<p><strong>Information security</strong></p>
<p>We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative, technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of Personal Information in its control and custody. However, no data transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your Personal Information, you acknowledge that (i) there are security and privacy limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and our Website cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third-party, despite best efforts.</p>
<p><strong>Data breach</strong></p>
<p>In the event we become aware that the security of the Website has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do, we will send you an email.</p>
<p><strong>Legal disclosure</strong></p>
<p>We will disclose any information we collect, use or receive if required or permitted by law, such as to comply with a subpoena, or similar legal process, and when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request. In the event we go through a business transition, such as a merger or acquisition by another company, or sale of all or a portion of its assets, your user account, and personal data will likely be among the assets transferred.</p>
<p><strong>Changes and amendments</strong></p>
<p>We reserve the right to modify this Policy relating to the Website or Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>
<p><strong>Acceptance of this policy</strong></p>
<p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to use or access the Website and its Services.</p>
<p><strong>Contacting us</strong></p>
<p>If you have any questions about this Policy, please contact us.<br />This document was last updated on February 10, 2019</p>
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
                    <input name="__RequestVerificationToken" type="hidden" value="PgmyTxzOf6-Rnylr9bzcHyf2EfrR_npKlZz9bhIAp2TkTMv3Yan_6CAND9Z8mtp-bqoXi22qztFYl52uAvDVsma1Dm2JmS1M4Xk3_Rkx5Do1" />
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