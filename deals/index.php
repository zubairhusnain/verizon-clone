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
  <title>Verizon Deals: Save on Phones, Internet, Accessories | Verizon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="keywords" content="cell phone deals, home internet deals, fios deals, iphone deals, galaxy deals, pixel deals, apple deals, samsung deals, google deals, accessory deals, discounts, deals, phone discounts, smartphone deals, verizon deals">
  <meta name="description" content="Shop Verizon's best deals on cell phones, home internet offers, tablet, smartphone, and other accessory deals today.">
  <meta name="template" content="page-content">
  
  
  <meta property="og:title" content="Verizon Deals: Save on Phones, Internet, Accessories | Verizon">
  <meta property="og:site_name" content="Verizon">
  <meta property="og:url" content="https://www.verizon.com/deals/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
  <meta property="og:description" name="description" content="Shop Verizon's best deals on cell phones, home internet offers, tablet, smartphone, and other accessory deals today.">
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

      let pathName = "/content/wcms/deals",
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
  <body class="page basicpage" id="page-01af50e4d7">
    
    
      
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

<section data-vui-cmp-anchorlinks="" class="vui:cmp-anchorlinks"><div class="vui:cmp-anchorlinks__header"></div></section><main class="main container responsivegrid vui:page-block aem-GridColumn aem-GridColumn--default--12"><input type="hidden" name="EnableLQ2" id="EnableLQ2" value="true"><div id="lq-widget-root"></div>

    
    
    
    <div id="main-550224b264" class="cmp-container">
        
        <div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  
  
  <script>    (function() {
        function setCookie(key, value, expires, path) {
            if (key && value) {
                var cookie = key + '=' + encodeURIComponent(value);
                var date;
                expires = typeof expires === 'number' ? (date = new Date(), date.setTime(date.getTime() + (expires * 24 * 60 * 60 * 1000)), date) : expires;
                cookie = expires instanceof Date ? cookie + '; expires=' + expires.toUTCString() : cookie;
                cookie = path ? cookie + '; path=' + path : cookie + '; path=/';
                document.cookie = cookie;
            }
        }

        setCookie('dealsMyOffers','true', '', '/;domain='+location.hostname.slice(location.hostname.indexOf('.')));

        var pdm_script = document.createElement('script');
        pdm_script.setAttribute('type', 'module');
        pdm_script.setAttribute('src', '/etc/clientlibs/vcg/aep/pdm/js/pdm.js');
        document.head.appendChild(pdm_script);
    })();</script>
</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  
  <div id="15gifts" class="15gifts"></div>
  <script>window.addEventListener('__15giftsLoaded', () => {
    window?.__15gifts?.events?.addListener('engineClosed', (data) => {
      const resultData = data?.recommendation?.primary?.device || data?.recommendation?.device;
      if (typeof window.EchannelVera !== 'undefined' && window.EchannelVera && resultData && resultData?.name !== 'Bringing your own phone') {
        window.EchannelVera.init({ userText: 'sales chat', tilekey: '15GIFTSpromos' });
      }
    });
});</script>
</div>
<div class="sectionheader">








  
  

  
  


<div>
<section class="vui:theme--dark-brand vui:cmp-sectionheader" translate="yes">
    <div class="vui:page-block vui:grid vui:page-block--full-bleed vui:text--center@xl vui:text--center">

          <div class="vui:theme__surface vui:grid__col--12 vui:u-position-relative   vui:cmp-sectionheader__headandsubhead  vui:u-padding-left-2x vui:u-padding-right-2x ">
                
                  
  

    <div class="vui:u-margin-bottom-6x@lg  vui:u-margin-bottom-3x">
      <h1 class="vui:text vui:text--bold  vui:text--feature-small@xl vui:text--title-xlarge  vui:u-display-inline">
        Deals
      </h1>
       <!-- Header Tooltip -->
      
    </div>

    <p class="vui:text vui:text--title-xsmall@xl vui:text--title-2xsmall ">
      Get our best deals on phones, tablets,<br> home internet and more.
      <!-- Subhead Tooltip -->
      
    </p>

    <div>
      
      
      
    </div>



                
            </div>

    </div>
</section>
</div></div>
<div class="anchorlinks">






  
  

  
  



<section id="quick-links" data-vui-cmp-anchorlinks="" class="vui:cmp-anchorlinks anchorLinks">
  <div class="vui:cmp-anchorlinks__body">
    
  <div class="vui:cmp-anchorlinks__target">
      <div class="vui:cmp-anchorlinks__title vui:text--bold vui:text vui:text--title-2xsmall">Jump To:</div>
      <div class="vui:cmp-anchorlinks__links">
        
          


  <button class="vui:text vui:text--body-small vui:cmp-anchorlinks__button vui:u-padding-bottom-2x vui:u-padding-top-2x vui:u-padding-left-3x vui:u-padding-right-3x vui:u-align-content-center" qlval="Phones" data-jumpto-id="phones" data-threshold="-35" data-vui-cmp-anchorlinks-link="" data-track="{&quot;name&quot;:&quot;l2|p1||||||Deals|Phones&quot;,&quot;type&quot;:&quot;impression&quot;}">Phones
</button>

        
          


  <button class="vui:text vui:text--body-small vui:cmp-anchorlinks__button vui:u-padding-bottom-2x vui:u-padding-top-2x vui:u-padding-left-3x vui:u-padding-right-3x vui:u-align-content-center" qlval="Pre-owned" data-jumpto-id="PromoCardSize" data-threshold="-35" data-vui-cmp-anchorlinks-link="" data-track="{&quot;name&quot;:&quot;l2|p2||||||Deals|Pre-owned&quot;,&quot;type&quot;:&quot;impression&quot;}">Pre-owned
</button>

        
          


  <button class="vui:text vui:text--body-small vui:cmp-anchorlinks__button vui:u-padding-bottom-2x vui:u-padding-top-2x vui:u-padding-left-3x vui:u-padding-right-3x vui:u-align-content-center" qlval="Home internet" data-jumpto-id="home-internet" data-threshold="-35" data-vui-cmp-anchorlinks-link="" data-track="{&quot;name&quot;:&quot;l2|p3||||||Deals|Home internet&quot;,&quot;type&quot;:&quot;impression&quot;}">Home internet
</button>

        
          


  <button class="vui:text vui:text--body-small vui:cmp-anchorlinks__button vui:u-padding-bottom-2x vui:u-padding-top-2x vui:u-padding-left-3x vui:u-padding-right-3x vui:u-align-content-center" qlval="Watches &amp; Tablets" data-jumpto-id="watches-and-tablets" data-threshold="-35" data-vui-cmp-anchorlinks-link="" data-track="{&quot;name&quot;:&quot;l2|p4||||||Deals|Watches &amp; Tablets&quot;,&quot;type&quot;:&quot;impression&quot;}">Watches &amp; Tablets
</button>

        
          


  <button class="vui:text vui:text--body-small vui:cmp-anchorlinks__button vui:u-padding-bottom-2x vui:u-padding-top-2x vui:u-padding-left-3x vui:u-padding-right-3x vui:u-align-content-center" qlval="Plan savings" data-jumpto-id="plan-savings" data-threshold="-35" data-vui-cmp-anchorlinks-link="" data-track="{&quot;name&quot;:&quot;l2|p5||||||Deals|Plan savings&quot;,&quot;type&quot;:&quot;impression&quot;}">Plan savings
</button>

        
      </div>
    </div></div>
</section>
</div>
<div class="brandlinks">
  
  
  

  
  


  <section id="phones" data-vui-tabs="" translate="yes" class="vui:theme--light-primary vui:theme__surface vui:u-padding-bottom-12x  vui:tabs__list-wrapper vui:page-block vui:page-block--full-bleed" ql="Phones" ql-threshold="-35">
    <div class="vui:u-padding-top-4x vui:tabs vui:page-block vui:page-block--full-bleed">
      <h2 class="vui:text vui:text--bold vui:text--title-large vui:text--title-xlarge@md vui:text--title-2xlarge@lg vui:theme--fg-primary vui:theme--fg-black vui:text--center vui:u-display-flex vui:u-justify-content-center vui:u-margin-top-1x  vui:u-margin-bottom-2x">
        Smartphones
      </h2>
      <div class="vui:u-display-flex vui:u-justify-content-center vui:u-padding-top-8x@md vui:tabs__list vui:tabs--borderless vui:tabs--large@lg vui:cmp-brandlinks_padding-left" role="tablist">
        



  <a class="vui:tabs__tab vui:is-selected" href="#" data-track="{&quot;name&quot;:&quot;l3|p1||||||Smartphones|All&quot;,&quot;type&quot;:&quot;impression&quot;}">
    <div class="vui:tabs__text vui:is-selected" role="tab" id="vui-tabs-JdMSt8ZQY0S530UvZp9tK" aria-selected="true">All</div>
  </a>




      
        



  <a class="vui:tabs__tab " href="/deals/smartphones/apple/" data-track="{&quot;name&quot;:&quot;l3|p2||||||Smartphones|Apple&quot;,&quot;type&quot;:&quot;impression&quot;}">
    <div class="vui:tabs__text" role="tab" id="vui-tabs-gCbkUxGP4sa3_8xUDr_NA" tabindex="-1" aria-selected="false">Apple</div>
  </a>




      
        



  <a class="vui:tabs__tab " href="/deals/smartphones/samsung/" data-track="{&quot;name&quot;:&quot;l3|p3||||||Smartphones|Samsung&quot;,&quot;type&quot;:&quot;impression&quot;}">
    <div class="vui:tabs__text" role="tab" id="vui-tabs-gIbu3JMfRYhSc5f64xjJy" tabindex="-1" aria-selected="false">Samsung</div>
  </a>




      
        



  <a class="vui:tabs__tab " href="/deals/smartphones/google/" data-track="{&quot;name&quot;:&quot;l3|p4||||||Smartphones|Google&quot;,&quot;type&quot;:&quot;impression&quot;}">
    <div class="vui:tabs__text" role="tab" id="vui-tabs-05sGaexzPUdcxd6bTgI9A" tabindex="-1" aria-selected="false">Google</div>
  </a>




      
        



  <a class="vui:tabs__tab " href="/deals/smartphones/motorola/" data-track="{&quot;name&quot;:&quot;l3|p5||||||Smartphones|Motorola&quot;,&quot;type&quot;:&quot;impression&quot;}">
    <div class="vui:tabs__text" role="tab" id="vui-tabs-EjCSRLF3NeH-jCy1f3gNq" tabindex="-1" aria-selected="false">Motorola</div>
  </a>




      </div>
    </div>
  </section>
</div>
<div class="tilegrid">

