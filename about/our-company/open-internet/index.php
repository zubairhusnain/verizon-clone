<?php
declare(strict_types=1);
require_once __DIR__ . '/../../../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en"><head><style id="offline-hide-eyebrow-lob">
.gnav20-eyebrow,
.gnav20-eyebrow-link-list,
.gnav20-mobile-menu .gnav20-eyebrow-link-list {
  display: none !important;
}
#gnav20-ulwrapper > a.gnav20-main-header {
  display: none !important;
}
</style>
<!-- offline: marketing stripped --><style id="offline-layout-fixes">main{display:block!important;min-height:40vh;}#__next,main{position:relative;z-index:1;}</style>
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
  </style><base href="/verizon-clone/verizon_offline/"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/337f3c3a2ec713e0.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/48f3d74c0a6c1d65.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/4243a613acc24a34.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/8c437bc54ae71bad.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/73294eaba03b2b20.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/c32b3d6417dd137a.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2b24209d6b4c219f.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/481a43aab453cdeb.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/535e19167a4cdb33.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d7fbedc164de1ac1.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/eeebac434a565043.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/1e0dab898f8f5b1c.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/769c3b7d8213d95b.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/b87a7fc3d1cb0737.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d29713a2c533eae5.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a00ccbafa1556e08.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/d9701cf16aef2dbf.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/618257a5be5513ff.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/41976479bb691250.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/96deab900a267db4.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/e6b8090827ded7c3.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2439b0a1a94127ca.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/6f70e7c61dc30026.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/81f71769fa854f02.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a4a3d2026474bd2f.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/01032c1ed95624be.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/93283885295c03a8.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/3e6c26943d078a54.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a3f543f06c0a8303.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/8b3890352cd3dbe1.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a5b2a43742916441.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/f07ee4061143ad91.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/6a86c914601359b2.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/18fa579f7e3faef9.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/43907ecb9872957b.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/550c35f2a2a02be7.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/2a925c73390e249c.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/ee2b52cdc0415197.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/1a2b26447e3340fe.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/285227a698e9ddc1.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/0815ac141cb66fb0.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/9d7ca9b319a63456.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/81dfc23e167717a3.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/c61ec24f487c9f16.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/a8f64e11524d2634.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/5c4b906d1515d3cc.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/5b38952375a5df4a.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/about/nextgen/_next/static/css/0214608af39874a3.css" data-precedence="next"><link rel="preload" as="script" fetchpriority="low" href="assets/www.verizon.com/about/nextgen/_next/static/chunks/webpack-c3c7edc60cc1fe60.js"><link rel="preload" href="assets/ss7.vzw.com/is/image/VerizonWireless/Verizon%5FGlowWordmark%5FRGB/?$pngalpha$&amp;resMode=sharp2&amp;scl=1" as="image"><link rel="preload" as="script" href="/about/our-company/open-internet/vz/xdi.js"><title>Open Internet | About Verizon</title><meta name="robots" content="index, follow"><link rel="canonical" href="/about/our-company/open-internet/about/our-company/open-internet/"><meta property="og:title" content="Open Internet | About Verizon"><meta property="og:url" content="https://www.verizon.com"><meta property="og:site_name" content="Verizon About"><meta property="og:type" content="website"><meta name="twitter:card" content="summary"><meta name="twitter:site" content="@verizon"><meta name="twitter:creator" content="@verizon"><meta name="twitter:title" content="Open Internet | About Verizon"><link rel="icon" href="favicon.ico" type="image/x-icon" sizes="16x16"><link rel="stylesheet" href="/about/our-company/open-internet/assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css"><script>var gnavdl = {"bu":"corporate","appid":"corpweb","impltype":"ssi","options":{"sticky":"true"}};</script><script type="text/javascript" src="/about/our-company/open-internet/assets/www.verizon.com/etc/designs/vzwcom/gnav20/corporate.js"></script></head><body style="margin:0">
<header id="vz-gh20">
<div class="gnav20 gnav20-sticky" data-exp-name="Corporate" role="banner">
     <input type="hidden" id="cradle-context">
    <div class="gnav20-sticky-content">    	
     	




    
    
    <div class="gnav20-apicomponentnewdesign">


<a class="gnav20-header-accessibility" tabindex="0" href="/about/our-company/open-internet/about/accessibility/overview/">
	<span>Accessibility Resource Center</span>
</a>
<a class="gnav20-header-accessibility" href="#gnav20-header-end" tabindex="0" id="gnav20-skip-to-main-content-id">
	<span>Skip to main content</span>
</a>

<div class="gnav20-width-wrapper gnav20-new-design gnav20-new-search-style gnav20-promo-bottom gnav20-featured" data-gnav20-container="header">
	<div>




</div>
	
	<div class="gnav20-vzhmoverlay" style="height: 0px;"></div>
	<div class="gnav20-main">
		




    
    
    <div class="gnav20-gnav-new-design">

<div class="gnav20-desktop" item-title="all">
	<div class="gnav20-row-one opacityOne">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-eyebrow">

<div class="gnav20-eyebrow-link-list" item-title="eyebrow">
    <div class="gnav20-eyebrow-link-list-item gnav20-two">
        <a id="gnav20-eyebrow-link-About-Us" href="/about/our-company/open-internet/about/" data-label="About Us" aria-label="Verizon About Us Services HomePage" class="gnav20-main-header gnav20-selected">About Us</a>
    
        <a id="gnav20-eyebrow-link-Careers" href="https://mycareer.verizon.com/" data-label="Careers" aria-label="Verizon Careers Services HomePage" class="gnav20-main-header ">Careers</a>
    </div>
</div>



</div>



		</div>		
		<div class="gnav20-utility">		
			




    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="store">
	<div>
				
		<a aria-label="Support" href="/about/our-company/open-internet/support/" rel="noopener noreferrer" target="_blank" data-label="Support">
			
			Support
			
		</a>			
		
	</div>
