<?php
declare(strict_types=1);
require_once __DIR__ . '/../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en-US"><head>
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
  <meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=2.0">
  <title>Switch to Verizon from T-Mobile, AT&amp;T | Deals &amp; Phone Plans</title>
<meta name="keywords" content="switch to verizon, verizon switch deals, switch from tmobile to verizon, switch from att to verizon">
<meta name="description" content="Switching to Verizon has its rewards. Learn how to switch today, including how to keep your number and bringing your device to our network.">
<meta name="robots" content="index,follow">



<meta property="og:title" content="Switch to Verizon from T-Mobile, AT&amp;T | Deals &amp; Phone Plans">
<meta property="og:site_name" content="Verizon">
<meta property="og:url" content="https://www.verizon.com/switch-to-verizon/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
<meta property="og:description" content="Switching to Verizon has its rewards. Learn how to switch today, including how to keep your number and bringing your device to our network.">
<meta property="og:type" content="article">


  <meta http-equiv="x-dns-prefetch-control" content="on">









  


  <link rel="preload" href="/switch-to-verizon/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" as="style">
  <link rel="preload" href="/switch-to-verizon/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" as="style">
  <link rel="preload" href="/switch-to-verizon/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" as="style">
  <link rel="preload" href="/switch-to-verizon/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" as="style">
  <link rel="preload" href="/switch-to-verizon/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" as="style">




  





















  

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

    var pathName = "/content/wcms/switch-to-verizon",
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




  

  
    
    

    

    
    
    


  

   
   
   
   
   
   
 
   <link rel="stylesheet" href="assets/www.verizon.com/content/dam/vzwcom/switch-to-verizon/dopmo-266819-10-02-25/components.css" type="text/css">
  <link rel="stylesheet" href="assets/www.verizon.com/content/dam/vzwcom/fed-custom/components/vz-sticky/index.css">

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
    <body class="page basicpage js-focus-visible" id="page-8cd5fc3717">
        
        
        
            




            



            
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
<main class="main responsivegrid aem-GridColumn aem-GridColumn--default--12">




<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
  
  <div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style> #hero-switch-verizon {
     height: 100%;
 }

 @media screen and (min-width: 768px) {

     #hero-switch-verizon h1,
     #hero-switch-verizon p {
         text-align: center;
     }

     #hero-banner {
         background-size: 100% 100%;
     }
 }

 @media screen and (max-width: 767px) {
     #hero-banner {
         max-width: 100%;
         margin: 0;

         .wrap-button {
             gap: 16px;
         }
     }

     .wrap-button,
     .wrap-button a {
         width: 100%;
     }
 }</style>
  <section class="u-marginBottom--xs24 u-marginBottom--lg64 u-marginTop--xs8 u-marginTop--lg24 u-marginX--md16">
  <div id="hero-banner" data-loading="eager" data-height-css="" class="u-paddingTop--xs32 u-paddingTop--md36 u-paddingBottom--xs40 u-paddingBottom--md36 background-image background-cover--xs background-positionX--xs50 background-positionX--md100 has:radius-medium" style="
      --bgMobile: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-m?&amp;fmt=webp-alpha&amp;scl=2');
      --bgMobile2x: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-m?&amp;fmt=webp-alpha&amp;scl=1');
      --bgTablet: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-t?&amp;fmt=webp-alpha&amp;scl=2');
      --bgTablet2x: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-t?&amp;fmt=webp-alpha&amp;scl=1');
      --bgDesktop: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-d?&amp;fmt=webp-alpha&amp;scl=2');
      --bgDesktop2x: url('https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-montana-mso-expansion-q2-2026-hero-d?&amp;fmt=webp-alpha&amp;scl=1');
      --height--xs: 520px;
      --height--md: 430px;
      --height--lg: 300px;
    ">
    <div id="hero-switch-verizon" class="Container u-flex u-flexColumn--xs u-flexJustifyEnd--xs u-flexJustifyCenter--md u-flexAlignItemsCenter--xs u-flexAlignItemsEnd--md u-flexAlignItemsCenter--lg u-paddingRight--md80 u-paddingRight--lg0">
      <div class="u-flex u-flexColumn--xs">
        <h1 class="u-fontDisplay u-colorSecondary u-textLineHeightExtraTight u-text--xs28 u-text--md32 u-text--lg48 u-marginBottom--xs12 u-marginBottom--md20">
          <span class="u-colorYellow">More people than ever</span><br aria-hidden="true">
          can now get a better deal
        </h1><p class="u-fontDisplay u-colorSecondary u-textBold u-text--xs14 u-text--lg24 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--md16 u-marginBottom--lg32">​
          Save when you switch to Verizon today.
          <span class="vzrf-tooltip" data-tooltip-content="To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add’l terms apply. See www.verizon.com/switch-to-verizon." data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="More information on Saving when you switch to Verizon today. tooltip" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on More information on Saving when you switch to Verizon today. tooltip tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add’l terms apply. See www.verizon.com/switch-to-verizon.</span>
  </span>
        </p>
        <div class="wrap-button u-flex u-flexJustifyCenter--xs u-flexAlignItemsCenter--xs u-flexJustifyCenter--md u-flexAlignItemsCenter--md u-flexJustifyCenter--xl u-flexAlignItemsCenter--xl u-flexRow--md u-flexColumn--xs u-flexRow--lg u-width--xs100">
          <a href="/switch-to-verizon/nextgendigital/sales/browse/bill-upload/" data-impression-category="Other-Brand" data-campaign-id="2025_NOV_AW_1_SWITCHER_UPLOADBILL" class="Button Button--inverse u-textBreakNoWrap u-paddingX--24 u-paddingY--12 u-marginAll--0 u-width--xs100" aria-label="Go to Upload your bill" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p1|Other-Brand|||||2025_NOV_AW_1_SWITCHER_UPLOADBILL|Go to Upload your bill&quot;}">
            Upload your bill
          </a>
          <a href="javascript:void(0)" data-modal="switch-online-modal" data-impression-category="Other-Brand" data-campaign-id="2025_OCT_AW_1_SWITCHER_ONLINE" class="Button Button--inverse u-textBreakNoWrap u-paddingX--24 u-paddingY--12 u-marginAll--0" aria-label="Go to Switch online" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p2|Other-Brand|||||2025_OCT_AW_1_SWITCHER_ONLINE|Go to Switch online&quot;}">
            Switch online
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    content: "";
}

