<?php
declare(strict_types=1);
require_once __DIR__ . '/../../base-url.php';
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
  <title>Samsung at Verizon: Phones, Tablets, Smartwatches | Verizon</title>
<meta name="keywords" content="samsung, samsung galaxy, samsung phones, samsung smartwatch, galaxy phone, samsung galaxy watch, galaxy watch, samsung tablet, samsung galaxy tab">
<meta name="description" content="Get the latest and greatest Samsung products, including the newest smartphones, smartwatches, and tablets. Compare devices and shop at Verizon.">
<meta name="robots" content="index,follow">



<meta property="og:title" content="Samsung at Verizon: Phones, Tablets, Smartwatches | Verizon">
<meta property="og:site_name" content="Verizon">
<meta property="og:url" content="https://www.verizon.com/wireless-devices/samsung/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
<meta property="og:description" content="Get the latest and greatest Samsung products, including the newest smartphones, smartwatches, and tablets. Compare devices and shop at Verizon.">
<meta property="og:type" content="article">


  <meta http-equiv="x-dns-prefetch-control" content="on">









  


  <link rel="preload" href="/wireless-devices/samsung/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base.min.css" as="style">
  <link rel="preload" href="/wireless-devices/samsung/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/sm.min.css" media="screen and (min-width: 320px)" as="style">
  <link rel="preload" href="/wireless-devices/samsung/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/md.min.css" media="screen and (min-width: 768px)" as="style">
  <link rel="preload" href="/wireless-devices/samsung/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/lg.min.css" media="screen and (min-width: 991px)" as="style">
  <link rel="preload" href="/wireless-devices/samsung/etc.clientlibs/vzwcom/components/vzrf/clientlibs/components-base/xl.min.css" media="screen and (min-width: 1200px)" as="style">




  












  <link rel="preload" media="(max-width: 767px)" imagesrcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-m?fmt=webp-alpha&amp;scl=2 1x, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-m?fmt=webp-alpha&amp;scl=1 2x" as="image" fetchpriority="high">





  <link rel="preload" media="(min-width: 768px)" imagesrcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-d?fmt=webp-alpha&amp;scl=2 1x, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-d?fmt=webp-alpha&amp;scl=1 2x" as="image" fetchpriority="high">






  

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

    var pathName = "/content/wcms/wireless-devices/samsung",
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




  

  
    
    

    

    
    
    


  

   
   
   
   
   
   
 
   

  
  
  
    <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css" type="text/css">
  
  

<script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" type="text/javascript" defer=""></script>
</head>
    <body class="page basicpage js-focus-visible" id="page-67e3e4e8af">
        
        
        
            




            



            
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





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs24 u-paddingTop--md24 u-paddingTop--lg24">
</div></div>
<div class="hero aem-GridColumn aem-GridColumn--default--12">





  
  

  
  



  

  <div data-cmp="vzrf-hero">

    
        <section data-loading="eager" translate="yes" style=" --bgMobile:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-m?fmt=webp-alpha&amp;scl=2'); --bgMobile2x:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-m?fmt=webp-alpha&amp;scl=1'); --bgTablet:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-t?fmt=webp-alpha&amp;scl=2'); --bgTablet2x:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-t?fmt=webp-alpha&amp;scl=1'); --bgDesktop:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-d?fmt=webp-alpha&amp;scl=2'); --bgDesktop2x:url('https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_lp_nopromo_banner_2_25-d?fmt=webp-alpha&amp;scl=1');" class="rounded-corner  background-image background-cover--lg extended-bg background-cover--xs background-cover--md background-positionX--lg50 background-positionX--md50 background-positionX--xs50 u-colorBackgroundPrimary">
    
    
    <div class="Container u-marginLeft--0">
    
      <div data-height-css="" style="--height--xs:560px;--height--md:480px;--height--lg:480px;" class="Grid u-paddingTop--xs32 u-paddingBottom--xs56 u-paddingLeft--xs0 u-paddingRight--xs16 u-paddingBottom--md48 u-paddingLeft--md4 u-paddingRight--md20 u-paddingTop--md84 u-paddingBottom--lg48 u-paddingRight--lg168 u-paddingTop--lg89 u-paddingLeft--lg168">
        <div class="u-positionRelative--xs u-positionRelative--md Col Col--xs12 Col--md6 Col--lg8">
    
    


        <div class="header">
          <div class="u-colorPrimary u-paddingBottom--xs12 u-paddingTop--xs0 u-paddingLeft--xs0 u-paddingRight--xs12 u-paddingBottom--lg16 u-paddingTop--lg0 u-paddingLeft--lg4 u-paddingRight--lg0">

            <h1 class=" u-fontDisplay u-marginAllNone u-text--xs40 u-lineHeight--xs40 u-text--md48 u-lineHeight--md48 u-text--lg64 u-lineHeight--lg64">
                
              <span class="promo-data-header">
                Samsung
