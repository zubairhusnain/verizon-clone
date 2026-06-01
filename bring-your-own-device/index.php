<?php
declare(strict_types=1);
require_once __DIR__ . '/../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en-US" style="--header-height: 166px;"><head>
<!-- offline: marketing stripped -->




<style id="offline-unified-chrome">
  html { scroll-padding-top: 180px; }
  body { margin: 0; overflow-x: auto; }
  .gnav20.gnav20-sticky > div.gnav20-sticky-content {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    width: 100% !important;
  }
  .gnav20-sticky-header {
    pointer-events: none !important;
    height: 0 !important;
    min-height: 0 !important;
    overflow: hidden !important;
  }
  .gnav20-sticky-content .gnav20-apicomponentnewdesign,
  .gnav20-apicomponentnewdesign {
    opacity: 1 !important;
    visibility: visible !important;
  }
  style#gnav20-preload,
  #gnav20-preload { display: none !important; }
  #vz-gh20, #vz-gf20, header#vz-gh20, footer#vz-gf20 {
    display: block !important;
    visibility: visible !important;
    position: relative;
    z-index: 10;
  }
  footer#vz-gf20 .gnav20,
  footer#vz-gf20 .gnav20 .gnav20-sticky-content,
  footer#vz-gf20 .xf-page-unified {
    max-height: none !important;
    height: auto !important;
    overflow: visible !important;
  }
  #offline-l2-links {
    display: flex !important;
    flex-wrap: wrap;
    gap: 8px 20px;
    justify-content: center;
    max-width: 1272px;
    margin: 0 auto;
    padding: 10px 20px 14px;
    background: #f6f6f6;
    border-bottom: 1px solid #d8dada;
    font-size: 14px;
    position: relative;
    z-index: 11;
  }
  #offline-l2-links a {
    color: #000;
    text-decoration: none;
    font-weight: 500;
    white-space: nowrap;
  }
  #offline-l2-links a:hover { color: #cd040b; text-decoration: underline; }
  @media (max-width: 1020px) {
    #offline-l2-links { justify-content: flex-start; overflow-x: auto; flex-wrap: nowrap; }
  }
</style><style id="offline-hide-lang">
.gnav20-localization { display: none !important; }
</style>
<style id="offline-footer-social">
footer#vz-gf20 .gnav20-border-content.gnav20-social-icon {
  display: flex !important;
  align-items: flex-start !important;
}
footer#vz-gf20 .gnav20-social-icon ul {
  display: flex !important;
  flex-wrap: wrap !important;
  align-items: center !important;
  gap: 0 6px !important;
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
}
footer#vz-gf20 .gnav20-social-icon li {
  display: inline-block !important;
  margin: 0 !important;
  padding: 0 !important;
  vertical-align: top !important;
}
footer#vz-gf20 .gnav20-social-media {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  position: relative !important;
  width: 24px !important;
  height: 24px !important;
  margin: 12px 18px 0 0 !important;
  padding: 0 !important;
  overflow: hidden !important;
  color: #000 !important;
  text-decoration: none !important;
  vertical-align: top !important;
}
footer#vz-gf20 .gnav20-social-media > span {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
footer#vz-gf20 .gnav20-social-media svg {
  display: block !important;
  width: 20px !important;
  height: 20px !important;
  max-width: 20px !important;
  max-height: 20px !important;
  flex-shrink: 0 !important;
}
footer#vz-gf20 .gnav20-social-media svg path {
  fill: #000 !important;
}
</style>
<style id="offline-layout-fixes">
  main[role="main"], [role="main"], #mainGWSection, #SupportContentWrapper, #page,
  #__next, main, [data-testid="Gridwall"], [data-testid="reviewWrapper"] {
    display: block !important;
    visibility: visible !important;
    position: relative;
    z-index: 1;
    clear: both;
    min-height: 40vh;
  }
  #mainGWSection, [data-testid="Gridwall"], [class*="GridWall__GWWrapper"],
  #productListContainer, #gridwall-filter-buttons {
    width: 100%;
  }
  #productListContainer, #gridwall-filter-buttons { visibility: visible !important; }
  .gnav20-click-div { display: none !important; }
  main > header#vz-gh20 {
    display: block !important;
    position: relative !important;
    height: auto !important;
    min-height: 0 !important;
  }
  header.cta > header#vz-gh20 { display: none !important; }
  .prescr + header.cta, header.cta { display: block !important; }
  div[role="main"].min-h-\[300px\] { min-height: 50vh !important; max-width: 100% !important; }
</style><style id="nav-simplify-offline">
.gnav20-sticky-content .gnav20-apicomponentnewdesign,
.gnav20-apicomponentnewdesign { opacity: 1 !important; }
.gnav20-sub-header-menu,
.gnav20-vzhmoverlay,
.gnav20-mega-drawer,
.gnav20-nav-mask { display: none !important; }
.gnav20-search-utility,
.gnav20-account-utility,
.gnav20-unifiedcart,
.gnav20-localization { display: none !important; }
.gnav20-primary-menu button.gnav20-menu-label-button { display: none !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation,
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility { opacity: 1 !important; }
.gnav20 .gnav20-desktop .gnav20-row-two { display: block !important; width: 100% !important; height: 88px !important; padding: 0 20px !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-grid1-wrapper { position: absolute !important; width: auto !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation { width: 100% !important; height: 88px !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation { padding: 34px 0 !important; margin: 0 !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-navigation-list {
  width: 80% !important;
  margin: 0 auto !important;
  display: flex !important;
  justify-content: center !important;
  flex-wrap: nowrap !important;
  gap: 0 !important;
}
.gnav20 .gnav20-new-search-style .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-navigation-list {
  margin: 0 auto 0 145px !important;
  justify-content: flex-start !important;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation-item .gnav20-primary-menu { margin: 0 8px !important; }
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation a.gnav20-menu-label-button {
  visibility: visible !important;
  color: #000 !important;
  display: inline !important;
  position: relative !important;
  opacity: 1 !important;
  pointer-events: auto !important;
  cursor: pointer !important;
  text-decoration: none !important;
  font-size: 16px !important;
  line-height: 20px !important;
  padding: 0 0 2px !important;
  height: auto !important;
  width: auto !important;
  margin: 0 !important;
  border: 0 !important;
  background: none !important;
  font-weight: bold !important;
  z-index: 4502 !important;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility { display: none !important; }
.gnav20 .gnav20-mobile .gnav20-menu-label-link { display: none !important; }
.gnav20 .gnav20-mobile a.gnav20-menu-label-button,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item a.gnav20-menu-label-button {
  display: block !important;
  visibility: visible !important;
  color: #000 !important;
  width: 100% !important;
  text-align: left !important;
  font-size: 16px !important;
  line-height: 20px !important;
  padding: 18px 16px !important;
  border-bottom: 1px solid #d8dada !important;
  text-decoration: none !important;
  position: relative !important;
  opacity: 1 !important;
}
</style><style id="offline-hide-eyebrow-lob">
.gnav20-eyebrow,
.gnav20-eyebrow-link-list,
.gnav20-mobile-menu .gnav20-eyebrow-link-list {
  display: none !important;
}
#gnav20-ulwrapper > a.gnav20-main-header {
  display: none !important;
}
</style><base href="/verizon-clone/verizon_offline/">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=2.0">
  <title>Bring Your Own Device (BYOD) | How To &amp; Deals | Verizon</title>
<meta name="keywords" content="homepage, verizon, mobile, verizon internet, fios internet, verizon wireless, verizon plans, verizon wireless plans, verizon phones, verizon residential, verizon fios internet">
<meta name="description" content="Verizon makes it easy to switch while keeping the phone and phone number you love, all while saving you money. Check your device and shop BYOD deals.">


<meta name="robots" content="index,follow">

<meta property="og:title" content="Bring Your Own Device (BYOD) | How To &amp; Deals | Verizon">
<meta property="og:site_name" content="Verizon">
<meta property="og:url" content="https://www.verizon.com/bring-your-own-device/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
<meta property="og:description" content="Verizon makes it easy to switch while keeping the phone and phone number you love, all while saving you money. Check your device and shop BYOD deals.">
<meta property="og:type" content="article">


  <meta http-equiv="x-dns-prefetch-control" content="on">









  


  <link rel="preload" href="/bring-your-own-device/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" as="style">
  <link rel="preload" href="/bring-your-own-device/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" as="style">
  <link rel="preload" href="/bring-your-own-device/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" as="style">
  <link rel="preload" href="/bring-your-own-device/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" as="style">
  <link rel="preload" href="/bring-your-own-device/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" as="style">




  





















  

  <script type="text/javascript">
  (function () {
    function getCookie(cookieName) {
      var name = cookieName + "=";
      var cookieArray = document.cookie.split(";");
      for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) == " ") cookie = cookie.substring(1);
        if (cookie.indexOf(name) == 0) return cookie.substring(name.length, cookie.length);
      }
      return "";
    }

    function getCondition() {
      if (location.pathname == "/") {
        return "postpaid_homepage";
      } else if (location.pathname == "/prepaid/") {
        return "prepaid_homepage";
      } else {
        return "landing page";
      }
    }

    function getURLClassification() {

      let classificationProp = "";
      if (classificationProp.length != 0) {
        return classificationProp;
      } else {


        const urlClassifications = [
          { url: 'home', classification: 'total_home' },
          { url: 'speedtest', classification: 'total_home' },
          { url: 'home/internet/5g', classification: '5g_home' },
          { url: 'home/internet/fios-', classification: 'fios' },
          { url: 'home/internet/lte', classification: 'lte' },
          { url: 'home/fios-', classification: 'fios' },
          { url: 'discounts', classification: 'mnh' },
          { url: 'featured', classification: 'mnh' },
          { url: 'home/internet/near-me', classification: 'near_me' }
        ]

        const currentUrl = window.location.href;
        const urlObject = new URL(currentUrl);
        const relativeUrl = urlObject.pathname.toLowerCase();
        let urlClassificationValue = ""

        const matchURL = urlClassifications.filter(({ url, classification }) => {
          if (relativeUrl.startsWith(url, 1)) {
            urlClassificationValue = classification;
            return true;
          }

        });

        if (matchURL.length == 0) {
          let intent = "learn";
          if (intent == "learn") {
            urlClassificationValue = "mobility";
          }
        }


        return urlClassificationValue;
      }
    }

    function getPlatform() {
      if (navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i)) {
        if (window.innerWidth < 768) {
          return "mobile";
        }
        return "tablet";
      }
      return "desktop";
    }

    var businessGroup = "wireless";
    var isWireless = businessGroup === "wireless" || !businessGroup;

    var pathName = "/content/wcms/bring-your-own-device",
      flowName,
      pageName;

    pathName = pathName.replace(/\/$/, "").split("/");
    pathName.splice(0, 3);

    if (pathName.length <= 1) {
      flowName = pathName[0];
      pageName = pathName[0];
    } else {
      flowName = pathName[0];
      pathName.splice(0, 1);
      pageName = pathName.join("_");
    }

    var dataLayer = {
      cmp: {
        all: "", // Marketing campaign Code
      },

      error: {
        code: "", // error code (ex:400,503)
      },

      page: {
        channel: "learn", // site section
        channelSession: "",
        detail: "",
        displayChannel: "vzw",
        flow: flowName,
        id: getCondition() + ",LP_AC",
        name: pageName,
        sourceChannel: "vzw",
        type: "landing page", // If error or applicable only on AEM Pages
        subFlow: "", // For Wireless
        throttleList: "",
        urlClassification: getURLClassification()
      },

      event: {
        value: "", // Eg: login,scAdd,scOpen,scRemove, purchase,
      },

      search: {
        term: "",
        type: "",
      },

      target: {
        assetsRequested: "", // Assets Requested (on-hold, don’t populate)
        assetAttributes: "", // Asset Attributes (on-hold, don’t populate)
        assetsLeveraged: "", // Assets Leveraged (on-hold, don’t populate)
        offer: "", // Offer ID
        abTest: "",
        audience: "",
        campaign: "",
        experience: "", // AB test experience
        message: "", // any message which is shown to customer on the page
        offer: "",
        cloud: "", // marketing cloud id
        sandbox: "", // AB Test Experience Name
        evolv: "",
        engagement: {
          intent: "learn", //  kind of flow(ordering, payment etc)
          id: "", //  the specific ID of the engagement within the SOI application
          offered: "", //  Response to engagement or what the customer is interacting with in an engagement
        },
      },

      txn: {
        agent: "", // Agent Enterprise ID (10 digit; captured on Nuance chat when customer talks with live agent)
        discount: "", // Order Discount in $
        productsQualified: "", // PRODUCTS QUALIFIED
        productSelected: "", // PRODUCTS SELECTED
        discountId: "", // Discount ID / Promo ID entered
        id: "", // order ID
        offer: "", // Offer ID at order level
        autoPay: "", // used to capture autopay enabled and disabled. capture during login along with customer info
        offerType: "", // What kind of offer. Eg: Bestmatch, Upsell etc
        orderType: "", // Eg: AAL, Upgrade etc
        paymentType: "", // Eg: Credit Card, Debit Card etc
        rewardOffer: "", // Verizon Up rewards Code
        outletId: "", // for POS
        cartId: "", // either the channel cart id or shared cart ID
        shippingZip: "",
        shippingTotal: "", // TotalShipping charge in dollars
        status: "", // Eg: order cancelled, pending order, order confirmed etc
        total: "", // $$transaction price

        product: {
          owns: {
            // Existing Products
            name: "", // Product ID
            sorId: "", // USOC / ISOC
            category: "",
            qty: "",
            offer: "", // offer ID
            discount: "", // Discount ID
            recurringPrice: "", // eVar32
            nonRecurringPrice: "",
            line: "",
            shared: "", // (Y/N),
          },

          current: {
            // Existing Products
            name: "",
            sorId: "",
            merchCat: "", // where did you see the product (eg: product grid wall pge/ hp /banner etc)
            category: "",
            offer: "",
            discount: "",
            qty: "",
            quoteid: "", // for POS
            recurringPrice: "", //
            nonRecurringPrice: "",
            line: "",
            sku: "",
            tradeInQty: "",
            tradeInAmt: "",
            contractType: "", // Contract Type
            rebate: "",
            shippingCharge: "", // Shipping charge in dollar
            shippingType: "", // Eg: Standard Shipping/pick up from store etc
            shared: "", // (Y/N)
          },
        },
      },

      user: {
        existingServices: "", // Existing Services
        account: "", // hashed account
        accountType: "", // Eg: Postpaid, Prepaid, Unlimited
        customerRole: getCookie("role"), // captures customer role like accountholder, manager etc
        customerType: "", // Wireless - PE,ME,BE
        authStatus: (getCookie("loggedIn") || getCookie("islogin")) ? "logged in" : "anonymous",
        id: "", // hashed MDN
        tenure: "", // from how long user/account tenure with Verizon
        prospect: "",
        session: getCookie("GLOBALID"), // Global Session ID (session ID carried over from GHP/Landing Page)
        chatId: "", // Nuance Chat ID
        zip: getCookie("ZIPCODE"),
        "emcAccountId ": "", // hashed (SHA256) customer identifiers and email addresses that CRM embeds into each email URL
        "emcEmailId ": "", // hashed (SHA256) customer identifiers and email addresses that CRM embeds into each email URL
        "emcMdn ": "", // hashed (SHA256) customer identifiers and email addresses that CRM embeds into each email URL
      },

      utils: {
        StrategyApiKey: "", // Strategy API Key (on-hold, don’t populate for now)
        appApiKey: "", // Application API Key (on-hold, don’t populate for now)
        pegaCaseId: "", // Pega Case ID/Pega Recommendation ID
        athenaSession: "", // For Pega NBA recommendation (If not available, please leave it blank)
        outcome: "", // Decision Outcome (‘Y’/’N (when pega offer is shown by default)’/blank)
        pegaOffer: "",
      },

      platform: {
        call: "", // Call ID
      },

      content: {
        mktgId: "", // Marketing Audience ID
      },

      env: {
        businessUnit: "wireless", // Business Unit (eg: Wireline, Wireless, Cloud)
        channel: getPlatform() + " store", // Site Section Level 1
      },
    };

    window.vzdl = window.vzdl || dataLayer;

    if (window.VZTAG_IS_READY) {
      window.vztag.api.dispatch("pageView");
    } else {
      // Otherwise, wait until we broadcast that we're ready:
      document.addEventListener("vztagReady", function () {
        window.vztag.api.dispatch("pageView");
      });
    }
  })();
</script>

  


  
  





  
  
  
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml">




  
  
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml">



  
  
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml">



  
  
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml">



  
  
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml">




  

  
    
    

    

    
    
    


  

   
   
   
   
   
   
 
   <link rel="stylesheet" href="assets/www.verizon.com/content/dam/vzwcom/bring-your-own-device/sticky-cta/components.css" type="text/css">


<!-- 
SCRIPT TO AVOID OVERLAPING ON STICKY BOTTOM COMPONENTS 
DOPMO-268648 
-->
<style>
  #chat_bot_start_container #chatbotStartBar {
    margin-bottom: 56px !important;
  }

  #av_bot_container,
  #miniBar {
    margin-bottom: 56px !important;
  }
</style>
<!-- 
END 
  SCRIPT TO AVOID OVERLAPING ON STICKY BOTTOM COMPONENTS 
  DOPMO-268648
END 
-->

  
  
  
    <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css" type="text/css">
  
  

<script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" type="text/javascript" defer=""></script>
</head>
    <body class="page basicpage js-focus-visible" id="page-c356826ef0">
        
        
        
            




            



            
<div class="root responsivegrid">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="header aem-GridColumn aem-GridColumn--default--12"><header id="vz-gh20"><div class="xf-page-unified xfpage page basicpage">
<div class="gnav20 gnav20-sticky" data-exp-name="Mobile">
     <input type="hidden" id="cradle-context">
    <div class="gnav20-sticky-content">    	
     	




    
    
    <div class="gnav20-apicomponentnewdesign">


<a class="gnav20-header-accessibility" tabindex="0" href="/accessibility/" data-track="global nav:accessibility resource center">
	<span>Accessibility Resource Center</span>
</a>
<a class="gnav20-header-accessibility" href="#gnav20-header-end" tabindex="0" id="gnav20-skip-to-main-content-id" data-track="global nav:skip to main content">
	<span>Skip to main content</span>
</a>

<div class="gnav20-width-wrapper gnav20-new-design gnav20-new-search-style gnav20-promo-bottom gnav20-featured" data-gnav20-container="header">
	
	
	<div class="gnav20-vzhmoverlay" style="height: 0px;"></div>
	<div class="gnav20-main">
		




    
    
    <div class="gnav20-gnav-new-design">

<div class="gnav20-desktop" item-title="all">
	<div class="gnav20-row-one opacityOne">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-eyebrow">

<div class="gnav20-eyebrow-link-list" item-title="eyebrow">
    <div class="gnav20-eyebrow-link-list-item gnav20-two">
        </div>
</div>



</div>



		</div>		
		<div class="gnav20-utility">		
			




    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="tollfree">
	<div>
				
		<a x-cq-linkchecker="skip" aria-label="Call Verizon 1-833-VERIZON for sales and support assistance." href="tel:+18338374966" data-label="1-833-VERIZON" data-track="global nav:1-833-verizon">
			
			1-833-VERIZON
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="contactus">
	<div>
				
		<a x-cq-linkchecker="skip" aria-label="Contact us" href="/support/contact-us/" data-label="Contact us" data-track="global nav:contact us">
			
			Contact us
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="support">
	<div>
				
		<a x-cq-linkchecker="skip" aria-label="Support" href="/support/" data-label="Support" data-track="global nav:support">
			
			Support
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="store">
	<div>
				
		<a x-cq-linkchecker="skip" aria-label="Stores" href="/stores/" data-label="Stores" data-track="global nav:stores">
			
			Stores
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="coveragemap">
	<div>
				
		<a x-cq-linkchecker="skip" aria-label="Coverage map" href="/coverage-map/" data-label="Coverage map" data-track="global nav:coverage map">
			
			Coverage map
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-localization">

    
		<div class="gnav20-utility-wrapper " item-title="localization">
			
				
				<a class="gnav20-lang-link" aria-label="Cámbiate al sitio web en español" data-href="/" href="/" data-lang="Español" mporgnav="" data-label="Español" lang="es" data-track="global nav:espanol">Español</a>
					
			
		</div>
    

</div>



        </div>
    </div>
	<div class="gnav20-row-two">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-logo">

    
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        <a class="gnav20-logoWhiteBg" title="Verizon Home Page" href="/" target="_self" data-track="global nav:verizon home page"></a>
        
        
    </div>
</div>



		</div>
		<div class="gnav20-navigation opacityOne">
			




    
    
    <div class="gnav20-navigation opacityOne">
<div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">

    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Mobile-L1" class="gnav20-menu-label gnav20-menu-label-button" href="/plans/unlimited/" aria-label="Mobile" data-track="global nav:mobile">Mobile</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Home-Internet-L1" class="gnav20-menu-label gnav20-menu-label-button" href="/home/internet/#checkavailability" aria-label="Home Internet" data-track="global nav:home internet">Home Internet</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Shop-L1" class="gnav20-menu-label gnav20-menu-label-button" href="/smartphones/" aria-label="Shop" data-track="global nav:shop">Shop</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Deals-L1" class="gnav20-menu-label gnav20-menu-label-button" href="/deals/" aria-label="Deals" data-track="global nav:deals">Deals</a>
	</div>
