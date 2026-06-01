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
  <title>Learn About Used Phones &amp; Devices | Verizon</title>

<meta name="description" content="Find out about Verizon’s Certified Pre-Owned and Used program so you can save on your next upgrade or replacement. Shop refurbished phones in great and very good condition now.">
<meta name="robots" content="index,follow">



<meta property="og:title" content="Learn About Used Phones &amp; Devices | Verizon">
<meta property="og:site_name" content="Verizon">
<meta property="og:url" content="https://www.verizon.com/certified-pre-owned/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
<meta property="og:description" content="Find out about Verizon’s Certified Pre-Owned and Used program so you can save on your next upgrade or replacement. Shop refurbished phones in great and very good condition now.">
<meta property="og:type" content="article">


  <meta http-equiv="x-dns-prefetch-control" content="on">









  


  <link rel="preload" href="/certified-pre-owned/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" as="style">
  <link rel="preload" href="/certified-pre-owned/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" as="style">
  <link rel="preload" href="/certified-pre-owned/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" as="style">
  <link rel="preload" href="/certified-pre-owned/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" as="style">
  <link rel="preload" href="/certified-pre-owned/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" as="style">




  












  <link rel="preload" media="(max-width: 767px)" imagesrcset="https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_m?fmt=webp-alpha&amp;scl=2 1x, https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_m?fmt=webp-alpha&amp;scl=1 2x" as="image" fetchpriority="high">





  <link rel="preload" media="(min-width: 768px)" imagesrcset="https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_d?fmt=webp-alpha&amp;scl=2 1x, https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_d?fmt=webp-alpha&amp;scl=1 2x" as="image" fetchpriority="high">






  

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

    var pathName = "/content/wcms/certified-pre-owned",
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




  

  
    
    

    

    
    
    


  

   
   
   
   
   
   
 
   <link rel="stylesheet" href="assets/www.verizon.com/content/dam/vzwcom/certified-pre-owned/css/components.css">

  
  
  
    <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css" type="text/css">
  
  

<script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" type="text/javascript" defer=""></script>
</head>
    <body class="page basicpage js-focus-visible" id="page-92cc28d3c3">
        
        
        
            




            



            
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
  
  <div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="hero" class="extended-bg      ">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="html">
  
    

  


  <style>@media screen and (max-width: 768px) {
  [data-cmp=vzrf-promo-hero][data-cmp-img-just=center] .cmp-wrapper .Grid .Col .btn-wrap,
  [data-cmp=vzrf-promo-hero][data-cmp-img-just=center] .cmp-wrapper .Grid .Col .headlineWrap,
  [data-cmp=vzrf-promo-hero][data-cmp-img-just=center] .cmp-wrapper .Grid .Col h1,
  [data-cmp=vzrf-promo-hero][data-cmp-img-just=center] .cmp-wrapper .Grid .Col h2,
  [data-cmp=vzrf-promo-hero][data-cmp-img-just=center] .cmp-wrapper .Grid .Col p {
    max-width: 500px !important;
    text-align: center !important;
  }
}