<br aria-hidden="true">Galaxy S26
<br aria-hidden="true">Series is here
              </span><span class="tooltip">​
                <span class="vzrf-tooltip" data-tooltip-content="S Pen and functionality only available with Galaxy S26 Ultra. Galaxy AI basic features provided by Samsung are free. Any Samsung enhanced AI features and all third-party AI features are subject to different terms and may be subject to fees." data-tooltip-type="icon" data-aria-label="SamsungGalaxy S26series is here" data-cmp-vzrf-initialized="true">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-expanded="false" aria-label="More information on SamsungGalaxy S26series is here tooltip">
      
    </button>
    <span class="u-screenReaderOnly" aria-hidden="true">S Pen and functionality only available with Galaxy S26 Ultra. Galaxy AI basic features provided by Samsung are free. Any Samsung enhanced AI features and all third-party AI features are subject to different terms and may be subject to fees.</span>
  </span>
              </span>

              </h1>


            </div>

        </div>

        

        


       
      </div>
      
      </div>
      </div>
    </section>
  </div>


</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--lg64">
</div></div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="section_831855107">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="sectionHeader">







  
  

  
  



 
  
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     " id="galaxy-phones-hero">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs20 u-marginBottom--lg0  ">
      <h2 class=" u-fontDisplay u-textLineHeightTight u-text--xs40 u-text--md u-text--lg64 u-textBold u-displayInline">
        Explore the latest Galaxy phones
      </h2>
      
    </div>
    

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      <a href="/wireless-devices/samsung/smartphones/samsung/" aria-label="Explore the latest Galaxy phones Shop phones" data-description="Explore the latest Galaxy phones Shop phones" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Phone-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p1|Phone-Samsung|||||Explore the latest Galaxy phones|Explore the latest Galaxy phones Shop phones&quot;}">Shop phones</a>
      <a href="/wireless-devices/samsung/wireless-devices/smartphones/samsung-compare/" aria-label="Explore the latest Galaxy phones Compare phones" data-description="Explore the latest Galaxy phones Compare phones" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Phone-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p2|Phone-Samsung|||||Explore the latest Galaxy phones|Explore the latest Galaxy phones Compare phones&quot;}">Compare phones</a>
      <a href="/wireless-devices/samsung/products/allproducts/samsung/" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Phone-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p3|Phone-Samsung|||||Explore the latest Galaxy phones|Shop accessories&quot;}">Shop accessories</a>
    </div>
  </div>


            
          </div>
      </div>
    </div>
  
</div>


    
    
    <div class="spacer">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--lg64">