</div>

</div>
</div>
</div>



	</div>
    <div class="gnav20-utility opacityOne">
        




    
    
    <div class="gnav20-search-utility">

	<div class="gnav20-utility-wrapper" item-title="search">
		<div class="gnav20-search-wrapper">
			
				<input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context-mobile" name="isProd" value="true">
			
			<button class="gnav20-search-icon" id="gnav20-search-icon-mobile" aria-label="Search Verizon" data-placeholder-text="Search Verizon" data-track="global nav:search verizon"></button>
		</div>
	</div>
</div>


    
    
    <div class="gnav20-account-utility">

<div class="gnav20-utility-wrapper " item-title="signIn">
	<div class="gnav20-account-box" id="gnav20-account-menu-mobile">
		
		
		
			
				<button id="gnav20-sign-id-mobile" class="gnav20-sign-in gnav20-hasDropdown  " aria-expanded="false" aria-label="Sign in dropdown menu" data-track="global nav:sign in dropdown menu">
					<span>
						<span>
							Sign in
						</span>
					</span>
				</button>
			
		

		
		<div class="gnav20-dropdown-menu gnav20-hide " id="gnav20-sign-in-mobile"><button class="gnav20-close-account-utility" aria-label="close the Sign In Menu" tabindex="0" data-track="global nav:close the sign in menu">Close</button>
			<p class="gnav20-signin-content-title"></p>
			<ul class="gnav20-dropdown gnav20-fixed-top gnav20-navigation-item">
				
					<li class="gnav20-dropdown-list gnav20-hide-on-desktop gnav20-goback">
						<button class="gnav20-back-to-menu " aria-label="Back to Menu" tabindex="0" data-track="global nav:back to menu:go back">Back to Menu</button>
					</li>
				
				<li class="gnav20-dropdown-list">
					<a data-hide-for="appid:vpd" id="gnav20-sign-id-list-item-1-mobile" class="gnav20-dropdown-list-item" href="https://secure.verizon.com/signin" tabindex="0" data-track="global nav:sign in menu:account overview">Account overview</a>
				</li>
			
				
				<li class="gnav20-dropdown-list gnav20-hide">
					<a data-show-for="appid:vpd" id="gnav20-sign-id-list-item-2-mobile" class="gnav20-dropdown-list-item" href="/about/privacy/" tabindex="0" data-track="global nav:sign in menu:account overview">Account overview</a>
				</li>
			
				
				<li class="gnav20-dropdown-list ">
					<a id="gnav20-sign-id-list-item-3-mobile" class="gnav20-dropdown-list-item" href="https://secure.verizon.com/signin?goto=https%3A%2F%2Fwww.verizon.com%2Ffeatured%2Fintent%2F%3Fintent%3Dpaybill" tabindex="0" data-track="global nav:sign in menu:pay bill">Pay bill</a>
				</li>
			
				
				<li class="gnav20-dropdown-list ">
					<a id="gnav20-sign-id-list-item-4-mobile" class="gnav20-dropdown-list-item" href="https://secure.verizon.com/signin?action=otp" tabindex="0" data-track="global nav:sign in menu:make a one-time payment">Make a one-time payment</a>
				</li>
			
				
				<li class="gnav20-dropdown-list ">
					<a id="gnav20-sign-id-list-item-5-mobile" class="gnav20-dropdown-list-item" href="https://secure.verizon.com/account/register/start" tabindex="0" data-track="global nav:sign in menu:register">Register</a>
				</li>
			
				
				<li class="gnav20-dropdown-list ">
					<a id="gnav20-sign-id-list-item-6-mobile" class="gnav20-dropdown-list-item" href="https://mblogin.verizonwireless.com/account/business/signin" tabindex="0" data-track="global nav:sign in menu:business log in">Business Log in</a>
				</li>
			</ul>	
					
		</div>
		<div class="gnav20-vzmoverlay"></div>
	</div>
</div></div>


    
    
    <div class="gnav20-unifiedcart">

<div class="gnav20-utility-wrapper" item-title="unifiedCart">
	
		
	<div>
		<button id="gnav20-cart-icon-mobile" class="gnav20-cart" aria-label="Shopping Cart Menu 0 items in the cart" aria-expanded="false" data-track="global nav:cart menu:shopping cart menu 0 items in the cart">
			<span class="gnav20-unifiedcart-bubble" style="display: none;">0</span>
		</button>
		<div id="gnav20-my-side-nav-mobile" class="gnav20-unified-cart gnav20-hide gnav20-unified-cart-right gnav20-flyout-cart-enabled gnav20-auth-flyout-cart"><button id="gnav20-cclosex-mobile" class="gnav20-closex" tabindex="0" aria-label="Close Shopping Cart" data-track="global nav:close shopping cart"></button>
			<p class="gnav20-cart-content-title">Choose your cart:</p>
			<ul class="gnav20-content-lists">
				
					<li class="gnav20-content-list">
						
							<a id="gnav20-cart-list-item-1-mobile" class="gnav20-content-list-arrow gnav20-mobile-cart-count" href="#" data-track="global nav:cart menu:mobile solutions">Mobile solutions</a>
						
					</li>
				
					<li class="gnav20-content-list">
						
							<a id="gnav20-cart-list-item-2-mobile" class="gnav20-content-list-arrow gnav20-home-cart-count" href="/home/internet/" data-track="global nav:cart menu:home solutions">Home solutions</a>
						
					</li>
				
			</ul>
			
            
				<div class="cart-button-container">
					<a href="#" class="cart-button" data-track="global nav:cart menu:go to cart">Go To Cart</a>
				</div>
        	
		</div>
		<div class="gnav20-vzmoverlay"></div>
	</div>

	
	
</div></div>



        <button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0" aria-label="Menu for navigation opens a modal overlay" data-track="global nav:menu for navigation opens a modal overlay">
		</button>
    </div>
    <nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
        <button id="gnav20-closex" class="gnav20-closex" aria-label="close the Menu" tabindex="0" data-track="global nav:close the menu">Close</button>
        <div id="gnav20-ulwrapper"><div class="gnav20-navigation-placeholder">
			




    
    
    <div class="gnav20-navigation">
<div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">

    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Mobile-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="/plans/unlimited/" aria-label="Mobile" data-track="global nav:mobile">Mobile</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Home-Internet-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="/home/internet/#checkavailability" aria-label="Home Internet" data-track="global nav:home internet">Home Internet</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Shop-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="/smartphones/" aria-label="Shop" data-track="global nav:shop">Shop</a>
	</div>
</div>
    <div class="gnav20-navigation-item">
	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Deals-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="/deals/" aria-label="Deals" data-track="global nav:deals">Deals</a>
	</div>
</div>

</div>


            
			</div>
        </div>
        
		
    </nav>
</div></div>


		
	</div>
	<div>
		
		<div>




    
    
    <div class="subnavcontent">

<div class="gnav20-sub-nav" item-title="callsales">
    <div class="gnav20-sub-nav-content gnav20-hide-on-desktop" style="display: flex !important;">
        <a x-cq-linkchecker="skip" class="gnav20-sub-nav-call-link" href="tel:+18008374966" data-track="global nav:call us: 1-800-verizon">
            Call Us: 1-800-VERIZON
        </a>
        <a x-cq-linkchecker="skip" class="gnav20-sub-nav-button" href="tel:+18008374966" aria-label="Buy now" data-track="global nav:buy now">
            Buy now
        </a>
    </div>
</div>



</div>


</div>
		
	</div>
	
	
	
		<input type="hidden" id="gnav20-prod-context" name="isProd" value="true">
			
	<div id="gnav20-promo-placeholder" class="enableAuthPZN">
		<div>




    
    
    <div class="gnav20-ribbontext">
<div class="gnav20-promo-ribbon-wrapper gnav20-clearfix">
	<div class="gnav20-promo" aria-label="Verizon Promos with 2 promotions" role="group">
		
		<button class="gnav20-slide-arrow gnav20-slide-arrow-prev" aria-label="previous promo message 2 of 2" data-track="global nav:promo ribbon:promo message 2 of 2" style="display: block;"></button>
		<div class="gnav20-promotext opacityOne" item-title="promoRibbon"><div class="gnav20-promo-ribbon gnav20-active-promo" data-nosnippet=""><div class="gnav20-promo-text gnav20-white-focus"><span><a class="gnav20-promo-slide-link" href="/smartphones/" aria-label="Promo 1 of 2 Add a new smartphone line and we" data-track="global nav:promo ribbon:promo 1 of 2 add a new smartphone line and we">&nbsp;</a>Add a new smartphone line and we'll waive the activation fee. Online only. With myPlan.<span aria-hidden="true"> | </span><a class="gnav20-promo-link" href="/smartphones/" aria-label="Add a new smartphone line and we" data-track="global nav:promo ribbon:shop now"><u>Shop now</u></a><span aria-hidden="true"> | </span><span class="gnav20-promo-icon"><a role="button" href="#" data-track="global nav:promo ribbon:details">Details</a></span></span></div><div class="gnav20-modal-content-placeholder" style="display:none;"><div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading">$40.00 activation fee applied as one-time bill credit (w/in 1-2 bill cycles) when you add a new smartphone line or bring your own smartphone on Unlimited Welcome, postpaid Unlimited Plus or Unlimited Ultimate plan req'd.</div><div class="gnav20-modal-cta"></div></div></div><div class="gnav20-promo-ribbon" data-nosnippet=""><div class="gnav20-promo-text gnav20-white-focus"><span><a class="gnav20-promo-slide-link" href="/switch-to-verizon/" aria-label="Promo 2 of 2 AT&amp;T Customers: Bring in your bill and we’ll give you a better deal." data-track="global nav:promo ribbon:promo 2 of 2 at&amp;t customers: bring in your bill and we’ll give you a better deal.">&nbsp;</a>AT&amp;T Customers: Bring in your bill and we’ll give you a better deal.<span aria-hidden="true"> | </span><a class="gnav20-promo-link" href="/switch-to-verizon/" aria-label="AT&amp;T Customers: Bring in your bill and we’ll give you a better deal. link to Switch now" data-track="global nav:promo ribbon:at&amp;t customers: bring in your bill and we’ll give you a better deal. link to switch now"><u>Switch now</u></a><span aria-hidden="true"> | </span><span class="gnav20-promo-icon"><a role="button" href="#" aria-label="Offer details for bring your bill" data-track="global nav:promo ribbon:offer details for bring your bill">Details</a></span></span></div><div class="gnav20-modal-content-placeholder" style="display:none;"><div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading">To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See <a style="text-decoration: underline !important;" href="/switch-to-verizon/" aria-label="Switch now" data-track="global nav:promo ribbon:modal:www.verizon.com/switch-to-verizon">www.verizon.com/switch-to-verizon</a>.</div><div class="gnav20-modal-cta"></div></div></div></div>
		<button class="gnav20-slide-arrow gnav20-slide-arrow-next" aria-label="next promo message 2 of 2" data-track="global nav:promo ribbon:promo message 2 of 2" style="display: block;"></button>
	</div>
	<div class="gnav20-modal" id="gnav20-modal">
		<div class="gnav20-modal-overlay" tabindex="-1" data-modal-hide=""></div>
		<div class="gnav20-modal-content" aria-labelledby="gnav20-modal-heading" aria-describedby="gnav20-modal-sub-heading" role="dialog">
			<button id="gnav20-close-icon" class="gnav20-promo-close-icon" tabindex="0" aria-label="Click here or press escape key to Close Modal Dialog" data-modal-hide="" data-track="global nav:promo ribbon:modal:click here or press escape key to close modal dialog">
			</button>
			<div class="gnav20-modal-content-wrapper"></div>
		</div>
	</div>
</div></div>


</div>
	</div>
</div>
<div name="headerEnd" id="gnav20-header-end" role="none" aria-hidden="true" tabindex="-1" aria-label="end of navigation menu">
<nav id="offline-l2-links" aria-label="Quick shop links">
  <a href="/smartphones/">Phones</a>
  <a href="/tablets/">Tablets</a>
  <a href="/connected-smartwatches/">Watches</a>
  <a href="/plans/unlimited/">Plans</a>
  <a href="/home/internet/">Home Internet</a>
  <a href="/deals/">Deals</a>
  <a href="/shop/online/free-5g-phones/">Free 5G phones</a>
  <a href="/support/">Support</a>
  <a href="/support/contact-us/">Contact us</a>
  <a href="/stores/">Stores</a>
</nav>
end of navigation menu</div>
<style id="gnav20-preload">
     .gnav20{
     max-height: 165px;
     border-bottom: solid 1px #d8dada;
     }
     .gnav20 .gnav20-sticky-content{
     max-width: 1272px;
     margin: 0 auto;
     background-size: 124px 29px;
     background-position: 20px 59px;
     background-repeat: no-repeat;
     background-image: url(data:image/svg+xml;charset=utf-8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA2MDEuMDYgMTM0Ljc0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MDEuMDYgMTM0Ljc0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4uc3Qwe2ZpbGw6I0Y1MEEyMzt9LnN0MXtmaWxsOnVybCgjU1ZHSURfMV8pO308L3N0eWxlPjxzd2l0Y2g+PGc+PGcgaWQ9IkxheWVyXzEiPjxnPjxnPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik01MDguNDUsMTMxLjdoMjkuNlY3Ny42MmMwLTEyLjM0LDcuMjEtMjEuMDcsMTcuODQtMjEuMDdjMTAuMjUsMCwxNS41Niw3LjIxLDE1LjU2LDE3LjQ2djU3LjY5aDI5LjYgVjY4LjMyYzAtMjEuNDUtMTIuOS0zNi42My0zMy43OC0zNi42M2MtMTMuMjgsMC0yMi41OCw1LjY5LTI5LjYsMTYuMTNoLTAuNTdWMzQuNTRoLTI4LjY1VjEzMS43eiBNNDUwLjM4LDMxLjg4IGMtMzAuOTMsMC01MS42MiwyMi4yLTUxLjYyLDUxLjQzYzAsMjkuMDQsMjAuNjgsNTEuNDMsNTEuNjIsNTEuNDNTNTAyLDExMi4zNSw1MDIsODMuMzFDNTAyLDU0LjA5LDQ4MS4zMiwzMS44OCw0NTAuMzgsMzEuODh6IE00NTAuMTksMTEyLjkxYy0xNC4wNCwwLTIxLjQ0LTExLjc2LTIxLjQ0LTI5LjZjMC0xOC4wMyw3LjQtMjkuNiwyMS40NC0yOS42YzE0LjA0LDAsMjEuODIsMTEuNTgsMjEuODIsMjkuNiBDNDcyLjAyLDEwMS4xNSw0NjQuMjQsMTEyLjkxLDQ1MC4xOSwxMTIuOTF6IE0zMTQuNTEsMTMxLjdoODMuMTJ2LTIzLjM0aC00Ny4wNnYtMC41N2w0NC45Ny01MC40OFYzNC41NGgtODEuMDN2MjMuMzRoNDUuNTQgdjAuNTdsLTQ1LjU0LDUwLjg2VjEzMS43eiBNMjc2LjU1LDEzMS43aDI5Ljc5VjM0LjU0aC0yOS43OVYxMzEuN3ogTTIwNy40OCwxMzEuN2gyOS42Vjg3LjExYzAtMjAuMzEsMTIuMTUtMjkuMjMsMzAuNzQtMjYuNzYgaDAuNTdWMzQuNzNjLTEuNTItMC41Ny0zLjIzLTAuNzYtNi4wNy0wLjc2Yy0xMS41OCwwLTE5LjM2LDUuMzEtMjYsMTYuN2gtMC41N1YzNC41NGgtMjguMjdWMTMxLjd6IE0xNTMuMDEsMTEzLjExIGMtMTMuMDksMC0yMS4wNi04LjU0LTIyLjU4LTIxLjYzaDcwLjAyYzAuMTktMjAuODgtNS4zMS0zNy41OC0xNi44OS00OC4wMWMtOC4xNi03LjU5LTE4Ljk4LTExLjc3LTMyLjY0LTExLjc3IGMtMjkuMjIsMC00OS41MywyMi4yLTQ5LjUzLDUxLjI0YzAsMjkuMjIsMTkuMzYsNTEuNjIsNTEuNDMsNTEuNjJjMTIuMTUsMCwyMS44Mi0zLjIzLDI5Ljc5LTguNzMgYzguNTQtNS44OCwxNC42MS0xNC40MiwxNi4zMi0yMi45NmgtMjguNDZDMTY3LjYzLDEwOS4zMSwxNjEuNzQsMTEzLjExLDE1My4wMSwxMTMuMTF6IE0xNTEuNSw1Mi45NSBjMTAuNDQsMCwxNy42NSw3Ljc4LDE4Ljc5LDE5LjE3aC0zOS42NkMxMzIuOSw2MC41NCwxMzkuMTYsNTIuOTUsMTUxLjUsNTIuOTV6IE0yNzYuNTUsMGgyOS43OXYyNi4zOGgtMjkuNzlWMHoiLz48L2c+PC9nPjxnPjxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGN4PSI3MC4wMTE0IiBjeT0iMTA1LjY2NiIgcj0iNTMuODc5NyIgZng9IjM3LjMwNzQiIGZ5PSIxMDUuMzE2NSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjM1ODQgLTAuOTMzNiAxLjEwMjMgMC40MjMyIC03MS41NTkgMTI2LjMxNDYpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3AgIG9mZnNldD0iMC4wNTczIiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIi8+PHN0b3AgIG9mZnNldD0iMC4yOTM5IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIi8+PHN0b3AgIG9mZnNldD0iMC4zMDM4IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGQTFFIi8+PHN0b3AgIG9mZnNldD0iMC40ODY1IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVBNjIwIi8+PHN0b3AgIG9mZnNldD0iMC42NDgiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTYzMjEiLz48c3RvcCAgb2Zmc2V0PSIwLjc4MjMiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTMzMjIiLz48c3RvcCAgb2Zmc2V0PSIwLjg4NDMiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTE1MjMiLz48c3RvcCAgb2Zmc2V0PSIwLjk0MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTBBMjMiLz48L3JhZGlhbEdyYWRpZW50PjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0wLDM0LjU0bDM2Ljg0LDk1Ljk2YzAuMjgsMC43MywwLjk4LDEuMjEsMS43NiwxLjIxaDI5Ljg5Yy0wLjc4LDAtMS40OC0wLjQ4LTEuNzYtMS4yMUwyOS44OSwzNC41NEgweiIvPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xMDcuMDksMzQuNTRMNzAuMjUsMTMwLjVjLTAuMjgsMC43My0wLjk4LDEuMjEtMS43NiwxLjIxSDM4LjZjMC43OCwwLDEuNDgtMC40OCwxLjc2LTEuMjFMNzcuMiwzNC41NCBIMTA3LjA5eiIvPjwvZz48L2c+PC9nPjwvc3dpdGNoPjwvc3ZnPg==)}
     .gnav20-sticky-content .gnav20-apicomponentnewdesign { opacity: 0;}
     @media (max-width: 1020.5px), (pointer: coarse) {
          .gnav20{
               max-height: 132px;
          }
          .gnav20 .gnav20-sticky-content{
               background-size: 94px 21px;
               background-position: 16px 26px;
          }
     }
</style>
</div>



     </div>
</header>
</header>
<div class="gnav20-sticky-header gnav20-with-promo gnav20-new-design" style="height: 166px;"></div>
</div>



</div>
</div>
<main class="main responsivegrid aem-GridColumn aem-GridColumn--default--12">




<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
  
  <div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--lg20">
</div></div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style> @media screen and (max-width: 767px) {
                .customer-ctas-wrapper {
                  display: flex;
                }
              }

              @media screen and (min-width: 1024px) {
                #hero .Grid {
                  border-radius: 24px;
                }

                #hero .vzrf-modal button.Icon,
                .vzrf-tooltip button.Icon {
                  font-size: 12px;
                }
              }</style>
  <section id="hero" class="extended-bg">
  <div class="Container   ">
    <div class="grid">
      <a aria-label="Get started" id="prospect_getstarted" class="u-textDecorationNone" data-campaign-id="2026_APR_PR_1_BYOD_BYOD360" data-impression-category="Mobile Plan BYOD" href="#" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p1|Mobile Plan BYOD|||||2026_APR_PR_1_BYOD_BYOD360|Get started&quot;}">
        </a><div data-height-css="" style="--height--xs: 560px; --height--md: 240px; --height--lg: 278px; background-image: url(&quot;https://ss7.vzw.com/is/image/VerizonWireless/0226_BYOD_lp_feature_banner_d?fmt=webp-alpha&amp;scl=2&quot;);" class="Grid lozad u-colorBackgroundRed background-image background-cover--xs background-cover--md background-cover--lg background-positionX--xs50 background-positionX--md50 background-positionX--lg50 u-paddingTop--xs32 u-paddingRight--xs0 u-paddingBottom--xs16 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md0 u-paddingBottom--md u-paddingLeft--md0 u-paddingTop--lg32 u-paddingRight--lg0 u-paddingBottom--lg u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg " data-mobile-image="https://ss7.vzw.com/is/image/VerizonWireless/0226_BYOD_lp_feature_banner_m?fmt=webp-alpha&amp;scl=1" data-tablet-image="https://ss7.vzw.com/is/image/VerizonWireless/0226_BYOD_lp_feature_banner_t?fmt=webp-alpha&amp;scl=1" data-desktop-image="https://ss7.vzw.com/is/image/VerizonWireless/0226_BYOD_lp_feature_banner_d?fmt=webp-alpha&amp;scl=1" data-background-image="https://ss7.vzw.com/is/image/VerizonWireless/0226_BYOD_lp_feature_banner_d?fmt=webp-alpha&amp;scl=2" data-loaded="true"><a aria-label="Get started" id="prospect_getstarted" class="u-textDecorationNone" data-campaign-id="2026_APR_PR_1_BYOD_BYOD360" data-impression-category="Mobile Plan BYOD" href="#" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p2|Mobile Plan BYOD|||||2026_APR_PR_1_BYOD_BYOD360|Get started&quot;}">
          </a><div class="Col Col--xs12 Col--md6 Col--lg6  u-positionRelative--xs u-positionRelative--md "><a aria-label="Get started" id="prospect_getstarted" class="u-textDecorationNone" data-campaign-id="2026_APR_PR_1_BYOD_BYOD360" data-impression-category="Mobile Plan BYOD" href="#" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p3|Mobile Plan BYOD|||||2026_APR_PR_1_BYOD_BYOD360|Get started&quot;}">
            <div class="u-textLeft u-textxsLeft u-colorYellow u-marginBottom--xs16 u-marginBottom--lg20">
              <!-- <p
                class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md u-text--lg24 u-textBold u-marginBottom--xs0 u-marginBottom--lg0">
                Limited time only</p> -->
            </div>
            <div class="u-textLeft u-textxsLeft u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg20">
              <h2 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs40 u-text--md32 u-text--lg40 u-textBold u-marginBottom--xs0 u-marginBottom--lg0">
                Bring your phone and get up to