</div></div>



        </div>
    </div>
	<div class="gnav20-row-two">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-logo">

    
    
        
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        
        <a class="gnav20-logoWhiteBg" title="About Verizon" href="/about/our-company/open-internet/about/"></a>
        
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
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/" tabindex="-1">About Us</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-About-Us-L2-1" href="/about/our-company/open-internet/about/">About Us Overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-About-Us-L2-2" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/who-we-are/">Who We Are
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Who We Are menu list" aria-expanded="false" role="button">Who We Are
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-1" href="/about/our-company/open-internet/about/our-company/who-we-are/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-2" href="/about/our-company/open-internet/about/our-company/diversity-and-inclusion/">Our Culture
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-3" href="/about/our-company/open-internet/about/our-company/history-and-timeline/">History and Timeline
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-4" href="/about/our-company/open-internet/about/our-company/verizon-corporate-headquarters/">Headquarters &amp; Contact Info
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-5" href="/about/our-company/open-internet/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-6" href="/about/our-company/open-internet/about/our-company/executive-bios/">Leadership
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-About-Us-L2-3" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/what-we-do/">What We Do
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="What We Do menu list" aria-expanded="false" role="button">What We Do
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-7" href="/about/our-company/open-internet/about/our-company/what-we-do/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-8" href="/about/our-company/open-internet/about/our-company/innovation-labs/">Innovation Labs
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-9" href="/about/our-company/open-internet/about/our-company/high-speed-broadband/">Broadband &amp; Fiber
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-10" href="/about/our-company/open-internet/about/our-company/internet-things/">Internet of Things
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-11" href="/about/our-company/open-internet/about/our-company/managed-security/">Managed Security
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-12" href="/about/our-company/open-internet/about/our-company/verizon-ventures/">Verizon Ventures
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-About-Us-L2-4" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/how-we-lead/">How We Lead
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="How We Lead menu list" aria-expanded="false" role="button">How We Lead
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-13" href="/about/our-company/open-internet/about/our-company/how-we-operate/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-14" href="/about/our-company/open-internet/about/our-company/code-conduct/">Code of Conduct
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-15" href="/about/our-company/open-internet/about/our-company/how-we-lead/management-governance/">Management Governance
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-16" href="/about/our-company/open-internet/about/our-company/open-internet/">Open Internet
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-17" href="/about/our-company/open-internet/about/our-company/company-policies/">Policies
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-18" href="/about/our-company/open-internet/about/our-company/retiree-information/">Retiree Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-19" href="/about/our-company/open-internet/about/our-companystate-government-affairs/">State Government Affairs
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-News-L1" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">News</button>
			<button id="gnav20-News-L1-goback" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">News</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/news/" tabindex="-1">News</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
									<a id="gnav20-News-L2-1" class="gnav20-haschild " href="/about/our-company/open-internet/about/news/">News
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-1-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News menu list" aria-expanded="false" role="button">News
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-News-L3-1" href="/about/our-company/open-internet/about/news/">News
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-2" href="/about/our-company/open-internet/about/news-category/networks-platforms/">Networks &amp; Platforms
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-3" href="/about/our-company/open-internet/about/news-category/products-plans/">Products &amp; Plans
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-4" href="/about/our-company/open-internet/about/news-category/corporate-responsibility/">Responsible Business
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-5" href="/about/our-company/open-internet/about/news-category/financial/">Financial
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-6" href="/about/our-company/open-internet/about/news-category/public-safety/">Public Safety
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-7" href="/about/our-company/open-internet/about/news-category/noticias/">Noticias
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-8" href="/about/our-company/open-internet/about/news/news-alert-signup/">News Alerts Signup
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-News-L2-2" class="gnav20-haschild " href="/about/our-company/open-internet/about/news/press-releases/">Press Releases
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Press Releases menu list" aria-expanded="false" role="button">Press Releases
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-News-L3-9" href="/about/our-company/open-internet/about/news/press-releases/">Press Releases
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-10" href="/about/our-company/open-internet/about/news/media-contacts/">Media Contacts
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-11" href="/about/our-company/open-internet/about/news/media-resources/" rel="noopener noreferrer" target="_blank">B-roll and images
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-12" href="/about/our-company/open-internet/about/news/rss-feeds/">RSS Feeds
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-13" href="/about/our-company/open-internet/about/news/emergency-resource-center/">Emergency resource center
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-14" href="/about/our-company/open-internet/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-Responsibility-L1" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Responsibility</button>
			<button id="gnav20-Responsibility-L1-goback" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Responsibility</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/responsibility/" tabindex="-1">Responsibility</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-Responsibility-L2-1" href="/about/our-company/open-internet/about/responsibility/">Responsibility Overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-bold-link gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-2" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/digital-inclusion/">Digital Inclusion
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Digital Inclusion menu list" aria-expanded="false" role="button">Digital Inclusion
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-1" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-2" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/verizon-innovative-learning/">Verizon Innovative Learning
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-3" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/small-business-program/">Small Business Program
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-4" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/digital-wellness/">Digital Wellness
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-5" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/value-cares/">Value Cares
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-3" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/">Environmental Responsibility
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Environmental Responsibility menu list" aria-expanded="false" role="button">Environmental Responsibility
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li>
											
											
												<a id="gnav20-Responsibility-L3-7" href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/community-disaster-resilience/">Community Disaster Resilience
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-8" href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/community-disaster-resilience-innovation/">Community Disaster Resilience Innovation
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-9" href="/about/our-company/open-internet/about/responsibility/sustainability/">Sustainability
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Responsibility-L2-4" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/human-prosperity/">Human Prosperity
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Human Prosperity menu list" aria-expanded="false" role="button">Human Prosperity
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-10" href="/about/our-company/open-internet/about/responsibility/human-prosperity/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-17" href="/about/our-company/open-internet/about/responsibility/human-prosperity/workforce-development/">Workforce Development
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-18" href="/about/our-company/open-internet/about/our-companysmall-business-supplier/">Small Business Supplier Program
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-19" href="/about/our-company/open-internet/about/responsibility/employee-volunteers/">Employee Volunteers
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-5" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/giving-and-grants/">Sharing our Success
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-5-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Sharing our Success menu list" aria-expanded="false" role="button">Sharing our Success
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-14" href="/about/our-company/open-internet/about/responsibility/giving-and-grants/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-15" href="/about/our-company/open-internet/about/responsibility/grant-requirements/">Giving and Grants
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-6" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/product-responsibility/">Product Responsibility
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-6-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Product Responsibility menu list" aria-expanded="false" role="button">Product Responsibility
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-11" href="/about/our-company/open-internet/about/responsibility/product-responsibility/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-12" href="/about/our-company/open-internet/about/account-security/overview/">Account Security
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-13" href="/about/our-company/open-internet/about/privacy/">Privacy Policy
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-column-break">
								
									<a id="gnav20-Responsibility-L2-7" class="gnav20-haschild " href="/about/our-company/open-internet/about/parenting/parenting-in-a-digital-world/">Parenting in a Digital World
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-7-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Parenting in a Digital World menu list" aria-expanded="false" role="button">Parenting in a Digital World
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-20" href="/about/our-company/open-internet/about/parenting/parenting-in-a-digital-world/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-21" href="/about/our-company/open-internet/about/parenting/digital-parenting-101/">Digital Parenting 101
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-22" href="/about/our-company/open-internet/about/parenting/young-children/">Young children 3-8
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-23" href="/about/our-company/open-internet/about/parenting/preteens/">Preteens 9-12
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-24" href="/about/our-company/open-internet/about/parenting/teenagers/">Teenagers 13-18
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-25" href="/about/our-company/open-internet/about/parenting/parenting-tips/">By topic
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-26" href="/about/our-company/open-internet/about/parenting/meet-the-experts/">Meet the editorial team
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-Investors-L1" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Investors</button>
			<button id="gnav20-Investors-L1-goback" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Investors</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/investors/" tabindex="-1">Investors</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-Investors-L2-1" href="/about/our-company/open-internet/about/investors/">Investor Relations overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-2" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/financial-reporting/">Financial Reporting
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-2-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Financial Reporting menu list" aria-expanded="false" role="button">Financial Reporting
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-1" href="/about/our-company/open-internet/about/investors/financial-reporting/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-2" href="/about/our-company/open-internet/about/investors/sec-filings/">SEC Filings
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-3" href="/about/our-company/open-internet/about/investors/annual-report/">Annual Reports
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-4" href="/about/our-company/open-internet/about/investors/quarterly-earnings/">Quarterly Earnings
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-5" href="/about/our-company/open-internet/about/investors/stock-information/">Stock Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-6" href="/about/our-company/open-internet/about/investors/dividend-history/">Dividend History
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-7" href="/about/our-company/open-internet/about/investors/tax-information/">Tax Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-8" href="/about/our-company/open-internet/about/investors/fixed-income/">Fixed Income
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-9" href="/about/our-company/open-internet/about/investors/asset-backed-securitization/">Asset-backed Securitization
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Investors-L2-3" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/corporate-governance/">Corporate Governance
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-3-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Corporate Governance menu list" aria-expanded="false" role="button">Corporate Governance
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-13" href="/about/our-company/open-internet/about/investors/corporate-governance/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-14" href="/about/our-company/open-internet/about/investors/board-directors/">Board of Directors
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-15" href="/about/our-company/open-internet/about/investors/corporate-governance/board-committees/">Board Committees
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-4" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/shareowner-services/">Shareowner Services
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-4-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Shareowner Services menu list" aria-expanded="false" role="button">Shareowner Services
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-16" href="/about/our-company/open-internet/about/investors/shareowner-services/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-17" href="/about/our-company/open-internet/about/investors/cost-basis-calculator/">Cost Basis Calculator
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-18" href="/about/our-company/open-internet/about/investors/shareowner-faqs/">Shareowner FAQs
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-5" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/responsible-business-reporting/">Responsible Business Reporting
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-5-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Responsible Business Reporting menu list" aria-expanded="false" role="button">Responsible Business Reporting
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-19" href="/about/our-company/open-internet/about/investors/reporting/">Overview
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Investors-L2-6" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/investor-news/">News &amp; Events
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-6-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News &amp; Events menu list" aria-expanded="false" role="button">News &amp; Events
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display: block;">
										<li>
											
											
												<a id="gnav20-Investors-L3-10" href="/about/our-company/open-internet/about/investors/investor-webcasts/">Investor Events &amp; Webcasts
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-11" href="/about/our-company/open-internet/about/investors/investor-calendar/">Investor Calendar
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-12" href="/about/our-company/open-internet/about/investors/email-alerts/">Email Alerts
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
								
									<a id="gnav20-Investors-L2-7" href="/about/our-company/open-internet/about/investors/contact-investor-relations/">Contact Investor Relations
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>