@media screen and (min-width: 468px){
.background-image.background-positionX--xs50 {
    background-position-x: 80% !important;
}
}
[data-cmp=vzrf-promo-hero] .cmp-wrapper .Grid .Col .btn-wrap a:focus{outline-color:#fff!important;}</style>
  
  
</div>


    
    
    <div class="promoHero">




  
  

  
  



<div data-cmp="vzrf-promo-hero" translate="yes" data-cmp-img-just="center" data-cmp-text-m="centerCenter" data-cmp-img-size="lifestyle" data-cmp-img-align-dt="center" data-cmp-img-align-m="center" data-cmp-header="large" data-cmp-promo-bg-color="black">
  <div class="cmp-wrapper">
    

    
      
        <div data-loading="eager" data-height-css="" style="--height--xs:560px;--height--md:477px; --bgMobile:url('https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_m?fmt=webp-alpha&amp;scl=2'); --bgMobile2x:url('https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_m?fmt=webp-alpha&amp;scl=1'); --bgDesktop:url('https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_d?fmt=webp-alpha&amp;scl=2'); --bgDesktop2x:url('https://ss7.vzw.com/is/image/VerizonWireless/232842_CPO_LP_hero_d?fmt=webp-alpha&amp;scl=1');" class="Grid u-paddingTop--xs16 u-paddingRight--xs0 u-paddingBottom--xs16 u-paddingLeft--xs0 u-paddingTop--lg20 u-paddingRight--lg0 u-paddingBottom--lg20 u-paddingLeft--lg50 u-flexAlignContentStart--md background-image background-cover--xs background-cover--md background-positionX--xs50">
          
            
  <div class="Col Col--xs12 Col--md6 Col--lg6 u-positionRelative--xs u-positionRelative--md content-wrap">
    <div class="headlineWrap u-marginBottom--xs16 u-marginBottom--lg20">
      <h1 class="u-fontDisplay u-textLineHeightExtraTight u-marginBottom--0 u-textBold u-textLeft u-displayInline">
        
        <span class="promo-data-header">
          Certified Pre-Owned. Certified peace of mind.<p></p>
        </span>
      </h1>
      
    </div>
    <p class="u-fontDisplay u-textLineHeightExtraTight u-text--xs16 u-text--md u-text--lg20 u-marginBottom--xs24 u-marginBottom--lg32 u-textRegular u-textLeft  ">
      Every Certified Pre-Owned phone, tablet and smartwatch from Verizon is rigorously tested and inspected—so you are guaranteed a reliable device from day one.
      
    </p>
    

    <div class="btn-wrap">
      <a href="/certified-pre-owned/devices/certified-pre-owned/" aria-label="Certified Pre-Owned. Certified peace of mind. Shop all" data-description="Certified Pre-Owned. Certified peace of mind. Shop all" class="Button Button--secondary Button--transparent  u-fontDisplay u-textBreakNoWrap u-marginBottom--xs0" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l1|p1||||||Certified Pre-Owned. Certified peace of mind.|Certified Pre-Owned. Certified peace of mind. Shop all&quot;}">Shop all</a>
      
      
    </div>
  </div>
  

          
        </div>
      

      

    
  </div>
</div></div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="section_451099370">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs72 u-paddingRight--xs0 u-paddingBottom--xs28 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg96 u-paddingRight--lg0 u-paddingBottom--lg24 u-paddingLeft--lg0 u-flexAlignContentCenter--xs u-flexAlignContentCenter--md u-flexAlignContentCenter--lg " data-loaded="true">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg20">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        A worry-free
<br class="u-hideForMediumUp" aria-hidden="true">way to upgrade.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg20">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg20 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Go Pre-Owned and rest easy, with
<br class="u-hideForMediumUp" aria-hidden="true">flexible payment options and the
<br class="u-hideForMediumUp" aria-hidden="true">support you get from Verizon.

      
    </p>
    
  </div>


</div>


    
    
    <div class="promoPods">





  
  

  
  



<div data-cmp="vzrf-promo-pods" translate="yes" data-cmp-theme="light" data-cmp-variant="no-image" data-cmp-layout="4">
  <div class="cmp-wrapper">
    <div class="wrapper default">

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="90-day limited warranty. pod" aria-describedby="_0" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p1||||||A worry-free way to upgrade.|90-day limited warranty. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="90-day limited warranty._0" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 u-displayInline">
          90-day limited warranty.
        </h3><span class="tooltip">​
          <span class="vzrf-tooltip" data-tooltip-content="This device has been used and is sold in as-is condition. If you experience a manufacturing defect within 90 days from the date of purchase and activation of Verizon service, Verizon will replace it with a comparable unit. Additional insurance coverage available." data-tooltip-type="icon" data-aria-label="90-day limited warranty." data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on 90-day limited warranty. tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">This device has been used and is sold in as-is condition. If you experience a manufacturing defect within 90 days from the date of purchase and activation of Verizon service, Verizon will replace it with a comparable unit. Additional insurance coverage available.</span>
  </span>
        </span>
      </div>

      
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="Spread payments over 36 months. pod" aria-describedby="_1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p2||||||90-day limited warranty.|Spread payments over 36 months. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="Spread payments over 36 months._1" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Spread payments over 36 months.
        </h3>
        
      </div>

      
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="Verizon Support when you need it. pod" aria-describedby="_2" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p3||||||Spread payments over 36 months.|Verizon Support when you need it. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="Verizon Support when you need it._2" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Verizon Support when you need it.
        </h3>
        
      </div>

      
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="A green choice that reduces e-waste. pod" aria-describedby="_3" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p4||||||Verizon Support when you need it.|A green choice that reduces e-waste. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="A green choice that reduces e-waste._3" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          A green choice that reduces e-waste.
        </h3>
        
      </div>

      
      

    </div>
  </div>

      

    </div>
  </div>
