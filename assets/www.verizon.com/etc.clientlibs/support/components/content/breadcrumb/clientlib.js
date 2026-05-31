jQuery(document).ready(function ($) {

    $("a").click(function(){
        localStorage.setItem("checkAnchorClick", true);
    });

    function getMeta(metaName) {
        const metas = document.getElementsByTagName('meta');

        for (let i = 0; i < metas.length; i++) {
            if (metas[i].getAttribute('name') === metaName) {
                return metas[i].getAttribute('content');
            }
        }
        return '';
    }
    var pageType = getMeta('template');
    var catagory = '';
    var catagoryurl = '';
    console.log("page type ******************:", pageType);
    $.each($(".categorySelection option:selected"), function () {
       console.log("Catagory link and name: ", $(this).attr('value'), $(this).text());
        catagory = $(this).text();
        catagoryurl = $(this).attr('value');
    });
    var title = document.title.split("|")[0]

    if (pageType == "device" && pageType != null && pageType != "") {

        resetValues();
        localStorage.setItem("brand", document.getElementById("brand") ?document.getElementById("brand").innerHTML:'');
        localStorage.setItem("brandlink", $("#brandlink").attr("href"));
        localStorage.setItem("device", document.getElementById("device") ?document.getElementById("device").innerHTML:'');
        localStorage.setItem("devicelink", $("#devicelink").attr("href"));
        localStorage.setItem("category", catagory);
        localStorage.setItem("categorylink", catagoryurl);

    } else if (pageType == "hub" && pageType != null && pageType != "") {
        resetValues();

        localStorage.setItem("superhub", (document.getElementById("superhub")) ? document.getElementById("superhub").innerHTML : '');
        localStorage.setItem("superhublink", (document.getElementById("superhub")) ? $("#superhublink").attr("href") : '');

        localStorage.setItem("hub",(document.getElementById("hub")) ? document.getElementById("hub").innerHTML:'');
        localStorage.setItem("hublink", $("#hublink").attr("href"));
        localStorage.setItem("category", catagory);
        localStorage.setItem("categorylink", catagoryurl);


    } else {

    }

    function resetValues() {
        localStorage.removeItem("superhub");
        localStorage.removeItem("hub");
        localStorage.removeItem("superhublink");
        localStorage.removeItem("hublink");
        localStorage.removeItem("brand");
        localStorage.removeItem("device");
        localStorage.removeItem("brandlink");
        localStorage.removeItem("devicelink");
        localStorage.removeItem("category");
        localStorage.removeItem("categorylink");
        localStorage.removeItem("checkAnchorClick");
    }

    // Dynamic breadcrumb........
    if (pageType != "hub" && pageType != "superhub" && pageType != "brand" && pageType != "device" && pageType!='trouble-shooting' &&  localStorage.getItem("checkAnchorClick")) {
       console.log('page type inside dynamic breadcrumb: ', pageType);
        if (localStorage.getItem("device") || localStorage.getItem("brand")) {
            var brand = sanitizeHTML(localStorage.getItem("brand"));
            var brandLink = sanitizeHTML(localStorage.getItem("brandlink"));
            var brandHtml = '';
            if (brand != '' && brand != null && brandLink != '' && brandLink != null) {
                var brandHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement" ><span class="right-arrow"></span><a id="brandLink" href="' +
                    brandLink +
                    '" title="'+brand+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="brand" itemprop="name">' +
                    brand + '</span></a></span></span>'
            }
            var device = sanitizeHTML(localStorage.getItem("device"));
            var deviceLink = sanitizeHTML(localStorage.getItem("devicelink"));
            var deviceHtml = '';
            if (device != '' && device != null && deviceLink != '' && deviceLink != null ) {
                var deviceHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement"><span class="right-arrow"></span><a id="devicelink" href="' +
                    deviceLink +
                    '" title="'+device+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="device" itemprop="name">' +
                    device + '</span></a></span></span>'
            }
            var category = sanitizeHTML(localStorage.getItem("category"));
            var categoryLink = sanitizeHTML(localStorage.getItem("categorylink"));
            var categoryHtml = '';
            if (category != '' && category != null && categoryLink != '' && categoryLink != null) {
                var categoryHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement" ><span class="right-arrow"></span><a id="categorylink" href="' +
                    categoryLink +
                    '" title="'+category+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="category" itemprop="name">' +
                    category + '</span></a></span></span>';
            }
            replaceBreadcrumb(brandHtml, deviceHtml);

        } else if (localStorage.getItem("hub") || localStorage.getItem("superhub")) {
            console.log('inside hub: ');
            var superhub = sanitizeHTML(localStorage.getItem("superhub"));
            var superhubLink = sanitizeHTML(localStorage.getItem("superhublink"));
            var superhubHtml = '';
            if (superhub != '' && superhub != null && superhubLink != '' && superhubLink != null) {
                var superhubHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement" ><span class="right-arrow"></span><a id="superhubLink" href="' +
                    superhubLink +
                    '" title="'+superhub+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="superhub" itemprop="name">' +
                    superhub + '</span></a></span></span>'
            }
            var hub = sanitizeHTML(localStorage.getItem("hub"));
            var hubLink = sanitizeHTML(localStorage.getItem("hublink"));
            var hubHtml = '';
            if (hub != '' && hub != null && hubLink != '' && hubLink != null) {
                var hubHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement" ><span class="right-arrow"></span><a id="hublink" href="' +
                    hubLink +
                    '" title="'+hub+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="hub" itemprop="name">' +
                    hub + '</span></a></span></span>'
            }
            var category = sanitizeHTML(localStorage.getItem("category"));
            var categoryLink = sanitizeHTML(localStorage.getItem("categorylink"));
            var categoryHtml = '';
            if (category != '' && category != null && categoryLink != '' && categoryLink != null) {
                var categoryHtml =
                    ' <span class="breadcrumb-items cmp-breadcrumb__list" ><span class="cmp-breadcrumb__item " itemprop="itemListElement" ><span class="right-arrow"></span><a id="categorylink" href="' +
                    categoryLink +
                    '" title="'+category+'" class="cmp-breadcrumb__item-link" itemprop="item"><span id="category" itemprop="name">' +
                    category + '</span></a></span></span>';
            }

             replaceBreadcrumb(superhubHtml, hubHtml);
        }
    }
    function sanitizeHTML(inputValue){
        var temp = document.createElement('div');
        temp.textContent = inputValue;
        return temp.innerHTML;
    }
    function escapeBreadcrumbHTML(inputValue){
        var res='';
        if(inputValue !='' && inputValue != null && inputValue != 'null'){
			res = inputValue.replace("'", "");
			res = res.replace("<script>", "");
			res = res.replace("<SCRIPT>", "");
			res = res.replace("</script>", "");
			res = res.replace("</SCRIPT>", "");
			res = res.replace("script", "");
			res = res.replace("SCRIPT", "");

		}else{
            res='';
        }
		return res;
      }

    function replaceBreadcrumb(parentHtml, typeHtml) {
		var parentHtml_ = escapeBreadcrumbHTML(parentHtml);
        var typeHtml_ = escapeBreadcrumbHTML(typeHtml);
        $("#breadcrumbWrapperDiv").html(
            escapeBreadcrumbHTML('<span class="breadcrumb-items cmp-breadcrumb__list"><span class="cmp-breadcrumb__item" itemprop="itemListElement"><a id="supportlink" title="Support" href="/support/" class="cmp-breadcrumb__item-link" itemprop="item"><span id="support" itemprop="name">Support</span></a></span></span>') +
            parentHtml_ + typeHtml_ 
        );
        resetValues();
    }

    if(vzwDL.mvo.utils.isMVA()){
        $('.cmp-breadcrumb').hide();
        $('.socialMediaContainer').hide();
    }
   let currentPage =  window.location.pathname.replace(".html","/");  
   let lastBreadcrumbURL = $("#breadcrumbWrapperDiv li").last().find("a").attr("href");
   if(currentPage == lastBreadcrumbURL){
    $("#breadcrumbWrapperDiv li").last().find("a").attr("aria-current","true");
   }
});