</div></div>



		</div>
		<div class="gnav20-utility opacityOne">
			




    
    
    <div class="gnav20-search-utility">

	<div class="gnav20-utility-wrapper" item-title="search">
		<div class="gnav20-search-wrapper">
			
				<input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context" name="isProd" value="true">
			
			<button class="gnav20-search-icon" id="gnav20-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon"></button>
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
        
        <a class="gnav20-logoWhiteBg" title="About Verizon" href="/about/our-company/open-internet/about/"></a>
        
    </div>
</div>



	</div>
    <div class="gnav20-utility opacityOne">
        




    
    
    <div class="gnav20-search-utility">

	<div class="gnav20-utility-wrapper" item-title="search">
		<div class="gnav20-search-wrapper">
			
				<input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context-mobile" name="isProd" value="true">
			
			<button class="gnav20-search-icon" id="gnav20-search-icon-mobile" aria-label="Search Verizon" data-placeholder-text="Search Verizon"></button>
		</div>
	</div>
</div>



        <button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0" aria-label="Menu for navigation opens a modal overlay">
		</button>
    </div>
    <nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
        <button id="gnav20-closex" class="gnav20-closex" aria-label="close the Menu" tabindex="0">Close</button>
        <div id="gnav20-ulwrapper"><a id="gnav20-eyebrow-link-About-Us-mobile" href="/about/our-company/open-internet/about/" data-label="About Us" aria-label="Verizon About Us Services HomePage" class="gnav20-main-header gnav20-selected">About Us</a>
			
			<div class="gnav20-navigation-placeholder">
			




    
    
    <div class="gnav20-navigation">
