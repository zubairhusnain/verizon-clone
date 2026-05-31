/*JS Code*/
document.addEventListener('DOMContentLoaded', function() {
  //console.log('document is ready.');
  var vWaitForWomenColab = setInterval(function () {
      if ((window.location.pathname.toLowerCase() == '/about/womens-co-lab') && (document.querySelector('.descprition-cta .link-cta a') != null )) {
        clearInterval(vWaitForWomenColab);
        //console.log('applying womens-co-lab fix via native javascript!!!');
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.src = "//info.verizonwireless.com/js/forms2/js/forms2.min.js";
        document.querySelector('head').append(s);
        document.querySelector('.descprition-cta .link-cta a').setAttribute('href', 'javascript:void(0);');
        document.querySelector(".descprition-cta .link-cta a").addEventListener('click', function (e) {
          document.querySelector(".fp_body_one_digital-component").scrollIntoView();
        });
      }
    }, 5);
    
    // home pg sizzle h1 update
    var vHomePg1SizzleH1 = 0;
    var vWaitForHomePg1SizzleH1 = setInterval(function () {
      //if ((window.location.pathname.toLowerCase() == '/about') && (vz_contains('.sizzle-video_content h1',  "Better holiday deals and steals at Verizon.").length > 0)) {
      if ((window.location.pathname.toLowerCase() == '/about') && (vz_contains('.fp_hero_display_one_digital-component h1',  "A record year for  VerizonFrontline.").length > 0)) {
        //clearInterval(vWaitForHomePg1SizzleH1);
        //console.log('applying home pg sizzle h1 fix via native javascript!!!');
        document.querySelector('.fp_hero_display_one_digital-component h1').innerHTML = '<br>A record year for  <br>Verizon<span style="color: #d52b1e">Frontline</span>.';
      }
      vHomePg1SizzleH1++;
      // wait for desired seconds for rest of the pages and end interval
      if (vHomePg1SizzleH1 > 750) {
        //console.log('clearing interval home pg sizzle h1 fix via native javascript!!!');
        clearInterval(vWaitForHomePg1SizzleH1);
      }
    }, 1);
    
    //home page padding bottom
    console.log('vMonHomePg start...');
    var vMonHomePg = 0;
    var vWaitForvMonHomePg = setInterval(function () {
      //if (window.location.pathname.toLowerCase().indexOf('/about/test-mvp-mon') != -1 && document.querySelectorAll('.component-start .fp_hero_display_one_digital-component').length > 0) {
      if (document.querySelectorAll('.node-927809').length > 0 && document.querySelectorAll('.component-start .fp_hero_display_one_digital-component').length > 0) {
        clearInterval(vWaitForvMonHomePg);
        console.log('applying vMonHomePg fix via native javascript!!!');
        var reqChildNodes = document.querySelector('.component-start').childNodes;
        reqChildNodes.forEach(function( element, index) {
          //console.log(element.innerHTML);
          if (index != 0 && index != 1 && index != (reqChildNodes.length - 1) && index != (reqChildNodes.length - 2)) {
            element.style.marginBottom = '80px';
          }
          if (index == 0) {
            element.style = 'padding-top: 60px !important; padding-bottom: 40px !important';
          }
        });
      }
      vMonHomePg++;
      // wait for desired seconds for rest of the pages and end interval
      if (vMonHomePg > 750) {
        console.log('clearing interval vMonHomePg fix via native javascript!!!');
        clearInterval(vWaitForvMonHomePg);
      }
    }, 1);
    
});
function vz_contains(selector, text) {
  //console.log('inside vz_contains....');
  var elements = document.querySelectorAll(selector);
  return [].filter.call(elements, function(element){
    return RegExp(text).test(element.textContent);
  });
}