</div></div>


    
    
    <div class="products">






  <div data-cmp="vzrf-products">



  

  

  

  
    <div class="reveal-wrap" data-cmp-vzrf-initialized="true">
      <div class="product-grid u-paddingAll--4" collapse-factor="" expand-scroll="" data-product-id="dev21414268,dev21414266,dev21414260,dev21413075,dev21413074,dev21414584,dev21412394" style="max-height: 635px;">

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-s26-ultra/" aria-label="Save $1119.99.   Samsung Galaxy S26 Ultra Buy now Start at $5/mo was $36.11/mo   For 36 months, 0% APR; Retail Price: $1299.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p4||||||Samsung Galaxy S26 Ultra|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true" data-loaded="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Save $1119.99.  
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy S26 Ultra
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$5.00/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4396146&amp;deviceId=dev21414268&amp;skuId=sku6044459&amp;flow=NSE&amp;loanTerm=36" data-modal-type="icon" data-modal-label="Save $1119.99.  ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Save $1119.99.   modal" data-modal="dynamic-modal-0">
      
    </button>
  </span>
            </span>
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingTop--xs12 u-paddingTop--lg8">
              was <s>$36.11/mo</s>
            </span>
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $1299.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-s26-plus/" aria-label="Save $1100.   Samsung Galaxy S26+ Buy now Start at $0/mo was $30.55/mo   For 36 months, 0% APR; Retail Price: $1099.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p5||||||Samsung Galaxy S26+|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true" data-loaded="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Save $1100.  
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy S26+
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$0.00/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397101&amp;deviceId=dev21414266&amp;skuId=sku6044451&amp;flow=NSE&amp;loanTerm=36" data-modal-type="icon" data-modal-label="Save $1100.  ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Save $1100.   modal" data-modal="dynamic-modal-1">
      
    </button>
  </span>
            </span>
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingTop--xs12 u-paddingTop--lg8">
              was <s>$30.55/mo</s>
            </span>
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $1099.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-s26/" aria-label="Save $900.   Samsung Galaxy S26 Buy now Start at $0/mo was $24.99/mo   For 36 months, 0% APR; Retail Price: $899.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p6||||||Samsung Galaxy S26|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true" data-loaded="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Save $900.  
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy S26
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$0.00/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4396847&amp;deviceId=dev21414260&amp;skuId=sku6044535&amp;flow=NSE&amp;loanTerm=36" data-modal-type="icon" data-modal-label="Save $900.  ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Save $900.   modal" data-modal="dynamic-modal-2">
      
    </button>
  </span>
            </span>
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingTop--xs12 u-paddingTop--lg8">
              was <s>$24.99/mo</s>
            </span>
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $899.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true" aria-hidden="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-z-fold7/" aria-label="Trade in and save up to $1100.  Samsung Galaxy Z Fold7 Buy now Start at $55.55/mo    For 36 months, 0% APR; Retail Price: $1999.99" tabindex="-1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p7||||||Samsung Galaxy Z Fold7|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $1100. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Z Fold7
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$55.55/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4394915&amp;deviceId=dev21413075&amp;skuId=sku6033086&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120022" data-modal-type="icon" data-modal-label="Trade in and save up to $1100. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="-1" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $1100.  modal" data-modal="dynamic-modal-3">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $1999.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true" aria-hidden="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-z-flip7/" aria-label="Save $739.99.   Samsung Galaxy Z Flip7 Buy now Start at $10/mo was $30.55/mo   For 36 months, 0% APR; Retail Price: $1099.99" tabindex="-1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p8||||||Samsung Galaxy Z Flip7|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Save $739.99.  
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Z Flip7
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$10.00/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4396137&amp;deviceId=dev21413074&amp;skuId=sku6033054&amp;flow=NSE&amp;loanTerm=36" data-modal-type="icon" data-modal-label="Save $739.99.  ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="-1" aria-describedby="vzrf-tooltip-temp" aria-label="More information Save $739.99.   modal" data-modal="dynamic-modal-4">
      
    </button>
  </span>
            </span>
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingTop--xs12 u-paddingTop--lg8">
              was <s>$30.55/mo</s>
            </span>
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $1099.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true" aria-hidden="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-a37-5g/" aria-label="Save $400.   Samsung Galaxy A37 5G Buy now Start at $1.38/mo was $12.49/mo   For 36 months, 0% APR; Retail Price: $449.99" tabindex="-1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p9||||||Samsung Galaxy A37 5G|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Save $400.  
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy A37 5G
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$1.38/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4394692&amp;deviceId=dev21414584&amp;skuId=sku6046814&amp;flow=NSE&amp;loanTerm=36" data-modal-type="icon" data-modal-label="Save $400.  ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="-1" aria-describedby="vzrf-tooltip-temp" aria-label="More information Save $400.   modal" data-modal="dynamic-modal-5">
      
    </button>
  </span>
            </span>
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingTop--xs12 u-paddingTop--lg8">
              was <s>$12.49/mo</s>
            </span>
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $449.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true" aria-hidden="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/smartphones/samsung-galaxy-a16-5g/" aria-label=" Samsung Galaxy A16 5G Buy now Start at $5.55/mo    For 36 months, 0% APR; Retail Price: $199.99" tabindex="-1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l2|p10||||||Samsung Galaxy A16 5G|Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy A16 5G
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$5.55/mo</span>
            <span class="product-tooltip">
              

              
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $199.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      </div>
      <div class="Bar Bar--secondary u-paddingY--xs24 u-paddingY--lg32 u-colorBackgroundSecondary u-textCenter">
        <button class="Button Button--cta u-text--xs16 u-text--lg20 reveal-btn collapsed" aria-expanded="false" aria-label="View all trending products">View all</button>
      </div>
    </div>
  

  