<br class="u-showForLargeUp" aria-hidden="true">$400, when you switch
              </h2>
            </div>
            <div class="u-textLeft u-textxsLeft u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg32">
              <p class="u-fontDisplay u-textLineHeightLoose  u-text--xs11 u-text--md u-text--lg11 u-textRegular u-marginBottom--xs0 u-marginBottom--lg0">With new line on myPlan.<span class="tooltip">​
                  <span class="vzrf-tooltip" data-tooltip-content="$400 via promo credit for new customers activating a new smartphone line with your own smartphone on Unlimited Ultimate, $360 promo credit on Unlimited Plus, or $180 promo credit on Unlimited Welcome plan req'd. Promo credits applied over 36 months; promo credits end if eligibility requirements are no longer met. Offer may not stack with other offers. Limit 1 offer per Verizon account." data-tooltip-type="icon" data-aria-label="Lower your monthly bill" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on Lower your monthly bill tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">$400 via promo credit for new customers activating a new smartphone line with your own smartphone on Unlimited Ultimate, $360 promo credit on Unlimited Plus, or $180 promo credit on Unlimited Welcome plan req'd. Promo credits applied over 36 months; promo credits end if eligibility requirements are no longer met. Offer may not stack with other offers. Limit 1 offer per Verizon account.</span>
  </span>
                </span>
              </p>
            </div>
            </a><div class="customer-ctas-wrapper"><a aria-label="Get started" id="prospect_getstarted" class="u-textDecorationNone" data-campaign-id="2026_APR_PR_1_BYOD_BYOD360" data-impression-category="Mobile Plan BYOD" href="#" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p4|Mobile Plan BYOD|||||2026_APR_PR_1_BYOD_BYOD360|Get started&quot;}">
              </a><a class="u-fontDisplay build-ctas Button Button--inverse u-textBreakNoWrap modal-CTA u-marginAll--xs0 customer-contents" href="/bring-your-own-device/sales/digital/byod.html/" style="display: none; opacity: 0; z-index: -1;">Get started</a>
              <span class="u-fontDisplay build-ctas Button Button--inverse u-textBreakNoWrap modal-CTA u-marginBottom--xs0 prospect-contents" data-modal="customer-modal" id="customer_getstarted">Get started</span>
            </div>
            <div class="ghost">
            </div>
          </div>
        </div>
      
    </div>
  </div>
</section>
  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>/* 1. FORCE VIEWPORT CONSTRAINTS
   Resets the body and html to the actual screen width, 
   ignoring the 1536px inline style injected by the script.
*/
html, 
body#page-c356826ef0 {
    overflow-x: hidden !important; /* Prevents horizontal scrolling */
    width: 100vw !important;        /* Forces width to match the device screen */
    position: relative !important;
    margin: 0 !important;
}

/* 2. MODAL CONTAINER FIX 
   Ensures the modal itself never exceeds the viewport width.
*/
.Modal.cust-modal {
    max-width: 100vw !important;
    box-sizing: border-box !important; /* Includes padding in width calculations */
}

/* 3. MOBILE ABSOLUTE POSITIONING FIX
   The 'plan-btn-container' is likely pushing the boundary. 
   We reset it to use the full width with internal padding.
*/
@media screen and (max-width: 768px) {
    .Modal.cust-modal .Modal-content .plan-btn-container {
        width: 100% !important; 
        left: 0 !important;
        right: 0 !important;
        padding: 0 5% !important; /* Provides visual breathing room safely */
        box-sizing: border-box !important;
        margin: 0 auto !important;
    }
}

/* 4. CLEANUP FOR HIDDEN ELEMENTS
   In case the modal leaves a 'ghost' width after closing, 
   this rule ensures all direct children of body stay within bounds.
*/
body > *:not(.Modal) {
    max-width: 100% !important;
}</style>
  
  
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs32">
</div></div>
<div class="experienceFragment experiencefragment aem-GridColumn aem-GridColumn--default--12">

    
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="started">

    
      
  
  

  <div class="Container   no-shadow">
    




    
    
    <div class="sectionHeader">







  
  

  
  



 
  
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     ">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs16 u-marginBottom--lg20  ">
      <h1 class=" u-fontDisplay u-textLineHeightTight u-text--xs40 u-text--md u-text--lg64 u-textBold u-displayInline">
        Let's get started.
<br aria-hidden="true"> Which device are you bringing?
      </h1>
      
    </div>
    

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      
      
      
    </div>
  </div>


            
          </div>
      </div>
    </div>
  
</div>


    
    
    <div class="html">
  
    

  


  <style>#get-started-cmp[data-cmp=vzrf-category-tilelets] .wrapper-category-tilelets[data-columns="4"] {
    --columns: 2;
}

@media screen and (width: 1024px){
#get-started-cmp[data-cmp=vzrf-category-tilelets] .wrapper-category-tilelets[data-columns="4"] {
    --columns: 4;
}
}</style>
  
  
</div>


    
    
    <div class="categoryTilelets">





  
  

  
  



<div id="get-started-cmp" data-cmp="vzrf-category-tilelets" data-cmp-variant="default" data-tilelet-bg-color="gray">
  <div class="cmp-wrapper">
    <div class="wrapper-category-tilelets tileCol-4 progress-bar-slider " data-columns="4">
      
        
  
  <a class="tilelet-wrapper modal-CTA" href="javascript:void(0)" data-modal="tile-1-customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p1||||||Phones|Get started&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1" data-loaded="true">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-1?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-1?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-1?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-1?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1" class="modal-CTA" data-modal="tile-1-customer-modal">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24 modal-CTA" data-modal="tile-1-customer-modal">
        <h2 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0 modal-CTA" data-modal="tile-1-customer-modal">
          Phones
        </h2>
      </div>
    </div>
  </a>

      
        
  
  <a class="tilelet-wrapper modal-CTA" href="javascript:void(0)" data-modal="tile-2-customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p2||||||Tablets|Get started&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1" data-loaded="true">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-3?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-3?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-3?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-3?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1" class="modal-CTA" data-modal="tile-2-customer-modal">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24 modal-CTA" data-modal="tile-2-customer-modal">
        <h2 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0 modal-CTA" data-modal="tile-2-customer-modal">
          Tablets
        </h2>
      </div>
    </div>
  </a>

      
        
  
  <a class="tilelet-wrapper modal-CTA" href="javascript:void(0)" data-modal="tile-3-customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p3||||||Smart watch|Get started&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1" data-loaded="true">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-2?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-2?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-2?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-2?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1" class="modal-CTA" data-modal="tile-3-customer-modal">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24 modal-CTA" data-modal="tile-3-customer-modal">
        <h2 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0 modal-CTA" data-modal="tile-3-customer-modal">
          Smart watch
        </h2>
      </div>
    </div>
  </a>

      
        
  
  <a class="tilelet-wrapper modal-CTA" href="javascript:void(0)" data-modal="tile-4-customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p4||||||Other|Get started&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1" data-loaded="true">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-4?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-d-4?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-4?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vzw-1159249-byod-a-carousel-m-4?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1" class="modal-CTA" data-modal="tile-4-customer-modal">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24 modal-CTA" data-modal="tile-4-customer-modal">
        <h2 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0 modal-CTA" data-modal="tile-4-customer-modal">
          Other
        </h2>
      </div>
    </div>
  </a>

      
    </div>
  </div>
</div></div>


    
    
    <div class="html">
  
    

  


  
  <div class="Modal-container" id="tile-1-customer-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingX--lg20">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28">
            <h2 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing
<br aria-hidden="true">
                Verizon mobile customer?
            </h2>
            <div class="plan-btn-container">
                <div>
                    <a role="button" href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 new-customer-btn" id="lines-new-customer">
                        New Customer
                    </a>
                </div>
                <div>
                    <a id="existing-customer" role="button" href="https://secure.verizon.com/signin?goto=https://www.verizon.com/sales/nextgen/byod.html?type=smartphone&amp;_gl=1*1jfth8g*_ga*MTUzODA5MTIzMy4xNzQxODcxNjU2*_ga_12R1DX1LX7*MTc0MTg5MzIzMC41LjEuMTc0MTg5NTU1OS4zOC4wLjA" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn">
                        Existing Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Modal-container" id="tile-2-customer-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingX--lg20">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28">
            <h2 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing
<br aria-hidden="true">
                Verizon mobile customer?
            </h2>
            <div class="plan-btn-container">
                <div>
                    <a role="button" href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 new-customer-btn" id="lines-new-customer">
                        New Customer
                    </a>
                </div>
                <div>
                    <a id="existing-customer" role="button" href="https://secure.verizon.com/signin?goto=https://www.verizon.com/sales/digital/byod.html?type=tablet&amp;_gl=1*1jfth8g*_ga*MTUzODA5MTIzMy4xNzQxODcxNjU2*_ga_12R1DX1LX7*MTc0MTg5MzIzMC41LjEuMTc0MTg5NTU1OS4zOC4wLjA" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn">
                        Existing Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Modal-container" id="tile-3-customer-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingX--lg20">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28">
            <h2 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing
<br aria-hidden="true">
                Verizon mobile customer?
            </h2>
            <div class="plan-btn-container">
                <div>
                    <a role="button" href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 new-customer-btn" id="lines-new-customer">
                        New Customer
                    </a>
                </div>
                <div>
                    <a id="existing-customer" role="button" href="https://secure.verizon.com/signin?goto=https://www.verizon.com/sales/nextgen/byod.html?type=smartwatch&amp;_gl=1*1jfth8g*_ga*MTUzODA5MTIzMy4xNzQxODcxNjU2*_ga_12R1DX1LX7*MTc0MTg5MzIzMC41LjEuMTc0MTg5NTU1OS4zOC4wLjA" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn">
                        Existing Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Modal-container" id="tile-4-customer-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingX--lg20">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28">
            <h2 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing
<br aria-hidden="true">
                Verizon mobile customer?
            </h2>
            <div class="plan-btn-container">
                <div>
                    <a role="button" href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 new-customer-btn" id="lines-new-customer">
                        New Customer
                    </a>
                </div>
                <div>
                    <a id="existing-customer" role="button" href="https://secure.verizon.com/signin?goto=https://www.verizon.com/sales/nextgen/byod.html?type=other&amp;_gl=1*1jfth8g*_ga*MTUzODA5MTIzMy4xNzQxODcxNjU2*_ga_12R1DX1LX7*MTc0MTg5MzIzMC41LjEuMTc0MTg5NTU1OS4zOC4wLjA" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn">
                        Existing Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

  <script>function getCookies(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function cookied() {
    var loggedIn = getCookies("loggedIn");
    var myAccount = getCookies("myAccount");
    var params = window.location.href;
    if (loggedIn == "true" || myAccount == "true" || params.indexOf("customertest") != -1) {
        return true
    } else {
        return false;
    }
}
if (!cookied()) {

    document.querySelectorAll('#get-started-cmp .tilelet-wrapper').forEach((el, index) => {
        var tileTitle = 'tile-' + (index+1);
       
        el.querySelector('img').classList.add('modal-CTA');
        el.querySelector('img').dataset.modal = tileTitle + '-customer-modal';
        el.querySelector('.tilelet-head-wrapper').classList.add('modal-CTA');
        el.querySelector('.tilelet-head-wrapper').dataset.modal = tileTitle + '-customer-modal';
        el.querySelector('.tilelet-head-wrapper h2').classList.add('modal-CTA');
        el.querySelector('.tilelet-head-wrapper h2').dataset.modal = tileTitle + '-customer-modal';
        el.classList.add('modal-CTA');
        el.dataset.modal = tileTitle + '-customer-modal';


        el.setAttribute('href', 'javascript:void(0)');


 el.querySelector('.tilelet-head-wrapper').addEventListener('click',function(e)
    {
      e.stopPropagation()
e.preventDefault()

    })

 el.querySelector('.tilelet-head-wrapper h2').addEventListener('click',function(e)
    {
      e.stopPropagation()
e.preventDefault()

    })

 el.querySelector('img').addEventListener('click',function(e)
    {
      e.stopPropagation()
e.preventDefault()

    })
    })
    
}</script>
</div>



  </div>

    
  </section>
</div>

    
</div>
</div>

    
</div>


    

</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md64 u-paddingTop--lg64">
</div></div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="start-your-plan">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="sectionHeader">







  
  

  
  



 
  
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     ">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs16 u-marginBottom--lg20  ">
      <h2 class=" u-fontDisplay u-textLineHeightTight u-text--xs32 u-text--md u-text--lg64 u-textBold u-displayInline">
        Pair your device with one of our best plans
      </h2>
      
    </div>
    <p class="u-fontDisplay u-textLineHeightNormal u-text--xs16 u-text--md16 u-text--lg20 u-marginBottom--xs16 u-marginBottom--lg20">
      Choose the Unlimited option that’s right for you.
      
    </p>

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      
      
      
    </div>
  </div>


            
          </div>
      </div>
    </div>
  
</div>


    
    
    <div class="plansTeaser">





  
  

  
  





<div data-cmp="vzrf-plans-teaser" translate="yes">
  <div class="cmp-wrapper u-fontDisplayLight">
    <div class="wrapper ">


      <!-- Includes Section -->
      
       <div class="includes-section u-paddingX--16 animate-slideup ">
        <div class="u-colorBackgroundStone u-marginBottom--24 u-roundCorner--24">
          <div class="u-paddingAll--24">
            <div class="u-text--20 u-textNormal u-textBold lineHeight--lg24 u-fontDisplay">All plans include</div>
            <div class="plan-includes u-paddingY--16 u-displayFlex u-fontText u-text--12 u-textRegular">
            <ol class="u-paddingAll--0 u-marginAll--0 u-listStyleNone u-displayFlex u-flexWrap--md u-flexColumn--xs u-flexRow--sm">

              
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">Unlimited talk, text &amp; data</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">5G and 4G LTE</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">Mexico &amp; Canada talk, text &amp; data</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">International texting</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">Verizon Family</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">Call Filter spam blocker</span>
                </li>
            
                <li class="u-marginAll--0 u-flex u-lineHeight--16">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.6666 3.91118L5.8814 12.6964L1.33325 8.14081L1.95547 7.51859L5.8814 11.4519L14.0295 3.30377L14.6666 3.91118Z" fill="black"></path>
                  </svg></span>
                  <span class="u-marginLeft--4">Home internet as low as $35/mo</span>
                </li>
            
                
            
                
            
                
            
             
            </ol>
             
            </div>
    
            <a href="javascript:void(0);" class="u-text--12 u-textNormal u-fontText" tabindex="0" aria-label="" role="button" data-modal="plan-includes-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p1||||||Pair your device with one of our best plans|&quot;}">Review details</a>
    
          </div>
        
        </div>

       </div>
      


      <!-- Plans Teaser Startes Here -->
      <div class="progress-bar-slider plans-teaser--carousel u-marginTop--24 slick-initialized slick-slider" data-slick="{ &quot;touchThreshold&quot;: 500, &quot;variableWidth&quot;: true, &quot;alignLastSlideRight&quot;: true, &quot;accessibility&quot;: false, &quot;mobileFirst&quot;:true, &quot;focusOnChange&quot;: false, &quot;infinite&quot;: false, &quot;slidesToShow&quot;: 1,&quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: true, &quot;prevArrow&quot;:&quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Previous\&quot;&gt;&lt;/button&gt;&quot;, &quot;nextArrow&quot;:&quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Next\&quot;&gt;&lt;/button&gt;&quot;, &quot;dots&quot;: false, &quot;autoplay&quot;: false, &quot;autoplaySpeed&quot;: 3000, &quot;responsive&quot;:[{&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2}}, {&quot;breakpoint&quot;: 1024, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2}}, {&quot;breakpoint&quot;: 1279, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 1320, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 1441, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 1710, &quot;settings&quot;: {&quot;touchThreshold&quot;: 500, &quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 3}}]}" data-slick-type="vds-a11y" data-slick-a11y-exceptions="allow-multi-slide-tab-focus" aria-label="Carousel with 3 slides"><div class="slick-list draggable" role="none"><div class="slick-track" style="opacity: 1; width: 15000px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"><div><div class="plans-teaser-container u-paddingX--xl0   u-marginLeft--xs u-marginLeft--xl0 u-marginRight--xl24
        
            " style="width: 100%; display: inline-block;">
    

    <!-- Stone Theme -->
    <div class="teaser-item teaser-item-stone-theme teaser-item-carousel-stone u-colorSecondary u-colorBackgroundStone">
      <div class="u-colorBackgroundStone wrapper-teaser-content-top u-colorBackgroundStone u-paddingTop--24  u-paddingLeft--24  u-paddingRight--24">
        <div class="u-colorRed u-textBold u-marginBottom--lg4 lineHeight--xs28 lineHeight--lg36 u-displayFlex">
          <div class="u-displayBlock u-width50 u-text--xs16 u-text--lg20">Unlimited</div>
          
          <div class="u-displayInlineBlock u-width50 u-textRight">
           
            <span class="planLogo u-floatRight">
              <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                <img class="u-height100" aria-hidden="true" tabindex="-1" loading="lazy">
               
              </picture>
            </span>
          
          </div>
        </div>

     
        <div class="u-colorRed u-textBold  u-text--xs32 u-text--lg48 lineHeight--xs28 lineHeight--lg36  u-colorSecondary u-displayFlex">
            <div class="u-displayBlock u-width50">Ultimate</div>
        </div>

      </div>
      <div class="wrapper-teaser-content-bottom u-colorBackgroundStone u-colorPrimary u-paddingTop--xs24 u-paddingTop--md24 u-paddingTop--lg24 u-paddingLeft--24  u-paddingRight--24">
        <div class="teaser-logo-section u-marginBottom--24">
          <ol class="u-paddingAll--0">
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/040725electric-power_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/040725electric-power_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/040725electric-power_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/040725electric-power_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/040725electric-power_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">5G Ultra Wideband with Enhanced Video Calling</span>
                  <span class="plan-description u-textRegular u-text--12 u-colorPrimary u-lineHeight--16">2X faster than our regular 5G in the U.S., no matter how much you use.</span>
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_4k_streaming_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_4k_streaming_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_4k_streaming_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_4k_streaming_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_4k_streaming_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">4K video streaming</span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Unlimited mobile hotspot data<sup>1</sup></span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Unlimited international data, talk &amp; text when traveling internationally<sup>2</sup></span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon4_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">International calling from the US with Global Choice</span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_family_plus_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_family_plus_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_family_plus_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_family_plus_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_family_plus_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Verizon Family Plus</span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_identity_secure_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_identity_secure_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_identity_secure_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_identity_secure_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/0426_myPlanLP_icon_identity_secure_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Identity Secure</span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon3_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon3_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon3_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon3_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon3_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Up to 50% off 2 data plans for a watch, tablet &amp; more</span>
                  
                </span>
              </li>
            
          </ol>

        <a href="javascript:void(0);" class="u-text--lg16 u-text--xs12 u-textNormal u-fontDisplay u-textRegular lineHeight--lg20 lineHeight--xs16 u-letterSpacing--05" tabindex="0" aria-label="" role="button" data-modal="plans-teaser-modal--0" data-impression-category="Mobile Plan BYOD" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p2|Mobile Plan BYOD|||||Pair your device with one of our best plans|&quot;}">Review details</a>
        </div>

      </div>

      
      <div class="additional-wrapper ">
        
      </div>


<div class="value-section u-colorBackgroundStone u-paddingTop--8 u-paddingLeft--24  u-paddingRight--24">
  <div class="u-displayBlock u-width50 ">
    
      <div class="u-colorPrimary  u-fontDisplay u-marginBottom--24 u-text--48 pricing-container  plan-price-all plan-price-0 planDiscountPriceParent" data-defaultprice="73.89" data-linecopy="line">
        <span aria-hidden="true">
          $<span class="planDiscountPrice">73.89</span><span class="u-text--xs16 u-text--lg12 u-textRegular u-textNormal"><span class="u-fontDisplay" aria-label="per">/</span>line<sup>*</sup></span>
        </span>
        
      
      <span class="priceText u-screenReaderOnly">$73.89 per line *</span>
      

        

      </div>
    
  </div>

