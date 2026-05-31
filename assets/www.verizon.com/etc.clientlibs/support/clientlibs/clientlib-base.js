/*!
 * Generated using the Bootstrap Customizer (https://getbootstrap.com/docs/3.4/customize/)
 */

/*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under the MIT license
 */
 
$(function(){
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(t){"use strict";function e(e,o){return this.each(function(){var s=t(this),n=s.data("bs.modal"),a=t.extend({},i.DEFAULTS,s.data(),"object"==typeof e&&e);n||s.data("bs.modal",n=new i(this,a)),"string"==typeof e?n[e](o):a.show&&n.show(o)})}var i=function(e,i){this.options=i,this.$body=t(document.body),this.$element=t(e),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.fixedContent=".navbar-fixed-top, .navbar-fixed-bottom",this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,t.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};i.VERSION="3.4.1",i.TRANSITION_DURATION=300,i.BACKDROP_TRANSITION_DURATION=150,i.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},i.prototype.toggle=function(t){return this.isShown?this.hide():this.show(t)},i.prototype.show=function(e){var o=this,s=t.Event("show.bs.modal",{relatedTarget:e});this.$element.trigger(s),this.isShown||s.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',t.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){o.$element.one("mouseup.dismiss.bs.modal",function(e){t(e.target).is(o.$element)&&(o.ignoreBackdropClick=!0)})}),this.backdrop(function(){var s=t.support.transition&&o.$element.hasClass("fade");o.$element.parent().length||o.$element.appendTo(o.$body),o.$element.show().scrollTop(0),o.adjustDialog(),s&&o.$element[0].offsetWidth,o.$element.addClass("in"),o.enforceFocus();var n=t.Event("shown.bs.modal",{relatedTarget:e});s?o.$dialog.one("bsTransitionEnd",function(){o.$element.trigger("focus").trigger(n)}).emulateTransitionEnd(i.TRANSITION_DURATION):o.$element.trigger("focus").trigger(n)}))},i.prototype.hide=function(e){e&&e.preventDefault(),e=t.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),t(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),t.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",t.proxy(this.hideModal,this)).emulateTransitionEnd(i.TRANSITION_DURATION):this.hideModal())},i.prototype.enforceFocus=function(){t(document).off("focusin.bs.modal").on("focusin.bs.modal",t.proxy(function(t){document===t.target||this.$element[0]===t.target||this.$element.has(t.target).length||this.$element.trigger("focus")},this))},i.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",t.proxy(function(t){27==t.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},i.prototype.resize=function(){this.isShown?t(window).on("resize.bs.modal",t.proxy(this.handleUpdate,this)):t(window).off("resize.bs.modal")},i.prototype.hideModal=function(){var t=this;this.$element.hide(),this.backdrop(function(){t.$body.removeClass("modal-open"),t.resetAdjustments(),t.resetScrollbar(),t.$element.trigger("hidden.bs.modal")})},i.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},i.prototype.backdrop=function(e){var o=this,s=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var n=t.support.transition&&s;if(this.$backdrop=t(document.createElement("div")).addClass("modal-backdrop "+s).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",t.proxy(function(t){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(t.target===t.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),n&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!e)return;n?this.$backdrop.one("bsTransitionEnd",e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION):e()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var a=function(){o.removeBackdrop(),e&&e()};t.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",a).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION):a()}else e&&e()},i.prototype.handleUpdate=function(){this.adjustDialog()},i.prototype.adjustDialog=function(){var t=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&t?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!t?this.scrollbarWidth:""})},i.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},i.prototype.checkScrollbar=function(){var t=window.innerWidth;if(!t){var e=document.documentElement.getBoundingClientRect();t=e.right-Math.abs(e.left)}this.bodyIsOverflowing=document.body.clientWidth<t,this.scrollbarWidth=this.measureScrollbar()},i.prototype.setScrollbar=function(){var e=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"";var i=this.scrollbarWidth;this.bodyIsOverflowing&&(this.$body.css("padding-right",e+i),t(this.fixedContent).each(function(e,o){var s=o.style.paddingRight,n=t(o).css("padding-right");t(o).data("padding-right",s).css("padding-right",parseFloat(n)+i+"px")}))},i.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad),t(this.fixedContent).each(function(e,i){var o=t(i).data("padding-right");t(i).removeData("padding-right"),i.style.paddingRight=o?o:""})},i.prototype.measureScrollbar=function(){var t=document.createElement("div");t.className="modal-scrollbar-measure",this.$body.append(t);var e=t.offsetWidth-t.clientWidth;return this.$body[0].removeChild(t),e};var o=t.fn.modal;t.fn.modal=e,t.fn.modal.Constructor=i,t.fn.modal.noConflict=function(){return t.fn.modal=o,this},t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(i){var o=t(this),s=o.attr("href"),n=o.attr("data-target")||s&&s.replace(/.*(?=#[^\s]+$)/,""),a=t(document).find(n),r=a.data("bs.modal")?"toggle":t.extend({remote:!/#/.test(s)&&s},a.data(),o.data());o.is("a")&&i.preventDefault(),a.one("show.bs.modal",function(t){t.isDefaultPrevented()||a.one("hidden.bs.modal",function(){o.is(":visible")&&o.trigger("focus")})}),e.call(a,r,this)})}(jQuery);
});

/***************************************************************************
 *           like/unlike UI code
 ****************************************************************************/
var scrollToArticle = false;
var cartridgeFlags = cartridgeFlags || {};
cartridgeFlags.detailPgBackButton = true;
cartridgeFlags.tabletNavigation = {
    isTablet: false
};
cartridgeFlags.tabletBackToTop = true;
cartridgeFlags.stickyNavigationScroll = true;
cartridgeFlags.clickableRecordDiv = true;
cartridgeFlags.clickableRecordDivName = ".record-video-preview"

cartridgeFlags.supportDetailScrollToContent = {
    // Sonar fix: expression `false && !false` always evaluated to false; simplified to `false`.
    isHub: false
};

cartridgeFlags.ratingsandreview = {
    ratingsFlag: 'true',
    appType: 'M',
    webserverpath: '//scache.vzw.com/support/',
    isRatingsAndReviewEnabled: 'true',
    aggrUrl: '',
    videoPage: '',
    isDesktop: 'true'
};
cartridgeFlags.salesCampaignProps = {
    pageName: '/detail',
    enable: 'true',
    agent: 'desktop'
};

function _hbxStrip(a) {
    a = a.split("|").join("");
    a = a.split("&").join("");
    a = a.split("'").join("");
    //a = a.split("#").join("");
    a = a.split("$").join("");
    a = a.split("%").join("");
    a = a.split("^").join("");
    a = a.split("*").join("");
    a = a.split(":").join("");
    a = a.split("!").join("");
    a = a.split("<").join("");
    a = a.split(">").join("");
    a = a.split("~").join("");
    a = a.split(";").join("");
    a = a.split("?").join("");
    a = a.split("?").join("");
    a = a.split("+").join(" ");
    return a;
}

function _hbLinkClick(lid) {
    var linkID = _hbxStrip(lid);
    _hbLink(linkID.toLowerCase(), '');
}

function applyRatingLoggedInClass() {
    if (window.vzwDL && vzwDL.mvo && vzwDL.mvo.utils && vzwDL.mvo.utils.isLoggedIn()) {
        $('.rating_div').addClass('rating_div--loggedin');
    }
}

jQuery(document).ready(function() {
    // Check login state at page ready
    applyRatingLoggedInClass();
    // Re-check after personal.js / gnav auth resolves (async, ~2-3s)
    setTimeout(applyRatingLoggedInClass, 3500);

    var URL_prefix = "";
    if (reviewRatingsUrl != undefined) {
        var reviewRatingsURL = reviewRatingsUrl;
    } else {
        var reviewRatingsURL = "/digital/nsa/nos/gw/support/rating-and-reviews";
    }

	var message = "Thank you for your feedback.";

    let data = {};
    if (typeof cartridgeFlags != 'undefined') {
        if (cartridgeFlags.ratingsandreview) {
           data = cartridgeFlags.ratingsandreview;
        }
    }
    if (data) {
        var ratingsFlag = data.ratingsFlag;
        var pagePath = window.location.pathname;
        //pagePath=pagePath.replace(/\/$/, "")
        if(pagePath){
            //if(pagePath.includes("check-network-status") || pagePath.includes("smart-setup")){
        	   //data.aggrUrl = pagePath.substr(pagePath.lastIndexOf("/"),pagePath.length).replace("/","").replace(".html","");
            //}else{
        	    data.aggrUrl = pagePath.substr(0,pagePath.lastIndexOf("/")).replace("/support/","").replaceAll("/","-");
        	//}
        }
        if ('true' == ratingsFlag) {
            var isRatingsAndReviewEnabled = false;
            var aggrUrl = '';

            //playerWidth = Math.min(jQuery('.s7video').width() - 20, 750);
            //desktopWidth = jQuery('#s7_videoview').width();
            if (null != data.isRatingsAndReviewEnabled && data.isRatingsAndReviewEnabled != 'undefined') {
                isRatingsAndReviewEnabled = data.isRatingsAndReviewEnabled;
            }
            if (null != data.aggrUrl && data.aggrUrl != 'undefined' && data.aggrUrl != '') {
                aggrUrl = data.aggrUrl;
            }
            let ratingText = $('.seo-container').length>0 || $('.alignRight').length>0?"Is this page helpful?":"Was this helpful?";
            /* Like-Unlike base-html to display: */
             $('.oned_bazaar_voice').html('<div><div class=\"bazaar_container\"><span><span class=\"ratings_text\" id=\"ratings_text1\">'+ratingText+' </span> &nbsp;'
             +'<button class="bazaar-thumbup" aria-label=\"thumbs up\" aria-pressed=\"false\" id=\"thumbs_up1\" role=\"button\" data-track=\'{\"type\":\"button\",\"name\":\"thumbsUp\"}\' tabindex=\"0\" data-class=\"1\"><svg id="e978f97b-2168-4969-ae69-0310e5181b40" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.6 21.6"><path d="M17,8.09H11.44V3.64a1.84,1.84,0,0,0-3.68,0V8.39H2.61V19.8H8.87V18.7H17a2,2,0,0,0,2-2V10.12A2,2,0,0,0,17,8.09ZM7.76,18.7h-4V9.49h4ZM17,17.59H8.87V3.64A.73.73,0,0,1,9.3,3a.74.74,0,0,1,1,.67V9.19H17a.93.93,0,0,1,.92.93v.31H14.51v1.11h3.37v1.38H14.51V14h3.37v1.21H14.51v1.11h3.37v.32A.91.91,0,0,1,17,17.59Z"/></svg>'
             +'</button><button class="bazaar-thumbdown" aria-label=\"thumbs down\" aria-pressed=\"false\" id=\"thumbs_down1\" role=\"button\" data-track=\'{\"type\":\"button\",\"name\":\"thumbsDown\"}\' tabindex=\"0\" data-class=\"1\"><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.6 21.6" style="enable-background:new 0 0 21.6 21.6;" xml:space="preserve"><path d="M19.058,1.8h-6.306v1.104H4.589c-1.129,0-2.047,0.912-2.047,2.034v6.542c0,1.122,0.918,2.034,2.047,2.034h5.563v4.44c0,0.539,0.236,1.049,0.649,1.4C11.148,19.648,11.57,19.8,12,19.8c0.265,0,0.534-0.058,0.789-0.176c0.661-0.306,1.07-0.945,1.07-1.67V13.21h5.198V1.8H19.058z M12.752,17.955c0,0.291-0.161,0.539-0.428,0.663c-0.275,0.127-0.576,0.086-0.804-0.108c-0.164-0.139-0.259-0.342-0.259-0.555v-5.548H4.589c-0.517,0-0.939-0.416-0.939-0.926V11.17h3.412v-1.108H3.65V8.681h3.412V7.573H3.65V6.37h3.412V5.261H3.65V4.938c0-0.51,0.421-0.926,0.939-0.926h8.162C12.752,9.026,12.752,12.919,12.752,17.955z M17.95,12.102h-4.09c0-0.203,0-9.341,0-9.194h4.09V12.102z"/></svg>'
             +'</button></span></div><div class=\"votedown-message-box\"><div id=\"text1_1\" class=\"ratings_box_text\" style=\"display: none;\">What can we do to improve?</div><div class=\"text_box\"><textarea id=\"text_thumbs_down1\" class=\"comments\" data-class=\"1\" aria-label=\"What can we do to improve\"></textarea><div><button id=\"text_thumbs_down_submit1\" data-class=\"1\" class=\"submit\" type=\"submit\" value=\"Submit\" style=\"display: none;\">Submit <span class=\"right-arrow\"></span></button></div></div><div id=\"text2_1\" class=\"ratings_box_text\" role=\"alert\" aria-live=\"polite\"  style=\"display: none;\"></div></span></div>');

             /* Disabling thumbs buttons for screen reader with aria-disabled */
            function feedback(){
                if ($("#thumbs_up1").attr('aria-pressed') === 'true'){
                    ($("#thumbs_up1").attr("aria-disabled","false"));
                    ($("#thumbs_down1").attr("aria-disabled","true"));
                }
                if ($("#thumbs_down1").attr('aria-pressed') === 'true'){
                ($("#thumbs_down1").attr("aria-disabled","false"));
                ($("#thumbs_up1").attr("aria-disabled","true"));
                }
            }

            function closeRatingModal(){
					$("#thumbsDownFeedback").removeClass('in');
					$('.gnav20-using-mouse').removeClass('modal-open');
					$('body').removeClass('modal-open');
					const noHashUrl = window.location.pathname + window.location.search;
					history.replaceState(null, '', noHashUrl);
					focusToLeftContent();
            }
			

            $("#thumbsdownSource").on("load", function () {
                $('#thumbsdownSource').contents().find('button#text_thumbs_down_cancel').click(function(e){
                    closeRatingModal();
                });
                $('#thumbsdownSource').contents().find('button#text_thumbs_down_cancel').keydown(function(event) {
                    //event.preventDefault();
                    if (event.keyCode == 13 || event.keyCode == 32) {
                        closeRatingModal();
                    }
                }); 
				$('.modal-dialog .close.video-close').click(function(e){
                    closeRatingModal();       
                });
				$('.modal-dialog .close.video-close').keydown(function(event) {
                    if(event.shiftKey && event.keyCode == 9) {
                        event.preventDefault();
                        $('#thumbsdownSource').contents().find('button#text_thumbs_down_submit').focus();
                    }else if(event.keyCode == 13 || event.keyCode == 27 ||event.keyCode == 32){
						closeRatingModal(); 
                    };
                });
				
				$('.modal-dialog .close').not(".video-close").click(function(e) {
					closeRatingModal();
				});
                $('.modal-dialog .close').not(".video-close").keydown(function(event) {
                    if(event.shiftKey && event.keyCode == 9) {
                        event.preventDefault();
                        $('#thumbsdownSource').contents().find('button#text_thumbs_down_submit').focus();
                    }else if(event.keyCode == 13 || event.keyCode == 27 ||event.keyCode == 32){
                        focusToLeftContent();
                    };
                });
                $('#thumbsdownSource').contents().find('button#text_thumbs_down_submit').click(function(e){
                    let idVal = $(this).attr("data-class");
                    submitSupportModalDialog(idVal,"feedback");
                });
                
                $('#thumbsdownSource').contents().find('button#text_thumbs_down_submit').keydown(function(event) {
                    if(event.keyCode == 9) {
                        event.preventDefault();
                        if(event.shiftKey){
                            $('#thumbsdownSource').contents().find('button#text_thumbs_down_cancel').focus();
                        }else{
                            $('.modal-dialog .close').focus();
                        }
                    }else if (event.keyCode == 13 || event.keyCode == 32) {
                        event.preventDefault();
                        let idVal = $(this).attr("data-class");
                        submitSupportModalDialog(idVal,"feedback");
                    }
                });

                $('#thumbsdownSource').contents().find('.feedback-cont').click(function(e){
					let idVal = $(this).attr("data-class");
                    submitSupportModalDialog(idVal,"video");
                });
			
                 $('#thumbsdownSource').contents().find('.feedback-cont').keydown(function(e){
                    if (e.which == 13) {
                        let idVal = $(this).attr("data-class");
						submitSupportModalDialog(idVal,"video");
                    }
                });
            });


            $("#testing_fdata, #testing").keydown(function(event) {
                $('.modal-dialog .close').focus();
            });

            
            /* Whenever the thumbs down is activated on click */
            function focusToLeftContent(){
                setTimeout(function(){
                	 $('.oneDRd_leftcontent').each( function() {
                         $(this).find('a:first').focus();
					});
                },200);
            }

            function continueFeedback(){
				document.getElementById('thumbsdownSource').setAttribute("class","video-feedback-modal");
                document.getElementById('thumbsdownSource').setAttribute("src","/content/support/feedback-continue-page.html");
				document.getElementById('rnr-close').classList.add("video-close");
				document.getElementById('rnr-close').focus();
            }

  
            function submitSupportModalDialog(idVal,modalBase){
                jQuery("#text2_" + idVal).show();
                jQuery("#text_thumbs_down_submit" + idVal).hide();
                let value= $('#thumbsdownSource').contents().find('textarea#text_thumbs_down' +idVal).val();
                let title = $('#thumbsdownSource').contents().find('input[name="feedback_subject"]:checked').val();

                if('select a subject'===title){
                    title = "";
                }

                let section = '';
               		
                if ('true' != isRatingsAndReviewEnabled) {
                    const a = $("#thumbs_up" + idVal).closest("li").find("a.anchor");
                    section = a.attr('name');
                    const id = $("#thumbs_up" + idVal).closest("li").find("span.articleIdText");

                    if (id != '' && id != 'undefined' && id.text() != '' && id.text() != 'undefined') {

                        section = section + "#-" + id.text();
                    }
                }
                ratingsAndReviewFunction("1", value, title, message, idVal, section, isRatingsAndReviewEnabled, aggrUrl,reviewRatingsURL);
				
				if(modalBase === "video"){
					continueFeedback();
				}else{
				   closeRatingModal();
				}
					
                let $buttonBazaarThumbdown = $("button.bazaar-thumbdown");
                $buttonBazaarThumbdown.css("cursor", "default");
                $buttonBazaarThumbdown.off();
                $buttonBazaarThumbdown.attr('tabindex', '-1');

                let $buttonBazaarThumbup = $("button.bazaar-thumbup");
                $buttonBazaarThumbup.css("cursor", "default");
                $buttonBazaarThumbup.off();
                
                $("#thumbs_up" + idVal).attr('tabindex','-1');
                $("#thumbs_up" + idVal).css("cursor", "default");
                $("#thumbs_up" + idVal).off();

                $buttonBazaarThumbdown.attr("aria-pressed","true");
                $buttonBazaarThumbdown.html('<svg version="1.1" id="Vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.6 21.6" style="enable-background:new 0 0 21.6 21.6;" xml:space="preserve"><path d="M13.86152,2.904v10.30597h-0.0025v4.74402c0,0.72504-0.409,1.36401-1.07001,1.66998c-0.255,0.11804-0.52399,0.17603-0.789,0.17603c-0.42999,0-0.85199-0.15198-1.19904-0.44598c-0.41296-0.35101-0.64899-0.86102-0.64899-1.40002v-4.44H4.589c-1.12903,0-2.047-0.91199-2.047-2.034v-0.31h4.52002v-1.10797H2.542V8.68098h4.52002V7.57301H2.542v-1.203h4.52002V5.261H2.542V4.938c0-1.12201,0.91797-2.034,2.047-2.034H13.86152zM14.98652,13.20997h4.07049V1.8h-4.07049V13.20997z"/></svg>');

                feedback();
				
            }
            function showSupportRatingModal(idVal){
                if (window.location.hash === "#thumbsDownFeedback") {
      				$("#thumbsDownFeedback").addClass("in");
                    $("#thumbsDownFeedback").css('style', 'display:block');
                    //$("#thumbsDownFeedback").modal('show');
                    $('.modal-dialog .close').focus();
                    $('#thumbsDownFeedback').removeAttr("aria-hidden");
                    
                    var textarea = document.querySelector("#text_thumbs_down" + idVal);
                    textarea.focus();
   				 }
            }
			
			

            function submitThumbUp(){
                jQuery(".votedown-message-box").show();

                let $buttonBazaarThumbup = $("button.bazaar-thumbup");
                $buttonBazaarThumbup.css("cursor", "default");
                $buttonBazaarThumbup.attr('tabindex', '-1');
                $buttonBazaarThumbup.off();

                let $buttonBazaarThumbdown = $("button.bazaar-thumbdown");
                $buttonBazaarThumbdown.attr('tabindex','-1');
                $buttonBazaarThumbdown.css("cursor", "default");
                $buttonBazaarThumbdown.off();

                var idVal = $buttonBazaarThumbup.attr("data-class");
                var section = '';
                if ('true' != isRatingsAndReviewEnabled) {
                    let $thumbsUp = $("#thumbs_up" + idVal);
                    var a = $thumbsUp.closest("li").find("a.anchor");
                    section = a.attr('name');
                    var id = $thumbsUp.closest("li").find("span.articleIdText");

                    if (id != '' && id != 'undefined' && id.text() != '' && id.text() != 'undefined') {
                        section = section + "#-" + id.text();
                    }
                }

                let $thumbsDown = $("#thumbs_down" + idVal);
                $thumbsDown.attr('tabindex','-1');
                $thumbsDown.css("cursor", "default");
                $thumbsDown.off();

                jQuery("#text2_" + idVal).show();

                jQuery(".ratings_box_text[role='alert']").html(message);
                
                ratingsAndReviewFunction("5", "", "", message, idVal, section, isRatingsAndReviewEnabled, aggrUrl,reviewRatingsURL);

                $buttonBazaarThumbup.attr("aria-pressed","true");
                $buttonBazaarThumbup.html('<svg version="1.1" id="Vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.6 21.6" style="enable-background:new 0 0 21.6 21.6;" xml:space="preserve"><path d="M6.63948,19.79963H2.61152V8.3896h4.02795V19.79963z M16.95649,18.69563c1.12,0,2.03198-0.91199,2.03198-2.03198v-0.32703	h-4.48297v-1.104h4.48297v-1.20801h-4.48297v-1.104h4.48297v-1.38397h-4.48297v-1.104h4.48297V10.1186c0.00104-1.12097-0.91199-2.03198-2.03198-2.03198h-5.51202V3.64363c0-0.53802-0.23395-1.047-0.64294-1.39703C10.2505,1.77461,9.49647,1.66664,8.83449,1.97261c-0.65784,0.30206-1.06732,0.9411-1.07001,1.66412v15.0589H16.95649z"/></svg>');

                feedback();
            }

            $("button.bazaar-thumbdown").on("click", function() {
                showSupportRatingModal($(this).attr("data-class"));
            });

            /* Whenever the thumbs down is activated on Enter/Return */
            $("button.bazaar-thumbdown").on("keydown", function (e) {
                if (e.which == 13 || e.which == 32) {
                    e.preventDefault();
                    showSupportRatingModal($(this).attr("data-class"));
                }else{
                    jQuery(".votedown-message-box").hide();
                }
            });

            	  const thumbDownIcon = $('#thumbs_down1');
				  const closeBtn = $('#rnr-close');				  
				  const MODAL_HASH = '#thumbsDownFeedback';

				  const syncModalWithHash = () => {
					if (window.location.hash === MODAL_HASH) {
					  showSupportRatingModal($("button.bazaar-thumbdown").attr("data-class"));
					} else if(window.location.hash===''){
					  const isModalOpen = $('.modal.fade.in').length > 0;
                        if (isModalOpen) {
                          closeRatingModal();
                        }
					}
				  };
				   $(thumbDownIcon).on("click", function() {
					window.location.hash = MODAL_HASH;
				  });

				  $(closeBtn).on("click", function() {
					window.history.back();
					const noHashUrl = window.location.pathname + window.location.search;
					history.replaceState(null, '', noHashUrl);
				  });

					  window.addEventListener('hashchange', syncModalWithHash);
					  syncModalWithHash();
			
			const video_feedback = $(".feedback-buttons .reviewContent .oned_bazaar_voice").hasClass("oned_bazaar_voice_video");
			if(video_feedback){
				document.getElementById('thumbsdownSource').setAttribute("src","/content/support/video-feedback-component-page.html"); 
			}else{ 
				document.getElementById('thumbsdownSource').setAttribute("src","/content/support/feedback-component-page.html"); 
			}				


            /* Whenever thumbs up is activated on click */
            $("button.bazaar-thumbup").on("click", function() {
                submitThumbUp();
            });

            /* Whenever an enter/return key is pressed for "thumbs-up" */
            $("button.bazaar-thumbup").on("keydown", function(e) {
                if (e.which == 13) {
                    submitThumbUp();
                }
            });

            jQuery(".mobile-container-padding .socialMda-static a , .thumbs_up").focus(function() {	
                 jQuery(".votedown-message-box").hide();	
            });

        }
    }
});

$('#thumbsdownSource').on('load', function() {

  let iframeContents = $(this).contents();
  /* Initiate Chatbot on click */
  iframeContents.find('.chatbot-video').on('click', function() {
    if (supportAgent && supportAgent.va) {
      supportAgent.va.openChatWindow('support');
    } else {
      console.error("Support Agent is not available.");
    }
  });

  /* Initiate Chatbot on Enter/Return key press */
  iframeContents.find('.chatbot-video').on('keydown', function(e) {
    if (e.which === 13) {
      if (supportAgent && supportAgent.va) {
        supportAgent.va.openChatWindow('support');
      } else {
        console.error("Support Agent is not available.");
      }
    }
  });

});

function sanitizeHTML(inputValue){
    var temp = document.createElement('div');
    temp.textContent = inputValue;
    return temp.innerHTML;
}

function isAllowedUrlPattern(path) {
    const regexp = /^[ A-Za-z0-9+&@#\/%=~_|$?!:,.-]*$/;
    return regexp.test(path);
}
function ratingsAndReviewFunction(rating, value, title, message, idVal, section, isRatingsAndReviewEnabled, aggrUrl, reviewRatingsURL) {
    const urlPath = window.location.href;
    
    if (isAllowedUrlPattern(urlPath)) {
      const loc = sanitizeHTML(urlPath);
      const lastIndex = loc.lastIndexOf('/');
      let targetValue = lastIndex === loc.length - 1 ? loc.substr(0, loc.length - 1) : loc.substr(0, lastIndex);
      
      if (isRatingsAndReviewEnabled === 'true' && aggrUrl !== '') {
        targetValue = aggrUrl;
      } else {
        targetValue = loc.substr(lastIndex + 1);
        if (section !== '') {
          targetValue = `${targetValue}#-${section}`;
        }
      }
      
      const ratingObj = {
        rating: rating,
        review: value,
        title: title,
        productId: targetValue
      };
      
      jQuery.ajax({
        type: 'post',
        url: reviewRatingsURL,
        datatype: 'json',
        cache: false,
        async: false,
        data: JSON.stringify(ratingObj),
        contentType: 'application/json',
        headers: { 'channelId': 'VZW-DOTCOM' },
        success: function(respData) {
          if (typeof respData !== 'undefined' && respData) {
            if (respData.HasErrors === 'true' || respData.HasErrors === true) {
              jQuery('#text2_1.ratings_box_text[role="alert"]').html('Invalid request.');
            } else if (respData.HasErrors === 'false' || respData.HasErrors === false) {
              jQuery('#text2_1.ratings_box_text[role="alert"]').html(message);
            } else {
              jQuery('#text2_1.ratings_box_text[role="alert"]').html('Invalid request.');
            }
          } else {
            jQuery('#text2_1.ratings_box_text[role="alert"]').html('Sorry we are unable to submit. Please try after some time.');
          }
          jQuery('#text2_1.ratings_box_text[role="alert"]').show();
        }
      });
    }
  }

$(document)
	.ready(
		function () {
			var mailtoPageName = encodeURIComponent(document.title);
			var sharePageURL = window.location.href;
			var validateUrl = '';
			if(validateURL(sharePageURL)){
				validateUrl = sharePageURL;
			}

			if ($('#oned_social_media').length == 1) {
				//console.log("Social share dynamic url path: ", imagePrefix);
				/*
				if (imagePrefix != undefined) {
					var URL_prefix = imagePrefix;
				} else {
					var URL_prefix = "";
				}*/
				var URL_prefix = "";
				$('#oned_social_media')
					.html(
						'<div class="ratings_text"><span class="share_text">Share</span></div><span class="icon m-icon"><a href="mailto:?subject=' +
						sanitizeHTML(mailtoPageName) +
						'&body=' +
						sanitizeHTML(validateUrl) +
						'" aria-label="Email Share"><img id="email_share" src="' + sanitizeHTML(URL_prefix) + '/content/dam/support/social-share/email.png" aria-hidden="true"/></a></span><span class="icon"><a href="https://facebook.com/sharer/sharer.php?u=' +
						sanitizeHTML(validateUrl) +
						'" target="_blank" aria-label="Facebook Share"><img id="fb_share" src="' + sanitizeHTML(URL_prefix) + '/content/dam/support/social-share/fb.png" aria-hidden="true"/></a></span><span class="icon"><a href="https://twitter.com/intent/tweet?text=' +
						sanitizeHTML(mailtoPageName) +
						' - ' +
						sanitizeHTML(validateUrl) +
						'" target="_blank" aria-label="Twitter Share"><img id="twitter_share" src="' + sanitizeHTML(URL_prefix) + '/content/dam/support/social-share/twitter.png" aria-hidden="true"/></a></span>');
			}
		})
		
function validateURL(surl) {  
    var url = parseURL(surl);  
    var urlHostname = url.hostname.trim();  

    if (urlHostname == '' || urlHostname=='localhost') {  
        return true;  
    }  
    else {  
        if (urlHostname.toUpperCase() == location.hostname.trim().toUpperCase() && isAllowedUrlPattern(surl)) {  
            return true;  
        }  
        else  
            return false;  
    }  
}  

function isAllowedUrlPattern(path){

	var regexp =  /^[ A-Za-z0-9+&@#\/%=~_|$?!:,.-]*$/;

if (regexp.test(path)){
          return true;}
      else{
          return false;
        }

}

function parseURL(url) {  
	var a = document.createElement('a');  
	a.href = sanitizeHTML(url);  
	return {  
	source: sanitizeHTML(url),  
	protocol: a.protocol.replace(':', ''),  
	hostname: a.hostname,  
	host: a.host,  
	port: a.port,  
	query: a.search,  
	params: (function () {  
		var ret = {},  
			seg = a.search.replace(/^\?/, '').split('&'),  
			len = seg.length, i = 0, s;  
		for (; i < len; i++) {  
			if (!seg[i]) { continue; }  
			s = seg[i].split('=');  
			ret[s[0]] = s[1];  
		}  
		return ret;  
	})(),  
	file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],  
	hash: a.hash.replace('#', ''),  
	path: a.pathname.replace(/^([^\/])/, '/$1'),  
	relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],  
	segments: a.pathname.replace(/^\//, '').split('/')  
	};  
} 

 function sanitizeHTML(inputValue){
    var temp = document.createElement('div');
    temp.textContent = inputValue;
    return temp.innerHTML;
}

'use strict';$=jQuery;1<document.getElementsByClassName("selectric-wrapper").length&&(document.getElementsByClassName("selectric-wrapper")[1].style.display="none");
let supportRd=function(a){let b="",c=!0,e="all",d=function(g){this.fnName=g};d.prototype.error=function(g){window.console&&console.log&&c&&("all"===e||"error"===e||"info"===e)&&console.trace()&&console.trace()};d.prototype.info=function(g){window.console&&console.log&&c&&("all"===e||"info"===e)&&console.log("Info:",g)};let f=function(g,t){return function(){try{return t.apply(this,arguments)}catch(y){(new d(g)).error(y.message)}}},h=new f("initGlossary",function(){let g=function(){var l=jQuery(".glossary-stick").height();
let n=jQuery("body, html"),u=jQuery(this).children(".dt").text();l+=9;var z=jQuery(".term-group>p>strong");l+=8;for(const C of z)z=jQuery(C).text(),u===z&&(z=jQuery(C).parent().offset().top,n.scrollTop(z-l))};jQuery(".HorizontalSpotlightTable").css("border-top","none");let t=function(){let l=jQuery(".term-group p"),n=jQuery("div.term-group");l.hasClass("noborder")&&(l.removeClass("noborder").show(),n.removeClass("condensed").show(),jQuery(".term-group .back-to-top").show(),jQuery("#search-x").hide(),
jQuery("body").addClass("glossary-repaint"),setTimeout(function(){jQuery("body").removeClass("glossary-repaint")},250));r=!1},y=function(l){let n=jQuery(".term-group>p>strong"),u=[];l=l.toLowerCase();jQuery(n).each(function(){4<u.length||-1<jQuery(this).text().toLowerCase().indexOf(l)&&u.push(this)});return u},x=!1,r=!1,A;var q=document.location.hash.slice(1).match(/^\w*/)[0];q=q?"#"+decodeURIComponent(q):"";A=jQuery(".glossary-stick").offset().top;jQuery(".term-group").find("p:last").not(".odd-term").addClass("even-term-last");
jQuery("#glossary-links a").on("click",function(l){l.preventDefault();l=jQuery(this).attr("href");jQuery(l).offset();!0===r&&t();"#terms-number"===l?jQuery("body, html").scrollTop(78):(l=jQuery(this).attr("href").offset().top,jQuery("body, html").scrollTop(l-282));return!1});jQuery("#glossary-search-form").on("submit",function(l){l.preventDefault();let n=jQuery(".term-group>p>strong"),u=jQuery(".glossary-search").val().toLowerCase();"undefined"===typeof r&&(r=!1);"undefined"===typeof x&&(x=!1);!0===
r&&t();if(""===u)return!1;l=[];for(var z of n)-1<jQuery(z).text().toLowerCase().indexOf(u)&&l.push(z);if(0<l.length){jQuery(".term-group p").addClass("noborder").hide();jQuery(".term-group").addClass("condensed");r=!0;for(z=0;z<l.length;z++)jQuery(l[z]).parent().removeClass("noborder").show(),z===l.length-1&&jQuery(".term-group:not(:has(>p:visible))").hide();jQuery(".term-group .back-to-top:visible").first().hide();jQuery(".glossary-stick").removeClass("stick");jQuery("#search-x").show();jQuery("body, html").scrollTop(0);
jQuery("#term-sets").css("margin-top","0px");return!0}return!1});jQuery(window).on("scroll",function(){jQuery(window).scrollTop()>=A?!1===r&&(jQuery(".glossary-stick").addClass("stick"),jQuery("#breadcrumbContainer").addClass("stickyNavFloat"),jQuery("#term-sets").css("margin-top",""+(jQuery(".glossary-stick").height()+10)+"px"),jQuery("#SupportContentWrapper #breadcrumbContainer").css("top","0px","border-bottom","1px solid silver"),jQuery("#SupportContentWrapper .deskWrapper").css("top","0px","border-bottom",
"1px solid silver"),jQuery(".stickyNavFloat").css("border-bottom","1px solid silver"),x=!0,jQuery(".glossaryHeadSection h1").hide(),jQuery(".glossaryHeadSection #seotext").hide()):jQuery(".glossary-stick").hasClass("stick")?(jQuery("#breadcrumbContainer").removeClass("stickyNavFloat"),jQuery(".glossary-stick").removeClass("stick"),jQuery("#term-sets").css("margin-top","0px"),jQuery(".glossaryHeadSection h1").show(),jQuery(".glossaryHeadSection #seotext").show(),jQuery("#SupportContentWrapper #breadcrumbContainer").css("border-bottom",
"none"),jQuery("#SupportContentWrapper .deskWrapper").css("border-bottom","none"),x=!1):console.log("Glossary is not sticky")});jQuery(window).trigger("scroll");jQuery("#glossarySearch").on("blur",function(){""===userSearchNoSpace&&jQuery(".glossary-search").val("What term would you like to see?");setTimeout(function(){jQuery("#results").hide()},250)});jQuery("#glossarySearch").on("keyup focus",function(){var l=jQuery(this).val(),n=[];let u="";1<l.length&&(n=y(l));0<n.length?(jQuery(n).each(function(){u+=
'<li class="clearfix" href="';u+=jQuery(this).attr("href");u+='"><div class="dt">';u+=jQuery(this).text();u+="</div></li>"}),jQuery("#results ul").html(u),jQuery("#results ul>li").delegate(".dt","click",function(){jQuery("#glossarySearch").val("").val(jQuery(this).text())}),l=jQuery(this).position(),n=18,x&&(n+=6),resultsTop=jQuery(".glossary-stick").height()-2*(jQuery("#glossarySearch").height()-jQuery(".survey-text").height())-n,jQuery("#results").css({position:"absolute",top:resultsTop,left:l.left+
15}),jQuery("#results li").hover(function(){jQuery(this).addClass("ac_over")},function(){jQuery(this).removeClass("ac_over")}),jQuery("#results").show(),jQuery("#results").on("click","li",g)):jQuery("#results").hide()});jQuery(window).on("resize",function(){let l=jQuery("#glossarySearch").outerWidth();jQuery("#results").width(l)}).trigger("resize");q&&(q=cleanXSS(q),window.location.assign(q));jQuery("button.redButton").css({height:"35px",width:"60px"});if(jQuery("#tabBackToTop").val()===a){let l=
jQuery(document.createElement("div"));l.attr("id","tabBackToTop");l.text("Back to top");let n=!1;l.click(function(){jQuery("html, body").animate({scrollTop:"0px"})});q=$("body");let u=function(){0<jQuery(window).scrollTop()&&!n&&(n=!0,l.fadeIn("fast"));1>jQuery(window).scrollTop()&&n&&(n=!1,l.fadeOut("fast"))};touchMoveEventType=window.navigator.pointerEnabled?"pointermove":window.navigator.msPointerEnabled?"MSPointerMove":"touchmove";jQuery(window).on("scroll",u);jQuery(window).on(touchMoveEventType,
u);u();q.append(l)}});$=jQuery;let p=new f("fixMarqueeHeights",function(g){let t=new d("fixMarqueeHeights"),y,x;let r;if("desktop"===g){x=$("#marquee");y=$("#marqueeListWrapper");g=$(".marqueeListItem");$marqueeListMobile=$("#marqueeListMobile");var A=g.map(function(){return $(this).height()}).get();r=Math.max.apply(null,A)+5;Math.min.apply(null,A);A=$(g[0]).outerHeight(!0)-A[0];t.info("difference between smallest and biggest ");t.info("maxHeight: "+r);newMarqueeHeight=r+A;x.css("min-height",y.offset().top-
x.offset().top+newMarqueeHeight);g.height(r);$marqueeListMobile.height(newMarqueeHeight);y.css("min-height",newMarqueeHeight);t.info("setting marquee height to: "+newMarqueeHeight)}else x=$("#marquee"),g=$(".marqueeListItem"),$marqueeListMobile=$("#marqueeListMobile"),A=g.map(function(){return $(this).height()}).get(),r=Math.max.apply(null,A)+5,Math.min.apply(null,A),t.info("difference between smallest and biggest "),t.info("maxHeight: "+r),g.height(r),$marqueeListMobile.height(r),g.last().parent().css("border",
"0")});$=jQuery;let v=new f("initMarqueeCarousel",function(){function g(q){let l=q.attr("placeholder"),n=jQuery("<span></span>");n.html(l);q.before(n);var u=0;u=parseInt(q.css("padding-left"),10);let z=parseInt(q.css("margin-left"),10),C=parseInt(q.css("border-left"),10);u=(isNaN(u)?0:u)+(isNaN(z)?0:z)+(isNaN(C)?0:C);n.css({"margin-top":"auto","margin-bottom":"auto",top:"0",bottom:"0","padding-left":u+"px",color:"#ccc",position:"absolute",height:"1em"});jQuery.each("font font-face font-family font-size font-style font-weight font-variant".split(" "),
function(I,F){n.css(F,q.css(F))});n.click(function(){n.html("");q.focus()});q.focus(function(){n.html("")});q.blur(function(){q.val()||n.html(l)})}let t,y,x,r,A;t=$("#marqueeListMobile");r=$("#marqueeListWrapper_Right");x=$("#marqueeListWrapper_Left");$marqueeListItem=$(".marqueeListItem");y=$marqueeListItem.length;A=$marqueeListItem.first().innerWidth();currentPod=3;3<$marqueeListItem.length&&(r.show(),x.show());r.click(function(){let q=3;3>y-currentPod&&(q=y-currentPod);currentPod<y&&(currentPod+=
q,t.animate({left:"-="+(A*q+q)+"px"},5E3,"linear"));3>=currentPod?(x.addClass("transparent"),r.removeClass("transparent")):(currentPod==y?r.addClass("transparent"):r.removeClass("transparent"),x.removeClass("transparent"))});x.click(function(){let q=3;3>currentPod-3&&(q=currentPod-3);3<currentPod&&(currentPod-=q,t.animate({left:"+="+(A*q+q)+"px"},5E3,"linear"));3>=currentPod?(x.addClass("transparent"),r.removeClass("transparent")):currentPod==y?(r.addClass("transparent"),x.removeClass("transparent")):
(x.removeClass("transparent"),r.removeClass("transparent"))});"placeholder"in document.createElement("input")||g($("#loginPod input[placeholder!=null]:visible"))});$=jQuery;let k=new f("initGenericAccordion",function(g){function t(m,B,w){m.queue(function(){let D=m.dequeue.bind(m);"_open"in m[0]||(m[0]._open=m.hasClass("open"));m[0]._open?A(m,D):B?D():(I&&J.each(function(H,E){m[0]!==E&&t(jQuery(E),!0)}),w&&l(m),q(m,D))})}function y(m){m.css({WebkitTransition:"height 0.300s",MozTransition:"height 0.300s",
MsTransition:"height 0.300s",OTransition:"height 0.300s",transition:"height 0.300s"})}function x(m){m.css({WebkitTransition:"",MozTransition:"",MsTransition:"",OTransition:"",transition:""})}function r(m){m.height("");m[0]._height=m.height()}function A(m,B){let w=m.find(C);m.find(z).text(K);w[0]._height?w[0]._height=w.height():r(w);w.height(w[0]._height);y(w);w.height();let D=m[0]._open=!1;m=function(){D||(w.hide(),x(w),B());D=!0};w.one("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",
m);window.setTimeout(m,300);w.css("height",0)}function q(m,B){let w=m.find(C);w[0]._height||(r(w),w.css("height",0));y(w);w.show();let D=w[0]._height;m[0]._open=!0;let H=!1,E=function(){H||(w.height(""),x(w),B());H=!0};w.one("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",E);window.setTimeout(E,450);w.height();w.css("height",D);m.find(z).text(F)}function l(m){if(G){m=m.find(G);let B=m.attr("name");m.attr("name","");window.location.hash=B;m.attr("name",B)}}var n=g.root;let u=g.header,
z=g.button,C=g.contents,I=g.exclusive,F=g.buttonText.open,K=g.buttonText.closed,G=g.deepLinkClass,J=jQuery(n);J.each(function(m,B){B=jQuery(B);B.find(u).click(function(w){t(B,!1,!0)})});G&&(g=window.location.hash,isAllowedPathPattern(g)&&(g=jQuery(n).find(G+"[name='"+cleanXSS(g).substring(1)+"']"),g.length&&(n=g.parents(n),n.hasClass("open")||t(n))))});return{getMode:function(){return b},setMode:function(g){b=g},getDebug:function(){return c},setDebug:function(g){c=g},getLogLevel:function(){return e},
setLogLevel:function(g){e=g},getEnvPropName:function(){return appEnv},setEnvPropName:function(g){appEnv=g},safeFunction:f,fixMarqueeHeights:p,initMarqueeCarousel:v,initGlossary:h,initGenericAccordion:k}}();function detectIE(){let a=window.navigator.userAgent;return 0<a.indexOf("MSIE ")||0<a.indexOf("Trident/")||0<a.indexOf("Edge/")?!0:!1}
jQuery(document).ready(function(){"undefined"!=typeof componentFlags&&componentFlags.marquee&&(supportRd.fixMarqueeHeights(componentFlags.marquee),"desktop"===componentFlags.marquee&&supportRd.initMarqueeCarousel());"undefined"!=typeof componentFlags&&componentFlags.PZNmarquee&&supportRd.initPznMarquee();"undefined"!=typeof componentFlags&&componentFlags.glossary&&supportRd.initGlossary();"undefined"!=typeof componentFlags&&componentFlags.accordion&&supportRd.initGenericAccordion(componentFlags.accordion);
jQuery(".still_pod_mobile_link_header").on("click",function(){let b=jQuery(this).children("a").attr("href");window.location.href=b});jQuery(".still_pod_mobile_link_header").on("mouseover",function(){jQuery(this).css("cursor","pointer")});jQuery(".get_help_mobile_wrapper").on("click",function(){let b=jQuery(this).children("a").attr("href");window.location.href=b});jQuery(".get_help_mobile_wrapper").on("mouseover",function(){jQuery(this).css("cursor","pointer")});jQuery(".residential_service_title").on("click",
function(){let b=jQuery(this).children("a").attr("href");window.location.href=b});jQuery(".residential_service_title").on("mouseover",function(){jQuery(this).css("cursor","pointer")});var a=window.location.hash;if(isAllowedPathPattern(a)&&(a=a.substring(1),""!=a&&0<$(".glossary").length&&detectIE())){let b=cleanXSS(a);console.log("glossary hash jump");window.setTimeout(function(){$("html, body").animate({scrollTop:$('a[name="'+b+'"]').offset().top-75},"fast")},1E3)}});$=jQuery;let grpaccordlink=$(".grpaccord").find(".a-accordion-trigger");
grpaccordlink.bind("click",function(a){a.preventDefault();a=$(a.currentTarget);var b=a.next();b.toggleClass("a-hidden");b.hasClass("a-hidden")?(b.attr("aria-hidden","true"),a.attr("aria-expanded","false")):(b.attr("aria-hidden","false"),a.attr("aria-expanded","true"));a=$(".grpaccord .a-accordion-trigger").size();b=$(".hubHldr[aria-hidden='true']").size();let c=$(".hubHldr[aria-hidden='false']").size();1<=b?$("a.expandCollepse").html("Expand All Categories"):a==c?$("a.expandCollepse").html("Collapse All Categories"):
a==b&&$("a.expandCollepse").html("Expand All Categories")});0<grpaccordlink.length&&(grpaccordlink.click(),grpaccordlink[0].click());let expColObj=$("a.expandCollepse");
expColObj.bind("click",function(a){a.preventDefault();a=$(a.currentTarget);grpaccordlink.next().toggleClass("a-hidden");"Expand All Categories"===a.html()?(a.html("Collapse All Categories"),$(".a-accordion-trigger").attr("aria-expanded","true"),$(".hubHldr").removeClass("a-hidden"),$(".hubHldr").attr("aria-hidden","false")):(a.html("Expand All Categories"),$(".a-accordion-trigger").attr("aria-expanded","false"),$(".hubHldr").addClass("a-hidden"),$(".hubHldr").attr("aria-hidden","true"))});
jQuery(document).ready(function(){var a=jQuery("#borderFlag").html();void 0!==a&&"true"===a&&(jQuery("table").css({border:"0 none",width:"100%"}),jQuery("td").css({border:"0 none",width:"100%"}),jQuery("tr").css({border:"0 none",width:"100%"}));a=jQuery("#tableStyleFlag").html();void 0!==a&&"true"===a&&(jQuery("table").css({border:"1px solid #000",width:"100%"}),jQuery("td").css({border:"1px solid #000",padding:"6px 6px 6px 12px"}),jQuery("tr").css({border:"1px solid #000",padding:"6px 6px 6px 12px"}))});
jQuery(document).ready(function(){jQuery(".mobileDesign2Header").css("cursor","pointer");"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.phoneDeviceSupport&&jQuery("div[parent='"+seoUrlStore.phoneDeviceSupport+"']").hide();"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.planAccountSupport&&jQuery("div[parent='"+seoUrlStore.planAccountSupport+"']").hide();jQuery("#plan_device_header").on("click",function(a){jQuery("#plan_device_header .headerImg").hasClass("mobileDesign2ClosedArrow")?
(jQuery("#plan_device_header .headerImg").removeClass("mobileDesign2ClosedArrow"),jQuery("#plan_device_header .headerImg").addClass("mobileDesign2OpenedArrow")):(jQuery("#plan_device_header .headerImg").removeClass("mobileDesign2OpenedArrow"),jQuery("#plan_device_header .headerImg").addClass("mobileDesign2ClosedArrow"));"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.phoneDeviceSupport&&jQuery("div[parent='"+seoUrlStore.phoneDeviceSupport+"']").slideToggle("fast")});jQuery("#get_help_mobile_header").on("click",
function(a){jQuery("#get_help_mobile_header .headerImg").hasClass("mobileDesign2ClosedArrow")?(jQuery("#get_help_mobile_header .headerImg").removeClass("mobileDesign2ClosedArrow"),jQuery("#get_help_mobile_header .headerImg").addClass("mobileDesign2OpenedArrow")):(jQuery("#get_help_mobile_header .headerImg").removeClass("mobileDesign2OpenedArrow"),jQuery("#get_help_mobile_header .headerImg").addClass("mobileDesign2ClosedArrow"));"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.getHelpStore&&
jQuery("div[parent='"+seoUrlStore.getHelpStore+"']").slideToggle("fast")});jQuery("#residential_service_header").on("click",function(a){jQuery("#residential_service_header .headerImg").hasClass("mobileDesign2ClosedArrow")?(jQuery("#residential_service_header .headerImg").removeClass("mobileDesign2ClosedArrow"),jQuery("#residential_service_header .headerImg").addClass("mobileDesign2OpenedArrow")):(jQuery("#residential_service_header .headerImg").removeClass("mobileDesign2OpenedArrow"),jQuery("#residential_service_header .headerImg").addClass("mobileDesign2ClosedArrow"));
"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.homePageSupport&&jQuery("div[parent='"+seoUrlStore.homePageSupport+"']").slideToggle("fast")});jQuery("#plan_support_header").on("click",function(a){jQuery("#plan_support_header .headerImg").hasClass("mobileDesign2ClosedArrow")?(jQuery("#plan_support_header .headerImg").removeClass("mobileDesign2ClosedArrow"),jQuery("#plan_support_header .headerImg").addClass("mobileDesign2OpenedArrow")):(jQuery("#plan_support_header .headerImg").removeClass("mobileDesign2OpenedArrow"),
jQuery("#plan_support_header .headerImg").addClass("mobileDesign2ClosedArrow"));"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.planAccountSupport&&jQuery("div[parent='"+seoUrlStore.planAccountSupport+"']").slideToggle("fast")});jQuery("#still_have_question").on("click",function(a){jQuery("#still_have_question .headerImg").hasClass("mobileDesign2ClosedArrow")?(jQuery("#still_have_question .headerImg").removeClass("mobileDesign2ClosedArrow"),jQuery("#still_have_question .headerImg").addClass("mobileDesign2OpenedArrow")):
(jQuery("#still_have_question .headerImg").removeClass("mobileDesign2OpenedArrow"),jQuery("#still_have_question .headerImg").addClass("mobileDesign2ClosedArrow"));"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.stillHaveQuestion&&jQuery("div[parent='"+seoUrlStore.stillHaveQuestion+"']").slideToggle("fast")});jQuery("#learn_more_header").on("click",function(a){jQuery("#learn_more_header .headerImg").hasClass("mobileDesign2ClosedArrow")?(jQuery("#learn_more_header .headerImg").removeClass("mobileDesign2ClosedArrow"),
jQuery("#learn_more_header .headerImg").addClass("mobileDesign2OpenedArrow")):(jQuery("#learn_more_header .headerImg").removeClass("mobileDesign2OpenedArrow"),jQuery("#learn_more_header .headerImg").addClass("mobileDesign2ClosedArrow"));"undefined"!=typeof seoUrlStore&&"undefined"!=typeof seoUrlStore.learnMoreAbout&&jQuery("div[parent='"+seoUrlStore.learnMoreAbout+"']").slideToggle("fast")})});$=jQuery;jQuery(document).ready(function(){jQuery(".desktop_hubmarquee_wrapper .hub-close-btn").click(function(){this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)})});
let oldPlayerWidth=-1;function initPlayerSize(){if(0<jQuery("#videoId_hidden").length){let a=Math.min(jQuery(".s7video").width()-20,750),b=Math.round(.5625*a);a!==oldPlayerWidth&&(oldPlayerWidth=a,jQuery("#section1").css("height",b+"px").css("width",a+"px"),loadS7Content("section1","VIDEO","Universal_Video1",jQuery("#videoId_hidden").val()))}}jQuery(function(){initPlayerSize();jQuery(window).bind("resize",function(){initPlayerSize()})});$=jQuery;
function nextAccordion(a){var b=jQuery(a).closest(".accordion_step").next(".accordion_step");if(0<b.length){if(!b.children().first().next().is(":visible")){let c="";0<=document.domain.indexOf("localhost")&&(c="/content");let e=c+"/dam/support_rd/assets/images/blueplus.png",d=c+"/dam/support_rd/assets/images/blueminus.png";b=b.children().first();(function(){let f=$(this).next(),h=f.is(":visible"),p=$(this).find("img").attr("src").split(c+"/dam/support_rd");f[h?"slideUp":"slideDown"]().trigger(h?"hide":
"show");h?$(this).find("img").attr("src",p[0]+e):$(this).find("img").attr("src",p[0]+d);return!1}).apply(b);jQuery(a).parent().parent().hide();jQuery("html, body").scrollTop(b.offset().top-jQuery(".TabletSubTabMenu").outerHeight(!0)-jQuery("#breadcrumbContainer.stickyNavFloat").outerHeight(!0))}}else a=jQuery(a).closest(".accordion_top").next().next(),0<a.length&&(a=a.find(".accordion_step"),0<a.length&&2<=a.first().children().length&&(a.first().children().first().next().is(":visible")||a.first().children().first().click()))}
jQuery(function(a){jQuery.fx.off=!0;if(0<a(".howtouse_steps").length&&0==a(".howtouse_steps #groupidlist_hidden").length||0<a(".information_steps").length){let c="";0<=document.domain.indexOf("localhost")&&(c="/content");var b=a("#accordion_howtouse .accordion-header");let e=a(".how_to_use .nextLink"),d=a("#accordion_howtouse .panel-content").hide(),f=a("#accordion_howtouse .accordion-expand-all"),h=c+"/dam/support_rd/assets/images/blueplus.png",p=c+"/dam/support_rd/assets/images/blueminus.png";b.click(function(){let v=
a(this).next(),k=v.is(":visible"),g=a(this).find("img").attr("src").split(c+"/dam/support_rd");k||a(this).find(".panel-span").text();v[k?"slideUp":"slideDown"]().trigger(k?"hide":"show");k?(a(this).find(".expandImg").attr("src",g[0]+h),document.getElementById("s7_videoview_accordion_playPauseButton")&&"false"===document.getElementById("s7_videoview_accordion_playPauseButton").getAttribute("selected")&&document.getElementById("s7_videoview_accordion_playPauseButton").click()):a(this).find(".expandImg").attr("src",
g[0]+p);return!1});e.click(function(){nextAccordion(a(this))});f.click(function(){let v=a(this).data("isAllOpen"),k=a("#accordion_howtouse .accordion-header").find("img").attr("src").split(c+"/dam/support_rd");d[v?"hide":"show"]().trigger(v?"hide":"show");v?a("#accordion_howtouse .accordion-header").find("img").attr("src",k[0]+h):a("#accordion_howtouse .accordion-header").find("img").attr("src",k[0]+p)});d.on({show:function(){d.is(":hidden")||f.text("Collapse All").data("isAllOpen",!0)},hide:function(){d.is(":hidden")&&
f.text("Expand All").data("isAllOpen",!1)}});b=a(".nextLink");0<b.length?(a(b[b.length-1]).hide(),1>=b.length&&(a("#accordion_howtouse .accordion-header").click(),a("#accordion_howtouse .accordion-expand-holder").hide())):(b=a("#accordion_howtouse .accordion_step"),0>=b.length&&0>=a(".stepcontainer_title").length?a("#accordion_howtouse").hide():1==b.length&&0>=a(".stepcontainer_title").length&&(a("#accordion_howtouse .accordion-header").click(),a("#accordion_howtouse .accordion-expand-holder").hide()))}});
function initS7VideoPlayerSize(){if(0<jQuery("#videoId_field_hidden").length&&"undefined"!=typeof s7VideoPlayerStore){let a=s7VideoPlayerStore.width;a=Math.min(jQuery(".s7video_player").width(),a);let b=Math.round(.5625*a);a!==s7VideoPlayerStore.oldVideoPlayerWidth&&(s7VideoPlayerStore.oldVideoPlayerWidth=a,jQuery("#s7video_section").css("height",b+"px").css("width",a+"px"),loadS7Content("s7video_section","VIDEO","Universal_Video1",jQuery("#videoId_field_hidden").val()))}}
let allOverviewText="",shortenOverviewText="";
jQuery(function(){replaceAnchorJumpWithOnClick();initS7VideoPlayerSize();jQuery(window).bind("resize",function(){initS7VideoPlayerSize()});window.setTimeout(function(){if($("#s7video_section")&&0<$("#s7video_section").length&&$("#anchor_div")&&0<$("#anchor_div").length){let a=$("#s7video_section").height();0<$("#consolidation_title").length&&(a+=$("#consolidation_title").height());0<$("#overview_div").length&&(a+=$("#overview_div").height());$("#anchors_div").attr("style","height:"+a+"px");$("#video_desc").attr("style",
"height:auto;width:"+$("#mainBody").width()+"px")}},2E3);if("undefined"!==typeof componentFlags&&"undefined"!==typeof componentFlags.isMobile&&"true"==componentFlags.isMobile){let a=418;if(3<getRows("#overview_div .text")){""==allOverviewText&&(allOverviewText=$("#overview_div .text").html());let b=allOverviewText.lastIndexOf("</p>");b<a&&(a=b);shortenOverviewText=allOverviewText.substring(0,a);0>=$("#consolidation_showmore").length&&(shortenOverviewText+="... <a id='consolidation_showmore'>Show More</a>");
shortenOverviewText+="</p>";$("#overview_div .text").html(shortenOverviewText)}else 0<$("#video_div").length&&"true"==componentFlags.hideShowMoreVideo&&(allOverviewText=$("#overview_div .text").html(),$("#overview_div .text").html(allOverviewText+" <p><a id='consolidation_showmore'>Show More</a></p>"));0<$("#consolidation_showmore").length&&($("#consolidation_showmore").show(),jQuery("body").on("click","#consolidation_showmore",function(){$("#consolidation_showmore").hide();0<$("#video_div").length&&
"true"==componentFlags.hideShowMoreVideo&&($("#video_div").show(),initS7VideoPlayerSize());0<allOverviewText.length&&($("#overview_div .text").html(allOverviewText+"<a id='consolidation_showless'>Show Less</a>"),$("#consolidation_showless").click(function(){$("#consolidation_showless").hide();0<$("#video_div").length&&"true"==componentFlags.hideShowMoreVideo&&$("#video_div").hide();0<shortenOverviewText.length&&$("#overview_div .text").html(shortenOverviewText);$("html, body").animate({scrollTop:$("#consolidation_title").offset().top-
50},"fast")}))}))}});function replaceAnchorJumpWithOnClick(){$("#accordion_consolidation")&&0<$("#accordion_consolidation").length&&($(".panel-content a").each(function(a,b){if("undefined"!=typeof $(this).attr("href")&&0==$(this).attr("href").indexOf("#")){let c=$(this).attr("href").substring(1);$(this).on("click",function(e){kbAnchorJump(c,this);e.preventDefault()})}}),$("#anchor_div a").each(function(a,b){"undefined"!=typeof $(this).attr("href")&&$(this).attr("href").indexOf("#")}))}
function getRows(a){let b=$(a).height();a=$(a).css("line-height");a=parseFloat(a);return Math.round(b/a)}let scene7Player=null;
function initHtmlPlayer(a,b,c){const e=window.matchMedia("(max-width: 767px)").matches;var d=new s7viewers.VideoViewer({containerId:a.containerId,params:{asset:a.asset,serverurl:a.serverurl,contenturl:a.contenturl,config:a.config,videoserverurl:a.videoserverurl,caption:a.caption,"VideoPlayer.progressivebitrate":e?"1400":"2100","VideoPlayer.playback":"native"},handlers:{initComplete:function(){scene7Player=d.videoplayer;console.log("initHtmlPlayer initComplete")},trackEvent:function(f,h,p,v,k){"undefined"!==
typeof s&&(s.prop64="1D_support:desktop");f=k.split(",")[0].toString();h="undefined"!==typeof s&&jQuery.isFunction(s.s7track);switch(f){case "LOAD":h&&s.s7track(k,d);break;case "PLAYBACK_COMPLETE":h&&s.s7track(k);"function"===typeof window.showCustomOverlay&&window.showCustomOverlay(a.containerId,scene7Player);break;case "REPLAY":h&&s.s7track(k);"function"===typeof window.hideCustomOverlay&&window.hideCustomOverlay(a.containerId,scene7Player);break;default:h&&s.s7track(k)}}}});d.init();resizePlayer(a.containerId,
a.dimension,b,c);jQuery(window).bind("resize",function(){resizePlayer(a.containerId,a.dimension,b,c)})}function seekAndPlay(a){scene7Player?(scene7Player.seek(1E3*a),scene7Player.play()):console.log("Video player is not ready yet.")}
function resizePlayer(a,b,c,e){0<jQuery("#"+a).length&&0<jQuery(".oneDRd_fragment").length&&(c=c?c:1084,console.log("playerWidth:"+c),c=Math.min(jQuery(".oneDRd_fragment").width(),c),e=Math.round(.5625*c),"vertical"==b&&(c=400,e=720,c=Math.min(jQuery(".oneDRd_fragment").width(),400),e=Math.round(c/.5625),window.setTimeout(function(){$(".s7videoviewer .s7videoplayer").attr("style","background-color:#ffffff!important")},6E3)),jQuery("#"+a).attr("style","height:"+e+"px !important;width:"+c+"px !important"))}
function pauseVideo(a){a=jQuery("#"+a).find(".s7playpausebutton");"false"===a[0].getAttribute("selected")&&a.click()}function playVideo(a){a=jQuery("#"+a).find(".a-video-pod a");0<a.length&&a[0].click()}$=jQuery;let width=0<window.innerWidth?window.innerWidth:screen.width,leftMargin="20";
640>width?($("table").find("td.logo-image").unwrap().wrap($("<tr/>")),$(".logo-image>img").css("padding-left",leftMargin),$(".logo-image").css("vertical-align","middle"),$(".logo-image").css("text-align","-webkit-center"),$("table").find("td.logo-images").unwrap().wrap($("<tr/>")),$(".logo-images>img").css("padding-left",leftMargin),$(".logo-images").css("vertical-align","middle"),$(".logo-images").css("text-align","-webkit-center"),$(".zoomContainers").css("display","block")):$(".logo-image>img").css("padding-left",
"0px");$=jQuery;
$(window).resize(function(){640>(0<window.innerWidth?window.innerWidth:screen.width)?($("table").find("td.logo-image").unwrap().wrap($("<tr/>")),$(".logo-image>img").css("padding-left",leftMargin),$(".logo-image").css("vertical-align","middle"),$(".logo-image").css("text-align","-webkit-center"),$("table").find("td.logo-images").unwrap().wrap($("<tr/>")),$(".logo-images>img").css("padding-left",leftMargin),$(".logo-images").css("vertical-align","middle"),$(".logo-images").css("text-align","-webkit-center"),
$(".zoomContainers").css("display","block")):$(".logo-image>img").css("padding-left","0px")});$=jQuery;window.onhashchange=function(a){-1==window.location.href.indexOf("#")&&$(".overlay, .imagePopup").hide()};$=jQuery;
$(function(){function a(){$(".imagePopup").is(":visible")&&$(".imagePopup").animate({left:10,top:100},200,"linear")}let b=$(".overlay"),c=$(".imagePopup");b&&c&&$(".overlay, .imagePopup").hide();640>(0<window.innerWidth?window.innerWidth:screen.width)?($(".imageIDs").addClass("mobileUpdate"),$(".imageIDs").css("vertical-align","middle"),$(".imageIDs").css("text-align","-webkit-center"),$(".zoomContainer").css("display","block"),$(".zoomContainers").css("display","block"),$(".maginifyimg").css("margin-bottom",
"0px"),$(".zoomContainers").css("font-size","14px"),$(".logo-images>img").css("padding-left","0"),$(".logo-images").css("vertical-align","middle"),$(".logo-images").css("text-align","-webkit-center"),$(".maginifyimg").css("margin-right","0px")):$(".imageIDs")?$(".imageIDs").removeClass("mobileUpdate"):console.log("imageIDs not found");jQuery(window).on("resize",a);jQuery(".logo-image>img").on("click",function(){if(640>(0<window.innerWidth?window.innerWidth:screen.width)){$(".imagePopup>img").attr("src",
$(this).attr("src"));let e=$(this).width(),d=$(this).height();e=.2*e+e;d=.2*d+d;$(".overlay, .imagePopup").show();$(".zoomImage").css("width",e);$(".zoomImage").css("height",d);window.location.href="#";a()}});$=jQuery;jQuery(".zoomContainers").on("click",function(){if(640>(0<window.innerWidth?window.innerWidth:screen.width)){var e=$(this).parent().parent();var d=$(e).find(".maginifyimg");$(".imagePopup>img").attr("src",d.attr("src"));e=d.width();d=d.height();e=.2*e+e;d=.2*d+d;$(".overlay, .imagePopup").show();
$(".zoomImage").css("width",e);$(".zoomImage").css("height",d);window.location.href="#";a()}})});
$(function(){function a(){$(".imagePopup").is(":visible")&&$(".imagePopup").animate({left:5,top:100},200,"linear")}$(".overlay, .imagePopup").hide();640>(0<window.innerWidth?window.innerWidth:screen.width)?($(".imageIDs").addClass("mobileUpdate"),$(".zoomContainer").css("display","block")):$(".imageIDs").removeClass("mobileUpdate");jQuery(window).on("resize",a);jQuery(".container>img").on("click",function(){if(640>(0<window.innerWidth?window.innerWidth:screen.width)){$(".imagePopup>img").attr("src",
$(this).attr("src"));let b=$(this).width(),c=$(this).height();b=.2*b+b;c=.2*c+c;$(".overlay, .imagePopup").show();$(".zoomImage").css("width",b);$(".zoomImage").css("height",c);window.location.href="#";a()}});$=jQuery;jQuery(".zoomContainer").on("click",function(){if(640>(0<window.innerWidth?window.innerWidth:screen.width)){var b=$(this).parent().parent();var c=$(b).find(".imageMagnify");$(".imagePopup>img").attr("src",c.attr("src"));b=c.width();c=c.height();b=.2*b+b;c=.2*c+c;$(".overlay, .imagePopup").show();
$(".zoomImage").css("width",b);$(".zoomImage").css("height",c);window.location.href="#";a()}})});width=0<window.innerWidth?window.innerWidth:screen.width;640>width?($(".imageID").addClass("mobileUpdates"),$(".imageID").css("vertical-align","middle"),$(".imageID").css("text-align","-webkit-center"),$(".zoomContainer").css("display","block"),$(".zoomContainers").css("display","block")):$(".imageID").removeClass("mobileUpdates");
function switchAnchor(a){""!=a&&window.setTimeout(function(){$("html, body").animate({scrollTop:$('a[name="'+a+'"]').offset().top-180},"fast")},1E3)}$=jQuery;function cleanXSS(a){let b="";""!=a&&null!=a&&"null"!=a&&(b=a.replace("<",""),b=b.replace(">",""),b=b.replace("'",""),b=b.replace('"',""),b=b.replace("%3C","+"));return b}function sanitizeHTML(a){let b=document.createElement("div");b.textContent=a;return b.innerHTML}let supportAgent={va:{}};supportAgent.va.init=function(){};
supportAgent.va.askvz=function(a,b){"undefined"!=typeof s&&(s.events=null,s.prop11=linkName=a,s.prop13=s.prop1+"/"+s.prop10+"/|"+s.prop11,s.prop17=b,s.linkTrackVars=s.apl(s.linkTrackVars,"prop13",",",1),s.linkTrackVars=s.apl(s.linkTrackVars,"prop11",",",1),s.linkTrackVars=s.apl(s.linkTrackVars,"prop17",",",1),_hbLinkAskVz(linkName,""),-1<location.hostname.indexOf("www.verizonwireless.com")?s.un="vzwiglobal":s.un="vzwitestenv")};
function _hbLinkAskVz(a,b){_lc=!0;a&&(s.prop11=a.replace(/\+/g," "),s.prop11=s.prop11.replace(/[[\]{}|#$%^*!<>~;]/g,""),s.prop13=s.prop1+"/"+s.prop10+"/|"+s.prop11,b&&(s.prop12=b.replace(/\+/g," ")),-1==s.linkTrackVars.indexOf("prop11")&&(s.linkTrackVars+=",prop11"),-1==s.linkTrackVars.indexOf("prop12")&&(s.linkTrackVars+=",prop12"),-1==s.linkTrackVars.indexOf("prop13")&&(s.linkTrackVars+=",prop13"),s.tl(!1,"o",s.prop11));"search"==s.prop11&&s.getAndPersistValue(s.pageName,"s_sctppn")}
supportAgent.va.preventDefault=function(a){a.preventDefault();a.stopPropagation()};supportAgent.va.sanitizeChars=function(a){return JSON.stringify(a).replace(/_/g,"UNDERSCORE").replace(/\-/g,"HYPHEN").replace(/\//g,"FWDSLASH").replace(/\\/g,"BACKSLASH").replace(/"/g,"QUOTES").replace(/:/g,"COLON").replace(/\{/g,"LBRACE").replace(/\}/g,"RBRACE").replace(/,/g,"COMMA").replace(/\./g,"DOT").replace(/ /g,"___")};
supportAgent.va.readCookie_=function(a){a+="=";var b=document.cookie.split(";");for(const c of b){for(b=c;" "===b.charAt(0);)b=b.substring(1,b.length);if(0===b.indexOf(a))return b.substring(a.length,b.length)}return null};
function getDevice(){let a=navigator.userAgent.toUpperCase();return(-1<a.indexOf("IPHONE")||-1<a.indexOf("IPAD")||-1<a.indexOf("IPOD"))&&-1<a.indexOf("SAFARI")?"mobile":(-1<a.indexOf("IPHONE")||-1<a.indexOf("IPAD")||-1<a.indexOf("IPOD"))&&-1==a.indexOf("SAFARI")?"mobile":-1<a.indexOf("ANDROID")&&-1<a.indexOf("VZAPP-ANDROID")?"mobile":-1<a.indexOf("ANDROID")?"mobile":"BROWSER"}
function getCategory(){try{let a="",b="vaChatSpanPlaceHolderLoggedIn";"mobile"==getDevice()&&(b+="Mobile");let c=$("#"+b).attr("pagename").split("/");if(-1<$.inArray("device",c))a="Device";else if(-1<$.inArray("Billing and Payments",c))a="Billing";else if(-1<$.inArray("International Services",c))a="Global";else if(-1<$.inArray("Verizon Cloud",c))a="Device";else if(-1<$.inArray("plans",c)||-1<$.inArray("Plans",c)||-1<$.inArray("Caller ID & Call Blocking",c)||-1<$.inArray("Device Payment",c)||-1<$.inArray("Insurance and Equipment Protection",
c)||-1<$.inArray("Messaging",c)||-1<$.inArray("Verizon Support and Protection",c))a="MVTrans";return a}catch(a){console.error("Error in openVA:",a)}}function isContactusEnabledForAskVZ(){return"undefined"!==typeof isContactUsPage&&!0===isContactUsPage&&("undefined"!==typeof isContactUsAskVzEnabled&&!0===isContactUsAskVzEnabled||isAskvzThrottled())}
function setCookie(a,b,c){let e=new Date;e.setTime(e.getTime()+864E5*c);c="expires="+e.toUTCString();isAllowedCookiePattern(a)&&isAllowedCookiePattern(b)&&(document.cookie=a+"="+b+";domain=.verizonwireless.com;"+c+";path=/")}function checkCookie(a){"true"!==supportAgent.va.readCookie_(a)&&""!==a&&null!=a&&setCookie(a,"true",90)}let getQueryStringP=function(a,b){return(a=(new RegExp("[?&]"+a+"=([^&#]*)","i")).exec("undefined"!==typeof b&&null!==b?b:window.location.href))&&a[1]||null};
function isAskvzThrottled(){return"true"===getQueryStringP("throttled")?!0:"true"===supportAgent.va.readCookie_("ASKVZ_USER_THROTTLED")}function contactusAskVzNUI(){supportAgent.va.openVA(null,null,!0,contactUsAskVzUrl)}isContactusEnabledForAskVZ()&&"undefined"!==typeof contactus&&"undefined"!==typeof contactus.va&&(contactus.va.openVA=contactusAskVzNUI);
supportAgent.va.openVA=function(a,b,c,e){if(c||isAskvzThrottled()){try{getCategory()}catch(k){}supportAgent.va.openChatWindow("support")}else{c={datapass:!1,pagename:window.location.pathname};try{if(null!=vzwDL&&0<vzwDL.authentication.accountNumber.length){e={};var d="N";e.datapass=!0;e.pagename=window.location.pathname;e.TouchData={};e.TouchData.Role=supportAgent.va.readCookie_("role");e.TouchData.GreetingName=vzwDL.authentication.greetingName;e.TouchData.customCRM=vzwDL.authentication.mHash2;var f=
supportAgent.va.readCookie_("role");"undefined"===f||"accountholder"!=f&&"accountHolder"!=f&&"accountOwner"!=f&&"accountowner"!=f&&"accountManager"!=f&&"accountmanager"!=f||"undefined"===typeof vzwDL.authentication.mdn||"null"==vzwDL.authentication.mdn||""==vzwDL.authentication.mdn||(d="Y");e.TouchData.Security="Y"==d?'<font color="#008000">Validated</font>':'<font color="#ff0000">Not Validated</font>';var h=e.TouchData,p=vzwDL.authentication.mdn;f=d;d="N/A";if(p&&"undefined"!=p&&"null"!=p){var v=
p.replace(/\D/g,"").match(/^(\d{3})(\d{3})(\d{4})$/);d=v?"("+v[1]+") "+v[2]+"-"+v[3]:null}h.MobileNumber='<font color="#0000CC"><u><a href="event:acss:'+(p&&"undefined"!==typeof p&&"null"!=p?"viewName=customerSearchNewView&noheader=true&validated="+f+"&Originsystem=TC&mdnSearched="+p+"&fromScreen=TOOLBAR&hiddCustMdnSearch=mdn":"viewName=customerSearchNewView&noheader=true&validated="+f+"&Originsystem=TCfromScreen=TOOLBAR&hiddCustMdnSearch=mdn")+'">'+d+"</a></u></font>";c=e}}catch(k){}v="bot.htm";
h="?isJSEnabled=1";p="titlebar=0,toolbar=0,location=0,status=0,resizable=1";f=e=550;if("true"===a.getAttribute("data-va-enabled")){for(let k in b)switch(k){case "businessArea":h=h+"&businessArea="+encodeURI(b[k]);break;case "entry":h=h+"&entry="+encodeURI(b[k]);break;case "SiteContext":h=h+"&SiteContext="+encodeURI(b[k]);break;case "channel":h=h+"&channel="+encodeURI(b[k]);break;case "template":v=b[k];break;case "width":e=b[k];break;case "height":f=b[k]}b=encodeURIComponent(a.getAttribute("pagename"));
h=v+h+"&lcEscalation="+a.getAttribute("data-va-lc-escalation")+"&pagename="+b;p=p+",width="+e+",height="+f;a=supportAgent.va.sanitizeChars(c);supportAgent.va.popup=window.open(h,a,p)}}};
supportAgent.va.openChatWindow=function(a,b){let c=getQueryStringP("eceChatToken"),e=getQueryStringP("mdn"),d=getCategory(),f={};"null"!=a&&null!=a&&""!=a&&(f.section=a);"null"!=c&&null!=c&&""!=c&&(f.eceChatToken=c);"null"!=b&&null!=b&&""!=b&&(f.entry=b);"null"!=e&&null!=e&&""!=e&&(f.mdn=e);"null"!=d&&null!=d&&""!=d&&(f.category=d);EchannelVera.init(f)};
supportAgent.va.openChatWindowForSearch=function(a,b,c){let e=getQueryStringP("eceChatToken"),d=getQueryStringP("mdn"),f=getCategory(),h={};"null"!=a&&null!=a&&""!=a&&(h.section=a);"null"!=e&&null!=e&&""!=e&&(h.eceChatToken=e);"null"!=b&&null!=b&&""!=b&&(h.userText="event:"+b);"null"!=d&&null!=d&&""!=d?h.mdn=d:vzdl&&vzdl.user&&vzdl.user.custId_unhashed&&(h.mdn=vzdl.user.custId_unhashed);"null"!=f&&null!=f&&""!=f&&(h.category=f);"null"!=c&&null!=c&&""!=c&&(h.tileKey=c);console.log("openChatWindowForSearch:",
h);EchannelVera.init(h)};supportAgent.va.init();"undefined"!==typeof isWhitelisted&&"true"==isWhitelisted&&checkCookie("ASKVZ_USER_THROTTLED");function openChatWindowOnLoad(a){let b=getQueryStringP("eceChatToken");a="undefined"==a||void 0==a?getQueryStringP("source"):a;"null"!=b&&null!=b&&""!=b&&("null"!=a&&null!=a&&""!=a&&"contactus"!=a?supportAgent.va.openChatWindow("support"):supportAgent.va.openChatWindow("contactus"))}function processMessage(a){a.data.newHash&&setParentHash(a.data.newHash)}
function setParentHash(a){window.location.hash=a}function setIframeHash(a){let b=document.getElementById("ozmo-client"),c=b.src.split("#");c[1]&&""!==c[1]||(b.src=stripHash(b.src)+a)}function ozmoInitHash(a){let b=document.getElementById("ozmo-client");b&&(b.onload=function(){setIframeHash(a)})}function stripHash(a){return-1!==a.lastIndexOf("#")?a.substring(0,a.lastIndexOf("#")):a}
0<window.location.pathname.indexOf("/simulator/")&&(window.addEventListener("message",processMessage,!1),""!=window.location.hash.substring(1)&&ozmoInitHash(window.location.hash),window.setTimeout(function(){$("html, body").animate({scrollTop:$("#ozmo-client").offset().top-220},"fast")},1E3));
let support_smartsetup_tooltip_init=function(){let a=jQuery(".smartsetup-tooltip");jQuery.each(a,function(b,c){b=jQuery(this);if(0<b.attr("tooltip").length){if("undefined"==typeof CQ||"undefined"==typeof CQ.WCM||"undefined"!=typeof CQ&&CQ.WCM&&!CQ.WCM.isEditMode(!0)){c=b.attr("tooltip");let e='<span class="a11y-smartsetup-hidden" base-label="'+jQuery(b).parent().text()+'">';b.html(e+c+"</span>")}b.replaceWith(function(){return $("<span/>",{class:"a11y-smartsetup-tooltip",html:this.innerHTML})})}})},
a11y_smartsetup_tooltip={userIsTouching:!1,hoverhidetimer:null,currentTooltipIcon:null,init:function(){jQuery(".a11y-smartsetup-tooltip span:first-of-type").attr("aria-hidden","true");jQuery(".a11y-smartsetup-tooltip").each(function(){jQuery(this).prepend('<a aria-label="'+jQuery(this).find("span:first").attr("base-label")+' tooltip" aria-expanded="false" href="#"></a>')});let a=jQuery(".a11y-smartsetup-tooltip").find("a:first");a.off();a.on("touchstart",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=
this;a11y_smartsetup_tooltip.userIsTouching=!0});a.on("mouseenter",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=this;a11y_smartsetup_tooltip.userIsTouching||jQuery("#smartsetup-tooltip").length||a11y_smartsetup_tooltip.tooltipOpen(b)});a.on("mouseleave",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=this;a11y_smartsetup_tooltip.userIsTouching||jQuery(".smartsetup-tooltip-close").is(":visible")||a11y_smartsetup_tooltip.tooltipCloseWithTimeout(b)});a.on("click",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=
this;jQuery("#smartsetup-tooltip").length?jQuery(".smartsetup-tooltip-close").is(":visible")?a11y_smartsetup_tooltip.tooltipClose(b):a11y_smartsetup_tooltip.tooltipOpen(b):a11y_smartsetup_tooltip.tooltipOpen(b)});a.on("blur",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=this;jQuery("#smartsetup-tooltip").length&&jQuery("#smartsetup-tooltip").find("a:first-of-type").focus()});a.on("keyup",function(b){a11y_smartsetup_tooltip.currentTooltipIcon=this;(9!=b.keyCode&&27==b.keyCode||9==b.keyCode&&
b.shiftKey)&&jQuery("#smartsetup-tooltip").length&&a11y_smartsetup_tooltip.tooltipClose(b)})},tooltipOpen:function(a){a.stopPropagation();a.preventDefault();jQuery("#smartsetup-tooltip").remove();var b=jQuery(a.target);domTarget=a.target;let c=null;var e=b.next().html();let d=jQuery('<div id="smartsetup-tooltip"><span class="smartsetup-tooltip-arrow"></span><div class="smartsetup-tooltip-content"></div></div>');c='<button class="smartsetup-tooltip-close" tabindex="0" style="display:none" aria-label="Close information tooltip">&times;</button>';
d.append(c);if(!e||""==e)return!1;d.find(".smartsetup-tooltip-content").html(e);d.find(".smartsetup-tooltip-content").find("a").attr("tabindex","0");jQuery("body").after(d);"click"===a.type&&jQuery(".smartsetup-tooltip-close").show();var f=b.closest(".columnWrapperOuter").outerWidth();e=a=0;a=jQuery(window).width()>f?f:jQuery(window).width();b.offset().left>f?(e=(jQuery(window).width()-f)/2,e=b.offset().left-e):e=b.offset().left;f=e+b.outerWidth()/2-d.outerWidth()/2;let h=-d.outerHeight()-10,p=window.scrollX||
window.pageXOffset||document.body.scrollLeft+(document.documentElement&&document.documentElement.scrollLeft||0),v=window.scrollY||window.pageYOffset||document.body.scrollTop+(document.documentElement&&document.documentElement.scrollTop||0);f=d.outerWidth()>a-e?e-d.outerWidth()+b.outerWidth()/2-f-(f+d.outerWidth()-a):20>=e?0:-20;a=domTarget.getBoundingClientRect().top+v-window.pageYOffset+h;h=a>=d.outerHeight()+10?h+(domTarget.getBoundingClientRect().top+v):domTarget.getBoundingClientRect().top+v+
25;f+=domTarget.getBoundingClientRect().left+p;d.css({left:f,top:h});e=b.offset().left-d.offset().left;2>=e&&(e=b.width()/2-6);d.find(".smartsetup-tooltip-arrow").css("left",e);a>=d.outerHeight()+10?d.find(".smartsetup-tooltip-arrow").css("top","").css("transform","rotate(-135deg)").css("bottom","-6px"):d.find(".smartsetup-tooltip-arrow").css("top","-6px").css("transform","rotate(45deg)").css("bottom","");b.attr("aria-expanded","true");b=b.next();a=b.find("button.smartsetup-tooltip-close");a11y_smartsetup_tooltip.ttClose&&
!a.length&&b.attr("aria-hidden",!1).html(b.html()+c);jQuery(".smartsetup-tooltip-close").off();jQuery(".smartsetup-tooltip-close").on("click",function(k){a11y_smartsetup_tooltip.tooltipClose(k)});jQuery(".smartsetup-tooltip-close").on("focus",function(k){jQuery(".smartsetup-tooltip-close").addClass("pseudo-focus")});jQuery(".smartsetup-tooltip-close").on("blur",function(k){a11y_smartsetup_tooltip.tooltipClose(k);jQuery(".smartsetup-tooltip-close").removeClass("pseudo-focus")});d.on("mouseenter",function(k){a11y_smartsetup_tooltip.hoverhidetimer&&
clearTimeout(a11y_smartsetup_tooltip.hoverhidetimer)});d.on("click",function(k){jQuery(".smartsetup-tooltip-close").show()});d.on("mouseleave",function(k){a11y_smartsetup_tooltip.mouse_is_inside=!1;a11y_smartsetup_tooltip.hoverhidetimer&&clearTimeout(a11y_smartsetup_tooltip.hoverhidetimer);jQuery(".smartsetup-tooltip-close").is(":visible")||a11y_smartsetup_tooltip.tooltipClose(k)});jQuery(document).mouseup(function(k){!jQuery("#smartsetup-tooltip").length||jQuery(k.target).hasClass("smartsetup-tooltip-content")||
jQuery(k.target).hasClass("smartsetup-tooltip-close")||"smartsetup-tooltip"==jQuery(k.target).attr("id")||jQuery(k.target).parent().hasClass("smartsetup-tooltip-content")||jQuery(k.target).parent().hasClass("a11y-smartsetup-tooltip")||a11y_smartsetup_tooltip.tooltipClose(k)})},tooltipCloseWithTimeout:function(a){try{a.stopPropagation(),a.preventDefault(),null!=a11y_smartsetup_tooltip.currentTooltipIcon&&jQuery(a11y_smartsetup_tooltip.currentTooltipIcon).focus(),a11y_smartsetup_tooltip.hoverhidetimer=
setTimeout(function(){jQuery("#smartsetup-tooltip").remove();null!=a11y_smartsetup_tooltip.currentTooltipIcon&&jQuery(a11y_smartsetup_tooltip.currentTooltipIcon).attr("aria-expanded","false");a11y_smartsetup_tooltip.userIsTouching=!1},300)}catch(b){console.error(b)}},tooltipClose:function(a){try{a.stopPropagation(),a.preventDefault(),null!=a11y_smartsetup_tooltip.currentTooltipIcon&&(jQuery(a11y_smartsetup_tooltip.currentTooltipIcon).focus(),jQuery(a11y_smartsetup_tooltip.currentTooltipIcon).attr("aria-expanded",
"false")),jQuery("#smartsetup-tooltip").remove(),a11y_smartsetup_tooltip.userIsTouching=!1}catch(b){}}};
jQuery(document).ready(function(){support_smartsetup_tooltip_init();a11y_smartsetup_tooltip.init();jQuery(".top-menu-item a").on("focus",function(a){jQuery(this).find("div").addClass("pseudo-focus")});jQuery(".top-menu-item a").on("blur",function(a){jQuery(this).find("div").removeClass("pseudo-focus")});jQuery(".device-border a").on("focus",function(a){jQuery(this).parent().addClass("pseudo-focus");jQuery(this).closest("section").css("margin","2px")});jQuery(".device-border a").on("blur",function(a){jQuery(this).parent().removeClass("pseudo-focus");
jQuery(this).closest("section").css("margin","")});jQuery(".expansion_button").on("focus",function(a){jQuery(this).addClass("pseudo-focus")});jQuery(".expansion_button").on("blur",function(a){jQuery(this).removeClass("pseudo-focus")});jQuery(".closeDiv .closeButton").on("focus",function(a){jQuery(this).addClass("pseudo-focus")});jQuery(".closeDiv .closeButton").on("blur",function(a){jQuery(this).removeClass("pseudo-focus")})});
(function(a,b){"function"===typeof define&&define.amd?define([],function(){return b(a,a.document)}):"object"===typeof exports?module.exports=b(a,a.document):a.skrollTop=b(a,a.document)})("undefined"!==typeof global?global:"undefined"!==typeof window?window:this,function(a,b){let c,e={};Math.easeInOutCubic=function(d,f,h,p){return 1>(d/=p/2)?h/2*d*d*d+f:h/2*((d-=2)*d*d+2)+f};e.stop=function(){c=!1};e.scrollTo=function(d){let f="undefined"!==typeof d.element?d.element:a,h="undefined"!==typeof d.duration?
d.duration:700,p="undefined"!==typeof d.callback?d.callback:null,v="undefined"!==typeof d.easing?d.easing:Math.easeInOutCubic,k=(a.pageYOffset||b.documentElement.scrollTop)-(b.documentElement.clientTop||0),g=d.to-k,t=0;c=!0;let y=function(){c?(t+=16,f.scrollTo(0,v(t,k,g,h)),t<h?setTimeout(y,16):p&&p()):t<h&&p&&p()};y()};return e});
function jumpToAnchor(a){skrollTop.scrollTo({to:$('[name="'+a+'"]').offset().top-180,duration:600});$("#fromOS")?$('[name="fromOS"]').focus():$('[name="'+a+'"]').focus()}
jQuery(document).ready(function(){jQuery(".aemTooltip").text("");jQuery(".smartsetup_video_accordion_trigger").on("click",function(a){a.preventDefault();a=jQuery(a.currentTarget);let b=a.next();b.is(":visible")?(b.show(),b.attr("aria-hidden","false"),a.attr("aria-expanded","true")):(b.hide(),b.attr("aria-hidden","true"),a.attr("aria-expanded","false"))})});
jQuery(document).ready(function(){jQuery(".oneDRd_video_accordion_content").css("display","none");jQuery("#transcript_print").click(function(){$("html").addClass("transcriptPrint");try{$.browser.mozilla?window.print():document.execCommand("print",!1,null)||window.print()}catch(a){window.print()}setTimeout(function(){$("html").removeClass("transcriptPrint")})})});
function validateURL(a){let b=parseURL(a).hostname.trim();return""==b||"localhost"==b?!0:b.toUpperCase()==location.hostname.trim().toUpperCase()&&isAllowedUrlPattern(a)?!0:!1}function isAllowedUrlPattern(a){return/^[ A-Za-z0-9+&@#/%=~_|$?!:,.-]*$/.test(a)?!0:!1}
function parseURL(a){let b=document.createElement("a");$(b).attr("href",sanitizeData(a));a=sanitizeData(a);var c=b.protocol.replace(":",""),e=b.hostname,d=b.host,f=b.port,h=b.search;let p={},v=b.search.replace(/^\?/,"").split("&"),k=v.length,g=0,t;for(;g<k;g++)v[g]&&(t=v[g].split("="),p[t[0]]=t[1]);return{source:a,protocol:c,hostname:e,host:d,port:f,query:h,params:p,file:(b.pathname.match(/\/([^\/?#]+)$/i)||[,""])[1],hash:b.hash.replace("#",""),path:b.pathname.replace(/^([^\/])/,"/$1"),relative:(b.href.match(/tps?:\/\/[^\/]+(.+)/)||
[,""])[1],segments:b.pathname.replace(/^\//,"").split("/")}}function sanitizeData(a){let b="";""!=a&&null!=a&&"null"!=a&&(b=a.replace("<",""),b=b.replace(">",""),b=b.replace("'",""),b=b.replace('"',""),b=b.replace("%3C","+"));return b}function isAllowedPathPattern(a){return/^[ A-Za-z0-9+&@#/%=~_|$?!:,.-]*$/.test(a)?!0:!1}function isAllowedCookiePattern(a){return/^[ A-Za-z0-9_/=#:.%&-;|$!]*$/.test(a)?!0:!1}
function nav(){var a=window.location.href.split("#")[1];let b=0;"undefined"!=typeof a&&0>=document.getElementsByClassName("seo-container").length&&(a=decodeURI(a),null!=document.getElementById(a)?b=document.getElementById(a).getBoundingClientRect().top:null!=document.getElementsByName(a)&&null!=document.getElementsByName(a)[0]&&(b=document.getElementsByName(a)[0].getBoundingClientRect().top),0!=b&&(a=60,0<$("#vzw-gn").length?a=document.getElementById("vzw-gn").clientHeight+28:0<$("#vz-gh20").length&&
(a=document.getElementById("vz-gh20").clientHeight+28),offsetDifference=b-a,window.scrollTo({top:offsetDifference}),document.documentElement.scrollTop=offsetDifference))}const hideShowForApp=()=>{vzwDL.mvo.utils.isMVA()?($(".hideInApp").remove(),$(".showInAppOnly").removeClass("showInAppOnly")):($(".showInAppOnly").remove(),$(".hideInApp").addClass("hideInApp"))};
$(document).ready(function(){nav();hideShowForApp();$(".full-answer-link").on("click",function(){var a=$(this).closest(".text");let b=a.find(".text-fold");a=a.find(".summary-content");b.is(":visible")?(b.hide(),a.show(),$(this).text("Review full answer"),$(this).attr("data-track",'{"type":"link","name":"Review full answer"}')):(b.show(),a.hide(),$(this).text("Show simplified answer"),$(this).attr("data-track",'{"type":"link","name":"Show simplified answer"}'))})});
window.addEventListener("hashchange",nav);

'use strict';(function(d,m){var l=null;l="prod"!=vzwDL.tealium_environment?"//"+window.location.host+"/support":"//www.verizonwireless.com/support";var a={cur_el:null,cur_key:null,init:function(){d(".popover").each(function(c){d(this).undelegate();d(this).addClass("popover_supp");d(this).removeClass("popover")});d(".vgn_popover").each(function(c){d(this).undelegate();d(this).addClass("glos_vgn_popover");d(this).removeClass("vgn_popover")});try{var b=function(){try{if(clearTimeout(a.hoverhidetimer),
a.hideAllTips(),a.cur_el=d(this),0<a.cur_el.attr("href").split("#").length){a.cur_key=a.cur_el.attr("href").split("#").pop();var c=a.cur_el.children().eq(0).children().eq(0);"undefined"!=typeof c&&""!=c.text()&&"empty"!=c.text()?(c.text(),a.showPopupDefinition()):a.getDefinitionPitloot(a.cur_key)}}catch(h){}};d(document).delegate(".vgn_popover","mouseenter",b);d(document).delegate(".glos_vgn_popover","mouseenter",b);var f=function(){try{a.hoverhidetimer=setTimeout(function(){a.hideAllTips()},300)}catch(c){}},
e=function(c){try{c.stopPropagation(),c.preventDefault(),console.log("glossary popup click:"+d(c.target).attr("href")),d(c.target).attr("href")?window.open(d(c.target).attr("href"),"_blank"):(0<d(this).attr("href").split("#").length&&(tt_key=a.cur_el.attr("href").split("#").pop()),window.open(l+"/glossary/#"+tt_key))}catch(h){}return!1};d(document).delegate(".vgn_popover","click",e);d(document).delegate(".vgn_popover","mouseleave",f);d(document).delegate(".glos_vgn_popover","click",e);d(document).delegate(".glos_vgn_popover",
"mouseleave",f);d(document).delegate(".popover_supp","mouseenter",b);d(document).delegate(".popover_supp","mouseleave",f)}catch(c){}},hideAllTips:function(){d(".vgn_popover_container").hide()},hoverhidetimer:null,makePopupDefinition:function(b,f){if("undefined"==typeof CQ||"undefined"==typeof CQ.WCM||"undefined"!=typeof CQ&&"undefined"!=typeof CQ.WCM&&!CQ.WCM.isEditMode(!0))console.log("vzgn_gloss_support.cur_key:"+a.cur_key+" "+decodeURIComponent(a.cur_key)),console.log("vzgn_gloss_support.cur_el:"+
a.cur_el),console.log("term:"+f),f==decodeURIComponent(a.cur_key)&&(b=decodeURIComponent(b),b='<div class="vgn_popover_container" ><div class="vgn_ttMsg" style="display: none;">'+b+'</div><div class="vgn_ttPointer" style="display: none;"> </div><div class="vgn_ttPointerRight" style="display: none;"> </div>',a.cur_el.append(b),console.log("place html:"+b),a.showPopupDefinition())},popDirection:function(){var b=d(window).width();0<a.cur_el.closest(".oneDRd_video_accordion_content").length&&(b=a.cur_el.closest(".oneDRd_video_accordion_content").width()+
a.cur_el.closest(".oneDRd_video_accordion_content").position().left);var f=a.cur_el.width()+266;360<a.cur_el.find(".vgn_ttMsg").text().length&&(f=a.cur_el.width()+326);return a.cur_el.position().left+f>b&&30>a.cur_el.height()?"left":"right"},showPopupDefinition:function(){clearTimeout(a.hoverhidetimer);"right"==a.popDirection()?a.popToTheRight():a.popToTheLeft()},popToTheRight:function(){var b=a.cur_el.position(),f=b.left;b=b.top;var e=d(a.cur_el).closest("table");if(0<e.length){console.log("parentTable.position().left:"+
e.position().left);console.log("parentTable.position().top:"+e.position().top);var c=d(a.cur_el).closest("td");0<c.length?(console.log("parentTd.position().left:"+c.position().left),console.log("parentTd.position().top:"+c.position().top),c.position().top<e.position().top&&(f+=c.position().left,b+=c.position().top,f+=e.position().left,b+=e.position().top)):(c=d(a.cur_el).closest("th"),0<c.length&&(console.log("parentTh.position().left:"+c.position().left),console.log("parentTh.position().top:"+c.position().top),
c.position().top<e.position().top&&(f+=c.position().left,b+=c.position().top,f+=e.position().left,b+=e.position().top)))}e=a.cur_el.width();0<a.cur_el.closest(".oneDRd_video_accordion_content").length&&a.cur_el.closest(".oneDRd_video_accordion_content").position().left==f&&30<a.cur_el.height()&&(e=100,b+=20);c=f-5+e+"px";var h=b-3+"px";f=f+10+e+"px";b=b-31+"px";a.cur_el.find(".vgn_ttPointer ").css({left:c,top:h});a.cur_el.find(".vgn_ttMsg").css({left:f,top:b});a.cur_el.find(".vgn_ttShadow").css({left:f,
top:b});a.cur_el.find(".vgn_ttPointerRight").hide();a.cur_el.find(".vgn_ttPointer ").show();a.cur_el.find(".vgn_ttMsg").show();a.cur_el.find(".vgn_popover_container").show()},popToTheLeft:function(){var b=a.cur_el.position(),f=b.left;b=b.top;var e=d(a.cur_el).closest("table");if(0<e.length){console.log("parentTable.position().left:"+e.position().left);console.log("parentTable.position().top:"+e.position().top);var c=d(a.cur_el).closest("td");0<c.length?(console.log("parentTd.position().left:"+c.position().left),
console.log("parentTd.position().top:"+c.position().top),c.position().top<e.position().top&&(f+=c.position().left,b+=c.position().top,f+=e.position().left,b+=e.position().top)):(c=d(a.cur_el).closest("th"),0<c.length&&(console.log("parentTh.position().left:"+c.position().left),console.log("parentTh.position().top:"+c.position().top),c.position().top<e.position().top&&(f+=c.position().left,b+=c.position().top,f+=e.position().left,b+=e.position().top)))}a.cur_el.width();e=f-12+"px";c=b-3+"px";f=f-302+
"px";b=b-31+"px";a.cur_el.find(".vgn_ttPointerRight").css({left:e,top:c});a.cur_el.find(".vgn_ttMsg").css({left:f,top:b});a.cur_el.find(".vgn_ttShadow").css({left:f,top:b});a.cur_el.find(".vgn_ttPointer ").hide();a.cur_el.find(".vgn_ttPointerRight").show();a.cur_el.find(".vgn_ttMsg").show();a.cur_el.find(".vgn_popover_container").show()},getDefinitionPitloot:function(b){b=b.replace(/%20/g," ");b="/content/support/tools/popover."+encodeURI(b)+".json";d.ajax({url:b,type:"GET",cache:!0,contentType:"application/json",
dataType:"json",timeout:1E4,error:function(f,e,c){console.log("XMLHttpRequest:"+f+"textStatus:"+e+"error occured"+c)},success:a.vgn_defineGlossaryTerm})},vgn_defineGlossaryTerm:function(b){try{(0==b.statusCode||"0"==b.statusCode)&&null!=b.definition&&0<b.definition.length?a.makePopupDefinition(b.definition,b.term):console.log("response has issue:"+b)}catch(f){console.log(f)}}};d(document).ready(function(){function b(c){c.data.newHash&&(window.location.hash=c.data.newHash)}function f(c){var h=document.getElementById("ozmo-client");
h&&(h.onload=function(){var k=document.getElementById("ozmo-client"),g=k.src.split("#");g[1]&&""!==g[1]||(g=k.src,g=-1!==g.lastIndexOf("#")?g.substring(0,g.lastIndexOf("#")):g,k.src=g+c)})}if(0<window.location.pathname.indexOf("/simulator/")){window.addEventListener("message",b,!1);if(""!=window.location.hash.substring(1))f(window.location.hash);else{var e=getQueryStringP("CID");""!=e&&f("#"+e.toUpperCase())}window.setTimeout(function(){$("html, body").animate({scrollTop:$("#ozmo-client").parent().offset().top-
260},"fast")},1E3)}e=d("#borderFlag").html();void 0!==e&&"true"===e&&(d("table").css({border:"0 none",width:"100%"}),d("td").css({border:"0 none",width:"100%"}),d("tr").css({border:"0 none",width:"100%"}));e=d("#tableStyleFlag").html();void 0!==e&&"true"===e&&(d("table").css({border:"1px solid #000",width:"100%"}),d("td").css({border:"1px solid #000",padding:"6px 6px 6px 12px"}),d("tr").css({border:"1px solid #000",padding:"6px 6px 6px 12px"}));a.init()})})($,$(document));

'use strict';jQuery(document).ready(function(){jQuery("th").attr("role","columnheader");$(".aemTooltip").attr("tabindex",0);$(".aemtooltip").attr("aria-live","polite");jQuery(".aemTooltip:contains('TT')").text("");support_aem_tooltip.init()});
var support_aem_tooltip={tooltipHide:null,cur_el:null,isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?!0:!1,init:function(){try{var b=function(a){try{if(tooltipHide=jQuery(a.target),support_aem_tooltip.cur_el=jQuery(a.target).closest("span"),!support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").is(":visible")){clearTimeout(support_aem_tooltip.hoverhidetimer);support_aem_tooltip.hideAllTips();if(0<support_aem_tooltip.cur_el.attr("tooltip").length){var d=
support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg");"undefined"!=typeof d&&""!=d.text()?(jQuery(".aemTooltip").attr("aria-expanded","true"),window.setTimeout(function(){support_aem_tooltip.showPopupDefinition()},50)):window.setTimeout(function(){support_aem_tooltip.makePopupDefinition(support_aem_tooltip.cur_el.attr("tooltip"))},50)}try{support_aem_tooltip.hovershowtimer=setTimeout(function(){support_aem_tooltip.showPopupDefinition()},50)}catch(e){}}}catch(e){}};if(!support_aem_tooltip.isMobile)jQuery(".aemTooltip").on("mouseenter",
b);var c=function(a){try{jQuery(".aemTooltip").attr("aria-expanded","false"),support_aem_tooltip.hoverhidetimer=setTimeout(function(){support_aem_tooltip.hideAllTips()},300)}catch(d){}};if(!support_aem_tooltip.isMobile)jQuery(".aemTooltip").on("mouseleave",c);jQuery(".aemTooltip").on("click",function(a){a.stopPropagation();a.preventDefault();var d=jQuery(this);"undefined"===typeof jQuery(this).closest("span").find(".aemTooltip_container").css("display")||"none"==jQuery(this).closest("span").find(".aemTooltip_container").css("display")?
(d.attr("aria-expanded","true"),window.setTimeout(function(){b(a)},200)):(d.attr("aria-expanded","false"),window.setTimeout(function(){support_aem_tooltip.hideAllTips()},200))});jQuery(".aemTooltip").on("keydown",function(a){a.stopPropagation();if(32==a.which){a.preventDefault();var d=jQuery(this);"undefined"===typeof jQuery(this).closest("span").find(".aemTooltip_container").css("display")||"none"==jQuery(this).closest("span").find(".aemTooltip_container").css("display")?(d.attr("aria-expanded",
"true"),window.setTimeout(function(){b(a)},200)):(d.attr("aria-expanded","false"),support_aem_tooltip.hideAllTips())}else if(27==a.which||9==a.which)jQuery(this).attr("aria-expanded","false"),support_aem_tooltip.hideAllTips()});$(document).on("keydown",function(a){(32==a.which||13==a.which||27==a.which||9==a.which)&&"undefined"!==typeof tooltipHide&&null!==tooltipHide&&0<$(tooltipHide).length&&"inline-block"===$(tooltipHide).closest("span").find(".aemTooltip_container").css("display")&&(jQuery(this).attr("aria-expanded",
"false"),support_aem_tooltip.hideAllTips())})}catch(a){}},hideAllTips:function(){jQuery(".aemTooltip_container").hide()},hoverhidetimer:null,makePopupDefinition:function(b){var c=document.createElement("div");c.innerHTML=b;b="";for(i=0;i<c.childNodes.length;i++){var a=c.childNodes[i].nodeValue;b=null!=a?b+a:b+c.childNodes[i].outerHTML}support_aem_tooltip.cur_el.append('<div class="aemTooltip_container"><div class="aemTooltip_ttMsg" style="display: none;">'+b+'</div><div class="aemTooltip_ttPointer" style="display: none;"> </div><div class="aemTooltip_ttPointerRight" style="display: none;"> </div>');
support_aem_tooltip.showPopupDefinition()},popDirection:function(){var b=jQuery(window).width();0<support_aem_tooltip.cur_el.closest(".oneDRd_fragment").length&&0<support_aem_tooltip.cur_el.closest(".Col").length&&support_aem_tooltip.cur_el.closest(".oneDRd_fragment").position().left+100<support_aem_tooltip.cur_el.closest(".Col").position().left&&(b=support_aem_tooltip.cur_el.closest(".Col").width());var c=support_aem_tooltip.cur_el.width()+266;360<support_aem_tooltip.cur_el.attr("tooltip").length&&
(c=support_aem_tooltip.cur_el.width()+326);return support_aem_tooltip.cur_el.position().left+c>b?"left":"right"},showPopupDefinition:function(){clearTimeout(support_aem_tooltip.hoverhidetimer);"right"==support_aem_tooltip.popDirection()?support_aem_tooltip.popToTheRight():support_aem_tooltip.popToTheLeft()},popToTheRight:function(){var b=support_aem_tooltip.cur_el.position(),c=b.left;b=b.top;var a=jQuery(support_aem_tooltip.cur_el).closest("table");if(0<a.length){var d=jQuery(support_aem_tooltip.cur_el).closest("td");
0<d.length?d.position().top<a.position().top&&(c+=d.position().left,b+=d.position().top,c+=a.position().left,b+=a.position().top):(d=jQuery(support_aem_tooltip.cur_el).closest("th"),0<d.length&&d.position().top<a.position().top&&(c+=d.position().left,b+=d.position().top,c+=a.position().left,b+=a.position().top))}a=support_aem_tooltip.cur_el.width();d=c-5+a+"px";var e=b-3+"px";c=c+10+a+"px";b=b-31+"px";support_aem_tooltip.cur_el.find(".aemTooltip_ttPointer ").css({left:d,top:e});support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").css({left:c,
top:b});support_aem_tooltip.cur_el.find(".aemTooltip_ttShadow").css({left:c,top:b});360<support_aem_tooltip.cur_el.attr("tooltip").length&&support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").css("width","300px");support_aem_tooltip.cur_el.find(".aemTooltip_ttPointerRight").hide();support_aem_tooltip.cur_el.find(".aemTooltip_ttPointer ").show();support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").show();support_aem_tooltip.cur_el.find(".aemTooltip_container").show()},popToTheLeft:function(){var b=
support_aem_tooltip.cur_el.position(),c=b.left,a=b.top,d=jQuery(support_aem_tooltip.cur_el).closest("table");if(0<d.length){var e=jQuery(support_aem_tooltip.cur_el).closest("td");0<e.length?e.position().top<d.position().top&&(c+=e.position().left,a+=e.position().top,c+=d.position().left,a+=d.position().top):(e=jQuery(support_aem_tooltip.cur_el).closest("th"),0<e.length&&e.position().top<d.position().top&&(c+=e.position().left,a+=e.position().top,c+=d.position().left,a+=d.position().top))}support_aem_tooltip.cur_el.width();
d=b.left-12+"px";b=b.top-3+"px";c=c-302+"px";a=a-31+"px";360<support_aem_tooltip.cur_el.attr("tooltip").length&&(c=c-162+"px");support_aem_tooltip.cur_el.find(".aemTooltip_ttPointerRight").css({left:d,top:b});support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").css({left:c,top:a});support_aem_tooltip.cur_el.find(".aemTooltip_ttShadow").css({left:c,top:a});360<support_aem_tooltip.cur_el.attr("tooltip").length&&support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").css("width","300px");support_aem_tooltip.cur_el.find(".aemTooltip_ttPointer ").hide();
support_aem_tooltip.cur_el.find(".aemTooltip_ttPointerRight").show();support_aem_tooltip.cur_el.find(".aemTooltip_ttMsg").show();support_aem_tooltip.cur_el.find(".aemTooltip_container").show()}};
$(document).ready(function(){$(".aemTooltip").attr("aria-expanded","false").siblings(".aemTooltip_container").hide();$(".aemTooltip").on("click",function(b){if("Enter"===b.key||""===b.key){b.preventDefault();var c="true"===$(this).attr("aria-expanded");b=$(this).siblings(".aemTooltip_container");$(".aemTooltip").attr("aria-expanded","false").siblings(".aemTooltip_container").hide();c?($(this).attr("aria-expanded","false"),b.hide()):(c=$(this).closest("span").attr("tooltip"),$(this).attr("aria-expanded",
"true"),b.html(c).show())}});setTimeout(function(){$("#s7_videoview_socialShare_socCtnr, #s7_videoview_videoPlayer").removeAttr("aria-live")},4E3);$(".aemTooltip").on("focusout",function(){let b=$(this).siblings(".aemTooltip_container");$(this).attr("aria-expanded","false");b.hide()});$(".aemTooltip").on("focus",function(){$(".aemTooltip").attr("aria-expanded","false").siblings(".aemTooltip_container").hide()})});

jQuery(document).ready(function () {
  var links = jQuery('#KBArticle-1d a[href^="#"]');
  jQuery("#task574_image_1").attr("alt", "");
  jQuery("#task639_image_1").attr("alt", "");
  links.each(function (i, link) {
    var target = $(link).attr('href');
    jQuery(link).click(function (e) {
      e.preventDefault();
      gotoFaq(target);
    })
  })
  var topLink = jQuery('#KBArticle-1d a[href^="#top"]')
  topLink.each(function (i, link) {
    var topPage = jQuery(link).attr('href');
    jQuery(link).click(function (e) {
      e.preventDefault();
      gotoFaq(topPage);
    })
  })

  $(document).on('click', '.kb-pod-link, .kb-pod-cta', function (e) {
    const intentId = $(this).attr('data-intentid');
    const intentName = $(this).attr('data-intentname');
    if (intentId) {
      //use contactUsTileIntent Route
      sessionStorage.setItem("contactusTileIntentId", intentId);
      sessionStorage.setItem("contactusTileIntentName", intentName);
    }
  });

  $(window).on('scroll', function (e) {
    if ($("#KBArticle-1d").length > 0) {
      $("#sidebar-main").css("top", $('#KBArticle-1d').offset().top + "px").css("position", "absolute");
      runWithTimeout(setSidebarTopPos, 500, 3);
      /*
      //deal with knowledge-base-209087
      if ($('#kbArticleNew').length > 0 && $('#kbArticleNew').height() < 150) {
        $("#sidebar-main").css("top", $('#KBArticle-1d').offset().top + "px").css("position", "absolute");
      } else {
        $("#sidebar-main").css("top", $('#KBArticle-1d').offset().top + "px").css("position", "");
      }

      if ($('.hide-rating-position').length > 0) {
        if ($('.hide-rating-position').height() + $('.hide-rating-position').offset().top - 45 > $('.footer').offset().top) {
          $(".hide-rating-position").addClass("sidebar-bottom-pos");
        } else if ($(window).scrollTop() < 50 || ($('#kbArticleNew').height() > ($(window).scrollTop() - $('#tl-BodyContentSection').offset().top + 400))) {
          $(".hide-rating-position").removeClass("sidebar-bottom-pos");
          if ($(window).scrollTop() < 50) {
            $(".hide-rating-position").css("top", $('#KBArticle-1d').offset().top + "px");
          }
        }
      }
      */
    }
  });

  setTimeout(()=>{$('[class^="TitleLockupContainer-"]').css('padding-bottom','48px');}, 1000);
  adjustPodForAlert();

  $(window).resize(function () {
    debouncedAdjustPod();
  });

  let timeoutId;

  $(window).on('hashchange load', function () {

    timeoutId = setTimeout(function () {

      $("#sidebar .active").removeClass("active");
      let anchorvalue = window.location.hash.substring(1);
      anchrotag();
      $("#acc" + anchorvalue).addClass('active');
    }, 500);

  });
});

function runWithTimeout(func, delay, times) {
  let count = 0;

  function execute() {
    func();
    count++;

    if (count < times) {
      setTimeout(execute, delay);
    }
  }

  execute();
}

function setSidebarTopPos() {
  $('#sidebar-main').css("top", $('#KBArticle-1d').offset().top + "px");
}

// Debounce function for resize and scroll
function debounce(func, wait, immediate) {
  let timeout;
  return function () {
    const context = this, args = arguments;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

const debouncedAdjustPod = debounce(function () {
  adjustPodForAlert();
}, 250);


function adjustPodForAlert() {
  if ($("#KBArticle-1d").length > 0) {
    let sideWidth = $('.gnav20-gnav-new-design').width() - 40 - $('#KBArticle-1d').width() - 20;
    $('#sidebar-main').css("top", $('#KBArticle-1d').offset().top + "px")
      .css("right", ($(document).width() - $('.gnav20-gnav-new-design').width() - 40) / 2 + "px")
      .css("width", sideWidth + "px").css("max-width", sideWidth + "px");

    $('#sidebar-main .kb-tsa-pod-vds').css("width", sideWidth + "px").css("max-width", sideWidth + "px");

    if ($('#kbArticleNew').length > 0 && $('#kbArticleNew').height() < 150) {
      $("#sidebar-main").css("top", $('#KBArticle-1d').offset().top + "px").css("position", "absolute");
    }

    runWithTimeout(setSidebarTopPos, 500, 3);
  }

  if ($('#site-alert').length == 1 && $('#site-alert').height() > 10) {
    let alertWidth = $('#site-alert .alert-banner>div').width();

    if (($(document).width() - alertWidth > 50) && alertWidth > 100 && ($('.kb-tsa-pod').length > 0 || $('.kb-tsa-pod-vds').length > 0)) {
      let shift = ($(document).width() - alertWidth) / 2 - 20;
      $('.bs-docs-sidebar').css('right', shift + 'px');
    }

    let alertBottom = $('#site-alert').height() + $('#site-alert').offset().top;

    if ($('#sidebar-main').length > 0 && alertBottom > $('#sidebar-main').offset().top) {
      $('#sidebar-main').css("top", alertBottom + "px");
    }
  }


  if ($(".seo-faq-container").length > 0 && $('.side_pod').length > 0 && window.innerWidth > 1030) {
    $('#sidebar-main').css("padding-right", "0px").css("top", $('.oneDRd_banner').offset().top + "px").css("right", $(".seo-faq-container h1").position().left + "px");

    if ($('#site-alert').length == 1 && $('#site-alert').height() > 10) {
      let alertWidth = $('#site-alert .alert-banner>div').width();

      if (($(document).width() - alertWidth > 50) && alertWidth > 100) {
        let shift = ($(document).width() - alertWidth) / 2;
        $('#sidebar-main').css('right', shift + 'px');
      }
    } else {
      let shift = ($(document).width() - $('.gnav20-gnav-new-design').width() + 40) / 2;
      $('#sidebar-main').css('right', shift + 'px');
    }
  }
}
function gotoFaq(item) {
  window.location.hash = '';
  window.location.hash = item;
  if (item.length) {
    jQuery("html,body").animate(
      {
        scrollTop: jQuery(item).offset().top - 200
      },
      500,
      'linear'
    );
  }
}
function anchrotag() {
  console.log("anchortag");
  var urlPath = sanitizeHTML(window.location.hash);
  if (urlPath.length > 0) {
    var anchorName = sanitizeHTML("[id='" + urlPath.substr(1) + "']");
    anchorName = anchorName.replace('%20', ' ');
    console.log("anchorName:" + anchorName + " " + $(anchorName).length);
    if ($(anchorName).length > 0) {
      console.log("jump to anchorName:" + anchorName);
      // isScrolling = true

      $('html, body').animate({
        //  alert("animate");
        scrollTop: $(anchorName).offset().top - 190
      }, 0);


    }

  }
}
$(document).ready(function(){
    $("section[data-outputclass='accordion']").each(function(){
        if(!$(this).hasClass("accordion")){
            $(this).addClass("accordion");
        }
    });
    $(".topic.accordion .title").each(function(){
        var ariaLabel = $(this).children().html();
        $(this).attr("tabindex", "0");
        $(this).attr("role", "button");
        $(this).attr("aria-expanded", "false");
        $(this).attr("aria-label", ariaLabel);
    });
    $(".topic.accordion").each(function(){
        $(this).children(".title").siblings().hide();
    });
	//nested accordion
	$(document).off('click', '.topic.accordion > .title').on('click', '.topic.accordion > .title', function(){
        var ariaExpanded = $(this).attr("aria-expanded");
        if(ariaExpanded == "false") {
            $(this).attr("aria-expanded", "true");
        } else {
            $(this).attr("aria-expanded", "false");
        }
        console.log(ariaExpanded);
        $(this).closest(".accordion").toggleClass("active");
        $(this).siblings().toggle();
        updateExpandCollapseLink();
    });
	
    $(document).on("keypress", ".topic.accordion .title", function(e){
        if(e.which == 13 || e.which == 32){
			e.preventDefault();
            var currentElement = $(this);
            var ariaExpanded = currentElement.attr("aria-expanded");
            if(ariaExpanded == "false") {
                currentElement.attr("aria-expanded", "true");
            } else {
                currentElement.attr("aria-expanded", "false");
            }
            currentElement.closest(".accordion").toggleClass("active");
            currentElement.siblings().toggle();
        }
    });
	
	//expandAll
	function updateExpandCollapseLink() {
                var totalAccordions = $(".topic.accordion").length;
                var expandedAccordions = $(".topic.accordion.active").length;
                var $link = $("#toggleAnchor");
                if (expandedAccordions === totalAccordions && totalAccordions > 0) {
                  $link.text("Collapse All");
                } else {
                  $link.text("Expand All");
                }
              }
});
if(window.self !== window.top) {
        $('article').addClass('kb-iframe-page');
        if($('div.topic .topic').length > 0){
        	$('div.topic .topic').addClass('kb-iframe-page');
        }
      }
	   $('.accordion').find('colgroup').css('display','table-row');
       $('.accordion').find('tbody').css('display','table-row-group');
       $('.accordion').find('th').css('text-align','center');
//Handle step with multiple menucascade tags 
$(document).ready(function () {
    var urlPath = window.location.pathname;
    if (urlPath.includes(".mainContent.pra")) {
        $("div.topic .li .menucascade").each(function () {
            var uiElement = $(this).find('.uicontrol');
            appendCarets(uiElement);
        });

        //For steps having uicontrol tag without menucascade
        $("div.topic .li .cmd").each(function () {
            var menucascade = $(this).find('.menucascade');
            if (menucascade.length == 0) {
                var uiElement = $(this).find('.uicontrol');
                appendCarets(uiElement);
            }
        });
    }

    initiateCarousel(false);

    $(".tab-label.i-am-accordion").click(function (event) {
        if ($(event.target).closest(".tab").find(".toggleAnchor").length == 0) {
            const toggleAnchor = $(`<a href="javascript:void(0)" class="toggleAnchor">Expand All</a>`);
            $(event.target).siblings().find('.topic.task.accordion:first').parent().before(toggleAnchor);
            $(event.target).siblings().find('.topic.task.accordion:first').parent().addClass("expandKB");
        }
    });

    var links = $(".parentbox .childrenbox").find(".link");
    links.each(function (index, element) {
        $(element).addClass("individualboxes");
        $(element).append('<div class="arrowmark"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><script xmlns=""/><path d="M8.92533 17.3334L8.16884 16.5835L15.2827 9.53011H0.666687V8.46993H15.2827L8.16884 1.41655L8.92533 0.666687L17.3334 9.00002L8.92533 17.3334Z" fill="black"/></svg></div>');
    });

    if ($(".knowledgebase-container .topic .accordion").not(".tab-label.i-am-accordion").length > 0) {
        const toggleAnchor = $(`<a href="javascript:void(0)" class="toggleAnchor" id="toggleAnchor">Expand All</a>`);
        $('.topic.task.accordion:first').parent().before(toggleAnchor);
        $('.topic.task.accordion:first').parent().addClass("expandKB");

        //add this accordion  expandall
        function isAllAccordionExpanded() {
            var totalAccordions = $(".topic.accordion").length;
            var expandedAccordions = $(".topic.accordion.active").length;
            var $link = $(".toggleAnchor");
            if (expandedAccordions === totalAccordions && totalAccordions > 0) {
                return true;
            } else {
                return false;
            }
        }

        $('.toggleAnchor').click(function (event) {
            if (isAllAccordionExpanded()) {// this line updated as part of expand all from expanded remove (isExpanded)
                $(".topic .accordion").each(function () {
                    $(this).find(".title").each(function () {
                        $(this).attr("aria-expanded", "false");
                        $(this).closest(".accordion").removeClass("active");
                        $(this).siblings().css("display", "none");
                    });
                });
                $(this).text("Expand All");
            } else {
                $(".topic .accordion").each(function () {
                    $(this).find(".title").each(function () {
                        $(this).attr("aria-expanded", "true");
                        $(this).closest(".accordion").addClass("active");
                        $(this).siblings().css("display", "inline");
                    })
                });
                $(this).text("Collapse All");
            }
        });

    } else {
        $('.toggleAnchor').css("display", "none");
    }

    $("#kbArticleNew h1").remove();
    if ($("#KBArticle-1d h1").attr("data-outputclass") == 'phtitle bold-title') {
        $("#KBArticle-1d h1").addClass("phTitleData");
    }
    if ($("#KBArticle-1d h1").attr("data-outputclass") == 'phtitle') {
        $("#KBArticle-1d h1").addClass("phTitleData");
    }
    if (($("#KBArticle-1d h1").attr("data-outputclass") != 'phtitle') && ($("#KBArticle-1d h1").attr("data-outputclass") != 'phtitle bold-title')) {
        if ($("#kbArticleNew h1").find(".ph").length > 0) {
            $("#KBArticle-1d h1").addClass("phTitle");
        }
    }

    $("div.topic .li").each(function () {
        if ($(this).hasClass("li step")) {
            $(this).addClass("stepexpand");
        }
        var phElement = $(this).find('.ph');
        if (phElement && $(phElement).hasClass("ph") && !($(phElement).hasClass("uicontrol"))) {
            $(phElement).addClass("menucascade");
        }
    });

    $('li.stepexpand').addClass('separator');
    if ($('.steps').closest('.Troubleshooting-Steps').length === 0) {
        $("article").addClass("article-width");
    }

    // Remove display none for the tabe header inside accordion
    $('.accordion').find('thead').each(function () {
        $(this).attr("style", "");
    });

    //Add title attribute using alt text
    $("div.topic img").each(function () {
        var altText = $(this).attr("alt");
        if (altText.length > 0) $(this).attr("title", altText);
    });
    var currentUrl = window.location.href;
    if (currentUrl.indexOf("external") === -1) {
        $('div[data-outputclass="line-note"]').removeClass('lineNoteArticle');
        $('.xref').removeClass('anchorStyle');
    } else {
        $('div[data-outputclass="line-note"]').addClass('lineNoteArticle');
        $('.xref').addClass('anchorStyle');
    }

    // Fix for 2268        
    $('li [data-outputclass="line-note"]').each(function () {
        var _lineNote = $(this).closest('li').find('[data-outputclass="line-note"]'),
            _lineNoteCount = _lineNote.length;
        if (_lineNoteCount == 1) {
            $(this).addClass('only-one-line-note');
        }
    })


});

function appendCarets(uiElement) {
    if (uiElement.length >= 2) {
        uiElement.each(function (index, element) {
            if (index != 0) {
                var caret = "\u00a0\u203a\u00a0";
                var textValue = $(element).text();
                $(element).text(caret + textValue);
            }
        });
    }
}

$(document).ready(function () {
    $('.nextButton').on('keydown', function (event) {
        if (event.key === 'Enter' || event.keyCode === 13) {
            event.preventDefault();
            $(this).click();
        }
    });
});

//clientbis-dita-authoring.js
//Optimized Event based code with reduced timeout
if (document.getElementById('xml-editor-app')) {
    tcx.eventHandler.subscribe({
        key: tcx.eventHandler.KEYS.APP_ACTIVE_DOCUMENT_CHANGED,
        next: function () {
            findActiveTabID();
        },
    });
}
function findActiveTabID() {
    var currentTab = $(".middle-wrapper").find(".topic-tab.is-selected");
    if (currentTab.length > 0) //to avoid null pointer
    {
        var tabId = $(currentTab.get(0)).attr("data-id");
        var tabTitle = $(currentTab.get(0)).attr("title");
        var isMap = false;
        if (tabTitle.includes(".ditamap")) isMap = true;
        toggleTagsView(tabId, isMap);
    }
}
setTimeout(function () { //wait to load  iframe
    //var designContent = $(".middle-wrapper").find("div[data-tab-id=" + tabId + "]").find(".design-content");
    if (typeof topicIframe !== 'undefined' && topicIframe.length > 0) { //avoid null pointer
        const taskEle = document.querySelector(topicIframe.selector).contentWindow.document.querySelector("span[data-tcx-tagname=" + spanToFind + "]");
        var psuedoPresent = false
        //Find if first task tag is present or not by checking presence of ':after' class
        if (taskEle != null) psuedoPresent = window.getComputedStyle(taskEle, ":after").getPropertyValue('content') !== 'none';
        //Toggle trigger for two scenarios-
        //1. If both read-only label and task tag are present - Locked Topic - Disable tags
        //2. If both read-only label and task tag are not present - Unlocked Topic - Enable tags 
        if ((psuedoPresent && readOnlyLabel.length == 1) || (!psuedoPresent && readOnlyLabel.length == 0)) {
            $("button[value='Toggle Tags view']").click();
        }
    }
    else findActiveTabID(); //checks if iframe has loaded in the next second (needed for first page load)
}, 1500);



//Handle step with multiple menucascade tags 
$(document).ready(function () {
    var urlPath = window.location.pathname;
    if (urlPath.includes(".mainContent.pra")) {
        $("div.topic .li .menucascade").each(function () {
            var uiElement = $(this).find('.uicontrol');
            appendCarets(uiElement);
        });

        //For steps having uicontrol tag without menucascade
        $("div.topic .li .cmd").each(function () {
            var menucascade = $(this).find('.menucascade');
            if (menucascade.length == 0) {
                var uiElement = $(this).find('.uicontrol');
                appendCarets(uiElement);
            }
        });
    }
});

$('div[data-outputclass="line-note"]').addClass('lineNoteArticle');
$('.xref').addClass('anchorStyle');

//JS for carousel-vertical
var totalIndex = [];
var totalStepsCount = 0;

function initiateCarousel(mobileView) {
    //increase steps count and form classname to add it to the elements
    totalStepsCount++;
    var stepName = "steps" + totalStepsCount;

    $('div.carousel-textArray').last().addClass(stepName);
    var stepsElement = $('div.carousel-textArray.' + stepName);
    stepsElement.find('.mySlides').addClass(stepName);
    stepsElement.find('.textArrayPara').addClass(stepName);
    stepsElement.find('.nextButton').addClass(stepName);

    //Surround the text elements with ol and li tag to get numbers and black border UI
    var textElements = stepsElement.find('.textArrayPara.' + stepName);
    var textOl = $("<ol class='textArrayOl'></ol>");
    $(textOl).attr('id', stepName);
    $(textElements).wrapAll(textOl);

    $(textElements).each(function (index, element) {
        var stepNo = "step" + (index + 1);
        var textLi = $('<li class="textArrayLi"></li>');
        var finalId = stepName + "_" + stepNo;
        $(textLi).attr('id', finalId);
        $(element).wrap(textLi);
    });

    //Show slideshow-container on top of textArrayParent since mobile view CSS flex is column
    if (mobileView) {
        // commenting out below code to keep mobile view same as desktop
        //stepsElement.find('.slideshow-container').prependTo(stepsElement);
    }

    //insert first time position to array and show first slide
    totalIndex.push(1);
    showSlides(stepName, 0);
}

// Next/previous controls
function plusSlides(n, classNames, element) {
    //retrieve position for scrolling
    var anchorElement = $(element).parent().parent().next();
    var pos = anchorElement.offset();
    //find which step using classname. Ex: steps1 will be first steps element
    var stepId = classNames.split(" ")[1];
    var stepIndex = stepId.substring(stepId.length - 1);
    //update position in global array  
    totalIndex[stepIndex - 1] += n;
    var slideIndex = totalIndex[stepIndex - 1];
    showSlides(stepId, pos);
}

function showSlides(stepId, offset) {

    //retrieve index from className (stepId). Ex: steps1 className will be index 0
    var stepIndex = stepId.substring(stepId.length - 1);
    var slideIndex = totalIndex[stepIndex - 1];

    let i;
    var slides = $('.carousel-textArray.' + stepId).find(".mySlides." + stepId);
    var paras = $('.carousel-textArray.' + stepId).find(".textArrayPara." + stepId);
    var nextButtons = $('.carousel-textArray.' + stepId).find(".nextButton." + stepId);
    let url = window.location.href;
    //console.log(slides);
    if (paras.length > 0) {
        //make all text as normal and hide all images and button 
        for (i = 0; i < paras.length; i++) {
            slides.eq(i).css({ 'display': 'none' });
            paras.eq(i).parent().removeClass("selected");
            nextButtons.eq(i).css({ 'display': 'none' })
        }

        //highlight selected step and show corresponding button and image
        if (slideIndex - 1 != paras.length - 1) nextButtons.eq(slideIndex - 1).css({ 'display': 'block' });
        var liParent = paras.eq(slideIndex - 1).parent();
        liParent.addClass("selected");
        slides.eq(slideIndex - 1).css({ 'display': 'block' });

        $('div[data-outputclass="line-note"]').show();
        $('div[data-outputclass="line-note"]').each(function () {
            if ($(this).closest('li').hasClass('textArrayLi')) {
                $(this).hide();
            } if ($(this).closest('li').hasClass('textArrayLi selected')) {
                $(this).show();
            }

        });
        //find how much needs to be scrolled
        var firstTextOffset = paras.eq(0).offset().top;
        if (offset != null) {
            var diff = offset.top - firstTextOffset;
            var value = diff - 200; //Subtrating 200 so that the selected step would appear a little above the middle
            scrollNext(value, stepId);
        }
        else if (slideIndex - 1 == 0 && offset == null) scrollNext(0, stepId);
    }
    $('div.textArrayPara.' + stepId).find("[data-outputclass='carousel-image']").hide();
}

function jumpToStep(n, element) {
    //retrieve position for scrolling
    var anchorElement = $(element);
    var pos = anchorElement.offset();
    //find which step using classname. Ex: steps1 will be first steps element
    var classNames = $(element).parent().attr("class");
    var stepId = classNames.split(" ")[1];
    var stepIndex = stepId.substring(stepId.length - 1);
    //update position in global array  
    totalIndex[stepIndex - 1] = n;
    var slideIndex = totalIndex[stepIndex - 1];
    showSlides(stepId, pos);
}

function scrollNext(value, stepId) {
    var element = $('.carousel-textArray.' + stepId).find(".textArrayParent");
    $(element).animate({
        scrollTop: value
    }, 500);
}


$(".seo-faq-container .knowledgebase-container #kbArticleNew .li.step.stepexpand.separator .ph.cmd").parent().removeAttr("style");

$('[data-outputclass="line-note"]').each(function () {
    // Check the number of line-notes within the immediate parent div
    var $parentDiv = $(this).parent();
    var lineNotesInParentDiv = $parentDiv.find('> [data-outputclass="line-note"]');

    if (lineNotesInParentDiv.length === 1) {
        $(this).addClass('only-one-line-note');
    }
});
(function ($, $document) {
    "use strict";
    $( document ).ready(function() {
    	function isAllowedPathPattern(input){
    		
    		var regexp = /^[ A-Za-z0-9_/=#:.%&-]*$/;	
    		if (regexp.test(input)){
    	          return true;}
    	    else{
    	          return false;
    	     }
    	}

		function sanitizeHTML(inputValue){
			var temp = document.createElement('div');
			temp.textContent = inputValue;
			return temp.innerHTML;
		}

       jQuery('#transcript_print_new').click(function () {
        $('html').addClass('transcriptPrint');
			try {
                if ($.browser.mozilla) {
				window.print();
				}else if(!document.execCommand('print', false, null)) {
				window.print();
				}
			}
			catch(e) {
			  window.print();
			}  
		setTimeout(function() {
            $('html').removeClass('transcriptPrint');
        });
    });
		
		jQuery(".faq_groups .main-section").each(function(index, value){
			if($(this).find(".oneDRd_video_accordion_trigger").length>0){
				$(this).find(".faq-heading-container a").show();
			}
		})

        $('.oneDRd_video_accordion_trigger').on('keypress click', function (evt) {
            evt.preventDefault();
            var btn = $(evt.currentTarget);
            var seoUrl = btn.attr("seo-url");
            var contentToShow = btn.next();
            if (contentToShow.is(":visible")) {
                contentToShow.hide();
                contentToShow.attr('aria-hidden', 'true');
                btn.attr('aria-expanded', 'false');
            } else {
                contentToShow.show();
                contentToShow.attr('aria-hidden', 'false');
				btn.attr('aria-expanded', 'true');
                $(window).trigger('resize');
			}		
			var parentGroup = btn.closest('.faq_groups .main-section');
			if(parentGroup.length>0){
				var faqItemHolders = parentGroup.find(".faq-item-text");
				var faqItemHoldersOpened=parentGroup.find(".faq-item-text[aria-hidden='false']");
				var faqItemHoldersClosed=parentGroup.find(".faq-item-text[aria-hidden='true']");
				var expandAllBtn = parentGroup.find(".faq-heading-container a");
				console.log("faqItemHolders size:"+faqItemHolders.size()+" faqItemHoldersClosed size:"+faqItemHoldersClosed.size()+" faqItemHoldersOpened size:"+faqItemHoldersOpened.size());
				var ariadata =  expandAllBtn.attr('aria-label');
				if(faqItemHoldersClosed.size()>0){
					expandAllBtn.html("Expand All").attr('aria-expanded', 'false');
				    var finalaria= ariadata.replace("Collapse all", "Expand all");
					expandAllBtn.attr('aria-label', finalaria);
				}else if(faqItemHoldersOpened.size()==faqItemHolders.size()){
					expandAllBtn.html("Collapse All").attr('aria-expanded', 'true');
				    var finalaria= ariadata.replace("Expand all", "Collapse all");
					expandAllBtn.attr('aria-label', finalaria);
                }else if(faqItemHoldersClosed.size()==faqItemHolders.size())
					expandAllBtn.html("Expand All");
			}
		});
		 
		$('.oneDRd_video_accordion_trigger').keydown(function(event) { 

              if (event.keyCode == 13 || event.keyCode == 32 || event.keyCode == 9
                  || event.keyCode == 16) {

                    return true; 
              }  else{
                    return false; 
              }

          });

		jQuery('.faq_groups .main-section .faq-heading-container a').on('keypress click', function(evt){
		//jQuery('.faq_groups .main-section .faq-heading-container a').keyup(function(evt){ //IE Fix//
			//evt.preventDefault();
			var btn =jQuery(evt.currentTarget);
			console.log("expand all button html:"+btn.html());
			var parentGroup = btn.closest('.faq_groups .main-section');
			var expandBtn = parentGroup.find(".oneDRd_video_accordion_trigger");
			var contentToShow = parentGroup.find(".faq-item-text");

			if(btn.html()==='Collapse All'){
				btn.html("Expand All");
				contentToShow.hide();
				console.log('inside collapse all');
				var ariadata =  btn.attr('aria-label');
                var finalaria= ariadata.replace("Collapse all", "Expand all");
				btn.attr('aria-label', finalaria);
				// btn.attr('aria-label', ' Prepaid plans and service FAQs collapsed');
                btn.attr('aria-expanded','false');
				contentToShow.attr('aria-hidden', 'true');
				expandBtn.attr('aria-expanded','false');
			}else{
				btn.html("Collapse All");
				contentToShow.show();
				var ariadata =  btn.attr('aria-label');
                var finalaria= ariadata.replace("Expand all", "Collapse all");
				btn.attr('aria-label', finalaria);
			   // btn.attr('aria-label', 'Prepaid plans and service FAQs expanded');
	            console.log('inside expand all');
                btn.attr('aria-expanded','true');
				contentToShow.attr('aria-hidden', 'false');
				expandBtn.attr('aria-expanded','true');
				$('.faq_groups .s7video a.oneDRd_video_accordion_trigger').attr('aria-expanded','false');
			}
		});
		
        var urlPath = window.location.hash;
        if(isAllowedPathPattern(urlPath)){
	        var hash = sanitizeHTML(urlPath).substring(1);
	        if (hash != '' && $('.oneDRd_video_accordion_trigger').length > 0) {
                if(hash.indexOf('transcript') >= 0){
                    window.setTimeout(function () {
                        $('.oneDRd_video_accordion_trigger').click();
                        $('html, body').animate({ scrollTop: $('.oneDRd_video_accordion_trigger').offset().top - 175 }, 'fast');
                        var contentToShow = $('.oneDRd_video_accordion_content');
                        contentToShow.show();
                        contentToShow.attr('aria-hidden', 'false');
                        $('.oneDRd_video_accordion_trigger').attr('aria-expanded', 'true');
                    }, 1000);
                }else{
                    window.setTimeout(function () {
						var offset = $('#vz-gh20').length>0?160:0;
						var hashNameSearch = sanitizeHTML("a[name=" + hash + "]");
						var anchorLink = $(hashNameSearch);
						if(!anchorLink.is(":visible")){
							if(anchorLink.closest('.faq_group_item').length>0){
								anchorLink.closest('.faq_group_item').find(".oneDRd_video_accordion_trigger").click();
							}else if(anchorLink.closest('.accordion-step-container').length>0){
								anchorLink.closest('.accordion-step-container').find(".oneDRd_video_accordion_trigger").click();
							}
						}
                      
                        $('html, body').animate({
                            scrollTop: anchorLink.offset().top - offset
                        }, 0);
                    }, 1000);
                }
	        }
        }
    });
})($, $(document));