<div class="gnav20-global-nav-list gnav20-navigation-list" item-title="L1">
	




    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-About-Us-L1-mobile" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">About Us</button>
			<button id="gnav20-About-Us-L1-goback-mobile-goback" aria-label="About Us Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">About Us</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/" tabindex="-1">About Us</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-About-Us-L2-1-mobile" href="/about/our-company/open-internet/about/">About Us Overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-About-Us-L2-2-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/who-we-are/">Who We Are
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Who We Are menu list" aria-expanded="false" role="button">Who We Are
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-1-mobile" href="/about/our-company/open-internet/about/our-company/who-we-are/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-2-mobile" href="/about/our-company/open-internet/about/our-company/diversity-and-inclusion/">Our Culture
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-3-mobile" href="/about/our-company/open-internet/about/our-company/history-and-timeline/">History and Timeline
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-4-mobile" href="/about/our-company/open-internet/about/our-company/verizon-corporate-headquarters/">Headquarters &amp; Contact Info
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-5-mobile" href="/about/our-company/open-internet/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-6-mobile" href="/about/our-company/open-internet/about/our-company/executive-bios/">Leadership
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-About-Us-L2-3-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/what-we-do/">What We Do
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="What We Do menu list" aria-expanded="false" role="button">What We Do
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-7-mobile" href="/about/our-company/open-internet/about/our-company/what-we-do/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-8-mobile" href="/about/our-company/open-internet/about/our-company/innovation-labs/">Innovation Labs
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-9-mobile" href="/about/our-company/open-internet/about/our-company/high-speed-broadband/">Broadband &amp; Fiber
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-10-mobile" href="/about/our-company/open-internet/about/our-company/internet-things/">Internet of Things
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-11-mobile" href="/about/our-company/open-internet/about/our-company/managed-security/">Managed Security
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-12-mobile" href="/about/our-company/open-internet/about/our-company/verizon-ventures/">Verizon Ventures
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-About-Us-L2-4-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/our-company/how-we-lead/">How We Lead
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-About-Us-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="How We Lead menu list" aria-expanded="false" role="button">How We Lead
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-About-Us-L3-13-mobile" href="/about/our-company/open-internet/about/our-company/how-we-operate/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-14-mobile" href="/about/our-company/open-internet/about/our-company/code-conduct/">Code of Conduct
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-15-mobile" href="/about/our-company/open-internet/about/our-company/how-we-lead/management-governance/">Management Governance
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-16-mobile" href="/about/our-company/open-internet/about/our-company/open-internet/">Open Internet
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-17-mobile" href="/about/our-company/open-internet/about/our-company/company-policies/">Policies
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-18-mobile" href="/about/our-company/open-internet/about/our-company/retiree-information/">Retiree Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-About-Us-L3-19-mobile" href="/about/our-company/open-internet/about/our-companystate-government-affairs/">State Government Affairs
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-News-L1-mobile" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">News</button>
			<button id="gnav20-News-L1-goback-mobile-goback" aria-label="News Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">News</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/news/" tabindex="-1">News</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
									<a id="gnav20-News-L2-1-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/news/">News
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-1-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News menu list" aria-expanded="false" role="button">News
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-News-L3-1-mobile" href="/about/our-company/open-internet/about/news/">News
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-2-mobile" href="/about/our-company/open-internet/about/news-category/networks-platforms/">Networks &amp; Platforms
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-3-mobile" href="/about/our-company/open-internet/about/news-category/products-plans/">Products &amp; Plans
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-4-mobile" href="/about/our-company/open-internet/about/news-category/corporate-responsibility/">Responsible Business
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-5-mobile" href="/about/our-company/open-internet/about/news-category/financial/">Financial
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-6-mobile" href="/about/our-company/open-internet/about/news-category/public-safety/">Public Safety
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-7-mobile" href="/about/our-company/open-internet/about/news-category/noticias/">Noticias
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-8-mobile" href="/about/our-company/open-internet/about/news/news-alert-signup/">News Alerts Signup
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-News-L2-2-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/news/press-releases/">Press Releases
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-News-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Press Releases menu list" aria-expanded="false" role="button">Press Releases
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-News-L3-9-mobile" href="/about/our-company/open-internet/about/news/press-releases/">Press Releases
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-10-mobile" href="/about/our-company/open-internet/about/news/media-contacts/">Media Contacts
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-11-mobile" href="/about/our-company/open-internet/about/news/media-resources/" rel="noopener noreferrer" target="_blank">B-roll and images
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-12-mobile" href="/about/our-company/open-internet/about/news/rss-feeds/">RSS Feeds
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-13-mobile" href="/about/our-company/open-internet/about/news/emergency-resource-center/">Emergency resource center
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-News-L3-14-mobile" href="/about/our-company/open-internet/about/our-company/verizon-fact-sheet/">Verizon Fact Sheet
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-Responsibility-L1-mobile" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Responsibility</button>
			<button id="gnav20-Responsibility-L1-goback-mobile-goback" aria-label="Responsibility Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Responsibility</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/responsibility/" tabindex="-1">Responsibility</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-Responsibility-L2-1-mobile" href="/about/our-company/open-internet/about/responsibility/">Responsibility Overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-bold-link gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-2-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/digital-inclusion/">Digital Inclusion
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Digital Inclusion menu list" aria-expanded="false" role="button">Digital Inclusion
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-1-mobile" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-2-mobile" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/verizon-innovative-learning/">Verizon Innovative Learning
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-3-mobile" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/small-business-program/">Small Business Program
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-4-mobile" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/digital-wellness/">Digital Wellness
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-5-mobile" href="/about/our-company/open-internet/about/responsibility/digital-inclusion/value-cares/">Value Cares
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-3-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/">Environmental Responsibility
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Environmental Responsibility menu list" aria-expanded="false" role="button">Environmental Responsibility
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li>
											
											
												<a id="gnav20-Responsibility-L3-7-mobile" href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/community-disaster-resilience/">Community Disaster Resilience
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-8-mobile" href="/about/our-company/open-internet/about/responsibility/environmental-responsibility/community-disaster-resilience-innovation/">Community Disaster Resilience Innovation
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-9-mobile" href="/about/our-company/open-internet/about/responsibility/sustainability/">Sustainability
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Responsibility-L2-4-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/human-prosperity/">Human Prosperity
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Human Prosperity menu list" aria-expanded="false" role="button">Human Prosperity
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-10-mobile" href="/about/our-company/open-internet/about/responsibility/human-prosperity/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-17-mobile" href="/about/our-company/open-internet/about/responsibility/human-prosperity/workforce-development/">Workforce Development
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-18-mobile" href="/about/our-company/open-internet/about/our-companysmall-business-supplier/">Small Business Supplier Program
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-19-mobile" href="/about/our-company/open-internet/about/responsibility/employee-volunteers/">Employee Volunteers
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-5-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/giving-and-grants/">Sharing our Success
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-5-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Sharing our Success menu list" aria-expanded="false" role="button">Sharing our Success
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-14-mobile" href="/about/our-company/open-internet/about/responsibility/giving-and-grants/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-15-mobile" href="/about/our-company/open-internet/about/responsibility/grant-requirements/">Giving and Grants
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Responsibility-L2-6-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/responsibility/product-responsibility/">Product Responsibility
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-6-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Product Responsibility menu list" aria-expanded="false" role="button">Product Responsibility
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-11-mobile" href="/about/our-company/open-internet/about/responsibility/product-responsibility/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-12-mobile" href="/about/our-company/open-internet/about/account-security/overview/">Account Security
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-13-mobile" href="/about/our-company/open-internet/about/privacy/">Privacy Policy
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-column-break">
								
									<a id="gnav20-Responsibility-L2-7-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/parenting/parenting-in-a-digital-world/">Parenting in a Digital World
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Responsibility-L2-7-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Parenting in a Digital World menu list" aria-expanded="false" role="button">Parenting in a Digital World
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Responsibility-L3-20-mobile" href="/about/our-company/open-internet/about/parenting/parenting-in-a-digital-world/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-21-mobile" href="/about/our-company/open-internet/about/parenting/digital-parenting-101/">Digital Parenting 101
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-22-mobile" href="/about/our-company/open-internet/about/parenting/young-children/">Young children 3-8
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-23-mobile" href="/about/our-company/open-internet/about/parenting/preteens/">Preteens 9-12
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-24-mobile" href="/about/our-company/open-internet/about/parenting/teenagers/">Teenagers 13-18
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-25-mobile" href="/about/our-company/open-internet/about/parenting/parenting-tips/">By topic
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Responsibility-L3-26-mobile" href="/about/our-company/open-internet/about/parenting/meet-the-experts/">Meet the editorial team
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>


    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu gnav20-featured-card gnav20-featured-grouping">
		
			<button id="gnav20-Investors-L1-mobile" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild">Investors</button>
			<button id="gnav20-Investors-L1-goback-mobile-goback" aria-label="Investors Menu List" aria-expanded="false" class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Investors</button>
		
		
		<a aria-hidden="true" class="gnav20-menu-label-link" href="/about/our-company/open-internet/about/investors/" tabindex="-1">Investors</a>

		<div class="gnav20-sub-header-menu gnav20-sub-menu" style="display:none">
			<div class="gnav20-content-wrapper  gnav20-featured-scroll-area">
				
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li>
								
								
									<a id="gnav20-Investors-L2-1-mobile" href="/about/our-company/open-internet/about/investors/">Investor Relations overview
									</a>
								
								<div class="gnav20-L2-content-wrapper">
									
									
									
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-2-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/financial-reporting/">Financial Reporting
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-2-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Financial Reporting menu list" aria-expanded="false" role="button">Financial Reporting
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-1-mobile" href="/about/our-company/open-internet/about/investors/financial-reporting/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-2-mobile" href="/about/our-company/open-internet/about/investors/sec-filings/">SEC Filings
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-3-mobile" href="/about/our-company/open-internet/about/investors/annual-report/">Annual Reports
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-4-mobile" href="/about/our-company/open-internet/about/investors/quarterly-earnings/">Quarterly Earnings
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-5-mobile" href="/about/our-company/open-internet/about/investors/stock-information/">Stock Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-6-mobile" href="/about/our-company/open-internet/about/investors/dividend-history/">Dividend History
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-7-mobile" href="/about/our-company/open-internet/about/investors/tax-information/">Tax Information
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-8-mobile" href="/about/our-company/open-internet/about/investors/fixed-income/">Fixed Income
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-9-mobile" href="/about/our-company/open-internet/about/investors/asset-backed-securitization/">Asset-backed Securitization
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Investors-L2-3-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/corporate-governance/">Corporate Governance
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-3-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Corporate Governance menu list" aria-expanded="false" role="button">Corporate Governance
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-13-mobile" href="/about/our-company/open-internet/about/investors/corporate-governance/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-14-mobile" href="/about/our-company/open-internet/about/investors/board-directors/">Board of Directors
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-15-mobile" href="/about/our-company/open-internet/about/investors/corporate-governance/board-committees/">Board Committees
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-4-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/shareowner-services/">Shareowner Services
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-4-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Shareowner Services menu list" aria-expanded="false" role="button">Shareowner Services
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-16-mobile" href="/about/our-company/open-internet/about/investors/shareowner-services/">Overview
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-17-mobile" href="/about/our-company/open-internet/about/investors/cost-basis-calculator/">Cost Basis Calculator
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-18-mobile" href="/about/our-company/open-internet/about/investors/shareowner-faqs/">Shareowner FAQs
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
									<a id="gnav20-Investors-L2-5-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/responsible-business-reporting/">Responsible Business Reporting
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-5-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="Responsible Business Reporting menu list" aria-expanded="false" role="button">Responsible Business Reporting
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li class="gnav20-hide-on-desktop">
											
											
												<a id="gnav20-Investors-L3-19-mobile" href="/about/our-company/open-internet/about/investors/reporting/">Overview
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
					</ul>
				
					<ul class="gnav20-submenu-column gnav20-L1 ">
						
							<li class="gnav20-bold-link gnav20-column-break">
								
									<a id="gnav20-Investors-L2-6-mobile" class="gnav20-haschild " href="/about/our-company/open-internet/about/investors/investor-news/">News &amp; Events
									</a>
									<a onkeydown="handleGnav20KeyDownEvent()" id="gnav20-Investors-L2-6-goback-mobile-goback" class="gnav20-goback gnav20-hide-on-desktop" href="#" aria-label="News &amp; Events menu list" aria-expanded="false" role="button">News &amp; Events
									</a>
								
								
								<div class="gnav20-L2-content-wrapper">
									
									
									<ul item-title="L2" class="gnav20-submenu-column  gnav20-L2 gnav20-mega-column-0" style="display:none">
										<li>
											
											
												<a id="gnav20-Investors-L3-10-mobile" href="/about/our-company/open-internet/about/investors/investor-webcasts/">Investor Events &amp; Webcasts
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-11-mobile" href="/about/our-company/open-internet/about/investors/investor-calendar/">Investor Calendar
												</a>
											
											
											
										</li>
										
									
										<li>
											
											
												<a id="gnav20-Investors-L3-12-mobile" href="/about/our-company/open-internet/about/investors/email-alerts/">Email Alerts
												</a>
											
											
											
										</li>
										
											
										
									</ul>
									
								</div>
							</li>
						
							<li class="gnav20-margin-top">
								
								
									<a id="gnav20-Investors-L2-7-mobile" href="/about/our-company/open-internet/about/investors/contact-investor-relations/">Contact Investor Relations
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
			<div class="gnav20-placeholder-1" style="display:none"></div>
		</div>
	</div>

