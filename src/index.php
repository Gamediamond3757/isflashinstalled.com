<?php require_once('php/inc.php'); ?>

<!DOCTYPE html>

<html lang="en-ca" class="no-js">
	<head>
		<meta charset="utf-8" />

		<title>Is Flash Installed?</title>

		<meta name="description" content="This site will tell you if Adobe Flash is installed on your computer and, if so, which version you have." />
		<meta name="keywords" content="Flash,Adobe,Macromedia,plugin,player,browser,installed,installation,install,upgrade,download,version,test" />
		<link rel="author" href="humans.txt" />

		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-precomposed.png" />

		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160" />

		<meta name="msapplication-TileColor" content="#bd1418" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


		<?php // PRODUCTION RESOURCES
			 if (strpos($_SERVER['PHP_SELF'], '/src/') === false) { ?>

		<link rel="stylesheet" href="css/style.css" />
		<script src="js/top.js"></script>


		<?php // DEV RESOURCES
			  } else { ?>

		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/h5bp.css" />
		<link rel="stylesheet" href="css/default.css" />
		<script src="js/html5shiv.js"></script>

		<?php } ?>
	</head>

	<body>
		<header id="results" role="banner">
			<h1 class="big col col-left">Is Flash<br />Installed?</h1>
			<div class="col col-right">
				<p class="big results-answer">
					<?php
						if ($fpdkInstalled == 'Yes') {
							print "Prob&shy;ab&shy;ly";
						} else {
							print "May&shy;be";
						}
					?>
				</p>
				<p class="results-message">Unfortunately, I can’t tell for sure if <span class="macromedia">Macromedia/</span>Adobe Flash is installed. <a href="#details">See details below</a>.</p>
			</div>
		</header>

		<main id="main" role="main">
			<div class="extra">
				<noscript>
					<p>You have JavaScript turned off, which makes it harder for me to be sure whether <span class="macromedia">Macromedia/</span>Adobe Flash is installed. To get a better idea, please <a rel="external" target="_blank" href="http://www.enable-javascript.com/">try turning JavaScript on</a>.</p>
				</noscript>

				<p id="getFlash"><a rel="external" target="_blank" href="http://www.adobe.com/go/getflash/">Get <span class="macromedia">Macromedia/</span>Adobe Flash for free!</a></p>
			</div>

			<aside id="googleAd" class="isflashinstalledcom-responsive">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle isflashinstalledcom-responsive" style="display:inline-block" data-ad-client="ca-pub-7926086199679909" data-ad-slot="9275916973"></ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
			</aside>

			<section class="col col-left" id="faq">
				<h2><abbr class="initialism" title="Frequently Asked Questions">FAQ</abbr></h2>

				<dl>
					<dt>What is this?</dt>
					<dd>IsFlashInstalled.com will tell you <em>if</em> <span class="macromedia">Macromedia/</span>Adobe Flash is installed and <em>what version</em> of Flash is installed on your computer.</dd>

					<dt>How does it work?</dt>
					<dd>This site uses three methods to detect the presence of <span class="macromedia">Macromedia/</span>Adobe Flash: <a rel="external" target="_blank" href="http://www.featureblend.com/javascript-flash-detection-library.html">JavaScript Flash Detection Library (Flash Detect)</a> (Version 1.0.4), <a rel="external" target="_blank" href="http://solutionpartners.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Client-Side Detection (with some customization), and <a rel="external" target="_blank" href="http://solutionpartners.adobe.com/products/flashplayer/download/detection_kit/">Adobe Flash Player Detection Kit</a> (Revision 1.5) Server-Side Detection (<abbr class="initialism" title="PHP: Hypertext Preprocessor">PHP</abbr>). The <abbr class="initialism" title="PHP: Hypertext Preprocessor">PHP</abbr> script is somewhat unreliable, so it is only used if JavaScript is unavailable.</dd>

					<dt>Who made this?</dt>
					<dd><a rel="external" href="http://davidnewton.ca">David Newton</a> made the site. The <a rel="external" target="_blank" href="http://www.featureblend.com/javascript-flash-detection-library.html">JavaScript Flash Detection Library (Flash Detect)</a> is part of the <a rel="external" href="http://www.featureblend.com/#javascript-flash-foundation-series">JavaScript Flash Foundation Series</a> by the <a rel="external" href="http://groups.yahoo.com/group/javascript-flash-foundation-series">JavaScript Flash Foundation Series Group</a>, copyright &copy; 2007 Carl <abbr>S.</abbr> Yestrau; the <a rel="external" target="_blank" href="http://solutionpartners.adobe.com/products/flashplayer/download/detection_kit/">Flash Player Detection Kit</a> is by <a rel="external" href="http://adobe.com">Adobe</a>.</dd>

					<dt>Is the code available?</dt>
					<dd>Yes. <a rel="external" href="http://github.com/nwtn/isflashinstalled.com/">The code for the site is available on GitHub</a>, under an <a rel="external" href="http://opensource.org/licenses/MIT"><abbr class="initialism" title="Massachusetts Institute of Technology">MIT</abbr> license</a>. Fork it, clone it, fix it, <abbr title="et cetera; and so forth">etc.</abbr></dd>
				</dl>
			</section>

			<section class="details col col-right" id="details">
				<h2>Detailed results</h2>

				<section class="details js" id="jsfdl">
					<h3>JavaScript Flash Detection Library</h3>
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
					<h3>Adobe Flash Player Detection Kit (Client)</h3>
					<dl>
						<dt class="afpdkc-type">Type</dt>
						<dd class="afpdkc-type">Unknown</dd>

						<dt class="afpdkc-version">Version</dt>
						<dd class="afpdkc-version">Unknown</dd>
					</dl>
				</section>

				<section class="details php" id="afpdks">
					<h3>Adobe Flash Player Detection Kit (Server)</h3>
					<dl>
						<dt class="afpdks-installed">Installed</dt>
						<dd class="afpdks-installed"><?php print $fpdkInstalled; ?></dd>

						<dt class="afpdks-notes">Note</dt>
						<dd class="afpdks-notes">
							<blockquote>
								<p>The following issues with server side detection should be closely noted. Internet Explorer on Mac <abbr class="initialism" title="operating system">OS</abbr> is hard-coded to accept '*/*' and cannot be modified dynamically. Secondly, users can manually uninstall Flash Player by deleting the executable itself. This casuses <i>(sic)</i> the custom accept header to be &quot;orphaned&quot; such that server detection logic thinks Flash has been installed, when in fact it is no longer available. It is also possible to disable ActiveX controls through the Windows <abbr class="initialism">XP</abbr> Service Pack 2 security settings, which will similarly cause the custom accept header to be orphaned.</p>
								<cite>Adobe Flash&reg; Player Detection Kit Revision 1.5 by Michael Williams (FlashPlayerDetectionKit_StartHere.pdf)</cite>
							</blockquote>
						</dd>
					</dl>
				</section>
			</section>
		</main>

		<footer>
			<p class="col col-left">Problems? <a rel="external" href="https://github.com/nwtn/isflashinstalled.com/issues">Create an issue on GitHub</a>, or <a href="mailto:david@davidnewton.ca">email me at david@davidnewton.ca</a>.</p>
			<div class="col col-right">
				<p>&copy; 2009&ndash;<?php print date('Y'); ?></p>
				<p>This site is not affiliated with Adobe Systems, Inc. <i>Adobe</i>, <i>Macromedia</i>, <i>Shockwave</i> and <i>Flash</i> are trademarks or registered trademarks of Adobe Systems, <abbr title="Incorporated">Inc.</abbr> in the United States and other countries.</p>
			</div>
		</footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>


		<?php // PRODUCTION RESOURCES
			 if (strpos($_SERVER['PHP_SELF'], '/src/') === false) { ?>

		<script src="js/bottom.js"></script>


		<?php // DEV RESOURCES
			  } else { ?>

		<script src="js/flash_detect.js"></script>
		<script src="js/AC_OETags.js"></script>
		<script src="js/isflashinstalled.js"></script>
		<script src="js/typekit.js"></script>

		<?php } ?>

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
