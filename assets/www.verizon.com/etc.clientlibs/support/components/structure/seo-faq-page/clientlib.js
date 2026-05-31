// Reusable toggle function to eliminate duplicated logic
function toggleAccordion(header) {
    const isExpanded = header.getAttribute("aria-expanded") === "true";
    header.setAttribute("aria-expanded", String(!isExpanded));
    header.classList.toggle("expand-category", !isExpanded);
    const content = header.nextElementSibling;
    if (content) {
        content.style.display = isExpanded ? "none" : "block";
    }
}

var accordionHeaders = document.querySelectorAll('.i-am-accordion');
accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
        toggleAccordion(this);
    });
    header.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggleAccordion(this);
        }
    });
});

// Adding toggle button event for Expand and collapse All
$('.toggle-accordion').on('click', function () {
    var btn = $(this);
    var tabContent = btn.closest('.cmp-tabs__tabpanel--active');
    var accordionHeaders = tabContent.find('.i-am-accordion');
    if (accordionHeaders.length <= 1) return;

    var isExpanding = btn.html() === "Expand All";
    btn.html(isExpanding ? "Collapse All" : "Expand All");
    if (btn.html() === "Expand All") {
        btn.attr("aria-label", "Expand All link");
    } else {
        btn.attr("aria-label", "Collapse All link");
    }

    accordionHeaders.each(function () {
        var header = $(this);
        var newState = isExpanding ? "true" : "false";
        header.attr("aria-expanded", newState).toggleClass("expand-category", newState === "true")
        var content = header.next();
        content.css("display", newState === "true" ? "block" : "none");
    });
});

// Disabling the toggle based on min accordion count
$('.cmp-tabs__tabpanel').each(function () {
    var tabContent = $(this);
    var accordionHeaders = tabContent.find('.i-am-accordion');
    var toggleButton = tabContent.find('.toggle-accordion');

    if (accordionHeaders.length <= 1) {
        toggleButton.hide();
    } else {
        toggleButton.show();
    }
});

//updating the toggle state based on the user expand and collapse
$('.i-am-accordion').on('click', function () {
    var header = $(this);
    var tabContent = header.closest('.cmp-tabs__tabpanel--active');
    var expandedCount = tabContent.find('.i-am-accordion[aria-expanded="true"]').length;
    var collapsedCount = tabContent.find('.i-am-accordion[aria-expanded="false"]').length;
    var toggleButton = tabContent.find('.toggle-accordion');
    var totalAccordions = tabContent.find('.i-am-accordion').length;
    // if (totalAccordions > 1) {
    toggleButton.html(expandedCount > collapsedCount ? "Collapse All" : "Expand All");
    //}
    console.log(expandedCount + " - Expanded count " + "and " + "Collapsed count " + collapsedCount);
});
//cookie validation
// Previous regex could have optional groups that individually match empty strings.
// Replace with a tighter pattern that cannot match an empty string and directly tests presence.
let accordionLoggedInCookie = /(?:^|;\s*)loggedIn\s*=[^;]+(?:;|$)/.test(document.cookie);
if (accordionLoggedInCookie) {
    $(".tab.authenticated").attr('style', 'display: block;');
    $(".tab.unauthenticated").attr('style', 'display: none;');
} else {
    $(".tab.authenticated").attr('style', 'display: none;');
    $(".tab.unauthenticated").attr('style', 'display: block;');
}

// Detect a loggedIn cookie with a non-empty value; boundary-aware so it won't match substrings or empty values.
const hasLoggedInCookie = /(?:^|;\s*)loggedIn\s*=[^;]+(?:;|$)/.test(document.cookie);
const $slides = $(".tsa-related-slide.tabValidation");
// Use jQuery toggle to simplify show/hide instead of setting style strings directly.
$slides.toggle(hasLoggedInCookie);


jQuery(document).ready(function () {
  function adjustTitleBoxPosition() {
    const element = document.getElementById('promoSummary');
    if (element) {
      element.classList.add('full-length-bg');
      element.style.setProperty('--bg-width', ($('#tl-TabletBodyContentSection').width() - 14) + 'px');
      element.style.setProperty('--bg-height', element.parentElement.offsetHeight + 'px');
    }
  }

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

  if ($(".tsa_seo_signin").length > 0) {
    if (!vzwDL.mvo.utils.isLoggedIn()) {
      var currentSubdomain = location.host.split('.')[0], newSubdomain;
      if (location.host.indexOf("vzwqa") > -1) {
        newSubdomain = "securesit";
        currentSubdomain = "vzwqa";
      } else if (location.host.indexOf("www") > -1) {
        newSubdomain = "secure";
        currentSubdomain = "www";
      }

      if (newSubdomain !== undefined) {
        $(".sign-in-desc a").attr("href", location.href.replace(currentSubdomain, newSubdomain));
        if (location.host.indexOf("verizon") > -1) {
          var newSignInUrlProd = $(".sign-in-desc a").attr("href");
          newSignInUrlProd = new URL(newSignInUrlProd);
          newSignInUrlProd = newSignInUrlProd.origin + "/signin?goto=" + location.href;
          $(".sign-in-desc a").attr("href", newSignInUrlProd);

        }
        if (location.host.indexOf("verizonwireless") > -1) {
          var currentDomain = location.host.split('.')[1], newDomain;
          currentDomain = "verizonwireless";
          newDomain = "verizon";

          var newSignInUrl = $(".sign-in-desc a").attr("href").replace(currentDomain, newDomain);
          $(".sign-in-desc a").attr("href", newSignInUrl);
        }

      }

      window.coreData.push({
        task: "emit",
        event: "openView",
        params: {
          selector: '.tsa_seo_signin',
          name: 'widget:sign in for personalized suggestions',
          trackAs: 'link'
        }
      });

      adjustTitleBoxPosition();

      const debouncedAdjustTitleBox = debounce(function () {
        adjustTitleBoxPosition();
      }, 250);

      $(window).on('resize', debouncedAdjustTitleBox);
    } else {
      $(".sign-in-tsa").remove();
    }
  }

});
/*******************************************************************************
 * Copyright 2018 Adobe
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

/**
 * Element.matches()
 * https://developer.mozilla.org/enUS/docs/Web/API/Element/matches#Polyfill
 */
if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}

// eslint-disable-next-line valid-jsdoc
/**
 * Element.closest()
 * https://developer.mozilla.org/enUS/docs/Web/API/Element/closest#Polyfill
 */
if (!Element.prototype.closest) {
    Element.prototype.closest = function(s) {
        "use strict";
        var el = this;
        if (!document.documentElement.contains(el)) {
            return null;
        }
        do {
            if (el.matches(s)) {
                return el;
            }
            el = el.parentElement || el.parentNode;
        } while (el !== null && el.nodeType === 1);
        return null;
    };
}