</div>



</div></div>



		</div>
			
			<div id="gnav20-footerlink">
				




    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper" item-title="store">
	<div>
				
		<a aria-label="Support" href="/about/our-company/open-internet/support/" rel="noopener noreferrer" target="_blank">
			
			Support
			
		</a>			
		
	</div>
</div></div>


            
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
</div></div>


		
	</div>
	<div>
		
		<div>




</div>
		
	</div>
	
	
	
		<input type="hidden" id="gnav20-prod-context" name="isProd" value="true">
			
	
</div>
<div name="headerEnd" id="gnav20-header-end" role="none" aria-hidden="true" tabindex="-1" aria-label="end of navigation menu">end of navigation menu</div>
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
	<div class="gnav20-sticky-header gnav20-new-design" style="height: 121px;"></div>
</div>



</div>
</header>
<main><div class="announcement-bar_container__5AgRI announcement-bar_red__Caa8Q" id="«R17n9nb»" style="--announcement-bar-height: 0px;"><div class="announcement-bar_innerWrapper__cGcHK"><div class="announcement-bar_textWrapper__rajqm"><div class="announcement-bar_inlineContent__D9aTW"><p class="VDS__MON__text-module__x-eQN VDS__MON__text-module__f0TWM VDS__MON__text-module__HzJDd" style="--base-text-color: var(--vds-color-element-primary-ondarkbrandhighlight);"><span class="rich-text_wrapper__C_mKL rich-text_backgroundColor-darkbrandhighlight__0_xzW"><span style="white-space: pre-wrap;">Get email updates with the latest stories, insights, and news from Verizon. <a class="VDS__MON__text-link-module__Cq8Mx VDS__MON__text-link-module__pKypF VDS__MON__text-link-module__i1Yk6" href="/about/our-company/open-internet/about/news/news-alert-signup/" role="link" aria-label="Sign up for Verizon News Alerts" data-testid="text-link" tabindex="0"><span class="VDS__MON-textlink-hitarea"></span><span class="VDS__MON-textlink-childcontainer">Sign up for Verizon News Alerts</span></a></span></span></p></div></div><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 2rem;"><button type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm      VDS__MON__icon-button-module__YDvRc" data-testid="announcement-bar-close-button" role="button" aria-label="Close announcement" aria-disabled="false" aria-hidden="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="false" aria-label="close icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-ondarkprimary)" style="color: var(--vds-color-element-primary-ondarkprimary);"><title>close icon</title><path d="M11.59,10.8l7.11,7.1-.8.8-7.1-7.11L3.7,18.7l-.8-.8L10,10.8,2.9,3.7l.8-.8L10.8,10,17.9,2.9l.8.8Z"></path></svg></span></button></span></div></div><div style="background:var(--vds-color-surface-undefined)" class="app_mainWrapper__12DSR"><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" style="width:100%"><a id="base-block-hidden-anchor-undefined" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk " style="--padding-top-mobile:var(--vds-space-4x);--padding-bottom-mobile:4px;--padding-top-tablet:var(--vds-space-6x);--padding-bottom-tablet:4px;--padding-top-desktop:var(--vds-space-6x);--padding-bottom-desktop:4px;--desktop-content-max-width:1232px"><div class="breadcrumb-header_breadcrumbContainer__IQNSf"><div class="breadcrumb-header_breadcrumbWrapper__3QCTC"><div class="breadcrumb-header_breadcrumbItems__eOJ6u "><nav class="VDS__MON__breadcrumbs-module__b2cNB VDS__MON__breadcrumbs-module__47Tou" aria-label=""><ol><li><a aria-label="" role="link" tabindex="0" href="/about/" data-testid="breadcrumb-item-link">About</a><span aria-hidden="true">/</span></li><li class="VDS__MON__breadcrumbs-module__NPI--"><a href="" aria-label="" role="link" tabindex="0" data-testid="breadcrumb-item-link" aria-current="page">Open internet</a></li></ol></nav></div></div></div></div></div><div class="app_main__Wyppx"><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="6904b0cf7c099040ae96aa28" style="width:100%"><a id="base-block-hidden-anchor-6904b0cf7c099040ae96aa28" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk " style="--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-12x);--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-16x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-24x);--desktop-content-max-width:1232px"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center"><div class="header-title_eyebrow__9T_6O" style="--header-eyebrow-maxWidth-mobile:328px;--header-eyebrow-maxWidth-tablet:720px;--header-eyebrow-maxWidth-desktop:976px;--header-eyebrow-maxWidth:100%"><span style="--base-text-color:var(--vds-color-element-brandhighlight-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-bold);--desktop-color:var(--vds-color-element-brandhighlight-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--mobile-fontsize:var(--vds-typography-title-xsmall-fontsize);--mobile-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-xsmall-lineheight);--mobile-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--mobile-color:var(--vds-color-element-brandhighlight-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-bold);--tablet-color:var(--vds-color-element-brandhighlight-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6">Committed to an open internet</span></div><div class="header-title_title__zNZnw" style="--header-title-maxWidth-mobile:328px;--header-title-maxWidth-tablet:720px;--header-title-maxWidth-desktop:976px;--header-title-maxWidth:100%"><h1 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobile-fontsize:var(--vds-typography-title-medium-fontsize);--mobile-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-medium-lineheight);--mobile-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB">Access, speed,
fair handling, clear information
and quality of service</h1></div></div></div></div></div><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" style="width:100%" aria-hidden="false"><a id="base-block-hidden-anchor-undefined" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk hero-block_heroSectionWrapper__9B4xE" style="--padding-left-tablet:0px;--padding-right-tablet:0px;--padding-left-mobile:0px;--padding-right-mobile:0px;--desktop-content-max-width:1232px"><div class="hero-block_heroWrapper__ZIeUh hero-block_inline__yJhY6 hero-block_desktopSmallBorderRadius__T0_40" style="--desktop-large-fixed-border-radius:var(--vds-tiles-border-radius-hero);--mobile-aspect-ratio-override:16/9;--tablet-aspect-ratio-override:21/9" id="hero-wrapper"><div class="hero_container__Mv1Qr" style="--hero-height:100%"><div style="aspect-ratio:21/9;height:100%" class="hero_imageWrapper__N6Q30"><div class="image_imageContainer__3nvQM" style="height:100%;aspect-ratio:21/9"><picture><source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/OI%20hero?resMode=sharp2&amp;scl=1&amp;fmt=webp"><source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/OI%20hero?resMode=sharp2&amp;scl=1&amp;fmt=avif"><img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/OI%20hero/?resMode=sharp2&amp;scl=1" alt="A man wearing headphones leans over a table in a home kitchen to work on a tablet."></picture></div></div><div class="hero_textOverlay__vvR97"><div class="hero_textWrapper__I_0I8"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center"></div></div></div></div></div></div></div></div><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="6908af9a8cc9adb711808322" style="width:100%" data-scrollable-id="vz-about-accordion-disabled-scroll-into-view"><a id="base-block-hidden-anchor-6908af9a8cc9adb711808322" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk " style="--padding-top-mobile:var(--vds-space-12x);--padding-bottom-mobile:var(--vds-space-8x);--padding-top-tablet:var(--vds-space-16x);--padding-bottom-tablet:var(--vds-space-12x);--padding-top-desktop:var(--vds-space-24x);--padding-bottom-desktop:var(--vds-space-16x);--desktop-content-max-width:1232px"><div class="rich-text-block_outerWrapper__OJcf3" style="--content-horizontalAlignment-mobile:center;--content-horizontalAlignment-tablet:center;--content-horizontalAlignment-desktop:center"><div class="rich-text-block_customizedWrapper__s_fkv" style="--content-maxWidth-mobile:328px;--content-maxWidth-tablet:550px;--content-maxWidth-desktop:688px;--content-gap-mobile:32px;--content-gap-tablet:48px;--content-gap-desktop:48px"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment-mobile:center;--header-align-items-mobile:center;--header-textHorizontalAlignment-tablet:center;--header-align-items-tablet:center;--header-textHorizontalAlignment-desktop:center;--header-align-items-desktop:center;--header-textHorizontalAlignment:left;--header-align-items:flex-start"><div class="header-title_subtitle__ym7Pb" style="--header-subtitle-maxWidth-mobile:328px;--header-subtitle-maxWidth-tablet:550px;--header-subtitle-maxWidth-desktop:688px;--header-subtitle-maxWidth:100%"><span style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--mobile-fontsize:var(--vds-typography-title-xsmall-fontsize);--mobile-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--mobile-lineheight:var(--vds-typography-title-xsmall-lineheight);--mobile-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--mobile-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6">We provide consumers with choices and internet access when, where and how they want. Our advanced broadband networks and services provide strong platforms for innovation for consumers, for Verizon and for other providers and users throughout the internet. We invest billions every year so that consumers can continue to consume more of the internet content they want.</span></div></div></div><div class="rich-text_wrapper__C_mKL rich-text_backgroundColor-lightprimary__x2tvq"><div style="padding-top:var(--vds-space-undefined);padding-bottom:var(--vds-space-unset)"><div class="VDS__MON__button-group-module__1Dbuz" style="width:100%"><div class="VDS__MON__button-group-module__NDPr1 VDS__MON__button-group-module__ZpqwL"><div class="VDS__MON__button-group-module__opadH"><a id="6908fc69bdb8b7596475b46d" __meta="[object Object]" iconposition="right" href="/about/our-company/open-internet/about/our-company/verizon-broadband-commitment/" target="_self" style="width:auto" data-testid="button" class="VDS__MON__button-module__3kKdo VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" aria-label="Our broadband commitment" role="button" aria-disabled="false" tabindex="0"><span class="VDS__MON__button-module__-TTKa VDS__MON__button-module__ypbOe VDS__MON__button-module__hH-Lr" tabindex="-1">Our broadband commitment</span><span class="VDS__MON__button-module__Ae-k-"></span></a></div></div></div></div></div></div></div></div></div><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="6908b0b13f3ef53da60671b8" style="width:100%"><a id="base-block-hidden-anchor-6908b0b13f3ef53da60671b8" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk navigational-tile-block_container__NCwD_" style="--padding-top-mobile:var(--vds-space-8x);--padding-bottom-mobile:var(--vds-space-8x);--padding-top-tablet:var(--vds-space-12x);--padding-bottom-tablet:var(--vds-space-12x);--padding-top-desktop:var(--vds-space-16x);--padding-bottom-desktop:var(--vds-space-16x);--desktop-content-max-width:1232px"><div class="navigational-tile-block_title__pQNJK"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center"><div class="header-title_title__zNZnw" style="--header-title-maxWidth-mobile:328px;--header-title-maxWidth-tablet:550px;--header-title-maxWidth-desktop:800px;--header-title-maxWidth:100%"><h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary);--mobile-fontfamily:var(--vds-typography-title-medium-fontfamily);--mobile-fontsize:var(--vds-typography-title-medium-fontsize);--mobile-fontweight:var(--vds-typography-title-medium-fontweight-bold);--mobile-lineheight:var(--vds-typography-title-medium-lineheight);--mobile-letterspacing:var(--vds-typography-title-medium-letterspacing-bold);--mobile-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__hZ-lB">Our network management &amp; performance practices</h2></div></div></div></div><div class="navigational-tile-block_content__X0q7l"><div class="navigational-tile-block_tiles__inopF"><div class="VDS__MON__tilelet-group-module__nZxs0 VDS__MON__tilelet-group-module__qOAxZ" style="width:100%;grid-template-columns:repeat(1, 1fr)"><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__RcHX3 VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Network management In this section we provide information about our network management practices for our wireless, wired and Wi-Fi broadband internet access services." tabindex="0" href="/about/our-company/open-internet/about/our-company/network-management/" target="_self" id="OuterButton-«Rardi7n9nb»"></a><div data-testid="tilelet-tile" id="«Rardi7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__RcHX3 VDS__MON__interactive-module__2-M4t VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«Rardi7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><span class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Network management</span></div><div class="VDS__MON__title-lockup-subtitle-module__7TYdl" data-testid="subtitle-wrapper"><span class="VDS__MON__title-lockup-subtitle-module__l70IL VDS__MON__title-lockup-subtitle-module__CvDfQ" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="subtitle">In this section we provide information about our network management practices for our wireless, wired and Wi-Fi broadband internet access services.</span></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightbrandneutral)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightbrandneutral)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__RcHX3 VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Network performance View the performance you can expect to receive based on our internal testing, our testing commissioned from third-party vendors, and results from the latest government studies." tabindex="0" href="/about/our-company/open-internet/about/our-company/network-performance/" target="_self" id="OuterButton-«Rcrdi7n9nb»"></a><div data-testid="tilelet-tile" id="«Rcrdi7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__RcHX3 VDS__MON__interactive-module__2-M4t VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«Rcrdi7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><span class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Network performance</span></div><div class="VDS__MON__title-lockup-subtitle-module__7TYdl" data-testid="subtitle-wrapper"><span class="VDS__MON__title-lockup-subtitle-module__l70IL VDS__MON__title-lockup-subtitle-module__CvDfQ" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="subtitle">View the performance you can expect to receive based on our internal testing, our testing commissioned from third-party vendors, and results from the latest government studies.</span></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightbrandneutral)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightbrandneutral)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div></div></div><div class="navigational-tile-block_image__XT6BH" aria-hidden="false"><div class="image_imageContainer__3nvQM" style="aspect-ratio: 1 / 1; border-radius: var(--vds-tiles-border-radius-standard);"><picture><source type="image/webp" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/Open-internet_Network-Management-1-1%20(1)?resMode=sharp2&amp;scl=1&amp;fmt=webp"><source type="image/avif" srcset="assets/ss7.vzw.com/is/image/VerizonWireless/Open-internet_Network-Management-1-1%20(1)?resMode=sharp2&amp;scl=1&amp;fmt=avif"><img class="image_image__sPkwR " src="assets/ss7.vzw.com/is/image/VerizonWireless/Open-internet_Network-Management-1-1%20(1)/?resMode=sharp2&amp;scl=1" alt="A tall telecommunications tower with antennas overlooking a river and city skyline." style="border-radius:var(--vds-tiles-border-radius-standard)"></picture></div></div></div></div></div><div class="base-block_container__ZFzh0 base-block_lightprimary__TA3S7" id="6904c5527c099040ae96aa2b" style="width:100%"><a id="base-block-hidden-anchor-6904c5527c099040ae96aa2b" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk navigational-list-block_container__5Hydn navigational-list-block_bottom__NvuiD navigational-list-block_noImage__GcvTD" style="--padding-top-mobile:var(--vds-space-8x);--padding-bottom-mobile:var(--vds-space-12x);--padding-top-tablet:var(--vds-space-12x);--padding-bottom-tablet:var(--vds-space-16x);--padding-top-desktop:var(--vds-space-16x);--padding-bottom-desktop:var(--vds-space-24x);--desktop-content-max-width:1232px"><div class="navigational-list-block_textContent__PuTpo navigational-list-block_bottom__NvuiD navigational-list-block_noImage__GcvTD navigational-list-block_bottom__NvuiD"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:center;--header-align-items:center"><div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%"><h2 style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Plans &amp; pricing</h2></div><div class="header-title_subtitle__ym7Pb" style="--header-subtitle-maxWidth-tablet:550px;--header-subtitle-maxWidth-desktop:688px;--header-subtitle-maxWidth:100%"><span style="--base-text-color:var(--vds-color-element-primary-onlightprimary);--desktop-fontfamily:var(--vds-typography-title-small-fontfamily);--desktop-fontsize:var(--vds-typography-title-small-fontsize);--desktop-fontweight:var(--vds-typography-title-small-fontweight-regular);--desktop-lineheight:var(--vds-typography-title-small-lineheight);--desktop-letterspacing:var(--vds-typography-title-small-letterspacing-regular);--desktop-color:var(--vds-color-element-primary-onlightprimary);--tablet-fontfamily:var(--vds-typography-title-xsmall-fontfamily);--tablet-fontsize:var(--vds-typography-title-xsmall-fontsize);--tablet-fontweight:var(--vds-typography-title-xsmall-fontweight-regular);--tablet-lineheight:var(--vds-typography-title-xsmall-lineheight);--tablet-letterspacing:var(--vds-typography-title-xsmall-letterspacing-regular);--tablet-color:var(--vds-color-element-primary-onlightprimary)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Rbysp VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6">Verizon offers competitive rates and pricing plans as well as broadband facts labels to help customers find the service that meets their needs and budget.</span></div></div></div><div class="list-group_listGroup__bRb6o navigational-list-block_listGroup__9_O1i navigational-list-block_horizontal__r4cjh navigational-list-block_lightprimary___HyjU"><div class="VDS__MON__list-group-module__MQ02s VDS__MON__list-group-module__YNjqt VDS__MON__list-group-module__g3Ld3 " data-testid="ListGroup"><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904c55203d7a70002eeb756"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Broadband facts labels</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Broadband facts labels" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904c55203d7a70002eeb757"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Important plan information (Verizon Wireless)</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Important plan information (Verizon Wireless)" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904c55203d7a70002eeb758"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Verizon Wireless plans &amp; pricing</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Verizon Wireless plans &amp; pricing" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904c55203d7a70002eeb759"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Verizon Fios pricing (residential)</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Verizon Fios pricing (residential)" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904d0137c099040ae96aa2e"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Verizon DSL pricing (residential)</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Verizon DSL pricing (residential)" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904d02a7c099040ae96aa31"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Verizon Business Internet</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Verizon Business Internet" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904d0427c099040ae96aa34"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">Verizon Wireless Business</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="Verizon Wireless Business" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div><div class="VDS__MON__list-group-item-module__rjQID VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__PZ0q2 " id="6904d0507c099040ae96aa37"><div data-testid="list-group-item" class="VDS__MON__list-group-item-module__SFwYj VDS__MON__list-group-item-module__Kl1vd VDS__MON__list-group-item-module__Fwq1d VDS__MON__list-group-item-module__AP2Wp"><button tabindex="-1" class="VDS__MON__list-group-item-module__WeaTM" aria-hidden="true"></button><div class="VDS__MON__list-group-item-module__GG1bz VDS__MON__list-group-item-module__gD7aV" style="margin-left: 0px;"><p class="VDS__MON__list-group-item-text-module__EkaPX VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA">mbrace pricing</p><p class="VDS__MON__list-group-item-text-module__xoIjn VDS__MON__list-group-item-text-module__VIIXb VDS__MON__list-group-item-text-module__0gQaA"></p></div><div class="VDS__MON__list-group-item-module__o5j3x"><div class="VDS__MON__list-group-item-module__SbOBU VDS__MON__list-group-item-module__Kl1vd primary-action-wrapper" id="actionIconSpan"><span class="VDS__MON__icon-button-module__4c71Y" style="height: auto; width: auto; --ghost-fit-icon: 1.75rem;"><button aria-hidden="false" type="button" class="VDS__MON__icon-button-module__pkRRU VDS__MON__icon-button-module__CqUzT VDS__MON__icon-button-module__V2sdm  VDS__MON__icon-button-module__aSMye    VDS__MON__icon-button-module__Jf6jp" data-testid="list-group-item-iconButton" role="button" aria-label="mbrace pricing" aria-disabled="false" tabindex="0"><span class="VDS__MON__icon-button-module__xDEgX"></span><span class="VDS__MON__icon-button-module__fpD9y"><svg class="VDS__MON__icon-base-module__DAtvV " role="img" aria-hidden="true" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></button></span></div></div></div></div></div></div></div></div></div><div class="base-block_container__ZFzh0 base-block_lightbrandneutral__ltTHw" id="6904c5587c099040ae96aa2c" style="width:100%"><a id="base-block-hidden-anchor-6904c5587c099040ae96aa2c" tabindex="-1"></a><div class="base-block_contentWrapper__5oAUk navigational-grid-block_container__iuby7" style="--padding-top-mobile:var(--vds-space-12x);--padding-right-mobile:var(--vds-space-4x);--padding-bottom-mobile:var(--vds-space-12x);--padding-left-mobile:var(--vds-space-4x);--padding-top-tablet:var(--vds-space-16x);--padding-right-tablet:var(--vds-space-6x);--padding-bottom-tablet:var(--vds-space-16x);--padding-left-tablet:var(--vds-space-6x);--padding-top-desktop:var(--vds-space-24x);--padding-right-desktop:var(--vds-space-6x);--padding-bottom-desktop:var(--vds-space-24x);--padding-left-desktop:var(--vds-space-6x);--desktop-content-max-width:1232px"><div class="navigational-grid-block_contentContainer__DwXuV navigational-grid-block_horizontalOrientation__5bFn5 navigational-grid-block_verticalCenter__yM_mH"><div class="navigational-grid-block_headerWrapper__HJuOr" style="--header-width:50%"><div style="width:100%" class="header-title_outerWrapper___kDOM"><div class="header-title_textWrapper__MjGg7" style="--header-textHorizontalAlignment:left;--header-align-items:flex-start"><div class="header-title_title__zNZnw" style="--header-title-maxWidth:100%"><h2 style="--base-text-color:var(--vds-color-element-primary-onlightbrandneutral);--tablet-fontfamily:var(--vds-typography-title-xlarge-fontfamily);--tablet-fontsize:var(--vds-typography-title-xlarge-fontsize);--tablet-fontweight:var(--vds-typography-title-xlarge-fontweight-bold);--tablet-lineheight:var(--vds-typography-title-xlarge-lineheight);--tablet-letterspacing:var(--vds-typography-title-xlarge-letterspacing-bold);--tablet-color:var(--vds-color-element-primary-onlightbrandneutral);--desktop-fontfamily:var(--vds-typography-title-2xlarge-fontfamily);--desktop-fontsize:var(--vds-typography-title-2xlarge-fontsize);--desktop-fontweight:var(--vds-typography-title-2xlarge-fontweight-bold);--desktop-lineheight:var(--vds-typography-title-2xlarge-lineheight);--desktop-letterspacing:var(--vds-typography-title-2xlarge-letterspacing-bold);--desktop-color:var(--vds-color-element-primary-onlightbrandneutral)" class="VDS__MON__text-module__x-eQN VDS__MON__text-module__cYsoT VDS__MON__text-module__Eo6jM VDS__MON__text-module__lEJk4 VDS__MON__text-module__Npe1j VDS__MON__text-module__kmxF6 VDS__MON__text-module__Npe1j VDS__MON__text-module__3QgCx">Related resources</h2></div></div></div></div><div class="navigational-grid-block_tilesWrapper__qOF8M" style="--min-width:278px"><div class="VDS__MON__tilelet-group-module__nZxs0 VDS__MON__tilelet-group-module__qOAxZ" style="width:50%;grid-template-columns:repeat(2, 1fr)"><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Verizon value brands " tabindex="0" href="/about/our-company/open-internet/support/tracfone-open-internet-legal/" target="_self" id="OuterButton-«R4rli7n9nb»"></a><div data-testid="tilelet-tile" id="«R4rli7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«R4rli7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__Lznib VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><p class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Verizon value brands</p></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightprimary)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Terms &amp; conditions " tabindex="0" href="/about/our-company/open-internet/about/terms-conditions/overview/" target="_self" id="OuterButton-«R5bli7n9nb»"></a><div data-testid="tilelet-tile" id="«R5bli7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«R5bli7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__Lznib VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><p class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Terms &amp; conditions</p></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightprimary)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Privacy policies " tabindex="0" href="/about/our-company/open-internet/about/privacy/privacy-policy-summary/" target="_self" id="OuterButton-«R5rli7n9nb»"></a><div data-testid="tilelet-tile" id="«R5rli7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«R5rli7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__Lznib VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><p class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Privacy policies</p></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightprimary)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div><div class="VDS__MON__tilelet-group-module__dvgMr"><div data-testid="tilelet-wrapper" style="height:100%;width:100%" class="VDS__MON__interactive-module__C3sjJ VDS__MON__interactive-module__a6FU2"><a __meta="[object Object]" data-testid="tilelet-outer-button" class="VDS__MON__interactive-module__-DPZN VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__-aNU8 VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__a6FU2" role="link" aria-label="  Consumer safety " tabindex="0" href="/about/our-company/open-internet/about/consumer-safety/important-consumer-information-safety/important-consumer-information/" target="_self" id="OuterButton-«R6bli7n9nb»"></a><div data-testid="tilelet-tile" id="«R6bli7n9nb»" class="VDS__MON__interactive-module__rBfHX VDS__MON__interactive-module__sLNp- VDS__MON__interactive-module__eTWmd VDS__MON__interactive-module__Ue9ri VDS__MON__interactive-module__tHO9U VDS__MON__interactive-module__a6FU2" style="height:100%;width:100%"><div data-testid="tile-inner-container-tilelet" id="tile-inner-container-«R6bli7n9nb»" class="VDS__MON__interactive-module__yEh-S"><div class="VDS__MON__tilelet-module__OChXj"><div class="VDS__MON__tilelet-module__ESqPh" style="gap:var(--vds-space-2x)"><div class="VDS__MON__tilelet-module__weD-j" style="width:100%"><div class="VDS__MON__tilelet-module__OOpaV VDS__MON__tilelet-module__GOjhK"><div class="VDS__MON__title-lockup-module__OVlJt"><div class="VDS__MON__title-lockup-title-module__LKmdl VDS__MON__title-lockup-title-module__Lznib VDS__MON__title-lockup-title-module__IKV1S" data-testid="title-wrapper"><p class="VDS__MON__title-lockup-title-module__zqvkE VDS__MON__title-lockup-title-module__Cjx-y" style="color: var(--vds-color-element-primary-onlightbrandneutral); overflow: visible; text-overflow: unset; height: auto;" data-testid="title">Consumer safety</p></div></div></div></div></div><div class="VDS__MON__tilelet-module__R3rPV VDS__MON__tilelet-module__cE6kj VDS__MON__tilelet-module__GtpvG" data-testid="tilelet-icon-container" aria-hidden="true"><span class="VDS__MON__tilelet-module__kTdD1" data-testid="tilelet-directional-icon"><svg class="VDS__MON__icon-base-module__DAtvV " style="color:var(--vds-color-element-primary-onlightprimary)" role="img" aria-hidden="false" aria-label="right-arrow icon" viewBox="0 0 21.6 21.6" fill="var(--vds-color-element-primary-onlightprimary)"><title>right-arrow icon</title><path d="M10.71933,19.8l-.817-.80985,7.683-7.61765H1.8v-1.145H17.58533l-7.683-7.61765.817-.80985L19.8,10.8Z"></path></svg></span></div></div></div></div></div></div></div></div></div></div></div></div></div></main>

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


<next-route-announcer style="position: absolute;"></next-route-announcer><div class="gnav20-click-div"></div></body></html>