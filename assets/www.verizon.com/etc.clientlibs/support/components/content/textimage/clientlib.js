/**
 * Rewrites the customer-agreement Scene7 PDF link to Google Docs viewer.
 * Android only (browsers and WebView; `wv` covers WebView UAs that omit "Android").
 */
(function () {
    'use strict';

    var ua = navigator.userAgent || '';
    if (!/Android/i.test(ua)) {
        console.log('navigator.userAgent: ' + navigator.userAgent);
        return;
    }

    var VIEWER_PREFIX = 'https://docs.google.com/viewer?url=';
    var SCENE7_HOST = 'ss7.vzw.com';
    var CA_PATH = '/is/content/VerizonWireless/ca-1125en-992300-r1';

    function isCaScene7Link(anchor) {
        var raw = anchor.getAttribute('href');
        if (!raw || raw.indexOf('#') === 0) {
            return false;
        }
        try {
            var resolved = new URL(raw, document.baseURI);
            if (resolved.hostname !== SCENE7_HOST) {
                return false;
            }
            var path = resolved.pathname.replace(/\/$/, '');
            return path === CA_PATH;
        } catch (e) {
            return false;
        }
    }

    function rewriteLinks() {
        // Match both direct textimage rendering and accordion/nested cases
        var anchors = document.querySelectorAll('.textimage-container .text a[href], .textimage .text a[href]');
        console.log('[CA PDF Viewer] Found ' + anchors.length + ' potential links');
        for (var i = 0; i < anchors.length; i++) {
            var a = anchors[i];
            if (!isCaScene7Link(a)) {
                continue;
            }
            var original = a.href;
            console.log('[CA PDF Viewer] Rewriting: ' + original);
            a.setAttribute('href', VIEWER_PREFIX + encodeURIComponent(original));
            console.log('[CA PDF Viewer] Rewritten to: ' + a.href);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', rewriteLinks);
    } else {
        rewriteLinks();
    }
})();
