jQuery(document).ready(function() {
    if(document.location.href.indexOf('/smart-setup/')>=0){
    	$('.sessionExpire').hide()
    }

    if (($('#supportNetworkOutage').length > 0) && showNetworkOutage() == 'true'){
    	callSupportNetworkOutage();
    }

	function callSupportNetworkOutage () {

			var outage_url='';
			var currHostName = window.location.origin ? window.location.origin : window.location.protocol +"//"+window.location.hostname;
			currHostName = currHostName + "/support/1d/data/secure/getOutageInfo";
			if(validateURL(currHostName)){
				outage_url = currHostName;
			}
			return jQuery.ajax({
				type: 'GET',
				url: outage_url,
				dataType: 'json',
				success: function(rawData) {
            		$("#supportNetworkOutage").show();

					if (rawData.data && rawData.data.statusCode == 20) {
						//green success
						$("#supportNetworkOutage").show();
						$("#supportNotifImageAlert").hide();
						$("#supportNotifImageSuccess").show();
						var headingMessage1 = sanitizeHTML(rawData.data.statusMessage);

						var detailedMessage = sanitizeHTML(rawData.data.detailedMessage);
						var feedbackMessage = sanitizeHTML(rawData.data.feedBackMessage);

						if(rawData.data.lastUpdated){
                            var headingMessage2=sanitizeHTML(rawData.data.lastUpdated);

							Date.prototype.isValid = function () {
                                return !isNaN(this.getTime());
                            };

                           var date = new Date(rawData.data.lastUpdated);

						   if(date.isValid()){
							  var hours = date.getHours();
							  var minutes = date.getMinutes();
							  var ampm = hours >= 12 ? 'PM' : 'AM';
							  hours = hours % 12;
							  hours = hours ? hours : 12; // the hour '0' should be '12'
							  minutes = minutes < 10 ? '0'+minutes : minutes;
							 // var headingMessage2 = hours + ':' + minutes + ' ' + ampm;

						   }

						}
						//Replace the resolution time for Combined Reolution Outage Banner
						if(typeof detailedMessage!="undefined"){
							detailedMessage = detailedMessage.replace("LAST_UPDATED_TIME", headingMessage2);}

						$( "#supportNotifHeading" ).append( "<p class='supportNotifMessage'>"+headingMessage1+"</p>" );
						$( "#supportNotifHeading" ).append( "<p class='supportLp'>Restoral time "+headingMessage2+"</p>" );
					//	$( "#supportNotifContent" ).append( "<p class='supportNotifContent1'>You may need to restart your device to connect to the network. We apologize for the inconvenience, and thank you for your patience during the unexpected disruption.</p>" );
				    //  $( "#supportNotifContent" ).append( "<p class='supportNotifContent2'>Help improve our customer updates, by sharing your feedback with a 2-minute survey.</p>" );
					$( "#supportNotifContent").append("<p class= 'supportNotifContent1'>"+detailedMessage+"</p>");
					$( "#supportNotifContent").append("<p class='supportNotifContent2'>"+feedbackMessage+"</p>");
                    $("#supportNotifButton").append('<button type="button" onclick="takeSurveyClick()" class="btn darkButton supportNotifButton shiftButton">Take survey</button>');

                    $("#supportNotifButton").append('<button type="button" onclick="viewDetailsClick()" class="btn btn-pill supportNotifButton">View details</button>');

						$("#panel-heading").addClass('successNotif')
						$("#supportNotifHeading").css("color", "white")
						$('.accordion-toggle').contents().unwrap();
                        $('#resolved_outage_button').show();
                        //SC Tagging
                        if(typeof s!="undefined"){
							s.linkTrackVars = "prop23,prop30,prop11,prop13,events";
							s.linkTrackEvents="event80";
	                        s.prop23 = headingMessage1;
	                        s.prop30 = rawData.data.statusCode;
	                        s.events = "event80";
	                        s.prop11 = "network outages link click";
	                		s.prop13 = s.pageName + "|" + s.prop11;
	                		s.tl(true, 'o',s.prop11);

                        }
					}
					else if (rawData.data && rawData.data.statusCode == 10) {
						//gold error
						$("#supportNetworkOutage").show();
						$("#supportNotifImageAlert").show();
						$("#supportNotifImageSuccess").hide();
						$("#resolved_outage_button").hide()
						var headingMessage1 = sanitizeHTML(rawData.data.statusMessage);

						var detailedMessage = sanitizeHTML(rawData.data.detailedMessage);

						if(rawData.data.lastUpdated){
                            var headingMessage2=sanitizeHTML(rawData.data.lastUpdated);
							Date.prototype.isValid = function () {
                                return !isNaN(this.getTime());
                            };

                           var date = new Date(rawData.data.lastUpdated);

						   if(date.isValid()){
							  var hours = date.getHours();
							  var minutes = date.getMinutes();
							  var ampm = hours >= 12 ? 'PM' : 'AM';
							  hours = hours % 12;
							  hours = hours ? hours : 12; // the hour '0' should be '12'
							  minutes = minutes < 10 ? '0'+minutes : minutes;
							  //var headingMessage2 = hours + ':' + minutes + ' ' + ampm;

						   }

						}

						$( "#supportNotifHeading" ).append( "<p class='supportNotifMessage'>"+headingMessage1+"</p>" );
						$( "#supportNotifHeading" ).append( "<p class='supportLp'>Last updated "+headingMessage2+"</p>" );
						$( "#supportNotifContent").append("<p class= 'supportNotifContent1'>"+detailedMessage+"</p>");
						$("#supportNotifButton").append('<button type="button" onclick="viewDetailsClick()" class="btn btn-pill supportNotifButton">View details</button>');
						$("#panel-heading").addClass('alertNotif');
						//SC Tagging
						if(typeof s!="undefined"){
							s.linkTrackVars = "prop23,prop30,prop11,prop13,events";
							s.linkTrackEvents="event80";
	                        s.prop23 = headingMessage1;
	                        s.prop30 = rawData.data.statusCode;
	                        s.events = "event80";
	                        s.prop11 = "network outages link click";
	                		s.prop13 = s.pageName + "|" + s.prop11;
	                		s.tl(true, 'o',s.prop11);

                        }
					}
					else {
						$("#supportNetworkOutage").hide();
					}
				},
				error: function (jqXHR, textStatus, errorThrown) {
				  console.log ("Error in fetching outage response!!!")
				}
			});

	}

	function showNetworkOutage () {
			var showOutage = "false";

				if (getCookieValue ("amID") || getCookieValue ("dough"))  {
						showOutage = "true"
				}
			return showOutage;
		}

	function getCookieValue(name){
    var cookies = document.cookie.split(";");
    var value = "";
    for(var i=0; i<cookies.length;i++){
    var pair = cookies[i].split("=");
    if(pair.length == 2){
      if(pair[0].trim() == name){
      value = pair[1];
      break;
    }
        }
      }
      return value;
    }

});