</div></div>


    
    
    <div class="html">
  
    

  


  <style>#galaxy-phones-hero .Button {
        margin-bottom: 12px !important;
}</style>
  
  <script>setTimeout(() => {
var productTooltips = document.querySelectorAll(".product-tooltip");
if (productTooltips && productTooltips.length) {
    productTooltips.forEach((tooltip) => {
        var button = tooltip.querySelector(".Icon");
        if (button) {
            button.addEventListener("click", (e) => { e.preventDefault() })
            button.addEventListener("keydown", (e) => { e.preventDefault() })
        }
    })
}
}, 1000)
</script>
</div>



  </div>

    
  </section>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs96 u-paddingTop--lg128">
</div></div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="section_831855107_co">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="sectionHeader">







  
  

  
  



 
  
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     ">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs0 u-marginBottom--lg0  ">
      <h2 class=" u-fontDisplay u-textLineHeightTight u-text--xs40 u-text--md u-text--lg64 u-textBold u-displayInline">
        Do more with connected devices
      </h2>
      
    </div>
    

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      <a href="/wireless-devices/samsung/connected-smartwatches/samsung/" aria-label="Do more with connected devices Shop wearables" data-description="Do more with connected devices Shop wearables" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Watch-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p1|Watch-Samsung|||||Do more with connected devices|Do more with connected devices Shop wearables&quot;}">Shop wearables</a>
      <a href="/wireless-devices/samsung/products/wearable-tech/samsung/" aria-label="Do more with connected devices Shop accessories" data-description="Do more with connected devices Shop accessories" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Watch-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p2|Watch-Samsung|||||Do more with connected devices|Do more with connected devices Shop accessories&quot;}">Shop accessories</a>
      
    </div>
  </div>


            
          </div>
      </div>
    </div>
  
</div>


    
    
    <div class="spacer">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--lg64">