</div>
     
    </div>
  </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"><div><div class="plans-teaser-container u-paddingX--xl0  u-marginLeft--24 u-marginLeft--xs u-marginLeft--xl0 u-marginRight--xl24
        
            " style="width: 100%; display: inline-block;">
    

    <!-- Stone Theme -->
    <div class="teaser-item teaser-item-stone-theme teaser-item-carousel-stone u-colorSecondary u-colorBackgroundStone">
      <div class="u-colorBackgroundStone wrapper-teaser-content-top u-colorBackgroundStone u-paddingTop--24  u-paddingLeft--24  u-paddingRight--24">
        <div class="u-colorRed u-textBold u-marginBottom--lg4 lineHeight--xs28 lineHeight--lg36 u-displayFlex">
          <div class="u-displayBlock u-width50 u-text--xs16 u-text--lg20">Unlimited</div>
          
          <div class="u-displayInlineBlock u-width50 u-textRight">
           
            <span class="planLogo u-floatRight">
              <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                <img class="u-height100" aria-hidden="true" tabindex="-1" loading="lazy">
               
              </picture>
            </span>
          
          </div>
        </div>

     
        <div class="u-colorRed u-textBold  u-text--xs32 u-text--lg48 lineHeight--xs28 lineHeight--lg36  u-colorSecondary u-displayFlex">
            <div class="u-displayBlock u-width50">Plus</div>
        </div>

      </div>
      <div class="wrapper-teaser-content-bottom u-colorBackgroundStone u-colorPrimary u-paddingTop--xs24 u-paddingTop--md24 u-paddingTop--lg24 u-paddingLeft--24  u-paddingRight--24">
        <div class="teaser-logo-section u-marginBottom--24">
          <ol class="u-paddingAll--0">
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">5G Ultra Wideband</span>
                  <span class="plan-description u-textRegular u-text--12 u-colorPrimary u-lineHeight--16">2X faster than our regular 5G in the U.S., no matter how much you use.</span>
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon2_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">30 GB premium mobile hotspot data<sup>1</sup></span>
                  
                </span>
              </li>
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon7_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon7_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon7_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon7_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon7_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">Up to 50% off 1 data plan for a watch, tablet &amp; more</span>
                  
                </span>
              </li>
            
          </ol>

        <a href="javascript:void(0);" class="u-text--lg16 u-text--xs12 u-textNormal u-fontDisplay u-textRegular lineHeight--lg20 lineHeight--xs16 u-letterSpacing--05" tabindex="0" aria-label="" role="button" data-modal="plans-teaser-modal--1" data-impression-category="Mobile Plan BYOD" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p3|Mobile Plan BYOD|||||Pair your device with one of our best plans|&quot;}">Review details</a>
        </div>

      </div>

      
      <div class="additional-wrapper ">
        
      </div>


<div class="value-section u-colorBackgroundStone u-paddingTop--8 u-paddingLeft--24  u-paddingRight--24">
  <div class="u-displayBlock u-width50 ">
    
      <div class="u-colorPrimary  u-fontDisplay u-marginBottom--24 u-text--48 pricing-container  plan-price-all plan-price-0 planDiscountPriceParent" data-defaultprice="60" data-linecopy="line">
        <span aria-hidden="true">
          $<span class="planDiscountPrice">60</span><span class="u-text--xs16 u-text--lg12 u-textRegular u-textNormal"><span class="u-fontDisplay" aria-label="per">/</span>line<sup>*</sup></span>
        </span>
        
      
      <span class="priceText u-screenReaderOnly">$60 per line *</span>
      

        

      </div>
    
  </div>

</div>
     
    </div>
  </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"><div><div class="plans-teaser-container u-paddingX--xl0  u-marginLeft--24 u-marginLeft--xs u-marginLeft--xl0 u-marginRight--xl24
        
            " style="width: 100%; display: inline-block;">
    

    <!-- Stone Theme -->
    <div class="teaser-item teaser-item-stone-theme teaser-item-carousel-stone u-colorSecondary u-colorBackgroundStone">
      <div class="u-colorBackgroundStone wrapper-teaser-content-top u-colorBackgroundStone u-paddingTop--24  u-paddingLeft--24  u-paddingRight--24">
        <div class="u-colorRed u-textBold u-marginBottom--lg4 lineHeight--xs28 lineHeight--lg36 u-displayFlex">
          <div class="u-displayBlock u-width50 u-text--xs16 u-text--lg20">Unlimited</div>
          
          <div class="u-displayInlineBlock u-width50 u-textRight">
           
            <span class="planLogo u-floatRight">
              <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo2?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo2?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo2?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo2?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/RTM287453-Mobility-MyPlanDataTileTest-5GLogo2?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                <img class="u-height100" aria-hidden="true" tabindex="-1" loading="lazy">
               
              </picture>
            </span>
          
          </div>
        </div>

     
        <div class="u-colorRed u-textBold  u-text--xs32 u-text--lg48 lineHeight--xs28 lineHeight--lg36  u-colorSecondary u-displayFlex">
            <div class="u-displayBlock u-width50">Welcome</div>
        </div>

      </div>
      <div class="wrapper-teaser-content-bottom u-colorBackgroundStone u-colorPrimary u-paddingTop--xs24 u-paddingTop--md24 u-paddingTop--lg24 u-paddingLeft--24  u-paddingRight--24">
        <div class="teaser-logo-section u-marginBottom--24">
          <ol class="u-paddingAll--0">
            
              <li class="teaser-logo u-width100 u-marginBottom--xs16 u-marginBottom--lg24 u-text--xs11 u-text--lg16 ">
                <span class="u-floatLeft u-width10">
                  <picture class="u-width100" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha" aria-hidden="true" tabindex="-1">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 544px)">
                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha, https://ss7.vzw.com/is/image/VerizonWireless/myPlanLP_level3_icon1_d?scl=1&amp;fmt=webp-alpha 2x" media="(min-width: 320px)">
                    <img aria-hidden="true" tabindex="-1" loading="lazy">
                   
                  </picture>
                </span>

                <span class="u-flex u-flexColumn u-floatLeft u-width90 u-marginLeft--xs4 u-marginLeft--lg8">
                  <span class="u-text--xs14 u-text--lg16 u-fontDisplay lineHeight--xs18 lineHeight--lg20 u-textRegular u-letterSpacing--05">5G</span>
                  <span class="plan-description u-textRegular u-text--12 u-colorPrimary u-lineHeight--16">Our reliable, fast 5G.</span>
                </span>
              </li>
            
          </ol>

        <a href="javascript:void(0);" class="u-text--lg16 u-text--xs12 u-textNormal u-fontDisplay u-textRegular lineHeight--lg20 lineHeight--xs16 u-letterSpacing--05" tabindex="0" aria-label="" role="button" data-modal="plans-teaser-modal--2" data-impression-category="Mobile Plan BYOD" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p4|Mobile Plan BYOD|||||Pair your device with one of our best plans|&quot;}">Review details</a>
        </div>

      </div>

      
      <div class="additional-wrapper ">
        
      </div>


<div class="value-section u-colorBackgroundStone u-paddingTop--8 u-paddingLeft--24  u-paddingRight--24">
  <div class="u-displayBlock u-width50 ">
    
      <div class="u-colorPrimary  u-fontDisplay u-marginBottom--24 u-text--48 pricing-container  plan-price-all plan-price-0 planDiscountPriceParent" data-defaultprice="50" data-linecopy="line">
        <span aria-hidden="true">
          $<span class="planDiscountPrice">50</span><span class="u-text--xs16 u-text--lg12 u-textRegular u-textNormal"><span class="u-fontDisplay" aria-label="per">/</span>line<sup>*</sup></span>
        </span>
        
      
      <span class="priceText u-screenReaderOnly">$50 per line *</span>
      

        

      </div>
    
  </div>

</div>
     
    </div>
  </div></div></div></div></div></div>

<!-- Skinny banner -->

  
    <div class="teaser-skinny-banner u-paddingX--16 u-marginTop--16">
   <div class="teaser-skinny-banner-content u-roundCorner--8 u-colorBackgroundRed u-width100 u-flex u-flexJustifyCenter u-flexAlignItemsCenter u-fontDisplay u-text--lg24 u-text--xs20 u-textNormal u-textBold u-colorSecondary u-textCenter lineHeight--lg28 lineHeight--xs24 u-paddingY--12 u-paddingX--12">
    With myPlan, new &amp; existing customers get the same phone offers now and when you upgrade.
   </div>
     </div>
  


      <div class="u-marginLeftAuto textCenter--md u-marginRightAuto  u-paddingLeft--16 u-paddingLeft--xl0 u-textRight--xl u-marginTop--xs28 u-marginTop--md28 u-marginTop--xl24 u-text--xs11 lineHeight--xs16 u-paddingRight--0 legal u-fontText">
        <p>**Discounted Pricing: Includes $10/mo account promo credit plus $11.11/mo BYOD discount with Unlimited Ultimate, $10/mo BYOD discount with Unlimited Plus or $5/mo BYOD discount with Unlimited Welcome plan; credits expire in 36 mos. Limit 1 offer per Verizon account. Standard monthly rates: <strong>Unlimited Welcome: </strong> $65/line; <strong>Unlimited Plus:</strong> $80/line; <strong>Unlimited Ultimate: </strong>$95/line. Plus taxes &amp; fees. New smartphone line of service with your own smartphone req'd. All promo credits end if eligibility req’s are no longer met. With Auto Pay and paper-free billing. $10/mo more without Auto Pay.<span class="tooltip">​
            <span class="vzrf-tooltip" data-tooltip-content="&lt;strong&gt;BYOD:&lt;/strong&gt; $11.11/mo promo credit for Unlimited Ultimate, $10/mo promo credit for Unlimited Plus or $5/mo promo credit for Unlimited Welcome applied to account over 36 mos. for new customers activating 1 new smartphone line with your own 4G/5G smartphone. Promo credit ends if eligibility requirements are no longer met. Auto Pay (ACH or Verizon Visa Card) &amp; paper-free billing req’d. &lt;strong&gt;Unlimited 5G / 4G LTE:&lt;/strong&gt; For Unlimited Welcome plan, in times of congestion, your data may be temporarily slower than other traffic. After exceeding 30 GB/mo (for Unlimited Plus plan) or 200 GB/mo (for Unlimited Ultimate plan) of 5G Ultra Wideband, 5G, or 4G LTE Mobile Hotspot data, Mobile Hotspot speeds reduced to up to 6 Mbps when on 5G Ultra Wideband and 600 Kbps when on 5G / 4G LTE for the rest of month. Mobile Hotspot not included on Unlimited Welcome plan. Domestic data roaming at 2G speeds. 5G Ultra Wideband access included with Unlimited Plus and Unlimited Ultimate plans. 5G access requires a 5G capable device." data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="  *Discounted Pricing: Includes $10/mo account promo credit plus $11.11/mo BYOD discount with Unlimited Ultimate, $10/mo BYOD discount with Unlimited Plus or $5/mo BYOD discount with Unlimited Welcome plan; credits expire in 36 mos. Limit 1 offer per Verizon account. Standard monthly rates: &lt;strong&gt;Unlimited Welcome: &lt;/strong&gt; $65/line; &lt;strong&gt;Unlimited Plus:&lt;/strong&gt; $80/line; &lt;strong&gt;Unlimited Ultimate: &lt;/strong&gt; $95/line. Plus taxes &amp; fees. New smartphone line of service with your own smartphone req'd. All promo credits end if eligibility req’s are no longer met. With Auto Pay and paper-free billing. $10/mo more without Auto Pay." data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on   *Discounted Pricing: Includes $10/mo account promo credit plus $11.11/mo BYOD discount with Unlimited Ultimate, $10/mo BYOD discount with Unlimited Plus or $5/mo BYOD discount with Unlimited Welcome plan; credits expire in 36 mos. Limit 1 offer per Verizon account. Standard monthly rates: &lt;strong&gt;Unlimited Welcome: &lt;/strong&gt; $65/line; &lt;strong&gt;Unlimited Plus:&lt;/strong&gt; $80/line; &lt;strong&gt;Unlimited Ultimate: &lt;/strong&gt; $95/line. Plus taxes &amp; fees. New smartphone line of service with your own smartphone req'd. All promo credits end if eligibility req’s are no longer met. With Auto Pay and paper-free billing. $10/mo more without Auto Pay. tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true"><strong>BYOD:</strong> $11.11/mo promo credit for Unlimited Ultimate, $10/mo promo credit for Unlimited Plus or $5/mo promo credit for Unlimited Welcome applied to account over 36 mos. for new customers activating 1 new smartphone line with your own 4G/5G smartphone. Promo credit ends if eligibility requirements are no longer met. Auto Pay (ACH or Verizon Visa Card) &amp; paper-free billing req’d. <strong>Unlimited 5G / 4G LTE:</strong> For Unlimited Welcome plan, in times of congestion, your data may be temporarily slower than other traffic. After exceeding 30 GB/mo (for Unlimited Plus plan) or 200 GB/mo (for Unlimited Ultimate plan) of 5G Ultra Wideband, 5G, or 4G LTE Mobile Hotspot data, Mobile Hotspot speeds reduced to up to 6 Mbps when on 5G Ultra Wideband and 600 Kbps when on 5G / 4G LTE for the rest of month. Mobile Hotspot not included on Unlimited Welcome plan. Domestic data roaming at 2G speeds. 5G Ultra Wideband access included with Unlimited Plus and Unlimited Ultimate plans. 5G access requires a 5G capable device.</span>
  </span>
          </span>
        </p>
      </div>

      

    </div>
  </div>

  <!-- Plan Includes Modal -->
  <div class="Modal-container popular-plans-modal popular-plans" id="plan-includes-modal">
  <div class="Modal-overlay"></div>
  <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <div class="">
          <div class="modal-header modal-header--sticky">
              <button aria-label="close modal" class="Modal-close"></button>
          </div>
          <div class="Modal-content u-fontDisplay">
              <h3 class="u-text--xs24 u-text--lg32 u-fontDisplay u-fontDisplayBold u-textNormal lineHeight--lg36 lineHeight--xs28">
                  All plans include
              </h3>
           

              
                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      Unlimited talk, text &amp; data
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      Stay in touch and never worry about overage charges with unlimited talk, text and data on the network more people rely on.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      5G and 4G LTE
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      Get unlimited access to our 5G and 4G LTE networks which provide the high speeds and reliability you've come to expect.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      Mexico &amp; Canada talk, text &amp; data
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      Talk, text and use high-speed data when traveling in Mexico &amp; Canada. After 2 GB/day, get unlimited 3G speeds.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      International texting
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      Unlimited texting from the US to over 200 countries and territories worldwide.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      Verizon Family
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      The Verizon Family app helps keep loved ones safe and connected. It features location sharing, Safe Walk with SOS, driving insights for the primary member, and monitoring of Verizon calls and texts. Additionally, the Verizon Network enables location sharing even when devices are not paired.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      Call Filter spam blocker
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      With Verizon Call Filter, screen incoming calls and filter spam. Fine-tune your settings to automatically block high-risk calls by risk level. Upgrade to Call Filter Plus for $2.99/mo for one line or $10.99/mo for 3+ lines.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                      Home internet as low as $35/mo
                    </div>
                    <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                      Verizon Home Internet (VHI) includes 5G Home, VHI Lite and Fios internet services. Availability varies. Auto Pay &amp; paper-free billing req’d. Subject to credit approval. Plans start at $35/mo. when combined with postpaid Verizon mobile phone plan (excludes business and data-only plans). Fios 300 Mbps: Mobile + Home Discount enrollment req'd. $99 setup and other terms apply.
                    </div>
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    
                    
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    
                    
    
                  </div>

                
                  <div class="includes-content u-marginTop--24">
                    
                    
    
                  </div>

                
              
           
          </div>

          <div class="Modal-footer u-paddingTop--24"> 
            <div class="modal-btn-group">
                <button class="Button modal-btn modal-btn-primary Modal-close-full-btn Button--primary u-width--xs100" data-dismiss="modal" aria-hidden="false">Close</button>
            </div>
        </div>

      
      </div>
  </div>
</div>

<!-- Plans Teaser Modal -->
 
  <div class="Modal-container" id="plans-teaser-modal--0">
  <div class="Modal-overlay"></div>
  <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <div class="">
          <div class="modal-header modal-header--sticky u-marginBottom--lg12 u-marginBottom--xs24">
              <button aria-label="close modal" class="Modal-close" data-impression-category="Mobile Plan BYOD"></button>
          </div>
          <div class="Modal-content u-fontDisplay">
          
              <div class="modal-teaser-item u-colorBackgroundAccent u-colorSecondary u-marginBottom--48 u-marginTop--xs24 u-marginTop--lg12">
                <div class="wrapper-teaser-content u-paddingX--lg32 u-paddingTop--lg32 u-paddingX--xs24 u-paddingTop--xs24 u-paddingBottom--xs64 ">
                  
                  <h4 class="u-text--xs20 u-text--lg24 u-textNormal u-marginAll--0 u-textRegular lineHeight--lg28 lineHeight--xs24 u-colorSecondary">  Unlimited Ultimate</h4>
                
                  <p class="modal-teaser-subhead u-text--16  lineHeight--20 u-textRegular u-textNormal u-letterSpacing--05 u-marginTop--8 u-marginBottom--0">
                    Our 5G UWB is 2X faster than our regular 5G in the U.S., no matter how much you use.<sup>2</sup>
                  </p>
                  
                </div>
            </div>

            
              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    5G Ultra Wideband with Enhanced Video Calling
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    2X faster than our regular 5G in the U.S., no matter how much you use.
<br aria-hidden="true"><br aria-hidden="true">Verizon 5G UW median download speeds vs VZ low-band 5G median download speeds based on Ookla® Speedtest Intelligence® data, 2H 2025. All rights reserved. Explore our current <a target="_blank" href="/bring-your-own-device/coverage-map/">5G and 4G LTE coverage maps.</a><br aria-hidden="true"><br aria-hidden="true">Get access to the fastest speeds we offer with 5G Ultra Wideband. Combined with Verizon's 5G network, you get reliable coast to coast coverage. Download apps, games, entire playlists and TV series in seconds. You'll also get 5G Ultra Wideband mobile hotspot and crystal-clear 4K Ultra High Definition video streaming when activated on a capable device. Plus, access experiences from our exclusive 5G partners: Live Nation and Riot Games. For full details, visit the <a target="_blank" href="/bring-your-own-device/5g/">5G experience page.</a><br aria-hidden="true"><br aria-hidden="true"> 5G Ultra Wideband access requires a 5G Ultrawideband-capable device inside the 5G Ultrawideband coverage area.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    4K video streaming
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Streaming quality up to 4K Ultra High Definition when using 5G Ultra Wideband network on a capable device, or up to 1080p when on Verizon 5G or 4G LTE.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Unlimited mobile hotspot data<sup>1</sup>
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Get high-speed 5G/4G hotspot data that your other devices can use. Your smartphone becomes a Wi-Fi connection for devices like tablets, laptops and more.
<br aria-hidden="true"><br aria-hidden="true">After 200 GB/mo of premium data, you can still use hotspot at lower speeds of 6 Mbps for the rest of the month.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Unlimited international data, talk &amp; text when traveling internationally<sup>2</sup>
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Unlimited talk and text when traveling in 210+ countries and destinations. Plus, get 15 GB/mo of high-speed data, unlimited thereafter at 1.5 Mbps.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    International calling from the US with Global Choice
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Choose one of 140 countries and get up to 300 minutes to call that country.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Verizon Family Plus
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Verizon Family Plus helps keep your loved ones safe and connected so you can confidently manage your entire family all in one app. Features include: Location Monitoring &amp; Alerts + SafeWalk, Parental Control Features, Driving Insights &amp; Roadside Assistance, 24/7 Assist, and Family Line. To take advantage of this benefit, customers must purchase and activate this product and will receive a bill credit for the full cost of perk. MSG &amp; data rates may apply.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Identity Secure
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Identity Secure is a suite of tools to proactively protect your identity and reduce the chances of identity theft. Get a smart password manager with identity monitoring, secure file storage, social media monitoring, digital footprint cleanup, 24/7 expert support to quickly resolve threats and more. To take advantage of this benefit, customers must purchase and activate this product. Customers are eligible for up to a $10 credit total - either a $5 credit per line (maximum of two lines), or a $10 credit for the account level product. 50% off plans for 2 watches or tablets.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Up to 50% off 2 data plans for a watch, tablet &amp; more
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Get up to 50% off two eligible plans for a qualifying smartwatch, tablet, hotspot or Hum in-car Wi-Fi device. Eligible plans and discounts: 50% off Unlimited and Unlimited Plus for tablets; Essential and Plus plans for mobile hotspot devices; Unlimited for HumX; Unlimited + In Car WiFi for Hum+; and Unlimited and Number Share Unlimited for smartwatches. $20 off Premium and Pro plans for mobile hotspot devices.
                  </div>
  
                </div>

              
            

            


          </div>

          <div class="Modal-footer u-paddingTop--24 "> 
            <div class="modal-btn-group">
                <button class="Button modal-btn modal-btn-primary Modal-close-full-btn Button--primary u-width--xs100" data-dismiss="modal" aria-hidden="false" data-impression-category="Mobile Plan BYOD">Close</button>
            </div>
        </div>

      
      </div>
  </div>
