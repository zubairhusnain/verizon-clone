<?php
declare(strict_types=1);
require_once __DIR__ . '/../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="en-US"><!-- Global HEAD --><head>
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
</style><style id="offline-layout-fixes">
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
</style><base href="/verizon-clone/verizon_offline/">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=2.0">
	<title> Coverage Map: Verizon Home Internet &amp; Cell Phone By Address | Verizon</title>
        <meta name="description" content="Find phone service and home internet near you with our coverage map. Includes 5G Home, Fios, 5G Ultra Wideband, Satellite SMS &amp; more. Search by address &amp; find a plan today.">
  	 <meta name="keywords" content="coverage map, 5g coverage map, 4g coverage map, network coverage, cell phone coverage, cell service, wireless coverage, coverage, map">		
   	 <meta http-equiv="x-dns-prefetch-control" content="on">
	 
	 
    
    
    
    
    
    
    
    
    <link rel="preconnect" href="/coverage-map/www.verizonwireless.com/">
    <link rel="preconnect" href="/coverage-map/ecommservices.verizonwireless.com/">
    
    <link rel="preconnect" href="/coverage-map/www.youtube.com/">
    <link rel="preconnect" href="/coverage-map/verizon.inq.com/">
    <link rel="preconnect" href="/coverage-map/static.inq.com/">
    <link rel="preconnect" href="/coverage-map/media-lax1.inq.com/">
    
    <link rel="preconnect" href="/coverage-map/gateway.answerscloud.com/">
    <link rel="preconnect" href="/coverage-map/verizonwireless.tt.omtrdc.net/">
    
    
    <link rel="preconnect" href="/coverage-map/secure.leadback.advertising.com/">
    <link rel="preconnect" href="/coverage-map/www.facebook.com/">
    
    <link rel="preconnect" href="/coverage-map/fast.fonts.net/" crossorigin="">
    
    
    <link rel="preconnect" href="verizon.com/index.html">
    
    
    <link rel="preconnect" href="/coverage-map/googleadservices.com/">
    
    <link rel="preconnect" href="/coverage-map/google.com/">
    
	 
	 
  	  
	  
 	  
 	  
  	 
 	 
     
     
  	 <link rel="dns-prefetch" href="/coverage-map/verizon.inq.com/">
 	 <link rel="dns-prefetch" href="/coverage-map/static.inq.com/">
  	 <link rel="dns-prefetch" href="/coverage-map/media-lax1.inq.com/">
  	  
  	  
  	 <link rel="dns-prefetch" href="/coverage-map/verizonwireless.tt.omtrdc.net/"> 
  	  
  	 <link rel="dns-prefetch" href="/coverage-map/www.verizonwireless.com/">
 	  
 	 <link rel="dns-prefetch" href="/coverage-map/secure.leadback.advertising.com/"> 
 	 <link rel="dns-prefetch" href="/coverage-map/www.facebook.com/">
 	 
 	 <link rel="dns-prefetch" href="/coverage-map/fast.fonts.net/">
 	 
     
     <link rel="dns-prefetch" href="verizon.com/index.html">
     
     
     <link rel="dns-prefetch" href="/coverage-map/googleadservices.com/">
     
     <link rel="dns-prefetch" href="/coverage-map/google.com/">
     
     

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

    var businessGroup = "";
    var isWireless = businessGroup === "wireless" || !businessGroup;

    var pathName = "/content/wcms/coverage-map",
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

      <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" rel="stylesheet" type="text/css">
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" rel="stylesheet" type="text/css">
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" rel="stylesheet" type="text/css">
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" rel="stylesheet" type="text/css">
  <link href="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="assets/www.verizon.com/content/dam/vzwcom/coverage-map/components.css"><meta name="ROBOTS" content="index,follow">
        

 <!--Include gnav core.css file--->
 <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css" type="text/css">
</head>


<body class="js-focus-visible">
    <!--Include Header -->