</div></div>


    
    
    <div class="products">






  <div data-cmp="vzrf-products">



  

  

  

  
    <div class="reveal-wrap" data-cmp-vzrf-initialized="true">
      <div class="product-grid u-paddingAll--4" collapse-factor="" expand-scroll="" data-product-id="dev21413101,dev21413104,dev21413127,dev21411750" style="max-height: 636px;">

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/connected-smartwatches/samsung-galaxy-watch8/" aria-label="Trade in and save up to $400.  Samsung Galaxy Watch8 Buy now Start at $11.11/mo    For 36 months, 0% APR; Retail Price: $399.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p3||||||Samsung Galaxy Watch8|Do more with connected devices Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch8-40mm-silver-sml325uzsv?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch8-40mm-silver-sml325uzsv?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch8-40mm-silver-sml325uzsv?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch8-40mm-silver-sml325uzsv?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch8-40mm-silver-sml325uzsv?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $400. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Watch8
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$11.11/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397181&amp;deviceId=dev21413101&amp;skuId=sku6033633&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" data-modal-type="icon" data-modal-label="Trade in and save up to $400. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $400.  modal" data-modal="dynamic-modal-6">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $399.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/connected-smartwatches/samsung-galaxy-watch8-classic/" aria-label="Trade in and save up to $400.  Samsung Galaxy Watch8 Classic Buy now Start at $15.27/mo    For 36 months, 0% APR; Retail Price: $549.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p4||||||Samsung Galaxy Watch8 Classic|Do more with connected devices Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch8-classic-46mm-black-sml505uzkv?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch8-classic-46mm-black-sml505uzkv?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch8-classic-46mm-black-sml505uzkv?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch8-classic-46mm-black-sml505uzkv?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch8-classic-46mm-black-sml505uzkv?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $400. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Watch8 Classic
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$15.27/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397181&amp;deviceId=dev21413104&amp;skuId=sku6033629&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" data-modal-type="icon" data-modal-label="Trade in and save up to $400. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $400.  modal" data-modal="dynamic-modal-7">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $549.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/connected-smartwatches/samsung-galaxy-watch-ultra-2025/" aria-label="Trade in and save up to $400.  Samsung Galaxy Watch Ultra 2025 Buy now Start at $18.05/mo    For 36 months, 0% APR; Retail Price: $649.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p5||||||Samsung Galaxy Watch Ultra 2025|Do more with connected devices Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch-ultra-2025-47mm-titaniumblue-sml705uzbm?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch-ultra-2025-47mm-titaniumblue-sml705uzbm?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch-ultra-2025-47mm-titaniumblue-sml705uzbm?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch-ultra-2025-47mm-titaniumblue-sml705uzbm?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-watch-ultra-2025-47mm-titaniumblue-sml705uzbm?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $400. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Watch Ultra 2025
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$18.05/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397181&amp;deviceId=dev21413127&amp;skuId=sku6033638&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" data-modal-type="icon" data-modal-label="Trade in and save up to $400. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $400.  modal" data-modal="dynamic-modal-8">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $649.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true" aria-hidden="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/connected-smartwatches/samsung-galaxy-watch-ultra/" aria-label="Trade in and save up to $400.  Samsung Galaxy Watch Ultra Buy now Start at $18.05/mo    For 36 months, 0% APR; Retail Price: $649.99" tabindex="-1" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l3|p6||||||Samsung Galaxy Watch Ultra|Do more with connected devices Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch-7-pro-titanium-gray?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch-7-pro-titanium-gray?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch-7-pro-titanium-gray?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch-7-pro-titanium-gray?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-watch-7-pro-titanium-gray?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $400. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Watch Ultra
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$18.05/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397181&amp;deviceId=dev21411750&amp;skuId=sku6014200&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" data-modal-type="icon" data-modal-label="Trade in and save up to $400. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="-1" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $400.  modal" data-modal="dynamic-modal-9">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $649.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      </div>
      <div class="Bar Bar--secondary u-paddingY--xs24 u-paddingY--lg32 u-colorBackgroundSecondary u-textCenter">
        <button class="Button Button--cta u-text--xs16 u-text--lg20 reveal-btn collapsed" aria-expanded="false" aria-label="View all trending products">View all</button>
      </div>
    </div>
  

  

</div></div>



  </div>

    
  </section>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs96 u-paddingTop--lg128">