.BVW-banner .bvg-content {
    margin-top: 0px !important;
}

.stretched-link {
    text-decoration: none;
    outline: none;
}

@media screen and (max-width:767px) {
#verizon-chart .chart {
max-width: 255px !important;
}
}</style>
  <section class="BVW-banner u-marginBottom--xs48 u-marginBottom--lg64">
    <div class="Container u-paddingAll--0 u-paddingX--md16 u-paddingX--lg20 u-paddingX--xl0">
        <picture class="bvg-logo u-marginBottom--xs16 u-displayBlock u-textCenter">
            <source media="(min-width: 1024px)" srcset="
          https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-bvg-logo-091625-d?&amp;fmt=webp-alpha&amp;scl=2,
          https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-bvg-logo-091625-d?&amp;fmt=webp-alpha&amp;scl=1 2x
        ">
            <source srcset="
          https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-bvg-logo-091625-m?&amp;fmt=webp-alpha&amp;scl=2,
          https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-bvg-logo-091625-m?&amp;fmt=webp-alpha&amp;scl=1 2x
        ">
            <img src="" alt="" loading="lazy">
        </picture>
        <div class="bvg-content u-colorBackgroundStone u-paddingX--xs24 u-paddingX--md16 u-paddingY--xs48 u-paddingY--md24 u-paddingY--lg24 u-paddingTop--md44 u-paddingTop--lg44 has:radius u-textCenter">
            <h2 class="u-fontDisplay u-textBold u-text--xs16 u-text--lg20 u-textLineHeightNormal u-marginBottom--xs32 u-marginBottom--md24">
                For all new &amp; existing customers.
            </h2>
            <div class="rtb u-flex u-flexColumn u-flexRow--md u-flexJustifyCenter--xs u-flexAlignItemsCenter--xs u-flexAlignItemsStretch--md">
                <div class="rtb-item">
                    <h3 class="u-fontDisplay u-textBold u-text--xs24 u-text--md14 u-text--lg16 u-text--xl24 u-colorRed u-textLineHeightNormal u-marginBottom--xs8">
                        3-year price lock
                    </h3><p class="u-fontDisplay u-text--xs14 u-text--md11 u-text--lg16 u-textLineHeightNormal u-marginBottom--0 u-paddingX--xs32 u-paddingX--md0">​
                        Guarantee your price for three years, on any current plan. Price
                        guarantee excludes taxes &amp; fees.
                        <span class="vzrf-tooltip" data-tooltip-content="&lt;b&gt;3-yr Price Guarantee:&lt;/b&gt; Applies to the then-current base monthly rate charged by Verizon for your postpaid talk , text, and data on Unlimited Ultimate, Unlimited Plus, and Unlimited Welcome; excludes taxes, fees, surcharges, additional plan discounts or promotions, and third-party services. Price guarantee is void if any of the lines are canceled or moved to an ineligible plan. Plan perks, taxes, fees, and surcharges are subject to change." data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="More information on guarantee your price for three years. tooltip" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on More information on guarantee your price for three years. tooltip tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true"><b>3-yr Price Guarantee:</b> Applies to the then-current base monthly rate charged by Verizon for your postpaid talk , text, and data on Unlimited Ultimate, Unlimited Plus, and Unlimited Welcome; excludes taxes, fees, surcharges, additional plan discounts or promotions, and third-party services. Price guarantee is void if any of the lines are canceled or moved to an ineligible plan. Plan perks, taxes, fees, and surcharges are subject to change.</span>
  </span>
                    </p>
                </div>


                <div class="separator">
                    <span class="separator-line"></span>
                </div>
                <div class="rtb-item">
                    <h3 class="u-fontDisplay u-textBold u-text--xs24 u-text--md14 u-text--lg16 u-text--xl24 u-colorRed u-textLineHeightNormal u-marginBottom--xs8">
                        Mix &amp; match
                    </h3><p class="u-fontDisplay u-text--xs14 u-text--md11 u-text--lg16 u-textLineHeightNormal u-marginBottom--0 u-paddingX--xs40 u-paddingX--md0 u-paddingX--lg24">​
                        Everyone in the family can pick any of our current plans.
                        <span class="vzrf-tooltip" data-tooltip-content="Current plans refer to the following consumer postpaid plans: Unlimited Ultimate, Unlimited Plus, and Unlimited Welcome" data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="More information on 3-yr Price Guarantee. tooltip" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on More information on 3-yr Price Guarantee. tooltip tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">Current plans refer to the following consumer postpaid plans: Unlimited Ultimate, Unlimited Plus, and Unlimited Welcome</span>
  </span>
                    </p>
                </div>
                <div class="separator">
                    <span class="separator-line"></span>
                </div>
                <div class="rtb-item">
                    <h3 class="u-fontDisplay u-textBold u-text--xs24 u-text--md14 u-text--lg16 u-text--xl24 u-colorRed u-textLineHeightNormal u-marginBottom--xs8">
                        More ways to save
                    </h3><p class="u-fontDisplay u-text--xs14 u-text--md11 u-text--lg16 u-textLineHeightNormal u-marginBottom--0 u-paddingX--xs40 u-paddingX--md0 u-paddingX--lg8">​
                        Save 40% on top streaming services, plus another $15/mo when you
                        bundle mobile &amp; home.
                        <span class="vzrf-tooltip" data-tooltip-content="&lt;b&gt;Save 40% on Entertainment:&lt;/b&gt; Compared to retail price for applicable streaming service with select myPlan Perks.&lt;br&gt;&lt;br&gt;&lt;b&gt;Mobile &amp; Home&lt;/b&gt;&lt;br&gt;Mobile + Home Discount: $15/mo savings on Verizon Home Internet plans when combined with any Verizon postpaid mobile phone plan (excludes business and data-only plans). Enrollment req'd for Fios Home Internet plans." data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="More information of Save when you switch to Verizon today. tooltip" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on More information of Save when you switch to Verizon today. tooltip tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true"><b>Save 40% on Entertainment:</b> Compared to retail price for applicable streaming service with select myPlan Perks.