</div></div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="preowned-devices">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundGray--1        u-paddingTop--xs72 u-paddingRight--xs0 u-paddingBottom--xs40 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg96 u-paddingRight--lg0 u-paddingBottom--lg68 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg " data-loaded="true">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs40 u-marginBottom--lg48">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Shop our wide
<br class="u-hideForMediumUp" aria-hidden="true">selection of
<br aria-hidden="true">Pre-Owned
<br class="u-hideForMediumUp" aria-hidden="true">devices.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="categoryTilelets">





  
  

  
  



<div data-cmp="vzrf-category-tilelets" data-cmp-variant="default" data-tilelet-bg-color="white">
  <div class="cmp-wrapper">
    <div class="wrapper-category-tilelets tileCol-3 progress-bar-slider carousel-mode" data-slick="{&quot;touchThreshold&quot;:500,&quot;variableWidth&quot;:true,&quot;accessibility&quot;:false,&quot;mobileFirst&quot;:true,&quot;infinite&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:3000,&quot;slidesToShow&quot;:1,&quot;focusOnChange&quot;:false,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;button class='slick-prev slick-arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0' aria-label='Previous'&gt;&lt;/button&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;button class='slick-next slick-arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0' aria-label='Next'&gt;&lt;/button&gt;&quot;,&quot;alignLastSlideRight&quot;:true,&quot;responsive&quot;:[{&quot;settings&quot;:{&quot;touchThreshold&quot;:500,&quot;slidesToShow&quot;:1}},{&quot;breakpoint&quot;:415,&quot;settings&quot;:{&quot;touchThreshold&quot;:500,&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:615,&quot;settings&quot;:{&quot;touchThreshold&quot;:500,&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:1025,&quot;settings&quot;:&quot;unslick&quot;}]}" data-columns="3" aria-label="" aria-hidden="false" role="group"><a class="tilelet-wrapper" href="/certified-pre-owned/smartphones/certified-pre-owned/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p1||||||Pre-Owned Deals|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-1-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-1-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-1-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-1-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
          Pre-Owned Deals
        </h3>
      </div>
    </div>
  </a><a class="tilelet-wrapper" href="/certified-pre-owned/smartphones/certified-pre-owned/apple/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p2||||||iPhone|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-2-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-2-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-2-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-2-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
          iPhone
        </h3>
      </div>
    </div>
  </a><a class="tilelet-wrapper" href="/certified-pre-owned/smartphones/certified-pre-owned/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p3||||||Android phones|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-3-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-3-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-3-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-3-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
           Android phones
        </h3>
      </div>
    </div>
  </a><a class="tilelet-wrapper" href="/certified-pre-owned/tablets/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p4||||||Tablets|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-4-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-4-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-4-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-4-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
          Tablets
        </h3>
      </div>
    </div>
  </a><a class="tilelet-wrapper" href="/certified-pre-owned/connected-smartwatches/certified-pre-owned/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p5||||||Smartwatches|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-5-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-5-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-5-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-5-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
          Smartwatches
        </h3>
      </div>
    </div>
  </a><a class="tilelet-wrapper" href="/certified-pre-owned/devices/certified-pre-owned/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p6||||||Shop all devices|A green choice that reduces e-waste. pod&quot;}">
    <span class="u-screenReaderOnly"></span>
    <div class="tilelet u-positionRelative u-flexJustifyEnd">
      <picture class="lozad background-picture u-width100" data-alt="" aria-hidden="true" tabindex="-1">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-6-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-6-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-6-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-product-6-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
        <img alt="" aria-hidden="true" tabindex="-1">
      </picture>
      <div class="tilelet-head-wrapper u-paddingAll--xs16 u-paddingAll--xl24">
        <h3 class="tilelet-head u-fontDisplay u-textLineHeightNormal u-text--xs14 u-text--md16 u-textBold u-marginBottom--0">
          Shop all devices
        </h3>
      </div>
    </div>
  </a></div>
  </div>
