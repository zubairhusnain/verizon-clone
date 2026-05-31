$(function() {
	var type = getUrlParameter('type');
	var selectors = window.location.pathname.split('.');
    var isApp = selectors.includes('app');
	var simpleDesign = selectors.includes('simpledesign');
    if(type || isApp){
        addOnclickForAnchorTag();
    }
	// For #issue15 PRODDEF-39234
	if(simpleDesign){
		changeEFHeadingTag();
	}
});
function addOnclickForAnchorTag(){
    var links = document.querySelectorAll('a');
    if(links!=null){
        links.forEach(link => {
        if (link.getAttribute("target") === "_blank") {
                link.setAttribute("onclick", "javascript:handleXAppLinkClick(event); return false;"); //to add for correct function
                link.removeAttribute("target");
            }
          })
     }
}
// To change EF heading tag from h2 to h3
function changeEFHeadingTag(){
	$(".experiencefragment .accordion-step-container .faq-question h2").replaceWith(function() {
		let $newElement = $("<h3>").html($(this).html());
		$.each(this.attributes, function(){
			$newElement.attr(this.name, this.value);
		});
		return $newElement;
	});
}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),   //?type=app & sum2=abc
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');  //type = app
        if (sParameterName[0] === sParam) {
            //return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            return sParameterName[1] === 'app' ? true : false ;
        }
    }
    return false;
}

function postMessage(msg = {}) {
	try {
		const strMsg = JSON.stringify(msg);
		if (vzwDL.mvo.utils.isMVA()) {
			console.debug('postMessage sent: ', msg);
		}

		if (window.webkit && window.webkit.messageHandlers && window.webkit.messageHandlers.mfAppInterface &&
			window.webkit.messageHandlers.mfAppInterface.postMessage) {
			window.webkit.messageHandlers.mfAppInterface.postMessage(strMsg);
		}
		if (window.mfAppInterface && window.mfAppInterface.postMessage) {
			window.mfAppInterface.postMessage(strMsg);
		}
	} catch (err) {
		console.error('postMessage Error: ', err);
	}
}

function openBrowser(browserUrl = 'https://verizonwireless.com', openInWebview = true) {
	const msg = {
		actionType: 'openURL',
		pageType: 'openBrowser', // openBrowser is dummy value. It is just to pass null check in Bridge
		browserUrl,
		openInWebview,
	};
	postMessage(msg);
}


function handleXAppLinkClick(e) {
	e.preventDefault();
	const anchorLink = e.target.href;
	if (vzwDL.mvo.utils.isMVA()) {
		openBrowser(anchorLink, false);
	} else {
		window.open(anchorLink, '_blank');
	}
}