</div></div>
<div class="section aem-GridColumn aem-GridColumn--default--12">







  <section id="section_831855107_co_64075281">

    
      
  
  

  <div class="Container   ">
    




    
    
    <div class="sectionHeader">







  
  

  
  



 
  
    <div translate="yes" class="u-colorBackgroundSecondary u-colorPrimary u-textCenter u-textxsCenter     " id="section-header-btn-fix">
      <div class="cmp-wrapper">
          <div class="Grid u-paddingY--16 u-paddingY--lg20 u-flexAlignContentStart--md">
            
              
  
  <div class="Col Col--12 u-positionRelative content-wrap">
    <div class="headlineWrap u-marginBottom--xs0 u-marginBottom--lg0  ">
      <h2 class=" u-fontDisplay u-textLineHeightTight u-text--xs40 u-text--md u-text--lg64 u-textBold u-displayInline">
        Must-have tablets that do it all
      </h2>
      
    </div>
    

    <div class="btn-wrap u-marginTop--24 u-marginTop--lg32">
      <a href="/wireless-devices/samsung/tablets/samsung/" aria-label="Must-have tablets that do it all Shop tablets" data-description="Must-have tablets that do it all Shop tablets" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Tablet-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p1|Tablet-Samsung|||||Must-have tablets that do it all|Must-have tablets that do it all Shop tablets&quot;}">Shop tablets</a>
      <a href="/wireless-devices/samsung/products/tablet-accessories/samsung/" aria-label="Must-have tablets that do it all Shop accessories" data-description="Must-have tablets that do it all Shop accessories" class="Button   u-paddingY--12 u-paddingX--24 u-fontDisplay u-textBreakNoWrap " data-impression-category="Tablet-Samsung" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p2|Tablet-Samsung|||||Must-have tablets that do it all|Must-have tablets that do it all Shop accessories&quot;}">Shop accessories</a>
      
    </div>
  </div>


            
          </div>
      </div>
    </div>
  
</div>


    
    
    <div class="spacer">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs48 u-paddingTop--lg64">