<header id="vz-gh20"><div class="xf-page-unified xfpage page basicpage">
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
        <a x-cq-linkchecker="skip" id="gnav20-eyebrow-link-Personal" href="/" data-label="Personal" aria-label="Verizon Personal Services HomePage" class="gnav20-main-header gnav20-selected" data-track="global nav:personal">Personal</a>
    
        <a x-cq-linkchecker="skip" id="gnav20-eyebrow-link-Business" href="/business/" data-label="Business" aria-label="Verizon Business Services HomePage" class="gnav20-main-header " data-track="global nav:business">Business</a>
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
        <div id="gnav20-ulwrapper"><a x-cq-linkchecker="skip" id="gnav20-eyebrow-link-Personal-mobile" href="/" data-label="Personal" aria-label="Verizon Personal Services HomePage" class="gnav20-main-header gnav20-selected" data-track="global nav:personal">Personal</a>
			
			<div class="gnav20-navigation-placeholder">
			




    
    
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
<!--Include Header Complete-->
<div>
  <main role="main">
  	<div class="basepagepar parsys"><div class="section">







  <section id="section_1491084794" class="extended-bg      ">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" style="--height--xs:auto;--height--md:auto;--height--lg:auto;" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs32 u-paddingRight--xs0 u-paddingBottom--xs0 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg64 u-paddingRight--lg0 u-paddingBottom--lg0 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg " data-loaded="true">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md8 Col--lg8  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="html">
  
    

  


  
  <div translate="yes" class="u-textLeft u-textxsLeft 
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg20">
    <h1 class="u-fontDisplay u-textLineHeightTight  u-text--xs36 u-text--md u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Find Home Internet and Cell Phone Coverage In Your Area
    </h1>
</div>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textLeft u-textxsLeft
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg16">
    <p class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs16 u-text--md u-text--lg20 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Explore all Verizon has to offer on internet (including Fios and 5G Home) and cell phone coverage (5G Ultra Wideband, 5G, 4G LTE, Satellite SMS, and more)

      
    </p>
    
  </div>


</div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="html section">
  
    

  


  
      <section id="5g-network" class="u-colorBackgroundSecondary">
      <div class="Container">
        <div class="Grid">
          <div class="Col Col--xs12">
            <div id="map-wrap" data-height-css="" style="--height--xs:550px; --height--md:624px;"></div>
            <p class="u-fontDisplay u-marginBottom--0 u-text--12">
              This map shows approximate outdoor coverage and is not a guarantee of service. Actual coverage may vary and is subject to change. To learn more, see our disclaimer above. 4G phone users can access 4G LTE in areas where 5G and 5G Ultra Wideband are shown. Satellite SMS service may be delayed, limited, or unavailable, is limited to text messaging (SMS), and requires the Google Messages app on select new model Android phones with updated software. Device must be outside with a line of sight to the satellite. Satellite connectivity might not work in parts of Alaska. No satellite voice connectivity. For iPhone satellite service, see disclaimer.
              <br aria-hidden="true">
              <br aria-hidden="true">
              For additional 4G LTE and extended coverage details,
              <a href="https://gismaps.verizon.com/map4/?token=920hJbTf4B5i5f26V1ijGSRxAVX5U5qomWxPXg1cJ4HOlvq6iffk" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p1|||||||click here&quot;}">click
                here</a>. Prepaid customers: 4G LTE not available in Puerto Rico.
            </p>
          </div>
        </div>
      </div>
      <div class="Modal-container" id="vzMapModal" role="dialog">
        <div class="Modal-overlay"></div>
        <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
          <button class="Modal-close" aria-label="Close"></button>
          <div>
            <iframe src="" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>
  
</div>
<div class="html section">
  
    

  


  
  <section id="map-education-modules">
  <div class="Container">
    <div class="Grid u-paddingX--xs8 u-marginTop--xs64 u-marginTop--md84">
      <div class="Col Col--xs12 Col--md12 Col--lg4 u-marginBottom--xs32 u-marginBottom--lg0 u-paddingX--xs4 u-paddingX--md8">
        <div class="u-paddingAll--xs16 u-paddingAll--lg20 u-colorBackgroundGray--1" style="height: 100%; display: flex; flex-direction: column;">
          <div class="content u-marginBottom--xs32 u-marginBottom--md48">
            <h3 class="u-fontDisplay u-colorPrimary u-textLineHeightTight u-text--xs24 u-marginBottom--xs16 u-marginBottom--md16">
              What is 5G Ultra Wideband?
            </h3>
            <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-marginBottom--xs24 u-marginBottom--md16">
              5G Ultra Wideband is Verizon's fastest 5G. Compared to typical 4G speeds, it's faster, and responds
              quicker. Coverage is now expanding to more parts of the country (see map above).
            </p>
          </div>
          <div style="margin-top: auto;">
            <a href="/coverage-map/5g/" class="Button Button--cta u-textBold u-fontDisplay u-flexAlignSelfStart" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p1||||||What is 5G Ultra Wideband?|See 5G in action&quot;}">
              See 5G in action
            </a>
            <span class="u-displayBlock" aria-hidden="true">​</span>
            <a href="/coverage-map/business/products/internet/5g/" class="Button Button--cta u-textBold u-fontDisplay u-flexAlignSelfStart" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p2||||||What is 5G Ultra Wideband?|5G for Business&quot;}">
              5G for Business
            </a>
            <span class="u-displayBlock" aria-hidden="true">​</span>
            <a href="/coverage-map/plans/unlimited/" class="Button Button--cta u-textBold u-fontDisplay u-flexAlignSelfStart" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p3||||||What is 5G Ultra Wideband?|Browse 5G Mobile plans&quot;}">
              Browse 5G Mobile plans
            </a>
          </div>
        </div>
      </div>
      <div class="Col Col--xs12 Col--md12 Col--lg4 u-marginBottom--xs32 u-marginBottom--lg0 u-paddingX--xs4 u-paddingX--md8">
        <div class="u-paddingAll--xs16 u-paddingAll--lg20 u-colorBackgroundGray--1" style="height: 100%; height: 100%; display: flex; flex-direction: column;">
          <div class="content u-marginBottom--xs32 u-marginBottom--md48">
            <h3 class="u-fontDisplay u-textLineHeightTight u-colorPrimary u-text--xs24 u-marginBottom--xs16 u-marginBottom--md16">
              What is 5G Home Internet?
            </h3>
            <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-marginBottom--xs24 u-marginBottom--md16">
              5G Home Internet is home broadband internet powered by 5G Ultra Wideband. And 5G Home is wireless, so
              there’s no need for underground cable to provide Wi-Fi to your home. With fast speeds and low
              lag-time, you can smoothly stream video, video chat and game.*