</div></div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="quality-inspection">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs48 u-paddingRight--xs0 u-paddingBottom--xs16 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg80 u-paddingRight--lg0 u-paddingBottom--lg0 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg ">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        First, each
<br class="u-hideForMediumUp" aria-hidden="true">
device is tested
<br aria-hidden="true">and inspected
<br class="u-hideForMediumUp" aria-hidden="true">to the fullest.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs32 u-marginBottom--lg28">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg20 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        All of our devices undergo a thorough quality
<br class="u-hideForMediumUp" aria-hidden="true">inspection to ensure they’re fully functional,
<br class="u-showForMediumUp" aria-hidden="true"><br class="u-hideForMediumUp" aria-hidden="true">working perfectly and include essential
<br class="u-hideForMediumUp" aria-hidden="true">accessories such as charging cables.<span class="tooltip">​



  <span class="vzrf-tooltip" data-tooltip-content="Charging cables are included with phones and bands are included with smartwatches." translate="yes" data-tooltip-type="icon" data-tooltip-label="Charging cables and Bands" data-aria-label="Charging cables and Bands" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on Charging cables and Bands tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">Charging cables are included with phones and bands are included with smartwatches.</span>
  </span>


</span>



    </p>
    
  </div>


</div>


    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs16 u-paddingRight--xs16 u-paddingBottom--xs24 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg20 u-paddingRight--lg20 u-paddingBottom--lg24 u-paddingLeft--lg0 u-flexAlignContentCenter--xs u-flexAlignContentCenter--md u-flexAlignContentCenter--lg ">

    
      
  
  

  
    
  
    
  
    
  
    
  
    
  
    
  
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-power-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-power-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-power-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-power-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Power

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs36 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Battery charges up and the charge
<br class="u-hideForMediumUp" aria-hidden="true"><br class="u-showForLargeUp" aria-hidden="true">
indicator works.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-connectivity-d?fmt=webp-alpha&amp;extend=0%2C25%2C0%2C0&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-connectivity-d?fmt=webp-alpha&amp;extend=0%2C25%2C0%2C0&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-connectivity-m?fmt=webp-alpha&amp;extend=0%2C25%2C0%2C0&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-connectivity-m?fmt=webp-alpha&amp;extend=0%2C25%2C0%2C0&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Connectivity

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs48 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Wi-Fi and other connections
<br aria-hidden="true">work properly.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-display-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-display-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-display-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-display-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Display

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs48 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Images are clear and bright, and all
<br class="u-hideForMediumUp" aria-hidden="true">colors
<br class="u-showForLargeUp" aria-hidden="true">are sharp. Every pixel works.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-ports-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-ports-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-ports-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-ports-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Ports

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs48 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        All ports and card slots are
<br aria-hidden="true">completely functional.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-audio-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-audio-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-audio-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-audio-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Audio

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs48 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Speakers, microphones and
<br aria-hidden="true">Bluetooth must work.

      
    </p>
    
  </div>


</div>



        </div>
      
    
      
        <div class="Col Col--xs12 Col--md4 Col--lg4 u-paddingAll--0 u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="image">




  

  
    <picture class="u-marginBottom--xs12 u-marginBottom--lg16 u-displayInlineBlock">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-keyboards-software-d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-keyboards-software-d?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 768px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-keyboards-software-m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/vz-cpolp-icon-keyboards-software-m?fmt=webp-alpha&amp;scl=1 2x" media="(min-width: 320px)">
      <img loading="lazy" alt="">
    </picture>
  
</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs12 u-marginBottom--lg16">
    <h3 class="u-fontDisplay u-textLineHeightExtraTight  u-text--xs24 u-text--md20 u-text--lg32 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Keyboards &amp; software

      
    </h3>
    
  </div>


