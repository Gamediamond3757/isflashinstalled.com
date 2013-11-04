<?php require_once('php/inc.php'); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8" />

		<title>Is Flash Installed?</title>
		<meta name="description" content="This site will tell you if Adobe Flash is installed on your computer and, if so, which version you have." />
		<meta name="keywords" content="Flash,Adobe,Macromedia,plugin,player,browser,installed,installation,install,upgrade,download,version,test" />

		<link rel="shortcut icon" sizes="16x16" href="favicon-16.png" />
		<link rel="shortcut icon" sizes="32x32" href="favicon-32.png" />
		<link rel="shortcut icon" sizes="57x57" href="favicon-57.png" />
		<link rel="shortcut icon" sizes="any" href="favicon.eps" />

		<link rel="stylesheet" href="default.css" />
		<!--[if lte IE 6]>
			<link rel="stylesheet" href="ie6.css" />
		<![endif]-->

		<script src="modernizr-1.0.min.js"></script>
		<script src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
			<!--
				if (google) {
					google.load("jquery", "1.3");
				} else {
				   var head= document.getElementsByTagName('head')[0];
				   var script= document.createElement('script');
				   script.type= 'text/javascript';
				   script.src= 'jquery-1.3.2.min.js';
				   head.appendChild(script);
				}
			// -->
		</script>
		<script src="isflashinstalled.js" language="javascript"></script>
		<script src="AC_OETags.js" language="javascript"></script>
		<script src="flash_detect_min.js" language="javascript"></script>
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>

		<div id="content">
			<header id="header">
				<hgroup>
					<h1>Is flash installed on this computer? What version of flash do you have?</h1>
					<h2>IsFlashInstalled.com will tell you <em>if</em> <span class="macromedia">Macromedia/</span>Adobe Flash is installed and <em>what version</em> of flash is installed on your computer.</h2>
					<h3>This is a BETA version!</h3>
				</hgroup>
			</header>

			<section id="results">
				<header>
					<hgroup>
						<h1 id="results-question">Is Flash Installed?</h1>
						<h1 id="results-answer">Maybe?</h1>
					</hgroup>
					<p id="results-message">We're not 100% sure if <span class="macromedia">Macromedia/</span>Adobe Flash is installed! See below for details.</p>
					<noscript>
						<p>You have JavaScript turned off, which makes it harder for us to be sure whether <span class="macromedia">Macromedia/</span>Adobe Flash is installed. To get a clearer idea, please turn JavaScript on.</p>
					</noscript>
					<p id="getFlash"><a onclick="javascript:window.open(this.href);return false;" href="http://www.adobe.com/go/getflash/">Get <span class="macromedia">Macromedia/</span>Adobe Flash for Free!</a></p>
					<div class="clear"></div>
				</header>

				<div id="googleAd">
					<script type="text/javascript"><!--
					google_ad_client = "pub-7926086199679909";
					/* is flash installed? -- banner */
					google_ad_slot = "4430944674";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>

				<div class="bg">
					<section id="jsfdl-results">
						<h1><a onclick="javascript:window.open(this.href);return false;" href="http://www.featureblend.com/javascript-flash-detection-library.html">JavaScript Flash Detection Library (Flash Detect)</a> (Version 1.0.4)</h1>
						<dl>
							<dt>Installed:</dt>
							<dd id="jsfdl-installed">Unknown</dd>

							<dt>Raw Version:</dt>
							<dd id="jsfdl-raw">Unknown</dd>

							<dt>Major Version:</dt>
							<dd id="jsfdl-major">Unknown</dd>

							<dt>Minor Version:</dt>
							<dd id="jsfdl-minor">Unknown</dd>

							<dt>Revision:</dt>
							<dd id="jsfdl-revision">Unknown</dd>

							<dt>Revision String:</dt>
							<dd id="jsfdl-revisionStr">Unknown</dd>
						</dl>
						<div class="clear"></div>
					</section>

					<section id="afpdkc-results">
						<h1><a onclick="javascript:window.open(this.href);return false;" href="http://www.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Client-Side Detection</h1>
						<dl>
							<dt>Type:</dt>
							<dd id="afpdkc-type">Unknown</dd>

							<dt>Version:</dt>
							<dd id="afpdkc-version">Unknown</dd>

							<dt>&nbsp;</dt>
							<dd>&nbsp;</dd>

							<dt>&nbsp;</dt>
							<dd>&nbsp;</dd>

							<dt>&nbsp;</dt>
							<dd>&nbsp;</dd>
						</dl>
						<div class="clear"></div>
					</section>

					<section id="afpdks-results">
						<h1><a onclick="javascript:window.open(this.href);return false;" href="http://www.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Server-Side Detection (PHP)</h1>
						<dl>
							<dt>Installed:</dt>
							<dd id="afpdks-installed"><?php print $fpdkInstalled; ?></dd>

							<dt>Note:</dt>
							<dd id="afpdks-notes">
								<blockquote>
									<p>The following issues with server side detection should be closely noted. Internet Explorer on Mac OS is hard- coded to accept '*/*' and cannot be modified dynamically. Secondly, users can manually uninstall Flash Player by deleting the executable itself. This casuses (sic) the custom accept header to be &quot;orphaned&quot; such that server detection logic thinks Flash has been installed, when in fact it is no longer available. It is also possible to disable ActiveX controls through the Windows XP Service Pack 2 security settings, which will similarly cause the custom accept header to be orphaned.</p>
									<p>&mdash; Adobe Flash&reg; Player Detection Kit Revision 1.5 by Michael Williams (FlashPlayerDetectionKit_StartHere.pdf)</p>
								</blockquote>
							</dd>
						</dl>
						<div class="clear"></div>
					</section>
					<div class="clear"></div>
				</div>
			</section>

			<footer>
				<p>&copy; <?php print $copy; ?></p>
				<p>This site is not affiliated with Adobe Systems, Inc. <em>Adobe</em>, <em>Macromedia</em>, <em>Shockwave</em> and <em>Flash</em> are trademarks or registered trademarks of Adobe Systems, Inc. in the United States and other countries.</p>
				<p>Wallpaper pattern incorporates a design by <a onclick="javascript:window.open(this.href);return false;" href="http://sofi01.deviantart.com/art/French-Wallpaper-Patterns-1-121377422">~sofi01</a>.</p>
				<p>Problems? Contact us at <a href="mailto:info@isflashinstalled.com">info@isflashinstalled.com</a>.</p>
			</footer>
		</div>

		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>

		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-11691016-1");
				pageTracker._trackPageview();
			} catch(err) {}
		</script>
	</body>

</html>