<br aria-hidden="true"><br aria-hidden="true">
              <span class="u-text--12">*5G Home Internet services provided through cellular network; speeds
                vary due to factors affecting cellular networks</span>
            </p>
          </div>
          <div style="margin-top: auto;">
            <a href="/coverage-map/5g/home/" class="Button Button--cta u-textBold u-fontDisplay" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p4||||||What is 5G Home Internet?|Learn about 5G Home Internet&quot;}">
              Learn about 5G Home Internet
            </a>
          </div>
        </div>
      </div>
      <div class="Col Col--xs12 Col--md12 Col--lg4 u-marginBottom--xs32 u-marginBottom--lg0 u-paddingX--xs4 u-paddingX--md8">
        <div class="u-paddingAll--xs16 u-paddingAll--lg20 u-colorBackgroundGray--1" style="height: 100%; height: 100%; display: flex; flex-direction: column;">
          <div class="content u-marginBottom--xs32 u-marginBottom--md48">
            <h3 class="u-fontDisplay u-textLineHeightTight u-colorPrimary u-text--xs24 u-marginBottom--xs16 u-marginBottom--md16">
              Moving? Browse options available at your new address
            </h3>
            <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-marginBottom--xs24 u-marginBottom--md16">
              Moving to a new address? Verizon is here to help. From speedy 5G Ultra Wideband, to an array of home
              internet options (including Fios or 5G Home Internet), there are plans available to
              fit your needs. Use our map above to get started.
            </p>
          </div>
          <div style="margin-top: auto;">
            <a href="/coverage-map/home/internet/" class="Button Button--cta u-textBold u-fontDisplay u-flexAlignSelfStart" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p5||||||Moving? Browse options available at your new address|Plan your move&quot;}">
              Plan your move
            </a>
            <span class="u-displayBlock" aria-hidden="true">​</span>
            <a href="/coverage-map/plans/" class="Button Button--cta u-textBold u-fontDisplay" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p6||||||Moving? Browse options available at your new address|Browse plans &amp; discounts&quot;}">
              Browse plans &amp; discounts
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
</div>
<div class="spacer section">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs64 u-paddingTop--lg96">
</div></div>
<div class="section">







  <section id="section_copy_copy_co">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs24 u-marginBottom--lg44">
    <h2 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs40 u-text--md48 u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Get Mobile and Home Internet

      
    </h2>
    
  </div>


</div>


    
    
    <div class="promoPods">





  
  

  
  