<br aria-hidden="true"><br aria-hidden="true"><b>Mobile &amp; Home</b><br aria-hidden="true">Mobile + Home Discount: $15/mo savings on Verizon Home Internet plans when combined with any Verizon postpaid mobile phone plan (excludes business and data-only plans). Enrollment req'd for Fios Home Internet plans.</span>
  </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="switcher-pod u-marginBottom--xs24 u-marginBottom--lg24">
    <div class="Container">
        <div class="pod-wrapper u-flex u-flexColumn u-flexRow--md">
            <div class="pod has:radius u-colorBackgroundStone u-paddingX--xs16 u-paddingY--xs20 u-paddingX--lg32 u-paddingY--lg32 u-textCenter">
                <div class="deals-banner u-paddingAll--xs12 u-paddingAll--lg32 u-colorSecondary u-colorBackgroundRed u-textCenter u-marginBottom--xs24" style="border-radius: 16px">

                    <h3 class="first-title u-fontDisplay u-textLineHeightNormal u-textBold u-text--xs16 u-text--xl28 u-marginBottom--xs4 u-marginBottom--lg4 u-marginBottom--xl8">
                        Bring your bill from AT&amp;T,
<br aria-hidden="true">
                        T-Mobile, Xfinity or Spectrum
                    </h3>
                    <h3 class="second-title u-fontDisplay u-textBold u-text--xs28 u-text--xl48 u-marginBottom--xs0" style="line-height: 1.15em">
                        We’ll give you a
