<?php
declare(strict_types=1);
require_once __DIR__ . '/../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <!-- offline: marketing stripped -->
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
    <style id="offline-pdp-fix">
    nextjs-portal, [data-nextjs-dialog] { display: none !important; }
    body { overflow: auto !important; }
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
    <base href="/verizon-clone/verizon_offline/">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" as="image" href="assets/ss7.vzw.com/is/image/VerizonWireless/About%20Image%2019/?$pngAlpha$&amp;resMode=bilin&amp;wid=300">
    <link rel="preload" as="image" href="assets/ss7.vzw.com/is/image/VerizonWireless/newsletter%20promotion/?resMode=sharp2&amp;scl=1">
    <link rel="preload" as="image" href="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%202-1/?resMode=sharp2&amp;scl=1">
    <link rel="preload" as="image" href="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%203-1/?resMode=sharp2&amp;scl=1">
    <link rel="preload" as="image" href="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%204-1/?resMode=sharp2&amp;scl=1">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/337f3c3a2ec713e0.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/48f3d74c0a6c1d65.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/4243a613acc24a34.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/8c437bc54ae71bad.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/73294eaba03b2b20.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/c32b3d6417dd137a.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2b24209d6b4c219f.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/481a43aab453cdeb.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/535e19167a4cdb33.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d7fbedc164de1ac1.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/eeebac434a565043.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/1e0dab898f8f5b1c.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/769c3b7d8213d95b.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/b87a7fc3d1cb0737.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d29713a2c533eae5.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a00ccbafa1556e08.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d9701cf16aef2dbf.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/618257a5be5513ff.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/41976479bb691250.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/96deab900a267db4.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/e6b8090827ded7c3.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2439b0a1a94127ca.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/6f70e7c61dc30026.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/81f71769fa854f02.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a4a3d2026474bd2f.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/01032c1ed95624be.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/93283885295c03a8.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/3e6c26943d078a54.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a3f543f06c0a8303.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/8b3890352cd3dbe1.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a5b2a43742916441.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/f07ee4061143ad91.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/6a86c914601359b2.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/18fa579f7e3faef9.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/43907ecb9872957b.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/550c35f2a2a02be7.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2a925c73390e249c.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/ee2b52cdc0415197.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/1a2b26447e3340fe.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/285227a698e9ddc1.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/0815ac141cb66fb0.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/9d7ca9b319a63456.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/81dfc23e167717a3.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/c61ec24f487c9f16.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a8f64e11524d2634.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/5c4b906d1515d3cc.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/5b38952375a5df4a.css" data-precedence="next">
    <link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/0214608af39874a3.css" data-precedence="next">
    <link rel="preload" as="script" fetchpriority="low" href="assets/www.verizon.com/about/nextgen/_next/static/chunks/webpack-e78511fa2285c30e.js">
    <link rel="preload" href="assets/ss7.vzw.com/is/image/VerizonWireless/Verizon%5FGlowWordmark%5FRGB/?$pngalpha$&amp;resMode=sharp2&amp;scl=1" as="image">
    <link rel="preload" as="script" href="/about/vz/xdi.js">
    <title>Verizon Company Information, News, Leadership, Community &amp; More</title>
      <meta name="description" content="Learn about Verizon's core values, leadership, investor relations, career opportunities, outreach programs, and the latest news on our products and network solutions.">
      <meta name="robots" content="index, follow">
      <link rel="canonical" href="/about/about/">
      <meta property="og:title" content="Verizon Company Information, News, Leadership, Community &amp; More">
      <meta property="og:description" content="Learn about Verizon's core values, leadership, investor relations, career opportunities, outreach programs, and the latest news on our products and network solutions.">
      <meta property="og:url" content="https://www.verizon.com">
      <meta property="og:site_name" content="Verizon About">
      <meta property="og:type" content="website">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@verizon">
      <meta name="twitter:creator" content="@verizon">
      <meta name="twitter:title" content="Verizon Company Information, News, Leadership, Community &amp; More">
      <meta name="twitter:description" content="Learn about Verizon's core values, leadership, investor relations, career opportunities, outreach programs, and the latest news on our products and network solutions.">
      <link rel="icon" href="/about/favicon.ico" type="image/x-icon" sizes="16x16">
      <link rel="stylesheet" href="assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css">
      <script>var gnavdl = {"bu":"corporate","appid":"corpweb","impltype":"ssi","options":{"sticky":"true"}};</script>
      <script type="text/javascript" src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/corporate.js"></script>
    </head>
    <body style="margin:0">
      <header id="vz-gh20">
        <div class="gnav20 gnav20-sticky" data-exp-name="Corporate" role="banner">
          <input type="hidden" id="cradle-context">
          <div class="gnav20-sticky-content">
            <div class="gnav20-apicomponentnewdesign">
              <a class="gnav20-header-accessibility" tabindex="0" href="/about/about/accessibility/overview/">
                <span>Accessibility Resource Center</span>
                </a>
                <a class="gnav20-header-accessibility" href="#gnav20-header-end" tabindex="0" id="gnav20-skip-to-main-content-id">
                  <span>Skip to main content</span>
                  </a>
                  <div class="gnav20-width-wrapper gnav20-new-design gnav20-new-search-style gnav20-promo-bottom gnav20-featured" data-gnav20-container="header">
                    <div>
                    </div>
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
                                    <a id="gnav20-eyebrow-link-About-Us" href="/about/about/" data-label="About Us" aria-label="Verizon About Us Services HomePage" class="gnav20-main-header gnav20-selected">About Us</a>
                                      <a id="gnav20-eyebrow-link-Careers" href="https://mycareer.verizon.com/" data-label="Careers" aria-label="Verizon Careers Services HomePage" class="gnav20-main-header ">Careers</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="gnav20-utility">
                                  <div class="gnav20-store">
                                    <div class="gnav20-utility-wrapper" item-title="store">
                                      <div>
                                        <a aria-label="Support" href="/about/support/" rel="noopener noreferrer" target="_blank" data-label="Support">
                                          Support
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="gnav20-row-two">
                                <div class="gnav20-grid1-wrapper">
                                  <div class="gnav20-logo">
                                    <div class="gnav20-logo-wrapper gnav20-relative-index">
                                      <a class="gnav20-logoWhiteBg" title="About Verizon" href="/about/about/">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="gnav20-navigation opacityOne">
                                  <div class="gnav20-navigation opacityOne">
                                    <div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">
                                      <div class="gnav20-navigation-item">
                                        <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                          <button id="gnav20-About-Us-L1" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">About Us</button>
                                            <button id="gnav20-About-Us-L1-goback" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">About Us</button>
                                              <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/" tabindex="-1">About Us</a>
                                                <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                  <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li>
                                                        <a id="gnav20-About-Us-L2-1" href="/about/about/">About Us Overview
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-About-Us-L2-2" class="gnav20-haschild " href="/about/about/our-company/who-we-are/">Who We Are
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Who We Are menu list" aria-expanded="false" role="button">Who We Are
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-About-Us-L3-1" href="/about/about/our-company/who-we-are/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-2" href="/about/about/our-company/diversity-and-inclusion/">Our Culture
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-3" href="/about/about/our-company/history-and-timeline/">History and Timeline
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-4" href="/about/about/our-company/verizon-corporate-headquarters/">Headquarters &amp; Contact Info
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-5" href="/about/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-6" href="/about/about/our-company/executive-bios/">Leadership
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-About-Us-L2-3" class="gnav20-haschild " href="/about/about/our-company/what-we-do/">What We Do
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="What We Do menu list" aria-expanded="false" role="button">What We Do
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-About-Us-L3-7" href="/about/about/our-company/what-we-do/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-8" href="/about/about/our-company/innovation-labs/">Innovation Labs
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-9" href="/about/about/our-company/high-speed-broadband/">Broadband &amp; Fiber
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-10" href="/about/about/our-company/internet-things/">Internet of Things
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-11" href="/about/about/our-company/managed-security/">Managed Security
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-12" href="/about/about/our-company/verizon-ventures/">Verizon Ventures
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-About-Us-L2-4" class="gnav20-haschild " href="/about/about/our-company/how-we-lead/">How We Lead
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="How We Lead menu list" aria-expanded="false" role="button">How We Lead
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-About-Us-L3-13" href="/about/about/our-company/how-we-operate/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-14" href="/about/about/our-company/code-conduct/">Code of Conduct
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-15" href="/about/about/our-company/how-we-lead/management-governance/">Management Governance
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-16" href="/about/about/our-company/open-internet/">Open Internet
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-17" href="/about/about/our-company/company-policies/">Policies
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-18" href="/about/about/our-company/retiree-information/">Retiree Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-19" href="/about/about/our-companystate-government-affairs/">State Government Affairs
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close About Us menu list" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-News-L1" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">News</button>
                                                      <button id="gnav20-News-L1-goback" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">News</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/news/" tabindex="-1">News</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-News-L2-1" class="gnav20-haschild " href="/about/about/news/">News
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-1-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News menu list" aria-expanded="false" role="button">News
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-News-L3-1" href="/about/about/news/">News
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-2" href="/about/about/news-category/networks-platforms/">Networks &amp; Platforms
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-3" href="/about/about/news-category/products-plans/">Products &amp; Plans
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-4" href="/about/about/news-category/corporate-responsibility/">Responsible Business
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-5" href="/about/about/news-category/financial/">Financial
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-6" href="/about/about/news-category/public-safety/">Public Safety
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-7" href="/about/about/news-category/noticias/">Noticias
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-8" href="/about/about/news/news-alert-signup/">News Alerts Signup
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-News-L2-2" class="gnav20-haschild " href="/about/about/news/press-releases/">Press Releases
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Press Releases menu list" aria-expanded="false" role="button">Press Releases
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-News-L3-9" href="/about/about/news/press-releases/">Press Releases
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-10" href="/about/about/news/media-contacts/">Media Contacts
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-11" href="/about/about/news/media-resources/" rel="noopener noreferrer" target="_blank">B-roll and images
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-12" href="/about/about/news/rss-feeds/">RSS Feeds
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-13" href="/about/about/news/emergency-resource-center/">Emergency resource center
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-14" href="/about/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close News menu list" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-Responsibility-L1" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Responsibility</button>
                                                      <button id="gnav20-Responsibility-L1-goback" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Responsibility</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/responsibility/" tabindex="-1">Responsibility</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-Responsibility-L2-1" href="/about/about/responsibility/">Responsibility Overview
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                              </div>
                                                            </li>
                                                            <li class="gnav20-bold-link gnav20-margin-top">
                                                              <a id="gnav20-Responsibility-L2-2" class="gnav20-haschild " href="/about/about/responsibility/digital-inclusion/">Digital Inclusion
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Digital Inclusion menu list" aria-expanded="false" role="button">Digital Inclusion
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-Responsibility-L3-1" href="/about/about/responsibility/digital-inclusion/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-2" href="/about/about/responsibility/digital-inclusion/verizon-innovative-learning/">Verizon Innovative Learning
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-3" href="/about/about/responsibility/digital-inclusion/small-business-program/">Small Business Program
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-4" href="/about/about/responsibility/digital-inclusion/digital-wellness/">Digital Wellness
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-5" href="/about/about/responsibility/digital-inclusion/value-cares/">Value Cares
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-3" class="gnav20-haschild " href="/about/about/responsibility/environmental-responsibility/">Environmental Responsibility
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Environmental Responsibility menu list" aria-expanded="false" role="button">Environmental Responsibility
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-7" href="/about/about/responsibility/environmental-responsibility/community-disaster-resilience/">Community Disaster Resilience
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-8" href="/about/about/responsibility/environmental-responsibility/community-disaster-resilience-innovation/">Community Disaster Resilience Innovation
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-9" href="/about/about/responsibility/sustainability/">Sustainability
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Responsibility-L2-4" class="gnav20-haschild " href="/about/about/responsibility/human-prosperity/">Human Prosperity
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Human Prosperity menu list" aria-expanded="false" role="button">Human Prosperity
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-10" href="/about/about/responsibility/human-prosperity/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-17" href="/about/about/responsibility/human-prosperity/workforce-development/">Workforce Development
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-18" href="/about/about/our-companysmall-business-supplier/">Small Business Supplier Program
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-19" href="/about/about/responsibility/employee-volunteers/">Employee Volunteers
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-5" class="gnav20-haschild " href="/about/about/responsibility/giving-and-grants/">Sharing our Success
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-5-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Sharing our Success menu list" aria-expanded="false" role="button">Sharing our Success
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-14" href="/about/about/responsibility/giving-and-grants/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-15" href="/about/about/responsibility/grant-requirements/">Giving and Grants
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-6" class="gnav20-haschild " href="/about/about/responsibility/product-responsibility/">Product Responsibility
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-6-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Product Responsibility menu list" aria-expanded="false" role="button">Product Responsibility
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-11" href="/about/about/responsibility/product-responsibility/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-12" href="/about/about/account-security/overview/">Account Security
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-13" href="/about/about/privacy/">Privacy Policy
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-column-break">
                                                        <a id="gnav20-Responsibility-L2-7" class="gnav20-haschild " href="/about/about/parenting/parenting-in-a-digital-world/">Parenting in a Digital World
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-7-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Parenting in a Digital World menu list" aria-expanded="false" role="button">Parenting in a Digital World
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-20" href="/about/about/parenting/parenting-in-a-digital-world/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-21" href="/about/about/parenting/digital-parenting-101/">Digital Parenting 101
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-22" href="/about/about/parenting/young-children/">Young children 3-8
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-23" href="/about/about/parenting/preteens/">Preteens 9-12
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-24" href="/about/about/parenting/teenagers/">Teenagers 13-18
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-25" href="/about/about/parenting/parenting-tips/">By topic
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-26" href="/about/about/parenting/meet-the-experts/">Meet the editorial team
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Responsibility menu list" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-Investors-L1" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Investors</button>
                                                      <button id="gnav20-Investors-L1-goback" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Investors</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/investors/" tabindex="-1">Investors</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-Investors-L2-1" href="/about/about/investors/">Investor Relations overview
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                              </div>
                                                            </li>
                                                            <li class="gnav20-margin-top">
                                                              <a id="gnav20-Investors-L2-2" class="gnav20-haschild " href="/about/about/investors/financial-reporting/">Financial Reporting
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Financial Reporting menu list" aria-expanded="false" role="button">Financial Reporting
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-Investors-L3-1" href="/about/about/investors/financial-reporting/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-2" href="/about/about/investors/sec-filings/">SEC Filings
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-3" href="/about/about/investors/annual-report/">Annual Reports
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-4" href="/about/about/investors/quarterly-earnings/">Quarterly Earnings
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-5" href="/about/about/investors/stock-information/">Stock Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-6" href="/about/about/investors/dividend-history/">Dividend History
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-7" href="/about/about/investors/tax-information/">Tax Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-8" href="/about/about/investors/fixed-income/">Fixed Income
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-9" href="/about/about/investors/asset-backed-securitization/">Asset-backed Securitization
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Investors-L2-3" class="gnav20-haschild " href="/about/about/investors/corporate-governance/">Corporate Governance
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Corporate Governance menu list" aria-expanded="false" role="button">Corporate Governance
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-13" href="/about/about/investors/corporate-governance/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-14" href="/about/about/investors/board-directors/">Board of Directors
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-15" href="/about/about/investors/corporate-governance/board-committees/">Board Committees
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-4" class="gnav20-haschild " href="/about/about/investors/shareowner-services/">Shareowner Services
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Shareowner Services menu list" aria-expanded="false" role="button">Shareowner Services
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-16" href="/about/about/investors/shareowner-services/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-17" href="/about/about/investors/cost-basis-calculator/">Cost Basis Calculator
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-18" href="/about/about/investors/shareowner-faqs/">Shareowner FAQs
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-5" class="gnav20-haschild " href="/about/about/investors/responsible-business-reporting/">Responsible Business Reporting
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-5-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Responsible Business Reporting menu list" aria-expanded="false" role="button">Responsible Business Reporting
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-19" href="/about/about/investors/reporting/">Overview
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Investors-L2-6" class="gnav20-haschild " href="/about/about/investors/investor-news/">News &amp; Events
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-6-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News &amp; Events menu list" aria-expanded="false" role="button">News &amp; Events
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
                                                            <li>
                                                              <a id="gnav20-Investors-L3-10" href="/about/about/investors/investor-webcasts/">Investor Events &amp; Webcasts
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-11" href="/about/about/investors/investor-calendar/">Investor Calendar
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-12" href="/about/about/investors/email-alerts/">Email Alerts
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-7" href="/about/about/investors/contact-investor-relations/">Contact Investor Relations
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Investors menu list" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
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
                                                  <input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context" name="isProd" value="true">
                                                  <button class="gnav20-search-icon" id="gnav20-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                  </button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gnav20-mobile   gnav20-stacked-utility" item-title="all">
                                        <div class="gnav20-wrapper-logo">
                                          <div class="gnav20-logo">
                                            <div class="gnav20-logo-wrapper gnav20-relative-index">
                                              <a class="gnav20-logoWhiteBg" title="About Verizon" href="/about/about/">
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gnav20-utility opacityOne">
                                          <div class="gnav20-search-utility">
                                            <div class="gnav20-utility-wrapper" item-title="search">
                                              <div class="gnav20-search-wrapper">
                                                <input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context-mobile" name="isProd" value="true">
                                                <button class="gnav20-search-icon" id="gnav20-search-icon-mobile" aria-label="Search Verizon" data-placeholder-text="Search Verizon">
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                          <button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0" aria-label="Menu for navigation opens a modal overlay">
                                          </button>
                                        </div>
                                        <nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
                                          <button id="gnav20-closex" class="gnav20-closex" aria-label="close the Menu" tabindex="0">Close</button>
                                            <div id="gnav20-ulwrapper">
                                              <a id="gnav20-eyebrow-link-About-Us-mobile" href="/about/about/" data-label="About Us" aria-label="Verizon About Us Services HomePage" class="gnav20-main-header gnav20-selected">About Us</a>
                                                <div class="gnav20-navigation-placeholder">
                                                  <div class="gnav20-navigation">
                                                    <div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">
                                                      <div class="gnav20-navigation-item">
                                                        <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                          <button id="gnav20-About-Us-L1-mobile" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">About Us</button>
                                                            <button id="gnav20-About-Us-L1-goback-mobile-goback" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">About Us</button>
                                                              <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/" tabindex="-1">About Us</a>
                                                                <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                                <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                                <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-About-Us-L2-1-mobile" href="/about/about/">About Us Overview
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                              </div>
                                                            </li>
                                                            <li class="gnav20-margin-top">
                                                              <a id="gnav20-About-Us-L2-2-mobile" class="gnav20-haschild " href="/about/about/our-company/who-we-are/">Who We Are
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Who We Are menu list" aria-expanded="false" role="button">Who We Are
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-About-Us-L3-1-mobile" href="/about/about/our-company/who-we-are/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-2-mobile" href="/about/about/our-company/diversity-and-inclusion/">Our Culture
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-3-mobile" href="/about/about/our-company/history-and-timeline/">History and Timeline
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-4-mobile" href="/about/about/our-company/verizon-corporate-headquarters/">Headquarters &amp; Contact Info
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-5-mobile" href="/about/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-6-mobile" href="/about/about/our-company/executive-bios/">Leadership
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-About-Us-L2-3-mobile" class="gnav20-haschild " href="/about/about/our-company/what-we-do/">What We Do
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="What We Do menu list" aria-expanded="false" role="button">What We Do
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-About-Us-L3-7-mobile" href="/about/about/our-company/what-we-do/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-8-mobile" href="/about/about/our-company/innovation-labs/">Innovation Labs
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-9-mobile" href="/about/about/our-company/high-speed-broadband/">Broadband &amp; Fiber
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-10-mobile" href="/about/about/our-company/internet-things/">Internet of Things
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-11-mobile" href="/about/about/our-company/managed-security/">Managed Security
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-12-mobile" href="/about/about/our-company/verizon-ventures/">Verizon Ventures
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-About-Us-L2-4-mobile" class="gnav20-haschild " href="/about/about/our-company/how-we-lead/">How We Lead
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="How We Lead menu list" aria-expanded="false" role="button">How We Lead
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-About-Us-L3-13-mobile" href="/about/about/our-company/how-we-operate/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-14-mobile" href="/about/about/our-company/code-conduct/">Code of Conduct
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-15-mobile" href="/about/about/our-company/how-we-lead/management-governance/">Management Governance
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-16-mobile" href="/about/about/our-company/open-internet/">Open Internet
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-17-mobile" href="/about/about/our-company/company-policies/">Policies
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-18-mobile" href="/about/about/our-company/retiree-information/">Retiree Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-About-Us-L3-19-mobile" href="/about/about/our-companystate-government-affairs/">State Government Affairs
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Nav Panel" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-News-L1-mobile" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">News</button>
                                                      <button id="gnav20-News-L1-goback-mobile-goback" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">News</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/news/" tabindex="-1">News</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-News-L2-1-mobile" class="gnav20-haschild " href="/about/about/news/">News
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-1-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News menu list" aria-expanded="false" role="button">News
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-News-L3-1-mobile" href="/about/about/news/">News
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-2-mobile" href="/about/about/news-category/networks-platforms/">Networks &amp; Platforms
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-3-mobile" href="/about/about/news-category/products-plans/">Products &amp; Plans
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-4-mobile" href="/about/about/news-category/corporate-responsibility/">Responsible Business
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-5-mobile" href="/about/about/news-category/financial/">Financial
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-6-mobile" href="/about/about/news-category/public-safety/">Public Safety
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-7-mobile" href="/about/about/news-category/noticias/">Noticias
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-8-mobile" href="/about/about/news/news-alert-signup/">News Alerts Signup
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-News-L2-2-mobile" class="gnav20-haschild " href="/about/about/news/press-releases/">Press Releases
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Press Releases menu list" aria-expanded="false" role="button">Press Releases
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-News-L3-9-mobile" href="/about/about/news/press-releases/">Press Releases
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-10-mobile" href="/about/about/news/media-contacts/">Media Contacts
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-11-mobile" href="/about/about/news/media-resources/" rel="noopener noreferrer" target="_blank">B-roll and images
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-12-mobile" href="/about/about/news/rss-feeds/">RSS Feeds
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-13-mobile" href="/about/about/news/emergency-resource-center/">Emergency resource center
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-News-L3-14-mobile" href="/about/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Nav Panel" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-Responsibility-L1-mobile" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Responsibility</button>
                                                      <button id="gnav20-Responsibility-L1-goback-mobile-goback" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Responsibility</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/responsibility/" tabindex="-1">Responsibility</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-Responsibility-L2-1-mobile" href="/about/about/responsibility/">Responsibility Overview
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                              </div>
                                                            </li>
                                                            <li class="gnav20-bold-link gnav20-margin-top">
                                                              <a id="gnav20-Responsibility-L2-2-mobile" class="gnav20-haschild " href="/about/about/responsibility/digital-inclusion/">Digital Inclusion
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Digital Inclusion menu list" aria-expanded="false" role="button">Digital Inclusion
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-Responsibility-L3-1-mobile" href="/about/about/responsibility/digital-inclusion/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-2-mobile" href="/about/about/responsibility/digital-inclusion/verizon-innovative-learning/">Verizon Innovative Learning
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-3-mobile" href="/about/about/responsibility/digital-inclusion/small-business-program/">Small Business Program
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-4-mobile" href="/about/about/responsibility/digital-inclusion/digital-wellness/">Digital Wellness
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-5-mobile" href="/about/about/responsibility/digital-inclusion/value-cares/">Value Cares
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-3-mobile" class="gnav20-haschild " href="/about/about/responsibility/environmental-responsibility/">Environmental Responsibility
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Environmental Responsibility menu list" aria-expanded="false" role="button">Environmental Responsibility
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-7-mobile" href="/about/about/responsibility/environmental-responsibility/community-disaster-resilience/">Community Disaster Resilience
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-8-mobile" href="/about/about/responsibility/environmental-responsibility/community-disaster-resilience-innovation/">Community Disaster Resilience Innovation
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-9-mobile" href="/about/about/responsibility/sustainability/">Sustainability
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Responsibility-L2-4-mobile" class="gnav20-haschild " href="/about/about/responsibility/human-prosperity/">Human Prosperity
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Human Prosperity menu list" aria-expanded="false" role="button">Human Prosperity
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-10-mobile" href="/about/about/responsibility/human-prosperity/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-17-mobile" href="/about/about/responsibility/human-prosperity/workforce-development/">Workforce Development
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-18-mobile" href="/about/about/our-companysmall-business-supplier/">Small Business Supplier Program
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-19-mobile" href="/about/about/responsibility/employee-volunteers/">Employee Volunteers
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-5-mobile" class="gnav20-haschild " href="/about/about/responsibility/giving-and-grants/">Sharing our Success
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-5-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Sharing our Success menu list" aria-expanded="false" role="button">Sharing our Success
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-14-mobile" href="/about/about/responsibility/giving-and-grants/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-15-mobile" href="/about/about/responsibility/grant-requirements/">Giving and Grants
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Responsibility-L2-6-mobile" class="gnav20-haschild " href="/about/about/responsibility/product-responsibility/">Product Responsibility
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-6-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Product Responsibility menu list" aria-expanded="false" role="button">Product Responsibility
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-11-mobile" href="/about/about/responsibility/product-responsibility/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-12-mobile" href="/about/about/account-security/overview/">Account Security
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-13-mobile" href="/about/about/privacy/">Privacy Policy
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-column-break">
                                                        <a id="gnav20-Responsibility-L2-7-mobile" class="gnav20-haschild " href="/about/about/parenting/parenting-in-a-digital-world/">Parenting in a Digital World
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-7-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Parenting in a Digital World menu list" aria-expanded="false" role="button">Parenting in a Digital World
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Responsibility-L3-20-mobile" href="/about/about/parenting/parenting-in-a-digital-world/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-21-mobile" href="/about/about/parenting/digital-parenting-101/">Digital Parenting 101
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-22-mobile" href="/about/about/parenting/young-children/">Young children 3-8
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-23-mobile" href="/about/about/parenting/preteens/">Preteens 9-12
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-24-mobile" href="/about/about/parenting/teenagers/">Teenagers 13-18
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-25-mobile" href="/about/about/parenting/parenting-tips/">By topic
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Responsibility-L3-26-mobile" href="/about/about/parenting/meet-the-experts/">Meet the editorial team
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Nav Panel" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="gnav20-navigation-item">
                                                  <div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
                                                    <button id="gnav20-Investors-L1-mobile" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Investors</button>
                                                      <button id="gnav20-Investors-L1-goback-mobile-goback" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Investors</button>
                                                        <a aria-hidden="true" class="gnav20-menu-label-link" href="/about/about/investors/" tabindex="-1">Investors</a>
                                                          <div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
                                                            <div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
                                                              <ul class="gnav20-submenu-column gnav20-L1 ">
                                                                <li>
                                                                <a id="gnav20-Investors-L2-1-mobile" href="/about/about/investors/">Investor Relations overview
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                              </div>
                                                            </li>
                                                            <li class="gnav20-margin-top">
                                                              <a id="gnav20-Investors-L2-2-mobile" class="gnav20-haschild " href="/about/about/investors/financial-reporting/">Financial Reporting
                                                              </a>
                                                              <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Financial Reporting menu list" aria-expanded="false" role="button">Financial Reporting
                                                              </a>
                                                              <div class="gnav20-L2-content-wrapper">
                                                                <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                                <li class="gnav20-hide-on-desktop">
                                                                <a id="gnav20-Investors-L3-1-mobile" href="/about/about/investors/financial-reporting/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-2-mobile" href="/about/about/investors/sec-filings/">SEC Filings
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-3-mobile" href="/about/about/investors/annual-report/">Annual Reports
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-4-mobile" href="/about/about/investors/quarterly-earnings/">Quarterly Earnings
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-5-mobile" href="/about/about/investors/stock-information/">Stock Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-6-mobile" href="/about/about/investors/dividend-history/">Dividend History
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-7-mobile" href="/about/about/investors/tax-information/">Tax Information
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-8-mobile" href="/about/about/investors/fixed-income/">Fixed Income
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-9-mobile" href="/about/about/investors/asset-backed-securitization/">Asset-backed Securitization
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Investors-L2-3-mobile" class="gnav20-haschild " href="/about/about/investors/corporate-governance/">Corporate Governance
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Corporate Governance menu list" aria-expanded="false" role="button">Corporate Governance
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-13-mobile" href="/about/about/investors/corporate-governance/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-14-mobile" href="/about/about/investors/board-directors/">Board of Directors
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-15-mobile" href="/about/about/investors/corporate-governance/board-committees/">Board Committees
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-4-mobile" class="gnav20-haschild " href="/about/about/investors/shareowner-services/">Shareowner Services
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Shareowner Services menu list" aria-expanded="false" role="button">Shareowner Services
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-16-mobile" href="/about/about/investors/shareowner-services/">Overview
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-17-mobile" href="/about/about/investors/cost-basis-calculator/">Cost Basis Calculator
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-18-mobile" href="/about/about/investors/shareowner-faqs/">Shareowner FAQs
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-5-mobile" class="gnav20-haschild " href="/about/about/investors/responsible-business-reporting/">Responsible Business Reporting
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-5-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Responsible Business Reporting menu list" aria-expanded="false" role="button">Responsible Business Reporting
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li class="gnav20-hide-on-desktop">
                                                              <a id="gnav20-Investors-L3-19-mobile" href="/about/about/investors/reporting/">Overview
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <ul class="gnav20-submenu-column gnav20-L1 ">
                                                      <li class="gnav20-bold-link gnav20-column-break">
                                                        <a id="gnav20-Investors-L2-6-mobile" class="gnav20-haschild " href="/about/about/investors/investor-news/">News &amp; Events
                                                        </a>
                                                        <a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-6-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News &amp; Events menu list" aria-expanded="false" role="button">News &amp; Events
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                          <ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
                                                            <li>
                                                              <a id="gnav20-Investors-L3-10-mobile" href="/about/about/investors/investor-webcasts/">Investor Events &amp; Webcasts
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-11-mobile" href="/about/about/investors/investor-calendar/">Investor Calendar
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a id="gnav20-Investors-L3-12-mobile" href="/about/about/investors/email-alerts/">Email Alerts
                                                              </a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                      </li>
                                                      <li class="gnav20-margin-top">
                                                        <a id="gnav20-Investors-L2-7-mobile" href="/about/about/investors/contact-investor-relations/">Contact Investor Relations
                                                        </a>
                                                        <div class="gnav20-L2-content-wrapper">
                                                        </div>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="gnav20-nav-utility">
                                                    <button class="gnav20-nav-search-icon" aria-label="Search Verizon">
                                                    </button>
                                                    <button class="gnav20-nav-close" aria-label="Close Nav Panel" tabindex="0">Close</button>
                                                    </div>
                                                    <div class="gnav20-nav-mask" aria-hidden="true">&nbsp;</div>
                                                      <div class="gnav20-placeholder-1" style="display:none">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="gnav20-footerlink">
                                            <div class="gnav20-store">
                                              <div class="gnav20-utility-wrapper" item-title="store">
                                                <div>
                                                  <a aria-label="Support" href="/about/support/" rel="noopener noreferrer" target="_blank">
                                                    Support
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gnav20-eyebrow">
                                          <div class="gnav20-eyebrow-link-list" item-title="eyebrow">
                                            <div class="gnav20-eyebrow-link-list-item gnav20-two">
                                              <a id="gnav20-eyebrow-link-Careers-mobile" href="https://mycareer.verizon.com/" data-label="Careers" aria-label="Verizon Careers Services HomePage" class="gnav20-main-header ">Careers</a>
                                              </div>
                                            </div>
                                          </div>
                                        </nav>
                                      </div>
                                    </div>
                                  </div>
                                  <div>
                                    <div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="gnav20-prod-context" name="isProd" value="true">
                                </div>
                                <div name="headerEnd" id="gnav20-header-end" role="none" aria-hidden="true" tabindex="-1" aria-label="end of navigation menu">
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
                            <div class="gnav20-sticky-header gnav20-new-design" style="height: 121px;">
                            </div>
                          </div>
                        </div>
                      </header>
                      <main>
                        <div class="announcement-bar_container__5AgRI announcement-bar_red__Caa8Q" id="«R17n9nb»" style="--announcement-bar-height: 0px;">
                          <div class="announcement-bar_innerWrapper__cGcHK">
                            <div class="announcement-bar_textWrapper__rajqm">
                              <div class="announcement-bar_inlineContent__D9aTW">
                                <p class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd" style="--base-text-color: var(--vds-color-element-primary-ondarkbrandhighlight);">
                                  <span class="rich-text_wrapper__C_mKL rich-text_backgroundColor-darkbrandhighlight__0_xzW">
                                    <span style="white-space: pre-wrap;">Get email updates with the latest stories, insights, and news from Verizon. <a class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__pKypF VDS__MON__text-link-module__i1Yk6" href="/about/about/news/news-alert-signup/" role="link" aria-label="Sign up for Verizon News Alerts" data-testid="text-link" tabindex="0">
                                      <span class="VDS__MON-textlink-hitarea">
                                      </span>
                                      <span class="VDS__MON-textlink-childcontainer">Sign up for Verizon News Alerts</span>
                                      </a>
                                    </span>
                                  </span>
                                </p>
                              </div>
                            </div>
                            <span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 2rem;">
                              <button type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm      VDS__MON__icon-button-module__YDvRc" data-testid="announcement-bar-close-button" role="button" aria-label="Close announcement" aria-disabled="false" aria-hidden="false" tabindex="0">
                                <span class="VDS__MON__icon-button-module__xDEgX">
                                </span>
                                <span class="VDS__MON__icon-button-module__fpD9y">
                                  <svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="false" aria-label="close icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-ondarkprimary)" style="color: var(--vds-color-element-primary-ondarkprimary);"><title>close icon</title> <path d="M11.59,10.8l7.11,7.1-.8.8-7.1-7.11L3.7,18.7l-.8-.8L10,10.8,2.9,3.7l.8-.8L10.8,10,17.9,2.9l.8.8Z"> </path></svg>
                                </span>
                              </button>
                            </span>
                          </div>
                        </div>
                        <div style="background:var(--vds-color-surface-undefined)" class="app_mainWrapper__12DSR">
                          <div class="app_main__Wyppx">
                            <div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" style="width:100%">
                              <a id="base-block-hidden-anchor-undefined" tabindex="-1">
                              </a>
                              <div class="base-block_contentWrapper__5oAUk hero-block_heroSectionWrapper__9B4xE" style="--padding-left-desktop:0px;--padding-right-desktop:0px;--padding-left-tablet:0px;--padding-right-tablet:0px;--padding-left-mobile:0px;--padding-right-mobile:0px;--desktop-content-max-width:100%">
                                <div class="hero-block_heroWrapper__ZIeUh hero-block_fullscreen__mbOiD " style="--desktop-large-fixed-border-radius:var(--vds-tiles-border-radius-hero)" id="hero-wrapper">
                                  <div class="hero_container__Mv1Qr hero_showBorder__hQ3kL" style="--hero-height:100vh">
                                    <div class="hero_videoWrapper__nwiVx" style="height:100vh">
                                      <div class="video_videoContainer__ZxTwq" style="--height:100%">
                                        <div class="video_playingVideoWrapper__M0oRq video_notFullscreen__dLGsQ video_fixedHeight__0nJvO video_displayFullscreen__T51z2">
                                          <div class="VDS__MON__video-module__yX96C">
                                            <div class="VDS__MON__video-module__Bc13- VDS__MON__video-module__c6bwC VDS__MON__video-module__zdS5M" style="min-width:768px;aspect-ratio:16/9;cursor:default" tabindex="-1" role="group" aria-label="" data-testid="wrapper">
                                              <div class="VDS__MON__video-module__MWGIZ">
                                                <div aria-live="polite" aria-atomic="true">
                                                </div>
                                              </div>
                                              <div class="VDS__MON__video-module__17-1B VDS__MON__video-module__cxSM2 VDS__MON__video-module__pRWLv" aria-hidden="true">
                                                <video id="intro" crossorigin="anonymous" muted="" loop="" autoplay="" preload="auto" playsinline="" tabindex="-1" poster="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20hero%20video-1?resMode=sharp2&amp;scl=1">
                                                  <source src="assets/ss7.vzw.com/is/content/VerizonWireless/IVA/abtvz-cms-uploads/About%20-%20hero%20video.mp4">
                                                  <track kind="captions">
                                                </video>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="hero_textOverlay__vvR97">
                                      <div class="hero_textWrapper__I_0I8">
                                        <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                          <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center">
                                            <div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%">
                                              <h1 style="--base-text-color:var(--vds-color-element-primary-ondarkprimary);--tablet-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-2xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-ondarkprimary);--desktop-fontfamily:var(--vds-typography-feature-medium-fontfamily);--desktop-fontsize:var(--vds-typography-feature-medium-fontsize);--desktop-fontweight:var(--vds-typography-feature-medium-fontweight-bold);--desktop-lineheight:var(--vds-typography-feature-medium-lineheight);--desktop-letterspacing:var(--vds-typography-feature-medium-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-ondarkprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__SzwJP VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Life is better
                                                with Verizon</h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="hero-block_iconWithTextWrapper__n676H">
                                    <div class="hero-block_buttonIconOverlay__aERKj">
                                      <div class="hero-block_wrapper___ApFn">
                                        <div class="hero-block_buttonIconTextWrapper__Tx3Zb">
                                          <p style="--base-text-color:var(--vds-color-element-primary-ondarkprimary);--mobile-fontfamily:var(--vds-typography-body-small-fontfamily);--mobile-fontsize:var(--vds-typography-body-small-fontsize);--mobile-fontweight:var(--vds-typography-body-small-fontweight-regular);--mobile-lineheight:var(--vds-typography-body-small-lineheight);--mobile-letterspacing:var(--vds-typography-body-small-letterspacing-regular);--mobile-color:var(--vds-color-element-primary-ondarkprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB">Scroll down</p>
                                          </div>
                                          <div class="hero-block_buttonIconWrapper__cbJrC">
                                            <span class="VDS__MON__icon-button-module__4c71Y" style="height:2.75rem;width:2.75rem;--ghost-fit-icon:2.75rem">
                                              <button type="button" class="VDS__MON__icon-button-module__pkRRU  VDS__MON__icon-button-module__V2sdm      VDS__MON__icon-button-module__58T9r" data-testid="icon-button" role="button" aria-label="Scroll down" aria-disabled="false" aria-hidden="false" tabindex="0">
                                                <span class="VDS__MON__icon-button-module__xDEgX">
                                                </span>
                                                <span class="VDS__MON__icon-button-module__fpD9y">
                                                  <svg class="VDS__MON__icon-base-module__DAtvV" style="width:32px;height:32px;max-height:32px;max-width:32px" role="img" aria-hidden="false" aria-label="down-caret icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-ondarkprimary)"><title>down-caret icon</title> <polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"> </polygon></svg>
                                                </span>
                                              </button>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="base-block_container__ZFzh0 base-block_lightbrandneutral__ltTHw" id="68a8921a0b6647c1a2bba7d2" style="width:100%">
                                  <a id="base-block-hidden-anchor-68a8921a0b6647c1a2bba7d2" tabindex="-1">
                                  </a>
                                  <div class="base-block_contentWrapper__5oAUk featured-statement_section__jJkFW" style="--padding-left-mobile:0px;--padding-right-mobile:0px;--padding-left-tablet:0px;--padding-right-tablet:0px;--padding-left-desktop:0px;--padding-right-desktop:0px;--desktop-content-max-width:100%">
                                    <div class="featured-statement_content__2qP8y" style="--image-width-mobile:120px;--image-width-tablet:181px;--image-width-desktop:275px">
                                      <div class="featured-statement_imageLeftSection__JWiKs">
                                        <div class="image_imageContainer__3nvQM" style="height:100%" aria-hidden="true">
                                          <picture>
                                            <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/About%20Image%2018$pngalpha$&amp;resMode=bilin&amp;wid=300?resMode=sharp2&amp;scl=1&amp;fmt=webp-alpha">
                                            <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/About%20Image%2018$pngalpha$&amp;resMode=bilin&amp;wid=300?resMode=sharp2&amp;scl=1&amp;fmt=avif-alpha">
                                            <img class="featured-statement_image___pXv8" src="assets/ss7.vzw.com/is/image/VerizonWireless/About%20Image%2018$pngalpha$&amp;resMode=bilin&amp;wid=300/?resMode=sharp2&amp;scl=1&amp;$pngalpha$" alt="" style="transform:translateY(0px)" aria-hidden="true">
                                          </picture>
                                        </div>
                                      </div>
                                      <div class="featured-statement_centerContent__ojfJo">
                                        <div class="featured-statement_titleLockupWrapper__HGVAN" style="--title-lockup-width-mobileSmall:241px;--title-lockup-width-mobileLarge:328px;--title-lockup-width-tabletSmall:396px;--title-lockup-width-tabletLarge:550px;--title-lockup-width-desktop:634px">
                                          <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                            <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center">
                                              <div class="header-title_title__zNZnw">
                                                <h2 style="--base-text-color:var(--vds-color-element-brandhighlight-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-brandhighlight-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-brandhighlight-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">We power and empower how people live, work and play</h2>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="featured-statement_buttonGroupWrapper__842xk">
                                            <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                              <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__ZpqwL">
                                                <div class="VDS__MON__button-group-module__opadH">
                                                  <a __meta="[object Object]" iconposition="right" id="68a8921ae18cf9000276cc91" href="/about/about/our-company/who-we-are/" target="_self" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__GBCry" aria-label="Who we are" role="button" aria-disabled="false" tabindex="0">
                                                    <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__GBCry" tabindex="-1">Who we are</span>
                                                      <span class="VDS__MON__button-module__Ae-k-">
                                                      </span>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="featured-statement_imageRightSection__t0elx">
                                            <div class="image_imageContainer__3nvQM" style="height:100%" aria-hidden="true">
                                              <img src="assets/ss7.vzw.com/is/image/VerizonWireless/About%20Image%2019/?$pngAlpha$&amp;resMode=bilin&amp;wid=300" class="featured-statement_image___pXv8" style="transform:translateY(0px)" aria-hidden="true" alt="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="68c187192d313e75d45a22b2" style="width:100%">
                                      <a id="base-block-hidden-anchor-68c187192d313e75d45a22b2" tabindex="-1">
                                      </a>
                                      <div class="base-block_contentWrapper__5oAUk featured-articles-block_section__X0p3H" style="--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-8x);--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-12x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-12x);--desktop-content-max-width:1232px">
                                        <div class="featured-articles-block_titleWrapper__0fdsI">
                                          <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                            <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center">
                                              <div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%">
                                                <h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Catch up on the latest</h2>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="featured-articles-block_cardsWrapper__PPgzF">
                                            <div class="card_tileWrapper__F8jC7 card_lightprimary__7CeW0 card_clickable__veDlm">
                                              <div data-testid="tile-container-wrapper" style="height:auto;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                                <a data-testid="tile-container-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="Total Wireless expands Total Spark, bringing workforce development and FIFA World Cup 2026™ ticket giveaways to five cities" tabindex="0" href="/about/news/total-wireless-spark-fifa-expansion/" target="_self" id="OuterButton-«R2mdi7n9nb»">
                                                </a>
                                                <div data-testid="tile-container-tile" id="«R2mdi7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                                  <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«R2mdi7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                    <div class="card_innerWrapper__kJtEW card_lightprimary__7CeW0  card_clickable__veDlm">
                                                      <div class="image_imageContainer__3nvQM image_showBorder__6wlX_ image_lightprimary__rG_Cr" style="width:100%;aspect-ratio:16/9;border-radius:var(--vds-tiles-border-radius-standard)">
                                                        <picture>
                                                          <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-total-spark-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=webp">
                                                          <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-total-spark-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=avif">
                                                          <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/news-total-spark-1920x1080/?resMode=sharp2&amp;scl=1" alt="Total Spark" style="border-radius:var(--vds-tiles-border-radius-standard)" fetchpriority="high" fallbacksrc="assets/ss7.vzw.com/is/image/VerizonWireless/NEW_fallBackImage-16_9-logomark?scl=1&amp;resMode=sharp2">
                                                        </picture>
                                                      </div>
                                                      <div class="card_innerContentWrapper__U3rny">
                                                        <span class="card_titleWrapper__FBtWL ">
                                                          <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__GW1th VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                            <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:4;line-clamp:4">Total Wireless expands Total Spark, bringing workforce development and FIFA World Cup 2026™ ticket giveaways to five cities</span>
                                                            </p>
                                                          </span>
                                                          <span class="card_subtitleWrapper__ze_K0 card_extraPaddingBottom__FxxwN">
                                                            <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-body-large-fontfamily);--tablet-fontsize:var(--vds-typography-body-large-fontsize);--tablet-fontweight:var(--vds-typography-body-large-fontweight-regular);--tablet-lineheight:var(--vds-typography-body-large-lineheight);--tablet-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-body-large-fontfamily);--desktop-fontsize:var(--vds-typography-body-large-fontsize);--desktop-fontweight:var(--vds-typography-body-large-fontweight-regular);--desktop-lineheight:var(--vds-typography-body-large-lineheight);--desktop-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                              <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:2;line-clamp:2">Total Wireless is expanding its Total Spark social impact program to five cities, offering workforce development and FIFA World Cup 2026™ ticket giveaways.</span>
                                                              </p>
                                                            </span>
                                                            <div class="card_attributionWrapper__9u0aY">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd">
                                                                <a class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s VDS__MON__text-link-module__i1Yk6 VDS__MON__text-link-module__YxdPU" href="/about/news-category/corporate-responsibility/" role="link" aria-label="Responsible business" data-testid="text-link" tabindex="0">
                                                                <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Responsible business</span>
                                                              </a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card_tileWrapper__F8jC7 card_lightprimary__7CeW0 card_clickable__veDlm">
                                                <div data-testid="tile-container-wrapper" style="height:auto;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                                  <a data-testid="tile-container-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="Verizon champions the innovators of tomorrow, names winner of Verizon Frontline App Developer Challenge" tabindex="0" href="/about/news/verizon-champions-innovators-of-tomorrow/" target="_self" id="OuterButton-«R4mdi7n9nb»">
                                                  </a>
                                                  <div data-testid="tile-container-tile" id="«R4mdi7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                                    <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«R4mdi7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                      <div class="card_innerWrapper__kJtEW card_lightprimary__7CeW0  card_clickable__veDlm">
                                                        <div class="image_imageContainer__3nvQM image_showBorder__6wlX_ image_lightprimary__rG_Cr" style="width:100%;aspect-ratio:16/9;border-radius:var(--vds-tiles-border-radius-standard)">
                                                          <picture>
                                                            <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-challenge-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=webp">
                                                            <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-challenge-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=avif">
                                                            <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/news-challenge-1920x1080/?resMode=sharp2&amp;scl=1" alt="" style="border-radius:var(--vds-tiles-border-radius-standard)" fallbacksrc="assets/ss7.vzw.com/is/image/VerizonWireless/NEW_fallBackImage-16_9-logomark?scl=1&amp;resMode=sharp2">
                                                          </picture>
                                                        </div>
                                                        <div class="card_innerContentWrapper__U3rny">
                                                          <span class="card_titleWrapper__FBtWL ">
                                                            <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__GW1th VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                              <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:4;line-clamp:4">Verizon champions the innovators of tomorrow, names winner of Verizon Frontline App Developer Challenge</span>
                                                              </p>
                                                            </span>
                                                            <span class="card_subtitleWrapper__ze_K0 card_extraPaddingBottom__FxxwN">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-body-large-fontfamily);--tablet-fontsize:var(--vds-typography-body-large-fontsize);--tablet-fontweight:var(--vds-typography-body-large-fontweight-regular);--tablet-lineheight:var(--vds-typography-body-large-lineheight);--tablet-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-body-large-fontfamily);--desktop-fontsize:var(--vds-typography-body-large-fontsize);--desktop-fontweight:var(--vds-typography-body-large-fontweight-regular);--desktop-lineheight:var(--vds-typography-body-large-lineheight);--desktop-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                                <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:2;line-clamp:2">Continuing a decades-long commitment to driving innovation in public safety and community resilience, Verizon announced the winner of its first-ever Verizon Frontline App Developer Challenge. </span>
                                                              </p>
                                                            </span>
                                                            <div class="card_attributionWrapper__9u0aY">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd">
                                                                <a class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s VDS__MON__text-link-module__i1Yk6 VDS__MON__text-link-module__YxdPU" href="/about/news-category/public-safety/" role="link" aria-label="Public safety" data-testid="text-link" tabindex="0">
                                                                <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Public safety</span>
                                                              </a>
                                                            </p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card_tileWrapper__F8jC7 card_lightprimary__7CeW0 card_clickable__veDlm">
                                                <div data-testid="tile-container-wrapper" style="height:auto;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                                  <a data-testid="tile-container-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="Dear Verizon: You bring a lot to the table and it does not go unnoticed" tabindex="0" href="/about/news/dear-verizon-it-does-not-go-unnoticed/" target="_self" id="OuterButton-«R6mdi7n9nb»">
                                                  </a>
                                                  <div data-testid="tile-container-tile" id="«R6mdi7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__tgYxi VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                                    <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«R6mdi7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                      <div class="card_innerWrapper__kJtEW card_lightprimary__7CeW0  card_clickable__veDlm">
                                                        <div class="image_imageContainer__3nvQM image_showBorder__6wlX_ image_lightprimary__rG_Cr" style="width:100%;aspect-ratio:16/9;border-radius:var(--vds-tiles-border-radius-standard)">
                                                          <picture>
                                                            <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-michael-olson-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=webp">
                                                            <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/news-michael-olson-1920x1080?resMode=sharp2&amp;scl=1&amp;fmt=avif">
                                                            <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/news-michael-olson-1920x1080/?resMode=sharp2&amp;scl=1" alt="" style="border-radius:var(--vds-tiles-border-radius-standard)" fallbacksrc="assets/ss7.vzw.com/is/image/VerizonWireless/NEW_fallBackImage-16_9-logomark?scl=1&amp;resMode=sharp2">
                                                          </picture>
                                                        </div>
                                                        <div class="card_innerContentWrapper__U3rny">
                                                          <span class="card_titleWrapper__FBtWL ">
                                                            <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__GW1th VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                              <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:4;line-clamp:4">Dear Verizon: You bring a lot to the table and it does not go unnoticed</span>
                                                              </p>
                                                            </span>
                                                            <span class="card_subtitleWrapper__ze_K0 card_extraPaddingBottom__FxxwN">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-body-large-fontfamily);--tablet-fontsize:var(--vds-typography-body-large-fontsize);--tablet-fontweight:var(--vds-typography-body-large-fontweight-regular);--tablet-lineheight:var(--vds-typography-body-large-lineheight);--tablet-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-body-large-fontfamily);--desktop-fontsize:var(--vds-typography-body-large-fontsize);--desktop-fontweight:var(--vds-typography-body-large-fontweight-regular);--desktop-lineheight:var(--vds-typography-body-large-lineheight);--desktop-letterspacing:var(--vds-typography-body-large-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">
                                                                <span class="card_innerTextOverflowWrapper__6Bhif" style="-webkit-line-clamp:2;line-clamp:2">Verizon Frontline’s portable tech provided essential connectivity for EMTs, enabling life-saving medical response and reuniting families in remote areas.</span>
                                                              </p>
                                                            </span>
                                                            <div class="card_attributionWrapper__9u0aY">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd">
                                                                <a class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s VDS__MON__text-link-module__i1Yk6 VDS__MON__text-link-module__YxdPU" href="/about/news-category/public-safety/" role="link" aria-label="Public safety" data-testid="text-link" tabindex="0">
                                                                <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Public safety</span>
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
                                            <div class="featured-articles-block_ctaWrapper__4ZUL0">
                                              <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                                <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__ZpqwL">
                                                  <div class="VDS__MON__button-group-module__opadH" style="flex-grow:1;flex-basis:calc(100%0)">
                                                    <a __meta="[object Object]" iconposition="right" id="68c1871a0e68180002fec1eb" href="/about/about/news/" target="_self" style="width:100%" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="See all news" role="button" aria-disabled="false" tabindex="0">
                                                      <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">See all news</span>
                                                        <span class="VDS__MON__button-module__Ae-k-">
                                                        </span>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="base-block_container__ZFzh0 base-block_lightbrandneutral__ltTHw" id="68c189aa2d313e75d45a22b3" style="width:100%">
                                            <a id="base-block-hidden-anchor-68c189aa2d313e75d45a22b3" tabindex="-1">
                                            </a>
                                            <div class="base-block_contentWrapper__5oAUk featured-category_container__WKCBz" style="--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-12x);--padding-left-mobile:var(--vds-space-4x);--padding-right-mobile:var(--vds-space-4x);--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-16x);--padding-right-tablet:var(--vds-space-6x);--padding-left-tablet:var(--vds-space-6x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-24x);--padding-right-desktop:var(--vds-space-6x);--padding-left-desktop:var(--vds-space-6x);--desktop-content-max-width:1232px">
                                              <div class="featured-category_titleWrapper__aOdEJ">
                                                <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                                  <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center">
                                                    <div class="header-title_eyebrow__9T_6O" style="--header-eyebrow-maxWidth-mobile:448px;--header-eyebrow-maxWidth-tablet:550px;--header-eyebrow-maxWidth-desktop:688px;--header-eyebrow-maxWidth:100%">
                                                      <span style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral);--mobile-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--mobile-fontsize:var(--vds-typography-title-xsmall-fontsize);--mobile-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-xsmall-lineheight);--mobile-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6">Careers</span>
                                                      </div>
                                                      <div class="header-title_title__zNZnw" style="--header-title-maxWidth-mobile:448px;--header-title-maxWidth-tablet:550px;--header-title-maxWidth-desktop:800px;--header-title-maxWidth:100%">
                                                        <h2 style="--base-text-color:var(--vds-color-element-brandhighlight-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-brandhighlight-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-brandhighlight-onlightbrandneutral);--mobile-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobile-fontsize:var(--vds-typography-title-medium-fontsize);--mobile-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-medium-lineheight);--mobile-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobile-color:var(--vds-color-element-brandhighlight-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB">Work with purpose
                                                          Find success</h2>
                                                        </div>
                                                        <div class="header-title_subtitle__ym7Pb" style="--header-subtitle-maxWidth-mobile:448px;--header-subtitle-maxWidth-tablet:550px;--header-subtitle-maxWidth-desktop:688px;--header-subtitle-maxWidth:100%">
                                                          <span style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral);--mobile-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--mobile-fontsize:var(--vds-typography-title-xsmall-fontsize);--mobile-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--mobile-lineheight:var(--vds-typography-title-xsmall-lineheight);--mobile-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--mobile-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6">We’re engineers, innovators, customer champions and so much more. Be part of a team that delivers the latest and greatest, every single day.</span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="featured-category_buttonGroupWrapper__kAFJ9 ">
                                                        <div class="VDS__MON__button-group-module__1Dbuz">
                                                          <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__ZpqwL">
                                                            <div class="VDS__MON__button-group-module__opadH" style="flex-grow:1;flex-basis:calc(100%0)">
                                                              <a __meta="[object Object]" iconposition="right" id="68c189ac7fe6c70002b4e17b" href="https://mycareer.verizon.com/" target="_self" style="width:100%" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__GBCry" aria-label="Visit Careers" role="button" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__GBCry" tabindex="-1">Visit Careers</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="custom-tile-group_tileGroup__1k78r featured-category_tilesWrapper____hY0 featured-category_mobileLayout__GvT_Z custom-tile-group_image__vpIXI">
                                                    <div class="custom-tile-group_tile__LIK2r custom-tile-group_padding__owsyN">
                                                      <div image="[object Object]" directionalicon="[object Object]" data-testid="tile-container-tile" id="68c189ac7fe6c70002b4e178" class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__9SfgI VDS__MON__tile-container-module__KeI-E VDS__MON__tile-container-module__7YhVz" style="height:100%;width:100%;background:transparent;padding:0px">
                                                        <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c189ac7fe6c70002b4e178">
                                                          <div class="image_imageContainer__3nvQM" style="height:100%;aspect-ratio:3/4">
                                                            <picture>
                                                              <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-1?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1&amp;fmt=webp">
                                                              <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-1?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1&amp;fmt=avif">
                                                              <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-1/?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1" alt="">
                                                            </picture>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="custom-tile-group_tile__LIK2r">
                                                      <div image="[object Object]" directionalicon="[object Object]" data-testid="tile-container-tile" id="68c189ac7fe6c70002b4e179" class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__9SfgI VDS__MON__tile-container-module__KeI-E VDS__MON__tile-container-module__7YhVz" style="height:100%;width:100%;background:transparent;padding:0px">
                                                        <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c189ac7fe6c70002b4e179">
                                                          <div class="image_imageContainer__3nvQM" style="height:100%;aspect-ratio:2/3">
                                                            <picture>
                                                              <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-2-1?resMode=sharp2&amp;wid=1920&amp;hei=2880&amp;fit=crop%2C+1&amp;fmt=webp">
                                                              <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-2-1?resMode=sharp2&amp;wid=1920&amp;hei=2880&amp;fit=crop%2C+1&amp;fmt=avif">
                                                              <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-featured-category-2-1/?resMode=sharp2&amp;wid=1920&amp;hei=2880&amp;fit=crop%2C+1" alt="">
                                                            </picture>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="custom-tile-group_tile__LIK2r custom-tile-group_padding__owsyN">
                                                      <div image="[object Object]" directionalicon="[object Object]" data-testid="tile-container-tile" id="68c189ac7fe6c70002b4e17a" class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__9SfgI VDS__MON__tile-container-module__KeI-E VDS__MON__tile-container-module__7YhVz" style="height:100%;width:100%;background:transparent;padding:0px">
                                                        <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c189ac7fe6c70002b4e17a">
                                                          <div class="image_imageContainer__3nvQM" style="height:100%;aspect-ratio:3/4">
                                                            <picture>
                                                              <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/WorkWithPurpose_Tech_CWIL2381?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1&amp;fmt=webp">
                                                              <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/WorkWithPurpose_Tech_CWIL2381?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1&amp;fmt=avif">
                                                              <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/WorkWithPurpose_Tech_CWIL2381/?resMode=sharp2&amp;wid=1920&amp;hei=2560&amp;fit=crop%2C+1" alt="">
                                                            </picture>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="68c18a8b2d313e75d45a22b4" style="width:100%">
                                                <a id="base-block-hidden-anchor-68c18a8b2d313e75d45a22b4" tabindex="-1">
                                                </a>
                                                <div class="base-block_contentWrapper__5oAUk metrics-grid-block_container__BSSqe  metrics-grid-block_horizontal__VaG_U" style="--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-8x);--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-12x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-16x);--desktop-content-max-width:1232px">
                                                  <div class="metrics-grid-block_contentWrapper___cNR4 metrics-grid-block_top__rsLNt metrics-grid-block_horizontal__VaG_U">
                                                    <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                                      <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:left;--header-align-items:flex-start">
                                                        <div class="header-title_eyebrow__9T_6O" style="--header-eyebrow-maxWidth:100%">
                                                          <span style="--base-text-color:var(--vds-color-element-brandhighlight-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-brandhighlight-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Investors</span>
                                                          </div>
                                                          <div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%">
                                                            <h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Deliver strong results</h2>
                                                            </div>
                                                            <div class="header-title_subtitle__ym7Pb" style="--header-subtitle-maxWidth:100%">
                                                              <span style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Not many companies can transform their businesses in a time of accelerating change, but we have and will continue to do so.</span>
                                                              </div>
                                                            </div>
                                                            <div class="header-title_buttonGroupWrapper__qGG3f" style="--header-textHorizontalAlignment:left;--header-align-items:flex-start">
                                                              <div class="button-group_buttonGroupWrapper__EAgk_ ">
                                                                <div class="VDS__MON__button-group-module__1Dbuz">
                                                                <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__e9z8e">
                                                                <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__AI4j- VDS__MON__button-group-module__wyoyb">
                                                                <a __meta="[object Object]" iconposition="right" id="68c18a8c7fe6c70002b4e17f" href="/about/about/investors/" target="_self" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Investor relations" role="button" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Investor relations</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </a>
                                                          </div>
                                                          <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__AI4j-">
                                                            <a __meta="[object Object]" iconposition="right" id="68c18a8c7fe6c70002b4e180" href="/about/about/investors/financial-reporting/" target="_self" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="View financials" role="button" aria-disabled="false" tabindex="0">
                                                              <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">View financials</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="metrics-grid-block_tilesWrapper__YeTwo metrics-grid-block_horizontal__VaG_U" style="--tiles-gap-value-default:var(--vds-space-6x);--tiles-gap-value-mobile:var(--vds-space-3x);--tiles-gap-value-mobileLarge:var(--vds-space-3x);grid-template-columns:repeat(2, 1fr)">
                                                <div class="metrics-grid-block_tileletWrapper___lYo1">
                                                  <div class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__CMHeY VDS__MON__tile-container-module__n-hpr VDS__MON__tile-container-module__7RqCD VDS__MON__tile-container-module__s-uOe VDS__MON__tile-container-module__7YhVz" __meta="[object Object]" data-testid="tile-container-tile" id="68c18a8c7fe6c70002b4e181" style="height:100%;width:100%">
                                                    <span class="VDS__MON__screen-reader-text-module__g5OOP">
                                                    </span>
                                                    <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c18a8c7fe6c70002b4e181">
                                                      <div class="custom-tilelet_tileletContentWrapper__rG6Hc">
                                                        <div class="custom-tilelet_eyebrow__qkUTI">
                                                          <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--mobileLarge-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobileLarge-fontsize:var(--vds-typography-title-medium-fontsize);--mobileLarge-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobileLarge-lineheight:var(--vds-typography-title-medium-lineheight);--mobileLarge-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobileLarge-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-medium-fontfamily);--tablet-fontsize:var(--vds-typography-title-medium-fontsize);--tablet-fontweight:var(--vds-typography-title-medium-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-medium-lineheight);--tablet-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-large-fontfamily);--desktop-fontsize:var(--vds-typography-title-large-fontsize);--desktop-fontweight:var(--vds-typography-title-large-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-large-lineheight);--desktop-letterspacing:var(--vds-typography-title-large-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__Lg35Y VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">1Q26
                                                            $1.20</p>
                                                          </div>
                                                          <div class="custom-tilelet_title__sPMfw">
                                                            <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">diluted earnings</p>
                                                            </div>
                                                            <div class="custom-tilelet_subtitle__Dvrw5" style="--subtitle-padding-bottom:0px">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">reported per share </p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="metrics-grid-block_tileletWrapper___lYo1">
                                                        <div class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__CMHeY VDS__MON__tile-container-module__n-hpr VDS__MON__tile-container-module__7RqCD VDS__MON__tile-container-module__s-uOe VDS__MON__tile-container-module__7YhVz" __meta="[object Object]" data-testid="tile-container-tile" id="68c18a8c7fe6c70002b4e182" style="height:100%;width:100%">
                                                          <span class="VDS__MON__screen-reader-text-module__g5OOP">
                                                          </span>
                                                          <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c18a8c7fe6c70002b4e182">
                                                            <div class="custom-tilelet_tileletContentWrapper__rG6Hc">
                                                              <div class="custom-tilelet_eyebrow__qkUTI">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--mobileLarge-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobileLarge-fontsize:var(--vds-typography-title-medium-fontsize);--mobileLarge-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobileLarge-lineheight:var(--vds-typography-title-medium-lineheight);--mobileLarge-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobileLarge-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-medium-fontfamily);--tablet-fontsize:var(--vds-typography-title-medium-fontsize);--tablet-fontweight:var(--vds-typography-title-medium-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-medium-lineheight);--tablet-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-large-fontfamily);--desktop-fontsize:var(--vds-typography-title-large-fontsize);--desktop-fontweight:var(--vds-typography-title-large-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-large-lineheight);--desktop-letterspacing:var(--vds-typography-title-large-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__Lg35Y VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">1Q26
                                                                $8.0B</p>
                                                              </div>
                                                              <div class="custom-tilelet_title__sPMfw">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">net cash</p>
                                                              </div>
                                                              <div class="custom-tilelet_subtitle__Dvrw5" style="--subtitle-padding-bottom:0px">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">provided by operating activities</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="metrics-grid-block_tileletWrapper___lYo1">
                                                        <div class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__CMHeY VDS__MON__tile-container-module__n-hpr VDS__MON__tile-container-module__7RqCD VDS__MON__tile-container-module__s-uOe VDS__MON__tile-container-module__7YhVz" __meta="[object Object]" data-testid="tile-container-tile" id="68c18a8c7fe6c70002b4e183" style="height:100%;width:100%">
                                                          <span class="VDS__MON__screen-reader-text-module__g5OOP">
                                                          </span>
                                                          <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c18a8c7fe6c70002b4e183">
                                                            <div class="custom-tilelet_tileletContentWrapper__rG6Hc">
                                                              <div class="custom-tilelet_eyebrow__qkUTI">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--mobileLarge-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobileLarge-fontsize:var(--vds-typography-title-medium-fontsize);--mobileLarge-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobileLarge-lineheight:var(--vds-typography-title-medium-lineheight);--mobileLarge-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobileLarge-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-medium-fontfamily);--tablet-fontsize:var(--vds-typography-title-medium-fontsize);--tablet-fontweight:var(--vds-typography-title-medium-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-medium-lineheight);--tablet-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-large-fontfamily);--desktop-fontsize:var(--vds-typography-title-large-fontsize);--desktop-fontweight:var(--vds-typography-title-large-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-large-lineheight);--desktop-letterspacing:var(--vds-typography-title-large-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__Lg35Y VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">$0.7075</p>
                                                              </div>
                                                              <div class="custom-tilelet_title__sPMfw">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">quarterly dividends</p>
                                                              </div>
                                                              <div class="custom-tilelet_subtitle__Dvrw5" style="--subtitle-padding-bottom:0px">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">per share as of January 30, 2026</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="metrics-grid-block_tileletWrapper___lYo1">
                                                        <div class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__CMHeY VDS__MON__tile-container-module__n-hpr VDS__MON__tile-container-module__7RqCD VDS__MON__tile-container-module__s-uOe VDS__MON__tile-container-module__7YhVz" __meta="[object Object]" data-testid="tile-container-tile" id="68c18a8c7fe6c70002b4e184" style="height:100%;width:100%">
                                                          <span class="VDS__MON__screen-reader-text-module__g5OOP">
                                                          </span>
                                                          <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c18a8c7fe6c70002b4e184">
                                                            <div class="custom-tilelet_tileletContentWrapper__rG6Hc">
                                                              <div class="custom-tilelet_eyebrow__qkUTI">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--mobileLarge-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobileLarge-fontsize:var(--vds-typography-title-medium-fontsize);--mobileLarge-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobileLarge-lineheight:var(--vds-typography-title-medium-lineheight);--mobileLarge-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobileLarge-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-medium-fontfamily);--tablet-fontsize:var(--vds-typography-title-medium-fontsize);--tablet-fontweight:var(--vds-typography-title-medium-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-medium-lineheight);--tablet-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-large-fontfamily);--desktop-fontsize:var(--vds-typography-title-large-fontsize);--desktop-fontweight:var(--vds-typography-title-large-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-large-lineheight);--desktop-letterspacing:var(--vds-typography-title-large-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__Lg35Y VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">$138.2B</p>
                                                              </div>
                                                              <div class="custom-tilelet_title__sPMfw">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">revenue</p>
                                                              </div>
                                                              <div class="custom-tilelet_subtitle__Dvrw5" style="--subtitle-padding-bottom:0px">
                                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-2xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-2xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-2xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-2xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-2xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--desktop-fontsize:var(--vds-typography-title-xsmall-fontsize);--desktop-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-xsmall-lineheight);--desktop-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__azrVm VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">generated in 2025</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="68c1959da5cc0ad32bdeed3e" style="width:100%">
                                                  <a id="base-block-hidden-anchor-68c1959da5cc0ad32bdeed3e" tabindex="-1">
                                                  </a>
                                                  <div class="base-block_contentWrapper__5oAUk navigational-list-block_container__5Hydn" style="--padding-top-mobile:var(--vds-space-8x);--padding-bottom-mobile:var(--vds-space-12x);--padding-top-tablet:var(--vds-space-12x);--padding-bottom-tablet:var(--vds-space-16x);--padding-top-desktop:var(--vds-space-16x);--padding-bottom-desktop:var(--vds-space-16x);--desktop-content-max-width:1232px">
                                                    <div class="navigational-list-block_textContent__PuTpo">
                                                      <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                                        <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:left;--header-align-items:flex-start">
                                                          <div class="header-title_eyebrow__9T_6O" style="--header-eyebrow-maxWidth:100%">
                                                            <span style="--base-text-color:var(--vds-color-element-brandhighlight-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-brandhighlight-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Responsible Business</span>
                                                            </div>
                                                            <div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%">
                                                              <h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Empowering communities</h2>
                                                              </div>
                                                              <div class="header-title_subtitle__ym7Pb" style="--header-subtitle-maxWidth:100%">
                                                                <span style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Through its people, technology, and partners Verizon is helping everyone thrive in a digital world.</span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="list-group_listGroup__bRb6o navigational-list-block_listGroup__9_O1i">
                                                            <div class="VDS__MON__list-group-module__MQ02s VDS__MON__list-group-module__YNjqt VDS__MON__list-group-module__g3Ld3 " data-testid="ListGroup">
                                                              <div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="68c1959e5eaf1b0002d81e44">
                                                                <div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp">
                                                                <button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true">
                                                              </button>
                                                              <div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;">
                                                                <p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Responsible business overview</p>
                                                                <p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">
                                                              </p>
                                                            </div>
                                                            <div class="VDS__MON__list-group-item-module__o5j3x">
                                                              <div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan">
                                                                <span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;">
                                                                <button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Responsible business overview" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__icon-button-module__xDEgX">
                                                              </span>
                                                              <span class="VDS__MON__icon-button-module__fpD9y">
                                                                <svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"> </path></svg>
                                                              </span>
                                                            </button>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="68c1959e5eaf1b0002d81e42">
                                                    <div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp">
                                                      <button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true">
                                                      </button>
                                                      <div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;">
                                                        <p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Digital inclusion</p>
                                                          <p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">
                                                          </p>
                                                        </div>
                                                        <div class="VDS__MON__list-group-item-module__o5j3x">
                                                          <div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan">
                                                            <span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;">
                                                              <button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Digital inclusion" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__icon-button-module__xDEgX">
                                                              </span>
                                                              <span class="VDS__MON__icon-button-module__fpD9y">
                                                                <svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"> </path></svg>
                                                              </span>
                                                            </button>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="68c1959e5eaf1b0002d81e43">
                                                    <div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp">
                                                      <button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true">
                                                      </button>
                                                      <div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;">
                                                        <p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Environmental responsibility</p>
                                                          <p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">
                                                          </p>
                                                        </div>
                                                        <div class="VDS__MON__list-group-item-module__o5j3x">
                                                          <div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan">
                                                            <span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;">
                                                              <button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Environmental responsibility" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__icon-button-module__xDEgX">
                                                              </span>
                                                              <span class="VDS__MON__icon-button-module__fpD9y">
                                                                <svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"> </path></svg>
                                                              </span>
                                                            </button>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="68c1959e5eaf1b0002d81e45">
                                                    <div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp">
                                                      <button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true">
                                                      </button>
                                                      <div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;">
                                                        <p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Human prosperity</p>
                                                          <p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">
                                                          </p>
                                                        </div>
                                                        <div class="VDS__MON__list-group-item-module__o5j3x">
                                                          <div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan">
                                                            <span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;">
                                                              <button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Human prosperity" aria-disabled="false" tabindex="0">
                                                                <span class="VDS__MON__icon-button-module__xDEgX">
                                                              </span>
                                                              <span class="VDS__MON__icon-button-module__fpD9y">
                                                                <svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"> </path></svg>
                                                              </span>
                                                            </button>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="navigational-list-block_imageWrapper__WmvLO" aria-hidden="true">
                                              <div class="image_imageContainer__3nvQM" style="aspect-ratio: 3 / 4; border-radius: var(--vds-tiles-border-radius-standard);">
                                                <picture>
                                                  <source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-navigational-list-1-1-1?resMode=sharp2&amp;scl=1&amp;fmt=webp">
                                                  <source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-navigational-list-1-1-1?resMode=sharp2&amp;scl=1&amp;fmt=avif">
                                                  <img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/about-us-navigational-list-1-1-1/?resMode=sharp2&amp;scl=1" alt="" style="border-radius:var(--vds-tiles-border-radius-standard)">
                                                </picture>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="base-block_container__ZFzh0 base-block_lightbrandneutral__ltTHw" id="68c19849a5cc0ad32bdeed3f" style="width:100%">
                                          <a id="base-block-hidden-anchor-68c19849a5cc0ad32bdeed3f" tabindex="-1">
                                          </a>
                                          <div class="base-block_contentWrapper__5oAUk playlist-block_container__ms82r" style="--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-12x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-16x);--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-8x);--padding-right-mobile:0px;--padding-left-mobile:0px;--desktop-content-max-width:1232px">
                                            <div class="playlist-block_titleWrapper__SAoGB playlist-block_carousel__JMp3h">
                                              <div style="width:100%" class="header-title_outerWrapper___kDOM">
                                                <div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:left;--header-align-items:flex-start">
                                                  <div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%">
                                                    <h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Always a step ahead with innovation</h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="playlist-block_tilesContainer__H94Uj">
                                                <div class="playlist-block_activeVideoContainer__GTwUC" style="--active-tile-eyebrow-padding:var(--vds-space-8x)">
                                                  <div class="hero-banner_heroBannerContainer___8J6t">
                                                    <div __meta="[object Object]" data-testid="tile-container-tile" id="68c1984b9f05e00002805b20" class="VDS__MON__tile-container-module__2NakR VDS__MON__tile-container-module__CMHeY VDS__MON__tile-container-module__IzTEV VDS__MON__tile-container-module__AYopX VDS__MON__tile-container-module__7YhVz" style="width:100%;aspect-ratio:2 / 1;padding:0px">
                                                      <div class="VDS__MON__tile-container-module__XqBmF" data-testid="tile-inner-container-tile-container" id="tile-inner-container-68c1984b9f05e00002805b20">
                                                        <div>
                                                          <div class="video_videoContainer__ZxTwq video_onClick__5Cq3p" style="--height: 100%;">
                                                            <div class="video_playingVideoWrapper__M0oRq video_notFullscreen__dLGsQ" style="--border-radius: var(--vds-tiles-border-radius-standard);">
                                                              <div class="VDS__MON__video-module__yX96C">
                                                                <div class="VDS__MON__video-module__Bc13- VDS__MON__video-module__c6bwC VDS__MON__video-module__zdS5M" tabindex="-1" role="group" aria-label="" data-testid="wrapper" style="min-width: 768px; aspect-ratio: 2 / 1; cursor: default;">
                                                                <div class="VDS__MON__video-module__MWGIZ">
                                                                <div aria-live="polite" aria-atomic="true">
                                                              </div>
                                                            </div>
                                                            <div class="VDS__MON__video-module__17-1B VDS__MON__video-module__cxSM2 VDS__MON__video-module__pRWLv" aria-hidden="true">
                                                              <video id="hero-banner" viewportoverride="[object Object]" crossorigin="anonymous" loop="" autoplay="" preload="auto" playsinline="" tabindex="-1" poster="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20short%20video%201-1?resMode=sharp2&amp;scl=1">
                                                                <source src="assets/ss7.vzw.com/is/content/VerizonWireless/IVA/abtvz-cms-uploads/About%20-%20short%20video%201.mp4">
                                                                <track kind="captions">
                                                              </video>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="hero-banner_innerTileWrapper__dJDKr hero-banner_topLeft__ZNB_Y ">
                                                    <div data-testid="tile-container-wrapper" style="width:362px" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                                      <div class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__ZHSY- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" data-testid="tile-container-outer-button" role="button" aria-label="Watch Building tomorrow’s technology today video" tabindex="0" id="OuterButton-«R2jf1i7n9nb»">
                                                      </div>
                                                      <div data-testid="tile-container-tile" id="«R2jf1i7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__ZHSY- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;aspect-ratio:unset">
                                                        <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«R2jf1i7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                          <div class="custom-tilelet_tileletContentWrapper__rG6Hc">
                                                            <div class="custom-tilelet_title__sPMfw custom-tilelet_maxLines__tnHYJ" style="--title-padding-bottom:28px;--num-of-lines:5">
                                                              <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-small-fontfamily);--tablet-fontsize:var(--vds-typography-title-small-fontsize);--tablet-fontweight:var(--vds-typography-title-small-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-small-lineheight);--tablet-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-medium-fontfamily);--desktop-fontsize:var(--vds-typography-title-medium-fontsize);--desktop-fontweight:var(--vds-typography-title-medium-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-medium-lineheight);--desktop-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Building tomorrow’s technology today</p>
                                                              </div>
                                                              <div class="custom-tilelet_button__pDa4D">
                                                                <div class="button-group_buttonGroupWrapper__EAgk_ ">
                                                                <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                                                <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__e9z8e">
                                                                <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__7NjrF VDS__MON__button-group-module__d6A8F">
                                                                <button __meta="[object Object]" iconposition="right" id="0" aria-hidden="true" tabindex="-1" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Watch Building tomorrow’s technology today video" role="button" aria-disabled="false" type="button">
                                                                <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Watch video</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </button>
                                                          </div>
                                                          <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__eubhp">
                                                            <a __meta="[object Object]" iconposition="right" id="0" target="_self" width="auto" class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s " href="/about/about/our-company/innovation-labs/" role="link" aria-label="Learn more about Building tomorrow’s technology today" data-testid="text-link" tabindex="0">
                                                              <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Learn more</span>
                                                              </a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="playlist-block_tilesWrapper__WhTyK">
                                    <div class="media-tile_mediaTileWrapper__5nqMW">
                                      <div data-testid="tile-container-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                        <div class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" data-testid="tile-container-outer-button" role="button" aria-label="Watch Verizon brings portable connectivity to sports and entertainment video" tabindex="0" id="OuterButton-«Rdf1i7n9nb»">
                                        </div>
                                        <div data-testid="tile-container-tile" id="«Rdf1i7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                          <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«Rdf1i7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                            <span class="media-tile_mediaWrapper__wI5Fc" style="aspect-ratio:16/9" aria-hidden="true">
                                              <div class="image_imageContainer__3nvQM" aria-hidden="true">
                                                <img src="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%202-1/?resMode=sharp2&amp;scl=1" class="media-tile_posterWrapper___hgPS media-tile_onClick__Weo_7" style="opacity:1;transition:opacity 300ms ease" loading="eager" aria-hidden="true" alt="">
                                              </div>
                                              <div class="media-tile_iconButtonWrapper__6L6a4">
                                                <span class="VDS__MON__icon-button-module__4c71Y" style="height:2.75rem;width:2.75rem;--ghost-fit-icon:2.75rem">
                                                  <button type="button" class="VDS__MON__icon-button-module__pkRRU  VDS__MON__icon-button-module__5Ftvn  VDS__MON__icon-button-module__aSMye   VDS__MON__icon-button-module__f-Uy8 VDS__MON__icon-button-module__Jf6jp" data-testid="icon-button" role="button" aria-label="icon" aria-disabled="false" aria-hidden="true" tabindex="-1">
                                                    <span class="VDS__MON__icon-button-module__xDEgX">
                                                    </span>
                                                    <span style="left:3px" class="VDS__MON__icon-button-module__fpD9y">
                                                      <svg class="VDS__MON__icon-base-module__DAtvV VDS__MON__icon-base-module__gfs4M" style="color:var(--vds-color-element-primary-ondarkprimary)" role="img" aria-hidden="false" aria-label="play-alt-filled icon" viewBox="0 0 38 38" fill="var(--vds-color-element-primary-ondarkprimary)"><title>play-alt-filled icon</title> <path d="m5.13333,35V3l27.73334,16L5.13333,35Z"> </path></svg>
                                                    </span>
                                                  </button>
                                                </span>
                                              </div>
                                            </span>
                                            <div class="media-tile_tileletContentWrapper__UJ5LL">
                                              <div class="media-tile_title__4Poi5">
                                                <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-small-fontfamily);--mobile-fontsize:var(--vds-typography-title-small-fontsize);--mobile-fontweight:var(--vds-typography-title-small-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-small-lineheight);--mobile-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Verizon brings portable connectivity to sports and entertainment</p>
                                                </div>
                                                <div class="media-tile_buttonsWrapper__w_dvx">
                                                  <div class="button-group_buttonGroupWrapper__EAgk_ ">
                                                    <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                                      <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__e9z8e">
                                                        <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__7NjrF VDS__MON__button-group-module__d6A8F">
                                                          <button __meta="[object Object]" iconposition="right" id="1" aria-hidden="true" tabindex="-1" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Watch Verizon brings portable connectivity to sports and entertainment video" role="button" aria-disabled="false" type="button">
                                                            <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Watch video</span>
                                                              <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </button>
                                                          </div>
                                                          <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__eubhp">
                                                            <a __meta="[object Object]" iconposition="right" id="1" target="_self" width="auto" class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s " href="/about/about/news/verizon-portable-connectivity-sports-entertainment-new-network-box/" role="link" aria-label="Learn more about Verizon brings portable connectivity to sports and entertainment" data-testid="text-link" tabindex="0">
                                                              <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Learn more</span>
                                                              </a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="media-tile_mediaTileWrapper__5nqMW">
                                            <div data-testid="tile-container-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                              <div class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" data-testid="tile-container-outer-button" role="button" aria-label="Watch Verizon 5G and edge compute trial with NHL video" tabindex="0" id="OuterButton-«Rlf1i7n9nb»">
                                              </div>
                                              <div data-testid="tile-container-tile" id="«Rlf1i7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                                <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«Rlf1i7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                  <span class="media-tile_mediaWrapper__wI5Fc" style="aspect-ratio:16/9" aria-hidden="true">
                                                    <div class="image_imageContainer__3nvQM" aria-hidden="true">
                                                      <img src="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%203-1/?resMode=sharp2&amp;scl=1" class="media-tile_posterWrapper___hgPS media-tile_onClick__Weo_7" style="opacity:1;transition:opacity 300ms ease" loading="eager" aria-hidden="true" alt="">
                                                    </div>
                                                    <div class="media-tile_iconButtonWrapper__6L6a4">
                                                      <span class="VDS__MON__icon-button-module__4c71Y" style="height:2.75rem;width:2.75rem;--ghost-fit-icon:2.75rem">
                                                        <button type="button" class="VDS__MON__icon-button-module__pkRRU  VDS__MON__icon-button-module__5Ftvn  VDS__MON__icon-button-module__aSMye   VDS__MON__icon-button-module__f-Uy8 VDS__MON__icon-button-module__Jf6jp" data-testid="icon-button" role="button" aria-label="icon" aria-disabled="false" aria-hidden="true" tabindex="-1">
                                                          <span class="VDS__MON__icon-button-module__xDEgX">
                                                          </span>
                                                          <span style="left:3px" class="VDS__MON__icon-button-module__fpD9y">
                                                            <svg class="VDS__MON__icon-base-module__DAtvV VDS__MON__icon-base-module__gfs4M" style="color:var(--vds-color-element-primary-ondarkprimary)" role="img" aria-hidden="false" aria-label="play-alt-filled icon" viewBox="0 0 38 38" fill="var(--vds-color-element-primary-ondarkprimary)"><title>play-alt-filled icon</title> <path d="m5.13333,35V3l27.73334,16L5.13333,35Z"> </path></svg>
                                                          </span>
                                                        </button>
                                                      </span>
                                                    </div>
                                                  </span>
                                                  <div class="media-tile_tileletContentWrapper__UJ5LL">
                                                    <div class="media-tile_title__4Poi5">
                                                      <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-small-fontfamily);--mobile-fontsize:var(--vds-typography-title-small-fontsize);--mobile-fontweight:var(--vds-typography-title-small-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-small-lineheight);--mobile-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Verizon 5G and edge compute trial with NHL</p>
                                                      </div>
                                                      <div class="media-tile_buttonsWrapper__w_dvx">
                                                        <div class="button-group_buttonGroupWrapper__EAgk_ ">
                                                          <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                                            <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__e9z8e">
                                                              <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__7NjrF VDS__MON__button-group-module__d6A8F">
                                                                <button __meta="[object Object]" iconposition="right" id="2" aria-hidden="true" tabindex="-1" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Watch Verizon 5G and edge compute trial with NHL video" role="button" aria-disabled="false" type="button">
                                                                <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Watch video</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </button>
                                                          </div>
                                                          <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__eubhp">
                                                            <a __meta="[object Object]" iconposition="right" id="2" target="_self" width="auto" class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s " href="/about/bu/business/solutions/industry/media-entertainment/connected-athletes/" role="link" aria-label="Learn more about Verizon 5G and edge compute trial with NHL" data-testid="text-link" tabindex="0">
                                                              <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Learn more</span>
                                                              </a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="media-tile_mediaTileWrapper__5nqMW">
                                            <div data-testid="tile-container-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2">
                                              <div class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" data-testid="tile-container-outer-button" role="button" aria-label="Watch Partnering to bring you more entertainment experiences video" tabindex="0" id="OuterButton-«Rtf1i7n9nb»">
                                              </div>
                                              <div data-testid="tile-container-tile" id="«Rtf1i7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%;padding:0">
                                                <div data-testid="tile-inner-container-tile-container" id="tile-inner-container-«Rtf1i7n9nb»" class="VDS__MON__interactive-module__yEh-S">
                                                  <span class="media-tile_mediaWrapper__wI5Fc" style="aspect-ratio:16/9" aria-hidden="true">
                                                    <div class="image_imageContainer__3nvQM" aria-hidden="true">
                                                      <img src="assets/ss7.vzw.com/is/image/VerizonWireless/About%20-%20long%20video%204-1/?resMode=sharp2&amp;scl=1" class="media-tile_posterWrapper___hgPS media-tile_onClick__Weo_7" style="opacity:1;transition:opacity 300ms ease" loading="eager" aria-hidden="true" alt="">
                                                    </div>
                                                    <div class="media-tile_iconButtonWrapper__6L6a4">
                                                      <span class="VDS__MON__icon-button-module__4c71Y" style="height:2.75rem;width:2.75rem;--ghost-fit-icon:2.75rem">
                                                        <button type="button" class="VDS__MON__icon-button-module__pkRRU  VDS__MON__icon-button-module__5Ftvn  VDS__MON__icon-button-module__aSMye   VDS__MON__icon-button-module__f-Uy8 VDS__MON__icon-button-module__Jf6jp" data-testid="icon-button" role="button" aria-label="icon" aria-disabled="false" aria-hidden="true" tabindex="-1">
                                                          <span class="VDS__MON__icon-button-module__xDEgX">
                                                          </span>
                                                          <span style="left:3px" class="VDS__MON__icon-button-module__fpD9y">
                                                            <svg class="VDS__MON__icon-base-module__DAtvV VDS__MON__icon-base-module__gfs4M" style="color:var(--vds-color-element-primary-ondarkprimary)" role="img" aria-hidden="false" aria-label="play-alt-filled icon" viewBox="0 0 38 38" fill="var(--vds-color-element-primary-ondarkprimary)"><title>play-alt-filled icon</title> <path d="m5.13333,35V3l27.73334,16L5.13333,35Z"> </path></svg>
                                                          </span>
                                                        </button>
                                                      </span>
                                                    </div>
                                                  </span>
                                                  <div class="media-tile_tileletContentWrapper__UJ5LL">
                                                    <div class="media-tile_title__4Poi5">
                                                      <p style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-small-fontfamily);--mobile-fontsize:var(--vds-typography-title-small-fontsize);--mobile-fontweight:var(--vds-typography-title-small-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-small-lineheight);--mobile-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__HzJDd VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Partnering to bring you more entertainment experiences</p>
                                                      </div>
                                                      <div class="media-tile_buttonsWrapper__w_dvx">
                                                        <div class="button-group_buttonGroupWrapper__EAgk_ ">
                                                          <div class="VDS__MON__button-group-module__1Dbuz VDS__MON__button-group-module__-Sv-8">
                                                            <div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__e9z8e">
                                                              <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__7NjrF VDS__MON__button-group-module__d6A8F">
                                                                <button __meta="[object Object]" iconposition="right" id="3" aria-hidden="true" tabindex="-1" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Watch Partnering to bring you more entertainment experiences video" role="button" aria-disabled="false" type="button">
                                                                <span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Watch video</span>
                                                                <span class="VDS__MON__button-module__Ae-k-">
                                                              </span>
                                                            </button>
                                                          </div>
                                                          <div class="VDS__MON__button-group-module__opadH VDS__MON__button-group-module__eubhp">
                                                            <a __meta="[object Object]" iconposition="right" id="3" target="_self" width="auto" class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__oq94s " href="/about/bu/business/solutions/industry/media-entertainment/enhancing-customer-venue-experiences/" role="link" aria-label="Learn more about Partnering to bring you more entertainment experiences" data-testid="text-link" tabindex="0">
                                                              <span class="VDS__MON-textlink-hitarea">
                                                              </span>
                                                              <span class="VDS__MON-textlink-childcontainer">Learn more</span>
                                                              </a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                                                        <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_8__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
                                                      </a>
                                                    </a>
                                                  </li>
                                                  <li class="gnav20-hide">
                                                    <a data-show-for="appid:communitykh" href="https://community.verizon.com/t5/custom/page/page-id/yourprivacychoices">
                                                      Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;">
                                                      <svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><!--__RAW_9__--> <g> <g id="final---dec.11-2020_1_"> <g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"> <path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"> </path> </g> </g> </g> <g id="final---dec.11-2020"> <g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"> <g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"> <path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"> </path> <path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"> </path> <path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"> </path> </g> </g> </g> </g></svg>
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

                            <next-route-announcer style="position: absolute;">
                            </next-route-announcer>
                            <div class="gnav20-click-div">
                            </div>
                          </body>
                        </html>