</div>

 
  <div class="Modal-container" id="plans-teaser-modal--1">
  <div class="Modal-overlay"></div>
  <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <div class="">
          <div class="modal-header modal-header--sticky u-marginBottom--lg12 u-marginBottom--xs24">
              <button aria-label="close modal" class="Modal-close" data-impression-category="Mobile Plan BYOD"></button>
          </div>
          <div class="Modal-content u-fontDisplay">
          
              <div class="modal-teaser-item u-colorBackgroundAccent u-colorSecondary u-marginBottom--48 u-marginTop--xs24 u-marginTop--lg12">
                <div class="wrapper-teaser-content u-paddingX--lg32 u-paddingTop--lg32 u-paddingX--xs24 u-paddingTop--xs24 u-paddingBottom--xs64 ">
                  
                  <h4 class="u-text--xs20 u-text--lg24 u-textNormal u-marginAll--0 u-textRegular lineHeight--lg28 lineHeight--xs24 u-colorSecondary">  Unlimited Plus</h4>
                
                  <p class="modal-teaser-subhead u-text--16  lineHeight--20 u-textRegular u-textNormal u-letterSpacing--05 u-marginTop--8 u-marginBottom--0">
                    Our 5G UWB is 2X faster than our regular 5G in the U.S., no matter how much you use.<sup>2</sup>
                  </p>
                  
                </div>
            </div>

            
              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    5G Ultra Wideband
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    2X faster than our regular 5G in the U.S., no matter how much you use.
<br aria-hidden="true"><br aria-hidden="true">Verizon 5G UW median download speeds vs VZ low-band 5G median download speeds based on Ookla® Speedtest Intelligence® data, 2H 2025. All rights reserved. Explore our current <a target="_blank" href="/bring-your-own-device/coverage-map/">5G and 4G LTE coverage maps.</a><br aria-hidden="true"><br aria-hidden="true">Get access to the fastest speeds we offer with 5G Ultra Wideband. Combined with Verizon's 5G network, you get reliable coast to coast coverage. Download apps, games, entire playlists and TV series in seconds. You'll also get 5G Ultra Wideband mobile hotspot and crystal-clear 4K Ultra High Definition video streaming when activated on a capable device. Plus, access experiences from our exclusive 5G partners: Live Nation and Riot Games. For full details, visit the <a target="_blank" href="/bring-your-own-device/5g/">5G experience page.</a>
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    30 GB premium mobile hotspot data<sup>1</sup>
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Get high-speed 5G / 4G hotspot data that your other devices can use. Your smartphone becomes a Wi-Fi connection for devices like tablets, laptops and more.
<br aria-hidden="true"><br aria-hidden="true">After exceeding 30 GB/mo of 5G Ultra Wideband, 5G, or 4G LTE Mobile Hotspot data, you can still use hotspot at lower speeds of 3 Mbps when on 5G Ultra Wideband and 600 Kbps when on 5G / 4G LTE for the rest of the month. 5G access requires a 5G-capable device.
                  </div>
  
                </div>

              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    Up to 50% off 1 data plan for a watch, tablet &amp; more
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Get up to 50% off one eligible plan for a qualifying smartwatch, tablet, hotspot or Hum in-car Wi-Fi device. Eligible plans and discounts: 50% off Unlimited and Unlimited Plus for tablets; Essential and Plus plans for mobile hotspot devices; Unlimited for HumX; Unlimited + In Car WiFi for Hum+; and Unlimited and Number Share Unlimited for smartwatches. $20 off Premium and Pro plans for mobile hotspot devices.
                  </div>
  
                </div>

              
            

            


          </div>

          <div class="Modal-footer u-paddingTop--24 "> 
            <div class="modal-btn-group">
                <button class="Button modal-btn modal-btn-primary Modal-close-full-btn Button--primary u-width--xs100" data-dismiss="modal" aria-hidden="false" data-impression-category="Mobile Plan BYOD">Close</button>
            </div>
        </div>

      
      </div>
  </div>
</div>

 
  <div class="Modal-container" id="plans-teaser-modal--2">
  <div class="Modal-overlay"></div>
  <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <div class="">
          <div class="modal-header modal-header--sticky u-marginBottom--lg12 u-marginBottom--xs24">
              <button aria-label="close modal" class="Modal-close" data-impression-category="Mobile Plan BYOD"></button>
          </div>
          <div class="Modal-content u-fontDisplay">
          
              <div class="modal-teaser-item u-colorBackgroundAccent u-colorSecondary u-marginBottom--48 u-marginTop--xs24 u-marginTop--lg12">
                <div class="wrapper-teaser-content u-paddingX--lg32 u-paddingTop--lg32 u-paddingX--xs24 u-paddingTop--xs24 u-paddingBottom--xs64 ">
                  
                  <h4 class="u-text--xs20 u-text--lg24 u-textNormal u-marginAll--0 u-textRegular lineHeight--lg28 lineHeight--xs24 u-colorSecondary">  Unlimited Welcome</h4>
                
                  <p class="modal-teaser-subhead u-text--16  lineHeight--20 u-textRegular u-textNormal u-letterSpacing--05 u-marginTop--8 u-marginBottom--0">
                    Our reliable, fast 5G.
                  </p>
                  
                </div>
            </div>

            
              
                <div class="includes-content u-marginTop--24">
                  <div class="u-fontDisplay u-text--lg24 u-text--xs20 u-marginBottom--8 u-fontDisplayBold u-textNormal lineHeight--lg28 lineHeight--xs24">
                    5G
                  </div>
                  <div class="u-text--16 u-textRegular u-letterSpacing--05 lineHeight--20">
                    Reliable 5G performance.
<br aria-hidden="true"><br aria-hidden="true">Get unlimited access to our 5G network. When combined with 5G Ultra Wideband, you’ll get our fastest performance. When network is experiencing heavy traffic, your data may be temporarily slowed.
<br aria-hidden="true"><br aria-hidden="true">5G available in 2,700+ cities. Requires a 5G-capable device inside the 5G coverage area.
                  </div>
  
                </div>

              
            

            


          </div>

          <div class="Modal-footer u-paddingTop--24 "> 
            <div class="modal-btn-group">
                <button class="Button modal-btn modal-btn-primary Modal-close-full-btn Button--primary u-width--xs100" data-dismiss="modal" aria-hidden="false" data-impression-category="Mobile Plan BYOD">Close</button>
            </div>
        </div>

      
      </div>
  </div>
</div>

 


</div>
</div>


    
    
    <div class="html">
  
    

  


  <style>.price-guarantee li {
    color: #000 !important;
}
[data-cmp=vzrf-plans-teaser] .price-guarantee {
    width: 220px;
}</style>
  
  
</div>


    
    
    <div class="html">
  
    

  


  <style>#start-your-plan .teaser-item .teaser-logo-section .teaser-logo {
    align-items: start;
}

@media (max-width: 767px) {
#start-your-plan .plan-description {
    font-size: 10px;
  }
}</style>
  
  
</div>



  </div>

    
  </section>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md64 u-paddingTop--lg64">
</div></div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="e-sim-section">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" style="--height--xs:890px;--height--md:auto;--height--lg:auto;" class="Grid lozad u-colorBackgroundPrimary        u-paddingTop--xs32 u-paddingRight--xs0 u-paddingBottom--xs32 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg96 u-paddingRight--lg0 u-paddingBottom--lg52 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg ">

    
      
  
  

  
    
  
    
  
    
  
    
  
    
  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg20">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Connecting your
<br class="u-hideForMediumUp" aria-hidden="true">device has
<br class="u-showForMediumUp" aria-hidden="true">never
<br class="u-hideForMediumUp" aria-hidden="true">been simpler.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="u-textCenter">






</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs20 u-marginBottom--lg64">
    <p class="u-fontDisplay u-textLineHeightTight  u-text--xs16 u-text--md18 u-text--lg20 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        It's quick and easy to activate your device.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md3 Col--lg3  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  
          <div class="evolv-esim-tile-icon u-marginBottom--xs16 u-marginBottom--lg20">
       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
  <path d="M35.45 4.50002H10.125V49.5H43.875V12.95L35.45 4.50002ZM41.075 46.7H12.95V7.32502H34.275L41.075 14.1V46.7ZM21.65 20.45C21.0548 20.45 20.4655 20.568 19.9163 20.7973C19.367 21.0265 18.8687 21.3625 18.4502 21.7857C18.0317 22.2088 17.7013 22.7108 17.4781 23.2626C17.2549 23.8143 17.1434 24.4049 17.15 25V39C17.1566 40.1891 17.6336 41.3273 18.4768 42.1658C19.32 43.0044 20.4608 43.475 21.65 43.475H32.35C33.5392 43.475 34.68 43.0044 35.5232 42.1658C36.3664 41.3273 36.8434 40.1891 36.85 39V25C36.8434 23.8109 36.3664 22.6727 35.5232 21.8342C34.68 20.9957 33.5392 20.525 32.35 20.525L21.65 20.45ZM34.025 25V39C34.025 39.4442 33.8485 39.8703 33.5344 40.1844C33.2203 40.4985 32.7942 40.675 32.35 40.675H31.275V35H28.45V40.575H25.55V35H22.725V40.575H21.65C21.2144 40.5686 20.7985 40.3926 20.4904 40.0846C20.1824 39.7766 20.0065 39.3606 20 38.925V25C20 24.5558 20.1765 24.1297 20.4906 23.8156C20.8047 23.5015 21.2308 23.325 21.675 23.325H22.75V28.75H25.575V23.25H28.5V28.675H31.3V23.25H32.375C32.5993 23.2531 32.8207 23.3013 33.026 23.3916C33.2314 23.4819 33.4165 23.6126 33.5704 23.7758C33.7243 23.939 33.8438 24.1315 33.9219 24.3418C34 24.5521 34.0351 24.7759 34.025 25Z" fill="white"></path>
</svg>
        </div>
  
</div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg36">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs20 u-text--md u-text--lg16 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Whether your device has a
<br aria-hidden="true">physical SIM or eSIM, you
<br class="u-showForMediumUp" aria-hidden="true">can
<br class="u-showForMediumDown" aria-hidden="true"> activate with ease.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md3 Col--lg3 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  
          <div class="evolv-esim-tile-icon u-marginBottom--xs16 u-marginBottom--lg20">
      <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
  <path d="M22.3622 31.1005H24.6877L25.3136 27.2322H27.6152L26.9893 31.1005H29.3147L29.9407 27.2322H31.9986L32.468 24.4154H30.4102L30.7686 22.1791H32.8486L33.3398 19.3623H31.2382L31.8423 15.7614H29.5169L28.9127 19.3623H26.6091L27.2132 15.7614H24.8877L24.2835 19.3623H22.2274L21.7361 22.1791H23.8142L23.4574 24.4154H21.3995L20.9083 27.2322H22.9881L22.3622 31.1005ZM26.1397 22.1791H28.4433L28.0847 24.4154H25.7829L26.1397 22.1791ZM14.3984 4.5V49.5H39.602V4.5H14.3984ZM36.7895 46.6875H17.2109V41.6621H24.3647V44.4038H29.6369V41.6621H36.7894L36.7895 46.6875ZM36.7895 10.5929V38.8496H17.2109V7.3125H36.7895V10.5929Z" fill="white"></path>
</svg>
        </div>
  
</div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg36">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs20 u-text--md u-text--lg16 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Keep your current
<br class="u-showForMediumUp" aria-hidden="true">number or get
<br class="u-showForMediumDown" aria-hidden="true">a brand-
<br class="u-showForMediumUp" aria-hidden="true">new one. It’s your call.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md3 Col--lg3 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  
   <div class="evolv-esim-tile-icon u-marginBottom--xs16 u-marginBottom--lg20">
       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
  <path d="M39.0071 21.9612C36.2601 19.0026 32.5173 17.1624 28.4969 16.7937V15.6334C29.8565 15.3447 31.061 14.5627 31.8782 13.4384C32.6954 12.3141 33.0674 10.927 32.9223 9.54464C32.7773 8.16229 32.1256 6.8826 31.0928 5.95235C30.0601 5.0221 28.7195 4.5072 27.3296 4.50693C25.9396 4.50666 24.5988 5.02105 23.5657 5.9509C22.5326 6.88075 21.8804 8.16019 21.7348 9.54249C21.5893 10.9248 21.9607 12.312 22.7774 13.4367C23.5942 14.5613 24.7985 15.3437 26.158 15.6329V16.7592C23.2699 16.8975 20.4706 17.802 18.0476 19.3797V19.3795L16.8476 17.8413L18.3357 16.6814L16.6194 14.4807L11.4436 18.5167L13.1586 20.7175L14.6478 19.557L15.8527 21.1027C13.478 23.3076 11.8105 26.1671 11.061 29.3196C10.3115 32.4722 10.5136 35.7762 11.6419 38.8138C12.7702 41.8515 14.7739 44.4864 17.3996 46.3852C20.0254 48.2841 23.1553 49.3617 26.3935 49.4818C29.6317 49.6019 32.8327 48.759 35.5919 47.0598C38.3511 45.3606 40.5444 42.8814 41.8946 39.9357C43.2447 36.9899 43.691 33.7099 43.1771 30.5105C42.6631 27.3111 41.2119 24.336 39.0071 21.9613V21.9612ZM24.0437 10.1345C24.0399 9.53501 24.2003 8.9459 24.5075 8.43107C24.8147 7.91624 25.257 7.49533 25.7864 7.21399C26.3158 6.93264 26.9121 6.80159 27.5107 6.83505C28.1093 6.86851 28.6873 7.0652 29.182 7.40379C29.6767 7.74238 30.0694 8.20996 30.3173 8.75582C30.5652 9.30168 30.6589 9.90499 30.5883 10.5003C30.5177 11.0957 30.2855 11.6603 29.9168 12.1331C29.5481 12.6058 29.0571 12.9686 28.4969 13.1821V10.378H26.1581V13.182C25.5385 12.9478 25.0047 12.5311 24.6271 11.987C24.2496 11.4428 24.0462 10.7968 24.0437 10.1345V10.1345ZM26.9881 46.7204C24.297 46.7205 21.6662 45.9226 19.4286 44.4276C17.191 42.9326 15.4469 40.8076 14.417 38.3214C13.387 35.8351 13.1175 33.0993 13.6424 30.4599C14.1673 27.8205 15.4631 25.396 17.366 23.493C19.2688 21.59 21.6932 20.2941 24.3326 19.769C26.972 19.2439 29.7079 19.5132 32.1942 20.543C34.6805 21.5728 36.8056 23.3167 38.3007 25.5542C39.7959 27.7918 40.594 30.4224 40.5941 33.1136V33.1139C40.5901 36.7212 39.1554 40.1798 36.6047 42.7306C34.0539 45.2815 30.5955 46.7164 26.9881 46.7204ZM34.6013 26.1014L36.198 28.3899L27.7867 34.2581L26.1901 31.9695L34.6013 26.1014Z" fill="white"></path>
</svg>
 </div>
  
</div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg32">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs20 u-text--md u-text--lg16 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Add another line or
<br class="u-showForMediumUp" aria-hidden="true">transfer your
<br class="u-showForMediumDown" aria-hidden="true">service
<br class="u-showForMediumUp" aria-hidden="true">super-fast.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md3 Col--lg3  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  
   <div class="evolv-esim-tile-icon u-marginBottom--xs16 u-marginBottom--lg20">
       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
  <path d="M4.5 49.5H27V15.75H4.5V49.5ZM7.325 18.575H24.2V39.65H7.325V18.575ZM7.325 42.475H12.95V45.275H18.575V42.5H24.2V46.725H7.325V42.475ZM38.4 24.025H35.6C35.6 22.5375 35.0108 21.1105 33.9613 20.0564C32.9118 19.0022 31.4875 18.4066 30 18.4V15.6C32.2301 15.6066 34.3666 16.4972 35.9412 18.0765C37.5158 19.6557 38.4 21.7949 38.4 24.025ZM44.025 24.025H41.225C41.2184 21.0477 40.0345 18.1938 37.9315 16.0861C35.8286 13.9785 32.9773 12.7882 30 12.775V10C33.7176 10.0066 37.2811 11.4864 39.9099 14.1151C42.5386 16.7439 44.0184 20.3074 44.025 24.025ZM49.5 24.025H46.7C46.7 21.8319 46.268 19.6603 45.4288 17.6342C44.5895 15.6081 43.3594 13.7671 41.8087 12.2163C40.2579 10.6656 38.4169 9.43548 36.3908 8.59623C34.3647 7.75697 32.1931 7.32502 30 7.32502V4.50002C35.1697 4.50663 40.1257 6.56321 43.7813 10.2187C47.4368 13.8743 49.4934 18.8303 49.5 24V24.025Z" fill="white"></path>
</svg>
 </div>
  
</div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs36 u-marginBottom--lg32">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs20 u-text--md u-text--lg16 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Activate your device
<br class="u-showForMediumUp" aria-hidden="true">hassle-free.
<br class="u-showForMediumDown" aria-hidden="true">All you
<br class="u-showForMediumUp" aria-hidden="true">need is Wi-Fi.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  <style>#e-sim-section {
background : #000000;
}</style>
   <div class="customer-ctas-wrapper">
        <a class="u-fontDisplay build-ctas Button Button--inverse u-textBreakNoWrap modal-CTA u-marginAll--xs0 customer-contents" href="/bring-your-own-device/sales/digital/byod.html/" style="display: none; opacity: 0; z-index: -1;">Get started</a>
        <button class="u-fontDisplay build-ctas Button Button--inverse  u-textBreakNoWrap modal-CTA u-marginBottom--xs0  u-marginBottom--md36 u-marginTop--md24 prospect-contents" data-modal="customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p1||||||Connecting your device has never been simpler.|Get started&quot;}">Get started</button>
    </div>
  
</div>


</div>



        </div>
      
    
  

    
  </div>
</div>


    
    
    <div class="html">
  
    

  


  
  
  
</div>



  </div>

    
  </section>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md64 u-paddingTop--lg64">
</div></div>
<div class="experienceFragment experiencefragment aem-GridColumn aem-GridColumn--default--12">

    
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="easy-steps">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="spacer">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs76 u-paddingTop--lg128">
</div></div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs38 u-marginBottom--lg64">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Three easy steps and you’re set.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="grid">








  <div data-height-css="" style="--height--xs:auto;--height--md:auto;--height--lg:auto;" class="Grid lozad u-colorBackgroundPrimary        u-paddingTop--xs16 u-paddingRight--xs0 u-paddingBottom--xs16 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg20 u-paddingRight--lg0 u-paddingBottom--lg20 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg ">

    
      
  
  

  
    
  
    
  
    
  
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg40">
    <p class="u-fontDisplay u-textLineHeightTight  u-text--xs32 u-text--md u-text--lg40 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        1

      
    </p>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg20">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Tell us which device you’re bringing and if
<br aria-hidden="true">you want to bring your number along too.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg40">
    <p class="u-fontDisplay u-textLineHeightTight  u-text--xs32 u-text--md u-text--lg40 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        2

      
    </p>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg20">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Shop for a new mobile plan or add a  line to an&nbsp;existing account. Either way, we have prices you’ll love.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs24 u-marginBottom--lg40">
    <p class="u-fontDisplay u-textLineHeightTight  u-text--xs32 u-text--md u-text--lg40 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        3

      
    </p>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorSecondary u-marginBottom--xs16 u-marginBottom--lg20">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Activate your eSIM or physical SIM card with Wi-Fi.
<br aria-hidden="true">It’s hassle-free.

      
    </p>
    
  </div>


</div>



        </div>
      
    
  

    
  </div>
</div>


    
    
    <div class="u-textCenter">






</div>


    
    
    <div class="u-textCenter">






    
    
    <div class="html">
  
    

  


  <style>.build-ctas {
    outline-color: #fff !important;
}</style>
   <div class="customer-ctas-wrapper">
<a class="u-fontDisplay build-ctas Button Button--inverse u-textBreakNoWrap modal-CTA u-marginBottom--xs48  u-marginBottom--md96 customer-contents" href="/bring-your-own-device/sales/digital/byod.html/" style="display: none; opacity: 0; z-index: -1;">Get started</a>
        <button class="u-fontDisplay build-ctas Button Button--inverse  u-textBreakNoWrap modal-CTA u-marginBottom--xs48  u-marginBottom--md96 u-marginTop--md24 prospect-contents" data-modal="customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p1|||||||Get started&quot;}">Get started</button>
    </div>
  
</div>


</div>


    
    
    <div class="html">
  
    

  


  <style>#easy-steps {
background : #000000;
}

#easy-steps1 {
background : #000000;
}</style>
  
  
</div>



  </div>

    
  </section>
</div>

    
</div>
</div>

    
</div>


    

</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs64 u-paddingTop--md36 u-paddingTop--lg64">
</div></div>
<div class="deviceCompatability aem-GridColumn aem-GridColumn--default--12">


