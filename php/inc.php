<?php

	date_default_timezone_set('America/Toronto');

	$copy = '2009-' . date('Y');
	if ($copy == '2009-2009') { $copy = '2009'; }

	// from Adobe Flash Player Detection Kit (Revision 1.5):
	// Search through the HTTP_ACCEPT header for the Flash Player mime-type.
	$swfheader = strpos($_SERVER['HTTP_ACCEPT'],'application/x-shockwave-flash');
	if ($swfheader === false) {
		$hasFlash = true;
	} else {
		$hasFlash = false;
	}

	// isflashinstalled.com:
	$fpdksInstalled = "Unknown";
	if ($hasFlash === true) {
		$fpdkInstalled = "Yes";
	} elseif ($hasFlash === false) {
		$fpdkInstalled = "No";
	}

?>