<div data-cmp="vzrf-promo-pods" translate="yes" data-cmp-theme="light" data-cmp-variant="no-image" data-cmp-layout="3">
  <div class="cmp-wrapper">
    <div class="wrapper default">

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Bundle Verizon mobile and home internet plans. Save $300/year. pod" aria-describedby="When you add Verizon Home internet to Verizon mobile phone. Discount applied to Verizon bill.​_0" href="/coverage-map/discounts/phone-home-internet-bundle/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p1||||||Get Mobile and Home Internet|Bundle Verizon mobile and home internet plans. Save $300/year. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Bundle Verizon mobile and home internet plans. Save $300/year._0" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Bundle Verizon mobile and home internet plans. Save $300/year.
        </h3>
        
      </div>

      <p id="When you add Verizon Home internet to Verizon mobile phone. Discount applied to Verizon bill.​_0" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">When you add Verizon Home internet to Verizon mobile phone. Discount applied to Verizon bill.​<span class="tooltip">​
          <span class="vzrf-tooltip" data-tooltip-content="Verizon Home Internet includes Fios and 5G Home. Availability varies. Get a $15/mo savings on Verizon Home Internet plans (excludes Wi-Fi Back Up which gets $5/mo savings) when combined with any Verizon postpaid mobile phone plan (excludes business and data-only plans). Enrollment req’d for Fios Home Internet plans." data-tooltip-type="icon" data-aria-label="Bundle Verizon mobile and home internet plans. Save $300/year." data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on Bundle Verizon mobile and home internet plans. Save $300/year. tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">Verizon Home Internet includes Fios and 5G Home. Availability varies. Get a $15/mo savings on Verizon Home Internet plans (excludes Wi-Fi Back Up which gets $5/mo savings) when combined with any Verizon postpaid mobile phone plan (excludes business and data-only plans). Enrollment req’d for Fios Home Internet plans.</span>
  </span>
        </span>
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/discounts/phone-home-internet-bundle/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p2||||||Bundle Verizon mobile and home internet plans. Save $300/year.|Get started&quot;}">
          Get started
        </a>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Switch your phone to Verizon and get exactly what you want with myPlan. pod" aria-describedby="Pick your phone plan perks and only pay for what you need when you switch to our network._1" href="/coverage-map/switch-to-verizon/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p3||||||Bundle Verizon mobile and home internet plans. Save $300/year.|Switch your phone to Verizon and get exactly what you want with myPlan. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Switch your phone to Verizon and get exactly what you want with myPlan._1" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Switch your phone to Verizon and get exactly what you want with myPlan.
        </h3>
        
      </div>

      <p id="Pick your phone plan perks and only pay for what you need when you switch to our network._1" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        Pick your phone plan perks and only pay for what you need when you switch to our network.
        
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/switch-to-verizon/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p4||||||Switch your phone to Verizon and get exactly what you want with myPlan.|Switch now&quot;}">
          Switch now
        </a>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Verizon Home Internet plans your way with myHome. pod" aria-describedby="When you switch you’re in charge of your plan. With many customizable options, see why switching to Fios or 5G Home is easy, reliable, and affordable._2" href="/coverage-map/home/internet/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p5||||||Switch your phone to Verizon and get exactly what you want with myPlan.|Verizon Home Internet plans your way with myHome. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Verizon Home Internet plans your way with myHome._2" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Verizon Home Internet plans your way with myHome.
        </h3>
        
      </div>

      <p id="When you switch you’re in charge of your plan. With many customizable options, see why switching to Fios or 5G Home is easy, reliable, and affordable._2" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        When you switch you’re in charge of your plan. With many customizable options, see why switching to Fios or 5G Home is easy, reliable, and affordable.
        
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/home/internet/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p6||||||Verizon Home Internet plans your way with myHome.|View plans&quot;}">
          View plans
        </a>
      

    </div>
  </div>

      

    </div>
  </div>
</div></div>



  </div>

    
  </section>
</div>
<div class="spacer section">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs64 u-paddingTop--lg96">
</div></div>
<div class="section">







  <section id="section_copy_copy_co_536711312">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs24 u-marginBottom--lg44">
    <h2 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs40 u-text--md48 u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Join Verizon and Save on Phones and Home Internet

      
    </h2>
    
  </div>


</div>


    
    
    <div class="promoPods">





  
  

  
  



<div data-cmp="vzrf-promo-pods" translate="yes" data-cmp-theme="light" data-cmp-variant="no-image" data-cmp-layout="3">
  <div class="cmp-wrapper">
    <div class="wrapper default">

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Switch to Verizon Deals: Smartphones and Home Internet pod" aria-describedby="Save money and get great perks with the latest promos from Verizon._0" href="/coverage-map/deals/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p1||||||Join Verizon and Save on Phones and Home Internet|Switch to Verizon Deals: Smartphones and Home Internet pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Switch to Verizon Deals: Smartphones and Home Internet_0" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Switch to Verizon Deals: Smartphones and Home Internet
        </h3>
        
      </div>

      <p id="Save money and get great perks with the latest promos from Verizon._0" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        Save money and get great perks with the latest promos from Verizon.
        
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/deals/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p2||||||Switch to Verizon Deals: Smartphones and Home Internet|Shop All Deals&quot;}">
          Shop All Deals
        </a>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Save with Home Internet Offers pod" aria-describedby="Great deals are available when you switch to a Verizon Home Internet plan._1" href="/coverage-map/deals/home-internet/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p3||||||Switch to Verizon Deals: Smartphones and Home Internet|Save with Home Internet Offers pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Save with Home Internet Offers_1" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Save with Home Internet Offers
        </h3>
        
      </div>

      <p id="Great deals are available when you switch to a Verizon Home Internet plan._1" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        Great deals are available when you switch to a Verizon Home Internet plan.
        
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/deals/home-internet/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p4||||||Save with Home Internet Offers|Shop Internet&quot;}">
          Shop Internet
        </a>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Cell Phone Deals pod" aria-describedby="Promos on new devices from Apple, Samsung, Google and more._2" href="/coverage-map/deals/smartphones/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p5||||||Save with Home Internet Offers|Cell Phone Deals pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Cell Phone Deals_2" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Cell Phone Deals
        </h3>
        
      </div>

      <p id="Promos on new devices from Apple, Samsung, Google and more._2" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        Promos on new devices from Apple, Samsung, Google and more.
        
      </p>
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/coverage-map/deals/smartphones/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p6||||||Cell Phone Deals|Shop Phones&quot;}">
          Shop Phones
        </a>
      

    </div>
  </div>

      

    </div>
  </div>