</div></div>


    
    
    <div class="products">






  <div data-cmp="vzrf-products">



  

  

  

  
    <div class="reveal-wrap" data-cmp-vzrf-initialized="true">
      <div class="product-grid u-paddingAll--4" collapse-factor="" expand-scroll="" data-product-id="dev21412140,dev21412776,dev21414088,dev21412024" style="max-height: 636px;">

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/tablets/samsung-galaxy-tab-s10-plus-5g/" aria-label="Trade in and save up to $600.  Samsung Galaxy Tab S10+ 5G Buy now Start at $31.94/mo    For 36 months, 0% APR; Retail Price: $1149.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p3||||||Samsung Galaxy Tab S10+ 5G|Must-have tablets that do it all Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-plus-smx828uzaa?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-plus-smx828uzaa?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-plus-smx828uzaa?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-plus-smx828uzaa?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-plus-smx828uzaa?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $600. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Tab S10+ 5G
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$31.94/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397177&amp;deviceId=dev21412140&amp;skuId=sku6017585&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" data-modal-type="icon" data-modal-label="Trade in and save up to $600. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $600.  modal" data-modal="dynamic-modal-10">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $1149.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/tablets/samsung-galaxy-tab-s10-fe-5g/" aria-label="Trade in and save up to $600.  Samsung Galaxy Tab S10 FE 5G Buy now Start at $16.66/mo    For 36 months, 0% APR; Retail Price: $599.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p4||||||Samsung Galaxy Tab S10 FE 5G|Must-have tablets that do it all Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-fe-5g-smx528uzaa?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-fe-5g-smx528uzaa?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-fe-5g-smx528uzaa?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-fe-5g-smx528uzaa?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-s10-fe-5g-smx528uzaa?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $600. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Tab S10 FE 5G
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$16.66/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397177&amp;deviceId=dev21412776&amp;skuId=sku6027854&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" data-modal-type="icon" data-modal-label="Trade in and save up to $600. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $600.  modal" data-modal="dynamic-modal-11">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $599.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  <div class="product-tile u-colorBackgroundGray--1 u-positionRelative" data-cmp-vzrf-initialized="true">
    
    
    <a class="u-paddingAll--xs24 u-paddingAll--lg32 u-colorPrimary u-textDecorationNone u-displayBlock" href="/wireless-devices/samsung/tablets/samsung-galaxy-tab-a11-plus-5g/" aria-label="Trade in and save up to $280.  Samsung Galaxy Tab A11+ 5G Buy now Start at $7.77/mo    For 36 months, 0% APR; Retail Price: $279.99" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;l4|p5||||||Samsung Galaxy Tab A11+ 5G|Must-have tablets that do it all Shop accessories&quot;}">
      <div class="product-image">
        <div class="product-wrapper-image">
          <picture class="lozad" data-iesrc="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-a11-plus-5g-smx238uzaa?fmt=webp-alpha&amp;hei=437" data-alt="" tabindex="-1" aria-hidden="true">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-a11-plus-5g-smx238uzaa?fmt=webp-alpha&amp;hei=437, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-a11-plus-5g-smx238uzaa?fmt=webp-alpha&amp;hei=874 2x" media="(min-width: 768px)">
            <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-a11-plus-5g-smx238uzaa?fmt=webp-alpha&amp;hei=263, https://ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-tab-a11-plus-5g-smx238uzaa?fmt=webp-alpha&amp;hei=526 2x" media="(min-width: 320px)">
            <img alt="" tabindex="-1">
          </picture>
        </div>
      </div>
      <div class="product-info u-paddingTop--xs24 u-paddingTop--lg36 u-marginAll--0 Grid ">
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl7 u-flex u-flexAlignContentEnd u-flexWrap">
          <p class="mobileAriaHidden promo-badging u-displayBlock u-colorAccent u-text--10 u-fontDisplay u-textLineHeightTight u-marginBottom--xs16 u-marginBottom--lg8">
            Trade in and save up to $280. 
          </p>
          <h3 class="mobileAriaHidden u-fontDisplay u-width100 u-textBold u-textLineHeightTight u-colorPrimary u-text--xs16 u-text--lg20 u-marginBottom--0">
            Samsung
<br aria-hidden="true">
            Galaxy Tab A11+ 5G
          </h3>
        </div>
        <div class="Col Col--xs12 u-paddingX--0 Col--lg6 Col--xl5 u-flex u-flexJustifyEnd--lg u-flexAlignContentEnd u-flexWrap u-paddingTop--xs12 u-paddingTop--lg0">
          <p class="u-fontDisplay u-colorPrimary u-text--xs16 u-text--lg20 product-price u-marginBottom--0">
            <span class="mobileAriaHidden u-displayBlock u-text--10 u-paddingBottom--lg8">
              Start at
            </span>
            <span class="mobileAriaHidden">$7.77/mo</span>
            <span class="product-tooltip">
              

              <span class="vzrf-modal" data-url-modal="/us/promotion/details?promoId=promo4397182&amp;deviceId=dev21414088&amp;skuId=sku6043676&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" data-modal-type="icon" data-modal-label="Trade in and save up to $280. ">
    <button class="Icon Icon--info u-textDecorationNone u-text--xs14 u-text--lg16" tabindex="0" aria-describedby="vzrf-tooltip-temp" aria-label="More information Trade in and save up to $280.  modal" data-modal="dynamic-modal-12">
      
    </button>
  </span>
            </span>
            
            
            <span class="mobileAriaHidden u-displayBlock u-text--10 monthly-details">For
              36 months, 0%
              APR;
<br aria-hidden="true">Retail Price: $279.99</span>
          </p>
        </div>
      </div>
    </a>

  </div>


      

        
  


      </div>
      <div class="Bar Bar--secondary u-paddingY--xs24 u-paddingY--lg32 u-colorBackgroundSecondary u-textCenter" style="display: none;">
        <button class="Button Button--cta u-text--xs16 u-text--lg20 reveal-btn collapsed" aria-expanded="false" aria-label="View all trending products">View all</button>
      </div>
    </div>
  

  