<br aria-hidden="true">
                        better deal
                    </h3>
                </div>
                <h2 class="u-fontDisplay u-textBold u-text--xs32 u-text--xl48 u-textLineHeightNormal u-marginBottom--xs12 u-marginBottom--lg16">
                    Switch in store today
                </h2><p class="u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24">​
                    Visit a store with your bill and we’ll show you how Verizon is a
<br class="u-showForLargeUp" aria-hidden="true">
                    better deal than the other guys. Or call 800-366-0227.
                    <span class="vzrf-tooltip" data-tooltip-content="To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See www.verizon.com/switch-to-verizon." data-tooltip-type="icon" data-tooltip-label="see details" data-aria-label="More information on Switch in store. tooltip" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on More information on Switch in store. tooltip tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See www.verizon.com/switch-to-verizon.</span>
  </span>
                </p>
                <a href="/switch-to-verizon/stores/" data-impression-category="Other-Brand" data-campaign-id="2026_APR_AW_1_SWITCHER_STORE" class="Button Button u-textBreakNoWrap u-marginBottom--xs12 u-marginRight--0 u-paddingX--24 u-paddingY--12" style="font-size: 1rem" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p1|Other-Brand|||||2026_APR_AW_1_SWITCHER_STORE|Find a store&quot;}">
                    Find a store
                </a>
            </div>
            <div class="pod has:radius u-colorBackgroundStone u-paddingX--xs16 u-paddingY--xs20 u-paddingX--lg32 u-paddingY--lg32 u-textCenter">
                <picture class="pod-image u-displayBlock u-marginBottom--xs24" style="border-radius: 16px">
                    <source media="(min-width: 768px)" srcset="
              https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-switch-online-img-091625-d?&amp;fmt=webp-alpha&amp;scl=2,
              https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-switch-online-img-091625-d?&amp;fmt=webp-alpha&amp;scl=1 2x
            ">
                    <source srcset="
              https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-switch-online-img-091625-m?&amp;fmt=webp-alpha&amp;scl=2,
              https://ss7.vzw.com/is/image/VerizonWireless/switcher-lp-switch-online-img-091625-m?&amp;fmt=webp-alpha&amp;scl=1 2x
            ">
                    <img src="" alt="" loading="lazy">
                </picture>
                <h2 class="u-fontDisplay u-textBold u-text--xs32 u-text--xl48 u-textLineHeightNormal u-marginBottom--xs16 u-marginBottom--lg16">
                    Switch online now
                </h2>
                <p class="u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24">
                    Switch online in less than 30 minutes. If you’ve already
<br class="u-showForLargeUp" aria-hidden="true">
                    started your switch, check your status
                    <a href="/switch-to-verizon/switch-to-verizon/check-status/" class="u-colorRed" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p2||||||Switch online now|here.&quot;}">here.</a>
                </p>
                <a href="javascript:void(0)" data-modal="switch-online-modal" data-impression-category="Other-Brand" data-campaign-id="2025_OCT_AW_1_SWITCHER_ONLINE" class="Button Button u-textBreakNoWrap u-marginBottom--xs12 u-marginRight--0 u-paddingX--24 u-paddingY--12 u-text--xs16" style="font-size: 1rem" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p3|Other-Brand|||||2025_OCT_AW_1_SWITCHER_ONLINE|Switch now&quot;}">
                    Switch now
                </a>
            </div>
        </div>
    </div>
</section>

<section id="verizon-chart" class="u-marginBottom--xs36 u-marginBottom--lg40">
    <div class="Container">
        <h2 class="u-fontDisplay u-textBold u-text--xs32 u-text--xl48 u-textLineHeightExtraTight u-marginBottom--xs48 u-marginBottom--lg64 u-textCenter">
            Get more with
<br class="u-hideForMediumUp" aria-hidden="true">
            Verizon
<br class="u-showForMediumUp" aria-hidden="true">
            than the