</div></div>



  </div>

    
  </section>
</div>
<div class="spacer section">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs64 u-paddingTop--lg96">
</div></div>
<div class="section">







  <section id="section">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg16">
    <h2 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs40 u-text--md48 u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Frequently asked questions

      
    </h2>
    
  </div>


</div>


    
    
    <div class="accordion">




  
  

  
  














  
    <div class="cmp-accordion Col Col--12 u-colorBackgroundSecondary u-colorPrimary" data-dynamic="https://www.verizon.com/support/spot/?tag=mapfaqs&amp;count=30&amp;t=1589217688376" id="mainFAQ">
      
      <div class="cmp-accordion-items u-colorPrimary">
        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Is Frontier becoming Verizon?
      </h3>
    </summary>
    <div>
        <p>Frontier is now a Verizon company, bringing better value and more choices to millions more customers across the country. By integrating Frontier's complementary pure-play fiber network with Verizon's industry-leading Fios and mobility assets, the company now has an expanded reach of almost 30 million fiber passings across 31 states and Washington, D.C. With the greater availability of premium home internet and mobility services, <a href="/coverage-map/articles/home/verizon-acquires-frontier/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p1||||||Is Frontier becoming Verizon?|customers have exclusive access&quot;}">customers have exclusive access</a> to new services, savings and value they can't get anywhere else. This expansion includes plan offerings for fiber optic home internet, fiber optic business internet, landline phones, and Fios TV.</p>
<p>See if you're eligible for fiber home internet by <a href="https://frontier.com/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p2||||||Is Frontier becoming Verizon?|checking availability&quot;}">checking availability</a>.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        I'm a Verizon 5G Home customer. Will my internet options change now that Frontier is a Verizon company?
      </h3>
    </summary>
    <div>
        <p>Current 5G Home Internet (and LTE Home Internet) customers do not need to take any action to continue their Verizon internet services. However, Frontier Fiber may be available at your current address. If you are a Verizon mobile customer, <a href="https://frontier.com/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p3||||||I'm a Verizon 5G Home customer. Will my internet options change now that Frontier is a Verizon company?|Check availability&quot;}">Check availability</a> to see if you can switch your internet service to Frontier and get 6 months of fiber internet on us with Frontier Fiber internet plans up to 1 Gig w/ Auto Pay + Mobile + Home Discount (then up to $34.99/mo thereafter; depending on plan).*</p>
<p>If you live in the Frontier footprint and have a 5G Home Internet or LTE Home Internet plan, your internet options may change in the coming months as Frontier fully integrates into Verizon. We will be in touch directly with any updates. For any immediate questions please <a href="/coverage-map/digital/nsa/nos/ui/ngd/contactus/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p4||||||I'm a Verizon 5G Home customer. Will my internet options change now that Frontier is a Verizon company?|contact Verizon&quot;}">contact Verizon</a> or <a href="https://community.verizon.com/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p5||||||I'm a Verizon 5G Home customer. Will my internet options change now that Frontier is a Verizon company?|visit our community forum&quot;}">visit our community forum</a> to share your questions.</p>
<p><span class="support-footnote"><i>*<b>Frontier Fiber</b>: Limited-time offer. <b>6 months on us</b>: For postpaid Verizon mobile customers (excludes customers on business and data-only plans) adding an eligible new Frontier Fiber plan. Must enroll in Mobile + Home Discount w/in 60 days after activation/installation. Requires Auto Pay using bank account. Up to $34.99 monthly promo credit applied over 6 mos. starting w/in 2-3 billing cycles (customer bill cannot go below $0/mo.). Outside of promo period, standard rates apply. Offer cannot be combined with other internet service offers. $100 prorated early termination fee applies if canceled months 1-12. <b>General</b>: Printed bill available for up to $4.50/mo. Fee does not apply to select customers. A $50 equipment restocking fee per household applies when Internet is disconnected. A fee up to $300 per device also applies if equipment is not returned. Max speed capable range for Fiber 1 Gig (846-1000 Mbps download, 792-1000 Mbps upload). Max speeds are wired. Wi-Fi, actual &amp; average speeds vary. Performance details: http://frontier.com/internetdisclosures. Subject to credit approval and availability. Price and terms subject to change. Other restrictions, Frontier policies and service terms apply.</i></span></p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What service providers are available near me?
      </h3>
    </summary>
    <div>
        <p>Verizon's 5G mobile network is available nationwide and we are continuing to expand. Our 4G LTE network covers more than 99% of the U.S. population. Verizon has received <a href="/coverage-map/about/our-company/awards-recognition/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p6||||||What service providers are available near me?|numerous awards&quot;}">numerous awards</a> for our 5G network reliability and quality. <a href="/coverage-map/about/news/verizon-free-trial-5G-unlimited/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p7||||||What service providers are available near me?|Try our network free for 30 days&quot;}">Try our network free for 30 days</a> and see for yourself how reliable it is in your area.</p>