</div>


    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs48 u-marginBottom--lg72">
    <p class="u-fontDisplay u-textLineHeightNormal  u-text--xs16 u-text--md u-text--lg16 u-textRegular      u-marginBottom--xs0 u-marginBottom--lg0">
        Software is up-to-date and all
<br class="u-hideForMediumUp" aria-hidden="true">buttons
<br class="u-showForLargeUp" aria-hidden="true">and soft keyboards work.

      
    </p>
    
  </div>


</div>



        </div>
      
    
  

    
  </div>
</div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="section_802485413">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs0 u-paddingRight--xs0 u-paddingBottom--xs28 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg0 u-paddingRight--lg0 u-paddingBottom--lg20 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentCenter--md u-flexAlignContentCenter--lg ">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs24 u-marginBottom--lg32">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg64 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Then every
<br class="u-hideForMediumUp" aria-hidden="true">device gets
<br class="u-showForMediumUp" aria-hidden="true">a
<br class="u-hideForMediumUp" aria-hidden="true">cosmetic grade.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="u-textCenter">






    
    
    <span class="button">



  <a href="/certified-pre-owned/devices/certified-pre-owned/" translate="yes" class="Button Button--secondary Button--transparent u-textBreakNoWrap u-marginBottom--xs12 u-marginBottom--lg28   " data-description="Shop all every device which gets a cosmetic grade" aria-label="Shop all every device which gets a cosmetic grade" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p1||||||Then every device gets a cosmetic grade.|Shop all every device which gets a cosmetic grade&quot;}">
    Shop all 
  </a>






</span>


</div>


    
    
    <div class="promoPods">





  
  

  
  



<div data-cmp="vzrf-promo-pods" translate="yes" data-cmp-theme="light" data-cmp-variant="no-image" data-cmp-layout="3">
  <div class="cmp-wrapper">
    <div class="wrapper default">

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="Good pod" aria-describedby="The option for the most savings. May have minor scratches or dents._0" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p2||||||Then every device gets a cosmetic grade.|Good pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Good_0" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Good
        </h3>
        
      </div>

      <p id="The option for the most savings. May have minor scratches or dents._0" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        The option for the most savings. May have minor scratches or dents.
        
      </p>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="Very good pod" aria-describedby="Will have slightly less scratches._1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p3||||||Good|Very good pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Very good_1" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Very good
        </h3>
        
      </div>

      <p id="Will have slightly less scratches._1" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        Will have slightly less scratches.
        
      </p>
      

    </div>
  </div>

      
        
        
  
  
  <div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone " aria-label="Great pod" aria-describedby="In the best condition, with the least scratches and scuffs._2" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l5|p4||||||Very good|Great pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs12 u-marginBottom--md16">
        <h3 id="Great_2" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Great
        </h3>
        
      </div>

      <p id="In the best condition, with the least scratches and scuffs._2" class="pod-subhead u-fontDisplay u-text--xs16 u-textLineHeightNormal u-marginBottom--xs24 u-marginBottom--lg32">
        In the best condition, with the least scratches and scuffs.
        
      </p>
      

    </div>
  </div>

      

    </div>
  </div>
</div></div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="more-about">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundGray--1        u-paddingTop--xs72 u-paddingRight--xs0 u-paddingBottom--xs72 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg80 u-paddingRight--lg0 u-paddingBottom--lg80 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentCenter--md u-flexAlignContentCenter--lg ">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs16 u-marginBottom--lg20">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs40 u-text--md u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        More about
<br class="u-hideForMediumUp" aria-hidden="true">Certified Pre-Owned devices.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="promoPods">





  
  

  
  



