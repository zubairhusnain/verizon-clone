function makenbxcallBanner(tilestate, feed, pelement) {
    try {
        var fburi = "/digital/nsa/secure/gw/support/livetiles-feedback";
        var pegaElemBanner = JSON.parse(feed);
        if (pegaElemBanner.responseList && pegaElemBanner.responseList.length > 0 && pegaElemBanner.responseList[0]) {
            if (tilestate == "clicked") {
                pegaElemBanner.responseList[0].dispositionOptionId = 81;
            } else {
                console.log("NBX Called");
                pegaElemBanner.responseList[0].dispositionOptionId = 82;
            }

            $.ajax({
                type: 'POST',
                url: fburi,
                headers: {
                    'OsType': "web",
                    'clientId': "VZW-DOTCOM",
                    'channelId': "VZW-DOTCOM",
                    'Access-Control-Allow-Origin': "*",
                    'Accept': "application/json",
                    'Content-Type': "application/json",
                    'pageName': "Support-Billing",
                    'flowName': "Support-Billing"
                },
                data: JSON.stringify(pegaElemBanner),
                success: function (data) {
                    if (tilestate == "clicked") {
                        if (pelement != undefined && (pelement != "" || pelement != null)) {
                            pelement.addClass('feedback_sent');
                            console.log("pele1 banner success");
                        }
                    }
                    console.log("nbx banner success");
                },
                error: function (request, status, error) {
                    console.log(request.error);
                    console.log(request.status);
                    if (status == "error") {
                        console.log("nbx err", request.responseText);
                    }
                }
            });
        }
        //ends
    }
    catch (error) {
        console.log(error);
    }
}

