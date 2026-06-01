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
  <title>Accessories: Phone, Gaming, Tablet, Audio, and More | Verizon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <meta name="description" content="Verizon has a wide range of accessories for all of your needs. Shop phone, gaming, tablet, audio, charging, smartwatch and other accessories today.">
  <meta name="template" content="page-content">
  <meta name="robots" content="index, follow">
  
  <meta property="og:title" content="Accessories: Phone, Gaming, Tablet, Audio, and More | Verizon">
  <meta property="og:site_name" content="Verizon">
  <meta property="og:url" content="https://www.verizon.com/products/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
  <meta property="og:description" name="description" content="Verizon has a wide range of accessories for all of your needs. Shop phone, gaming, tablet, audio, charging, smartwatch and other accessories today.">
  <meta property="og:type" content="article">

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  


  <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css" type="text/css">
  
  
  

  <script type="text/javascript">
    (function () {
      function getCookie(cookieName) {
        const name = cookieName + "=";
        const cookieArray = document.cookie.split(";");
        for (const element of cookieArray) {
          let cookie = element;
          while (cookie.charAt(0) == " ") cookie = cookie.substring(1);
          if (cookie.indexOf(name) == 0)
            return cookie.substring(name.length, cookie.length);
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
        const classificationProp =
          "";
        if (classificationProp.length != 0) {
          return classificationProp;
        } else {
          const urlClassifications = [
            { url: "home", classification: "total_home" },
            { url: "speedtest", classification: "total_home" },
            { url: "home/internet/5g", classification: "5g_home" },
            { url: "home/internet/fios-", classification: "fios" },
            { url: "home/internet/lte", classification: "lte" },
            { url: "home/fios-", classification: "fios" },
            { url: "discounts", classification: "mnh" },
            { url: "featured", classification: "mnh" },
            { url: "home/internet/near-me", classification: "near_me" },
          ];
          const currentUrl = window.location.href;
          const urlObject = new URL(currentUrl);
          const relativeUrl = urlObject.pathname.toLowerCase();
          let urlClassificationValue = "";
          const matchURL = urlClassifications.filter(
            ({ url, classification }) => {
              if (relativeUrl.startsWith(url, 1)) {
                urlClassificationValue = classification;
                return true;
              }
            }
          );

          if (matchURL.length == 0) {
            let intent =
              "learn";
            if (intent == "learn") {
              urlClassificationValue = "mobility";
            }
          }

          return urlClassificationValue;
        }
      }

      function getPlatform() {
        if (
          navigator.userAgent.match(
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i
          )
        ) {
          if (window.innerWidth < 768) {
            return "mobile";
          }
          return "tablet";
        }
        return "desktop";
      }

      let pathName = "/content/wcms/products",
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

      const dataLayer = {
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
          displayChannel:
            "vzw",
          flow: flowName,
          id: getCondition() + ",LP_AC",
          name: pageName,
          sourceChannel:
            "vzw",
          type: "landing page", // If error or applicable only on AEM Pages
          subFlow: "", // For Wireless
          throttleList: "",
          urlClassification: getURLClassification(),
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
          cloud: "", // marketing cloud id
          sandbox: "", // AB Test Experience Name
          evolv: "",
          engagement: {
            intent:
              "learn", //  kind of flow(ordering, payment etc)
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
          authStatus:
            getCookie("loggedIn") || getCookie("islogin")
              ? "logged in"
              : "anonymous",
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
          businessUnit:
            "wireless", // Business Unit (eg: Wireline, Wireless, Cloud)
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


  <script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" type="text/javascript" defer=""></script>
  


  
  
  

  

  
  <script type="module" defer="" src="assets/www.verizon.com/etc.clientlibs/verizon-digital/clientlibs/clientlib-site.min.js"></script>


  
  <link rel="stylesheet" href="assets/www.verizon.com/etc.clientlibs/verizon-digital/clientlibs/clientlib-site.min.css" type="text/css">


  

  
  
  
</head>
  <body class="page basicpage" id="page-0290617b45">
    
    
      
<div class="root container responsivegrid vui:theme__surface">

    

    <div id="container-98bd49ee67" class="cmp-container  vui:theme__surface ">
        


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    

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
</header>
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
	<div class="gnav20-sticky-header gnav20-with-promo gnav20-new-design" style="height: 166px;"></div>
</div>



</div>
</header>

<section data-vui-cmp-anchorlinks="" class="vui:cmp-anchorlinks"><div class="vui:cmp-anchorlinks__header"></div></section><main class="main container responsivegrid vui:page-block aem-GridColumn aem-GridColumn--default--12">

    
    
    
    <div id="main-e26c4359ae" class="cmp-container">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  
  <div class="spacer">
    <div data-vui-cmp-spacer="" class="vui:u-padding-top-12x@lg"></div>
</div>
  
</div>
<div class="hero">











  
  

  
  





  <section translate="yes" class="vui:cmp-hero vui:u-position-relative vui:page-block vui:page-block--max-bleed  vui:theme__surface vui:theme--dark-brand" data-vui-style-height="" style="--vui-style-height: 160px; --vui-style-height--md: 220px; --vui-style-height--lg: 320px; ">

      
  

      <div class="vui:cmp-hero__foreground-wrapper vui:u-height-100  vui:page-block vui:page-block--max-bleed vui:page-block--max-bleed vui:page-block--max-bleed vui:u-position-relative vui:grid
            vui:u-padding-left-4x  vui:u-padding-right-4x  vui:u-padding-left-0x@lg  vui:u-padding-right-0x@lg  vui:u-padding-top-24x@lg  vui:u-padding-bottom-12x@lg vui:u-padding-top-8x  vui:u-padding-bottom-16x vui:u-padding-bottom-12x@md
            vui:u-padding-top-16x@md">


        <div class="vui:cmp-hero__content vui:grid__col--12 vui:grid__col--12@md vui:grid__col--12@lg">

  
  
  

  
  
  

  <div class="vui:cmp-hero__header-block  vui:text vui:text--center vui:u-display-flex vui:u-flex-column vui:u-justify-content-center vui:u-align-items-center vui:u-display-block@md vui:text--start@md vui:text--center@md vui:u-display-flex@md vui:u-flex-column@md vui:u-justify-content-center@md vui:u-align-items-center@md vui:u-display-block@lg vui:text--start@lg vui:text--center@lg vui:u-display-flex@lg vui:u-flex-column@lg vui:u-justify-content-center@lg vui:u-align-items-center@lg">
    
    <h1 class="vui:cmp-hero__header vui:theme--fg-primary vui:theme--fg-white vui:text vui:text--bold vui:text--title-xlarge vui:text--feature-small@lg vui:u-margin-bottom-4x vui:u-margin-bottom-4x@md vui:u-margin-bottom-4x@lg vui:u-padding-right-1x">
      Accessories
       
    </h1>
    <h2 class="vui:cmp-hero__subhead vui:theme--fg-primary vui:theme--fg-white vui:text vui:text--bold vui:text--body-large vui:text--title-2xsmall@md vui:text--title-xsmall@lg vui:u-margin-bottom-6x vui:u-margin-bottom-6x@md vui:u-margin-bottom-8x@lg vui:u-padding-right-2x">
      All the gear you want. All right here.
      
    </h2>
    <div class="vui:cmp-hero-button-group vui:button-group  vui:u-margin-bottom-6x vui:u-margin-bottom-6x@md vui:u-margin-bottom-8x@lg u-marginBottom--lg8">
      

      
      
    </div>
    
  </div>
</div>
        

      </div>

  </section>





</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>@media screen and (min-width: 712px) and (max-width: 991px) {
.vui\:carousel__slide-content h3{
font-size: 20px; line-height:24px !important;
}
}</style>
  
  
</div>
<div class="tilegrid">

<!-- Tile Grid -->
<section data-vui-tile-grid="" id="accessories-carousel" translate="yes" class="vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-padding-top-12x@md taggingEnabled">
  
  
    <!-- Tiles -->
    <div class="vui:page-block vui:u-padding-top-4x vui:u-padding-bottom-4x vui:page-block--full-bleed">
      <div class="vui:grid vui:page-block vui:page-block--inset">
        
          <h2 class="vui:grid__col--12 vui:text vui:text--bold vui:text--title-medium vui:text--title-large@lg vui:text--start vui:u-padding-bottom-4x@md vui:u-padding-bottom-0x vui:theme--fg-primary vui:theme--fg-black">
        Top accessory deals and more</h2>
      
      </div>
      <div data-vui-carousel="" class="vui:carousel" id="vui-carousel-9E-oPLDEKT1xATkpFDSDN" role="group" aria-label="Carousel with 8 slides">

        <div class="vui:carousel__scroll-container vui:u-margin-bottom-8x scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
          <div class="vui:carousel__content" tab-index="-1">
            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to active" aria-label="Slide 1 of 8" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/allproducts/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Generic" data-campaign-id="2026_MAR_PR_1_PROMOBAU_ACCY" data-description="Pick 3 and save 20%" aria-label="Pick 3 and save 20%" data-track="{&quot;name&quot;:&quot;l2|p1|Accy-Generic|||||2026_MAR_PR_1_PROMOBAU_ACCY|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-tileimage-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-tileimage-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-tileimage-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-tileimage-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Pick 3 and save 20%
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          When you buy 3 or more regularly priced accessories.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Must purchase 3+ eligible accessories with a retail price of $19.99 or more. Eligible accessories: Get 20% off 3 or more. Max 10 items. Exclusions apply. Items with a retail price ending in $.97 are not eligible. Cannot be combined with other offers. While supplies last." data-vui-aria-label="Pick 3 and save 20%" id="vui-tooltip-__SJlsYaUEkOMGyoYRmVq" aria-expanded="false" aria-label="More information on Pick 3 and save 20% tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 2 of 8" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/apple-airpods-pro-3/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Audio" data-campaign-id="2026_JAN_EV_1_EVERGREEN_APPLE" data-description="Save $50 on AirPods Pro 3" aria-label="Save $50 on AirPods Pro 3" data-track="{&quot;name&quot;:&quot;l2|p2|Accy-Audio|||||2026_JAN_EV_1_EVERGREEN_APPLE|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0126_airpods_3_65off_2_5_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0126_airpods_3_65off_2_5_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0126_airpods_3_65off_2_5_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0126_airpods_3_65off_2_5_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          <p>Save $50 on </p> <p>AirPods Pro 3</p>
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          With Heart Rate Sensing and the world’s best in-ear Active Noise Cancellation.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Limited-time offer. While supplies last. Terms may apply." data-vui-aria-label="Save $50 on AirPods Pro 3" id="vui-tooltip-ra2INna_6qMsnUl4KFNMO" aria-expanded="false" aria-label="More information on Save $50 on AirPods Pro 3 tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 3 of 8" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/allproducts/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Generic" data-campaign-id="2026_FEB_PR_1_PROMOBAU_ACCY" data-description="Accessorize your new phone" aria-label="Accessorize your new phone" data-track="{&quot;name&quot;:&quot;l2|p3|Accy-Generic|||||2026_FEB_PR_1_PROMOBAU_ACCY|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_2_25-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_2_25-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_2_25-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_2_25-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Accessorize your new phone
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Mix and match 5 regularly priced items and save 30%.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Must purchase 3+ eligible accessories with a retail price of $19.99 or more. Eligible accessories: get 20% off 3, 25% off 4 or 30% off 5 or more. Max 10 items. Exclusions apply. Items with a retail price ending in $.97 are not eligible. Cannot be combined with other offers. While supplies last." data-vui-aria-label="Accessorize your new phone" id="vui-tooltip-b1zpQO54OgcMOQRbAEbmS" aria-expanded="false" aria-label="More information on Accessorize your new phone tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 4 of 8" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/shop/online/new-samsung-galaxy-buds4-promo/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Audio" data-campaign-id="2026_MAR_PR_1_PROMOBAU_ACCY" data-description="Save up to $40 on the new Samsung Galaxy Buds4 Series" aria-label="Save up to $40 on the new Samsung Galaxy Buds4 Series" data-track="{&quot;name&quot;:&quot;l2|p4|Accy-Audio|||||2026_MAR_PR_1_PROMOBAU_ACCY|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_samsung_buds_pro4-tileimage-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_samsung_buds_pro4-tileimage-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_samsung_buds_pro4-tileimage-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_samsung_buds_pro4-tileimage-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Save up to $40 on the new Samsung Galaxy Buds4 Series
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Limited-time offer. While supplies last. Terms may apply.
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 5 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/apple-airpods-max-2/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Audio" data-campaign-id="2026_MAR_LA_1_NPI_ACCY" data-description="AirPods Max2. Listening. Remastered." aria-label="AirPods Max2. Listening. Remastered." data-track="{&quot;name&quot;:&quot;l2|p5|Accy-Audio|||||2026_MAR_LA_1_NPI_ACCY|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_airpods_max2-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_airpods_max2-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_airpods_max2-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_airpods_max2-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          AirPods Max2. Listening. Remastered.
        </h3>
      
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 6 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/jbl/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Audio" data-campaign-id="2025_NOV_EV_1_HOLIDAYPRE_JBL" data-description="Sound that moves you" aria-label="Sound that moves you" data-track="{&quot;name&quot;:&quot;l2|p6|Accy-Audio|||||2025_NOV_EV_1_HOLIDAYPRE_JBL|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_jbl_products_evergreen_ngd_hptile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_jbl_products_evergreen_ngd_hptile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_jbl_products_evergreen_ngd_hptile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_jbl_products_evergreen_ngd_hptile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Sound that moves you
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Shop JBL Speakers, Headphones, &amp; More.
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 7 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/meta-ray-ban-display-glasses-and-meta-neural-band/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accy-Wearable" data-campaign-id="2025_OCT_LA_1_PROMOBAU_RAYBAN" data-description="Intelligence. In plain sight" aria-label="Intelligence. In plain sight" data-track="{&quot;name&quot;:&quot;l2|p7|Accy-Wearable|||||2025_OCT_LA_1_PROMOBAU_RAYBAN|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_rayban_display_ngd_hptile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_rayban_display_ngd_hptile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_rayban_display_ngd_hptile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_rayban_display_ngd_hptile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Intelligence. In plain sight
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          New Meta Ray-Ban Display Glasses and Meta Neural Band.
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 8 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/products/products/phone-accessories/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Accessories" data-description="Case Study" aria-label="Case Study" data-track="{&quot;name&quot;:&quot;l2|p8|Accessories|||||Case Study|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_dropship_case_study_ngd_hptile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_dropship_case_study_ngd_hptile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1225_dropship_case_study_ngd_hptile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1225_dropship_case_study_ngd_hptile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Case Study
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Our best selection of cases and accessories, with new styles from brands like CASETiFY, Otterbox, and Casely.
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
          </div>
        <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" aria-disabled="false" data-vui-arrow-bound="true" tabindex="0"></button></div></div>
      <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 53.5341%;"></div></div></div></div>
    </div>
  
</section></div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="phone-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#phone-container .html {
min-width: 120px;
}

.categorytilettes .vui\:carousel__scrubber-track {
display: none;
}

@media (min-width: 1024px) {
#phone-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#phone-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-block">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
    Phone &amp; <br class="vui:u-display-none vui:u-display-block@lg">
    tablet
  </h2>
    </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-PNDroiJgjqBr-XKEsja-T" role="group" aria-label="Carousel with 6 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecases/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/phone-cases/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Phone cases" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p1|Accy-Phone+Tablet|||||2026_FEB_EV_1_EVERGREEN_NA|Phone cases&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Phone cases
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecaseattachments?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecaseattachments?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecaseattachments?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecaseattachments?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-phonecaseattachments/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/phone-attachments/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="Phone case attachments" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p2|Accy-Phone+Tablet|||||2026_FEB_EV_2_EVERGREEN_NA|Phone case attachments&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Phone case attachments
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-magsafe?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-magsafe?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-magsafe?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-magsafe?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-magsafe/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/magsafe/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Magsafe compatible" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p3|Accy-Phone+Tablet|||||2026_FEB_EV_3_EVERGREEN_NA|Magsafe compatible&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Magsafe compatible
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-screenprotectors?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-screenprotectors?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-screenprotectors?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-screenprotectors?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-screenprotectors/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/phone-screen-protectors/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_4_EVERGREEN_NA" aria-label="Screen protectors" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p4|Accy-Phone+Tablet|||||2026_FEB_EV_4_EVERGREEN_NA|Screen protectors&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Screen protectors
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-tablet ?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-tablet ?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-tablet ?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-tablet ?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-tablet%20/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/tablet-accessories/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_7_EVERGREEN_NA" aria-label="Tablet" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p5|Accy-Phone+Tablet|||||2026_FEB_EV_7_EVERGREEN_NA|Tablet&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Tablet
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="6" aria-label="Slide 6 of 6" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-chargerscables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-chargerscables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-chargerscables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-chargerscables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-phonetablet-chargerscables/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/chargers/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_FEB_EV_8_EVERGREEN_NA" aria-label="Chargers &amp; cables" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l3|p6|Accy-Phone+Tablet|||||2026_FEB_EV_8_EVERGREEN_NA|Chargers &amp; cables&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Chargers &amp; cables
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="charging-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#charging-container .html {
min-width: 120px;
}

@media (min-width: 1024px) {
#charging-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#charging-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-flex vui:u-display-block@lg vui:u-justify-content-between vui:u-align-items-center">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
   Chargers
  </h2>
    </div>
        <div>
  <a class="vui:button vui:button--secondary vui:button--small" href="/products/batteries-and-chargers/" aria-label="shop all batteries and chargers">Shop all</a>
        </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-yo1W_RwjoIBvjIk42K08N" role="group" aria-label="Carousel with 5 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wall?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wall?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wall?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wall?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-charging-wall/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/chargers/" data-impression-category="Accy-Charging" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Wall" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l4|p1|Accy-Charging|||||2026_FEB_EV_1_EVERGREEN_NA|Wall&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Wall
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-car?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-car?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-car?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-car?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-charging-car/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/car-chargers/" data-impression-category="Accy-Charging" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="Car" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l4|p2|Accy-Charging|||||2026_FEB_EV_2_EVERGREEN_NA|Car&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Car
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wireless?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wireless?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wireless?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-wireless?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-charging-wireless/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/wireless-chargers/" data-impression-category="Accy-Charging" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Wireless" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l4|p3|Accy-Charging|||||2026_FEB_EV_3_EVERGREEN_NA|Wireless&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Wireless
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-cables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-cables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-cables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-cables?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-charging-cables/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/adapters-and-cables/" data-impression-category="Accy-Charging" data-campaign-id="2026_FEB_EV_5_EVERGREEN_NA" aria-label="Cables" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l4|p4|Accy-Charging|||||2026_FEB_EV_5_EVERGREEN_NA|Cables&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Cables
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-portable?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-portable?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-portable?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-charging-portable?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-charging-portable/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/batteries/" data-impression-category="Accy-Charging" data-campaign-id="2026_FEB_EV_6_EVERGREEN_NA" aria-label="Portable" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l4|p5|Accy-Charging|||||2026_FEB_EV_6_EVERGREEN_NA|Portable&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Portable
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="audio-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#audio-container .html {
min-width: 120px;
}

@media (min-width: 1024px) {
#audio-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#audio-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-flex vui:u-display-block@lg vui:u-justify-content-between vui:u-align-items-center">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
   Audio
  </h2>
    </div>
        <div>
  <a class="vui:button vui:button--secondary vui:button--small" href="/products/audio/" aria-label="shop all audio accessories">Shop all</a>
        </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-8QbOJJgnf1fB--B7A16VE" role="group" aria-label="Carousel with 8 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product1?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product1?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product1?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product1?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product1/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Earbuds" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p1|Accy-Audio|||||2026_FEB_EV_1_EVERGREEN_NA|Earbuds&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Earbuds
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headphones?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headphones?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headphones?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headphones?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-audio-headphones/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/headphones/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="Headphones" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p2|Accy-Audio|||||2026_FEB_EV_2_EVERGREEN_NA|Headphones&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Headphones
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headsets?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headsets?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headsets?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-headsets?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-audio-headsets/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/headsets/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Headsets" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p3|Accy-Audio|||||2026_FEB_EV_3_EVERGREEN_NA|Headsets&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Headsets
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product4?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product4?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product4?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product4?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product4/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_4_EVERGREEN_NA" aria-label="Party speakers" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p4|Accy-Audio|||||2026_FEB_EV_4_EVERGREEN_NA|Party speakers&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Party speakers
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product5?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product5?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product5?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product5?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product5/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_5_EVERGREEN_NA" aria-label="Portable speakers" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p5|Accy-Audio|||||2026_FEB_EV_5_EVERGREEN_NA|Portable speakers&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Portable speakers
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="6" aria-label="Slide 6 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/soundbars/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_6_EVERGREEN_NA" aria-label="Soundbars" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p6|Accy-Audio|||||2026_FEB_EV_6_EVERGREEN_NA|Soundbars&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Soundbars
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="7" aria-label="Slide 7 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-audio-soundbars/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_7_EVERGREEN_NA" aria-label="Home audio" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p7|Accy-Audio|||||2026_FEB_EV_7_EVERGREEN_NA|Home audio&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Home audio
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="8" aria-label="Slide 8 of 8" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product8?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product8?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product8?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product8?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/1224_vz_accy_lp_product8/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_FEB_EV_8_EVERGREEN_NA" aria-label="Kids audio" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p8|Accy-Audio|||||2026_FEB_EV_8_EVERGREEN_NA|Kids audio&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Kids audio
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="gaming-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#gaming-container .html {
min-width: 120px;
}

@media (min-width: 1024px) {
#gaming-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#gaming-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-flex vui:u-display-block@lg vui:u-justify-content-between vui:u-align-items-center">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
   Gaming
  </h2>
    </div>
        <div>
  <a class="vui:button vui:button--secondary vui:button--small" href="/products/gaming/gaming-store/" aria-label="shop all gaming accessories">Shop all</a>
        </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-dc66_-zF6DSCKpvgOxk08" role="group" aria-label="Carousel with 7 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-xboxgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-xboxgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-xboxgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-xboxgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-xboxgaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/xbox/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Xbox gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p1|Accy-Gaming|||||2026_FEB_EV_1_EVERGREEN_NA|Xbox gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Xbox gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-playstationgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-playstationgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-playstationgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-playstationgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-playstationgaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/playstation/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="PlayStation gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p2|Accy-Gaming|||||2026_FEB_EV_2_EVERGREEN_NA|PlayStation gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        PlayStation gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625-lp-gaming-nintendogaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625-lp-gaming-nintendogaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625-lp-gaming-nintendogaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625-lp-gaming-nintendogaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0625-lp-gaming-nintendogaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/nintendo/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Nintendo gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p3|Accy-Gaming|||||2026_FEB_EV_3_EVERGREEN_NA|Nintendo gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Nintendo gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-vrgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-vrgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-vrgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-vrgaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-vrgaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/vr-gaming/meta/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_4_EVERGREEN_NA" aria-label="Meta Quest gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p4|Accy-Gaming|||||2026_FEB_EV_4_EVERGREEN_NA|Meta Quest gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Meta Quest gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-mobilegaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-mobilegaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-mobilegaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-mobilegaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-mobilegaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/mobile-gaming/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_5_EVERGREEN_NA" aria-label="Mobile gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p5|Accy-Gaming|||||2026_FEB_EV_5_EVERGREEN_NA|Mobile gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Mobile gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="6" aria-label="Slide 6 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-gamingaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-gamingaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-gamingaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-gamingaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-gamingaccessories/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/gaming/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_6_EVERGREEN_NA" aria-label="Gaming accessories" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p6|Accy-Gaming|||||2026_FEB_EV_6_EVERGREEN_NA|Gaming accessories&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Gaming accessories
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="7" aria-label="Slide 7 of 7" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-giftcards?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-giftcards?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-giftcards?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-gaming-giftcards?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-gaming-giftcards/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/all-gift-cards/" data-impression-category="Accy-Gaming" data-campaign-id="2026_FEB_EV_7_EVERGREEN_NA" aria-label="Gift cards" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l6|p7|Accy-Gaming|||||2026_FEB_EV_7_EVERGREEN_NA|Gift cards&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Gift cards
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="wearableTech-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#wearableTech-container .html {
min-width: 120px;
}

@media (min-width: 1024px) {
#wearableTech-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#wearableTech-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-flex vui:u-display-block@lg vui:u-justify-content-between vui:u-align-items-center">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
   Wearable <br class="vui:u-display-none vui:u-display-block@lg">
tech
  </h2>
    </div>
        <div>
  <a class="vui:button vui:button--secondary vui:button--small" href="/products/products/wearable-tech/" aria-label="shop all  Wearable tech accessories">Shop all</a>
        </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-7PwT1DahBPcZYQrw6HWrp" role="group" aria-label="Carousel with 5 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-smartwatches?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-smartwatches?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-smartwatches?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-smartwatches?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-watches-smartwatches/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/connected-smartwatches/" data-impression-category="Accy-Wearable" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Smart watches" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l7|p1|Accy-Wearable|||||2026_FEB_EV_1_EVERGREEN_NA|Smart watches&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Smart watches
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-fitnesstrackers?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-fitnesstrackers?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-fitnesstrackers?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-fitnesstrackers?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-watches-fitnesstrackers/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/fitness-trackers/" data-impression-category="Accy-Wearable" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="Fitness trackers" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l7|p2|Accy-Wearable|||||2026_FEB_EV_2_EVERGREEN_NA|Fitness trackers&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Fitness trackers
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-watchaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-watchaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-watchaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-watches-watchaccessories?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-watches-watchaccessories/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/watch-accessories/" data-impression-category="Accy-Wearable" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Watch accessories" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l7|p3|Accy-Wearable|||||2026_FEB_EV_3_EVERGREEN_NA|Watch accessories&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Watch accessories
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_glasses?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_glasses?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_glasses?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_glasses?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_glasses/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/wearable-tech/" data-impression-category="Accy-Wearable" data-campaign-id="2026_FEB_EV_4_EVERGREEN_NA" aria-label="AI glasses" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l7|p4|Accy-Wearable|||||2026_FEB_EV_4_EVERGREEN_NA|AI glasses&quot;,&quot;type&quot;:&quot;impression&quot;}">
        AI glasses
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 5" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_rings?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_rings?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_rings?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_rings?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp_product_acc_watches_smart_rings/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/wearable-tech/" data-impression-category="Accy-Wearable" data-campaign-id="2026_FEB_EV_5_EVERGREEN_NA" aria-label="Smart rings" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l7|p5|Accy-Wearable|||||2026_FEB_EV_5_EVERGREEN_NA|Smart rings&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Smart rings
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    

    

    <div id="home-container" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-primary ">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#home-container .html {
min-width: 120px;
}

@media (min-width: 1024px) {
#home-container {
display: flex;
align-items: flex-start;
gap: 40px;
}

#home-container .categorytilettes {
min-width: 87%
}
}</style>
  <div class="vui:u-display-flex vui:u-display-block@lg vui:u-justify-content-between vui:u-align-items-center">
    <div>
  <h2 class="vui:cmp-promocards__sectionHeader vui:u-display-inline vui:u-display-block@md vui:text vui:text--title-small vui:text--bold vui:page-block vui:page-block--inset  vui:text--start vui:u-padding-top-8x vui:u-padding-right-0x vui:u-padding-right-0x@md vui:u-padding-bottom-6x vui:u-padding-bottom-4x ">
   Home
  </h2>
    </div>
        <div>
  <a class="vui:button vui:button--secondary vui:button--small" href="/products/smart-home/" aria-label="shop all smart home accessories">Shop all</a>
        </div>
</div>
  
</div>
<div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-YGFDTTShOWwnKluz6Isw6" role="group" aria-label="Carousel with 4 slides">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 4" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-smartspeakersdisplays?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-smartspeakersdisplays?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-smartspeakersdisplays?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-smartspeakersdisplays?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-home-smartspeakersdisplays/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/streaming-devices/" data-impression-category="Accy-Home" data-campaign-id="2026_FEB_EV_1_EVERGREEN_NA" aria-label="Smart speakers &amp; displays" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l8|p1|Accy-Home|||||2026_FEB_EV_1_EVERGREEN_NA|Smart speakers &amp; displays&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Smart speakers &amp; displays
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 4" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-securitycamerassystems?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-securitycamerassystems?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-securitycamerassystems?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-securitycamerassystems?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-home-securitycamerassystems/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/smart-home-security-systems/" data-impression-category="Accy-Home" data-campaign-id="2026_FEB_EV_2_EVERGREEN_NA" aria-label="Security cameras &amp; systems" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l8|p2|Accy-Home|||||2026_FEB_EV_2_EVERGREEN_NA|Security cameras &amp; systems&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Security cameras &amp; systems
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 4" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-householdtech?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-householdtech?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-householdtech?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-householdtech?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-home-householdtech/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/smart-home/" data-impression-category="Accy-Home" data-campaign-id="2026_FEB_EV_3_EVERGREEN_NA" aria-label="Household tech" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l8|p3|Accy-Home|||||2026_FEB_EV_3_EVERGREEN_NA|Household tech&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Household tech
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 4" aria-hidden="false">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-homeoffice?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-homeoffice?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/lp-home-homeoffice?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/lp-home-homeoffice?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/lp-home-homeoffice/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/products/products/smart-home/" data-impression-category="Accy-Home" data-campaign-id="2026_FEB_EV_4_EVERGREEN_NA" aria-label="Home office" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l8|p4|Accy-Home|||||2026_FEB_EV_4_EVERGREEN_NA|Home office&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Home office
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Next" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div></div>
    <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 99.984%;"></div></div></div></div>
  </section>

</div>

        
    </div>




</div>

        
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


</footer>
  
  <script>
    var gnavdl = {
      "bu": "wireless",
      "options":{"sticky":"true"},
      "impltype": "ssi",
    }
  </script>



    
</div>

    </div>



    


</div>


      

  
  
  
  
  


  

  

  
  
  
  
   

    
  

<div class="gnav20-click-div"></div><div id="vui-tooltip-portal-jkiolSokDS3XrFNALhtC9"></div></body></html>