<div data-cmp="vzrf-promo-pods" translate="yes" data-cmp-theme="light" data-cmp-variant="no-image" data-cmp-layout="3">
  <div class="cmp-wrapper">
    <div class="wrapper default carousel-mode" data-slick="{&quot;accessibility&quot;:false,&quot;mobileFirst&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;focusOnChange&quot;:false,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;button class=\&quot;slick-prev slick-arrow Icon Icon--left-arrow\&quot; aria-label=\&quot;previous\&quot;&gt;&lt;/button&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;button class=\&quot;slick-next slick-arrow Icon Icon--right-arrow\&quot; aria-label=\&quot;next\&quot;&gt;&lt;/button&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;settings&quot;:&quot;unslick&quot;}]}" aria-label="" aria-hidden="false" role="group"><div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="Certified Pre-owned phones - what you need to know. pod" aria-describedby="_0" href="/certified-pre-owned/articles/prepaid-and-cpo/certified-pre-owned-phones--your-top-questions-answered/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p1||||||More about Certified Pre-Owned devices.|Certified Pre-owned phones - what you need to know. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="Certified Pre-owned phones - what you need to know._0" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          Certified Pre-owned phones - what you need to know.
        </h3>
        
      </div>

      
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/certified-pre-owned/articles/prepaid-and-cpo/certified-pre-owned-phones--your-top-questions-answered/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p2||||||Certified Pre-owned phones - what you need to know.|Read more&quot;}">
          Read more
        </a>
      

    </div>
  </div><div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="The benefits of buying an unlocked phone. pod" aria-describedby="_1" href="/certified-pre-owned/articles/switching-to-verizon/whats-an-unlocked-phone/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p3||||||Certified Pre-owned phones - what you need to know.|The benefits of buying an unlocked phone. pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="The benefits of buying an unlocked phone._1" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          The benefits of buying an unlocked phone.
        </h3>
        
      </div>

      
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/certified-pre-owned/articles/switching-to-verizon/whats-an-unlocked-phone/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p4||||||The benefits of buying an unlocked phone.|Read more&quot;}">
          Read more
        </a>
      

    </div>
  </div><div class="pod-item u-positionRelative">
    <a class="u-positionAbsolute u-width100 u-height100 u-topAlign u-bottomAlign u-leftAlign u-rightAlign u-textDecorationNone  pod-item-cta" aria-label="What to Understand About IMEI Numbers pod" aria-describedby="_2" href="/certified-pre-owned/articles/prepaid-and-cpo/what-to-know-when-buying-a-used-phone/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p5||||||The benefits of buying an unlocked phone.|What to Understand About IMEI Numbers pod&quot;}"></a>

    
    <div class="wrapper-pod-content u-marginBottom--xs16 u-marginBottom--md0 content-centered ">
      
      <div class="pod-header-wrapper u-marginBottom--xs24 u-marginBottom--md32">
        <h3 id="What to Understand About IMEI Numbers_2" class="pod-header u-fontDisplay u-textLineHeightExtraTight u-text--xs24 u-text--lg32 u-marginBottom--xs0 ">
          What to Understand About IMEI Numbers
        </h3>
        
      </div>

      
      
        <a class="pod-cta u-fontDisplay Button Button--cta u-textLeft " href="/certified-pre-owned/articles/prepaid-and-cpo/what-to-know-when-buying-a-used-phone/" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l6|p6||||||What to Understand About IMEI Numbers|Read more&quot;}">
          Read more
        </a>
      

    </div>
  </div></div>
  </div>
</div></div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="faqs_where" class="extended-bg      ">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="grid">








  <div data-height-css="" class="Grid lozad u-colorBackgroundSecondary        u-paddingTop--xs72 u-paddingRight--xs0 u-paddingBottom--xs72 u-paddingLeft--xs0 u-paddingTop--md  u-paddingRight--md u-paddingBottom--md u-paddingLeft--md u-paddingTop--lg80 u-paddingRight--lg0 u-paddingBottom--lg80 u-paddingLeft--lg0 u-flexAlignContentStart--xs u-flexAlignContentStart--md u-flexAlignContentStart--lg ">

    
      
  
  

  
    
  
    
      
        <div class="Col Col--xs12 Col--md12 Col--lg12  u-positionRelative--xs u-positionRelative--md ">
          
          
          




    
    
    <div class="text">



  <div translate="yes" class="u-textCenter u-textxsCenter
    u-colorPrimary u-marginBottom--xs8 u-marginBottom--lg24">
    <h2 class="u-fontDisplay u-textLineHeightTight  u-text--xs32 u-text--md u-text--lg48 u-textBold      u-marginBottom--xs0 u-marginBottom--lg0">
        Have questions?