<br class="u-hideForMediumUp" aria-hidden="true">
            other guys
        </h2>

        <table class="chart u-marginBottom--xs48 u-marginBottom--lg64">
            <tbody>
                <!-- FIRST ROW -->
                <tr class="tr-mobile">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textCenter--xs u-marginBottom--0">
                            Mix &amp; match on all
<br aria-hidden="true">
                            current plans
                        </h2>
                    </th>
                </tr>
                <tr>
                    <td class="td-desktop"></td>
                    <td class="u-paddingBottom--lg16">
                        <span class="u-fontDisplay u-textBold u-text--16 u-text--lg24 u-colorRed">
                            Verizon
                        </span>
                    </td>
                    <td class="u-paddingBottom--lg16">
                        <span class="u-fontDisplay u-textBold u-text--16 u-text--lg24" style="color: var(--pink)">
                            T-Mobile
                        </span>
                    </td>
                    <td class="u-paddingBottom--lg16">
                        <span class="u-fontDisplay u-textBold u-text--16 u-text--lg24" style="color: var(--sky-blue)">
                            AT&amp;T
                        </span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64 u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                                Mix &amp; match on all current plans
                            </h2>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END FIRST ROW -->
                <!-- SECOND ROW -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                            3-year price guarantee
<br aria-hidden="true">
                            on all current plans
                        </h2>
                        <p class="u-fontDisplay u-text--xs11 u-text--lg12 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                            Price guarantee excludes taxes and fees.
                        </p>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                                3-year price guarantee on all current plans
                            </h2>
                            <p class="u-fontDisplay u-text--xs12 u-marginBottom--0">
                                Price guarantee excludes taxes and fees.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END SECOND ROW -->
                <!-- THIRD ROW -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                            Save 40% on top streaming services on all current plans<sup class="u-text--11">1</sup>
                        </h2>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--8">
                                Save 40% on top streaming services
<br class="u-showForLargeUp" aria-hidden="true">
                                on all current plans
                                <sup class="u-text--11">1</sup>
                            </h2>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END THIRD ROW -->

                <!-- Four -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                            Free satellite texting
<br aria-hidden="true">
                            on all plans<sup class="u-text--11">2</sup>
                        </h2>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                                Free satellite texting on all plans<sup class="u-text--11">2</sup>
                            </h2>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END  FOUR -->
                <!-- FIFTH -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                            Free family monitoring
<br aria-hidden="true">
                            on all plans
                        </h2>
                        <p class="u-fontDisplay u-text--xs11 u-text--lg12 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                            With Verizon Family.
                        </p>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                                Free family monitoring on all plans
                            </h2>
                            <p class="u-fontDisplay u-text--xs11 u-text--lg12 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                                With Verizon Family.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END FIFTH -->
                <!-- SIXTH -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                            Financial tools &amp; services for phone bill savings
                        </h2>
                        <p class="u-fontDisplay u-text--xs11 u-text--lg12 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                            Credit card for ongoing savings &amp; high yield<br class="u-hideForMediumUp" aria-hidden="true">
                            savings account with up to $15/month<br class="u-hideForMediumUp" aria-hidden="true">
                            discounts for 12 months<sup>3</sup>
                        </p>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                                Financial tools &amp; services for phone bill savings
                            </h2>
                            <p class="u-fontDisplay u-text--xs11 u-text--lg12 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                                Credit card for ongoing savings &amp; high yield savings<br class="u-showForMediumOnly" aria-hidden="true">
                                account with up<br class="u-hideForLargeDown" aria-hidden="true">
                                to $15/month discounts for 12 months<sup>3</sup>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END SIXTH -->
                <!-- SEVENTH -->
                <tr class="tr-mobile chart-feature">
                    <th colspan="3">
                        <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--4">
                            America’s best network<sup class="u-text--11">4</sup>
                        </h2>
                    </th>
                </tr>
                <tr class="tr-mobile">
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16 u-colorRed">Verizon</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--pink)">T-Mobile</span>
                    </td>
                    <td>
                        <span class="u-fontDisplay u-textBold u-text--16" style="color: var(--sky-blue)">AT&amp;T</span>
                    </td>
                </tr>
                <tr class="includes">
                    <td class="td-desktop u-paddingLeft--lg64">
                        <div class="chart-feature">
                            <h2 class="u-fontDisplay u-textBold u-text--20 u-textLineHeightNormal u-textxsCenter u-textLeft u-marginBottom--0">
                                America’s best network<sup class="u-text--11">4</sup>
                            </h2>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none">
                                <path d="M18.3624 4.94785L7.36519 15.945L1.67188 10.2424L2.45077 9.46356L7.36519 14.3873L17.5649 4.1875L18.3624 4.94785Z" fill="#008331"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="includes-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="5 15 26 5" fill="none">
                                <path d="M23.4448 23.3779L17.9844 17.9176L12.524 23.3779L11.6428 22.4967L17.1032 17.0363L11.6428 11.576L12.524 10.6948L17.9844 16.1551L23.4448 10.6948L24.326 11.576L18.8656 17.0363L24.326 22.4967L23.4448 23.3779Z" fill="#EE001E"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <!-- END SEVENTH -->
            </tbody>
        </table>

        <div style="max-width: 1020px; margin: auto">
            <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs0">
                <b>
                    Current plans refer to the following consumer postpaid plans:
                    Unlimited Ultimate, Unlimited Plus, and Unlimited Welcome. 3-yr Price
                    Guarantee:
                </b>
                Applies to the then-current base monthly rate charged by Verizon for
                your talk, text, and data; excludes taxes, fees, surcharges, additional
                plan discounts or promotions, and third-party services. Price guarantee
                is void if any of the lines are canceled or moved to an ineligible plan.
                Plan perks, taxes, fees, and surcharges are subject to change.
            </p>
        </div>
    </div>