/*******************************************************************************
 * Copyright 2018 Adobe
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/
(function () {
    "use strict";

    (function applyTabStripFixClass() {
        var ua = navigator.userAgent || "";
        if (/Android/i.test(ua)) {
            document.documentElement.classList.add("support-tabstrip-compact");
            return;
        }
    })();

    var dataLayerEnabled;
    var dataLayer;

    var NS = "cmp";
    var IS = "tabs";

    var keyCodes = {
        SPACE: 32,
        ENTER: 13,
        END: 35,
        HOME: 36,
        ARROW_LEFT: 37,
        ARROW_UP: 38,
        ARROW_RIGHT: 39,
        ARROW_DOWN: 40
    };

    var selectors = {
        self: "[data-" + NS + '-is="' + IS + '"]',
        active: {
            tab: "cmp-tabs__tab--active",
            tabpanel: "cmp-tabs__tabpanel--active"
        }
    };

    /**
     * Tabs Configuration
     *
     * @typedef {Object} TabsConfig Represents a Tabs configuration
     * @property {HTMLElement} element The HTMLElement representing the Tabs
     * @property {Object} options The Tabs options
     */

    /**
     * Tabs
     *
     * @class Tabs
     * @classdesc An interactive Tabs component for navigating a list of tabs
     * @param {TabsConfig} config The Tabs configuration
     */
    function Tabs(config) {
        console.log('Inside tabs function of TABS2.js');
        var that = this;

        if (config && config.element) {
            init(config);
        }

        /**
         * Initializes the Tabs
         *
         * @private
         * @param {TabsConfig} config The Tabs configuration
         */
        function init(config) {
            that._config = config;

            // prevents multiple initialization
            config.element.removeAttribute("data-" + NS + "-is");

            cacheElements(config.element);
            that._active = getActiveIndex(that._elements["tab"]);

            if (that._elements.tabpanel) {
                refreshActive(true);
                bindEvents();
            }

            /*
            var deepLinkItemIdx = CQ.CoreComponents.container.utils.getDeepLinkItemIdx(that, "tabpanel");
            if (deepLinkItemIdx) {
                var deepLinkItem = that._elements["tab"][deepLinkItemIdx];
                if (deepLinkItem && that._elements["tab"][that._active].id !== deepLinkItem.id) {
                    navigateAndFocusTab(deepLinkItemIdx);
                }
            }

            if (window.Granite && window.Granite.author && window.Granite.author.MessageChannel) {
                CQ.CoreComponents.MESSAGE_CHANNEL = CQ.CoreComponents.MESSAGE_CHANNEL || new window.Granite.author.MessageChannel("cqauthor", window);
                CQ.CoreComponents.MESSAGE_CHANNEL.subscribeRequestMessage("cmp.panelcontainer", function(message) {
                    if (message.data && message.data.type === "cmp-tabs" && message.data.id === that._elements.self.dataset["cmpPanelcontainerId"]) {
                        if (message.data.operation === "navigate") {
                            navigate(message.data.index);
                        }
                    }
                });
            }*/
        }

        /**
         * Returns the index of the active tab, if no tab is active returns 0
         *
         * @param {Array} tabs Tab elements
         * @returns {Number} Index of the active tab, 0 if none is active
         */
        function getActiveIndex(tabs) {
            console.log('Inside getActiveIndex');
            if (tabs) {
                for (var i = 0; i < tabs.length; i++) {
                    if (tabs[i].classList.contains(selectors.active.tab)) {
                        return i;
                    }
                }
            }
            return 0;
        }

        /**
         * Caches the Tabs elements as defined via the {@code data-tabs-hook="ELEMENT_NAME"} markup API
         *
         * @private
         * @param {HTMLElement} wrapper The Tabs wrapper element
         */
        function cacheElements(wrapper) {
            console.log('Inside cacheElements');
            that._elements = {};
            that._elements.self = wrapper;
            var hooks = that._elements.self.querySelectorAll("[data-" + NS + "-hook-" + IS + "]");

            for (var i = 0; i < hooks.length; i++) {
                var hook = hooks[i];
                if (hook.closest("." + NS + "-" + IS) === that._elements.self) { // only process own tab elements
                    var capitalized = IS;
                    capitalized = capitalized.charAt(0).toUpperCase() + capitalized.slice(1);
                    var key = hook.dataset[NS + "Hook" + capitalized];
                    if (that._elements[key]) {
                        if (!Array.isArray(that._elements[key])) {
                            var tmp = that._elements[key];
                            that._elements[key] = [tmp];
                        }
                        that._elements[key].push(hook);
                    } else {
                        that._elements[key] = hook;
                    }
                }
            }
        }

        /**
         * Binds Tabs event handling
         *
         * @private
         */
        function bindEvents() {
            console.log('Inside bindEvents');
            var tabs = $("div.tab-title");
            if (tabs) {
                for (var i = 0; i < tabs.length; i++) {
                    (function (index) {
                        tabs[i].addEventListener("click", function (event) {
                            navigateAndFocusTab(index);
                        });
                        tabs[i].addEventListener("keydown", function (event) {
                            onKeyDown(event);
                        });
                    })(i);
                }
            }
            var tabDropdown = document.getElementsByClassName("tab-select");
            if (tabDropdown.length > 0) {
                tabDropdown[0].addEventListener("change", function (event) {
                    navigateAndFocusTabsSelect(tabDropdown[0].selectedIndex);
                });
            }

        }

        /**
         * Handles tab keydown events
         *
         * @private
         * @param {Object} event The keydown event
         */
        function onKeyDown(event) {
            console.log('Inside onKeyDown');
            var index = that._active;
            var lastIndex = that._elements["tab"].length - 1;

            switch (event.keyCode) {
                case keyCodes.ARROW_LEFT:
                case keyCodes.ARROW_UP:
                    event.preventDefault();
                    if (index > 0) {
                        navigateKey(index - 1);
                    }
                    break;
                case keyCodes.ARROW_RIGHT:
                case keyCodes.ARROW_DOWN:
                    event.preventDefault();
                    if (index < lastIndex) {
                        navigateKey(index + 1);
                    }
                    break;
                case keyCodes.HOME:
                    event.preventDefault();
                    navigateKey(0);
                    break;
                case keyCodes.END:
                    event.preventDefault();
                    navigateKey(lastIndex);
                    break;
                case keyCodes.ENTER:
                    event.preventDefault();
                    refreshActive();
                    break;
                case keyCodes.SPACE:
                    event.preventDefault();
                    refreshActive();
                    break;
                default:
                    return;
            }
        }


        function navigateKey(index) {
            console.log('Inside navigateKey');
            that._active = index;
            moveTab();
        }

        function moveTab() {
            console.log('Inside movetab');
            var tabpanels = that._elements["tabpanel"];
            var tabs = that._elements["tab"];

            if (tabpanels) {
                if (Array.isArray(tabpanels)) {
                    for (var i = 0; i < tabpanels.length; i++) {
                        if (i === parseInt(that._active)) {
                            tabs[i].focus();
                        } else {
                            tabs[i].blur();
                        }
                    }
                } else {
                    // only one tab
                    tabpanels.classList.add(selectors.active.tabpanel);
                    tabs.classList.add(selectors.active.tab);
                }
            }
        }

        /**
         * Refreshes the tab markup based on the current {@code Tabs#_active} index
         *
         * @private
         */
        function refreshActive(isPageLoad) {
            console.log('Inside refreshActive');
            var tabpanels = that._elements["tabpanel"];
            var tabs = that._elements["tab"];

            if ($(".tab-drop")) {
                var firstVisibleFound = false;
                $(".tab-drop .cmp-tabs__tablist .tab-title").each(function (index, element) {
                    if (($(this).css('display') === 'block') && !firstVisibleFound) {
                        $(this).addClass("cmp-tabs__tab--active");
                        $(this).attr("selected", "");
                        firstVisibleFound = true;
                    }
                });

            }

            if (tabpanels) {
                if (Array.isArray(tabpanels)) {
                    for (var i = 0; i < tabpanels.length; i++) {
                        if (i === parseInt(that._active)) {
                            tabpanels[i].classList.add(selectors.active.tabpanel);
                            tabpanels[i].removeAttribute("aria-hidden");
                            tabpanels[i].setAttribute("tabindex", "-1");
                            if (!isPageLoad) {
                                tabpanels[i].focus({ preventScroll: true });
                            }
                            tabpanels[i].setAttribute("role", "region");
                            tabpanels[i].setAttribute("aria-selected", true);
                            if (tabs[i].checkVisibility()) {
                                tabs[i].classList.add(selectors.active.tab);
                            }
                            tabs[i].setAttribute("aria-selected", true);
                            tabs[i].setAttribute("tabindex", "0");
                        } else if ('edit' != accessCookie('wcmmode')) {
                            tabpanels[i].classList.remove(selectors.active.tabpanel);
                            tabpanels[i].setAttribute("aria-hidden", true);
                            tabpanels[i].setAttribute("tabindex", "-1");
                            tabpanels[i].removeAttribute("role");
                            tabs[i].classList.remove(selectors.active.tab);
                            tabs[i].setAttribute("aria-selected", false);
                            tabs[i].setAttribute("tabindex", "-1");
                            tabpanels[i].setAttribute("aria-selected", false);
                        }
                    }
                } else {
                    // only one tab
                    tabpanels.classList.add(selectors.active.tabpanel);
                    tabs.classList.add(selectors.active.tab);
                }
            }
            if (isPageLoad) {
                $(".cmp-tabs__tablist .tab-title:visible:first").addClass("cmp-tabs__tab--active");

            }
        }
        $(document).ready(function () {
            // Remove focus from the active tab panel
            $('.cmp-tabs__tabpanel--active').attr('tabindex', '-1').blur();

        });


        /**
         * Focuses the element and prevents scrolling the element into view
         *
         * @param {HTMLElement} element Element to focus
         */
        function focusWithoutScroll(element) {
            console.log('Inside focusWithoutScroll');
            var x = window.scrollX || window.pageXOffset;
            var y = window.scrollY || window.pageYOffset;
            element.focus();
            window.scrollTo(x, y);
        }

        /**
         * Navigates to the tab at the provided index
         *
         * @private
         * @param {Number} index The index of the tab to navigate to
         */
        function navigate(index) {
            that._active = index;
            refreshActive();
        }

        /**
         * Navigates to the item at the provided index and ensures the active tab gains focus
         *
         * @private
         * @param {Number} index The index of the item to navigate to
         */
        function navigateAndFocusTab(index) {
            console.log('Inside navigateAndFocusTab');
            var exActive = that._active;
            navigate(index);
            focusWithoutScroll(that._elements["tab"][index]);

            if (dataLayerEnabled) {

                var activeItem = getDataLayerId(that._elements.tabpanel[index].dataset.cmpDataLayer);
                var exActiveItem = getDataLayerId(that._elements.tabpanel[exActive].dataset.cmpDataLayer);

                dataLayer.push({
                    event: "cmp:show",
                    eventInfo: {
                        path: "component." + activeItem
                    }
                });

                dataLayer.push({
                    event: "cmp:hide",
                    eventInfo: {
                        path: "component." + exActiveItem
                    }
                });

                var tabsId = that._elements.self.id;
                var uploadPayload = { component: {} };
                uploadPayload.component[tabsId] = { shownItems: [activeItem] };

                var removePayload = { component: {} };
                removePayload.component[tabsId] = { shownItems: undefined };

                dataLayer.push(removePayload);
                dataLayer.push(uploadPayload);
            }
        }
        function navigateAndFocusTabsSelect(index) {
            console.log('Inside navigateAndFocusTabsSelect');
            var exActive = that._active;
            navigate(index);
            focusWithoutScroll(that._elements["tab"][index]);

            if (dataLayerEnabled) {

                var activeItem = getDataLayerId(that._elements.tabpanel[index].dataset.cmpDataLayer);
                var exActiveItem = getDataLayerId(that._elements.tabpanel[exActive].dataset.cmpDataLayer);

                dataLayer.push({
                    event: "cmp:show",
                    eventInfo: {
                        path: "component." + activeItem
                    }
                });

                dataLayer.push({
                    event: "cmp:hide",
                    eventInfo: {
                        path: "component." + exActiveItem
                    }
                });

                var tabsId = that._elements.self.id;
                var uploadPayload = { component: {} };
                uploadPayload.component[tabsId] = { shownItems: [activeItem] };

                var removePayload = { component: {} };
                removePayload.component[tabsId] = { shownItems: undefined };

                dataLayer.push(removePayload);
                dataLayer.push(uploadPayload);
            }
        }
    }

    /**
     * Reads options data from the Tabs wrapper element, defined via {@code data-cmp-*} data attributes
     *
     * @private
     * @param {HTMLElement} element The Tabs element to read options data from
     * @returns {Object} The options read from the component data attributes
     */
    function readData(element) {
        console.log('Inside read data');
        var data = element.dataset;
        var options = [];
        var capitalized = IS;
        capitalized = capitalized.charAt(0).toUpperCase() + capitalized.slice(1);
        var reserved = ["is", "hook" + capitalized];

        for (var key in data) {
            if (data.hasOwnProperty(key)) {
                var value = data[key];

                if (key.indexOf(NS) === 0) {
                    key = key.slice(NS.length);
                    key = key.charAt(0).toLowerCase() + key.substring(1);

                    if (reserved.indexOf(key) === -1) {
                        options[key] = value;
                    }
                }
            }
        }

        return options;
    }

    /**
     * Parses the dataLayer string and returns the ID
     *
     * @private
     * @param {String} componentDataLayer the dataLayer string
     * @returns {String} dataLayerId or undefined
     */
    function getDataLayerId(componentDataLayer) {
        console.log('Inside getDataLayerId');
        return Object.keys(JSON.parse(componentDataLayer))[0];
    }

    /**
     * Document ready handler and DOM mutation observers. Initializes Tabs components as necessary.
     *
     * @private
     */
    function onDocumentReady() {
        console.log('Inside onDocumentReady');
        dataLayerEnabled = document.body.hasAttribute("data-cmp-data-layer-enabled");
        dataLayer = (dataLayerEnabled) ? window.adobeDataLayer = window.adobeDataLayer || [] : undefined;

        var elements = document.querySelectorAll(selectors.self);
        for (var i = 0; i < elements.length; i++) {
            new Tabs({ element: elements[i], options: readData(elements[i]) });
        }

        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        var body = document.querySelector("body");
        var observer = new MutationObserver(function (mutations) {
            mutations.forEach(function (mutation) {
                // needed for IE
                var nodesArray = [].slice.call(mutation.addedNodes);
                if (nodesArray.length > 0) {
                    nodesArray.forEach(function (addedNode) {
                        if (addedNode.querySelectorAll) {
                            var elementsArray = [].slice.call(addedNode.querySelectorAll(selectors.self));
                            elementsArray.forEach(function (element) {
                                new Tabs({ element: element, options: readData(element) });
                            });
                        }
                    });
                }
            });
        });

        observer.observe(body, {
            subtree: true,
            childList: true,
            characterData: true
        });
    }

    if (document.readyState !== "loading") {
        onDocumentReady();
    } else {
        document.addEventListener("DOMContentLoaded", onDocumentReady);
    }


}());

var checkloggenInCookie = document.cookie.match(/^(.*;)?\s*loggedIn\s*=\s*[^;]+(.*)?$/);
if (checkloggenInCookie != null) {
    $(".tab-title.authenticated").attr('style', 'display: block;');
    $(".tab-title.unauthenticated").attr('style', 'display: none;');
    $(".cmp-tabs__tablist .tab-title:visible:first").addClass("cmp-tabs__tab--active");
} else if (checkloggenInCookie == null) {
    $(".tab-title.authenticated").attr('style', 'display: none;');
    $(".tab-title.unauthenticated").attr('style', 'display: block;');
    $(".cmp-tabs__tablist .tab-title:visible:first").addClass("cmp-tabs__tab--active");
}

var tabValidationCheck = $(".tab-title.authenticated").attr("aria-controls");
var tabPanelMatch = document.getElementById(tabValidationCheck);
var tsaTabsVisibility = document.querySelectorAll(".tab-title.cmp-tabs__tab--active");
for (var i = 0; i < tsaTabsVisibility.length; i++) {
    if (tsaTabsVisibility[i].checkVisibility()) {
        tsaTabsVisibility[i].classList.add("cmp-tabs__tab--active");
    } else {
        tsaTabsVisibility[i].classList.remove("cmp-tabs__tab--active");
    }
}




function isElementVisibleInHorizontalScroll(element) {
	console.log('Inside isElementVisibleInHorizontalScroll');
    let container = $(element).parent();
    let containerLeft = container.scrollLeft();
    let containerRight = containerLeft + container.width();
    let firstLeft = container.children(':visible:first').offset().left;
    let elementLeft = $(element).offset().left - firstLeft;
    let elementRight = elementLeft + $(element).outerWidth();

    return (elementLeft >= containerLeft && elementRight <= containerRight);
}