jQuery(document).ready(function () {
    if ($('#faqBannerPersonalized').length > 0) {
    if (vzwDL.mvo.utils.isLoggedIn()) {
        let datum = $('#faqBannerPersonalized').attr("data-datum");
        if (datum && datum.trim() !== "") {
        try {
            datum = JSON.parse(datum);
            console.log("Success! pagecontext is:", datum.pagecontext);
            console.log("Category is:", datum.category);
        
        } catch (error) {
            console.log("JSON Parsing failed. The string received was:");
            console.log("Error details:");
        }
        $.ajax({
            type: "POST",
            url: '/digital/nsa/secure/gw/support/getAemLivetiles',
            cache: false,
            headers: {
                'OsType': "web",
                'clientId': "VZW-DOTCOM",
                'channelId': "VZW-DOTCOM",
                'Access-Control-Allow-Origin': "*",
                'Accept': "application/json",
                'Content-Type': "application/json",
            },
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify(datum),
            success: function (data, textStatus, xhr) {
                console.log("statuscodeBanner" + xhr.status)
                console.log('contentsBanner', data.body.contents);
                let contentarray = data.body.contents;
                console.log('contentarray', contentarray?.length);
                if (xhr.status == 200 && contentarray?.length >= 1) {
                    document.getElementById("faqBannerPersonalized").className = 'loadercheck';
                    contentarray.forEach((element, index, array) => {
                        var tilelabel = element.tilelabel;
                        var tilekey = element.tilekey;
                        var tileIcon = element.tileIcon;
                        var tileheader = element.tileheader;
                        var tiledescription = element.tiledescription;
                        var bkgtype = element.bkgtype;
                        var linkurl = element.linkurl;
                        var linktext = element.linktext;
                        var linktext = element.linktext;

                        // For Metrics

                        var pegaCard = element.pegaCard;
                        var pegatile = element.isPegaTile;
                        var jsonL1 = { "responseList": {} };
                        var jsonL2 = pegaCard;
                        jsonL2["category"] = category;
                        jsonL2["pageurl"] = pageUrl;
                        var arrlist = [];
                        arrlist.push(jsonL2);
                        jsonL1.responseList = arrlist;
                        var pegacardfeed = JSON.stringify(jsonL1);

                        var pageName = vzdl.page.name;

                        var taggingButtonText = element.linktext;
                        taggingButtonText = taggingButtonText.replace(/\s/g, '');

                        function taggingBanner() {
                            console.log("uattttt :", tileheader);
                            window.coreData = window.coreData || [];
                            window.coreData.push({
                                task: "emit",
                                event: "notify",
                                params: {
                                    message: " " + tilelabel + " " + tileheader,
                                    data: {
                                        vzdl: {
                                            page: {
                                                name: pageName
                                            }
                                        }
                                    }

                                }

                            });
                        }

                        if (pegatile == "true") {
                            console.log('pegatile True');
                            var $bannerContainer = $("<div class='faqBanner loggedin " + bkgtype + "'><div id='" + tilekey + "' class='banner-container'><div class='banner-message' style='color:#000'><div class= 'banner-icon'><img src='" + tileIcon + "'/></div>" + (tilelabel && tilelabel.length > 0 ? "<div class='banner-title'>" + tilelabel + "</div>" : "") + "<div class='banner-header' data-track='{&quot;type&quot;:&quot;message&quot;,&quot;name&quot;:&quot;" + tileheader + "&quot;}'>" + tileheader + "</div>" + (tiledescription && tiledescription.length > 0 ? "<div class='banner-subtitle'>" + tiledescription + "</div>" : "") + "</div><div class='bannerButton' style='border:1px solid #000'><a class='banner-link' data-json=" + pegacardfeed + " data-track='{&quot;type&quot;:&quot;link&quot;,&quot;name&quot;:&quot;" + taggingButtonText + "&quot;}' href='" + linkurl + "' style='color:#000'>" + linktext + "</a></div><span class='x-button' style='color:#000'>&times;</span></div></div>");
                            $("#faqBannerPersonalized").append($bannerContainer);
                            window.vzdl.target.message = tileheader;
                            taggingBanner();
                            makenbxcallBanner("viewed", pegacardfeed);
                        } else {
                            console.log('pegatile false');
                            var $bannerContainer = $("<div class='faqBanner loggedin " + bkgtype + "'><div id='" + tilekey + "' class='banner-container'><div class='banner-message' style='color:#000'><div class= 'banner-icon'><img src='" + tileIcon + "'/></div>" + (tilelabel && tilelabel.length > 0 ? "<div class='banner-title'>" + tilelabel + "</div>" : "") + "<div class='banner-header'>" + tileheader + "</div>" + (tiledescription && tiledescription.length > 0 ? "<div class='banner-subtitle'>" + tiledescription + "</div>" : "") + "</div><div class='bannerButton' style='border:1px solid #000'><a class='banner-link' data-json=" + pegacardfeed + " data-track='{&quot;type&quot;:&quot;link&quot;,&quot;name&quot;:&quot;" + taggingButtonText + "&quot;}' href='" + linkurl + "' style='color:#000'>" + linktext + "</a></div><span class='x-button' style='color:#000'>&times;</span></div></div>");
                            window.vzdl.target.message = tileheader;
                            taggingBanner();
                        }



                    })

                }
                let cookieCheckScript = (vzwDL.mvo.utils.isLoggedIn() && (vzwDL.mvo.utils.hasAmID() || (accessCookie("wlsssoid") != undefined && accessCookie("wlsssoid") != "")));

                $(document).on('click', '.banner-link', function (e) {
                    console.log("CLICKED FAQ Banner");
                    //e.stopPropagation();
                    var parentElementBanner = $(this).parent().parent();
                    console.log("CLICKED FAQ Banner", parentElementBanner);
                    var pclickBanner = $(this).attr("data-json");

                    if (pclickBanner && !parentElementBanner.hasClass('feedback_sent') && vzwDL.mvo.utils.isLoggedIn()) {
                        makenbxcallBanner("clicked", pclickBanner, parentElementBanner);
                    }
                });
                $('.faqBanner .banner-container .x-button').click(function () {
                    $(this).closest('.faqBanner').hide();
                    var cId = $(this).closest('.banner-container').attr('id');
                    localStorage.setItem('vzw-support-banner-' + cId, "banner-id-" + cId);

                    if (typeof window.adjustSideNav === 'function')
                        window.adjustSideNav();

                    if (typeof window.adjustPodForAlert === 'function')
                        window.adjustPodForAlert();
                });
                $('.faqBanner .banner-container').each(function (index) {

                    if ($(this).parent().hasClass("loggedin")) {
                        if (cookieCheckScript == true) {
                            if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                                console.log("NOT NUL :=:");
                                $(this).closest('.faqBanner').show();
                            } else {
                                $(this).closest('.faqBanner').hide();
                            }
                        } else {
                            $(this).closest('.faqBanner').hide();
                        }
                    }

                    if ($(this).parent().hasClass("nonloggedin")) {
                        if (cookieCheckScript == false) {
                            if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                                $(this).closest('.faqBanner').show();
                            } else {
                                $(this).closest('.faqBanner').hide();
                            }
                        } else {
                            $(this).closest('.faqBanner').hide();
                        }
                    }

                    if ($(this).parent().hasClass("both")) {
                        if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                            $(this).closest('.faqBanner').show();
                        } else {
                            $(this).closest('.faqBanner').hide();
                        }
                    }
                });
            }

        });
		}

    }
    }


    $('.faqBanner .banner-container .x-button').click(function () {
        $(this).closest('.faqBanner').hide();
        var cId = $(this).closest('.banner-container').attr('id');
        localStorage.setItem('vzw-support-banner-' + cId, "banner-id-" + cId);

        if (typeof window.adjustSideNav === 'function')
            window.adjustSideNav();

        if (typeof window.adjustPodForAlert === 'function')
            window.adjustPodForAlert();
    });

    let cookieCheck = (vzwDL.mvo.utils.isLoggedIn() && (vzwDL.mvo.utils.hasAmID() || (accessCookie("wlsssoid") != undefined && accessCookie("wlsssoid") != "")));

    $('.faqBanner .banner-container').each(function (index) {

        if ($(this).parent().hasClass("loggedin")) {
            if (cookieCheck == true) {
                if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                    $(this).closest('.faqBanner').show();
                } else {
                    $(this).closest('.faqBanner').hide();
                }
            } else {
                $(this).closest('.faqBanner').hide();
            }
        }

        if ($(this).parent().hasClass("nonloggedin")) {
            if (cookieCheck == false) {
                if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                    $(this).closest('.faqBanner').show();
                } else {
                    $(this).closest('.faqBanner').hide();
                }
            } else {
                $(this).closest('.faqBanner').hide();
            }
        }

        if ($(this).parent().hasClass("both")) {
            if (localStorage.getItem('vzw-support-banner-' + $(this).attr('id')) == null) {
                $(this).closest('.faqBanner').show();
            } else {
                $(this).closest('.faqBanner').hide();
            }
        }

    });

});