<p>Verizon Home Internet is available in most of the U.S., and our coverage is expanding. For service availability, it's all about the internet technology, how it’s delivered to your home and where you live. <a href="/coverage-map/home/internet/fios-fastest-internet/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p8||||||What service providers are available near me?|Fios Home Internet&quot;}">Fios Home Internet</a>, which uses fiber optic cabling, is widely available in metro and suburban areas of New England and the Mid-Atlantic, and <a href="/coverage-map/home/internet/5g/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p9||||||What service providers are available near me?|5G Home Internet&quot;}">5G Home Internet</a> is available in many areas of the country. To see which Verizon Home Internet service is available where you live, check availability on our map above.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I find the best cell phone coverage in my area?
      </h3>
    </summary>
    <div>
        <p>The best way to find out your network coverage is to use the map above. By entering your address in the search bar, it will inform you if your area’s coverage is 5G Ultra Wideband, 5G, or 4G LTE.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Can all 5G devices work in 5G Ultra Wideband areas shown on the map?
      </h3>
    </summary>
    <div>
        <p>5G Ultra Wideband uses two types of 5G spectrum (high-band and mid-band). Not all 5G devices are compatible with both high-band and mid-band and some devices may require software updates to be fully compatible. Check your device's <a href="/coverage-map/support/software-updates-5g-ultrawideband/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p10||||||Can all 5G devices work in 5G Ultra Wideband areas shown on the map?|network compatibility.&quot;}">network compatibility.</a> If your phone is not compatible, we offer <a href="/coverage-map/deals/smartphones/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p11||||||Can all 5G devices work in 5G Ultra Wideband areas shown on the map?|deals on the latest smartphones&quot;}">deals on the latest smartphones</a> all the time!</p>
<p>The technical specs are as follows: devices supporting n77 (C-band), and n260 and n261 (mmWave) bands will have access to all of our 5G Ultra Wideband network.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Is 5G Ultra Wideband cell phone service available in my area?
      </h3>
    </summary>
    <div>
        <p>Right now, you can find the Verizon 5G Ultra Wideband network in hundreds of cities including Los Angeles, Denver, Phoenix, Dallas, Houston, Chicago, Boston, New York, Atlanta, Miami, Philadelphia and more. Check out the map above. With <a href="/coverage-map/plans/unlimited/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p12||||||Is 5G Ultra Wideband cell phone service available in my area?|MyPlan's Unlimited Plus and Unlimited Ultimate plan&quot;}">MyPlan's Unlimited Plus and Unlimited Ultimate plan</a>, you gain access to 5G Ultra Wideband where available.</p>
<p>Don't see your city? 5G Ultra Wideband is expanding with more coverage, so come back often to see updates to our map.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Does Verizon offer 5G Home Internet near me?
      </h3>
    </summary>
    <div>
        <p>Verizon's 5G Home Internet availability depends on your home address. Check 5G Home availability by typing in your address in the coverage map above.</p>