<section class="u-fontDisplay u-positionRelative" data-cmp="vzrf-device-compatability" id="imei-component" data-enablecustomermodal="false">
    <div class="Container imei-section-container u-paddingAll--md0" id="check-device-compatability">
      <div class="height--xs484 height--md388 u-colorBackgroundGray--1 u-borderRadius--12" style="height: 388px;">
        <div class="Grid imei-container-div  u-paddingY--xs32 u-paddingY--md48 u-flexAlignContentStart--xs u-flexAlignContentStart--md">
          <div class="Col Col--xs12 Col--md1 Col--lg2"></div>
            <div class="Col Col--xs12 Col--md10 Col--lg8 u-paddingX--xs16 u-paddingX--md0 u-paddingY--xs0 u-textCenter">
              
                <div id="" class="u-paddingX--xs16 u-paddingX--md0">
                    <h2 class="u-fontDisplayLight u-text--xs40 u-text--md48 u-textLineHeight-xs40 u-textLineHeight-md48 u-marginBottom--16 u-textBold ">
                      Let’s make sure your device is compatible.
                    </h2>
                    <p class="u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12  u-marginBottom--xs40 u-marginBottom--md32 u-textLineHeightNormal u-textLineHeight-md24">
                      Enter your IMEI number to confirm your device’s compatibility with the Verizon network.
                    </p>
                    <div class="u-marginBottom--40">
                      <div class="Grid">
                        <div class="Col Col--xs12 Col--md2 Col--lg2"></div>
                        <div class="Col Col--xs12 Col--md5 Col--lg5 u-textLeft">
                          <label class="u-marginBottom--4 u-text--12 u-textLineHeight-md16  u-fontDisplayLight" for="device-compatability-check__imei">
                            Enter your 15-digit IMEI number 
                          </label>
                          <div class="imei-container u-positionRelative  u-marginTop--4">
                              <input class="DeviceCompatability-Form-input u-marginBottom--8 u-width100 height--xs44 form-input-field-validation" placeholder="" autocomplete="off" id="device-compatability-check__imei" name="imei" type="text" aria-label="Enter your 15-digit IMEI number" value="" maxlength="15" required="" style="height: 44px;">
                              <span class="action-indicator u-positionAbsolute"></span>
                          </div>
                          <p class="custom-message u-text--12 u-textLineHeight-md16" hidden=""></p>
                          <p id="alert-message" class="enter-valid-imei u-text--12 u-textLineHeight-md16" role="alert" hidden=""></p>
                          
                        </div>
                        <div class="Col Col--xs12 Col--md3 Col--lg3 u-paddingX--md0">
                          <button id="device-compatability__submit" class="device-compatability-cta device-compatabilityn-check__submit u-textCenter Button u-width75 height--md44 Button--primary u-paddingAll--md0 u-marginAll--0 u-marginTop--16" type="button" title="Check device" style="height: 44px;">
                          Check device
                          </button>
                        </div>
                        <div class="Col Col--xs12 Col--md1 Col--lg2"> </div>
                      </div>                      
                    </div>

                    <a role="button" data-modal="imei-device-instructions-modal" class="Button Button--cta Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                      Where is your IMEI? 
                    </a>
                </div>
            </div>
            <div class="Col Col--xs12 Col--md1 Col--lg2"></div>
        </div>
      </div>
    </div>
    <!-- esim only /psim only / esim-psim both -->
    <div class="Container esim-psim-container u-positionRelative taggingEnabled u-paddingX--md0" aria-hidden="true" id="esim-psim-container" tabindex="-1" hidden="" aria-label="Great news! Your device is compatible with the Verizon network.">
      <div class="height--xs544 height--md630 height--lg530 u-colorBackgroundGray--1 u-borderRadius--12" style="height: 530px;">
        <h2 class="taggingEnabled" hidden="" aria-hidden="true">
          Great news! Your device is compatible with the Verizon network.
         </h2>
        <button aria-label="close section" class="epsim-close u-marginBottom--12" aria-hidden="false" data-tag-position="1"></button>
        <div class="Grid  height--xs544 height--md630 height--lg530 u-paddingY--xs32 u-positionRelative u-paddingY--md48 u-flexAlignContentStart--xs u-flexAlignContentCenter--md" style="height: 530px;">
          <div class="Col Col--xs12 Col--md1 Col--lg1"></div>
            <div class="Col Col--xs12 Col--md5 Col--lg5  u-paddingY--md0 sim-copy-container">
              
                <div id="" class="u-paddingX--xs16 u-paddingX--md0">
                    <h2 class="u-fontDisplayLight u-text--xs24 u-text--md48 u-textLineHeight-xs28  u-textLineHeight-md48 u-marginBottom--24 u-textBold u-marginTop--xs40 u-marginTop--md0 ">
                     Great news! Your device is compatible with the Verizon network.
                    </h2>
 

                    <div class="u-marginBottom--xs20 u-marginBottom--md40 epsim-cta taggingEnabled" hidden="">

                      <p class="u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12 u-marginBottom--xs12 u-marginBottom--md24 u-textLineHeightNormal u-textLineHeight-md24">
                        You can use your device immediately without waiting for a physical SIM card.
                      </p>

                      <button role="button" data-tag-position="2" data-modal="new-existing-customer-modal" class="device-compatability-cta  esimcta Button new-existing-customer-cta u-paddingX--24  u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20">
                        Activate device
                      </button>
                      <button role="button" data-tag-position="3" data-modal="new-existing-customer-modal" class="device-compatability-cta  psimcta Button new-existing-customer-cta u-paddingX--24 Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20">
                        Wait for SIM card
                      </button>
                    
                    </div>
                    
                    <div class="u-marginTop--8 psim-cta esim-cta taggingEnabled" hidden="">
                      <button role="button" data-tag-position="2" data-modal="new-existing-customer-modal" class="device-compatability-cta  Button new-existing-customer-cta  u-paddingX--24 u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20">
                        Bring this device
                      </button>
                      <a role="button" data-tag-position="3" class="device-compatability-cta  go-backto-imei Button Button  u-paddingX--24  Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                        Check another device
                      </a>
                    
                    </div>
                </div>
            </div>
            <div class="Col Col--xs12 Col--md5 Col--lg5 ">
              <div class="device-image u-textxsLeft u-textCenter u-paddingX--xs16 u-paddingX--md0">

              </div>
            </div>
            <div class="Col Col--xs12 Col--md1 Col--lg1"></div>
        </div>
      </div>
    </div>


    <!-- Error Scenarios - locked -->
    <div class="Container error-scenarios-container u-positionRelative taggingEnabled" aria-hidden="true" tabindex="-1" id="error-scenarios-container" hidden="" aria-label="Error Scenarios">
      <div class="height--xs484 height--md530 u-colorBackgroundGray--1 u-borderRadius--12" style="height: 530px;">
        <h2 class="taggingEnabled" hidden="" aria-hidden="true">
          something went wrong.
         </h2>
        <button aria-label="close section" class="epsim-close" aria-hidden="false" data-tag-position="1"></button>
        <div class="Grid  u-textCenter  u-paddingY--xs32 height--xs484 height--md530 u-paddingY--md48 u-flexAlignContentCenter--xs u-flexAlignContentCenter--md" style="height: 530px;">
          <div class="Col Col--xs12 Col--md2 Col--lg2"></div>
            <div class="Col Col--xs12 Col--md8 Col--lg8  u-paddingY--xs0 ">
              <!-- locked section -->
                <div id="error-locked-div" class="error-div u-paddingX--xs16 u-paddingX--md0 taggingEnabled u-paddingX--xs16 u-paddingX--md0" hidden="">
                    <h2 class="u-fontDisplayLight u-text--xs24 u-text--md48 u-textLineHeight-xs28 u-textLineHeight-md48 u-marginBottom--24 u-textBold ">
                      We're sorry, this device is locked by another carrier.
                    </h2>

                      <p class="u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12 u-marginBottom--32 u-textLineHeightNormal u-textLineHeight-md24">
                        You can shop for a new one or try again with another device.
                      </p>

                      <a role="button" data-tag-position="2" class="device-compatability-cta  Button u-paddingX--24  u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="/bring-your-own-device/shop/online/free-cell-phones/">
                        Shop free phones
                      </a>
                      <a role="button" data-tag-position="3" class="device-compatability-cta  go-backto-imei Button u-paddingX--24 Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                        Check another device
                      </a>
                </div>

                <!-- lost/stolen section -->
                <div id="error-stolen-div" hidden="" class="error-div taggingEnabled u-paddingX--xs16 u-paddingX--md0">
                  <h2 class="u-fontDisplayLight u-text--xs24 u-text--md48 u-textLineHeight-md48 u-marginBottom--24 u-textBold ">
                    This device is on the Lost or Stolen list.
                  </h2>

                    <p class="u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12 u-marginBottom--32 u-textLineHeightNormal u-textLineHeight-md24">
                      Please contact Customer Service at (800) 922-0204.
                    </p>

                    <a role="button" data-tag-position="2" class="device-compatability-cta  Button u-paddingX--24  u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="/bring-your-own-device/shop/online/free-cell-phones/">
                      Shop free phones
                    </a>
                    <a role="button" data-tag-position="3" class="device-compatability-cta  go-backto-imei  Button u-paddingX--24 Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                      Check another device
                    </a>
                </div>

                <!-- Incompatible section -->
                <div id="error-incompatible-div" hidden="" class="error-div taggingEnabled u-paddingX--xs16 u-paddingX--md0">
                  <h2 class="u-fontDisplayLight u-text--xs24 u-text--md48 u-textLineHeight-md48 u-marginBottom--24 u-textBold ">
                    We're sorry, your device isn't compatible with our network.
                  </h2>

                    <p class="u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12 u-marginBottom--32 u-textLineHeightNormal u-textLineHeight-md24">
                      You can shop for a new one or try again with another device.
                    </p>

                    <a role="button" data-tag-position="2" class="device-compatability-cta  Button u-paddingX--24  u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="/bring-your-own-device/shop/online/free-cell-phones/">
                      Shop free phones
                    </a>
                    <a role="button" data-tag-position="3" class="device-compatability-cta  go-backto-imei  Button u-paddingX--24 Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                      Check another device
                    </a>
                </div>

                <!-- Generic error section -->
                <div id="error-generic-div" hidden="" class="error-div taggingEnabled u-paddingX--xs16 u-paddingX--md0">
                  <h2 class="u-fontDisplayLight u-text--xs16 u-text--md48 u-textLineHeight-md48 u-marginBottom--24 u-textBold ">
                    Something went wrong.
                  </h2>

                    <p class="error-generic-text u-fontDisplayLight u-text--xs16 u-text--md20 u-marginTop--12 u-marginBottom--32 u-textLineHeightNormal u-textLineHeight-md24">
                      Please contact Customer Service at (800) 922-0204.
                    </p>

                    <a role="button" data-tag-position="2" class="device-compatability-cta  Button u-paddingX--24  u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="/bring-your-own-device/shop/online/free-cell-phones/">
                      Shop free phones
                    </a>
                    <a role="button" data-tag-position="3" class="device-compatability-cta  go-backto-imei  Button u-paddingX--24 Button--secondary Button--transparent u-textBreakNoWrap review-cta u-text--xs16 u-text--md16 u-textLineHeight-md20" href="javascript:void(0)">
                      Check another device
                    </a>
                </div>
            </div>
            
            <div class="Col Col--xs12 Col--md1 Col--lg2"></div>
        </div>
      </div>
      
    </div>

    <div class="Modal-container taggingEnabled" id="new-existing-customer-modal">
      <div class="Modal-overlay is-active"></div>
      <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingAll--48">
          <button aria-label="close modal" class="Modal-close"></button>
          <div class="Modal-content  u-positionRelative">
              <h3 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing customer?
              </h3>
              <div class="btn-container">
                  <div>
                      <button role="button" class="u-fontDisplay Button u-text--16   u-textBreakNoWrap u-marginBottom--xs16 device-compatability-new-customer-btn" data-modal="zip-code-modal">
                          New Customer
                      </button>
                      <a id="existing-customer" role="button" href="" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn u-marginRight--0">
                      Existing Customer
                  </a>
                  </div>
                 
              </div>
          </div>
      </div>
    </div>

  <div class="Modal-container taggingEnabled" id="zip-code-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Zip code" class="Modal is-active cust-modal u-paddingAll--48">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28 u-positionRelative">
            <h3 class="u-fontDisplay u-textRegular  u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md32">
              Confirm your location
            </h3>
            <p class="u-fontDisplayLight u-text--xs16 u-text--md16 u-marginTop--12 u-marginBottom--32 u-textLineHeightNormal u-textLineHeight-md20">
              To give the most accurate information about wireless pricing, coverage, customer service, and offers near you, please enter your location below.
            </p>

            <div class=" u-textLeft">
              <label class="u-marginBottom--4 u-text--12 u-textLineHeight-md16  u-fontDisplayLight" for="device-compatability-check__zipcode">
                Enter ZIP Code
              </label>
              <div class="zipcode-container u-positionRelative  u-marginTop--4">
                  <input class="DeviceCompatability-Form-input u-marginBottom--8 u-width100 height--xs44 form-input-field-validation" placeholder="" autocomplete="off" id="device-compatability-check__zipcode" name="zipcode" type="text" value="30004" maxlength="5" required="" style="height: 44px;">
                  <span class="action-indicator u-positionAbsolute"></span>
              </div>
              <p class="custom-message-zipcode u-text--12 u-textLineHeight-md16" hidden=""></p>
              <p class="enter-valid-zipcode u-text--12 u-textLineHeight-md16" hidden="">Invalid Zipcode. Please try again.</p>

            </div>

            <div class="zipcode-btn-container  u-marginTop--32">
                <div>
                    <button id="zipcode-confirm-location" role="button" href="" class="u-fontDisplay Button  u-textBreakNoWrap u-marginBottom--xs16 zipcode-confirm-location">
                        Confirm location
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="Modal-container " id="imei-device-instructions-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Find the instructions for your device" class="Modal is-active imei-modal u-paddingAll--xs12 u-paddingAll--md48 u-borderRadius--8">
      <button aria-label="close modal" class="Modal-close"></button>
      <div class="Modal-content ">
        <h2 class="u-fontDisplay u-textBold u-fontDisplay u-colorPrimary u-text--xs24 u-text--lg32 u-textLineHeight-xs28 u-textLineHeight-md36 u-marginBottom--xs16 u-marginBottom--md32">
          How get your device IMEI number?
        </h2>
        <p class="u-letterSpacing--05 u-fontDisplayLight u-text--xs16 u-text--md16 u-marginTop--12 u-marginBottom--xs24 u-marginBottom--md32 u-textLineHeightNormal u-textLineHeight-md20">
          Find the instructions for your device
        </p>

        <div data-cmp="vzrf-tabs-panel">
          <div class="tab-panels tab-initialized" data-active-tab="1">
            <div class="Container no-shadow u-paddingX--xs0  ">
              <div class="Tabs  u-paddingY--xs0">
                <ul class="Tabs-list u-letterSpacing--05" role="tablist">
                <li role="none" class="Tab u-marginRight--24 is-active">
                  <button class="tab u-paddingTop--16 u-paddingBottom--10 u-paddingBottom--4 " role="tab" aria-selected="true" data-description="1 of 4" data-track="{&quot;type&quot;:&quot;tab&quot;,&quot;name&quot;:&quot;Phone&quot;,&quot;selector&quot;:&quot;#tab-panel-ltn07ybgy9y9ls84a&quot;}" aria-controls="tab-panel-ltn07ybgy9y9ls84a" id="tab-ltn07ybgy9y9ls84a">
                    Phone
                  </button>
                </li>
                <li role="none" class="Tab u-marginRight--24">
                  <button class="tab u-paddingTop--16 u-paddingBottom--10 u-paddingBottom--4 taggingEnabled" role="tab" aria-selected="false" data-description="2 of 4" data-track="{&quot;type&quot;:&quot;tab&quot;,&quot;name&quot;:&quot;Tablet&quot;,&quot;selector&quot;:&quot;#tab-panel-ltn08fvqac9qxbkl0wu&quot;}" aria-controls="tab-panel-ltn08fvqac9qxbkl0wu" id="tab-ltn08fvqac9qxbkl0wu" tabindex="-1">
                    Tablet
                  </button>
                </li>
                <li role="none" class="Tab u-marginRight--24">
                  <button class="tab u-paddingTop--16 u-paddingBottom--10 u-paddingBottom--4 taggingEnabled" role="tab" aria-selected="false" data-description="3 of 4" data-track="{&quot;type&quot;:&quot;tab&quot;,&quot;name&quot;:&quot;Watch&quot;,&quot;selector&quot;:&quot;#tab-panel-ltn08rxqrdt0tkqy83p&quot;}" aria-controls="tab-panel-ltn08rxqrdt0tkqy83p" id="tab-ltn08rxqrdt0tkqy83p" tabindex="-1">
                    Watch
                  </button>
                </li>
                <li role="none" class="Tab u-marginRight--24">
                  <button class="tab u-paddingTop--16 u-paddingBottom--10 u-paddingBottom--4 taggingEnabled" role="tab" aria-selected="false" data-description="4 of 4" data-track="{&quot;type&quot;:&quot;tab&quot;,&quot;name&quot;:&quot;Other devices&quot;,&quot;selector&quot;:&quot;#tab-panel-ltn090jds2ka35keq7&quot;}" aria-controls="tab-panel-ltn090jds2ka35keq7" id="tab-ltn090jds2ka35keq7" tabindex="-1">
                    Other devices
                  </button>
                </li>
                </ul>
              </div>
            </div>
            <div>
              <div class="Container no-shadow u-paddingTop--xs32 u-paddingTop--md32 u-paddingX--xs0  ">
                <div class="tabpanel-wrapper">
                  <div role="tabpanel" id="tab-panel-ltn07ybgy9y9ls84a" tabindex="-1">
                    <!-- Phone -->
                    <div class="device-section-modal u-colorBackgroundGray--1 u-paddingAll--24 u-textCenter u-borderRadius--8 u-marginBottom--xs16 u-marginBottom--md32">
                      <span tabindex="0" class="u-screenReaderOnly">Phone tab  1 of 4</span>
                      <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Apple devices</h3>
                      <video preload="auto" class="height--xs489 height--md637 u-borderRadius--16" controls="" poster="" aria-label="video for How to find your IMEI number on Apple Devices" style="height: 637px;">
                        <source src="https://ss7.vzw.com/is/content/VerizonWireless/Videos/ISO/Support/Non-Device%20Videos/Finding-IMEI-iOS.mp4">
                        Your browser does not support the video tag.
                      </video>
                     
                    </div>
                    <div class="device-section-modal u-colorBackgroundGray--1 u-paddingAll--24 u-textCenter u-borderRadius--8 u-marginBottom--xs16">

                      <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Android devices</h3>
                      
                      <video preload="auto" class="height--xs489 height--md637 u-borderRadius--16" controls="" poster="" aria-label="video for How to find your IMEI number on Android devices" style="height: 637px;">
                        <source src="https://ss7.vzw.com/is/content/VerizonWireless/Videos/ISO/Support/Non-Device%20Videos/Finding-IMEI-Android.mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                
                  </div>
                  <div role="tabpanel" id="tab-panel-ltn08fvqac9qxbkl0wu" tabindex="-1" hidden="" class="u-paddingX--md16 ">
                    
                    <!-- Tablet -->

                    <div class="tablet-section-modal u-colorBackgroundGray--1 u-paddingY--24 u-paddingX--12 u-textCenter u-borderRadius--8 u-marginBottom--xs16 u-marginBottom--md32">
                      <span tabindex="0" class="u-screenReaderOnly">Tablet tab  2 of 4</span>
                      <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Apple devices</h3>
                      

                      <div class="progress-bar-slider device-imei-carousel slick-initialized slick-slider carousel-mode" data-slick="{ &quot;touchThreshold&quot;: 500,  &quot;alignLastSlideRight&quot;: true, &quot;accessibility&quot;: false, &quot;mobileFirst&quot;:true, &quot;focusOnChange&quot;: false, &quot;infinite&quot;: false, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: true, &quot;prevArrow&quot;: &quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Previous\&quot;&gt;&lt;/button&gt;&quot;, &quot;nextArrow&quot;: &quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Next\&quot;&gt;&lt;/button&gt;&quot;, &quot;dots&quot;: false, &quot;autoplay&quot;: false, &quot;autoplaySpeed&quot;: 3000}" data-slick-a11y-exceptions="allow-multi-slide-tab-focus" aria-label="Carousel with 6 slides" aria-hidden="false" role="group"><button class="slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 slick-disabled" aria-label="Previous" aria-disabled="true" style=""></button><div class="slick-list draggable" role="none"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" aria-label="Slide 1 of 6 imei instructions tablet ios step 01 open settings" data-description="slide 1 of 6 imei instructions tablet ios step 01" style="width: 0px;"><div><div id="tablet-settings-tile-1" data-description="imei instructions tablet ios step 01" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        <img data-has-focus="true" class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-01-01252024/" aria-label="imei instructions tablet ios step 01 open settings" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">1. open Settings</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" aria-label="Slide 2 of 6 imei instructions tablet ios step 02" data-description="slide 2 of 6 imei instructions tablet ios step 02" style="width: 0px;"><div><div id="tablet-settings-tile-2" data-description="imei instructions tablet ios step 02" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-02-01252024/" aria-label="imei instructions tablet ios step 02" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">2. Select "General"</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" aria-label="Slide 3 of 6 imei instructions tablet ios step 03" data-description="slide 3 of 6 imei instructions tablet ios step 03" style="width: 0px;"><div><div id="tablet-settings-tile-3" data-description="imei instructions tablet ios step 03" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-03-01252024/" aria-label="imei instructions tablet ios step 03" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">3. Find your IMEI</h4>
                                        <p class="u-screenReaderOnly">Press and hold the number to copy it</p>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" aria-label="Slide 4 of 6 imei instructions tablet ios step 04" data-description="slide 4 of 6 imei instructions tablet ios step 04" style="width: 0px;"><div><div id="tablet-settings-tile-4" data-description="imei instructions tablet ios step 04" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class=" height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-04-01252024/" aria-label="imei instructions tablet ios step 04" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">4. Find your IMEI</h4>
                                        <p class="u-screenReaderOnly">Press and hold the number to copy it</p>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" aria-label="Slide 5 of 6 imei instructions tablet ios step 05" data-description="slide 5 of 6 imei instructions tablet ios step 05" style="width: 0px;"><div><div id="tablet-settings-tile-5" data-description="imei instructions tablet ios step 05" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-05-01252024/" aria-label="imei instructions tablet ios step 05" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">Or, dial *#06#</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" aria-label="Slide 6 of 6 imei instructions tablet ios step 06" data-description="slide 6 of 6 imei instructions tablet ios step 06" style="width: 0px;"><div><div id="tablet-settings-tile-6" data-description="imei instructions tablet ios step 06" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                        
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-06-01252024/" aria-label="imei instructions tablet ios step 06" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">Get your IMEI number</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" style="" aria-disabled="false"></button>
          <button data-progress-wrap-btn="" aria-hidden="true" class="progress-wrap-btn Button-noStyle progress-wrap progress-wrap-active" tabindex="-1">
            <div class="progress-bar">
              <div class="progress" style="width: 16.6667%; left: 0px;">
              </div>
            </div>
          </button>
      </div>
                    </div>
                    <div class="tablet-section-modal u-colorBackgroundGray--1 u-paddingY--24 u-paddingX--12 u-textCenter u-borderRadius--8 u-marginBottom--xs16 ">

                      <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Android devices</h3>
                      

                      <div class="progress-bar-slider device-imei-carousel slick-initialized slick-slider carousel-mode" data-slick="{ &quot;touchThreshold&quot;: 500,  &quot;alignLastSlideRight&quot;: true, &quot;accessibility&quot;: false, &quot;mobileFirst&quot;:true, &quot;focusOnChange&quot;: false, &quot;infinite&quot;: false, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: true, &quot;prevArrow&quot;: &quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Previous\&quot;&gt;&lt;/button&gt;&quot;, &quot;nextArrow&quot;: &quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Next\&quot;&gt;&lt;/button&gt;&quot;, &quot;dots&quot;: false, &quot;autoplay&quot;: false, &quot;autoplaySpeed&quot;: 3000}" data-slick-a11y-exceptions="allow-multi-slide-tab-focus" aria-label="Carousel with 5 slides" aria-hidden="false" role="group"><button class="slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 slick-disabled" aria-label="Previous" aria-disabled="true" style=""></button><div class="slick-list draggable" role="none"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" aria-label="Slide 1 of 5 imei instructions tablet andriod step 01" data-description="slide 1 of 5 1. open settings" style="width: 0px;"><div><div id="tablet-settings-androidtile-1" aria-label="imei instructions tablet andriod step 01" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                      
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-android-step-01-01252024/" aria-label="imei instructions tablet andriod step 01" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">1. open settings</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" aria-label="Slide 2 of 5 imei instructions tablet andriod step 02" data-description="slide 2 of 5 Select &quot;About Tablet&quot;" style="width: 0px;"><div><div id="tablet-settings-androidtile-2" aria-label="imei instructions tablet andriod step 02" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                  
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-android-step-02-01252024/" aria-label="imei instructions tablet andriod step 02" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">Select "About Tablet"</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" aria-label="Slide 3 of 5 imei instructions tablet andriod step 03" data-description="slide 3 of 5 3. Find your IMEI" style="width: 0px;"><div><div id="tablet-settings-androidtile-3" aria-label="imei instructions tablet andriod step 03" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                  
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-ios-step-03-01252024/" aria-label="imei instructions tablet andriod step 03" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">3. Find your IMEI</h4>
                                        <p class="u-screenReaderOnly">Press and hold the number to copy it</p>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" aria-label="Slide 4 of 5 imei instructions tablet andriod step 04" data-description="slide 4 of 5 Or, dial *#06#" style="width: 0px;"><div><div id="tablet-settings-androidtile-4" aria-label="imei instructions tablet andriod step 04" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class=" height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                   
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-android-step-04-01252024/" aria-label="imei instructions tablet andriod step 04" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">Or, dial *#06#</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" aria-label="Slide 5 of 5 imei instructions tablet andriod step 05" data-description="slide 5 of 5 Get your IMEI number" style="width: 0px;"><div><div id="tablet-settings-androidtile-5" aria-label="imei instructions tablet andriod step 05" class="tablet-setting-tile " style="width: 100%; display: inline-block;">
                            <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                                <div class="ios-tablet-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                    <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                     
                                        <img class="height--xs328 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-tablet-android-step-05-01252024/" aria-label="imei instructions tablet andriod step 05" data-has-focus="true" style="height: 328px;">
                                        <h4 class="u-screenReaderOnly">Get your IMEI number</h4>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" style="" aria-disabled="false"></button>
          <button data-progress-wrap-btn="" aria-hidden="true" class="progress-wrap-btn Button-noStyle progress-wrap progress-wrap-active" tabindex="-1">
            <div class="progress-bar">
              <div class="progress" style="width: 20%; left: 0px;">
              </div>
            </div>
          </button>
      </div>
                    </div>
                    
                
                  </div>
                  <div role="tabpanel" id="tab-panel-ltn08rxqrdt0tkqy83p" tabindex="-1" hidden="">

                  <!-- Watch -->

                  <div class="watch-section-modal u-colorBackgroundGray--1 u-paddingY--24 u-paddingX--12 u-textCenter u-borderRadius--8 u-marginBottom--xs16 u-marginBottom--md32">
                    <span tabindex="0" class="u-screenReaderOnly">Watch tab  3 of 4</span>
                    <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Apple devices</h3>
                    

                    <div class="progress-bar-slider device-imei-carousel slick-initialized slick-slider carousel-mode" data-slick="{ &quot;touchThreshold&quot;: 500,  &quot;alignLastSlideRight&quot;: true, &quot;accessibility&quot;: false, &quot;mobileFirst&quot;:true, &quot;focusOnChange&quot;: false, &quot;infinite&quot;: false, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: true, &quot;prevArrow&quot;: &quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Previous\&quot;&gt;&lt;/button&gt;&quot;, &quot;nextArrow&quot;: &quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Next\&quot;&gt;&lt;/button&gt;&quot;, &quot;dots&quot;: false, &quot;autoplay&quot;: false, &quot;autoplaySpeed&quot;: 3000}" data-slick-a11y-exceptions="allow-multi-slide-tab-focus" aria-label="Carousel with 5 slides" aria-hidden="false" role="group"><button class="slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 slick-disabled" aria-label="Previous" aria-disabled="true" style=""></button><div class="slick-list draggable" role="none"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" aria-label="Slide 1 of 5 imei instructions watch ios step 01" data-description="slide 1 of 5 1. open Apps Settings" style="width: 0px;"><div><div id="watch-settings-tile-1" aria-label="imei instructions watch ios step 01" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                  
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-ios-step-01-01252024/" aria-label="imei instructions watch ios step 01" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">1. open Apps Settings</h4>
                                      <p class="u-screenReaderOnly">Press the digital crown to access</p>

                                  </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" aria-label="Slide 2 of 5 imei instructions watch ios step 02" data-description="slide 2 of 5 2. open Apps Settings" style="width: 0px;"><div><div id="watch-settings-tile-2" aria-label="imei instructions watch ios step 02" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                             
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-ios-step-02-01252024/" aria-label="imei instructions watch ios step 02" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">2. open Apps Settings</h4>
                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" aria-label="Slide 3 of 5 imei instructions watch ios step 03" data-description="slide 3 of 5 3. Select &quot;General&quot;" style="width: 0px;"><div><div id="watch-settings-tile-3" aria-label="imei instructions watch ios step 03" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                           
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-ios-step-03-01252024/" aria-label="imei instructions watch ios step 03" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">3. Select "General"</h4>
                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" aria-label="Slide 4 of 5 imei instructions watch ios step 04" data-description="slide 4 of 5 4. Then , select &quot;About&quot;" style="width: 0px;"><div><div id="watch-settings-tile-4" aria-label="imei instructions watch ios step 04" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18 " style="height: 328px;">
                         
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-ios-step-04-01252024/" aria-label="imei instructions watch ios step 04" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">4. Then , select "About"</h4>
                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" aria-label="Slide 5 of 5 imei instructions watch ios step 05" data-description="slide 5 of 5 5. Find your IMEI" style="width: 0px;"><div><div id="watch-settings-tile-5" aria-label="imei instructions watch ios step 05" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328  u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                             
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-ios-step-05-01252024/" aria-label="imei instructions watch ios step 05" data-has-focus="true" style="height: 300px;">
                                        <h4 class="u-screenReaderOnly">5. Find your IMEI</h4>

                                      </div>
                              </div>
                          </div>
                      </div></div></div></div></div><button class="slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" style="" aria-disabled="false"></button>
          <button data-progress-wrap-btn="" aria-hidden="true" class="progress-wrap-btn Button-noStyle progress-wrap progress-wrap-active" tabindex="-1">
            <div class="progress-bar">
              <div class="progress" style="width: 20%; left: 0px;">
              </div>
            </div>
          </button>
      </div>
                  </div>
                  <div class="watch-section-modal u-colorBackgroundGray--1 u-paddingY--24 u-paddingX--12 u-textCenter u-borderRadius--8 u-marginBottom--xs16 ">

                    <h3 class="u-text--xs24 u-text--lg20 u-textLineHeight-md24">Android devices</h3>
                    

                    <div class="progress-bar-slider device-imei-carousel slick-initialized slick-slider carousel-mode" data-slick="{ &quot;touchThreshold&quot;: 500,  &quot;alignLastSlideRight&quot;: true, &quot;accessibility&quot;: false, &quot;mobileFirst&quot;:true, &quot;focusOnChange&quot;: false, &quot;infinite&quot;: false, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: true, &quot;prevArrow&quot;: &quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Previous\&quot;&gt;&lt;/button&gt;&quot;, &quot;nextArrow&quot;: &quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0\&quot; aria-label=\&quot;Next\&quot;&gt;&lt;/button&gt;&quot;, &quot;dots&quot;: false, &quot;autoplay&quot;: false, &quot;autoplaySpeed&quot;: 3000}" data-slick-a11y-exceptions="allow-multi-slide-tab-focus" aria-label="Carousel with 5 slides" aria-hidden="false" role="group"><button class="slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 slick-disabled" aria-label="Previous" aria-disabled="true" style=""></button><div class="slick-list draggable" role="none"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" aria-label="Slide 1 of 5 imei instructions watch Android step 01" data-description="slide 1 of 5 1. Open Settings" style="width: 0px;"><div><div id="watch-settings-androidtile-1" aria-label="imei instructions watch Android step 01" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                         
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-android-step-01-01252024/" aria-label="imei instructions watch Android step 01" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">1. Open Settings</h4>
                                    
                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" aria-label="Slide 2 of 5 imei instructions watch Android step 02" data-description="slide 2 of 5 2. Select &quot;About Watch&quot;" style="width: 0px;"><div><div id="watch-settings-androidtile-2" aria-label="imei instructions watch andriod step 02" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
               
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-android-step-02-01252024/" aria-label="imei instructions watch Android step 02" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">2. Select "About Watch"</h4>

                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" aria-label="Slide 3 of 5 imei instructions watch Android step 03" data-description="slide 3 of 5 3. Find your IMEI" style="width: 0px;"><div><div id="watch-settings-androidtile-3" aria-label="imei instructions watch andriod step 03" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                            
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-android-step-03-01252024/" aria-label="imei instructions watch Android step 03" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">3. Find your IMEI</h4>

                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" aria-label="Slide 4 of 5 imei instructions watch Android step 04" data-description="slide 4 of 5 Or, dial *#06#" style="width: 0px;"><div><div id="watch-settings-androidtile-4" aria-label="imei instructions watch andriod step 04" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0 ">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class=" height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                 
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-android-step-04-01252024/" aria-label="imei instructions watch Android step 04" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">Or, dial *#06#</h4>

                                    </div>
                              </div>
                          </div>
                      </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" aria-label="Slide 5 of 5 imei instructions watch Android step 05" data-description="slide 5 of 5 Get your IMEI number" style="width: 0px;"><div><div id="watch-settings-androidtile-5" aria-label="imei instructions watch andriod step 05" class="watch-setting-tile " style="width: 100%; display: inline-block;">
                          <div class="settings-container u-colorSecondary  u-paddingX--24 u-marginRight--xs0 u-marginLeft--xs0">
                              <div class="ios-watch-setting-container u-fontDisplayLight u-text--24 u-marginTop--16 u-lineHeight--xl24 u-lineHeight--xs18">
                                  <div class="height--xs328 height--md328 u-paddingAll--12 u-text--20 u-lineHeight--xl24 u-lineHeight--xs18" style="height: 328px;">
                                      
                                      <img class="height--xs300 u-displayInline" src="assets/ss7.vzw.com/is/image/VerizonWireless/imei-instructions-watch-android-step-05-01252024/" aria-label="imei instructions watch Android step 05" data-has-focus="true" style="height: 300px;">
                                      <h4 class="u-screenReaderOnly">Get your IMEI number</h4>

                                    </div>
                              </div>
                          </div>
                      </div></div></div></div></div><button class="slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" style="" aria-disabled="false"></button>
          <button data-progress-wrap-btn="" aria-hidden="true" class="progress-wrap-btn Button-noStyle progress-wrap progress-wrap-active" tabindex="-1">
            <div class="progress-bar">
              <div class="progress" style="width: 20%; left: 0px;">
              </div>
            </div>
          </button>
      </div>
                  </div>
                  </div>
                  <div role="tabpanel" id="tab-panel-ltn090jds2ka35keq7" tabindex="-1" hidden="">
                    <!-- Other devices -->

                    <div class="u-text--xs16 u-text--md16  u-textLineHeight-xs20 u-letterSpacing--05">
                      <span tabindex="0" class="u-screenReaderOnly">Other devices tab  4 of 4</span>
                      <p>
                        You can find the instructions to get your device IMEI these ways: 
                      </p>
                      <ul>

                        <li>
                          <span class="u-textBold">Settings:</span> Check Menu &gt; Settings &gt; About section of your device
