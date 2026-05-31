<?php
declare(strict_types=1);
require_once __DIR__ . '/../../base-url.php';
vz_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en-US" class="wf-verizonnhgetx-n4-active wf-verizonnhgeds-n4-active wf-active"><head>
<!-- offline: marketing stripped -->




<style id="offline-gridwall-browse-layout">
  header#vz-gh20 {
    height: auto !important;
    max-height: none !important;
    overflow: visible !important;
  }
  [data-testid="Gridwall"],
  #mainGWSection {
    display: block !important;
    width: 100%;
    clear: both;
    position: relative;
    z-index: 1;
  }
  #breadCrumb,
  [data-testid="breadcrumbId"] {
    display: block !important;
    visibility: visible !important;
    position: relative !important;
    width: 100%;
    max-width: 1272px;
    margin: 0 auto;
    padding-top: 16px;
    padding-bottom: 8px;
    z-index: 2;
  }
  #breadCrumb nav[aria-label="Breadcrumb"],
  #breadCrumb [class*="BreadCrumbChatWrapper"] {
    display: block !important;
    width: 100%;
  }
  #breadCrumb ol[class*="StyledBreadcrumbList"],
  #breadCrumb ol {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap !important;
    align-items: center !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 0;
  }
  #breadCrumb ol > li {
    display: inline-flex !important;
    flex-direction: row !important;
    align-items: center !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  #breadCrumb [class*="SlashWrapper"] {
    display: inline-flex !important;
    align-items: center !important;
    width: auto !important;
    height: auto !important;
    margin: 0 6px !important;
    flex-shrink: 0;
  }
  #breadCrumb [class*="SlashWrapper"] span,
  #breadCrumb [class*="StyledSlash"] {
    display: inline !important;
    width: auto !important;
    height: auto !important;
    font-size: 14px;
    line-height: 1.4;
    color: #000;
  }
  #breadCrumb a[class*="StyledAnchor"] {
    color: #000 !important;
    text-decoration: none !important;
    font-size: 14px;
    font-weight: 400;
    white-space: nowrap;
  }
  #breadCrumb a[class*="StyledAnchor"]:hover {
    color: #cd040b !important;
    text-decoration: underline !important;
  }
  #breadCrumb [aria-current="page"],
  #breadCrumb li:last-child [class*="StyledTypography"] {
    font-size: 14px;
    color: #6f7171;
    white-space: nowrap;
  }
  #breadCrumb h1,
  #breadCrumb [class*="StyledTitle"] {
    display: block !important;
    margin: 16px 0 0 0 !important;
    padding: 0 !important;
    font-size: 1.5rem !important;
    line-height: 1.25 !important;
    font-weight: 700 !important;
    color: #000 !important;
  }
  @media (min-width: 768px) {
    #breadCrumb h1,
    #breadCrumb [class*="StyledTitle"] {
      font-size: 1.875rem !important;
    }
  }
  #productListContainer > #grid > #row.flex {
    display: flex !important;
    flex-direction: row !important;
    align-items: flex-start !important;
    flex-wrap: nowrap !important;
    gap: 24px;
  }
  #productListContainer > #grid > #row.flex > :not(#leftRailContainer) {
    flex: 1 1 auto;
    min-width: 0;
    width: auto !important;
  }
  #leftRailContainer {
    display: none;
    flex: 0 0 280px;
    width: 280px;
    max-width: 326px;
    min-width: 240px;
  }
  @media (min-width: 924px) {
    #leftRailContainer {
      display: flex !important;
      flex-direction: column !important;
      visibility: visible !important;
      align-items: stretch !important;
    }
    #filter-wrap > .block.min-\[924px\]\:hidden,
    #filters .btn-container.block.min-\[924px\]\:hidden {
      display: none !important;
    }
    div.max-\[924px\]\:hidden.mr-8:empty {
      display: none !important;
    }
  }
  [data-testid="left-rail-filter-container"] {
    display: flex !important;
    flex-direction: column !important;
    position: sticky !important;
    top: 12px;
    align-self: flex-start;
    width: 100%;
  }
  #accordionContainer {
    overflow-y: auto;
    overflow-x: hidden;
    max-height: calc(100vh - 280px);
    border-right: none !important;
    padding-right: 8px;
  }
  [data-testid="left-rail-filter-container"] button.accordionButton,
  [data-testid="left-rail-filter-container"] [class*="StyledAccordionButton-VDS"] {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    min-height: 0 !important;
    height: auto !important;
    padding: 14px 4px 14px 0 !important;
    margin: 0 !important;
    border: 0;
    background: transparent;
    text-align: left;
    cursor: pointer;
  }
  [data-testid="left-rail-filter-container"] [class*="TitleWrapper-VDS"],
  [data-testid="left-rail-filter-container"] [class*="TriggerIconWrapper-VDS"] {
    display: flex !important;
    align-items: center !important;
    flex-shrink: 0;
  }
  [data-testid="left-rail-filter-container"] [class*="TriggerIconWrapper-VDS"] {
    margin-left: 8px;
  }
  [data-testid="left-rail-filter-container"] svg {
    width: 21.6px !important;
    height: 21.6px !important;
    max-width: 22px !important;
    max-height: 22px !important;
    display: block !important;
    flex-shrink: 0;
  }
  [data-testid="left-rail-filter-container"] [class*="CheckboxLabelWrapper-VDS"],
  [data-testid="left-rail-filter-container"] label[class*="CheckboxLabelWrapper"] {
    display: flex !important;
    flex-direction: row !important;
    align-items: flex-start !important;
    gap: 10px;
    width: 100%;
    margin: 0 0 12px 0;
    cursor: pointer;
  }
  [data-testid="left-rail-filter-container"] [class*="CheckWrapper-VDS"],
  [data-testid="left-rail-filter-container"] [class*="CheckboxWrapper-VDS"] {
    flex-shrink: 0;
  }
  [data-testid="left-rail-filter-container"] [class*="ChildWrapper-VDS"] {
    display: block !important;
    line-height: 1.4;
  }
  [data-testid="left-rail-filter-container"] [class*="StyledAccordionItem-VDS"] {
    border-bottom: 1px solid #d8dada;
  }
  [data-testid="left-rail-filter-container"] [class*="AccordionList-VDS"] {
    width: 100%;
  }
  [data-testid="left-rail-filter-container"] [role="group"][aria-label="Filter"] {
    width: 100%;
  }
  #gridwall-filter-buttons {
    display: grid !important;
  }
  nav[aria-label="Pagination"] {
    display: block !important;
    width: 100%;
    margin: 24px auto !important;
    text-align: center;
  }
  nav[aria-label="Pagination"] ul,
  nav[aria-label="Pagination"] [class*="StyledList-VDS"] {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 4px 12px !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 auto !important;
  }
  nav[aria-label="Pagination"] li,
  nav[aria-label="Pagination"] [class*="PaginationListItem-VDS"] {
    display: flex !important;
    align-items: center !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  nav[aria-label="Pagination"] a,
  nav[aria-label="Pagination"] [class*="StyledLink-VDS"] {
    display: inline-flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 6px !important;
    white-space: nowrap;
  }
  nav[aria-label="Pagination"] [class*="IconWrapper-VDS"],
  nav[aria-label="Pagination"] [class*="IconSVGWrapper-VDS"] {
    display: inline-flex !important;
    align-items: center !important;
    flex-shrink: 0;
  }
  nav[aria-label="Pagination"] svg {
    width: 18px !important;
    height: 18px !important;
    display: block !important;
  }
  [class*="ScreenReaderText-VDS"] {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    clip-path: inset(50%) !important;
    white-space: nowrap !important;
    border: 0 !important;
  }
</style><style id="offline-unified-chrome">
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
<meta name="template" content="page-template">
<!--<meta name="viewport" content="width=device-width, initial-scale=1"/>-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="x-dns-prefetch-control" content="on">









<link rel="dns-prefetch" href="/smartphones/prepaid/gateway.verizonwireless.com/">


<link rel="dns-prefetch" href="/smartphones/prepaid/c.amazon-adsystem.com/">
<link rel="dns-prefetch" href="/smartphones/prepaid/s.amazon-adsystem.com/">
<link rel="dns-prefetch" href="/smartphones/prepaid/content.webcollage.net/">


<meta name="viewport" content="user-scalable=yes, initial-scale=1, minimum-scale=1, width=device-width, height=device-height, ">
<meta name="description" content="Browse our wide selection of prepaid cell phones, including the latest iPhone and Android smartphones. Buy with Verizon and save on your prepaid device.">
<meta name="ROBOTS" content="index, follow">

<meta name="apple-itunes-app" content="app-id=416023011">

<title>Shop Prepaid Smartphones | Verizon Prepaid</title><style>#quick-view-custom-modal [class*=ModalDialog-VDS] {
    height: 100vh;
    margin-left: auto;
    border-radius: 0
}

#quick-view-custom-modal div[class^=Overlay-VDS] {
    padding-right: 0
}

#quick-view-custom-modal div[class^=StyledLine-VDS] {
    display: none !important
}

#quick-view-custom-modal .upper-container {
    overflow: auto
}

#quick-view-custom-modal .bottom-container {
    position: fixed;
    bottom: 0;
    width: 464px;
    height: 105px;
    background-color: #fff
}

#quick-view-custom-modal h3[class^=StyledTypography-VDS] {
    font-size: .9rem
}

#quick-view-custom-modal span[class^=TriggerIconWrapper-VDS] {
    scale: 0.6
}

#quick-view-custom-modal button[class^=StyledAccordionButton-VDS] {
    width: 188px;
    margin: 24px 2.375rem 24px 0px !important;
    padding: 0!important;
}

#quick-view-custom-modal span[class^=TriggerIconWrapper-VDS] {
    top: 0!important;
}


@media (max-width:480px) {
    #quick-view-custom-modal [class*=ModalDialog-VDS] {
        height: 100vh
    }

    #quick-view-custom-modal [class*=ModalDialogWrapper] {
        height: 80vh
    }

    #quick-view-custom-modal .bottom-container {
        position: fixed;
        bottom: 0;
        width: calc(100vw - 30px);
        height: 112px;
        background-color: #fff
    }

    #quick-view-custom-modal button[class^=StyledAccordionButton-VDS] {
        width: 184px
    }

    #quick-view-custom-modal div[class^=TitleWrapper-VDS] {
        width: 200px
    }

    #quick-view-custom-modal h5[class^=StyledTypography-VDS] {
        font-size: .9rem
    }

    #quick-view-custom-modal span[class^=TriggerIconWrapper-VDS] {
        scale: 0.5
    }
}

@media (min-width:767px) {
    #quick-view-custom-modal [class*=ModalDialog-VDS] {
        max-height: 100vh;
        height: 100vh
    }

    #quick-view-custom-modal .bottom-container {
        position: fixed;
        bottom: 0;
        width: 450px;
        height: 160px;
        background-color: #fff
    }
}
/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL0dyaWRXYWxsL1F1aWNrVmlldy9zdHlsZXMuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0lBQ0ksYUFBYTtJQUNiLGlCQUFpQjtJQUNqQjtBQUNKOztBQUVBO0lBQ0k7QUFDSjs7QUFFQTtJQUNJO0FBQ0o7O0FBRUE7SUFDSTtBQUNKOztBQUVBO0lBQ0ksZUFBZTtJQUNmLFNBQVM7SUFDVCxZQUFZO0lBQ1osYUFBYTtJQUNiO0FBQ0o7O0FBRUE7SUFDSTtBQUNKOztBQUVBO0lBQ0k7QUFDSjs7QUFFQTtJQUNJLFlBQVk7SUFDWix5Q0FBeUM7SUFDekMsb0JBQW9CO0FBQ3hCOztBQUVBO0lBQ0ksZ0JBQWdCO0FBQ3BCOzs7QUFHQTtJQUNJO1FBQ0k7SUFDSjs7SUFFQTtRQUNJO0lBQ0o7O0lBRUE7UUFDSSxlQUFlO1FBQ2YsU0FBUztRQUNULHlCQUF5QjtRQUN6QixhQUFhO1FBQ2I7SUFDSjs7SUFFQTtRQUNJO0lBQ0o7O0lBRUE7UUFDSTtJQUNKOztJQUVBO1FBQ0k7SUFDSjs7SUFFQTtRQUNJO0lBQ0o7QUFDSjs7QUFFQTtJQUNJO1FBQ0ksaUJBQWlCO1FBQ2pCO0lBQ0o7O0lBRUE7UUFDSSxlQUFlO1FBQ2YsU0FBUztRQUNULFlBQVk7UUFDWixhQUFhO1FBQ2I7SUFDSjtBQUNKIiwic291cmNlUm9vdCI6IiJ9 */</style><style>#device-unlck-policy-quick-view div[class^="ChildWrapper-VDS"] * {
    font-size: 0.9rem;
}
/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL0dyaWRXYWxsL1F1aWNrVmlldy9xdWlja1ZpZXdUaWxlLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtJQUNJLGlCQUFpQjtBQUNyQiIsInNvdXJjZVJvb3QiOiIifQ== */</style><style>#quickViewSwiper .swiper-slide {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;

}

#quickViewSwiper .swiper-slide img {
  width: 186px;
}

#quickViewSwiper .placeholder{
  width: auto;
  height: 186px;
}

@media screen and (min-width: 961px) {
  #quickViewSwiper .swiper-slide img {
    width: 186px;
    height: 186px;
  }
}

#quickViewSwiper .swiper-scrollbar {
  width: 100px;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: 0px;
  opacity: 1 !important;
}

#quickViewSwiper .swiper-container {
  z-index: 1;
  display: flex;
  flex-direction: column;
  padding-bottom: 32px;
 
}

#quickViewSwiper .swiper-scrollbar-drag{
  opacity: 0.5;
  background-color: black;
}

#quickViewSwiper .swiper-button-prev {
  position: absolute;
  left: 85px;
}

#quickViewSwiper .swiper-button-next {
  position: absolute;
  right: 85px;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL0dyaWRXYWxsL1F1aWNrVmlldy9xdWlja1ZpZXdTd2lwZXJTdHlsZXMuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsV0FBVztFQUNYLFlBQVk7RUFDWixhQUFhO0VBQ2IsbUJBQW1CO0VBQ25CLHVCQUF1Qjs7QUFFekI7O0FBRUE7RUFDRSxZQUFZO0FBQ2Q7O0FBRUE7RUFDRSxXQUFXO0VBQ1gsYUFBYTtBQUNmOztBQUVBO0VBQ0U7SUFDRSxZQUFZO0lBQ1osYUFBYTtFQUNmO0FBQ0Y7O0FBRUE7RUFDRSxZQUFZO0VBQ1osY0FBYztFQUNkLE9BQU87RUFDUCxRQUFRO0VBQ1IsV0FBVztFQUNYLHFCQUFxQjtBQUN2Qjs7QUFFQTtFQUNFLFVBQVU7RUFDVixhQUFhO0VBQ2Isc0JBQXNCO0VBQ3RCLG9CQUFvQjs7QUFFdEI7O0FBRUE7RUFDRSxZQUFZO0VBQ1osdUJBQXVCO0FBQ3pCOztBQUVBO0VBQ0Usa0JBQWtCO0VBQ2xCLFVBQVU7QUFDWjs7QUFFQTtFQUNFLGtCQUFrQjtFQUNsQixXQUFXO0FBQ2IiLCJzb3VyY2VSb290IjoiIn0= */</style><style>
.navbar-on-scroll #renderSelectedFiltersAccessory {
  @media only screen and (max-width: 923px){
    display: none;
  }
}
.navbar-on-scroll #renderSelectedFilters {
  @media only screen and (max-width: 923px){
    display: none;
  }
}
.filter-chips-on-scroll {
  @media (max-width: 923px),
    only screen and (min-device-width: 768px) and (max-device-width: 923px) {
    position: fixed;
    top: 43px;
    left: 0;
    right: 0;
    background-color: #fff;
  }
}
.filter-chips-on-scroll #renderSelectedFilters {
  display: none;
}
.filter-chips-on-scroll #renderSelectedFiltersAccessory {
  display: none;
}

#header-container div[class*='TabsWrapper-VDS'] {
 width: 100%;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL0dyaWRXYWxsL1RhYkZpbHRlci90YWJGaWx0ZXIuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7QUFDQTtFQUNFO0lBQ0UsYUFBYTtFQUNmO0FBQ0Y7QUFDQTtFQUNFO0lBQ0UsYUFBYTtFQUNmO0FBQ0Y7QUFDQTtFQUNFOztJQUVFLGVBQWU7SUFDZixTQUFTO0lBQ1QsT0FBTztJQUNQLFFBQVE7SUFDUixzQkFBc0I7RUFDeEI7QUFDRjtBQUNBO0VBQ0UsYUFBYTtBQUNmO0FBQ0E7RUFDRSxhQUFhO0FBQ2Y7O0FBRUE7Q0FDQyxXQUFXO0FBQ1oiLCJzb3VyY2VSb290IjoiIn0= */</style>
<link rel="canonical" href="/smartphones/prepaid/smartphones/prepaid/">
<link rel="alternate" href="/smartphones/prepaid/smartphones/prepaid/" id="desktop" media="only screen and (hover: 1) and (pointer: fine)">
<link rel="alternate" href="/smartphones/prepaid/smartphones/prepaid/" id="smartphone" media="only screen and (max-device-width: 650px)">
<link rel="alternate" href="/smartphones/prepaid/smartphones/prepaid/" id="tablet" media="only screen and (min-device-width: 651px)">
<link rel="icon" href="/smartphones/prepaid/favicon.ico">
<meta property="og:title" content="Shop Prepaid Smartphones | Verizon Prepaid">
<meta property="og:site_name" content="Verizon">
<meta property="og:url" content="smartphones/prepaid/index.html">
<meta property="og:description" content="Browse our wide selection of prepaid cell phones, including the latest iPhone and Android smartphones. Buy with Verizon and save on your prepaid device.">
<meta property="og:type" content="product.group">
<meta property="og:image" content="">


<style>
.pageoverlay {z-index: 9999;}
.opacityOpaque { opacity: 0.99 !important;}
.aemoverlay {background-color: #ffffff; top: 0;left: 0;right: 0;bottom: 0;width: 100%;height: 100%;z-index: 999;position: fixed;display: block;-webkit-animation: fadeInSpinner 0.15s linear;animation: fadeInSpinner 0.15s linear;opacity: 0.8;}
.newspinner { display: block; -webkit-animation: fadeInSpinner 0.15s linear; animation: fadeInSpinner 0.15s linear;}
.newspinner::after { content: '';position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;width: 20px;height: 20px;display: block;z-index: 3;border: 2px solid #000000;border-top-color: transparent;border-radius: 50%;-webkit-animation: rotate 0.5s infinite linear;animation: rotate 0.5s infinite linear;}
.gnav20 .gnav20-desktop .gnav20-search-para {margin-left: 50% !important;}
.gnav20 .gnav20-width-wrapper-border-bottom {z-index: auto !important;}
@keyframes fadeInSpinner {
0%, 45% { opacity: 0; }
100% { opacity: 1; }
}
@keyframes rotate{
from { transform: rotate(0); }
to { transform: rotate(360deg); }
}
</style>

<style id="gnavstyles">

@font-face {
font-family: "BrandFont-Text";
font-display: swap;
src: url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.eot?#iefix") format("embedded-opentype"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.woff2") format("woff2"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.woff") format("woff"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.ttf") format("truetype");
}
@font-face {
font-family: "BrandFont-Text";
font-display: swap;
font-weight: bold;
src: url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.eot?#iefix") format("embedded-opentype"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.woff2") format("woff2"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.woff") format("woff"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.ttf") format("truetype");
}
@font-face {
font-family: 'BrandFont-Display';
font-display: swap;
src: url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.eot?#iefix") format("embedded-opentype"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.woff2") format("woff2"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.woff") format("woff"), url("https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.ttf") format("truetype");
}
@font-face {
font-family: 'BrandFont-Display';
font-display: swap;
font-weight: bold;
src: url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.eot?#iefix") format("embedded-opentype"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.woff2") format("woff2"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.woff") format("woff"), url("https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.ttf") format("truetype");
}
.desktop-start{height:0}
.gnav20 {
max-height: none !important;
border-bottom: none !important;
}
.gnav20 .gnav20-sticky-content {
max-width: none !important;
margin: 0 auto !important;
background: none !important;
}
body {
margin:0
}
body.gnav20-no-scroll {
overflow-y: scroll;
position: fixed;
width: 100%;
}
body.gnav20-modal-menu-open {
overflow: hidden;
position: fixed;
width: 100%;
}
#vz-gf20 .gnav20 .gnav20-header-accessibility {
display:none
}
.gnav20 {
font-family:"BrandFont-Display",arial,helvetica,sans-serif !important;
font-weight:normal;
font-size:14px;
margin:0;
color:#000;
}
.gnav20 [class*="column"] {
float:none !important;
}
.gnav20 * {
margin:0;
padding:0;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
color:#000 !important;
border-collapse:collapse;
border-spacing:none;
border:0;
border-radius:0;
font-style:normal;
list-style:none !important;
text-align:left;
text-decoration:none;
font-variant:normal;
vertical-align:normal;
font-weight:normal;
line-height:1;
background:0;
font-family:inherit
}
.gnav20 *:hover,body.gnav20-using-mouse .gnav20 *:focus {
outline:none !important
}
.gnav20 .gnav20-sticky-content :focus, .gnav20 .gnav20-white-focus :focus {
outline-width: 1px;
outline-style: dashed;
outline-offset: 2px !important;
outline-color: #000 !important;
}
.gnav20 .gnav20-search-para .gnav20-mobile-search-icon:focus,
.gnav20 .gnav20-mobile-menu .gnav20-closex:focus,
.gnav20 .gnav20-nav-utility button:focus,
.gnav20 .gnav20-utility .gnav20-account-icon-only:focus,
.gnav20 .gnav20-utility .gnav20-account-icon:focus,
.gnav20 .gnav20-utility #gnav20-nav-toggle:focus,
.gnav20 .gnav20-utility .gnav20-wishlist a:focus,
.gnav20 .gnav20-utility .gnav20-utility-wrapper button:not(.gnav20-back-to-menu):not(.gnav20-sign-in):focus {
outline-offset: -10px !important;
}
.gnav20 button,.gnav20 input {
font-family:"BrandFont-Display",arial,helvetica,sans-serif !important;text-align:left;height:auto;width:auto;min-width:auto;min-height:auto
}
.gnav20 button span, .gnav20 button, .gnav20 button:hover, .gnav20 button:focus {
border: 0;
background-color: transparent !important;
background-image: none !important;
padding: 0;
cursor: pointer;
float: none;
color: #000 !important;
}
.gnav20 img {
height:auto
}
.gnav20 input:focus::placeholder,.gnav20 input:hover::placeholder,.gnav20 input::placeholder {
color:#747676 !important;
text-align:left
}
.gnav20 input {
font-weight:bold
}
.gnav20 a, .gnav20 a:hover, .gnav20 a:visited, .gnav20 a:active, .gnav20 a:focus {
font-size: 16px !important;
color: #000 !important;
text-decoration: none !important;
display: inline;
}
.gnav20 a[href] {
cursor: pointer;
}
.gnav20 .gnav20-desktop {
display:block;
}
.gnav20 .gnav20-desktop a[href^="tel"]:link, .gnav20 .gnav20-desktop a[href^="tel"]:visited, .gnav20 .gnav20-desktop a[href^="tel"]:hover {
pointer-events: none;
cursor: default;
}
.gnav20 .gnav20-mobile {
display:none;
}
.gnav20 .gnav20-hide {
display: none !important;
}
.gnav20.gnav20-sticky>div.gnav20-sticky-content {
position:fixed;
z-index:900;
width:100%;
}
.gnav20.gnav20-sticky>div.gnav20-sticky-content.gnav20-open-element {
z-index:9999999;
}
.gnav20-sticky-content .gnav20-apicomponentnewdesign {
opacity: 1 !important;
}
.gnav20 .gnav20-header-accessibility {
position: fixed;
z-index: 9999999;
left: 10px;
top: 10px;
height: 0;
width: 0;
overflow: hidden;
opacity: 0;
border: 0;
padding: 0;
}
.gnav20 .gnav20-header-accessibility span {
height: 0;
display: inline-block;
width: 200px;
padding: 20px;
background: #ccc !important;
font-size: 12px;
text-decoration: underline;
color: #000 !important;
}
.gnav20 .gnav20-header-accessibility:focus {
opacity: 1;
height: auto;
width: auto;
overflow: auto;
box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
outline: #000 dashed 1px;
}
.gnav20 .gnav20-width-wrapper {
width: 100%;
border: 0;
padding: 0 0 0 calc(0vw);
position: relative;
background: #fff;
border-bottom: 1px solid #d8dada;
}
.gnav20 .gnav20-width-wrapper:after {
display: block;
height: 1px;
width: 100%;
border-top: 1px solid #d8dada;
content: "";
position: absolute;
top: 32px;
}
.gnav20 .gnav20-main {
max-width: 1272px;
height: auto;
width: 100%;
margin: 0 auto;
background-color: #fff;
transition: all .3s;
}
.gnav20 .gnav20-desktop .gnav20-row-one {
display: flex;
width: 100%;
height: 32px;
padding: 0 20px;
max-height: 32px;
}
.gnav20 .gnav20-desktop .gnav20-row-one a::before,
.gnav20 .gnav20-desktop .gnav20-main-header::before {
content: attr(data-label);
display: block;
font-weight: bold;
height: 0;
overflow: hidden;
visibility: hidden;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-grid1-wrapper {
width: 50%;
}
.gnav20 .gnav20-desktop .gnav20-row-one a.gnav20-main-header {
font-size: 12px !important;
line-height: 16px !important;
padding: 8px 0;
font-family: 'BrandFont-Text',sans-serif;
position: relative;
margin: 0 16px 0 14px;
display: inline-block;
}
.gnav20 .gnav20-desktop a.gnav20-main-header:hover,
.gnav20 .gnav20-desktop a.gnav20-main-header:active,
.gnav20 .gnav20-desktop a.gnav20-main-header:focus {
color: #000 !important;
text-shadow: 1px 0 0 #000;
}
.gnav20 .gnav20-desktop .gnav20-row-one a.gnav20-main-header:first-of-type {
margin-left: 0;
}
.gnav20 .gnav20-desktop .gnav20-row-one a.gnav20-main-header:last-of-type:after {
display:none;
}
.gnav20 .gnav20-desktop .gnav20-row-one a.gnav20-main-header::before {
content: attr(data-label);
display: block;
font-weight: bold;
height: 0;
overflow: hidden;
visibility: hidden;
}
.gnav20 .gnav20-desktop .gnav20-row-one a.gnav20-main-header:after {
border-right: 1px solid #d8dada;
content: '';
display: block;
height: 16px;
right: -16px;
top: 8px;
position: absolute;
}
.gnav20 .gnav20-desktop .gnav20-row-one  a.gnav20-main-header.gnav20-selected {
color: #e00 !important;
text-shadow: 1px 0 0 #e00;
}
.gnav20 .gnav20-desktop .gnav20-row-one .biz-bubble {
padding: 4px 20px 4px 8px;
background: #ccc !important;
font-size: 12px;
font-weight: bold;
position: relative;
color: #000 !important;
}
.gnav20 .gnav20-desktop .gnav20-row-one .biz-bubble::before {
height: 10px;
width: 10px;
transform: rotate(-45deg);
content: "";
background-color: #ccc !important;
position: absolute;
left: -5px;
top: 6px;
}
.gnav20 .gnav20-desktop .gnav20-row-one .biz-bubble button {
padding: 0 4px 1px;
color: #000 !important;
background: transparent !important;
font-size: 22px;
position: absolute;
top: 0;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility {
width: 50%;
display: flex;
justify-content: flex-end;
font-family: 'BrandFont-Text',sans-serif;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper {
padding: 0 16px;
position: relative;
white-space: nowrap;
}
.gnav20 .gnav20-sub-nav {
width: 100%;
display: none;
}
.gnav20 .gnav20-sub-nav .gnav20-sub-nav-content {
border-top: solid 1px #d8dada;
display: none !important;
align-items: center;
gap: 24px;
max-width: 1272px;
min-height: 50px;
width: 100%;
margin: 0 auto;
padding: 0 20px;
}
.gnav20 .gnav20-placeholder-section {
position: relative;
line-height: 2.875rem;
color: #6e6e6e !important;
font-size: 0.875rem;
text-align: center;
height: 50px;
}
.gnav20 .gnav20-sub-nav .gnav20-sub-nav-call-link {
font-size: 14px !important;
font-weight: 700;
}
.gnav20 .gnav20-sub-nav .gnav20-sub-nav-call-link[href^=tel]:before {
content: " ";
font-weight: 700;
padding: 6px 4px 6px 24px;
background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDE4IDE4Ij48cGF0aCBkPSJNMTMuNiwxOGMtMiwwLTUtMS40LTguNi01LTUuMS01LjItNS45LTkuMS00LjMtMTAuN2gwbDEuOS0xLjlhMSwxLDAsMCwxLC45LS40aDBhMS4wOSwxLjA5LDAsMCwxLC45LjRsMy4xLDMuMWExLjI3LDEuMjcsMCwwLDEsMCwxLjhsLTEuMywxLjJhOS40Miw5LjQyLDAsMCwwLDUuMyw1LjNsMS4yLTEuMmExLjI3LDEuMjcsMCwwLDEsMS44LDBsMy4xLDMuMWExLjI3LDEuMjcsMCwwLDEsMCwxLjhsLTEuOSwxLjlBMy43LDMuNywwLDAsMSwxMy42LDE4Wm0tMTIuMS0xNC45Yy0xLjMsMS40LjYsNS40LDQuMyw5LjFzNy43LDUuNiw5LjEsNC4zbC4xLS4xLDEuOS0xLjljLjEtLjEuMS0uMSwwLS4ybC0zLjEtMy4xYy0uMS0uMS0uMS0uMS0uMiwwbC0xLjgsMS45LS4zLS4yYTEwLjkzLDEwLjkzLDAsMCwxLTYuNC02LjRsLS4yLS4zLDEuNy0xLjdjLjEtLjEuMS0uMSwwLS4ybC0zLTMuMWgtLjJaIj48L3BhdGg+PC9zdmc+) no-repeat 0;
}
.gnav20 .gnav20-sub-nav .gnav20-sub-nav-button {
font-size: 14px !important;
font-weight: 700;
padding: 6px 16px;
color: #fff !important;
background-color: #000;
border: 1px solid #000;
border-radius: 24px;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>div>a:hover,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>a:hover,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>div>a:active,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>a:active,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>div>a:focus,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper>a:focus {
border-bottom: none !important;
text-shadow: 1px 0 0 #000;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper:after {
content: '';
height: 16px;
width: 0;
border-right: 1px solid #d8dada;
display: block;
position: absolute;
top: 8px;
right: 0;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper .gnav20-dropdown-menu {
top: 32px;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility div.gnav20-localization .gnav20-utility-wrapper,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility div:last-of-type .gnav20-utility-wrapper{
padding-right:0;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility div.gnav20-localization .gnav20-utility-wrapper:after,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility div:last-of-type .gnav20-utility-wrapper:after{
display:none;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper a,
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper button {
font-size: 12px !important;
font-weight: normal !important;
line-height: 16px !important;
padding: 8px 0;
display: block;
font-family: 'BrandFont-Text',sans-serif !important;
}
.gnav20 .gnav20-desktop .gnav20-language-link {
padding-top: 8px;
}
.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility .gnav20-utility-wrapper svg {
height: 16px;
width: 16px;
}
.gnav20 .gnav20-desktop .gnav20-row-two {
display: block;
width: 100%;
height: 88px;
padding: 0 20px;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-grid1-wrapper {
position: absolute;
width: auto;
}
.gnav20 .gnav20-logo-wrapper {
padding: 27px 0 0;
position: relative;
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoWhiteBg {
background-image: url('data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTAwIDExMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+PC9kZWZzPgo8ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjgyNTU3OCwgMCwgMCwgMC44MjU1NzgsIC03OS40MjY1NDgsIC03OS40NTE3NDgpIiBzdHlsZT0iIj4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTYwNi43OCwyMjkuMzA2aDI5LjY2MXYtNTQuMTg3YzAtMTIuMzYsNy4yMjUtMjEuMTA3LDE3Ljg3Mi0yMS4xMDdjMTAuMjY3LDAsMTUuNTkxLDcuMjI3LDE1LjU5MSwxNy40OTV2NTcuOCBoMjkuNjYxdi02My41MDNjMC0yMS40ODgtMTIuOTI4LTM2LjY5OS0zMy44NDQtMzYuNjk5Yy0xMy4zMDgsMC0yMi42MjYsNS43MDUtMjkuNjYxLDE2LjE2MmgtMC41NzF2LTEzLjMwOWgtMjguNzFWMjI5LjMwNnogTTU0OC41OTgsMTI5LjI5NWMtMzAuOTkzLDAtNTEuNzE2LDIyLjI0Ni01MS43MTYsNTEuNTI3YzAsMjkuMDkyLDIwLjcyNCw1MS41MjgsNTEuNzE2LDUxLjUyOHM1MS43MTYtMjIuNDM2LDUxLjcxNi01MS41MjggQzYwMC4zMTQsMTUxLjU0LDU3OS41OSwxMjkuMjk1LDU0OC41OTgsMTI5LjI5NXogTTU0OC40MDgsMjEwLjQ4M2MtMTQuMDcyLDAtMjEuNDg1LTExLjc4Ny0yMS40ODUtMjkuNjYxIGMwLTE4LjA2Myw3LjQxMy0yOS42NjIsMjEuNDg1LTI5LjY2MmMxNC4wNjksMCwyMS44NjUsMTEuNTk4LDIxLjg2NSwyOS42NjJDNTcwLjI3MywxOTguNjk2LDU2Mi40NzcsMjEwLjQ4Myw1NDguNDA4LDIxMC40ODN6IE00MTIuNDYsMjI5LjMwNmg4My4yOHYtMjMuMzg1aC00Ny4xNTN2LTAuNTczbDQ1LjA2Mi01MC41NzZ2LTIyLjgxNEg0MTIuNDZ2MjMuMzg1aDQ1LjYzM3YwLjU3MUw0MTIuNDYsMjA2Ljg3VjIyOS4zMDZ6IE0zNzQuNDI5LDIyOS4zMDZoMjkuODUxdi05Ny4zNDhoLTI5Ljg1MVYyMjkuMzA2eiBNMzA1LjIxOSwyMjkuMzA2aDI5LjY2MXYtNDQuNjhjMC0yMC4zNDYsMTIuMTY5LTI5LjI4MywzMC44MDItMjYuODFoMC41NzEgdi0yNS42NjhjLTEuNTIyLTAuNTcxLTMuMjMyLTAuNzYxLTYuMDg0LTAuNzYxYy0xMS41OTgsMC0xOS4zOTQsNS4zMjMtMjYuMDUsMTYuNzMxaC0wLjU3MXYtMTYuMTZoLTI4LjMyOVYyMjkuMzA2eiBNMjUwLjY1MSwyMTAuNjc1Yy0xMy4xMiwwLTIxLjEwNS04LjU1OS0yMi42MjctMjEuNjc1aDcwLjE2YzAuMTktMjAuOTE4LTUuMzI1LTM3LjY1LTE2LjkyMy00OC4xMDcgYy04LjE3NC03LjYwNS0xOS4wMTQtMTEuNzg5LTMyLjcwMy0xMS43ODljLTI5LjI3OSwwLTQ5LjYyNSwyMi4yNDYtNDkuNjI1LDUxLjMzN2MwLDI5LjI4LDE5LjM5NCw1MS43MTYsNTEuNTI3LDUxLjcxNiBjMTIuMTY5LDAsMjEuODY1LTMuMjMyLDI5Ljg1MS04Ljc0N2M4LjU1Ny01Ljg5MSwxNC42NC0xNC40NSwxNi4zNS0yMy4wMDVoLTI4LjUxOSBDMjY1LjI5MSwyMDYuODcsMjU5LjM5NiwyMTAuNjc1LDI1MC42NTEsMjEwLjY3NXogTTI0OS4xMjksMTUwLjM5OWMxMC40NTcsMCwxNy42ODIsNy43OTgsMTguODIzLDE5LjIwNWgtMzkuNzM4IEMyMzAuNDk3LDE1OC4wMDQsMjM2Ljc3LDE1MC4zOTksMjQ5LjEyOSwxNTAuMzk5eiBNMzc0LjQyOSw5Ny4zNWgyOS44NTF2MjYuNDNoLTI5Ljg1MVY5Ny4zNXoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxnPgo8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBjeD0iLTExMDMuNjk5MyIgY3k9IjI0MjguMDkyMyIgcj0iMzU0LjM2ODciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4wNDk1IC0wLjEzNzEgMC4xNDgzIDAuMDUzNiAtMTQ1LjY0MjggLTY4Ljg2NzcpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CjxzdG9wIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0Y1RkYxRSI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuMjU3IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC4yNjU1IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGQTFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC40MjMiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUE2MjAiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjU2MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTYzMjEiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjY3NzkiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTMzMjIiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjc2NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTE1MjMiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjgxNTUiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTBBMjMiPjwvc3RvcD4KPC9yYWRpYWxHcmFkaWVudD4KPHBhdGggY2xhc3M9InN0MSIgZD0iTTE2NC4yMDEsMjI4LjA5NWwtMzYuOTA4LTk2LjEzN0g5Ny4zNWwzNi45MDgsOTYuMTM3YzAuMjgsMC43MzMsMC45ODMsMS4yMTMsMS43NjUsMS4yMTNoMjkuOTQzIEMxNjUuMTg0LDIyOS4zMDgsMTY0LjQ4MSwyMjguODI4LDE2NC4yMDEsMjI4LjA5NXoiIHN0eWxlPSJmaWxsOiB1cmwoI1NWR0lEXzFfKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTEzNy43ODcsMjI4LjA5NWwzNi45MDgtOTYuMTM3aDI5Ljk0M2wtMzYuOTA4LDk2LjEzN2MtMC4yOCwwLjczMy0wLjk4MywxLjIxMy0xLjc2NSwxLjIxM2gtMjkuOTQzIEMxMzYuODA1LDIyOS4zMDgsMTM3LjUwOCwyMjguODI4LDEzNy43ODcsMjI4LjA5NXoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjwvZz4KPC9nPgo8L3N2Zz4=');
width: 124px;
height: 29px;
display: block;
background-size: 124px 29px;
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoHeaderVBG {
background-image: url('data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTAwIDE4MyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+PC9kZWZzPgo8ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjgyMTUzNSwgMCwgMCwgMC44MjE1MzUsIC03OS4wMTgzMDcsIC03OS4wNDE1MzkpIiBzdHlsZT0iIj4KPGc+CjxnPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzI2Ljc3NSwzMTYuMjE4Yy0yLjc5NS0xLjUxMi00Ljk1LTMuODc5LTYuNDYyLTcuMTAyaC0wLjE5N3Y3LjY5NWgtMTQuODk3di03My4zOThoMTUuNDl2MTYuMDggYzAsMi4yMzctMC4wNSw0LjQyNC0wLjE0OSw2LjU2Yy0wLjA5OCwyLjEzOS0wLjIxNSwzLjk5Ni0wLjM0NSw1LjU3NGgwLjI5NWMxLjc3Ny0yLjY5NCwzLjkxNC00LjgzMyw2LjQxNC02LjQxMSBjMi40OTgtMS41NzgsNS41ODgtMi4zNjcsOS4yNzMtMi4zNjdjMy40MiwwLDYuNTEyLDAuNjkxLDkuMjczLDIuMDdjMi43NjMsMS4zODIsNS4xMywzLjMwNSw3LjEwNCw1Ljc3MyBjMS45NzIsMi40NjYsMy41MDIsNS4zOTQsNC41ODYsOC43NzljMS4wODYsMy4zODgsMS42MjksNy4wODgsMS42MjksMTEuMDk4YzAsNC4zNDEtMC41MjYsOC4yMzktMS41NzgsMTEuNjkxIGMtMS4wNTIsMy40NTQtMi41NjQsNi4zODItNC41MzgsOC43ODFjLTEuOTc0LDIuNDAyLTQuMzQxLDQuMjQzLTcuMTAyLDUuNTI0Yy0yLjc2MywxLjI4My01Ljg1NiwxLjkyNC05LjI3NSwxLjkyNCBDMzMyLjc0NSwzMTguNDg3LDMyOS41NywzMTcuNzMyLDMyNi43NzUsMzE2LjIxOHogTTM0MC4yOSwzMDEuODE0YzEuODA5LTIuODI3LDIuNzEzLTYuNjA4LDIuNzEzLTExLjM0NSBjMC00LjczNS0wLjkwNC04LjU2Ni0yLjcxMy0xMS40OTJjLTEuODA5LTIuOTI4LTQuNTU0LTQuMzkyLTguMjM3LTQuMzkyYy0yLjA0LDAtMy43OTksMC40MTItNS4yNzksMS4yMzMgYy0xLjQ4LDAuODIzLTIuNzEzLDEuOTQyLTMuNjk5LDMuMzU1Yy0wLjk4OCwxLjQxNC0xLjcxMSwzLjEwNi0yLjE3MSw1LjA4Yy0wLjQ2MiwxLjk3NC0wLjY5MSw0LjA3OC0wLjY5MSw2LjMxMyBjMCw0LjYwNCwxLjA1Miw4LjMzNywzLjE1NywxMS4xOTlzNS4wMzIsNC4yOTEsOC43ODEsNC4yOTFDMzM1Ljc2OCwzMDYuMDU3LDMzOC40ODEsMzA0LjY0NCwzNDAuMjksMzAxLjgxNHoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zOTguMDUyLDMwOS4zMTJoLTAuMjk3Yy0xLjkwOCwzLjA5Mi00LjExLDUuMzYxLTYuNjA4LDYuODA3Yy0yLjUsMS40NDYtNS41NTgsMi4xNzEtOS4xNzQsMi4xNzEgYy01Ljk4NiwwLTEwLjU1Ni0xLjc1OS0xMy43MTUtNS4yNzdjLTMuMTU2LTMuNTE4LTQuNzM1LTguMTczLTQuNzM1LTEzLjk2di0zNC43MjZoMTUuNDl2MzEuNzY2YzAsMi45NiwwLjcwNCw1LjIyOSwyLjEyLDYuODA3IGMxLjQxNCwxLjU3OCwzLjUwMiwyLjM2Nyw2LjI2NSwyLjM2N2MzLjE1NywwLDUuNjIyLTEuMDUyLDcuNC0zLjE1NmMxLjc3NS0yLjEwNCwyLjY2Mi00LjgwMSwyLjY2Mi04LjA5di0yOS42OTRoMTUuMjkxdjUyLjQ4MyBoLTE0LjY5OFYzMDkuMzEyeiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTQzMS45ODcsMzE3LjIwNmMtMy4wMjYtMC44NTUtNS42MDYtMi4wNzItNy43NDMtMy42NTFjLTIuMTM5LTEuNTc4LTMuODE1LTMuNDY4LTUuMDMyLTUuNjczIGMtMS4yMTctMi4yMDMtMS45MjQtNC42Mi0yLjEyLTcuMjUxaDE0LjZjMC40NiwyLjUsMS41OTQsNC40MDgsMy40MDQsNS43MjFjMS44MDcsMS4zMTgsNC4yMjUsMS45NzQsNy4yNTEsMS45NzQgYzIuNzYzLDAsNC44OTktMC41MjYsNi40MTQtMS41NzhjMS41MTItMS4wNTIsMi4yNjktMi41MzIsMi4yNjktNC40NGMwLTEuMTg1LTAuMzY0LTIuMTM2LTEuMDg2LTIuODYxIGMtMC43MjUtMC43MjMtMS43MTEtMS4zMTUtMi45Ni0xLjc3NXMtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xNzgtMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3Ny0xLjE4My0zLjIwNy0yLjcyNy00LjI5My00LjYzNiBjLTEuMDg0LTEuOTA1LTEuNjI2LTQuNDA1LTEuNjI2LTcuNDk4YzAtMi42OTQsMC41NzQtNS4wNjIsMS43MjUtNy4xMDJjMS4xNTEtMi4wMzgsMi43MTUtMy43NDksNC42ODctNS4xMyBjMS45NzQtMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjMwMSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDksMi44NjEsNS45ODQsNi41OTQsNi43MDksMTEuMTk2aC0xNC40MDNjLTAuOTg4LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc5LTUuNjIyYy0yLjM2NywwLTQuMjU5LDAuNDYtNS42NzMsMS4zODIgYy0xLjQxNiwwLjkyMi0yLjEyLDIuMjM1LTIuMTIsMy45NDZjMCwwLjk4NiwwLjMyNywxLjc5MywwLjk4NiwyLjQxOGMwLjY1NiwwLjYyNCwxLjU3OCwxLjEzNSwyLjc2MywxLjUyOCBjMS4xODMsMC4zOTYsMi41NjQsMC43MjUsNC4xNDIsMC45ODZjMS41NzgsMC4yNjUsMy4yNTUsMC41Niw1LjAzMiwwLjg5YzIuMzY3LDAuMzkzLDQuNzM1LDAuOTA0LDcuMTAyLDEuNTI4IGMyLjM2NywwLjYyNyw0LjUwNCwxLjU2Miw2LjQxNCwyLjgxMWMxLjkwNSwxLjI1MSwzLjQ2OCwyLjkxMiw0LjY4NCw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5LDUuMzI3LTEuNzc1LDcuNDk4Yy0xLjE4NSwyLjE2OC0yLjgyOSwzLjk4LTQuOTM0LDUuNDI2Yy0yLjEwNCwxLjQ0OC00LjYwNCwyLjUzMi03LjQ5NiwzLjI1NSBjLTIuODk2LDAuNzIzLTYuMDUyLDEuMDg0LTkuNDcyLDEuMDg0QzQzOC40MzMsMzE4LjQ4Nyw0MzUuMDEzLDMxOC4wNTksNDMxLjk4NywzMTcuMjA2eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ4Ni42NDMsMjQzLjQxMnYxMy41MTZoLTE1LjY4NnYtMTMuNTE2SDQ4Ni42NDN6IE00ODYuNTQ0LDI2NC4zMjh2NTIuNDgzaC0xNS40OXYtNTIuNDgzSDQ4Ni41NDR6IiBzdHlsZT0iZmlsbDogcmdiKDIzOCwgMCwgMzApOyI+PC9wYXRoPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTA5LjUyNywyNzIuMzE3YzEuNjQ1LTMuMTU3LDMuODMxLTUuNTI0LDYuNTYyLTcuMTAyYzIuNzI3LTEuNTc4LDUuOTMzLTIuMzY3LDkuNjE4LTIuMzY3IGM1Ljc4NywwLDEwLjI3NSwxLjc1OSwxMy40NjYsNS4yNzdjMy4xOTEsMy41Miw0Ljc4NSw4LjIzOSw0Ljc4NSwxNC4xNTZ2MzQuNTI5aC0xNS4zODl2LTMxLjU3YzAtMi44OTMtMC43NDEtNS4yMTEtMi4yMjEtNi45NTMgYy0xLjQ4LTEuNzQzLTMuNjY3LTIuNjE0LTYuNTYtMi42MTRjLTMuMDI2LDAtNS40NiwxLjA4NC03LjMwMSwzLjI1NXMtMi43NjEsNC45MzQtMi43NjEsOC4yODd2MjkuNTk2aC0xNS40OXYtNTIuNDgzaDE0Ljk5NiB2Ny45OUg1MDkuNTI3eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTU2NC45NywzMTYuMjY4Yy0zLjQyLTEuNDE0LTYuMzMxLTMuMzY5LTguNzMxLTUuODY5Yy0yLjQwMi0yLjUtNC4yNDEtNS40MjYtNS41MjQtOC43ODEgYy0xLjI4My0zLjM1My0xLjkyNC03LjAwNC0xLjkyNC0xMC45NDljMC0zLjk0OCwwLjY1Ni03LjYxMiwxLjk3Mi0xMS4wMDJjMS4zMTUtMy4zODUsMy4xNTktNi4zMjksNS41MjYtOC44MjkgYzIuMzY3LTIuNDk4LDUuMTk1LTQuNDUzLDguNDg0LTUuODY5YzMuMjg3LTEuNDE0LDYuOTM3LTIuMTIsMTAuOTUyLTIuMTJjMy43NDcsMCw3LjExOCwwLjU5LDEwLjExLDEuNzc1IGMyLjk5NCwxLjE4NSw1LjY0MSwyLjgyOSw3Ljk0Miw0LjkzNGMyLjk2LDIuODkzLDUuMTMsNi40NzgsNi41MTIsMTAuNzUzYzEuMzgyLDQuMjc1LDIuMDM4LDkuMDEyLDEuOTc0LDE0LjIwN2gtMzguMjc4IGMwLjUyNiwzLjk0NiwxLjg0MSw3LjAzOCwzLjk0Niw5LjI3M2MyLjEwNCwyLjIzNyw1LjAzMiwzLjM1Myw4Ljc4MSwzLjM1M2MyLjQzMSwwLDQuNDIxLTAuNDQ0LDUuOTY4LTEuMzMxIGMxLjU0Ni0wLjg4NywyLjc0NS0yLjE1MiwzLjYwMy0zLjc5N2gxNC45OTNjLTAuNjU2LDIuMzAxLTEuNjkzLDQuNDU2LTMuMTA2LDYuNDYyYy0xLjQxNiwyLjAwNi0zLjE1NiwzLjc0OS01LjIyOSw1LjIyOSBjLTIuMDcyLDEuNDgtNC40OSwyLjYzLTcuMjUxLDMuNDUyYy0yLjc2MywwLjgyMS01LjgyMSwxLjIzMy05LjE3NCwxLjIzM0M1NzIuMjM3LDMxOC4zODgsNTY4LjM4OSwzMTcuNjgyLDU2NC45NywzMTYuMjY4eiAgTTU2Ny42MzQsMjc2Ljk1NGMtMS44NDQsMi4xMDctMy4wMjYsNC45NjgtMy41NTIsOC41ODRoMjIuMzk1Yy0wLjI2My0zLjY4My0xLjM1LTYuNTYtMy4yNTctOC42MzIgYy0xLjkwOC0yLjA3Mi00LjQwNS0zLjEwOC03LjQ5Ni0zLjEwOEM1NzIuMTcyLDI3My43OTcsNTY5LjQ3MywyNzQuODQ5LDU2Ny42MzQsMjc2Ljk1NHoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02MTkuMDMzLDMxNy4yMDZjLTMuMDI2LTAuODU1LTUuNjA5LTIuMDcyLTcuNzQ1LTMuNjUxYy0yLjEzOS0xLjU3OC0zLjgxNS0zLjQ2OC01LjAzMi01LjY3MyBjLTEuMjE3LTIuMjAzLTEuOTI0LTQuNjItMi4xMi03LjI1MWgxNC42YzAuNDYsMi41LDEuNTk0LDQuNDA4LDMuNDA0LDUuNzIxYzEuODA5LDEuMzE4LDQuMjI3LDEuOTc0LDcuMjUzLDEuOTc0IGMyLjc2MSwwLDQuODk3LTAuNTI2LDYuNDExLTEuNTc4YzEuNTEyLTEuMDUyLDIuMjY5LTIuNTMyLDIuMjY5LTQuNDRjMC0xLjE4NS0wLjM2MS0yLjEzNi0xLjA4NC0yLjg2MSBjLTAuNzI1LTAuNzIzLTEuNzExLTEuMzE1LTIuOTYtMS43NzVjLTEuMjUxLTAuNDYtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xODEtMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3NS0xLjE4My0zLjIwNy0yLjcyNy00LjI5MS00LjYzNiBjLTEuMDg2LTEuOTA1LTEuNjI5LTQuNDA1LTEuNjI5LTcuNDk4YzAtMi42OTQsMC41NzYtNS4wNjIsMS43MjctNy4xMDJjMS4xNTEtMi4wMzgsMi43MTMtMy43NDksNC42ODctNS4xMyBjMS45NzItMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjI5OSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDcsMi44NjEsNS45ODQsNi41OTQsNi43MDYsMTEuMTk2aC0xNC40MDNjLTAuOTg2LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc3LTUuNjIyYy0yLjM3LDAtNC4yNjEsMC40Ni01LjY3NSwxLjM4MiBjLTEuNDE0LDAuOTIyLTIuMTIsMi4yMzUtMi4xMiwzLjk0NmMwLDAuOTg2LDAuMzI5LDEuNzkzLDAuOTg2LDIuNDE4YzAuNjU5LDAuNjI0LDEuNTgxLDEuMTM1LDIuNzYzLDEuNTI4IGMxLjE4NSwwLjM5NiwyLjU2NiwwLjcyNSw0LjE0NSwwLjk4NmMxLjU3OCwwLjI2NSwzLjI1NSwwLjU2LDUuMDMsMC44OWMyLjM2NywwLjM5Myw0LjczNywwLjkwNCw3LjEwNCwxLjUyOCBjMi4zNjcsMC42MjcsNC41MDQsMS41NjIsNi40MTEsMi44MTFjMS45MDgsMS4yNTEsMy40NywyLjkxMiw0LjY4Nyw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5Miw1LjMyNy0xLjc3NSw3LjQ5OGMtMS4xODUsMi4xNjgtMi44MjksMy45OC00LjkzNCw1LjQyNmMtMi4xMDcsMS40NDgtNC42MDQsMi41MzItNy40OTgsMy4yNTUgYy0yLjg5NiwwLjcyMy02LjA1MiwxLjA4NC05LjQ3MiwxLjA4NEM2MjUuNDc5LDMxOC40ODcsNjIyLjA1NywzMTguMDU5LDYxOS4wMzMsMzE3LjIwNnoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02NzAuMTMyLDMxNy4yMDZjLTMuMDI2LTAuODU1LTUuNjA2LTIuMDcyLTcuNzQzLTMuNjUxYy0yLjEzOS0xLjU3OC0zLjgxNS0zLjQ2OC01LjAzMi01LjY3MyBjLTEuMjE3LTIuMjAzLTEuOTI0LTQuNjItMi4xMi03LjI1MWgxNC42YzAuNDYsMi41LDEuNTk0LDQuNDA4LDMuNDA0LDUuNzIxYzEuODA3LDEuMzE4LDQuMjI1LDEuOTc0LDcuMjUxLDEuOTc0IGMyLjc2MywwLDQuODk5LTAuNTI2LDYuNDE0LTEuNTc4YzEuNTEyLTEuMDUyLDIuMjY5LTIuNTMyLDIuMjY5LTQuNDRjMC0xLjE4NS0wLjM2NC0yLjEzNi0xLjA4Ni0yLjg2MSBjLTAuNzI1LTAuNzIzLTEuNzExLTEuMzE1LTIuOTYtMS43NzVjLTEuMjQ5LTAuNDYtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xNzktMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3Ny0xLjE4My0zLjIwNy0yLjcyNy00LjI5My00LjYzNiBjLTEuMDg0LTEuOTA1LTEuNjI2LTQuNDA1LTEuNjI2LTcuNDk4YzAtMi42OTQsMC41NzQtNS4wNjIsMS43MjUtNy4xMDJjMS4xNTEtMi4wMzgsMi43MTUtMy43NDksNC42ODctNS4xMyBjMS45NzQtMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjMwMSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDksMi44NjEsNS45ODQsNi41OTQsNi43MDksMTEuMTk2aC0xNC40MDNjLTAuOTg4LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc5LTUuNjIyYy0yLjM2NywwLTQuMjU5LDAuNDYtNS42NzMsMS4zODIgYy0xLjQxNiwwLjkyMi0yLjEyLDIuMjM1LTIuMTIsMy45NDZjMCwwLjk4NiwwLjMyNywxLjc5MywwLjk4NiwyLjQxOGMwLjY1NiwwLjYyNCwxLjU3OCwxLjEzNSwyLjc2MywxLjUyOCBjMS4xODMsMC4zOTYsMi41NjQsMC43MjUsNC4xNDIsMC45ODZjMS41NzgsMC4yNjUsMy4yNTUsMC41Niw1LjAzMiwwLjg5YzIuMzY3LDAuMzkzLDQuNzM1LDAuOTA0LDcuMTAyLDEuNTI4IGMyLjM2NywwLjYyNyw0LjUwNCwxLjU2Miw2LjQxNCwyLjgxMWMxLjkwNSwxLjI1MSwzLjQ2OCwyLjkxMiw0LjY4NCw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5LDUuMzI3LTEuNzc1LDcuNDk4Yy0xLjE4NSwyLjE2OC0yLjgyOSwzLjk4LTQuOTM0LDUuNDI2Yy0yLjEwNCwxLjQ0OC00LjYwNCwyLjUzMi03LjQ5NiwzLjI1NSBjLTIuODk2LDAuNzIzLTYuMDUyLDEuMDg0LTkuNDcyLDEuMDg0QzY3Ni41NzcsMzE4LjQ4Nyw2NzMuMTU4LDMxOC4wNTksNjcwLjEzMiwzMTcuMjA2eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPC9nPgo8L2c+CjxnPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNjA2Ljc4LDIyOS4zMDZoMjkuNjYxdi01NC4xODdjMC0xMi4zNiw3LjIyNS0yMS4xMDcsMTcuODcyLTIxLjEwN2MxMC4yNjcsMCwxNS41OTEsNy4yMjcsMTUuNTkxLDE3LjQ5NSAgICB2NTcuOGgyOS42NjF2LTYzLjUwM2MwLTIxLjQ4OC0xMi45MjgtMzYuNjk5LTMzLjg0NC0zNi42OTljLTEzLjMwOCwwLTIyLjYyNiw1LjcwNS0yOS42NjEsMTYuMTYyaC0wLjU3MXYtMTMuMzA5aC0yOC43MVYyMjkuMzA2eiBNNTQ4LjU5OCwxMjkuMjk1Yy0zMC45OTMsMC01MS43MTYsMjIuMjQ2LTUxLjcxNiw1MS41MjdjMCwyOS4wOTIsMjAuNzI0LDUxLjUyOCw1MS43MTYsNTEuNTI4czUxLjcxNi0yMi40MzYsNTEuNzE2LTUxLjUyOCAgICBDNjAwLjMxNCwxNTEuNTQsNTc5LjU5LDEyOS4yOTUsNTQ4LjU5OCwxMjkuMjk1eiBNNTQ4LjQwOCwyMTAuNDgzYy0xNC4wNzIsMC0yMS40ODUtMTEuNzg3LTIxLjQ4NS0yOS42NjEgICAgYzAtMTguMDYzLDcuNDEzLTI5LjY2MiwyMS40ODUtMjkuNjYyYzE0LjA2OSwwLDIxLjg2NSwxMS41OTgsMjEuODY1LDI5LjY2MkM1NzAuMjczLDE5OC42OTYsNTYyLjQ3NywyMTAuNDgzLDU0OC40MDgsMjEwLjQ4M3ogTTQxMi40NiwyMjkuMzA2aDgzLjI4di0yMy4zODVoLTQ3LjE1M3YtMC41NzNsNDUuMDYyLTUwLjU3NnYtMjIuODE0SDQxMi40NnYyMy4zODVoNDUuNjMzdjAuNTcxTDQxMi40NiwyMDYuODdWMjI5LjMwNnogTTM3NC40MjksMjI5LjMwNmgyOS44NTF2LTk3LjM0OGgtMjkuODUxVjIyOS4zMDZ6IE0zMDUuMjE5LDIyOS4zMDZoMjkuNjYxdi00NC42OGMwLTIwLjM0NiwxMi4xNjktMjkuMjgzLDMwLjgwMi0yNi44MWgwLjU3MSAgICB2LTI1LjY2OGMtMS41MjItMC41NzEtMy4yMzItMC43NjEtNi4wODQtMC43NjFjLTExLjU5OCwwLTE5LjM5NCw1LjMyMy0yNi4wNSwxNi43MzFoLTAuNTcxdi0xNi4xNmgtMjguMzI5VjIyOS4zMDZ6IE0yNTAuNjUxLDIxMC42NzVjLTEzLjEyLDAtMjEuMTA1LTguNTU5LTIyLjYyNy0yMS42NzVoNzAuMTZjMC4xOS0yMC45MTgtNS4zMjUtMzcuNjUtMTYuOTIzLTQ4LjEwNyAgICBjLTguMTc0LTcuNjA1LTE5LjAxNC0xMS43ODktMzIuNzAzLTExLjc4OWMtMjkuMjc5LDAtNDkuNjI1LDIyLjI0Ni00OS42MjUsNTEuMzM3YzAsMjkuMjgsMTkuMzk0LDUxLjcxNiw1MS41MjcsNTEuNzE2IGMxMi4xNjksMCwyMS44NjUtMy4yMzIsMjkuODUxLTguNzQ3YzguNTU3LTUuODkxLDE0LjY0LTE0LjQ1LDE2LjM1LTIzLjAwNWgtMjguNTE5ICAgIEMyNjUuMjkxLDIwNi44NywyNTkuMzk2LDIxMC42NzUsMjUwLjY1MSwyMTAuNjc1eiBNMjQ5LjEyOSwxNTAuMzk5YzEwLjQ1NywwLDE3LjY4Miw3Ljc5OCwxOC44MjMsMTkuMjA1aC0zOS43MzggICAgQzIzMC40OTcsMTU4LjAwNCwyMzYuNzcsMTUwLjM5OSwyNDkuMTI5LDE1MC4zOTl6IE0zNzQuNDI5LDk3LjM1aDI5Ljg1MXYyNi40M2gtMjkuODUxVjk3LjM1eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPGc+CjxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGN4PSItMTEwMy42OTkzIiBjeT0iMjQyOC4wOTIzIiByPSIzNTQuMzY4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjA0OTUgLTAuMTM3MSAwLjE0ODMgMC4wNTM2IC0xNDUuNjQyOCAtNjguODY3NykiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KPHN0b3Agb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC4yNTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUZGMUUiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjI2NTUiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUZBMUUiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjQyMyIgc3R5bGU9InN0b3AtY29sb3I6I0Y1QTYyMCI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNTYyMSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1NjMyMSI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNjc3OSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MzMyMiI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNzY1NyIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MTUyMyI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuODE1NSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MEEyMyI+PC9zdG9wPgo8L3JhZGlhbEdyYWRpZW50Pgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTY0LjIwMSwyMjguMDk1bC0zNi45MDgtOTYuMTM3SDk3LjM1bDM2LjkwOCw5Ni4xMzdjMC4yOCwwLjczMywwLjk4MywxLjIxMywxLjc2NSwxLjIxM2gyOS45NDMgQzE2NS4xODQsMjI5LjMwOCwxNjQuNDgxLDIyOC44MjgsMTY0LjIwMSwyMjguMDk1eiIgc3R5bGU9ImZpbGw6IHVybCgjU1ZHSURfMV8pOyI+PC9wYXRoPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTM3Ljc4NywyMjguMDk1bDM2LjkwOC05Ni4xMzdoMjkuOTQzbC0zNi45MDgsOTYuMTM3Yy0wLjI4LDAuNzMzLTAuOTgzLDEuMjEzLTEuNzY1LDEuMjEzaC0yOS45NDMgQzEzNi44MDUsMjI5LjMwOCwxMzcuNTA4LDIyOC44MjgsMTM3Ljc4NywyMjguMDk1eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPC9nPgo8L2c+CjwvZz4KPC9zdmc+');
width:126px;
height:46px;
display:block;
background-size:126px 46px;
margin-top:-6px
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoHeaderVSBDR {
background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA3OTUgMzEzLjEiPgogIDwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyOS4zLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiAyLjEuMCBCdWlsZCAxNTEpICAtLT4KICA8ZGVmcz4KICAgIDxzdHlsZT4KICAgICAgLnN0MCB7CiAgICAgICAgZmlsbDogI2Y1MGEyMzsKICAgICAgfQogICAgPC9zdHlsZT4KICA8L2RlZnM+CiAgPGc+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTUyLjYsMjE4LjljOS43LDAsMTcuMyw0LjksMjEuNiwxMS40aC4zdi0zNi4yaDEwLjl2OTUuNmgtMTAuOXYtOC40aC0uM2MtNS4yLDYuOC0xMS43LDEwLjUtMjEuNCwxMC41LTE4LjksMC0zMC43LTE0LjItMzAuNy0zNi4zczEzLjItMzYuMywzMC40LTM2LjN2LS4zaDBaTTE1My4xLDIyOC4yYy0xMy4xLDAtMTkuOCwxMS44LTE5LjgsMjcuM3M2LjcsMjcuMiwxOS45LDI3LjIsMjEuOS0xMS43LDIxLjktMjcuMi03LjYtMjcuMy0yMi0yNy4zaDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjEwLjgsMTk0LjF2MTMuNGgtMTAuOXYtMTMuNGgxMC45Wk0yMTAuOCwyMjAuNnY2OS4xaC0xMC45di02OS4xaDEwLjlaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjMzLjksMjkzLjZjMSw3LjYsOC4zLDEwLjYsMTksMTAuNnMxOS44LTUuNiwxOS44LTE3Ljh2LTkuN2gtLjNjLTUuMiw2LjYtMTAuNSwxMC44LTIwLjUsMTAuOC0xNy44LDAtMzAuMy0xNC4zLTMwLjMtMzQuMnMxMy41LTM0LjEsMjkuNS0zNC4xLDE2LjQsMy45LDIxLjEsMTAuNWguM3YtOC44aDEwLjl2NjUuNGMwLDE4LjItMTIuMSwyNi44LTMwLjQsMjYuOHMtMjguMS03LjItMjkuMi0xOS4xaDEwLjF2LS4zaDBaTTI1Mi40LDIyOC4xYy0xMywwLTE5LjUsMTAuMi0xOS41LDI1LjJzNi44LDI1LjEsMTkuNywyNS4xLDIxLTExLjEsMjEtMjUuNy02LjMtMjQuNS0yMS4xLTI0LjVoLS4xWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwOSwxOTQuMXYxMy40aC0xMC45di0xMy40aDEwLjlaTTMwOSwyMjAuNnY2OS4xaC0xMC45di02OS4xaDEwLjlaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzI5LjQsMjIwLjZ2LTIxLjhoMTAuOXYyMS44aDEzLjR2OC44aC0xMy40djQ1YzAsNC45LDIuNSw2LjQsNyw2LjRzNC42LS41LDUuOC0uOWguNHY5LjNjLTIuNS41LTUuNS45LTguNy45LTguOSwwLTE1LjItMy43LTE1LjItMTMuNHYtNDcuM2gtMTAuMXYtOC44aDEwLjEtLjIsMFoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00MDcuMiwyODAuMWMtNC4zLDUuNC0xMS4zLDExLTIzLDExcy0yMy41LTYtMjMuNS0xOS4zLDEyLjktMTkuNSwzMC4yLTIyLjNjOS43LTEuNCwxNi41LTIuNSwxNi41LTkuOHMtNS41LTEyLjItMTUuNS0xMi4yLTE2LjksNC43LTE3LjMsMTUuMmgtMTAuNWMuNC0xMy40LDkuMi0yMy41LDI3LjUtMjMuNXMyNS42LDUuNSwyNS42LDIxLjl2MzIuOWMwLDUuOCwxLjMsOC44LDcuMyw3LjNoLjR2Ny45Yy0xLjQuNS0zLDEtNS45LDEtNi44LDAtMTAuOS0zLjUtMTEuOS0xMC40aC0uMS4xdi4zaDBaTTQwNy41LDI1Mi41Yy0zLjcsMi4yLTkuOCw0LjEtMTUuNyw1LjEtMTAuOSwyLjEtMTkuNSwzLjgtMTkuNSwxNHM3LjMsMTEuMywxNC4zLDExLjNjMTQuNCwwLDIxLTEwLjYsMjEtMTguNnYtMTEuOGgwWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ0NC4zLDE5NC4xdjk1LjZoLTEwLjl2LTk1LjZoMTAuOVoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00OTEuOCwyMzJjNC4yLTYuOCwxMS40LTEyLjMsMjAuNi0xMi4zczIuOS4zLDQuNS44djEwLjVoLS40Yy0xLjYtLjUtMi42LS43LTQuOS0uNy0xMC44LDAtMjAuMSw4LTIwLjEsMjF2MzguNGgtMTAuOXYtNjkuMWgxMC45djExLjVoLjNaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTUyLjksMjE4LjhjMjAuNywwLDMxLjksMTYsMzEuOSwzOWgtNTMuNWMuNywxNCw4LjUsMjQuOCwyMi4zLDI0LjhzMTYuNS00LjcsMTkuMS0xNC4yaDEwLjZjLTMuMSwxNS0xNCwyMy4yLTI5LjYsMjMuMnMtMzMuNC0xNi40LTMzLjQtMzYuMywxMy4xLTM2LjMsMzIuOC0zNi4zaDB2LS4yaC0uMiwwWk01NzMuMSwyNDkuNmMtLjctMTMuOS03LjctMjIuMi0yMC4yLTIyLjJzLTE5LjksOS42LTIxLjQsMjIuMmg0MS42WiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTYzNy41LDI4MC4xYy00LjMsNS40LTExLjMsMTEtMjMsMTFzLTIzLjUtNi0yMy41LTE5LjMsMTIuOS0xOS41LDMwLjItMjIuM2M5LjctMS40LDE2LjUtMi41LDE2LjUtOS44cy01LjUtMTIuMi0xNS41LTEyLjItMTYuOSw0LjctMTcuMywxNS4yaC0xMC41Yy40LTEzLjQsOS4yLTIzLjUsMjcuNS0yMy41czI1LjYsNS41LDI1LjYsMjEuOXYzMi45YzAsNS44LDEuMyw4LjgsNy4zLDcuM2guNHY3LjljLTEuNC41LTMsMS01LjksMS02LjgsMC0xMC45LTMuNS0xMS45LTEwLjRoMHYuM2guMVpNNjM3LjksMjUyLjVjLTMuNywyLjItOS44LDQuMS0xNS43LDUuMS0xMC45LDIuMS0xOS41LDMuOC0xOS41LDE0czcuMywxMS4zLDE0LjMsMTEuM2MxNC40LDAsMjEtMTAuNiwyMS0xOC42di0xMS44aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNjg5LjksMjE4LjljOS43LDAsMTcuMyw0LjksMjEuNiwxMS40aC4zdi0zNi4yaDEwLjl2OTUuNmgtMTAuOXYtOC40aC0uM2MtNS4yLDYuOC0xMS43LDEwLjUtMjEuNCwxMC41LTE4LjksMC0zMC43LTE0LjItMzAuNy0zNi4zczEzLjItMzYuMywzMC40LTM2LjN2LS4zaC4xWk02OTAuNSwyMjguMmMtMTMuMSwwLTE5LjgsMTEuOC0xOS44LDI3LjNzNi43LDI3LjIsMTkuOSwyNy4yLDIxLjktMTEuNywyMS45LTI3LjItNy42LTI3LjMtMjItMjcuM2gwWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTczNi41LDMwMS41aC41YzEuNC45LDMuOCwxLjQsNy4zLDEuNHM3LjYtMS42LDEwLjQtOC40bDIuNi02LjgtMjctNjcuMmgxMS44bDE2LjMsNDMsMyw4LjksMS42LDQuNmguM2MuNC0xLjQuOS0yLjksMS40LTQuNmwzLTguOSwxNS43LTQzaDExLjVsLTI5LjUsNzQuOGMtNS44LDE0LjItMTAuOSwxNy4zLTE5LjQsMTcuM3MtNi43LS4zLTkuNy0xLjR2LTkuNmguMloiLz4KICA8L2c+CiAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTM1OC4zLjFoMzkuMnYzNC42aC0zOS4yVi4xWiIvPgogIDxnPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTQxLjcsNDcuMmwxNy40LDU3LjNjMS43LDYuNywzLjcsMTIuOSw1LDE3LjZsMiw3LjloLjVsMi03LjksNS0xNy42LDE3LjYtNTcuM2g0MC40bC00My45LDEyN2gtNDMuNkwwLDQ3LjJoNDEuN1oiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xOTEsNDMuNWMxOC4xLDAsMzIuNSw2LDQzLjQsMTUuOSwxNS4xLDEzLjksMjIuMywzNS43LDIyLjMsNjEuOGgtOTEuM2MyLjcsMTcuMSwxMS43LDI3LjgsMjguNSwyNy44czE3LjQtNC43LDIxLjEtMTIuNmgzOS40Yy0yLjcsMTEuNy0xMC4yLDIyLjMtMjEuMywzMC0xMC43LDcuNy0yMy42LDExLjctMzkuNywxMS43LTQxLjksMC02Ny43LTI4LjgtNjcuNy02Ny41czI2LjUtNjcsNjUuMi02N2guMVpNMTY1LjcsOTcuMWg1MC4xYy0xLjctMTUuMS0xMC45LTI0LjgtMjQuMS0yNC44cy0yMy4zLDkuNy0yNiwyNC44aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzA1LDQ3LjJ2MTkuOGguN2M4LjktMTUuMSwxOS4xLTIxLjgsMzQuNy0yMS44czYuNC4yLDcuOSwxdjM0LjdoLTFjLTMtLjUtNS41LS43LTguMi0uNy0yMC4xLDAtMzIuNSwxMi40LTMyLjUsMzd2NTdoLTQwLjRWNDcuMmgzOC44WiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTM5Ny44LDQ3LjJ2MTI3aC00MC40VjQ3LjJoNDAuNFoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00NTkuOCw4OS45YzEuNy0xLjcsNC41LTQsNi43LTYuN2w0LjItNC41di0uN2MtMi4yLjItNC41LjItNi40LjJoLTQ4Ljl2LTMwLjhoMTA0LjJ2MjkuNWwtNDguMSw1Mi4zLTcuOSw3LjktNSw1LjJ2LjdoNy4yYzQsMCw4LjctLjIsMTEuNy0uMmg0NS45djMxLjJoLTExMy44di0zMGw1MC4zLTU0LjN2LjJaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTkzLDQzLjhjNDAuOSwwLDY3LjcsMjguOCw2Ny43LDY3LjJzLTI2LjgsNjcuMi02Ny43LDY3LjItNjgtMjguOC02OC02Ny4yLDI3LTY3LjIsNjgtNjcuMlpNNTkyLjcsNzIuM2MtMTcuOSwwLTI2LjgsMTUuNi0yNi44LDM4LjdzOC45LDM4LjQsMjYuOCwzOC40LDI3LTE1LjQsMjctMzguNC05LjItMzguNy0yNy0zOC43aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNzA5LjMsNDcuMnYxNy40aC43YzkuNy0xMy45LDIxLjMtMjEuMSwzOS4yLTIxLjEsMjcuOCwwLDQ0LjEsMTkuOCw0NC4xLDQ4LjF2ODIuNmgtNDAuNHYtNzQuNGMwLTEzLjYtNi43LTIyLjYtMTkuOC0yMi42cy0yMi4zLDEwLjktMjIuMywyNi44djcwLjJoLTQwLjRWNDcuMmgzOC45WiIvPgogIDwvZz4KPC9zdmc+');
width: 126px;
height: 50px;
display: block;
background-size: 126px 50px;
margin-top: -10px;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation {
width: 100%;
height: 88px;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation {
padding: 34px 0;
margin: 0;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-navigation-list {
width: 80%;
margin: 0 auto;
display: flex;
justify-content: center;
}
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-navigation .gnav20-navigation-item .gnav20-primary-menu {
margin: 0 8px;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-menu-label-button,
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-menu-label-link {
font-size: 16px;
line-height: 20px;
padding-bottom: 2px;
height: auto;
}
.gnav20 .gnav20-menu-label {
font-weight: bold;
}
.gnav20 .gnav20-menu-label-button {
border: 0;
border-radius: 0 !important;
position: absolute;
background: 0;
cursor: pointer;
margin: 0;
padding: 0;
}
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-navigation .gnav20-menu-label-button{
z-index:4502;
}
.gnav20 .gnav20-menu-label-button.gnav20-goback {
display: none;
}
.gnav20 .gnav20-menu-label-link {
font-weight: bold;
color: transparent !important;
visibility: hidden;
}
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-menu-label[aria-expanded="true"],
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-menu-label:hover {
border-bottom: 2px solid #000;
color: #000 !important;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-grouping:hover,
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-clickL1.gnav20-menu-label[aria-expanded="true"],
.gnav20 .gnav20-desktop .gnav20-navigation .gnav20-featured-card .gnav20-menu-label[aria-expanded="true"] {
border-bottom-width: 2px;
border-color: #e00;
color: #e00 !important;
}
.gnav20 .gnav20-desktop .gnav20-sub-header-menu {
left: 0;
padding: 30px 20px 0 20px;
display: flex;
position: absolute;
overflow: visible;
z-index: 4501;
width: 100%;
font-size: 14px;
max-width: 100%;
background-color: #fff;
}
.gnav20 .gnav20-grouping .gnav20-sub-header-menu {
flex-direction: column;
}
.gnav20 .gnav20-desktop .gnav20-sub-menu.gnav20-grouping-active {
overflow: hidden;
max-height: 700px;
padding-bottom: 80px;
border-bottom: 1px solid #d8dada;
transition: max-height .1s, padding-bottom .1s, border-bottom-color .1s;
transition-delay: .1s;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-header-menu {
border-bottom: 1px solid #d8dada;
background-color: #fff;
padding: 86px 0 0;
margin-top: -50px;
overflow: visible;
max-height: calc(100vh - 99px);
}
.gnav20 .gnav20-desktop .gnav20-sub-header-menu .gnav20-content-wrapper {
width: 100%;
opacity: 0;
max-width: 1272px;
margin: auto;
padding: 0 !important;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-sub-header-menu {
padding-top: 56px;
padding-bottom: 0;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-sub-header-menu.gnav20-mega-active {
max-height: 800px;
border-bottom-color: #d8dada;
background: #fff;
}
.gnav20 .gnav20-desktop .gnav20-sub-header-menu .gnav20-content-wrapper.gnav20-mega-active {
opacity: 1;
transition: opacity 100ms;
position: relative;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column {
width: calc(25% - 20px);
background-color: #d8dada;
padding: 20px 0 30px 0;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-content-wrapper>ul.gnav20-submenu-column {
min-height: 460px;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-sub-menu ul.gnav20-submenu-column.gnav20-L1>li {
margin: 0;
padding: 0;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-content-wrapper>ul.gnav20-submenu-column>li>a {
width: fit-content;
display: block;
padding: 8px 0 8px 16px;
border-left-style: solid;
border-left-color: transparent;
border-left-width: 4px;
transition: color 100ms, border-color 100ms;
line-height: 18px;
border-bottom: 0 !important;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L1>li>a:hover,
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L1>li>a.gnav20-open {
border-color: #e00;
color: #e00 !important;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2 {
position: absolute;
width: 25%;
background-color: #fff;
top: 0;
padding: 10px 0;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L3 {
width: 100%;
background-color: #fff;
padding: 0;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-content-wrapper>ul.gnav20-submenu-column>li.gnav20-margin-top {
margin-top: 35px;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-one-col,
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-two-col,
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-three-col {
margin-left: 0
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-mega-column-0 {
left: 25%
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-mega-column-1 {
left: 50%
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L2.gnav20-mega-column-2 {
left: 75%
}
.gnav20 .gnav20-desktop .gnav20-sub-header-menu>.gnav20-content-wrapper.gnav20-grouping-active {
opacity: 1;
transition: all .1s;
transition-delay: .1s;
margin-top: 24px !important;
margin-bottom: 32px !important;
}
.gnav20 .gnav20-desktop .gnav20-featured-card .gnav20-sub-header-menu>.gnav20-content-wrapper {
max-width: 962px;
padding: 24px 0 32px 0 !important;
position: relative;
height: calc(100vh - 186px);
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping.gnav20-four-column .gnav20-content-wrapper.gnav20-featured-scroll-area {
width: 1272px !important;
max-width: 1272px !important;
overflow-x: hidden;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-header-menu .gnav20-nav-utility {
position: absolute;
width: 100%;
max-width: 1272px;
margin-right: auto;
margin-left: auto;
right: 0;
left: 0;
top: 18px;
}
.gnav20 .gnav20-nav-utility button {
position: absolute;
right: 12px;
text-indent: 999px;
overflow: hidden;
width: 44px;
}
.gnav20 .gnav20-nav-utility button.gnav20-nav-search-icon {
right: 52px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-header-menu .gnav20-nav-mask {
position: absolute;
width: 100%;
height: 64px;
bottom: -65px;
background-color: rgba(0, 0, 0, 0.8);
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-card-top-label {
color: #000 !important;
font-weight: bold;
font-size: 20px;
line-height: 20px;
padding-bottom: 16px;
width: 278px;
border-bottom: 1px solid #d8dada;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-scroll-area {
max-height: calc(100vh - 298px);
overflow: auto;
padding-right: 16px;
width: 308px !important;
margin-left: -10px;
padding-left: 10px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-content-wrapper.gnav20-featured-scroll-area {
width: 978px !important;
max-width: 978px !important;
margin: auto;
padding: 0 !important;
margin-top: 24px !important;
margin-bottom: 32px !important;
max-height: calc(100vh - 242px);
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-scroll-area::-webkit-scrollbar {
width:16px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-scroll-area::-webkit-scrollbar-track {
background:#fff;
border-radius:2px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-scroll-area::-webkit-scrollbar-thumb {
background:#747676;
border-radius:8px;
border:6px solid #fff;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-scroll-area::-webkit-scrollbar-thumb:hover{
background:#555;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li {
margin: 0 !important;
padding: 0 !important;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a {
font-size: 16px !important;
line-height: 20px !important;
font-weight: normal;
padding: 9px 0 12px 0;
margin: 3px 0;
width: 278px;
display: block;
position: relative;
color: #000 !important;
border-bottom: 1px solid #d8dada !important;
letter-spacing: .5px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping.gnav20-four-column .gnav20-sub-menu ul.gnav20-submenu-column li>a {
width: auto;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a.gnav20-haschild:after {
position: absolute;
content: "";
height: 9px;
width: 9px;
border-left: 1px solid #000;
border-top: 1px solid #000;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
transform: rotate(135deg);
right: 10px;
margin-top: 5px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a.gnav20-open, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:hover, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:active, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:focus {
font-weight: bold;
color: #e00 !important;
letter-spacing: normal;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a.gnav20-open.gnav20-haschild:after, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:hover.gnav20-haschild:after, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:active.gnav20-haschild:after, .gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-sub-menu ul.gnav20-submenu-column li>a:focus.gnav20-haschild:after {
border-left: 2px solid #e00;
border-top: 2px solid #e00;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-content-wrapper .gnav20-L2-content-wrapper {
position: absolute;
top: 24px;
left: 342px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-content-wrapper .gnav20-L2-content-wrapper ul.gnav20-submenu-column.gnav20-L3 {
position: absolute;
top: 37px;
left: 342px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-featured-card-top-label.gnav20-submenu-column.gnav20-L3 {
position: absolute;
top: 0;
left: 342px;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-content-wrapper {
display: flex;
justify-content: flex-start;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-content-wrapper>ul.gnav20-submenu-column {
width: 278px;
margin-right: 64px !important;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping.gnav20-four-column .gnav20-content-wrapper>ul.gnav20-submenu-column {
width: calc(25% - 40px);
margin: 0 20px !important;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping:not(.gnav20-four-column) .gnav20-content-wrapper>ul.gnav20-submenu-column:last-child {
margin-right: 0 !important;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-sub-menu ul.gnav20-submenu-column.gnav20-L1>li>a {
font-size: 20px !important;
line-height: 20px !important;
font-weight: bold;
padding: 13px 0 16px 0;
letter-spacing: normal;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-sub-menu ul.gnav20-submenu-column a.gnav20-haschild:after {
display: none;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-content-wrapper .gnav20-L2-content-wrapper {
position: relative;
top: 0;
left: 0;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card.gnav20-featured-grouping .gnav20-sub-menu ul.gnav20-submenu-column li.gnav20-margin-top {
margin-top: 36px !important;
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-five-col,
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-four-col,
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-three-col,
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-two-col,
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-one-col {
display: flex;
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-five-col>.gnav20-submenu-column,.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-four-col>.gnav20-submenu-column,.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-three-col>.gnav20-submenu-column,.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-two-col>.gnav20-submenu-column,.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-one-col>.gnav20-submenu-column {
width: 25%
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-five-col>.gnav20-submenu-column {
width: 20%
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-two-col>.gnav20-submenu-column:nth-child(1),.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-one-col>.gnav20-submenu-column:nth-child(1) {
margin-left: 50%
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-three-col>.gnav20-submenu-column:nth-child(1) {
margin-left: 25%
}
.gnav20 li.gnav20-bond-label:nth-child(1) {
margin-top: 0
}
.gnav20 .gnav20-desktop .gnav20-sub-menu>.gnav20-content-wrapper.gnav20-grouping-active {
opacity: 1;
margin-top: 24px !important;
margin-bottom: 32px !important;
transition: all .1s;
transition-delay: .1s;
}
.gnav20 .gnav20-desktop .gnav20-mega-drawer .gnav20-sub-header-menu.gnav20-sub-menu,
.gnav20 .gnav20-desktop .gnav20-grouping .gnav20-sub-header-menu.gnav20-sub-menu {
background: linear-gradient(to bottom, transparent 30px, #fff 10px);
border-bottom: 1px solid #d8dada;
}
.gnav20 .gnav20-desktop .gnav20-sub-menu ul.gnav20-submenu-column.gnav20-L1>li {
margin-left: 20px;
}
.gnav20 ul.gnav20-submenu-column li {
padding-top: 14px;
}
.gnav20 ul.gnav20-submenu-column li a {
line-height: 22px;
}
.gnav20 ul.gnav20-submenu-column li a:hover {
color: #e00 !important;
}
.gnav20 li.gnav20-margin-top {
margin-top: 18px;
}
.gnav20 .gnav20-desktop .gnav20-bold-non-link>a {
pointer-events: none;
font-weight: bold;
}
.gnav20 .gnav20-desktop .gnav20-bold-non-link strong,
.gnav20 .gnav20-desktop .gnav20-bold-link>a {
font-weight: bold;
}
.gnav20 .gnav20-desktop #gnav20-closex3, .gnav20 .gnav20-desktop .gnav20-hide-on-desktop, .gnav20 .gnav20-desktop .gnav20-goback {
display: none !important;
}
.gnav20 .gnav20-desktop .gnav20-row-one, .gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation, .gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility {
opacity: 0;
}
.gnav20 .gnav20-desktop .opacityOne, .gnav20 .gnav20-mobile .opacityOne {
opacity: 1 !important;
transition: opacity .5s;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility {
float: right;
width: auto;
margin-top: -66px;
margin-right: -20px;
padding: 0 8px 0 0;
display: flex;
justify-content: flex-end;
position: relative;
}
.gnav20 #bizSearchClose,
.gnav20 .gnav20-account-box .gnav20-close-account-utility,
.gnav20 .gnav20-search-para .gnav20-close-icon,
.gnav20 .gnav20-mobile-menu .gnav20-closex,
.gnav20 .gnav20-unified-cart .gnav20-closex,
.gnav20 .gnav20-nav-utility .gnav20-nav-close {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxzdHlsZT4uc3Qxe2ZpbGw6bm9uZTtzdHJva2U6IzAwMDAwMDtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9PC9zdHlsZT48cmVjdCBmaWxsPSJub25lIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48bGluZSBjbGFzcz0ic3QxIiB4MT0iMiIgeTE9IjIiIHgyPSIyMiIgeTI9IjIyIi8+PGxpbmUgY2xhc3M9InN0MSIgeDE9IjIiIHkxPSIyMiIgeDI9IjIyIiB5Mj0iMiIvPjwvc3ZnPg==) !important;
}
.gnav20 .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper {
margin: 0 !important;
width: auto !important;
white-space: nowrap;
}
.gnav20 .gnav20-utility .gnav20-notification .gnav20-notification-icon {
background: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjIwODcgMTEuMDc1VjUuODc1QzE0LjIwODcgNC40OTM2NiAxMy42NTk5IDMuMTY4OSAxMi42ODMyIDIuMTkyMTVDMTEuNzA2NCAxLjIxNTQgMTAuMzgxNyAwLjY2NjY2NCA5LjAwMDMzIDAuNjY2NjY0QzcuNjE4OTkgMC42NjY2NjQgNi4yOTQyMyAxLjIxNTQgNS4zMTc0OCAyLjE5MjE1QzQuMzQwNzMgMy4xNjg5IDMuNzkxOTkgNC40OTM2NiAzLjc5MTk5IDUuODc1VjExLjA3NUwwLjY2Njk5MiAxMy4xNjY3VjE0LjIwODNIMTcuMzMzN1YxMy4xNjY3TDE0LjIwODcgMTEuMDc1Wk0xNC4yMDg3IDEzLjE2NjdIMi41NDAxNEw0LjM3MTYyIDExLjk0MDdMNC44MzM2NiAxMS42MzE1VjUuODc1QzQuODMzNjYgNC43Njk5MyA1LjI3MjY1IDMuNzEwMTIgNi4wNTQwNSAyLjkyODcyQzYuODM1NDUgMi4xNDczMiA3Ljg5NTI2IDEuNzA4MzMgOS4wMDAzMyAxLjcwODMzQzEwLjEwNTQgMS43MDgzMyAxMS4xNjUyIDIuMTQ3MzIgMTEuOTQ2NiAyLjkyODcyQzEyLjcyOCAzLjcxMDEyIDEzLjE2NyA0Ljc2OTkzIDEzLjE2NyA1Ljg3NVYxMS42MzE1TDEzLjYyOSAxMS45NDA3TDE1LjQ2MDUgMTMuMTY2N0gxNC4yMDg3Wk02LjkxNjk5IDE1LjI1SDExLjA4MzdDMTEuMDgzNyAxNS44MDI1IDEwLjg2NDIgMTYuMzMyNCAxMC40NzM1IDE2LjcyMzFDMTAuMDgyOCAxNy4xMTM4IDkuNTUyODYgMTcuMzMzMyA5LjAwMDMzIDE3LjMzMzNDOC40NDc3OSAxNy4zMzMzIDcuOTE3ODkgMTcuMTEzOCA3LjUyNzE5IDE2LjcyMzFDNy4xMzY0OSAxNi4zMzI0IDYuOTE2OTkgMTUuODAyNSA2LjkxNjk5IDE1LjI1WiIgZmlsbD0iYmxhY2siLz4KPC9zdmc+) no-repeat center / 18px !important;
position: relative;
min-width: 44px;
height: 44px;
display: block;
background-position: 12px 12px !important;
background-size: 20px 20px !important;
background-repeat: no-repeat !important;
}
.gnav20 .gnav20-utility .gnav20-notification .gnav20-notification-icon:hover:after {
content: " ";
position: absolute;
top: 0;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMXB4IiBoZWlnaHQ9IjIxcHgiIHZpZXdCb3g9IjAgMCAyMS42IDIxLjYiPjxwYXRoIGZpbGw9IiMwMDAiIGQ9Ik0xNi40MjUsMTMuMDQxVjcuNDI1YTUuNjI1LDUuNjI1LDAsMCwwLTExLjI1LDB2NS42MTZMMS44LDE1LjN2MS4xMjVoMThWMTUuM1ptMCwyLjI1OUgzLjgyM2wxLjk3OC0xLjMyNC40OTktLjMzNFY3LjQyNWE0LjUsNC41LDAsMCwxLDksMHY2LjIxN2wuNDk5LjMzNEwxNy43NzcsMTUuM1pNOC41NSwxNy41NWg0LjVhMi4yNSwyLjI1LDAsMCwxLTQuNSwwWiIvPjwvc3ZnPg==) !important;
background-position: 12px 12px !important;
background-size: 20px 20px !important;
background-repeat: no-repeat !important;
width: 44px;
height: 44px;
}
.gnav20 .gnav20-utility .gnav20-notification .gnav20-notification-icon .gnav20-notification-bubble {
display: inline-block;
height: 11px;
width: 11px;
background: #e00 !important;
border-radius: 50%;
position: absolute;
top: 10px;
right: 10px;
color: #e00 !important;
font-size: 0 !important;
text-align: center;
border: #fff solid 1.5px;
z-index: 1;
}
.gnav20 .gnav20-desktop .gnav20-notification-overlay {
min-height: 100px;
width: 278px;
position: absolute;
z-index: 4500;
top: 120px;
right: 0;
background-color: #fff;
overflow-x: hidden;
transition: width 2s;
border: 1px solid #d8dada;
}
.gnav20 .gnav20-notification-overlay .gnav20-closex {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxzdHlsZT4uc3Qxe2ZpbGw6bm9uZTtzdHJva2U6IzAwMDAwMDtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9PC9zdHlsZT48cmVjdCBmaWxsPSJub25lIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48bGluZSBjbGFzcz0ic3QxIiB4MT0iMiIgeTE9IjIiIHgyPSIyMiIgeTI9IjIyIi8+PGxpbmUgY2xhc3M9InN0MSIgeDE9IjIiIHkxPSIyMiIgeDI9IjIyIiB5Mj0iMiIvPjwvc3ZnPg==) !important;
top: 13px;
right: 5px;
position: absolute;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box {
padding: 0 12px;
margin: 0;
}
.gnav20 .gnav20-utility .gnav20-account-box .gnav20-sign-in:not(.gnav20-account-icon-only) {
margin: 14px 0 0;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-sign-in span {
font-size: 16px !important;
font-weight: bold !important;
line-height: 16px !important;
white-space: nowrap;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-account-link {
font-size: 16px !important;
font-weight: bold;
margin: 14px 0 4px 0;
display: block;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-account-link:focus {
outline-offset: 4px !important;
}
.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-account-link:hover {
border-bottom: 2px solid #000;
}
.gnav20 .gnav20-desktop .gnav20-sign-in:not(.gnav20-account-icon-only) span span:hover {
border-bottom: 2px solid #000;
padding: 0 0 2px 0;
}
.gnav20 .gnav20-desktop .gnav20-dropdown-menu, .gnav20 .gnav20-desktop .gnav20-unified-cart {
border: 1px solid #d8dada;
position: absolute;
z-index: 4512;
top: 66px;
padding-bottom: 12px;
right: 0;
min-width: 278px;
background: #fff;
}
.gnav20 .gnav20-account-box .gnav20-close-account-utility, .gnav20 .gnav20-unified-cart .gnav20-closex {
position: absolute;
text-indent: -333px;
right: 5px !important;
top: 13px !important;
overflow: hidden;
display: block;
}
.gnav20 .gnav20-signin-content-title {
font-size: 20px;
font-weight: bold;
margin: 0;
padding: 24px 40px 12px 16px;
background: #fff;
}
.gnav20 .gnav20-signin-content-title:empty {
padding: 18px 0 0;
}
.gnav20 .gnav20-search-para .gnav20-mobile-search-icon,
.gnav20 .gnav20-mobile-menu .gnav20-closex,
.gnav20 .gnav20-nav-utility button,
.gnav20 .gnav20-utility .gnav20-account-icon-only,
.gnav20 .gnav20-utility .gnav20-account-icon,
.gnav20 .gnav20-utility #gnav20-nav-toggle,
.gnav20 .gnav20-utility .gnav20-wishlist a,
.gnav20 .gnav20-utility .gnav20-utility-wrapper button:not(.gnav20-back-to-menu):not(.gnav20-sign-in) {
min-width: 44px;
height: 44px;
background-position: 12px 12px !important;
background-size: 20px 20px !important;
background-repeat: no-repeat !important;
}
.gnav20 .gnav20-utility .gnav20-account-icon-only,
.gnav20 .gnav20-utility .gnav20-account-icon {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9Im5vbmUiIGNsYXNzPSJzdDAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiMwMDAiIGQ9Ik0xMCwxYy01LDAtOSw0LTksOXM0LDksOSw5czktNCw5LTlTMTUsMSwxMCwxeiBNMTAsMi4yYzQuMywwLDcuOSwzLjUsNy45LDcuOWMwLDItMC43LDMuNy0xLjksNS4xYy0xLjUtMS44LTMuNi0yLjktNi0yLjkgYy0yLjMsMC00LjUsMS4xLTYsMi45Yy0xLjEtMS40LTEuOS0zLjItMS45LTUuMUMyLjEsNS43LDUuNywyLjIsMTAsMi4yeiBNNC44LDE1LjljMS4yLTEuNiwzLjEtMi41LDUuMi0yLjVzMy45LDAuOSw1LjIsMi41IGMtMS40LDEuMi0zLjIsMi01LjIsMlM2LjIsMTcuMSw0LjgsMTUuOXoiLz48cGF0aCBmaWxsPSIjMDAwIiBkPSJNMTAsMTEuMWMxLjksMCwzLjQtMS41LDMuNC0zLjRTMTEuOSw0LjMsMTAsNC4zUzYuNiw1LjgsNi42LDcuOFM4LjIsMTEuMSwxMCwxMS4xeiBNMTAsNS42YzEuMiwwLDIuMiwxLDIuMiwyLjIgcy0xLDIuMi0yLjIsMi4ycy0yLjItMS0yLjItMi4yUzguOCw1LjYsMTAsNS42eiIvPjwvc3ZnPg==) !important;
text-indent: -333px;
overflow: hidden;
}
.gnav20 .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon,
.gnav20 .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IGZpbGw9Im5vbmUiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xOC45LDE4LjFsLTYtNmMxLTEuMiwxLjYtMi44LDEuNi00LjNjMC0zLjctMy02LjgtNi44LTYuN1MxLDQuMSwxLDcuOHMzLDYuOCw2LjgsNi43YzEuNiwwLDMuMS0wLjYsNC40LTEuNiBsNiw2TDE4LjksMTguMXogTTcuOCwxMy40Yy0zLjEsMC01LjYtMi41LTUuNi01LjZzMi41LTUuNiw1LjYtNS42YzMuMSwwLDUuNiwyLjUsNS42LDUuNmMwLDAsMCwwLDAsMEMxMy40LDEwLjksMTAuOSwxMy40LDcuOCwxMy40IEM3LjgsMTMuNCw3LjgsMTMuNCw3LjgsMTMuNHoiLz48L3N2Zz4=) !important;
}
.gnav20 .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon:hover,
.gnav20 .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon:hover {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IGZpbGw9Im5vbmUiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xMy41LDEyLjFjMC45LTEuMiwxLjUtMi44LDEuNC00LjNjMC00LTMuMi03LjItNy4yLTcuMmMwLDAsMCwwLDAsMGMtNCwwLTcuMiwzLjMtNy4yLDcuMiBjMCw0LDMuMiw3LjIsNy4yLDcuMmMwLDAsMCwwLDAsMGMxLjYsMCwzLjEtMC41LDQuMy0xLjVsNiw2bDEuNC0xLjVMMTMuNSwxMi4xeiBNMTMsNy44YzAsMi45LTIuMyw1LjItNS4yLDUuMmgwIGMtMi45LDAtNS4yLTIuMy01LjItNS4yYzAtMi45LDIuMy01LjIsNS4yLTUuMkMxMC43LDIuNiwxMyw0LjksMTMsNy44eiIvPjwvc3ZnPg==) !important;
text-shadow: 1px 0 0 #000;
}
.gnav20 .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon,
.gnav20 .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon {
font-size: 15px !important;
border-radius: 30px !important;
border: 1px solid #a7a7a7;
background-color: #fff !important;
padding: 0 43px 0 18px !important;
background-position: top 8px right 14px !important;
height: 35px !important;
margin: 4px 12px !important;
width: fit-content !important;
text-indent: 0 !important;
}
.gnav20 .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon:after,
.gnav20 .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon:after {
content: attr(data-placeholder-text) !important;
}
.gnav20 .gnav20-utility button.gnav20-cart {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMS42IDIxLjYiPjxwYXRoIGQ9Ik0xOS42Mzg4Nyw0LjU1MDdINS43NDc3NUw1LjQwMTA3LDIuODU4MzEsMi4zMjQ5LDEuNzk5NzIsMS45NjExMywyLjg1ODA3bDIuNDcyMTcuODUwNTlMNi45MTcxOSwxNS44NDI4MWEyLjEwNTc0LDIuMTA1NzQsMCwxLDAsMy4wMjU4OCwyLjQzODM2aDQuNDE0MDZhMi4xMTIsMi4xMTIsMCwxLDAsMC0xLjE4Njg5SDkuOTQzMDdhMi4xMDQsMi4xMDQsMCwwLDAtMS45MzctMS41MTE4NWwtLjM4Mzc4LTEuODc1MjQsMTEuMDg2OTEtMS4zMjkzNVptLTMuMjY0NjUsMTIuMjEzYS45MjQuOTI0LDAsMSwxLS45MjQzOC45MjRBLjkyNC45MjQsMCwwLDEsMTYuMzc0MjIsMTYuNzYzNzFabS04LjQ0ODYxLDBINy45MjZhLjkyNDE0LjkyNDE0LDAsMSwxLS4wMDAzNywwWm05Ljc3NTc2LTUuMzkyTDcuMzk3MTEsMTIuNjA3MjIsNS45NzY3Niw1LjY2OTU5aDEyLjQwMjRaIiBzdHJva2U9ImJsYWNrIiBzdHJva2Utd2lkdGg9Ii4xIiBmaWxsPSIjMDAwMDAwIi8+PC9zdmc+) !important;
position: relative;
}
.gnav20 .gnav20-utility button.gnav20-cart:hover {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMS42IDIxLjYiPjxwYXRoIGQ9Ik0xOS42Mzg4Nyw0LjU1MDdINS43NDc3NUw1LjQwMTA3LDIuODU4MzEsMi4zMjQ5LDEuNzk5NzIsMS45NjExMywyLjg1ODA3bDIuNDcyMTcuODUwNTlMNi45MTcxOSwxNS44NDI4MWEyLjEwNTc0LDIuMTA1NzQsMCwxLDAsMy4wMjU4OCwyLjQzODM2aDQuNDE0MDZhMi4xMTIsMi4xMTIsMCwxLDAsMC0xLjE4Njg5SDkuOTQzMDdhMi4xMDQsMi4xMDQsMCwwLDAtMS45MzctMS41MTE4NWwtLjM4Mzc4LTEuODc1MjQsMTEuMDg2OTEtMS4zMjkzNVptLTMuMjY0NjUsMTIuMjEzYS45MjQuOTI0LDAsMSwxLS45MjQzOC45MjRBLjkyNC45MjQsMCwwLDEsMTYuMzc0MjIsMTYuNzYzNzFabS04LjQ0ODYxLDBINy45MjZhLjkyNDE0LjkyNDE0LDAsMSwxLS4wMDAzNywwWm05Ljc3NTc2LTUuMzkyTDcuMzk3MTEsMTIuNjA3MjIsNS45NzY3Niw1LjY2OTU5aDEyLjQwMjRaIiBzdHJva2U9ImJsYWNrIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9IiMwMDAwMDAiLz48L3N2Zz4=) !important;
}
.gnav20 .gnav20-cart .gnav20-cart-bubble, .gnav20 .gnav20-unifiedcart .gnav20-unifiedcart-bubble {
padding: 0 3px;
height: 10.5px;
min-width: 10.5px;
width: auto;
background: #e00 !important;
border-radius: 8px!important;
position: absolute;
top: 11px;
left: 23px;
right: auto;
display: none;
font-size: 0 !important;
line-height: 13px;
text-align: center;
border: #fff solid 1.5px;
}
.gnav20 .gnav20-cart .gnav20-cart-bubble{
top: -18px;
z-index: 1;
}
.gnav20 .gnav20-cart .gnav20-bubble-position{
position: relative;
}
.gnav20 .gnav20-cart-content-title {
font-size: 20px;
font-weight: bold;
line-height: 20px;
margin: 0;
padding: 24px 40px 12px 20px;
}
.gnav20 .gnav20-cart-toast {
padding: 0 8px;
}
.gnav20 .gnav20-cart-toast-item {
padding: 8px 12px;
margin-bottom: 8px;
display: flex !important;
gap: 10px;
background-color: rgb(246, 246, 246);
align-items: center;
}
.gnav20 .gnav20-cart-toast-item h2 {
font-size: 16px !important;
text-wrap: auto;
}
.gnav20 .gnav20-desktop .gnav20-utility li {
padding: 12px 0;
letter-spacing: .5px;
}
.gnav20 .gnav20-desktop li.gnav20-dropdown-list {
padding: 0 16px;
}
.gnav20 .gnav20-not-featured .gnav20-desktop .gnav20-dropdown li.gnav20-dropdown-list a {
padding: 9px 0;
display: block;
}
.gnav20 .gnav20-desktop .gnav20-dropdown li.gnav20-dropdown-list a {
display: block;
padding: 12px 0;
width: 90%;
}
.gnav20 .gnav20-desktop .gnav20-content-lists {
padding: 0 20px;
}
.gnav20 .gnav20-desktop .gnav20-utility li a:hover,
.gnav20 .gnav20-desktop .gnav20-utility li a:focus {
color: #e00 !important;
text-shadow: 1px 0 0 #e00;
}
.gnav20 .gnav20-wishlist .gnav20-utility-wrapper {
position: relative;
}
.gnav20 .gnav20-utility .gnav20-wishlist a {
display: inline-block;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IGZpbGw9Im5vbmUiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xMy45LDMuMmMyLjIsMCw0LDEuOCw0LDRjLTAuMSwxLjItMC42LDIuMi0xLjUsM0wxMCwxNi4zTDMuMywxMEMyLjUsOS4zLDIuMSw4LjMsMi4xLDcuMmMwLTIuMiwxLjgtNCw0LTQJQzcuNywzLjQsOSw0LjMsOS45LDUuNkwxMCw1LjdsMC4xLTAuMUMxMS4xLDQuMywxMi43LDMuMiwxMy45LDMuMiBNMTMuOSwyLjFDMTIuNCwyLjEsMTEsMi44LDEwLDRDOSwyLjgsNy42LDIuMSw2LjEsMi4xIEMzLjMsMi4xLDEsNC40LDEsNy4yYzAsMS40LDAuNSwyLjcsMS41LDMuNmw3LjUsNy4xbDcuMi02LjljMS4xLTEsMS43LTIuMywxLjgtMy44QzE5LDQuNCwxNi43LDIuMSwxMy45LDIuMXoiLz48L3N2Zz4=) !important;
}
.gnav20 .gnav20-utility .gnav20-wishlist a:hover {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IGZpbGw9Im5vbmUiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xMy45LDEuNmMtMS40LDAtMi44LDAuNi0zLjksMS43QzguOSwyLjMsNy41LDEuNiw2LjEsMS42QzMsMS42LDAuNSw0LjEsMC41LDcuMmMwLDEuNiwwLjYsMywxLjYsMy45bDcuOCw3LjQgbDcuNS03LjJjMS4yLTEuMSwxLjgtMi41LDEuOS00LjFDMTkuNSw0LjEsMTcsMS42LDEzLjksMS42eiBNMTcuNSw3LjJjLTAuMSwxLjEtMC41LDItMS40LDIuN0wxMCwxNS43bC02LjQtNmMtMC43LTAuNi0xLTEuNS0xLTIuNSBjMC0yLDEuNi0zLjUsMy41LTMuNmMxLjQsMC4yLDIuNiwwLjksMy41LDIuM0wxMCw2LjNsMC41LTAuNWMxLTEuMywyLjUtMi4yLDMuNC0yLjJDMTUuOSwzLjcsMTcuNSw1LjIsMTcuNSw3LjJ6Ii8+PC9zdmc+) !important;
}
.gnav20 .gnav20-wishlist .gnav20-wish-list-bubble {
display: inline-block;
height: 10.5px;
width: 10.5px;
background: #e00 !important;
border-radius: 50%;
position: absolute;
top: 11px;
right: 10px;
color: #000 !important;
font-size: 0 !important;
text-align: center;
border: #fff solid 1.5px;
}
.gnav20 .gnav20-promo-ribbon-wrapper {
width: 100%;
overflow: hidden;
position: relative;
background-color: #F5FF1E !important;
border-top: solid 1px #d8dada;
text-align: center;
}
.gnav20 .gnav20-promo {
transform-style: preserve-3d;
max-width: 1272px;
margin: auto;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-promotext {
display: none;
position: relative;
overflow: hidden;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-promotext.opacityOne {
display: grid;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow {
position: absolute;
top: 50%;
margin-top: -15px;
height: 30px;
width: 30px;
z-index: 4500;
background: no-repeat center center / 20px 20px !important;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-prev {
left: 20px;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMS42IDIxLjYiPgo8cG9seWdvbiBwb2ludHM9IjE0Ljg5IDE5LjggNS44OSAxMC43OTkgMTQuODkgMS44IDE1LjcxIDIuNjE5IDcuNTMgMTAuNzk5IDE1LjcxIDE4Ljk4MSAxNC44OSAxOS44Ij48L3BvbHlnb24+Cjwvc3ZnPg==) !important;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-next {
right: 20px;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMS42IDIxLjYiPgo8cG9seWdvbiBwb2ludHM9IjYuNzEgMTkuOCA1Ljg5IDE4Ljk4MSAxNC4wNyAxMC43OTkgNS44OSAyLjYxOSA2LjcxIDEuOCAxNS43MSAxMC43OTkgNi43MSAxOS44Ij48L3BvbHlnb24+Cjwvc3ZnPg==) !important;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-prev[style*=block] + .gnav20-promotext {
margin: 0 58px;
}
.gnav20 .gnav20-promo-ribbon {
justify-content: center;
font-family: 'BrandFont-Text',sans-serif;
padding: 14px 0;
max-width: 1272px;
margin: 0 auto;
font-weight: bold;
font-size: 12px;
text-align: left;
display: flex;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo-ribbon {
position: relative;
width: 100%;
visibility: hidden;
margin: auto;
float: left;
grid-row-start: 1;
grid-column-start: 1;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo-ribbon.gnav20-active-promo {
visibility: visible;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo-ribbon.gnav20-active-promo-right {
visibility: visible;
animation: gnav20-right 1s;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo-ribbon.gnav20-active-promo-left {
visibility: visible;
animation: gnav20-left 1s;
}
.gnav20 .gnav20-promo-ribbon .gnav20-promo-text {
text-align: center;
position: relative;
}
.gnav20 .gnav20-promo-ribbon .gnav20-promo-text span {
line-height: 16px;
}
.gnav20 .gnav20-promo-ribbon a, .gnav20 .gnav20-promo-ribbon a:visited, .gnav20 .gnav20-promo-ribbon a:hover, .gnav20 .gnav20-promo-ribbon a:focus {
background-color: #F5FF1E !important;
font-size: 12px !important;
white-space: nowrap;
border-bottom: 1px solid #000;
}
.gnav20 .gnav20-promo-ribbon a.gnav20-promo-link {
border-bottom: none;
text-wrap: auto;
}
.gnav20 .gnav20-promo-ribbon a.gnav20-promo-slide-link {
position: absolute;
top: 0;
bottom: 0;
right: 0;
left: 0;
z-index: 1;
background: transparent !important;
border-bottom: none !important;
border: none;
}
.gnav20 .gnav20-promo-ribbon .gnav20-promo-icon {
display: inline-block;
position: relative;
z-index: 2;
}
.gnav20 .gnav20-promo-ribbon u {
border-bottom: 1px solid #000;
text-wrap: nowrap;
}
.gnav20 .gnav20-promo-ribbon b {
font-weight: bolder;
}
.gnav20 .gnav20-promo-ribbon .gnav20-promo-timer {
font-weight: bold;
white-space: nowrap;
margin-left: 10px;
display: inline-block;
}
.gnav20 .gnav20-modal{display:none;position:fixed;z-index:11000;padding-top:10vh;left:0;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.8)}
.gnav20 .gnav20-modal-content{background-color:#fff;margin:auto;padding:48px;border-radius:8px !important;max-width:560px;width:90vw;position:relative;max-height:80vh;overflow:auto}
.gnav20 .gnav20-modal-content .gnav20-modal-cta{gap:14px;margin-top:32px;display:flex}
.gnav20 .gnav20-modal-content .gnav20-modal-cta span{flex-basis:50%}
.gnav20 .gnav20-modal-content .gnav20-modal-cta span a{padding:12px 24px;border-radius:24px;text-align:center;display:block;font-style:normal;font-weight:700;font-size:16px;line-height:20px;letter-spacing:.5px;margin-bottom:14px}
.gnav20 .gnav20-modal-content .gnav20-modal-cta span a:empty{display:none}
.gnav20 .gnav20-modal-content .gnav20-modal-cta .gnav20-modal-primary-cta a{background:#000;color:#fff !important}
.gnav20 .gnav20-modal-content .gnav20-modal-cta .gnav20-modal-secondary-cta a{background:#fff;border:1px solid #000;color:#000 !important}
.gnav20 .gnav20-modal-content *{color:#000 !important}
.gnav20 .gnav20-modal .gnav20-close{color:#aaa;float:right;font-size:28px !important;font-weight:bold}
.gnav20 .gnav20-modal-sub-heading{font-style:normal;font-size:16px;font-weight:400;line-height:20px;letter-spacing:.5px}
.gnav20 .gnav20-modal-sub-heading strong{font-weight:700}
.gnav20 .gnav20-modal-heading{font-weight:700;font-size:32px;line-height:36px;margin:0 0 32px}
.gnav20 .gnav20-promo-close-icon::before,.gnav20 .gnav20-promo-close-icon::after{content:"";display:block;position:absolute;width:100%;height:1px;background:#000;top:50%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}
.gnav20 .gnav20-promo-close-icon::after{-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}
.gnav20 .gnav20-modal .close:hover,.gnav20 .gnav20-modal .close:focus{outline-color:#000;text-decoration:none;cursor:pointer}
.gnav20 .gnav20-modal .gnav20-promo-close-icon{width:24px;height:24px;display:block;position:absolute;cursor:pointer;right:12px;top:12px}
.gnav20 .gnav20-modal-content button:focus,.gnav20 .gnav20-modal-content a:focus{outline-color:#000 !important}
.gnav20 .gnav20-new-search-style .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-navigation-list {
margin: 0 auto 0 145px;
justify-content: left;
}
.gnav20 .gnav20-new-search-style .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon,
.gnav20 .gnav20-new-search-style .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon {
background-color: #fff !important;
background-position: top 14px right 14px !important;
height: 48px !important;
margin: 0 10px !important;
width: fit-content !important;
}
.gnav20 #gnav20-header-end {
height: 0px;
width: 0px;
position: absolute;
overflow: hidden;
}
.gnav20 .gnav20-footer-container {
width: 100%;
background-color: #fff;
border-top: 1px solid #d8dada;
}
.gnav20 .gnav20-footer-container .gnav20-main-container {
max-width: 1272px;
height: auto;
width: 100%;
margin: 0 auto;
padding-top: 24px;
}
.gnav20 .gnav20-footer-wrapper {
display: flex;
width: 100%;
}
.gnav20 .gnav20-footer-wrapper.gnav20-four .gnav20-col-wrapper {
width: 25%;
}
.gnav20 .gnav20-footer-wrapper.gnav20-three .gnav20-col-wrapper {
width: 33%
}
.gnav20 .gnav20-footer-wrapper.gnav20-two .gnav20-col-wrapper {
width: 50%
}
.gnav20 .gnav20-footer-container .gnav20-col-wrapper {
display: block;
border-right: 1px solid #d8dada
}
.gnav20 .gnav20-col-wrapper:last-child {
border-right: 0
}
.gnav20 .gnav20-hero-wrapper {
margin: 0 10px 64px;
}
.gnav20 .gnav20-hero-footer-heading {
font-weight: bold;
font-size: 16px;
letter-spacing: .5px;
line-height: 20px;
text-align: left;
padding: 8px 0 12px;
border-top: 1px solid #d8dada
}
.gnav20 .gnav20-border-content {
width: 100%
}
.gnav20 .gnav20-footer-list {
list-style: none;
padding: 0;
margin: 0
}
.gnav20 .gnav20-footer-list>li {
list-style-type: none;
background: 0
}
.gnav20 .gnav20-footer-list>li>a {
text-decoration: none;
font-size: 14px !important;
letter-spacing: .5px;
line-height: 20px;
padding: 12px 0;
display: block
}
.gnav20 .gnav20-quick-task.gnav20-footer {
border: solid 1px #d8dada;
padding: 8px 12px;
margin-top: 12px;
position: relative;
}
.gnav20 .gnav20-language-label.gnav20-footer {
margin-top: 12px;
text-decoration: none;
}
.gnav20 .gnav20-language-label.gnav20-footer {
margin-top: 12px;
text-decoration: none;
}
.gnav20 .gnav20-dropdown-quick-task-menu {
position: absolute;
width: calc(100% + 2px);
left: -1px;
top: 33px;
z-index: 21;
}
.gnav20 .gnav20-dropdown {
background: #fff;
padding: 0;
margin: 0;
}
.gnav20 .gnav20-desktop .gnav20-dropdown-menu .gnav20-dropdown {
padding-bottom: 12px;
}
.gnav20 li.gnav20-footer-list {
border: 1px solid #d8dada;
border-top: 0;
}
.gnav20 li.gnav20-footer-list a {
display: block;
padding: 10px;
text-decoration: none;
border-left: solid 2px transparent;
}
.gnav20 .gnav20-arrow {
content: " ";
display: inline-block;
float: right;
margin: 4px 4px 0 0;
width: .5em;
height: .5em;
border-top: solid 2px #000;
border-right: solid 2px #000;
transform: rotateZ(135deg);
transform-origin: center center;
}
.gnav20 .gnav20-footer-container .gnav20-social-icon li {
display: inline-block
}
.gnav20 .gnav20-footer-container .gnav20-social-icon a {
display: block;
color: #000 !important;
font-size: 19px;
margin: 12px 18px 0 0;
width: 20px;
height: 20px;
cursor: pointer
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper {
padding: 0 !important
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper a {
display: block !important;
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper .gnav20-logoBlackBg {
background-image: url('data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTAwIDExMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+PC9kZWZzPgo8ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjgyNTU3OCwgMCwgMCwgMC44MjU1NzgsIC03OS40MjY1NDgsIC03OS40NTE3NDgpIiBzdHlsZT0iIj4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTYwNi43OCwyMjkuMzA2aDI5LjY2MXYtNTQuMTg3YzAtMTIuMzYsNy4yMjUtMjEuMTA3LDE3Ljg3Mi0yMS4xMDdjMTAuMjY3LDAsMTUuNTkxLDcuMjI3LDE1LjU5MSwxNy40OTV2NTcuOCBoMjkuNjYxdi02My41MDNjMC0yMS40ODgtMTIuOTI4LTM2LjY5OS0zMy44NDQtMzYuNjk5Yy0xMy4zMDgsMC0yMi42MjYsNS43MDUtMjkuNjYxLDE2LjE2MmgtMC41NzF2LTEzLjMwOWgtMjguNzFWMjI5LjMwNnogTTU0OC41OTgsMTI5LjI5NWMtMzAuOTkzLDAtNTEuNzE2LDIyLjI0Ni01MS43MTYsNTEuNTI3YzAsMjkuMDkyLDIwLjcyNCw1MS41MjgsNTEuNzE2LDUxLjUyOHM1MS43MTYtMjIuNDM2LDUxLjcxNi01MS41MjggQzYwMC4zMTQsMTUxLjU0LDU3OS41OSwxMjkuMjk1LDU0OC41OTgsMTI5LjI5NXogTTU0OC40MDgsMjEwLjQ4M2MtMTQuMDcyLDAtMjEuNDg1LTExLjc4Ny0yMS40ODUtMjkuNjYxIGMwLTE4LjA2Myw3LjQxMy0yOS42NjIsMjEuNDg1LTI5LjY2MmMxNC4wNjksMCwyMS44NjUsMTEuNTk4LDIxLjg2NSwyOS42NjJDNTcwLjI3MywxOTguNjk2LDU2Mi40NzcsMjEwLjQ4Myw1NDguNDA4LDIxMC40ODN6IE00MTIuNDYsMjI5LjMwNmg4My4yOHYtMjMuMzg1aC00Ny4xNTN2LTAuNTczbDQ1LjA2Mi01MC41NzZ2LTIyLjgxNEg0MTIuNDZ2MjMuMzg1aDQ1LjYzM3YwLjU3MUw0MTIuNDYsMjA2Ljg3VjIyOS4zMDZ6IE0zNzQuNDI5LDIyOS4zMDZoMjkuODUxdi05Ny4zNDhoLTI5Ljg1MVYyMjkuMzA2eiBNMzA1LjIxOSwyMjkuMzA2aDI5LjY2MXYtNDQuNjhjMC0yMC4zNDYsMTIuMTY5LTI5LjI4MywzMC44MDItMjYuODFoMC41NzEgdi0yNS42NjhjLTEuNTIyLTAuNTcxLTMuMjMyLTAuNzYxLTYuMDg0LTAuNzYxYy0xMS41OTgsMC0xOS4zOTQsNS4zMjMtMjYuMDUsMTYuNzMxaC0wLjU3MXYtMTYuMTZoLTI4LjMyOVYyMjkuMzA2eiBNMjUwLjY1MSwyMTAuNjc1Yy0xMy4xMiwwLTIxLjEwNS04LjU1OS0yMi42MjctMjEuNjc1aDcwLjE2YzAuMTktMjAuOTE4LTUuMzI1LTM3LjY1LTE2LjkyMy00OC4xMDcgYy04LjE3NC03LjYwNS0xOS4wMTQtMTEuNzg5LTMyLjcwMy0xMS43ODljLTI5LjI3OSwwLTQ5LjYyNSwyMi4yNDYtNDkuNjI1LDUxLjMzN2MwLDI5LjI4LDE5LjM5NCw1MS43MTYsNTEuNTI3LDUxLjcxNiBjMTIuMTY5LDAsMjEuODY1LTMuMjMyLDI5Ljg1MS04Ljc0N2M4LjU1Ny01Ljg5MSwxNC42NC0xNC40NSwxNi4zNS0yMy4wMDVoLTI4LjUxOSBDMjY1LjI5MSwyMDYuODcsMjU5LjM5NiwyMTAuNjc1LDI1MC42NTEsMjEwLjY3NXogTTI0OS4xMjksMTUwLjM5OWMxMC40NTcsMCwxNy42ODIsNy43OTgsMTguODIzLDE5LjIwNWgtMzkuNzM4IEMyMzAuNDk3LDE1OC4wMDQsMjM2Ljc3LDE1MC4zOTksMjQ5LjEyOSwxNTAuMzk5eiBNMzc0LjQyOSw5Ny4zNWgyOS44NTF2MjYuNDNoLTI5Ljg1MVY5Ny4zNXoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxnPgo8cmFkaWFsR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBjeD0iLTExMDMuNjk5MyIgY3k9IjI0MjguMDkyMyIgcj0iMzU0LjM2ODciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4wNDk1IC0wLjEzNzEgMC4xNDgzIDAuMDUzNiAtMTQ1LjY0MjggLTY4Ljg2NzcpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CjxzdG9wIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0Y1RkYxRSI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuMjU3IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC4yNjU1IiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGQTFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC40MjMiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUE2MjAiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjU2MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTYzMjEiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjY3NzkiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTMzMjIiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjc2NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTE1MjMiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjgxNTUiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNTBBMjMiPjwvc3RvcD4KPC9yYWRpYWxHcmFkaWVudD4KPHBhdGggY2xhc3M9InN0MSIgZD0iTTE2NC4yMDEsMjI4LjA5NWwtMzYuOTA4LTk2LjEzN0g5Ny4zNWwzNi45MDgsOTYuMTM3YzAuMjgsMC43MzMsMC45ODMsMS4yMTMsMS43NjUsMS4yMTNoMjkuOTQzIEMxNjUuMTg0LDIyOS4zMDgsMTY0LjQ4MSwyMjguODI4LDE2NC4yMDEsMjI4LjA5NXoiIHN0eWxlPSJmaWxsOiB1cmwoI1NWR0lEXzFfKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTEzNy43ODcsMjI4LjA5NWwzNi45MDgtOTYuMTM3aDI5Ljk0M2wtMzYuOTA4LDk2LjEzN2MtMC4yOCwwLjczMy0wLjk4MywxLjIxMy0xLjc2NSwxLjIxM2gtMjkuOTQzIEMxMzYuODA1LDIyOS4zMDgsMTM3LjUwOCwyMjguODI4LDEzNy43ODcsMjI4LjA5NXoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjwvZz4KPC9nPgo8L3N2Zz4=');
width: 99px;
height: 25px;
background-size: 99px 25px
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper .gnav20-logoBlackBg img {
display: none
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper .gnav20-logoFooterVBG {
display: block;
background-image: url('data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTAwIDE4MyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+PC9kZWZzPgo8ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjgyMTUzNSwgMCwgMCwgMC44MjE1MzUsIC03OS4wMTgzMDcsIC03OS4wNDE1MzkpIiBzdHlsZT0iIj4KPGc+CjxnPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzI2Ljc3NSwzMTYuMjE4Yy0yLjc5NS0xLjUxMi00Ljk1LTMuODc5LTYuNDYyLTcuMTAyaC0wLjE5N3Y3LjY5NWgtMTQuODk3di03My4zOThoMTUuNDl2MTYuMDggYzAsMi4yMzctMC4wNSw0LjQyNC0wLjE0OSw2LjU2Yy0wLjA5OCwyLjEzOS0wLjIxNSwzLjk5Ni0wLjM0NSw1LjU3NGgwLjI5NWMxLjc3Ny0yLjY5NCwzLjkxNC00LjgzMyw2LjQxNC02LjQxMSBjMi40OTgtMS41NzgsNS41ODgtMi4zNjcsOS4yNzMtMi4zNjdjMy40MiwwLDYuNTEyLDAuNjkxLDkuMjczLDIuMDdjMi43NjMsMS4zODIsNS4xMywzLjMwNSw3LjEwNCw1Ljc3MyBjMS45NzIsMi40NjYsMy41MDIsNS4zOTQsNC41ODYsOC43NzljMS4wODYsMy4zODgsMS42MjksNy4wODgsMS42MjksMTEuMDk4YzAsNC4zNDEtMC41MjYsOC4yMzktMS41NzgsMTEuNjkxIGMtMS4wNTIsMy40NTQtMi41NjQsNi4zODItNC41MzgsOC43ODFjLTEuOTc0LDIuNDAyLTQuMzQxLDQuMjQzLTcuMTAyLDUuNTI0Yy0yLjc2MywxLjI4My01Ljg1NiwxLjkyNC05LjI3NSwxLjkyNCBDMzMyLjc0NSwzMTguNDg3LDMyOS41NywzMTcuNzMyLDMyNi43NzUsMzE2LjIxOHogTTM0MC4yOSwzMDEuODE0YzEuODA5LTIuODI3LDIuNzEzLTYuNjA4LDIuNzEzLTExLjM0NSBjMC00LjczNS0wLjkwNC04LjU2Ni0yLjcxMy0xMS40OTJjLTEuODA5LTIuOTI4LTQuNTU0LTQuMzkyLTguMjM3LTQuMzkyYy0yLjA0LDAtMy43OTksMC40MTItNS4yNzksMS4yMzMgYy0xLjQ4LDAuODIzLTIuNzEzLDEuOTQyLTMuNjk5LDMuMzU1Yy0wLjk4OCwxLjQxNC0xLjcxMSwzLjEwNi0yLjE3MSw1LjA4Yy0wLjQ2MiwxLjk3NC0wLjY5MSw0LjA3OC0wLjY5MSw2LjMxMyBjMCw0LjYwNCwxLjA1Miw4LjMzNywzLjE1NywxMS4xOTlzNS4wMzIsNC4yOTEsOC43ODEsNC4yOTFDMzM1Ljc2OCwzMDYuMDU3LDMzOC40ODEsMzA0LjY0NCwzNDAuMjksMzAxLjgxNHoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zOTguMDUyLDMwOS4zMTJoLTAuMjk3Yy0xLjkwOCwzLjA5Mi00LjExLDUuMzYxLTYuNjA4LDYuODA3Yy0yLjUsMS40NDYtNS41NTgsMi4xNzEtOS4xNzQsMi4xNzEgYy01Ljk4NiwwLTEwLjU1Ni0xLjc1OS0xMy43MTUtNS4yNzdjLTMuMTU2LTMuNTE4LTQuNzM1LTguMTczLTQuNzM1LTEzLjk2di0zNC43MjZoMTUuNDl2MzEuNzY2YzAsMi45NiwwLjcwNCw1LjIyOSwyLjEyLDYuODA3IGMxLjQxNCwxLjU3OCwzLjUwMiwyLjM2Nyw2LjI2NSwyLjM2N2MzLjE1NywwLDUuNjIyLTEuMDUyLDcuNC0zLjE1NmMxLjc3NS0yLjEwNCwyLjY2Mi00LjgwMSwyLjY2Mi04LjA5di0yOS42OTRoMTUuMjkxdjUyLjQ4MyBoLTE0LjY5OFYzMDkuMzEyeiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTQzMS45ODcsMzE3LjIwNmMtMy4wMjYtMC44NTUtNS42MDYtMi4wNzItNy43NDMtMy42NTFjLTIuMTM5LTEuNTc4LTMuODE1LTMuNDY4LTUuMDMyLTUuNjczIGMtMS4yMTctMi4yMDMtMS45MjQtNC42Mi0yLjEyLTcuMjUxaDE0LjZjMC40NiwyLjUsMS41OTQsNC40MDgsMy40MDQsNS43MjFjMS44MDcsMS4zMTgsNC4yMjUsMS45NzQsNy4yNTEsMS45NzQgYzIuNzYzLDAsNC44OTktMC41MjYsNi40MTQtMS41NzhjMS41MTItMS4wNTIsMi4yNjktMi41MzIsMi4yNjktNC40NGMwLTEuMTg1LTAuMzY0LTIuMTM2LTEuMDg2LTIuODYxIGMtMC43MjUtMC43MjMtMS43MTEtMS4zMTUtMi45Ni0xLjc3NXMtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xNzgtMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3Ny0xLjE4My0zLjIwNy0yLjcyNy00LjI5My00LjYzNiBjLTEuMDg0LTEuOTA1LTEuNjI2LTQuNDA1LTEuNjI2LTcuNDk4YzAtMi42OTQsMC41NzQtNS4wNjIsMS43MjUtNy4xMDJjMS4xNTEtMi4wMzgsMi43MTUtMy43NDksNC42ODctNS4xMyBjMS45NzQtMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjMwMSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDksMi44NjEsNS45ODQsNi41OTQsNi43MDksMTEuMTk2aC0xNC40MDNjLTAuOTg4LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc5LTUuNjIyYy0yLjM2NywwLTQuMjU5LDAuNDYtNS42NzMsMS4zODIgYy0xLjQxNiwwLjkyMi0yLjEyLDIuMjM1LTIuMTIsMy45NDZjMCwwLjk4NiwwLjMyNywxLjc5MywwLjk4NiwyLjQxOGMwLjY1NiwwLjYyNCwxLjU3OCwxLjEzNSwyLjc2MywxLjUyOCBjMS4xODMsMC4zOTYsMi41NjQsMC43MjUsNC4xNDIsMC45ODZjMS41NzgsMC4yNjUsMy4yNTUsMC41Niw1LjAzMiwwLjg5YzIuMzY3LDAuMzkzLDQuNzM1LDAuOTA0LDcuMTAyLDEuNTI4IGMyLjM2NywwLjYyNyw0LjUwNCwxLjU2Miw2LjQxNCwyLjgxMWMxLjkwNSwxLjI1MSwzLjQ2OCwyLjkxMiw0LjY4NCw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5LDUuMzI3LTEuNzc1LDcuNDk4Yy0xLjE4NSwyLjE2OC0yLjgyOSwzLjk4LTQuOTM0LDUuNDI2Yy0yLjEwNCwxLjQ0OC00LjYwNCwyLjUzMi03LjQ5NiwzLjI1NSBjLTIuODk2LDAuNzIzLTYuMDUyLDEuMDg0LTkuNDcyLDEuMDg0QzQzOC40MzMsMzE4LjQ4Nyw0MzUuMDEzLDMxOC4wNTksNDMxLjk4NywzMTcuMjA2eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ4Ni42NDMsMjQzLjQxMnYxMy41MTZoLTE1LjY4NnYtMTMuNTE2SDQ4Ni42NDN6IE00ODYuNTQ0LDI2NC4zMjh2NTIuNDgzaC0xNS40OXYtNTIuNDgzSDQ4Ni41NDR6IiBzdHlsZT0iZmlsbDogcmdiKDIzOCwgMCwgMzApOyI+PC9wYXRoPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTA5LjUyNywyNzIuMzE3YzEuNjQ1LTMuMTU3LDMuODMxLTUuNTI0LDYuNTYyLTcuMTAyYzIuNzI3LTEuNTc4LDUuOTMzLTIuMzY3LDkuNjE4LTIuMzY3IGM1Ljc4NywwLDEwLjI3NSwxLjc1OSwxMy40NjYsNS4yNzdjMy4xOTEsMy41Miw0Ljc4NSw4LjIzOSw0Ljc4NSwxNC4xNTZ2MzQuNTI5aC0xNS4zODl2LTMxLjU3YzAtMi44OTMtMC43NDEtNS4yMTEtMi4yMjEtNi45NTMgYy0xLjQ4LTEuNzQzLTMuNjY3LTIuNjE0LTYuNTYtMi42MTRjLTMuMDI2LDAtNS40NiwxLjA4NC03LjMwMSwzLjI1NXMtMi43NjEsNC45MzQtMi43NjEsOC4yODd2MjkuNTk2aC0xNS40OXYtNTIuNDgzaDE0Ljk5NiB2Ny45OUg1MDkuNTI3eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTU2NC45NywzMTYuMjY4Yy0zLjQyLTEuNDE0LTYuMzMxLTMuMzY5LTguNzMxLTUuODY5Yy0yLjQwMi0yLjUtNC4yNDEtNS40MjYtNS41MjQtOC43ODEgYy0xLjI4My0zLjM1My0xLjkyNC03LjAwNC0xLjkyNC0xMC45NDljMC0zLjk0OCwwLjY1Ni03LjYxMiwxLjk3Mi0xMS4wMDJjMS4zMTUtMy4zODUsMy4xNTktNi4zMjksNS41MjYtOC44MjkgYzIuMzY3LTIuNDk4LDUuMTk1LTQuNDUzLDguNDg0LTUuODY5YzMuMjg3LTEuNDE0LDYuOTM3LTIuMTIsMTAuOTUyLTIuMTJjMy43NDcsMCw3LjExOCwwLjU5LDEwLjExLDEuNzc1IGMyLjk5NCwxLjE4NSw1LjY0MSwyLjgyOSw3Ljk0Miw0LjkzNGMyLjk2LDIuODkzLDUuMTMsNi40NzgsNi41MTIsMTAuNzUzYzEuMzgyLDQuMjc1LDIuMDM4LDkuMDEyLDEuOTc0LDE0LjIwN2gtMzguMjc4IGMwLjUyNiwzLjk0NiwxLjg0MSw3LjAzOCwzLjk0Niw5LjI3M2MyLjEwNCwyLjIzNyw1LjAzMiwzLjM1Myw4Ljc4MSwzLjM1M2MyLjQzMSwwLDQuNDIxLTAuNDQ0LDUuOTY4LTEuMzMxIGMxLjU0Ni0wLjg4NywyLjc0NS0yLjE1MiwzLjYwMy0zLjc5N2gxNC45OTNjLTAuNjU2LDIuMzAxLTEuNjkzLDQuNDU2LTMuMTA2LDYuNDYyYy0xLjQxNiwyLjAwNi0zLjE1NiwzLjc0OS01LjIyOSw1LjIyOSBjLTIuMDcyLDEuNDgtNC40OSwyLjYzLTcuMjUxLDMuNDUyYy0yLjc2MywwLjgyMS01LjgyMSwxLjIzMy05LjE3NCwxLjIzM0M1NzIuMjM3LDMxOC4zODgsNTY4LjM4OSwzMTcuNjgyLDU2NC45NywzMTYuMjY4eiAgTTU2Ny42MzQsMjc2Ljk1NGMtMS44NDQsMi4xMDctMy4wMjYsNC45NjgtMy41NTIsOC41ODRoMjIuMzk1Yy0wLjI2My0zLjY4My0xLjM1LTYuNTYtMy4yNTctOC42MzIgYy0xLjkwOC0yLjA3Mi00LjQwNS0zLjEwOC03LjQ5Ni0zLjEwOEM1NzIuMTcyLDI3My43OTcsNTY5LjQ3MywyNzQuODQ5LDU2Ny42MzQsMjc2Ljk1NHoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02MTkuMDMzLDMxNy4yMDZjLTMuMDI2LTAuODU1LTUuNjA5LTIuMDcyLTcuNzQ1LTMuNjUxYy0yLjEzOS0xLjU3OC0zLjgxNS0zLjQ2OC01LjAzMi01LjY3MyBjLTEuMjE3LTIuMjAzLTEuOTI0LTQuNjItMi4xMi03LjI1MWgxNC42YzAuNDYsMi41LDEuNTk0LDQuNDA4LDMuNDA0LDUuNzIxYzEuODA5LDEuMzE4LDQuMjI3LDEuOTc0LDcuMjUzLDEuOTc0IGMyLjc2MSwwLDQuODk3LTAuNTI2LDYuNDExLTEuNTc4YzEuNTEyLTEuMDUyLDIuMjY5LTIuNTMyLDIuMjY5LTQuNDRjMC0xLjE4NS0wLjM2MS0yLjEzNi0xLjA4NC0yLjg2MSBjLTAuNzI1LTAuNzIzLTEuNzExLTEuMzE1LTIuOTYtMS43NzVjLTEuMjUxLTAuNDYtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xODEtMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3NS0xLjE4My0zLjIwNy0yLjcyNy00LjI5MS00LjYzNiBjLTEuMDg2LTEuOTA1LTEuNjI5LTQuNDA1LTEuNjI5LTcuNDk4YzAtMi42OTQsMC41NzYtNS4wNjIsMS43MjctNy4xMDJjMS4xNTEtMi4wMzgsMi43MTMtMy43NDksNC42ODctNS4xMyBjMS45NzItMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjI5OSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDcsMi44NjEsNS45ODQsNi41OTQsNi43MDYsMTEuMTk2aC0xNC40MDNjLTAuOTg2LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc3LTUuNjIyYy0yLjM3LDAtNC4yNjEsMC40Ni01LjY3NSwxLjM4MiBjLTEuNDE0LDAuOTIyLTIuMTIsMi4yMzUtMi4xMiwzLjk0NmMwLDAuOTg2LDAuMzI5LDEuNzkzLDAuOTg2LDIuNDE4YzAuNjU5LDAuNjI0LDEuNTgxLDEuMTM1LDIuNzYzLDEuNTI4IGMxLjE4NSwwLjM5NiwyLjU2NiwwLjcyNSw0LjE0NSwwLjk4NmMxLjU3OCwwLjI2NSwzLjI1NSwwLjU2LDUuMDMsMC44OWMyLjM2NywwLjM5Myw0LjczNywwLjkwNCw3LjEwNCwxLjUyOCBjMi4zNjcsMC42MjcsNC41MDQsMS41NjIsNi40MTEsMi44MTFjMS45MDgsMS4yNTEsMy40NywyLjkxMiw0LjY4Nyw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5Miw1LjMyNy0xLjc3NSw3LjQ5OGMtMS4xODUsMi4xNjgtMi44MjksMy45OC00LjkzNCw1LjQyNmMtMi4xMDcsMS40NDgtNC42MDQsMi41MzItNy40OTgsMy4yNTUgYy0yLjg5NiwwLjcyMy02LjA1MiwxLjA4NC05LjQ3MiwxLjA4NEM2MjUuNDc5LDMxOC40ODcsNjIyLjA1NywzMTguMDU5LDYxOS4wMzMsMzE3LjIwNnoiIHN0eWxlPSJmaWxsOiByZ2IoMjM4LCAwLCAzMCk7Ij48L3BhdGg+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02NzAuMTMyLDMxNy4yMDZjLTMuMDI2LTAuODU1LTUuNjA2LTIuMDcyLTcuNzQzLTMuNjUxYy0yLjEzOS0xLjU3OC0zLjgxNS0zLjQ2OC01LjAzMi01LjY3MyBjLTEuMjE3LTIuMjAzLTEuOTI0LTQuNjItMi4xMi03LjI1MWgxNC42YzAuNDYsMi41LDEuNTk0LDQuNDA4LDMuNDA0LDUuNzIxYzEuODA3LDEuMzE4LDQuMjI1LDEuOTc0LDcuMjUxLDEuOTc0IGMyLjc2MywwLDQuODk5LTAuNTI2LDYuNDE0LTEuNTc4YzEuNTEyLTEuMDUyLDIuMjY5LTIuNTMyLDIuMjY5LTQuNDRjMC0xLjE4NS0wLjM2NC0yLjEzNi0xLjA4Ni0yLjg2MSBjLTAuNzI1LTAuNzIzLTEuNzExLTEuMzE1LTIuOTYtMS43NzVjLTEuMjQ5LTAuNDYtMi42ODEtMC44MzktNC4yOTEtMS4xMzVjLTEuNjEzLTAuMjk3LTMuMzQtMC42MDgtNS4xNzktMC45MzggYy0yLjM2Ny0wLjQ2LTQuNjcxLTAuOTg2LTYuOTA1LTEuNTc4Yy0yLjIzNy0wLjU5Mi00LjI0My0xLjQ4LTYuMDE4LTIuNjY1Yy0xLjc3Ny0xLjE4My0zLjIwNy0yLjcyNy00LjI5My00LjYzNiBjLTEuMDg0LTEuOTA1LTEuNjI2LTQuNDA1LTEuNjI2LTcuNDk4YzAtMi42OTQsMC41NzQtNS4wNjIsMS43MjUtNy4xMDJjMS4xNTEtMi4wMzgsMi43MTUtMy43NDksNC42ODctNS4xMyBjMS45NzQtMS4zODIsNC4zMDctMi40MTgsNy4wMDQtMy4xMDZjMi42OTctMC42OTEsNS41OS0xLjAzNiw4LjY4My0xLjAzNmM3LjMwMSwwLDEyLjgyNSwxLjQzLDE2LjU3NCw0LjI5MSBjMy43NDksMi44NjEsNS45ODQsNi41OTQsNi43MDksMTEuMTk2aC0xNC40MDNjLTAuOTg4LTMuNzQ5LTMuOTQ2LTUuNjIyLTguODc5LTUuNjIyYy0yLjM2NywwLTQuMjU5LDAuNDYtNS42NzMsMS4zODIgYy0xLjQxNiwwLjkyMi0yLjEyLDIuMjM1LTIuMTIsMy45NDZjMCwwLjk4NiwwLjMyNywxLjc5MywwLjk4NiwyLjQxOGMwLjY1NiwwLjYyNCwxLjU3OCwxLjEzNSwyLjc2MywxLjUyOCBjMS4xODMsMC4zOTYsMi41NjQsMC43MjUsNC4xNDIsMC45ODZjMS41NzgsMC4yNjUsMy4yNTUsMC41Niw1LjAzMiwwLjg5YzIuMzY3LDAuMzkzLDQuNzM1LDAuOTA0LDcuMTAyLDEuNTI4IGMyLjM2NywwLjYyNyw0LjUwNCwxLjU2Miw2LjQxNCwyLjgxMWMxLjkwNSwxLjI1MSwzLjQ2OCwyLjkxMiw0LjY4NCw0Ljk4MmMxLjIxNywyLjA3MiwxLjgyNSw0Ljc1MywxLjgyNSw4LjA0MiBjMCwyLjgyNy0wLjU5LDUuMzI3LTEuNzc1LDcuNDk4Yy0xLjE4NSwyLjE2OC0yLjgyOSwzLjk4LTQuOTM0LDUuNDI2Yy0yLjEwNCwxLjQ0OC00LjYwNCwyLjUzMi03LjQ5NiwzLjI1NSBjLTIuODk2LDAuNzIzLTYuMDUyLDEuMDg0LTkuNDcyLDEuMDg0QzY3Ni41NzcsMzE4LjQ4Nyw2NzMuMTU4LDMxOC4wNTksNjcwLjEzMiwzMTcuMjA2eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPC9nPgo8L2c+CjxnPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNjA2Ljc4LDIyOS4zMDZoMjkuNjYxdi01NC4xODdjMC0xMi4zNiw3LjIyNS0yMS4xMDcsMTcuODcyLTIxLjEwN2MxMC4yNjcsMCwxNS41OTEsNy4yMjcsMTUuNTkxLDE3LjQ5NSAgICB2NTcuOGgyOS42NjF2LTYzLjUwM2MwLTIxLjQ4OC0xMi45MjgtMzYuNjk5LTMzLjg0NC0zNi42OTljLTEzLjMwOCwwLTIyLjYyNiw1LjcwNS0yOS42NjEsMTYuMTYyaC0wLjU3MXYtMTMuMzA5aC0yOC43MVYyMjkuMzA2eiBNNTQ4LjU5OCwxMjkuMjk1Yy0zMC45OTMsMC01MS43MTYsMjIuMjQ2LTUxLjcxNiw1MS41MjdjMCwyOS4wOTIsMjAuNzI0LDUxLjUyOCw1MS43MTYsNTEuNTI4czUxLjcxNi0yMi40MzYsNTEuNzE2LTUxLjUyOCAgICBDNjAwLjMxNCwxNTEuNTQsNTc5LjU5LDEyOS4yOTUsNTQ4LjU5OCwxMjkuMjk1eiBNNTQ4LjQwOCwyMTAuNDgzYy0xNC4wNzIsMC0yMS40ODUtMTEuNzg3LTIxLjQ4NS0yOS42NjEgICAgYzAtMTguMDYzLDcuNDEzLTI5LjY2MiwyMS40ODUtMjkuNjYyYzE0LjA2OSwwLDIxLjg2NSwxMS41OTgsMjEuODY1LDI5LjY2MkM1NzAuMjczLDE5OC42OTYsNTYyLjQ3NywyMTAuNDgzLDU0OC40MDgsMjEwLjQ4M3ogTTQxMi40NiwyMjkuMzA2aDgzLjI4di0yMy4zODVoLTQ3LjE1M3YtMC41NzNsNDUuMDYyLTUwLjU3NnYtMjIuODE0SDQxMi40NnYyMy4zODVoNDUuNjMzdjAuNTcxTDQxMi40NiwyMDYuODdWMjI5LjMwNnogTTM3NC40MjksMjI5LjMwNmgyOS44NTF2LTk3LjM0OGgtMjkuODUxVjIyOS4zMDZ6IE0zMDUuMjE5LDIyOS4zMDZoMjkuNjYxdi00NC42OGMwLTIwLjM0NiwxMi4xNjktMjkuMjgzLDMwLjgwMi0yNi44MWgwLjU3MSAgICB2LTI1LjY2OGMtMS41MjItMC41NzEtMy4yMzItMC43NjEtNi4wODQtMC43NjFjLTExLjU5OCwwLTE5LjM5NCw1LjMyMy0yNi4wNSwxNi43MzFoLTAuNTcxdi0xNi4xNmgtMjguMzI5VjIyOS4zMDZ6IE0yNTAuNjUxLDIxMC42NzVjLTEzLjEyLDAtMjEuMTA1LTguNTU5LTIyLjYyNy0yMS42NzVoNzAuMTZjMC4xOS0yMC45MTgtNS4zMjUtMzcuNjUtMTYuOTIzLTQ4LjEwNyAgICBjLTguMTc0LTcuNjA1LTE5LjAxNC0xMS43ODktMzIuNzAzLTExLjc4OWMtMjkuMjc5LDAtNDkuNjI1LDIyLjI0Ni00OS42MjUsNTEuMzM3YzAsMjkuMjgsMTkuMzk0LDUxLjcxNiw1MS41MjcsNTEuNzE2IGMxMi4xNjksMCwyMS44NjUtMy4yMzIsMjkuODUxLTguNzQ3YzguNTU3LTUuODkxLDE0LjY0LTE0LjQ1LDE2LjM1LTIzLjAwNWgtMjguNTE5ICAgIEMyNjUuMjkxLDIwNi44NywyNTkuMzk2LDIxMC42NzUsMjUwLjY1MSwyMTAuNjc1eiBNMjQ5LjEyOSwxNTAuMzk5YzEwLjQ1NywwLDE3LjY4Miw3Ljc5OCwxOC44MjMsMTkuMjA1aC0zOS43MzggICAgQzIzMC40OTcsMTU4LjAwNCwyMzYuNzcsMTUwLjM5OSwyNDkuMTI5LDE1MC4zOTl6IE0zNzQuNDI5LDk3LjM1aDI5Ljg1MXYyNi40M2gtMjkuODUxVjk3LjM1eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPGc+CjxyYWRpYWxHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGN4PSItMTEwMy42OTkzIiBjeT0iMjQyOC4wOTIzIiByPSIzNTQuMzY4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjA0OTUgLTAuMTM3MSAwLjE0ODMgMC4wNTM2IC0xNDUuNjQyOCAtNjguODY3NykiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KPHN0b3Agb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRjVGRjFFIj48L3N0b3A+CjxzdG9wIG9mZnNldD0iMC4yNTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUZGMUUiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjI2NTUiIHN0eWxlPSJzdG9wLWNvbG9yOiNGNUZBMUUiPjwvc3RvcD4KPHN0b3Agb2Zmc2V0PSIwLjQyMyIgc3R5bGU9InN0b3AtY29sb3I6I0Y1QTYyMCI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNTYyMSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1NjMyMSI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNjc3OSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MzMyMiI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuNzY1NyIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MTUyMyI+PC9zdG9wPgo8c3RvcCBvZmZzZXQ9IjAuODE1NSIgc3R5bGU9InN0b3AtY29sb3I6I0Y1MEEyMyI+PC9zdG9wPgo8L3JhZGlhbEdyYWRpZW50Pgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTY0LjIwMSwyMjguMDk1bC0zNi45MDgtOTYuMTM3SDk3LjM1bDM2LjkwOCw5Ni4xMzdjMC4yOCwwLjczMywwLjk4MywxLjIxMywxLjc2NSwxLjIxM2gyOS45NDMgQzE2NS4xODQsMjI5LjMwOCwxNjQuNDgxLDIyOC44MjgsMTY0LjIwMSwyMjguMDk1eiIgc3R5bGU9ImZpbGw6IHVybCgjU1ZHSURfMV8pOyI+PC9wYXRoPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTM3Ljc4NywyMjguMDk1bDM2LjkwOC05Ni4xMzdoMjkuOTQzbC0zNi45MDgsOTYuMTM3Yy0wLjI4LDAuNzMzLTAuOTgzLDEuMjEzLTEuNzY1LDEuMjEzaC0yOS45NDMgQzEzNi44MDUsMjI5LjMwOCwxMzcuNTA4LDIyOC44MjgsMTM3Ljc4NywyMjguMDk1eiIgc3R5bGU9ImZpbGw6IHJnYigyMzgsIDAsIDMwKTsiPjwvcGF0aD4KPC9nPgo8L2c+CjwvZz4KPC9zdmc+');
width: 99px;
height: 40px;
background-size: 99px 40px
}
.gnav20 .gnav20-footer-container .gnav20-logo-wrapper .gnav20-logoFooterVSBDR {
display: block;
background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA3OTUgMzEzLjEiPgogIDwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyOS4zLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiAyLjEuMCBCdWlsZCAxNTEpICAtLT4KICA8ZGVmcz4KICAgIDxzdHlsZT4KICAgICAgLnN0MCB7CiAgICAgICAgZmlsbDogI2Y1MGEyMzsKICAgICAgfQogICAgPC9zdHlsZT4KICA8L2RlZnM+CiAgPGc+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTUyLjYsMjE4LjljOS43LDAsMTcuMyw0LjksMjEuNiwxMS40aC4zdi0zNi4yaDEwLjl2OTUuNmgtMTAuOXYtOC40aC0uM2MtNS4yLDYuOC0xMS43LDEwLjUtMjEuNCwxMC41LTE4LjksMC0zMC43LTE0LjItMzAuNy0zNi4zczEzLjItMzYuMywzMC40LTM2LjN2LS4zaDBaTTE1My4xLDIyOC4yYy0xMy4xLDAtMTkuOCwxMS44LTE5LjgsMjcuM3M2LjcsMjcuMiwxOS45LDI3LjIsMjEuOS0xMS43LDIxLjktMjcuMi03LjYtMjcuMy0yMi0yNy4zaDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjEwLjgsMTk0LjF2MTMuNGgtMTAuOXYtMTMuNGgxMC45Wk0yMTAuOCwyMjAuNnY2OS4xaC0xMC45di02OS4xaDEwLjlaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjMzLjksMjkzLjZjMSw3LjYsOC4zLDEwLjYsMTksMTAuNnMxOS44LTUuNiwxOS44LTE3Ljh2LTkuN2gtLjNjLTUuMiw2LjYtMTAuNSwxMC44LTIwLjUsMTAuOC0xNy44LDAtMzAuMy0xNC4zLTMwLjMtMzQuMnMxMy41LTM0LjEsMjkuNS0zNC4xLDE2LjQsMy45LDIxLjEsMTAuNWguM3YtOC44aDEwLjl2NjUuNGMwLDE4LjItMTIuMSwyNi44LTMwLjQsMjYuOHMtMjguMS03LjItMjkuMi0xOS4xaDEwLjF2LS4zaDBaTTI1Mi40LDIyOC4xYy0xMywwLTE5LjUsMTAuMi0xOS41LDI1LjJzNi44LDI1LjEsMTkuNywyNS4xLDIxLTExLjEsMjEtMjUuNy02LjMtMjQuNS0yMS4xLTI0LjVoLS4xWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwOSwxOTQuMXYxMy40aC0xMC45di0xMy40aDEwLjlaTTMwOSwyMjAuNnY2OS4xaC0xMC45di02OS4xaDEwLjlaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzI5LjQsMjIwLjZ2LTIxLjhoMTAuOXYyMS44aDEzLjR2OC44aC0xMy40djQ1YzAsNC45LDIuNSw2LjQsNyw2LjRzNC42LS41LDUuOC0uOWguNHY5LjNjLTIuNS41LTUuNS45LTguNy45LTguOSwwLTE1LjItMy43LTE1LjItMTMuNHYtNDcuM2gtMTAuMXYtOC44aDEwLjEtLjIsMFoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00MDcuMiwyODAuMWMtNC4zLDUuNC0xMS4zLDExLTIzLDExcy0yMy41LTYtMjMuNS0xOS4zLDEyLjktMTkuNSwzMC4yLTIyLjNjOS43LTEuNCwxNi41LTIuNSwxNi41LTkuOHMtNS41LTEyLjItMTUuNS0xMi4yLTE2LjksNC43LTE3LjMsMTUuMmgtMTAuNWMuNC0xMy40LDkuMi0yMy41LDI3LjUtMjMuNXMyNS42LDUuNSwyNS42LDIxLjl2MzIuOWMwLDUuOCwxLjMsOC44LDcuMyw3LjNoLjR2Ny45Yy0xLjQuNS0zLDEtNS45LDEtNi44LDAtMTAuOS0zLjUtMTEuOS0xMC40aC0uMS4xdi4zaDBaTTQwNy41LDI1Mi41Yy0zLjcsMi4yLTkuOCw0LjEtMTUuNyw1LjEtMTAuOSwyLjEtMTkuNSwzLjgtMTkuNSwxNHM3LjMsMTEuMywxNC4zLDExLjNjMTQuNCwwLDIxLTEwLjYsMjEtMTguNnYtMTEuOGgwWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ0NC4zLDE5NC4xdjk1LjZoLTEwLjl2LTk1LjZoMTAuOVoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00OTEuOCwyMzJjNC4yLTYuOCwxMS40LTEyLjMsMjAuNi0xMi4zczIuOS4zLDQuNS44djEwLjVoLS40Yy0xLjYtLjUtMi42LS43LTQuOS0uNy0xMC44LDAtMjAuMSw4LTIwLjEsMjF2MzguNGgtMTAuOXYtNjkuMWgxMC45djExLjVoLjNaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTUyLjksMjE4LjhjMjAuNywwLDMxLjksMTYsMzEuOSwzOWgtNTMuNWMuNywxNCw4LjUsMjQuOCwyMi4zLDI0LjhzMTYuNS00LjcsMTkuMS0xNC4yaDEwLjZjLTMuMSwxNS0xNCwyMy4yLTI5LjYsMjMuMnMtMzMuNC0xNi40LTMzLjQtMzYuMywxMy4xLTM2LjMsMzIuOC0zNi4zaDB2LS4yaC0uMiwwWk01NzMuMSwyNDkuNmMtLjctMTMuOS03LjctMjIuMi0yMC4yLTIyLjJzLTE5LjksOS42LTIxLjQsMjIuMmg0MS42WiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTYzNy41LDI4MC4xYy00LjMsNS40LTExLjMsMTEtMjMsMTFzLTIzLjUtNi0yMy41LTE5LjMsMTIuOS0xOS41LDMwLjItMjIuM2M5LjctMS40LDE2LjUtMi41LDE2LjUtOS44cy01LjUtMTIuMi0xNS41LTEyLjItMTYuOSw0LjctMTcuMywxNS4yaC0xMC41Yy40LTEzLjQsOS4yLTIzLjUsMjcuNS0yMy41czI1LjYsNS41LDI1LjYsMjEuOXYzMi45YzAsNS44LDEuMyw4LjgsNy4zLDcuM2guNHY3LjljLTEuNC41LTMsMS01LjksMS02LjgsMC0xMC45LTMuNS0xMS45LTEwLjRoMHYuM2guMVpNNjM3LjksMjUyLjVjLTMuNywyLjItOS44LDQuMS0xNS43LDUuMS0xMC45LDIuMS0xOS41LDMuOC0xOS41LDE0czcuMywxMS4zLDE0LjMsMTEuM2MxNC40LDAsMjEtMTAuNiwyMS0xOC42di0xMS44aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNjg5LjksMjE4LjljOS43LDAsMTcuMyw0LjksMjEuNiwxMS40aC4zdi0zNi4yaDEwLjl2OTUuNmgtMTAuOXYtOC40aC0uM2MtNS4yLDYuOC0xMS43LDEwLjUtMjEuNCwxMC41LTE4LjksMC0zMC43LTE0LjItMzAuNy0zNi4zczEzLjItMzYuMywzMC40LTM2LjN2LS4zaC4xWk02OTAuNSwyMjguMmMtMTMuMSwwLTE5LjgsMTEuOC0xOS44LDI3LjNzNi43LDI3LjIsMTkuOSwyNy4yLDIxLjktMTEuNywyMS45LTI3LjItNy42LTI3LjMtMjItMjcuM2gwWiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTczNi41LDMwMS41aC41YzEuNC45LDMuOCwxLjQsNy4zLDEuNHM3LjYtMS42LDEwLjQtOC40bDIuNi02LjgtMjctNjcuMmgxMS44bDE2LjMsNDMsMyw4LjksMS42LDQuNmguM2MuNC0xLjQuOS0yLjksMS40LTQuNmwzLTguOSwxNS43LTQzaDExLjVsLTI5LjUsNzQuOGMtNS44LDE0LjItMTAuOSwxNy4zLTE5LjQsMTcuM3MtNi43LS4zLTkuNy0xLjR2LTkuNmguMloiLz4KICA8L2c+CiAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTM1OC4zLjFoMzkuMnYzNC42aC0zOS4yVi4xWiIvPgogIDxnPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTQxLjcsNDcuMmwxNy40LDU3LjNjMS43LDYuNywzLjcsMTIuOSw1LDE3LjZsMiw3LjloLjVsMi03LjksNS0xNy42LDE3LjYtNTcuM2g0MC40bC00My45LDEyN2gtNDMuNkwwLDQ3LjJoNDEuN1oiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xOTEsNDMuNWMxOC4xLDAsMzIuNSw2LDQzLjQsMTUuOSwxNS4xLDEzLjksMjIuMywzNS43LDIyLjMsNjEuOGgtOTEuM2MyLjcsMTcuMSwxMS43LDI3LjgsMjguNSwyNy44czE3LjQtNC43LDIxLjEtMTIuNmgzOS40Yy0yLjcsMTEuNy0xMC4yLDIyLjMtMjEuMywzMC0xMC43LDcuNy0yMy42LDExLjctMzkuNywxMS43LTQxLjksMC02Ny43LTI4LjgtNjcuNy02Ny41czI2LjUtNjcsNjUuMi02N2guMVpNMTY1LjcsOTcuMWg1MC4xYy0xLjctMTUuMS0xMC45LTI0LjgtMjQuMS0yNC44cy0yMy4zLDkuNy0yNiwyNC44aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzA1LDQ3LjJ2MTkuOGguN2M4LjktMTUuMSwxOS4xLTIxLjgsMzQuNy0yMS44czYuNC4yLDcuOSwxdjM0LjdoLTFjLTMtLjUtNS41LS43LTguMi0uNy0yMC4xLDAtMzIuNSwxMi40LTMyLjUsMzd2NTdoLTQwLjRWNDcuMmgzOC44WiIvPgogICAgPHBhdGggY2xhc3M9InN0MCIgZD0iTTM5Ny44LDQ3LjJ2MTI3aC00MC40VjQ3LjJoNDAuNFoiLz4KICAgIDxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00NTkuOCw4OS45YzEuNy0xLjcsNC41LTQsNi43LTYuN2w0LjItNC41di0uN2MtMi4yLjItNC41LjItNi40LjJoLTQ4Ljl2LTMwLjhoMTA0LjJ2MjkuNWwtNDguMSw1Mi4zLTcuOSw3LjktNSw1LjJ2LjdoNy4yYzQsMCw4LjctLjIsMTEuNy0uMmg0NS45djMxLjJoLTExMy44di0zMGw1MC4zLTU0LjN2LjJaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTkzLDQzLjhjNDAuOSwwLDY3LjcsMjguOCw2Ny43LDY3LjJzLTI2LjgsNjcuMi02Ny43LDY3LjItNjgtMjguOC02OC02Ny4yLDI3LTY3LjIsNjgtNjcuMlpNNTkyLjcsNzIuM2MtMTcuOSwwLTI2LjgsMTUuNi0yNi44LDM4LjdzOC45LDM4LjQsMjYuOCwzOC40LDI3LTE1LjQsMjctMzguNC05LjItMzguNy0yNy0zOC43aDBaIi8+CiAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNzA5LjMsNDcuMnYxNy40aC43YzkuNy0xMy45LDIxLjMtMjEuMSwzOS4yLTIxLjEsMjcuOCwwLDQ0LjEsMTkuOCw0NC4xLDQ4LjF2ODIuNmgtNDAuNHYtNzQuNGMwLTEzLjYtNi43LTIyLjYtMTkuOC0yMi42cy0yMi4zLDEwLjktMjIuMywyNi44djcwLjJoLTQwLjRWNDcuMmgzOC45WiIvPgogIDwvZz4KPC9zdmc+');
width: 99px;
height: 40px;
background-size: 99px 40px
}
.gnav20 .gnav20-search-form .gnav20-clearInput {
display: block;
background-image: url('data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9Im5vbmUiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIvPjxwYXRoIGZpbGw9IiM3NDc2NzYiIGQ9Ik0xMCwxOS41Yy01LjIsMC05LjUtNC4zLTkuNS05LjVTNC44LDAuNSwxMCwwLjVzOS41LDQuMyw5LjUsOS41UzE1LjIsMTkuNSwxMCwxOS41eiBNMTAsMS41CWMtNC43LDAtOC41LDMuOC04LjUsOC41YzAsNC43LDMuOCw4LjUsOC41LDguNWM0LjcsMCw4LjUtMy44LDguNS04LjVDMTguNSw1LjMsMTQuNywxLjUsMTAsMS41eiIvPjxwb2x5Z29uIGZpbGw9IiM3NDc2NzYiIHBvaW50cz0iMTQuOSwxNC4xIDEwLjcsMTAgMTQuOCw2IDE0LDUuMiAxMCw5LjMgNiw1LjIgNS4yLDYgOS4zLDEwIDUuMSwxNC4xIDUuOSwxNC45IDEwLDEwLjcgMTQuMSwxNC45ICIvPjwvc3ZnPg==') !important;
width: 20px;
height: 20px;
position: absolute;
right: 38px;
top: 54px;
}
.gnav20 .gnav20-footer-container .gnav20-social-icon a span {
height: 0;
width: 0;
overflow: hidden;
display: block
}
.gnav20 .gnav20-social-media svg path {
fill: #000 !important;
}
.gnav20 .gnav20-footer-level-two {
border-top: 1px solid #d8dada;
padding: 10px 20px 30px;
display: flex;
position: relative
}
.gnav20 .gnav20-footer-level-two #visual-cue {
display: none;
top: 60px;
right: 0;
position: absolute
}
.gnav20 .gnav20-footer-level-two #visual-cue div {
width: 9px;
height: 10px;
float: left;
border-top: 1px solid #d8dada;
border-bottom: 1px solid #d8dada
}
.gnav20 .gnav20-footer-level-two #visual-cue div:first-child {
border-left: 1px solid #d8dada
}
.gnav20 .gnav20-footer-level-two #visual-cue div:last-child {
border-right: 1px solid #d8dada
}
.gnav20 .gnav20-footer-level-two #visual-cue div.visual-cue-show {
background: #d8dada
}
.gnav20 .gnav20-footer-level-two .gnav20-logo {
width: 25%;
padding: 12px 0
}
.gnav20 .gnav20-footer-level-two .gnav20-footerlink {
width: 75%;
padding-left: 10px
}
.gnav20 .gnav20-footer-level-two .gnav20-footerlink .copyright-section {
position: relative
}
.gnav20 .gnav20-footer-level-two .gnav20-footerlink .copyright-section .copyright-text {
color: #6f7171 !important;
position: absolute;
right: 0;
font-size: 12px !important;
padding: 12px 0;
line-height: 16px;
font-family: "BrandFont-Text",arial,helvetica,sans-serif;
letter-spacing: 0
}
.gnav20 .gnav20-footer-level-two .gnav20-footerlink .copyright-section #copyright-year {
color: #6f7171 !important
}
.gnav20 .gnav20-footer-level-two .gnav20-footer-list {
width: 66%
}
.gnav20 .gnav20-footer-level-two .gnav20-footer-list.gnav20-seperated li {
border-right: 1px solid #d8dada
}
.gnav20 .gnav20-footer-level-two .gnav20-footer-list li:last-child {
border: 0 none
}
.gnav20 .gnav20-footer-level-two .gnav20-footer-list li {
display: block;
float: left;
width: fit-content;
padding: 0 8px 8px 0;
text-align: left;
margin-right: 8px
}
.gnav20 .gnav20-footer-level-two .gnav20-footer-list>li>a {
color: #6f7171 !important;
white-space: nowrap;
font-size: 12px !important;
line-height: 16px;
font-family: "BrandFont-Text",arial,helvetica,sans-serif;
letter-spacing: 0
}
.gnav20 .gnav20-footer-level-one .gnav20-footer-wrapper.gnav20-four .gnav20-aem-Grid::before {
display: table-cell
}
.gnav20 .gnav20-width-wrapper.gnav20-new-design.gnav20-hide-top-utility:after{
display:none !important;
}
.gnav20 .gnav20-width-wrapper.gnav20-new-design.gnav20-hide-top-utility .gnav20-desktop .gnav20-row-one{
display:none !important;
}
.desktop-end{height:0}
.gnav20-unified-flyout-success{
position: fixed !important;
width: 480px !important;
top: 0 !important;
height: 100%;
}
.gnav20-cart-flyout{
width: 480px;
height:90%;
}
.gnav20 .gnav20-unified-cart.gnav20-unified-flyout-success .gnav20-closex{
right: 25px !important
}
.gnav20-cart-title-successIcon{
background-image:url('data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjAwMDIgMjUuNjY2OEMxMS42OTI3IDI1LjY2NjggOS40MzcwOSAyNC45ODI2IDcuNTE4NTIgMjMuNzAwNkM1LjU5OTk0IDIyLjQxODcgNC4xMDQ2IDIwLjU5NjYgMy4yMjE1NyAxOC40NjQ4QzIuMzM4NTUgMTYuMzMzIDIuMTA3NTEgMTMuOTg3MiAyLjU1NzY3IDExLjcyNDFDMy4wMDc4MyA5LjQ2MSA0LjExODk4IDcuMzgyMiA1Ljc1MDU5IDUuNzUwNTlDNy4zODIyIDQuMTE4OTggOS40NjEgMy4wMDc4MyAxMS43MjQxIDIuNTU3NjdDMTMuOTg3MiAyLjEwNzUxIDE2LjMzMyAyLjMzODU1IDE4LjQ2NDggMy4yMjE1N0MyMC41OTY2IDQuMTA0NiAyMi40MTg3IDUuNTk5OTQgMjMuNzAwNiA3LjUxODUyQzI0Ljk4MjYgOS40MzcwOSAyNS42NjY4IDExLjY5MjcgMjUuNjY2OCAxNC4wMDAyQzI1LjY2MzIgMTcuMDkzMiAyNC40MzI5IDIwLjA1ODYgMjIuMjQ1OCAyMi4yNDU4QzIwLjA1ODYgMjQuNDMyOSAxNy4wOTMzIDI1LjY2MzIgMTQuMDAwMiAyNS42NjY4Wk0xNC4wMDAyIDMuNzkxNjhDMTEuOTgxMSAzLjc5MTY4IDEwLjAwNzQgNC4zOTA0IDguMzI4NjQgNS41MTIxMkM2LjY0OTg2IDYuNjMzODQgNS4zNDE0MSA4LjIyODE5IDQuNTY4NzUgMTAuMDkzNUMzLjc5NjEgMTEuOTU4OSAzLjU5Mzk0IDE0LjAxMTUgMy45ODc4MyAxNS45OTE3QzQuMzgxNzMgMTcuOTcyIDUuMzUzOTkgMTkuNzkxIDYuNzgxNjggMjEuMjE4N0M4LjIwOTM2IDIyLjY0NjMgMTAuMDI4MyAyMy42MTg2IDEyLjAwODYgMjQuMDEyNUMxMy45ODg4IDI0LjQwNjQgMTYuMDQxNCAyNC4yMDQyIDE3LjkwNjggMjMuNDMxNkMxOS43NzIxIDIyLjY1ODkgMjEuMzY2NSAyMS4zNTA1IDIyLjQ4ODIgMTkuNjcxN0MyMy42MDk5IDE3Ljk5MjkgMjQuMjA4NyAxNi4wMTkyIDI0LjIwODcgMTQuMDAwMkMyNC4yMDU2IDExLjI5MzYgMjMuMTI5MSA4LjY5ODg2IDIxLjIxNTMgNi43ODUwNkMxOS4zMDE1IDQuODcxMjUgMTYuNzA2NyAzLjc5NDcyIDE0LjAwMDIgMy43OTE2NFYzLjc5MTY4Wk0xOS4xMjA0IDExLjE5OTVMMTguMDg5NSAxMC4xNzU5TDEyLjQ3NTIgMTUuNzc2OEw5LjkwODA1IDEzLjIzMDRMOC44Nzk2OCAxNC4yNTY1TDEyLjQ3NzcgMTcuODI0TDE5LjEyMDQgMTEuMTk5NVoiIGZpbGw9IiMwMDgzMzEiLz4KPC9zdmc+Cg==');
width: 28px;
height: 28px;
background-repeat: no-repeat;
font-weight: 400 !important;
}
.gnav20-cart-title-success{
display: flex;
gap: 10px;
}
.gnav20-cart-title-successIcon:not(.gnav20-cart-title-success .gnav20-cart-title-successIcon){
display: none;
}
.gnav20-cart-title-successMessage:not(.gnav20-cart-title-success .gnav20-cart-title-successMessage){
color: #000 !important
}
.gnav20-cart-title-successMessage{
padding-top: 3px;
color: rgb(0, 131, 49) !important;
font-size: 24px;
}
@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
/* Safari */
@-webkit-keyframes spin {
0% { -webkit-transform: rotate(0deg); }
100% { -webkit-transform: rotate(360deg); }
}
.gnav20-desktop .gnav20-desktopOverlay:not(.gnav20-my-side-nav){
opacity:1;
-webkit-transition:opacity .2s ease-in;
transition:opacity .2s ease-in;
width:100%;
height:100%;
background-color:rgba(0,0,0,0.8);
position:fixed;
top:0;
left:0;
z-index:4510;
}
body:has(.gnav20-desktopOverlay){
overflow-y: hidden
}
#gnav20-cart-success-title-flyout:not(.gnav20-cart-title-success #gnav20-cart-success-title-flyout){
font-size: 20px;
font-weight: bold;
line-height: 20px;
margin: 0;
}
.flyout-overlay{
position: fixed;
height: 100%;
width: 480px;
z-index: 4513;
}
#load-indicator{
outline: none;
content: "";
position: absolute;
inset: 0px;
margin: auto;
width: 2.5rem;
height: 2.5rem;
display: block;
z-index: 3;
border-width: 0.25rem;
border-style: solid;
border-color: transparent rgb(0, 0, 0) rgb(0, 0, 0);
border-image: initial;
border-radius: 50% !important;
animation: spin 1s linear infinite;
}
@keyframes gnav20-left {
from {left: -100%;}
100% {left: 0;}
}
@keyframes gnav20-right {
from {left: 100%;}
100% {left: 0;}
}
.gnav20 .gnav20-width-wrapper.gnav20-vils-design {
border-bottom: none;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-row-two {
display: flex;
justify-content: space-between;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-row-two .gnav20-navigation .gnav20-navigation .gnav20-navigation-list {
width: 100%;
display: flex;
justify-content: end;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-row-two .gnav20-utility {
margin-top: 22px;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-account-link {
position: relative;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-navigation .gnav20-menu-label[aria-expanded="true"]:after,
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-navigation .gnav20-menu-label:hover:after,
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box .gnav20-account-link:hover:after {
content: " ";
position: absolute;
width: 100%;
bottom: -4px;
left: 0;
height: 4px;
background: linear-gradient(130deg, #75FB4C, #75FBFD 75%);
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-navigation .gnav20-menu-label:focus {
outline-offset: 4px !important;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon,
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon {
border: none;
padding: 0 !important;
margin: 4px 0px !important;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon:focus, .gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon:focus {
outline-offset: 1px !important;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-utility .gnav20-utility-wrapper button.gnav20-search-icon:after,
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-menu .gnav20-nav-utility button.gnav20-nav-search-icon:after {
content: "" !important;
}
.gnav20 .gnav20-vils-design  .gnav20-desktop .gnav20-row-two .gnav20-utility .gnav20-utility-wrapper .gnav20-account-box {
position: relative;
}
.gnav20 .gnav20-vils-design .gnav20-utility .gnav20-account-icon-only,
.gnav20 .gnav20-vils-design .gnav20-utility .gnav20-account-icon {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTkuOTU5MjQgMTAuMzM5M0MxMC44MTY5IDEwLjMzOTMgMTEuNjU1MyAxMC4wODUgMTIuMzY4NCA5LjYwODUyQzEzLjA4MTUgOS4xMzIwMyAxMy42Mzc0IDguNDU0NzggMTMuOTY1NiA3LjY2MjRDMTQuMjkzOCA2Ljg3MDAyIDE0LjM3OTcgNS45OTgxMSAxNC4yMTIzIDUuMTU2OTNDMTQuMDQ1IDQuMzE1NzUgMTMuNjMyIDMuNTQzMDcgMTMuMDI1NiAyLjkzNjYxQzEyLjQxOTEgMi4zMzAxNSAxMS42NDY0IDEuOTE3MTUgMTAuODA1MiAxLjc0OTgzQzkuOTY0MDUgMS41ODI1MSA5LjA5MjE0IDEuNjY4MzggOC4yOTk3NyAxLjk5NjZDNy41MDczOSAyLjMyNDgxIDYuODMwMTQgMi44ODA2MiA2LjM1MzY0IDMuNTkzNzRDNS44NzcxNSA0LjMwNjg2IDUuNjIyODMgNS4xNDUyNiA1LjYyMjgzIDYuMDAyOTJDNS42MjI4MiA2LjU3MjM5IDUuNzM0OTkgNy4xMzYyOCA1Ljk1MjkxIDcuNjYyNEM2LjE3MDg0IDguMTg4NTIgNi40OTAyNSA4LjY2NjU2IDYuODkyOTMgOS4wNjkyNEM3LjI5NTYgOS40NzE5MSA3Ljc3MzY1IDkuNzkxMzMgOC4yOTk3NyAxMC4wMDkzQzguODI1ODggMTAuMjI3MiA5LjM4OTc4IDEwLjMzOTMgOS45NTkyNCAxMC4zMzkzWk05Ljk1OTI0IDIuNjc2NjJDMTAuNjE3MSAyLjY3NjYyIDExLjI2MDIgMi44NzE3IDExLjgwNzIgMy4yMzcyQzEyLjM1NDIgMy42MDI3IDEyLjc4MDYgNC4xMjIyIDEzLjAzMjMgNC43M0MxMy4yODQxIDUuMzM3OCAxMy4zNSA2LjAwNjYxIDEzLjIyMTYgNi42NTE4NUMxMy4wOTMzIDcuMjk3MDkgMTIuNzc2NSA3Ljg4OTc4IDEyLjMxMTMgOC4zNTQ5OEMxMS44NDYxIDguODIwMTcgMTEuMjUzNCA5LjEzNjk3IDEwLjYwODIgOS4yNjUzMUM5Ljk2MjkzIDkuMzkzNjYgOS4yOTQxMiA5LjMyNzc5IDguNjg2MzIgOS4wNzYwM0M4LjA3ODUyIDguODI0MjcgNy41NTkwMiA4LjM5NzkzIDcuMTkzNTIgNy44NTA5MkM2LjgyODAyIDcuMzAzOTEgNi42MzI5NCA2LjY2MDggNi42MzI5NCA2LjAwMjkyQzYuNjMzOTMgNS4xMjEwNCA2Ljk4NDcgNC4yNzU1NiA3LjYwODI5IDMuNjUxOTdDOC4yMzE4OCAzLjAyODM4IDkuMDc3MzYgMi42Nzc2MSA5Ljk1OTI0IDIuNjc2NjJaTTkuOTk4NjQgMTAuOTkwNkM5LjA4MyAxMC45NjU3IDguMTcxNiAxMS4xMjM4IDcuMzE3ODYgMTEuNDU1N0M2LjQ2NDEyIDExLjc4NzYgNS42ODUyMyAxMi4yODY2IDUuMDI2ODUgMTIuOTIzNEM0LjM2ODQ2IDEzLjU2MDIgMy44NDM4NCAxNC4zMjIxIDMuNDgzNzIgMTUuMTY0M0MzLjEyMzYgMTYuMDA2NSAyLjkzNTI1IDE2LjkxMjIgMi45Mjk2OSAxNy44MjgxVjE4LjMzMzJIMTcuMDY2OFYxNy44MjgxQzE3LjA2MTMgMTYuOTEyMiAxNi44NzMgMTYuMDA2NiAxNi41MTI5IDE1LjE2NDRDMTYuMTUyOSAxNC4zMjIzIDE1LjYyODMgMTMuNTYwNCAxNC45NyAxMi45MjM2QzE0LjMxMTcgMTIuMjg2OCAxMy41MzI5IDExLjc4NzggMTIuNjc5MiAxMS40NTU4QzExLjgyNTYgMTEuMTIzOSAxMC45MTQyIDEwLjk2NTggOS45OTg2NCAxMC45OTA2Wk0zLjk2MDggMTcuMzIzMUM0LjEwNjYzIDE1LjgzNjQgNC44MTA4NiAxNC40NjA0IDUuOTMxNDIgMTMuNDcyN0M3LjA1MTk4IDEyLjQ4NDkgOC41MDU0NiAxMS45NTg5IDkuOTk4NjQgMTIuMDAwN0MxMS40OTE3IDExLjk1OSAxMi45NDUgMTIuNDg1MSAxNC4wNjU0IDEzLjQ3MjlDMTUuMTg1OCAxNC40NjA3IDE1Ljg4OTggMTUuODM2NiAxNi4wMzU2IDE3LjMyMzFIMy45NjA4WiIgZmlsbD0iYmxhY2siLz4KPC9zdmc+Cg==) !important;
position: relative;
}
.gnav20 .gnav20-vils-design .gnav20-utility .gnav20-account-icon-only:hover:after,
.gnav20 .gnav20-vils-design .gnav20-utility .gnav20-account-icon-only[aria-expanded="true"]:after {
content: " ";
position: absolute;
width: 100%;
top: 0;
left: 0;
height: 100%;
border-radius: 22px;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iNDQiIGhlaWdodD0iNDQiIHZpZXdCb3g9IjAgMCA0NCA0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxkZWZzPgoJCTxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZDEiIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSIwJSIgeTI9IjAlIj4KCQkgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM3NUZCNEMiIC8+CgkJICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3NUZCRkQiIC8+CgkJPC9saW5lYXJHcmFkaWVudD4KCTwvZGVmcz4KCTxlbGxpcHNlIGN4PSIyMiIgY3k9IjIyIiByeD0iMjIiIHJ5PSIyMiIgZmlsbD0idXJsKCNncmFkMSkiIC8+Cgk8c3ZnIHg9IjEyIiB5PSIxMiIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiB2aWV3Qm94PSIwIDAgMjAgMjAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CgkJPHBhdGggIGQ9Ik05Ljk1OTI0IDEwLjMzOTNDMTAuODE2OSAxMC4zMzkzIDExLjY1NTMgMTAuMDg1IDEyLjM2ODQgOS42MDg1MkMxMy4wODE1IDkuMTMyMDMgMTMuNjM3NCA4LjQ1NDc4IDEzLjk2NTYgNy42NjI0QzE0LjI5MzggNi44NzAwMiAxNC4zNzk3IDUuOTk4MTEgMTQuMjEyMyA1LjE1NjkzQzE0LjA0NSA0LjMxNTc1IDEzLjYzMiAzLjU0MzA3IDEzLjAyNTYgMi45MzY2MUMxMi40MTkxIDIuMzMwMTUgMTEuNjQ2NCAxLjkxNzE1IDEwLjgwNTIgMS43NDk4M0M5Ljk2NDA1IDEuNTgyNTEgOS4wOTIxNCAxLjY2ODM4IDguMjk5NzcgMS45OTY2QzcuNTA3MzkgMi4zMjQ4MSA2LjgzMDE0IDIuODgwNjIgNi4zNTM2NCAzLjU5Mzc0QzUuODc3MTUgNC4zMDY4NiA1LjYyMjgzIDUuMTQ1MjYgNS42MjI4MyA2LjAwMjkyQzUuNjIyODIgNi41NzIzOSA1LjczNDk5IDcuMTM2MjggNS45NTI5MSA3LjY2MjRDNi4xNzA4NCA4LjE4ODUyIDYuNDkwMjUgOC42NjY1NiA2Ljg5MjkzIDkuMDY5MjRDNy4yOTU2IDkuNDcxOTEgNy43NzM2NSA5Ljc5MTMzIDguMjk5NzcgMTAuMDA5M0M4LjgyNTg4IDEwLjIyNzIgOS4zODk3OCAxMC4zMzkzIDkuOTU5MjQgMTAuMzM5M1pNOS45NTkyNCAyLjY3NjYyQzEwLjYxNzEgMi42NzY2MiAxMS4yNjAyIDIuODcxNyAxMS44MDcyIDMuMjM3MkMxMi4zNTQyIDMuNjAyNyAxMi43ODA2IDQuMTIyMiAxMy4wMzIzIDQuNzNDMTMuMjg0MSA1LjMzNzggMTMuMzUgNi4wMDY2MSAxMy4yMjE2IDYuNjUxODVDMTMuMDkzMyA3LjI5NzA5IDEyLjc3NjUgNy44ODk3OCAxMi4zMTEzIDguMzU0OThDMTEuODQ2MSA4LjgyMDE3IDExLjI1MzQgOS4xMzY5NyAxMC42MDgyIDkuMjY1MzFDOS45NjI5MyA5LjM5MzY2IDkuMjk0MTIgOS4zMjc3OSA4LjY4NjMyIDkuMDc2MDNDOC4wNzg1MiA4LjgyNDI3IDcuNTU5MDIgOC4zOTc5MyA3LjE5MzUyIDcuODUwOTJDNi44MjgwMiA3LjMwMzkxIDYuNjMyOTQgNi42NjA4IDYuNjMyOTQgNi4wMDI5MkM2LjYzMzkzIDUuMTIxMDQgNi45ODQ3IDQuMjc1NTYgNy42MDgyOSAzLjY1MTk3QzguMjMxODggMy4wMjgzOCA5LjA3NzM2IDIuNjc3NjEgOS45NTkyNCAyLjY3NjYyWk05Ljk5ODY0IDEwLjk5MDZDOS4wODMgMTAuOTY1NyA4LjE3MTYgMTEuMTIzOCA3LjMxNzg2IDExLjQ1NTdDNi40NjQxMiAxMS43ODc2IDUuNjg1MjMgMTIuMjg2NiA1LjAyNjg1IDEyLjkyMzRDNC4zNjg0NiAxMy41NjAyIDMuODQzODQgMTQuMzIyMSAzLjQ4MzcyIDE1LjE2NDNDMy4xMjM2IDE2LjAwNjUgMi45MzUyNSAxNi45MTIyIDIuOTI5NjkgMTcuODI4MVYxOC4zMzMySDE3LjA2NjhWMTcuODI4MUMxNy4wNjEzIDE2LjkxMjIgMTYuODczIDE2LjAwNjYgMTYuNTEyOSAxNS4xNjQ0QzE2LjE1MjkgMTQuMzIyMyAxNS42MjgzIDEzLjU2MDQgMTQuOTcgMTIuOTIzNkMxNC4zMTE3IDEyLjI4NjggMTMuNTMyOSAxMS43ODc4IDEyLjY3OTIgMTEuNDU1OEMxMS44MjU2IDExLjEyMzkgMTAuOTE0MiAxMC45NjU4IDkuOTk4NjQgMTAuOTkwNlpNMy45NjA4IDE3LjMyMzFDNC4xMDY2MyAxNS44MzY0IDQuODEwODYgMTQuNDYwNCA1LjkzMTQyIDEzLjQ3MjdDNy4wNTE5OCAxMi40ODQ5IDguNTA1NDYgMTEuOTU4OSA5Ljk5ODY0IDEyLjAwMDdDMTEuNDkxNyAxMS45NTkgMTIuOTQ1IDEyLjQ4NTEgMTQuMDY1NCAxMy40NzI5QzE1LjE4NTggMTQuNDYwNyAxNS44ODk4IDE1LjgzNjYgMTYuMDM1NiAxNy4zMjMxSDMuOTYwOFoiIGZpbGw9ImJsYWNrIi8+Cgk8L3N2Zz4KCVNvcnJ5LCB5b3VyIGJyb3dzZXIgZG9lcyBub3Qgc3VwcG9ydCBpbmxpbmUgU1ZHLgo8L3N2Zz4K) !important;
}
.gnav20 .gnav20-vils-design .gnav20-signin-content-title {
display: none;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-dropdown-menu {
border: none;
background-color: #F6F6F6;
box-shadow: 0 30px 35px 0 rgba(0,0,0,0.1);
border-radius: 16px;
position: absolute;
z-index: 4512;
top: 66px;
padding: 20px 12px;
right: 0;
min-width: 217px;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-dropdown-menu .gnav20-dropdown {
padding-bottom: 0;
background: none;
}
.gnav20 .gnav20-vils-design .gnav20-desktop li.gnav20-dropdown-list {
padding: 5px 16px;
}
.gnav20 .gnav20-vils-design .gnav20-account-box .gnav20-close-account-utility{
top: 5px !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-label{
font-size: 20px;
line-height: 24px;
margin: 6px 10px;
float: right;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-title-row {
margin-bottom: 10px;
height: 39px;
display: inline-block;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-desc {
line-height: 18px;
letter-spacing: 0.5px;
width: 90%;
margin-bottom: 12px;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu .gnav20-content-wrapper.gnav20-grouping-active {
display: flex;
margin: 36px auto !important;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-menu.gnav20-grouping-active {
padding-bottom: 0;
background: linear-gradient(transparent 10px, rgb(255, 255, 255) 10px);
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu ul.gnav20-submenu-column.gnav20-L1 {
width: 33%;
margin: 0 20px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-cta a,
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-cta a:hover {
font-size: 14px !important;
line-height: 18px !important;
font-weight: 700 !important;
letter-spacing: 0.5px !important;
padding-right: 15px;
margin-right: 15px;
position: relative;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-cta a:after {
position: absolute;
content: "";
height: 6px;
width: 6px;
border-left: 2px solid #000 !important;
border-top: 2px solid #000 !important;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
transform: rotate(135deg);
right: 5px;
margin-top: 5px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu .gnav20-vils-l2-cta a:hover:after {
border-color: #e00 !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column li {
padding: 0 0 36px 0 !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card {
height: 310px;
width: 100%;
border-radius: 24px;
position: relative;
background-color: attr(bg-color type(<color>));
background-size: cover;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card:hover {
box-shadow: 8px 8px attr(shadow-color type(<color>));
transform: translateX(-8px);
transition: 0.5s;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card * {
color: #fff !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-card-category {
position: absolute;
display: flex;
left: 20px;
top: 20px;
background-color: #313131;
height: 40px;
border-radius: 10px;
align-items: center;
gap: 8px;
padding: 8px 16px 8px 8px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-card-category img {
width: 24px;
height: 24px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-card-category span.gnav20-vils-card-category-label {
font-size: 11px;
line-height: 16px;
font-weight: 700;
letter-spacing: 0.5px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-body {
position: absolute;
top: 136px;
left: 20px;
right: 20px;
letter-spacing: 0.5px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-body strong{
font-weight: 700;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-title {
font-size: 24px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-desc {
padding-top: 12px;
font-size: 12px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-cta {
position: absolute;
bottom: 20px;
left: 20px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-cta a {
height: 32px;
border: 1px solid #fff !important;
border-radius: 24px;
display: block;
padding: 7px 15px;
font-size: 12px !important;
line-height: 16px !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-cta a:hover {
border: 2px solid #fff !important;
padding: 6px 14px;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-cta a:focus {
outline-color: #fff !important;
}
.gnav20 .gnav20-vils-design .gnav20-sub-header-menu ul.gnav20-submenu-column .gnav20-vils-l2-card .gnav20-vils-l2-card-cta a:after {
display:none;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu .gnav20-card-count-1 ul.gnav20-submenu-column.gnav20-L1.gnav20-card {
width: 66%;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu .gnav20-card-count-0 ul.gnav20-submenu-column.gnav20-L1 {
width: 100%;
display: flex;
}
.gnav20 .gnav20-vils-design .gnav20-desktop .gnav20-sub-header-menu .gnav20-card-count-0 ul.gnav20-submenu-column.gnav20-L1 li {
width: 33%;
padding: 0 20px !important;
margin: 0;
}
.gnav20 .gnav20-unified-cart:not(.gnav20-unified-flyout-success) .cart-button-container,
.gnav20 .cart-button-container.hide-flyout-cta {
display:none !important;
}
.gnav20-unified-flyout-success .cart-button-container:not(.hide-flyout-cta){
padding-top: 40px;
display: block;
}
.gnav20-unified-flyout-success a.cart-button{
background-color: #000000 !important;
color: #ffffff !important;
cursor: pointer;
text-decoration: none !important;
padding: 15px 40px;
border-radius: 24px !important;
text-align: center;
justify-content: center;
align-items: center;
display: flex !important;
justify-self: center;
width: 80%;
}
.gnav20 .gnav20-footer-wrapper.gnav20-three.gnav20-vsbdr-footer-style .gnav20-col-wrapper:first-child {
width: 50%;
position: relative;
}
.gnav20 .gnav20-footer-wrapper.gnav20-three.gnav20-vsbdr-footer-style .gnav20-col-wrapper {
width: 25%;
}
.gnav20 ul.gnav20-footer-list:not(:first-child) {
position: absolute;
top: 0;
right: 0;
margin: 0 10px;
width: calc(50% - 20px);
}
.gnav20 ul.gnav20-footer-list .gnav20-bold-non-link>a {
pointer-events: none;
font-weight: bold;
}
.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) .gnav20-bold-non-link>a
{
pointer-events: auto;
}
.tablet-start{height:0}
@media(max-width:1020.5px),(pointer: coarse){
.gnav20 .gnav20-sub-nav {
display: block;
}
.gnav20 .gnav20-sub-nav .gnav20-sub-nav-content {
padding: 0 16px;
}
.gnav20 .gnav20-desktop,
.gnav20 .gnav20-hide-on-mobile{
display:none !important
}
.gnav20 .gnav20-main{
height: 68px;
min-height: 68px;
padding: 15px 20px;
}
.gnav20 .gnav20-width-wrapper:after{
display:none
}
.gnav20 .gnav20-mobile{
display:block;
}
.gnav20 .gnav20-logo-wrapper {
padding: 11px 0 0 !important;
float: left;
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoWhiteBg {
width: 94px;
height: 21px;
background-size: 94px 21px;
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoHeaderVBG{
width: 90px;
height: 33px;
background-size: 90px 33px;
background-repeat: no-repeat;
background-position: left center;
margin-top: -8px;
}
.gnav20 .gnav20-logo-wrapper a.gnav20-logoHeaderVSBDR {
width: 90px;
height: 35px;
background-size: 90px 35px;
background-repeat: no-repeat;
background-position: left center;
margin-top: -10px;
}
.gnav20 .gnav20-mobile .gnav20-utility {
display: flex;
justify-content: flex-end;
height: 28px;
white-space: nowrap;
opacity: 0;
}
.gnav20-mobile .gnav20-utility-wrapper{
width:fit-content;
margin:0
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-localization{
margin:12px 0 0;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-store{
margin-right:15px
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-sign-in span{
line-height:20px !important;
font-size:12px !important;
font-weight:bold !important
}
.gnav20 .gnav20-utility .gnav20-account-box .gnav20-sign-in:not(.gnav20-account-icon-only) {
font-size: 12px !important;
font-family: 'BrandFont-Text',sans-serif !important;
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu .gnav20-closex {
position: absolute;
text-indent: -333px;
right: 5px;
top: 13px;
overflow: hidden;
display: block;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul:last-of-type, .gnav20 .gnav20-mobile #gnav20-mobile-menu ul:last-of-type {
padding: 0 0 160px 0;
display: block;
}
.gnav20 .gnav20-mobile .gnav20-vzmoverlay,
.gnav20 .gnav20-vzhmoverlay{
opacity:0;
-webkit-transition:opacity .2s ease-in;
transition:opacity .2s ease-in;
width:100%;
height:0;
background-color:rgba(0,0,0,0.8);
position:fixed;
top:0;
left:0;
z-index:10000000;
}
.gnav20 .gnav20-mobile .gnav20-vzmoverlay.gnav20-menuop,
.gnav20 .gnav20-vzhmoverlay.gnav20-menuop,
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-notification .gnav20-notification-overlay:not(.gnav20-hide)+.gnav20-vzmoverlay{
height:100%;
height:-webkit-fill-available;
opacity:1;
-webkit-transition:opacity .2s ease-out;
transition:opacity .2s ease-out;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-account-link {
font-size: 12px !important;
line-height: 20px;
font-weight: bold;
padding: 12px;
display: block;
font-family: 'BrandFont-Text',sans-serif !important;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu,
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-unifiedcart .gnav20-unified-cart,
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-notification .gnav20-notification-overlay{
position:fixed;
top:0;
padding-top:68px;
width:50%;
right:0;
background-color:#fff;
overflow-x:hidden;
transition:width 2s;
z-index:10000001;
height:100%;
border-left: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu,
.gnav20 .gnav20-mobile #gnav20-mobile-menu{
width:0;
opacity:0;
height:100%;
background:#fff;
position:fixed;
top:0;
right:0;
padding-top:64px;
padding-bottom:50px;
z-index:10000001;
overflow:hidden;
text-align:center;
-webkit-transition:opacity .2s,width .2s ease-in;
transition:opacity .2s,width .2s ease-in;
border-left: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu,
.gnav20 .gnav20-mobile #gnav20-mobile-menu.gnav20-open-menu{
visibility: visible;
position: fixed;
-webkit-transform: scale(1);
transform: scale(1);
opacity: 1;
width: 50%;
-webkit-transition: opacity .2s, width .2s ease-out;
transition: opacity .2s, width .2s ease-out;
background: #fff;
overflow: hidden;
height: 100%;
margin: 0;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu .gnav20-dropdown-list a,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item a,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink a,
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu .gnav20-dropdown-list button,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item button,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink button {
font-size: 16px !important;
line-height: 20px !important;
padding: 12px 0 !important;
font-family: BrandFont-Display,sans-serif !important;
letter-spacing: .5px;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-dropdown-box .gnav20-sign-in:after,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu .gnav20-haschild:after {
right: 2px !important;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul.gnav20-isactive,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul.gnav20-isactive{
top:0
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li{
position:relative;
text-align:left;
padding:0;margin:0
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li strong,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li strong,
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li a,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li a{
padding:18px 20px;
margin:0;
display:block;
border-bottom:1px solid #d8dada;
font-size:20px !important;
font-weight:normal;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu ul li.gnav20-goback{
display:none
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-sign-in-mobile .gnav20-signin-content-title {
padding: 0 0 16px 0;
margin: 0 16px;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu .gnav20-dropdown-list,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item, .gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink {
padding: 0 16px;
border: 0;
overflow: visible;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu .gnav20-dropdown-label{
padding:0 20px 20px 20px;
font-weight:bold;
font-size:24px;
display:block;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu ul li a{
padding: 20px;
font-size: 20px !important;
border-bottom: 1px solid #d8dada !important;
width: 100%;
display: inline-block;
}
.gnav20 .gnav20-mobile .gnav20-unified-cart .gnav20-cart-content-title{
padding: 0 16px 16px;
font-size: 20px !important;
}
.gnav20 .gnav20-mobile .gnav20-cart-toast {
margin-bottom: 35px;
}
.gnav20 .gnav20-mobile .gnav20-unified-cart .gnav20-content-list a {
padding: 12px 0;
margin: 0 16px;
font-weight: normal;
line-height: 20px;
display: block;
border-bottom: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile .gnav20-unified-cart .gnav20-content-list:first-child a {
border-top: 1px solid #d8dada;
}
.gnav20 .gnav20-utility #gnav20-nav-toggle {
margin-right: -12px;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHJlY3QgZmlsbD0ibm9uZSIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIi8+PHJlY3QgeD0iMiIgeT0iMyIgZmlsbD0iIzAwMCIgd2lkdGg9IjE2IiBoZWlnaHQ9IjEiLz48cmVjdCB4PSIyIiB5PSIxNyIgIGZpbGw9IiMwMDAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxIi8+PHJlY3QgeD0iMiIgeT0iMTAiICBmaWxsPSIjMDAwIiB3aWR0aD0iMTYiIGhlaWdodD0iMSIvPjwvc3ZnPg==) !important;
}
.gnav20 .gnav20-utility #gnav20-nav-toggle:hover {
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHJlY3QgZmlsbD0ibm9uZSIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIi8+PHJlY3QgeD0iMiIgeT0iMyIgZmlsbD0iIzAwMCIgd2lkdGg9IjE2IiBoZWlnaHQ9IjIiLz48cmVjdCB4PSIyIiB5PSIxNyIgIGZpbGw9IiMwMDAiIHdpZHRoPSIxNiIgaGVpZ2h0PSIyIi8+PHJlY3QgeD0iMiIgeT0iMTAiICBmaWxsPSIjMDAwIiB3aWR0aD0iMTYiIGhlaWdodD0iMiIvPjwvc3ZnPg==) !important;
}
.gnav20 .gnav20-mobile.gnav20-hide-hamburger button#gnav20-nav-toggle{
display:none !important
}
.gnav20 .gnav20-mobile #gnav20-ulwrapper {
position: absolute;
top: 68px;
height: calc(100% - 137px);
width: 100%;
overflow: auto;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-openL1 #gnav20-ulwrapper {
overflow: visible;
}
.gnav20 .gnav20-mobile #gnav20-ulwrapper a.gnav20-main-header.gnav20-selected {
height: 20px;
font-size: 20px !important;
margin: 0 16px;
display: block;
text-shadow: 1px 0 0 #000;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu:not(.gnav20-openL1) .gnav20-navigation {
padding-top: 16px;
}
.gnav20 .gnav20-mobile .gnav20-navigation-list{
position:absolute;
text-align:left;
width:100%;
background:#fff;
top:52px;
height:calc(100vh - 274px);
overflow:auto
}
.gnav20 .gnav20-mobile.gnav20-eyebrow-L1 .gnav20-navigation-list {
position: relative;
text-align: left;
width: 100%;
background: #fff;
top: 0;
height: auto;
overflow: auto;
}
.gnav20 .gnav20-mobile .gnav20-navigation-list.gnav20-non-header{
top:0;
border-top:1px solid #d8dada;
height:auto
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-navigation-list {
height: auto;
position: relative;
top: 0;
padding: 0;
border-top: 0;
overflow: visible;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility.gnav20-eyebrow-L1 .gnav20-openL1 .gnav20-navigation-list{
height: calc(100vh - 68px);
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility.gnav20-eyebrow-L1 #gnav20-ulwrapper{
height: calc(100% - 68px);
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu:not(.gnav20-openL1) .gnav20-navigation-item:first-of-type .gnav20-primary-menu {
border-top: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-utility-wrapper,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink div {
width: 100%;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-utility-wrapper button,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-utility-wrapper [role=button],
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-utility-wrapper a {
display: block;
font-size: 16px !important;
font-family: 'BrandFont-Display',sans-serif !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink button.gnav20-sign-in {
width: 100%;
position: relative;
}
.gnav20 .gnav20-mobile .gnav20-eyebrow-link-list-item a.gnav20-main-header:not(.gnav20-selected){
z-index: 1000;
font-weight: normal;
background: #fff;
border-top: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile.gnav20-eyebrow-L1 .gnav20-eyebrow-link-list-item a.gnav20-main-header:not(.gnav20-selected) {
position: relative;
display: block;
border-bottom: 1px solid #d8dada;
border-top: 0;
padding: 18px 16px !important;
outline-offset: unset !important;
width: auto;
line-height: 20px;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility.gnav20-eyebrow-L1 .gnav20-eyebrow-link-list-item a.gnav20-main-header:not(.gnav20-selected) {
position: relative;
display: block;
border-bottom: 1px solid #d8dada;
border-top: none;
margin: 0 16px;
padding: 12px 0 !important;
outline-offset: unset !important;
width: auto;
line-height: 20px;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-eyebrow-link-list-item a.gnav20-main-header:not(.gnav20-selected) {
font-weight: normal;
padding: 16px;
font-size: 16px !important;
height: auto;
letter-spacing: .5px;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item{
width:100%;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item a.gnav20-menu-label-button{
display:block;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item .gnav20-menu-label-button{
font-weight:normal !important;
font-size:20px !important;
padding:17px 20px;
position:relative;
border-bottom:1px solid #d8dada;
line-height: 20px;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item .gnav20-menu-label-button:focus{
outline-offset:-13px !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-navigation-item .gnav20-menu-label-button:focus{
outline-offset:2px !important;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item button{
width:100%;
text-align:left;
}
.gnav20 .gnav20-mobile .gnav20-nav-utility, .gnav20-featured-card-top-label {
display: none !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-openL1 #gnav20-ulwrapper a.gnav20-main-header.gnav20-selected {
display: none;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-footerlink #gnav20-sign-in-mobile li.gnav20-dropdown-list.gnav20-goback,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item ul li.gnav20-current > a.gnav20-goback {
font-size: 20px !important;
font-weight: bold !important;
height: auto;
padding: 0 0 16px 0 !important;
margin: 0 !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-footerlink #gnav20-sign-in-mobile li.gnav20-dropdown-list.gnav20-goback:before,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback:before,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item ul li.gnav20-current > a.gnav20-goback:before{
top: -45px;
left: 5px;
height: 12px;
width: 12px;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-footerlink #gnav20-sign-in-mobile li.gnav20-dropdown-list.gnav20-goback:after,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback:after,
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item ul li.gnav20-current > a.gnav20-goback:after {
top: -56px;
left: -12px;
height: 44px;
width: 44px;
display: block;
content: '';
position: absolute;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current{
top:0;
margin-bottom:53px;
position:relative;
background:#fff;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-primary-menu.gnav20-current {
margin: 0;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-haschild{
display:none;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-sub-menu{
overflow:auto;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-sub-header-menu.gnav20-sub-menu {
overflow: visible;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-autoflow{
height:calc(100vh - 280px);
border:0;
overflow:auto;
padding-bottom:120px !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-primary-menu.gnav20-current .gnav20-autoflow {
height: calc(100vh - 130px);
margin: 0 !important;
padding: 0 !important;
overflow: auto;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility .gnav20-submenu-column.gnav20-featured-scroll-area .gnav20-autoflow {
overflow: visible;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility ul.gnav20-submenu-column.gnav20-featured-scroll-area.gnav20-L2:not(.gnav20-submenu-open),
.gnav20 .gnav20-mobile.gnav20-stacked-utility ul.gnav20-submenu-column.gnav20-featured-scroll-area.gnav20-L3 {
max-height: calc(100vh - 130px);
overflow: auto;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-goback{
display:block;
padding:17px 20px 17px 58px;
margin-bottom:18px !important;
}
.gnav20 .gnav20-mobile #gnav20-footerlink{
display:flex;
justify-content:flex-start;
height:69px;
padding:0 20px;
overflow-x:auto;
align-items:center;
text-align:left;
position:absolute;
bottom:0;
width:100%;
border-top:1px solid #d8dada;
border-bottom:1px solid #d8dada;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink {
align-items: start;
flex-direction: column;
padding: 12px 16px 48px;
border: 0;
height: auto;
position: relative;
overflow: visible;
}
.gnav20 .gnav20-promo-ribbon {
padding: 16px 20px;
margin: 0;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow {
background: no-repeat center center / 16px 16px !important;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-prev {
left: 8px;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-next {
right: 8px;
}
.gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow.gnav20-slide-arrow-prev[style*=block] + .gnav20-promotext {
margin: 0 32px;
}
.gnav20 .gnav20-utility-wrapper svg{
height:18px;
width:18px;
margin-top:0;
}
.gnav20 .gnav20-mobile .gnav20-utility-wrapper a,
.gnav20 .gnav20-mobile .gnav20-utility-wrapper button{
font-size: 16px !important;
font-weight: normal;
line-height: 20px;
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu .gnav20-fixed-top{
top:68px;
position:fixed;
left:0;
height:calc(100vh - 150px);
overflow:auto;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-account-utility .gnav20-dropdown-menu .gnav20-fixed-top,
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-dropdown-box .gnav20-dropdown-menu .gnav20-fixed-top{
height:100%;
z-index: 1001;
}
.gnav20 .gnav20-mobile .gnav20-goback:before{
position:absolute;
content:"";
height:9px;
width:9px;
border-right:1px solid #000;
border-bottom:1px solid #000;
-ms-transform:rotate(135deg);
-webkit-transform:rotate(135deg);
transform:rotate(135deg);
left:27px;
margin-top:6px;
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu .gnav20-dropdown-menu .gnav20-goback:before{
margin-top:23px;
pointer-events: none;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu .gnav20-dropdown-menu .gnav20-goback:before{
left: 2px;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu{
width:100%;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-language-box {
padding: 12px 0;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li a.gnav20-goback,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li a.gnav20-goback{
display:none;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li.gnav20-current>a.gnav20-haschild,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li.gnav20-current>a.gnav20-haschild{
display:none;
}
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu ul li.gnav20-current>a.gnav20-goback,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li.gnav20-current>a.gnav20-goback{
display:block;
padding-left:58px;height:58px;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-dropdown-list.gnav20-goback{
border-top:1px solid #d8dada;
border-bottom: 1px solid #d8dada;
}
.gnav20 .gnav20-mobile #gnav20-footerlink.gnav20-utility-reverse{
flex-direction:row-reverse;
justify-content:flex-end;
}
.gnav20 .gnav20-mobile .gnav20-menu-label-link{
display:none;
}
.gnav20 .gnav20-mobile .gnav20-hide,
.gnav20 .gnav20-mobile .gnav20-dont-show-in-mobile{
display:none !important;
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu li.gnav20-dropdown-list.gnav20-goback{
padding:0;
margin-bottom:18px !important;
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu li.gnav20-dropdown-list.gnav20-goback .gnav20-back-to-menu{
font-size:20px !important;
padding:17px 20px 17px 58px !important;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu li.gnav20-dropdown-list.gnav20-goback .gnav20-back-to-menu{
font-size:16px !important;
padding:17px 20px 17px 30px !important;
}
.gnav20 .gnav20-mobile .gnav20-eyebrow-link-list [data-stext].gnav20-main-header:not(.gnav20-selected):before{
content:attr(data-stext) " ";
}
.gnav20 .gnav20-mobile .gnav20-eyebrow-link-list-item a{
outline-offset:-5px !important
}
.gnav20 .gnav20-mobile .gnav20-eyebrow-link-list-item a.gnav20-main-header{
position:absolute;
bottom:0;
padding:26px 20px;
width:100%;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-utility-wrapper{
margin-right:20px;
margin-left:0;
}
.gnav20 .gnav20-mobile.gnav20-stacked-utility #gnav20-footerlink .gnav20-dropdown-box .gnav20-sign-in:after,
.gnav20 #gnav20-mobile-menu .gnav20-haschild:after{
position:absolute;content:"";
height:9px;
width:9px;
border-left:1px solid #000;
border-top:1px solid #000;
-ms-transform:rotate(135deg);
-webkit-transform:rotate(135deg);
transform:rotate(135deg);
right:23px;
margin-top:5px;
}
.gnav20-unified-flyout-success{
height: 100% !important;
padding-top: 28px !important;
}
#load-indicator{
position: absolute;
}
.gnav20-cart-flyout {
width: 480px;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu .gnav20-dropdown-list a,
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item button {
font-weight: 700 !important;
padding: 26px 0 !important;
border-bottom: 1px solid #cccccc !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu:not(.gnav20-openL1) .gnav20-navigation-item:first-of-type .gnav20-primary-menu {
border-top: 0 !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu:not(.gnav20-openL1) .gnav20-navigation {
padding-top: 0px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu ul li {
padding: 32px 0 0 !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu ul li:last-child {
padding: 0;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item .gnav20-vils-l2-cta a {
font-size: 14px !important;
line-height: 18px !important;
font-weight: 700 !important;
letter-spacing: 0.5px !important;
padding: 0 30px 0 0 !important;
display: inline;
border-bottom: none;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu {
padding-top: 48px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu ul.gnav20-submenu-column.gnav20-L1 {
padding: 0 0 24px 0 !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-ulwrapper {
top: 48px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu .gnav20-closex {
right: 14px;
top: 14px;
min-width: 20px;
height: 20px;
background-position: 0px 0px !important;
background-size: 20px 20px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback {
position: absolute;
top: -48px;
width: 100vh;
margin-left: -16px !important;
padding: 16px 32px !important;
font-size: 11px !important;
line-height: 16px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback:before {
top: 16px;
left: 16px;
height: 16px;
width: 16px;
border: none;
margin: 0;
transform: none;
background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMTUiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNSAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTcuNDU5NSAwLjMzMzQxNUw4LjA2NDY4IDAuOTMzMzAzTDIuMzczNTcgNi41NzYwMUwxNC4wNjY0IDYuNTc2MDFMMTQuMDY2NCA3LjQyNDE2TDIuMzczNTcgNy40MjQxNUw4LjA2NDY4IDEzLjA2NjlMNy40NTk1IDEzLjY2NjdMMC43MzMwNzQgNy4wMDAwOEw3LjQ1OTUgMC4zMzM0MTVaIiBmaWxsPSJibGFjayIvPgo8L3N2Zz4K) !important;
background-position: left center;
background-size: 11px;
background-repeat: no-repeat;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-mobile-menu.gnav20-open-menu #gnav20-ulwrapper .gnav20-navigation-item .gnav20-primary-menu.gnav20-current .gnav20-goback:after {
display: none;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item .gnav20-vils-l2-card-cta a {
padding: 6px 14px !important;
font-size: 12px !important;
line-height: 16px !important;
}
.gnav20 .gnav20-vils-design .gnav20-mobile.gnav20-stacked-utility #gnav20-ulwrapper .gnav20-navigation-item .gnav20-vils-l2-card-cta a:hover {
padding: 5px 13px !important;
}
.gnav20 .gnav20-vils-l1-promo {
padding: 50px 16px;
}
.gnav20 .gnav20-vils-l1-promo-body {
width: 65%;
}
.gnav20 .gnav20-vils-l1-promo-title {
font-size: 24px;
font-weight: 700;
line-height: 26px;
padding-bottom: 5px;
letter-spacing: 0;
}
.gnav20 .gnav20-vils-l1-promo-desc {
font-size: 14px;
line-height: 16px;
font-weight: 400;
letter-spacing: 0;
}
.gnav20 .gnav20-vils-l1-promo-cta {
margin-top: 30px;
}
.gnav20 .gnav20-vils-l1-promo-cta a {
padding: 8px 16px !important;
font-size: 12px !important;
line-height: 16px !important;
background: #000 !important;
color: #fff !important;
font-weight: 700;
border-radius: 24px;
}
.gnav20 .gnav20-vils-l1-promo-cta a:hover {
outline: none;
box-shadow: rgb(0, 0, 0) 0px 0px 0px 0.0625rem;
transition: 0.1s ease-out;
}
}
.tablet-end{height:0}
@media (max-width: 767.5px) {
.gnav20 .gnav20-new-design .gnav20-main{
padding:15px 16px;
}
.gnav20 .gnav20-modal{
padding-top:5vh
}
.gnav20 .gnav20-modal-content{
padding:32px;
max-height:90vh;
}
.gnav20 .gnav20-modal-content .gnav20-modal-cta{
display:block;
}
.gnav20 .gnav20-promo-ribbon{
padding: 16px;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu,
.gnav20 .gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu.gnav20-open-menu,
.gnav20 .gnav20-mobile #gnav20-mobile-menu.gnav20-open-menu,
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-unifiedcart .gnav20-unified-cart,
.gnav20 .gnav20-mobile .gnav20-notification-overlay{
width:calc(100% - 66px)
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li strong,
.gnav20 .gnav20-mobile #gnav20-mobile-menu ul li a{
font-size:16px !important;
padding:18px 16px
}
.gnav20 .gnav20-mobile #gnav20-mobile-menu .gnav20-haschild:after{
right:18px
}
.gnav20 .gnav20-mobile #gnav20-footerlink{
height:65px;
padding:0 16px;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-utility-wrapper a,
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-utility-wrapper button {
font-size: 14px !important;
font-family: 'BrandFont-Text',sans-serif !important;
}
.gnav20 .gnav20-mobile #gnav20-footerlink .gnav20-utility-wrapper .gnav20-dropdown-list a,
.gnav20 .gnav20-mobile #gnav20-mobile-menu li.gnav20-dropdown-list.gnav20-goback .gnav20-back-to-menu {
font-size: 16px !important;
}
.gnav20 .gnav20-mobile .gnav20-navigation-item .gnav20-menu-label-button{
font-size:16px !important;
padding:18px 16px;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-autoflow{
height:calc(100vh - 264px);
margin-top:-20px !important;
padding-top:20px !important;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-goback{
padding:0 0 0 50px;
margin-bottom:20px !important;
height:54px;
}
.gnav20 .gnav20-mobile .gnav20-primary-menu.gnav20-current .gnav20-goback:before{
left:21px;
margin-top:4px;
}
#vz-gf20 .gnav20-mobile-footer-accordion .gnav20-border-content.gnav20-accordion-list{
display:none;
opacity:1;
}
.gnav20 .gnav20-footer-container .gnav20-main-container {
padding-top: 0;
}
.gnav20 .gnav20-footer-container .gnav20-col-wrapper{
width:100% !important;
display:block;
padding:0;
border:0;
}
.gnav20 .gnav20-footer-container .gnav20-footer-wrapper{
display:block;
}
.gnav20 .gnav20-footer-container .gnav20-hero-wrapper{
margin:25px 16px 48px;
}
.gnav20 .gnav20-footer-container .gnav20-footer-list>li>a{
font-size:12px !important;
line-height:14.4px;
padding:12px 0;
display:block;
}
.gnav20 .gnav20-footer-container .gnav20-hero-footer-heading{
font-size:12px !important;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two{
display:block;padding:25px 0 48px;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two .gnav20-logo{
width:100%;
padding:12px 16px 20px;
height:56px;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two .gnav20-footerlink{
width:100%;
padding:0 16px 60px;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two .gnav20-footerlink .copyright-section{
padding-top:32px;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two .gnav20-footerlink .copyright-section .copyright-text{
left:0;
}
.gnav20 .gnav20-footer-container .gnav20-footer-level-two .gnav20-footer-list li{
width:100%;
float:none;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one{
padding-top:24px
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-socialfooter .gnav20-hero-wrapper{
margin:16px 16px 20px;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-socialfooter:last-of-type .gnav20-hero-wrapper {
padding-bottom: 20px;
margin-bottom: 45px !important;
border-bottom: 1px solid #000;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-socialfooter .gnav20-hero-footer-heading{
border-top:1px solid #000;
font-size:16px !important;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-hero-wrapper{
margin:10px 16px 0;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-hero-footer-heading{
cursor:pointer;
width:100%;
font-weight:bold;
font-size:16px !important;
letter-spacing:.5px;
border-top:1px solid #000;
text-align:left;
padding:8px 0 12px;
position:relative;
margin:2px 0 0 0 !important;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-hero-footer-heading:after{
content:"";
height:13px;
width:13px;
border-right:2px solid #000;
border-bottom:2px solid #000;
-ms-transform:rotate(45deg);
-webkit-transform:rotate(45deg);
transform:rotate(45deg);
transition:transform 330ms,top 175ms;
position:absolute;
right:5px;top:7px;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .accordion-child-open{
display:block !important;
height:100%;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-hero-footer-heading.gnav20-accordion-open::after{
transform:rotate(-135deg);
top:18px;
transition:transform 330ms,top 175ms;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-border-content{
height:0;
margin:0;
padding:0;
text-align:left;
overflow:hidden;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-footer-list{
text-align:justify;
font-size:15px;
width:95%;
margin:-2px 0 0 0
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-footer-list>li{
padding:0;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-one .gnav20-herofooter .gnav20-footer-list>li>a{
font-size:16px !important;
line-height:20px !important;
letter-spacing:.5px;
}
.gnav20 .gnav20-mobile-footer-accordion .gnav20-footer-level-two .gnav20-footerlink{
border-bottom:1px solid #d8dada;
}
.gnav20 .gnav20-mobile .gnav20-utility .gnav20-unifiedcart .gnav20-unified-cart.gnav20-unified-flyout-success{
width: 100% !important;
height: 100% !important;
}
#load-indicator{
position: fixed;
}
.gnav20-cart-flyout {
width: 100%;
}
.gnav20  .gnav20-vils-design .gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-dropdown-menu,
.gnav20  .gnav20-vils-design .gnav20-mobile #gnav20-mobile-menu.gnav20-open-menu{
width:100%;
border-left: none;
}
.gnav20 ul.gnav20-footer-list:not(:first-child) {
margin-top: 18px !important;
position: relative;
}
.gnav20 .gnav20-footer-container .gnav20-footer-list>li>a:not([href]) {
padding: 0;
}
}

</style>
<style>
/* Page CSS */
/*! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com*/*,:after,:before{box-sizing:border-box;border:0 solid #e5e7eb}:after,:before{--tw-content:""}html{line-height:1.5;-webkit-text-size-adjust:100%;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:initial}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:initial;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:initial}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0}fieldset,legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:after,:before{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,0.5);--tw-ring-offset-shadow:0 0 transparent;--tw-ring-shadow:0 0 transparent;--tw-shadow:0 0 transparent;--tw-shadow-colored:0 0 transparent;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,0.5);--tw-ring-offset-shadow:0 0 transparent;--tw-ring-shadow:0 0 transparent;--tw-shadow:0 0 transparent;--tw-shadow-colored:0 0 transparent;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1536px){.container{max-width:1536px}}span[class^=SwatchContainer-VDS]:first-child{margin-left:0!important}span[class^=SwatchContainer-VDS]{margin-bottom:.75rem;flex-grow:0}[class^=GroupContainer-VDS]{margin:0!important;display:flex!important;flex-wrap:wrap!important}a[class^=StyledAnchor-VDS]{padding-left:0!important}.inqC2CImgContainer>div>div{display:flex!important}span[class*=StyledBody-VDS]>span>a:focus{outline:1px dashed grey!important}.inqC2CImgContainer>div>div>span{top:0!important}.long-ellipses{display:-webkit-box;max-width:280px;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}.loading .customBlur{filter:blur(4px)}div[class^=ModalDialogWrapper-VDS]{overflow:auto!important}div#video-overlay{position:relative!important}div#video-overlay [class^=ModalDialogWrapper-VDS]{overflow:visible!important}@media only screen and (max-width:639px){div#video-overlay [class^=ModalDialogWrapper-VDS]{height:100%!important;overflow:auto!important}div#video-overlay [class^=ModalDialogWrapper-VDS] button{width:96%;bottom:20px!important}}div#video-overlay [class^=ModalDialogWrapper-VDS] ::-webkit-scrollbar,div#video-overlay [class^=ModalDialogWrapper-VDS] :not(select){scrollbar-width:thin!important;display:block}div#compatibility-overlay [class^=ModalDialogWrapper-VDS]{overflow:visible!important}@media only screen and (max-width:639px){div#compatibility-overlay [class^=ModalDialogWrapper-VDS]{height:100%!important}div#compatibility-overlay [class^=ModalDialogWrapper-VDS] button{width:96%;bottom:20px!important}}div#compatibility-overlay [class^=ModalDialogWrapper-VDS] ::-webkit-scrollbar{scrollbar-width:thin!important;display:block}.scrollediv::-webkit-scrollbar{width:4px!important;scrollbar-width:thin!important}.scrollediv::-webkit-scrollbar-track{border-radius:.5rem!important;--tw-bg-opacity:1!important;background-color:rgb(216 218 218/var(--tw-bg-opacity))!important}.scrollediv::-webkit-scrollbar-thumb{border-radius:.5rem!important;--tw-bg-opacity:1!important;background-color:rgb(111 113 113/var(--tw-bg-opacity))!important}.render-content a{-webkit-text-decoration-line:underline;text-decoration-line:underline;text-underline-offset:1px}.render-content h4{font-size:1.125rem;line-height:1.75rem;font-weight:700}.giftcard-prices [class^=RadioBoxGroupWrapper-VDS]{display:grid!important;grid-template-columns:repeat(1,minmax(0,1fr))!important;gap:1rem!important}@media (min-width:1024px){.giftcard-prices [class^=RadioBoxGroupWrapper-VDS]{grid-template-columns:repeat(4,minmax(0,1fr))!important}}.giftcard-prices [class^=LabelBase-VDS]{font-weight:700!important}.outofstock{position:relative}.swatch:hover{--tw-border-opacity:1!important;border-color:rgb(0 0 0/var(--tw-border-opacity))!important}.outofstock:hover{--tw-border-opacity:1!important;border-color:rgb(111 113 113/var(--tw-border-opacity))!important}.outofstock span:after{position:absolute;content:"";left:0;top:40%;bottom:0;right:0;border-color:currentcolor #6f7171 #6f7171;border-top:1px solid #6f7171;width:48px;transform:rotate(-45deg)}.modal-open .remove-sticky{position:relative!important}.sr-only{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border-width:0!important}.pointer-events-none{pointer-events:none!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}.collapse{visibility:collapse!important}.static{position:static!important}.fixed{position:fixed!important}.absolute{position:absolute!important}.relative{position:relative!important}.sticky{position:-webkit-sticky!important;position:sticky!important}.left-0{left:0!important}.right-\[20px\]{right:20px!important}.top-0{top:0!important}.bottom-0{bottom:0!important}.right-0{right:0!important}.top-\[60px\]{top:60px!important}.top-\[10px\]{top:10px!important}.left-\[74vw\]{left:74vw!important}.top-\[-32px\]{top:-32px!important}.left-1\/3{left:33.333333%!important}.top-3\.5{top:.875rem!important}.left-2\.5{left:.625rem!important}.top-3{top:.75rem!important}.left-2{left:.5rem!important}.top-px{top:1px!important}.left-\[-32px\]{left:-32px!important}.top-auto{top:auto!important}.bottom-\[calc\(50\%-6px\)\]{bottom:calc(50% - 6px)!important}.right-\[-32px\]{right:-32px!important}.top-\[40\%\]{top:40%!important}.isolate{isolation:isolate!important}.z-10{z-index:10!important}.z-40{z-index:40!important}.z-\[99\]{z-index:99!important}.z-\[3\]{z-index:3!important}.z-50{z-index:50!important}.z-\[500\]{z-index:500!important}.-z-10{z-index:-10!important}.z-\[-100\]{z-index:-100!important}.z-\[999\]{z-index:999!important}.z-\[499\]{z-index:499!important}.z-\[5\]{z-index:5!important}.col-span-1{grid-column:span 1/span 1!important}.col-span-4{grid-column:span 4/span 4!important}.col-span-2{grid-column:span 2/span 2!important}.col-span-8{grid-column:span 8/span 8!important}.col-span-3{grid-column:span 3/span 3!important}.col-span-6{grid-column:span 6/span 6!important}.col-span-10{grid-column:span 10/span 10!important}.col-span-12{grid-column:span 12/span 12!important}.float-right{float:right!important}.m-5{margin:1.25rem!important}.m-auto{margin:auto!important}.m-0{margin:0!important}.mx-auto{margin-left:auto!important;margin-right:auto!important}.my-4{margin-top:1rem!important;margin-bottom:1rem!important}.my-\[12px\]{margin-top:12px!important;margin-bottom:12px!important}.mx-5{margin-left:1.25rem!important;margin-right:1.25rem!important}.my-0{margin-top:0!important;margin-bottom:0!important}.mx-\[5px\]{margin-left:5px!important;margin-right:5px!important}.mx-3{margin-left:.75rem!important;margin-right:.75rem!important}.my-7{margin-top:1.75rem!important;margin-bottom:1.75rem!important}.my-16{margin-top:4rem!important;margin-bottom:4rem!important}.my-14{margin-top:3.5rem!important;margin-bottom:3.5rem!important}.my-8{margin-top:2rem!important;margin-bottom:2rem!important}.my-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-6{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-3{margin-top:.75rem!important;margin-bottom:.75rem!important}.my-12{margin-top:3rem!important;margin-bottom:3rem!important}.mx-0{margin-left:0!important;margin-right:0!important}.mx-2\.5{margin-left:.625rem!important;margin-right:.625rem!important}.mx-2{margin-left:.5rem!important;margin-right:.5rem!important}.my-5{margin-top:1.25rem!important;margin-bottom:1.25rem!important}.mx-1{margin-left:.25rem!important;margin-right:.25rem!important}.my-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.mb-\[32px\]{margin-bottom:32px!important}.mb-2{margin-bottom:.5rem!important}.mt-\[32px\]{margin-top:32px!important}.mr-3{margin-right:.75rem!important}.mb-4{margin-bottom:1rem!important}.ml-2\.5{margin-left:.625rem!important}.ml-2{margin-left:.5rem!important}.ml-auto{margin-left:auto!important}.mt-4{margin-top:1rem!important}.mt-3{margin-top:.75rem!important}.mb-6{margin-bottom:1.5rem!important}.mt-1{margin-top:.25rem!important}.mt-16{margin-top:4rem!important}.mt-\[24px\]{margin-top:24px!important}.mb-\[12px\]{margin-bottom:12px!important}.mt-\[98px\]{margin-top:98px!important}.mb-\[56px\]{margin-bottom:56px!important}.mt-\[66px\]{margin-top:66px!important}.mt-\[16px\]{margin-top:16px!important}.mt-\[30px\]{margin-top:30px!important}.mb-\[16px\]{margin-bottom:16px!important}.mb-\[24px\]{margin-bottom:24px!important}.mt-\[46px\]{margin-top:46px!important}.mt-\[12px\]{margin-top:12px!important}.mr-4{margin-right:1rem!important}.ml-\[12\%\]{margin-left:12%!important}.mt-11{margin-top:2.75rem!important}.mt-12{margin-top:3rem!important}.mt-2{margin-top:.5rem!important}.mr-2{margin-right:.5rem!important}.ml-1{margin-left:.25rem!important}.mb-3{margin-bottom:.75rem!important}.mt-\[22px\]{margin-top:22px!important}.mb-1{margin-bottom:.25rem!important}.mt-5{margin-top:1.25rem!important}.mt-\[19vh\]{margin-top:19vh!important}.mt-\[260px\]{margin-top:260px!important}.mr-8{margin-right:2rem!important}.mb-5{margin-bottom:1.25rem!important}.mb-8{margin-bottom:2rem!important}.mr-1{margin-right:.25rem!important}.mt-6{margin-top:1.5rem!important}.mb-12{margin-bottom:3rem!important}.mr-0\.5{margin-right:.125rem!important}.mr-0{margin-right:0!important}.mt-0{margin-top:0!important}.mb-auto{margin-bottom:auto!important}.mt-7{margin-top:1.75rem!important}.mt-auto{margin-top:auto!important}.mb-0{margin-bottom:0!important}.ml-\[3px\]{margin-left:3px!important}.mb-16{margin-bottom:4rem!important}.mt-8{margin-top:2rem!important}.-ml-\[1px\]{margin-left:-1px!important}.-mt-\[2px\]{margin-top:-2px!important}.ml-4{margin-left:1rem!important}.mb-9{margin-bottom:2.25rem!important}.mb-10{margin-bottom:2.5rem!important}.mr-2\.5{margin-right:.625rem!important}.-ml-5{margin-left:-1.25rem!important}.mt-\[20px\]{margin-top:20px!important}.mt-\[-3px\]{margin-top:-3px!important}.mb-\[-8px\]{margin-bottom:-8px!important}.ml-\[-50px\]{margin-left:-50px!important}.ml-0{margin-left:0!important}.mb-\[-3px\]{margin-bottom:-3px!important}.mb-\[10px\]{margin-bottom:10px!important}.mr-6{margin-right:1.5rem!important}.-mt-16{margin-top:-4rem!important}.mt-3\.5{margin-top:.875rem!important}.mb-\[30px\]{margin-bottom:30px!important}.box-content{box-sizing:initial!important}.block{display:block!important}.inline-block{display:inline-block!important}.inline{display:inline!important}.flex{display:flex!important}.table{display:table!important}.grid{display:grid!important}.contents{display:contents!important}.hidden{display:none!important}.aspect-video{aspect-ratio:16/9!important}.h-\[110px\]{height:110px!important}.h-full{height:100%!important}.h-\[98vh\]{height:98vh!important}.h-\[18px\]{height:18px!important}.h-\[94px\]{height:94px!important}.h-\[36px\]{height:36px!important}.h-\[16px\]{height:16px!important}.h-\[100px\]{height:100px!important}.h-\[220px\]{height:220px!important}.h-\[20px\]{height:20px!important}.h-\[48px\]{height:48px!important}.h-9{height:2.25rem!important}.h-\[52px\]{height:52px!important}.h-\[54px\]{height:54px!important}.h-\[32px\]{height:32px!important}.h-\[17px\]{height:17px!important}.h-\[172px\]{height:172px!important}.h-\[363px\]{height:363px!important}.h-px{height:1px!important}.h-10{height:2.5rem!important}.h-\[80vh\]{height:80vh!important}.h-\[45px\]{height:45px!important}.h-\[250px\]{height:250px!important}.h-\[200px\]{height:200px!important}.h-\[210px\]{height:210px!important}.h-\[522px\]{height:522px!important}.h-\[134px\]{height:134px!important}.h-\[542px\]{height:542px!important}.h-4{height:1rem!important}.h-3{height:.75rem!important}.h-14{height:3.5rem!important}.h-6{height:1.5rem!important}.h-20{height:5rem!important}.h-16{height:4rem!important}.h-8{height:2rem!important}.h-12{height:3rem!important}.h-32{height:8rem!important}.h-44{height:11rem!important}.h-\[85vh\]{height:85vh!important}.h-\[calc\(68vh-95px\)\]{height:calc(68vh - 95px)!important}.h-1{height:.25rem!important}.h-0{height:0!important}.h-\[150px\]{height:150px!important}.h-1\/4{height:25%!important}.h-\[23px\]{height:23px!important}.h-\[40px\]{height:40px!important}.h-\[64px\]{height:64px!important}.h-2{height:.5rem!important}.h-5{height:1.25rem!important}.h-\[8px\]{height:8px!important}.h-\[90px\]{height:90px!important}.h-\[428px\]{height:428px!important}.h-\[calc\(100vh_-_97px\)\]{height:calc(100vh - 97px)!important}.h-auto{height:auto!important}.h-\[60vh\]{height:60vh!important}.h-\[50px\]{height:50px!important}.h-\[136px\]{height:136px!important}.h-\[72px\]{height:72px!important}.h-\[104px\]{height:104px!important}.h-\[230px\]{height:230px!important}.max-h-\[48px\]{max-height:48px!important}.max-h-\[458px\]{max-height:458px!important}.min-h-\[36px\]{min-height:36px!important}.min-h-\[204px\]{min-height:204px!important}.min-h-\[70px\]{min-height:70px!important}.w-\[100\%\],.w-full{width:100%!important}.w-\[80\%\]{width:80%!important}.w-11\/12{width:91.666667%!important}.w-\[60\%\]{width:60%!important}.w-\[50\%\]{width:50%!important}.w-\[88px\]{width:88px!important}.w-\[148px\]{width:148px!important}.w-\[116px\]{width:116px!important}.w-\[100px\]{width:100px!important}.w-\[64px\]{width:64px!important}.w-\[93\%\]{width:93%!important}.w-\[50px\]{width:50px!important}.w-\[85\%\]{width:85%!important}.w-\[95\%\]{width:95%!important}.w-\[120px\]{width:120px!important}.w-\[109px\]{width:109px!important}.w-\[134px\]{width:134px!important}.w-3{width:.75rem!important}.w-1\/2{width:50%!important}.w-1\/3{width:33.333333%!important}.w-10{width:2.5rem!important}.w-\[200px\]{width:200px!important}.w-\[40px\]{width:40px!important}.w-48{width:12rem!important}.w-36{width:9rem!important}.w-8{width:2rem!important}.w-16{width:4rem!important}.w-24{width:6rem!important}.w-32{width:8rem!important}.w-12{width:3rem!important}.w-\[82vw\]{width:82vw!important}.w-fit{width:-webkit-fit-content!important;width:-moz-fit-content!important;width:fit-content!important}.w-\[calc\(100\%\+16px\)\]{width:calc(100% + 16px)!important}.w-0{width:0!important}.w-\[265px\]{width:265px!important}.w-\[150px\]{width:150px!important}.w-1\/4{width:25%!important}.w-9{width:2.25rem!important}.w-px{width:1px!important}.w-4\/5{width:80%!important}.w-\[300px\]{width:300px!important}.w-\[84px\]{width:84px!important}.w-5{width:1.25rem!important}.w-7{width:1.75rem!important}.w-2\/3{width:66.666667%!important}.w-\[135px\]{width:135px!important}.w-\[280px\]{width:280px!important}.w-\[72px\]{width:72px!important}.w-\[240px\]{width:240px!important}.w-\[160px\]{width:160px!important}.w-auto{width:auto!important}.w-\[290px\]{width:290px!important}.w-\[80px\]{width:80px!important}.w-5\/6{width:83.333333%!important}.w-\[328px\]{width:328px!important}.w-\[104px\]{width:104px!important}.min-w-\[320px\]{min-width:320px!important}.max-w-\[1272px\]{max-width:1272px!important}.max-w-\[1227px\]{max-width:1227px!important}.max-w-screen-lg{max-width:1024px!important}.max-w-\[490px\]{max-width:490px!important}.max-w-\[292px\]{max-width:292px!important}.max-w-3xl{max-width:48rem!important}.max-w-\[560px\]{max-width:560px!important}.max-w-\[600px\]{max-width:600px!important}.max-w-\[180px\]{max-width:180px!important}.max-w-\[220px\]{max-width:220px!important}.max-w-\[40px\]{max-width:40px!important}.max-w-\[182px\]{max-width:182px!important}.flex-1{flex:1 1 0%!important}.flex-shrink{flex-shrink:1!important}.flex-shrink-0{flex-shrink:0!important}.shrink{flex-shrink:1!important}.flex-grow{flex-grow:1!important}.flex-grow-0{flex-grow:0!important}.grow{flex-grow:1!important}.basis-0{flex-basis:0px!important}.basis-full{flex-basis:100%!important}.border-collapse{border-collapse:collapse!important}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))!important}@keyframes pulse{50%{opacity:.5}}.animate-pulse{animation:pulse 2s cubic-bezier(.4,0,.6,1) infinite!important}.cursor-pointer{cursor:pointer!important}.cursor-default{cursor:default!important}.resize{resize:both!important}.scroll-mt-20{scroll-margin-top:5rem!important}.list-none{list-style-type:none!important}.list-disc{list-style-type:disc!important}.grid-flow-row{grid-auto-flow:row!important}.auto-rows-max{grid-auto-rows:-webkit-max-content!important;grid-auto-rows:max-content!important}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))!important}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))!important}.grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))!important}.grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))!important}.grid-cols-8{grid-template-columns:repeat(8,minmax(0,1fr))!important}.grid-cols-7{grid-template-columns:repeat(7,minmax(0,1fr))!important}.grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))!important}.grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))!important}.grid-cols-\[minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)\]{grid-template-columns:minmax(160px,1fr) minmax(160px,1fr)!important}.grid-cols-\[minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)\]{grid-template-columns:minmax(160px,1fr) minmax(160px,1fr) minmax(160px,1fr)!important}.grid-cols-\[minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)_minmax\(160px\2c _1fr\)\]{grid-template-columns:minmax(160px,1fr) minmax(160px,1fr) minmax(160px,1fr) minmax(160px,1fr)!important}.grid-cols-\[minmax\(160px\2c _1fr\)\]{grid-template-columns:minmax(160px,1fr)!important}.grid-rows-1{grid-template-rows:repeat(1,minmax(0,1fr))!important}.flex-row{flex-direction:row!important}.flex-col{flex-direction:column!important}.flex-wrap{flex-wrap:wrap!important}.place-items-center{place-items:center!important}.content-center{align-content:center!important}.content-start{align-content:flex-start!important}.items-start{align-items:flex-start!important}.items-end{align-items:flex-end!important}.items-center{align-items:center!important}.items-baseline{align-items:baseline!important}.justify-start{justify-content:flex-start!important}.justify-end{justify-content:flex-end!important}.justify-center{justify-content:center!important}.justify-between{justify-content:space-between!important}.justify-evenly{justify-content:space-evenly!important}.gap-4{gap:1rem!important}.gap-\[20px\]{gap:20px!important}.gap-\[8px\]{gap:8px!important}.gap-\[1\.5px\]{gap:1.5px!important}.gap-3{gap:.75rem!important}.gap-6{gap:1.5rem!important}.gap-\[2px\]{gap:2px!important}.gap-\[4px\]{gap:4px!important}.gap-2{gap:.5rem!important}.gap-1{gap:.25rem!important}.gap-y-6{row-gap:1.5rem!important}.gap-x-\[22px\]{column-gap:22px!important}.gap-y-4{row-gap:1rem!important}.gap-y-3{row-gap:.75rem!important}.space-x-6>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0!important;margin-right:calc(1.5rem*var(--tw-space-x-reverse))!important;margin-left:calc(1.5rem*(1 - var(--tw-space-x-reverse)))!important}.space-x-4>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0!important;margin-right:calc(1rem*var(--tw-space-x-reverse))!important;margin-left:calc(1rem*(1 - var(--tw-space-x-reverse)))!important}.self-start{align-self:flex-start!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.overflow-visible{overflow:visible!important}.overflow-y-auto{overflow-y:auto!important}.overflow-x-hidden{overflow-x:hidden!important}.whitespace-pre-line{white-space:pre-line!important}.break-words{overflow-wrap:break-word!important}.rounded{border-radius:.25rem!important}.rounded-lg{border-radius:.5rem!important}.rounded-\[14px\]{border-radius:14px!important}.rounded-\[5px\]{border-radius:5px!important}.rounded-full{border-radius:9999px!important}.rounded-2xl{border-radius:1rem!important}.rounded-md{border-radius:.375rem!important}.rounded-xl{border-radius:.75rem!important}.rounded-sm{border-radius:.125rem!important}.rounded-r-md{border-top-right-radius:.375rem!important;border-bottom-right-radius:.375rem!important}.rounded-t-lg{border-top-left-radius:.5rem!important;border-top-right-radius:.5rem!important}.border{border-width:1px!important}.border-0{border-width:0!important}.border-2{border-width:2px!important}.border-b-\[1px\]{border-bottom-width:1px!important}.border-r-0{border-right-width:0!important}.border-t,.border-t-\[1px\]{border-top-width:1px!important}.border-b{border-bottom-width:1px!important}.border-b-\[\.0625rem\]{border-bottom-width:.0625rem!important}.border-solid{border-style:solid!important}.border-dashed{border-style:dashed!important}.border-none{border-style:none!important}.border-\[\#D8DADA\]{--tw-border-opacity:1!important;border-color:rgb(216 218 218/var(--tw-border-opacity))!important}.border-\[\#A7A7A7\]{--tw-border-opacity:1!important;border-color:rgb(167 167 167/var(--tw-border-opacity))!important}.border-\[\#cfcfcf\]{--tw-border-opacity:1!important;border-color:rgb(207 207 207/var(--tw-border-opacity))!important}.border-slate-900{--tw-border-opacity:1!important;border-color:rgb(15 23 42/var(--tw-border-opacity))!important}.border-black{--tw-border-opacity:1!important;border-color:rgb(0 0 0/var(--tw-border-opacity))!important}.border-gray-300{--tw-border-opacity:1!important;border-color:rgb(209 213 219/var(--tw-border-opacity))!important}.border-\[\#d8dada\]{--tw-border-opacity:1!important;border-color:rgb(216 218 218/var(--tw-border-opacity))!important}.border-\[\#6f7171\]{--tw-border-opacity:1!important;border-color:rgb(111 113 113/var(--tw-border-opacity))!important}.border-slate-200{--tw-border-opacity:1!important;border-color:rgb(226 232 240/var(--tw-border-opacity))!important}.border-\[\#6F7171\]{--tw-border-opacity:1!important;border-color:rgb(111 113 113/var(--tw-border-opacity))!important}.border-transparent{border-color:transparent!important}.border-b-\[\#d8dada\]{--tw-border-opacity:1!important;border-bottom-color:rgb(216 218 218/var(--tw-border-opacity))!important}.bg-white{--tw-bg-opacity:1!important;background-color:rgb(255 255 255/var(--tw-bg-opacity))!important}.bg-\[\#F6F6F6\]{--tw-bg-opacity:1!important;background-color:rgb(246 246 246/var(--tw-bg-opacity))!important}.bg-\[\#fff\],.bg-\[\#FFFFFF\]{--tw-bg-opacity:1!important;background-color:rgb(255 255 255/var(--tw-bg-opacity))!important}.bg-black{background-color:rgb(0 0 0/var(--tw-bg-opacity))!important}.bg-black,.bg-slate-200{--tw-bg-opacity:1!important}.bg-slate-200{background-color:rgb(226 232 240/var(--tw-bg-opacity))!important}.bg-gray-200{--tw-bg-opacity:1!important;background-color:rgb(229 231 235/var(--tw-bg-opacity))!important}.bg-\[\#f6f6f6\]{--tw-bg-opacity:1!important;background-color:rgb(246 246 246/var(--tw-bg-opacity))!important}.bg-slate-100{--tw-bg-opacity:1!important;background-color:rgb(241 245 249/var(--tw-bg-opacity))!important}.bg-transparent{background-color:initial!important}.bg-gray-100{--tw-bg-opacity:1!important;background-color:rgb(243 244 246/var(--tw-bg-opacity))!important}.bg-\[\#A7A7A7\]{--tw-bg-opacity:1!important;background-color:rgb(167 167 167/var(--tw-bg-opacity))!important}.bg-\[\#D6F2E0\]{--tw-bg-opacity:1!important;background-color:rgb(214 242 224/var(--tw-bg-opacity))!important}.bg-\[\#ee0000\]{--tw-bg-opacity:1!important;background-color:rgb(238 0 0/var(--tw-bg-opacity))!important}.bg-\[\#E3F2FD\]{--tw-bg-opacity:1!important;background-color:rgb(227 242 253/var(--tw-bg-opacity))!important}.bg-none{background-image:none!important}.bg-cover{background-size:cover!important}.bg-center{background-position:50%!important}.bg-top{background-position:top!important}.bg-no-repeat{background-repeat:no-repeat!important}.p-\[20px\]{padding:20px!important}.p-4{padding:1rem!important}.p-0{padding:0!important}.p-3{padding:.75rem!important}.p-6{padding:1.5rem!important}.p-2{padding:.5rem!important}.p-0\.5{padding:.125rem!important}.p-5{padding:1.25rem!important}.p-1{padding:.25rem!important}.p-8{padding:2rem!important}.py-4{padding-top:1rem!important;padding-bottom:1rem!important}.px-\[20px\]{padding-left:20px!important;padding-right:20px!important}.px-6{padding-left:1.5rem!important;padding-right:1.5rem!important}.px-4{padding-left:1rem!important;padding-right:1rem!important}.px-2{padding-left:.5rem!important;padding-right:.5rem!important}.py-6{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.px-0{padding-left:0!important;padding-right:0!important}.px-5{padding-left:1.25rem!important;padding-right:1.25rem!important}.py-\[12px\]{padding-top:12px!important;padding-bottom:12px!important}.px-\[7px\]{padding-left:7px!important;padding-right:7px!important}.py-\[2px\]{padding-top:2px!important;padding-bottom:2px!important}.px-3{padding-left:.75rem!important;padding-right:.75rem!important}.py-3{padding-top:.75rem!important;padding-bottom:.75rem!important}.py-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-8{padding-top:2rem!important;padding-bottom:2rem!important}.px-1{padding-left:.25rem!important;padding-right:.25rem!important}.py-12{padding-top:3rem!important;padding-bottom:3rem!important}.px-\[1px\]{padding-left:1px!important;padding-right:1px!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.px-7{padding-left:1.75rem!important;padding-right:1.75rem!important}.px-\[4px\]{padding-left:4px!important;padding-right:4px!important}.px-3\.5{padding-left:.875rem!important;padding-right:.875rem!important}.py-3\.5{padding-top:.875rem!important;padding-bottom:.875rem!important}.pb-2\.5{padding-bottom:.625rem!important}.pb-2{padding-bottom:.5rem!important}.pb-1{padding-bottom:.25rem!important}.pl-4{padding-left:1rem!important}.pr-4{padding-right:1rem!important}.pt-4{padding-top:1rem!important}.pb-4{padding-bottom:1rem!important}.pb-48{padding-bottom:12rem!important}.pt-12{padding-top:3rem!important}.pt-8{padding-top:2rem!important}.pb-\[7px\]{padding-bottom:7px!important}.pt-5{padding-top:1.25rem!important}.pb-6{padding-bottom:1.5rem!important}.pl-2{padding-left:.5rem!important}.pl-\[4px\]{padding-left:4px!important}.pt-14{padding-top:3.5rem!important}.pt-1{padding-top:.25rem!important}.pl-1{padding-left:.25rem!important}.pt-3{padding-top:.75rem!important}.pr-1{padding-right:.25rem!important}.pt-2{padding-top:.5rem!important}.pb-8{padding-bottom:2rem!important}.pb-24{padding-bottom:6rem!important}.pl-5{padding-left:1.25rem!important}.pl-1\.5{padding-left:.375rem!important}.pb-12{padding-bottom:3rem!important}.pt-6{padding-top:1.5rem!important}.pt-\[0\.5px\]{padding-top:.5px!important}.pt-0{padding-top:0!important}.pb-0{padding-bottom:0!important}.pl-3{padding-left:.75rem!important}.pl-7{padding-left:1.75rem!important}.pb-3{padding-bottom:.75rem!important}.pl-0{padding-left:0!important}.pt-10{padding-top:2.5rem!important}.pl-2\.5{padding-left:.625rem!important}.pr-3{padding-right:.75rem!important}.text-left{text-align:left!important}.text-center{text-align:center!important}.text-right{text-align:right!important}.indent-px{text-indent:1px!important}.text-2xl{font-size:1.5rem!important;line-height:2rem!important}.text-xl{font-size:1.25rem!important;line-height:1.75rem!important}.text-xs{font-size:.75rem!important;line-height:1rem!important}.text-base{font-size:1rem!important;line-height:1.5rem!important}.text-sm{font-size:.875rem!important;line-height:1.25rem!important}.text-5xl{font-size:3rem!important;line-height:1!important}.text-\[40px\]{font-size:40px!important}.text-lg{font-size:1.125rem!important;line-height:1.75rem!important}.text-\[24px\]{font-size:24px!important}.font-extrabold{font-weight:800!important}.font-normal{font-weight:400!important}.font-bold{font-weight:700!important}.lowercase{text-transform:lowercase!important}.capitalize{text-transform:capitalize!important}.leading-4{line-height:1rem!important}.leading-6{line-height:1.5rem!important}.leading-5{line-height:1.25rem!important}.leading-8{line-height:2rem!important}.leading-7{line-height:1.75rem!important}.tracking-wide{letter-spacing:.025em!important}.tracking-normal{letter-spacing:0!important}.text-\[\#333333\]{--tw-text-opacity:1!important;color:rgb(51 51 51/var(--tw-text-opacity))!important}.text-gray-500{--tw-text-opacity:1!important;color:rgb(107 114 128/var(--tw-text-opacity))!important}.text-\[\#6F7171\],.text-\[\#6f7171\]{--tw-text-opacity:1!important;color:rgb(111 113 113/var(--tw-text-opacity))!important}.text-white{--tw-text-opacity:1!important;color:rgb(255 255 255/var(--tw-text-opacity))!important}.underline{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.line-through{-webkit-text-decoration-line:line-through!important;text-decoration-line:line-through!important}.decoration-black{-webkit-text-decoration-color:#000!important;text-decoration-color:#000!important}.placeholder-black::placeholder{--tw-placeholder-opacity:1!important;color:rgb(0 0 0/var(--tw-placeholder-opacity))!important}.opacity-20{opacity:.2!important}.opacity-0{opacity:0!important}.opacity-70{opacity:.7!important}.shadow{--tw-shadow:0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px -1px rgba(0,0,0,0.1)!important;--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color)!important}.shadow,.shadow-sm{box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)!important}.shadow-sm{--tw-shadow:0 1px 2px 0 rgba(0,0,0,0.05)!important;--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)!important}.outline{outline-style:solid!important}.outline-dashed{outline-style:dashed!important}.outline-1{outline-width:1px!important}.outline-offset-\[-2px\]{outline-offset:-2px!important}.outline-black{outline-color:#000!important}.ring{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color)!important;--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color)!important}.ring,.ring-0{box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 transparent)!important}.ring-0{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color)!important;--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width)) var(--tw-ring-color)!important}.ring-black{--tw-ring-opacity:1!important;--tw-ring-color:rgb(0 0 0/var(--tw-ring-opacity))!important}.blur{--tw-blur:blur(8px)!important}.blur,.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)!important}.transition{transition-property:color,background-color,border-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-text-decoration-color,-webkit-backdrop-filter!important;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter!important;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-text-decoration-color,-webkit-backdrop-filter!important;transition-timing-function:cubic-bezier(.4,0,.2,1)!important;transition-duration:.15s!important}.transition-all{transition-property:all!important;transition-timing-function:cubic-bezier(.4,0,.2,1)!important;transition-duration:.15s!important}.delay-\[0s\]{transition-delay:0s!important}.duration-200,.duration-\[0\.2s\]{transition-duration:.2s!important}.duration-500{transition-duration:.5s!important}.ease-\[ease\]{transition-timing-function:ease!important}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)!important}html{scroll-behavior:smooth}@font-face{font-family:Verizon-NHG-eTX;src:url(//scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.eot);src:url(//scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.eot#iefix) format("embedded-opentype"),url(//scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.woff2) format("woff2"),url(//scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.woff) format("woff"),url(//scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Regular.ttf) format("truetype");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:Verizon-NHG-eTX;src:url(//scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.eot);src:url(//scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.eot#iefix) format("embedded-opentype"),url(//scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.woff2) format("woff2"),url(//scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.woff) format("woff"),url(//scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeTX-Bold.ttf) format("truetype");font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:Verizon-NHG-eDS;src:url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGDS-Light.eot);src:url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGDS-Light.eot#iefix) format("embedded-opentype"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGDS-Light.woff2) format("woff2"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGDS-Light.woff) format("woff"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGDS-Light.ttf) format("truetype");font-weight:300;font-style:normal;font-display:swap}@font-face{font-family:Verizon-NHG-eDS;src:url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.eot);src:url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.eot#iefix) format("embedded-opentype"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.woff2) format("woff2"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.woff) format("woff"),url(https://scache1.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Regular.ttf) format("truetype");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:Verizon-NHG-eDS;src:url(https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.eot);src:url(https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.eot#iefix) format("embedded-opentype"),url(https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.woff2) format("woff2"),url(https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.woff) format("woff"),url(https://scache2.vzw.com/globalnav/fonts/verizon-nhg/VerizonNHGeDS-Bold.ttf) format("truetype");font-weight:700;font-style:normal;font-display:swap}body.withoutPagePosition{top:0!important}.focus:focus,.focus:focus-within{outline:1px dashed #000}@media only screen and (min-width:1272px){div[class*=NotificationBar__StyledNotification],div[class*=NotificationBar__StyledNotification] div[class*=ContentWrapper-VDS]{max-width:100%}}*{font-family:Verizon-NHG-eDS,Helvetica,Arial,sans-serif}[class^=ModalContainer-VDS]{z-index:9999!important}#compareProductName{display:-webkit-box;overflow:hidden;-webkit-line-clamp:4;-webkit-box-orient:vertical}.priceTabComponent div[class^=ContentWrapper]{display:none}.priceTabComponent ul{overflow:inherit}div#featuresContainer .device-details-section{display:block!important}#tooltip-portal{position:absolute;z-index:9999}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;transition-property:transform;box-sizing:initial}.swiper-container-android .swiper-slide,.swiper-wrapper{transform:translateZ(0)}.swiper-container-multirow>.swiper-wrapper{-webkit-box-lines:multiple;-moz-box-lines:multiple;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex:0 0 auto;flex-shrink:0;width:100%;height:100%;position:relative;background-color:#fff}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{align-items:flex-start;transition-property:transform,height}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-wp8-horizontal{touch-action:pan-y}.swiper-wp8-vertical{touch-action:pan-x}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{background:none}.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z'/%3E%3C/svg%3E")}.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z' fill='%23fff'/%3E%3C/svg%3E")}.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z'/%3E%3C/svg%3E")}.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z' fill='%23fff'/%3E%3C/svg%3E")}.swiper-pagination-progress .swiper-pagination-progressbar{background:#007aff;position:absolute;left:0;top:0;width:100%;height:100%;transform:scale(0);transform-origin:left top}.swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar{transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progress{width:100%;height:4px;left:0;top:0}.swiper-container-vertical>.swiper-pagination-progress{width:4px;height:100%;left:0;top:0}.swiper-pagination-progress.swiper-pagination-white{background:hsla(0,0%,100%,.5)}.swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar{background:#fff}.swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar{background:#000}.swiper-container-3d{-o-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:linear-gradient(270deg,rgba(0,0,0,.5),transparent)}.swiper-container-3d .swiper-slide-shadow-right{background-image:linear-gradient(90deg,rgba(0,0,0,.5),transparent)}.swiper-container-3d .swiper-slide-shadow-top{background-image:linear-gradient(0deg,rgba(0,0,0,.5),transparent)}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:linear-gradient(180deg,rgba(0,0,0,.5),transparent)}.swiper-container-coverflow .swiper-wrapper,.swiper-container-flip .swiper-wrapper{-ms-perspective:1200px}.swiper-container-cube,.swiper-container-flip{overflow:visible}.swiper-container-cube .swiper-slide,.swiper-container-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-container-cube .swiper-slide .swiper-slide,.swiper-container-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active,.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top,.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-slide{visibility:hidden;transform-origin:0 0;width:100%;height:100%}.swiper-container-cube.swiper-container-rtl .swiper-slide{transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0;width:100%;height:100%;background:#000;opacity:.6;filter:blur(50px);z-index:0}.swiper-container-fade.swiper-container-free-mode .swiper-slide{transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-zoom-container{width:100%;height:100%;display:flex;justify-content:center;align-items:center;text-align:center}.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg{max-width:100%;max-height:100%;object-fit:contain}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;transform-origin:50%;animation:swiper-preloader-spin 1s steps(12) infinite}.swiper-lazy-preloader:after{display:block;content:"";width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' stroke='%236c6c6c' stroke-width='11' stroke-linecap='round' d='M60 7v20'/%3E%3C/defs%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(30 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(60 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(90 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(120 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(150 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.37' transform='rotate(180 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.46' transform='rotate(210 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.56' transform='rotate(240 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.66' transform='rotate(270 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.75' transform='rotate(300 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.85' transform='rotate(330 60 60)'/%3E%3C/svg%3E");background-position:50%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' stroke='%23fff' stroke-width='11' stroke-linecap='round' d='M60 7v20'/%3E%3C/defs%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(30 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(60 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(90 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(120 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.27' transform='rotate(150 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.37' transform='rotate(180 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.46' transform='rotate(210 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.56' transform='rotate(240 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.66' transform='rotate(270 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.75' transform='rotate(300 60 60)'/%3E%3Cuse xlink:href='/smartphones/prepaid/%23a/' opacity='.85' transform='rotate(330 60 60)'/%3E%3C/svg%3E")}@keyframes swiper-preloader-spin{to{transform:rotate(1turn)}}.swiper-button-next,.swiper-button-prev{background:hsla(0,0%,100%,.9);cursor:pointer;background-size:27px 44px;background-position:50%;background-repeat:no-repeat;height:95%;top:0;right:0;margin-top:0;width:32px;display:none;justify-content:center;align-items:center;position:absolute;z-index:10}.swiper-button-prev{left:0}.swiper-button-next:after,.swiper-button-prev:after{content:"";background:url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNNzIuMiA1MC4yTDQ4LjcgNzMuN2wxLjUgMS42IDI2LjItMjYuMi0yNi4yLTI2LjItMS41IDEuNkw3Mi4yIDQ4SDE4LjV2Mi4yeiIvPjwvc3ZnPg==);width:32px;height:32px;background-size:32px 32px;font-weight:700;display:block}@media (min-device-width:768px),screen and (min-width:768px){.swiper-button-next,.swiper-button-prev{display:flex}}.swiper-button-prev:after{transform:scaleX(-1)}.swiper-button-disabled:after{background:none}.feature-swiper .swiper-button-next:after,.feature-swiper .swiper-button-prev:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z'/%3E%3C/svg%3E");height:14px;width:14px;background-size:contain;background-repeat:no-repeat;background-position:50%}.ellipseText{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;width:calc(85% - 10px)}#customizeCommonPdp div.rah-static,#storageAccordion div.rah-static,[class^=AccordionWrapper-VDS] div.rah-static{overflow:visible!important}.image-swiper .swiper-slide{display:flex;align-items:center;justify-content:center}#imageComponentSwiper>.swiper-container{height:497px!important}@media (max-width:767px){#imageComponentSwiper>.swiper-container{height:292px!important}}.requiredInput label:after{content:"*";color:red;font-size:20px}@media (max-width:767px){.hideLPBtn{display:none!important}}@media only screen and (max-width:480px){#compareProductName{-webkit-line-clamp:2}}@media only screen and (min-width:1025px){div#pdp-promo-overlay [id^=scrollbar-track],div#video-overlay [id^=scrollbar-track]{display:none!important}}#byod-overlay sup{font-size:.6rem;top:-.5em}.availableOffersText{font-family:Verizon-NHG-eTX,sans-serif}.after\:mx-\[4px\]:after{content:var(--tw-content)!important;margin-left:4px!important;margin-right:4px!important}.after\:content-\[\'\/\'\]:after{--tw-content:"/"!important;content:var(--tw-content)!important}.last\:mb-0:last-child{margin-bottom:0!important}.last\:after\:content-\[\'\'\]:last-child:after{--tw-content:""!important;content:var(--tw-content)!important}.focus-within\:outline-none:focus-within{outline:2px solid transparent!important;outline-offset:2px!important}.focus-within\:outline-dashed:focus-within{outline-style:dashed!important}.focus-within\:outline-1:focus-within{outline-width:1px!important}.focus-within\:outline-offset-2:focus-within{outline-offset:2px!important}.focus-within\:outline-offset-4:focus-within{outline-offset:4px!important}.hover\:scale-\[1\.02\]:hover{--tw-scale-x:1.02!important;--tw-scale-y:1.02!important}.hover\:scale-110:hover,.hover\:scale-\[1\.02\]:hover{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))!important}.hover\:scale-110:hover{--tw-scale-x:1.1!important;--tw-scale-y:1.1!important}.hover\:cursor-pointer:hover{cursor:pointer!important}.hover\:border-2:hover{border-width:2px!important}.hover\:underline:hover{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.focus\:outline-none:focus{outline:2px solid transparent!important;outline-offset:2px!important}.focus\:outline-dashed:focus{outline-style:dashed!important}.focus\:outline-1:focus{outline-width:1px!important}.focus\:outline-offset-2:focus{outline-offset:2px!important}.focus\:outline-black:focus{outline-color:#000!important}.focus-visible\:outline-dashed:focus-visible{outline-style:dashed!important}.focus-visible\:outline-1:focus-visible{outline-width:1px!important}@media (max-width:924px){.max-\[924px\]\:hidden{display:none!important}}@media (max-width:923px){.max-\[923px\]\:ml-5{margin-left:1.25rem!important}.max-\[923px\]\:ml-auto{margin-left:auto!important}.max-\[923px\]\:mr-3{margin-right:.75rem!important}.max-\[923px\]\:flex{display:flex!important}.max-\[923px\]\:hidden{display:none!important}.max-\[923px\]\:max-h-\[28px\]{max-height:28px!important}.max-\[923px\]\:max-w-\[28px\]{max-width:28px!important}.max-\[923px\]\:grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))!important}}@media (min-width:400px){.min-\[400px\]\:h-9{height:2.25rem!important}}@media (min-width:480px){.min-\[480px\]\:grid-cols-\[repeat\(2\2c minmax\(218px\2c _1fr\)\)\]{grid-template-columns:repeat(2,minmax(218px,1fr))!important}}@media (min-width:640px){.sm\:mt-0{margin-top:0!important}.sm\:mr-0{margin-right:0!important}.sm\:grid{display:grid!important}.sm\:h-\[25rem\]{height:25rem!important}.sm\:min-h-\[auto\]{min-height:auto!important}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))!important}.sm\:flex-col{flex-direction:column!important}}@media (min-width:684px){.min-\[684px\]\:h-\[186px\]{height:186px!important}.min-\[684px\]\:h-\[106px\]{height:106px!important}.min-\[684px\]\:w-\[186px\]{width:186px!important}.min-\[684px\]\:w-\[106px\]{width:106px!important}.min-\[684px\]\:grid-cols-\[repeat\(2\2c minmax\(320px\2c _1fr\)\)\]{grid-template-columns:repeat(2,minmax(320px,1fr))!important}.min-\[684px\]\:pt-4{padding-top:1rem!important}}@media (min-width:768px){.md\:absolute{position:absolute!important}.md\:h-44{height:11rem!important}.md\:h-16{height:4rem!important}.md\:w-\[70\%\]{width:70%!important}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))!important}.md\:flex-row{flex-direction:row!important}.md\:items-center{align-items:center!important}.md\:pt-0{padding-top:0!important}}@media (max-width:923px){.max-\[923px\]\:\[\&_button\]\:w-\[45\%\] button{width:45%!important}}@media (max-width:856px){.max-\[856px\]\:sticky{position:-webkit-sticky!important;position:sticky!important}.max-\[856px\]\:bottom-0{bottom:0!important}.max-\[856px\]\:pt-8{padding-top:2rem!important}}@media (max-width:767px){.max-\[767px\]\:flex{display:flex!important}}@media (max-width:750px){.max-\[750px\]\:fixed{position:fixed!important}.max-\[750px\]\:bottom-0{bottom:0!important}.max-\[750px\]\:mt-\[20px\]{margin-top:20px!important}.max-\[750px\]\:py-4{padding-bottom:1rem!important}.max-\[750px\]\:pt-4,.max-\[750px\]\:py-4{padding-top:1rem!important}.max-\[750px\]\:pb-10{padding-bottom:2.5rem!important}.max-\[750px\]\:pr-3{padding-right:.75rem!important}}@media (max-width:480px){.max-\[480px\]\:h-\[64px\]{height:64px!important}}@media (max-width:400px){.max-\[400px\]\:mt-1{margin-top:.25rem!important}}@media (min-width:360px){.min-\[360px\]\:mt-\[76px\]{margin-top:76px!important}.min-\[360px\]\:mt-\[16px\]{margin-top:16px!important}.min-\[360px\]\:mt-\[24px\]{margin-top:24px!important}.min-\[360px\]\:h-\[116px\]{height:116px!important}.min-\[360px\]\:h-\[52px\]{height:52px!important}}@media (min-width:481px){.min-\[481px\]\:mt-\[32px\]{margin-top:32px!important}.min-\[481px\]\:h-\[262px\]{height:262px!important}}@media (min-width:640px){.sm\:ml-\[20\%\]{margin-left:20%!important}.sm\:mt-10{margin-top:2.5rem!important}.sm\:mb-2{margin-bottom:.5rem!important}.sm\:w-\[68\%\]{width:68%!important}}@media (min-width:684px){.min-\[684px\]\:mb-6{margin-bottom:1.5rem!important}.min-\[684px\]\:mb-\[20px\]{margin-bottom:20px!important}.min-\[684px\]\:h-\[262px\]{height:262px!important}.min-\[684px\]\:h-\[542px\]{height:542px!important}.min-\[684px\]\:bg-\[length\:100\%_234px\]{background-size:100% 234px!important}.min-\[684px\]\:py-6{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.min-\[684px\]\:px-6{padding-left:1.5rem!important;padding-right:1.5rem!important}.min-\[684px\]\:text-right{text-align:right!important}}@media (min-width:768px){.md\:col-span-2{grid-column:span 2/span 2!important}.md\:mt-0{margin-top:0!important}.md\:mb-8{margin-bottom:2rem!important}.md\:mr-6{margin-right:1.5rem!important}.md\:mt-6{margin-top:1.5rem!important}.md\:mb-6{margin-bottom:1.5rem!important}.md\:mt-2{margin-top:.5rem!important}.md\:mt-\[330px\]{margin-top:330px!important}.md\:flex{display:flex!important}.md\:w-full{width:100%!important}.md\:max-w-\[1272px\]{max-width:1272px!important}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))!important}.md\:grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))!important}.md\:gap-6{gap:1.5rem!important}.md\:gap-10{gap:2.5rem!important}.md\:bg-top{background-position:top!important}.md\:p-6{padding:1.5rem!important}.md\:py-5{padding-top:1.25rem!important;padding-bottom:1.25rem!important}.md\:px-5{padding-left:1.25rem!important;padding-right:1.25rem!important}.md\:py-12{padding-top:3rem!important;padding-bottom:3rem!important}.md\:px-0{padding-left:0!important;padding-right:0!important}.md\:px-6{padding-left:1.5rem!important;padding-right:1.5rem!important}.md\:pb-4{padding-bottom:1rem!important}.md\:pt-12{padding-top:3rem!important}.md\:text-3xl{font-size:1.875rem!important;line-height:2.25rem!important}.md\:text-2xl{font-size:1.5rem!important;line-height:2rem!important}.md\:text-sm{font-size:.875rem!important;line-height:1.25rem!important}.md\:leading-\[18px\]{line-height:18px!important}.\[\&\>div\>div\>div\>span\>span\>div\>div\>div\>ul\]\:min-\[768px\]\:px-5>div>div>div>span>span>div>div>div>ul{padding-left:1.25rem!important;padding-right:1.25rem!important}}@media (min-width:769px){.min-\[769px\]\:bottom-\[4\.2rem\]{bottom:4.2rem!important}.min-\[769px\]\:bottom-\[8\.2rem\]{bottom:8.2rem!important}.min-\[769px\]\:mt-\[120px\]{margin-top:120px!important}.min-\[769px\]\:mb-\[65px\]{margin-bottom:65px!important}.min-\[769px\]\:mt-\[24px\]{margin-top:24px!important}.min-\[769px\]\:mt-\[16px\]{margin-top:16px!important}.min-\[769px\]\:mb-\[12px\]{margin-bottom:12px!important}.min-\[769px\]\:mt-\[60px\]{margin-top:60px!important}.min-\[769px\]\:mb-\[36px\]{margin-bottom:36px!important}.min-\[769px\]\:mt-\[12px\]{margin-top:12px!important}.min-\[769px\]\:mb-\[16px\]{margin-bottom:16px!important}.min-\[769px\]\:h-\[124px\]{height:124px!important}.min-\[769px\]\:h-\[52px\]{height:52px!important}.min-\[769px\]\:h-\[36px\]{height:36px!important}.min-\[769px\]\:h-\[40px\]{height:40px!important}.min-\[769px\]\:h-\[431px\]{height:431px!important}.min-\[769px\]\:min-h-\[36px\]{min-height:36px!important}.min-\[769px\]\:w-\[80\%\]{width:80%!important}}@media (min-width:856px){.min-\[856px\]\:mt-8{margin-top:2rem!important}.min-\[856px\]\:mb-9{margin-bottom:2.25rem!important}.min-\[856px\]\:h-\[234px\]{height:234px!important}.min-\[856px\]\:h-\[158px\]{height:158px!important}.min-\[856px\]\:w-\[158px\]{width:158px!important}.min-\[856px\]\:grid-cols-\[repeat\(3\2c minmax\(254px\2c _1fr\)\)\]{grid-template-columns:repeat(3,minmax(254px,1fr))!important}.min-\[856px\]\:gap-6{gap:1.5rem!important}.min-\[856px\]\:pb-12{padding-bottom:3rem!important}}@media (min-width:924px){.min-\[924px\]\:z-\[2\]{z-index:2!important}.min-\[924px\]\:order-2{order:2!important}.min-\[924px\]\:order-1{order:1!important}.min-\[924px\]\:col-span-3{grid-column:span 3/span 3!important}.min-\[924px\]\:col-span-4{grid-column:span 4/span 4!important}.min-\[924px\]\:col-span-2{grid-column:span 2/span 2!important}.min-\[924px\]\:col-span-1{grid-column:span 1/span 1!important}.min-\[924px\]\:col-start-2{grid-column-start:2!important}.min-\[924px\]\:m-0{margin:0!important}.min-\[924px\]\:mt-\[16px\]{margin-top:16px!important}.min-\[924px\]\:mb-\[28px\]{margin-bottom:28px!important}.min-\[924px\]\:mt-\[84px\]{margin-top:84px!important}.min-\[924px\]\:mb-\[73px\]{margin-bottom:73px!important}.min-\[924px\]\:mb-\[12px\]{margin-bottom:12px!important}.min-\[924px\]\:mt-0{margin-top:0!important}.min-\[924px\]\:mt-\[24px\]{margin-top:24px!important}.min-\[924px\]\:mr-2\.5{margin-right:.625rem!important}.min-\[924px\]\:mt-6{margin-top:1.5rem!important}.min-\[924px\]\:mb-8{margin-bottom:2rem!important}.min-\[924px\]\:ml-\[1\%\]{margin-left:1%!important}.min-\[924px\]\:mt-8{margin-top:2rem!important}.min-\[924px\]\:mb-12{margin-bottom:3rem!important}.min-\[924px\]\:mb-3{margin-bottom:.75rem!important}.min-\[924px\]\:block{display:block!important}.min-\[924px\]\:flex{display:flex!important}.min-\[924px\]\:grid{display:grid!important}.min-\[924px\]\:hidden{display:none!important}.min-\[924px\]\:h-\[72px\]{height:72px!important}.min-\[924px\]\:h-\[186px\]{height:186px!important}.min-\[924px\]\:h-\[196px\]{height:196px!important}.min-\[924px\]\:w-\[25\.59\%\]{width:25.59%!important}.min-\[924px\]\:w-full{width:100%!important}.min-\[924px\]\:w-\[74\.41\%\]{width:74.41%!important}.min-\[924px\]\:w-\[74\.6\%\]{width:74.6%!important}.min-\[924px\]\:w-\[80\%\]{width:80%!important}.min-\[924px\]\:w-\[128px\]{width:128px!important}.min-\[924px\]\:w-4\/12{width:33.333333%!important}.min-\[924px\]\:w-\[130\%\]{width:130%!important}.min-\[924px\]\:w-\[94\.7\%\]{width:94.7%!important}.min-\[924px\]\:w-\[91\.7\%\]{width:91.7%!important}.min-\[924px\]\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))!important}.min-\[924px\]\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))!important}.min-\[924px\]\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))!important}.min-\[924px\]\:grid-cols-\[repeat\(4\2c minmax\(203px\2c _1fr\)\)\]{grid-template-columns:repeat(4,minmax(203px,1fr))!important}.min-\[924px\]\:grid-cols-\[repeat\(3\2c minmax\(203px\2c _1fr\)\)\]{grid-template-columns:repeat(3,minmax(203px,1fr))!important}.min-\[924px\]\:flex-row{flex-direction:row!important}.min-\[924px\]\:justify-start{justify-content:flex-start!important}.min-\[924px\]\:justify-end{justify-content:flex-end!important}.min-\[924px\]\:gap-6{gap:1.5rem!important}.min-\[924px\]\:bg-transparent{background-color:initial!important}}@media (min-width:992px){.min-\[992px\]\:w-\[25\.6\%\]{width:25.6%!important}.min-\[992px\]\:w-full{width:100%!important}.min-\[992px\]\:w-\[74\.4\%\]{width:74.4%!important}.min-\[992px\]\:grid-cols-\[repeat\(4\2c minmax\(220px\2c _1fr\)\)\]{grid-template-columns:repeat(4,minmax(220px,1fr))!important}.min-\[992px\]\:grid-cols-\[repeat\(3\2c minmax\(220px\2c _1fr\)\)\]{grid-template-columns:repeat(3,minmax(220px,1fr))!important}}@media (min-width:1010px){.min-\[1010px\]\:mr-4{margin-right:1rem!important}}@media (min-width:1011px){.min-\[1011px\]\:mr-6{margin-right:1.5rem!important}}@media (min-width:1024px){.lg\:hidden{display:none!important}.lg\:h-\[18rem\]{height:18rem!important}.lg\:pl-5{padding-left:1.25rem!important}}@media (min-width:1080px){.min-\[1080px\]\:w-\[25\.5\%\]{width:25.5%!important}.min-\[1080px\]\:w-full{width:100%!important}.min-\[1080px\]\:w-\[74\.5\%\]{width:74.5%!important}.min-\[1080px\]\:grid-cols-\[repeat\(4\2c minmax\(242px\2c _1fr\)\)\]{grid-template-columns:repeat(4,minmax(242px,1fr))!important}.min-\[1080px\]\:grid-cols-\[repeat\(3\2c minmax\(242px\2c _1fr\)\)\]{grid-template-columns:repeat(3,minmax(242px,1fr))!important}}@media (min-width:1272px){.min-\[1272px\]\:px-5{padding-left:1.25rem!important;padding-right:1.25rem!important}}@media (min-width:1440px){.min-\[1440px\]\:h-\[186px\]{height:186px!important}.min-\[1440px\]\:w-\[25\.4\%\]{width:25.4%!important}.min-\[1440px\]\:w-full{width:100%!important}.min-\[1440px\]\:w-\[186px\]{width:186px!important}.min-\[1440px\]\:grid-cols-\[repeat\(4\2c minmax\(290px\2c _1fr\)\)\]{grid-template-columns:repeat(4,minmax(290px,1fr))!important}.min-\[1440px\]\:grid-cols-\[repeat\(3\2c minmax\(290px\2c _1fr\)\)\]{grid-template-columns:repeat(3,minmax(290px,1fr))!important}}.\[\&\.navbar-on-scroll\]\:max-w-none.navbar-on-scroll{max-width:none!important}.\[\&_a\:focus\>span\:first-child\]\:outline-dashed a:focus>span:first-child{outline-style:dashed!important}.\[\&_a\:focus\>span\:first-child\]\:outline-1 a:focus>span:first-child{outline-width:1px!important}.\[\&_a\:focus-within\>span\:first-child\]\:outline-dashed a:focus-within>span:first-child{outline-style:dashed!important}.\[\&_a\:focus-within\>span\:first-child\]\:outline-1 a:focus-within>span:first-child{outline-width:1px!important}.\[\&_a\]\:whitespace-pre-line a{white-space:pre-line!important}.\[\&_a\]\:border-none a{border-style:none!important}.\[\&_a\]\:text-\[revert\] a{color:revert!important}.\[\&_a\]\:text-black a{--tw-text-opacity:1!important;color:rgb(0 0 0/var(--tw-text-opacity))!important}.\[\&_a\]\:underline a{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.\[\&_p\]\:w-full p{width:100%!important}.\[\&_p\]\:break-all p{word-break:break-all!important}.\[\&_p\]\:pr-\[20px\] p{padding-right:20px!important}.\[\&_p\]\:text-red-500 p{--tw-text-opacity:1!important;color:rgb(239 68 68/var(--tw-text-opacity))!important}.\[\&_input\]\:placeholder\:font-\[Verizon-NHG-eDS\] input::placeholder{font-family:Verizon-NHG-eDS!important}.\[\&_input\]\:placeholder\:text-\[\#6F7171\] input::placeholder{--tw-text-opacity:1!important;color:rgb(111 113 113/var(--tw-text-opacity))!important}.\[\&_span\>span\]\:text-\[0\.85rem\] span>span{font-size:.85rem!important}.\[\&_span\>span\]\:text-red-500 span>span{--tw-text-opacity:1!important;color:rgb(239 68 68/var(--tw-text-opacity))!important}.\[\&_path\]\:fill-white path{fill:#fff!important}.\[\&\>\*\:nth-child\(2\)\]\:ml-3>:nth-child(2){margin-left:.75rem!important}.\[\&_a\:focus\]\:outline-dashed a:focus{outline-style:dashed!important}.\[\&_a\:focus\]\:outline-1 a:focus{outline-width:1px!important}.\[\&_a\:focus\]\:outline-black a:focus{outline-color:#000!important}@media (min-width:924px){.min-\[924px\]\:\[\&_button\]\:w-\[39\%\] button{width:39%!important}}@media (min-width:1024px){.lg\:mx-6{margin-left:1.5rem!important;margin-right:1.5rem!important}.lg\:mt-\[30px\]{margin-top:30px!important}.lg\:mt-\[260px\]{margin-top:260px!important}.lg\:h-\[300px\]{height:300px!important}.lg\:h-\[230px\]{height:230px!important}.lg\:w-\[148px\]{width:148px!important}.lg\:w-\[136px\]{width:136px!important}.lg\:rounded-\[20px\]{border-radius:20px!important}.lg\:p-6{padding:1.5rem!important}.lg\:px-6{padding-left:1.5rem!important;padding-right:1.5rem!important}}@media (min-width:1080px){.min-\[1080px\]\:w-\[94\.9\%\]{width:94.9%!important}}@media (min-width:1128px){.min-\[1128px\]\:mb-\[28px\]{margin-bottom:28px!important}.min-\[1128px\]\:mb-\[72px\]{margin-bottom:72px!important}}@media (min-width:1146px){.min-\[1146px\]\:mb-\[45px\]{margin-bottom:45px!important}.min-\[1146px\]\:mb-\[88px\]{margin-bottom:88px!important}}@media (min-width:1280px){.xl\:px-0{padding-left:0!important;padding-right:0!important}}@media (min-width:1440px){.min-\[1440px\]\:bottom-\[4\.2rem\]{bottom:4.2rem!important}.min-\[1440px\]\:bottom-\[8\.2rem\]{bottom:8.2rem!important}.min-\[1440px\]\:h-\[262px\]{height:262px!important}.min-\[1440px\]\:w-\[93\.6\%\]{width:93.6%!important}}.\[\&_path\]\:stroke-black path{stroke:#000!important}.\[\&\:\:-webkit-scrollbar\]\:w-1::-webkit-scrollbar{width:.25rem!important}.\[\&\:\:-webkit-scrollbar\]\:bg-\[\#D8DADA\]::-webkit-scrollbar{--tw-bg-opacity:1!important;background-color:rgb(216 218 218/var(--tw-bg-opacity))!important}.\[\&\:\:-webkit-scrollbar-thumb\]\:rounded::-webkit-scrollbar-thumb{border-radius:.25rem!important}.\[\&\:\:-webkit-scrollbar-thumb\]\:bg-\[\#6F7171\]::-webkit-scrollbar-thumb{--tw-bg-opacity:1!important;background-color:rgb(111 113 113/var(--tw-bg-opacity))!important}.\[\&_li\]\:before\:hidden li:before{content:var(--tw-content)!important;display:none!important}.\[\&_li\:not\(\:first-child\)\]\:pt-6 li:not(:first-child){padding-top:1.5rem!important}.\[\&_li\>span\[data-testid\=\'test-child-wrapper\'\]\]\:break-all li>span[data-testid=test-child-wrapper]{word-break:break-all!important}.\[\&\:focus\]\:outline-dashed:focus{outline-style:dashed!important}.\[\&\:focus\]\:outline-1:focus{outline-width:1px!important}.\[\&\:focus\]\:outline-black:focus{outline-color:#000!important}.\[\&\>button\]\:cursor-default>button{cursor:default!important}.\[\&\>span\]\:text-xs>span{font-size:.75rem!important;line-height:1rem!important}@media (min-width:768px){.\[\&\>span\]\:md\:text-sm>span{font-size:.875rem!important;line-height:1.25rem!important}}.\[\&\>div\>div\>div\>span\>span\>div\>div\>div\>ul\]\:px-4>div>div>div>span>span>div>div>div>ul{padding-left:1rem!important;padding-right:1rem!important}.\[\&\>img\]\:max-h-\[100\%\]>img{max-height:100%!important}.\[\&\>img\]\:max-w-\[100\%\]>img{max-width:100%!important}@media (max-width:683px){.max-\[683px\]\:\[\&_h2\#gridwallProductName\]\:mt-\[4px\] h2#gridwallProductName{margin-top:4px!important}.max-\[683px\]\:\[\&_h2\#gridwallProductName\]\:mt-7 h2#gridwallProductName{margin-top:1.75rem!important}}@media (min-width:684px){.min-\[684px\]\:\[\&_h2\#gridwallProductName\]\:mt-\[4px\] h2#gridwallProductName{margin-top:4px!important}.min-\[684px\]\:\[\&_h2\#gridwallProductName\]\:mt-8 h2#gridwallProductName{margin-top:2rem!important}}@media (min-width:768px){.md\:sticky{position:-webkit-sticky!important;position:sticky!important}.md\:left-\[-26px\]{left:-26px!important}.md\:top-\[10px\]{top:10px!important}.md\:top-0{top:0!important}.md\:col-span-6{grid-column:span 6/span 6!important}.md\:col-span-9{grid-column:span 9/span 9!important}.md\:col-start-1{grid-column-start:1!important}.md\:mr-8{margin-right:2rem!important}.md\:mb-12{margin-bottom:3rem!important}.md\:mr-4{margin-right:1rem!important}.md\:ml-6{margin-left:1.5rem!important}.md\:mr-14{margin-right:3.5rem!important}.md\:ml-0{margin-left:0!important}.md\:mr-0{margin-right:0!important}.md\:block{display:block!important}.md\:inline{display:inline!important}.md\:hidden{display:none!important}.md\:h-\[100\%\]{height:100%!important}.md\:h-\[240px\]{height:240px!important}.md\:h-\[calc\(70vh_-_97px\)\]{height:calc(70vh - 97px)!important}.md\:h-\[280px\]{height:280px!important}.md\:h-\[60vh\]{height:60vh!important}.md\:h-\[47px\]{height:47px!important}.md\:h-48{height:12rem!important}.md\:h-5{height:1.25rem!important}.md\:max-h-\[100\%\]{max-height:100%!important}.md\:w-\[328px\]{width:328px!important}.md\:w-4\/5{width:80%!important}.md\:w-\[596px\]{width:596px!important}.md\:w-96{width:24rem!important}.md\:w-\[70px\]{width:70px!important}.md\:w-9\/12{width:75%!important}.md\:w-48{width:12rem!important}.md\:max-w-\[380px\]{max-width:380px!important}.md\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))!important}.md\:grid-rows-1{grid-template-rows:repeat(1,minmax(0,1fr))!important}.md\:content-start{align-content:flex-start!important}.md\:items-start{align-items:flex-start!important}.md\:justify-start{justify-content:flex-start!important}.md\:justify-between{justify-content:space-between!important}.md\:gap-11{gap:2.75rem!important}.md\:self-start{align-self:flex-start!important}.md\:border-0{border-width:0!important}.md\:border-l{border-left-width:1px!important}.md\:p-8{padding:2rem!important}.md\:p-0{padding:0!important}.md\:p-4{padding:1rem!important}.md\:py-6{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.md\:py-8{padding-top:2rem!important;padding-bottom:2rem!important}.md\:py-0{padding-top:0!important;padding-bottom:0!important}.md\:px-3{padding-left:.75rem!important;padding-right:.75rem!important}.md\:pb-12{padding-bottom:3rem!important}.md\:pl-8{padding-left:2rem!important}.md\:pb-0{padding-bottom:0!important}.md\:pr-6{padding-right:1.5rem!important}.md\:pl-4{padding-left:1rem!important}.md\:text-left{text-align:left!important}.md\:text-xl{font-size:1.25rem!important;line-height:1.75rem!important}.md\:text-4xl{font-size:2.25rem!important;line-height:2.5rem!important}.md\:text-5xl{font-size:3rem!important;line-height:1!important}.md\:text-base{font-size:1rem!important;line-height:1.5rem!important}.md\:text-\[32px\]{font-size:32px!important}.md\:text-\[64px\]{font-size:64px!important}.md\:leading-6{line-height:1.5rem!important}.md\:leading-9{line-height:2.25rem!important}.md\:leading-7{line-height:1.75rem!important}.md\:text-\[\#6F7171\]{--tw-text-opacity:1!important;color:rgb(111 113 113/var(--tw-text-opacity))!important}@media not all and (min-width:1280px){.md\:max-xl\:px-4{padding-left:1rem!important;padding-right:1rem!important}}}@media (min-width:856px){.min-\[856px\]\:bottom-\[15\.1rem\]{bottom:15.1rem!important}.min-\[856px\]\:h-\[106px\]{height:106px!important}.min-\[856px\]\:w-\[106px\]{width:106px!important}}@media (min-width:1024px){.lg\:mt-0{margin-top:0!important}.lg\:mr-4{margin-right:1rem!important}.lg\:ml-6{margin-left:1.5rem!important}.lg\:flex{display:flex!important}.lg\:h-\[38vh\]{height:38vh!important}.lg\:h-\[calc\(38vh_-_150px\)\]{height:calc(38vh - 150px)!important}.lg\:h-60{height:15rem!important}.lg\:w-\[465px\]{width:465px!important}.lg\:w-60{width:15rem!important}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))!important}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))!important}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))!important}.lg\:grid-rows-1{grid-template-rows:repeat(1,minmax(0,1fr))!important}.lg\:flex-row{flex-direction:row!important}.lg\:content-start{align-content:flex-start!important}.lg\:items-start{align-items:flex-start!important}.lg\:justify-start{justify-content:flex-start!important}.lg\:border-0{border-width:0!important}.lg\:border-l{border-left-width:1px!important}.lg\:p-0{padding:0!important}.lg\:p-8{padding:2rem!important}.lg\:py-8{padding-top:2rem!important;padding-bottom:2rem!important}.lg\:px-3{padding-left:.75rem!important;padding-right:.75rem!important}.lg\:py-0{padding-top:0!important;padding-bottom:0!important}.lg\:pl-8{padding-left:2rem!important}.lg\:pt-0{padding-top:0!important}.lg\:text-left{text-align:left!important}.lg\:text-\[64px\]{font-size:64px!important}}@media (min-width:1030px){.min-\[1030px\]\:h-\[63vh\]{height:63vh!important}}@media (min-width:1280px){.xl\:h-\[calc\(60vh_-_150px\)\]{height:calc(60vh - 150px)!important}.xl\:min-h-\[calc\(70vh-395px\)\]{min-height:calc(70vh - 395px)!important}}@media (min-width:1440px){.min-\[1440px\]\:bottom-\[13\.5rem\]{bottom:13.5rem!important}.min-\[1440px\]\:h-\[106px\]{height:106px!important}.min-\[1440px\]\:w-\[106px\]{width:106px!important}}@media (min-width:1536px){.\32xl\:h-\[260px\]{height:260px!important}}.\[\&_li\]\:mb-4 li{margin-bottom:1rem!important}.\[\&\>button\]\:absolute>button{position:absolute!important}.\[\&\>button\]\:bottom-0>button{bottom:0!important}.\[\&\>span\]\:block>span{display:block!important}.\[\&\>span\]\:h-\[20px\]>span{height:20px!important}.\[\&\>span\]\:leading-7>span{line-height:1.75rem!important}.\[\&\>img\]\:max-h-full>img{max-height:100%!important}.\[\&\>img\]\:max-w-full>img{max-width:100%!important}@media (max-width:683px){.max-\[683px\]\:\[\&_div\#preOrderDetails\]\:mt-2 div#preOrderDetails{margin-top:.5rem!important}}@media (min-width:684px){.min-\[684px\]\:\[\&_div\#preOrderDetails\]\:mt-3 div#preOrderDetails{margin-top:.75rem!important}}.\[\&_\#quickViewBtn\]\:mt-7 #quickViewBtn{margin-top:1.75rem!important}.\[\&_span\#reviewsCount\]\:pt-\[2px\] span#reviewsCount{padding-top:2px!important}.\[\&\>nav\>ol\>li\>span\]\:font-normal>nav>ol>li>span{font-weight:400!important}.\[\&\>div\>div\>div\>label\>span\]\:font-bold>div>div>div>label>span{font-weight:700!important}.\[\&_ul\]\:mx-auto ul{margin-left:auto!important;margin-right:auto!important}.\[\&_ul\]\:max-w-\[1227px\] ul{max-width:1227px!important}.\[\&_ul\]\:list-disc ul{list-style-type:disc!important}.\[\&_ul\]\:pl-6 ul{padding-left:1.5rem!important}.\[\&_ul\]\:pl-4 ul{padding-left:1rem!important}@media (max-width:625px){.\[\&_ul\]\:max-\[625px\]\:pl-4 ul{padding-left:1rem!important}.\[\&_ul\]\:max-\[625px\]\:pt-\[30px\] ul{padding-top:30px!important}}.\[\&\>div\>div\]\:w-\[auto\]>div>div{width:auto!important}.\[\&\>a\]\:ml-4>a{margin-left:1rem!important}.\[\&\>a\]\:flex>a{display:flex!important}.\[\&\>a\]\:items-center>a{align-items:center!important}.\[\&\>a\]\:justify-center>a{justify-content:center!important}.\[\&_label_p\]\:font-\[Verizon-NHG-eDs\] label p{font-family:Verizon-NHG-eDs!important}.\[\&_label_p\]\:text-base label p{font-size:1rem!important;line-height:1.5rem!important}.\[\&_\#config-wrapper\]\:items-start #config-wrapper{align-items:flex-start!important}.\[\&_\#config-wrapper\]\:items-end #config-wrapper{align-items:flex-end!important}.\[\&_\#config-wrapper\]\:text-left #config-wrapper{text-align:left!important}.\[\&_\#config-wrapper\]\:text-right #config-wrapper{text-align:right!important}.\[\&_\#config-wrapper\]\:text-black #config-wrapper{--tw-text-opacity:1!important;color:rgb(0 0 0/var(--tw-text-opacity))!important}.\[\&_\#pricetext\]\:items-end #pricetext{align-items:flex-end!important}.\[\&_\#pricetext\]\:text-right #pricetext{text-align:right!important}.\[\&_ul_li\]\:py-2 ul li{padding-top:.5rem!important;padding-bottom:.5rem!important}.\[\&_ol\]\:list-decimal ol{list-style-type:decimal!important}.\[\&_ol\]\:pl-4 ol{padding-left:1rem!important}.\[\&_ol_li\]\:py-1 ol li{padding-top:.25rem!important;padding-bottom:.25rem!important}.\[\&_ol_li\]\:text-\[11px\] ol li{font-size:11px!important}.\[\&\>span\>a\]\:underline>span>a{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.\[\&\>span\>ol\]\:list-decimal>span>ol{list-style-type:decimal!important}.\[\&\>span\>ol\]\:pl-4>span>ol{padding-left:1rem!important}.\[\&\>span\>ol\>li\]\:py-1>span>ol>li{padding-top:.25rem!important;padding-bottom:.25rem!important}.\[\&\>span\>ol\>li\]\:text-\[11px\]>span>ol>li{font-size:11px!important}.\[\&\>span_a\]\:underline>span a{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.\[\&\>ul\]\:list-disc>ul{list-style-type:disc!important}.\[\&\>ul\]\:py-4>ul{padding-top:1rem!important;padding-bottom:1rem!important}.\[\&\>ul\>li\]\:ml-4>ul>li{margin-left:1rem!important}.\[\&\>ul\>li\]\:mb-4>ul>li{margin-bottom:1rem!important}.\[\&_\#verizon-dollors-container\]\:my-0 #verizon-dollors-container{margin-top:0!important;margin-bottom:0!important}.\[\&_\#verizon-dollors-title\]\:hidden #verizon-dollors-title{display:none!important}.\[\&_\#verizon-dollors-subtext\]\:mt-0 #verizon-dollors-subtext{margin-top:0!important}.\[\&_\#verizon-dollors-subtext\]\:mb-6 #verizon-dollors-subtext{margin-bottom:1.5rem!important}.\[\&_\#verizon-dollors-subtext\]\:px-3 #verizon-dollors-subtext{padding-left:.75rem!important;padding-right:.75rem!important}.\[\&_\#verizon-dollors-subtext\]\:py-4 #verizon-dollors-subtext{padding-top:1rem!important;padding-bottom:1rem!important}.\[\&_\#verizon-dollors-subtext\>span\]\:text-xs #verizon-dollors-subtext>span{font-size:.75rem!important;line-height:1rem!important}.\[\&_div\[id\=\'NOPROMO\'\]_label\]\:py-5 div[id=NOPROMO] label{padding-top:1.25rem!important;padding-bottom:1.25rem!important}.\[\&\>span\>span\>a\]\:underline>span>span>a{-webkit-text-decoration-line:underline!important;text-decoration-line:underline!important}.\[\&\>span\>span\>a\]\:underline-offset-2>span>span>a{text-underline-offset:2px!important}
</style>


<!-- CSS Code Start -->

<!-- CSS Code End -->

<style data-styled="active" data-styled-version="5.3.6"></style>

<!-- <link rel="stylesheet" href="/smartphones/prepaid/etc/clientlibs/vcg/digital/responsivegrid.css" type="text/css"> -->

<script>
var disableGnavPromoBanner = true;
</script>

<!--  -->
<link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-16e-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/google-pixel-10a-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/motorola-moto-g-play-2026-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-a16-5g-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-17-pro-max-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-14-plus-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-17-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/motorola-razr-2026-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-air-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/apple-iphone-17e-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-a17-5g-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/motorola-razr-fifa-world-cup-26-edition-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-a37-5g-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-plus-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/orbic-trophy-5g-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-ultra-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/samsung-galaxy-z-fold7-prepaid/" as="document"><link rel="prefetch" href="/smartphones/prepaid/smartphones/tcl-k33-5g-prepaid/" as="document"></head>
<body class="react-page page basicpage">
<div id="SmartBanner"></div>
<div id="GWBanner"></div>
<!--<div id="vzw-gn" role="banner" class="is-hidden"></div>-->
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
</style></div>



     </div>
</header>
<div data-testid="Gridwall" class="GridWall__GWWrapper-sc-1pqhpcm-0 dYaGjt"><span class="sr-only" aria-live="polite"></span><section role="main" id="mainGWSection"><div id="grid" class="grid grid-cols-1 max-w-[1272px] mx-auto"><div id="row" class="w-full h-full px-4 md:px-5"><div id="breadCrumb" data-testid="breadcrumbId" class="BreadCrumb__BreadCrumbWrapper-sc-53tg9b-0 iBfzAc pt-4 pb-6 min-[856px]:pb-12"><div class="BreadCrumb__BreadCrumbChatWrapper-sc-53tg9b-1 bVINVp"><nav aria-label="Breadcrumb" class="StyledNav-VDS__sc-hdba2y-0 jkQsCF"><ol class="StyledBreadcrumbList-VDS__sc-hdba2y-1 imYBcV"><li class="StyledBreadcrumb-VDS__sc-xojoro-2 hXJtIM"><a href="/smartphones/prepaid/" aria-label="Home" role="link" tabindex="0" color="#000000" class="StyledAnchor-VDS__sc-6ss44u-0 bKFeiT">Home</a><div aria-hidden="true" tabindex="-1" class="SlashWrapper-VDS__sc-xojoro-0 bFzdLC"><span aria-hidden="true" tabindex="-1" color="#000000" class="StyledSlash-VDS__sc-xojoro-1 kASZsB">/</span></div></li><li class="StyledBreadcrumb-VDS__sc-xojoro-2 hXJtIM"><a href="/smartphones/prepaid/prepaid/" aria-label="prepaid" role="link" tabindex="0" color="#000000" class="StyledAnchor-VDS__sc-6ss44u-0 bKFeiT">Prepaid</a><div aria-hidden="true" tabindex="-1" class="SlashWrapper-VDS__sc-xojoro-0 bFzdLC"><span aria-hidden="true" tabindex="-1" color="#000000" class="StyledSlash-VDS__sc-xojoro-1 kASZsB">/</span></div></li><li class="StyledBreadcrumb-VDS__sc-xojoro-2 hXJtIM"><span aria-hidden="false" class="StyledTypography-VDS__sc-15sxhse-0 kJscTu StyledBody-VDS__sc-1x4uqr-0 jPQbXC"><span aria-current="page">Prepaid Smartphones</span></span></li></ol></nav><div class="BreadCrumb__ChatAndC2CWrapper-sc-53tg9b-2 iymaJF"><div></div></div></div><div class="mt-4 min-[856px]:mt-8"><h1 aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 fKNdkO StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="text-2xl md:text-3xl"><span class="BreadCrumb__TextTransformTitle-sc-53tg9b-5 gmStcy">Prepaid Smartphones</span></span></h1></div></div></div></div><div class="px-6 hidden mt-3" id="mvaOneSearchSkeleton"><div id="content"><form class="MVAOneSearchSkeleton__SearchBox-sc-1lzr7az-0 iTEIDJ" aria-live="polite" action="" mode="light" width="auto" src="" id="search_box" data-airgap-id="82"><div class="flex grow shrink basis-0 relative"><input class="MVAOneSearchSkeleton__SearchInput-sc-1lzr7az-1 ONqaQ font-extrabold tracking-wide search-input" name="q" placeholder="What are you looking for?" type="search" id="search_box_input" aria-label="" value=""><button class="MVAOneSearchSkeleton__Button-sc-1lzr7az-2 cTiTKF clear-button hidden" type="reset" aria-label="Clear Search" name="reset" width="auto"></button><span style="padding-left: 30px; padding-top: 5px;"><svg role="img" aria-hidden="false" aria-label="search icon" viewBox="0 0 21.6 21.6" fill="#000" class="StyledSVG-VDS__sc-3zla24-0 hJZMuA"><path d="M19.75,19l-6-6a6.76,6.76,0,1,0-.79.79l6,6ZM8.6,14.23A5.63,5.63,0,1,1,14.23,8.6,5.63,5.63,0,0,1,8.6,14.23Z"></path></svg></span></div></form></div></div><div id="tabFilterWrapper"><div id="header-container" data-testid="testTabFilterId" class="TabFilter__TabsWrapper-sc-1vcd9ht-0 gmWVqb [&amp;&gt;div&gt;div&gt;div&gt;span&gt;span&gt;div&gt;div&gt;div&gt;ul]:px-4 [&amp;&gt;div&gt;div&gt;div&gt;span&gt;span&gt;div&gt;div&gt;div&gt;ul]:min-[768px]:px-5 navbar-on-scroll"><div id="grid" class="grid grid-cols-1 max-w-[1272px] mx-auto bg-white"><div id="row" class="w-full h-full flex"><div orientation="horizontal" class="TabsWrapper-VDS__sc-1ggw8n4-0 jHnBEf"><span class="FlexColWrapper-VDS__sc-1ggw8n4-1 llhJEk"><span orientation="horizontal" class="FlexRowWrapper-VDS__sc-1ggw8n4-2 jwPJyg"><div orientation="horizontal" width="25%" class="SideNavigation-VDS__sc-1ggw8n4-6 elMxUZ"><div class="StickyWrapper-VDS__sc-1ggw8n4-9 bjaXZD"><div><ul overflow="scroll" role="tablist" class="StyledTabList-VDS__sc-1ggw8n4-11 epMwhu"><li id="tab_All_0" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="All_0" role="tab" aria-selected="true" aria-controls="tabpanel-All_0" tabindex="0" width="auto" data-analyticstrack="tab-All" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;all&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              pf : &quot;all&quot;
          }
        }" data-track-ignore="All" class="StyledTabButton-VDS__sc-xumbrb-0 ecxzMh"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 fbhBkz StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">All</span></button></li><li id="tab_Apple_1" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="Apple_1" role="tab" aria-selected="false" aria-controls="tabpanel-Apple_1" tabindex="-1" width="auto" data-analyticstrack="tab-Apple" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;apple&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;apple&quot;
          }
        }" data-track-ignore="Apple" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Apple</span></button></li><li id="tab_Samsung_2" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="Samsung_2" role="tab" aria-selected="false" aria-controls="tabpanel-Samsung_2" tabindex="-1" width="auto" data-analyticstrack="tab-Samsung" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;samsung&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;samsung&quot;
          }
        }" data-track-ignore="Samsung" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Samsung</span></button></li><li id="tab_Google_3" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="Google_3" role="tab" aria-selected="false" aria-controls="tabpanel-Google_3" tabindex="-1" width="auto" data-analyticstrack="tab-Google" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;google&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;google&quot;
          }
        }" data-track-ignore="Google" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Google</span></button></li><li id="tab_Motorola_4" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="Motorola_4" role="tab" aria-selected="false" aria-controls="tabpanel-Motorola_4" tabindex="-1" width="auto" data-analyticstrack="tab-Motorola" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;motorola&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;motorola&quot;
          }
        }" data-track-ignore="Motorola" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Motorola</span></button></li><li id="tab_TCL_5" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="TCL_5" role="tab" aria-selected="false" aria-controls="tabpanel-TCL_5" tabindex="-1" width="auto" data-analyticstrack="tab-TCL" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;tcl&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;tcl&quot;
          }
        }" data-track-ignore="TCL" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">TCL</span></button></li><li id="tab_Kyocera_6" role="presentation" class="StyledTab-VDS__sc-eyuyma-0 hvCsuZ"><button id="Kyocera_6" role="tab" aria-selected="false" aria-controls="tabpanel-Kyocera_6" tabindex="-1" width="auto" data-analyticstrack="tab-Kyocera" data-track="{
          &quot;type&quot; : &quot;searchFilters&quot;,
          &quot;name&quot; : &quot;kyocera&quot;,
          &quot;fields&quot; : {
              &quot;na&quot; : &quot;top&quot;,
              br : &quot;kyocera&quot;
          }
        }" data-track-ignore="Kyocera" class="StyledTabButton-VDS__sc-xumbrb-0 ioWcLF"><span aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cheLIj StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Kyocera</span></button></li></ul></div></div></div><div role="tabpanel" orientation="horizontal" id="tabpanel-All_0" tabindex="0" class="ContentWrapper-VDS__sc-1ggw8n4-4 fzNSIg"></div></span></span></div></div></div></div><div id="filter-wrapper" data-testid="filterAppliedTestID" class="FiltersApplied__FilterWrapper-sc-16kcvcd-0 bLVJtM bg-[#F6F6F6]"><div id="grid" class="grid grid-cols-1 max-w-[1272px] mx-auto"><div id="row" class="w-full h-full flex"><div id="filters" class="min-[924px]:mt-6 min-[924px]:mb-8 w-full mb-4"><div data-testid="resultWrapper" class="FiltersApplied__FilterResultWrapper-sc-16kcvcd-1 dKLyLh hasFilters false"><div class="min-[924px]:grid-cols-4 col-span-4  grid gap-3 min-[924px]:gap-6 grid-cols-2 grid-rows-1 w-full py-4 px-4 md:px-5" data-testid="gridwall-filter-buttons"><div class="min-[924px]:col-span-3 flex justify-start min-[924px]:justify-end items-center"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 cKLDUQ StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">131 results</p><p aria-live="polite" aria-hidden="true" aria-atomic="true" class="sr-only" id="resultCallout">131 results</p></div><div class="false block min-[924px]:hidden flex justify-end btn-container [&amp;&gt;*:nth-child(2)]:ml-3"><button data-testid="filter_btn" display="flex" width="auto" aria-label="Filter" role="button" aria-disabled="false" tabindex="0" class="StyledButton-VDS__sc-bc3yhn-2 gqSnIK"><span class="HitArea-VDS__sc-bc3yhn-0 dCkSrl"></span><span tabindex="-1" display="flex" width="auto" class="StyledChildWrapper-VDS__sc-bc3yhn-1 BPzKK">Filter</span></button><button data-testid="small-button" display="flex" width="auto" aria-label="Sort" role="button" aria-disabled="false" tabindex="0" class="StyledButton-VDS__sc-bc3yhn-2 gqSnIK"><span class="HitArea-VDS__sc-bc3yhn-0 dCkSrl"></span><span tabindex="-1" display="flex" width="auto" class="StyledChildWrapper-VDS__sc-bc3yhn-1 BPzKK">Sort</span></button></div><div class="hidden min-[924px]:block min-[924px]:col-span-1 visible"><div width="100%" class="ComponentContainer-VDS__sc-h8azzi-2 evzdes sby-sort pl-2"><div id="sby" class="StyledContainer-VDS__sc-h8azzi-3 dIikte"><span class="FlexedRowContainer-VDS__sc-h8azzi-6 dleHLN"><span class="FlexedColContainer-VDS__sc-h8azzi-7 gXPzic"><div height="2.75rem" width="100%" class="SelectContainer-VDS__sc-h8azzi-0 cMCqGL"><label tabindex="-1" for="cmptsawxm00293b9jl0dbqlwj" class="InlineLabel-VDS__sc-h8azzi-5 dLcrWP"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 fbhBkz StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Sort by:</p></label><select label="Sort by:" id="cmptsawxm00293b9jl0dbqlwj" class="SelectEl-VDS__sc-h8azzi-1 iWOpuL sby-sort pl-2" data-testid="sort" data-track="{&quot;type&quot;:&quot;link&quot;, &quot;name&quot;:&quot;sort&quot;}" data-analyticstrack="gridwall-filter-dropdown" height="2.75rem" width="100%" aria-label="Sort by: required" tabindex="0" role="listbox"><option data-track="true" data-analyticstrack="gridwall-sort-by-dropdown-Best sellers" value="sku_units_sold1_i desc" aria-label="Best sellers item 1 of 5 selected" role="option">Best sellers</option><option data-track="true" data-analyticstrack="gridwall-sort-by-dropdown-Newest" value="product_start_date_dt desc" aria-label="Newest item 2 of 5 " role="option">Newest</option><option data-track="true" data-analyticstrack="gridwall-sort-by-dropdown-Price low to high" value="sku_preferred_frp_price_f asc" aria-label="Price low to high item 3 of 5 " role="option">Price low to high</option><option data-track="true" data-analyticstrack="gridwall-sort-by-dropdown-Price high to low" value="sku_preferred_frp_price_f desc" aria-label="Price high to low item 4 of 5 " role="option">Price high to low</option><option data-track="true" data-analyticstrack="gridwall-sort-by-dropdown-Featured" value="" aria-label="Featured item 5 of 5 " role="option">Featured</option></select><span tabindex="-1" height="2.75rem" aria-hidden="true" class="IconContainer-VDS__sc-h8azzi-4 bJjnZW"><div tabindex="-1" aria-hidden="true" aria-label="caret-down icon" class="IconSVGWrapper-VDS__sc-h8azzi-8 ccdCZo"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"></polygon></svg></div></span></div></span></span></div></div></div></div></div></div></div></div></div></div><div class="bg-[#F6F6F6]" id="productListContainer"><div id="grid" class="grid grid-cols-1 max-w-[1272px] mx-auto "><div id="row" class="w-full h-full px-4 md:px-5 flex"><div id="leftRailContainer" class="hidden w-full h-full min-[924px]:flex min-[924px]:w-[25.59%] visible min-[992px]:w-[25.6%] visible min-[1080px]:w-[25.5%] visible min-[1440px]:w-[25.4%] visible"><div data-testid="left-rail-filter-container" class="flex flex-col top-[60px] sticky w-full" style="max-height: calc(-60px + 100vh);"><div id="accordionContainer" class="[&amp;::-webkit-scrollbar]:w-1 [&amp;::-webkit-scrollbar]:bg-[#D8DADA] [&amp;::-webkit-scrollbar-thumb]:bg-[#6F7171] [&amp;::-webkit-scrollbar-thumb]:rounded overflow-y-auto overflow-x-hidden min-[924px]:w-[94.7%] min-[1080px]:w-[94.9%]"><div aria-label="Filter" role="group" class="[&amp;_li]:before:hidden [&amp;_li:not(:first-child)]:pt-6 [&amp;_li&gt;span[data-testid='test-child-wrapper']]:break-all pl-[4px] min-[924px]:w-[91.7%] min-[1440px]:w-[93.6%]"><span id="accordian-content"><span id="leftRail-title"><h2 aria-hidden="false" id="leftRailFilterHeader" class="StyledTypography-VDS__sc-5k55co-0 etccjk StyledTitle-VDS__sc-155xzr0-0 kiCJhW">Filter</h2><div class="mb-4"></div></span><div class="AccordionWrapper-VDS__sc-1xsaiao-0 bivghh"><div class="AccordionList-VDS__sc-1xsaiao-1 kpUJKw"><div class="LeftAccordian__LeftAccWrapper-sc-xjixpk-0"><div class="ComponentWrapper-VDS__sc-h2bqgc-0 igdPGf"><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div><div class="StyledAccordionItem-VDS__sc-h2bqgc-1 mCOTK"><div class="WrapperDiv-VDS__sc-19osi3m-3 jFGcii"><button class="StyledAccordionButton-VDS__sc-19osi3m-2 kZpcqO accordionButton" aria-expanded="false" type="button" tabindex="0"><div class="TitleWrapper-VDS__sc-1fnnlnf-0 dUuzCi"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 bWSyYu StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="font-normal">Brand </span></p></div><span class="TriggerIconWrapper-VDS__sc-19osi3m-1 fCdskV toggleIconWrapper" tabindex="-1" aria-hidden="true"><div tabindex="-1" aria-hidden="true" class="TriggerIconSVGWrapper-VDS__sc-19osi3m-4 koiILj"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"></polygon></svg></div></span></button></div><div tabindex="-1" role="region" aria-hidden="false" class="StyledAccordionDetail-VDS__sc-19df7fd-1 bkZejI" id="accordionDetail_null" aria-labelledby="accordionHeader_null"><div aria-hidden="true" class="rah-static rah-static--height-zero VDS__" style="height: 0px; overflow: hidden; transition: height 350ms;"><div style="transition: opacity 350ms; opacity: 0; display: none;"><div class="ChildWrapper-VDS__sc-19df7fd-0 cPhVkd"><div></div></div></div></div></div></div><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div></div></div><div class="LeftAccordian__LeftAccWrapper-sc-xjixpk-0"><div class="ComponentWrapper-VDS__sc-h2bqgc-0 igdPGf"><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div><div class="StyledAccordionItem-VDS__sc-h2bqgc-1 mCOTK"><div class="WrapperDiv-VDS__sc-19osi3m-3 jFGcii"><button class="StyledAccordionButton-VDS__sc-19osi3m-2 kZpcqO accordionButton" aria-expanded="false" type="button" tabindex="0"><div class="TitleWrapper-VDS__sc-1fnnlnf-0 dUuzCi"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 bWSyYu StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="font-normal">OS </span></p></div><span class="TriggerIconWrapper-VDS__sc-19osi3m-1 fCdskV toggleIconWrapper" tabindex="-1" aria-hidden="true"><div tabindex="-1" aria-hidden="true" class="TriggerIconSVGWrapper-VDS__sc-19osi3m-4 koiILj"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"></polygon></svg></div></span></button></div><div tabindex="-1" role="region" aria-hidden="false" class="StyledAccordionDetail-VDS__sc-19df7fd-1 bkZejI" id="accordionDetail_null" aria-labelledby="accordionHeader_null"><div aria-hidden="true" class="rah-static rah-static--height-zero VDS__" style="height: 0px; overflow: hidden; transition: height 350ms;"><div style="transition: opacity 350ms; opacity: 0; display: none;"><div class="ChildWrapper-VDS__sc-19df7fd-0 cPhVkd"><div></div></div></div></div></div></div><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div></div></div><div class="LeftAccordian__LeftAccWrapper-sc-xjixpk-0"><div class="ComponentWrapper-VDS__sc-h2bqgc-0 igdPGf"><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div><div class="StyledAccordionItem-VDS__sc-h2bqgc-1 mCOTK"><div class="WrapperDiv-VDS__sc-19osi3m-3 jFGcii"><button class="StyledAccordionButton-VDS__sc-19osi3m-2 kZpcqO accordionButton" aria-expanded="false" type="button" tabindex="0"><div class="TitleWrapper-VDS__sc-1fnnlnf-0 dUuzCi"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 bWSyYu StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="font-normal">Color </span></p></div><span class="TriggerIconWrapper-VDS__sc-19osi3m-1 fCdskV toggleIconWrapper" tabindex="-1" aria-hidden="true"><div tabindex="-1" aria-hidden="true" class="TriggerIconSVGWrapper-VDS__sc-19osi3m-4 koiILj"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"></polygon></svg></div></span></button></div><div tabindex="-1" role="region" aria-hidden="false" class="StyledAccordionDetail-VDS__sc-19df7fd-1 bkZejI" id="accordionDetail_null" aria-labelledby="accordionHeader_null"><div aria-hidden="true" class="rah-static rah-static--height-zero VDS__" style="height: 0px; overflow: hidden; transition: height 350ms;"><div style="transition: opacity 350ms; opacity: 0; display: none;"><div class="ChildWrapper-VDS__sc-19df7fd-0 cPhVkd"><div></div></div></div></div></div></div><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div></div></div><div class="LeftAccordian__LeftAccWrapper-sc-xjixpk-0"><div class="ComponentWrapper-VDS__sc-h2bqgc-0 igdPGf"><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div><div class="StyledAccordionItem-VDS__sc-h2bqgc-1 mCOTK"><div class="WrapperDiv-VDS__sc-19osi3m-3 jFGcii"><button class="StyledAccordionButton-VDS__sc-19osi3m-2 kZpcqO accordionButton" aria-expanded="false" type="button" tabindex="0"><div class="TitleWrapper-VDS__sc-1fnnlnf-0 dUuzCi"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 bWSyYu StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="font-normal">SeriesDevice </span></p></div><span class="TriggerIconWrapper-VDS__sc-19osi3m-1 fCdskV toggleIconWrapper" tabindex="-1" aria-hidden="true"><div tabindex="-1" aria-hidden="true" class="TriggerIconSVGWrapper-VDS__sc-19osi3m-4 koiILj"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><polygon points="10.8 15.71 1.8 6.71 2.62 5.89 10.8 14.07 18.98 5.89 19.8 6.71 10.8 15.71"></polygon></svg></div></span></button></div><div tabindex="-1" role="region" aria-hidden="false" class="StyledAccordionDetail-VDS__sc-19df7fd-1 bkZejI" id="accordionDetail_null" aria-labelledby="accordionHeader_null"><div aria-hidden="true" class="rah-static rah-static--height-zero VDS__" style="height: 0px; overflow: hidden; transition: height 350ms;"><div style="transition: opacity 350ms; opacity: 0; display: none;"><div class="ChildWrapper-VDS__sc-19df7fd-0 cPhVkd"><div></div></div></div></div></div></div><div type="secondary" class="StyledLine-VDS__sc-7j8mur-0 gBuMwB"></div></div></div></div></div></span></div></div></div></div><div id="col" data-id="tilesContainer" class="w-full h-full flex min-[924px]:w-[74.41%] min-[992px]:w-[74.4%] min-[1080px]:w-[74.5%] min-[924px]:w-[74.6%] flex flex-col"><div class="grid gap-3 w-full grid-cols-2 min-[480px]:grid-cols-[repeat(2,minmax(218px,_1fr))] min-[684px]:grid-cols-[repeat(2,minmax(320px,_1fr))] min-[856px]:gap-6 min-[856px]:grid-cols-[repeat(3,minmax(254px,_1fr))] min-[924px]:grid-cols-[repeat(3,minmax(203px,_1fr))] min-[992px]:grid-cols-[repeat(3,minmax(220px,_1fr))] min-[1080px]:grid-cols-[repeat(3,minmax(242px,_1fr))] min-[1440px]:grid-cols-[repeat(3,minmax(290px,_1fr))] mb-5"><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone 16e Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 1,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MD0D4LL/A" data-skuid="sku6021689" data-testid="tile-component-id" data-hidepromo="false" id="MD0D4LL/A-Save $350"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-black" aria-hidden="false" role="text" aria-label="Apple iPhone 16e Prepaid promo Save $350" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="true" id="Apple iPhone 16e Prepaid-client"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 doeEmP StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Save $350</p></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-16e-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum?hei=262&amp;fmt=webp 205w
  " src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-16e-black-aluminum/" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-16e-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone 16e Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone 16e Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone 16e Prepaid actual price: $599.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $599.99</p></div><a role="button" data-testid="open-see-details-frp" aria-hidden="false" tabindex="0" contenteditable="false" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;see details&quot;}" data-analyticstrack="gridwall-tile-promoToggle" type="inline" aria-label="see details about Apple iPhone 16e Prepaid" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone 16e Prepaid</span><ul class="flex list-none"><li color="#3C4042" class="Tile__ColorSwatch-sc-71g958-1 crAHbB"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone 16e Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxq002a3b9jl4q00oq7" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone 16e Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxq002a3b9jl4q00oq7" name="Compare Apple iPhone 16e Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Google Pixel 10a Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 2,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="GA10057-US" data-skuid="sku6044131" data-testid="tile-component-id" data-hidepromo="false" id="GA10057-US-Save $400"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-black" aria-hidden="false" role="text" aria-label="Google Pixel 10a Prepaid promo Save $400" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="true" id="Google Pixel 10a Prepaid-client"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 doeEmP StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Save $400</p></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/google-pixel-10a-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a?hei=262&amp;fmt=webp 205w
  " src="assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10a-ga10057-us-lavendar-a/" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/google-pixel-10a-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Google Pixel 10a Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Google Pixel 10a Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Google Pixel 10a Prepaid actual price: $499.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $499.99</p></div><a role="button" data-testid="open-see-details-frp" aria-hidden="false" tabindex="0" contenteditable="false" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;see details&quot;}" data-analyticstrack="gridwall-tile-promoToggle" type="inline" aria-label="see details about Google Pixel 10a Prepaid" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Google Pixel 10a Prepaid</span><ul class="flex list-none"><li color="#282828" class="Tile__ColorSwatch-sc-71g958-1 eOBFXJ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Obsidian </div></li><li color="#81a0f4" class="Tile__ColorSwatch-sc-71g958-1 cwcqaN"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Lavender </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Google Pixel 10a Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxr002b3b9jd9gqmwhb" color="#000000" letter-spacing="0.5px" aria-label="Compare Google Pixel 10a Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxr002b3b9jd9gqmwhb" name="Compare Google Pixel 10a Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="block h-[522px] min-[684px]:h-[542px] w-full [&amp;&gt;button]:cursor-default" data-testid="marketing-tile"><div class="style__FullBleedTileImage-sc-1wr5fys-1 fpEISm cursor-pointer rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus bg-no-repeat bg-cover bg-center bg-top md:bg-top"><div data-testid="byodPromoTitle" class="p-3 md:p-6 z-[3]"><div class="style__StyledTextWrapper-sc-1wr5fys-2 gZlOvG mt-[260px] md:mt-[330px] lg:mt-[260px] fullbleed-text flex flex-col basis-full"><div class="mb-3"><h2 aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 etccjk StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><a aria-hidden="false" data-testid="full-bleed-title" href="/smartphones/prepaid/smartphones/apple-iphone-16e-prepaid/" tabindex="0" class="hover:underline [&amp;:focus]:outline-1 [&amp;:focus]:outline-black [&amp;:focus]:outline-dashed" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;L1|P3|EUP|||undefined|81|undefined|Get iPhone 16e for $349.99&quot;,&quot;format&quot;:&quot;AS_DIRECTED_BY_TAGGING_BA&quot;}">Get iPhone 16e for $349.99</a></h2></div><div class="mb-6"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 jRLSco StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><span class="text-xs leading-4 md:text-sm md:leading-[18px]">Plus an additional $100 in $10/mo service credits over 10 months on any Verizon Prepaid Unlimited plan.&nbsp;<a data-testid="textOverImg-textLink" type="inline" tabindex="0" role="link" aria-label="Get iPhone 16e for $349.99 Details" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></span></p></div><a href="/smartphones/prepaid/smartphones/apple-iphone-16e-prepaid/" data-testid="TextLinkCaret" role="link" aria-disabled="false" aria-label="Get iPhone 16e for $349.99 Shop now" tabindex="0" class="StyledAnchor-VDS__sc-1ofvnb0-1 dZcuse"><span tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-1ofvnb0-2 esoRzg"></span><span tabindex="-1" aria-hidden="true" class="Wrapper-VDS__sc-1ofvnb0-0 jydCYq"><span role="text" class="InlineWrapper-VDS__sc-1ofvnb0-5 fgQMK"><span tabindex="-1" aria-hidden="true" class="AnchorContentWrapper-VDS__sc-1ofvnb0-3 kuCmPH">Shop <span class="TextWrapper-VDS__sc-1ofvnb0-4 hvyqOH">now<span tabindex="-1" aria-hidden="true" class="IconWrapper-VDS__sc-1ofvnb0-6 cSePFu"><div tabindex="-1" aria-hidden="true" aria-label="right-caret-bold icon" class="IconSVGWrapper-VDS__sc-1ofvnb0-7 lbmufZ"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.6 21.6"><path d="M7.6,20.7L5,18.1l7.3-7.3L5,3.5l2.5-2.5l9.9,9.9L7.6,20.7z"></path></svg></div></span></span></span></span></span></a></div></div></div></div><div class="block h-[522px] min-[684px]:h-[542px] w-full [&amp;&gt;button]:cursor-default" data-testid="marketing-tile"><div class="style__FullBleedTileImage-sc-1wr5fys-1 gFgTQw cursor-pointer rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus bg-no-repeat bg-cover bg-center bg-top md:bg-top"><div data-testid="byodPromoTitle" class="p-3 md:p-6 z-[3]"><div class="style__StyledTextWrapper-sc-1wr5fys-2 gZlOvG mt-[260px] md:mt-[330px] lg:mt-[260px] fullbleed-text flex flex-col basis-full"><div class="mb-3"><h2 aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 etccjk StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><a aria-hidden="false" data-testid="full-bleed-title" href="/smartphones/prepaid/sales/prepaid/byod.html/" tabindex="0" class="hover:underline [&amp;:focus]:outline-1 [&amp;:focus]:outline-black [&amp;:focus]:outline-dashed" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;L1|P3|EUP|||undefined|81|undefined|Bring your own phone and save&quot;,&quot;format&quot;:&quot;AS_DIRECTED_BY_TAGGING_BA&quot;}">Bring your own phone and save</a></h2></div><div class="mb-6"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 jRLSco StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><span class="text-xs leading-4 md:text-sm md:leading-[18px]">Get 1 line as low as $35/mo with Auto Pay after the first month. No activation fees.&nbsp;<a data-testid="textOverImg-textLink" type="inline" tabindex="0" role="link" aria-label="Bring your own phone and save Details" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></span></p></div><a href="/smartphones/prepaid/sales/prepaid/byod.html/" data-testid="TextLinkCaret" role="link" aria-disabled="false" aria-label="Bring your own phone and save New customer" tabindex="0" class="StyledAnchor-VDS__sc-1ofvnb0-1 dZcuse"><span tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-1ofvnb0-2 esoRzg"></span><span tabindex="-1" aria-hidden="true" class="Wrapper-VDS__sc-1ofvnb0-0 jydCYq"><span role="text" class="InlineWrapper-VDS__sc-1ofvnb0-5 fgQMK"><span tabindex="-1" aria-hidden="true" class="AnchorContentWrapper-VDS__sc-1ofvnb0-3 kuCmPH">New <span class="TextWrapper-VDS__sc-1ofvnb0-4 hvyqOH">customer<span tabindex="-1" aria-hidden="true" class="IconWrapper-VDS__sc-1ofvnb0-6 cSePFu"><div tabindex="-1" aria-hidden="true" aria-label="right-caret-bold icon" class="IconSVGWrapper-VDS__sc-1ofvnb0-7 lbmufZ"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.6 21.6"><path d="M7.6,20.7L5,18.1l7.3-7.3L5,3.5l2.5-2.5l9.9,9.9L7.6,20.7z"></path></svg></div></span></span></span></span></span></a></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy A16 5G Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 5,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMA166UZKVZPP" data-skuid="sku6021019" data-testid="tile-component-id" data-hidepromo="false" id="SMA166UZKVZPP-Get it free"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-black" aria-hidden="false" role="text" aria-label="Samsung Galaxy A16 5G Prepaid promo Get it free" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="true" id="Samsung Galaxy A16 5G Prepaid-client"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 doeEmP StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Get it free</p></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-a16-5g-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a16-5g-sma166uzkv?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-a16-5g-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy A16 5G Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy A16 5G Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy A16 5G Prepaid actual price: $49.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $49.99</p></div><a role="button" data-testid="open-see-details-frp" aria-hidden="false" tabindex="0" contenteditable="false" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;see details&quot;}" data-analyticstrack="gridwall-tile-promoToggle" type="inline" aria-label="see details about Samsung Galaxy A16 5G Prepaid" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy A16 5G Prepaid</span><ul class="flex list-none"><li color="#444E5A" class="Tile__ColorSwatch-sc-71g958-1 fqmPvu"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Blue Black </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy A16 5G Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxu002c3b9jp048yyqh" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy A16 5G Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxu002c3b9jp048yyqh" name="Compare Samsung Galaxy A16 5G Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Motorola moto g play - 2026 Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 6,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MOTXT2615VPP" data-skuid="sku6042707" data-testid="tile-component-id" data-hidepromo="false" id="MOTXT2615VPP-Get it free"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-black" aria-hidden="false" role="text" aria-label="Motorola moto g play - 2026 Prepaid promo Get it free" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="true" id="Motorola moto g play - 2026 Prepaid-client"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 doeEmP StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Get it free</p></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/motorola-moto-g-play-2026-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-moto-g-play-2026-prepaid-a?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/motorola-moto-g-play-2026-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Motorola moto g play - 2026 Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Motorola moto g play - 2026 Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Motorola moto g play - 2026 Prepaid actual price: $49.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $49.99</p></div><a role="button" data-testid="open-see-details-frp" aria-hidden="false" tabindex="0" contenteditable="false" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;see details&quot;}" data-analyticstrack="gridwall-tile-promoToggle" type="inline" aria-label="see details about Motorola moto g play - 2026 Prepaid" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Motorola moto g play - 2026 Prepaid</span><ul class="flex list-none"><li color="#4A6A78" class="Tile__ColorSwatch-sc-71g958-1 eKjsaa"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">PANTONE Tapestry </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Motorola moto g play - 2026 Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxv002d3b9jqwzlb9dr" color="#000000" letter-spacing="0.5px" aria-label="Compare Motorola moto g play - 2026 Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxv002d3b9jqwzlb9dr" name="Compare Motorola moto g play - 2026 Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone 14 Plus Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 7,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MQ6D3LL/A" data-skuid="sku5620068" data-testid="tile-component-id" data-hidepromo="true" id="MQ6D3LL/A-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Apple iPhone 14 Plus Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Apple iPhone 14 Plus Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-14-plus-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/iphone-14-plus-midnight-fall22-a?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-14-plus-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone 14 Plus Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone 14 Plus Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone 14 Plus Prepaid actual price: $699.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $699.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone 14 Plus Prepaid</span><ul class="flex list-none"><li color="#BCB3EA" class="Tile__ColorSwatch-sc-71g958-1 faTRUr"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Purple </div></li><li color="#1C3846" class="Tile__ColorSwatch-sc-71g958-1 RVHRQ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Midnight </div></li><li color="#9BB0C3" class="Tile__ColorSwatch-sc-71g958-1 lelfQC"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Blue </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone 14 Plus Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxv002e3b9jriakbhsy" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone 14 Plus Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxv002e3b9jriakbhsy" name="Compare Apple iPhone 14 Plus Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone 17 Pro Max Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 8,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MFXH4LL/A" data-skuid="sku6037281" data-testid="tile-component-id" data-hidepromo="true" id="MFXH4LL/A-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Apple iPhone 17 Pro Max Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Apple iPhone 17 Pro Max Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-17-pro-max-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-pro-max-cosmic-orange?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-17-pro-max-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone 17 Pro Max Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone 17 Pro Max Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone 17 Pro Max Prepaid actual price: $1199.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1199.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone 17 Pro Max Prepaid</span><ul class="flex list-none"><li color="#E5E5E5" class="Tile__ColorSwatch-sc-71g958-1 cGfzkf"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Silver </div></li><li color="#F77E2D" class="Tile__ColorSwatch-sc-71g958-1 eHfAjK"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Cosmic Orange  </div></li><li color="#394673" class="Tile__ColorSwatch-sc-71g958-1 kMKyHn"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Deep Blue </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone 17 Pro Max Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxw002f3b9jz2jwtgtc" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone 17 Pro Max Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxw002f3b9jz2jwtgtc" name="Compare Apple iPhone 17 Pro Max Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone 17 Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 9,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MG494LL/A" data-skuid="sku6037251" data-testid="tile-component-id" data-hidepromo="true" id="MG494LL/A-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Apple iPhone 17 Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Apple iPhone 17 Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-17-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17-lavender?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-17-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone 17 Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone 17 Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone 17 Prepaid actual price: $829.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $829.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone 17 Prepaid</span><ul class="flex list-none"><li color="#353839" class="Tile__ColorSwatch-sc-71g958-1 bJqOpE"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li><li color="#FCFCFC" class="Tile__ColorSwatch-sc-71g958-1 xbatS"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">White </div></li><li color="#A2B9DC" class="Tile__ColorSwatch-sc-71g958-1 lnOotM"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Mist Blue </div></li><li color="#E6D5F1" class="Tile__ColorSwatch-sc-71g958-1 ejMqWy"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Lavender </div></li><li color="#B4C294" class="Tile__ColorSwatch-sc-71g958-1 gLTFbJ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Sage </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone 17 Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxx002g3b9j3pp1dfm4" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone 17 Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxx002g3b9j3pp1dfm4" name="Compare Apple iPhone 17 Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone Air Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 10,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MG1D4LL/A" data-skuid="sku6037390" data-testid="tile-component-id" data-hidepromo="true" id="MG1D4LL/A-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Apple iPhone Air Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Apple iPhone Air Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-air-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-air-skyblue-a?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-air-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone Air Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone Air Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone Air Prepaid actual price: $999.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $999.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone Air Prepaid</span><ul class="flex list-none"><li color="#FAF2E3" class="Tile__ColorSwatch-sc-71g958-1 kzcMLe"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Light Gold </div></li><li color="#000000" class="Tile__ColorSwatch-sc-71g958-1 jCicyn"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Space Black </div></li><li color="#FCFCFC" class="Tile__ColorSwatch-sc-71g958-1 xbatS"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Cloud White </div></li><li color="#E3F1FA" class="Tile__ColorSwatch-sc-71g958-1 eLiujx"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Sky Blue </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone Air Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxx002h3b9j9g7vbctj" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone Air Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxx002h3b9j9g7vbctj" name="Compare Apple iPhone Air Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Motorola razr - 2026 Prepaid &quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 11,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MOTXT2657V1" data-skuid="sku6048181" data-testid="tile-component-id" data-hidepromo="true" id="MOTXT2657V1-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Motorola razr - 2026 Prepaid  promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Motorola razr - 2026 Prepaid -client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/motorola-razr-2026-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-2026-pantone-hematite-motxt2657v1?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/motorola-razr-2026-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Motorola razr - 2026 Prepaid " class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Motorola razr - 2026 Prepaid </span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Motorola razr - 2026 Prepaid  actual price: $799.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $799.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Motorola razr - 2026 Prepaid </span><ul class="flex list-none"><li color="#787471
" class="Tile__ColorSwatch-sc-71g958-1 iPVSWT"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">PANTONE Hematite </div></li><li color="#007C6D

" class="Tile__ColorSwatch-sc-71g958-1 VPlwd"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">PANTONE Sporting Green 
 </div></li><li color="#C1AFB2


" class="Tile__ColorSwatch-sc-71g958-1 dLeSUQ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">PANTONE Violet Ice
 </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Motorola razr - 2026 Prepaid " class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxy002i3b9jr4v3biqr" color="#000000" letter-spacing="0.5px" aria-label="Compare Motorola razr - 2026 Prepaid "><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxy002i3b9jr4v3biqr" name="Compare Motorola razr - 2026 Prepaid  checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Apple iPhone 17e Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 12,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MHRQ4LL/A" data-skuid="sku6045043" data-testid="tile-component-id" data-hidepromo="true" id="MHRQ4LL/A-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Apple iPhone 17e Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Apple iPhone 17e Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/apple-iphone-17e-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/apple-iphone-17e-pink-a?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/apple-iphone-17e-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Apple iPhone 17e Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Apple iPhone 17e Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Apple iPhone 17e Prepaid actual price: $599.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $599.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Apple iPhone 17e Prepaid</span><ul class="flex list-none"><li color="#e6d5cb" class="Tile__ColorSwatch-sc-71g958-1 djExmU"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Soft Pink </div></li><li color="#2A2723" class="Tile__ColorSwatch-sc-71g958-1 lbYAuk"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li><li color="#FAFAFA" class="Tile__ColorSwatch-sc-71g958-1 eXzRCQ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">White </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Apple iPhone 17e Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxy002j3b9jxdim98hg" color="#000000" letter-spacing="0.5px" aria-label="Compare Apple iPhone 17e Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxy002j3b9jxdim98hg" name="Compare Apple iPhone 17e Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy A37 5G Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 13,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMA376UZAV" data-skuid="sku6046814" data-testid="tile-component-id" data-hidepromo="true" id="SMA376UZAV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy A37 5G Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy A37 5G Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-a37-5g-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a37-5g-awesome-charcoal?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-a37-5g-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy A37 5G Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy A37 5G Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy A37 5G Prepaid actual price: $449.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $449.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy A37 5G Prepaid</span><ul class="flex list-none"><li color="#525257" class="Tile__ColorSwatch-sc-71g958-1 jdKulZ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Awesome Charcoal </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy A37 5G Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxz002k3b9jm734yob8" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy A37 5G Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxz002k3b9jm734yob8" name="Compare Samsung Galaxy A37 5G Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy A17 5G Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 14,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMA176UZKV" data-skuid="sku6043656" data-testid="tile-component-id" data-hidepromo="true" id="SMA176UZKV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy A17 5G Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy A17 5G Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-a17-5g-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-a17-5g?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-a17-5g-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy A17 5G Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy A17 5G Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy A17 5G Prepaid actual price: $199.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $199.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy A17 5G Prepaid</span><ul class="flex list-none"><li color="#2A2723" class="Tile__ColorSwatch-sc-71g958-1 lbYAuk"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy A17 5G Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawxz002l3b9jui9urg39" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy A17 5G Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawxz002l3b9jui9urg39" name="Compare Samsung Galaxy A17 5G Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 15,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MOTXT2553VF" data-skuid="sku6044033" data-testid="tile-component-id" data-hidepromo="true" id="MOTXT2553VF-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/motorola-razr-fifa-world-cup-26-edition-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-razr-fifa-world-cup-26-edition-motxt2553vf?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/motorola-razr-fifa-world-cup-26-edition-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Motorola razr FIFA World Cup 26™ Edition Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid actual price: $599.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $599.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid</span><ul class="flex list-none"><li color="#70D4A5" class="Tile__ColorSwatch-sc-71g958-1 clPWQg"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">FIFA World Cup 26&amp;#8482; Edition </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy0002m3b9jqhpgix2n" color="#000000" letter-spacing="0.5px" aria-label="Compare Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy0002m3b9jqhpgix2n" name="Compare Motorola razr FIFA World Cup 26&amp;#8482; Edition Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy S26 Ultra Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 16,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMS948UZVV" data-skuid="sku6044459" data-testid="tile-component-id" data-hidepromo="true" id="SMS948UZVV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy S26 Ultra Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy S26 Ultra Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-ultra-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-ult-cob-vio-sms948uzvv-sms948uzvev?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-ultra-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy S26 Ultra Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy S26 Ultra Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy S26 Ultra Prepaid actual price: $1299.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1299.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy S26 Ultra Prepaid</span><ul class="flex list-none"><li color="#A4A4C6" class="Tile__ColorSwatch-sc-71g958-1 fFQttm"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Cobalt Violet </div></li><li color="#b6d2e0" class="Tile__ColorSwatch-sc-71g958-1 etRyVU"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Sky Blue </div></li><li color="#2A2723" class="Tile__ColorSwatch-sc-71g958-1 lbYAuk"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li><li color="#FAFAFA" class="Tile__ColorSwatch-sc-71g958-1 eXzRCQ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">White </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy S26 Ultra Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy0002n3b9jm8lnlqpa" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy S26 Ultra Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy0002n3b9jm8lnlqpa" name="Compare Samsung Galaxy S26 Ultra Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy S26+ Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 17,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMS947UZVV" data-skuid="sku6044451" data-testid="tile-component-id" data-hidepromo="true" id="SMS947UZVV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy S26+ Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy S26+ Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-plus-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26plus-cobaltviolet-01?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-plus-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy S26+ Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy S26+ Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy S26+ Prepaid actual price: $1099.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1099.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy S26+ Prepaid</span><ul class="flex list-none"><li color="#2A2723" class="Tile__ColorSwatch-sc-71g958-1 lbYAuk"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li><li color="#b6d2e0" class="Tile__ColorSwatch-sc-71g958-1 etRyVU"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Sky Blue </div></li><li color="#A4A4C6" class="Tile__ColorSwatch-sc-71g958-1 fFQttm"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Cobalt Violet </div></li><li color="#FAFAFA" class="Tile__ColorSwatch-sc-71g958-1 eXzRCQ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">White </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy S26+ Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy0002o3b9jyziapr9h" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy S26+ Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy0002o3b9jyziapr9h" name="Compare Samsung Galaxy S26+ Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Orbic Trophy 5G Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 18,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="R667L5U-BVZ6" data-skuid="sku6043915" data-testid="tile-component-id" data-hidepromo="true" id="R667L5U-BVZ6-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Orbic Trophy 5G Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Orbic Trophy 5G Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/orbic-trophy-5g-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/orbic-trophy-5g-r667l5u-bvz6?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/orbic-trophy-5g-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Orbic Trophy 5G Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Orbic Trophy 5G Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Orbic Trophy 5G Prepaid actual price: $359.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $359.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Orbic Trophy 5G Prepaid</span><ul class="flex list-none"><li color="#474644" class="Tile__ColorSwatch-sc-71g958-1 hHzVAu"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Titanium Black </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Orbic Trophy 5G Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy0002p3b9ja86d9zri" color="#000000" letter-spacing="0.5px" aria-label="Compare Orbic Trophy 5G Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy0002p3b9ja86d9zri" name="Compare Orbic Trophy 5G Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy S26 Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 19,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMS942UZVEV" data-skuid="sku6044535" data-testid="tile-component-id" data-hidepromo="true" id="SMS942UZVEV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy S26 Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy S26 Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s26-cobalt-violet-sms942uzvev-sms942uzvfv?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-s26-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy S26 Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy S26 Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy S26 Prepaid actual price: $899.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $899.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy S26 Prepaid</span><ul class="flex list-none"><li color="#B3CBD9" class="Tile__ColorSwatch-sc-71g958-1 lmGGpu"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Sky Blue </div></li><li color="#494D53" class="Tile__ColorSwatch-sc-71g958-1 kFtvHs"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Black </div></li><li color="#686884" class="Tile__ColorSwatch-sc-71g958-1 gxBzir"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Cobalt Violet </div></li><li color="#F3F4F5" class="Tile__ColorSwatch-sc-71g958-1 cKZpZT"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">White </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy S26 Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy1002q3b9jm7pdg5kv" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy S26 Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy1002q3b9jm7pdg5kv" name="Compare Samsung Galaxy S26 Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;TCL K33 5G Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 20,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="TCL-T513SPP" data-skuid="sku6034700" data-testid="tile-component-id" data-hidepromo="true" id="TCL-T513SPP-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="TCL K33 5G Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="TCL K33 5G Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/tcl-k33-5g-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/beryl-tcl-k33-5g-space-gray?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/tcl-k33-5g-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="TCL K33 5G Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">TCL K33 5G Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="TCL K33 5G Prepaid actual price: $39.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $39.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for TCL K33 5G Prepaid</span><ul class="flex list-none"><li color="#807F84" class="Tile__ColorSwatch-sc-71g958-1 gJszai"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Space Gray </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare TCL K33 5G Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy1002r3b9jlzph4au9" color="#000000" letter-spacing="0.5px" aria-label="Compare TCL K33 5G Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy1002r3b9jlzph4au9" name="Compare TCL K33 5G Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy Z Fold7 Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 21,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMF966UDBV" data-skuid="sku6033086" data-testid="tile-component-id" data-hidepromo="true" id="SMF966UDBV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy Z Fold7 Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy Z Fold7 Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-z-fold7-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="true" src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a/" srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-fold7-q7-smf966udbv-smf966udbev-blueshadow-a?hei=262&amp;fmt=webp 205w
  "></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-z-fold7-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy Z Fold7 Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy Z Fold7 Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy Z Fold7 Prepaid actual price: $1999.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1999.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy Z Fold7 Prepaid</span><ul class="flex list-none"><li color="#3B5B8A" class="Tile__ColorSwatch-sc-71g958-1 eDYJRg"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Blue Shadow </div></li><li color="#4A4A4D" class="Tile__ColorSwatch-sc-71g958-1 eRQaKT"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Jetblack </div></li><li color="#F9F9F7" class="Tile__ColorSwatch-sc-71g958-1 jztUNW"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Silver Shadow </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy Z Fold7 Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy1002s3b9jy5xghb2t" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy Z Fold7 Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy1002s3b9jy5xghb2t" name="Compare Samsung Galaxy Z Fold7 Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Google Pixel 10 Pro Fold Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 22,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="GA10079-US" data-skuid="sku6035280" data-testid="tile-component-id" data-hidepromo="true" id="GA10079-US-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Google Pixel 10 Pro Fold Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Google Pixel 10 Pro Fold Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/google-pixel-10-pro-fold-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-fold-moonstone-ga10079-us/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="false"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/google-pixel-10-pro-fold-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Google Pixel 10 Pro Fold Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Google Pixel 10 Pro Fold Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Google Pixel 10 Pro Fold Prepaid actual price: $1799.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1799.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Google Pixel 10 Pro Fold Prepaid</span><ul class="flex list-none"><li color="#7D8393" class="Tile__ColorSwatch-sc-71g958-1 khgzJt oos"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Moonstone - Out of stock</div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Google Pixel 10 Pro Fold Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy2002t3b9jqkae2beo" color="#000000" letter-spacing="0.5px" aria-label="Compare Google Pixel 10 Pro Fold Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy2002t3b9jqkae2beo" name="Compare Google Pixel 10 Pro Fold Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Motorola edge - 2025 Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 23,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="MOTXT2519V" data-skuid="sku6036617" data-testid="tile-component-id" data-hidepromo="true" id="MOTXT2519V-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Motorola edge - 2025 Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Motorola edge - 2025 Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/motorola-edge-2025-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/motorola-edge-2025/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="false"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/motorola-edge-2025-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Motorola edge - 2025 Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Motorola edge - 2025 Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Motorola edge - 2025 Prepaid actual price: $399.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $399.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Motorola edge - 2025 Prepaid</span><ul class="flex list-none"><li color="#3E4742" class="Tile__ColorSwatch-sc-71g958-1 cspnww"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">PANTONE Deep Forest </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Motorola edge - 2025 Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy2002u3b9j19viinl4" color="#000000" letter-spacing="0.5px" aria-label="Compare Motorola edge - 2025 Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy2002u3b9j19viinl4" name="Compare Motorola edge - 2025 Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy S25 FE Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 24,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMS731UDBV" data-skuid="sku6036616" data-testid="tile-component-id" data-hidepromo="true" id="SMS731UDBV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy S25 FE Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy S25 FE Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-s25-fe-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-s25-fe-navy-hero-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="false"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-s25-fe-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy S25 FE Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy S25 FE Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy S25 FE Prepaid actual price: $649.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $649.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy S25 FE Prepaid</span><ul class="flex list-none"><li color="#BECAE9" class="Tile__ColorSwatch-sc-71g958-1 kNFIhO"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Icyblue </div></li><li color="#002266" class="Tile__ColorSwatch-sc-71g958-1 bdEcUv"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Navy </div></li><li color="#4A4A4D" class="Tile__ColorSwatch-sc-71g958-1 eRQaKT"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Jetblack </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy S25 FE Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy2002v3b9jwo4pek90" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy S25 FE Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy2002v3b9jwo4pek90" name="Compare Samsung Galaxy S25 FE Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Samsung Galaxy Z Flip7  Prepaid &quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 25,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="SMF766UDBV" data-skuid="sku6033054" data-testid="tile-component-id" data-hidepromo="true" id="SMF766UDBV-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Samsung Galaxy Z Flip7  Prepaid  promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Samsung Galaxy Z Flip7  Prepaid -client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/samsung-galaxy-z-flip7-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/samsung-galaxy-z-flip7-blue-shadow-smf766udbv-smf766udbev/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="false"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/samsung-galaxy-z-flip7-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Samsung Galaxy Z Flip7  Prepaid " class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Samsung Galaxy Z Flip7  Prepaid </span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Samsung Galaxy Z Flip7  Prepaid  actual price: $1099.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1099.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Samsung Galaxy Z Flip7  Prepaid </span><ul class="flex list-none"><li color="#3B5B8A" class="Tile__ColorSwatch-sc-71g958-1 eDYJRg"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Blue Shadow </div></li><li color="#4A4A4D" class="Tile__ColorSwatch-sc-71g958-1 eRQaKT"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Jetblack </div></li><li color="#EE6779" class="Tile__ColorSwatch-sc-71g958-1 bobMAA"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Coralred  </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Samsung Galaxy Z Flip7  Prepaid " class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy2002w3b9jrmc5cvai" color="#000000" letter-spacing="0.5px" aria-label="Compare Samsung Galaxy Z Flip7  Prepaid "><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy2002w3b9jrmc5cvai" name="Compare Samsung Galaxy Z Flip7  Prepaid  checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div><div class="block h-[522px] min-[684px]:h-[542px] w-full [&amp;&gt;button]:cursor-default" data-testid="marketing-tile"><div class="style__FullBleedTileImage-sc-1wr5fys-1 eBjfGO  rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus bg-no-repeat "><div data-testid="imageSection" class="flex flex-col gap-3 basis-full z-[3] "><div class="style__PartialTileImage-sc-1wr5fys-0 jHOFMG  bg-no-repeat rounded-t-lg h-[210px] min-[481px]:h-[262px]"></div><div class="px-3 lg:px-6"><div class="mb-3"><h2 aria-hidden="false" id="byod_tile_header" class="StyledTypography-VDS__sc-5k55co-0 kAQlZp StyledTitle-VDS__sc-155xzr0-0 kiCJhW"><span class="text-xl leading-6"><a aria-hidden="false" data-testid="full-bleed-title" href="/smartphones/prepaid/smartphones/samsung-galaxy-a16-5g-prepaid/" tabindex="0" class="hover:underline [&amp;:focus]:outline-1 [&amp;:focus]:outline-black [&amp;:focus]:outline-dashed" data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;L1|P3|EUP|||undefined|81|undefined|Get an Android phone, on us&quot;,&quot;format&quot;:&quot;AS_DIRECTED_BY_TAGGING_BA&quot;}">Get an Android phone, on us</a></span></h2></div><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 jRLSco StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><span class="text-xs leading-4 md:text-sm md:leading-[18px]">Get Samsung Galaxy A16 5G or moto g play - 2026 when you activate a new line on any Verizon Prepaid Unlimited phone plan.&nbsp;<a role="button" data-testid="textBelowImg-textLink" type="inline" tabindex="0" aria-label="Get an Android phone, on us Details" aria-disabled="false" class="StyledAnchor-VDS__sc-9x52p1-2 cdozAx"><span type="inline" tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-9x52p1-0 FdXe"></span><span tabindex="-1" aria-hidden="true" type="inline" class="Wrapper-VDS__sc-9x52p1-1 beqFyi">Details</span></a></span></p></div><div class="mx-3 lg:mx-6 flex flex-row items-center flex-wrap gap-y-6 gap-x-[22px] mt-3"><a data-track="{&quot;type&quot;:&quot;impression&quot;,&quot;name&quot;:&quot;L1|P3|EUP|||undefined|81|undefined|Buy Samsung&quot;,&quot;format&quot;:&quot;AS_DIRECTED_BY_TAGGING_BA&quot;}" data-testid="TextLinkCaret" role="link" aria-disabled="false" aria-label="Buy Samsung  Get an Android phone, on us" tabindex="0" class="StyledAnchor-VDS__sc-1ofvnb0-1 dZcuse"><span tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-1ofvnb0-2 esoRzg"></span><span tabindex="-1" aria-hidden="true" class="Wrapper-VDS__sc-1ofvnb0-0 jydCYq"><span role="text" class="InlineWrapper-VDS__sc-1ofvnb0-5 fgQMK"><span tabindex="-1" aria-hidden="true" class="AnchorContentWrapper-VDS__sc-1ofvnb0-3 kuCmPH">Buy <span class="TextWrapper-VDS__sc-1ofvnb0-4 hvyqOH">Samsung<span tabindex="-1" aria-hidden="true" class="IconWrapper-VDS__sc-1ofvnb0-6 cSePFu"><div tabindex="-1" aria-hidden="true" aria-label="right-caret-bold icon" class="IconSVGWrapper-VDS__sc-1ofvnb0-7 lbmufZ"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.6 21.6"><path d="M7.6,20.7L5,18.1l7.3-7.3L5,3.5l2.5-2.5l9.9,9.9L7.6,20.7z"></path></svg></div></span></span></span></span></span></a><a href="/smartphones/prepaid/smartphones/motorola-moto-g-play-2026-prepaid/" data-testid="TextLinkCaret" role="link" aria-disabled="false" aria-label="Buy Motorola  Get an Android phone, on us" tabindex="0" class="StyledAnchor-VDS__sc-1ofvnb0-1 dZcuse"><span tabindex="-1" aria-hidden="true" class="HitArea-VDS__sc-1ofvnb0-2 esoRzg"></span><span tabindex="-1" aria-hidden="true" class="Wrapper-VDS__sc-1ofvnb0-0 jydCYq"><span role="text" class="InlineWrapper-VDS__sc-1ofvnb0-5 fgQMK"><span tabindex="-1" aria-hidden="true" class="AnchorContentWrapper-VDS__sc-1ofvnb0-3 kuCmPH">Buy <span class="TextWrapper-VDS__sc-1ofvnb0-4 hvyqOH">Motorola<span tabindex="-1" aria-hidden="true" class="IconWrapper-VDS__sc-1ofvnb0-6 cSePFu"><div tabindex="-1" aria-hidden="true" aria-label="right-caret-bold icon" class="IconSVGWrapper-VDS__sc-1ofvnb0-7 lbmufZ"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.6 21.6"><path d="M7.6,20.7L5,18.1l7.3-7.3L5,3.5l2.5-2.5l9.9,9.9L7.6,20.7z"></path></svg></div></span></span></span></span></span></a></div></div></div></div><div class="h-[542px] w-full min-[684px]:h-[542px] relative" data-testid="product-tile"><div class="rounded-lg shadow-sm transition duration-200 hover:scale-[1.02] h-full bg-white focus" style="background-color: rgb(255, 255, 255);"><div class="flex flex-col h-full w-full z-[3] absolute [&amp;_#quickViewBtn]:mt-7"><div class="mt-0 mb-auto" data-analyticstrack="gridwall-product-tile" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;title&quot;: &quot;Google Pixel 10 Pro XL Prepaid&quot;,&quot;level&quot;:&quot;1&quot;,&quot;position&quot;: 27,&quot;emptyArea&quot;:true}" role="presentation" data-skumodel="GA10425-US" data-skuid="sku6035309" data-testid="tile-component-id" data-hidepromo="true" id="GA10425-US-null"><div class="Tile__PromoBanner-sc-71g958-4 hBgOgo flex items-center px-3 py-[2px] mt-4 mb-6 mr-3 md:mr-6 rounded-r-md h-18 min-[400px]:h-9 w-[95%] bg-white" aria-hidden="true" role="text" aria-label="Google Pixel 10 Pro XL Prepaid promo null" data-testid="newPromoBadgeId" x-apple-data-detectors="false" data-promoexist="false" id="Google Pixel 10 Pro XL Prepaid-client"></div><div class="px-3 min-[684px]:px-6 max-[683px]:[&amp;_h2#gridwallProductName]:mt-7 min-[684px]:[&amp;_h2#gridwallProductName]:mt-8 max-[683px]:[&amp;_div#preOrderDetails]:mt-2 min-[684px]:[&amp;_div#preOrderDetails]:mt-3" id="productDetails"><a tabindex="-1" href="/smartphones/prepaid/smartphones/google-pixel-10-pro-xl-prepaid/" aria-hidden="true"><div class="flex justify-center items-center mx-auto h-[134px] w-[134px] [&amp;&gt;img]:max-w-[100%] [&amp;&gt;img]:max-h-[100%] min-[684px]:w-[186px] min-[684px]:h-[186px] min-[856px]:w-[158px] min-[856px]:h-[158px] min-[1440px]:w-[186px] min-[1440px]:h-[186px]"><img data-srcset="
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=112&amp;fmt=webp 85w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=132&amp;fmt=webp 138w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=192&amp;fmt=webp 142w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=251&amp;fmt=webp 186w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=199&amp;fmt=webp 148w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=214&amp;fmt=webp 134w,
    assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a?hei=262&amp;fmt=webp 205w
  " data-src="assets/ss7.vzw.com/is/image/VerizonWireless/google-pixel-10-pro-xl-moonstone-ga10425-us-ga10437-us-a/" class="lozad" sizes="(max-width:320px) 20vw, (max-width: 375px) 30vw, (max-width: 525px) 35vw, (max-width: 768px) 20vw, 205px" alt="" data-analyticstrack="gridwall-product-image" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;image&quot;}" width="auto" height="auto" decoding="async" data-loaded="false"></div></a><h2 id="gridwallProductName" aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 isQWmL StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><a href="/smartphones/prepaid/smartphones/google-pixel-10-pro-xl-prepaid/" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;: &quot;title&quot;}" data-analyticstrack="gridwall-product-name" aria-label="Google Pixel 10 Pro XL Prepaid" class="font-bold text-xs md:text-sm [&amp;&gt;span]:text-xs [&amp;&gt;span]:md:text-sm"><span id="tileProductText">Google Pixel 10 Pro XL Prepaid</span></a></h2><div class="" data-testid="pricing"><div aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><div class="pt-3 min-[684px]:pt-4 text-xs" role="link" aria-label="Google Pixel 10 Pro XL Prepaid actual price: $1199.99"><p tabindex="-1" aria-hidden="true" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS">Prepaid Starts at : $1199.99</p></div></div></div><div class="flex items-center mt-7"><span class="sr-only">Customize Colors for Google Pixel 10 Pro XL Prepaid</span><ul class="flex list-none"><li color="#7D8393" class="Tile__ColorSwatch-sc-71g958-1 khgzJt"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Moonstone </div></li><li color="#282828" class="Tile__ColorSwatch-sc-71g958-1 eOBFXJ"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Obsidian </div></li><li color="#c5d6d0" class="Tile__ColorSwatch-sc-71g958-1 eeKGzP"><div class="Tile__ColorSwatchLabel-sc-71g958-2 jGakcU a11y-hidden">Jade </div></li></ul></div></div></div><div class="px-4 py-3 md:py-6 md:px-6 mt-auto mb-0 flex flex-row justify-between"><div data-testid="stop-propagation" role="presentation" data-track="{&quot;type&quot;:&quot;panel&quot;,&quot;name&quot;:&quot;compare&quot;}" data-analyticstrack="gridwall-compare-checkbox"><div width="100%" id="Compare Google Pixel 10 Pro XL Prepaid" class="CheckboxWrapper-VDS__sc-1uxt89l-0 lhVwKR"><label class="CheckboxLabelWrapper-VDS__sc-uxjioj-0 gIICjx" for="cmptsawy3002x3b9jvx8gdoma" color="#000000" letter-spacing="0.5px" aria-label="Compare Google Pixel 10 Pro XL Prepaid"><div class="CheckWrapper-VDS__sc-1uxt89l-1 hqVQcb"><input data-testid="test-input" id="cmptsawy3002x3b9jvx8gdoma" name="Compare Google Pixel 10 Pro XL Prepaid checkbox" tabindex="0" type="checkbox" aria-describedby="" class="StyledInput-VDS__sc-1uxt89l-4 hnvIpr" value=""><span class="StyledWrapper-VDS__sc-hwcm7v-1 jYxKEa"><div class="HitArea-VDS__sc-hwcm7v-0 gsgGif"></div><span height="20" width="20" class="StyledInner-VDS__sc-hwcm7v-2 OTiwl styledInner"></span></span></div><span data-testid="test-child-wrapper" class="ChildWrapper-VDS__sc-1uxt89l-2 iHFbKo"><div aria-hidden="true">Compare</div></span></label></div></div></div></div></div></div></div></div></div><div id="row" class="w-full h-full px-4 md:px-5 flex"><div class="flex items-center justify-center m-5 w-full [&amp;_a:focus&gt;span:first-child]:outline-1 [&amp;_a:focus-within&gt;span:first-child]:outline-1 [&amp;_a:focus&gt;span:first-child]:outline-dashed [&amp;_a:focus-within&gt;span:first-child]:outline-dashed"><nav aria-label="Page navigation"><nav tabindex="-1" aria-label="Pagination" class="StyledNav-VDS__sc-1r0l2p6-0 bkNdTe" data-track-ignore="true"><ul class="StyledList-VDS__sc-1r0l2p6-1 bSnEwu"><li aria-hidden="true" class="PaginationListItem-VDS__sc-ruawv6-0 dCmMZO"><button aria-label="Go to previous page." class="StyledButton-VDS__sc-dbm2b9-1 hoAOVx" role="none" tabindex="0" aria-current="true" style="display: flex; justify-content: flex-end; align-items: center; font-weight: 700; height: 2.75rem; min-width: 2.75rem; visibility: hidden;"><span class="StepControlSpan-VDS__sc-1i3ct1q-0 kWxpeF"><div direction="previous" class="IconWrapper-VDS__sc-1i3ct1q-1 fIAbfM"><div tabindex="-1" aria-label="pagination-left-arrow icon" class="IconSVGWrapper-VDS__sc-1i3ct1q-2 bDsVGs"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.6 21.6"><path d="M19.8,11.7h-15l7.1,7.1L10.7,20l-9.3-9.2l9.3-9.2l1.3,1.3L4.8,9.9h15L19.8,11.7z"></path></svg></div></div>Previous</span><span aria-live="assertive" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk">Page 1 selected</span></button></li><li class="PaginationListItem-VDS__sc-ruawv6-0 PaginationNumbersContainer-VDS__sc-edp5oz-0 dTAQSu jitktQ"><button aria-label="Page 1 of 6" class="StyledButton-VDS__sc-dbm2b9-1 hoAOVx" role="none" tabindex="0" aria-current="true"><span class="StyledSpan-VDS__sc-edp5oz-1 bJBhZP">1</span><span aria-live="assertive" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk">Page 1 selected</span></button></li><li class="PaginationListItem-VDS__sc-ruawv6-0 PaginationNumbersContainer-VDS__sc-edp5oz-0 dTAQSu oCFyC"><button aria-label="Go to Page 2 of 6" class="StyledButton-VDS__sc-dbm2b9-1 ejkkTa" role="button" tabindex="0" aria-current="false"><span class="StyledSpan-VDS__sc-edp5oz-1 bJBhZP">2</span><span aria-live="off" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk"></span></button></li><li class="PaginationListItem-VDS__sc-ruawv6-0 PaginationNumbersContainer-VDS__sc-edp5oz-0 dTAQSu oCFyC"><button aria-label="Go to Page 3 of 6" class="StyledButton-VDS__sc-dbm2b9-1 ejkkTa" role="button" tabindex="0" aria-current="false"><span class="StyledSpan-VDS__sc-edp5oz-1 bJBhZP">3</span><span aria-live="off" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk"></span></button></li><li class="PaginationListItem-VDS__sc-ruawv6-0 PaginationNumbersContainer-VDS__sc-edp5oz-0 dTAQSu oCFyC"><button aria-label="Go to Page 4 of 6" class="StyledButton-VDS__sc-dbm2b9-1 ejkkTa" role="button" tabindex="0" aria-current="false"><span class="StyledSpan-VDS__sc-edp5oz-1 bJBhZP">4</span><span aria-live="off" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk"></span></button></li><li aria-hidden="false" class="PaginationListItem-VDS__sc-ruawv6-0 bQEvsN"><button aria-label="Go to next page." class="StyledButton-VDS__sc-dbm2b9-1 ejkkTa" role="button" tabindex="0" aria-current="false" style="display: flex; justify-content: flex-start; align-items: center; font-weight: 700; height: 2.75rem; min-width: 2.75rem; visibility: visible;"><span class="StepControlSpan-VDS__sc-1i3ct1q-0 kWxpeF">Next<div direction="next" class="IconWrapper-VDS__sc-1i3ct1q-1 iQsAFv"><div tabindex="-1" aria-label="pagination-right-arrow icon" class="IconSVGWrapper-VDS__sc-1i3ct1q-2 bDsVGs"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><path d="M20.26723,10.80317,10.94378,20.044,9.6764,18.7643l7.12223-7.05674H1.8014v-1.8H16.808L9.68256,2.84378l1.26738-1.278Z"></path></svg></div></div></span><span aria-live="off" class="ScreenReaderText-VDS__sc-dbm2b9-2 jrSomk"></span></button></li></ul></nav></nav></div></div></div></div></section><section class="block bg-[#F6F6F6] py-6 md:py-12" aria-labelledby="seoHeader" id="seoContent" data-testid="seoContent"><div class="max-w-[1272px] mx-auto grid grid-cols-1 min-[924px]:grid-cols-4 p-4"><div class="min-[924px]:col-start-2 min-[924px]:col-span-3 min-[924px]:ml-[1%]"><div class="mb-3 md:mb-6"><h2 aria-hidden="false" id="seoHeader" class="StyledTypography-VDS__sc-5k55co-0 fKNdkO StyledTitle-VDS__sc-155xzr0-0 kiCJhW">Prepaid Phones</h2></div><div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10"><div><h3 aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 juWzLP StyledTitle-VDS__sc-155xzr0-0 kiCJhW">Prepaid Smartphones Available at Verizon</h3><div class="mt-3 md:mt-6"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">If you're looking for savings on the latest smartphones with no credit check, without any annual contracts and no deposit necessary, a prepaid smartphone might be right for you. Explore our great <a href="/smartphones/prepaid/deals/prepaid/">deals on prepaid phones</a> and phone plans and see how easy it is to save on a new smartphone when shopping at Verizon.</span></p><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">Prepaid plans come with many benefits. With a prepaid plan, there's no credit check, no annual contracts or deposit required. Verizon's prepaid plans include unlimited talk and text in the US, and some plans include international talk and text options in Canada and Mexico. Explore all of Verizon's prepaid plans here.</span></p><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">Another way you can save on a prepaid phone includes bringing your own device. Visit our <a href="/smartphones/prepaid/bring-your-own-device/activate/">Bring Your Own Device page</a> to see how easy it is to bring your device over to a prepaid phone plan.</span></p></p></div></div><div><div><h3 aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 juWzLP StyledTitle-VDS__sc-155xzr0-0 kiCJhW">Prepaid iPhones, Samsung Phones and More</h3><div class="mt-3 md:mt-6"><p aria-hidden="false" class="StyledTypography-VDS__sc-5k55co-0 hmEcda StyledBody-VDS__sc-1s1yqd8-0 gjyxKS"><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">Here at Verizon, we offer the latest <a href="/smartphones/prepaid/smartphones/prepaid/apple/">iPhone models to our prepaid customers</a>. That means you can still get the newest iPhone available, but with no annual contract obligations and the additional savings of a prepaid plan.</span></p><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">The same goes for prepaid <a href="/smartphones/prepaid/smartphones/prepaid/samsung/">Samsung phones</a> and other <a href="/smartphones/prepaid/smartphones/prepaid/?os=android">Android phones</a>. Shop the latest Samsung Galaxy or <a href="/smartphones/prepaid/smartphones/prepaid/google/">Google Pixel</a> to add to your prepaid plan to ensure you're experiencing the top tech of today, without the addition of an annual contract. </span></p><p class="mb-3 [&amp;_a]:text-black [&amp;_a]:underline [&amp;_a:focus]:outline-1 [&amp;_a:focus]:outline-black [&amp;_a:focus]:outline-dashed"><span id="">No matter what you're looking for, Verizon has an array of smartphones to shop anytime. <a href="/smartphones/prepaid/smartphones/prepaid/">Explore all the smartphones available at Verizon today</a>.</span></p></p></div></div></div></div></div></div></section></div></div></div>
<!--<div id="vzw-gf" class="is-hidden"></div>-->
</footer>

<script type="text/javascript">
window.resourceBaseUrl = "https://scache-ws.vzw.com/w/ssr-digital-prepay/static/";
window.clientSsr = true;
</script>


<script async="" id="__LOADABLE_REQUIRED_CHUNKS__" type="application/json">[]</script><script async="" id="__LOADABLE_REQUIRED_CHUNKS___ext" type="application/json">{"namedChunks":[]}</script>



















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
<!-- JS Code end-->
<script async="" type="text/javascript">
if (window?.performance?.measure && typeof sessionStorage !== 'undefined') {
const isCommonPdp = window?.APP_STATE?.pdp?.isCommonPDP;
const pdp = isCommonPdp? 'pdeatils' : 'pdp';
var pageName = window?.APP_STATE?.gridwall ? 'gridwall' : pdp;
window.performance.measure(`${pageName}:ui:${sessionStorage?.getItem?.('channelId') || 'VZW_U'}:[flowName]:document-start`);
window.performance.measure(`loadingTime`, {start:performance.now()});
}
var isMVA = window.navigator.userAgent.indexOf('VZW-MFA-IOS') > -1 || window.navigator.userAgent.indexOf('VZW-MFA-ANDROID') > -1;
var isMiniPdp = window.location.search.includes('isMiniPdp=true') || false;
if (!isMVA && !isMiniPdp) {
var gnavJS = document.createElement('script');
gnavJS.setAttribute('src', 'assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js');
gnavJS.setAttribute('async', 'true');
gnavJS.setAttribute('type', 'text/javascript'); document.body.appendChild(gnavJS);
var gnavCs = document.getElementById('gnavstyles').innerText;
if(gnavCs.length < 100){
var gnaCS = document.createElement('link');
gnaCS.setAttribute('href', 'assets/www.verizon.com/etc/designs/vzwcom/gnav20/core.css');
gnaCS.setAttribute('rel', 'stylesheet');
document.head.appendChild(gnaCS);
}
}
function detectMob() {
return ( ( window.innerWidth <= 800 ) && ( window.innerHeight <= 600 ) );
}
</script><script src="assets/www.verizon.com/etc/designs/vzwcom/gnav20/personal.js" async="true" type="text/javascript"></script>
<script async="" type="text/javascript">
const getVzCookieValue = (name) => {
// const cookieValue = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '';
// return cookieValue;
const retVal = window.cookieKeys?.get(name)
if(!retVal) {
window.cookieKeys = document.cookie?.split(";")?.reduce((a,c) => a.set(c?.split('=')?.[0]?.trim(), c?.split('=')?.[1]?.trim()), new Map());
return window.cookieKeys.get(name)
}
return retVal
}
// const createScriptElement = (url) => {
//   let script = document.createElement('script');
//   script.type = 'text/javascript';
//   script.defer = true;
//   script.src = url;
//   document.body.appendChild(script);
// }
const setVzCookie = (cookieName, value, expiryTime) => {
const domainName = window.location.hostname;
const getTheHostName = domainName.split('.')[1];
const subDomainName = domainName.split('.')[2];
const domainString = `${getTheHostName}.${subDomainName}`;
if (domainName === 'localhost' || domainName === '127.0.0.1') document.cookie = `${cookieName}=${value};path=/;`;
document.cookie = `${cookieName}=${value};path=/;domain=.${domainString}`;
if (expiryTime) document.cookie = `${cookieName}=${value};path=/;domain=.${domainString};expires=${expiryTime};`;
};
const cdlThrottleList = getVzCookieValue('cdlThrottleList') || '';
function getChannelId() {
let channelId = 'VZW-DOTCOM';
let useragent = window.navigator.userAgent.toLowerCase();
if (window.navigator.userAgent.indexOf('VZW-MFA-IOS') > -1) {
channelId = 'VZW-MFA-IOS';
} else if (window.navigator.userAgent.indexOf('VZW-MFA-ANDROID') > -1) {
channelId = 'VZW-MFA-ANDROID';
} else if ((useragent.toLowerCase().includes('windows') && useragent.includes('touch')) || useragent.includes('tablet') || useragent.includes('ipad')) {
channelId = 'VZW-DOTCOM';
} else if (
navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i)
|| navigator.userAgent.match(/MY_VZW_APP/i)
|| navigator.userAgent.includes('MY_VZW_APP')
) {
channelId = 'VZW-DOTCOM-MOB';
}
return channelId;
};
</script>
<script>
//Start Tealium
window.enableTealium=true
//End Tealium
const updateNavigationForThreePointo = (title, alwaysShowBackButton) => {
console.debug('updateNavigationForThreePointo triggered');
const msg = {
actionType: 'updateNavigation',
navigationBar: {
moleculeName: 'navigationBar',
title,
alwaysShowBackButton,
},
};
console.debug('updateNavigationForThreePointo payload', msg);
postMessage(msg);
};
const postMessage = (msg = {}) => {
try {
const strMsg = JSON.stringify(msg);
console.log("Inside postmessage",strMsg);
if (window.webkit && window.webkit.messageHandlers && window.webkit.messageHandlers.mfAppInterface && window.webkit.messageHandlers.mfAppInterface.postMessage) {
window.webkit.messageHandlers.mfAppInterface.postMessage(strMsg);
}
if (window.mfAppInterface && window.mfAppInterface.postMessage) {
window.mfAppInterface.postMessage(strMsg);
}
} catch (err) {
console.error('postMessage Error: ', err);
}
};
const showTabBar = (tabBarHidden) => {
console.debug('tabBarHidden triggered');
const msg = {
actionType: 'updateTab',
tab: {
tabBarHidden,
},
};
console.debug('tabBarHidden payload', msg);
postMessage(msg);
};
const setHab = (hidden = false, inverted = false) => {
console.debug('setHab triggered GW');
const msg = {
actionType: 'setHAB',
hidden,
fromShop: true,
state: { configuration: 'dual', state: 'assistant', inverted },
};
console.debug('setHab payload GW', msg);
postMessage(msg);
};
//start gnav
window.gnavOptions = window.gnavOptions || {};
window.gnavOptions.nsa=true;
var gnavdl = {
"bu" : "wireless",
"variation" : "nsa",
"appid" : "eup/aal",
"impltype": "ssi"
};
const getPageTitle = function s(e,t,i,a,r,o,s,l,n,d,c,p,m,u=!1,g=!1,f=!1){let y,h,v=e,P={};const b=t?.find(e=>"brand"===e?.type),I=t?.find(e=>"category"===e?.type),w=t?.find(e=>"condition_seo_url_name_s"===e?.type),S=c(t,i,a,m,n);if(S&&!f)return S;if(r?.output?.cqContent?.seoMeta&&(!b||1===b?.values?.length||w&&w?.values?.includes("certified-pre-owned"))?(P=r?.output?.cqContent?.seoMeta?.length>0?r.output.cqContent.seoMeta.find(e=>e.header):{},y=P?P.header:"",h=P?P.title:""):r?.output?.cqContent?.seo&&(P=r?.output?.cqContent?.seo?.length>0?r.output.cqContent.seo.find(e=>"seo_header"===e.key.toLowerCase()):{},y=P.desktopValue),o&&!I){const e=o?.refinements?.find(e=>e.name&&"accessories"===e.name.toLowerCase());if(e)v=e.name;else{const e=o?.refinements?.filter(e=>"category"===e.type);v=e&&e[0]&&e[0].name}}v=v?v&&v.charAt(0).toUpperCase()+v.substring(1):"All Products";let T="certified-pre-owned"===v?"Certified Pre-Owned":v;if("Bundles"===T){const e=t?.filter(e=>"compatible_device"===e.type)[0];e&&e.values&&e.values.length>0&&(T=`${T} for ${e.values.join(", ")}`)}y=y||T;const C=d("mtnFlow"),E="true"===d("isFirstLine"),O=p("cdlThrottleList")||"",A=s?.PLAN_FIRST_HEADER_1||"",D=s?.PLAN_FIRST_HEADER_2||"",k=s?.PLAN_FIRST_NEXTGEN_HEADER_1||"",_=s?.PLAN_FIRST_NEXTGEN_HEADER_2||"",M=O&&O?.includes("NEXTGEN_PF");"P"===C&&(y=E?A:D,M&&(y=E?k:_));return u&&(y=s?.LESS_EXPENSIVE_DEVICES||"Less expensive devices"),g&&(y=s?.PICK_YOUR_NEXT_DEVICE),f&&(y=r?.output?.cqContent?.seoMeta?.length>0?r.output.cqContent.seoMeta.find(e=>e.header)?.header:s?.OUR_BEST_SAVINGS_FOR_YOU),h||(h=1===t?.length&&I?l?.title:`${y?.replace(/-/g," ")} | Verizon`),{header:y,title:h||l?.title,description:l?.metaDescription,canonical:n(a,t,null,null,!1,!1,!0)}};
const getSeoDetails = (e,t,i,a,r)=>{const o=e,s=t,l=window?.location?.pathname?.includes("/iwv-devices"),n=o?.find(e=>"brand"===e?.type),d=o?.find(e=>"category"===e?.type),c=o?.find(e=>"compatible_device"===e?.type),p=o?.find(e=>"color"===e?.type),m=o?.find(e=>"sku_filter_display_name_ss"===e?.type),u=o?.find(e=>"uri"===e?.type);if(!u&&(n&&1===n?.values?.length||p&&1===p?.values?.length||c&&1===c?.values?.length||m&&1===m?.values?.length)&&!(n&&n?.values?.length>1)&&!(p&&p?.values?.length>1)&&!l){let e="#color# #brand# #compatible# #sku_filter# #category#";if(n&&1===n?.values?.length){let t;const i=s?.find(e=>"brand"===e?.refinementName?.toLowerCase());i&&i?.refinementOptions?.length>0&&(t=i?.refinementOptions.findIndex(e=>e?.isSelected&&e?.displayName?.toLowerCase()===n?.values[0]?.toLowerCase())),e=e.replace(/#brand#/g,t>-1?i?.refinementOptions[t].displayName:n?.values[0])}if(p&&1===p?.values?.length&&(e=e.replace(/#color#/g,p?.values[0])),c&&1===c?.values?.length&&(e=e.replace(/#compatible#/g,c?.values[0])),m&&1===m?.values?.length){const t=unescape(m?.values[0]||"");e=e.replace(/#sku_filter#/g,t.substring(t.indexOf(":")+1))}if(d){const t=d?.values[0]?.replace(/prepaid-/g," ");e=e.replace(/#category#/g,t)}return e=e.replace(/#brand#|#color#|#compatible#|#category#|#sku_filter#/g,""),e=e.replace(/ {2}/g," "),{header:`Prepaid ${e}`,title:a(`${e?.replace(/-/g," ")} | Verizon`),description:`Find ${e}  at Verizon. Shop online today.`,canonical:r?r(i,o,null,null,!1,!0):null}}return null};
const capitalizeFirstLetter = e=>`${e?.charAt(0)?.toUpperCase()}${e?.slice(1)}`;
const getParameterByName = e=>{const t=window?.location?.search,i=new URLSearchParams(t);return i?.get(e)};
const getVerizonGridwallCookie = e=>{const t=window?.cookieKeys?.get(e);if(t)return t;return document?.cookie?.match(`(^|;)\\s*${e}\\s*=\\s*([^;]+)`)?.pop()||""};
const constructGWUrl = (e,t,i,a,r=!1,s=!1,l=!1,n=!1)=>{const d=window?.location?.pathname?.includes("/products/sale"),c=window?.location?.pathname?.includes("/iwv-devices"),p=window?.location?.pathname?.includes("/gridwall"),m=new URLSearchParams(window?.location?.search),u=m.get("sedOfferId"),g=m.get("barcode"),f=window?.location?.pathname?.includes("/certified-pre-owned"),y=t&&t?.find(e=>"special_offers"===e?.type?.toLowerCase()&&(e?.values?.includes("On-Sale")||e?.values?.includes("on-sale"))),h=d||f,v=t&&t?.find(e=>"brand"===e?.type?.toLowerCase()),P=v?.values?.map(e=>e?.replace(/ /g,"-")?.replace("&","and"))||[],b=t&&t?.find(e=>"uri"===e?.type?.toLowerCase()&&e?.values?.length>0),I=s?["color","compatible"]:["sedOfferId","os","color","special-offers","device-type","subcategory","compatible","price","ispu","condition","availability"],w={},S=window?.APP_STATE?.isVBMGridwall||!1;I.forEach(i=>{let a=i;if("special-offers"===i&&(a="special_offers"),"device-type"===i&&(a="devicefiltertype"),"compatible"===i&&(a="compatible_device"),"price"===i)if("device"===e){const e=window?.APP_STATE?.gridwall?.promoIntendType;a=n?`sku_preferred_dpp_price_tradeIn_${e}_f`:`sku_preferred_dpp_price_${e}_f`}else a="sku_preferred_frp_price_f";"condition"===i&&(a="condition_seo_url_name_s"),"availability"===i&&(a="critical_inventory_b");const r=t?.find(e=>e?.type===a&&e?.values?.length>0);if(r){const e=i.replace(/ /g,"_");if("ispu"===a)w[e]=r.locationCode;else if(h){if(f)if("condition_seo_url_name_s"===a&&r?.values?.length>1){const t=r?.values?.map(e=>e?.replace(/certified-pre-owned/gi,"")?.replace(/ /g,"-")?.replace(/&/g,"and"));w[e]=t?.filter(e=>e)?.join("+")}else"condition_seo_url_name_s"!==a&&(w[e]=r?.values?.map(e=>e?.replace(/ /g,"-")?.replace(/&/g,"and"))?.join("+"));else if(d)if("special_offers"===a&&r?.values?.length>1){const t=r?.values?.map(e=>e?.replace(/on-sale/gi,"")?.replace(/ /g,"-")?.replace(/&/g,"and"));w[e]=t?.filter(e=>e)?.join("+")}else"special_offers"!==a&&(w[e]=r?.values?.map(e=>e?.replace(/ /g,"-")?.replace(/&/g,"and"))?.join("+"))}else if("special_offers"===a){const t=/nse-|aal-|eup-/i;w[e]=r?.values?.map(e=>e?.replace(t,"")?.replace(/ /g,"-")?.replace(/&/g,"and"))?.join("+")}else w[e]="critical_inventory_b"===a?"exclude-out-of-stock":r?.values?.map(e=>e?.replace(/ /g,"-")?.replace(/&/g,"and"))?.join("+")}u&&(w.sedOfferId=u,g&&(w.barcode=g))});const T=t?.filter(e=>"sku_filter_display_name_ss"===e?.type&&e?.values?.length>0);T?.length>0&&T?.map(e=>{const t=e?.values[0],i=`s_${t.substring(0,t?.indexOf(":"))}`,a=e?.values?.map(e=>e.substring(e.indexOf(":")+1));return w[i]=a?.map(e=>e?.replace(/ /g,"-").replace(/&/g,"and")).join("+"),!0}),i&&"featured"!==i&&(w.sort=i),a?.length>0&&a.forEach(e=>{w[e.key]=e.value});const C=new URLSearchParams(w)?.toString();let E="";if(b&&!c&&!p){b.values[0].lastIndexOf("/")!==b.values[0].length-1&&(b.values[0]=`${b.values[0]}/`);const e=b.values[0].split("/");return s?`${b.values[0]}${P.length>0?`${P.join("+")}/`:""}${C?`?${decodeURIComponent(C)}`:""}`:l?`${b.values[0]}/prepaid/`:(E=`${"../".repeat(e.length)}${b.values[0]}${P.length>0?`${P.join("+")}/`:""}${C?`?${decodeURIComponent(C)}`:""}`,void(r&&window?window.location.href=(0,o.validateUrl)(`${E}`):setTimeout(()=>{window.history.replaceState(null,document.title,E)},5)))}if("device"===e||"accessory"===e){let i=t?.find(e=>"category"===e?.type?.toLowerCase());const a=t?.find(e=>"condition_seo_url_name_s"===e?.type?.toLowerCase()&&(e?.values?.includes("Certified-Pre-Owned")||e?.values?.includes("certified-pre-owned"))),n=t?.find(e=>"freephone"===e?.type?.toLowerCase());let m,u=i?.values[0];if(u?.indexOf("prepaid")>-1&&(u=u?.split("prepaid-")[1]),p?m="us/gridwall":c?m="us/iwv-devices":i?m=n?window?.CQ_CONTENT?.label?.refinementFilters?.freePhoneUrl:f&&a?.values?.length>0?`${u}/certified-pre-owned`:u||"allproducts":(i=t?.find(e=>"special_offers"===e?.type?.toLowerCase()),m=i||d&&y?"sale":"allproducts"),"postpaid-devices"===m&&(m="devices"),s)return m="allproducts"===m&&P.length>0?"":m,`${c||"accessory"!==e?"":"products/"}${m}${""!==m?"/":""}${P.length>0?`${P.join("+")}/`:""}${C?`?${decodeURIComponent(C)}`:""}`;if(l)return`${c||"accessory"!==e?"":"products/"}${m}/prepaid/`;let g=3;if(S&&window?.APP_STATE?.requestPath){const{requestPath:e}=window.APP_STATE;g=e.split("/").length+1,r||(m="/"===e.charAt(e.length-1)?e.substring(0,e.length-1):e)}if(t.length>1||C.length>0){if(window&&window.location.pathname.includes("/prepaid")){const e=window?.APP_STATE?.domainPath,t=P.length>0?`${P.join("+")}/`:"",i=C?`?${decodeURIComponent(C)}`:"";E=`${e}${m}/prepaid/${t}${i}`}r&&window?window.location.href=(0,o.validateUrl)(`${E}`):setTimeout(()=>{window.history.replaceState(null,document.title,E)},5)}else if(window&&window.location.pathname.includes("/page")?window.history.replaceState(document.title,"",E):setTimeout(()=>{window.history.replaceState(null,document.title,E)},5),window&&window.location.pathname.includes("/prepaid")){const e=P.length>0?`${P.join("+")}/`:"",t=C?`?${decodeURIComponent(C)}`:"";E=`${window?.APP_STATE?.domainPath}${m}/prepaid/${e}${t}`}}};
document && document.addEventListener("readystatechange", () => {
if (window?.performance){
console.debug("readystate==>", document.readyState, performance?.now())
}
// if(document.readyState === "complete") {
//   console.log("test run to invoke launch.js scripts after dom")
//   var isMiniPdp = window.location.search.includes('isMiniPdp=true') || false;
//   var isMVA = window.navigator.userAgent.indexOf('MY_VZW_APP') > -1;
//   var flowCookie = getVzCookieValue('Flow') === 'DigitalExchange';
var isTaggingDisabled = getVzCookieValue('isTaggingDisabled');
const isCommonPdp = window?.APP_STATE?.pdp?.isCommonPDP;
const pdp = isCommonPdp? 'pdeatils' : 'pdp';
var pageName = window?.APP_STATE?.gridwall ? 'gridwall' : pdp;
if (window?.performance?.measure && typeof sessionStorage !== 'undefined') {
window.performance.measure(`${pageName}:ui:${sessionStorage?.getItem?.('channelId') || 'VZW_U'}:[flowName]:readystatechange:${document.readyState}`);
}
if (document.readyState === "complete" && window.cookieKeys) {
delete window.cookieKeys
}
const enablePdpChunkPrefetch = getChannelId() === 'VZW-MFA-ANDROID' ? window?.MODEL_JSON?.AndroidPdpPrefetchType?.toUpperCase()?.includes('CHUNK') : window?.MODEL_JSON?.NonAndroidPdpPrefetchType?.toUpperCase()?.includes('CHUNK');
if(document.readyState === "complete" && pageName ==='gridwall' && enablePdpChunkPrefetch) {
setTimeout(() => {
const assets = "https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/Debug.OD19004fdb1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/EmailCapture.OD971eeb451778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/FeaturesComponent.OD0b15106d1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/NFLPromo.OD9c49aacb1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/NexSteps.ODb0fa3b441778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/PDPWishlist.OD9ea2879d1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/PromoModal.ODbddd77f31778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/302.ODecae19ec1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/53.OD7d364e341778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/543.ODa4fd81241778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/77.OD0a7925a51778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/79.OD825619bb1778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/main.OD6704fc761778139350542.chunk.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/productdetails.OD62e2f8711778139350542.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/sw.js,https://scache-ws.vzw.com/w/ssr-digital-prepay/static/nextgen/js/vendors.ODe09789fd1778139350542.js";
const pdpAssets = assets?.split(',');
if(pdpAssets?.length > 0 ) {
pdpAssets.forEach((item) => {
if (item) {
const link = document.createElement('link');
link.as = 'script';
link.rel = "prefetch";
link.fetchpriority = "low";
link.href = item;
document.head.appendChild(link);
}
});
}},3000);
}
})
document && document.addEventListener("DOMContentLoaded", () => {
if (window?.performance){
console.debug("DOMContentLoaded==>", performance?.now())
}
/* ------------dont remove this piece of code. Required for Left Rail Sticky Experience------------------- */
if (window) {
window.isPageLoaded = true;
}
/* -------------------------------------------------------------------------------------------------------- */
const loggedIn = getVzCookieValue('loggedIn');
const isTaggingDisabled = getVzCookieValue('isTaggingDisabled');
const flowCookie = getVzCookieValue('Flow') === 'DigitalExchange';
const isMiniPdp = window.location.search.includes('isMiniPdp=true') || false;
const globalId = getVzCookieValue('GLOBALID');
if (!globalId) {
const randomId = generateRandomId();
const date = new Date();
date.setTime(date.getTime() + (60 * 24 * 60 * 60 * 1000));
const expiryTime = `${date.toUTCString()}`;
setVzCookie('GLOBALID', randomId, expiryTime);
}
function generateRandomId() {
const length = 32;
const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
let result ='';
for(let i=0; i<length;i++) {
const randomTextIndex = Math.floor(Math.random() * characters.length);
result +=characters[randomTextIndex];
}
return result;
}
if(!isMiniPdp) {
if(window.MODEL_JSON && window.MODEL_JSON && window.MODEL_JSON.omniCobraEnabled &&  window.MODEL_JSON.taggingCobraScript && !isTaggingDisabled && !cdlThrottleList?.includes('R_K_S_3') ) {
var s = document.createElement('script');
s.type = 'text/javascript';
s.defer = true;
s.src = window.MODEL_JSON.taggingCobraScript;
document.body.appendChild(s);
}
if (window.navigator.userAgent.indexOf('MY_VZW_APP') < 0) {
document.getElementById('vz-gh20').style.display = 'block';
document.getElementById('vz-gf20').style.display = 'block';
} else {
if(document?.getElementById('seoContent')) {
document.getElementById('seoContent').style.display = 'none';
}
if(document?.getElementById('breadCrumb')) {
/* offline: keep breadcrumb visible */;
}
if(document?.getElementById('mvaOneSearchSkeleton')) {
document?.getElementById('mvaOneSearchSkeleton')?.setAttribute('style', 'display:block !important');
}
//set title as product details MVA only
if(window.APP_STATE && window.APP_STATE.pdp) {
const cq_content = window?.CQ_CONTENT?.label;
updateNavigationForThreePointo(cq_content?.DIGITAL_EXCHANGE_TITLE_PDP, true);
}
if(loggedIn && window.APP_STATE && window.APP_STATE.pdp) {
showTabBar(false);
}
if(window?.APP_STATE && window?.APP_STATE?.gridwall){
const { category = '', productType = '', filterDataList = [],  refinements = [], aemContent = {}, breadCrumbs = [], seoMetaData = {} } = window?.APP_STATE?.gridwall;
const pageTitleInfo = getPageTitle(category, filterDataList, refinements, productType, aemContent, breadCrumbs, window?.CQ_CONTENT?.label, seoMetaData, constructGWUrl, getParameterByName, getSeoDetails, getVerizonGridwallCookie, capitalizeFirstLetter, false, false);
const titleForMVA = pageTitleInfo?.header?.replace(/-/g, ' ')?.trim() || document.title;
console.log("@dev inside script titleForMVA", titleForMVA)
if(loggedIn){
showTabBar(false);
}
window.mvaTitle = titleForMVA;
window.isMvaInitialTitleLoaded = true;
updateNavigationForThreePointo(titleForMVA, true);
}
}
if((!loggedIn || loggedIn !== 'true')){
console.debug('loggedIn', loggedIn, 'personalizedCookie');
const pageElement = document.getElementById('page');
pageElement?.classList.remove('loading');
}
if(!window?.APP_STATE?.gridwall?.isPersonalized) {
const pageElement = document.getElementById('page');
pageElement?.querySelectorAll('.tilesLoading')?.forEach((elem) => elem.style.display = 'none');
}
if (loggedIn === 'true' && window.disableGnavPromoBanner) {
const style = document.createElement('style');
style.innerText = '.gnav20 .gnav20-promo { display: none; }';
document.body.appendChild(style);
}
if (window.location.search.includes('UseProxyRoutes=Y')) {
window.sessionStorage.setItem('UseProxyRoutes', 'Y');
}
if (window.location.search.includes('prospectAPI=true') && window.location.pathname.includes('/products')) {
setVzCookie('cdlThrottleList', getVzCookieValue('cdlThrottleList') + 'NSA_REDIRECT_TH_PROSPECT_GW_PDP_NSA_ADD_TO_CART_ENABLE_ACC|');
}
if (window.sessionStorage.getItem('prospectAPI') && (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') && !window.location.search.includes('prospectAPI=Y')) {
window.location.href = window.location.pathname + '?prospectAPI=Y'
}
if (window.location.search.includes('prospectAPI=true') && !window.location.pathname.includes('/products')) {
window.sessionStorage.setItem('prospectAPI', 'Y');
setVzCookie('hubProspectCart', true);
}
if (window.location.search.includes('loggedIn=true')) {
setVzCookie('loggedIn', true);
}
}
if(flowCookie || isMiniPdp) {
/* offline */ void 0;
/* offline */ void 0;
}
window.addEventListener("pageshow", function (event) {
var historyTraversal = event.persisted || (typeof window.performance !== 'undefined' && window.performance.navigation.type === 2);
if (historyTraversal) {
// Handle page restore from bfcache on all platforms.
// Without this, stale JS state (e.g. initBV productId) causes errors and the loader stays visible.
document.querySelectorAll('#loader').forEach((elem) => elem.style.display = 'none');
window.location.reload();
}
if (event.persisted) {
console.log('This page was restored from the bfcache.');
} else {
console.log('This page was loaded normally.');
}
});
if(!window?.MODEL_JSON?.EnableWebWorker){
var throttleList=getVzCookieValue('cdlThrottleList');
if(throttleList !=null && throttleList.includes('R_K_S_6')){
return ;
}
var newRelicScript = document.createElement('script');
newRelicScript.type = 'text/javascript';
newRelicScript.defer = true;
newRelicScript.src = window?.MODEL_JSON?.newRelicScript;
document.body.appendChild(newRelicScript);
}
});
//end gnav
</script>

<div class="gnav20-click-div"></div><script id="offline-gridwall-stubs">
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