<!-- Tile Grid -->
<section data-vui-tile-grid="" id="smartphones-carousel" translate="yes" class="vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-padding-top-12x@md taggingEnabled">
  
  
    <!-- Tiles -->
    <div class="vui:page-block vui:u-padding-top-4x vui:u-padding-bottom-4x vui:page-block--full-bleed">
      <div class="vui:grid vui:page-block vui:page-block--inset">
        
      </div>
      <div data-vui-carousel="" class="vui:carousel" id="vui-carousel-n1pcq8h6RO1TAfdz2SINa" role="group" aria-label="Carousel with 9 slides">

        <div class="vui:carousel__scroll-container vui:u-margin-bottom-8x scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
          <div class="vui:carousel__content" tab-index="-1">
            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to active" aria-label="Slide 1 of 9" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/apple-iphone-17/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Dvc Bundle-Apple" data-campaign-id="2026_MAY_PR_1_DAD_IPHONE17" data-description="Get Dad iPhone 17, Apple WatchSeries 11 &amp; iPad on us" aria-label="Get Dad iPhone 17, Apple WatchSeries 11 &amp; iPad on us" data-track="{&quot;name&quot;:&quot;l4|p1|Dvc Bundle-Apple|||||2026_MAY_PR_1_DAD_IPHONE17|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q4-iphone17-holiday-bundle-11-6-ngdtile-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q4-iphone17-holiday-bundle-11-6-ngdtile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q4-iphone17-holiday-bundle-11-6-ngdtile-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q4-iphone17-holiday-bundle-11-6-ngdtile-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get Dad iPhone&nbsp;17, Apple&nbsp;Watch<br>Series&nbsp;11 &amp; iPad on us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. iPhone with new line on select Unlimited plans. Service plan req'd for watch and iPad.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="iPhone: $829.99 (256 GB only) device payment purchase w/new smartphone line for new customers or existing customers adding a new line w/port-in on Unlimited Ultimate or Unlimited Plus plan (min. $80/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $830 promo credit applied over 36 mos.; 0% APR. Apple Watch/iPad (A16): Up to $499.99 device payment purchase w/new line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd per watch/iPad. Less up to $500 promo credit applied per device over 36 mos.; 0% APR. Apple Intelligence requires iOS 18.1 or later. Promo credit(s) may not exceed featured device retail price and end if eligibility req's per device are no longer met." data-vui-aria-label="Get Dad iPhone 17, Apple WatchSeries 11 &amp; iPad on us" id="vui-tooltip-Envyj7PXsiwLqDMD5tHwi" aria-expanded="false" aria-label="More information on Get Dad iPhone 17, Apple WatchSeries 11 &amp; iPad on us tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 2 of 9" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/shop/online/free-5g-phones/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Generic" data-campaign-id="2026_APR_PR_1_BESTPRICEEVER_FREEPHONE" data-description="Switch and get4 phones for $0" aria-label="Switch and get4 phones for $0" data-track="{&quot;name&quot;:&quot;l4|p2|Phone-Generic|||||2026_APR_PR_1_BESTPRICEEVER_FREEPHONE|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q2-2026_q2_4phones_4lines_onus_5_1_tile-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q2-2026_q2_4phones_4lines_onus_5_1_tile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q2-2026_q2_4phones_4lines_onus_5_1_tile-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q2-2026_q2_4phones_4lines_onus_5_1_tile-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Switch and get<br>4 phones for $0
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Plus, 4 lines for $25/line. Select models only. $25/line/mo with 4 new lines on Unlimited Welcome and Auto Pay. Plus taxes and fees.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Phone: Up to $829.99 purchase w/ new smartphone line on Unlimited Welcome plan for 36 mos. req'd per phone. Less up to $830 promo credit applied over 36 mos. per phone; 0% APR. Unlimited Welcome: $30/line for new customers w/4 new lines, less $20 monthly promo credits applied to account over 36 mos. Auto Pay (ACH or Verizon Visa Card) &amp; Paper-free billing req’d. Unlimited 5G/4G LTE: In times of congestion, your data may be temporarily slower than other traffic. Domestic data roaming at 2G speeds. Offers may not be combined with other offers. All promo credits end if eligibility req’s are no longer met." data-vui-aria-label="Switch and get4 phones for $0" id="vui-tooltip-fOkyb4fp4oMTiX_nCVDPE" aria-expanded="false" aria-label="More information on Switch and get4 phones for $0 tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 3 of 9" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/samsung-galaxy-s26/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Dvc Bundle-Samsung" data-campaign-id="2026_MAY_PR_1_DAD_SAMSUNGGS26" data-description="Switch &amp; get Galaxy S26, Watch8 &amp; Tab S10 FE on us" aria-label="Switch &amp; get Galaxy S26, Watch8 &amp; Tab S10 FE on us" data-track="{&quot;name&quot;:&quot;l4|p3|Dvc Bundle-Samsung|||||2026_MAY_PR_1_DAD_SAMSUNGGS26|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_bundle_bmsm_3_16-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_bundle_bmsm_3_16-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_bundle_bmsm_3_16-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_bundle_bmsm_3_16-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Switch &amp; get Galaxy&nbsp;S26,  Watch8 &amp; Tab S10 FE on us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. Phone with new line on myPlan. Service plan req'd for watch and tablet.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Phone: $899.99 (256 GB only) device payment purchase w/new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $900 promo credit applied over 36 mos.; 0% APR. Watch/Tablet: Up to $599.99 device payment purchase w/new line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd per watch/tablet. Less up to $600 promo credit applied per device over 36 mos.; 0% APR. Promo credit(s) may not exceed featured device retail price and end if eligibility req's per device are no longer met." data-vui-aria-label="Switch &amp; get Galaxy S26, Watch8 &amp; Tab S10 FE on us" id="vui-tooltip-djy7ADrmR6jiR4Pw9qbkR" aria-expanded="false" aria-label="More information on Switch &amp; get Galaxy S26, Watch8 &amp; Tab S10 FE on us tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 4 of 9" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/google-pixel-10-pro/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Dvc Bundle-Google" data-campaign-id="2026_MAY_PR_1_DAD_GOOGLEPIXEL10" data-description="Switch &amp; get Pixel 10 Pro, Watch 4 &amp; Tab S10 FE on us" aria-label="Switch &amp; get Pixel 10 Pro, Watch 4 &amp; Tab S10 FE on us" data-track="{&quot;name&quot;:&quot;l4|p4|Dvc Bundle-Google|||||2026_MAY_PR_1_DAD_GOOGLEPIXEL10|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q2_google_dad_grad_bundle_5_28_d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q2_google_dad_grad_bundle_5_28_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q2_google_dad_grad_bundle_5_28_m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q2_google_dad_grad_bundle_5_28_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Switch &amp; get Pixel&nbsp;10&nbsp;Pro, Watch 4 &amp; Tab S10 FE on us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. Phone with new line on myPlan. Service plan req'd for watch and tablet.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Phone: $999.99 (128 GB only) device payment purchase w/new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $1,000 promo credit applied over 36 mos.; 0% APR. Watch/Tablet: Up to $599.99 device payment purchase w/new line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd per watch/tablet. Less up to $600 promo credit applied per device over 36 mos.; 0% APR. Promo credit(s) may not exceed featured device retail price and end if eligibility req's per device are no longer met." data-vui-aria-label="Switch &amp; get Pixel 10 Pro, Watch 4 &amp; Tab S10 FE on us" id="vui-tooltip-vxG3zYlgBCA-YJ2k0n4of" aria-expanded="false" aria-label="More information on Switch &amp; get Pixel 10 Pro, Watch 4 &amp; Tab S10 FE on us tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 5 of 9" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/apple-iphone-17-pro/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Apple" data-campaign-id="2026_MAY_PR_1_PROMOBAU_IPHONE17PRO" data-description="Get $1,000 off iPhone 17 Pro" aria-label="Get $1,000 off iPhone 17 Pro" data-track="{&quot;name&quot;:&quot;l4|p5|Phone-Apple|||||2026_MAY_PR_1_PROMOBAU_IPHONE17PRO|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/do-q3-apple-iphone-17-pro-po-9-12-dealslptile-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/do-q3-apple-iphone-17-pro-po-9-12-dealslptile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/do-q3-apple-iphone-17-pro-po-9-12-dealslptile-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/do-q3-apple-iphone-17-pro-po-9-12-dealslptile-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get $1,000 off iPhone&nbsp;17&nbsp;Pro
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. With new line on Unlimited Ultimate.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Up to $1,499.99 purchase w/ new smartphone line on Unlimited Ultimate plan req'd. Less $1,000 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers. Apple Intelligence requires iOS 18.1 or later." data-vui-aria-label="Get $1,000 off iPhone 17 Pro" id="vui-tooltip-QrYIjw-ZAHbY31Al6HMWH" aria-expanded="false" aria-label="More information on Get $1,000 off iPhone 17 Pro tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 6 of 9" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/samsung-galaxy-s26-plus/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Samsung" data-campaign-id="2026_MAY_PR_1_PROMOBAU_SAMSUNGGS26PLS" data-description="Samsung Galaxy S26+ for $0" aria-label="Samsung Galaxy S26+ for $0" data-track="{&quot;name&quot;:&quot;l4|p6|Phone-Samsung|||||2026_MAY_PR_1_PROMOBAU_SAMSUNGGS26PLS|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_galaxy_s26plus_2_25-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_galaxy_s26plus_2_25-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_galaxy_s26plus_2_25-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q1_samsung_galaxy_s26plus_2_25-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Samsung Galaxy&nbsp;S26+ for&nbsp;$0
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. With a new line on select Unlimited plans.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$1,099.99 (256 GB only) purchase w/ new smartphone line on Unlimited Ultimate or Unlimited Plus plan (min. $80/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $1,100 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="Samsung Galaxy S26+ for $0" id="vui-tooltip-ktEW66r5Bo-OC4kjkOLkG" aria-expanded="false" aria-label="More information on Samsung Galaxy S26+ for $0 tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 7 of 9" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/google-pixel-10/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Google" data-campaign-id="2026_MAY_PR_1_PROMOBAU_GOOGLEPIXEL10" data-description="GooglePixel 10 for $0" aria-label="GooglePixel 10 for $0" data-track="{&quot;name&quot;:&quot;l4|p7|Phone-Google|||||2026_MAY_PR_1_PROMOBAU_GOOGLEPIXEL10|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_8_20-deals_tile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_8_20-deals_tile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_8_20-deals_tile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_8_20-deals_tile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Google<br>Pixel&nbsp;10 for&nbsp;$0
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed.  With new line on Unlimited Ultimate.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$799.99 (128 GB only) purchase w/ new smartphone line on Unlimited Ultimate plan req'd. Less $800 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="GooglePixel 10 for $0" id="vui-tooltip-i17ep1ruWbWolkjEKMxqu" aria-expanded="false" aria-label="More information on GooglePixel 10 for $0 tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 8 of 9" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/motorola-razr-2026/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Motorola" data-campaign-id="2026_MAY_LA_1_NPI_MOTORAZR" data-description="motorola razr (2026) on&amp;nbsp us" aria-label="motorola razr (2026) on&amp;nbsp us" data-track="{&quot;name&quot;:&quot;l4|p8|Phone-Motorola|||||2026_MAY_LA_1_NPI_MOTORAZR|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_q2_moto_razr_onus_5_21_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_q2_moto_razr_onus_5_21_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_q2_moto_razr_onus_5_21_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_q2_moto_razr_onus_5_21_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          motorola&nbsp;razr&nbsp;(2026) on&nbsp; us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. Even on our lowest priced plans. With new line on myPlan.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$799.99 purchase w/ new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $800 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="motorola razr (2026) on&amp;nbsp us" id="vui-tooltip-2Wl7PwWI-rltTq_FVmLWF" aria-expanded="false" aria-label="More information on motorola razr (2026) on&amp;nbsp us tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 9 of 9" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/smartphones/apple-iphone-17e/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Apple" data-campaign-id="2026_APR_PR_1_PROMOBAU_IPHONE17E" data-description="iPhone 17e on us" aria-label="iPhone 17e on us" data-track="{&quot;name&quot;:&quot;l4|p9|Phone-Apple|||||2026_APR_PR_1_PROMOBAU_IPHONE17E|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_iphone_17e_onus_po_3_4-tileimage-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_iphone_17e_onus_po_3_4-tileimage-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_iphone_17e_onus_po_3_4-tileimage-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_iphone_17e_onus_po_3_4-tileimage-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          iPhone&nbsp;17e on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          No trade-in needed. Even on our lowest priced plans. With new line on myPlan.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$599.99 (256 GB only) purchase w/port-in and new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $600 trade-in/promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR.  Trade-in terms apply. Apple Intelligence requires iOS 18.1 or later." data-vui-aria-label="iPhone 17e on us" id="vui-tooltip-WrEAf2Yu9o8IyfsiXJ_Zo" aria-expanded="false" aria-label="More information on iPhone 17e on us tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
          </div>
        <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" aria-disabled="false" data-vui-arrow-bound="true" tabindex="0"></button></div></div>
      <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 47.6368%;"></div></div></div></div>
    </div>
  
</section></div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#smartphones-carousel picture.vui\:u-height-100,
#watches-and-tablets picture.vui\:u-height-100,
#accessories picture.vui\:u-height-100 {
  height: auto;
}

#smartphones-carousel picture.vui\:u-width-100,
#watches-and-tablets picture.vui\:u-width-100,
#accessories picture.vui\:u-width-100 {
  width: 90% !important;
  margin-left: 5%;
}

[data-vui-tile-grid] p.vui\:text.vui\:text--micro.vui\:theme--fg-primary {
  max-width: 120px !important;
}

@media screen and (min-width: 544px) {
  [data-vui-tile-grid] p.vui\:text.vui\:text--micro.vui\:theme--fg-primary {
    max-width: 220px !important;
  }
}

@media (min-width: 544px ) and (max-width: 768px) {
  .vui\:fed__deals-tile-content h3 {
    font-size: 16px !important;
    line-height: 1.25rem !important;
  }
}</style>
  
  
</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>@media (min-width: 1024px) {
.vui\:cmp-promocards__carousel-slide {
    min-width: 608px !important;
}
}

#PromoCardSize div.vui\:carousel__slide:nth-of-type(3) .vui\:tpl-backgroundimage__img {
    object-fit: contain;
    background-color: white;
}</style>
  
  
</div>
<div class="container responsivegrid vui:theme__surface vui:theme--light-brand">

    

    

    

    <div id="container-ddd8d88124" class="cmp-container  vui:theme__surface vui:theme--light-brand ">
        
        <div class="promocards">




  
  

  
  


