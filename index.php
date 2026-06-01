<?php
declare(strict_types=1);
require_once __DIR__ . '/base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
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
    </style>
    <style id="offline-hide-lang">
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
    </style>
    <style id="nav-simplify-offline">
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
    </style>
    <style id="offline-hide-eyebrow-lob">
    .gnav20-eyebrow,
    .gnav20-eyebrow-link-list,
    .gnav20-mobile-menu .gnav20-eyebrow-link-list {
    display: none !important;
    }
    #gnav20-ulwrapper > a.gnav20-main-header {
    display: none !important;
    }
    </style>
    <base href="./">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <title>Verizon: Wireless, Internet, TV and Phone Services | Official Site</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="homepage, verizon, mobile, verizon internet, fios internet, verizon wireless, verizon plans, verizon wireless plans, verizon phones, verizon residential, verizon fios internet">
      <meta name="description" content="Shop Verizon smartphone deals and wireless plans on the largest 4G LTE network. First to 5G. Get Fios for the fastest internet, TV and phone service.">
      <meta name="template" content="page-content">
      <meta name="robots" content="index, follow">
      <meta property="og:title" content="Verizon: Wireless, Internet, TV and Phone Services | Official Site">
      <meta property="og:site_name" content="Verizon">
      <meta property="og:url" content="https://www.verizon.com/?cmp=ORG-C-HQ-NON-A-EN-NONE-dksoc2020-2S0OM0-VZ">
      <meta property="og:description" name="description" content="Shop Verizon smartphone deals and wireless plans on the largest 4G LTE network. First to 5G. Get Fios for the fastest internet, TV and phone service.">
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

      let pathName = "/content/wcms/personal-home",
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
      total: "", // $transaction price
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
      <style>
      [data-vui-cmp-hpmyoffers] .marquee-top .vui\:marquee-content .vui\:text--center,
      [data-vui-cmp-hpmyoffers] .marquee-bottom .vui\:marquee-content .vui\:text--center {
      @media (min-width: 1024px) {
      max-width: 50%;
      }
      }
      .cmp-cast--hidden {
      visibility: hidden;
      }
      .vui\:skeleton:after {
      z-index: 100 !important
      }
      </style>
      <script>
      (function() {
      const THEME_REVERSE = {
      'vui:theme--dark-primary': 'Dark',
      'vui:theme--light-primary': 'Light'
      };

      const EYEBROW_REVERSE = {
      'vui:theme--fg-primary': 'Primary',
      'vui:theme--fg-secondary': 'Secondary',
      'vui:theme--fg-brand': 'Brand'
      };

      // Intercept fetch globally
      const originalFetch = window.fetch;
      window.fetch = function(...args) {
      const url = args[0];

      return originalFetch.apply(this, args).then(async (response) => {
      // Check if this is the My Offers API call
      if (url && typeof url === 'string' && 
      (url.includes('homePageOffers'))) {

      // Clone so we can read it
      const clonedResponse = response.clone();

      try {
      const data = await clonedResponse.json();

      // Patch the data
      if (data?.response?.liveTiles) {
      data.response.liveTiles.forEach(tile => {
      if (tile?.aemNode) {
      // Convert class values back to keys
      if (tile.aemNode.theme && THEME_REVERSE[tile.aemNode.theme]) {
      console.log(`[API-PATCH] 🔧 Patching theme: ${tile.aemNode.theme} → ${THEME_REVERSE[tile.aemNode.theme]}`);
      tile.aemNode.theme = THEME_REVERSE[tile.aemNode.theme];
      }
      if (tile.aemNode.eyebrowColor && EYEBROW_REVERSE[tile.aemNode.eyebrowColor]) {
      console.log(`[API-PATCH] 🔧 Patching eyebrow: ${tile.aemNode.eyebrowColor} → ${EYEBROW_REVERSE[tile.aemNode.eyebrowColor]}`);
      tile.aemNode.eyebrowColor = EYEBROW_REVERSE[tile.aemNode.eyebrowColor];
      }
      }
      });
      }

      // Return new response with patched data
      return new Response(JSON.stringify(data), {
      status: response.status,
      statusText: response.statusText,
      headers: response.headers
      });
      } catch (e) {
      console.warn('[API-PATCH] ⚠️ Could not parse/patch response:', e);
      return response;
      }
      }

      return response;
      });
      };

      console.log('[API-PATCH] ✅ My Offers API patch installed - refresh page to apply');
      })();
      </script>
      <script>
      // set cast for carousel component to wait to initialize.
      window.vzfed = window.vzfed || {};
      window.vzfed.cast = window.vzfed.cast || {};
      window.vzfed.cast.notes = window.vzfed.cast.notes || [];
      window.vzfed.cast.isReady = false;
      </script>
      <script type="module" defer="" src="assets/www.verizon.com/etc.clientlibs/verizon-digital/clientlibs/clientlib-site.min.js"></script>
      <link rel="stylesheet" href="assets/www.verizon.com/etc.clientlibs/verizon-digital/clientlibs/clientlib-site.min.css" type="text/css">
    </head>
    <body class="page basicpage" id="page-052b00a1b9">
      <div class="root container responsivegrid vui:theme__surface">
        <div id="container-98bd49ee67" class="cmp-container  vui:theme__surface ">
          <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <header id="vz-gh20">
              <div class="xf-page-unified xfpage page basicpage">
                <div class="gnav20 gnav20-sticky" data-exp-name="Mobile">
                  <input type="hidden" id="cradle-context">
                  <div class="gnav20-sticky-content">
                    <div class="gnav20-apicomponentnewdesign">
                      <a class="gnav20-header-accessibility" tabindex="0" href="accessibility/" data-track="global nav:accessibility resource center">
                        <span>Accessibility Resource Center</span>
                        </a>
                        <a class="gnav20-header-accessibility" href="#gnav20-header-end" tabindex="0" id="gnav20-skip-to-main-content-id" data-track="global nav:skip to main content">
                          <span>Skip to main content</span>
                          </a>
                          <div class="gnav20-width-wrapper gnav20-new-design gnav20-new-search-style gnav20-promo-bottom gnav20-featured" data-gnav20-container="header">
                            <div class="gnav20-vzhmoverlay" style="height: 0px;">
                            </div>
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
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="contactus">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Contact us" href="support/contact-us/" data-label="Contact us" data-track="global nav:contact us">
                                              Contact us
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="support">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Support" href="support/" data-label="Support" data-track="global nav:support">
                                              Support
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="store">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Stores" href="stores/" data-label="Stores" data-track="global nav:stores">
                                              Stores
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="coveragemap">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Coverage map" href="coverage-map/" data-label="Coverage map" data-track="global nav:coverage map">
                                              Coverage map
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-localization">
                                        <div class="gnav20-utility-wrapper " item-title="localization">
                                          <a class="gnav20-lang-link" aria-label="Cámbiate al sitio web en español" data-href="./" href="./" data-lang="Español" mporgnav="" data-label="Español" lang="es" data-track="global nav:espanol">Español</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="gnav20-row-two">
                                      <div class="gnav20-grid1-wrapper">
                                        <div class="gnav20-logo">
                                          <div class="gnav20-logo-wrapper gnav20-relative-index">
                                            <a class="gnav20-logoWhiteBg" title="Verizon Home Page" href="./" target="_self" data-track="global nav:verizon home page">
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-navigation opacityOne">
                                        <div class="gnav20-navigation opacityOne">
                                          <div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">
                                            <div class="gnav20-navigation-item">
                                              <div class="gnav20-primary-menu">
                                                <a x-cq-linkchecker="skip" id="gnav20-Mobile-L1" class="gnav20-menu-label gnav20-menu-label-button" href="plans/unlimited/" aria-label="Mobile" data-track="global nav:mobile">Mobile</a>
                                                </div>
                                              </div>
                                              <div class="gnav20-navigation-item">
                                                <div class="gnav20-primary-menu">
                                                  <a x-cq-linkchecker="skip" id="gnav20-Home-Internet-L1" class="gnav20-menu-label gnav20-menu-label-button" href="home/internet#checkavailability" aria-label="Home Internet" data-track="global nav:home internet">Home Internet</a>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu">
                                                    <a x-cq-linkchecker="skip" id="gnav20-Shop-L1" class="gnav20-menu-label gnav20-menu-label-button" href="smartphones/" aria-label="Shop" data-track="global nav:shop">Shop</a>
                                                    </div>
                                                  </div>
                                                  <div class="gnav20-navigation-item">
                                                    <div class="gnav20-primary-menu">
                                                      <a x-cq-linkchecker="skip" id="gnav20-Deals-L1" class="gnav20-menu-label gnav20-menu-label-button" href="deals/" aria-label="Deals" data-track="global nav:deals">Deals</a>
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
                                                    <button class="gnav20-search-icon" id="gnav20-search-icon-mobile" aria-label="Search Verizon" data-placeholder-text="Search Verizon" data-track="global nav:search verizon">
                                                    </button>
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
                                                    <div class="gnav20-dropdown-menu gnav20-hide " id="gnav20-sign-in-mobile">
                                                      <button class="gnav20-close-account-utility" aria-label="close the Sign In Menu" tabindex="0" data-track="global nav:close the sign in menu">Close</button>
                                                        <p class="gnav20-signin-content-title">
                                                        </p>
                                                        <ul class="gnav20-dropdown gnav20-fixed-top gnav20-navigation-item">
                                                          <li class="gnav20-dropdown-list gnav20-hide-on-desktop gnav20-goback">
                                                            <button class="gnav20-back-to-menu " aria-label="Back to Menu" tabindex="0" data-track="global nav:back to menu:go back">Back to Menu</button>
                                                            </li>
                                                            <li class="gnav20-dropdown-list">
                                                              <span class="offline-link-plain" data-hide-for="appid:vpd" id="gnav20-sign-id-list-item-1-mobile" class="gnav20-dropdown-list-item"  tabindex="0" data-track="global nav:sign in menu:account overview">Account overview</span>
                                                              </li>
                                                              <li class="gnav20-dropdown-list gnav20-hide">
                                                                <a data-show-for="appid:vpd" id="gnav20-sign-id-list-item-2-mobile" class="gnav20-dropdown-list-item" href="about/privacy/" tabindex="0" data-track="global nav:sign in menu:account overview">Account overview</a>
                                                              </li>
                                                              <li class="gnav20-dropdown-list ">
                                                                <span class="offline-link-plain" id="gnav20-sign-id-list-item-3-mobile" class="gnav20-dropdown-list-item"  tabindex="0" data-track="global nav:sign in menu:pay bill">Pay bill</span>
                                                              </li>
                                                              <li class="gnav20-dropdown-list ">
                                                                <span class="offline-link-plain" id="gnav20-sign-id-list-item-4-mobile" class="gnav20-dropdown-list-item"  tabindex="0" data-track="global nav:sign in menu:make a one-time payment">Make a one-time payment</span>
                                                              </li>
                                                              <li class="gnav20-dropdown-list ">
                                                                <span class="offline-link-plain" id="gnav20-sign-id-list-item-5-mobile" class="gnav20-dropdown-list-item"  tabindex="0" data-track="global nav:sign in menu:register">Register</span>
                                                              </li>
                                                              <li class="gnav20-dropdown-list ">
                                                                <span class="offline-link-plain" id="gnav20-sign-id-list-item-6-mobile" class="gnav20-dropdown-list-item"  tabindex="0" data-track="global nav:sign in menu:business log in">Business Log in</span>
                                                              </li>
                                                            </ul>
                                                          </div>
                                                          <div class="gnav20-vzmoverlay">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="gnav20-unifiedcart">
                                                      <div class="gnav20-utility-wrapper" item-title="unifiedCart">
                                                        <div>
                                                          <button id="gnav20-cart-icon-mobile" class="gnav20-cart" aria-label="Shopping Cart Menu 0 items in the cart" aria-expanded="false" data-track="global nav:cart menu:shopping cart menu 0 items in the cart">
                                                            <span class="gnav20-unifiedcart-bubble" style="display: none;">0</span>
                                                            </button>
                                                            <div id="gnav20-my-side-nav-mobile" class="gnav20-unified-cart gnav20-hide gnav20-unified-cart-right gnav20-flyout-cart-enabled gnav20-auth-flyout-cart">
                                                              <button id="gnav20-cclosex-mobile" class="gnav20-closex" tabindex="0" aria-label="Close Shopping Cart" data-track="global nav:close shopping cart">
                                                              </button>
                                                              <p class="gnav20-cart-content-title">Choose your cart:</p>
                                                                <ul class="gnav20-content-lists">
                                                                <li class="gnav20-content-list">
                                                                <a id="gnav20-cart-list-item-1-mobile" class="gnav20-content-list-arrow gnav20-mobile-cart-count" href="#" data-track="global nav:cart menu:mobile solutions">Mobile solutions</a>
                                                              </li>
                                                              <li class="gnav20-content-list">
                                                                <a id="gnav20-cart-list-item-2-mobile" class="gnav20-content-list-arrow gnav20-home-cart-count" href="home/internet/" data-track="global nav:cart menu:home solutions">Home solutions</a>
                                                              </li>
                                                            </ul>
                                                            <div class="cart-button-container">
                                                              <a href="#" class="cart-button" data-track="global nav:cart menu:go to cart">Go To Cart</a>
                                                              </div>
                                                            </div>
                                                            <div class="gnav20-vzmoverlay">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0" aria-label="Menu for navigation opens a modal overlay" data-track="global nav:menu for navigation opens a modal overlay">
                                                      </button>
                                                    </div>
                                                    <nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
                                                      <button id="gnav20-closex" class="gnav20-closex" aria-label="close the Menu" tabindex="0" data-track="global nav:close the menu">Close</button>
                                                        <div id="gnav20-ulwrapper">
                                                          <div class="gnav20-navigation-placeholder">
                                                            <div class="gnav20-navigation">
                                                              <div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">
                                                                <div class="gnav20-navigation-item">
                                                                <div class="gnav20-primary-menu">
                                                                <a x-cq-linkchecker="skip" id="gnav20-Mobile-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="plans/unlimited/" aria-label="Mobile" data-track="global nav:mobile">Mobile</a>
                                                              </div>
                                                            </div>
                                                            <div class="gnav20-navigation-item">
                                                              <div class="gnav20-primary-menu">
                                                                <a x-cq-linkchecker="skip" id="gnav20-Home-Internet-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="home/internet#checkavailability" aria-label="Home Internet" data-track="global nav:home internet">Home Internet</a>
                                                              </div>
                                                            </div>
                                                            <div class="gnav20-navigation-item">
                                                              <div class="gnav20-primary-menu">
                                                                <a x-cq-linkchecker="skip" id="gnav20-Shop-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="smartphones/" aria-label="Shop" data-track="global nav:shop">Shop</a>
                                                              </div>
                                                            </div>
                                                            <div class="gnav20-navigation-item">
                                                              <div class="gnav20-primary-menu">
                                                                <a x-cq-linkchecker="skip" id="gnav20-Deals-L1-mobile" class="gnav20-menu-label gnav20-menu-label-button" href="deals/" aria-label="Deals" data-track="global nav:deals">Deals</a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </nav>
                                                  </div>
                                                </div>
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
                                                        <button class="gnav20-slide-arrow gnav20-slide-arrow-prev" aria-label="previous promo message 2 of 2" data-track="global nav:promo ribbon:promo message 2 of 2" style="display: block;">
                                                        </button>
                                                        <div class="gnav20-promotext opacityOne" item-title="promoRibbon">
                                                          <div class="gnav20-promo-ribbon gnav20-active-promo" data-nosnippet="">
                                                            <div class="gnav20-promo-text gnav20-white-focus">
                                                              <span>
                                                                <a class="gnav20-promo-slide-link" href="smartphones/" aria-label="Promo 1 of 2 Add a new smartphone line and we" data-track="global nav:promo ribbon:promo 1 of 2 add a new smartphone line and we">&nbsp;</a>Add a new smartphone line and we'll waive the activation fee. Online only. With myPlan.<span aria-hidden="true"> | </span>
                                                                <a class="gnav20-promo-link" href="smartphones/" aria-label="Add a new smartphone line and we" data-track="global nav:promo ribbon:shop now">
                                                                <u>Shop now</u>
                                                              </a>
                                                              <span aria-hidden="true"> | </span>
                                                                <span class="gnav20-promo-icon">
                                                                <a role="button" href="#" data-track="global nav:promo ribbon:details">Details</a>
                                                              </span>
                                                            </span>
                                                          </div>
                                                          <div class="gnav20-modal-content-placeholder" style="display:none;">
                                                            <div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading">$40.00 activation fee applied as one-time bill credit (w/in 1-2 bill cycles) when you add a new smartphone line or bring your own smartphone on Unlimited Welcome, postpaid Unlimited Plus or Unlimited Ultimate plan req'd.</div>
                                                              <div class="gnav20-modal-cta">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="gnav20-promo-ribbon" data-nosnippet="">
                                                            <div class="gnav20-promo-text gnav20-white-focus">
                                                              <span>
                                                                <a class="gnav20-promo-slide-link" href="switch-to-verizon/" aria-label="Promo 2 of 2 AT&amp;T Customers: Bring in your bill and we’ll give you a better deal." data-track="global nav:promo ribbon:promo 2 of 2 at&amp;t customers: bring in your bill and we’ll give you a better deal.">&nbsp;</a>AT&amp;T Customers: Bring in your bill and we’ll give you a better deal.<span aria-hidden="true"> | </span>
                                                                <a class="gnav20-promo-link" href="switch-to-verizon/" aria-label="AT&amp;T Customers: Bring in your bill and we’ll give you a better deal. link to Switch now" data-track="global nav:promo ribbon:at&amp;t customers: bring in your bill and we’ll give you a better deal. link to switch now">
                                                                <u>Switch now</u>
                                                              </a>
                                                              <span aria-hidden="true"> | </span>
                                                                <span class="gnav20-promo-icon">
                                                                <a role="button" href="#" aria-label="Offer details for bring your bill" data-track="global nav:promo ribbon:offer details for bring your bill">Details</a>
                                                              </span>
                                                            </span>
                                                          </div>
                                                          <div class="gnav20-modal-content-placeholder" style="display:none;">
                                                            <div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading">To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See <a style="text-decoration: underline !important;" href="switch-to-verizon/" aria-label="Switch now" data-track="global nav:promo ribbon:modal:www.verizon.com/switch-to-verizon">www.verizon.com/switch-to-verizon</a>.</div>
                                                              <div class="gnav20-modal-cta">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <button class="gnav20-slide-arrow gnav20-slide-arrow-next" aria-label="next promo message 2 of 2" data-track="global nav:promo ribbon:promo message 2 of 2" style="display: block;">
                                                        </button>
                                                      </div>
                                                      <div class="gnav20-modal" id="gnav20-modal">
                                                        <div class="gnav20-modal-overlay" tabindex="-1" data-modal-hide="">
                                                        </div>
                                                        <div class="gnav20-modal-content" aria-labelledby="gnav20-modal-heading" aria-describedby="gnav20-modal-sub-heading" role="dialog">
                                                          <button id="gnav20-close-icon" class="gnav20-promo-close-icon" tabindex="0" aria-label="Click here or press escape key to Close Modal Dialog" data-modal-hide="" data-track="global nav:promo ribbon:modal:click here or press escape key to close modal dialog">
                                                          </button>
                                                          <div class="gnav20-modal-content-wrapper">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div name="headerEnd" id="gnav20-header-end" role="none" aria-hidden="true" tabindex="-1" aria-label="end of navigation menu">
                                              <nav id="offline-l2-links" aria-label="Quick shop links">
                                                <a href="smartphones/">Phones</a>
                                                  <a href="tablets/">Tablets</a>
                                                    <a href="connected-smartwatches/">Watches</a>
                                                      <a href="plans/unlimited/">Plans</a>
                                                        <a href="home/internet/">Home Internet</a>
                                                          <a href="deals/">Deals</a>
                                                            <a href="shop/online/free-5g-phones/">Free 5G phones</a>
                                                              <a href="support/">Support</a>
                                                                <a href="support/contact-us/">Contact us</a>
                                                                <a href="stores/">Stores</a>
                                                              </nav>
                                                            </div>
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
                                                        <div class="gnav20-sticky-header gnav20-with-promo gnav20-new-design" style="height: 166px;">
                                                        </div>
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
                                              <div class="gnav20-sticky-header gnav20-with-promo gnav20-new-design" style="height: 166px;">
                                              </div>
                                            </div>
                                          </div>
                                        </header>
                                        <section data-vui-cmp-anchorlinks="" class="vui:cmp-anchorlinks">
                                          <div class="vui:cmp-anchorlinks__header">
                                          </div>
                                        </section>
                                        <main class="main container responsivegrid vui:page-block aem-GridColumn aem-GridColumn--default--12">
                                          <div id="main-59a0ebf7ec" class="cmp-container">
                                            <div class="cast">
                                              <div id="cast--394881223" class="cmp-cast" data-cmp-is="cast" data-cmp-cast-path="/content/wcms/personal-home/jcr:content/root/main/cast_copy_copy" data-cmp-cast-config="{&quot;ids&quot;:[&quot;customer_wirelessAll_wirelineAuth&quot;],&quot;entities&quot;:{&quot;customer_wirelessAll_wirelineAuth&quot;:{&quot;id&quot;:&quot;customer_wirelessAll_wirelineAuth&quot;,&quot;name&quot;:&quot;Any wireless customer or authenticated wireline customer&quot;,&quot;type&quot;:&quot;aep&quot;,&quot;rule&quot;:{&quot;or&quot;:[{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.mobile&quot;},true]},{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.fios&quot;},true]},{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.one_vz&quot;},true]},{&quot;in&quot;:[&quot;d53f2c1d-b8c2-4d91-a9e0-3baaba807415&quot;,{&quot;var&quot;:&quot;storage.entities.segmentsAEP&quot;}]},{&quot;in&quot;:[&quot;existing-mobile&quot;,{&quot;var&quot;:&quot;params.entities.type&quot;}]}]},&quot;priority&quot;:1}}}">
                                                <div class="cmp-cast__content">
                                                  <div id="variant-e6246d58bb" class="cmp-variant fedcast-default">
                                                    <div class="quicklinks">
                                                      <section id="quickLinks-pzn" class="" translate="yes">
                                                        <div class="vui:cmp-quicklinks vui:carousel vui:carousel--no-nav" data-vui-cmp-quicklinks="" data-vui-carousel="" id="vui-carousel-mmkVvlJmw0pH5_QCgoQJX">
                                                          <div class="vui:cmp-quicklinks__scroll-container vui:carousel--hidden-controls vui:carousel__scroll-container scroll-target--nextHidden">
                                                            <div class="vui:cmp-quicklinks__content vui:carousel__content  " tab-index="-1">
                                                              <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="1">
                                                                <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                                <a href="switch-to-verizon/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p1||||||quick links|Switch to Verizon&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                                <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/1025_NGD_Quicklinks_switch_to_verizon_d?&amp;fmt=webp-alpha&amp;scl=1')">
                                                              </i>
                                                              Switch to Verizon
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="2">
                                                          <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                            <a href="smartphones/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p2||||||quick links|Phones&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/322401_NGD_Quicklinks_Phones_D?&amp;fmt=png-alpha&amp;scl=1')">
                                                              </i>
                                                              Phones
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="3">
                                                          <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                            <a href="deals/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p3||||||quick links|Deals&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/322401_NGD_Quicklinks_FreePhones_D?&amp;fmt=png-alpha&amp;scl=1')">
                                                              </i>
                                                              Deals
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="4">
                                                          <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                            <a href="plans/unlimited/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p4||||||quick links|Mobile plans&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/ngd_081825_existingcustomer_mobileplans_quicklink_dm?&amp;fmt=png-alpha&amp;scl=1')">
                                                              </i>
                                                              Mobile plans
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="5">
                                                          <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                            <a href="home/internet/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p5||||||quick links|Home Internet&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/ngd_061325_existingcustomer_homeinternet_quicklink_dm?&amp;fmt=png-alpha&amp;scl=1')">
                                                              </i>
                                                              Home Internet
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="vui:cmp-quicklinks__slide vui:carousel__slide" data-vui-cmp-quicklinks-link="6">
                                                          <div class="vui:cmp-quicklinks__slide__content vui:carousel__slide-content">
                                                            <a href="bring-your-own-device/" data-header="quick links" class="vui:cmp-quicklinks__anchor vui:button vui:cmp-quicklinks__anchor__light_brand" draggable="false" data-track="{&quot;name&quot;:&quot;l1|p6||||||quick links|Bring a device&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              <i class="vui:cmp-quicklinks__icon vui:icon" style="--vui-icon_mask-image: url('https://ss7.vzw.com/is/image/VerizonWireless/322401_NGD_Quicklinks_BringADevice_D?&amp;fmt=png-alpha&amp;scl=1')">
                                                              </i>
                                                              Bring a device
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </section>
                                              </div>
                                            </div>
                                          </div>
                                          <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/vendor/manifest.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>
                                          <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/clientlibs/pollyfills.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>
                                          <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/cast/clientlibs/vendor.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>
                                          <script defer="" src="assets/www.verizon.com/etc.clientlibs/vzwcom/components/vzrf/cast/clientlibs/site.min.js" xmlns="http://www.w3.org/1999/xhtml"></script>
                                        </div>
                                      </div>
                                      <div class="hpmyoffers">
                                        <div data-vui-cmp-hpmyoffers="" data-evergreen-tiles="{&quot;offerID&quot;:&quot;2026_mar_ev_1_pzn_gaming&quot;,&quot;header&quot;:&quot;The gear you need&quot;,&quot;subhead&quot;:&quot;From headsets to consoles,\ngame on.&quot;,&quot;cta1Name&quot;:&quot;Shop now&quot;,&quot;cta1Link&quot;:&quot;/gaming/gaming-store/&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_gaming_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;The gear you need Shop now&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;The gear you need&quot;,&quot;screenSubhead&quot;:&quot;From headsets to consoles, game on.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_mar_ev_1_pzn_kids&quot;,&quot;header&quot;:&quot;Phones, watches and more&quot;,&quot;subhead&quot;:&quot;Discover exciting gadgets, cameras and accessories for kids and your family.&quot;,&quot;cta1Name&quot;:&quot;Shop now&quot;,&quot;cta1Link&quot;:&quot;/onesearch/search?q=kids&amp;ES=shop&amp;src=wireless&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_kids_gw_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Phones, watches and more Shop now&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Phones, watches and more&quot;,&quot;screenSubhead&quot;:&quot;Discover exciting gadgets, cameras and accessories for kids and your family.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_FREEPHONE&quot;,&quot;header&quot;:&quot;Your next phone on us&quot;,&quot;subhead&quot;:&quot;With a new smartphone line. Includes online exclusives.​&quot;,&quot;cta1Name&quot;:&quot;Shop now&quot;,&quot;cta1Link&quot;:&quot;/smartphones/?special-offers=free&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_freephones_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Your next phone on us Shop now&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Your next phone on us&quot;,&quot;screenSubhead&quot;:&quot;With a new smartphone line. Includes online exclusives.​&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_PROTECT&quot;,&quot;header&quot;:&quot;We’ve got your phone covered&quot;,&quot;subhead&quot;:&quot;We’ll replace your phone in as little as a few hours.&quot;,&quot;cta1Name&quot;:&quot;Learn more&quot;,&quot;cta1Link&quot;:&quot;/digital/nsa/secure/ui/products/producthub/pdp/sfo80072VMP&quot;,&quot;eyebrow&quot;:&quot;Verizon Mobile Protect&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_vzprotect_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Verizon Mobile Protect We’ve got your phone covered Learn more&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;We’ve got your phone covered&quot;,&quot;screenSubhead&quot;:&quot;We’ll replace your phone in as little as a few hours.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_MH&quot;,&quot;header&quot;:&quot;Mobile and home discounts&quot;,&quot;subhead&quot;:&quot;Discover how you can save on our best mobile plans and home internet plans.&quot;,&quot;cta1Name&quot;:&quot;Learn more&quot;,&quot;cta1Link&quot;:&quot;/discounts/&quot;,&quot;theme&quot;:&quot;Dark&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_seg_discounts_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Mobile and home discounts Learn more&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Mobile and home discounts&quot;,&quot;screenSubhead&quot;:&quot;Discover how you can save on our best mobile plans and home internet plans.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_mar_ev_1_pzn_loyalty&quot;,&quot;header&quot;:&quot;We got everything you love&quot;,&quot;subhead&quot;:&quot;The best in sports, music and\nentertainment. Just for being a Verizon customer.&quot;,&quot;cta1Name&quot;:&quot;Learn more&quot;,&quot;cta1Link&quot;:&quot;/digital/nsa/secure/ui/vzup/#/&quot;,&quot;eyebrow&quot;:&quot;Verizon Access&quot;,&quot;theme&quot;:&quot;Dark&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_myaccess_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Verizon Access We got everything you love Learn more&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;We got everything you love&quot;,&quot;screenSubhead&quot;:&quot;The best in sports, music and entertainment. Just for being a Verizon customer.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_BYOD&quot;,&quot;header&quot;:&quot;Your device, our network&quot;,&quot;subhead&quot;:&quot;Bring your compatible phone to Verizon and skip the new device contract.&quot;,&quot;cta1Name&quot;:&quot;Get started&quot;,&quot;cta1Link&quot;:&quot;/bring-your-own-device/&quot;,&quot;theme&quot;:&quot;Dark&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_byod_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Your device, our network Get started&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Your device, our network&quot;,&quot;screenSubhead&quot;:&quot;Bring your compatible phone to Verizon and skip the new device contract.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_TRAVEL&quot;,&quot;header&quot;:&quot;International trip planner&quot;,&quot;subhead&quot;:&quot;Find the best International plan for your trip.&quot;,&quot;cta1Name&quot;:&quot;Get started&quot;,&quot;cta1Link&quot;:&quot;/plans/international/international-travel/trip-planner-tool/&quot;,&quot;eyebrow&quot;:&quot;TravelPass&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_travelpass_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;TravelPass International trip planner Get started&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;International trip planner&quot;,&quot;screenSubhead&quot;:&quot;Find the best International plan for your trip.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_MAR_EV_1_PZN_FAMILY&quot;,&quot;header&quot;:&quot;Make the most of family time&quot;,&quot;screenHeader&quot;:&quot;Make the most of family time&quot;,&quot;subhead&quot;:&quot;Care for everyone with device protection, location tracking, parental controls.&quot;,&quot;screenSubhead&quot;:&quot;Care for everyone with device protection, location tracking, parental controls.&quot;,&quot;cta1Name&quot;:&quot;Learn more&quot;,&quot;cta1Link&quot;:&quot;/digital/nsa/secure/ui/ngd/store/products-perks/category/family&quot;,&quot;eyebrow&quot;:&quot;Family&quot;,&quot;theme&quot;:&quot;Dark&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_family_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Family Make the most of family time Learn more&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_mar_ev_1_pzn_perks&quot;,&quot;header&quot;:&quot;Now streaming: great savings&quot;,&quot;subhead&quot;:&quot;Gather your squad to catch the latest games and shows, and save.&quot;,&quot;cta1Link&quot;:&quot;/products-perks/entertainment/&quot;,&quot;eyebrow&quot;:&quot;Entertainment&quot;,&quot;theme&quot;:&quot;Dark&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_perk_ent_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Now streaming: great savings&quot;,&quot;screenSubhead&quot;:&quot;Gather your squad to catch the latest games and shows, and save.&quot;,&quot;tooltipContent&quot;:&quot;&quot;},{&quot;offerID&quot;:&quot;2026_mar_ev_1_pzn_hotspot&quot;,&quot;header&quot;:&quot;Mobile Hotspot plans&quot;,&quot;subhead&quot;:&quot;Connect on the go with our hotspot data plans.&quot;,&quot;cta1Name&quot;:&quot;Get started&quot;,&quot;cta1Link&quot;:&quot;/plans/devices/hotspots#tab-nav&quot;,&quot;theme&quot;:&quot;Light&quot;,&quot;imageName&quot;:&quot;evergreen_pzn_hotspot_11_05&quot;,&quot;cta1AriaLabel&quot;:&quot;Mobile Hotspot plans Get started&quot;,&quot;cta2AriaLabel&quot;:&quot;&quot;,&quot;cta1IsLoopQual&quot;:false,&quot;cta2IsLoopQual&quot;:false,&quot;screenHeader&quot;:&quot;Mobile Hotspot plans&quot;,&quot;screenSubhead&quot;:&quot;Connect on the go with our hotspot data plans.&quot;,&quot;tooltipContent&quot;:&quot;&quot;}" data-tilegridheading="Deals &amp; discounts" data-expandedlabel="Shop all deals" data-expandedlink="/deals/" data-apiurl="/soe/digital/auth/personalizationrecommendationsservice/pdm/homePageOffers" data-feedbackapiurl="/soe/digital/auth/personalizationrecommendationsservice/pdm/hpOffersCaptureResponse" data-payload="source:'homePageOffers',pageContext: 'HomePage'" data-show-prospect-layouts="true">
                                          <div class="container responsivegrid">
                                            <div id="container-40a267ec2d" class="cmp-container  vui:theme__surface  ">
                                              <div class="marqueelayout">
                                                <section data-vui-cmp-marqueelayout="" class="vui:cmp-marqueelayout vui:page-block vui:page-block--inset  vui:cmp-marqueelayout--layout1">
                                                  <div class="tile-one container responsivegrid vui:cmp-marqueelayout__tile vui:cmp-marqueelayout__tile-1 vui:u-border-radius-400 vui:u-overflow-hidden">
                                                    <div id="container-abdcfdb2aa" class="cmp-container  vui:theme__surface vui:theme--light-primary ">
                                                      <div class="html">
                                                        <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                        <div class="vui:u-position-relative vui:theme__surface vui:theme--dark-brand vui:u-overflow-hidden
                                                          vui:u-width-100 vui:u-height-100">
                                                          <!-- ******************** -->
                                                          <!-- ***** BG Image ******* -->
                                                          <!-- ******************** -->
                                                          <picture aria-hidden="true" class="vui:u-position-absolute vui:u-top-0 vui:u-right-0 vui:u-left-0 vui:u-bottom-0">
                                                            <source srcset="https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-d?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 1024px)">
                                                            <source srcset="https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-t?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-t?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 768px)">
                                                            <source srcset="https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-m?&amp;fmt=webp&amp;scl=2, https://s7.vzw.com/is/image/VerizonWireless/dads-and-grads-50-marquee-v1-m?&amp;fmt=webp&amp;scl=1 2x">
                                                            <img class="vui:u-width-100 vui:u-height-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                          </picture>
                                                          <!-- ******************** -->
                                                          <!-- ***** Promo Copy ******* -->
                                                          <!-- ******************** -->
                                                          <div class="vui:copy-width vui:u-position-relative vui:u-display-flex vui:u-flex-column vui:u-align-items-center vui:u-align-items-start@md vui:u-align-items-center@lg vui:u-justify-content-start vui:u-justify-content-center@md vui:u-justify-content-start@lg vui:u-height-100 vui:u-padding-top-8x vui:u-padding-top-0x@md vui:u-padding-top-8x@lg vui:u-padding-left-8x@md vui:u-padding-left-0x@lg">
                                                            <div class="vui:text--center">
                                                              <h1 class="vui:text vui:text--title-xsmall vui:text--title-small@md vui:text--bold vui:u-padding-bottom-2x vui:u-padding-bottom-3x@md vui:u-padding-bottom-4x@lg">
                                                                <span class="vui:theme--fg-brand">Celebrate your <br class="vui:u-display-block vui:u-display-none@md"> Dads &amp; Grads</span>
                                                                <br aria-hidden="true">
                                                                iPhone 17, iPad &amp; <br aria-hidden="true">
                                                                Apple Watch Series 11<br aria-hidden="true">
                                                                <span class="vui:text vui:text--bold vui:text--title-xlarge vui:text--title-2xlarge@md">All on us</span>
                                                              </h1>
                                                              <p class="vui:text vui:text--body-small vui:u-padding-bottom-4x vui:u-padding-bottom-6x@md" style="--vui-text_font-size:11px!important;">
                                                                <b>No trade-in needed.</b> iPhone with new line on <br aria-hidden="true" class="vui:u-display-block vui:u-display-none@lg">
                                                                myPlan.<br aria-hidden="true" class="vui:u-display-none vui:u-display-block@lg"> Service plan req'd for watch and iPad.
                                                                <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="&lt;b&gt;iPhone: &lt;/b&gt; $829.99 (256 GB only) device payment purchase w/new smartphone line for new customers or existing customers adding a new line w/port-in on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)&nbsp; req’d. Less $830 promo credit applied over 36 mos.;&nbsp; 0% APR. &lt;b&gt;Apple Watch/iPad (A16): &lt;/b&gt; Up to $499.99 device payment purchase w/new line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos) req’d per watch/iPad. Less up to $500 promo credit applied per device over 36 mos.; 0% APR. Apple Intelligence requires iOS 18.1 or later. Promo credit(s) may not exceed featured device retail price and end if eligibility req’s per device are no longer met." id="vui-tooltip-9ksGUTPCtleZCMzJiI7dX" aria-expanded="false">
                                                                <i class="vui:button-icon__icon vui:icon vui:icon--info">
                                                              </i>
                                                            </button>
                                                          </p>
                                                          <div>
                                                            <a class="vui:button vui:button--primary vui:is-stretched" data-impression-category="Dvc Bundle-Apple" data-campaign-id="2026_MAY_PR_1_DAD_IPHONE17" data-description="Get iPhone 17, iPad &amp; Apple Watch Series 11. Buy" aria-label="Get iPhone 17, iPad &amp; Apple Watch Series 11. Buy" href="smartphones/apple-iphone-17/" data-track="{&quot;name&quot;:&quot;l2|p1|Dvc Bundle-Apple|||||2026_MAY_PR_1_DAD_IPHONE17|Get iPhone 17, iPad &amp; Apple Watch Series 11. Buy&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              Buy
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="tile-two container responsivegrid vui:cmp-marqueelayout__tile vui:u-border-radius-400 vui:cmp-marqueelayout__tile-2 vui:u-overflow-hidden">
                                                <div id="container-aaaf061fd9" class="cmp-container  vui:theme__surface vui:theme--light-primary ">
                                                  <div class="html">
                                                    <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                    <div class="vui:u-position-relative vui:theme--dark-brand vui:u-overflow-hidden vui:u-width-100 vui:u-height-100">
                                                      <!-- *********************** -->
                                                      <!-- ****** BG Image ******* -->
                                                      <!-- *********************** -->
                                                      <picture aria-hidden="true" class="vui:u-position-absolute vui:u-top-0 vui:u-right-0 vui:u-left-0 vui:u-bottom-0">
                                                        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 1024px)">
                                                        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-480px-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-480px-m?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 768px)">
                                                        <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-480px-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q2-SwitchNow-hero-25-480px-m?&amp;fmt=webp&amp;scl=1 2x">
                                                        <img class="vui:u-width-100 vui:u-height-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                      </picture>
                                                      <div class="vui:u-display-flex vui:u-flex-column vui:u-display-flex@sm vui:u-position-relative">
                                                        <!-- ******************** -->
                                                        <!-- ***** Promo Copy ******* -->
                                                        <!-- ******************** -->
                                                        <div class="leftTileCopy vui:u-height-100 vui:text--center vui:text--start@lg vui:u-display-flex vui:u-flex-column vui:u-align-self-start@lg vui:u-padding-left-6x@lg vui:u-justify-content-end@lg vui:u-padding-top-16x vui:u-padding-top-16x@md vui:u-padding-top-16x@lg vui:u-padding-bottom-16x@lg vui:u-padding-bottom-12x@xl">
                                                          <div>
                                                            <h2 class="vui:text vui:text--title-xsmall vui:text--title-medium@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:u-position-relative vui:u-z-index-3">
                                                              Switch &amp; get <br class="vui:u-display-none vui:u-display-block@xl">
                                                              <span class="vui:text vui:text--title-xsmall vui:text--title-medium@xl vui:text--bold vui:theme--fg-brand">4 phones for $0</span>
                                                              </h2>
                                                              <p class="vui:text vui:text--title-2xsmall vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md">
                                                                Plus, 4 lines for $25/line
                                                              </p>
                                                              <p class="vui:text vui:text--body-medium vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md" style="--vui-text_font-size:10px!important; --vui-text_line-height:11px !important;">
                                                                Select models only. $25/line/mo with 4 new lines on<br>
                                                                Unlimited Welcome and Auto Pay. Plus taxes and fees.
                                                                <span class="vui:tooltip__trigger-wrap">
                                                                <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-aria-label="Switch &amp; get 4 phones for $0" data-vui-tooltip-copy="Phone: Up to $829.99 purchase w/ new smartphone line on Unlimited Welcome plan for 36 mos. req'd per phone. Less up to $830 promo credit applied over 36 mos. per phone; 0% APR. Unlimited Welcome: $30/line for new customers w/4 new lines, less $20 monthly promo credits applied to account over 36 mos. Auto Pay (ACH or Verizon Visa Card) &amp; Paper-free billing req’d. Unlimited 5G/4G LTE: In times of congestion, your data may be temporarily slower than other traffic. Domestic data roaming at 2G speeds. Offers may not be combined with other offers. All promo credits end if eligibility req’s are no longer met." id="vui-tooltip-CPttzaVFeSYUC8rvhmgvt" aria-expanded="false" aria-label="More information on Switch &amp; get 4 phones for $0 tooltip">
                                                                <i class="vui:icon vui:icon--info vui:theme--fg-secondary">
                                                              </i>
                                                            </button>
                                                          </span>
                                                        </p>
                                                      </div>
                                                      <div class="vui:u-padding-right-12x@lg vui:u-padding-right-0x@xl">
                                                        <a href="shop/online/free-5g-phones/" class="vui:button vui:button--primary vui:is-stretched" data-impression-category="Mobile Plan" data-campaign-id="2026_APR_PR_1_BESTPRICEEVER_FREEPHONE" data-description="Switch &amp; get 4 phones for $0, Shop" data-track="{&quot;name&quot;:&quot;l2|p2|Mobile Plan|||||2026_APR_PR_1_BESTPRICEEVER_FREEPHONE|Switch &amp; get 4 phones for $0, Shop&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                          Shop
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="tile-three container responsivegrid vui:cmp-marqueelayout__tile vui:u-border-radius-400 vui:cmp-marqueelayout__tile-3 vui:u-overflow-hidden">
                                            <div id="container-d939aa882c" class="cmp-container  vui:theme__surface vui:theme--light-primary ">
                                              <div class="html">
                                                <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                <div class="vui:u-position-relative vui:theme__surface vui:theme--dark-brand vui:u-overflow-hidden vui:u-width-100 vui:u-height-100">
                                                  <!-- *********************** -->
                                                  <!-- ****** BG Image ******* -->
                                                  <!-- *********************** -->
                                                  <picture aria-hidden="true" class="vui:u-position-absolute vui:u-top-0 vui:u-right-0 vui:u-left-0 vui:u-bottom-0">
                                                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 1024px)">
                                                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_t?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_t?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 768px)">
                                                    <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_25hpm_S26_Ult_Bundle_5_29_m?&amp;fmt=webp&amp;scl=1 2x">
                                                    <img class="vui:u-width-100 vui:u-height-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                  </picture>
                                                  <div class="vui:u-display-flex vui:u-flex-column vui:u-display-flex@sm vui:u-position-relative">
                                                    <!-- ************************** -->
                                                    <!-- ******* Promo Copy ******* -->
                                                    <!-- ************************** -->
                                                    <div class="leftTileCopy vui:u-height-100 vui:text--center vui:text--start@lg vui:u-display-flex vui:u-flex-column vui:u-align-items-center vui:u-align-self-start@lg vui:u-justify-content-end@lg vui:u-padding-top-6x vui:u-padding-top-8x vui:u-padding-left-6x@lg vui:u-padding-bottom-12x@lg">
                                                      <div style="width: 294px;">
                                                        <h2 class="vui:text vui:text--title-small vui:text--title-small@md vui:text--title-small@lg vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-right-8x@lg ui:u-padding-4x@lg vui:u-position-relative vui:u-z-index-3" style="line-height: 1em;">
                                                          Get Galaxy S26, <br aria-hidden="true">
                                                          Watch 8 &amp; Tab S10 FE<br aria-hidden="true">
                                                          <span class="vui:theme--fg-brand">All on us</span>
                                                          </h2>
                                                          <p class="vui:text vui:text--body-medium vui:u-margin-bottom-4x vui:u-margin-right-4x@lg" style="--vui-text_font-size:10px!important; --vui-text_line-height:12px !important;">
                                                            <span class="vui:u-position-relative vui:u-z-index-3">
                                                              No trade in needed. Phone with new line on myPlan.<br aria-hidden="true">
                                                              Service plan req'd for watch and tablet.
                                                            </span>
                                                            <span class="vui:tooltip__trigger-wrap">
                                                              <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-aria-label="Offer valid through 9/2/26. Limited-time offer for a $400 credit via promo code to be used toward the single item purchase of select Samsung home tech items (eligible TVs, appliances, laptops, tablets, monitors, and speakers) with a minimum retail price of $799 (pre-tax). Product selection may vary. Offer not valid on Samsung smartphones, memory cards, refurbished, open-box and Marketplace Products. For new home internet customers who install eligible Fios 1 Gig, Fios 2 Gig, 5G Home Ultimate or Verizon Home Internet Lite Extra internet services and redeem w/in 30 days but no later than 11/1/26. Promo code must be redeemed online at BestBuy.com. Verizon reserves the right to charge back the $400 value of the Samsung credit if eligible service is canceled w/in 365 days of activation/installation. Limit 1 offer per Verizon account. While supplies last. Offer subject to change. Samsung and related trademarks are owned by Samsung Electronics Co., Ltd. Samsung and Verizon are not affiliated with Best Buy. Purchase, delivery, installation, and other charges are subject to Best Buy’s terms &amp; conditions." data-vui-tooltip-copy="&lt;b&gt;Phone: &lt;/b&gt; $899.99 (256 GB only) device payment purchase w/new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $900 promo credit applied over 36 mos.; 0% APR. &lt;b&gt;Watch/Tablet: &lt;/b&gt; Up to $599.99 device payment purchase w/new line on service plan (min. $15/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd per watch/tablet. Less up to $600 promo credit applied per device over 36 mos.; 0% APR. Promo credit(s) may not exceed featured device retail price and end if eligibility req's per device are no longer met." id="vui-tooltip-t4Ztd9ckosRRnOTaWba9i" aria-expanded="false" aria-label="More information on Offer valid through 9/2/26. Limited-time offer for a $400 credit via promo code to be used toward the single item purchase of select Samsung home tech items (eligible TVs, appliances, laptops, tablets, monitors, and speakers) with a minimum retail price of $799 (pre-tax). Product selection may vary. Offer not valid on Samsung smartphones, memory cards, refurbished, open-box and Marketplace Products. For new home internet customers who install eligible Fios 1 Gig, Fios 2 Gig, 5G Home Ultimate or Verizon Home Internet Lite Extra internet services and redeem w/in 30 days but no later than 11/1/26. Promo code must be redeemed online at BestBuy.com. Verizon reserves the right to charge back the $400 value of the Samsung credit if eligible service is canceled w/in 365 days of activation/installation. Limit 1 offer per Verizon account. While supplies last. Offer subject to change. Samsung and related trademarks are owned by Samsung Electronics Co., Ltd. Samsung and Verizon are not affiliated with Best Buy. Purchase, delivery, installation, and other charges are subject to Best Buy’s terms &amp; conditions. tooltip">
                                                                <i class="vui:icon vui:icon--info vui:theme--fg-secondary">
                                                              </i>
                                                            </button>
                                                          </span>
                                                        </p>
                                                      </div>
                                                      <div class="vui:u-margin-right-24x@lg">
                                                        <a href="smartphones/samsung-galaxy-s26/" class="vui:button vui:button--primary vui:is-stretched vui:u-margin-right-32x@lg" data-impression-category="Dvc Bundle-Samsung" data-campaign-id="2026_MAY_PR_1_DAD_SAMSUNGGS26" data-description="Learn more about Samsung products" aria-label="Learn more about Samsung products" data-track="{&quot;name&quot;:&quot;l2|p3|Dvc Bundle-Samsung|||||2026_MAY_PR_1_DAD_SAMSUNGGS26|Learn more about Samsung products&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                          Buy
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="skinny-banner container responsivegrid vui:cmp-marqueelayout__tile vui:u-border-radius-400 vui:cmp-marqueelayout__skinny-banner vui:u-overflow-hidden">
                                            <div id="container-e8946cab44" class="cmp-container  vui:theme__surface vui:theme--light-primary ">
                                              <div class="html">
                                                <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                <div class="vui:skinny-banner__width vui:page-block vui:page-block--inset vui:u-display-flex vui:u-flex-column vui:u-align-items-center skinny-banner__animation vui:tile vui:u-position-relative">
                                                  <div class="vui:u-border-radius-400 vui:theme__surface vui:theme--dark-brand skinny-banner__container vui:u-display-flex vui:u-flex-column vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100">
                                                    <div class="vui:u-display-flex vui:u-position-relative vui:u-height-100">
                                                      <!-- ******************** -->
                                                      <!-- ***** Mobile ******* -->
                                                      <!-- ******************** -->
                                                      <div class="vui:u-display-none@md">
                                                        <picture aria-hidden="true" style="width: -webkit-fill-available;" class="vui:u-position-absolute vui:u-z-index-2 vui:u-top-0 vui:u-left-0 vui:u-right-0 vui:u-bottom-0 vui:u-object-fit-cover vui:u-width-100 vui:u-height-100">
                                                          <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-montana-mso-expansion-q2-2026-m?&amp;fmt=webp&amp;scl=1" media="(min-width: 325px)">
                                                          <img class="vui:u-z-index-1 vui:u-width-100 vui:u-height-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                        </picture>
                                                      </div>
                                                      <!-- ******************** -->
                                                      <!-- ***** Tablet ******* -->
                                                      <!-- ******************** -->
                                                      <div class="vui:u-display-none vui:u-display-block@md vui:u-display-none@lg">
                                                        <picture aria-hidden="true" style="width: -webkit-fill-available;" class="vui:u-position-absolute vui:u-z-index-2 vui:u-top-0 vui:u-left-0 vui:u-right-0 vui:u-bottom-0 vui:u-object-fit-cover vui:u-width-100 vui:u-height-100">
                                                          <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-montana-mso-expansion-q2-2026-t?&amp;fmt=webp&amp;scl=1" media="(min-width: 768px)">
                                                          <img class="vui:u-z-index-1 vui:u-width-100 vui:u-height-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                        </picture>
                                                      </div>
                                                      <!-- ******************** -->
                                                      <!-- ***** Desktop ******* -->
                                                      <!-- ******************** -->
                                                      <div class="vui:u-display-none vui:u-display-block@lg">
                                                        <picture aria-hidden="true" style="width: -webkit-fill-available;" class="vui:u-position-absolute vui:u-z-index-2 vui:u-left-0 vui:u-right-0 vui:u-bottom-0 vui:u-bottom-12lg vui:u-object-fit-fill vui:u-width-100">
                                                          <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-montana-mso-expansion-q2-2026-d?fmt=webp&amp;scl=1" media="(min-width: 1024px)">
                                                          <img class="vui:u-z-index-1 vui:u-width-100" loading="eager" alt="" aria-hidden="true" tabindex="-1">
                                                        </picture>
                                                      </div>
                                                      <!-- ******************** -->
                                                      <!-- ***** PROMO COPY ******* -->
                                                      <!-- ******************** -->
                                                      <div class="skinny-banner__copy vui:u-width-100 vui:u-display-flex vui:u-padding-top-6x vui:u-padding-bottom-8x vui:u-padding-top-0x@md vui:u-padding-bottom-0x@md vui:u-padding-left-8x@md vui:u-padding-right-8x@md vui:u-padding-left-24x@lg vui:u-padding-left-32x@xl vui:u-padding-right-12x@lg">
                                                        <div class="vui:button-group vui:button-group--center vui:u-width-100 vui:u-z-index-3 vui:u-align-content-between vui:u-align-content-center@md vui:u-justify-content-between@md vui:text--center">
                                                          <h2 class="vui:text vui:text--title-medium vui:text--title-large@lg vui:text--bold">
                                                            <span class="vui:theme--fg-brand">Now more people</span>
                                                              <br aria-hidden="true" class="vui:u-display-block">
                                                              can get a better deal
                                                            </h2>
                                                            <a class="vui:button vui:button--primary vui:is-stretched" data-impression-category="Other-Brand" data-campaign-id="2026_APR_AW_1_SWITCHER_NA" href="switch-to-verizon/" data-description="Now more people can get a better deal. Switch now" aria-label="Now more people can get a better deal. Switch now" data-track="{&quot;name&quot;:&quot;l2|p4|Other-Brand|||||2026_APR_AW_1_SWITCHER_NA|Now more people can get a better deal. Switch now&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                              Switch now
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <!-- ******************** -->
                                                        <!-- ***** TOOLTIP ******* -->
                                                        <!-- ******************** -->
                                                        <span class="skinny-banner__tooltip vui:tooltip__trigger-wrap vui:u-position-relative vui:u-z-index-3">
                                                          <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See &lt;a href='switch-to-verizon/'&gt;www.verizon.com/switch-to-verizon&lt;/a&gt;" aria-label="More information on more people can get a better deal. tooltip" id="vui-tooltip-n1hT_QQNva4jnHEAffa0q" aria-expanded="false">
                                                            <i class="vui:icon vui:icon--info vui:theme--fg-secondary">
                                                            </i>
                                                          </button>
                                                        </span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="html">
                                                  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                  <style>.tile-one .vui\:text--title-2xlarge\@md {
                                                  font-size: 56px;
                                                  }
                                                  .vui\:cmp-marqueelayout--layout1 {
                                                  --vui-cmp-marqueelayout_grid-template-areas-at-md: "tile-1 tile-1""tile-2 tile-3";
                                                  --vui-cmp-marqueelayout_gap: 24px
                                                  }
                                                  .vui\:cmp-marqueelayout__tile-1 {
                                                  transition: all .15s ease;
                                                  }
                                                  .vui\:cmp-marqueelayout__tile-1:hover {
                                                  transform: scale(1.04);
                                                  }
                                                  .vui\:tooltip__trigger {
                                                  z-index: 99 !important;
                                                  }
                                                  .vui\:cmp-marqueelayout__tile-1,
                                                  .vui\:cmp-marqueelayout__tile-2,
                                                  .vui\:cmp-marqueelayout__tile-3 {
                                                  margin: 0 auto;
                                                  width: 100%;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:theme--dark-brand {
                                                  background-color: #EE001E !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] {
                                                  padding-bottom: 24px !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 {
                                                  height: 480px;
                                                  max-width: 328px !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 h1 {
                                                  line-height: 28px;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 p {
                                                  line-height: 12px;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2,
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-3 {
                                                  height: 480px;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2,
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-3 {
                                                  max-width: 328px !important;
                                                  }
                                                  .vui\:u-padding-top-left {
                                                  padding-top: 57px;
                                                  }
                                                  .vui\:text--title-left {
                                                  line-height: 105%;
                                                  }
                                                  .vui\:copy-width {
                                                  width: 100%;
                                                  }
                                                  .custom-medium {
                                                  display: none;
                                                  }
                                                  @media screen and (max-width: 767px) {
                                                  .tile-one h1.vui\:text--title-small {
                                                  line-height: 24px;
                                                  }
                                                  /* .tile-one p.vui\:text--title-xlarge {
                                                  font-size: 56px;
                                                  } */
                                                  }
                                                  @media screen and (min-width: 768px) {
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 {
                                                  height: 400px !important;
                                                  max-width: 100% !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2,
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-3 {
                                                  max-width: 100% !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 h1 {
                                                  line-height: 32px;
                                                  }
                                                  .vui\:u-padding-top-left {
                                                  padding-top: 0px !important;
                                                  }
                                                  .vui\:text--title-left {
                                                  line-height: 100% !important;
                                                  }
                                                  .vui\:copy-width {
                                                  width: 100% !important;
                                                  }
                                                  .vui\:cmp-marqueelayout--layout1 {
                                                  grid-template-columns: 48% 48%;
                                                  }
                                                  .vui\:u-padding-right-24x\@md {
                                                  padding-right: 20rem;
                                                  }
                                                  }
                                                  @media screen and (min-width: 991px) {
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2,
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-3 {
                                                  height: 480px !important;
                                                  }
                                                  .vui\:u-padding-left-16x\@md {
                                                  padding-left: 8rem;
                                                  }
                                                  }
                                                  @media screen and (min-width: 1024px) {
                                                  .vui\:u-padding-left-16x\@md {
                                                  padding-left: 0rem;
                                                  }
                                                  .vui\:u-padding-top-left {
                                                  padding-top: 62px !important;
                                                  }
                                                  .vui\:text--title-left {
                                                  line-height: 105% !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-1 {
                                                  height: 600px !important;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2,
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-3 {
                                                  height: 288px !important;
                                                  }
                                                  .vui\:copy-width {
                                                  width: 100% !important;
                                                  }
                                                  .vui\:cmp-marqueelayout--layout1 {
                                                  grid-template-columns: 49% 49%;
                                                  }
                                                  .vui\:u-padding-right-24x\@md {
                                                  padding-right: 3rem;
                                                  }
                                                  [data-vui-cmp-marqueelayout] .vui\:cmp-marqueelayout__tile-2 img {
                                                  height: 90%;
                                                  }
                                                  .custom-no-medium {
                                                  display: none;
                                                  }
                                                  .custom-medium {
                                                  display: block;
                                                  }
                                                  }
                                                  @media screen and (min-width: 1300px) {
                                                  .custom-medium {
                                                  display: none;
                                                  }
                                                  .custom-no-medium {
                                                  display: block;
                                                  }
                                                  }</style>
                                                </div>
                                                <div class="html">
                                                  <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                                  <style>.vui\:skinny-banner__width {
                                                  height: 438px;
                                                  max-width: 328px;
                                                  width: 100%;
                                                  }
                                                  .vui\:cmp-marqueelayout__skinny-banner .skinny-banner__animation {
                                                  transition: all .15s ease;
                                                  }
                                                  .vui\:cmp-marqueelayout__skinny-banner .skinny-banner__animation:hover {
                                                  transform: scale(1.04);
                                                  }
                                                  .vui\:cmp-marqueelayout__skinny-banner .vui\:theme--dark-brand {
                                                  background-color: #EE001E !important;
                                                  }
                                                  .skinny-banner__tooltip {
                                                  font-size: 12px;
                                                  position: absolute;
                                                  right: 33px;
                                                  bottom: 115px;
                                                  z-index: 5;
                                                  }
                                                  .copy-width {
                                                  width: 283px;
                                                  }
                                                  @media screen and (min-width: 768px) {
                                                  .vui\:skinny-banner__width {
                                                  max-width: 100% !important;
                                                  height: 182px !important;
                                                  }
                                                  .skinny-banner__tooltip {
                                                  right: 26%;
                                                  bottom: 20px;
                                                  }
                                                  .copy-width {
                                                  width: auto;
                                                  }
                                                  }
                                                  @media screen and (min-width: 768px) and (max-width: 1023px) {
                                                  .skinny-banner__copy h2 {
                                                  font-size: 28px;
                                                  }
                                                  }
                                                  @media screen and (min-width: 1024px) {
                                                  .skinny-banner__tooltip {
                                                  right: 21%;
                                                  bottom: 15px;
                                                  }
                                                  }
                                                  @media screen and (min-width: 1024px) and (max-width: 1100px) {
                                                  .vui\:u-bottom-12lg {
                                                  bottom: 12px;
                                                  }
                                                  }
                                                  @media screen and (min-width: 1200px) {
                                                  .skinny-banner__copy {
                                                  width: 100%;
                                                  }
                                                  }</style>
                                                </div>
                                              </div>
                                            </div>
                                          </section>
                                        </div>
                                        <div class="html">
                                          <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                                          <style>#deals-discount .vui\:fed__deals-tile-content h3 {
                                          line-height: 1em !important;
                                          }</style>
                                        </div>
                                        <div class="tilegrid">
                                          <!-- Tile Grid -->
                                          <section data-vui-tile-grid="" id="deals-discount" translate="yes" class="vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-padding-top-12x@md taggingEnabled">
                                            <div class="vui:grid vui:page-block vui:page-block--inset">
                                              <h2 class="vui:grid__col--12 vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg vui:text--start vui:u-padding-bottom-4x@md vui:u-padding-bottom-0x vui:theme--fg-primary vui:theme--fg-black">
                                                Deals &amp; discounts</h2>
                                                <!-- Tiles -->
                                                <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                                  <a href="home/internet/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Home Plan" data-campaign-id="2026_JUN_PR_2_SAMSUNGTECH_HP" data-description="Get $400 off select Samsung products, on us" aria-label="Get $400 off select Samsung products, on us" data-track="{&quot;name&quot;:&quot;l3|p1|Home Plan|||||2026_JUN_PR_2_SAMSUNGTECH_HP|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                  </a>
                                                  <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                                    <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                                      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_vhi_hp_samsung_tech_credit_promo_tile_5_21_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_vhi_hp_samsung_tech_credit_promo_tile_5_21_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                                      <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0526_vhi_hp_samsung_tech_credit_promo_tile_5_21_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0526_vhi_hp_samsung_tech_credit_promo_tile_5_21_m?&amp;fmt=webp&amp;scl=1 2x">
                                                      <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                                    </picture>
                                                    <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                                      <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
                                                        Get $400 off select Samsung products, on us
                                                      </h3>
                                                      <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
                                                        When you buy an eligible item $799 or more at Best Buy®. With select Verizon Home Internet plans.<span class="vui:tooltip__trigger-wrap">
                                                        <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="Offer valid through 9/2/26. Limited-time offer for a $400 credit via promo code to be used toward the single item purchase of select Samsung home tech items (eligible TVs, appliances, laptops, tablets, monitors, and speakers) with a minimum retail price of $799 (pre-tax). Product selection may vary. Offer not valid on Samsung smartphones, memory cards, refurbished, open-box and Marketplace Products. For new home internet customers who install eligible Fios 1 Gig, Fios 2 Gig, 5G Home Ultimate or Verizon Home Internet Lite Extra internet services and redeem w/in 30 days but no later than 11/1/26. Promo code must be redeemed online at BestBuy.com. Verizon reserves the right to charge back the $400 value of the Samsung credit if eligible service is canceled w/in 365 days of activation/installation. Limit 1 offer per Verizon account. While supplies last. Offer subject to change. Samsung and related trademarks are owned by Samsung Electronics Co., Ltd. Samsung and Verizon are not affiliated with Best Buy. Purchase, delivery, installation, and other charges are subject to Best Buy’s terms &amp; conditions." data-vui-aria-label="Get $400 off select Samsung products, on us" id="vui-tooltip-nGfz-AndbHq84DeIyX-Hv" aria-expanded="false" aria-label="More information on Get $400 off select Samsung products, on us tooltip">
                                                          <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                          </i>
                                                        </button>
                                                      </span>
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                                <a href="smartphones/samsung-galaxy-s26-plus/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Samsung" data-campaign-id="2026_MAY_PR_1_PROMOBAU_SAMSUNGGS26PLS" data-description="Samsung Galaxy S26+ for $0" aria-label="Samsung Galaxy S26+ for $0" data-track="{&quot;name&quot;:&quot;l3|p2|Phone-Samsung|||||2026_MAY_PR_1_PROMOBAU_SAMSUNGGS26PLS|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                </a>
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
                                                      No trade-in needed. With a new line on select Unlimited plans.<span class="vui:tooltip__trigger-wrap">
                                                      <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$1,099.99 (256 GB only) purchase w/ new smartphone line on Unlimited Ultimate or Unlimited Plus plan (min. $80/mo w/Auto Pay (+taxes/fees) for 36 mos) req'd. Less $1,100 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="Samsung Galaxy S26+ for $0" id="vui-tooltip-yaH7wXQ4BIG2WW3sd_yCk" aria-expanded="false" aria-label="More information on Samsung Galaxy S26+ for $0 tooltip">
                                                        <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                        </i>
                                                      </button>
                                                    </span>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                              <a href="smartphones/google-pixel-10-pro/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Google" data-campaign-id="2026_MAY_PR_1_PROMOBAU_GOOGLEPIXEL10PRO" data-description="Google Pixel 10 Pro for $0" aria-label="Google Pixel 10 Pro for $0" data-track="{&quot;name&quot;:&quot;l3|p3|Phone-Google|||||2026_MAY_PR_1_PROMOBAU_GOOGLEPIXEL10PRO|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              </a>
                                              <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                                <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                                  <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_lead_8_20-deals_tile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_lead_8_20-deals_tile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                                  <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_lead_8_20-deals_tile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/do_q3_google_fbmr_lead_8_20-deals_tile_m?&amp;fmt=webp&amp;scl=1 2x">
                                                  <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                                </picture>
                                                <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                                  <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
                                                    Google Pixel&nbsp;10&nbsp;Pro for&nbsp;$0
                                                  </h3>
                                                  <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
                                                    No trade-in needed. Even on our lowest priced plans. With new line on myPlan.<span class="vui:tooltip__trigger-wrap">
                                                    <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$999.99 (128 GB only) purchase w/ new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome&nbsp;plan (min. $65/mo w/Auto Pay (+taxes/fees)&nbsp;for 36 mos)&nbsp; req'd. Less $1,000 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="Google Pixel 10 Pro for $0" id="vui-tooltip-W3Jia2btlL9XtJHUTTYbv" aria-expanded="false" aria-label="More information on Google Pixel 10 Pro for $0 tooltip">
                                                      <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                      </i>
                                                    </button>
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                            <a href="bring-your-own-device/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Mobile Plan BYOD" data-campaign-id="2026_MAY_PR_1_BYOD_BYOD400" data-description="Bring your phone and get up to $400, when you switch" aria-label="Bring your phone and get up to $400, when you switch" data-track="{&quot;name&quot;:&quot;l3|p4|Mobile Plan BYOD|||||2026_MAY_PR_1_BYOD_BYOD400|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                            </a>
                                            <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--dark-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                              <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q1-2026-q1_byod_1line_45mo_1_8-HP-Tile-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q1-2026-q1_byod_1line_45mo_1_8-HP-Tile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/Q1-2026-q1_byod_1line_45mo_1_8-HP-Tile-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/Q1-2026-q1_byod_1line_45mo_1_8-HP-Tile-m?&amp;fmt=webp&amp;scl=1 2x">
                                                <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                              </picture>
                                              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                                <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-white">
                                                  Bring your phone and get up to $400, when you switch
                                                </h3>
                                                <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-white">
                                                  With new line on myPlan.<span class="vui:tooltip__trigger-wrap">
                                                  <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$400 via promo credit for new customers activating a new smartphone line with your own smartphone on Unlimited Ultimate, $360 promo credit on Unlimited Plus, or $180 promo credit on Unlimited Welcome plan req'd. Promo credits applied over 36 months; promo credits end if eligibility requirements are no longer met. Offer may not stack with other offers. Limit 1 offer per Verizon account." data-vui-aria-label="Bring your phone and get up to $400, when you switch" id="vui-tooltip-TH52rPwbcqd1uYCP4MCC3" aria-expanded="false" aria-label="More information on Bring your phone and get up to $400, when you switch tooltip">
                                                    <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-white">
                                                    </i>
                                                  </button>
                                                </span>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                          <a href="certified-pre-owned/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Generic" data-campaign-id="2025_SEP_EV_1_CPO_NA" data-description="Save with a Certified Pre-Owned" aria-label="Save with a Certified Pre-Owned" data-track="{&quot;name&quot;:&quot;l3|p5|Phone-Generic|||||2025_SEP_EV_1_CPO_NA|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                          </a>
                                          <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--dark-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                            <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0630_cpo_6_30_ngd_hptile_2_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0630_cpo_6_30_ngd_hptile_2_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0630_cpo_6_30_ngd_hptile_2_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0630_cpo_6_30_ngd_hptile_2_m?&amp;fmt=webp&amp;scl=1 2x">
                                              <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                            </picture>
                                            <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                              <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-white">
                                                Save with a Certified Pre-Owned
                                              </h3>
                                              <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-white">
                                                Shop our wide selection of fully tested devices.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                          <a href="military/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Mobile Plan" data-campaign-id="2026_MAY_AW_1_MILITARY_MILITARYAPPRECIATION" data-description="Military and veteran families save up to $25/mo" aria-label="Military and veteran families save up to $25/mo" data-track="{&quot;name&quot;:&quot;l3|p6|Mobile Plan|||||2026_MAY_AW_1_MILITARY_MILITARYAPPRECIATION|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                          </a>
                                          <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                            <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/military-appreciation-hp-tile-d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/military-appreciation-hp-tile-d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/military-appreciation-hp-tile-m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/military-appreciation-hp-tile-m?&amp;fmt=webp&amp;scl=1 2x">
                                              <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                            </picture>
                                            <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                              <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
                                                Military and veteran families save up to $25/mo
                                              </h3>
                                              <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
                                                <strong>With 2 to 3 lines on Unlimited plans. For personal lines only.</strong>
                                                  <span class="vui:tooltip__trigger-wrap">
                                                    <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="&lt;strong&gt;Unlimited Plans: &lt;/strong&gt;$10/mo account discount applies to single line. $25/mo account discount applied to 2-3 lines. $20/mo account discount applied to 4+ lines. Auto Pay and paper-free billing req'd." data-vui-aria-label="Military and veteran families save up to $25/mo" id="vui-tooltip-Mrwh9ooWkW85PqLH8ZjDS" aria-expanded="false" aria-label="More information on Military and veteran families save up to $25/mo tooltip">
                                                      <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                      </i>
                                                    </button>
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                            <a href="smartphones/apple-iphone-16-plus/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Apple" data-campaign-id="2026_FEB_PR_1_PROMOBAU_IPHONE16PLUS" data-description="iPhone 16 Plus. Get it on us " aria-label="iPhone 16 Plus. Get it on us " data-track="{&quot;name&quot;:&quot;l3|p7|Phone-Apple|||||2026_FEB_PR_1_PROMOBAU_IPHONE16PLUS|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                            </a>
                                            <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                              <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q2_iphone_16_plus_onus_4lines_6_19_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q2_iphone_16_plus_onus_4lines_6_19_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                                <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q2_iphone_16_plus_onus_4lines_6_19_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0625_do_q2_iphone_16_plus_onus_4lines_6_19_m?&amp;fmt=webp&amp;scl=1 2x">
                                                <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                              </picture>
                                              <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                                <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
                                                  iPhone 16 Plus. <br>Get it on us&nbsp;
                                                </h3>
                                                <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
                                                  Even on our lowest priced plans. With new line on myPlan. No trade-in required.&nbsp;<span class="vui:tooltip__trigger-wrap">
                                                  <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$829.99 (128 GB only) purchase w/ new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $830 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers. Apple Intelligence requires iOS 18.1 or later. While supplies last." data-vui-aria-label="iPhone 16 Plus. Get it on us " id="vui-tooltip-mGF2ecQpA6ZdYP1eooG3w" aria-expanded="false" aria-label="More information on iPhone 16 Plus. Get it on us  tooltip">
                                                    <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                    </i>
                                                  </button>
                                                </span>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="vui:tile vui:tile__clickable vui:fed__deals-tile vui:grid__col--6 vui:grid__col--4@md vui:grid__col--3@lg vui:u-position-relative">
                                          <a href="smartphones/motorola-razr-fifa-world-cup-26-edition/" class="vui:tile__anchor vui:u-z-index-1 vui:u-width-100 vui:u-height-100 vui:u-top-0 vui:u-position-absolute" data-impression-category="Phone-Motorola" data-campaign-id="2026_FEB_PR_1_PROMOBAU_MOTORAZR" data-description="Get motorola razr FIFA World Cup 26TM Edition on us" aria-label="Get motorola razr FIFA World Cup 26TM Edition on us" data-track="{&quot;name&quot;:&quot;l3|p8|Phone-Motorola|||||2026_FEB_PR_1_PROMOBAU_MOTORAZR|tile&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                          </a>
                                          <div class="vui:fed__deals-tile-content vui:theme__surface vui:theme--light-primary vui:u-position-relative vui:u-overflow-hidden vui:u-height-100 vui:u-width-100 vui:u-border-radius-400">
                                            <picture aria-hidden="true" class="vui:u-position-absolute vui:u-bottom-0 vui:u-height-100 vui:u-width-100">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0126_moto_razr_fifa_ngd_hptile_d?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0126_moto_razr_fifa_ngd_hptile_d?&amp;fmt=webp&amp;scl=1 2x" media="(min-width: 990px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0126_moto_razr_fifa_ngd_hptile_m?&amp;fmt=webp&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0126_moto_razr_fifa_ngd_hptile_m?&amp;fmt=webp&amp;scl=1 2x">
                                              <img loading="lazy" alt="" aria-hidden="true" tabindex="-1" class="vui:u-height-100 vui:u-width-100 vui:u-object-fit-cover">
                                            </picture>
                                            <div class="vui:u-position-relative vui:u-padding-4x vui:u-padding-6x@md">
                                              <h3 class="vui:text vui:text--title-2xsmall vui:text--title-small@sm vui:text--title-xsmall@md vui:text--title-small@xl vui:text--bold vui:u-margin-bottom-2x vui:u-margin-bottom-3x@md vui:theme--fg-primary vui:theme--fg-black">
                                                Get motorola razr FIFA World Cup 26<sup>TM</sup> Edition on us
                                              </h3>
                                              <p class="vui:text vui:text--micro vui:theme--fg-primary vui:theme--fg-black">
                                                Even on our lowest priced plans. With new line on myPlan. No trade-in needed.<span class="vui:tooltip__trigger-wrap">
                                                <button class="vui:button-icon vui:tooltip__trigger" type="button" data-vui-tooltip="" data-vui-tooltip-copy="$599.99 purchase w/ new smartphone line on Unlimited Ultimate, Unlimited Plus or Unlimited Welcome plan (min. $65/mo w/Auto Pay (+taxes/fees) for 36 mos)  req'd. Less $600 promo credit applied over 36 mos.; promo credit ends if eligibility req’s are no longer met; 0% APR. Offer may not be combined with other offers." data-vui-aria-label="Get motorola razr FIFA World Cup 26TM Edition on us" id="vui-tooltip-edYjHDVWbvapqkF--whQ_" aria-expanded="false" aria-label="More information on Get motorola razr FIFA World Cup 26TM Edition on us tooltip">
                                                  <i class="vui:icon vui:icon--info vui:theme--fg-primary vui:theme--fg-black">
                                                  </i>
                                                </button>
                                              </span>
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:grid vui:page-block vui:page-block--inset vui:u-padding-top-8x">
                                      <div class="vui:grid__col--12 vui:text--center">
                                        <button data-href="deals/" data-header="Show more deals" aria-labelledby="label-1392911817" aria-expanded="false" aria-controls="/deals/" data-expanded-label="Shop all deals" class="vui:text vui:text--bold vui:text--decoration-none vui:fed__show-more vui:fed__show-more-collapsed" data-track="{&quot;name&quot;:&quot;l3|p9||||||Show more deals|Show more deals&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                          <span id="label-1392911817">Show more deals</span>
                                          </button>
                                        </div>
                                        <div class="vui:screen-reader-only" id="expanded-div" tabindex="-1">
                                        </div>
                                      </div>
                                    </section>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="html">
                            <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                            <style>[data-vui-cmp-marqueelayout-customer] .vui\:tooltip__trigger .vui\:icon.vui\:icon--info {
                            color: var(--vui-theme-color-element-primary);
                            }</style>
                          </div>
                          <div class="cast">
                            <div id="cast--1765030865" class="cmp-cast" data-cmp-is="cast" data-cmp-cast-path="/content/wcms/personal-home/jcr:content/root/main/cast_2055098738" data-cmp-cast-config="{&quot;ids&quot;:[&quot;customer_wirelessAll_wirelineAuth&quot;],&quot;entities&quot;:{&quot;customer_wirelessAll_wirelineAuth&quot;:{&quot;id&quot;:&quot;customer_wirelessAll_wirelineAuth&quot;,&quot;name&quot;:&quot;Any wireless customer or authenticated wireline customer&quot;,&quot;type&quot;:&quot;aep&quot;,&quot;rule&quot;:{&quot;or&quot;:[{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.mobile&quot;},true]},{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.fios&quot;},true]},{&quot;==&quot;:[{&quot;var&quot;:&quot;visitor.login_status.one_vz&quot;},true]},{&quot;in&quot;:[&quot;d53f2c1d-b8c2-4d91-a9e0-3baaba807415&quot;,{&quot;var&quot;:&quot;storage.entities.segmentsAEP&quot;}]},{&quot;in&quot;:[&quot;existing-mobile&quot;,{&quot;var&quot;:&quot;params.entities.type&quot;}]}]},&quot;priority&quot;:1}}}">
                              <div class="cmp-cast__content">
                                <div id="variant-c58162688f" class="cmp-variant fedcast-default">
                                  <div class="previewtiles">
                                    <section data-vui-cmp-previewtiles="" translate="yes" class="vui:cmp-previewtiles vui:page-block vui:page-block--inset">
                                      <h2 class="vui:cmp-previewtiles__header  vui:text vui:text--bold vui:text--title-medium vui:text--title-large@lg vui:page-block vui:page-block--inset  vui:text--start vui:theme--fg-primary vui:theme--fg-black">
                                        Stay connected &amp; save
                                      </h2>
                                      <div class="vui:cmp-previewtiles__grid vui:grid">
                                        <div data-vui-cmp-previewtiles-tile="1" class="vui:cmp-previewtiles__tile vui:grid__col--12 vui:grid__col--4@md vui:theme__surface  vui:theme--light-brand">
                                          <div class="vui:cmp-previewtiles__tile-head">
                                            <h3 class="vui:cmp-previewtiles__tile-header vui:text vui:text--title-small vui:text--title-xsmall@md vui:text--title-small@lg vui:text--bold">
                                              Mobile
                                            </h3>
                                            <p class="vui:cmp-previewtiles__tile-subhead vui:text vui:text--body-medium">
                                              Experience nation-wide mobile coverage with plans for every budget.
                                            </p>
                                          </div>
                                          <div class="vui:cmp-previewtiles__tile-foot">
                                            <div class="vui:cmp-previewtiles__button-wrap">
                                              <a class="vui:cmp-previewtiles__button vui:button vui:is-stretched" href="plans/unlimited/" aria-label="Get started with mobile plans" data-impression-category="Mobile Plan" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " data-track="{&quot;name&quot;:&quot;l4|p1|Mobile Plan|||||2025_JUN_EV_1_NAVIGATION_NA|Get started with mobile plans&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                Get started
                                              </a>
                                            </div>
                                            <div class="vui:cmp-previewtiles__image-wrap">
                                              <img class="vui:cmp-previewtiles__image" alt="" src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050725-mobile-icon/">
                                            </div>
                                          </div>
                                        </div>
                                        <div data-vui-cmp-previewtiles-tile="2" class="vui:cmp-previewtiles__tile vui:grid__col--12 vui:grid__col--4@md vui:theme__surface  vui:theme--light-brand">
                                          <div class="vui:cmp-previewtiles__tile-head">
                                            <h3 class="vui:cmp-previewtiles__tile-header vui:text vui:text--title-small vui:text--title-xsmall@md vui:text--title-small@lg vui:text--bold">
                                              Home Internet
                                            </h3>
                                            <p class="vui:cmp-previewtiles__tile-subhead vui:text vui:text--body-medium">
                                              Enjoy fast, consistent and reliable home internet with no annual contracts.
                                            </p>
                                          </div>
                                          <div class="vui:cmp-previewtiles__tile-foot">
                                            <div class="vui:cmp-previewtiles__button-wrap">
                                              <a class="vui:cmp-previewtiles__button vui:button vui:is-stretched" href="home/internet/" aria-label="Get started with home internet plans" data-impression-category="Home Plan" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " data-track="{&quot;name&quot;:&quot;l4|p2|Home Plan|||||2025_JUN_EV_1_NAVIGATION_NA|Get started with home internet plans&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                Get started
                                              </a>
                                            </div>
                                            <div class="vui:cmp-previewtiles__image-wrap">
                                              <img class="vui:cmp-previewtiles__image" alt="" src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050725-home-internet-icon/">
                                            </div>
                                          </div>
                                        </div>
                                        <div data-vui-cmp-previewtiles-tile="3" class="vui:cmp-previewtiles__tile vui:grid__col--12 vui:grid__col--4@md vui:theme__surface  vui:theme--light-brand">
                                          <div class="vui:cmp-previewtiles__tile-head">
                                            <h3 class="vui:cmp-previewtiles__tile-header vui:text vui:text--title-small vui:text--title-xsmall@md vui:text--title-small@lg vui:text--bold">
                                              Mobile &amp; Home Internet
                                            </h3>
                                            <p class="vui:cmp-previewtiles__tile-subhead vui:text vui:text--body-medium">
                                              Bundle your mobile &amp; home internet and save $15/mo.
                                            </p>
                                          </div>
                                          <div class="vui:cmp-previewtiles__tile-foot">
                                            <div class="vui:cmp-previewtiles__button-wrap">
                                              <a class="vui:cmp-previewtiles__button vui:button vui:is-stretched" href="discounts/phone-home-internet-bundle/" aria-label="Get started with mobile and home internet plans" data-impression-category="Home Plan" data-campaign-id="2025_JUN_MOBILEANDHOME_1_NAVIGATION_NA " data-track="{&quot;name&quot;:&quot;l4|p3|Home Plan|||||2025_JUN_MOBILEANDHOME_1_NAVIGATION_NA|Get started with mobile and home internet plans&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                                Get started
                                              </a>
                                            </div>
                                            <div class="vui:cmp-previewtiles__image-wrap">
                                              <img class="vui:cmp-previewtiles__image" alt="" src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050725-mobile-home-internet-icon/">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="html">
                            <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                            <style>img.vui\:tpl-foregroundimage__img.vui\:u-height-100.vui\:u-width-100.vui\:u-object-fit-contain {
                            height: calc(100% + 64px);
                            width: calc(100% + 64px);
                            margin-top: -18px;
                            }</style>
                          </div>
                          <div class="categorytilettes">
                            <section data-vui-cmp-categorytilettes="" translate="yes" class="vui:cmp-categorytilettes ">
                              <h2 class="vui:cmp-categorytilettes__header vui:text vui:text--bold vui:text--title-medium vui:text--title-xlarge@lg  vui:page-block vui:page-block--inset  vui:text--start  vui:theme--fg-primary vui:theme--fg-black">
                                Looking for something else?
                              </h2>
                              <div data-vui-carousel="" class="vui:carousel vui:cmp-categorytilettes__carousel vui:page-block" id="vui-carousel-gnPVZp1PkOjS1pF4Kj5Sv" role="group" aria-label="Carousel with 6 slides">
                                <div class="">
                                  <div class="vui:cmp-categorytilettes__grid vui:grid vui:carousel__content">
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to active" data-vui-cmp-categorytilettes-tilette="1" aria-label="Slide 1 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-082825-something-else-tile-watches-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-082825-something-else-tile-watches-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-082825-something-else-tile-watches-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-082825-something-else-tile-watches-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-082825-something-else-tile-watches-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <a href="connected-smartwatches/" data-impression-category="Watch-Generic" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " aria-label="Watches" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p1|Watch-Generic|||||2025_JUN_EV_1_NAVIGATION_NA|Watches&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Watches
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="2" aria-label="Slide 2 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-tablets-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-tablets-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-tablets-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-tablets-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-tablets-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <a href="tablets/" data-impression-category="Tablet-Generic" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " aria-label="Tablets" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p2|Tablet-Generic|||||2025_JUN_EV_1_NAVIGATION_NA|Tablets&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Tablets
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="3" aria-label="Slide 3 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-accy-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-accy-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-accy-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-accy-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-accy-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <a href="products/" data-impression-category="Accy-Generic" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " aria-label="Accessories" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p3|Accy-Generic|||||2025_JUN_EV_1_NAVIGATION_NA|Accessories&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Accessories
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="4" aria-label="Slide 4 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0226-hp-ngd-something-else-tile-fin-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0226-hp-ngd-something-else-tile-fin-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/0226-hp-ngd-something-else-tile-fin-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/0226-hp-ngd-something-else-tile-fin-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/0226-hp-ngd-something-else-tile-fin-serv-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <span class="offline-link-plain"  data-impression-category="Adj-Svcs-Bnkg" data-campaign-id="2026_FEB_EV_1_NAVIGATION_NA" aria-label="Banking &amp; cards" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p4|Adj-Svcs-Bnkg|||||2026_FEB_EV_1_NAVIGATION_NA|Banking &amp; cards&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Banking &amp; cards
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="5" aria-label="Slide 5 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-ent-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-ent-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-ent-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-ent-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-ent-serv-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <span class="offline-link-plain"  data-impression-category="Adj-Svcs-Ent" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA " aria-label="Entertainment services" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p5|Adj-Svcs-Ent|||||2025_JUN_EV_1_NAVIGATION_NA|Entertainment services&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Entertainment services
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="vui:carousel__slide vui:cmp-categorytilettes__carousel-slide scroll-to" data-vui-cmp-categorytilettes-tilette="6" aria-label="Slide 6 of 6">
                                      <div class="vui:theme__surface  vui:theme--light-primary vui:carousel__slide-content vui:cmp-categorytilettes__tilette">
                                        <div class="vui:cmp-categorytilettes__foreground">
                                          <div class="vui:cmp-categorytilettes__image-wrapper">
                                            <picture class="vui:tpl-foregroundimage  vui:cmp-categorytilettes__foreground-image">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-home-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-home-serv-m?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp" media="(max-width: 1023px)">
                                              <source srcset="https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-home-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=2, https://ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-home-serv-d?fmt=webp-alpha&amp;fmt=webp-alpha&amp;scl=1 2x" type="image/webp">
                                              <img src="/assets/ss7.vzw.com/is/image/VerizonWireless/hp-ngd-050525-something-else-tile-home-serv-m/" alt="" aria-hidden="true" loading="lazy" decoding="sync" class="vui:tpl-foregroundimage__img vui:u-height-100 vui:u-width-100 vui:u-object-fit-contain" tabindex="-1">
                                            </picture>
                                          </div>
                                          <div class="vui:cmp-categorytilettes__anchor-wrapper">
                                            <span class="offline-link-plain"  data-impression-category="Home Plan" data-campaign-id="2025_JUN_EV_1_NAVIGATION_NA" aria-label="Home services" class="vui:cmp-categorytilettes__anchor vui:text vui:text--micro vui:text--title-2xsmall@md vui:text--bold vui:text--center" data-track="{&quot;name&quot;:&quot;l5|p6|Home Plan|||||2025_JUN_EV_1_NAVIGATION_NA|Home services&quot;,&quot;type&quot;:&quot;impression&quot;}">
                                              Home services
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="vui:carousel__scrubber-wrap">
                                  <div class="vui:carousel__scrubber-track">
                                    <div class="vui:carousel__scrubber" style="width: 0%;">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                          <div class="html">
                            <!-- Split complex inline expression into discrete steps to stabilize HTL class generation -->
                            <style>.vui\:carousel__scrubber-wrap {
                            display: none !important;
                            }</style>
                            <script>document.getElementsByClassName("vui:cmp-categorytilettes__carousel-scroll-container")[0].classList = '';</script>
                          </div>
                        </div>
                      </main>
                      <footer id="vz-gf20">
  <div class="xf-page-unified xfpage page basicpage">
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
                                <a href="smartphones/">Devices</a>
                                </li>
                                <li>
                                  <a href="products/">Accessories</a>
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
                                      <a href="wireless-devices/samsung/">Samsung</a>
                                      </li>
                                      <li>
                                        <a href="wireless-devices/apple/">Apple</a>
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
                                            <a href="support/">Support overview</a>
                                            </li>
                                            <li>
                                              <a href="support/return-policy/">Return policy</a>
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
                                                  <a href="about/">About us</a>
                                                  </li>
                                                  <li>
                                                    <a href="./" target="_blank" rel="noopener noreferrer">Careers</a>
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
                                                        <a href="smartphones/apple-iphone-17/">Apple iPhone 17</a>
                                                        </li>
                                                        <li>
                                                          <a href="smartphones/apple-iphone-17e/">Apple iPhone 17e</a>
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
                                                              <a href="products/otterbox/">Otterbox</a>
                                                              </li>
                                                              <li>
                                                                <a href="products/zagg/">ZAGG</a>
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
                                                                <a class="gnav20-social-media" href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Facebook" title="Opens New Window">
                                                                <span>facebook-official</span>
                                                                <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78"><path fill="#fff" d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"> </path></svg>
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a class="gnav20-social-media" href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Twitter" title="Opens New Window">
                                                                <span>twitter</span>
                                                                <svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"> </path></svg>
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a class="gnav20-social-media" href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Youtube" title="Opens New Window">
                                                                <span>you-tube</span>
                                                                <svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18.5 18" style="enable-background:new 0 0 18.5 18;" xml:space="preserve"><path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2 s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4 S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"> </path></svg>
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a class="gnav20-social-media" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on Instagram" title="Opens New Window">
                                                                <span>instagram</span>
                                                                <svg focusable="false" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve"><g> <path fill="#FFF" d="M18,5.3c0-1-0.2-1.6-0.4-2.2c-0.2-0.6-0.5-1.1-1-1.6c-0.5-0.5-1-0.8-1.6-1c-0.6-0.2-1.2-0.4-2.2-0.4C11.8,0,11.4,0,9,0 S6.3,0,5.3,0c-1,0-1.6,0.2-2.2,0.4C2.5,0.7,2,1,1.5,1.5s-0.8,1-1,1.6C0.3,3.7,0.1,4.3,0.1,5.3C0,6.2,0,6.6,0,9c0,2.4,0,2.8,0.1,3.7 c0,1,0.2,1.6,0.4,2.2c0.2,0.6,0.5,1.1,1,1.6s1,0.8,1.6,1c0.6,0.2,1.2,0.4,2.2,0.4C6.3,18,6.6,18,9,18s2.8,0,3.7-0.1 c1,0,1.6-0.2,2.2-0.4c0.6-0.2,1.1-0.5,1.6-1c0.5-0.5,0.8-1,1-1.6c0.2-0.6,0.4-1.2,0.4-2.2c0-1,0.1-1.3,0.1-3.7 C18,6.6,18,6.2,18,5.3z M16.3,12.6c0,0.9-0.2,1.4-0.3,1.7c-0.2,0.4-0.4,0.7-0.7,1s-0.6,0.5-1,0.7c-0.3,0.1-0.8,0.3-1.7,0.3 c-0.9,0-1.2,0.1-3.6,0.1s-2.7,0-3.6-0.1c-0.9,0-1.4-0.2-1.7-0.3c-0.4-0.2-0.7-0.4-1-0.7s-0.5-0.6-0.7-1c-0.1-0.3-0.3-0.8-0.3-1.7 c0-0.9-0.1-1.2-0.1-3.6c0-2.4,0-2.7,0.1-3.6C1.7,4.5,1.9,4,2,3.7c0.2-0.4,0.4-0.7,0.7-1C3,2.3,3.3,2.1,3.7,2C4,1.9,4.5,1.7,5.4,1.7 c0.9,0,1.2-0.1,3.6-0.1c2.4,0,2.7,0,3.6,0.1c0.9,0,1.4,0.2,1.7,0.3c0.4,0.2,0.7,0.4,1,0.7s0.5,0.6,0.7,1c0.1,0.3,0.3,0.8,0.3,1.7 c0,0.9,0.1,1.2,0.1,3.6C16.4,11.4,16.4,11.7,16.3,12.6z"> </path> <path fill="#FFF" d="M9,4.4C6.5,4.4,4.4,6.4,4.4,9c0,2.6,2.1,4.6,4.6,4.6s4.6-2.1,4.6-4.6C13.6,6.4,11.6,4.4,9,4.4z M9,12c-1.7,0-3-1.3-3-3 c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3C12,10.7,10.7,12,9,12z"> </path> <path fill="#FFF" d="M13.8,3.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1C14.9,3.6,14.4,3.1,13.8,3.1z"> </path> </g></svg>
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a class="gnav20-social-media" href="https://tiktok.com" target="_blank" rel="noopener noreferrer" aria-label="Follow Verizon on TikTok" title="Opens New Window">
                                                                <span>TikTok</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="19" viewBox="0 0 16 18"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.2984 0.7758H11.5884C11.8091 1.9405 12.5165 2.9399 13.4965 3.5643L13.4975 3.5655C14.1797 4 14.9931 4.2535 15.8663 4.2535V4.934L15.8664 7.31C14.2444 7.31 12.7414 6.8029 11.5146 5.9423V12.1547C11.5146 15.2573 8.9319 17.7814 5.7572 17.7814C4.5305 17.7814 3.3929 17.4033 2.4578 16.7616L2.4562 16.76C0.9724 15.7412 0 14.0571 0 12.1541C0 9.0516 2.5827 6.5274 5.7574 6.5274C6.0208 6.5274 6.279 6.5486 6.5332 6.5823V7.3065L6.5331 9.7037C6.2875 9.6286 6.0279 9.5849 5.7572 9.5849C4.3074 9.5849 3.1279 10.7378 3.1279 12.1547C3.1279 13.1414 3.7007 13.9987 4.5376 14.4291C4.9025 14.6168 5.317 14.7244 5.7571 14.7244C7.1735 14.7244 8.3289 13.6233 8.3815 12.2514L8.3865 0H11.5145C11.5145 0.265 11.5407 0.524 11.5884 0.7758H9.2984Z" fill="#161823"> </path></svg>
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
                                                                <a class="gnav20-social-media" href="https://x.com" target="_blank" rel="noopener noreferrer" aria-label="Verizon Support on Twitter" title="Opens New Window">
                                                                <span>twitter</span>
                                                                <svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"> </path></svg>
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
                                                    <a class="gnav20-logoBlackBg" title="Verizon Home Page" href="./">
                                                    </a>
                                                  </div>
                                                </div>
                                                <div class="gnav20-footerlink">
                                                  <ul aria-label="Policies and notices menu list" class="gnav20-footer-list ">
                                                    <li>
                                                      <a href="about/privacy/">
                                                        Privacy Policy
                                                      </a>
                                                    </li>
                                                    <li>
                                                      <a data-hide-for="appid:communitykh" href="privacy/your-privacy-choices/">
                                                        Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;">
                                                        <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_26__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
                                                      </span>
                                                    </a>
                                                  </li>
                                                  <li class="gnav20-hide">
                                                    <a data-show-for="appid:communitykh" href="privacy/your-privacy-choices/">
                                                      Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;">
                                                      <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_27__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
                                                    </span>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="about/our-company/open-internet/">
                                                    Open Internet
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="support/website-use-legal/">
                                                    Website Terms of Use
                                                  </a>
                                                </li>
                                              </ul>
                                              <div class="copyright-section">
                                                <div class="copyright-text">
                                                  © <span id="copyright-year">2026</span> Verizon
                                                </div>
                                                <div id="visual-cue">
                                                  <div>
                                                  </div>
                                                  <div>
                                                  </div>
                                                  <div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="gnav20-sticky-header  gnav20-with-promo">
                                  </div>
                                </div>
                              </div>
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
                        <div class="vui:modal__backdrop" data-vui-modal-hide="">
                        </div>
                        <div class="vui:modal__dialog" role="document">
                          <div class="vui:modal__close">
                            <button class="vui:u-z-index-3 vui:button-icon vui:button-icon--small" type="button" data-vui-modal-hide="" aria-label="Close dialog">
                              <i class="vui:button-icon__icon vui:icon vui:icon--close">
                              </i>
                            </button>
                          </div>
                          <div class="vui:modal__content" data-vui-cmp-abandonedcart-modal-content="">
                          </div>
                        </div>
                      </div>
                      <div class="gnav20-click-div">
                      </div>
                      <div id="vui-tooltip-portal-wQbKRRxjGLm1Rgll5M5RG">
                      </div>
                    </body>
                  </html>