<br aria-hidden="true"><br aria-hidden="true">
                        </li>
                        <li>
                          <span class="u-textBold">On battery:</span> If your device has a removable battery, you can usually find the IMEI number printed on a label beneath the battery.
<br aria-hidden="true"><br aria-hidden="true">
                        </li>
                        <li>
                          <span class="u-textBold">Ejectable SIM:</span> If your device has an ejectable SIM card tray, check for the IMEI or MEID number either at the top of the SIM card holder or along the side. 
                      It will be in printed in tiny letters.
<br aria-hidden="true"><br aria-hidden="true">
                        </li>
                        <li>
                          <span class="u-textBold">Original packaging:</span> If you ordered your device online, you can usually find the IMEI number at the bottom of the 
                      invoice or on the original packaging.
<br aria-hidden="true"><br aria-hidden="true">

                        </li>
                        <li>
                          <span class="u-textBold">Attached to the device:</span> The IMEI number is usually printed next to a barcode on a label attached directly to the device.
                        </li>
                      </ul>

                      </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="u-textCenter"> 
          <button class="Button Button--primary Modal-close-full-btn" aria-label="Close" aria-hidden="false">Close</button>

        </div>
      </div>
    </div>
  </div>
  <div class="Loader not-active" aria-live="assertive" role="alert" aria-lable="content is loading"> </div>
  
  
  <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/deviceCompatibility.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>



  <div class="u-screenReaderOnly alertTabPlaceholder" role="alert"></div>
</section></div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>[data-cmp=vzrf-device-compatability] .Modal-container .Modal {
    max-width: 560px !important;
}

@media screen and (min-width: 768px) {
   [data-cmp=vzrf-device-compatability] #new-existing-customer-modal .Modal.cust-modal .Modal-content {
        padding-right: 0px;

    }

    [data-cmp=vzrf-device-compatability] #new-existing-customer-modal .Modal.cust-modal .Modal-content .Button {
        display: inline-block !important;
        padding: .75em 1.5em;
        margin: 0 .625rem .625rem 0;
    }
} 

 #imei-component {
    display: none;
} </style>
  
  
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs32 u-paddingTop--md32 u-paddingTop--lg32">
</div></div>
<div class="accordion aem-GridColumn aem-GridColumn--default--12">




  
  

  
  













<section class="u-colorBackgroundSecondary u-colorPrimary">
  <div class="Container u-marginBottom--0">
    <div class="cmp-accordion Col Col--12 u-colorBackgroundSecondary u-colorPrimary" data-dynamic="https://www.verizon.com/support/spot/?tag=byod&amp;count=9&amp;intcmp=vzwdom">
      <h2 class="cmp-accordion-header u-textLeft u-textxsLeft u-fontDisplay u-textLineHeightTight u-text--40 u-text--md48 u-text--lg64 u-marginBottom--48">

        <span class="u-screenReaderOnly">
          Your BYOD Questions Answered.
        </span>
          <span aria-hidden="true">
            Your BYOD Questions Answered.
          </span>
      </h2>
      <div class="cmp-accordion-items u-colorPrimary">
        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I find my device ID or IMEI?
      </h3>
    </summary>
    <div>
        <p>To bring your device to Verizon, you need to know the Device ID (IMEI, MEID and/or ESN). Here's how to find your device ID:
<br aria-hidden="true">
<br aria-hidden="true">
Non-Verizon customers, on your device go to:</p>
<ul>
<li>Android: Settings &gt; About Phone</li>
<li>iOS: Settings &gt; General &gt; About</li>
<li>Basic phones: Tools &amp; Settings &gt; About Phone &gt; Status</li>
</ul>
<p>Verizon customers:</p>
<ul>
<li>Go to <a href="https://m.vzw.com/OoWc1by4" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p1||||||How do I find my device ID or IMEI?|My Devices&quot;}">My Devices</a> in My Verizon.</li>
<li>Tap or click <b>Manage Device</b> next to the device you want to view. Your Device ID and IMEI are listed under the Device Information section.</li>
</ul>
<p>Watch our <a href="/bring-your-own-device/support/find-device-id-video/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p2||||||How do I find my device ID or IMEI?|Finding your device ID video&quot;}">Finding your device ID video</a> for more options.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I bring my SIM or eSIM devices to Verizon?
      </h3>
    </summary>
    <div>
        <p>To BYOD, your device's SIM card or eSIM must be compatible with the Verizon mobile network. <a href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p3||||||How do I bring my SIM or eSIM devices to Verizon?|Check BYOD compatibility&quot;}">Check BYOD compatibility</a>.</p>
<ul>
<li>SIM cards: If the SIM card of the device you’re bringing isn’t compatible with the Verizon mobile network, you’ll need a new one. See <a href="/bring-your-own-device/support/4g-sim-card-faqs/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p4||||||How do I bring my SIM or eSIM devices to Verizon?|How do I get a new or replacement SIM card?&quot;}">How do I get a new or replacement SIM card?</a></li>
<li>eSIM devices: If your device has a built-in eSIM you can BYOD with the My Verizon app. Learn how: <a href="/bring-your-own-device/support/esim-activation-instructions/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p5||||||How do I bring my SIM or eSIM devices to Verizon?|How do I activate an eSIM device on a new Verizon line of service?&quot;}">How do I activate an eSIM device on a new Verizon line of service?</a></li>
</ul>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I bring devices to Verizon?
      </h3>
    </summary>
    <div>
        <p>To BYOD to Verizon from a third party seller, retailer, manufacturer, or from another carrier (e.g., T-Mobile, AT&amp;T, etc.) start at our <a href="/bring-your-own-device/bring-your-own-device/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p6||||||How do I bring devices to Verizon?|BYOD&quot;}">BYOD</a> page. There, you'll check your device's compatibility, set up your number, choose a plan and set up your payment method. Once that's done, use My Verizon to activate your device on our network.
<br aria-hidden="true">
<br aria-hidden="true">
Note: you must be the <a href="/bring-your-own-device/support/glossary/" class="popover" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p7||||||How do I bring devices to Verizon?|Account Owner&quot;}">Account Owner</a> or <a href="/bring-your-own-device/support/glossary/" class="popover" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p8||||||How do I bring devices to Verizon?|Account Manager&quot;}">Account Manager</a> to add a new line of service to an existing Verizon account. Learn about <a href="https://secure.verizon.com/account/roleInfo/start" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p9||||||How do I bring devices to Verizon?|account access roles&quot;}">account access roles</a>.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I add a new line of service for a device I’m bringing over to Verizon?
      </h3>
    </summary>
    <div>
        <p>If you're the <a href="/bring-your-own-device/support/glossary/" class="popover" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p10||||||How do I add a new line of service for a device I’m bringing over to Verizon?|Account Owner&quot;}">Account Owner</a> or <a href="/bring-your-own-device/support/glossary/" class="popover" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p11||||||How do I add a new line of service for a device I’m bringing over to Verizon?|Account Manager&quot;}">Account Manager</a>, you can <a href="https://m.vzw.com/m/lQpSZcl" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p12||||||How do I add a new line of service for a device I’m bringing over to Verizon?|add a line&quot;}">add a line</a> in My Verizon. Learn more about <a href="https://secure.verizon.com/account/roleInfo/start" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p13||||||How do I add a new line of service for a device I’m bringing over to Verizon?|account access roles&quot;}">account access roles</a>.