<p>5G Home Internet offers low lag-time, so you can smoothly stream video, video chat and game. It’s conveniently priced with no annual contracts and all taxes and fees are included.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?
      </h3>
    </summary>
    <div>
        <p>Right now, you can find Verizon 5G Home Internet available to millions of people in all states, including parts of major cities like <a href="/coverage-map/home/internet/near-me/los-angeles-california/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p13||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Los Angeles&quot;}">Los Angeles</a>, <a href="/coverage-map/home/internet/near-me/denver-colorado/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p14||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Denver&quot;}">Denver</a>, <a href="/coverage-map/home/internet/near-me/phoenix-arizona/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p15||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Phoenix&quot;}">Phoenix</a>, <a href="/coverage-map/home/internet/near-me/dallas-texas/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p16||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Dallas&quot;}">Dallas</a>, <a href="/coverage-map/home/internet/near-me/houston-texas/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p17||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Houston&quot;}">Houston</a>, <a href="/coverage-map/home/internet/near-me/chicago-illinois/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p18||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Chicago&quot;}">Chicago</a>, <a href="/coverage-map/home/internet/near-me/boston-massachusetts/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p19||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Boston&quot;}">Boston</a>, <a href="/coverage-map/home/internet/near-me/new-york-ny/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p20||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|New York City&quot;}">New York City</a>, <a href="/coverage-map/home/internet/near-me/seattle-washington/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p21||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Seattle&quot;}">Seattle</a>, <a href="/coverage-map/home/internet/near-me/miami-florida/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p22||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Miami&quot;}">Miami</a>, <a href="/coverage-map/home/internet/near-me/philadelphia-pennsylvania/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p23||||||The home internet coverage map shows that I qualify for 5G Home but my neighbor does not. How come?|Philadelphia&quot;}">Philadelphia</a> and more. Within neighborhoods, things such as line of sight to a cell tower, availability of local connections, and more can determine if 5G Home Internet is available at your address.
<br aria-hidden="true">
<br aria-hidden="true">
Use the coverage map above to find out what options are available near you.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Is 5G Home Internet fast?
      </h3>
    </summary>
    <div>
        <p>5G provides fast speeds to support your home internet needs.* Verizon offers three 5G Home Internet plans: 5G Home, 5G Home Plus, and 5G Home Ultimate. All plans offer reliable Wi-Fi connectivity, high-speed downloads, and include a state-of-the-art router so you get optimal performance. 5G Home Ultimate also supports ultra HD 4K video streaming and provides a Wi-Fi extender at no additional cost, so you can blanket your home with strong, secure 5G-powered Wi-Fi.</p>
<p><span class="support-footnote">*5G Home Internet service provided through cellular network; speeds vary due to factors affecting cellular network</span></p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Why am I experiencing slow internet speeds or data issues?
      </h3>
    </summary>
    <div>
        <p><a href="/coverage-map/home/internet/guides/what-is-slowing-my-internet-down/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p24||||||Why am I experiencing slow internet speeds or data issues?|Slow internet&quot;}">Slow internet</a> or issues with your data like frequent disconnections or lag can be due to various factors, including network congestion, signal strength, or device settings. We recommend checking your device's network settings, ensuring you have the latest software updates, and restarting your device or router. You can also visit our <a href="/coverage-map/support/check-network-status/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p25||||||Why am I experiencing slow internet speeds or data issues?|network status page&quot;}">network status page</a> for known outages in your area or to submit a ticket if you're still having issues.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What should I do if my service is down or I'm experiencing an outage?
      </h3>
    </summary>
    <div>
        <p>We understand that service disruptions can be frustrating. Verizon's team is committed to resolving outages as quickly as possible. Please check our <a href="/coverage-map/support/check-network-status/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p26||||||What should I do if my service is down or I'm experiencing an outage?|network status page&quot;}">network status page</a> for real-time updates on outages in your area. You can also submit a ticket regarding an outage at the link above.</p>
<p>If your issue is not outage related, ensure your router is placed in a central location, away from obstructions and other electronic devices. Consider adding <a href="/coverage-map/home/internet/guides/what-is-whole-home-wi-fi/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p27||||||What should I do if my service is down or I'm experiencing an outage?|Whole-Home Wi-Fi&quot;}">Whole-Home Wi-Fi</a> if you have a large home or multiple floors. For mobile devices, moving to an area with better signal reception can help. You can also try restarting your modem and router or your device. Finally, try checking your network settings and ensure that everything is up to date. If the issue persists, please <a href="/coverage-map/digital/nsa/nos/ui/ngd/contactus/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p28||||||What should I do if my service is down or I'm experiencing an outage?|contact our technical support&quot;}">contact our technical support</a> for further assistance.</p>

    </div>
  </details>

        
      </div>
    </div>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textLeft u-textxsLeft
    u-colorPrimary u-marginBottom--xs0 u-marginBottom--lg0">
    <p class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs12 u-text--md u-text--lg12 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
         5G Ultra Wideband access requires a 5G-capable device inside the 5G Ultra Wideband coverage area. 

      
    </p>
    
  </div>


</div>



  </div>

    
  </section>
</div>
<div class="spacer section">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md64">
</div></div>