<br aria-hidden="true">We’ve got answers.

      
    </h2>
    
  </div>


</div>


    
    
    <div class="accordion">




  
  

  
  














  
    <div class="cmp-accordion Col Col--12 u-colorBackgroundSecondary u-colorPrimary" data-dynamic="https://www.verizon.com/support/spot/?tag=certified-preowned-faqs-benefits&amp;count=4&amp;t=1589217688376">
      
      <div class="cmp-accordion-items u-colorPrimary">
        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do other people feel about their used phones?
      </h3>
    </summary>
    <div>
        <p>According to <a href="https://www.consumerreports.org/smartphones/should-you-buy-a-refurbished-phone-a1521807626/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l7|p1||||||How do other people feel about their used phones?|consumer reports&quot;}">consumer reports</a>, the refurbished phones offered by manufacturers, cell phone carriers, and major retailers are generally "certified," which means they've been inspected and often upgraded to make sure they're in good working condition. This means these phones operate as they should, and consumers can use them like a new device.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        What's the difference between pre-owned and certified pre-owned phones?
      </h3>
    </summary>
    <div>
        <p>The term "<a href="/certified-pre-owned/smartphones/certified-pre-owned/" target="_blank" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l7|p2||||||What's the difference between pre-owned and certified pre-owned phones?|certified pre-owned&quot;}">certified pre-owned</a>" refers to all pre-owned smartphones Verizon sells, which are vetted for quality and given a quality rating by Verizon before being sold to the consumer. Not all retailers certify their devices before selling them to consumers, so this is an extra step Verizon takes in quality assurance with all pre-owned devices we sell.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        Is it safe to buy a pre-owned cell phone?
      </h3>
    </summary>
    <div>
        <p>Yes. It is safe to buy a pre-owned phone from a trusted source that vets them for quality and ensures they are in good working condition. Verizon rates all certified pre-owned phones and makes that rating known to the consumer.</p>

    </div>
  </details>

        
          
  <details>
    <summary role="button" aria-expanded="false">
      <h3>
        How do you know if a phone is refurbished?
      </h3>
    </summary>
    <div>
        <p>All pre-owned phones at Verizon are sold as "certified pre-owned" devices.</p>

    </div>
  </details>

        
      </div>
    </div>
  
</div>


    
    
    <div class="u-textCenter">






    
    
    <span class="button">



  <a href="/certified-pre-owned/certified-pre-owned/faq/" translate="yes" class="Button Button--cta Button--transparent u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20   " data-description="View all FAQs" aria-label="View all FAQs" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l7|p3||||||How do you know if a phone is refurbished?|View all FAQs&quot;}">
    View all FAQs
  </a>






</span>


</div>



        </div>
      
    
  

    
  </div>
</div>



  </div>

    
  </section>
</div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>#quality-inspection .image {
    text-align: center;
    min-height: 60px;
}

#preowned-devices,
#more-about {
    background-color: #F6F6F6;
}

.wrapper-pod-content.content-centered {
    text-align: center;
    flex-direction: column;
    align-items: center;
}

#hero .Container {
    max-width: 1600px !important;
}


[data-cmp=vzrf-promo-pods] .wrapper-pod-content .pod-header-wrapper {
    width: 80%;
}

@media screen and (max-width: 544px) {
    [data-cmp=vzrf-promo-pods] .pod-item+.pod-item {
        margin-top: 8px;
    }
}

@media screen and (max-width: 1023px) {
    #hero h1 {
        font-size: 40px;
        line-height: 40px !important;
    }

    #hero p {
        line-height: 20px !important;
    }
}

@media screen and (min-width: 1024px) {
    #hero h1 {
        line-height: 64px !important;
    }

    #hero p {
        line-height: 24px !important;
    }

    [data-cmp=vzrf-promo-pods][data-cmp-layout="4"] .pod-header-wrapper {
        width: 98%;
    }
}</style>
  
  
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

  
  
  <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/tagging.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>




  

  

  
  
  
  
  
  
  

            

        
    

</body></html>