</div></div>



  </div>

    
  </section>
</div>
<div class="spacer aem-GridColumn aem-GridColumn--default--12">





  
  

  
  





<div data-cmp="vzrf-spacer" class="u-paddingTop--xs96 u-paddingTop--lg128">
</div></div>
<div class="html aem-GridColumn aem-GridColumn--default--12">
  
    

  


  <style>.cmp-wrapper .Grid.u-paddingY--lg20 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}</style>
  
  
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
				<a class="gnav20-social-media" href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Facebook" title="Opens New Window"><span>facebook-official</span><svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78"><path fill="#fff" d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"></path></svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Twitter" title="Opens New Window"><span>twitter</span><svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Youtube" title="Opens New Window"><span>you-tube</span><svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18.5 18" style="enable-background:new 0 0 18.5 18;" xml:space="preserve">
						<path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2
							s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4
							S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"></path>
					</svg></a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Instagram" title="Opens New Window"><span>instagram</span><svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
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
				<a class="gnav20-social-media" href="https://tiktok.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on TikTok" title="Opens New Window"><span>TikTok</span><svg xmlns="http://www.w3.org/2000/svg" height="19" viewBox="0 0 16 18">
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
				<a class="gnav20-social-media" href="https://x.com" target="_blank" rel="noopener noreferrer" aria-label="Verizon Support on Twitter" title="Opens New Window"><span>twitter</span><svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
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


<div class="gnav20-click-div"></div><div>
  <div class="Modal-container" id="dynamic-modal-0" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4396146&amp;deviceId=dev21414268&amp;skuId=sku6044459&amp;flow=NSE&amp;loanTerm=36" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-1" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397101&amp;deviceId=dev21414266&amp;skuId=sku6044451&amp;flow=NSE&amp;loanTerm=36" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-2" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4396847&amp;deviceId=dev21414260&amp;skuId=sku6044535&amp;flow=NSE&amp;loanTerm=36" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-3" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4394915&amp;deviceId=dev21413075&amp;skuId=sku6033086&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120022" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-4" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4396137&amp;deviceId=dev21413074&amp;skuId=sku6033054&amp;flow=NSE&amp;loanTerm=36" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-5" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4394692&amp;deviceId=dev21414584&amp;skuId=sku6046814&amp;flow=NSE&amp;loanTerm=36" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-6" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397181&amp;deviceId=dev21413101&amp;skuId=sku6033633&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-7" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397181&amp;deviceId=dev21413104&amp;skuId=sku6033629&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-8" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397181&amp;deviceId=dev21413127&amp;skuId=sku6033638&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-9" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397181&amp;deviceId=dev21411750&amp;skuId=sku6014200&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120030" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-10" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397177&amp;deviceId=dev21412140&amp;skuId=sku6017585&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-11" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397177&amp;deviceId=dev21412776&amp;skuId=sku6027854&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div><div>
  <div class="Modal-container" id="dynamic-modal-12" role="dialog">
    <div class="Modal-overlay"></div>
    <div class="Modal dynamic-modal" aria-modal="true" aria-hidden="true" aria-expanded="false">
      <button class="Modal-close" aria-label="Close"></button>
      <iframe class="lozad" data-src="/us/promotion/details/?promoId=promo4397182&amp;deviceId=dev21414088&amp;skuId=sku6043676&amp;flow=NSE&amp;loanTerm=36&amp;tradeinMarketingId=120048" frameborder="0" width="100%" height="100%" title="Promo information" tabindex="-1"></iframe>
      <button class="Modal-close Button Button--secondaryInverse u-textBreakNoWrap u-marginBottom--xs16 u-marginBottom--lg20" aria-label="Got it">Got it</button>
    </div>
  </div></div></body></html>