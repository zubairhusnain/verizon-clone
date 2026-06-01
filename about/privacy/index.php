<?php
declare(strict_types=1);
require_once __DIR__ . '/../../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# " class="fouc-js js object-fit" xmlns="http://www.w3.org/1999/xhtml" data-whatinput="initial" data-whatintent="initial" data-whatelement="div" data-whatclasses="visually-hidden">
  <head>
    <!-- offline: marketing stripped -->
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
    <style id="offline-target-flexpage">
    .off-canvas-content,
    .off-canvas-wrapper,
    .dialog-off-canvas-main-canvas {
    height: auto !important;
    min-height: 0 !important;
    overflow: visible !important;
    }
    #__next { display: block !important; height: auto !important; overflow: visible !important; }
    main.main-content,
    main[role="main"] {
    display: block !important;
    position: relative !important;
    z-index: 1;
    min-height: 40vh;
    margin-top: 0 !important;
    }
    .center-container,
    .inner-content {
    width: 100% !important;
    max-width: 1272px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    }
    .fp_hero_display_one_digital-component .comp-type-mini-hero-display {
    min-height: 180px !important;
    }
    .react-multi-carousel-list,
    .react-multi-carousel-track {
    display: flex !important;
    flex-wrap: wrap !important;
    transform: none !important;
    }
    .react-multi-carousel-item {
    flex: 1 1 240px !important;
    width: auto !important;
    max-width: 100% !important;
    }
    .fp_media_cta_one_digital-component .video-content,
    .fp_media_cta_one_digital-component .video-thumb,
    .fp_media_cta_one_digital-component #divRenderImage {
    min-height: 280px !important;
    position: relative !important;
    }
    .fp_media_cta_one_digital-component #icRenderImage,
    .fp_media_cta_one_digital-component #icRenderImage > span {
    position: relative !important;
    display: block !important;
    min-height: 280px !important;
    }
    .fp_media_cta_one_digital-component img.mode-desktop {
    position: relative !important;
    width: 100% !important;
    height: auto !important;
    min-height: 240px !important;
    object-fit: cover !important;
    }
    </style>
    <style id="offline-target-pages-layout">
    header#vz-gh20 + .gnav20-sticky-header,
    header#vz-gh20 ~ .gnav20-sticky-header:not(footer .gnav20-sticky-header),
    .off-canvas-content > .gnav20-sticky-header {
    display: none !important;
    height: 0 !important;
    min-height: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    pointer-events: none !important;
    }
    footer#vz-gf20,
    footer#vz-gf20 .xf-page-unified,
    footer#vz-gf20 .gnav20,
    footer#vz-gf20 .gnav20 .gnav20-sticky-content {
    max-height: none !important;
    height: auto !important;
    min-height: 0 !important;
    overflow: visible !important;
    }
    style#gnav20-preload { display: none !important; }
    .gnav20-sticky-content .gnav20-apicomponentnewdesign,
    header#vz-gh20 .gnav20-apicomponentnewdesign {
    opacity: 1 !important;
    visibility: visible !important;
    }
    header#vz-gh20 {
    display: block !important;
    position: relative !important;
    height: auto !important;
    min-height: 120px !important;
    max-height: none !important;
    overflow: visible !important;
    }
    header#vz-gh20 .gnav20-apicomponentnewdesign {
    min-height: 120px !important;
    }
    header#vz-gh20 .gnav20,
    header#vz-gh20 .gnav20 .gnav20-sticky-content {
    max-height: none !important;
    height: auto !important;
    }
    #onetrust-consent-sdk,
    #onetrust-banner-sdk,
    .onetrust-pc-dark-filter { display: none !important; visibility: hidden !important; }
    .external-link-modal-container {
    display: none !important;
    visibility: hidden !important;
    height: 0 !important;
    overflow: hidden !important;
    pointer-events: none !important;
    }
    </style>
    <style id="offline-hide-lang">
    .gnav20-localization { display: none !important; }
    </style>
    <style id="offline-about-layout">
    #onetrust-consent-sdk,
    #onetrust-banner-sdk,
    .onetrust-pc-dark-filter,
    #ot-sdk-btn,
    #ot-sdk-cookie-policy,
    #ot-sync-ntfy { display: none !important; visibility: hidden !important; }
    body { margin: 0; overflow-x: auto; }
    header#vz-gh20 {
    display: block !important;
    position: relative !important;
    height: auto !important;
    min-height: 120px !important;
    max-height: none !important;
    }
    header#vz-gh20 .gnav20-apicomponentnewdesign {
    min-height: 120px !important;
    }
    header#vz-gh20 .gnav20-sticky-header {
    height: 0 !important;
    min-height: 0 !important;
    overflow: hidden !important;
    pointer-events: none !important;
    }
    main {
    display: block !important;
    position: relative;
    z-index: 1;
    }
    main + footer#vz-gf20 { margin-top: 0; }
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
    <base href="/verizon-clone/verizon_offline/">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="description" content="Our Privacy Policy describes the information we collect, how it is used and shared, your choices about uses, and your rights under certain laws.">
    <meta name="keywords" content="Verizon Privacy Policy Summary, Verizon Privacy Website">
    <meta name="Generator" content="Drupal 9 (https://www.drupal.org)">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:creator" content="@verizon">
    <meta name="twitter:title" content="Privacy Policy Home Page | About Verizon">
    <meta name="twitter:text:title" content="Privacy Policy Home Page | About Verizon">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:src" content="">
    <meta name="twitter:site" content="@verizon">
    <meta property="og:title" content="Privacy Policy Home Page | About Verizon">
    <meta property="og:site_name" content="@verizon">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:type" content="website">
    <meta property="og:updated_time" content="2026-03-13EDT13:42:27-14400">
    <meta name="twitter:description" content="Our Privacy Policy describes the information we collect, how it is used and shared, your choices about uses, and your rights under certain laws.">
    <meta property="og:description" content="Our Privacy Policy describes the information we collect, how it is used and shared, your choices about uses, and your rights under certain laws.">
    <link rel="icon" href="/about/privacy/about/privacy/themes/custom/vzpp/favicon.ico" type="image/vnd.microsoft.icon">
    <title>Privacy Policy Home Page | About Verizon</title>
      <link rel="stylesheet" media="all" href="assets/www.verizon.com/about/privacy/sites/default/files/css/css_nISLqklUP-Cv9-enNyBeC_uiwFBzW3YFuZqv3gLmmNY.css">
      <link rel="stylesheet" media="all" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css">
      <link rel="stylesheet" media="all" href="assets/www.verizon.com/about/privacy/sites/default/files/css/css_AbpHGcgLb-kRsJGnwFEktk7uzpZOCcBY74-YBdrKVGs.css">
      <link rel="stylesheet" media="all" href="assets/www.verizon.com/about/privacy/sites/default/files/css/css_LMf7pD0EkMMcn3GAMYbwP6wuVKRzm8nRQeNddrkHg0Y.css">
      <link rel="stylesheet" media="all" href="assets/www.verizon.com/about/privacy/sites/default/files/css/css_JM5wGKgW-usaoFIU-SrO3xN86B0ycBVsZj0K9uSOg5Y.css">
      <script>
      var gnavdl ={"bu": "corporate", "appid": "corpweb", "impltype":"ssi", "options":{"sticky":"true"}}
      </script>
      <script src="assets/www.verizon.com/about/privacy/sites/default/files/js/js_qiOJboP-yBXBXBBhvL2qDO7h1UkXyuHFzC-ny51asMo.js"></script>
      <script type="text/javascript">
      document.documentElement.classList.add('fouc-js');
      </script>
      <meta class="foundation-mq">
      <style>.sticky-article-bookmark, .sticky-article-addln_resources {top:60px !important ;}</style>
      <style>.node--type-article-landing-page .div_share_addln_resources {top: 150px !important;margin-top: 120px !important;}</style>
      <script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" type="text/javascript" defer=""></script>
    </head>
    <body class="lang-en path-frontpage node--type-layout">
      <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas="">
        <div class="off-canvas-wrapper">
          <div id="top-anchor" class="visually-hidden" tabindex="-1">
          </div>
          <div class="off-canvas-content" data-off-canvas-content="">
            <header id="vz-gh20">
              <div class="xf-page-unified xfpage page basicpage">
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
                                            <a x-cq-linkchecker="skip" aria-label="Contact us" href="/support/contact-us/" data-label="Contact us" data-track="global nav:contact us">
                                              Contact us
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="support">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Support" href="/support/" data-label="Support" data-track="global nav:support">
                                              Support
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="store">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Stores" href="/stores/" data-label="Stores" data-track="global nav:stores">
                                              Stores
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-store">
                                        <div class="gnav20-utility-wrapper" item-title="coveragemap">
                                          <div>
                                            <a x-cq-linkchecker="skip" aria-label="Coverage map" href="/coverage-map/" data-label="Coverage map" data-track="global nav:coverage map">
                                              Coverage map
                                            </a>
                                          </div>
                                        </div>
                                      </div>
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
                                            <a class="gnav20-logoWhiteBg" title="Verizon Home Page" href="/" target="_self" data-track="global nav:verizon home page">
                                            </a>
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
                                                                <a id="gnav20-cart-list-item-2-mobile" class="gnav20-content-list-arrow gnav20-home-cart-count" href="/home/internet/" data-track="global nav:cart menu:home solutions">Home solutions</a>
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
                                                                <a class="gnav20-promo-slide-link" href="/smartphones/" aria-label="Promo 1 of 2 Add a new smartphone line and we" data-track="global nav:promo ribbon:promo 1 of 2 add a new smartphone line and we">&nbsp;</a>Add a new smartphone line and we'll waive the activation fee. Online only. With myPlan.<span aria-hidden="true"> | </span>
                                                                <a class="gnav20-promo-link" href="/smartphones/" aria-label="Add a new smartphone line and we" data-track="global nav:promo ribbon:shop now">
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
                                                                <a class="gnav20-promo-slide-link" href="/switch-to-verizon/" aria-label="Promo 2 of 2 AT&amp;T Customers: Bring in your bill and we’ll give you a better deal." data-track="global nav:promo ribbon:promo 2 of 2 at&amp;t customers: bring in your bill and we’ll give you a better deal.">&nbsp;</a>AT&amp;T Customers: Bring in your bill and we’ll give you a better deal.<span aria-hidden="true"> | </span>
                                                                <a class="gnav20-promo-link" href="/switch-to-verizon/" aria-label="AT&amp;T Customers: Bring in your bill and we’ll give you a better deal. link to Switch now" data-track="global nav:promo ribbon:at&amp;t customers: bring in your bill and we’ll give you a better deal. link to switch now">
                                                                <u>Switch now</u>
                                                              </a>
                                                              <span aria-hidden="true"> | </span>
                                                                <span class="gnav20-promo-icon">
                                                                <a role="button" href="#" aria-label="Offer details for bring your bill" data-track="global nav:promo ribbon:offer details for bring your bill">Details</a>
                                                              </span>
                                                            </span>
                                                          </div>
                                                          <div class="gnav20-modal-content-placeholder" style="display:none;">
                                                            <div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading">To qualify, must provide a postpaid consumer mobile bill from T-Mobile, AT&amp;T, Xfinity or Spectrum, dated within the past 45 days; bill must be in the same name as the person redeeming the deal. Add'l terms apply. See <a style="text-decoration: underline !important;" href="/switch-to-verizon/" aria-label="Switch now" data-track="global nav:promo ribbon:modal:www.verizon.com/switch-to-verizon">www.verizon.com/switch-to-verizon</a>.</div>
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
                                                      </div>
                                                    </div>
                                                  </header>
                                                  <main class="main-content" id="main-content">
                                                    <div class="breadcrumbs-container hide-for-print">
                                                      <div class="breadcrumbs-container-inner grid-container">
                                                        <div id="block-bread-crumbs" class="block-bread-crumbs block block-system block-system-breadcrumb-block">
                                                          <nav aria-label="Breadcrumb">
                                                            <ul class="breadcrumbs" role="presentation" style="display: none;">
                                                              <li>
                                                                <a href="/about/privacy/about/" aria-label="About, 1 of 2">About</a>
                                                                <span class="breadcrumbs__arrow">
                                                              </span>
                                                            </li>
                                                            <li class="breadcrumbs__current">
                                                              <span class="show-for-sr">Current: </span>Privacy Policy Summary
                                                              </li>
                                                            </ul>
                                                          </nav>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="print-message-container grid-container" aria-hidden="true">
                                                      <p class="print-message">
                                                        <em>We recommend that you view this content online or on your mobile device for a better design and navigation experience and the ability to seamlessly access links and other documents. This version is provided so you can PRINT a version of this content in a single document.</em>
                                                        </p>
                                                      </div>
                                                      <div class="cell">
                                                        <a id="main-content">
                                                        </a>
                                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                                        <div id="block-mainpagecontent" class="block-mainpagecontent block block-system block-system-main-block">
                                                          <article about="/about/privacy/privacy-policy-summary">
                                                            <section class="layout layout--singlecol-section layout--singlecol-section--100 layout--width-default layout--text-default layout--padding-top-zero layout--padding-bottom-zero">
                                                              <div class="layout__container">
                                                                <div class="layout__content">
                                                                <div class="layout__region">
                                                                <header class="hero">
                                                                <div class="hero__container">
                                                                <div class="hero__content">
                                                                <h1 class="hero__title">Get to know our <br aria-hidden="true">
                                                                privacy policies.</h1>
                                                                <div class="hero__subtitle text--20">
                                                                <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                <p>Learn about our privacy practices and find the policy you’re looking for, or go directly to the <a href="/about/privacy/about/privacy/full-privacy-policy/">
                                                                <strong>
                                                                <u>California Privacy Notice</u>
                                                              </strong>
                                                            </a> or the <a href="/about/privacy/about/privacy/health-privacy-notice/">
                                                            <strong>
                                                              <u>Health Privacy Notice</u>
                                                              </strong>
                                                            </a>.</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </header>
                                                  <div class="block block-layout-builder block-inline-blockslider">
                                                    <div class="slider-container" data-equalizer="" data-equalize-on="medium" data-resize="hc6xqz-eq" data-mutate="25idox-eq" data-i="btcywt-i">
                                                      <div class="slider slider--default grid-x grid-margin-x grid-screen-only" data-slider="0">
                                                        <div class="slider__slide cell medium-4">
                                                          <div class="paragraph paragraph--type--cta cta--default cta index-">
                                                            <div class="cta__vzpp-icon">
                                                              <span class="vzpp-icon-bullseye" aria-hidden="true">
                                                              </span>
                                                            </div>
                                                            <h2 class="cta__headline h2">
                                                              Your privacy is<br aria-hidden="true">
                                                              important to us.
                                                            </h2>
                                                            <div class="cta__bottom text--20">
                                                              <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                                <p>
                                                                <a data-dialog-type="modal" href="/about/privacy/about/privacy/privacy-officer-message/" class=" use-ajax" data-dialog-options="{&quot;dialogClass&quot;: &quot;ui-dialog--vzpp&quot;}" data-once="ajax" role="button">
                                                                A message from our Chief Privacy Officer.
                                                              </a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="slider__slide cell medium-4">
                                                      <div class="paragraph paragraph--type--cta cta--default cta index-">
                                                        <div class="cta__vzpp-icon">
                                                          <span class="vzpp-icon-list" aria-hidden="true">
                                                          </span>
                                                        </div>
                                                        <h2 class="cta__headline h2">
                                                          You have choices about how information is used.
                                                        </h2>
                                                        <div class="cta__bottom text--20">
                                                          <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                            <p>Our privacy policies explain <a href="/about/privacy/about/privacy/">how you can make these choices</a>.</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="slider__slide cell medium-4">
                                                        <div class="paragraph paragraph--type--cta cta--default cta index-">
                                                          <div class="cta__vzpp-icon">
                                                            <span class="vzpp-icon-mag" aria-hidden="true">
                                                            </span>
                                                          </div>
                                                          <h2 class="cta__headline h2">
                                                            Read up on state law privacy rights.<br aria-hidden="true">
                                                          </h2>
                                                          <div class="cta__bottom text--20">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>You can find information about specific state laws in the <a href="/about/privacy/about/privacy/full-privacy-policy/">
                                                                <u>state law section of our privacy policy</u>
                                                              </a>.</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="slider__dots">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="block block-layout-builder block-inline-blockwayfinding">
                                                  <div class="wayfinding">
                                                    <div class="grid-x grid-margin-x grid-screen-only">
                                                      <div class="cell medium-4">
                                                        <h2 class="wayfinding__headline h3" id="article_blog_bm_0">
                                                          <div class="field field--name-field-wayfinding-headline field--type-string field--label-hidden field__item">Let's make sure you're in the right place.</div>
                                                          </h2>
                                                        </div>
                                                      </div>
                                                      <div class="wayfinding__grid wayfinding--count-5">
                                                        <div class="wayfinding__cell">
                                                          <h3 class="wayfinding-cell__headline h6">  Verizon Privacy Policies
                                                          </h3>
                                                          <div class="wayfinding-cell__body">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>The Verizon privacy policy applies when you interact with us or use services we offer to customers in the United States.</p>
                                                                <p>
                                                                <a href="/about/privacy/about/privacy/">Verizon Privacy Policy Summary</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Full Verizon Privacy Policy</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">California Privacy Rights</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/privacy/your-data/" target="_blank" rel="noopener noreferrer">Verizon Privacy Dashboard</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/fios-privacy-policy/">Fios Privacy Policy</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="wayfinding__cell">
                                                          <h3 class="wayfinding-cell__headline h6">  Information for Business Customers
                                                          </h3>
                                                          <div class="wayfinding-cell__body">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>These sections apply when you interact with us or use services we offer to business customers. The International Privacy Centre applies to customers outside of the US. The US Data Privacy page applies to customers inside the US.</p>
                                                                <p>
                                                                <a href="/about/privacy/about/privacy/international-privacy-centre/">International Privacy Centre</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/us-data-processing-activities/">US Data Privacy</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="wayfinding__cell">
                                                          <h3 class="wayfinding-cell__headline h6">  Apps and services
                                                          </h3>
                                                          <div class="wayfinding-cell__body">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>Our apps and services privacy policies apply in addition to our Verizon privacy policy when you use these services.</p>
                                                                <p>
                                                                <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="4a3ace6f-0fa6-4880-80a6-8c5fe76c51af" href="/about/privacy/about/privacy/hum-privacy-policy/">Hum</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/verizon-family-privacy-notice/" target="_blank" rel="noopener noreferrer">Verizon Family</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/gizmo-privacy-policy/" target="_blank" rel="noopener noreferrer">Gizmo</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/wild-and-seek-privacy-policy/" target="_blank" rel="noopener noreferrer">Wild and Seek</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/care-smart-app/" target="_blank" rel="noopener noreferrer">Care Smart</a>
                                                              </p>
                                                              <p>&nbsp;</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="wayfinding__cell">
                                                            <h3 class="wayfinding-cell__headline h6">  Notices
                                                            </h3>
                                                            <div class="wayfinding-cell__body">
                                                              <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                                <p>Separate privacy notices apply for additional offerings.</p>
                                                                <p>
                                                                <a href="/about/privacy/about/privacy/device-installment-privacy/">Mobile Device Installment Plan</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/automated-license-plate-recognition/">Automated License Plate Recognition</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="wayfinding__cell">
                                                          <h3 class="wayfinding-cell__headline h6">  State Privacy Rights
                                                          </h3>
                                                          <div class="wayfinding-cell__body">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>Some state laws provide additional privacy rights to residents.</p>
                                                                <p>&nbsp;</p>
                                                                <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">California</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Colorado</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Connecticut</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Delaware</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Indiana</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Iowa</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Kentucky</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Maine</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Maryland</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">
                                                                <u>Minnesota</u>
                                                              </a>
                                                            </p>
                                                            <p>
                                                              <a href="/about/privacy/about/privacy/full-privacy-policy/">
                                                                <u>Montana</u>
                                                              </a>
                                                            </p>
                                                            <p>
                                                              <a href="/about/privacy/about/privacy/full-privacy-policy/">
                                                                <u>Nebraska</u>
                                                              </a>
                                                            </p>
                                                            <p>
                                                              <a href="/about/privacy/about/privacy/full-privacy-policy/">Nevada</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">New Hampshire</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">New Jersey</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Oregon</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Rhode Island</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Tennessee</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Texas</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Utah</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Virginia</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/full-privacy-policy/">Colorado and Illinois Biometric Information Privacy</a>
                                                              </p>
                                                              <p>
                                                                <a href="/about/privacy/about/privacy/health-privacy-notice/">Nevada and Washington Health Privacy Notice</a>
                                                              </p>
                                                              <p>&nbsp;</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="block block-layout-builder block-inline-blocksbs">
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-0">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h2 class="sbs__heading h3 h2-27_4" id="article_blog_bm_1">
                                                              Here's a summary of our Privacy Policy.
                                                            </h2>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>We are committed to strong and meaningful privacy protections. <a id="summary">
                                                              </a>Our <a href="/about/privacy/about/privacy/full-privacy-policy/">Privacy Policy</a> details the information we collect, how we use and disclose it, and the choices you have about certain uses and disclosures of information we have about you. We’ve summarized key elements of the policy here for your convenience.</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-1">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h3 class="sbs__heading h4">
                                                              What information does Verizon collect?
                                                            </h3>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>We collect information you provide to us, about your use of our products and services and about your interactions with us. We also collect information about how our network and your devices are working, including the location of your wireless devices. We also obtain information about you from other companies, such as credit, demographic and interest information. <a aria-label="Learn more about What information does Verizon collect?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about What information does Verizon collect?" title="Learn more about What information does Verizon collect?">Learn more</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-2">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h3 class="sbs__heading h4">
                                                              How does Verizon use information?
                                                            </h3>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>We use information to provide you with services and enhance your experiences with us. This includes delivering and maintaining your products, services, and your account and billing records; developing new products and services; personalizing your experiences; and delivering marketing offers to you. <a aria-label="Learn more about How does Verizon use information?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about How does Verizon use information?">Learn more</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-3">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h3 class="sbs__heading h4">
                                                              Does Verizon disclose information it has about me?
                                                            </h3>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>We disclose information within Verizon, with service providers and with others.&nbsp;</p>
                                                                <p>We disclose information within Verizon including with our affiliates; with service providers who perform work on our behalf; and with others as described in this policy including for fraud prevention, directory assistance, legal compliance, credit and collections, caller id, and certain advertising purposes. We also respond to legal requests and may disclose information with your consent.&nbsp;<a aria-label="Learn more about Does Verizon share my information?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about Does Verizon share my information?" title="Learn more about Does Verizon share my information?">Learn more</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-4">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h3 class="sbs__heading h4">
                                                              Does Verizon have programs that allow other companies to use information about me?
                                                            </h3>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>We have optional programs that allow Verizon and third parties to show you advertisements that are more personalized and useful to you or to help third parties verify your identity. Another program develops insights by analyzing de-identified customer information and reporting on aggregate behaviors. <a aria-label="Learn more about Does Verizon have programs that allow other companies to use information about me?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about Does Verizon have programs that allow other companies to use information about me?" title="Learn more about Does Verizon have programs that allow other companies to use information about me?">Learn more</a>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="paragraph paragraph--type--sbs sbs--default sbs index-5">
                                                        <div class="grid-x grid-margin-x grid-screen-only">
                                                          <div class="cell medium-4">
                                                            <h3 class="sbs__heading h4">
                                                              What choices do I have about uses of personal information?
                                                            </h3>
                                                          </div>
                                                          <div class="sbs__body cell medium-6 medium-offset-2">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>
                                                                <a id="choices">
                                                              </a>
                                                            </p>
                                                            <p>You have choices about how Verizon reaches you with marketing and whether certain types of information may be disclosed within Verizon for marketing purposes. You also have choices about whether information we have about you may be used for our advertising and insights programs, for verification purposes, and for certain uses of device information where applicable. You also have a choice about whether our websites and apps may disclose information for certain targeted advertising purposes.&nbsp;<a aria-label="Learn more about What choices do I have about uses of my information?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about What choices do I have about uses of my information?" title="Learn more about What choices do I have about uses of my information?">Learn more</a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="paragraph paragraph--type--sbs sbs--default sbs index-6">
                                                      <div class="grid-x grid-margin-x grid-screen-only">
                                                        <div class="cell medium-4">
                                                          <h3 class="sbs__heading h4">
                                                            How does Verizon protect information that it has about me, and how do I update my account details?
                                                          </h3>
                                                        </div>
                                                        <div class="sbs__body cell medium-6 medium-offset-2">
                                                          <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                            <p>We have a variety of safeguards in place to help protect information against unauthorized access, use or disclosure. You can also access and update information we have about you and delete certain information we have.&nbsp;<a aria-label="Learn more about How does Verizon protect my information, and how do I update my account details?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about How does Verizon protect my information, and how do I update my account details?" title="Learn more about How does Verizon protect my information, and how do I update my account details?">Learn more&nbsp;</a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="paragraph paragraph--type--sbs sbs--default sbs index-7">
                                                      <div class="grid-x grid-margin-x grid-screen-only">
                                                        <div class="cell medium-4">
                                                          <h3 class="sbs__heading h4">
                                                            Do I have specific rights under privacy laws in the United States?
                                                          </h3>
                                                        </div>
                                                        <div class="sbs__body cell medium-6 medium-offset-2">
                                                          <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                            <p>You may have additional rights under the Cable Act and state laws, including California, Colorado, Connecticut, Delaware, Illinois, Indiana, Iowa, Kentucky, Maine, Maryland, Minnesota, Montana, Nebraska, Nevada, New Hampshire, New Jersey, Oregon, Rhode Island, Tennessee, Texas, Utah, Virginia and Washington privacy laws. <a aria-label="Learn more about Do I have specific rights under privacy laws in the United States?" href="/about/privacy/about/privacy/full-privacy-policy/" id="Learn more about Do I have specific rights under privacy laws in the United States? " title="Learn more about Do I have specific rights under privacy laws in the United States? ">Learn more</a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="paragraph paragraph--type--sbs sbs--default sbs index-8">
                                                      <div class="grid-x grid-margin-x grid-screen-only">
                                                        <div class="cell medium-4">
                                                          <h3 class="sbs__heading h4">
                                                            How do I learn about changes to this privacy policy?
                                                          </h3>
                                                        </div>
                                                        <div class="sbs__body cell medium-6 medium-offset-2">
                                                          <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                            <p>We periodically update our privacy policy. We provide a brief summary of these updates when we make them.&nbsp;If we change the way we use or disclose information that identifies you in a way that is materially different from what was stated in our privacy policy at the time the information was collected, you will be given an opportunity to update your choices about the new use or disclosure. <a data-dialog-type="modal" href="/about/privacy/about/privacy/changes-privacy-policy/" class=" use-ajax" data-dialog-options="{&quot;dialogClass&quot;: &quot;ui-dialog--vzpp&quot;}" data-once="ajax" role="button">
                                                              View Recent Changes
                                                            </a>
                                                          </p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                        <section aria-label="Links to related topics" class="layout layout--singlecol-section layout--singlecol-section--100 layout--width-default layout--text-default layout--padding-top-zero layout--padding-bottom-zero hide-for-print">
                                          <div class="layout__container">
                                            <h2 class="layout__heading" id="article_blog_bm_2">Related topics</h2>
                                              <div class="layout__content">
                                                <div class="layout__region">
                                                  <div class="block block-layout-builder block-inline-blockslider">
                                                    <div class="slider-container slider-container--extra-margin" data-equalizer="" data-equalize-on="medium" data-resize="jwuxsp-eq" data-mutate="ma4xu3-eq" data-i="p53hvt-i">
                                                      <div class="slider slider--bordered grid-x" data-slider="1">
                                                        <div class="slider__slide cell medium-4">
                                                          <div class="paragraph paragraph--type--topic topic--default topic index-">
                                                            <div class="topic__category text--20">
                                                              Read
                                                            </div>
                                                            <div class="topic__headline-outer" data-equalizer-watch="" style="height: 180px;">
                                                              <h3 class="show-for-sr">
                                                                Curious about our responses to government data demands?
                                                              </h3>
                                                              <a href="/about/privacy/about/portal/transparency-report/" class=" topic__headline topic__headline-link h2" aria-hidden="true" tabindex="-1" target="_blank" rel="noopener noreferrer">
                                                                Curious about our responses to government data demands?
                                                              </a>
                                                            </div>
                                                            <div class="topic__bottom text--20">
                                                              <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                                <p>Our Transparency Report provides information about data requests we receive.<br>
                                                                <br>
                                                              </p>
                                                            </div>
                                                          </div>
                                                          <div class="topic__link">
                                                            <a href="/about/privacy/about/portal/transparency-report/" aria-label="  Curious about our responses to government data demands?
                                                              ,opens in new window" class=" topic__link text-align-right" target="_blank" rel="noopener noreferrer">
                                                              <span class="vzpp-icon-arrow-right topic__link-icon">
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="slider__slide cell medium-4">
                                                        <div class="paragraph paragraph--type--topic topic--default topic index-">
                                                          <div class="topic__category text--20">
                                                            Tips
                                                          </div>
                                                          <div class="topic__headline-outer" data-equalizer-watch="" style="height: 180px;">
                                                            <h3 class="show-for-sr">
                                                              Discover tips to keep your account secure.
                                                            </h3>
                                                            <a href="/about/privacy/about/account-security/overview/" class=" topic__headline topic__headline-link h2" aria-hidden="true" tabindex="-1" target="_blank" rel="noopener noreferrer">
                                                              Discover tips to keep your account secure.
                                                            </a>
                                                          </div>
                                                          <div class="topic__bottom text--20">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p class="MsoNormal">Protect yourself from frauds and scams.</p>
                                                              </div>
                                                            </div>
                                                            <div class="topic__link">
                                                              <a href="/about/privacy/about/account-security/overview/" aria-label="  Discover tips to keep your account secure.
                                                                ,opens in new window" class=" topic__link text-align-right" target="_blank" rel="noopener noreferrer">
                                                                <span class="vzpp-icon-arrow-right topic__link-icon">
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="slider__slide cell medium-4">
                                                        <div class="paragraph paragraph--type--topic topic--default topic index-">
                                                          <div class="topic__category text--20">
                                                            Read
                                                          </div>
                                                          <div class="topic__headline-outer" data-equalizer-watch="" style="height: 180px;">
                                                            <h3 class="show-for-sr">
                                                              Looking for support parenting in a digital world?
                                                            </h3>
                                                            <a href="/about/privacy/about/responsibility/parenting-in-a-digital-world/" class=" topic__headline topic__headline-link h2" aria-hidden="true" tabindex="-1" target="_blank" rel="noopener noreferrer">
                                                              Looking for support parenting in a digital world?
                                                            </a>
                                                          </div>
                                                          <div class="topic__bottom text--20">
                                                            <div class="field field--name-field-body field--type-text-long field--label-hidden field__item">
                                                              <p>Navigate tips and advice for your connected family.</p>
                                                              </div>
                                                            </div>
                                                            <div class="topic__link">
                                                              <a href="/about/privacy/about/responsibility/parenting-in-a-digital-world/" aria-label="  Looking for support parenting in a digital world?
                                                                ,opens in new window" class=" topic__link text-align-right" target="_blank" rel="noopener noreferrer">
                                                                <span class="vzpp-icon-arrow-right topic__link-icon">
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="slider__dots">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                        <section aria-label="Verizon privacy contact information" class="layout layout--threecol-section layout--threecol-section--33-34-33 layout--width-default layout--text-default layout--padding-top-zero layout--padding-bottom-zero">
                                          <div class="layout__container">
                                            <div class="layout__content">
                                              <div class="layout__grid grid-x grid-margin-x">
                                                <div class="layout__region cell medium-4">
                                                  <div class="block block--text">
                                                    <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                      <h3>Contact us with any questions or concerns related to privacy.</h3>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="layout__region cell medium-4">
                                                    <div class="block block--text">
                                                      <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                        <h4 class="margin-bottom--half h5">
                                                          <span class="vzpp-icon-document" aria-hidden="true">
                                                          </span>Write</h4>
                                                          <p class="text--20">Verizon Privacy Office<br>
                                                            1300 I Street, NW Suite 500 East<br>
                                                            Washington, DC 20005</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="layout__region cell medium-4">
                                                        <div class="block block--text">
                                                          <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                            <h4 class="margin-bottom--half h5">Online</h4>
                                                              <p class="text--20">Submit a <a href="/about/privacy/about/privacy/privacy-inquiries/" target="_blank" rel="noopener noreferrer">privacy inquiry form</a>.</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </section>
                                                </article>
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
                                                    <a class="gnav20-logoBlackBg" title="Verizon Home Page" href="/">
                                                    </a>
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
                                                        Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;">
                                                        <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_20__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
                                                      </a>
                                                    </a>
                                                  </li>
                                                  <li class="gnav20-hide">
                                                    <a data-show-for="appid:communitykh" href="https://community.verizon.com/t5/custom/page/page-id/yourprivacychoices">
                                                      Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;">
                                                      <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_21__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
                                                    </a>
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

                            <footer role="presentation" class="footer-container" aria-label="Supplemental links and company description">
                              <div class="footer-top">
                                <div class="grid-container">
                                  <div class="grid-x grid-margin-x">
                                    <div class="footer-top__cell medium-4 cell" aria-hidden="false">
                                      <nav aria-label="secondary navigation General Privacy Policies" id="block-menu-comprehensive" class="block-menu-comprehensive">
                                        <div class="block-title" id="block-menu-comprehensive-menu" aria-hidden="true">General Privacy Policies</div>
                                          <ul data-region="footer_top_1" class="menu menu--comprehensive-privacy-polic">
                                            <li class="menu-item">
                                              <a href="/about/privacy/about/privacy/" data-drupal-link-system-path="&lt;front&gt;" class="is-active">Verizon Privacy Policy Summary</a>
                                              </li>
                                              <li class="menu-item">
                                                <a href="/about/privacy/about/privacy/full-privacy-policy/" data-drupal-link-system-path="node/8">Full Verizon Privacy Policy</a>
                                                </li>
                                                <li class="menu-item">
                                                  <a href="/about/privacy/about/privacy/full-privacy-policy/">California Privacy</a>
                                                  </li>
                                                  <li class="menu-item">
                                                    <a href="/about/privacy/privacy/your-data/vz/">Verizon Privacy Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                      <a href="/about/privacy/about/privacy/fios-privacy-policy/" data-drupal-link-system-path="node/15">Fios Privacy Policy</a>
                                                      </li>
                                                      <li class="menu-item">
                                                        <a href="/about/privacy/about/privacy/international-privacy-centre/" data-drupal-link-system-path="node/47">International Privacy Centre</a>
                                                        </li>
                                                        <li class="menu-item">
                                                          <a href="https://www.visible.com/legal/privacy.html">Visible</a>
                                                          </li>
                                                        </ul>
                                                      </nav>
                                                    </div>
                                                    <div class="footer-top__cell medium-4 cell" aria-hidden="false">
                                                      <nav aria-label="secondary navigation Apps and Service Policies" id="block-menu-services" class="block-menu-services">
                                                        <div class="block-title" id="block-menu-services-menu" aria-hidden="true">Apps and Service Policies</div>
                                                          <ul data-region="footer_top_2" class="menu menu--service-and-app-privacy-pol">
                                                            <li class="menu-item">
                                                              <a href="/about/privacy/about/privacy/hum-privacy-policy/" data-drupal-link-system-path="node/9">Hum</a>
                                                              </li>
                                                              <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/verizon-family-privacy-notice/" data-drupal-link-system-path="node/515">Verizon Family</a>
                                                              </li>
                                                              <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/gizmo-privacy-policy/" data-drupal-link-system-path="node/11">Gizmo</a>
                                                              </li>
                                                              <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/wild-and-seek-privacy-policy/" data-drupal-link-system-path="node/12">Wild and Seek</a>
                                                              </li>
                                                              <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/care-smart-app/" data-drupal-link-system-path="node/177">Care Smart</a>
                                                              </li>
                                                            </ul>
                                                          </nav>
                                                        </div>
                                                        <div class="footer-top__cell medium-4 cell" aria-hidden="false">
                                                          <nav aria-label="secondary navigation Notices" id="block-notices" class="block-notices">
                                                            <div class="block-title" id="block-notices-menu" aria-hidden="true">Notices</div>
                                                              <ul data-region="footer_top_3" class="menu menu--affiliate-company-privacy-p">
                                                                <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/device-payment-agreement/" data-drupal-link-system-path="node/41">Mobile Device Installment Plan</a>
                                                              </li>
                                                              <li class="menu-item">
                                                                <a href="/about/privacy/about/privacy/automated-license-plate-recognition/" data-drupal-link-system-path="node/163">Automated License Plate Recognition</a>
                                                              </li>
                                                            </ul>
                                                          </nav>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </footer>
                                                <footer class="footer-container-bottom">
                                                  <div class="footer-top__cell medium-4 cell" aria-hidden="false">
                                                    <div id="block-privacyfootercopy" class="block-privacyfootercopy block block--text">
                                                      <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                        <script src="assets/www.verizon.com/about/privacy/core/assets/vendor/jquery/jquery.min.js"></script>
                                                        <script>
                                                        var vGlobalBackArrow = false;
                                                        window.onload = function() {
                                                        if (!vGlobalBackArrow) {
                                                        console.log('Privacy Home Page Load for Android Back Arrow issue !')
                                                        var jsonCallback =  {
                                                        "actionType":"updateNavigation",
                                                        "navigationBar":{
                                                        "moleculeName":"navigationBar",
                                                        "title":"Privacy Policy Home Page | About",
                                                        "alwaysShowBackButton":true,
                                                        "backButton":{
                                                        "moleculeName":"navigationImageButton",
                                                        "image":"nav_back",
                                                        "action":{
                                                        "title":"back",
                                                        "actionType":"back",
                                                        "pageType":"back"
                                                        },
                                                        "accessibilityText":"Back"
                                                        }
                                                        }
                                                        }

                                                        if (window.webkit != undefined) {
                                                        console.log('webkit undefined');
                                                        if (window.webkit.messageHandlers.mfAppInterface != undefined) {
                                                        console.log("inside messageHandlers");
                                                        window.webkit.messageHandlers.mfAppInterface.postMessage(JSON.stringify(jsonCallback));
                                                        }
                                                        }

                                                        if (window.mfAppInterface != undefined) {
                                                        console.log('mfAppInterface undefined');
                                                        window.mfAppInterface.postMessage(JSON.stringify(jsonCallback));
                                                        }
                                                        }
                                                        vGlobalBackArrow = true;
                                                        }
                                                        </script>
                                                        <script>

                                                        jQuery(window).on('load',function() {
                                                        // if (jQuery('[name="captcha_refresh"]').length > 0) {jQuery('[name="captcha_refresh"]').click();console.log('captchaPhrase refreshed onload!!!');}

                                                        // as per EOOV-16524, for account-security/overview page; onload accordions would be CLOSED
                                                        if (location.href.match(/(\/about\/account\-security\/overview|\/about\/privacy\/account\-security\/overview)/i) && jQuery('.accordion-close').length > 0) {
                                                        setTimeout(function() {
                                                        console.log('accordion close from footer block!');
                                                        jQuery(".open-close-accordion").click();
                                                        },1000);
                                                        } // if condition

                                                        //below code reverts issue#6 fix for EOOV-15605 (all anchors scroll along keyboard for shift tab)
                                                        jQuery(".block-mainpagecontent a").each(function() {
                                                        jQuery(this).off('focus');
                                                        });

                                                        jQuery('head').append('<style>.sticky-article-bookmark, .sticky-article-addln_resources {top:60px !important ;}</style>');
                                                        jQuery('head').append('<style>.node--type-article-landing-page .div_share_addln_resources {top: 150px !important;margin-top: 120px !important;}</style>');

                                                        setTimeout(function() {
                                                        if (location.href.match(/(\/privacy\/full\-privacy\-policy)/i)) {
                                                        //Maine
                                                        if (location.href.indexOf('scrollto=index-2') != -1) {
                                                        jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-2').offset().top-100}, 1200);
                                                        }
                                                        if (location.href.indexOf('scrollto=index-0') != -1) {
                                                        jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-0').offset().top-100}, 1200);
                                                        }
                                                        }


                                                        if (location.href.match(/(\/privacy\/full\-privacy\-policy)/i)) {
                                                        //Nevada index-5
                                                        if (location.href.indexOf('scrollto=index-5') != -1) {
                                                        jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-5').offset().top-100}, 1200);
                                                        }
                                                        //Virginial index-6
                                                        else if (location.href.indexOf('scrollto=index-6') != -1) {
                                                        jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-6').offset().top-100}, 1200);
                                                        }
                                                        }


                                                        }, 100)
                                                        });

                                                        //file-a-fraud fix EOOV-14010
                                                        if (location.href.match(/(\/about\/privacy\/account\-security\/file\-a\-fraud\-claim|\/about\/account\-security\/file\-a\-fraud\-claim)/i)) {
                                                        jQuery('.layout__region a:eq(0)').attr('onclick', 'javascript:fnLegalAgreement(1);'); // 1 - consumer
                                                        jQuery('.layout__region a:eq(1)').attr('onclick', 'javascript:fnLegalAgreement(2);'); // 2 - business
                                                        jQuery('.layout__region a').attr('href', 'javascript:void(0);');
                                                        }

                                                        // Onload function
                                                        jQuery(window).on('load',function() {

                                                        if (location.href.match(/(\/full\-privacy\-policy)/i)) {
                                                        //EOOV-14748
                                                        //Nevada
                                                        if (location.href.indexOf('scrollto=index-3') != -1) {
                                                        //jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-3').offset().top-100}, 1200);
                                                        }
                                                        //Maine
                                                        else if (location.href.indexOf('scrollto=index-4') != -1) {
                                                        //jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-4').offset().top-100}, 1200);
                                                        }
                                                        //California
                                                        else {
                                                        //jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-1').offset().top-100}, 1200);
                                                        }
                                                        //end EOOV-14748


                                                        }
                                                        });
                                                        //end onload
                                                        jQuery('.menu--cybersecurity-glossary li a').each(function( index2 ) {
                                                        if(window.location.href.toLowerCase().indexOf(jQuery(this).attr('href').toLowerCase())  != -1 || window.location.href.toLowerCase().replace('/privacy', '').indexOf(jQuery(this).attr('href').toLowerCase())  != -1 || window.location.href.toLowerCase().replace('/privacy', '').indexOf(jQuery(this).attr('href').toLowerCase().replace('https://www.verizon.com/about', ''))  != -1) {
                                                        //console.log(jQuery(this).attr('href'));
                                                        jQuery(this).parent().addClass('menu-item--active-trail');
                                                        jQuery(this).addClass('is-active');
                                                        }
                                                        });
                                                        // EOOV-13607
                                                        if (jQuery('ul.menu--cybersecurity-glossary').length > 0) {
                                                        //jQuery('.hero__container .hero__title').html(jQuery('.sbs__heading.h3').text());
                                                        jQuery('.hero__container .hero__title').html(jQuery('ul.menu--cybersecurity-glossary li.menu-item--active-trail').text());
                                                        }
                                                        // EOOV-13153
                                                        jQuery('ul.menu--cybersecurity-glossary').addClass('menu--tabs');
                                                        //EOOV-13224
                                                        if ($('[id^="webform-submission-business-fraud-claim"]').length > 0 || $('[id^="webform-submission-consumer-fraud-claim"]').length > 0) {
                                                        jQuery('footer div').remove();
                                                        }

                                                        if (location.href.match(/(\/privacy\/description\-processing\-personal\-data)/i)) {
                                                        jQuery('head').append('<style>#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody{border:none !important;}#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody tr td {border-right: 1px solid #ddd;}#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody tr td:last-child {border-right: none !important;}</style>');
                                                        }
                                                        jQuery(document).ready(function() {
                                                        if (jQuery('[value="webform_submission_privacy_inquiries_node_265_add_form"]').length > 0) {
                                                        jQuery('a:contains("Verizon Privacy Dashboard")').attr('href', 'https://www.verizon.com/privacy/your-data')
                                                        }
                                                        if (location.href.match(/(\/privacy\/description\-processing\-personal\-data)/i)) {
                                                        jQuery('head').append('<style>#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody{border:none !important;}#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody tr td {border-right: 1px solid #ddd;}#block-mainpagecontent .layout--singlecol-section .layout__container .layout__content .field--name-body > table > tbody tr td:last-child {border-right: none !important;}</style>');
                                                        }
                                                        });
                                                        </script>
                                                        <style>
                                                        .webform-submission-privacy-inquiries-updated-form .form-item.form-item-checkbox-mobile-phone-number, .webform-submission-privacy-inquiries-updated-form .form-item.form-item-mobile-phone-number, .webform-submission-privacy-inquiries-updated-form .form-item.form-item-checkbox-home-phone-number, .webform-submission-privacy-inquiries-updated-form .form-item.form-item-home-phone-number {
                                                        vertical-align:top;
                                                        }
                                                        .butContinue:focus .spanContinue {
                                                        outline: 1px dotted #000 !important;
                                                        outline-offset: 4px;
                                                        }
                                                        @media (min-width:1400px) {
                                                        .vzc_fclaim_is_right_claim_overlay.ui-widget.ui-widget-content {
                                                        top: 190px !important;
                                                        }
                                                        }
                                                        .vzc_fclaim_is_right_claim_overlay .ui-dialog-content h2#select_experience {
                                                        font-size: 24px;
                                                        line-height: 24px;
                                                        }
                                                        .ui-tooltip:before {
                                                        display: none !important;
                                                        }
                                                        .ui-tooltip.webform-element-help--tooltip {
                                                        border:1px solid #000 !important ;
                                                        }
                                                        @media screen and (min-width: 1200px) {
                                                        article[about*="aging"],
                                                        article[about*="cognitive"],
                                                        article[about*="hearing"],
                                                        article[about*="mobility"],
                                                        article[about*="neurodiverse"],
                                                        article[about*="vision"],
                                                        article[about*="resources-support"],
                                                        article[about*="contact-us"]  {
                                                        margin-top:-6rem;
                                                        }
                                                        }
                                                        article[about*="accessibility-faqs"] .hero_with_icon__container .hero-with-icon-left .hero_icon img {
                                                        width: 83px;
                                                        height: 83px;
                                                        max-width: 83px;
                                                        margin-bottom: 15px;
                                                        @media (max-width: 767px) {
                                                        width: 46px;
                                                        height: 46px;
                                                        max-width: 46px;
                                                        }
                                                        }
                                                        @media screen and (min-width: 1200px) {
                                                        article[about="/about/privacy/accessibility/accessibility-faqs"]  {
                                                        margin-top:-6rem;
                                                        }
                                                        }
                                                        @media (min-width: 1240px) {
                                                        article[about="/about/privacy/accessibility/accessibility-faqs"] .grid-container {
                                                        padding-left: 0 !important;
                                                        padding-right: 0 !important;
                                                        }
                                                        }
                                                        .modal-open .ui-dialog.ui-dialog--vzpp {
                                                        overflow-x: hidden !important;
                                                        }
                                                        @media screen and (max-width:767px) {
                                                        .table-m.hide-for-medium {
                                                        display: block !important;
                                                        }
                                                        .table--5col__mobile_content.table-m.hide-for-medium,  .table--6col__mobile_content.table-m.hide-for-medium{
                                                        display: none !important;
                                                        }
                                                        }
                                                        </style>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </footer>
                                                <script src="assets/www.verizon.com/about/privacy/sites/default/files/js/js_6ywHZGkMnxuE-e0V336W92RnAX8vPGhMCouh71CqsY4.js"></script>
                                                <script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/corporate.js"></script>
                                                <div class="gnav20-click-div">
                                                </div>
                                                <div id="drupal-modal" class="ui-front" style="display: none;">
                                                </div>
                                              </body>
                                              <b tabindex="-1" aria-hidden="true" style="position: absolute; left: -1000px;">
                                                <iframe style="display: none;">
                                                </iframe>
                                              </b>
                                            </html>