<section id="PromoCardSize" class="vui:cmp-promocards" data-vui-promocards="" translate="yes" ql="Pre-owned" ql-threshold="-35">
  


  <div data-vui-carousel="" class="vui:carousel vui:u-padding-bottom-12x vui:u-padding-bottom-16x@lg" id="vui-carousel-NABvLyomOyvcFKv_zuLLS" role="group" aria-label="Carousel with 3 slides">
      <div class="vui:carousel__scroll-container scroll-target--nextHidden vui:u-padding-top-8x vui:u-padding-bottom-6x vui:u-padding-bottom-8x@lg"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
         <div class="vui:carousel__content vui:cmp-promocards__carousel-content" tab-index="-1">
            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to active" aria-label="Slide 1 of 3" aria-hidden="false">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/254913-deals-lp-bento_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h2 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  3-year price lock guarantee
               </h2>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Families save big when everyone picks different plans. Price guarantee excludes taxes and fees. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="3-year price lock guarantee" data-vui-tooltip-copy="3-yr Price Guarantee: myPlan: Applies to the then-current base monthly rate charged by Verizon for your talk, text, and data; excludes taxes, fees, surcharges, additional plan discounts or promotions, and third-party services. Price guarantee is void if any of the lines are canceled or moved to an ineligible plan. Plan perks, taxes, fees, and surcharges are subject to change." data-vui-aria-label="More information on 3-year price lock guarantee, tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip-WvnY1dBgVyyslB-d9prqY" aria-label="More information on More information on 3-year price lock guarantee, tooltip tooltip">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/plans/unlimited/" aria-label="3-year price lock guarantee Learn more" data-description="3-year price lock guarantee Learn more" data-campaign-id="2026_JAN_EV_1_BVG_NA" data-impression-category="Mobile Plan" data-track="{&quot;name&quot;:&quot;l5|p1|Mobile Plan|||||2026_JAN_EV_1_BVG_NA|3-year price lock guarantee Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide" aria-label="Slide 2 of 3" aria-hidden="false">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/level9_bento_tile2_q1_bento_box_cpo_2_20_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h2 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Save more with Certified<br> Pre-Owned
               </h2>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Our pre-loved phones are fully tested and inspected to give you more peace of mind. 
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/certified-pre-owned/" aria-label="Save more with Certified Pre-Owned Shop now" data-description="Save more with Certified Pre-Owned Shop now" data-track="{&quot;name&quot;:&quot;l5|p2||||||Save more with Certified Pre-Owned|Save more with Certified Pre-Owned Shop now&quot;,&quot;type&quot;:&quot;impression&quot;}">
                  <span class="visualizer-ctaname">Shop now </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to" aria-label="Slide 3 of 3" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-m?&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-m?&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-d?&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-d?&amp;scl=1 2x" type="image/webp">
    <img src="/deals/assets/s7.vzw.com/is/image/VerizonWireless/q1_accy_bmsm_3_4-bento-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h2 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Pick 3 and save 20%
               </h2>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  When you buy 3 or more regularly priced accessories. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="Pick 3 and save 20%" data-vui-tooltip-copy="Must purchase 3+ eligible accessories with a retail price of $19.99 or more. Eligible accessories: Get 20% off 3 or more. Max 10 items. Exclusions apply. Items with a retail price ending in $.97 are not eligible. Cannot be combined with other offers. While supplies last." data-vui-aria-label="More information on Pick 3 and save 20%, tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip-5YOW6QLAviDWyK24MUwy2" aria-label="More information on More information on Pick 3 and save 20%, tooltip tooltip" tabindex="-1">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/products/allproducts/" aria-label="Pick 3 and save 20% Shop" data-description="Pick 3 and save 20% Shop" data-campaign-id="2026_MAR_PR_1_PROMOBAU_ACCY" data-impression-category="Accy-Generic" data-track="{&quot;name&quot;:&quot;l5|p3|Accy-Generic|||||2026_MAR_PR_1_PROMOBAU_ACCY|Pick 3 and save 20% Shop&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Shop </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
         </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" aria-disabled="false" data-vui-arrow-bound="true" tabindex="0"></button></div></div>
   <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 67.9406%;"></div></div></div></div>
</section></div>
<div class="sectionheader">








  
  

  
  


<div>
<section class="vui:theme--light-brand vui:cmp-sectionheader" translate="yes" id="home-internet" ql="Home internet" ql-threshold="-35">
    <div class="vui:page-block vui:grid vui:page-block--full-bleed vui:text--center@xl vui:text--center" id="home-internet">

          <div class="vui:theme__surface vui:grid__col--12 vui:u-position-relative   vui:cmp-sectionheader__headandsubhead  vui:u-padding-left-2x vui:u-padding-right-2x ">
                
                  
  

    <div class="vui:u-margin-bottom-6x@lg  vui:u-margin-bottom-3x">
      <h2 class=" vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg  vui:u-display-inline">
        The internet you want offers you more
      </h2>
       <!-- Header Tooltip -->
      
    </div>

    <p class="vui:text vui:text--bold vui:text--body-large vui:text--title-2xsmall@md vui:text--title-xsmall@lg ">
      Check which internet service is available in your area. Switch to select plans and get your choice of our latest offers.
      <!-- Subhead Tooltip -->
      
    </p>

    <div class="vui:u-margin-top-6x vui:u-margin-top-8x@lg">
      <a href="#checkAvailability" aria-label="The internet you want offers you more Get Started" data-description="The internet you want offers you more Get Started" class="vui:button vui:u-margin-right-2x vui:u-margin-top-2x vui:text vui:text--body-medium vui:text--bold" data-campaign-id="2026_JAN_PR_1_FASTSTART_NA" data-impression-category="Home Plan" data-track="{&quot;name&quot;:&quot;l6|p1|Home Plan|||||2026_JAN_PR_1_FASTSTART_NA|The internet you want offers you more Get Started&quot;,&quot;type&quot;:&quot;impression&quot;}">Get Started</a>
      
      
    </div>



                
            </div>

    </div>
</section>
</div></div>
<div class="promopreviewtiles">

<section data-vui-promo-preview-tiles="" id="promo-preview-tiles-internet" translate="yes" class="vui:u-padding-bottom-3x">
  
  <div data-vui-carousel="" class="vui:carousel" id="vui-carousel-sZmMy0HcGlh9EVni4kxQ0" role="group" aria-label="Carousel with 5 slides">
    <div class="vui:carousel__scroll-container vui:u-margin-bottom-2x scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
      <div class="vui:carousel__content" tab-index="-1">
        
          <div class="vui:carousel__slide vui:u-padding-4x scroll-to active" aria-label="Slide 1 of 5" aria-hidden="false">
            <div class="vui:carousel__slide-content vui:theme__surface vui:theme--light-brand  vui:u-padding-bottom-4x  vui:u-justify-content-center vui:u-align-items-center vui:cmp-promo-preview-tiles-container vui:grid vui:u-border-radius-300" data-vui-style-height="" style=" --vui-style-height: 411px; --vui-style-height--md: 248px;">
              
              
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 ">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_m?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_preview_5_26_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 vui:u-border-radius-300" tabindex="-1">
  </picture>

              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md vui:cmp-promo-preview-tiles-text-container vui:grid__col--12 vui:grid__col--6@md vui:u-display-flex vui:u-flex-wrap" data-vui-style-height="" style="--vui-style-height: 100%">
                <div>
                  <h3 class="vui:text vui:text--title-small vui:text--bold vui:u-margin-bottom-2x">
                    Fios Home Internet starts as low as $20/mo
                  </h3>
                  <h4 class="vui:text vui:text--body-large">When you switch. With Auto Pay, Mobile + Home Discount and bonus discount for 3 years. Ends 7/29.</h4>
                </div>
                <div class="vui:u-display-flex vui:u-flex-wrap-reverse">
                  <button class="vui:text-link data-vui-promo-preview-tile-modal vui:u-height-50" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_2_SAVINGS_VHI" data-vui-modal-show="promo-preview-tiles-internet" data-track="{&quot;name&quot;:&quot;l7|p1|Home Plan|||||2026_MAY_PR_2_SAVINGS_VHI|Review details&quot;,&quot;type&quot;:&quot;impression&quot;}" data-vui-promo-preview-tiles-initialized="">
                    <span class="visualizer-modalcta">Review details</span><span class="vui:text-link__caret"></span>
                  </button>
                </div>

                <div class="promo-preview-modal-content" hidden="">
                  <h2 class="vui:modal__title vui:text vui:text--title-medium  vui:text--bold vui:u-padding-top-2x vui:u-padding-bottom-2x" id="details-modal-long-id-title">
                    Fios Home Internet starts as low as $20/mo
                  </h2>
                  <div class="preview-modal-content">
                    <p class="vui:text vui:text--body-medium">When you switch. With Auto Pay, Mobile + Home Discount and bonus discount for 3 years. Ends 7/29.</p>
                    <div class="Col Col--12">
                      <img loading="lazy" alt="" src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_fios_savings_promo_modal_5_26_d/" class="vui:u-margin-auto" style="display: block; width: 95%">
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-large">
                      <p><strong>Features: </strong><br>Save up to $540 over 3 years.</p>
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-small">
                      Offer for eligible new Fios home internet customers ends 7.29.26. $20/mo Fios 300 Mbps plan when combined with postpaid Verizon mobile phone plan (excludes business and data-only plans) $15/mo Mobile + Home Discount and $15/mo bonus discount. Bonus discount applied via bill credit for 36 mos.; starting mo. 37, standard monthly rates apply. Auto Pay &amp; paper-free billing req’d. Mobile + Home Discount enrollment req'd. $99 setup and other terms apply. Availability varies. Subject to credit approval. Offer subject to change. Wired and wireless speeds may vary due to device limits, multiple users, network &amp; other factors. See Verizon.com/yourspeed for more info.
                    </div>
                  </div>
                </div>
                <div class="promo-preview-modal-footer" hidden="">
                  <a class="vui:button vui:button--small" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_VINTAGE_NA" href="#checkAvailability">Get started</a>
                  <!-- Button> -->
                  <button class="vui:button vui:button--small" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_VINTAGE_NA" data-vui-modal-hide="">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="vui:carousel__slide vui:u-padding-4x" aria-label="Slide 2 of 5" aria-hidden="false">
            <div class="vui:carousel__slide-content vui:theme__surface vui:theme--light-brand  vui:u-padding-bottom-4x  vui:u-justify-content-center vui:u-align-items-center vui:cmp-promo-preview-tiles-container vui:grid vui:u-border-radius-300" data-vui-style-height="" style=" --vui-style-height: 411px; --vui-style-height--md: 248px;">
              
              
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 ">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_m?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_tile_vhi_5_1_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 vui:u-border-radius-300" tabindex="-1">
  </picture>

              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md vui:cmp-promo-preview-tiles-text-container vui:grid__col--12 vui:grid__col--6@md vui:u-display-flex vui:u-flex-wrap" data-vui-style-height="" style="--vui-style-height: 100%">
                <div>
                  <h3 class="vui:text vui:text--title-small vui:text--bold vui:u-margin-bottom-2x">
                    Hurry, offer ends 6/1. Get a $200 Amazon Gift Card.
                  </h3>
                  <h4 class="vui:text vui:text--body-large">With select Fios Home Internet plans. Online only.</h4>
                </div>
                <div class="vui:u-display-flex vui:u-flex-wrap-reverse">
                  <button class="vui:text-link data-vui-promo-preview-tile-modal vui:u-height-50" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_AMAZONGC_VHI" data-vui-modal-show="promo-preview-tiles-internet" data-track="{&quot;name&quot;:&quot;l7|p2|Home Plan|||||2026_MAY_PR_1_AMAZONGC_VHI|Review details&quot;,&quot;type&quot;:&quot;impression&quot;}" data-vui-promo-preview-tiles-initialized="">
                    <span class="visualizer-modalcta">Review details</span><span class="vui:text-link__caret"></span>
                  </button>
                </div>

                <div class="promo-preview-modal-content" hidden="">
                  <h2 class="vui:modal__title vui:text vui:text--title-medium  vui:text--bold vui:u-padding-top-2x vui:u-padding-bottom-2x" id="details-modal-long-id-title">
                    Hurry, offer ends 6/1. Get a $200 Amazon Gift Card.
                  </h2>
                  <div class="preview-modal-content">
                    <p class="vui:text vui:text--body-medium">With select Fios Home Internet plans. Online only.</p>
                    <div class="Col Col--12">
                      <img loading="lazy" alt="" src="assets/ss7.vzw.com/is/image/VerizonWireless/0425_amazon_gc_promo_modal_vhi_5_1_d/" class="vui:u-margin-auto" style="display: block; width: 95%">
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-large">
                      <p><strong>Features: </strong><br>Use your Amazon Gift Card to shop from a huge selection of books, electronics, music, films, software, clothing, toys, and more. The Amazon website is the place to find and discover almost anything you want to buy online at a great price.</p>
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-small">
                      Online offer ends 6.1.26. $200 gift card with Fios 2 Gig / 1 Gig or $100 gift card with Fios 300 Mbps / 500 Mbps. Must install and maintain eligible Fios Home services in good standing for 65 days. Redemption terms apply. Verizon reserves the right to charge back the value of the promotional Amazon Gift Card if eligible service is canceled w/in 180 days. Restrictions apply, see <a href="https://www.amazon.com/gc-legal" target="_blank">amazon.com/gc-legal</a> Offer subject to change.
                    </div>
                  </div>
                </div>
                <div class="promo-preview-modal-footer" hidden="">
                  <a class="vui:button vui:button--small" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_AMAZONGC_VHI" href="#checkAvailability">Get started</a>
                  <!-- Button> -->
                  <button class="vui:button vui:button--small" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_AMAZONGC_VHI" data-vui-modal-hide="">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="vui:carousel__slide vui:u-padding-4x scroll-to" aria-label="Slide 3 of 5" aria-hidden="true">
            <div class="vui:carousel__slide-content vui:theme__surface vui:theme--light-brand  vui:u-padding-bottom-4x  vui:u-justify-content-center vui:u-align-items-center vui:cmp-promo-preview-tiles-container vui:grid vui:u-border-radius-300" data-vui-style-height="" style=" --vui-style-height: 411px; --vui-style-height--md: 248px;">
              
              
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 ">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_promo_tile_vhi_5_21_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 vui:u-border-radius-300" tabindex="-1">
  </picture>

              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md vui:cmp-promo-preview-tiles-text-container vui:grid__col--12 vui:grid__col--6@md vui:u-display-flex vui:u-flex-wrap" data-vui-style-height="" style="--vui-style-height: 100%">
                <div>
                  <h3 class="vui:text vui:text--title-small vui:text--bold vui:u-margin-bottom-2x">
                    Get $400 off select Samsung products, on us
                  </h3>
                  <h4 class="vui:text vui:text--body-large">When you buy an eligible item $799 or more at Best Buy®. With select Verizon Home Internet plans.</h4>
                </div>
                <div class="vui:u-display-flex vui:u-flex-wrap-reverse">
                  <button class="vui:text-link data-vui-promo-preview-tile-modal vui:u-height-50" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_2_SAMSUNGTECH_VHI" data-vui-modal-show="promo-preview-tiles-internet" data-track="{&quot;name&quot;:&quot;l7|p3|Home Plan|||||2026_MAY_PR_2_SAMSUNGTECH_VHI|Review details&quot;,&quot;type&quot;:&quot;impression&quot;}" data-vui-promo-preview-tiles-initialized="" tabindex="-1">
                    <span class="visualizer-modalcta">Review details</span><span class="vui:text-link__caret"></span>
                  </button>
                </div>

                <div class="promo-preview-modal-content" hidden="">
                  <h2 class="vui:modal__title vui:text vui:text--title-medium  vui:text--bold vui:u-padding-top-2x vui:u-padding-bottom-2x" id="details-modal-long-id-title">
                    Get $400 off select Samsung products, on us
                  </h2>
                  <div class="preview-modal-content">
                    <p class="vui:text vui:text--body-medium">When you buy an eligible item $799 or more at Best Buy®. With select Verizon Home Internet plans.</p>
                    <div class="Col Col--12">
                      <img loading="lazy" alt="" src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_samsung_tech_credit_fios_modal_5_21_modal_d/" class="vui:u-margin-auto" style="display: block; width: 95%">
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-large">
                      <strong>Retail Price: </strong>$799<br><br><p><strong>Features: </strong><br></p><p>TVs - <strong>Transform your home viewing</strong></p>
<ul>
  <li>
    Enjoy next-level picture quality with Samsung TVs, powered by Samsung Vision AI with advanced AI processors and One UI Tizen OS. Control your connected devices right from your TV with smart home connectivity, and stream loads of free content with Samsung TV Plus.</li></ul> <br>

  <p>Appliances - <strong>Simplify your daily routines with Bespoke AI and SmartThings</strong></p>

<ul>
  <li>Discover smart appliances that are designed to make chores easier and bring effortless convenience to your home.</li></ul> 
    <br>
    <p>Monitors - <strong>Upgrade your desk setup </strong></p>
  <ul>
  <li>
    Take gaming, productivity, and entertainment to the next level with a Samsung monitor - rated #1 in the U.S.</li></ul> 
    <br>
    <p>Audio - <strong>Feel every beat with sound that moves you</strong></p>
  
  <ul>
  <li>
    Upgrade your home theater setup with Samsung—the #1 selling soundbar brand for 12 years and counting.*</li></ul> 
    <br>
    <p>Laptops - <strong>Galaxy power you can count on, every day.</strong></p>
  
  <ul>
  <li>
    Galaxy Book6 Series is engineered for perfection and works together with your Galaxy devices as an unmatched force with features like Storage Share 1 , Phone Link 2 and more.</li></ul> 
    <br>
    <p>Tablets - <strong>Galaxy power you can count on, every day.</strong></p>
  
   <ul>
  <li>Galaxy Tab S11 Series is built for those who want to make their everyday smarter with the power of AI. With huge crystal-clear displays, uncompromising power and incredible durability, TabS11 Series devices are the ultimate canvas for unmatched productivity, creativity and entertainment in a sleek profile.</li>
</ul>
<br>
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-small">
                      Offer valid through 9/2/26. Limited-time offer for a $400 credit via promo code to be used toward the single item purchase of select Samsung home tech items (eligible TVs, appliances, laptops, tablets, monitors, and speakers) with a minimum retail price of $799 (pre-tax). Product selection may vary. Offer not valid on Samsung smartphones, memory cards, refurbished, open-box and Marketplace Products. For new home internet customers who install eligible Fios 1 Gig, Fios 2 Gig, 5G Home Ultimate or Verizon Home Internet Lite Extra internet services and redeem w/in 30 days but no later than 11/1/26. Promo code must be redeemed online at BestBuy.com. Verizon reserves the right to charge back the $400 value of the Samsung credit if eligible service is canceled w/in 365 days of activation/installation. Limit 1 offer per Verizon account. While supplies last. Offer subject to change. Samsung and related trademarks are owned by Samsung Electronics Co., Ltd. Samsung and Verizon are not affiliated with Best Buy. Purchase, delivery, installation, and other charges are subject to Best Buy’s terms &amp; conditions.
                    </div>
                  </div>
                </div>
                <div class="promo-preview-modal-footer" hidden="">
                  <a class="vui:button vui:button--small" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_2_SAMSUNGTECH_VHI" href="#checkAvailability" tabindex="-1">Get started</a>
                  <!-- Button> -->
                  <button class="vui:button vui:button--small" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_2_SAMSUNGTECH_VHI" data-vui-modal-hide="" tabindex="-1">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="vui:carousel__slide vui:u-padding-4x" aria-label="Slide 4 of 5" aria-hidden="true">
            <div class="vui:carousel__slide-content vui:theme__surface vui:theme--light-brand  vui:u-padding-bottom-4x  vui:u-justify-content-center vui:u-align-items-center vui:cmp-promo-preview-tiles-container vui:grid vui:u-border-radius-300" data-vui-style-height="" style=" --vui-style-height: 411px; --vui-style-height--md: 248px;">
              
              
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 ">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_promo_tile_vhi_5_21_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 vui:u-border-radius-300" tabindex="-1">
  </picture>

              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md vui:cmp-promo-preview-tiles-text-container vui:grid__col--12 vui:grid__col--6@md vui:u-display-flex vui:u-flex-wrap" data-vui-style-height="" style="--vui-style-height: 100%">
                <div>
                  <h3 class="vui:text vui:text--title-small vui:text--bold vui:u-margin-bottom-2x">
                    Get FOX One perk for 3 months, on us
                  </h3>
                  <h4 class="vui:text vui:text--body-large">Then $15/mo after. With any Verizon Home Internet plan.</h4>
                </div>
                <div class="vui:u-display-flex vui:u-flex-wrap-reverse">
                  <button class="vui:text-link data-vui-promo-preview-tile-modal vui:u-height-50" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_FOXONE_VHI" data-vui-modal-show="promo-preview-tiles-internet" data-track="{&quot;name&quot;:&quot;l7|p4|Home Plan|||||2026_MAY_PR_1_FOXONE_VHI|Review details&quot;,&quot;type&quot;:&quot;impression&quot;}" data-vui-promo-preview-tiles-initialized="" tabindex="-1">
                    <span class="visualizer-modalcta">Review details</span><span class="vui:text-link__caret"></span>
                  </button>
                </div>

                <div class="promo-preview-modal-content" hidden="">
                  <h2 class="vui:modal__title vui:text vui:text--title-medium  vui:text--bold vui:u-padding-top-2x vui:u-padding-bottom-2x" id="details-modal-long-id-title">
                    Get FOX One perk for 3 months, on us
                  </h2>
                  <div class="preview-modal-content">
                    <p class="vui:text vui:text--body-medium">Then $15/mo after. With any Verizon Home Internet plan.</p>
                    <div class="Col Col--12">
                      <img loading="lazy" alt="" src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_fox_one_modal_vhi_5_21_d/" class="vui:u-margin-auto" style="display: block; width: 95%">
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-large">
                      <strong>Retail Price: </strong>$15/mo<br><br><p><strong>Features: </strong><br>Stream every FIFA World Cup 2026™ game.</p>
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-small">
                      FOX One perk for 3 mos on us requires new Fios Home, 5G Home or Verizon Home Internet Lite plan; must enroll in FOX One perk w/in 60 days after activation/install and register w/FOX w/in 90 days of enrollment. $15/mo perk credit ends after 3 mos or if perk is canceled or plan is moved to an ineligible plan during the promo period. After 3 mos, perk bills at $15/mo unless perk is canceled or unregistered. One offer per eligible Verizon home internet account. Add'l terms apply. Limited-time offer; subject to change.
                    </div>
                  </div>
                </div>
                <div class="promo-preview-modal-footer" hidden="">
                  <a class="vui:button vui:button--small" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_FOXONE_VHI" href="#checkAvailability" tabindex="-1">Get started</a>
                  <!-- Button> -->
                  <button class="vui:button vui:button--small" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_FOXONE_VHI" data-vui-modal-hide="" tabindex="-1">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="vui:carousel__slide vui:u-padding-4x scroll-to" aria-label="Slide 5 of 5" aria-hidden="true">
            <div class="vui:carousel__slide-content vui:theme__surface vui:theme--light-brand  vui:u-padding-bottom-4x  vui:u-justify-content-center vui:u-align-items-center vui:cmp-promo-preview-tiles-container vui:grid vui:u-border-radius-300" data-vui-style-height="" style=" --vui-style-height: 411px; --vui-style-height--md: 248px;">
              
              
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 ">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_m?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_d?fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_promo_tile_vhi_5_21_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 vui:u-border-radius-300" tabindex="-1">
  </picture>

              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md vui:cmp-promo-preview-tiles-text-container vui:grid__col--12 vui:grid__col--6@md vui:u-display-flex vui:u-flex-wrap" data-vui-style-height="" style="--vui-style-height: 100%">
                <div>
                  <h3 class="vui:text vui:text--title-small vui:text--bold vui:u-margin-bottom-2x">
                    Get Verizon Home Device Protect for $0.99/mo*
                  </h3>
                  <h4 class="vui:text vui:text--body-large">For 3 months, then $25/mo.*<br>*Plus applicable taxes. With select Verizon Home Internet plans</h4>
                </div>
                <div class="vui:u-display-flex vui:u-flex-wrap-reverse">
                  <button class="vui:text-link data-vui-promo-preview-tile-modal vui:u-height-50" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_VHDP_VHI" data-vui-modal-show="promo-preview-tiles-internet" data-track="{&quot;name&quot;:&quot;l7|p5|Home Plan|||||2026_MAY_PR_1_VHDP_VHI|Review details&quot;,&quot;type&quot;:&quot;impression&quot;}" data-vui-promo-preview-tiles-initialized="" tabindex="-1">
                    <span class="visualizer-modalcta">Review details</span><span class="vui:text-link__caret"></span>
                  </button>
                </div>

                <div class="promo-preview-modal-content" hidden="">
                  <h2 class="vui:modal__title vui:text vui:text--title-medium  vui:text--bold vui:u-padding-top-2x vui:u-padding-bottom-2x" id="details-modal-long-id-title">
                    Get Verizon Home Device Protect for $0.99/mo*
                  </h2>
                  <div class="preview-modal-content">
                    <p class="vui:text vui:text--body-medium">For 3 months, then $25/mo.*<br>*Plus applicable taxes. With select Verizon Home Internet plans</p>
                    <div class="Col Col--12">
                      <img loading="lazy" alt="" src="assets/ss7.vzw.com/is/image/VerizonWireless/0526_vhdp_modal_vhi_5_21_d/" class="vui:u-margin-auto" style="display: block; width: 95%">
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-large">
                      <p><strong>Features: </strong><br></p><p><strong>Get a protection plan with hassle-free repairs and replacements on all
your eligible home tech, no matter where you bought it.
</strong></p>
<ul>
<p><strong>Expanded coverage</strong></p>
<ul>
  <li>
    We cover even more of your home tech, like Wi-Fi gaming devices, pet tech, smart floor care and home healthcare devices.
</li></ul> <br>
<p><strong>24/7 tech support</strong></p>

<ul>
  <li>Rely on fast, 24/7 access to experts who can answer virtually any question about home tech.
</li></ul> 
    <br>
    <p><strong>2nd residence coverage</strong></p>
  <ul>
  <li>
   Protect eligible tech in a second residence like a family member’s home or a student's college apartment at no additional cost.
</li></ul> 
    <br>
    <p><strong>Hassle-free repairs</strong></p>
  
  <ul>
  <li>
    You're protected if your home tech experiences a covered breakdown — no
matter where you bought it, even if you don’t have a receipt.</li></ul> 
    <br>
    <p><strong>In-home expert visits</strong></p>
  
  <ul>
  <li>
    ​Take comfort knowing your protection includes 2 in-home expert visits every
12 months</li></ul> 
    <br>
    <p><strong>Installation made easy</strong></p>
  
   <ul>
  <li>Get professional installation on eligible home tech for just $49/product. And if you're a Verizon Home Internet customer, the installation's on us</li>
</ul>
<br></ul>
                    </div>
                    <div class="vui:u-padding-bottom-4x vui:text vui:text--body-small">
                      Limited-time offer for new Fios 1 Gig or Fios 2 Gig plan customers who enroll in Verizon Home Device Protect (VHDP). Must enroll in VHDP w/in 60 days after internet activation/installation. $24.01/mo discount applied for 3 mos; starting mo. 4, VHDP auto-renews at $25/mo plus applicable taxes unless canceled. One offer per eligible Verizon home internet account. Add'l terms apply. Offer subject to change.
                    </div>
                  </div>
                </div>
                <div class="promo-preview-modal-footer" hidden="">
                  <a class="vui:button vui:button--small" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_VHDP_VHI" href="#checkAvailability" tabindex="-1">Get started</a>
                  <!-- Button> -->
                  <button class="vui:button vui:button--small" type="button" data-impression-category="Home Plan" data-campaign-id="2026_MAY_PR_1_VHDP_VHI" data-vui-modal-hide="" tabindex="-1">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        
        
          
    <div class="vui:modal vui:theme--light-primary" data-vui-modal="promo-preview-tiles-internet" aria-labelledby="details-modal-long-id-title" aria-hidden="true" aria-modal="true" tabindex="-1" role="dialog">
        <div class="vui:modal__backdrop" data-vui-modal-hide=""></div>
        <div class="vui:modal__dialog" role="document">
            <div class="vui:modal__close">
                <button class="vui:button-icon vui:button-icon--small" type="button" data-vui-modal-hide="" aria-label="Close dialog">
                    <i class="vui:button-icon__icon vui:icon vui:icon--close"></i>
                </button>
            </div>
            <div class="vui:modal__content">
                
            </div>
            <div class="vui:modal__footer">
                
            </div>
        </div>
    </div>
        

      </div>
    <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" aria-disabled="false" data-vui-arrow-bound="true" tabindex="0"></button></div></div>
  <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 40.201%;"></div></div></div></div>
</section></div>

        
    </div>




</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>#watches-and-tablets div div > h2 {
  text-wrap: wrap !important;
}
</style>
  
  
</div>
<div class="tilegrid">

<!-- Tile Grid -->
<section data-vui-tile-grid="" id="watches-and-tablets" translate="yes" class="vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-padding-top-12x@md taggingEnabled" ql="Watches &amp; Tablets" ql-threshold="-35">
  
  
    <!-- Tiles -->
    <div class="vui:page-block vui:u-padding-top-4x vui:u-padding-bottom-4x vui:page-block--full-bleed">
      <div class="vui:grid vui:page-block vui:page-block--inset">
        
          <h2 class="vui:grid__col--12 vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg vui:text--center vui:u-padding-bottom-4x@md vui:u-padding-bottom-0x vui:theme--fg-primary vui:theme--fg-black">
        Smartwatches, tablets and bundles</h2>
      
      </div>
      <div data-vui-carousel="" class="vui:carousel" id="vui-carousel-QsFvgDPrTVDJHbS8qpOzR" role="group" aria-label="Carousel with 8 slides">

        <div class="vui:carousel__scroll-container vui:u-margin-bottom-8x scroll-target--nextHidden"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
          <div class="vui:carousel__content" tab-index="-1">
            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to active" aria-label="Slide 1 of 8" aria-hidden="false">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/tablets/apple-ipad-a16/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Tablet-Apple" data-campaign-id="2026_MAY_PR_1_PROMOBAU_IPAD" data-description="Get iPad (A16) on us" aria-label="Get iPad (A16) on us" data-track="{&quot;name&quot;:&quot;l8|p1|Tablet-Apple|||||2026_MAY_PR_1_PROMOBAU_IPAD|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1025_do_q4_apple_ipad_a16_standalone_11_6_hptile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1025_do_q4_apple_ipad_a16_standalone_11_6_hptile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1025_do_q4_apple_ipad_a16_standalone_11_6_hptile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1025_do_q4_apple_ipad_a16_standalone_11_6_hptile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get iPad&nbsp;(A16) on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          With eligible tablet trade-in and select Unlimited tablet plans.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$499.99 (128 GB only) purchase w/ new or upgrade tablet line on Unlimited Plus or Unlimited tablet plan (min. $100/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $500 trade-in/promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Trade-in terms apply. Apple Intelligence requires iOS 18.1 or later." data-vui-aria-label="Get iPad (A16) on us" id="vui-tooltip-Y6MncMD2znmx4z2RDd4R4" aria-expanded="false" aria-label="More information on Get iPad (A16) on us tooltip">
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
                  
                    
  <a href="/deals/tablets/samsung-galaxy-tab-s10-fe-5g/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Tablet-Samsung" data-campaign-id="2026_MAY_PR_1_PROMOBAU_SAMSUNGTAB" data-description="Get Samsung Galaxy Tab S10 FE 5G on us" aria-label="Get Samsung Galaxy Tab S10 FE 5G on us" data-track="{&quot;name&quot;:&quot;l8|p2|Tablet-Samsung|||||2026_MAY_PR_1_PROMOBAU_SAMSUNGTAB|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/do-q4-galaxy-tabs10-fe-11-6-dealstile-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/do-q4-galaxy-tabs10-fe-11-6-dealstile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/do-q4-galaxy-tabs10-fe-11-6-dealstile-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/do-q4-galaxy-tabs10-fe-11-6-dealstile-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get Samsung Galaxy Tab S10&nbsp;FE&nbsp;5G on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          With eligible tablet trade-in and select Unlimited tablet plans.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$599.99  purchase w/ new or upgrade tablet line on Unlimited Plus or Unlimited tablet plan (min. $100/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $600 trade-in/promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Trade-in terms apply." data-vui-aria-label="Get Samsung Galaxy Tab S10 FE 5G on us" id="vui-tooltip-0jcBSvZhk4Sgd4p0Pn6Pm" aria-expanded="false" aria-label="More information on Get Samsung Galaxy Tab S10 FE 5G on us tooltip">
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
                  
                    
  <a href="/deals/connected-smartwatches/apple-watch-se-3/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Watch-Apple" data-campaign-id="2026_MAY_PR_1_PROMOBAU_APPLEWATCH" data-description="Apple Watch SE 3 on us" aria-label="Apple Watch SE 3 on us" data-track="{&quot;name&quot;:&quot;l8|p3|Watch-Apple|||||2026_MAY_PR_1_PROMOBAU_APPLEWATCH|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q3-apple-lp-watch-se-nopromo-9-12-brandpagetile-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q3-apple-lp-watch-se-nopromo-9-12-brandpagetile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://s7.vzw.com/is/image/VerizonWireless/q3-apple-lp-watch-se-nopromo-9-12-brandpagetile-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/q3-apple-lp-watch-se-nopromo-9-12-brandpagetile-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Apple&nbsp;Watch&nbsp;SE 3 on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          With eligible watch trade-in and Unlimited Plus for Apple Watches.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$299.99 (40mm only)  purchase w/new or upgrade line on Unlimited Plus for Apple Watches plan (min. $25/mo w/Auto Pay (+taxes/fees) for 36 mos) req’d. Less $300 trade-in/promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Trade-in terms apply." data-vui-aria-label="Apple Watch SE 3 on us" id="vui-tooltip-4m17k8ayyETFFDW2pOJQp" aria-expanded="false" aria-label="More information on Apple Watch SE 3 on us tooltip">
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
                  
                    
  <a href="/deals/connected-smartwatches/samsung-galaxy-watch8/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Watch-Samsung" data-campaign-id="2026_MAY_PR_1_PROMOBAU_SAMSUNGWATCH" data-description="Get Samsung Galaxy Watch8 on us" aria-label="Get Samsung Galaxy Watch8 on us" data-track="{&quot;name&quot;:&quot;l8|p4|Watch-Samsung|||||2026_MAY_PR_1_PROMOBAU_SAMSUNGWATCH|tile&quot;,&quot;type&quot;:&quot;impression&quot;}"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q3_samsung_watch8_gti_8_7_deals_tile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q3_samsung_watch8_gti_8_7_deals_tile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q3_samsung_watch8_gti_8_7_deals_tile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q3_samsung_watch8_gti_8_7_deals_tile_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get Samsung Galaxy Watch8 on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          With eligible watch trade-in and Unlimited Plus for Android Watches.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$399.99 (32 GB only) purchase w/new or upgrade line on Unlimited Plus for Android Watches plan  (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos)  req’d. Less $400 trade-in/promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Trade-in terms apply." data-vui-aria-label="Get Samsung Galaxy Watch8 on us" id="vui-tooltip-GMyWAMAGvhRsGp5Clk7C8" aria-expanded="false" aria-label="More information on Get Samsung Galaxy Watch8 on us tooltip">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 5 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/connected-smartwatches/apple-watch-se-2nd-generation/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="BMSM-Apple" data-campaign-id="2026_APR_PR_1_PROMOBAU_APPLEWATCH" data-description="Get Apple Watch SE on us" aria-label="Get Apple Watch SE on us" data-track="{&quot;name&quot;:&quot;l8|p5|BMSM-Apple|||||2026_APR_PR_1_PROMOBAU_APPLEWATCH|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/3096100-contentfragment-q1-apple-watch-se-bmsm-1-9-DealsHP-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/3096100-contentfragment-q1-apple-watch-se-bmsm-1-9-DealsHP-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/3096100-contentfragment-q1-apple-watch-se-bmsm-1-9-DealsHP-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/3096100-contentfragment-q1-apple-watch-se-bmsm-1-9-DealsHP-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get Apple Watch SE on us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          When you buy any iPhone. Service plan for iPhone and watch req'd.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="iPhone: Up to $1,999.99 device payment purchase w/new or upgrade smartphone line on postpaid service plan req’d. Watch: $249.99 (40 mm only)  device payment purchase w/new line on Unlimited Plus or Unlimited for Apple Watches plan (min. $15/mo (+taxes/fees) for 36 mos) req'd. Less $250 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR." data-vui-aria-label="Get Apple Watch SE on us" id="vui-tooltip-IAcuyi5KNBLGBgtxM3rwH" aria-expanded="false" aria-label="More information on Get Apple Watch SE on us tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 6 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/connected-smartwatches/verizon-gizmo-watch-3-adventure/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Watch-Gizmo" data-campaign-id="2026_APR_PR_1_PROMOBAU_GIZMOWATCH" data-description="Gizmo Watch 3 Adventure on us" aria-label="Gizmo Watch 3 Adventure on us" data-track="{&quot;name&quot;:&quot;l8|p6|Watch-Gizmo|||||2026_APR_PR_1_PROMOBAU_GIZMOWATCH|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0326_q2_gizmo_watch3_adventure_onus_4_2_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0326_q2_gizmo_watch3_adventure_onus_4_2_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0326_q2_gizmo_watch3_adventure_onus_4_2_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0326_q2_gizmo_watch3_adventure_onus_4_2_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Gizmo Watch&nbsp;3 Adventure on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Service plan req'd per watch.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$99.99 purchase w/ new watch line on Unlimited for Gizmo plan (min. $10/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $100 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR." data-vui-aria-label="Gizmo Watch 3 Adventure on us" id="vui-tooltip-r2MkFJ50oqkjg4TlnJPNG" aria-expanded="false" aria-label="More information on Gizmo Watch 3 Adventure on us tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x" aria-label="Slide 7 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/tablets/apple-ipad-pro-13-inch-m5/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Tablet-Apple" data-campaign-id="2026_MAY_PR_1_PROMOBAU_IPADPRO" data-description="Get iPad Pro 13-inch (M5) for as low as $28/mo" aria-label="Get iPad Pro 13-inch (M5) for as low as $28/mo" data-track="{&quot;name&quot;:&quot;l8|p7|Tablet-Apple|||||2026_MAY_PR_1_PROMOBAU_IPADPRO|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/apple-lp-ipad-1-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/apple-lp-ipad-1-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/apple-lp-ipad-1-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/apple-lp-ipad-1-m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get iPad Pro 13-inch (M5) for as low as $28/mo
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          When you buy any iPhone. Service plan for iPhone and tablet req'd.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="iPhone: Up to $1,999.99  device payment purchase w/new or upgrade smartphone line on postpaid service plan req’d.  iPad: $1,499.99 (256 GB only) device payment purchase w/new line on service plan req'd. Less $500 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Apple Intelligence requires iOS 18.1 or later." data-vui-aria-label="Get iPad Pro 13-inch (M5) for as low as $28/mo" id="vui-tooltip-dppP8fsq4BtPZ7kESj5-7" aria-expanded="false" aria-label="More information on Get iPad Pro 13-inch (M5) for as low as $28/mo tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
        </p>
      
    </div>
  </div>

                  
                </div>
              </div>

            
              <div class="vui:carousel__slide vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-padding-top-3x vui:u-padding-bottom-3x scroll-to" aria-label="Slide 8 of 8" aria-hidden="true">
                <div class="vui:carousel__slide-content vui:fed__deals-tile vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 vui:u-display-flex vui:u-justify-content-center vui:u-align-items-center vui:u-width-100" data-vui-style-height="" style="--vui-style-height: 327px; --vui-style-height--md:435px">
                  
                    
  <a href="/deals/connected-smartwatches/google-pixel-watch2/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Watch-Google" data-campaign-id="2026_APR_PR_1_PROMOBAU_GOOGLEWATCH" data-description="Get Google Pixel Watch 2 on us" aria-label="Get Google Pixel Watch 2 on us" data-track="{&quot;name&quot;:&quot;l8|p8|Watch-Google|||||2026_APR_PR_1_PROMOBAU_GOOGLEWATCH|tile&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1"></a>
  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q3_google_pixel_watch_2_4mo_7_3_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q3_google_pixel_watch_2_4mo_7_3_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q3_google_pixel_watch_2_4mo_7_3_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q3_google_pixel_watch_2_4mo_7_3_m?&amp;fmt=webp&amp;scl=1 2x">
      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
    </picture>
    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
      

      
        <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
          Get Google Pixel&nbsp;Watch 2 on&nbsp;us
        </h3>
      
      
        <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
          Service plan req'd for watch.<span class="vui:tooltip__trigger-wrap"><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$299.99 purchase w/ new watch line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $300 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR." data-vui-aria-label="Get Google Pixel Watch 2 on us" id="vui-tooltip-8HNE1ywIv0IwjaXN5mN8h" aria-expanded="false" aria-label="More information on Get Google Pixel Watch 2 on us tooltip" tabindex="-1">
                <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black"></i>
              </button>
            </span>
          
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
<div class="container responsivegrid vui:theme__surface vui:theme--light-brand">

    

    

    

    <div id="container-f3ea3029ef" class="cmp-container  vui:theme__surface vui:theme--light-brand ">
        
        <div class="categorytilettes">
  
  
  

  
  


  <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes  vui:cmp-categorytilettes--small">
    <h2 class="vui:cmp-categorytilettes__header vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg  vui:page-block vui:page-block--inset  vui:text--center  vui:theme--fg-primary vui:theme--fg-black">

      Discover more accessories

    </h2>

    <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-NP5_7mESWBcU-KcmGbQU0">
      <div class="vui:carousel__scroll-container vui:cmp-categorytilettes__carousel-scroll-container scroll-target--nextHidden">
        <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="1">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_phone_cases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_phone_cases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_phone_cases/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/phone-cases/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Phone cases" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p1|Accy-Phone+Tablet|||||2026_JAN_EV_1_EVERGREEN_ACCY|Phone cases&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Phone cases
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="2">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_tablet_cases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_tablet_cases?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_tablet_cases/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/tablet-accessories/" data-impression-category="Accy-Phone+Tablet" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Tablet cases" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p2|Accy-Phone+Tablet|||||2026_JAN_EV_1_EVERGREEN_ACCY|Tablet cases&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Tablet cases
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="3">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_charging?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_charging?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_charging/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/charging/" data-impression-category="Accy-Charging" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Charging" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p3|Accy-Charging|||||2026_JAN_EV_1_EVERGREEN_ACCY|Charging&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Charging
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="4">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_audio?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_audio?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_audio/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/audio/" data-impression-category="Accy-Audio" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Audio" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p4|Accy-Audio|||||2026_JAN_EV_1_EVERGREEN_ACCY|Audio&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Audio
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="5">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_gaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_gaming?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_gaming/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/gaming/" data-impression-category="Accy-Gaming" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Gaming" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p5|Accy-Gaming|||||2026_JAN_EV_1_EVERGREEN_ACCY|Gaming&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Gaming
      </a>
     </div>
    </div>
    </div>
  </div>

        
          


  <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide" data-vui-cmp-categorytilettes-tilette="6">
   <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
    <div class="vui:cmp-categorytilettes__foreground">
       <div class="vui:cmp-categorytilettes__image-wrapper">
  <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
    
    
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_smart_home?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_smart_home?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/discover_more_accy_smart_home/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
  </picture>
</div>
     <div class="vui:cmp-categorytilettes__anchor-wrapper">
      <a href="/deals/products/smart-home/" data-impression-category="Accy-Home" data-campaign-id="2026_JAN_EV_1_EVERGREEN_ACCY" aria-label="Smart home" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l9|p6|Accy-Home|||||2026_JAN_EV_1_EVERGREEN_ACCY|Smart home&quot;,&quot;type&quot;:&quot;impression&quot;}">
        Smart home
      </a>
     </div>
    </div>
    </div>
  </div>

        </div>
      </div>
    </div>
  </section>

</div>
<div class="container responsivegrid vui:page-block vui:page-block--inset">

    

    <div id="container-e3536929d1" class="cmp-container vui:page-block vui:page-block--inset vui:theme__surface vui:theme--light-brand">
        


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="sectionheader aem-GridColumn aem-GridColumn--default--12">








  
  

  
  


<div>
<section class="vui:theme--light-brand vui:cmp-sectionheader" translate="yes" id="plan-savings" ql="Plan savings" ql-threshold="-35">
    <div class="vui:page-block vui:grid vui:page-block--full-bleed vui:text--center@xl vui:text--center" id="plan-savings">

          <div class="vui:theme__surface vui:grid__col--12 vui:u-position-relative  vui:cmp-sectionheader__headonly vui:u-padding-left-2x vui:u-padding-right-2x  ">
                
                  
  

    <div>
      <h2 class=" vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg  vui:u-display-inline">
        Saving &amp; discounts only with Verizon
      </h2>
       <!-- Header Tooltip -->
      
    </div>

    

    <div>
      
      
      
    </div>



                
            </div>

    </div>
</section>
</div></div>

    
</div>

    </div>



    


</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>div#plan-savings .vui\:cmp-sectionheader__headonly {
    min-height: auto;
    padding-bottom: 0px;
}
</style>
  
  
</div>
<div class="promocards">




  
  

  
  


<section id="promocards--143656128" class="vui:cmp-promocards" data-vui-promocards="" translate="yes">
  


  <div data-vui-carousel="" class="vui:carousel vui:u-padding-bottom-12x vui:u-padding-bottom-16x@lg" id="vui-carousel-6ZAT3iWRiZ-o8zFa7AHYj" role="group" aria-label="Carousel with 7 slides">
      <div class="vui:carousel__scroll-container scroll-target--nextHidden vui:u-padding-top-8x vui:u-padding-bottom-6x vui:u-padding-bottom-8x@lg"><div class="vui:carousel__arrow-wrap vui:carousel__arrow-prev-wrap"><button class="vui:carousel__arrow-prev vui:carousel__arrow Icon Icon--left-arrow u-marginTop--xs0 u-marginTop--lg0 disabled" aria-label="Previous" aria-disabled="true" data-vui-arrow-bound="true" tabindex="-1"></button></div>
         <div class="vui:carousel__content vui:cmp-promocards__carousel-content" tab-index="-1">
            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to active" aria-label="Slide 1 of 7" aria-hidden="false">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0325_midwinter_m_h_bento_box_bento_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us.
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Add one perk on us (up to $10/mo) with select internet plans. 18+. Terms apply. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us." data-vui-tooltip-copy="&lt;b&gt;Mobile + Home Discount:&lt;/b&gt; $15/mo savings on Verizon Home Internet plans when combined with any Verizon postpaid mobile phone plan (excludes business and data-only plans). Enrollment req’d for Fios Home Internet plans. &lt;b&gt;Perk On Us Credit:&lt;/b&gt; Availability of each perk is subject to specific terms, and age requirements. Requires one paid perk on eligible Verizon mobile phone line or eligible home internet plan. Up to $10/month credit will be applied to your Verizon mobile or Fios Internet bill as long as one paid perk remains active on either account. Perk credit canceled if paid perk removed, mobile line or home internet plan canceled, or home internet moved to ineligible plan. Perk promotional offers are not eligible for the perk discount. Credit applied in 1-2 billing cycles." data-vui-aria-label="More information on Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us., tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip-i4ihsYFdghNC1taoch5IH" aria-label="More information on More information on Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us., tooltip tooltip">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/discounts/phone-home-internet-bundle/" aria-label="Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us. Learn more" data-description="Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us. Learn more" data-track="{&quot;name&quot;:&quot;l11|p1||||||Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us.|Bundle your mobile &amp; home internet. Save $15/mo. And choose entertainment on us. Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide" aria-label="Slide 2 of 7" aria-hidden="false">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/bento_box_openbank_image_012126-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Save up to $180 on your wireless bill
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  And get 10x the national average on your savings. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="Save up to $180 on your wireless bill" data-vui-tooltip-copy="To get $180 in Verizon + Openbank Bill Credits your Verizon Account must have an Openbank high yield savings account opened through the Verizon + Openbank Savings program that maintains a monthly average daily balance equal to or greater than $30,000 for all 12 months you are eligible to earn the Verizon + Openbank Bill Credit. &lt;br/&gt; &lt;br/&gt;The APY comparison is based upon the national average for ‘Savings’ deposit products as published in the FDIC National Rates and Rate Caps on FDIC.gov of 0.38%, accurate as of 4.20.26." data-vui-aria-label="More information on Save up to $180 on your wireless bill, tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip-0Tv9UaALW7Qa4fu8pRcOp" aria-label="More information on More information on Save up to $180 on your wireless bill, tooltip tooltip">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/financial-services/high-yield-online-savings-account/" aria-label="Save up to $180 on your wireless bill Learn more" data-description="Save up to $180 on your wireless bill Learn more" data-campaign-id="2025_OCT_REF_1_OPENBANK_NA" data-impression-category="Prod-Sol-Svcs-Perks" data-track="{&quot;name&quot;:&quot;l11|p2|Prod-Sol-Svcs-Perks|||||2025_OCT_REF_1_OPENBANK_NA|Save up to $180 on your wireless bill Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to" aria-label="Slide 3 of 7" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-M-XL?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-M-XL?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-M-XL?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-M-XL?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-D-XL?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-D-XL?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/Q1_2026-q1_byod_1line_45mo_1_8-tiles-bento-M-XL/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Bring your phone and get up to $400, when you switch
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  With new line on myPlan. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="Bring your phone and get up to $400, when you switch" data-vui-tooltip-copy="$400 via promo credit for new customers activating a new smartphone line with your own smartphone on Unlimited Ultimate, $360 promo credit on Unlimited Plus, or $180 promo credit on Unlimited Welcome plan req'd. Promo credits applied over 36 months; promo credits end if eligibility requirements are no longer met. Offer may not stack with other offers. Limit 1 offer per Verizon account." data-vui-aria-label="More information on Bring your phone and get up to $400, when you switch, tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip--JMsa-IkglDz21HooH4GV" aria-label="More information on More information on Bring your phone and get up to $400, when you switch, tooltip tooltip" tabindex="-1">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/bring-your-own-device/" aria-label="Bring your phone and get up to $400, when you switch Get started" data-description="Bring your phone and get up to $400, when you switch Get started" data-campaign-id="2026_MAY_PR_1_BYOD_BYOD400" data-impression-category="Mobile Plan BYOD" data-track="{&quot;name&quot;:&quot;l11|p3|Mobile Plan BYOD|||||2026_MAY_PR_1_BYOD_BYOD400|Bring your phone and get up to $400, when you switch Get started&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Get started </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide" aria-label="Slide 4 of 7" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/q2_bento_box_vvc_10_03_bento_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Get up to $150 cash back
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  In statement credits when you open an account and make purchases in the first 90 days. <span><button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-title="Get up to $150 cash back" data-vui-tooltip-copy="Account Opening Offer: Subject to credit approval. To apply, you must be a Verizon wireless Account Owner or Account Manager on an account with up to 12 phone lines max (depending on plan) or Fios Account Owner with at least one active Fios service. In order to qualify for this offer, you must (i) apply and be approved for a Verizon Visa Signature® Card account; (ii) make your first purchase within 90 days to receive a $50 statement credit, and(iii) make $1,500 in qualifying purchases within the first 90 days of account opening to receive the $100 statement credit. Only one offer per account. Account must remain open and in good standing at time statement credit is applied to the Account. A $50 statement credit will post to account 1-2 billing cycles after first purchase is made. A $100 statement credit will post to account 1-2 billing cycles after the spend threshold of $1500 is met within 90 days. Statement credit(s) cannot be used to satisfy the required monthly payment on your credit card account and may not be redeemed for cash or cash equivalent. This offer is available for applicants who are approved starting 1/7/2026. We reserve the right to discontinue or alter the terms of this offer at any time. Limited time offer. NO ANNUAL FEE: For New Accounts as of 11/1/25: Verizon Visa Signature® Card: Variable Purchase APRs are 22.49%, 27.49% or 33.49%. Variable Penalty APRs are 32.49%, 37.49% or 39.99%. Min Interest Charge $2. Variable Cash APRs are 26.74%, 31.74% or 37.74% and 5% Fee ($10 min). Variable Bal Trans APRs are 22.49%, 27.49% or 33.49% and 5% Fee ($5 min). The Contactless Indicator mark and the Contactless Symbol are trademarks owned by and used with permission of EMVCo, LLC. The Verizon Visa Signature® Card is issued by Synchrony Bank pursuant to a license from Visa USA Inc." data-vui-aria-label="More information on Get up to $150 cash back, tooltip" aria-describedby="tooltip-id" aria-expanded="false" role="button" id="vui-tooltip-1gjnXK90jTjWhfAJqfEl_" aria-label="More information on More information on Get up to $150 cash back, tooltip tooltip" tabindex="-1">
                     <i class="vui:button-icon__icon vui:icon vui:icon--info"></i>
                     </button>
                  </span>
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/solutions-and-services/verizon-visa-card/" aria-label="Get up to $150 cash back Get started" data-description="Get up to $150 cash back Get started" data-campaign-id="2025_OCT_PR_1_VVC" data-impression-category="Prod-Sol-Svcs-Perks" data-track="{&quot;name&quot;:&quot;l11|p4|Prod-Sol-Svcs-Perks|||||2025_OCT_PR_1_VVC|Get up to $150 cash back Get started&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Get started </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to" aria-label="Slide 5 of 7" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/1025_deals_lp_bento_military_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Military families deserve our best.
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Save up to $25/mo on myPlan. Plus, exclusive savings on Fios Home Internet. 
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/military/" aria-label="Military families deserve our best. Learn more" data-description="Military families deserve our best. Learn more" data-campaign-id="2025_JUL_EV_MILITARY_NA" data-impression-category="Home Plan" data-track="{&quot;name&quot;:&quot;l11|p5|Home Plan|||||2025_JUL_EV_MILITARY_NA|Military families deserve our best. Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide" aria-label="Slide 6 of 7" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/student-m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/student-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/student-m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/student-m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/student-d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/student-d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/student-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Smart ways to save for students.
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Save up to $25/mo on myPlan. Plus, exclusive savings on Fios Home Internet. 
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/featured/students/" aria-label="Smart ways to save for students. Learn more" data-description="Smart ways to save for students. Learn more" data-track="{&quot;name&quot;:&quot;l11|p6||||||Smart ways to save for students.|Smart ways to save for students. Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
               
               
   
   
   
   
   

   <!-- PROMO CARDS CAROUSEL-->
   <div class="vui:carousel__slide vui:cmp-promocards__carousel-slide scroll-to" aria-label="Slide 7 of 7" aria-hidden="true">
      <div class="vui:carousel__slide-content  vui:theme__surface vui:theme--light-primary vui:cmp-promocards__box has:shadow vui:cmp-promocard__tile_height">

         <div class="vui:cmp-promocards__media vui:u-position-relative">
  <picture class="vui:tpl-backgroundimage vui:u-position-absolute vui:u-object-fit-cover vui:u-height-100 vui:u-width-100 vui:cmp-promocards__background-image">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 767px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_m?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_m?&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_d?&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_d?&amp;scl=1 2x" type="image/webp">
    <img src="assets/ss7.vzw.com/is/image/VerizonWireless/0725_vz_tws_teachers_bento_box_m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-backgroundimage__img vui:u-height-100 vui:u-width-100 " tabindex="-1">
  </picture>
</div>
         <div class="vui:cmp-promocards__content vui:u-padding-6x">
            <div class="vui:cmp-promocards__details">

               <h3 class="vui:text vui:text--bold vui:text--title-small  vui:theme--fg-primary vui:theme--fg-black vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-3x">
                  Much- deserved discounts for teachers
               </h3>
               <p class="vui:cmp-promocards__description vui:text vui:text--body-large">
                  Save on mobile or home internet plans. Bundle both to save more. Check your discount eligibility to get started 
               </p>
            </div>


            <div class="vui:cmp-promocards__stretch">
               <a class=" vui:text-link vui:is-stretched vui:text-link--standalone--small vui:text--bold vui:text--body-small vui:text--body-large@lg
                     " href="/deals/featured/teachers/" aria-label="Much- deserved discounts for teachers Learn more" data-description="Much- deserved discounts for teachers Learn more" data-campaign-id="JUL_PR_1_BTS" data-impression-category="Other-M+H Multiple" data-track="{&quot;name&quot;:&quot;l11|p7|Other-M+H Multiple|||||JUL_PR_1_BTS|Much- deserved discounts for teachers Learn more&quot;,&quot;type&quot;:&quot;impression&quot;}" tabindex="-1">
                  <span class="visualizer-ctaname">Learn more </span><span class="vui:text-link__caret"></span>
               </a>
            </div>
         </div>

      </div>
   </div>
   <!--END PROMO CARDS CAROUSEL-->

            
         </div>
      <div class="vui:carousel__arrow-wrap vui:carousel__arrow-next-wrap"><button class="vui:carousel__arrow-next vui:carousel__arrow Icon Icon--right-arrow u-marginTop--xs0 u-marginTop--lg0" aria-label="Next" aria-disabled="false" data-vui-arrow-bound="true" tabindex="0"></button></div></div>
   <div class="vui:carousel__scrubber-wrap"><div class="vui:carousel__scrubber-track"><div class="vui:carousel__scrubber" style="width: 28.9986%;"></div></div></div></div>
</section></div>

        
    </div>




</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>div#shop-category .vui\:cmp-sectionheader__headonly {
    min-height: auto;
    padding-bottom: 20px;
}
</style>
  
  
</div>
<div class="sectionheader">








  
  

  
  


<div>
<section class="vui:theme--light-primary vui:cmp-sectionheader" translate="yes" id="shop-category">
    <div class="vui:page-block vui:grid vui:page-block--full-bleed vui:text--center@xl vui:text--center" id="shop-category">

          <div class="vui:theme__surface vui:grid__col--12 vui:u-position-relative  vui:cmp-sectionheader__headonly vui:u-padding-left-2x vui:u-padding-right-2x  ">
                
                  
  

    <div>
      <h2 class=" vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg  vui:u-display-inline">
        Shop by category
      </h2>
       <!-- Header Tooltip -->
      
    </div>

    

    <div>
      
      
      
    </div>



                
            </div>

    </div>
</section>
</div></div>
<div class="quicklinks">
  
  
  

  
  


  <section class="" translate="yes">
  
  <div class="vui:cmp-quicklinks vui:carousel vui:carousel--no-nav" data-vui-cmp-quicklinks="" data-vui-carousel="" id="vui-carousel-6GxeGiIJ28ZYyp9XKdTI7">
    <div class="vui:cmp-quicklinks__scroll-container vui:carousel--hidden-controls vui:carousel__scroll-container scroll-target--nextHidden">
      <div class="vui:cmp-quicklinks__content vui:carousel__content  " tab-index="-1">
        
  <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="1">
    <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
      <a href="/deals/deals/smartphones/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__dark_primary" draggable="false" data-track="{&quot;name&quot;:&quot;l13|p1||||||quick links|Mobile deals&quot;,&quot;type&quot;:&quot;impression&quot;}">
        
        Mobile deals
      </a>
    </div>
  </div>

      
        
  <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="2">
    <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
      <a href="/deals/deals/home-internet/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__dark_primary" draggable="false" data-track="{&quot;name&quot;:&quot;l13|p2||||||quick links|Home internet deals&quot;,&quot;type&quot;:&quot;impression&quot;}">
        
        Home internet deals
      </a>
    </div>
  </div>

      
        
  <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="3">
    <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
      <a href="/deals/products/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__dark_primary" draggable="false" data-track="{&quot;name&quot;:&quot;l13|p3||||||quick links|Accessories deals&quot;,&quot;type&quot;:&quot;impression&quot;}">
        
        Accessories deals
      </a>
    </div>
  </div>

      </div>
    </div>
  </div>
  </section>

</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>  @media (max-width:768px) {
  	.quicklinks {
  		.vui\:cmp-quicklinks__content {
  			display: flex;
  			flex-direction: column;
			gap: 1rem;

			.vui\:cmp-quicklinks__slide {
				padding: 0px !important
			}
  		}
  	}
  }</style>
  
  
</div>
<div class="accordion">




  
  

  
  









<section data-vui-cmp-accordion="" translate="yes" class="vui:theme__surface vui:theme--light-primary">
  <div class="vui:page-block vui:page-block--bleed vui:u-padding-top-12x vui:u-padding-top-16x@lg vui:u-padding-bottom-24x vui:u-padding-bottom-32x@lg vui:u-padding-bottom-32x@lg vui:u-padding-left-4x vui:u-padding-left-6x@lg vui:u-padding-right-4x vui:u-padding-right-6x@lg">
    <div class="vui:theme__surface" data-dynamic="https://www.verizon.com/support/spot/?tag=dealslp&amp;count=30&amp;t=1589217688376">
      <h2 class="vui:text vui:text--bold vui:text--center vui:text--title-medium vui:text--title-xlarge@lg vui:u-margin-bottom-8x vui:u-margin-bottom-12x@lg">

        
          <span aria-hidden="true">
            Have questions? <br>We’ve got answers.
          </span>
      </h2>
      <div class="cmp-accordion-items">
        
          
  <details class="vui:accordion vui:accordion--border">
    <summary class="vui:accordion__summary" role="button">
      <h3 class="vui:text vui:text--bold vui:text--title-xsmall">What kinds of discounts can I get on my wireless service?</h3>
    </summary>
    <div class="vui:accordion__content vui:cmp-accordion__contentwidth">
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        <p>Verizon offers <a href="/deals/deals/" data-track="{&quot;name&quot;:&quot;l14|p1||||||What kinds of discounts can I get on my wireless service?|great deals on phones&quot;,&quot;type&quot;:&quot;impression&quot;}">great deals on phones</a>, including iPhone deals, Samsung Galaxy deals, and Google Pixel deals.</p>

        </div>
        </div>
  </details>

        
          
  <details class="vui:accordion vui:accordion--border">
    <summary class="vui:accordion__summary" role="button">
      <h3 class="vui:text vui:text--bold vui:text--title-xsmall">Does Verizon offer any deals if I'm switching from a different carrier?  </h3>
    </summary>
    <div class="vui:accordion__content vui:cmp-accordion__contentwidth">
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        <p>Yes. Verizon deals for new customers are definitely available. For example, if you switch to our network and choose an Unlimited Plus plan, you can access some of our best smartphone and accessory deals. You can also <a href="/deals/bring-your-own-device/" data-track="{&quot;name&quot;:&quot;l14|p2||||||Does Verizon offer any deals if I'm switching from a different carrier?|bring your own device&quot;,&quot;type&quot;:&quot;impression&quot;}">bring your own device</a> if you <a href="/deals/switch-to-verizon/" data-track="{&quot;name&quot;:&quot;l14|p3||||||Does Verizon offer any deals if I'm switching from a different carrier?|switch to Verizon&quot;,&quot;type&quot;:&quot;impression&quot;}">switch to Verizon</a> and access Verizon phone deals after you switch.</p>

        </div>
        </div>
  </details>

        
          
  <details class="vui:accordion vui:accordion--border">
    <summary class="vui:accordion__summary" role="button">
      <h3 class="vui:text vui:text--bold vui:text--title-xsmall">Does Verizon have any holiday-specific deals?</h3>
    </summary>
    <div class="vui:accordion__content vui:cmp-accordion__contentwidth">
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        <p>Verizon deals are promoted regularly. In addition to promotions offered throughout the year, we also offer deals for many holidays including Valentine's Day, Mother's Day, Father's Day, plus seasonal deals like Graduation deals, Back to School, and <a href="/deals/deals/black-friday/" data-track="{&quot;name&quot;:&quot;l14|p4||||||Does Verizon have any holiday-specific deals?|Black Friday&quot;,&quot;type&quot;:&quot;impression&quot;}">Black Friday</a>. But remember, even when holidays are over, the Verizon savings continue. Keep the savings going by checking out all of our great deals any time of year.</p>

        </div>
        </div>
  </details>

        
          
  <details class="vui:accordion vui:accordion--border">
    <summary class="vui:accordion__summary" role="button">
      <h3 class="vui:text vui:text--bold vui:text--title-xsmall">How can I save even more money with Verizon?</h3>
    </summary>
    <div class="vui:accordion__content vui:cmp-accordion__contentwidth">
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        <p>Among the great ways to save even more money with Verizon is to <a href="/deals/bring-your-own-device/" data-track="{&quot;name&quot;:&quot;l14|p5||||||How can I save even more money with Verizon?|bring your own device&quot;,&quot;type&quot;:&quot;impression&quot;}">bring your own device</a> when you set up your new line. You'll be watching the savings roll in every month before you know it. There are additional ways to save, including a <a href="/deals/discounts/phone-home-internet-bundle/" data-track="{&quot;name&quot;:&quot;l14|p6||||||How can I save even more money with Verizon?|mobile + home discount&quot;,&quot;type&quot;:&quot;impression&quot;}">mobile + home discount</a> for customers who have both a postpaid Verizon mobile phone plan (excluding business and data-only plans) and an internet plan with us.</p>

        </div>
        </div>
  </details>

        
          
  <details class="vui:accordion vui:accordion--border">
    <summary class="vui:accordion__summary" role="button">
      <h3 class="vui:text vui:text--bold vui:text--title-xsmall">How do I lower my monthly Verizon bill?</h3>
    </summary>
    <div class="vui:accordion__content vui:cmp-accordion__contentwidth">
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        <p>There are several simple ways to lower your Verizon bill. First find your latest Verizon bill and review your current plan features. Make sure to check and see if changing your plan or getting an added line will bring you any discounts. Be sure to sign up for Auto Pay and paper-free billing <a href="/deals/military/" data-track="{&quot;name&quot;:&quot;l14|p7||||||How do I lower my monthly Verizon bill?|or military&quot;,&quot;type&quot;:&quot;impression&quot;}">or military</a>/<a href="/deals/support/employee-discount-validation-faqs/" data-track="{&quot;name&quot;:&quot;l14|p8||||||How do I lower my monthly Verizon bill?|employee&quot;,&quot;type&quot;:&quot;impression&quot;}">employee</a> discounts.</p>

        </div>
        </div>
  </details>

        
      </div>
    </div>
  </div>
</section></div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  <style>[data-vui-cmp-anchorlinks-link] {
   color: black
}</style>
  
  <script>function scrollToWithOffset(element, offset = 0) {
  if (!element) return;
  const y = element.getBoundingClientRect().top + window.scrollY - offset;
  window.scrollTo({
    top: y,
    behavior: 'smooth',
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('button[data-jumpto-id]');
  const sectionIds = Array.from(buttons).map(btn => btn.getAttribute('data-jumpto-id').toLowerCase());
  const sections = sectionIds
    .map(id => document.getElementById(id))
    .filter(el => el !== null);

  function getOffset() {
    const getElementHeight = (elementId) => {
      const el = document.getElementById(elementId) ?? false;
      return el ? el.getBoundingClientRect().height : 0;
    };
    const isMobile = window.matchMedia("(max-width: 767px)").matches;
    return getElementHeight('vz-gh20') + getElementHeight('body-anchorlinks') + (isMobile ? 120 : 60);
  }

  function activarBoton(id) {
    if (!id) return;
    buttons.forEach(btn => {
      btn.classList.remove('vui:is-active');
      if (btn.getAttribute('data-jumpto-id').toLowerCase() === id.toLowerCase()) {
        btn.classList.add('vui:is-active');
      }
    });
  }

  buttons.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-jumpto-id');
      const targetSection = document.getElementById(targetId);
      if (!targetSection) return;

      const offset = getOffset();
      scrollToWithOffset(targetSection, offset);
      activarBoton(targetId);

      // Forzar actualización tras scroll animado (especialmente en móvil)
      setTimeout(() => {
        activarBoton(targetId);
      }, 500);
    });
  });

  const threshold = -35;
  window.addEventListener('scroll', () => {
    let activeSection = null;
    let minDistance = Infinity;
    const offset = getOffset();

    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      // Más tolerancia en móvil para evitar no activar botón
      const isMobile = window.matchMedia("(max-width: 767px)").matches;
      const tolerance = isMobile ? 50 : 0;
      const distance = Math.abs(rect.top - threshold + tolerance);

      if (distance < minDistance) {
        minDistance = distance;
        activeSection = section;
      }
    });

    if (activeSection) {
      activarBoton(activeSection.id);
    }
  });

  const idHash = window.location.hash;
  if (idHash) {
    const normalizedHash = idHash.replace('#', '').toLowerCase();
    if (sectionIds.includes(normalizedHash)) {
      const targetSection = document.getElementById(normalizedHash);
      if (targetSection) {
        setTimeout(() => {
          const offset = getOffset();
          scrollToWithOffset(targetSection, offset);
          activarBoton(normalizedHash);
        }, 500);
      }
    }
  }
});
</script>
</div>
<div class="html">
  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
  
  
  
  
  
  
    

  


  
  
  <script>document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (e) {
        if (e.target.classList.contains('vui:button') && e.target.getAttribute('href') === "#checkAvailability") {
            const modalEl = document.querySelector('[data-vui-modal]');
            const el = modalEl.querySelector('[data-vui-modal-hide]');
            if (el) {
                el.click();
                setTimeout(() => {
                    window.vzlqw.openModal();
                }, "1000");
            }
        }
    });
});</script>
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


      

  
  
  
  
  


  

  

  
  <div id="abandonedCartModal" role="dialog" class="vui:modal vui:theme--light-primary vui:u-invisible" data-vui-modal="abandonedCartModal" aria-modal="true" tabindex="-1" aria-hidden="true">
  <div class="vui:modal__backdrop" data-vui-modal-hide=""></div>
  <div class="vui:modal__dialog" role="document">
    <div class="vui:modal__close">
      <button class="vui:u-z-index-3 vui:button-icon vui:button-icon--small" type="button" data-vui-modal-hide="" aria-label="Close dialog">
        <i class="vui:button-icon__icon vui:icon vui:icon--close"></i>
      </button>
    </div>
    <div class="vui:modal__content" data-vui-cmp-abandonedcart-modal-content="">
    </div>

  </div>

