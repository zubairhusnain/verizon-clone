$(document).ready(function () {

  /*var links = jQuery('.faqpromotext a[href^="#"]');
  links.each(function (i, link) {
      if($(link).attr('onclick')!=null && $(link).attr('onclick').indexOf('switchAnchor')<0){
          var target = $(link).attr('href');
          jQuery(link).attr('href', '#')
          jQuery(link).click(function (e) {
              e.preventDefault();
              gotoFaq(target);
          })
      }
  })

  function gotoFaq(item) {

      window.location.hash = '';
      window.location.hash = item;
      if (item.length) {
          jQuery("html,body").animate({
                  scrollTop: jQuery(item).offset().top - 200
              },
              500,
              'linear'
          );
      }

  }*/

  $(".faqpromotext li a").attr("role", "link");
  $(".faqpromotext li a").attr("tabindex", "0");
  const linkarrow = document.querySelectorAll('.faqpromotext li a');
  $(".faqpromotext li a[role='link'] , .faq-item-text p a , .slider-content a").click(function () {

    var item = $(this).attr('href');
    console.log("anchor link href:" + item);
    var arrChildren = [];
    arrChildren = $('.faqListitem ' + item).parentsUntil('.main-section');
    if (arrChildren[arrChildren.length - 1].previousElementSibling.getAttribute('aria-expanded') == 'false') {
      arrChildren[arrChildren.length - 1].previousElementSibling.click();
      console.log("previousElementSibling clicked");
    }

    if (item != null && item.startsWith('#')) {
      var items = item.split("#item");
      var parentVisibleDiv = jQuery(item).closest('div:visible');
      console.log("jQuery(item).offset().top:" + parentVisibleDiv.offset().top);
      var marqueeOffset = parentVisibleDiv.offset().top + 180;
      var nonMarqueeOffset = parentVisibleDiv.offset().top - 200;
      var sspy_offsetCheck = $('div').hasClass("marquee-popular-content");
      var newpromo_off = sspy_offsetCheck ? marqueeOffset : nonMarqueeOffset
      console.log("marqueeOffset:" + marqueeOffset);
      console.log("nonMarqueeOffset:" + nonMarqueeOffset);
      console.log("sspy_offsetCheck:" + sspy_offsetCheck);
      console.log("newpromo_off:" + newpromo_off);
      window.location.hash = '';
      window.location.hash = item;
      if (item.length) {
        jQuery("html,body").animate({
          scrollTop: newpromo_off ? marqueeOffset : nonMarqueeOffset
        },
          500,
          'linear'
        );
      }
      // $("li.faq_group_item_section #item"+items[1]).attr("aria-expanded","true").focus();
      $("li.faq_group_item_section #item" + items[1]).focus().click();
      // $("li.faq_group_item_section #text"+items[1]).show().attr("aria-hidden","false");
    }

  });


  $(".faqpromotext li a[role='link'] ,.faq-item-text p a ,.slider-content a").keydown(function (ev) {
    if (ev.which == 13) {
      $(this).click()
    }
  });

  /* let linkarrowFocus = 0;
   $(".faqpromotext li a[role='link']").keydown(function(e) {
    // Move up
   if (e.keyCode === 38 || e.keyCode === 40) {

      linkarrow[linkarrowFocus].setAttribute("aria-selected", false);


      if (e.keyCode === 40) {
        linkarrowFocus++;
        // If we're at the end, go to the start
       if (linkarrowFocus >= linkarrow.length) {
          linkarrowFocus = 0;
        }


        // Move down
      } else if (e.keyCode === 38) {
        linkarrowFocus--;
        // If we're at the start, move to the end
        if (linkarrowFocus < 0) {
          linkarrowFocus = linkarrow.length - 1;
        }

 
      }
 
    linkarrow[linkarrowFocus].setAttribute("aria-selected", true);
      linkarrow[linkarrowFocus].focus();

    }
  }); */

  const isEditMode = accessCookie('wcmmode') === 'edit';
  const isEmployeeOnlyContent = $('#employeeOnly').length > 0 && $('#employeeOnly').val() === 'true';
  const hasPromoSummary = $('#promoSummary').length > 0;
  const hasPromoText = $('#promoText').length > 0;

  // Determine if the content should be treated as employee-only (only if not in edit mode)
  const isEmployeeOnlyActive = isEmployeeOnlyContent && !isEditMode;

  if (hasPromoSummary) {
    if (isEmployeeOnlyActive) {
      // Hide summary elements initially for employee-only content
      $('#promoSummary, .summary-unfold').hide();

      if (vzwDL.mvo.utils.isLoggedIn()) {
        $('#promoText').hide();

        // Define a global callback for customer information once available
        const customerInfoCallback = () => {
          if (vzwDL?.customer?.customerAttributes?.VZWEmployeeAccount) {
            // Show summary for authenticated employees
            $('#promoSummary, .summary-unfold').show();
          } else {
            // Show promo text and unfold for non-employee customers
            $('#promoText').show();
            $('.text-fold').addClass('text-unfold').removeClass('text-fold');
          }
        };

        vzwDL.mvo.customerInfoEventBus.subscribe(vzwDL.mvo.customerInfoEvent, customerInfoCallback);
      } else {
        // If not logged in, show promo text and unfold
        $('#promoText').show();
        $('.text-fold').addClass('text-unfold').removeClass('text-fold');
      }
    } else {
      // If not employee-only content, always show promo summary
      $('#promoSummary').show();

      // Show promo text only if in edit mode
      if (isEditMode) {
        $('#promoText').show();
      } else {
        $('#promoText').hide();
      }
    }
  } else {
    // If no promo summary, always show promo text
    $('#promoText').show();
  }

  // Hide the full summary link container if there's no promo text
  if (!hasPromoText) {
    $('.full-summary-link-container').hide();
  }

  $('.full-summary-link').on('click', function () {
    let textContent = $('#promoText');
    let summaryContent = $('#promoSummary .faqpromotext');
    if (textContent.is(":visible")) {
      textContent.hide();
      summaryContent.show();
      $(this).text("Review full summary");
      $(this).attr('data-track', '{"type":"link","name":"Review full summary"}');

      if ($('.tsa_side_pod').length > 0 && $('.tsa_side_pod').is(':visible')) {
        const element = document.getElementById('promoSummary');
        element.classList.add('full-length-bg');
        element.style.setProperty('--bg-width', ($('#tl-TabletBodyContentSection').width() - 14) + 'px');
        element.style.setProperty('--bg-height', element.parentElement.offsetHeight + 'px');
      }
    } else {
      textContent.show();
      summaryContent.hide();
      $(this).text("Show simplified summary");
      $(this).attr('data-track', '{"type":"link","name":"Show simplified summary"}');

      if ($('.tsa_side_pod').length > 0 && $('.tsa_side_pod').is(':visible')) {
        const element = document.getElementById('promoSummary');
        element.style.setProperty('--bg-height', '0px');
      }
    }
  });
});