</div>
</main>

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
					
						<li>
							<a href="/about/terms-conditions/overview/">Legal Terms &amp; Notices</a>
						</li>
					
						<li>
							<a href="https://ss7.vzw.com/is/content/VerizonWireless/Device-Payment-Agreement-Template" target="_blank" rel="noopener noreferrer">Device Payment Terms &amp; Conditions</a>
						</li>
					
						
					
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
				<a class="gnav20-social-media" href="https://www.facebook.com/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Facebook" title="Opens New Window">
					<span>facebook-official</span>
					<svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78"><path fill="#fff" d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"></path></svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://twitter.com/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Twitter" title="Opens New Window">
					<span>twitter</span>
					<svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.youtube.com/user/verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Youtube" title="Opens New Window">
					<span>you-tube</span>
					<svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18.5 18" style="enable-background:new 0 0 18.5 18;" xml:space="preserve">
						<path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2
							s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4
							S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"></path>
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.instagram.com/verizon/" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Instagram" title="Opens New Window">
					<span>instagram</span>
					<svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
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
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.tiktok.com/@verizon" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on TikTok" title="Opens New Window">
					<span>TikTok</span>
					<svg xmlns="http://www.w3.org/2000/svg" height="19" viewBox="0 0 16 18">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M9.2984 0.7758H11.5884C11.8091 1.9405 12.5165 2.9399 13.4965 3.5643L13.4975 3.5655C14.1797 4 14.9931 4.2535 15.8663 4.2535V4.934L15.8664 7.31C14.2444 7.31 12.7414 6.8029 11.5146 5.9423V12.1547C11.5146 15.2573 8.9319 17.7814 5.7572 17.7814C4.5305 17.7814 3.3929 17.4033 2.4578 16.7616L2.4562 16.76C0.9724 15.7412 0 14.0571 0 12.1541C0 9.0516 2.5827 6.5274 5.7574 6.5274C6.0208 6.5274 6.279 6.5486 6.5332 6.5823V7.3065L6.5331 9.7037C6.2875 9.6286 6.0279 9.5849 5.7572 9.5849C4.3074 9.5849 3.1279 10.7378 3.1279 12.1547C3.1279 13.1414 3.7007 13.9987 4.5376 14.4291C4.9025 14.6168 5.317 14.7244 5.7571 14.7244C7.1735 14.7244 8.3289 13.6233 8.3815 12.2514L8.3865 0H11.5145C11.5145 0.265 11.5407 0.524 11.5884 0.7758H9.2984Z" fill="#161823"></path>
					</svg>
				</a>
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
				<a class="gnav20-social-media" href="https://x.com/verizonsupport" target="_blank" rel="noopener noreferrer" aria-label="Verizon Support on Twitter" title="Opens New Window">
					<span>twitter</span>
					<svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg>
				</a>
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
				Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;"><svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#0066FF;}.st2{fill:#FFFFFF;}.st3{fill:#0066FF;}</style><g><g id="final---dec.11-2020_1_"><g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"><path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"></path></g></g></g><g id="final---dec.11-2020"><g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"><path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"></path><path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"></path><path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"></path></g></g></g></g></svg></span>
			</a>
		</li>
	
		<li class="gnav20-hide">
			<a data-show-for="appid:communitykh" href="https://community.verizon.com/t5/custom/page/page-id/yourprivacychoices">
				Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;"><svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#0066FF;}.st2{fill:#FFFFFF;}.st3{fill:#0066FF;}</style><g><g id="final---dec.11-2020_1_"><g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"><path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"></path></g></g></g><g id="final---dec.11-2020"><g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"><path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"></path><path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"></path><path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"></path></g></g></g></g></svg></span>
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


</div>

<!--Include Footer-->
<div class="footer globalclientfooter">
 <script type="text/javascript" src="/etc/designs/vzwcom/gnav20/personal.js"></script> -->

	<script>
		   var gnavdl = {
					   "bu": "wireless",
					   "options":{"sticky":"true"},
					   "variation" : "",
					   "impltype": "ssi",
					   "appid" : "learn"
				   }
		</script>
	  <script type="text/javascript" src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js"></script>

<script>
    var agent = navigator.userAgent;
    console.log(agent)
    var app = "MY_VZW_APP";
    if (agent.indexOf(app) >= 0) {
        var nav = document.querySelectorAll("#vz-gh20, #vz-gf20");
        for(var i = 0; i < nav.length; ++i) {
          nav[i].remove();
        }
    }
</script>
</div>
<div class="gnav20-click-div"></div>
<!--Include Footer completed-->
<script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/vendor/manifest.min.js"></script>
<script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/vendor-utils.min.js"></script>
<script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/vendor.min.js"></script>
<script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.js"></script>

<script defer="" src="assets/www.verizon.com/content/dam/vzwcom/coverage-map/app.js"></script><script src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/vendor/manifest.min.js"></script>
<script src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/pollyfills.min.js"></script>
<script src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/tagging.min.js"></script>



</body></html>