function scrollLeftVisible(element) {
    console.log('Inside scrollLeftVisible');
    let container = $(element).parent();
    let containerLeft = container.offset().left;
    let elementLeft = $(element).offset().left;
    let firstLeft = container.children().first().offset().left;
    if (elementLeft < containerLeft) {
        if (elementLeft + $(element).outerWidth() - firstLeft < container.width())
            container.scrollLeft(0);
        else
            container.scrollLeft(container.scrollLeft() - (containerLeft - elementLeft));
    }
}
function scrollRightVisible(element) {
    console.log('Inside scrollRightVisible');
    let container = $(element).parent();
    let containerRight = container.scrollLeft() + container.width();
    let firstLeft = container.children().first().offset().left;
    let elementLeft = $(element).offset().left - firstLeft;
    let elementRight = elementLeft + $(element).outerWidth();
    if (elementRight > containerRight) {
        let restWidth = container[0].scrollWidth - elementLeft;
        if (restWidth < container[0].clientWidth)
            container.scrollLeft(container[0].scrollWidth - container[0].clientWidth);
        else
            container.scrollLeft(container.scrollLeft() + $(element).outerWidth());
    }
}
function clickNextTab() {
   console.log('Inside clickNextTab');
    let nextTab = $('.cmp-tabs__tab--active').next();
    if (nextTab.length > 0 && nextTab.hasClass('cmp-tabs__tab')) {
        nextTab.trigger( "click" );
        $('.left-caret').show();

        let nextNextTab = nextTab.next();
        if (!(nextNextTab.length > 0 && nextNextTab.hasClass('cmp-tabs__tab'))) {
            $('.right-caret').hide();
        }
        setTimeout(function () {
            scrollRightVisible(nextTab);
        }, 100);
    }
}
function clickPrevTab() {
    console.log('Inside clickPrevTab');
    let prevTab = $('.cmp-tabs__tab--active').prev();
    if (prevTab.length > 0 && prevTab.hasClass('cmp-tabs__tab')) {
        prevTab.click();
        if (isElementVisibleInHorizontalScroll(".cmp-tabs__tab:last-child")) {
            $('.right-caret').hide();
        } else {
            $('.right-caret').show();
        }

        let prevPrevTab = prevTab.prev();
        if (!(prevPrevTab.length > 0 && prevPrevTab.hasClass('cmp-tabs__tab'))) {
            $('.left-caret').hide();
        }

        let firstTabscroll = $(".tab-title.cmp-tabs__tab").first().hasClass("cmp-tabs__tab--active");
        if(firstTabscroll){
			 $('.right-caret').show();
        }
        setTimeout(function () {
            scrollLeftVisible(prevTab);
        }, 100);
    }
}
$(document).ready(function ($) {
    if ($('.cmp-tabs__tablist').length <= 0)
        return;

    if ($('.tsa-seo-tab-container .left-caret').length>0 && !isElementVisibleInHorizontalScroll(".cmp-tabs__tab:last-child")) {
        $('.right-caret').show();
    }

    $(document).on('keydown', '.right-caret', function (e) {
        if (e.which === 13) {
            e.stopPropagation();
            e.preventDefault();
            clickNextTab();
        }
    });
    $(document).on('click', '.right-caret', function (e) {
        clickNextTab();
    });

    $(document).on('keydown', '.left-caret', function (e) {
        if (e.which === 13) {
            e.stopPropagation();
            e.preventDefault();
            clickPrevTab();
        }
    });
    $(document).on('click', '.left-caret', function (e) {
        clickPrevTab();
    });

});

jQuery(document).ready(function () {
    // Configuration object for constants and selectors
    const Config = {
        SELECTORS: {
            accordion: '.i-am-accordion',
            accordionHeader: 'h2',
            globalNav: '#vzw-gn',
            globalNav20: '#vz-gh20',
            tabContainer: '.tab-container',
            chatBotTimeout: '#chatBotTimeOut',
            fullscreenButton: '.s7fullscreenbutton',
            s7Container: '.s7container',
            s7VideoPlayer: '.s7videoplayer',
            tabsTab: '.cmp-tabs__tab',
            tabsTabActive: '.cmp-tabs__tab--active',
            tabsTabPanel: '.cmp-tabs__tabpanel',
            tabsTabPanelActive: '.cmp-tabs__tabpanel--active',
            tab: '.tab',
            tabLabel: '.tab-label',
            tabContent: '.tab-content'
        },
        TIMEOUTS: {
            tabClick: 200,
            scrollDelay: 100,
            animateDelay: 1000,
            autoExpand: 400
        },
        OFFSETS: {
            globalNavExtra: 85,
            tabContainerHeight: 51,
            tabExtraHeight: 40,
            scrollThreshold: 100
        },
        CSS_CLASSES: {
            fullscreenMode: 'fullscreen_mode',
            tabActive: '--active'
        }
    };

    const handleQuickQuestionBtn = (questionTitle) => {
        if (!questionTitle || typeof questionTitle !== 'string') return;
        
        $(Config.SELECTORS.accordion).each(function () {
            const $accordion = $(this);
            const question = $accordion.find(Config.SELECTORS.accordionHeader).text().toLowerCase().trim();
            const normalizedTitle = questionTitle.toLowerCase().trim();
            
            if (question === normalizedTitle) {
                const $anchorTag = $accordion.find('a');
                if ($anchorTag.length) {
                    jumpToAnchorTag($anchorTag);
                }
            }
        });
    };

    const handleHash = () => {
        const hash = window.location.hash;
        if (!hash || hash === '#') return;
        
        const hashVal = hash.substr(1);
        const formattedHash = sanitizeHTML(hashVal);
        
        let $anchorTag = $(`a[name="${formattedHash}"]`);
        if ($anchorTag.length === 0) {
            $anchorTag = $(`#${formattedHash}`);
        }
        if ($anchorTag.length === 0) {
            $anchorTag = $(`[data-tabanchor="${formattedHash}"]`);
        }
        
        if ($anchorTag.length > 0) {
            jumpToAnchorTag($anchorTag);
        }
    };

    const jumpToAnchorTag = ($anchorTag) => {
        if (!$anchorTag || $anchorTag.length === 0) return;
        
        let extraHeight = 0;
        const { TIMEOUTS, OFFSETS, CSS_CLASSES } = Config;
        
        // Handle different anchor types
        if ($anchorTag.attr("role") === "tab" && $anchorTag.prop('nodeName').toLowerCase() === 'option') {
            setTimeout(() => {
                $anchorTag.prop("selected", true).click();
            }, TIMEOUTS.tabClick);
        } else if ($anchorTag.parent().attr("role") === "tab") {
            handleParentTabClick($anchorTag);
        } else if ($anchorTag.closest(Config.SELECTORS.tabsTabPanel).length > 0) {
            extraHeight = handleTabPanelClick($anchorTag);
        }

        // Calculate navigation offset
        const gNav = calculateGlobalNavHeight() + extraHeight;
        
        // Smooth scroll to anchor
        setTimeout(() => {
            console.log(`gNav: ${gNav} -- ${$anchorTag.offset().top - gNav}`);
            $('html, body').animate({ 
                scrollTop: $anchorTag.offset().top - gNav 
            }, 'fast');
        }, TIMEOUTS.animateDelay);
    };

    const handleParentTabClick = ($anchorTag) => {
        const { TIMEOUTS, OFFSETS } = Config;
        
        setTimeout(() => {
            $anchorTag.parent().click();

            setTimeout(() => {
                const $tabHeaderContainer = $anchorTag.parent().parent();
                const tabWidth = $anchorTag.parent().width();
                const tabOffset = $anchorTag.parent().offset().left;
                const containerWidth = $tabHeaderContainer.width();
                
                if ((tabOffset + tabWidth) > (containerWidth + OFFSETS.scrollThreshold)) {
                    const tabIndex = parseInt($anchorTag.parent().attr('name').substring(10));
                    const leftDistance = calculateTabScrollDistance(tabIndex);
                    $tabHeaderContainer.scrollLeft(leftDistance);
                }
            }, TIMEOUTS.tabClick);
        }, TIMEOUTS.tabClick);
    };

    const handleTabPanelClick = ($anchorTag) => {
        const { TIMEOUTS, OFFSETS } = Config;
        
        const tabPanelIndex = $anchorTag.closest(Config.SELECTORS.tabsTabPanel).attr('tab-content-index');
        const $tabHeader = $anchorTag.closest('.cmp-tabs').find(`[name="tabheader_${tabPanelIndex}"]`);    
        
        setTimeout(() => {
			if ($tabHeader.is('option')) {
				const $selectDropdown = $tabHeader.closest('select.cmp-tabs__tablist');
				const newSelectValue = $tabHeader.val();
				$selectDropdown.val(newSelectValue);
				$tabHeader.attr("aria-selected","true");
				$tabHeader.attr("tabindex","0");
				$selectDropdown.trigger('change');
				
				$(".tab-title.cmp-tabs__tab").removeClass("cmp-tabs__tab--active");
				$tabHeader.addClass("cmp-tabs__tab--active");
				
				$('div.cmp-tabs__tabpanel').removeClass("cmp-tabs__tabpanel--active");
				const $tabControl = $tabHeader.attr("aria-controls");
				const $tabId = $('div.cmp-tabs__tabpanel#' + $tabControl);
				if($tabId.length > 0){
					$tabId.addClass("cmp-tabs__tabpanel--active");
				}

			} else {
				$tabHeader.click();
			}

            setTimeout(() => {
                const $tabHeaderContainer = $tabHeader.parent();
                const headerWidth = $tabHeader.width();
                const headerOffset = $tabHeader.offset().left;
                const containerWidth = $tabHeaderContainer.width();
                
                if ((headerWidth + headerOffset) > (containerWidth + OFFSETS.scrollThreshold)) {
                    const tabIndex = parseInt(tabPanelIndex);
                    const leftDistance = calculateTabScrollDistance(tabIndex);
                    $tabHeaderContainer.scrollLeft(leftDistance);
                }
            }, TIMEOUTS.scrollDelay);

            setTimeout(() => {
                //$anchorTag.closest(Config.SELECTORS.tab).find(Config.SELECTORS.tabLabel).click();
                $anchorTag.closest(Config.SELECTORS.tab).find(Config.SELECTORS.tabContent).show();
                $anchorTag.closest(Config.SELECTORS.accordion).attr("aria-expanded", "true").addClass("expand-category");
            }, TIMEOUTS.tabClick);
        }, TIMEOUTS.tabClick);
        
        return OFFSETS.tabExtraHeight;
    };

    const calculateTabScrollDistance = (targetIndex) => {
        let leftDistance = 0;
        for (let i = 0; i < targetIndex; i++) {
            leftDistance += $(`[name="tabheader_${i}"]`).width();
        }
        return leftDistance;
    };

    const calculateGlobalNavHeight = () => {
        const { SELECTORS, OFFSETS } = Config;
        let gNav = 0;
        
        if ($(SELECTORS.globalNav).length > 0) {
            gNav = $(SELECTORS.globalNav).height() + OFFSETS.globalNavExtra;
        } else if ($(SELECTORS.globalNav20).length > 0) {
            gNav = $(SELECTORS.globalNav20).height() + OFFSETS.globalNavExtra;
        }
        
        if ($(SELECTORS.tabContainer).length > 0) {
            gNav += OFFSETS.tabContainerHeight;
        }
        
        return gNav;
    };

    const handleAutoExpand = () => {
        const $activeTab = $(Config.SELECTORS.tabsTabActive);
        const autoExpand = $activeTab.attr('data-auto-expand');
        
        if (autoExpand === 'true') {
            const $checkboxes = $(Config.SELECTORS.tabsTabPanelActive).find(Config.SELECTORS.accordion);
            $checkboxes.each(function () {
                const $checkbox = $(this);
                if (!$checkbox.is(':checked')) {
                    $checkbox.click();
                }
            });
        }
    };

    // Chat timeout functionality
    const ChatTimeout = {
        timer: null,
        
        init() {
            if (!this.shouldInitialize()) return;
            
            const timeoutValue = this.getTimeoutValue();
            if (timeoutValue) {
                this.startTimer(timeoutValue);
                this.bindActivityListeners(timeoutValue);
            }
        },
        
        shouldInitialize() {
            return vzwDL.mvo.utils.isLoggedIn() && 
                   $(Config.SELECTORS.chatBotTimeout).length > 0 && 
                   $(Config.SELECTORS.chatBotTimeout).val() !== '';
        },
        
        getTimeoutValue() {
            const timeoutVal = $(Config.SELECTORS.chatBotTimeout).val();
            return timeoutVal ? parseInt(timeoutVal) * 1000 : null;
        },
        
        startTimer(timeout) {
            console.log(`chatBotTimeOut: ${timeout}`);
            this.timer = setTimeout(() => this.handleTimeout(), timeout);
        },
        
        resetTimer(timeout) {
            if (this.timer) {
                clearTimeout(this.timer);
                this.timer = null;
            }
            this.timer = setTimeout(() => this.handleTimeout(), timeout);
        },
        
        bindActivityListeners(timeout) {
            $('body').on('mousemove keypress', () => {
                this.resetTimer(timeout);
            });
        },
        
        handleTimeout() {
            console.log("idleTimeout");
            if (this.timer) {
                clearTimeout(this.timer);
                this.timer = null;
            }
            
            const docTitle = this.getDocumentTitle();
            this.setProactiveChatData(docTitle);
            this.triggerChatWindow();
            this.handleFaqsSubFlow();
        },
        
        getDocumentTitle() {
            let docTitle = $(document).attr('title');
            const pipeIndex = docTitle.indexOf("|");
            if (pipeIndex > 0) {
                docTitle = docTitle.substring(0, pipeIndex).trim();
            }
            return docTitle;
        },
        
        setProactiveChatData(title) {
            vzdl.park = vzdl.park || {};
            vzdl.park["chatProactivePageName"] = title;
        },
        
        triggerChatWindow() {
            supportAgent.va.openChatWindowForSearch("support", "escalate_supp_proactivechat", "proactivesupport");
        },
        
        handleFaqsSubFlow() {
            if (typeof subFlow !== 'undefined' && subFlow === "faqs") {
                window.coreData = window.coreData || [];
                window.coreData.push({
                    task: "emit",
                    event: "sendData",
                    params: {
                        name: "reactive_supp_Bot",
                        events: "event234"
                    }
                });
            }
        }
    };

    // Event handlers
    const EventHandlers = {
        handleFullscreenButton(event) {
            const $button = $(event.currentTarget);
            const $container = $button.closest(Config.SELECTORS.s7Container);
            const $videoPlayer = $button.closest(Config.SELECTORS.s7VideoPlayer);
            const isNormalMode = $container.attr('mode') === 'normal';
            
            if (isNormalMode) {
                $videoPlayer.removeClass(Config.CSS_CLASSES.fullscreenMode);
            } else {
                $videoPlayer.addClass(Config.CSS_CLASSES.fullscreenMode);
            }
        },
        
        handleTabClick() {
            setTimeout(() => {
                handleAutoExpand();
            }, Config.TIMEOUTS.tabClick);
        },
        
        handleHashChange() {
            handleHash();
        }
    };

    // Initialize event listeners
    const initializeEventListeners = () => {
        // Hash change handler
        $(window).on('hashchange', EventHandlers.handleHashChange);
        
        // Tab click handler
        $(document).on('click', Config.SELECTORS.tabsTab, EventHandlers.handleTabClick);

        // Fullscreen button handler
        $(document).on('click', Config.SELECTORS.fullscreenButton, EventHandlers.handleFullscreenButton);
    };

    // Initialize the application
    const init = () => {
        // Handle initial hash
        handleHash();
        
        // Handle auto-expand after initial load
        setTimeout(() => {
            handleAutoExpand();
        }, Config.TIMEOUTS.autoExpand);
        
        // Initialize chat timeout functionality
        ChatTimeout.init();
        
        // Setup event listeners
        initializeEventListeners();
        
        // Expose public API if needed
        window.AnchorLinkModule = {
            handleQuickQuestionBtn,
            handleHash,
            jumpToAnchorTag
        };
    };

    // Start the application
    init();

});