function viewDetailsClick () {
	//SC Tagging
	if(typeof s!="undefined"){
		s.linkTrackVars = "prop11,prop13,events";
		s.prop11 = "view details";
		s.prop13 = s.pageName + "|" + s.prop11;
		s.events=null;
		s.tl(this, 'lnk_o',s.prop11);

	}

	var currHostName1 = window.location.origin ? window.location.origin : window.location.protocol +"//"+window.location.hostname;
	var details_url = currHostName1 + "/support/1d/secure/networkdisruption/";
	if(validateURL(details_url)){
		window.location.assign(details_url);
	}
}

function validateURL(surl) {
    var url = parseURL(surl);
    var urlHostname = url.hostname.trim();

    if (urlHostname == '' || urlHostname=='localhost') {
        return true;
    }
    else {
        if (urlHostname.toUpperCase() == location.hostname.trim().toUpperCase() && isAllowedUrlPattern(surl)) {
            return true;
        }
        else
            return false;
    }
}

function isAllowedUrlPattern(path){

	var regexp =  /^[ A-Za-z0-9+&@#\/%=~_|$?!:,.-]*$/;

if (regexp.test(path)){
          return true;}
      else{
          return false;
        }

}

function parseURL(url) {
	var a = document.createElement('a');
	$(a).attr('href',sanitizeData(url));
	return {
	source: sanitizeData(url),
	protocol: a.protocol.replace(':', ''),
	hostname: a.hostname,
	host: a.host,
	port: a.port,
	query: a.search,
	params: (function () {
		var ret = {},
			seg = a.search.replace(/^\?/, '').split('&'),
			len = seg.length, i = 0, s;
		for (; i < len; i++) {
			if (!seg[i]) { continue; }
			s = seg[i].split('=');
			ret[s[0]] = s[1];
		}
		return ret;
	})(),
	file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],
	hash: a.hash.replace('#', ''),
	path: a.pathname.replace(/^([^\/])/, '/$1'),
	relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],
	segments: a.pathname.replace(/^\//, '').split('/')
	};
}

function sanitizeData(inputValue){
	//alert('inputValue : '+inputValue);
	var res ='';
	if(inputValue !='' && inputValue != null && inputValue != 'null'){
		res = inputValue.replace("<", "");
		res = res.replace(">", "");
		res = res.replace("'", "");
		res = res.replace("\"", "");
		res = res.replace("%3C", "+");
	}
	return res;
 }
function takeSurveyClick () {
	//SC Tagging
	if(typeof s!="undefined"){
		s.linkTrackVars = "prop11,prop13,events";
		s.prop11 = "take survey";
		s.prop13 = s.pageName + "|" + s.prop11;
		s.events=null;
		s.tl(this, 'lnk_o',s.prop11);

	}
    if (typeof KAMPYLE_ONSITE_SDK != 'undefined') {
    	KAMPYLE_ONSITE_SDK.showForm(1366);
    }
}

$('#resolved_outage_button').click(function () {$("#supportNetworkOutage").hide();})

$('a.accordion-toggle').click(function(){

            if(document.getElementById("collapseOne").style.display !=="none")
            {
                document.getElementById("collapseOne").style.display="none";
                $('.collapse').addClass('in');

            }
            else
            {
                document.getElementById("collapseOne").style.display="block";
                $('.collapse').removeClass('in');
            }
        })