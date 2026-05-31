$ = jQuery;
var sessionAbtExpireTime = jQuery("#timeToShowAlert").val();
var sessionExpireTime = jQuery("#sessionTimeout").val();
var _sessionExpireFactor = 1;
var displaySessionExpireTimeoutId = null;
var displayExtendSessionExpireTimeoutId = null;
var lastScreenTouch = Date.now();
function redirectPage(a) {
    var b = a;
    //var c = $(location).attr("href");
    if (null == a || "undefined" == a) {
        checkAndExtendSession();
        jQuery(".sessionExpireOverlay").hide();
        jQuery(".sessionExpireAlert").hide();
        jQuery(".sessionExpire").hide();
        return
    }
    window.location.href = b
}
var latestSessionExpTriggerTime = 0;

function displayExtendSessionExpire(a) {
    if (_sessionExpireFactor > 1) return;
    if (a != latestSessionExpTriggerTime) return;
    if ("undefined" !== typeof window.isChatActive && window.isChatActive) {
        checkAndExtendSession(.5);
        return
    }
    jQuery(".sessionExpire").show();
    jQuery(".sessionExpireOverlay").show();
    var b = jQuery(".sessionExpireAlert").text();
    jQuery(".sessionExpireAlert").show()
}

function displaySessionExpire(a) {
    if (_sessionExpireFactor > 1) return;
    if (a != latestSessionExpTriggerTime) return;
    if ("undefined" !== typeof window.isChatActive && window.isChatActive) {
        checkAndExtendSession(.5);
        return
    }
    jQuery(".sessionExpire").show();
    jQuery(".sessionExpireOverlay").show();
    jQuery(".sessionExpireAlert").hide();
    jQuery(".sessionExpiredMsg").show();
    document.cookie = "loggedIn=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=.verizonwireless.com"
}

function sessionExpireFunction(a) {
    var b = new Date;
    var c = b.getTime();
    latestSessionExpTriggerTime = c;
    var d = sessionExpireTime;
    var e = sessionAbtExpireTime;
    if ("undefined" != typeof a) {
        d *= a;
        e *= a
    }
    clearTimeout(displaySessionExpireTimeoutId);
    clearTimeout(displayExtendSessionExpireTimeoutId);
    displaySessionExpireTimeoutId = setTimeout(function() {
        displaySessionExpire(c)
    }, 1e3 * d);
    displayExtendSessionExpireTimeoutId = setTimeout(function() {
        displayExtendSessionExpire(c)
    }, 1e3 * e)
}

function checkAndExtendSession(a) {
    checkAndExtendSessionByFactor(1, a)
}

function checkAndExtendSessionByFactor(a, b) {
    var c = (new Date).getTime();
    _sessionExpireFactor = a;
    var d ="/support/lb_kal.html?t=" + c;
    jQuery.ajax({
        type: "GET",
        cache: false,
        url: d,
        dataType: "json",
        complete: function(d, e, f) {
            if (200 === d.status) {
                if (a > 1) {
                    var g = (new Date).getTime() - c + 1e3 * sessionAbtExpireTime + 100;
                    setTimeout(function() {
                        checkAndExtendSessionByFactor(a - 1, b)
                    }, g)
                }
                sessionExpireFunction(b)
            } else redirectPage(logoutRedirectUrl)
        }
    })
}
//window.addEventListener("message", receiveCrossWindowMessage, false);

function screenTouchCheckAndExtendSession(){
    var currentTime = Date.now();
    //console.log("screenTouchCheckAndExtendSession currentTime:"+currentTime);
    if(currentTime-lastScreenTouch>60*1000){
        lastScreenTouch = currentTime;
        console.log("screenTouchCheckAndExtendSession refresh session");
        checkAndExtendSession();
    }
}
function receiveCrossWindowMessage(a) {
    if (null !== a.data && "askvz" === a.data.app) {
        window.isChatActive = a.data.chat;
        if (window.isChatActive) {
            checkAndExtendSession();
          }
            if(window.location.href.indexOf("-troubleshooting/")>0 || window.location.href.indexOf("-troubleshooting.html")>0){
                $(document).on("mouseup mousedown click mousemove", function(e) {
                    screenTouchCheckAndExtendSession();
                });
                $(document).on("keypress", function(e) {
                    screenTouchCheckAndExtendSession();
                });
            }
        }
         if(window.location.href.indexOf("-troubleshooting/")>0 || window.location.href.indexOf("-troubleshooting.html")>0){
                $(document).on("mouseup mousedown click mousemove", function(e) {
                    screenTouchCheckAndExtendSession();
                });
                $(document).on("keypress", function(e) {
                    screenTouchCheckAndExtendSession();
                });
            }
}