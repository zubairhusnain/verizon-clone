$(function () {
  
  if(window.location.pathname.includes("/support//troubleshooting/")){
    deviceReroute("/support/devices");
  }
  
  function makeAjaxCall(URL) {
    $.ajax({
      type: "GET",
      url: URL,
      cache: false,
      contentType: "application/json",
      dataType: "json",
      success: function (data, text, ajaxResponse) {
        setProductCookie(data);
      },
      error: function (ajaxResponse, responseStatus, responseMessage) {

      },
      complete: function (ajaxResponse) {

      }
    });
  }
  function accessCookie(cookieName) {
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for (var i = 0; i < allCookieArray.length; i++) {
      var temp = allCookieArray[i].trim();
      if (temp.indexOf(name) == 0)
        return temp.substring(name.length, temp.length);
    }
    return "";
  }
  function setProductCookie(data) {
    if (data != null) {
      setCookie("rp2devicename", sanitizeHTML(data[0].product_display_name_clean));
      setCookie("rp2", sanitizeHTML(data[0].product_id));
      setCookie("rp2url", sanitizeHTML(data[0].seoUrl));
      if (window.location.pathname === "/support/phones-and-devices/" || window.location.pathname === "/content/support/devices.html") {
        deviceReroute('/support/' + data[0].seoUrl);
      } else if (window.location.pathname === "/support/software-updates/") {
        deviceReroute('/support/' + data[0].seoUrl + '-update');
      } else if (window.location.pathname.includes("/support/troubleshooting/") || window.location.pathname === "/support/troubleshooter/") {
        deviceReroute("/digital/nsa/secure/ui/troubleshooting/" + data[0].seoUrl + "#");
      }
    }

  }

  function setCookie(cookieName, cookieValue) {
    var currentDomain = cleanXSS(window.location.host);
    cookieName = cleanXSS(cookieName);
    cookieValue = cleanXSS(cookieValue);
    currentDomain = currentDomain.substring(currentDomain.indexOf('.'));
    if (isAllowedCookiePattern(cookieName) && isAllowedCookiePattern(cookieValue))
      document.cookie = cookieName + '=' + cookieValue + '; path=/';
  }

  function deviceReroute(url) {
    if('edit'!=accessCookie('wcmmode')){
      var redirectUrl = url + '/';
      console.log("----redirect to url:----" + redirectUrl);
      $('<div class="spinner"></div>').appendTo('body');
      window.location.replace(sanitizeHTML(redirectUrl));
    }
  }

  function cleanXSS(inputValue) {
    var res = '';
    if (inputValue != '' && inputValue != null && inputValue != 'null') {
      res = inputValue.replace("<", "");
      res = res.replace(">", "");
      res = res.replace("'", "");
      res = res.replace("\"", "");
      res = res.replace("%3C", "+");
    }
    return res;
  }

  function isAllowedCookiePattern(input) {

    var regexp = /^[ A-Za-z0-9_/=#:.%&-;|$!]*$/;

    if (regexp.test(input)) {
      return true;
    }
    else {
      return false;
    }
  }
  function isTroubleshootingTopicUrls(pathname){
   return pathname=="/support/troubleshooting/smartphones/" || pathname=="/support/troubleshooting/basic-phones/"
   ||pathname=="/support/troubleshooting/other-devices/"||pathname=="/support/troubleshooting/5g-home/"
   ||pathname=="/support/troubleshooting/tablets/";
  }

  if (document.getElementById('checkdevicerepair') != null && document.getElementById('checkdevicerepair') != undefined && $("#checkdevicerepair")[0].value == "yes") {
    if (vzwDL.mvo.utils.isLoggedIn() && accessCookie("manufsku") != "" && accessCookie("manufsku") != undefined) {
      $.ajax({
        type: "POST",
        url: '/support/1d/data/secure/checkdevicerepaireligibility',
        cache: false,
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
          "pageContext": "MVO_Support_Device_Landing",
          "pageType": "Support",
          "count": "3",
          "source": "Pega"
        }),
        success: function (data, text, ajaxResponse) {
          var canRepair = false;
          var pegaValue = "";
          console.log('checkdevicerepaireligibility', data);
          var liveTiles = data.liveTiles;
          liveTiles.forEach(function (data) {
            canRepair = data.tileKey.startsWith('MVO_LT_Support_Warranty_iOSx');
            if (canRepair) {
              if (data.pegaCards != undefined && data.pegaCards != "") {
                pegaValue = data.pegaCards;
              }
              return false;
            }
          });
          if (canRepair) {
            $('#deviceRepairLink').show();
            $('#deviceCheckLink').hide();
            addSCData(true);
            if (pegaValue != "" && pegaValue != undefined) {
              document.getElementById('deviceRepairLink').onclick = function () {

                let responseBody = [pegaValue];
                let ApiRequest = {
                  pegaTiles: responseBody
                }

                fetch("/support/1d/data/secure/nbx-feedback", {
                  method: 'POST',
                  headers: new Headers({
                    'content-type': 'application/json'
                  }),
                  body: JSON.stringify(ApiRequest)
                });
              }
            }
          } else {
            $('#deviceRepairLink').hide();
            $('#deviceCheckLink').show();
            addSCData(false);
          }
        },
        error: function (ajaxResponse, responseStatus, responseMessage) {

        },
        complete: function (ajaxResponse) {

        }
      });

      function addSCData(repairData) {
        if (repairData) {
          var vzdlthrottle = window.vzdl ? window.vzdl.page.throttle : "";
          window.vzdl.page.throttle = vzdlthrottle != undefined && vzdlthrottle != "" ? vzdlthrottle + "| verify eligibility" : "verify eligibility";

          var vzwDLtestVersion = window.vzwDL ? window.vzwDL.page.testVersion : "";
          window.vzwDL.page.testVersion = vzwDLtestVersion != undefined && vzwDLtestVersion != "" ? vzwDLtestVersion + ", verify eligibility" : "verify eligibility";

        }
        else {
          var vzdlthrottle = window.vzdl ? window.vzdl.page.throttle : "";
          window.vzdl.page.throttle = vzdlthrottle != undefined && vzdlthrottle != "" ? vzdlthrottle + "| check eligibility" : "check eligibility";

          var vzwDLtestVersion = window.vzwDL ? window.vzwDL.page.testVersion : "";
          window.vzwDL.page.testVersion = vzwDLtestVersion != undefined && vzwDLtestVersion != "" ? vzwDLtestVersion + ", check eligibility" : "check eligibility";
        }
      }

    } else {
      var vzdlthrottle = window.vzdl ? window.vzdl.page.throttle : "";
      window.vzdl.page.throttle = vzdlthrottle != undefined && vzdlthrottle != "" ? vzdlthrottle + "| check eligibility" : "check eligibility";

      var vzwDLtestVersion = window.vzwDL ? window.vzwDL.page.testVersion : "";
      window.vzwDL.page.testVersion = vzwDLtestVersion != undefined && vzwDLtestVersion != "" ? vzwDLtestVersion + ", check eligibility" : "check eligibility";
    }
  }

  if (vzwDL.mvo.utils.isLoggedIn() && window.location.pathname.includes("/support/troubleshooting/") && !window.location.pathname.endsWith("/support/troubleshooting/") && !isTroubleshootingTopicUrls(window.location.pathname)) {
    let seoUrl = window.location.pathname.replace("/support/troubleshooting/","");
    if(seoUrl.indexOf("/")>0){
      seoUrl= seoUrl.substring(0, seoUrl.indexOf("/"));
    }
    deviceReroute("/digital/nsa/secure/ui/troubleshooting/" + seoUrl + "#");
  }else if (window.location.pathname === "/support/phones-and-devices/" || window.location.pathname === "/content/support/devices.html" || window.location.pathname === "/support/software-updates/" || window.location.pathname.includes("/support/troubleshooting/") || window.location.pathname.endsWith("/support/troubleshooter/")) {
    if (vzwDL.mvo.utils.isLoggedIn() && accessCookie("manufsku") != "" && accessCookie("manufsku") != undefined) {
      var str = accessCookie("manufsku");
      if (str.includes("/")) {
        var skuId = str.split("/")[0];
      } else {
        var skuId = str
      }
      makeAjaxCall("/content/support/servlets/DeviceSkuServlet." + skuId + ".json");
    }else if(window.location.pathname.includes("/support/troubleshooting/")){
      deviceReroute("/support/devices");
    }
  }
});