</div>
  
  

    <script>
        var miniLq = false;
    </script>


<script>
        let main = document.querySelector('main');
    let loopQual =
        "<input type='hidden' name='EnableLQ2' id='EnableLQ2' value='true' />"
        + "<div id='lq-widget-root'></div>"
    main.insertAdjacentHTML('afterbegin', loopQual);

    window.onload = function (event) {
        if (window.location.href.indexOf("#checkavailability") > -1) {
            window.vzlqw.openModal()
            document.querySelector('#modal-close-btn').addEventListener("click", function () {
                var uri = window.location.toString();
                if (uri.indexOf("#") > 0) {
                    var clean_uri = uri.substring(0,
                        uri.indexOf("#"));
                    window.history.replaceState({},
                        document.title, clean_uri);
                }
            });
        }
    }

    var queryparms1 = window.location.search, 
        lqSource = "ResponsiveLQ";
    if ((document.getElementById('EnableLQ2').value === "true")) {
        var scripts = document.getElementsByTagName("script");
        var lqJS = 0;
        for (var i = 0; i < scripts.length; i++) {
            if (scripts[i].src) {
                lqJS = scripts[i].src.indexOf("vzlqwidget.js");
            }
        }
        //lq2.0
        if (document.getElementById("checkAvailability") !== null) {
            var temp = document.getElementById('checkAvailability');
            temp.hidden = true;
        }
        var temp = document.createElement('script');
        if (window.location.hostname === "www.verizon.com") {
            if (lqJS == -1) {
                temp.setAttribute("src", window.location.origin + "/inhome/vzlqwidget.js");
            }
        } else {
            if (lqJS == -1) {
                temp.setAttribute("src", "https://www98.verizon.com/inhome/vzlqwidget.js");
            }
        }
        document.body.appendChild(temp);
    }
    if(queryparms1.search("type=moving") != -1) {
        lqSource = "MOVERS";
    }

    let globalNav = document.querySelector('#vz-gh20');

    window.vzwlqwidgetconfig = {
        targetElementId: "lq-widget-root",
        lqApi: "LOCUS_API",
        platform: "",
        scTag: "wireless",
        fiosInquire: "",
        source: lqSource,
        twsStickyLq: "",
        renderSettings: {
            mode: "modal",
            externalTrigger: ['.checkAvailabilityBtn', '.getStartedBtn', '[href="#checkAvailability"]'],
            externalSignInTrigger: ['.signInLQBtn'],
            miniLq: {
                enabled: miniLq,
                layout: {
                    default: {
                        topPosition: '68px',
                        zIndex: '899',
                    },
                    mq_lg: {    
                        breakPoint: '1021px',
                        topPosition: '121px',
                        zIndex: '899'
                    }
                },
                 options: { sticky: "true"},
            }
        }
    }

    function validateExperience(e) {
        if (e && e.detail) {
            const detailArray = e.detail;
            if (detailArray.length > 0) {
                if (detailArray[0] !== "NOT_QUALIFIED"){
                    updateCheckAvailabilityToOrderNowButtons();
                }
                else{
                    updateCheckAvailabilityToGetUpdatesButtons();
                }
            } else {
                updateOrderNowToCheckAvailabilityButtons();
            }
        }
    }

    function updateCheckAvailabilityToGetUpdatesButtons() {
        const buttons = document.querySelectorAll(".checkAvailabilityBtn, .getStartedBtn, [href='#checkAvailability']");
        buttons.forEach(button => {
            button.innerHTML = "Get updates";
        });
    }
    function updateCheckAvailabilityToOrderNowButtons() {
        const buttons = document.querySelectorAll(".checkAvailabilityBtn, .getStartedBtn, [href='#checkAvailability']");
        buttons.forEach(button => {
            button.innerHTML = "Order now";
        });
    }

    function updateOrderNowToCheckAvailabilityButtons() {
        const buttons = document.querySelectorAll(".checkAvailabilityBtn, .getStartedBtn, [href='#checkAvailability']");
        buttons.forEach(button => {
            button.innerHTML = "Check availability";
        });

        const getStartedbuttons = document.querySelectorAll(".getStartedBtn");
        buttons.forEach(button => {
            button.innerHTML = "Get started";
        });
    }

    window.addEventListener('lqw-qualification-success', validateExperience);
</script><script src="assets/www.verizon.com/inhome/vzlqwidget.js"></script>
   

    
  

<div class="gnav20-click-div"></div><div id="vui-tooltip-portal-56Jtd2Fz2qJY6Twrxw-ZG"></div></body></html>