</section>
  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  
  <section>
  <div class="Container">
    <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs16">
      <b>1. Save 40% on Entertainment:</b> Compared to retail price for
      applicable streaming service with select myPlan Perks.
    </p>
    <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs16">
      <b>2. Satellite Texting: </b>Satellite connectivity requires select new
      model phones with updated software. Must be outside with a line of sight
      to the satellite. Satellite connectivity might not work in parts of
      Alaska.
    </p>
    <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs16">
      <b>3. Financial tools &amp; services:</b> New enrollees to Verizon’s Auto Pay
      can get up to $10/mo off each eligible wireless phone line, up to 12 lines
      max (depending on plan) using Verizon’s Visa card as the payment method.
      Verizon + Openbank high yield savings account eligible for additional
      savings of $5/mo, $10/mo, or $15/mo for up to 12 consecutive months from
      the date your Deposit Account is opened with average Deposit Account
      balance between $1,000 and $9,999.99, $10,000 and $29,999.99, and equal to
      or greater than $30,000, respectively.
      Visit&nbsp;https://www.verizon.com/products-perks/banking-cards/&nbsp;for full
      details
    </p>
    <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs16">
      <b>
        4. Best network: Based on RootMetrics® U.S. RootScore® Report: 2H 2025. Not an endorsement. All rights reserved.
      </b>
    </p>
    <p class="u-fontDisplay u-text--xs11 u-textLineHeightNormal u-marginBottom--xs16">
      <b>5. 60 min international calling:</b> Comparison based on
      mobile-to-mobile international calling rates from the U.S. to locations
      outside of the U.S. for Verizon’s Global Choice plan (included with
      Unlimited Ultimate plan), AT&amp;T’s International Calling package (optional
      $15/line for international calling to 85+ countries and discounted rates
      to other countries), and T-Mobile’s Stateside International Talk package
      (optional $15/line or $20/account with unlimited international
      mobile-to-mobile calling to 30+ countries and discounted rates to other
      countries). Verizon Unlimited Ultimate plan allows customers to choose one
      country to call at no additional cost for up to 300 minutes, with the
      number of included minutes depending on the location chosen. Calls to the
      chosen location that exceed the monthly allotment, and calls to other
      countries, are charged a discounted per minute rate. Additional details on
      international calling.
    </p>
  </div>
</section>

  
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--lg80">
</div></div>
<div class="accordion aem-GridColumn aem-GridColumn--default--12">




  
  

  
  













<section class="u-colorBackgroundSecondary u-colorPrimary">
  <div class="Container u-marginBottom--0">
    <div class="cmp-accordion Col Col--12 u-colorBackgroundSecondary u-colorPrimary" data-dynamic="https://www.verizon.com/support/spot/?tag=unlockandswitch-switching&amp;count=30&amp;t=1589217688376">
      <h2 class="cmp-accordion-header u-textCenter u-textxsCenter u-fontDisplay u-textLineHeightTight u-text--40 u-text--md48 u-text--lg64 u-marginBottom--48">

        <span class="u-screenReaderOnly">
          Have questions about switching your network to Verizon? We've got answers.
        </span>
          <span aria-hidden="true">
            Have questions about switching your network to Verizon? We've got answers.
          </span>
      </h2>
      <div class="cmp-accordion-items u-colorPrimary">
        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I know if I can bring my number?
      </h3>
    </summary>
    <div>
        <p>Most phone numbers are eligible to be brought to Verizon*, but some numbers may not be eligible based on geography, service area coverage, technology, or ownership of the line you're transferring from. You can always check your eligibility before you switch to Verizon.</p>