/**
 * Android Swiper Fix - Prevents duplicate slide bars
 * Addresses PRODDEF-65158: Double slide bar issue on Android devices
 */
(function() {
    'use strict';
    var ua = navigator.userAgent || "";
    var isAndroid = /Android/i.test(ua);
    (function applyTabStripFixClass() {
        if (/Android/i.test(ua)) {
            document.documentElement.classList.add("support-tabstrip-compact");
        }
    })();
    var swiperInstances = new Map();
    var originalSwiper = null;

    console.log('[Android Swiper Fix] Initializing for platform:', isAndroid ? 'Android' : 'Other');

    // Only apply fixes on Android devices
    if (!isAndroid) {
        return;
    }

    var swiperWaitAttempts = 0;
    var SWIPER_WAIT_MAX = 50;

    // Wait for Swiper to be available (cap retries — pages without Swiper never load it)
    function initAndroidSwiperFix() {
        if (!window.Swiper) {
            swiperWaitAttempts += 1;
            if (swiperWaitAttempts > SWIPER_WAIT_MAX) {
                return;
            }
            setTimeout(initAndroidSwiperFix, 100);
            return;
        }

        console.log('[Android Swiper Fix] Applying Android-specific Swiper overrides');
        originalSwiper = window.Swiper;

        // Override Swiper constructor
        window.Swiper = function(container, config) {
            var element = typeof container === 'string' ?
                document.querySelector(container) : container;

            if (!element) {
                console.log('[Android Swiper Fix] Container not found:', container);
                return null;
            }

            // Generate unique key for this container
            var containerId = element.id ||
                (element.className + '_' + element.getBoundingClientRect().top);

            // Prevent duplicate initialization
            if (swiperInstances.has(containerId)) {
                console.log('[Android Swiper Fix] Swiper already initialized for:', containerId);
                return swiperInstances.get(containerId);
            }

            console.log('[Android Swiper Fix] Initializing new Swiper for:', containerId);

            // Android-specific configuration to prevent double slide bars
            var androidConfig = Object.assign({}, config || {}, {
                // Disable problematic features that cause duplicates on Android
                loop: false, // Prevents duplicate slides
                loopedSlides: 0,
                loopAdditionalSlides: 0,

                // Optimize touch handling for Android WebView
                touchStartPreventDefault: false,
                touchStartForcePreventDefault: false,
                touchMoveStopPropagation: false,

                // Optimize performance for Android WebView
                speed: 300,
                virtualTranslate: false,
                watchSlidesProgress: false,
                watchSlidesVisibility: false,

                // Scrollbar configuration to prevent duplicates
                scrollbar: config && config.scrollbar ?
                    Object.assign({}, config.scrollbar, {
                        hide: false,
                        draggable: true,
                        snapOnRelease: true,
                        // Ensure only one scrollbar instance
                        el: element.querySelector('.swiper-scrollbar') ||
                            (config.scrollbar.el || '.swiper-scrollbar')
                    }) : false,

                // Pagination configuration to prevent duplicates
                pagination: config && config.pagination ?
                    Object.assign({}, config.pagination, {
                        clickable: true,
                        // Ensure only one pagination instance
                        el: element.querySelector('.swiper-pagination') ||
                            (config.pagination.el || '.swiper-pagination')
                    }) : false
            });

            try {
                var instance = new originalSwiper(element, androidConfig);
                swiperInstances.set(containerId, instance);

                // Add cleanup on destroy
                var originalDestroy = instance.destroy;
                instance.destroy = function() {
                    swiperInstances.delete(containerId);
                    console.log('[Android Swiper Fix] Swiper destroyed:', containerId);
                    return originalDestroy.apply(this, arguments);
                };

                console.log('[Android Swiper Fix] Swiper successfully initialized:', containerId);
                return instance;

            } catch (error) {
                console.error('[Android Swiper Fix] Error initializing Swiper:', error);
                swiperInstances.delete(containerId);
                return null;
            }
        };

        // Copy static methods and properties from original Swiper
        Object.setPrototypeOf(window.Swiper, originalSwiper);
        Object.assign(window.Swiper, originalSwiper);

        // Preserve prototype chain
        window.Swiper.prototype = originalSwiper.prototype;
    }

    // Clean up duplicate swiper elements that might already exist
    function cleanupDuplicateSwiperElements() {
        // Remove duplicate pagination elements
        var paginationElements = document.querySelectorAll('.swiper-pagination');
        if (paginationElements.length > 1) {
            console.log('[Android Swiper Fix] Found', paginationElements.length, 'pagination elements, removing duplicates');
            for (var i = 1; i < paginationElements.length; i++) {
                paginationElements[i].style.display = 'none';
            }
        }

        // Remove duplicate scrollbar elements
        var scrollbarElements = document.querySelectorAll('.swiper-scrollbar');
        if (scrollbarElements.length > 1) {
            console.log('[Android Swiper Fix] Found', scrollbarElements.length, 'scrollbar elements, removing duplicates');
            for (var i = 1; i < scrollbarElements.length; i++) {
                scrollbarElements[i].style.display = 'none';
            }
        }

        // Clean up duplicate slide elements
        var duplicateSlides = document.querySelectorAll('.swiper-slide-duplicate-prev, .swiper-slide-duplicate-next');
        if (duplicateSlides.length > 0) {
            console.log('[Android Swiper Fix] Hiding', duplicateSlides.length, 'duplicate slide elements');
            duplicateSlides.forEach(function(slide) {
                slide.style.display = 'none';
            });
        }
    }

    // Initialize fix when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initAndroidSwiperFix();
            setTimeout(cleanupDuplicateSwiperElements, 500);
        });
    } else {
        initAndroidSwiperFix();
        setTimeout(cleanupDuplicateSwiperElements, 100);
    }

    // Also clean up after page load to catch any late-loading components
    window.addEventListener('load', function() {
        setTimeout(cleanupDuplicateSwiperElements, 1000);
    });

    // Expose utilities for debugging
    window.AndroidSwiperFix = {
        isAndroid: isAndroid,
        instances: swiperInstances,
        cleanup: cleanupDuplicateSwiperElements,
        debug: function() {
            console.log('[Android Swiper Fix] Debug Info:', {
                isAndroid: isAndroid,
                instanceCount: swiperInstances.size,
                instances: Array.from(swiperInstances.keys()),
                paginationElements: document.querySelectorAll('.swiper-pagination').length,
                scrollbarElements: document.querySelectorAll('.swiper-scrollbar').length,
                duplicateSlides: document.querySelectorAll('.swiper-slide-duplicate-prev, .swiper-slide-duplicate-next').length
            });
        }
    };

})();
jQuery(function ($) {
    'use strict';



    /**
     * Transforms the API response into the travel data format.
     * Derives planName from boolean flags and maps device details accordingly.
     * Filters out devices with no active international plan.
     */
    function transformTravelAPIResponse(apiResponse) {
        const detailsList = apiResponse?.body?.internationalDetailsList || [];
        return detailsList.map(function (detail) {
            let planName = '';
            let travelPassBankDay = null;

            if (detail.isTravelPassBankActive) {
                planName = 'TravelPass Bank';
                travelPassBankDay = parseInt(detail.travelPassRemainingDays, 10) || 0;
            } else if (detail.isTravelPassPlanActive) {
                planName = 'TravelPass';
            } else if (detail.isPayAsYouGoActive) {
                planName = 'Pay As You Go';
            } else if (detail.isInternationalMonthlyPlanActive) {
                planName = 'International Monthly Plan';
            } else if (detail.isUnlimitedUltimatePlanActive) {
                planName = 'Unlimited Ultimate plan';
            }

            return {
                phoneName: detail.deviceName,
                planName: planName,
                travelPassBankDay: travelPassBankDay
            };
        }).filter(function (item) {
            return item.planName !== '';
        });
    }

    const TravelPodHeaderText = 'Your current plan details';

    /**
     * SidePod Widget Module - Handles GenAI billing insights and EWT functionality
     */
    const SidePodWidget = {
        // Configuration constants
        CONFIG: {
            SELECTORS: {
                genAiTitle: '.tsa_seo_genai_pod_placeholder .genai_title',
                genAiExplain: '.tsa_seo_genai_pod_placeholder .genai_explain .genai_content',
                genAiDisclaimer: '.tsa_seo_genai_pod_placeholder .genai_disclaimer span',
                genAiSubtitle: '.tsa_seo_genai_ewt_placeholder .genai_subtitle span',
                genAiPlaceholder: '.tsa_seo_genai_pod_placeholder',
                travelPhoneDropdown: '#travelPhoneDropdown',
                travelTitle: '.tsa_seo_travel_pod_placeholder .genai_title',
                travelExplain: '.tsa_seo_travel_pod_placeholder .genai_explain .genai_content',
                travelDisclaimer: '.tsa_seo_travel_pod_placeholder .genai_disclaimer span',
                travelPlaceholder: '.tsa_seo_travel_pod_placeholder',
                travelEwtPlaceholder: '.tsa_seo_travel_ewt_placeholder',
                needHelpButton: '#needHelpLink',
                travelGobackLink: '#travelGoback a',
                genAiHotSpot: '.tsa_seo_genai_hotspot',
                ewtPlaceholder: '.tsa_seo_genai_ewt_placeholder',
                oneDRdBanner: '.oneDRd_banner',
                tsaSeoGrid1: '.tsa_seo_grid1',
                enableGenAiWidget: '#enableGenAiWidget',
                enableInternationalTravelWidget: '#enableInternationalTravelWidget',
                enableHotspotWidget: '#enableHotspotWidget',
                enablePtpWidget: '.ptp-in-tsa',
                disableAiTopQuestion: '#disableAiTopQuestion',
                disableEwt: '#disableEwt',
                promoQuestionsDiv: '#promoQuestions',
                chatButton: '#chatButton',
                chatLink: '#chatagent a',
                gobackLink: '#goback a',
                learnMoreButton: '#learnMoreLink',
                genAiThumbUp: '#genai_thumb_up',
                genAiThumbDown: '#genai_thumb_down',
                topQuestionItem: '.top-question-item',
                topQuestionExpand: '.top-question-expand',
                tsaSeoSignin: '.tsa_seo_signin',
                accordion: '.i-am-accordion'
            },

            API_ENDPOINTS: {
                BILL_INSIGHTS: '/digital/nsa/secure/gw/bill/billview/bill_insights',
                BILL_SUMMARY: '/digital/nsa/secure/gw/bill/nextgen/viewbill/summary',
                HOT_SPOT: '/digital/nsa/secure/gw/support/getMobileHotspotUsageData',
                EWT: '/digital/nsa/secure/gw/contactus/ngd/getEstimatedWaitTime',
                REPORT: '/digital/nsa/nos/gw/bill/nbs/logging',
                TOP_QUESTIONS: '/digital/nsa/nos/gw/support/getAgenticStreamData',
                PTP_URL: '/digital/nsa/secure/gw/payment/paybill/oneclick/apOneClick',
                INTERNATIONAL_TRAVEL: '/digital/nsa/secure/gw/intl/retrieveInternationalData'
            },

            CONSTANTS: {
                CHANNEL_ID: 'VZW-DOTCOM',
                ACTIVE_POD_CLASS: 'tsa_seo_genai_pod',
                ACTIVE_TRAVEL_POD_CLASS: 'tsa_seo_travel_pod',
                ACTIVE_EWT_CLASS: 'tsa_seo_ewt_pod',
                ACTIVE_TRAVEL_EWT_CLASS: 'tsa_seo_travel_ewt_pod',
                RESIZE_DEBOUNCE_DELAY: 250,
                ENTER_KEY_CODE: 13
            },

            ICONS: {
                THUMB_UP: '<svg version="1.1" id="Vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.6 21.6" style="enable-background:new 0 0 21.6 21.6;" xml:space="preserve"><path d="M6.63948,19.79963H2.61152V8.3896h4.02795V19.79963z M16.95649,18.69563c1.12,0,2.03198-0.91199,2.03198-2.03198v-0.32703	h-4.48297v-1.104h4.48297v-1.20801h-4.48297v-1.104h4.48297v-1.38397h-4.48297v-1.104h4.48297V10.1186c0.00104-1.12097-0.91199-2.03198-2.03198-2.03198h-5.51202V3.64363c0-0.53802-0.23395-1.047-0.64294-1.39703C10.2505,1.77461,9.49647,1.66664,8.83449,1.97261c-0.65784,0.30206-1.06732,0.9411-1.07001,1.66412v15.0589H16.95649z"/></svg>',
                THUMB_DOWN: '<svg version="1.1" id="Vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.6 21.6" style="enable-background:new 0 0 21.6 21.6;" xml:space="preserve"><path d="M13.86152,2.904v10.30597h-0.0025v4.74402c0,0.72504-0.409,1.36401-1.07001,1.66998c-0.255,0.11804-0.52399,0.17603-0.789,0.17603c-0.42999,0-0.85199-0.15198-1.19904-0.44598c-0.41296-0.35101-0.64899-0.86102-0.64899-1.40002v-4.44H4.589c-1.12903,0-2.047-0.91199-2.047-2.034v-0.31h4.52002v-1.10797H2.542V8.68098h4.52002V7.57301H2.542v-1.203h4.52002V5.261H2.542V4.938c0-1.12201,0.91797-2.034,2.047-2.034H13.86152zM14.98652,13.20997h4.07049V1.8h-4.07049V13.20997z"/></svg>'
            }
        },

        // State management
        state: {
            llmInsightText: '',
            llmTravelInsightText: '',
            currentTravelPlanName: '',
            resizeTimeout: null,
            cachedElements: {},
            lastEwtFetchTime: null,
            billSummaryData: null,
            travelSummaryData: null
        },

        // Initialize cached DOM elements
        cacheElements() {
            const selectors = this.CONFIG.SELECTORS;
            this.state.cachedElements = {
                $enableGenAiWidget: $(selectors.enableGenAiWidget),
                $enableInternationalTravelWidget: $(selectors.enableInternationalTravelWidget),
                $enableHotspotWidget: $(selectors.enableHotspotWidget),
                $enablePtpWidget: $(selectors.enablePtpWidget),
                $genAiHotSpot: $(selectors.genAiHotSpot),
                $genAiPlaceholder: $(selectors.genAiPlaceholder),
                $travelPlaceholder: $(selectors.travelPlaceholder),
                $travelEwtPlaceholder: $(selectors.travelEwtPlaceholder),
                $ewtPlaceholder: $(selectors.ewtPlaceholder),
                $disableAiTopQuestion: $(selectors.disableAiTopQuestion),
                $disableEwt: $(selectors.disableEwt),
                $promoQuestionsDiv: $(selectors.promoQuestionsDiv),
            };
        },
        // API service methods
        api: {
            /**
             * Makes AJAX request with standard configuration
             */
            makeRequest(url, data, successCallback, errorCallback, dataType = 'json') {
                return $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: dataType,
                    contentType: 'application/json',
                    headers: { "channelId": SidePodWidget.CONFIG.CONSTANTS.CHANNEL_ID },
                    data: JSON.stringify(data)
                }).done(successCallback).fail(errorCallback);
            },
            makeGetRequest(url, data, successCallback, errorCallback, dataType = 'json') {
                return $.ajax({
                    url: url,
                    method: 'GET',
                    dataType: dataType,
                    contentType: 'application/json',
                    headers: { "channelId": SidePodWidget.CONFIG.CONSTANTS.CHANNEL_ID },
                    data: JSON.stringify(data)
                }).done(successCallback).fail(errorCallback);
            },

            /**
             * Fetches Promise to Pay from API
             */
            promiseToPayTile() {
                const requestData = {
                    "pageContext": "support",
                    "isMock": false
                };

                return this.makeGetRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.PTP_URL,
                    requestData,
                    (data) => SidePodWidget.handlers.handlePromiseToPayTileSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handlePromiseToPayTileError(jqXHR, textStatus, errorThrown)
                );
            },

            fetchHotSpot() {
                const requestData = {
                    "pageContext": "support",
                    "isMock": false
                };

                return this.makeGetRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.HOT_SPOT,
                    requestData,
                    (data) => SidePodWidget.handlers.handleHotSpotTileSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleHotSpotTileError(jqXHR, textStatus, errorThrown)
                );
            },

            /**
             * Fetches billing insights from API
             */
            fetchBillInsights() {
                console.log("fetchBillInsights managePaymentArrangement");
                const requestData = {
                    "pageContext": "support",
                    "isMock": false
                };

                return this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.BILL_INSIGHTS,
                    requestData,
                    (data) => SidePodWidget.handlers.handleBillInsightsSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleBillInsightsError(jqXHR, textStatus, errorThrown)
                );
            },

            // NEW: standalone bill summary fetch (for optional use / debugging)
            fetchBillSummary() {
                const requestData = {
                    "pageContext": "support",
                    "isMock": false
                };
                return this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.BILL_SUMMARY,
                    requestData,
                    (data) => SidePodWidget.handlers.handleBillSummarySuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleBillSummaryError(jqXHR, textStatus, errorThrown)
                );
            },

            // NEW: concurrent fetch for insights + summary
            fetchBillInsightsAndSummary() {
                const requestData = {
                    "pageContext": "support",
                    "isMock": false
                };
                const insightsReq = this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.BILL_INSIGHTS,
                    requestData,
                    function () { },
                    function () { }
                );
                const summaryReq = this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.BILL_SUMMARY,
                    requestData,
                    function () { },
                    function () { }
                );
                return $.when(insightsReq, summaryReq)
                    .done(function (insightsResp, summaryResp) {
                        const insightsData = insightsResp[0];
                        const summaryData = summaryResp[0];
                        SidePodWidget.handlers.handleBillCombinedSuccess(insightsData, summaryData);
                    })
                    .fail(function () {
                        SidePodWidget.handlers.handleBillCombinedError();
                    });
            },

            /**
             * Fetches international travel data and renders the travel phone dropdown
             */
            fetchInternationalTravelData() {
                return this.makeGetRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.INTERNATIONAL_TRAVEL,
                    {},
                    (data) => SidePodWidget.handlers.handleInternationalTravelSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleInternationalTravelError(jqXHR, textStatus, errorThrown)
                );
            },

            /**
             * Fetches estimated wait time from API
             */
            fetchEstimatedWaitTime() {
                const date = new Date();
                const requestData = {
                    localdayofweek: date.toLocaleString(window.navigator.language, { weekday: 'long' }),
                    localtimezoneoffset: date.getTimezoneOffset(),
                    localtime: date.toLocaleTimeString(window.navigator.language, {
                        hourCycle: 'h23',
                        hour: '2-digit',
                        minute: '2-digit'
                    })
                };

                return this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.EWT,
                    requestData,
                    (data) => SidePodWidget.handlers.handleEwtSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleEwtError(jqXHR, textStatus, errorThrown)
                );
            },

            /**
             * Submits widget rating feedback
             */
            submitRating(eventId) {
                const requestData = {
                    "channelName": "VZW-DOTCOM",
                    "pageName": vzdl.page.name,
                    "apiResponse": SidePodWidget.state.llmInsightText,
                    "eventId": eventId,
                    "interfaceName": "BILLING_SLM_GENAI_FEEDBACK"
                };

                return this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.REPORT,
                    requestData,
                    (data) => console.log("widgetRating response:", data),
                    (jqXHR, textStatus, errorThrown) => console.error("Error widgetRating:", textStatus, errorThrown, jqXHR.responseText),
                    'text'
                );
            },

            fetchTopQuestions() {
                let seoUrl = window.location.pathname.replace("/support/", "").toLowerCase();
                seoUrl = seoUrl.substring(0, seoUrl.indexOf("/")).replaceAll('-', '');
                const requestData = {
                    "pageContext": seoUrl
                };

                return this.makeRequest(
                    SidePodWidget.CONFIG.API_ENDPOINTS.TOP_QUESTIONS,
                    requestData,
                    (data) => SidePodWidget.handlers.handleTopQuestionsSuccess(data),
                    (jqXHR, textStatus, errorThrown) => SidePodWidget.handlers.handleTopQuestionsError(jqXHR, textStatus, errorThrown)
                );
            }
        },

        // Response handlers
        handlers: {
            handlePromiseToPayTileSuccess(data) {
                const managePaymentArrangement = data?.data?.availablePaths.includes('setupSplitPayment') && data?.data?.availablePaths.includes('setupPaymentArrangement');
                const { $enablePtpWidget, $enableGenAiWidget, $enableInternationalTravelWidget } = SidePodWidget.state.cachedElements;
                if (managePaymentArrangement) {
                    $enablePtpWidget.show();
                    SidePodWidget.ui.adjustPodPosition();
                    SidePodWidget.ui.setupResizeListener();
                    SidePodWidget.utils.fireNotification($('.ptp-in-desc p b').text().replace(/['"]/g, ''));
                } else {
                    $(SidePodWidget.CONFIG.SELECTORS.tsaSeoSignin).remove();
                    if ($enableGenAiWidget.length > 0) {
                        SidePodWidget.api.fetchBillInsightsAndSummary();
                    } else if ($enableInternationalTravelWidget.length > 0) {
                        console.log("International travel widget enabled, fetching data...");
                        SidePodWidget.api.fetchInternationalTravelData();
                    }
                }
            },

            handlePromiseToPayTileError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching promiseToPayTileData:", textStatus, errorThrown, jqXHR.responseText);
                $(".ptp-in-tsa").remove();
            },

            /**
             * Handles successful international travel data response.
             * Transforms the API data, builds the phone dropdown, and renders nudges.
             */
            handleInternationalTravelSuccess(data) {
                const travelDevices = transformTravelAPIResponse(data);

                const $container = $(SidePodWidget.CONFIG.SELECTORS.travelPhoneDropdown);
                const $trigger = $container.find('.travel-phone-dropdown__trigger');
                const $selected = $container.find('.travel-phone-dropdown__selected');
                const $list = $container.find('.travel-phone-dropdown__list');

                const renderForPhone = (phoneData) => {
                    const nudges = window.TravelPlanNudges &&
                        window.TravelPlanNudges.getNudgesForPlan(phoneData.planName, phoneData.travelPassBankDay);
                    const travelInsightsData = {
                        nudges: nudges || '',
                        travelPodHeaderText: TravelPodHeaderText,
                        planName: phoneData.planName
                    };
                    SidePodWidget.handlers.handleTravelCombinedSuccess(travelInsightsData);
                };

                // If only one device, hide the dropdown and render directly
                if (travelDevices.length <= 1) {
                    $container.hide();
                    if (travelDevices.length === 1) {
                        renderForPhone(travelDevices[0]);
                    }
                    return;
                }

                // Build list items
                $list.empty();
                travelDevices.forEach(function (phone, index) {
                    const lineLabel = 'Line ' + (index + 1);
                    const $item = $('<li>')
                        .addClass('travel-phone-dropdown__item')
                        .attr('role', 'option')
                        .attr('data-index', index)
                        .attr('data-track', '{"type":"link","name":"' + lineLabel + '"}')
                        .html('<span class="travel-phone-dropdown__check"></span>' + $('<span/>').text(phone.phoneName).html());
                    $list.append($item);
                });

                // Update trigger label and checkmark
                const selectPhone = (index) => {
                    const phone = travelDevices[index];
                    const lineLabel = 'Line ' + (index + 1);
                    $selected.text(phone.phoneName);
                    $trigger.attr('data-track', '{"type":"link","name":" Dropdown Clicked "}')
                    $list.find('.travel-phone-dropdown__item').each(function () {
                        const isSelected = parseInt($(this).attr('data-index')) === index;
                        $(this).toggleClass('is-selected', isSelected);
                    });
                    renderForPhone(phone);
                };

                // Default selection
                selectPhone(0);

                // Enable scroll on the list when device count exceeds 4
                if (travelDevices.length > 4) {
                    console.log("More than 4 travel devices, enabling scroll on dropdown");
                    const measuredHeight = $list.find('.travel-phone-dropdown__item').first().outerHeight(true);
                    const itemHeight = (measuredHeight && measuredHeight >= 10) ? measuredHeight : 48;
                    $list.css({
                        'max-height': (itemHeight * 4) + 'px',
                        'overflow-y': 'auto'
                    });
                } else {
                    $list.css({
                        'max-height': '',
                        'overflow-y': ''
                    });
                }

                // Toggle open/close
                $trigger.off('click.travelPhone').on('click.travelPhone', function (e) {
                    e.stopPropagation();
                    const isOpen = $container.hasClass('is-open');
                    $container.toggleClass('is-open', !isOpen);
                    $trigger.attr('aria-expanded', !isOpen);
                });

                // Item selection
                $list.off('click.travelPhone').on('click.travelPhone', '.travel-phone-dropdown__item', function () {
                    const index = parseInt($(this).attr('data-index'));
                    selectPhone(index);
                    $container.removeClass('is-open');
                    $trigger.attr('aria-expanded', 'false');
                });

                // Close on outside click
                $(document).off('click.travelPhoneOutside').on('click.travelPhoneOutside', function () {
                    $container.removeClass('is-open');
                    $trigger.attr('aria-expanded', 'false');
                });
            },

            handleInternationalTravelError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching retrieveInternationalData:", textStatus, errorThrown, jqXHR.responseText);
                SidePodWidget.ui.hideTravelInsights();
            },

            handleBillInsightsSuccess(data) {
                const billSection = data?.body?.vegasAuraBillExplanationSection;
                const insightsText = billSection?.billExplanationNudges ?? '';
                const titleText = billSection?.headerText ?? '';
                const disclaimerText = billSection?.disclamierAIText ?? '';

                if (insightsText) {
                    SidePodWidget.state.llmInsightText = insightsText;
                    SidePodWidget.ui.updateBillingInsights(titleText, insightsText, disclaimerText);
                    SidePodWidget.ui.setupResizeListener();
                } else {
                    console.log("No billing insights summary found in the response.");
                    SidePodWidget.ui.hideBillingInsights();
                }
            },

            handleBillInsightsError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching getSupportBillingInsightsSummary:", textStatus, errorThrown, jqXHR.responseText);
                SidePodWidget.ui.hideBillingInsights();
            },

            handleHotSpotTileSuccess(data) {
                if ('hotspot'=== data?.body?.dataType.toLowerCase() && 'n' !== data?.body?.dataCategory.toLowerCase()) {
                    SidePodWidget.ui.updateHotSpot(data?.body);
                    SidePodWidget.ui.setupResizeListener();
                } else {
                    console.log("No hot spot plan found in the response.");
                    SidePodWidget.ui.hideHotSpotTile();
                }
            },

            handleHotSpotTileError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching getSupportHotSpotSummary:", textStatus, errorThrown, jqXHR.responseText);
                SidePodWidget.ui.hideHotSpotTile();
            },

            // Added: standalone bill summary handlers (used by concurrent flow as data store)
            handleBillSummarySuccess(data) {
                SidePodWidget.state.billSummaryData = data;
            },
            handleBillSummaryError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching bill summary:", textStatus, errorThrown, jqXHR.responseText);
            },

            // Added: combined handlers for concurrent insights + summary
            handleBillCombinedSuccess(insightsData, summaryData) {
                SidePodWidget.state.billSummaryData = summaryData;
                if (summaryData?.body?.headerSection?.header.toLowerCase().includes('preparing')) {
                    console.log("Don't show bill insight, not ready yet:"+summaryData?.body?.headerSection?.header);
                    SidePodWidget.ui.hideBillingInsights();
                }else{
                    const billSection = insightsData?.body?.vegasAuraBillExplanationSection;
                    const insightsText = billSection?.billExplanationNudges ?? '';
                    const titleText = billSection?.headerText ?? '';
                    const disclaimerText = billSection?.disclamierAIText ?? '';
                    if (insightsText) {
                        SidePodWidget.state.llmInsightText = insightsText;
                        SidePodWidget.ui.updateBillingInsights(titleText, insightsText, disclaimerText);
                        SidePodWidget.ui.setupResizeListener();
                    } else {
                        console.log("No billing insights summary found in insightsData response.");
                        SidePodWidget.ui.hideBillingInsights();
                    }
                }
            },
            handleBillCombinedError() {
                console.error("handleBillCombinedError: billing summary/requests failed");
                SidePodWidget.ui.hideBillingInsights();
            },

            // Added: standalone travel summary handlers (used by concurrent flow as data store)
            handleTravelSummarySuccess(data) {
                SidePodWidget.state.travelSummaryData = data;
            },
            handleTravelSummaryError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching travel summary:", textStatus, errorThrown, jqXHR.responseText);
            },

            // Added: combined handlers for concurrent travel insights + summary
            handleTravelCombinedSuccess(travelInsightsData) {
                const insightsText = travelInsightsData?.nudges ?? '';
                const titleText = travelInsightsData?.travelPodHeaderText ?? '';
                const planName = travelInsightsData?.planName ?? '';
                if (insightsText) {
                    SidePodWidget.state.llmTravelInsightText = insightsText;
                    SidePodWidget.ui.updateTravelInsights(titleText, insightsText, planName);
                    SidePodWidget.ui.setupResizeListener();
                } else {
                    console.log("No travel insights summary found in travelInsightsData response.");
                    SidePodWidget.ui.hideTravelInsights();
                }
            },
            handleTravelCombinedError() {
                console.error("handleTravelCombinedError: travel summary/requests failed");
                SidePodWidget.ui.hideTravelInsights();
            },

            handleEwtSuccess(data) {
                console.log("getEstimatedWaitTime response:", data);

                const waitTimes = data?.body?.waitTimes ?? [];
                const careWaitTime = waitTimes.find(item => item.channel === 'care');

                if (careWaitTime) {
                    SidePodWidget.ui.updateEwtDisplay(careWaitTime.fulText);
                } else {
                    console.log("No careWaitTime found in the response.");
                }
            },

            handleEwtError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching getEstimatedWaitTime:", textStatus, errorThrown, jqXHR.responseText);
            },

            handleTopQuestionsSuccess(data) {
                console.log("fetchTopQuestions response:", data);
                const { $promoQuestionsDiv } = SidePodWidget.state.cachedElements;
                let count = 0;
                if (data?.body?.topClickedFAQs && data.body.topClickedFAQs.length > 0) {
                    data.body.topClickedFAQs.forEach(faq => {
                        let questionStr = faq.question;
                        let found = false;
                        $(SidePodWidget.CONFIG.SELECTORS.accordion).each(function () {
                            const questionOrig = $(this).find('h2').text();
                            const cleanedOrig = questionOrig.replace(/\W/g, '').toLowerCase();
                            const cleanedFaq = faq.question.replace(/\W/g, '').toLowerCase();
                            if (cleanedOrig === cleanedFaq) {
                                questionStr = questionOrig;
                                found = true;
                            }
                        });

                        if(found){
                            const faqElement = $('<button>').addClass('top-question-item').text(questionStr).attr('data-track', '{"type":"link","name":"top question", "data":{"target":{"message":"' + faq.question + '"}}}');
                            count++;
                            if (count > 2) {
                                faqElement.css('display', 'none');
                            }
                            $promoQuestionsDiv.append(faqElement);
                        }
                    });
                    if (count > 2) {
                        const expandLink = $('<a>').attr('href', 'javascript:void(0)').addClass('top-question-expand').text('Suggested questions?');
                        $promoQuestionsDiv.append(expandLink);
                    }
                    $promoQuestionsDiv.show();
                    SidePodWidget.ui.adjustPodPosition();
                }
            },

            handleTopQuestionsError(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching fetchTopQuestions:", textStatus, errorThrown, jqXHR.responseText);
            }
        },

        // UI management methods
        ui: {
            /**
             * Updates billing insights UI with fetched data
             */
            updateBillingInsights(titleText, insightsText, disclaimerText) {
                const selectors = SidePodWidget.CONFIG.SELECTORS;
                this.showBillingInsights();

                const $title = $(selectors.genAiTitle);
                const $explain = $(selectors.genAiExplain);
                const $disclaimer = $(selectors.genAiDisclaimer);

                const htmlOutput = this.formatInsightsText(insightsText);

                $title.text(titleText);
                $explain.html(htmlOutput);

                if (disclaimerText) {
                    $disclaimer.text(disclaimerText);
                }

                this.adjustPodPosition();
                SidePodWidget.utils.fireNotification(titleText);
            },

            /**
             * Formats insights text with proper HTML structure
             */
            formatInsightsText(insightsText) {
                let htmlOutput = '';
                const lines = insightsText.replace(/\\?\//g, '/').split(/\r?\n|\\n/);
                let inListMode = false;

                lines.forEach(line => {
                    const trimmedLine = line.trim();
                    let sanitizedLine = trimmedLine ? $('<div/>').text(trimmedLine).html() : '';
                    // Convert **text** markers to <b>text</b>
                    sanitizedLine = sanitizedLine.replace(/\*\*(.+?)\*\*/g, '<b>$1</b>');

                    if (inListMode) {
                        if (trimmedLine) {
                            htmlOutput += `<li>${sanitizedLine}</li>`;
                        }
                    } else {
                        htmlOutput += sanitizedLine;
                        htmlOutput += '<br/>';

                        if (trimmedLine.endsWith(':')) {
                            htmlOutput += '<ul>';
                            inListMode = true;
                        } else {
                            htmlOutput += '<br/>';
                        }
                    }
                });

                if (inListMode) {
                    htmlOutput += '</ul>';
                }

                return htmlOutput;
            },

            /**
             * Shows billing insights widget
             */
            showBillingInsights() {
                const { $genAiPlaceholder } = SidePodWidget.state.cachedElements;
                $genAiPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).show();
            },

            /**
             * Hides billing insights widget
             */
            hideBillingInsights() {
                const { $genAiPlaceholder } = SidePodWidget.state.cachedElements;
                $genAiPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).hide();
            },

            /**
             * Formats travel insights text — each newline-separated line becomes a bullet point
             */
            formatTravelInsightsText(insightsText) {
                let htmlOutput = '<ul>';
                const lines = insightsText.replace(/\\?\//g, '/').split(/\r?\n|\\n/);

                lines.forEach(line => {
                    const trimmedLine = line.trim();
                    if (trimmedLine) {
                        let sanitizedLine = $('<div/>').text(trimmedLine).html();
                        // Convert **text** markers to <b>text</b>
                        sanitizedLine = sanitizedLine.replace(/\*\*(.+?)\*\*/g, '<b>$1</b>');
                        htmlOutput += `<li>${sanitizedLine}</li>`;
                    }
                });

                htmlOutput += '</ul>';
                return htmlOutput;
            },

            /**
             * Updates travel insights UI with fetched data
             */
            updateTravelInsights(titleText, insightsText, planName) {
                const selectors = SidePodWidget.CONFIG.SELECTORS;
                this.showTravelInsights();

                const $title = $(selectors.travelTitle);
                const $explain = $(selectors.travelExplain);

                const htmlOutput = this.formatTravelInsightsText(insightsText);

                $title.text(titleText);
                $explain.html(htmlOutput);

                this.adjustPodPosition();
                SidePodWidget.state.currentTravelPlanName = 'widget:intl roaming:' + (planName || 'travel insights widget');
                //SidePodWidget.utils.fireNotification(titleText);
                SidePodWidget.utils.fireOpenView(SidePodWidget.CONFIG.SELECTORS.travelPlaceholder, SidePodWidget.state.currentTravelPlanName);
            },

            /**
             * Shows travel insights widget
             */
            showTravelInsights() {
                const { $travelPlaceholder } = SidePodWidget.state.cachedElements;
                $travelPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_POD_CLASS).show();
            },

            /**
             * Hides travel insights widget
             */
            hideTravelInsights() {
                const { $travelPlaceholder } = SidePodWidget.state.cachedElements;
                $travelPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_POD_CLASS).hide();
            },

            updateHotSpot(spotData) {
                const { $genAiHotSpot} = SidePodWidget.state.cachedElements;

                const totalAllowance = spotData.totalAllowance;
                const usedAllowance = spotData.usedAllowance;
                const barPercent = spotData.barPercent;
                const daysSinceLastBillingCycle = spotData.daysSinceLastBillingCycle;
                const GBUsed = (usedAllowance + spotData.GBUsed) || '0';

                const threshold = parseInt($genAiHotSpot.attr('data-threshold'));
                let percentNum = parseFloat(barPercent);
                if (percentNum > threshold) {
                    $genAiHotSpot.find('#gbUsed').text(GBUsed);
                    $genAiHotSpot.find('#daysUsed').text(daysSinceLastBillingCycle);
                    $genAiHotSpot.find('.actual-usage').text(usedAllowance+'GB');
                    $genAiHotSpot.find('.limit').text(totalAllowance+'GB');
                    $genAiHotSpot.find('.usage-progress-bar-fill').css('width', `${barPercent}%`);
                    
                    this.adjustPodPosition();
                    $genAiHotSpot.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).show();

                    SidePodWidget.utils.fireOpenView(SidePodWidget.CONFIG.SELECTORS.genAiHotSpot, 'hotspot data widget');
                }
            },

            /**
             * Hides hot spot tile
             */
            hideHotSpotTile() {
                const { $genAiHotSpot } = SidePodWidget.state.cachedElements;
                $genAiHotSpot.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).hide();
            },
            /**
             * Updates EWT display
             */
            updateEwtDisplay(careWaitTime) {
                $(SidePodWidget.CONFIG.SELECTORS.genAiSubtitle).text(careWaitTime);
            },

            /**
             * Shows EWT widget and hides billing insights
             */
            showEwtWidget() {
                const { $genAiPlaceholder, $ewtPlaceholder, $disableEwt } = SidePodWidget.state.cachedElements;

                $genAiPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).hide();

                $ewtPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_EWT_CLASS).show();

                if(!$disableEwt.length){
                    // Only fetch EWT if last fetch was more than 5 minutes ago
                    const currentTime = Date.now();
                    const fiveMinutesInMs = 5 * 60 * 1000; // 5 minutes in milliseconds

                    if (!SidePodWidget.state.lastEwtFetchTime ||
                        (currentTime - SidePodWidget.state.lastEwtFetchTime) > fiveMinutesInMs) {
                        SidePodWidget.api.fetchEstimatedWaitTime();
                        SidePodWidget.state.lastEwtFetchTime = currentTime;
                    }
                }else{
                    $(SidePodWidget.CONFIG.SELECTORS.genAiSubtitle).hide();
                }


                this.adjustPodPosition();
                //SidePodWidget.utils.fireNotification(titleText);
            },

            /**
             * Hides EWT widget and shows billing insights
             */
            hideEwtWidget() {
                const { $genAiPlaceholder, $ewtPlaceholder } = SidePodWidget.state.cachedElements;

                $genAiPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS).show();
                $ewtPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_EWT_CLASS).hide();
            },

            /**
             * Shows travel EWT widget and hides travel insights (triggered by "Need Help?")
             */
            showTravelEwtWidget() {
                const { $travelPlaceholder, $travelEwtPlaceholder } = SidePodWidget.state.cachedElements;

                $travelPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_POD_CLASS).hide();
                $travelEwtPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_EWT_CLASS).show();

                this.adjustPodPosition();
                SidePodWidget.utils.fireOpenView(SidePodWidget.CONFIG.SELECTORS.travelEwtPlaceholder, 'widget:speak to an agent');
            },

            /**
             * Hides travel EWT widget and restores travel insights
             */
            hideTravelEwtWidget() {
                const { $travelPlaceholder, $travelEwtPlaceholder } = SidePodWidget.state.cachedElements;

                $travelEwtPlaceholder.removeClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_EWT_CLASS).hide();
                $travelPlaceholder.addClass(SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_POD_CLASS).show();

                SidePodWidget.utils.fireOpenView(SidePodWidget.CONFIG.SELECTORS.travelPlaceholder, SidePodWidget.state.currentTravelPlanName || 'travel insights widget');
            },

            /**
             * Adjusts pod position based on screen width
             */
            adjustPodPosition() {
                this.updatePromoSummaryBackground();

                const selectors = SidePodWidget.CONFIG.SELECTORS;
                const $pod = $(`${selectors.genAiHotSpot}, ${selectors.genAiPlaceholder}.${SidePodWidget.CONFIG.CONSTANTS.ACTIVE_POD_CLASS}, ${selectors.travelPlaceholder}.${SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_POD_CLASS}, ${selectors.travelEwtPlaceholder}.${SidePodWidget.CONFIG.CONSTANTS.ACTIVE_TRAVEL_EWT_CLASS}, ${selectors.ewtPlaceholder}.${SidePodWidget.CONFIG.CONSTANTS.ACTIVE_EWT_CLASS}`);

                if ($pod.length > 0) {
                    if (window.matchMedia('(max-width: 767px)').matches) {
                        $pod.insertBefore(selectors.oneDRdBanner);
                    } else {
                        $pod.insertAfter(selectors.tsaSeoGrid1);
                    }
                }

                const { $enablePtpWidget } = SidePodWidget.state.cachedElements;

                if ($enablePtpWidget.length > 0 && $enablePtpWidget.is(':visible')) {
                    if (window.matchMedia('(max-width: 767px)').matches) {
                        $enablePtpWidget.insertBefore(selectors.oneDRdBanner);
                    } else {
                        $enablePtpWidget.insertAfter(selectors.tsaSeoGrid1);
                    }
                }
            },

            /**
             * Updates promo summary background styling
             */
            updatePromoSummaryBackground() {
                const element = document.getElementById('promoSummary');
                if (element) {
                    element.classList.add('full-length-bg');
                    element.style.setProperty('--bg-width', ($('#tl-TabletBodyContentSection').width() - 14) + 'px');
                    element.style.setProperty('--bg-height', element.parentElement.offsetHeight + 'px');
                }
            },

            /**
             * Sets up resize listener with debouncing
             */
            setupResizeListener() {
                $(window).off('resize.billInsights').on('resize.billInsights', () => {
                    clearTimeout(SidePodWidget.state.resizeTimeout);
                    SidePodWidget.state.resizeTimeout = setTimeout(
                        () => this.adjustPodPosition(),
                        SidePodWidget.CONFIG.CONSTANTS.RESIZE_DEBOUNCE_DELAY
                    );
                });
            },

            /**
             * Updates rating button states after user interaction
             */
            updateRatingButtons(eventId) {
                const selectors = SidePodWidget.CONFIG.SELECTORS;
                const $thumbButtons = $(`${selectors.genAiThumbDown}, ${selectors.genAiThumbUp}`);

                // Disable all buttons
                $thumbButtons.css("cursor", "default").off().attr('tabindex', '-1').prop("disabled", true);

                // Update the clicked button
                const isLiked = eventId === 'liked';
                const $targetButton = $(isLiked ? selectors.genAiThumbUp : selectors.genAiThumbDown);
                const iconHtml = isLiked ? SidePodWidget.CONFIG.ICONS.THUMB_UP : SidePodWidget.CONFIG.ICONS.THUMB_DOWN;

                $targetButton.attr("aria-pressed", "true").html(iconHtml);
            }
        },

        // Utility functions
        utils: {
            /**
             * Fires notification event for analytics
             */
            fireNotification(paraName) {
                window.coreData = window.coreData || [];
                window.coreData.push({
                    task: "emit",
                    event: "notify",
                    params: {
                        name: paraName
                    }
                });
            },

            fireOpenView(paraSelector, paraName) {
                window.coreData = window.coreData || [];
                window.coreData.push({
                    task: "emit",
                    event: "openView",
                    params: {
                        selector: paraSelector,
                        name: paraName,
                        trackAs: "link"
                    }
                });
            },
            /**
             * Invokes native mobile app interface
             */
            invokeNative(props) {
                console.log("invokeNative called.", props);
                console.log(props);
                if (!(typeof _nativeBrdgJson === "undefined" || _nativeBrdgJson === null)) {
                    _nativeBrdgJson = msg;
                }
                if (window.webkit != undefined) {
                    if (window.webkit.messageHandlers.mfAppInterface != undefined) {
                        window.webkit.messageHandlers.mfAppInterface.postMessage(props);
                    }
                }
                if (window.mfAppInterface != undefined) {
                    window.mfAppInterface.postMessage(props);
                }
            },

            /**
             * Builds an environment-aware full URL from a relative path.
             * Detects QA environments (vzwqa1, vzwqa2, etc.) and adjusts the domain accordingly.
             */
            getEnvironmentUrl(path) {
                const host = window.location.hostname;
                const qaMatch = host.match(/vzwqa(\d+)/i);

                if (qaMatch && qaMatch[1]) {
                    return `https://vzwqa${qaMatch[1]}.verizonwireless.com${path}`;
                } else if (host.includes('verizon.com') || host.includes('vzw.com')) {
                    return `https://www.verizon.com${path}`;
                }
                // Localhost / other environments — use relative path
                return path;
            },

            /**
             * Creates reusable event handler for click and keydown events
             */
            createEventHandler(callback) {
                return {
                    click: (e) => {
                        e.preventDefault();
                        callback(e);
                    },
                    keydown: (e) => {
                        if (e.key === 'Enter' || e.keyCode === SidePodWidget.CONFIG.CONSTANTS.ENTER_KEY_CODE) {
                            e.preventDefault();
                            callback(e);
                        }
                    }
                };
            }
        },

        // Chat and widget interaction methods
        interactions: {
            /**
             * Opens chat bot based on platform
             */
            openChatBot() {
                if (vzwDL.mvo.utils.isMVA()) {
                    const tMsg = {
                        actionType: 'openPanel',
                        pageType: 'openSupport',
                        panel: 'support',
                        extraParameters: {
                            pageName: 'BillOverview',
                            pageType: 'BillOverview',
                            navigationTopPageType: 'Billing page',
                            fromShopSearchBar: true,
                            getSupportConfig: 'yes',
                            channelName: 'MVA',
                            resetSupport: 'yes',
                            tileKey: 'genAIBillHighSummary-SupportBillingFaqs',
                            searchTerm: 'Digital Billing',
                        },
                    };
                    SidePodWidget.utils.invokeNative(JSON.stringify(tMsg));
                } else {
                    const liveChatRequest = {
                        userText: 'Digital Billing',
                        tileKey: 'genAIBillHighSummary-SupportBillingFaqs'
                    };

                    if (typeof EchannelVera !== 'undefined' && typeof EchannelVera.init === 'function') {
                        EchannelVera.init(liveChatRequest);
                    } else {
                        console.error('EchannelVera.init is not available to open the chat.');
                    }
                }
            },

            /**
             * Handles widget rating functionality
             */
            submitWidgetRating(eventId) {
                SidePodWidget.ui.updateRatingButtons(eventId);
                SidePodWidget.api.submitRating(eventId);
            },

            /**
             * Handles button link click
             */
            handleButtonLink(element) {
                let $elm = element.tagName.toLowerCase()==='p' ? $(element).parent() : $(element);
                const link = $elm.attr('data-link');
                if (link) {
                    // If the link is a relative path, resolve it to an environment-aware URL
                    if (link.startsWith('/')) {
                        window.location.href = SidePodWidget.utils.getEnvironmentUrl(link);
                    } else {
                        window.location.href = link;
                    }
                }
            }
        },

        // Event binding methods
        events: {
            /**
             * Binds all event listeners
             */
            bindEvents() {
                this.bindChatEvents();
                this.bindRatingEvents();
                this.bindNavigationEvents();
                this.bindTopQuestionEvents();
            },

            /**
             * Binds chat-related events
             */
            bindChatEvents() {
                const selectors = SidePodWidget.CONFIG.SELECTORS;

                // Chat button events
                const chatHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.ui.showEwtWidget());
                $(document).on('click', selectors.chatButton, chatHandler.click);
                $(document).on('keydown', selectors.chatButton, chatHandler.keydown);

                // Need Help button events (travel EWT trigger)
                const needHelpHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.ui.showTravelEwtWidget());
                $(document).on('click', selectors.needHelpButton, needHelpHandler.click);
                $(document).on('keydown', selectors.needHelpButton, needHelpHandler.keydown);

                // Chat link events
                const chatLinkHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.interactions.openChatBot());
                $(document).on('click', selectors.chatLink, chatLinkHandler.click);
                $(document).on('keydown', selectors.chatLink, chatLinkHandler.keydown);
            },

            /**
             * Binds rating events
             */
            bindRatingEvents() {
                const selectors = SidePodWidget.CONFIG.SELECTORS;

                // Thumb up events
                const thumbUpHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.interactions.submitWidgetRating('liked'));
                $(document).on('click', selectors.genAiThumbUp, thumbUpHandler.click);
                $(document).on('keydown', selectors.genAiThumbUp, thumbUpHandler.keydown);

                // Thumb down events
                const thumbDownHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.interactions.submitWidgetRating('unliked'));
                $(document).on('click', selectors.genAiThumbDown, thumbDownHandler.click);
                $(document).on('keydown', selectors.genAiThumbDown, thumbDownHandler.keydown);
            },

            /**
             * Binds navigation events
             */
            bindNavigationEvents() {
                const selectors = SidePodWidget.CONFIG.SELECTORS;

                // Learn more events
                const buttonLinkHandler = SidePodWidget.utils.createEventHandler((e) =>
                    SidePodWidget.interactions.handleButtonLink(e.target)
                );
                $(document).on('click', 'button.chat_btn[data-link]', buttonLinkHandler.click);
                $(document).on('keydown', 'button.chat_btn[data-link]', buttonLinkHandler.keydown);

                // Go back events (billing EWT)
                const goBackHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.ui.hideEwtWidget());
                $(document).on('click', selectors.gobackLink, goBackHandler.click);
                $(document).on('keydown', selectors.gobackLink, goBackHandler.keydown);

                // Go back events (travel EWT)
                const travelGoBackHandler = SidePodWidget.utils.createEventHandler(() => SidePodWidget.ui.hideTravelEwtWidget());
                $(document).on('click', selectors.travelGobackLink, travelGoBackHandler.click);
                $(document).on('keydown', selectors.travelGobackLink, travelGoBackHandler.keydown);
            },

            bindTopQuestionEvents() {
                const selectors = SidePodWidget.CONFIG.SELECTORS;

                const topQuestionHandler = SidePodWidget.utils.createEventHandler((e) => {
                    const question = $(e.target).text();
                    window.AnchorLinkModule.handleQuickQuestionBtn(question);
                });

                const topQuestionExpandHandler = SidePodWidget.utils.createEventHandler((e) => {
                    $(selectors.topQuestionItem).show();
                    SidePodWidget.ui.adjustPodPosition();
                    $(e.target).hide();
                });

                $(document).on('click', selectors.topQuestionItem, topQuestionHandler.click);
                $(document).on('keydown', selectors.topQuestionItem, topQuestionHandler.keydown);

                $(document).on('click', selectors.topQuestionExpand, topQuestionExpandHandler.click);
                $(document).on('keydown', selectors.topQuestionExpand, topQuestionExpandHandler.keydown);
            }
        },

        /**
         * Initializes the SidePod Widget
         */
        init() {
            this.cacheElements();
            this.events.bindEvents();

            const { $enablePtpWidget, $enableGenAiWidget, $enableInternationalTravelWidget, $enableHotspotWidget, $disableAiTopQuestion } = this.state.cachedElements;
			
			 // In-page search visibility:
            // Markup now defaults to display:block, so we explicitly
            // control visibility based on the authoring option.
            const $inPageSearchContainer = $('#inPageSearchContainer');
            if ($inPageSearchContainer.length) {
                const searchOptions = $inPageSearchContainer.attr('search-options');

                if (searchOptions === 'true') {
                    // Enabled for all users
                    $inPageSearchContainer.show();
                } else {
                    // For throttle/disable/undefined, start hidden.
                    // Authenticated travelpass users will be handled by
                    // the throttling logic further below.
                    $inPageSearchContainer.hide();
                }
            }

            if('/support/travelpass-faqs/' === window.location.pathname){
                const urlParams = new URLSearchParams(window.location.search);
                const cesVoiceBot = urlParams.get('cesVoiceBot');
                const $askQuestionContainer = $('#askQuestionsContainer');
                const options = $askQuestionContainer.attr('data-options');

                if('true' === cesVoiceBot || 'true' ===options){
                    $askQuestionContainer.show();
                }

            }
            // International travel widget - visible in author without login (uses mock data)


            // Initialize billing insights if user is logged in
            if (vzwDL.mvo.utils.isLoggedIn()) {
                // Apply bazaar thumb SVG margin styles for logged-in users
                $('.seo-container.seo-faq-container .bazaar-thumbup svg, .seo-container.seo-faq-container .bazaar-thumbdown svg').css({
                    'margin-left': '5px',
                    'margin-top': '0px'
                });
               if ($enableInternationalTravelWidget.length > 0) {
                console.log("International travel widget enabled, fetching data...");
                this.api.fetchInternationalTravelData();
               }

                if ($enablePtpWidget.length > 0) {
                    this.api.promiseToPayTile();
                } else if ($enableGenAiWidget.length > 0) {
                    this.api.fetchBillInsightsAndSummary();
                } else if ($enableHotspotWidget.length > 0) {
                    this.api.fetchHotSpot();
                }

                if('/support/travelpass-faqs/' === window.location.pathname || '/support/trade-in-program-faqs/' === window.location.pathname || '/support/return-exchange-procedures/' === window.location.pathname){
                    const $askQuestionContainer = $('#askQuestionsContainer');
                    const askQuestionOptions = $askQuestionContainer.attr('data-options');
                    // if('throttle'===askQuestionOptions){
                    //     const $askQuestionBtn = $('#askQuestions');
                    //     if($askQuestionBtn.length>0){
                    //         const mdns = $askQuestionBtn.data('mdns');

                    //         const customerInfoCallback = () => {
                    //             if(vzdl.user.custId_unhashed!=='' && mdns.includes(vzdl.user.custId_unhashed)){
                    //                 $askQuestionContainer.show();
                    //             }
                    //         };

                    //         vzwDL.mvo.customerInfoEventBus.subscribe(vzwDL.mvo.customerInfoEvent, customerInfoCallback);
                    //     }
                    // }
                    if('throttle'===askQuestionOptions){
                        const $askQuestionBtn = $('#vz-voice-bot-container');
                        if($askQuestionBtn.length>0){
                            const mdns = $askQuestionBtn.attr('data-mdns');

                            const customerInfoCallback = () => {
                                if(vzdl.user.custId_unhashed!=='') {
                                    const custIdStr = vzdl.user.custId_unhashed.toString();
                                    const lastTwoDigits = custIdStr.slice(-2);
                                    const lastTwoDigitsNum = parseInt(lastTwoDigits, 10);
                                    const mdnsList = mdns ? mdns.toString().split(',').map(m => m.trim()) : [];
                                    
                                    let isMatch = false;
                                    for(let i = 0; i < mdnsList.length; i++) {
                                        const entry = mdnsList[i];
                                        
                                        // Handle full phone number (length > 2)
                                        if(entry.length > 2 && !entry.includes('-')) {
                                            if(entry === custIdStr) {
                                                isMatch = true;
                                                break;
                                            }
                                        } else if(entry.includes('-')) {
                                            // Handle range format for last 2 digits (e.g., "00-20", "20-50")
                                            const [start, end] = entry.split('-').map(s => parseInt(s.trim(), 10));
                                            if(lastTwoDigitsNum >= start && lastTwoDigitsNum <= end) {
                                                isMatch = true;
                                                break;
                                            }
                                        } else {
                                            // Handle individual 2-digit value (e.g., "00", "01")
                                            if(entry === lastTwoDigits) {
                                                isMatch = true;
                                                break;
                                            }
                                        }
                                    }
                                    
                                    if(isMatch) {
                                        $askQuestionContainer.show();
                                    }
                                }
                            };

                            vzwDL.mvo.customerInfoEventBus.subscribe(vzwDL.mvo.customerInfoEvent, customerInfoCallback);
                        }
                    }
					
					 // In-page search throttling for authenticated travelpass FAQs
                    if ($inPageSearchContainer.length) {
                        const searchOptions = $inPageSearchContainer.attr('search-options');
                        console.log("In-page search options:", searchOptions);
                        if ('true' === searchOptions) {
                            // Explicitly enabled for all authenticated users
                            $inPageSearchContainer.show();
                        } else if ('throttle' === searchOptions) {
                            const mdns = $inPageSearchContainer.attr('search-mdns');

                            const searchCustomerInfoCallback = () => {
                                if (vzdl.user.custId_unhashed !== '') {
                                    const custIdStr = vzdl.user.custId_unhashed.toString();
                                    const lastTwoDigits = custIdStr.slice(-2);
                                    const lastTwoDigitsNum = parseInt(lastTwoDigits, 10);
                                    const mdnsList = mdns ? mdns.toString().split(',').map(m => m.trim()) : [];

                                    let isMatch = false;
                                    for (let i = 0; i < mdnsList.length; i++) {
                                        const entry = mdnsList[i];

                                        // Handle full phone number (length > 2)
                                        if (entry.length > 2 && !entry.includes('-')) {
                                            if (entry === custIdStr) {
                                                isMatch = true;
                                                break;
                                            }
                                        } else if (entry.includes('-')) {
                                            // Handle range format for last 2 digits (e.g., "00-20", "20-50")
                                            const [start, end] = entry.split('-').map(s => parseInt(s.trim(), 10));
                                            if (lastTwoDigitsNum >= start && lastTwoDigitsNum <= end) {
                                                isMatch = true;
                                                break;
                                            }
                                        } else {
                                            // Handle individual 2-digit value (e.g., "00", "01")
                                            if (entry === lastTwoDigits) {
                                                isMatch = true;
                                                break;
                                            }
                                        }
                                    }

                                    if (isMatch) {
                                        $inPageSearchContainer.show();
                                    } else {
                                        $inPageSearchContainer.hide();
                                    }
                                }
                            };

                            vzwDL.mvo.customerInfoEventBus.subscribe(vzwDL.mvo.customerInfoEvent, searchCustomerInfoCallback);
                        } else if ('false' === searchOptions) {
                            // Explicitly disabled
                            $inPageSearchContainer.hide();
                        }
                    }

                }

            }

            if (!$disableAiTopQuestion.length && $('#promoSummary').length > 0) {
                this.api.fetchTopQuestions();
            }
            // Fire notification for FAQ promo text if present
            const $faqPromo = $('.faqpromotext .ai-title');
            if ($faqPromo.length > 0) {
                this.utils.fireNotification($faqPromo.text());
            }
        }
    };

    // Initialize the widget when DOM is ready
    SidePodWidget.init();
});
(function () {
    'use strict';

    /**
     * TravelPlanNudges
     *
     * Maps plan names to their respective billExplanationNudges text.
     * Each entry's nudge text is formatted to match the formatInsightsText()
     * convention in sidepod.js — a line ending with ':' opens a bullet list,
     * and subsequent non-empty lines become list items.
     *
     * To add a new plan: add a new key-value pair to nudgesMap below.
     * sidepod.js will call getNudgesForPlan(planName) and use the returned
     * string as billExplanationNudges; all other internationalDetailsList
     * fields remain unchanged.
     */
    const TravelPlanNudges = {

        nudgesMap: {
            'Pay As You Go': "You're on **Pay As You Go.**\nThe rates for data, call and text vary by country with your current plan.\nYou can save money by choosing an international roaming plan.",

            'TravelPass': "You're on **TravelPass**.\nPlan includes 5 GB/day of high-speed data then unlimited 3G speeds, unlimited talk & text.\nYou're only charged $12/day on days you use your phone abroad.",

            'TravelPass Bank': "You have **[#] days in your TravelPass Bank**.\nYou have [#] days of 5 GB/day of high-speed data then unlimited 3G speeds, unlimited talk & text.\nYou will be charged $12/day on any extra days you use your phone abroad.",

            'International Monthly Plan': "You're on **International Monthly Plan**.\nPlan includes 20 GB high-speed data, then unlimited 3G speeds, 250 minutes talk ($0.25/min overage) & unlimited text.\nThis plan costs $100/ 30 days.",

            'Unlimited Ultimate plan': "You're on **Unlimited Ultimate plan**.\nPlan includes 15 GB/mo of high-speed data, then unlimited 3G speeds, unlimited talk & text.\nNo extra charge for international roaming."

            // Add further plans here following the same pattern
        },

        /**
         * Returns the billExplanationNudges string for the given plan name,
         * or null if no match is found.
         *
         * @param {string} planName - Customer's current plan name.
         * @param {number|null} days - Optional number of days (used for TravelPass Bank [#] replacement).
         * @returns {string|null}
         */
        getNudgesForPlan(planName, days) {
            if (!planName) return null;
            let nudge = this.nudgesMap[planName.trim()] || null;
            if (nudge && days != null) {
                nudge = nudge.replace(/\[#\]/g, days);
            }
            return nudge;
        }
    };

    // Expose so sidepod.js can call TravelPlanNudges.getNudgesForPlan(planName)
    window.TravelPlanNudges = TravelPlanNudges;
}());