if (window.location.pathname.toLowerCase() == '/about/womens-co-lab') {
  window.addEventListener('load', function() {
    //console.log('All assets are loaded')
    var s = document.createElement("script");
    s.type = "text/javascript";
    var code = 'MktoForms2.loadForm("//info.verizonwireless.com", "324-BZD-350", 2626);';
    try {
      s.appendChild(document.createTextNode(code));
      document.body.appendChild(s);
    } catch (e) {
      s.text = code;
      document.body.appendChild(s);
    }
  })
}
var vWaitForJQuery = setInterval(function () {
  //console.log('set Interval...');
  if (typeof jQuery != 'undefined') {
    clearInterval(vWaitForJQuery);
    fnJqueryReady();
  }
}, 10);
function fnJqueryReady() {
  jQuery(document).ready(function() {
    
    //home page content update on 12/3/2021
    
    // do not remove, this bookmark is for small business training page
		var vSmallBuzTra = 0;
    var vWaitForSmallBuzTra = setInterval(function () {
      //console.log('set Interval vWaitForSmallBuzTra...');
      if (jQuery('.fp_media_cta_one_digital-component:eq(2) h2:contains(See how it\'s already helping to benefit small business owners)').length > 0) {
        clearInterval(vWaitForSmallBuzTra);
        //console.log('applying small buz training fix!!!');
        jQuery('.fp_media_cta_one_digital-component:eq(2)').attr('id', 'benefitvideo');
        jQuery('.fp_media_cta_one_digital-component:eq(1)').attr('id', 'learning');
        if (window.location.href.toLowerCase().indexOf('#learning') > 0) {
					jQuery("html, body").animate({scrollTop: jQuery('.fp_media_cta_one_digital-component:eq(1)').offset().top}, 1200);
				} else if (window.location.href.toLowerCase().indexOf('#benefitvideo') > 0) {
					jQuery("html, body").animate({scrollTop: jQuery('.fp_media_cta_one_digital-component:eq(2)').offset().top}, 1200);
				}
      }
      
      //home page highlight in red
      if (jQuery('.node-917883 .fp_media_cta_one_digital-component:eq(0) .card-title h1:contains(Get NFL Sunday Ticket)').length > 0) {
        console.log('home page red highlight...');
        clearInterval(vWaitForSmallBuzTra);
        jQuery('.fp_media_cta_one_digital-component:eq(0) .card-title h1').html('Get NFL Sunday Ticket from YouTube. <br role="presentation"><span style=\"color: #EE0000 !important;\">On us.</span>');
      }
      vSmallBuzTra++;
      // wait for desired seconds for rest of the pages and end interval
      if (vSmallBuzTra > 750) {
        //console.log('clearing interval small buz training other pages!!!');
        clearInterval(vWaitForSmallBuzTra);
      }
    }, 2);
    
    //responsibility/human-prosperity/reskilling-program
    var vReSkillProgram = 0;
    var vWaitForReSkillProgram = setInterval(function () {
      //console.log('set Interval vWaitForReSkillProgram...');
      jQuery('.page-header h1:contains("Reskilling Program")').parent().hide();
      if (jQuery('.node-920025 .fp_two_columns_one_digital-component:first h2').length > 0) {
        clearInterval(vWaitForReSkillProgram);
        //console.log('applying reskilling-program fix!!!');
        //jQuery('.page-header h1:contains("Reskilling Program")').hide();
        jQuery('.node-920025 .fp_two_columns_one_digital-component:first h2').prop("outerHTML", vzc_wysiwyg_custom_replaceTag(jQuery('.node-920025 .fp_two_columns_one_digital-component:first h2'), 'h1'));
      }
      vReSkillProgram++;
      // wait for desired seconds for rest of the pages and end interval
      if (vReSkillProgram > 900) { // 9 seconds
        clearInterval(vWaitForReSkillProgram);
      }
    }, 10);

    //Career areas breadcrumb issue
    var vWaitForBreadcrumbLoad = setInterval(function () {
      //console.log('set Interval vWaitForBreadcrumbLoad...');
      if (jQuery('ol.breadcrumb li[aria-current="page"]:contains(Career Areas)').length > 0 || jQuery('ol.breadcrumb li[aria-current="page"]').prev("li:contains(Career Areas)").length > 0) {
        clearInterval(vWaitForBreadcrumbLoad);
        jQuery('ol.breadcrumb li[aria-current="page"]:contains(Career Areas)').prev().hide();
        jQuery('ol.breadcrumb li[aria-current="page"]').prev("li:contains(Career Areas)").prev().hide();
      }
    }, 10);

    // SMB Page
    var vWaitForSpanSMBCRM = setInterval(function () {
      //console.log('set Interval...');
      if (jQuery('.mktoButtonWrap.mktoSimple').length > 0) {
        clearInterval(vWaitForSpanSMBCRM);
        //console.log('applying SMB CRM fix!!!');
        jQuery('.mktoButtonWrap.mktoSimple').removeAttr('style');
      }
    }, 10);
    if (jQuery('form[id="mktoForm_2509"]').length > 0) {
      jQuery('head').append('<script src="//info.verizonwireless.com/js/forms2/js/forms2.min.js"><\/script>');
    }
    if (jQuery('form[id="mktoForm_2512"]').length > 0) {
      jQuery('head').append('<script src="//info.verizonwireless.com/js/forms2/js/forms2.min.js"><\/script>');
    }
    
    //matchmaker quiz
    jQuery('.quiz-page-social-share-links').hide();

    if (jQuery(window).width() < 376) {
      jQuery('.ckeditor-content table').css('width', '100%');
      jQuery('.news-fp-body .ckeditor-content table tbody tr td').css('vertical-align', 'top');
    }
    
    jQuery('.news-full-wid-img-vid-body .img-thumbnail-link img').css('height', 'auto');
    jQuery('.slider').css('z-index', 115);
    setTimeout(function() {
      if (jQuery('body').hasClass('investors') && jQuery('nav > ol.breadcrumb li:nth-child(2) a').text() == 'News') {
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').text('Investors');
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').attr('href', '/about/investors');
      }
      if (jQuery('body').hasClass('our-company') && jQuery('nav > ol.breadcrumb li:nth-child(2) a').text() == 'News') {
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').text('Our Company');
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').attr('href', '/about/our-company');
      }
      if (jQuery('body').hasClass('responsibility') && jQuery('nav > ol.breadcrumb li:nth-child(2) a').text() == 'News') {
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').text('Responsibility');
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').attr('href', '/about/responsibility');
      }
      if (jQuery('body').hasClass('careers') && jQuery('nav > ol.breadcrumb li:nth-child(2) a').text() == 'News') {
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').text('Careers');
        jQuery('nav > ol.breadcrumb li:nth-child(2) a').attr('href', '/about/careers');
      }
    }, 500);


    var vWaitForMediaContact = setInterval(function () {
      if (jQuery('.node-920925 .body-container .news-fp-media-contact .news-fp-media-body:not(:first) .news-fp-media_phone').length > 0) {
        clearInterval(vWaitForMediaContact);
        var html = jQuery('.node-920925 .body-container .news-fp-media-contact .news-fp-media-body:not(:first) .news-fp-media_phone').html();
        jQuery('.node-920925 .body-container .news-fp-media-contact .news-fp-media-body:not(:first) .news-fp-media_phone').html('<a target="_blank" href="' + html +'">' + html + '</a>');
      }
      if (jQuery('.node-920989 .news-fp-media-contact .news-fp-media-body:nth-child(3) .news-fp-media_phone').length > 0) {
        clearInterval(vWaitForMediaContact);
        var html = jQuery('.node-920989 .news-fp-media-contact .news-fp-media-body:nth-child(3) .news-fp-media_phone').html();
        jQuery('.node-920989 .news-fp-media-contact .news-fp-media-body:nth-child(3) .news-fp-media_phone').html('<a style="text-decoration:underline" target="_blank" href="' + html +'">' + html + '</a>');
      }
    }, 10);

    // investor /investors/schedule-outstanding-debt page fix
    if (jQuery('.node-918069.node-type-flexpage.investors.schedule-outstanding-debt').length > 0) {
      if (window.innerWidth <= 767) {
        jQuery('head').append('<style>@media screen and (max-width:767px){.fp_body_one_digital-component .ckeditor-content table{display:block;}}</style>');
      }
    }
    

  });
  jQuery(window).on('load', function () {
  

    if (jQuery('.node-917883 .fp_media_cta_one_digital-component:eq(0) .card-title h1:contains(Get NFL Sunday Ticket)').length > 0) {
        console.log('home page red highlight LOAD...');
        jQuery('.fp_media_cta_one_digital-component:eq(0) .card-title h1').html('Get NFL Sunday Ticket from YouTube. <br role="presentation"><span style=\"color: #EE0000 !important;\">On us.</span>');
      }
  	// about/responsibility/digital-inclusion/small-business-training#benefitvideo
  	if (window.location.href.indexOf("about/responsibility/digital-inclusion/small-business-training#benefitvideo") > -1) {
      jQuery('html, body').animate({
        scrollTop: jQuery("#learning").next().offset().top
    	}, 2000);
    }
    
    // investor /investors/schedule-outstanding-debt page fix
    if (jQuery('.node-918069.node-type-flexpage.investors.schedule-outstanding-debt').length > 0) {
      if (window.innerWidth <= 767) {
        jQuery('head').append('<style>@media screen and (max-width:767px){.fp_body_one_digital-component .ckeditor-content table{display:block;}}</style>');
      }
    }
    
    if (jQuery('form[id="mktoForm_2509"]').length > 0) {
      jQuery('body').append('<script>MktoForms2.loadForm("//info.verizonwireless.com", "324-BZD-350", 2509);<\/script>');
    }
    if (jQuery('form[id="mktoForm_2512"]').length > 0) {
      jQuery('body').append('<script>MktoForms2.loadForm("//info.verizonwireless.com", "324-BZD-350", 2512);<\/script>');
    }
    
    //newscenter related article broken image
    jQuery( 'span.img-thumbnail-link img' ).each(function() {
      var srcval = jQuery( this ).attr( "src" );
      if (srcval == '') {
        jQuery( this ).parent().hide();
      }
    });

    jQuery('.node-922571 ol.breadcrumb').hide();



    if (window.innerWidth <= 767) {
       setTimeout(function() {
        jQuery('.react-multi-carousel-list.carousel-container ul').each(function() {
          jQuery(this).find('.image-carousel').attr("style","");
        });
        }, 500);    
    }


    /* snowflakes hide after 10 secs */    

        setTimeout(function() {
          jQuery('div.snowflakes').hide();
        }, 10000)

    /* snowflakes hide after 10 secs */    

    /* Color change of headline */
      jQuery('.fp_hero_display_one_digital-component #head3brblack').each(function() {
        var headText = jQuery(this).find(':header:first').html(); 
        var occrnce = 0;
        if (headText != undefined && headText != '') {
          var headHtml = headText.replace(/<br>/g, match => ++occrnce === 2 ? '<br><span style="color:#000 !important">' : match)
          if (occrnce >=2) {
            jQuery(this).find(':header:first').html(headHtml + '</span>'); 
          }
        }
      });

      jQuery('.fp_hero_display_one_digital-component #head2brblack').each(function() {
        var headText = jQuery(this).find(':header:first').html(); 
        var occrnce = 0;
        if (headText != undefined && headText != '') {
          var headHtml = headText.replace(/<br>/g, match => ++occrnce === 1 ? '<br><span style="color:#000 !important">' : match)
          if (occrnce >=1) {
            jQuery(this).find(':header:first').html(headHtml + '</span>'); 
          }
        }
      });
      
    /* Color change of headline end*/

    /* Once author ready to apply image cropper(focal) for media-cta-comp we can remove the code below */
    
    jQuery('.fp_media_cta_one_digital-component div.video-content img').each(function() {
      var imgSrc = jQuery(this).attr('src');
      imgSrc = imgSrc.replace("styles/hero_mobile/public/", "");
      imgSrc = imgSrc.replace("styles/hero_tablet/public/", "");
      jQuery(this).attr('src', imgSrc);
    })
    
    /* Once author ready to apply image cropper(focal) for media-cta-comp we can remove the code above */


    /* Once Boardofdirectors detail page is ready to apply focal point we can remove the code below */
    
    var img = jQuery('div.leadership-bio.bod div.bod-image img');
    var imgSrc = img.attr('src');
    if (imgSrc != undefined && imgSrc != '') {
      imgSrc = imgSrc.replace("styles/hero_mobile/public/", "");
      imgSrc = imgSrc.replace("styles/hero_tablet/public/", "");
      img.attr('src', imgSrc);
    }
    var img_mobile = jQuery('div.leadership-bio.bod div.bod-image img.mode-mobile');
    img_mobile.attr('width', 177);
    img_mobile.attr('height', 221);   
    
    /* Once Boardofdirectors detail page is ready to apply focal point we can remove the code above */
    
    
    jQuery('#withFccCookie').click(function(e) {
    e.preventDefault();
    document.cookie = 'category=55+;domain=.verizon.com;path=/';
    document.cookie = 'site=InternalFlow;domain=.verizon.com;path=/';
    document.cookie = 'subCategory=;domain=.verizon.com;path=/'; 
    window.location.href = this.href;
    });    
 
   // External links modal logic begin
    if ((window.location.pathname.toLowerCase() == '/about/verizon-ethics')) {
    let links = jQuery('body .inner-content a');
    jQuery(links).each(function (idx, element) {
      let href = jQuery(this).attr('href');
      if(jQuery(this).hasClass('external-overlay')) {
        jQuery(this).attr('href', "javascript:void(0);");
        jQuery(this).attr('actualhref', href);
        jQuery(this).attr('id', 'extAnchorModal' + idx);
        jQuery(this).removeAttr('target');
      }

    });
      jQuery('a[id^=extAnchorModal]').each(function() { 
        jQuery(this).click(function(e) {
          link = jQuery(this).attr('actualhref');
          jQuery('.external-link-modal-container').show();
          jQuery('.external-link-modal-container #extLnkMdlBtn').attr('href', link);
        });
      });
    }
    jQuery('.external-link-modal-container a:contains("click here.")').on('click', function () {
        jQuery('.external-link-modal-container').hide();
    });
    // External links modal logic end      
     
    jQuery('div.news-inline-form.filter-catgeroy div#year_combo_options div.combo-select-item').each(function() {
     var ariaLabel = jQuery(this).attr('aria-label');
     if (ariaLabel != 'All years' && ariaLabel < 2017) {
      jQuery(this).parent().remove()
     }
    }) 
         
  });
}

function vzc_wysiwyg_custom_replaceTag($element, newTagName) {
	// Identify opening and closing tag
	var oldTagName = $element[0].nodeName,
		elementString = $element[0].outerHTML,
		openingRegex = new RegExp("^(<" + oldTagName + " )", "i"),
		openingTag = elementString.match(openingRegex),
		closingRegex = new RegExp("(<\/" + oldTagName + ">)$", "i"),
		closingTag = elementString.match(closingRegex);

	if (openingTag && closingTag && newTagName) {
		// Remove opening tag
		elementString = elementString.slice(openingTag[0].length);
		// Remove closing tag
		elementString = elementString.slice(0, -(closingTag[0].length));
		// Add new tags
		elementString = "<" + newTagName + " " + elementString + "</" + newTagName + ">";
	}
	//console.log('elementString'+elementString);
	return elementString;
}