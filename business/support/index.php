<?php
declare(strict_types=1);
require_once __DIR__ . '/../../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html><html><head><style id="offline-hide-eyebrow-lob">
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




<style id="offline-business-layout">
  body.complete { margin: 0; overflow-x: auto; }
  .prescr { display: none !important; }
  header.cta, header.cta div[role="main"] {
    display: block !important;
    visibility: visible !important;
    position: relative;
    width: 100%;
  }
  header.cta div[role="main"] { min-height: 50vh; z-index: 1; }
  header.cta footer, footer[role="contentinfo"] {
    display: block !important;
    visibility: visible !important;
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
  main[role="main"], #mainGWSection, #SupportContentWrapper, #page {
    display: block;
    clear: both;
    position: relative;
    z-index: 1;
  }
  .gnav20-sticky-header { pointer-events: none; }
  #offline-l2-links {
    display: flex;
    flex-wrap: wrap;
    gap: 8px 20px;
    justify-content: center;
    max-width: 1272px;
    margin: 0 auto;
    padding: 10px 20px 14px;
    background: #f6f6f6;
    border-bottom: 1px solid #d8dada;
    font-size: 14px;
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
</style><base href="/verizon-clone/verizon_offline/"><style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button:not([disabled]):hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel:not([disabled]):hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger:not([disabled]):hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style><meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover"><link rel="stylesheet" href="assets/www.verizon.com/business/_next/static/css/62ecf2f3efa0be33.css" data-precedence="next"><link rel="stylesheet" href="assets/www.verizon.com/business/_next/static/css/28e62419da3ad639.css" data-precedence="next"><link rel="preload" as="script" fetchpriority="low" href="assets/www.verizon.com/business/_next/static/chunks/webpack-6bb268ffce05d660.js"><link rel="preload" href="/business/support/business/site.js" as="script"><link rel="preload" href="/business/support/business/site/nr-njs.js" as="script"><title>Verizon Business Support: FAQs, Setup, Manuals and Other Resources | Verizon Support</title><meta name="description" content="Find support for My Business Wireless, My Business Wireline, Verizon Enterprise Center (VEC) solutions and more. Learn all about your accounts, setup, etc. "><meta name="revised" content="2024-12-16"><meta property="og:title" content="Verizon Business Support: FAQs, Setup, Manuals and Other Resources"><meta property="og:description" content="Find support for My Business Wireless, My Business Wireline, Verizon Enterprise Center (VEC) solutions and more. Learn all about your accounts, setup, etc. "><meta property="og:url" content="https://www.verizon.com/business/support/"><meta property="og:site_name" content="Verizon Business"><meta property="og:locale" content="en-us"><meta property="og:type" content="website"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:site" content="@VerizonBusiness"><meta name="twitter:title" content="Verizon Business"><meta name="twitter:description" content="Find support for My Business Wireless, My Business Wireline, Verizon Enterprise Center (VEC) solutions and more. Learn all about your accounts, setup, etc. "><script type="text/javascript" src="assets/www.verizon.com/business/site/nr-njs.js"></script><script type="text/javascript" suppresshydrationwarning="true" id="safetyCheck">
  function onJquery(cb) {
    if (typeof(jQuery)!="undefined") {
      $(document).ready(cb);
    } else {
     document.getElementById("jqjs").addEventListener("load",cb);
    }
  }
  checkPage = new function() {
    checkSiteScripts = function() {
        if ((typeof(vzNav)||typeof(vzCake))=="undefined") {
          console.log("check page failed");
          const e = new Event("click");
          document.body.dispatchEvent(e);
        }
    }
    checkCSS = function() {
      const cup = document.querySelector(".cup.contain");
      const cupbg = document.querySelector(".cup .background");
      if ((cup && getComputedStyle(cup).position=="static") || (cupbg && getComputedStyle(cupbg).position=="static")) {
      const css = document.createElement("link");
      css.setAttribute("rel","stylesheet");
      css.setAttribute("href","https://www.verizon.com/business/site/site.css");
      console.log("Loading backup CSS");
      if (vzCake) { vzCake.backup=true; }
      document.body.append(css);
      }
    }
    this.check = function() {
     setTimeout(checkSiteScripts,3600);
     setTimeout(checkCSS,5200);
    }
    window.addEventListener("load",this.check,{once:true});
  }
</script><link rel="stylesheet" type="text/css" href="/business/support/assets/assets.sitescdn.net/answers-search-bar/v1.5/answers.css"><script src="assets/www.verizon.com/business/ngnav/smb.js" async=""></script></head><body class="complete"><div hidden=""><!--$--><!--/$--></div><div class="prescr"><script>(self.__next_s=self.__next_s||[]).push(["https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js",{"type":"text/javascript","async":"","id":"jqjs"}])</script><script>(self.__next_s=self.__next_s||[]).push(["assets/www.verizon.com/business/site/nr-njs.js",{"type":"text/javascript","async":"","defer":""}])</script><script>(self.__next_s=self.__next_s||[]).push([0,{"type":"text/javascript","suppressHydrationWarning":true,"children":"\n  function onJquery(cb) {\n    if (typeof(jQuery)!=\"undefined\") {\n      $(document).ready(cb);\n    } else {\n     document.getElementById(\"jqjs\").addEventListener(\"load\",cb);\n    }\n  }\n  checkPage = new function() {\n    checkSiteScripts = function() {\n        if ((typeof(vzNav)||typeof(vzCake))==\"undefined\") {\n          console.log(\"check page failed\");\n          const e = new Event(\"click\");\n          document.body.dispatchEvent(e);\n        }\n    }\n    checkCSS = function() {\n      const cup = document.querySelector(\".cup.contain\");\n      const cupbg = document.querySelector(\".cup .background\");\n      if ((cup \u0026\u0026 getComputedStyle(cup).position==\"static\") || (cupbg \u0026\u0026 getComputedStyle(cupbg).position==\"static\")) {\n      const css = document.createElement(\"link\");\n      css.setAttribute(\"rel\",\"stylesheet\");\n      css.setAttribute(\"href\",\"https://www.verizon.com/business/site/site.css");\n      console.log(\"Loading backup CSS\");\n      if (vzCake) { vzCake.backup=true; }\n      document.body.append(css);\n      }\n    }\n    this.check = function() {\n     setTimeout(checkSiteScripts,3600);\n     setTimeout(checkCSS,5200);\n    }\n    window.addEventListener(\"load\",this.check,{once:true});\n  }\n","id":"safetyCheck"}])</script></div><header class=""><div id="vz-gh20">
<div class="gnav20" data-exp-name="Mega Drawer">
     <input type="hidden" id="cradle-context">
    <div class="gnav20-sticky-content">    	
     	




    
    
    <div class="gnav20-apicomponentnewdesign">


<a class="gnav20-header-accessibility" tabindex="0" href="/business/support/about/accessibility/overview/">
	<span>Accessibility Resource Center</span>
</a>
<a class="gnav20-header-accessibility" href="#gnav20-header-end" tabindex="0" id="gnav20-skip-to-main-content-id">
	<span>Skip to main content</span>
</a>

<div class="gnav20-width-wrapper gnav20-new-design gnav20-promo-bottom gnav20-not-featured" data-gnav20-container="header">
	
	
	<div class="gnav20-vzhmoverlay" style="height: 0px;"></div>
	<div class="gnav20-main">
		




    
    
    <div class="gnav20-gnav-new-design">

<div class="gnav20-desktop">
	<div class="gnav20-row-one opacityOne">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-eyebrow">

<div class="gnav20-eyebrow-link-list">
    <div class="gnav20-eyebrow-link-list-item gnav20-two">
        </div>
</div>



</div>



		</div>		
		<div class="gnav20-utility">		
			




    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div>
				
		<a aria-label="Contact us" href="/business/support/business/contact/" data-label="Contact us">
			
			Contact us
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div>
				
		<a aria-label="Support" href="/business/support/business/support/" data-label="Support">
			
			Support
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div class="gnav20-dropdown-box">
		<button class="gnav20-sign-in" aria-label="Stores Menu List" aria-expanded="false">Stores</button>		
					
		<div class="gnav20-stores-list gnav20-dropdown-menu gnav20-hide" aria-expanded="false">
			<ul class="gnav20-dropdown">
				
					<li class="gnav20-dropdown-list gnav20-hide-on-desktop gnav20-goback">
						<button class="gnav20-back-to-menu">Back to stores</button>
					</li>
				
				<li class="gnav20-dropdown-list">
					<a class="gnav20-dropdown-list-item" href="/business/support/business/locations/search/" data-label="Find a Verizon Store">Find a Verizon Store</a>
				</li>
			
				
				<li class="gnav20-dropdown-list">
					<a class="gnav20-dropdown-list-item" href="/business/support/business/locations/appointment-search/" data-label="Request a Store Appointment">Request a Store Appointment</a>
				</li>
			</ul>
		</div>
	</div>
