$(function() {
    if(vzwDL.mvo.utils.isLoggedIn()){
        window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            // This runs only if the page was restored from the back/forward cache
            window.location.reload();
            }
        });

    const $bookmarkButton = $('#bookmarkToggle');
    const pathDefault = "M22.3404 2.3335H5.63037V25.6656L14.1828 21.5794L22.3696 25.6668L22.3404 2.3335ZM7.0977 3.80083H20.8756L20.8813 8.40263H7.0977V3.80083ZM14.1968 19.9465L7.0977 23.3372V9.86996H20.8831L20.8998 23.2926L14.1968 19.9465Z";
    const pathBookmarked = "M5.63086 8.40699V2.33337H22.3408L22.3485 8.40699H5.63086ZM5.63086 9.86532V25.6654L14.1833 21.5793L22.3702 25.6667L22.3503 9.86532H5.63086Z";


    function setBookmarkState(isBookmarked) {
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


    function checkInitialBookmarkState() {
        const currentPageId = $bookmarkButton.data('page-id');

        if (!currentPageId) {
            console.warn("Bookmark button is missing the 'data-page-id' attribute. Cannot check state.");
            return;
        }

        $.ajax({
            url: '/digital/nsa/secure/gw/support/retrieveBookMark',
            type: 'GET',
            dataType: 'json',
			headers: { "channelId": "VZW-DOTCOM" },
            success: function(response) {
                if (response && response.body && Array.isArray(response.body.bookMarkContent)) {
                    const bookmarks = response.body.bookMarkContent;
                    const isPageBookmarked = bookmarks.some(bookmark => bookmark.pageId === currentPageId);

                    setBookmarkState(isPageBookmarked);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Failed to fetch bookmark status');
            }
        });
    }

    checkInitialBookmarkState();
    }
});