// isflashinstalled.com globals
var isFlashInstalled = "Maybe";
var message = "We're not 100% sure! See below for details.";

var iPhone = false;

var afpdkcType = -1;
var afpdkcVersion = -1;
var afpdksInstalled = "Unknown";





// isflashinstalled.com functions

// GetSwfType() -- modified from Adobe Flash Player Detection Kit (Revision 1.5) GetSwfVer()
function GetSwfType(){
	var flashType = -1;
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			flashType = "Plugin (Non-IE)";
		}
	}
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashType = "ActiveX (WebTV 2.6)";
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashType = "ActiveX (WebTV 2.5)";
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashType = "ActiveX (WebTV older than 2.5)";
	else if ( isIE && isWin && !isOpera ) {
		flashType = "ActiveX (IE)";
	}	
	return flashType;
}





// isflashinstalled.com tests/logic
$(document).ready( function() {
	// iPhone detection
	if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
		iPhone = true;
	} else {
	

		// JavaScript Flash Detection Library (Flash Detect) (Version 1.0.4):
		var jsfdlInstalled = $('#jsfdl-installed');
		if (FlashDetect && FlashDetect.installed) {
			jsfdlInstalled.html('Yes');
		} else {
			jsfdlInstalled.html('No');
		}

		var jsfdlRawEl = $('#jsfdl-raw');
		if (FlashDetect && FlashDetect.raw && FlashDetect.raw != '') {
			jsfdlRawEl.html(FlashDetect.raw);
		}

		var jsfdlMajorEl = $('#jsfdl-major');
		if (FlashDetect && FlashDetect.major != -1) {
			jsfdlMajorEl.html(FlashDetect.major);
		}

		var jsfdlMinorEl = $('#jsfdl-minor');
		if (FlashDetect && FlashDetect.minor != -1) {
			jsfdlMinorEl.html(FlashDetect.minor);
		}

		var jsfdlRevisionEl = $('#jsfdl-revision');
		if (FlashDetect && FlashDetect.revision != -1) {
			jsfdlRevisionEl.html(FlashDetect.revision);
		}

		var jsfdlRevisionStrEl = $('#jsfdl-revisionStr');
		if (FlashDetect && FlashDetect.revisionStr && FlashDetect.revisionStr != '') {
			jsfdlRevisionStrEl.html(FlashDetect.revisionStr);
		}

		
		// Adobe Flash Player Detection Kit (Revision 1.5) - client-side:
		afpdkcType = GetSwfType();
		afpdkcVersion = GetSwfVer();
		
		var afpdkcTypeEl = $('#afpdkc-type');
		if (afpdkcType && afpdkcType != -1) {
			afpdkcTypeEl.html(afpdkcType);
		}
		
		var afpdkcVersionEl = $('#afpdkc-version');
		if (afpdkcVersion && afpdkcVersion != -1) {
			afpdkcVersionEl.html(afpdkcVersion);
		}
		

		// Adobe Flash Player Detection Kit (Revision 1.5) - server-side:
		// only do this if JS is turned off, it's too unreliable
		// afpdksInstalled = $('#afpdks-installed').html();
	}

	var resultsEl = $('#results');
	var resultsDetails = $('#results div.bg');
	var answerEl = $('#results-answer');
	var messageEl = $('#results-message');
	var getFlashEl = $('#getFlash');


	// overall
	$('#afpdks-results').hide();
	
	if (!iPhone && FlashDetect && FlashDetect.installed && afpdkcType != -1 && afpdkcVersion != -1) {
		isFlashInstalled = "Yes!";
		message = '<span class="macromedia">Macromedia/</span>Adobe Flash ' + afpdkcVersion + ' is installed! See below for details.';
		getFlashEl.hide();
		resultsEl.attr('class','yes');
	} else if (iPhone) {
		isFlashInstalled = "No!";
		message = '<span class="macromedia">Macromedia/</span>Adobe Flash is not installed! It is not available for the iPhone or iPod Touch.';
		getFlashEl.hide();
		resultsDetails.hide();
		resultsEl.attr('class','no');
		$('footer').css('margin-top','100px');
	} else if (FlashDetect && (FlashDetect.installed || afpdkcType != -1 || afpdkcVersion != -1)) {
		isFlashInstalled = "Maybe";
		message = 'We\'re not 100% sure if <span class="macromedia">Macromedia/</span>Adobe Flash is installed! See below for details.';
		getFlashEl.show();
		resultsEl.attr('class','');
	} else if (!FlashDetect) {
		isFlashInstalled = "Maybe";
		message = 'We\'re not 100% sure if <span class="macromedia">Macromedia/</span>Adobe Flash is installed! See below for details.';
		getFlashEl.show();
		resultsEl.attr('class','');
	} else {
		isFlashInstalled = "No!";
		message = '<span class="macromedia">Macromedia/</span>Adobe Flash is not installed! See below for details.';
		getFlashEl.show();
		resultsEl.attr('class','no');
	}
	
	answerEl.html(isFlashInstalled);
	messageEl.html(message);
});

$(window).load( function() {
	setTimeout(adjustBoxHeights,1);
});

function adjustBoxHeights() {
	var results1box = $('#jsfdl-results');
	var r1bHeight = results1box.height();
	var results2box = $('#afpdkc-results');
	var r2bHeight = results2box.height();
	
	if (r1bHeight > r2bHeight) {
		results1box.height(r1bHeight + 'px');
		results2box.height(r1bHeight + 'px');
	} else {
		results1box.height(r2bHeight + 'px');
		results2box.height(r2bHeight + 'px');
	}
}