</div></div>


    
    
    <div class="gnav20-localization">

    
		<div class="gnav20-utility-wrapper">
					
			<div class="gnav20-language-box">
				<div id="gnav20-language-selection-menu" role="button" class="gnav20-language-link" aria-label="Language Options" aria-expanded="false" tabindex="0">
					<span>
						<svg width="18px" height="18px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<g id="International-Selector" stroke="none" stroke-width="1" fill="currentcolor" fill-rule="evenodd">
								<path d="M9.97511111,14.712 C10.9146667,13.3715556 11.552,11.1057778 11.6248889,8.50044444 L14.9751111,8.50044444 C14.7644444,11.4524444 12.7208889,13.9022222 9.97511111,14.712 Z M1.02488889,8.49955556 L4.37511111,8.49955556 C4.44888889,11.1048889 5.08622222,13.3706667 6.02488889,14.7111111 C3.27911111,13.9022222 1.23555556,11.4524444 1.02488889,8.49955556 Z M6.02488889,1.288 C5.08622222,2.62844444 4.44888889,4.89422222 4.37511111,7.50044444 L1.02488889,7.50044444 C1.23555556,4.54755556 3.27911111,2.09777778 6.02488889,1.288 Z M5.37511111,7.50044444 C5.49155556,3.51822222 6.968,1 8,1 C9.032,1 10.5084444,3.51822222 10.6248889,7.49955556 L5.37511111,7.49955556 L5.37511111,7.50044444 Z M8,15 C6.968,15 5.49155556,12.4817778 5.37511111,8.50044444 L10.6248889,8.50044444 C10.5084444,12.4817778 9.032,15 8,15 Z M14.9751111,7.50044444 L11.6248889,7.50044444 C11.5511111,4.89511111 10.9137778,2.62933333 9.97511111,1.28888889 C12.7208889,2.09777778 14.7644444,4.54755556 14.9751111,7.50044444 Z M0,8 C0,12.4186667 3.58133333,16 8,16 C12.4186667,16 16,12.4186667 16,8 C16,3.58133333 12.4186667,0 8,0 C3.58133333,0 0,3.58133333 0,8 Z">
								</path>
							</g>
						</svg>
					</span>
					
				</div>
				<div class="gnav20-dropdown-menu gnav20-hide" id="localization">
					<button id="gnav20-closex3" class="gnav20-closex" aria-label="close the modal overlay" tabindex="0">Close
					</button>
					<ul class="gnav20-dropdown">
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/solutions/enterprise/" data-label="USA (eng)">USA (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-au/" data-label="Australia (eng)">Australia (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/de-de/" data-label="Deutschland (de)">Deutschland (de)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/fr-fr/" data-label="France (fr)">France (fr)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-gb/" data-label="Great Britain (eng)">Great Britain (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-nl/" data-label="Netherlands (eng)">Netherlands (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-sg/" data-label="Singapore (eng)">Singapore (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/ja-jp/" data-label="日本（日本語)">日本（日本語)</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    

</div>



        </div>
    </div>
	<div class="gnav20-row-two">
		<div class="gnav20-grid1-wrapper">
			




    
    
    <div class="gnav20-logo">

    
    
        
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        
        <a class="gnav20-logoHeaderVBG" title="Verizon Business" href="/business/support/business/"></a>
        
    </div>
</div>



		</div>
		<div class="gnav20-navigation opacityOne">
			




    
    
    <div class="gnav20-navigation opacityOne">
<div class="gnav20-global-nav-list gnav20-navigation-list">
	




    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Mobile-L1" class="gnav20-menu-label gnav20-menu-label-link" href="/business/support/business/products/mobile/plans/" aria-label="Mobile">Mobile</a>
	</div>

</div>


    
    
    </div>


    
    
    </div>


    
    
    </div>



</div></div>



		</div>
		<div class="gnav20-utility opacityOne">
			




    
    
    <div class="gnav20-account-utility">

<div class="gnav20-utility-wrapper">
	<div class="gnav20-account-box" id="gnav20-account-menu">
		
		
		

		
			
				<span>
					<a id="gnav20-account-link-id" class="gnav20-account-link" tabindex="0" aria-label="Log In" href="https://mblogin.verizonwireless.com/account/business/signin">
							Log In
					</a>
				</span>
			
		
		<div class="gnav20-dropdown-menu gnav20-hide" id="gnav20-sign-in">
			<p class="gnav20-signin-content-title"></p>
				
			<button class="gnav20-close-account-utility" aria-label="close the Sign In Menu" tabindex="0">Close</button>		
		</div>
		<div class="gnav20-vzmoverlay"></div>
	</div>
</div></div>


    
    
    <div class="gnav20-search-utility">

	<div class="gnav20-utility-wrapper">
		<div class="gnav20-search-wrapper">
			
				<input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context" name="isProd" value="true">
			
			<button class="gnav20-search-icon" id="gnav20-search-icon" aria-label="Search Verizon" data-placeholder-text="Search Verizon"></button>
		</div>
	</div>
</div>


    
    
    <div class="gnav20-cart">

<div class="gnav20-utility-wrapper gnav20-cart-wrapper gnav20-show">
	<a class="gnav20-bubble-position" href="/business/support/business/support/carts/">
		<span class="gnav20-cart-bubble"></span>
		<button class="gnav20-cart"></button>
		
	</a>
</div></div>



        </div>
    </div>
</div>

<div class="gnav20-mobile">
	<div class="gnav20-wrapper-logo">
		




    
    
    <div class="gnav20-logo">

    
    
        
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        
        <a class="gnav20-logoHeaderVBG" title="Verizon Business" href="/business/support/business/"></a>
        
    </div>
</div>



	</div>
    <div class="gnav20-utility opacityOne">
        




    
    
    <div class="gnav20-account-utility">

<div class="gnav20-utility-wrapper">
	<div class="gnav20-account-box" id="gnav20-account-menu-mobile">
		
		
		

		
			
				<span>
					<a id="gnav20-account-link-id-mobile" class="gnav20-account-link" tabindex="0" aria-label="Log In" href="https://mblogin.verizonwireless.com/account/business/signin">
							Log In
					</a>
				</span>
			
		
		<div class="gnav20-dropdown-menu gnav20-hide" id="gnav20-sign-in-mobile"><button class="gnav20-close-account-utility" aria-label="close the Sign In Menu" tabindex="0">Close</button>
			<p class="gnav20-signin-content-title"></p>
				
					
		</div>
		<div class="gnav20-vzmoverlay"></div>
	</div>
</div></div>


    
    
    <div class="gnav20-search-utility">

	<div class="gnav20-utility-wrapper">
		<div class="gnav20-search-wrapper">
			
				<input tabindex="-1" style="display:none;" type="hidden" id="gnav20-search-context-mobile" name="isProd" value="true">
			
			<button class="gnav20-search-icon" id="gnav20-search-icon-mobile" aria-label="Search Verizon" data-placeholder-text="Search Verizon"></button>
		</div>
	</div>
</div>


    
    
    <div class="gnav20-cart">

<div class="gnav20-utility-wrapper gnav20-cart-wrapper gnav20-show">
	<a class="gnav20-bubble-position" href="/business/support/business/support/carts/">
		<span class="gnav20-cart-bubble"></span>
		<button class="gnav20-cart"></button>
		
	</a>
</div></div>



        <button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0" aria-label="Menu for navigation opens a modal overlay">
		</button>
    </div>
    <nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
        <button id="gnav20-closex" class="gnav20-closex" aria-label="close the Menu" tabindex="0">Close</button>
        <div id="gnav20-ulwrapper"><div class="gnav20-eyebrow">

<div class="gnav20-eyebrow-link-list">
    <div class="gnav20-eyebrow-link-list-item gnav20-two">
        </div>
</div>



</div>



			<div class="gnav20-navigation-placeholder">
			




    
    
    <div class="gnav20-navigation">
<div class="gnav20-global-nav-list gnav20-navigation-list">
	




    
    
    <div class="gnav20-navigation-item">

	<div class="gnav20-primary-menu">
		<a x-cq-linkchecker="skip" id="gnav20-Mobile-L1-mobile" class="gnav20-menu-label gnav20-menu-label-link" href="/business/support/business/products/mobile/plans/" aria-label="Mobile">Mobile</a>
	</div>

</div>


    
    
    </div>


    
    
    </div>


    
    
    </div>



</div></div>



		</div>
			
			
        </div>
        <div id="gnav20-footerlink">
            




    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div>
				
		<a aria-label="Contact us" href="/business/support/business/contact/">
			
			Contact us
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div>
				
		<a aria-label="Support" href="/business/support/business/support/">
			
			Support
			
		</a>			
		
	</div>
</div></div>


    
    
    <div class="gnav20-store">

<div class="gnav20-utility-wrapper">
	<div class="gnav20-dropdown-box">
		<button class="gnav20-sign-in" aria-label="Stores Menu List" aria-expanded="false">Stores</button>		
					
		<div class="gnav20-stores-list gnav20-dropdown-menu gnav20-hide" aria-expanded="false">
			<ul class="gnav20-dropdown gnav20-fixed-top gnav20-navigation-item">
				
					<li class="gnav20-dropdown-list gnav20-hide-on-desktop gnav20-goback">
						<button class="gnav20-back-to-menu">Back to stores</button>
					</li>
				
				<li class="gnav20-dropdown-list">
					<a class="gnav20-dropdown-list-item" href="/business/support/business/locations/search/">Find a Verizon Store</a>
				</li>
			
				
				<li class="gnav20-dropdown-list">
					<a class="gnav20-dropdown-list-item" href="/business/support/business/locations/appointment-search/">Request a Store Appointment</a>
				</li>
			</ul>
		</div>
	</div>
</div></div>


    
    
    <div class="gnav20-localization">

    
		<div class="gnav20-utility-wrapper">
					
			<div class="gnav20-language-box">
				<div id="gnav20-language-selection-menu-mobile" role="button" class="gnav20-language-link" aria-label="Language Options" aria-expanded="false">
					<span>
						<svg width="18px" height="18px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<g id="International-Selector-mobile" stroke="none" stroke-width="1" fill="currentcolor" fill-rule="evenodd">
								<path d="M9.97511111,14.712 C10.9146667,13.3715556 11.552,11.1057778 11.6248889,8.50044444 L14.9751111,8.50044444 C14.7644444,11.4524444 12.7208889,13.9022222 9.97511111,14.712 Z M1.02488889,8.49955556 L4.37511111,8.49955556 C4.44888889,11.1048889 5.08622222,13.3706667 6.02488889,14.7111111 C3.27911111,13.9022222 1.23555556,11.4524444 1.02488889,8.49955556 Z M6.02488889,1.288 C5.08622222,2.62844444 4.44888889,4.89422222 4.37511111,7.50044444 L1.02488889,7.50044444 C1.23555556,4.54755556 3.27911111,2.09777778 6.02488889,1.288 Z M5.37511111,7.50044444 C5.49155556,3.51822222 6.968,1 8,1 C9.032,1 10.5084444,3.51822222 10.6248889,7.49955556 L5.37511111,7.49955556 L5.37511111,7.50044444 Z M8,15 C6.968,15 5.49155556,12.4817778 5.37511111,8.50044444 L10.6248889,8.50044444 C10.5084444,12.4817778 9.032,15 8,15 Z M14.9751111,7.50044444 L11.6248889,7.50044444 C11.5511111,4.89511111 10.9137778,2.62933333 9.97511111,1.28888889 C12.7208889,2.09777778 14.7644444,4.54755556 14.9751111,7.50044444 Z M0,8 C0,12.4186667 3.58133333,16 8,16 C12.4186667,16 16,12.4186667 16,8 C16,3.58133333 12.4186667,0 8,0 C3.58133333,0 0,3.58133333 0,8 Z">
								</path>
							</g>
						</svg>
					</span>
					
				</div>
				<div class="gnav20-dropdown-menu gnav20-hide" id="localization-mobile">
					<button id="gnav20-closex3-mobile" class="gnav20-closex" aria-label="close the modal overlay" tabindex="0">Close
					</button>
					<ul class="gnav20-dropdown gnav20-fixed-top gnav20-navigation-item">
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/solutions/enterprise/">USA (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-au/">Australia (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/de-de/">Deutschland (de)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/fr-fr/">France (fr)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-gb/">Great Britain (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-nl/">Netherlands (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/en-sg/">Singapore (eng)</a>
						</li>
					
						<li class="gnav20-dropdown-list">
							<a href="/business/support/business/ja-jp/">日本（日本語)</a>
						</li>
					</ul>
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




</div>
		
	</div>
	
	
	
		<input type="hidden" id="gnav20-prod-context" name="isProd" value="true">
			
	
</div>
<div name="headerEnd" id="gnav20-header-end" role="none" aria-hidden="true" tabindex="-1" aria-label="end of navigation menu">
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
	<div class="gnav20-sticky-header gnav20-new-design"></div>
</div>



</div><div class="secondarynav cup white lang-en"><ul class="breadcrumb-list" aria-label="Breadcrumb"><li><a class="vz-text-link" data-loc="Secondary Nav:Breadcrumb" href="/business/support/business/">Home</a></li><li><a class="vz-text-link" data-loc="Secondary Nav:Breadcrumb" href="/business/support/business/support/">Support</a></li></ul></div></header><div role="main"><div class="cup contain C8ee8a8 indent" id="C8ee8a8" aria-labelledby="hlC8ee8a8"><div class="plate full C8ee8a8"><div class="fullcontent"><h1 id="hlC8ee8a8" data-level="2" class="headM mw12 align-center"> <!-- -->Verizon Business support</h1><div class="text mw12 align-center"><p>Not a business customer?</p><p><a href="/business/support/support/" target="_blank">Find consumer support here</a></p></div></div><div class="primary empty"></div></div></div><style type="text/css">.hpsearch input.q { margin: 0; padding: 16px 56px 16px 32px; border-radius: 32px; max-width: calc(100vw - 32px); width: 640px; font-weight: bold;}
.hpsearch input.q+svg { position: absolute; margin: 16px 0 0 -48px; width: 24px; height: 24px; cursor: pointer;}</style><div class="cup contain indent">
<div class="background bleed" style="background-color:#FFF"></div>
<div class="fullcontent dark align-center">
<form name="hpsearch" class="hpsearch" action="/business/search/">
<input class="q" type="search" required="" placeholder="What can we help you find today?" name="q">
<svg xmlns="http://www.w3.org/2000/svg"><rect fill="none" width="20" height="20"></rect><path fill="#000" d="M18.9,18.1l-6-6c1-1.2,1.6-2.8,1.6-4.3c0-3.7-3-6.8-6.8-6.7S1,4.1,1,7.8s3,6.8,6.8,6.7c1.6,0,3.1-0.6,4.4-1.6 l6,6L18.9,18.1z M7.8,13.4c-3.1,0-5.6-2.5-5.6-5.6s2.5-5.6,5.6-5.6c3.1,0,5.6,2.5,5.6,5.6c0,0,0,0,0,0C13.4,10.9,10.9,13.4,7.8,13.4 C7.8,13.4,7.8,13.4,7.8,13.4z"></path></svg>
<input type="hidden" name="ES" value="business">
<input type="hidden" name="source" value="business">
<input type="hidden" name="src" value="smb">
</form>
</div>
</div><div class="cup contain C9heie6 cup full gap columns" id="C9heie6" aria-labelledby="hlC9heie6"><a name="quick-links" data-name="Quick links" id="quick-links"></a><div class="fullcontent"><h2 id="hlC9heie6" data-level="2" class="headM mw12 bold align-center"> <!-- -->Quick Links and Other&nbsp;Support</h2></div><div class="primary"><div class="columns"><div class="crow c4 gap" data-c="4" data-n="4" data-add-direction="horizontal"><div class="cup contain Cm8lc9d cup full indent" id="Cm8lc9d" aria-labelledby="hlCm8lc9d"><style type="text/css">.background.Cm8lc9d{background-color:#f8f7f5;background-position:center;background-size:contain}</style><a name="activate-a-device" data-name="Activate a device" id="activate-a-device"></a><div class="background Cm8lc9d rounded"></div><div class="plate full  Cm8lc9d" style="min-height: 0px;"><div class="fullcontent light"><h3 id="hlCm8lc9d" data-level="3" class="headXS mw12 bold align-left"> <!-- -->Activate a device</h3></div><div class="primary light top"><div class="text mw12"><p>Learn how to activate your wireless device.<br>
</p></div><div class="ctas align-left"><a class="link vz-text-link" href="/business/support/support/devices/" target="_blank" aria-label="Quick links:Activate a device:Activate" data-loc="Content:Link:Quick links:Activate a device:Activate">Activate</a></div></div></div></div><div class="cup contain Ce069d6 cup full indent" id="Ce069d6" aria-labelledby="hlCe069d6"><style type="text/css">.background.Ce069d6{background-color:#f8f7f5;background-position:center;background-size:contain}</style><a name="pay-my-bill" data-name="Pay my bill" id="pay-my-bill"></a><div class="background Ce069d6 rounded"></div><div class="plate full  Ce069d6" style="min-height: 0px;"><div class="fullcontent light"><h3 id="hlCe069d6" data-level="3" class="headXS mw12 bold align-left"> <!-- -->Pay my bill</h3></div><div class="primary light top"><div class="text mw12 align-left"><p>Pay your bill without having to log in to your online account.<br>
</p></div><div class="ctas stack align-left"><a class="link vz-text-link" href="https://mb.verizonwireless.com/mbt/manageservice/payments.go/#/billpay/onetimepayment" target="_blank" aria-label="Quick links:Pay my bill:Pay my Wireless bill" data-loc="Content:Link:Quick links:Pay my bill:Pay my Wireless bill">Pay my Wireless bill</a><br><a class="link vz-text-link" href="/business/support/expresspay/" target="_blank" aria-label="Quick links:Pay my bill:Pay my Wireline bill" data-loc="Content:Link:Quick links:Pay my bill:Pay my Wireline bill">Pay my Wireline bill</a></div></div></div></div><div class="cup contain C5jf3df cup full indent" id="C5jf3df" aria-labelledby="hlC5jf3df"><style type="text/css">.background.C5jf3df{background-color:#f8f7f5;background-position:center;background-size:contain}</style><a name="verizon-enterprise-center-support" data-name="Verizon Enterprise Center support" id="verizon-enterprise-center-support"></a><div class="background C5jf3df rounded"></div><div class="plate full  C5jf3df" style="min-height: 0px;"><div class="fullcontent light"><h3 id="hlC5jf3df" data-level="3" class="headXS mw12 bold align-left"> <!-- -->Verizon Enterprise Center support</h3><div class="text mw12 align-left"><p>Verizon Enterprise Center (VEC) users can use the links below to access quick tasks and support.</p></div><div class="ctas stack align-left"><a class="link vz-text-link" href="/business/support/business/support/business-quick-links/" aria-label="Quick links:Verizon Enterprise Center support:Other quick tasks" data-loc="Content:Link:Quick links:Verizon Enterprise Center support:Other quick tasks">Other quick tasks</a><br><a class="link vz-text-link" href="/business/support/business/support/vec/" aria-label="Quick links:Verizon Enterprise Center support:Support center" data-loc="Content:Link:Quick links:Verizon Enterprise Center support:Support center">Support center</a><br><a class="link vz-text-link" href="/business/support/business/support/service-assurance-user-guides/" aria-label="Quick links:Verizon Enterprise Center support:Service Assurance user guides" data-loc="Content:Link:Quick links:Verizon Enterprise Center support:Service Assurance user guides">Service Assurance user guides</a></div></div><div class="primary empty"></div></div></div><div class="cup contain Cfadif0 cup full indent" id="Cfadif0" aria-labelledby="hlCfadif0"><style type="text/css">.background.Cfadif0{background-color:#f8f7f5;background-position:center;background-size:contain}</style><a name="other-business-support" data-name="Other business support" id="other-business-support"></a><div class="background Cfadif0 rounded"></div><div class="plate full  Cfadif0" style="min-height: 0px;"><div class="fullcontent light"><h3 id="hlCfadif0" data-level="3" class="headXS mw12 bold align-left"> <!-- -->Other business support</h3><div class="text mw12 align-left"><p>Access public sector support or additional online accounts.</p></div><div class="ctas stack align-left"><a class="link vz-text-link" href="/business/support/business/support/public-sector/contact-us/" aria-label="Quick links:Other business support:Public Sector support" data-loc="Content:Link:Quick links:Other business support:Public Sector support">Public Sector support</a><br><a class="link vz-text-link" href="/business/support/business/support/business-managed-portals/" aria-label="Quick links:Other business support:Additional online accounts" data-loc="Content:Link:Quick links:Other business support:Additional online accounts">Additional online accounts</a></div></div><div class="primary empty"></div></div></div></div></div></div></div><div class="cup contain Cb88n5d accordion" id="Cb88n5d" aria-labelledby="hlCb88n5d"><a name="topics" data-name="Topics" id="topics"></a><div class="fullcontent"><h2 id="hlCb88n5d" data-level="2" class="headM mw6 bold align-center"> <!-- -->Browse support by&nbsp;topic.</h2><div class="text mw6 align-center"><p>In this support center, we have made it easy to search for assistance by topic. If you are&nbsp;a&nbsp;My&nbsp;Business Wireless customer, you can access support resources for our suite of wireless&nbsp;business solutions. If you are a My Business Wireline customer, you can find support for&nbsp;your Fios phone, internet and TV products and services.</p></div></div><div class="primary"><div class="accordion" limit="0"><input type="checkbox" id="aja5f5c" name="Cb88n5d"><label for="aja5f5c" class="vz-text-link bodyLG pad"><h3 class=" bodyLG pad">Registration and user management</h3></label><div><div class="cup contain Cab025c indent" id="Cab025c"><a name="registration-and-user-management" data-name="Registration and user management" id="registration-and-user-management"></a><div class="plate full Cab025c"><div class="fullcontent"><div class="text mw12"><h4>Register an account and get started.</h4><ul><li><a href="https://enterpriseportal.verizon.com/ui/public/#/selfreg/lob">Register for My Business Wireless</a></li><li><a href="https://enterpriseportal.verizon.com/ui/public/#/selfreg/lob">Register for My Business Wireline</a></li></ul><br><h4>Using My Verizon Apps</h4><ul><li><a href="/business/support/business/support/registration-and-user-management/using-my-verizon-app/get-to-know-the-my-verizon-for-business-app/">Get to know the My Verizon for Business app (Mobile)</a></li><li><a href="/business/support/business/support/registration-and-user-management/using-my-verizon-app/get-to-know-the-my-fios-app/">Get to know the My Verizon app (Internet, TV and Phone)</a></li></ul><br><h4>Password management</h4><ul><li><a href="/business/support/business/support/registration-and-user-management/password-management/create-strong-passwords/">Create strong passwords</a></li><li><a href="/business/support/business/support/registration-and-user-management/password-management/update-or-reset-password/">Update or reset passwords</a></li></ul><br><h4>Online account access</h4><ul><li><a href="/business/support/business/support/registration-and-user-management/online-account-access/user-roles-and-permissions/">User roles and permissions</a></li></ul><br><p>Not seeing what you’re looking for? Get an overview of what each topic in this category has to offer.</p></div><div class="ctas"><a class="trans button vz-button-link" href="/business/support/business/support/registration-and-user-management/" aria-label="Registration and user management:Explore this category" data-loc="Content:Button:Registration and user management:Explore this category">Explore this category</a></div></div><div class="primary empty"></div></div></div></div><input type="checkbox" id="a8cfb98" name="Cb88n5d"><label for="a8cfb98" class="vz-text-link bodyLG pad"><h3 class=" bodyLG pad">Account maintenance and management</h3></label><div><div class="cup contain Cnd9m98 indent" id="Cnd9m98"><a name="account-maintenance-and-management" data-name="Account maintenance and management" id="account-maintenance-and-management"></a><div class="plate full Cnd9m98"><div class="fullcontent"><div class="text mw12"><h4>Orders and purchases</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/orders-and-purchase-management/submit-an-order/">Submit an order</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/orders-and-purchase-management/view-my-orders/">View orders</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/orders-and-purchase-management/make-a-return/">Make a return</a></li></ul><br><h4>My Business Wireless reporting</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-reporting/run-and-download-reports/">Run and download reports</a></li></ul><br><h4>Plan management</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/plan-management/manage-plans/">Manage your plans</a><br></li></ul><br><h4>Wireless device service changes</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/wireless-device-service-changes/suspend-service/">Suspend my service</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/wireless-device-service-changes/resume-service/">Resume my service</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/wireless-device-service-changes/transfer-service/">Transfer my service</a></li></ul><br><h4>My Business Wireline account management</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireline-account-management/view-and-manage-your-accounts/">View and manage your accounts</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireline-account-management/create-and-manage-subaccounts/">Create and manage subaccounts</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireline-account-management/manage-visa-gift-card-promotion/">Manage Visa gift card promotion</a></li></ul><br><h4>My Business Wireless account management</h4><ul><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/view-and-manage-your-account/">View and manage your wireless accounts</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/manage-wireless-line/">View and manage your wireless lines</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/add-and-remove-features/">Add and remove features</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/use-secure-messaging/">Use Secure Messaging</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/5g-business-movers/">Move Your Business Internet</a></li><li><a href="/business/support/business/support/account-maintenance-and-management/my-business-wireless-account-management/mobile-security-management/">Mobile Security Management</a></li></ul><br><p>Not seeing what you’re looking for? Get an overview of what each topic in this category has to offer.</p></div><div class="ctas"><a class="trans button vz-button-link" href="/business/support/business/support/account-maintenance-and-management/" aria-label="Account maintenance and management:Explore this category" data-loc="Content:Button:Account maintenance and management:Explore this category">Explore this category</a></div></div><div class="primary empty"></div></div></div></div><input type="checkbox" id="aaj0abf" name="Cb88n5d"><label for="aaj0abf" class="vz-text-link bodyLG pad"><h3 class=" bodyLG pad">Billing and payments</h3></label><div><div class="cup contain C1jilbf indent" id="C1jilbf"><a name="billing-and-payments" data-name="Billing and payments" id="billing-and-payments"></a><div class="plate full C1jilbf"><div class="fullcontent"><div class="text mw12"><h4>My Business Wireless</h4><ul><li><a href="/business/support/business/support/billing-and-payments/my-business-wireless/pay-my-bill/">Pay my bill</a></li><li><a href="https://mb.verizonwireless.com/mbt/manageservice/payments.go/#/billpay/onetimepayment/">Pay my bill without logging in</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireless/payment-options/">Payment options</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireless/view-my-bill/">View my bill</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireless/manage-billing/">Manage my billing</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireless/frequently-asked-questions/">Frequently asked questions</a></li></ul><br><h4>My Business Wireline</h4><ul><li><a href="/business/support/business/support/billing-and-payments/my-business-wireline/pay-my-bill/">Pay my bill</a></li><li><a href="/business/support/expresspay/">Pay my bill without logging in</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireline/payment-options/">Payment options</a></li><li><a href="/business/support/business/support/billing-and-payments/my-business-wireline/view-my-bill/">View my bill</a></li></ul><br><p>Not seeing what you’re looking for? Get an overview of what each topic in this category has to offer.</p></div><div class="ctas"><a class="trans button vz-button-link" href="/business/support/business/support/billing-and-payments/" aria-label="Billing and payments:Explore this category" data-loc="Content:Button:Billing and payments:Explore this category">Explore this category</a></div></div><div class="primary empty"></div></div></div></div><input type="checkbox" id="a713a05" name="Cb88n5d"><label for="a713a05" class="vz-text-link bodyLG pad"><h3 class=" bodyLG pad">Equipment, devices and services</h3></label><div><div class="cup contain Cm1ll05 indent" id="Cm1ll05"><a name="equipment-devices-and-services" data-name="Equipment, devices and services" id="equipment-devices-and-services"></a><div class="plate full Cm1ll05"><div class="fullcontent"><div class="text mw12"><h4>Wireless devices</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/wireless-devices/learn-about-device/">Learn about my device</a></li><li><a href="/business/support/business/support/equipment-devices-services/wireless-devices/esim-support/">Get eSim help</a></li><li><a href="/business/support/business/support/equipment-devices-services/wireless-devices/unlock-device/">Unlock my device</a></li><li><a href="/business/support/business/support/equipment-devices-services/wireless-devices/bring-your-number/">Bring Your Phone Number to Verizon FAQs</a></li></ul><br><h4>Routers</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/routers/verizon-router/">Verizon Router</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/fios-router/">Fios Router</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/fios-quantum-gateway/">Fios Quantum Gateway</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/actiontec-gt784wnv/">Actiontec GT784WNV</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/d-link-2750b-gateway/">D-Link 2750B Gateway</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/verizon-business-internet-gateway-xc46be/">Verizon Business Internet Gateway XC46BE</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/verizon-internet-gateway-business-fsno21va/">Verizon Internet Gateway - Business (FSNO21VA)</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/verizon-business-internet-gateway-ask-ncm1100e/">Verizon Business Internet Gateway (ASK-NCM1100E)</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/verizon-internet-gateway-for-business-ask-ncq1338e/">Verizon Internet Gateway for Business (ASK-NCQ1338E)</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/arris-nvg558-lte-router/">Arris NVG558 LTE Router</a></li><li><a href="/business/support/business/support/equipment-devices-services/routers/discontinued-networking-equipment/">Discontinued networking equipment</a></li></ul><br><h4>Equipment returns</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/equipment-return/">Equipment returns</a></li></ul><br><h4>Extenders</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/internet-extenders/verizon-wifi-extender/">Verizon Wi-Fi Extender</a></li><li><a href="/business/support/business/support/equipment-devices-services/internet-extenders/fios-extender/">Fios Extender</a></li><li><a href="/business/support/business/support/equipment-devices-services/internet-extenders/fios-extender-wcb6200q/">Fios Network Extender WCB6200Q</a></li><li><a href="/business/support/business/support/equipment-devices-services/internet-extenders/wifi-extender/">Wi-Fi Extender</a></li></ul><br><h4>Traditional phones and VoIP</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/traditional-phones/getting-started/">Business Digital Voice</a></li><li><a href="/business/support/business/support/equipment-devices-services/traditional-phones/troubleshooting/">Troubleshoot your traditional phone</a></li><li><a href="/business/support/business/support/equipment-devices-services/traditional-phones/calling-features/">Learn about calling features</a></li><li><a href="/business/support/business/support/equipment-devices-services/traditional-phones/user-guide-library/">User Guide library</a></li></ul><br><h4>Fios TV equipment</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-equipment/cablecards/">CableCARDS</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-equipment/digital-adapters/">Digital adapters</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-equipment/remote-controls/">Remote controls</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-equipment/fios-tv-one-set-top-box/">Set-Top Boxes</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-equipment/accessibility/">Accessibility</a></li></ul><br><h4>Fios Internet services</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/internet-services/fios-internet/">Fios Internet</a></li><li><a href="/business/support/business/support/equipment-devices-services/internet-services/frequently-asked-questions/">Frequently Asked Questions</a></li></ul><br><h4>Fios TV services</h4><ul><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/fios-tv-installation/">Fios TV installation</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/require-equipment/">Fios TV required equipment</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/message-center/">Fios TV message center</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/troubleshooting/">Troubleshooting</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/tv-programming/">View Fios TV programming</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/tv-features/">Learn about Fios TV features</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/local-franchise-authority/">Local Franchise Authority Contact Information</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/annual-notices/">Fios TV Annual Notice</a></li><li><a href="/business/support/business/support/equipment-devices-services/fios-tv-services/frequently-asked-questions/">Frequently Asked Questions</a></li></ul><br><h4>One Talk services</h4><ul><li><a href="/business/support/support/one-talk/" target="_blank">One Talk Support Overview</a></li><li><a href="/business/support/support/one-talk-first-steps/" target="_blank">One Talk First Steps</a></li><li><a href="/business/support/support/one-talk-faqs/" target="_blank">One Talk FAQs</a></li><li><a href="/business/support/support/one-talk-web-portal-admin-guide/" target="_blank">One Talk Administrator Guide</a></li><li><a href="/business/support/support/simulators/" target="_blank">Customer Simulators</a></li><li><a href="/business/support/support/one-talk-features/" target="_blank">One Talk Features</a></li><li><a href="/business/support/support/one-talk-enhancements/" target="_blank">One Talk Enhancements</a></li><li><a href="/business/support/support/download-onetalk-windows-mac/" target="_blank">One Talk Desktop App User Guide</a></li><li><a href="/business/support/support/compatible-one-talk-devices/" target="_blank">One Talk Supported Devices</a></li><li><a href="/business/support/support/one-talk-lte-desk-phones-overview/" target="_blank">One Talk LTE Connected Desk Phones</a></li><li><a href="/business/support/support/one-talk-managing-spam/" target="_blank">Managing Unwanted Spam Calls With Verizon One Talk</a></li><li><a href="/business/support/support/one-talk-app-download-install/" target="_blank">One Talk Mobile App - Download and Install</a></li></ul><br><p>Not seeing what you’re looking for? Get an overview of what each topic in this category has to offer.</p></div><div class="ctas"><a class="trans button vz-button-link" href="/business/support/business/support/equipment-devices-services/" aria-label="Equipment, devices and services:Explore this category" data-loc="Content:Button:Equipment, devices and services:Explore this category">Explore this category</a></div></div><div class="primary empty"></div></div></div></div><input type="checkbox" id="acbbn5f" name="Cb88n5d"><label for="acbbn5f" class="vz-text-link bodyLG pad"><h3 class=" bodyLG pad">Product support</h3></label><div><div class="cup contain C3c6a5f indent" id="C3c6a5f"><a name="product-support" data-name="Product support" id="product-support"></a><div class="plate full C3c6a5f"><div class="fullcontent"><div class="text mw12"><h4>Products</h4><ul><li><a href="/business/support/business/support/product-support/products/find-voice-and-collaboration-resources/">Find Voice and Collaboration support resources</a></li><li><a href="/business/support/business/support/product-support/products/find-basic-internet-resources/">Find Basic Internet support resources</a></li><li><a href="/business/support/business/support/product-support/products/find-fios-internet-support/">Find Fios Internet support resources</a></li><li><a href="/business/support/business/support/product-support/products/find-network-resources/">Find Network support resources</a></li><li><a href="/business/support/business/support/product-support/products/techteam-for-internet/">Find TechTeam support resources</a></li><li><a href="/business/support/business/support/product-support/products/learn-how-to-get-started-with-welcome-kits/">Learn how to get started with Welcome Kits</a></li><li><a href="/business/support/business/support/product-support/products/find-business-internet-secure-support/">Find Business Internet Secure support resources</a></li><li><a href="/business/support/business/support/product-support/products/push-to-talk/">Find Push to Talk Plus support resources</a></li><li><a href="/business/support/business/support/product-support/products/verizon-business-complete/">Find Verizon Business Complete Support Resources</a></li><li><a href="/business/support/business/support/product-support/products/business-assistant-resources/">Find Verizon Business Assistant support</a></li><li><a href="/business/support/business/support/product-support/products/5g-mobile-network-slice-enhanced-video-calling/">5G Mobile Network Slice - Enhanced Video Calling Supported Metro Areas</a></li></ul><br><p>Not seeing what you’re looking for? Get an overview of what each topic in this category has to offer.</p></div><div class="ctas"><a class="trans button vz-button-link" href="/business/support/business/support/product-support/" aria-label="Product support:Explore this category" data-loc="Content:Button:Product support:Explore this category">Explore this category</a></div></div><div class="primary empty"></div></div></div></div></div></div></div><div class="cup contain Cfm1d73 cup full gapabove columns" id="Cfm1d73"><style type="text/css">.background.Cfm1d73{background-color:#f8f7f5;background-position:center;background-size:contain}</style><a name="additional" data-name="Additional" id="additional"></a><div class="background Cfm1d73 bleed  "></div><div class="primary light"><div class="columns"><div class="crow c2 " data-c="2" data-n="2" data-add-direction="horizontal"><div class="cup contain C7i6ncc cup full indent" id="C7i6ncc" aria-labelledby="hlC7i6ncc"><style type="text/css">.background.C7i6ncc{background-color:#f8f7f5;background-position:center;background-size:contain}
.C7i6ncc>.secondary>.background{background-color:#f8f7f5}</style><a name="still-need-help" data-name="Still need help" id="still-need-help"></a><div class="background C7i6ncc flush  "></div><div class="plate full  C7i6ncc" style="min-height: 0px;"><div class="primary empty"></div><div class="secondary hasbg light top"><div class="background   "></div><h4 id="hlC7i6ncc" data-level="3" class="headS mw12 bold align-indent"><div class="eyebrow "><br></div> <!-- -->Still need help?</h4><div class="text mw12 align-indent"><p>If you weren’t able to find the answer to your support question, you can explore our available contact options to receive additional assistance.</p></div><div class="ctas align-indent"><a class="trans button vz-button-link button" href="/business/support/business/support/contact-us/" aria-label="Additional:Still need help:Contact us" data-loc="Content:Button:Additional:Still need help:Contact us">Contact us</a></div></div></div></div><div class="cup contain Ch6ne5 cup full indent" id="Ch6ne5" aria-labelledby="hlCh6ne5"><style type="text/css">.background.Ch6ne5{background-color:#f8f7f5;background-position:center;background-size:contain}
.Ch6ne5>.secondary>.background{background-color:#f8f7f5}</style><a name="additional-support" data-name="Additional support" id="additional-support"></a><div class="background Ch6ne5 flush  "></div><div class="plate full  Ch6ne5" style="min-height: 0px;"><div class="primary empty"></div><div class="secondary hasbg light top"><div class="background   "></div><h4 id="hlCh6ne5" data-level="3" class="headS mw12 bold align-indent"><div class="eyebrow "><br></div> <!-- -->Additional support</h4><div class="text mw12 align-indent"><p>Visit our Customer Learning Portal for even more training and resources related to Verizon Business products, systems and tools.</p></div><div class="ctas align-indent"><a class="trans button vz-button-link button" href="https://customertraining.verizon.com/" target="_blank" aria-label="Additional:Additional support:Open portal" data-loc="Content:Button:Additional:Additional support:Open portal">Open portal</a></div></div></div></div></div></div></div></div></div><div class="info" aria-hidden="true" data-build="2026-05-15" data-update="2025-10-16T14:42:37.481Z" style="position:absolute;margin:-6px 12px;font-size:10px;color:rgba(64,64,64,0.2)">64</div><!--$--><!--/$--><footer class="footer-div"><div id="vz-gf20" style="width:100%">
<div class="gnav20" data-exp-name="Master">
     <input type="hidden" id="cradle-context">
    <div class="gnav20-sticky-content">    	
     	




    
    
    <div class="gnav20-footercontainer">
<div class="gnav20-footer-container gnav20-white-focus gnav20-mobile-footer-accordion" data-gnav20-container="footer">
	<div class="gnav20-main-container">
		<div class="gnav20-footer-level-one">
			<div class="gnav20-footer-wrapper gnav20-four">
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Solutions</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Solutions menu list">
					
						<li>
							<a href="/business/support/business/products/mobile/" data-loc="Footer Navigation: Mobile">Mobile</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/internet/" data-loc="Footer Navigation: Business Internet">Business Internet</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/networks/" data-loc="Footer Navigation: Network">Network</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/security/" data-loc="Footer Navigation: Security">Security</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/voice-collaboration/" data-loc="Footer Navigation: Voice and collaboration">Voice and collaboration</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/contact-center-cx/" data-loc="Footer Navigation: Contact centers and CX">Contact centers and CX</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/internet-of-things/" data-loc="Footer Navigation: Internet of Things">Internet of Things</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/fleet-management/" data-loc="Footer Navigation: Fleet management">Fleet management</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/5g-edge/" data-loc="Footer Navigation: 5G Edge">5G Edge</a>
						</li>
					
						<li>
							<a href="/business/support/business/solutions/industry/" data-loc="Footer Navigation: Solutions by industry">Solutions by industry</a>
						</li>
					
						<li>
							<a href="/business/support/business/solutions/small-business/" data-loc="Footer Navigation: Small Business">Small Business</a>
						</li>
					
						<li>
							<a href="/business/support/business/solutions/enterprise/" data-loc="Footer Navigation: Enterprise">Enterprise</a>
						</li>
					
						<li>
							<a href="/business/support/business/solutions/public-sector/" data-loc="Footer Navigation: Public Sector">Public Sector</a>
						</li>
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
				<div class="gnav20-col-wrapper">
					




    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Shop</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Shop menu list">
					
						<li>
							<a href="/business/support/business/shop/products/devices/smartphones/" data-loc="Footer Navigation: Smartphones">Smartphones</a>
						</li>
					
						<li>
							<a href="/business/support/business/shop/products/devices/all/" data-loc="Footer Navigation: Business Devices">Business Devices</a>
						</li>
					
						<li>
							<a href="/business/support/business/shop/products/devices/apple/" data-loc="Footer Navigation: Apple">Apple</a>
						</li>
					
						<li>
							<a href="/business/support/business/shop/products/devices/samsung/" data-loc="Footer Navigation: Samsung">Samsung</a>
						</li>
					
						<li>
							<a href="/business/support/business/shop/products/devices/smartphones/google/" data-loc="Footer Navigation: Google">Google</a>
						</li>
					
						
					
						<li>
							<a href="/business/support/business/products/mobile/plans/my-biz/" data-loc="Footer Navigation: My Biz Plan">My Biz Plan</a>
						</li>
					
						<li>
							<a href="/business/support/business/shop/products/devices/smartphones/byod/" data-loc="Footer Navigation: Bring your own device">Bring your own device</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/internet/fios/" data-loc="Footer Navigation: Fios Business Internet">Fios Business Internet</a>
						</li>
					
						
					
						<li>
							<a href="/business/support/business/products/internet/lte/" data-loc="Footer Navigation: LTE Business Internet">LTE Business Internet</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/internet/backup-failover/" data-loc="Footer Navigation: Backup and Flexible Use Internet">Backup and Flexible Use Internet </a>
						</li>
					
						
					
						
					
				</ul>
			
		</div>
	</div>	

</div>


    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Contact for sales</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Contact for sales menu list">
					
						<li>
							<a href="/business/support/business/contact/" data-loc="Footer Navigation: Contact overview">Contact overview</a>
						</li>
					
						<li>
							<a href="/business/support/business/contact/request-consultation/" data-loc="Footer Navigation: Request a call">Request a call</a>
						</li>
					
						<li>
							<a href="/business/support/business/locations/appointment-search/" data-loc="Footer Navigation: Wireless store appointment">Wireless store appointment</a>
						</li>
					
						<li>
							<a href="/business/support/business/locations/appointment-search/" data-loc="Footer Navigation: Virtual appointment">Virtual appointment</a>
						</li>
					
						<li>
							<a href="/business/support/business/support/real-estate-inquiry-form/" data-loc="Footer Navigation: Real estate inquiry form">Real estate inquiry form</a>
						</li>
					
						<li>
							<a href="https://vendorportal.verizon.com/vendorportal/invite/#/demolition-form" data-loc="Footer Navigation: Building Demolition inquiry form">Building Demolition inquiry form</a>
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
							<a href="https://mblogin.verizonwireless.com/account/business/signin" data-loc="Footer Navigation: Log in">Log in</a>
						</li>
					
						<li>
							<a href="/business/support/business/my-business/" data-loc="Footer Navigation: Register for My Business">Register for My Business</a>
						</li>
					
						<li>
							<a href="/business/support/business/locations/search/" data-loc="Footer Navigation: Store locator">Store locator</a>
						</li>
					
						<li>
							<a href="/business/support/whatsnext/business/OrderStatus/WNBLogin.aspx/" data-loc="Footer Navigation: Fios order status">Fios order status</a>
						</li>
					
						<li>
							<a href="/business/support/business/support/business-quick-links/" data-loc="Footer Navigation: Tasks without logging in">Tasks without logging in</a>
						</li>
					
						<li>
							<a href="/business/support/support/check-network-status/" rel="noopener noreferrer" data-loc="Footer Navigation: Check network status">Check network status</a>
						</li>
					
						<li>
							<a href="/business/support/business/support/vec/" data-loc="Footer Navigation: Verizon Enterprise Center">Verizon Enterprise Center</a>
						</li>
					
						<li>
							<a href="/business/support/business/support/public-sector/contact-us/" data-loc="Footer Navigation: Public Sector support">Public Sector support</a>
						</li>
					
						
					
				</ul>
			
		</div>
	</div>	

</div>


    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Programs</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Programs menu list">
					
						<li>
							<a href="/business/support/business/verizonpartnersolutions/" data-loc="Footer Navigation: Verizon Partner Solutions">Verizon Partner Solutions</a>
						</li>
					
						<li>
							<a href="/business/support/business/resources/partner-network/" data-loc="Footer Navigation: Partner network">Partner network</a>
						</li>
					
						<li>
							<a href="/business/support/business/resources/systems-integrator-partners/" data-loc="Footer Navigation: Systems Integrator partners">Systems Integrator partners</a>
						</li>
					
						<li>
							<a href="https://communities.verizon.com/" data-loc="Footer Navigation: For property managers">For property managers</a>
						</li>
					
						<li>
							<a href="/business/support/business/products/devices/trade-in/" data-loc="Footer Navigation: Device trade-in">Device trade-in</a>
						</li>
					
						<li>
							<a href="/business/support/business/support/account-maintenance-and-management/orders-and-purchase-management/return-policy/" data-loc="Footer Navigation: Wireless return policy">Wireless return policy</a>
						</li>
					
						<li>
							<a href="/business/support/business/why-verizon/executive-briefing-program/" data-loc="Footer Navigation: Executive Briefing Program">Executive Briefing Program</a>
						</li>
					
						<li>
							<a href="https://vz.massleadmgmt.com/site/COMRAB2" data-loc="Footer Navigation: Refer a business">Refer a business</a>
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
							<a href="/business/support/about/" data-loc="Footer Navigation: About us">About us</a>
						</li>
					
						<li>
							<a href="/business/support/about/our-company/" data-loc="Footer Navigation: Our company">Our company</a>
						</li>
					
						
					
						<li>
							<a href="/business/support/about/responsibility/giving-and-grants/" data-loc="Footer Navigation: Verizon Foundation">Verizon Foundation</a>
						</li>
					
						<li>
							<a href="https://mycareer.verizon.com/" rel="noopener noreferrer" data-loc="Footer Navigation: Careers">Careers</a>
						</li>
					
						
					
						<li>
							<a href="/business/support/about/investors/" data-loc="Footer Navigation: Investors">Investors</a>
						</li>
					
						<li>
							<a href="/business/support/business/why-verizon/" data-loc="Footer Navigation: Why Verizon">Why Verizon</a>
						</li>
					
				</ul>
			
		</div>
	</div>	

</div>


    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Resources</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Resources menu list">
					
						<li>
							<a href="/business/support/business/resources/" data-loc="Footer Navigation: Resources and insights">Resources and insights</a>
						</li>
					
						<li>
							<a href="/business/support/info/reportsecurityvulnerability/" data-loc="Footer Navigation: Report a security vulnerability">Report a security vulnerability</a>
						</li>
					
						<li>
							<a href="/business/support/support/wireless-emergency-alerts-compatible-devices/" data-loc="Footer Navigation: WEA Compatibility">WEA Compatibility</a>
						</li>
					
						<li>
							<a href="/business/support/business/publications/service_guide/" data-loc="Footer Navigation: Service Guide">Service Guide</a>
						</li>
					
						<li>
							<a href="tel:18009220204" data-loc="Footer Navigation: Recall">Recall</a>
						</li>
					
						<li>
							<a data-loc="Footer Navigation: Co-browse">Co-browse</a>
						</li>
					
				</ul>
			
		</div>
	</div>	

</div>


    
    
    <div class="gnav20-socialfooter">
<div class="gnav20-hero-wrapper">
	<div class="gnav20-hero-footer-heading">Follow Verizon</div>
	<div class="gnav20-border-content gnav20-social-icon">
		<ul aria-label="Follow Verizon menu list">
			<li>
				<a class="gnav20-social-media" href="https://linkedin.com" rel="noopener noreferrer" aria-label="Follow Verizon on Linkedin" title="Opens New Window" data-loc="Footer Navigation: Follow Verizon on Linkedin">
					<span>linkedin</span>
					<svg viewBox="0 5 85 56" width="24" height="20" xmlns="http://www.w3.org/2000/svg">
						<path fill="#fff" d="M 74.58 62.795 C 75.275 62.802 75.83 62.219 75.79 61.526 C 75.79 60.626 75.247 60.196 74.133 60.196 L 72.333 60.196 L 72.333 64.908 L 73.01 64.908 L 73.01 62.854 L 73.842 62.854 L 73.861 62.879 L 75.152 64.908 L 75.876 64.908 L 74.487 62.808 L 74.58 62.795 Z M 73.797 62.323 L 73.012 62.323 L 73.012 60.73 L 74.007 60.73 C 74.521 60.73 75.107 60.814 75.107 61.487 C 75.107 62.261 74.514 62.323 73.793 62.323 M 56.92 56.89 L 47.32 56.89 L 47.32 41.856 C 47.32 38.271 47.256 33.656 42.327 33.656 C 37.327 33.656 36.562 37.562 36.562 41.595 L 36.562 56.889 L 26.962 56.889 L 26.962 25.973 L 36.178 25.973 L 36.178 30.198 L 36.307 30.198 C 38.186 26.985 41.68 25.066 45.4 25.204 C 55.13 25.204 56.924 31.604 56.924 39.93 L 56.92 56.89 Z M 16.13 21.747 C 11.842 21.748 9.16 17.106 11.304 13.391 C 13.448 9.677 18.808 9.676 20.953 13.39 C 21.442 14.236 21.7 15.197 21.7 16.175 C 21.701 19.252 19.207 21.746 16.13 21.747 M 20.93 56.89 L 11.32 56.89 L 11.32 25.973 L 20.93 25.973 L 20.93 56.89 Z M 61.706 1.69 L 6.496 1.69 C 3.887 1.66 1.747 3.751 1.715 6.36 L 1.715 61.799 C 1.746 64.41 3.885 66.502 6.496 66.474 L 61.706 66.474 C 64.322 66.507 66.47 64.415 66.506 61.799 L 66.506 6.356 C 66.469 3.741 64.321 1.651 61.706 1.686"></path><path fill="#fff" d="M 73.879 58.097 C 70.478 58.13 68.388 61.832 70.117 64.76 C 71.846 67.689 76.097 67.648 77.769 64.687 C 79.422 61.758 77.327 58.129 73.964 58.097 L 73.879 58.097 M 73.879 66.427 C 70.897 66.477 68.98 63.28 70.428 60.673 C 71.876 58.065 75.603 58.003 77.137 60.561 C 77.487 61.144 77.677 61.809 77.688 62.489 L 77.688 62.554 C 77.733 64.647 76.073 66.38 73.98 66.425 L 73.88 66.425"></path>
					</svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://facebook.combusiness" rel="noopener noreferrer" aria-label="Follow Verizon on Facebook" title="Opens New Window" data-loc="Footer Navigation: Follow Verizon on Facebook"><span>facebook-official</span><svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78"><path fill="#fff" d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"></path></svg>
				</a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://twitter.combusiness/" rel="noopener noreferrer" aria-label="Follow Verizon on Twitter" title="Opens New Window" data-loc="Footer Navigation: Follow Verizon on Twitter"><span>twitter</span><svg width="18" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"></path>
					</svg></a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://www.youtube.com/channel/UCL9bd7Pw6c_HXXusLswHGYw" rel="noopener noreferrer" aria-label="Follow Verizon on Youtube" title="Opens New Window" data-loc="Footer Navigation: Follow Verizon on Youtube"><span>you-tube</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18.5 18" style="enable-background:new 0 0 18.5 18;" xml:space="preserve">
						<path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2
							s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4
							S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"></path>
					</svg></a>
			</li>
			<li>
				<a class="gnav20-social-media" href="https://instagram.combusiness" rel="noopener noreferrer" aria-label="Follow Verizon on Instagram" title="Opens New Window" data-loc="Footer Navigation: Follow Verizon on Instagram"><span>instagram</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
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
			
		</ul>
	</div>
</div>
</div>


    
    
    <div class="gnav20-herofooter">

	<div class="gnav20-hero-wrapper">
		<div class="gnav20-hero-footer-heading">Opt In</div>
		<div class="gnav20-border-content">
			
				<ul class="gnav20-footer-list" aria-label="Opt In menu list">
					
						<li>
							<a href="/business/support/business/opt-in/" data-loc="Footer Navigation: Sign up for email alerts">Sign up for email alerts</a>
						</li>
					
				</ul>
			
		</div>
	</div>	

</div>



				</div>
			</div>
			<div class="gnav20-footer-wrapper gnav20-four">			
				<div class="gnav20-col-wrapper">
					





				</div>
				<div class="gnav20-col-wrapper">
					





				</div>
				<div class="gnav20-col-wrapper">
					





				</div>
				<div class="gnav20-col-wrapper">
					





				</div>
			</div>
		</div>
		<div class="gnav20-footer-level-two gnav20-custom-margin-left">
			




    
    
    <div class="gnav20-logo">

    
    
    <div class="gnav20-logo-wrapper gnav20-relative-index">
        
        <a class="gnav20-logoFooterVBG" title="Verizon Home Page" href="/business/support/business/" data-loc="Footer Navigation: Verizon Home Page"></a>
        
    </div>
</div>


    
    
    <div class="gnav20-footerlink">


	<ul aria-label="Policies and notices menu list" class="gnav20-footer-list">
		<li>
			<a href="/business/support/business/site-map/" data-loc="Footer Navigation: Site map">
				Site map
			</a>
		</li>
	
		
	
		<li>
			<a href="/business/support/about/privacy/" data-loc="Footer Navigation: Privacy Policy">
				Privacy Policy
			</a>
		</li>
	
		<li>
			<a href="/business/support/about/privacy/full-privacy-policy/" data-loc="Footer Navigation: California Privacy Notice">
				California Privacy Notice
			</a>
		</li>
	
		<li>
			<a href="/business/support/about/privacy/health-privacy-notice/" data-loc="Footer Navigation: Health Privacy Notice">
				Health Privacy Notice
			</a>
		</li>
	
		<li>
			<a href="/business/support/privacy/your-privacy-choices/" data-loc="Footer Navigation: Your Privacy Choices ">
				Your Privacy Choices <span style="height:10px;width:28px;display:inline-block;position:relative;"><svg style="position:absolute;width:28px;bottom:-2px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 14" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#0066FF;}.st2{fill:#FFFFFF;}.st3{fill:#0066FF;}</style><g><g id="final---dec.11-2020_1_"><g id="_x30_208-our-toggle_2_" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2_2_" transform="translate(1275.000000, 200.000000)"><path class="st0" d="M7.4,12.8h6.8l3.1-11.6H7.4C4.2,1.2,1.6,3.8,1.6,7S4.2,12.8,7.4,12.8z"></path></g></g></g><g id="final---dec.11-2020"><g id="_x30_208-our-toggle" transform="translate(-1275.000000, -200.000000)"><g id="Final-Copy-2" transform="translate(1275.000000, 200.000000)"><path class="st1" d="M22.6,0H7.4c-3.9,0-7,3.1-7,7s3.1,7,7,7h15.2c3.9,0,7-3.1,7-7S26.4,0,22.6,0z M1.6,7c0-3.2,2.6-5.8,5.8-5.8 h9.9l-3.1,11.6H7.4C4.2,12.8,1.6,10.2,1.6,7z"></path><path id="x" class="st2" d="M24.6,4c0.2,0.2,0.2,0.6,0,0.8l0,0L22.5,7l2.2,2.2c0.2,0.2,0.2,0.6,0,0.8c-0.2,0.2-0.6,0.2-0.8,0 l0,0l-2.2-2.2L19.5,10c-0.2,0.2-0.6,0.2-0.8,0c-0.2-0.2-0.2-0.6,0-0.8l0,0L20.8,7l-2.2-2.2c-0.2-0.2-0.2-0.6,0-0.8 c0.2-0.2,0.6-0.2,0.8,0l0,0l2.2,2.2L23.8,4C24,3.8,24.4,3.8,24.6,4z"></path><path id="y" class="st3" d="M12.7,4.1c0.2,0.2,0.3,0.6,0.1,0.8l0,0L8.6,9.8C8.5,9.9,8.4,10,8.3,10c-0.2,0.1-0.5,0.1-0.7-0.1l0,0 L5.4,7.7c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0l0,0L8,8.6l3.8-4.5C12,3.9,12.4,3.9,12.7,4.1z"></path></g></g></g></g></svg></a> 
			</a>
		</li>
	
		
	
		<li>
			<a href="/business/support/about/privacy/about-our-ads/" data-loc="Footer Navigation: About Our Ads">
				About Our Ads
			</a>
		</li>
	
		<li>
			<a href="/business/support/about/our-company/open-internet/" data-loc="Footer Navigation: Open Internet">
				Open Internet
			</a>
		</li>
	
		<li>
			<a href="https://marketingplatform.google.com/about/analytics/terms/us/" data-loc="Footer Navigation: Analytics">
				Analytics
			</a>
		</li>
	</ul>

	<div class="copyright-section">
		<div class="copyright-text">
			© <span id="copyright-year">2026</span> Verizon
		</div>
    </div>
</div>



		</div>
	</div>
</div>
</div>



     </div>
	<div class="gnav20-sticky-header"></div>
</div>



</div></footer><script src="assets/www.verizon.com/business/site.js" type="text/javascript" id="sitejs" data-nscript="afterInteractive"></script><script id="omniData" data-nscript="afterInteractive">
    (function(data){
    window.zincTag = window.zincTag || [];
    try {
        var bert = JSON.parse(localStorage.bert||"{}");
        if (bert.intent) {
            data.params.intent = Object.keys(bert.intent).sort(function(a,b){return bert.intent[b]-bert.intent[a]})[0]
        } if (bert.utm) {
            data.params.medium = bert.utm.medium;
            data.params.audience = bert.utm.audience;
        }
    } catch (e){};
    window.zincTag.push(data)
    })({"task":"learn.definePage.page","params":{"pageName":"Support","flow":"support","version":64,"language":"en","country":"us","region":"na","businessUnit":"vbg","type":"other","channel":"learn"}});
    </script><script id="gnavdl" data-nscript="afterInteractive">var gnavdl = {"bu":"smb","appid":"unified","variation":"","impltype":"notssi"};
  (function(smb){
    if (document.cookie?.indexOf("X-VZ-C_APP=MVB")>=0) { document.body.classList.add("nonav"); return; } // no gnav for mvb
    const s=document.createElement("script");
    s.src=smb;s.async=true;
    setTimeout(function(){document.head.appendChild(s)},100);
    document.querySelector(".gnav20-navigation")?.classList.add("opacityOne");
    document.querySelector(".gnav20-navigation>.gnav20-navigation")?.classList.add("opacityOne");
    setTimeout(function(){if (typeof(gnav20)!="undefined" && document.querySelector("#vz-gf20:empty")) {
     gnav20.loadFooter(gnav20.context);
    }},5000);
  })("/business/ngnav/smb.js");</script><script id="blt6feecf77edee844e" type="text/javascript" data-nscript="afterInteractive">document.querySelector(".hpsearch svg").addEventListener("click",function() {
if (document.querySelector(".hpsearch input:valid"))  { document.forms.hpsearch.submit()}});</script><next-route-announcer style="position: absolute;"></next-route-announcer><div class="gnav20-click-div"></div><div class="gnav20-click-div"></div></body></html>