<p><span class="support-footnote">*Local Number Portability, a government mandate, requires mobile and landline service providers to let customers keep their eligible phone numbers when switching carriers.</span></p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do I unlock my phone?
      </h3>
    </summary>
    <div>
        <p>To unlock your AT&amp;T phone, there are some requirements you should be aware of. Your device must be:</p>
<ul>
<li>Paid off.</li>
<li>Not associated with another active AT&amp;T account.</li>
<li>Not reported as lost, stolen, or involved with fraud.</li>
</ul>
<p>You also have to be sure to not have a past-due account balance with AT&amp;T in order to fully unlock your device.</p>
<p>Once you meet these requirements, you can submit a "Device Unlock" request via AT&amp;T's website, or one of our retail representatives can assist you if you're visiting us in-store.</p>
<p>For a phone locked to T-Mobile's network, first make sure your phone is eligible for unlocking, then follow these steps:</p>
<ul>
<li>Make sure you are connected to your wireless network or Wi-Fi.</li>
<li>For Android phones, you can typically find a "device unlock" or "network unlock" option in Settings.</li>
<li>For Apple phones, simply contact T-Mobile and request that they unlock the device.</li>
</ul>
<p>For other carriers and brands, you should call your mobile provider for guidance.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What is my device ID and how do I find it?
      </h3>
    </summary>
    <div>
        <p>A device ID is a string of letters and numbers used to uniquely identify your smartphone, tablet, or smartwatch. Your device ID is stored on your device and can be retrieved by any app that is downloaded and installed. There are a few ways to find your device ID, with the easiest one being in your device's Settings menu.</p>
<p>For Apple devices, go to Settings &gt; General &gt; About. Scroll to find your IMEI number.</p>
<p>For other devices, like Android, go to Settings &gt; System &gt; About Phone. Look for your IMEI number listed here or tap Status for more info.</p>
<p>For additional ways to find your device ID, <a href="/switch-to-verizon/support/find-device-id-video/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p1||||||What is my device ID and how do I find it?|play this video.&quot;}">play this video.</a></p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What do I need to do to get a Better Deal with Verizon, and what part of my bill should I have ready?
      </h3>
    </summary>
    <div>
        <p>Make sure to bring the part of your bill that clearly shows your name, address, phone numbers, bill date, current plan details, device payments and price. You can bring a physical, digital or pdf copy of your bill. To qualify for the Better Deal offer, you must provide a postpaid mobile bill from T-Mobile or AT&amp;T from within the past 45 days. The bill must be in the same name as the new account owner switching service to Verizon.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        If I want to switch to Verizon, do I need to show my bill?
      </h3>
    </summary>
    <div>
        <p>You can switch to Verizon without showing a copy of your bill at any time. But for the Better Deal analysis, a bill is required.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        If I'm an existing customer can I bring in my bill?
      </h3>
    </summary>
    <div>
        <p>No. If you are an existing customer there is no need to bring in your bill, but you can go to a Verizon store or call us [1-800-366-0227] today to make sure you are getting the most value from your plan.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What information will I need to provide when bringing my number to Verizon?
      </h3>
    </summary>
    <div>
        <p>To start the online process of bringing your number to Verizon, we need:</p>
<ul>
<li>The current active number that you want to bring to Verizon.</li>
<li>An account number.*</li>
<li>Your <a href="#whatispin" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p2||||||What information will I need to provide when bringing my number to Verizon?|Number Transfer PIN&quot;}">Number Transfer PIN</a>** from your current carrier.</li>
<li>A security code. Depending on your carrier, this may be the Number Transfer PIN, security PIN, or password. Note: The code is specific to the line/number and is not the log-in for your account.</li>
<li>Another number where we can reach you during the switching process (other than the number you’re bringing to Verizon).</li>
</ul>
<p><span class="support-footnote">*Not required for transferring from Tracfone to Verizon mobile.
<br aria-hidden="true">
 **If you're bringing your number in person at a Verizon store, bring your most recent bill instead.</span></p>

    </div>
  </details>

        
      </div>
    </div>
  </div>
</section></div>
<div class="sectionHeader aem-GridColumn aem-GridColumn--default--12">







  
  

  
  



