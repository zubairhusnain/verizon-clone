$(function () {
    const $bookmarkButton = $('#bookmarkToggle');
    const $popupContainer = $('#bookmark-icon-container');

    const pathDefault = "M22.3404 2.3335H5.63037V25.6656L14.1828 21.5794L22.3696 25.6668L22.3404 2.3335ZM7.0977 3.80083H20.8756L20.8813 8.40263H7.0977V3.80083ZM14.1968 19.9465L7.0977 23.3372V9.86996H20.8831L20.8998 23.2926L14.1968 19.9465Z";
    const pathBookmarked = "M5.63086 8.40699V2.33337H22.3408L22.3485 8.40699H5.63086ZM5.63086 9.86532V25.6654L14.1833 21.5793L22.3702 25.6667L22.3503 9.86532H5.63086Z";

    // --- Helper: Updates the Icon UI ---
    function updateIconVisuals(isBookmarked) {
        if (isBookmarked) {
            $bookmarkButton.addClass('bookmarked');
            $bookmarkButton.find('svg path').attr('d', pathBookmarked);
            $bookmarkButton.attr('aria-label', 'Unbookmark');
            $bookmarkButton.attr('data-track', '{"type":"link","name":"unbookmark"}');
        } else {
            $bookmarkButton.removeClass('bookmarked');
            $bookmarkButton.find('svg path').attr('d', pathDefault);
            $bookmarkButton.attr('aria-label', 'Bookmark');
            $bookmarkButton.attr('data-track', '{"type":"link","name":"bookmark"}');
        }
    }

    function getRootDomain() {
        const host = location.hostname;
        if (host === 'localhost' || /^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/.test(host)) {
            return "";
        }		
        const parts = host.split('.');
        if (parts.length >= 2) {
            return ";domain=." + parts.slice(-2).join('.');
        }       
        return "";
    }

    // --- Helper: Set Cookie ---
    function setSupportBookmarkCookie() {
        let d = new Date();
        d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000)); // 1 day
        let expires = "expires="+ d.toUTCString();
        let domainAttr = getRootDomain(); 

        document.cookie = "supportBookmark=add;" + expires + ";path=/" + domainAttr;
        console.log("Cookie set attempt: supportBookmark=add" + domainAttr); 
    }

    // --- Helper: Delete Cookie ---
    function deleteSupportBookmarkCookie() {
        let domainAttr = getRootDomain(); 
        document.cookie = "supportBookmark=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/" + domainAttr;
    }

    function triggerBookmarkTransaction(actionType) {
        const pageId = $bookmarkButton.data('page-id');

        if (!pageId) {
            console.error("Bookmark Error: Missing 'data-page-id'.");
            return;
        }

        $popupContainer.empty();
        const reactTag = `
            <react-component 
                data-component="bookmarknotification" 
                data-page-id="${pageId}" 
                data-action-type="${actionType}">
            </react-component>`;
        
        $popupContainer.append(reactTag);
    }

    // --- Click Handler ---
    function handleBookmarkClick() {
        if(vzwDL.mvo.utils.isLoggedIn()){
            const isBookmarked = $bookmarkButton.hasClass('bookmarked');
            const actionType = isBookmarked ? 'Remove' : 'Add';            
            triggerBookmarkTransaction(actionType);
        } else {
            setSupportBookmarkCookie();

            let currentSubdomain = location.host.split('.')[0];
            let newSubdomain = '';
              if (location.host.indexOf("vzwqa") > -1) {
                newSubdomain = "securesit";
                currentSubdomain = "vzwqa";
              } else if (location.host.indexOf("www") > -1) {
                newSubdomain = "secure";
                currentSubdomain = "www";
              }
    
            if (newSubdomain !== undefined) {
                const loginURL = location.href.replace(currentSubdomain, newSubdomain);
                let newSignInURL = loginURL;
                      newSignInURL = new URL(newSignInURL);
                      newSignInURL = newSignInURL.origin + "/signin?goto=" + location.href;
                
                if (newSignInURL.indexOf("verizonwireless") > -1) {
                  const currentDomain = "verizonwireless";
                  const newDomain = "verizon";
                  const signInUrlQA =  newSignInURL.replace(currentDomain, newDomain);
                  let newSignInURLQA = signInUrlQA;
                      newSignInURLQA = new URL(newSignInURLQA);
                      newSignInURLQA = newSignInURLQA.origin + "/signin?goto=" + location.href;
                  window.location.href = newSignInURLQA;
                } else if (location.host.indexOf("verizon") > -1) {                  
                      window.location.href = newSignInURL;
                }
             }
          }
    }

    // --- Event Listeners ---
    $bookmarkButton.on('click', handleBookmarkClick);

    window.addEventListener('bookmark-transaction-success', function (e) {
        const { actionType } = e.detail;
        updateIconVisuals(actionType === 'Add');
    });

    updateIconVisuals($bookmarkButton.hasClass('bookmarked'));

    // --- ON LOAD: Check for Pending Bookmark Action ---
    if (vzwDL.mvo.utils.isLoggedIn()) {
        if (document.cookie.indexOf('supportBookmark=add') > -1) {
            triggerBookmarkTransaction('Add');
            deleteSupportBookmarkCookie();
        }
    }
});