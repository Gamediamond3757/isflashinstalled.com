<?php require_once('php/inc.php'); ?>

<!DOCTYPE html>

<html lang="en-ca" class="no-js">
	<head>
		<meta charset="utf-8" />

		<title>Is Flash Installed?</title>

		<meta name="description" content="This site will tell you if Adobe Flash is installed on your computer and, if so, which version you have." />
		<meta name="keywords" content="Flash,Adobe,Macromedia,plugin,player,browser,installed,installation,install,upgrade,download,version,test" />

		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160" />
		<meta name="msapplication-TileColor" content="#bd1418" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

		<link rel="stylesheet" href="css/default.css" />

		<script src="js/modernizr.js"></script>
	</head>

	<body>

		<header id="header" role="banner">
			<h1>Is Flash installed on this computer? What version of Flash do you have?</h1>
			<p>IsFlashInstalled.com will tell you <em>if</em> <span class="macromedia">Macromedia/</span>Adobe Flash is installed and <em>what version</em> of Flash is installed on your computer.</p>
		</header>

		<main id="main" role="main">
			<section id="results">
				<h2>
					<span id="results-question">Is Flash Installed?</span>
					<span id="results-answer">Maybe</span>
				</h2>

				<p id="results-message">Unfortunately, I can’t tell for sure if <span class="macromedia">Macromedia/</span>Adobe Flash is installed.</p>

				<noscript>
					<p>You have JavaScript turned off, which makes it harder for me to be sure whether <span class="macromedia">Macromedia/</span>Adobe Flash is installed. To get a better idea, please <a rel="external" target="_blank" href="http://www.enable-javascript.com/">try turning JavaScript on</a>.</p>
				</noscript>

				<p id="getFlash"><a rel="external" target="_blank" href="http://www.adobe.com/go/getflash/">Get <span class="macromedia">Macromedia/</span>Adobe Flash for free!</a></p>
			</section>

			<aside id="googleAd">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7926086199679909" data-ad-slot="4430944674"></ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
			</aside>

			<section class="details js" id="jsfdl">
				<h2><a rel="external" target="_blank" href="http://www.featureblend.com/javascript-flash-detection-library.html">JavaScript Flash Detection Library (Flash Detect)</a> (Version 1.0.4)</h2>
				<dl>
					<dt class="jsfdl-installed">Installed</dt>
					<dd class="jsfdl-installed">Unknown</dd>

					<dt class="jsfdl-raw">Raw version</dt>
					<dd class="jsfdl-raw">Unknown</dd>

					<dt class="jsfdl-major">Major version</dt>
					<dd class="jsfdl-major">Unknown</dd>

					<dt class="jsfdl-minor">Minor version</dt>
					<dd class="jsfdl-minor">Unknown</dd>

					<dt class="jsfdl-revision">Revision</dt>
					<dd class="jsfdl-revision">Unknown</dd>

					<dt class="jsfdl-revisionSt">Revision string</dt>
					<dd class="jsfdl-revisionSt">Unknown</dd>
				</dl>
			</section>

			<section class="details js" id="afpdkc">
				<h2><a rel="external" target="_blank" href="http://solutionpartners.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Client-Side Detection</h2>
				<dl>
					<dt class="afpdkc-type">Type</dt>
					<dd class="afpdkc-type">Unknown</dd>

					<dt class="afpdkc-version">Version</dt>
					<dd class="afpdkc-version">Unknown</dd>
				</dl>
			</section>

			<section class="details php" id="afpdks">
				<h2><a rel="external" target="_blank" href="http://solutionpartners.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Server-Side Detection (PHP)</h2>
				<dl>
					<dt class="afpdks-installed">Installed</dt>
					<dd class="afpdks-installed"><?php print $fpdkInstalled; ?></dd>

					<dt class="afpdks-notes">Note</dt>
					<dd class="afpdks-notes">
						<blockquote>
							<p>The following issues with server side detection should be closely noted. Internet Explorer on Mac OS is hard-coded to accept '*/*' and cannot be modified dynamically. Secondly, users can manually uninstall Flash Player by deleting the executable itself. This casuses <i>(sic)</i> the custom accept header to be &quot;orphaned&quot; such that server detection logic thinks Flash has been installed, when in fact it is no longer available. It is also possible to disable ActiveX controls through the Windows XP Service Pack 2 security settings, which will similarly cause the custom accept header to be orphaned.</p>
							<cite>&mdash; Adobe Flash&reg; Player Detection Kit Revision 1.5 by Michael Williams (FlashPlayerDetectionKit_StartHere.pdf)</cite>
						</blockquote>
					</dd>
				</dl>
			</section>

			<footer>
				<p>&copy; 2009&ndash;<?php print date('Y'); ?></p>
				<p>This site is not affiliated with Adobe Systems, Inc. <i>Adobe</i>, <i>Macromedia</i>, <i>Shockwave</i> and <i>Flash</i> are trademarks or registered trademarks of Adobe Systems, <abbr title="Incorporated">Inc.</abbr> in the United States and other countries.</p>
				<p>Problems? Contact us at <a href="mailto:info@isflashinstalled.com">info@isflashinstalled.com</a>.</p>
			</footer>
		</main>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>

		<script src="js/flash_detect.js"></script>
		<script src="js/AC_OETags.js"></script>
		<script src="js/isflashinstalled.js"></script>

		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-11691016-1');ga('send','pageview');
		</script>
	</body>
</html>