<section translate="yes" class="u-colorBackgroundSecondary u-colorPrimary     "> 
  <div class="Container u-marginBottom--0">
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     ">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs0 u-marginBottom--lg0  ">
      
      
    </div>
    

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      <a href="/switch-to-verizon/switch-to-verizon/faq/" aria-label="View all FAQs" data-description="View all FAQs" class="Button Button--cta  u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l7|p1|||||||View all FAQs&quot;}">View all FAQs</a>
      
      
    </div>
  </div>


            
          </div>
      </div>
    </div>
  </div>
</section></div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--md48 u-paddingTop--lg64">
</div></div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  
      <vz-sticky-cmp style="--sticky-bottom: 0" data-triggers="[
          {
            &quot;element&quot;: &quot;body&quot;,
            &quot;animate&quot;: &quot;show&quot;
          }
        ]" data-initialized="true" data-visibility="show">
      <section class="u-colorBackgroundSecondary">
        <div class="Container u-paddingY--16 u-marginBottom--0">
          <div class="gap-group-cta u-flex u-flexJustifyCenter--xs u-flexAlignItemsCenter--xs u-flexJustifyCenter--xl u-flexAlignItemsCenter--xl  u-flexRow">
            <a href="/switch-to-verizon/nextgendigital/sales/browse/bill-upload/" data-impression-category="Other-Brand" data-campaign-id="2025_OCT_AW_2_SWITCHER_STORE" class="Button u-textBreakNoWrap u-paddingX--24 u-paddingY--12 u-marginAll--0" aria-label="Go to Upload your bill" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l8|p1|Other-Brand|||||2025_OCT_AW_2_SWITCHER_STORE|Go to Upload your bill&quot;}">
              Upload your bill
            </a>
            <a href="javascript:void(0)" data-modal="switch-online-modal" data-impression-category="Other-Brand" data-campaign-id="2025_OCT_AW_1_SWITCHER_ONLINE" class="Button u-textBreakNoWrap u-paddingX--24 u-paddingY--12 u-marginAll--0" aria-label="Go to Switch online" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l8|p2|Other-Brand|||||2025_OCT_AW_1_SWITCHER_ONLINE|Go to Switch online&quot;}">
              Switch online
            </a>
          </div>
        </div>
      </section>
    </vz-sticky-cmp>

  
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>#switch-online-modal {
  .Button {
    width: 100% !important;
    margin: 0px;
  }

  .Modal {
    max-width: 560px !important;
  }

  @media screen and (min-width: 991px) {
    .Modal {
      border-radius: 8px;
    }
  }
}
</style>
  <div class="Modal-container" id="switch-online-modal">
  <div class="Modal-overlay"></div>
  <div class="Modal" role="dialog" aria-modal="true" aria-hidden="true" aria-expanded="false">
    <button class="Modal-close" aria-label="Close modal"></button>
    <div class="Modal-content">
      <div class="u-fontDisplay u-paddingAll--sm4 u-paddingAll--lg32">
        <div>
          <h2 class="u-fontDisplay u-textLineHeightExtraTight u-text--xs32 u-text--lg32 u-paddingY--xs0 u-paddingY--md0 u-marginAll--0">
            How would you like to start?
          </h2>
          <div class="Col Col--xs12 u-paddingAll--0 u-displayFlex u-flexColumn u-marginTop--xs24 u-marginTop--lg32">
            <span class="button aem-GridColumn aem-GridColumn--default--12">
              <a href="/switch-to-verizon/plans/unlimited/" translate="yes" class="Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20">
                Shop plans
              </a>
            </span>
            <span class="button aem-GridColumn aem-GridColumn--default--12">
              <a href="/switch-to-verizon/smartphones/" translate="yes" class="Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20">
                Shop phones
              </a></span>
            <span class="button aem-GridColumn aem-GridColumn--default--12">

              <a href="/switch-to-verizon/bring-your-own-device/" translate="yes" class="Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--0">
                Bring your own phone
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
</div>

  
</div></main>

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


<div class="gnav20-click-div"></div><script defer="">
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




  

  

  
  
  
  
  
  
  

            

        
    

<script id="offline-gridwall-stubs">
(function(){
  if (typeof window.getPersonalizedResults === 'function') {
    var orig = window.getPersonalizedResults;
    window.getPersonalizedResults = function() {
      try { return orig.apply(this, arguments); } catch (e) { return; }
    };
  } else {
    window.getPersonalizedResults = function(){};
  }
})();
</script>
</body></html>