<br aria-hidden="true">
<br aria-hidden="true">
Note: For prepaid accounts, refer to our <a href="/bring-your-own-device/support/prepaid-family-account-faqs/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p14||||||How do I add a new line of service for a device I’m bringing over to Verizon?|Prepaid Family Account FAQs&quot;}">Prepaid Family Account FAQs</a> for instructions on adding a line.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Can I bring my own device from another phone company?
      </h3>
    </summary>
    <div>
        <p>Yes, if your device is compatible with the Verizon mobile network, you can bring it over from another carrier (e.g., AT&amp;T, T-Mobile, etc.). <a href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p15||||||Can I bring my own device from another phone company?|Check your device's compatibility&quot;}">Check your device's compatibility</a>.
<br aria-hidden="true">
<br aria-hidden="true">
Note: To check compatibility, you need the device ID. To find your device ID, on your device go to:</p>
<ul>
<li>Android: Settings &gt; About Phone</li>
<li>iOS: Settings &gt; General &gt; About</li>
<li>Basic phones: Tools &amp; Settings &gt; About Phone &gt; Status</li>
</ul>
<p>Watch <a href="/bring-your-own-device/support/find-device-id-video/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p16||||||Can I bring my own device from another phone company?|Finding your device ID video&quot;}">Finding your device ID video</a> for more options.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Can I bring an eSIM or Dual SIM device from another carrier to Verizon?
      </h3>
    </summary>
    <div>
        <p>Yes, when you bring an eSIM or dual SIM device from another carrier, keep in mind:</p>
<ul>
<li>Some carriers lock their devices. A locked device will only work on that carrier's network.</li>
<li>If your carrier has locked your device, you need to contact them to have them unlock the device (if eligible).</li>
<li>After the carrier has unlocked the device, it can take up to 24 hours before you can activate your device with Verizon.</li>
</ul>
<p>Learn how to <a href="/bring-your-own-device/support/esim-activation-instructions/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p17||||||Can I bring an eSIM or Dual SIM device from another carrier to Verizon?|activate eSIM on a new Verizon line of service&quot;}">activate eSIM on a new Verizon line of service</a>.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What devices can I bring to Verizon with BYOD?
      </h3>
    </summary>
    <div>
        <p>You can bring smartphones, tablets, and smartwatches that you bought from Verizon, a third-party seller (e.g., Best Buy, Amazon, etc.), another phone carrier (e.g., AT&amp;T, T-Mobile, etc.) or even a manufacturer. You can bring Apple®, Google, Samsung and other Android™ devices to Verizon.
<br aria-hidden="true">
<br aria-hidden="true">
To be eligible for BYOD to Verizon, your device must be unlocked and its hardware and software must be compatible with our mobile network. <a href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p18||||||What devices can I bring to Verizon with BYOD?|Check your device's compatibility&quot;}">Check your device's compatibility</a>.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Can I keep my phone number when I bring my own device?
      </h3>
    </summary>
    <div>
        <p>You may be able to bring your mobile number along when you bring your device to Verizon. Learn how at our <a href="/bring-your-own-device/support/local-number-portability-faqs/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p19||||||Can I keep my phone number when I bring my own device?|Bring your number to Verizon FAQs&quot;}">Bring your number to Verizon FAQs</a>.
<br aria-hidden="true">
<br aria-hidden="true">
Note: When you're bringing a phone number to Verizon, don't cancel your service with your other carrier until we've activated your new line.</p>

    </div>
  </details>

        
      </div>
    </div>
  </div>
</section></div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md48 u-paddingTop--lg64">
</div></div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>#footer-notes {
    border-top: 1px solid #d8dada;
}</style>
  <section id="footer-notes" class="u-paddingY--48">
  <div class="Container">
    <div class="u-text--11 u-fontText u-colorDarkGray u-textLineHeightNormal">
      1. <strong>Unlimited Ultimate:</strong> Unlimited mobile hotspot data: After 200 GB of Premium Data, Unlimited
      thereafter at 6 Mbps. <strong>Unlimited Plus:</strong> 30 GB mobile hotspot: After 30 GB on Unlimited Plus,
      Unlimited thereafter at 3 Mbps on 5G Ultra Wideband and 600 Kbps on 5G/4G LTE.
<br aria-hidden="true"><br aria-hidden="true">2. Unlimited talk, text and
      15 GB high-speed data per month, then unlimited thereafter at 1.5 mbps, when traveling in <a target="_blank" href="/bring-your-own-device/plans/international/international-travel/travel-pass/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l7|p1||||||Can I keep my phone number when I bring my own device?|210+ countries and destinations.&quot;}">210+ countries and destinations.</a>
    </div>
  </div>
</section>
  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  
  <vz-sticky-cmp style="--sticky-bottom: 0" data-triggers="[
{
  &quot;element&quot;: &quot;#started&quot;,
  &quot;animate&quot;: &quot;show&quot;
},
{
  &quot;element&quot;: &quot;#footer-notes &quot;,
  &quot;animate&quot;: &quot;hide&quot;
}
]" data-initialized="true" data-visibility="show" data-observer="{&quot;rootMargin&quot;:&quot;-166px 0px 0px 0px&quot;}">
  <section class="u-colorBackgroundStone u-paddingAll--16 u-flex u-flexJustifyCenter">
    <div class="cta-container">
      <div class="customer-ctas-wrapper">
        <a class="u-fontDisplay build-ctas Button Button--secondaryInverse u-textBreakNoWrap modal-CTA u-marginAll--xs0 customer-contents" href="/bring-your-own-device/sales/digital/byod.html/" style="display: none; opacity: 0; z-index: -1;">Get started</a>
        <button class="u-fontDisplay build-ctas Button Button--secondaryInverse u-textBreakNoWrap modal-CTA u-marginAll--xs0 prospect-contents" data-modal="customer-modal" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l8|p1||||||Can I keep my phone number when I bring my own device?|Get started&quot;}">Get started</button>
      </div>
    </div>
  </section>
</vz-sticky-cmp>
  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  
  
  <script>function cookied() {
    var loggedIn = getCookies("loggedIn");
    var myAccount = getCookies("myAccount");
    var params = window.location.href;
        if (params.indexOf("prospecttest") != -1) {
            var customerCookie = "false";
        } else if ( loggedIn == "true" || myAccount == "true" || params.indexOf("customertest") != -1 ) {
            var customerCookie = "true";
        } else {
            var customerCookie = "false";
        }
    let hideElements;

    if (customerCookie == "true") {
        hideElements = document.querySelectorAll('.cta-container .prospect-contents');
        document.querySelectorAll('.customer-ctas-wrapper .prospect-contents').forEach(el => {
        el.style.display = "none";
        el.style.opacity = "0";
        el.style.zIndex = "-1";
    });
    } else {
        hideElements = document.querySelectorAll('.cta-container .customer-contents');
                document.querySelectorAll('.customer-ctas-wrapper .customer-contents').forEach(el => {
        el.style.display = "none";
        el.style.opacity = "0";
        el.style.zIndex = "-1";
    });
    }

    hideElements.forEach(el => {
        el.style.display = "none";
        el.style.opacity = "0";
        el.style.zIndex = "-1";
    });
}

cookied();</script>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>.Modal {
    max-width: 1020px !important;
    width: auto;
    max-height: -webkit-calc(100% - 120px);
    max-height: -moz-calc(100% - 120px);
    max-height: calc(100% - 120px)
}

@media screen and (max-width:768px) {
    .Modal.cust-modal {
        margin-top: 140px;
        min-height: 85%;
        height: 85%;
        width: 100%
    }
}

@media screen and (max-width:768px) {
    .Modal.cust-modal .Modal-content {
        height: 100%
    }

    .Modal.cust-modal .Modal-content .existing-or-new {
        height: 75%;
        padding-top: 5%
    }

    .Modal.cust-modal .Modal-content .plan-btn-container {
        position: absolute;
        text-align: center;
        width: 90%;
        bottom: 5%
    }

    .Modal.cust-modal .Modal-content .Button {
        display: block;
        width: 100%;
        font-size: 14px !important
    }
}

@media screen and (max-width:544px) {
    .Modal.cust-modal .Modal-content .plan-btn-container {
        width: 92%
    }
}

@media screen and (min-width:768px) {
    .Modal.cust-modal .Modal-content {
        padding: 30px 80px 0 30px
    }

    .Modal.cust-modal .Modal-content .Button {
        display: inline-block
    }
}



.Modal .Button, .Modal a.Button {
    display: flex!important;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    padding: 0;
    width: 188px;
    height: 44px;
    font-size: 15px;
}</style>
  <div class="Modal-container" id="customer-modal">
    <div class="Modal-overlay is-active"></div>
    <div role="dialog" aria-expanded="false" aria-modal="true" aria-hidden="true" aria-labelledby="Customer Check" class="Modal is-active cust-modal u-paddingX--lg20">
        <button aria-label="close modal" class="Modal-close"></button>
        <div class="Modal-content u-paddingTop--xs28">
            <h2 class="u-fontDisplay existing-or-new u-fontDisplay u-textLineHeightExtraTight u-colorPrimary u-text--xs24 u-text--lg32 u-marginBottom--xs16 u-marginBottom--md24">
                Are you a new or existing
<br aria-hidden="true">
                Verizon mobile customer?
            </h2>
            <div class="plan-btn-container">
                <div>
                    <a role="button" href="/bring-your-own-device/nextgendigital/sales/configurator/byod/" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 new-customer-btn" id="lines-new-customer">
                        New Customer
                    </a>
                </div>
                <div>
                    <a id="existing-customer" role="button" href="https://secure.verizon.com/signin?goto=https://www.verizon.com/sales/digital/byod.html?_gl=1*1jfth8g*_ga*MTUzODA5MTIzMy4xNzQxODcxNjU2*_ga_12R1DX1LX7*MTc0MTg5MzIzMC41LjEuMTc0MTg5NTU1OS4zOC4wLjA" class="u-fontDisplay Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 existing-cust-btn">
                        Existing Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
  <script> (function () {
      try {
        const host = window.location.host;
        const splithost = host.split(".")[0];
        const btn = document.querySelector("#customer-modal #existing-customer");
        const regex = new RegExp(`(vzwqa)\\d`, "gm");
        if (regex.test(splithost) && splithost.match(/(\d.*)/)) {
          console.log()
          btn.href = `https://securesit${splithost.match(/(\d.*)/)[0]}.verizon.com/signin?goto=https%3A%2F%2Fvzwqa${splithost.match(/(\d.*)/)[0]}.verizonwireless.com%2Fsales%2Fdigital%2Fbyod.html`
          return
        }
      } catch (err) {
        console.log(err, "customer modal script")
      }
    })()</script>
</div>

  
</div><div class="u-screenReaderOnly alertPlaceholder" role="alert"></div></main>

<footer id="vz-gf20"><div class="xf-page-unified xfpage page basicpage">
<div class="gnav20 " data-exp-name="Master">
     <input type="hidden" id="cradle-context">
    <div class="gnav20-sticky-content">    	
     	




    
    
    <div class="gnav20-footercontainer">
<div class="gnav20-footer-container gnav20-white-focus gnav20-mobile-footer-accordion" data-gnav20-container="footer">
	<div class="gnav20-main-container">
		<div class="gnav20-footer-level-one">
			<div class="gnav20-footer-wrapper gnav20-four ">
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Shop</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Shop menu list">
					
						<li>
							<a href="/smartphones/">Devices</a>
						</li>
					
						<li>
							<a href="/products/">Accessories</a>
						</li>
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Top Device Brands</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Top Device Brands menu list">
					
						<li>
							<a href="/wireless-devices/samsung/">Samsung</a>
						</li>
					
						<li>
							<a href="/wireless-devices/apple/">Apple</a>
						</li>
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Support</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Support menu list">
					
						<li>
							<a href="/support/">Support overview</a>
						</li>
					
						<li>
							<a href="/support/return-policy/">Return policy</a>
						</li>
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">About Verizon</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="About Verizon menu list">
					
						<li>
							<a href="/about/">About us</a>
						</li>
					
						<li>
							<a href="https://mycareer.verizon.com/" target="_blank" rel="noopener noreferrer">Careers</a>
						</li>
					
						
					
						
					
						
					
						
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
			</div>
			<div class="gnav20-footer-wrapper gnav20-four">			
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Most Popular</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Most Popular menu list">
					
						<li>
							<a href="/smartphones/apple-iphone-17/">Apple iPhone 17</a>
						</li>
					
						<li>
							<a href="/smartphones/apple-iphone-17e/">Apple iPhone 17e</a>
						</li>
					
						
					
						
					
						
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Top Accessory Brands</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Top Accessory Brands menu list">
					
						<li>
							<a href="/products/otterbox/">Otterbox</a>
						</li>
					
						<li>
							<a href="/products/zagg/">ZAGG</a>
						</li>
					
						
					
						
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading"> Important Consumer Information</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label=" Important Consumer Information menu list">
					
						
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-socialfooter">
<div class="gnav20-hero-wrapper">
	<div class="gnav20-hero-footer-heading">Follow Verizon</div>
	<div class="gnav20-border-content gnav20-social-icon">
		<ul aria-label="Follow Verizon menu list">
			
			<li>
				<a class="gnav20-social-media" href="https://www.facebook.com/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Facebook" title="Opens New Window"><span>facebook-official</span><svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78"><path fill="#fff" d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"></path></svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://twitter.com/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Twitter" title="Opens New Window"><span>twitter</span><svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.youtube.com/user/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Youtube" title="Opens New Window"><span>you-tube</span><svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18.5 18" style="enable-background:new 0 0 18.5 18;" xml:space="preserve">
						<path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2
							s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4
							S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"></path>
					</svg></a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.instagram.com/verizon/" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Instagram" title="Opens New Window"><span>instagram</span><svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
						<g>
							<path fill="#FFF" d="M18,5.3c0-1-0.2-1.6-0.4-2.2c-0.2-0.6-0.5-1.1-1-1.6c-0.5-0.5-1-0.8-1.6-1c-0.6-0.2-1.2-0.4-2.2-0.4C11.8,0,11.4,0,9,0
								S6.3,0,5.3,0c-1,0-1.6,0.2-2.2,0.4C2.5,0.7,2,1,1.5,1.5s-0.8,1-1,1.6C0.3,3.7,0.1,4.3,0.1,5.3C0,6.2,0,6.6,0,9c0,2.4,0,2.8,0.1,3.7
								c0,1,0.2,1.6,0.4,2.2c0.2,0.6,0.5,1.1,1,1.6s1,0.8,1.6,1c0.6,0.2,1.2,0.4,2.2,0.4C6.3,18,6.6,18,9,18s2.8,0,3.7-0.1
								c1,0,1.6-0.2,2.2-0.4c0.6-0.2,1.1-0.5,1.6-1c0.5-0.5,0.8-1,1-1.6c0.2-0.6,0.4-1.2,0.4-2.2c0-1,0.1-1.3,0.1-3.7
								C18,6.6,18,6.2,18,5.3z M16.3,12.6c0,0.9-0.2,1.4-0.3,1.7c-0.2,0.4-0.4,0.7-0.7,1s-0.6,0.5-1,0.7c-0.3,0.1-0.8,0.3-1.7,0.3
								c-0.9,0-1.2,0.1-3.6,0.1s-2.7,0-3.6-0.1c-0.9,0-1.4-0.2-1.7-0.3c-0.4-0.2-0.7-0.4-1-0.7s-0.5-0.6-0.7-1c-0.1-0.3-0.3-0.8-0.3-1.7
								c0-0.9-0.1-1.2-0.1-3.6c0-2.4,0-2.7,0.1-3.6C1.7,4.5,1.9,4,2,3.7c0.2-0.4,0.4-0.7,0.7-1C3,2.3,3.3,2.1,3.7,2C4,1.9,4.5,1.7,5.4,1.7
								c0.9,0,1.2-0.1,3.6-0.1c2.4,0,2.7,0,3.6,0.1c0.9,0,1.4,0.2,1.7,0.3c0.4,0.2,0.7,0.4,1,0.7s0.5,0.6,0.7,1c0.1,0.3,0.3,0.8,0.3,1.7
								c0,0.9,0.1,1.2,0.1,3.6C16.4,11.4,16.4,11.7,16.3,12.6z"></path>
							<path fill="#FFF" d="M9,4.4C6.5,4.4,4.4,6.4,4.4,9c0,2.6,2.1,4.6,4.6,4.6s4.6-2.1,4.6-4.6C13.6,6.4,11.6,4.4,9,4.4z M9,12c-1.7,0-3-1.3-3-3
								c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3C12,10.7,10.7,12,9,12z"></path>
							<path fill="#FFF" d="M13.8,3.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1C14.9,3.6,14.4,3.1,13.8,3.1z"></path>
						</g>
					</svg></a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.tiktok.com/@verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on TikTok" title="Opens New Window"><span>TikTok</span><svg xmlns="http://www.w3.org/2000/svg" height="19" viewBox="0 0 16 18">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M9.2984 0.7758H11.5884C11.8091 1.9405 12.5165 2.9399 13.4965 3.5643L13.4975 3.5655C14.1797 4 14.9931 4.2535 15.8663 4.2535V4.934L15.8664 7.31C14.2444 7.31 12.7414 6.8029 11.5146 5.9423V12.1547C11.5146 15.2573 8.9319 17.7814 5.7572 17.7814C4.5305 17.7814 3.3929 17.4033 2.4578 16.7616L2.4562 16.76C0.9724 15.7412 0 14.0571 0 12.1541C0 9.0516 2.5827 6.5274 5.7574 6.5274C6.0208 6.5274 6.279 6.5486 6.5332 6.5823V7.3065L6.5331 9.7037C6.2875 9.6286 6.0279 9.5849 5.7572 9.5849C4.3074 9.5849 3.1279 10.7378 3.1279 12.1547C3.1279 13.1414 3.7007 13.9987 4.5376 14.4291C4.9025 14.6168 5.317 14.7244 5.7571 14.7244C7.1735 14.7244 8.3289 13.6233 8.3815 12.2514L8.3865 0H11.5145C11.5145 0.265 11.5407 0.524 11.5884 0.7758H9.2984Z" fill="#161823"></path>
					</svg></a>
			</li>
		</ul>
	</div>
</div>
</div>


    
    
    <div class="gnav20-socialfooter">
<div class="gnav20-hero-wrapper">
	<div class="gnav20-hero-footer-heading">Verizon Support</div>
	<div class="gnav20-border-content gnav20-social-icon">
		<ul aria-label="Verizon Support menu list">
			
			
			<li>
				<a class="gnav20-social-media" href="https://x.com/verizonsupport" target="_blank" rel="noopener noreferrer" aria-label="Verizon Support on Twitter" title="Opens New Window"><span>twitter</span><svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg></a>
			</li>
			
			
			
		</ul>
	</div>
</div>
</div>



				</div>
			</div>
		</div>
		<div class="gnav20-footer-level-two gnav20-custom-margin-left">
			




    
    
    <div class="gnav20-logo">

    
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        
        <a class="gnav20-logoBlackBg" title="Verizon Home Page" href="/"></a>
        
    </div>
</div>


    
    
    <div class="gnav20-footerlink">


	<ul aria-label="Policies and notices menu list" class="gnav20-footer-list ">
		<li>
			<a href="/about/privacy/">
				Privacy Policy
			</a>
		</li>
	
		<li>
			<a data-hide-for="appid:communitykh" href="/privacy/your-privacy-choices/">
				Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;"><svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#0066FF;}.st2{fill:#FFFFFF;}.st3{fill:#0066FF;}</style><g><g id="final---dec.11-2020_1_"><g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"><path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"></path></g></g></g><g id="final---dec.11-2020"><g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"><path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"></path><path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"></path><path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"></path></g></g></g></g></svg></a>
			</a>
		</li>
	
		<li class="gnav20-hide">
			<a data-show-for="appid:communitykh" href="https://community.verizon.com/t5/custom/page/page-id/yourprivacychoices">
				Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;"><svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#0066FF;}.st2{fill:#FFFFFF;}.st3{fill:#0066FF;}</style><g><g id="final---dec.11-2020_1_"><g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"><path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"></path></g></g></g><g id="final---dec.11-2020"><g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"><path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"></path><path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"></path><path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"></path></g></g></g></g></svg></a>
			</a>
		</li>
	
		
	
		<li>
			<a href="/about/our-company/open-internet/">
				Open Internet
			</a>
		</li>
	
		<li>
			<a href="/support/website-use-legal/">
				Website Terms of Use
			</a>
		</li>
	</ul>

	<div class="copyright-section">
		<div class="copyright-text">
			© <span id="copyright-year">2026</span> Verizon
		</div>
    <div id="visual-cue"><div></div><div></div><div></div></div></div>
</div>



		</div>
	</div>
</div>
</div>



     </div>
	<div class="gnav20-sticky-header  gnav20-with-promo"></div>
</div>



</div>
</footer>


<div class="gnav20-click-div"></div>

<script defer="">
  window.addEventListener("message", function (e) {
      if (e?.data?.app === "lpContainerStorage" || e?.data?.app === "askvzwebviewstorage") {
          window?.EchannelVera?.dcCTABtnReposition('56px');
          setTimeout(() => {
                    window?.EchannelVera?.dcCTABtnReposition('56px');
		  }, 4000)
        }
  })
</script>


  
  
  <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/tagging.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>




  

  

  
  
    <div class="Modal-container" id="abandonedCartModal" role="dialog"></div>
  
  
  
  
  
  

            

        
    

</body></html>