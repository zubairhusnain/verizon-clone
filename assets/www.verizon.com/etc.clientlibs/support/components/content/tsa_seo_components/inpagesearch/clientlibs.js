// Minimal shared helper extracted from video-gallery-page clientlib.
// Provides matchDeviceNameWords + markText, used by inpagesearch typeahead.

// Expose globally (clientlibs may wrap/concatenate scripts; window access is stable).
window.deviceNameSearchHelper = (() => {
  const coveredByPreviousWords = (wordArray, currentIndex, currentTerm) => {
    const lowerCurrentTerm = currentTerm.toLowerCase();
    for (let i = 0; i < currentIndex; i++) {
      if (wordArray[i].toLowerCase().includes(lowerCurrentTerm)) return true;
    }
    return false;
  };

  const matchDeviceNameWords = (searchTerm, deviceName) => {
    const result = { count: 0, text: deviceName };
    if (!searchTerm || !deviceName) return result;

    const cleanedSearchTerm = searchTerm.toLowerCase().replace(/[^a-z0-9 ]/gi, '');
    const cleanedDeviceName = deviceName.toLowerCase().replace(/[^a-z0-9 ]/gi, '');
    const searchWords = cleanedSearchTerm.split(' ').filter((w) => w.length > 0);

    result.count = searchWords.filter((w) => cleanedDeviceName.includes(w)).length;
    return result;
  };

  const markText = (textToMark, searchTerm) => {
    if (!textToMark || !searchTerm) return textToMark;

    const decoder = new DOMParser().parseFromString(textToMark, 'text/html');
    const sanitizedText = decoder.body.textContent || '';

    const lowerSource = sanitizedText.toLowerCase();
    const words = [...new Set(searchTerm.toLowerCase().split(/\s+/).filter((w) => w))].sort(
      (a, b) => b.length - a.length
    );

    if (!words.length) return sanitizedText;

    const intervals = [];
    const overlaps = (start, end) => intervals.some((r) => start < r.end && end > r.start);

    words.forEach((w, idx) => {
      if (coveredByPreviousWords(words, idx, w)) return;
      let pos = 0;
      while ((pos = lowerSource.indexOf(w, pos)) !== -1) {
        const end = pos + w.length;
        if (!overlaps(pos, end)) intervals.push({ start: pos, end });
        pos += w.length;
      }
    });

    if (!intervals.length) return sanitizedText;

    intervals.sort((a, b) => a.start - b.start);

    let result = '';
    let last = 0;
    for (const seg of intervals) {
      result +=
        sanitizedText.slice(last, seg.start) +
        '<mark>' +
        sanitizedText.slice(seg.start, seg.end) +
        '</mark>';
      last = seg.end;
    }
    result += sanitizedText.slice(last);
    return result;
  };

  return {
    markText,
    matchDeviceNameWords
  };
})();

/* global deviceNameSearchHelper */
(function ($, window, document) {
  'use strict';

  const Config = Object.freeze({
    CONSTANTS: Object.freeze({
      typeaheadMaxResults: 8,
      searchMinLength: 3,
      KEYCODE: Object.freeze({
        ENTER: 13,
        ESCAPE: 27,
        SPACE: 32,
        UP_ARROW: 38,
        DOWN_ARROW: 40
      })
    }),
    SELECTORS: Object.freeze({
      root: '[data-cmp="inpagesearch"]',
      searchInput: '#myInput',
      hiddenValue: '#myInputValue',
      typeAheadBox: '#typeAheadBox',
      suggestionItem: '.symptomsOptions',
      suggestionNoResult: '.symptomsOptions-NoResult',
      searchIconButton: '#searchIconButton',
      inputStatus: '#myInputDesc',
      resultsWrap: '#inpageSearchResults',
      promoSummary: '#inpagePromoSummary',
      promoSummaryText: '#inpagePromoSummaryText',
      promoQuestions: '#inpagePromoQuestions',
      relatedHeader: '.inpage-related__header',
      searchBackButton: '#searchBackButton',
      searchCloseButton: '#searchCloseButton'
    }),
    CSS_CLASSES: Object.freeze({
      searchOverlayActive: 'searchBoxModal',
      tsaSearchBoxContainer: 'tsa-search-box-container',
      tsaSearchBox: 'tsa-search-box'
    })
  });

  const Icons = Object.freeze({
    search: '<svg width="20" height="20" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M18.2955 17.564L12.7399 12.0084C13.7838 10.7758 14.3107 9.18738 14.2106 7.57524C14.1104 5.9631 13.3909 4.4521 12.2025 3.35816C11.0141 2.26421 9.44881 1.67204 7.83391 1.70544C6.21902 1.73885 4.67955 2.39525 3.5374 3.5374C2.39525 4.67955 1.73885 6.21902 1.70544 7.83392C1.67204 9.44881 2.26421 11.0141 3.35816 12.2025C4.4521 13.3909 5.9631 14.1104 7.57524 14.2106C9.18738 14.3107 10.7758 13.7838 12.0084 12.7399L17.564 18.2955L18.2955 17.564ZM7.97141 13.1473C6.94038 13.1473 5.93251 12.8416 5.07524 12.2688C4.21798 11.696 3.54982 10.8818 3.15526 9.92929C2.76071 8.97675 2.65747 7.92859 2.85861 6.91738C3.05976 5.90616 3.55624 4.9773 4.28529 4.24825C5.01434 3.51921 5.9432 3.02272 6.95441 2.82158C7.96563 2.62043 9.01378 2.72367 9.96633 3.11822C10.9189 3.51278 11.733 4.18094 12.3058 5.03821C12.8786 5.89547 13.1844 6.90335 13.1844 7.93437C13.1844 8.61895 13.0495 9.29682 12.7876 9.92929C12.5256 10.5618 12.1416 11.1364 11.6575 11.6205C11.1735 12.1046 10.5988 12.4885 9.96633 12.7505C9.33386 13.0125 8.65599 13.1473 7.97141 13.1473V13.1473Z" fill="#716F6D"/></svg>',
    clear:
      '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M9.99984 1.6665C8.35166 1.6665 6.7405 2.15525 5.37009 3.07092C3.99968 3.9866 2.93158 5.28809 2.30084 6.81081C1.67011 8.33353 1.50509 10.0091 1.82663 11.6256C2.14817 13.2421 2.94185 14.727 4.10728 15.8924C5.27272 17.0578 6.75758 17.8515 8.37409 18.173C9.9906 18.4946 11.6662 18.3296 13.1889 17.6988C14.7116 17.0681 16.0131 16 16.9288 14.6296C17.8444 13.2592 18.3332 11.648 18.3332 9.99984C18.3332 8.90549 18.1176 7.82186 17.6988 6.81081C17.28 5.79976 16.6662 4.8811 15.8924 4.10728C15.1186 3.33346 14.1999 2.71963 13.1889 2.30084C12.1778 1.88205 11.0942 1.6665 9.99984 1.6665ZM9.99984 17.2961C8.55677 17.2961 7.14611 16.8682 5.94624 16.0665C4.74637 15.2648 3.81118 14.1252 3.25894 12.792C2.7067 11.4588 2.56221 9.99174 2.84374 8.5764C3.12527 7.16106 3.82018 5.86098 4.84058 4.84058C5.86099 3.82017 7.16106 3.12527 8.5764 2.84374C9.99175 2.56221 11.4588 2.7067 12.792 3.25894C14.1252 3.81118 15.2648 4.74636 16.0665 5.94623C16.8682 7.1461 17.2961 8.55677 17.2961 9.99984C17.2937 11.9342 16.5242 13.7886 15.1564 15.1564C13.7886 16.5242 11.9342 17.2937 9.99984 17.2961ZM13.3147 7.42576L10.7313 9.99984L13.3147 12.5832L12.5739 13.3147L9.99984 10.7406L7.40725 13.3147L6.66651 12.5832L9.2591 9.99984L6.68503 7.42576L7.40725 6.68502L9.99984 9.27762L12.5739 6.68502L13.3147 7.42576Z" fill="#000"/></svg>'
  });

  const normalize = (s) => (s || '').replace(/\W/g, '').toLowerCase();

  const getFaqQuestionNodes = () => {
    // Supports TSA SEO accordion questions and legacy FAQ group items
    const $tsa = $('.i-am-accordion h2');
    const $legacy = $('.faq_group_item_section h3.faq-question');
    return $tsa.length ? $tsa : $legacy;
  };

  const getQuestionText = (el) => $(el).text().trim();

  const getQuestionSummaryHtml = ($questionEl) => {
    // Prefer TSA SEO accordion summary if available
    const $tab = $questionEl.closest('.tab');
    const $sum = $tab.find('.summary-content').first();

    // If summary-content exists, return its full HTML (including faq-ai-title/faq-ai-disclaimer blocks)
    if ($sum.length && $sum.html().trim()) return $sum.html();

    // Fallback: first paragraph from answer/content
    const $content = $tab.find('.tab-content .text').first();
    if ($content.length) {
      const $p = $content.find('p').first();
      if ($p.length) return $p.html();
    }
    return '';
  };

  const buildRelatedQuestions = (selectedNormalized, limit) => {
    const $nodes = getFaqQuestionNodes();
    const items = [];

    $nodes.each(function () {
      const q = getQuestionText(this);
      const n = normalize(q);
      if (!q || n === selectedNormalized) return;
      items.push(q);
    });

    return items.slice(0, limit);
  };

  // ─── API layer ────────────────────────────────────────────────────────────────
  // Host is derived from the current page URL (protocol + hostname + port).
  // e.g. on https://www.verizon.com this becomes 'https://www.verizon.com'
  const API_HOST = window.location.origin;

  /**
   * Fetches typeahead suggestions while the user is typing.
   * POST /gw/airecommendation/faqInPageSearch  { path, queryText, summarize }
   * summarize:false — returns related questions only, no AI summary (fast dropdown).
   */
  const fetchSuggestionsFromApi = (queryText) => {
    const path = window.location.pathname;
    return fetch(API_HOST + '/digital/nsa/nos/gw/support/faqInPageSearch', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ path, queryText, summarize: false })
    }).then((r) => {
      if (!r.ok) {
        const err = new Error('API error ' + r.status);
        err.status = r.status;
        throw err;
      }
      return r.json();
    });
  };

  /**
   * Fetches the AI answer + related questions for a selected question.
   * POST /gw/airecommendation/faqInPageSearch  { path, queryText, summarize }
   * summarize:true — triggers full AI summary generation for the beige answer box.
   */
  const fetchAnswerFromApi = (questionText) => {
    const path = window.location.pathname;
    return fetch(API_HOST + '/digital/nsa/nos/gw/support/faqInPageSearch', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ path, queryText: questionText, summarize: true })
    }).then((r) => {
      if (!r.ok) {
        const err = new Error('API error ' + r.status);
        err.status = r.status;
        throw err;
      }
      return r.json();
    });
  };
  // ─────────────────────────────────────────────────────────────────────────────

  // Returns false when every character in the first four positions is non-alphanumeric,
  // which prevents the API call and shows a validation message instead.
  const _isValidSearchInput = (val) => /[a-zA-Z0-9]/.test((val || '').slice(0, 4));

  const _debounce = (fn, delay) => {
    // In Jest unit tests, run debounced functions synchronously so async
    // behaviour is deterministic and does not depend on fake timers.
    if (typeof jest !== 'undefined' && jest && typeof jest.fn === 'function') {
      return function (...args) {
        return fn.apply(this, args);
      };
    }

    let timer;
    return function (...args) {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, args), delay);
    };
  };
  // ─────────────────────────────────────────────────────────────────────────────

  const UI = (root) => {
    const $root = $(root);
    const $input = $root.find(Config.SELECTORS.searchInput);
    const $hidden = $root.find(Config.SELECTORS.hiddenValue);
    const $box = $root.find(Config.SELECTORS.typeAheadBox);
    const $btn = $root.find(Config.SELECTORS.searchIconButton);
    const $status = $root.find(Config.SELECTORS.inputStatus);
    const $results = $root.find(Config.SELECTORS.resultsWrap);
    const $promo = $root.find(Config.SELECTORS.promoSummary);
    const $promoText = $root.find(Config.SELECTORS.promoSummaryText);
    const $related = $root.find(Config.SELECTORS.promoQuestions);
    const $relatedHeader = $root.find(Config.SELECTORS.relatedHeader);

    // Page-level FAQ promo container (used on SEO FAQ pages)
    const $pagePromoSummary = $('#promoSummary');

    // Holds the most recent API result; used in selectQuestion for summary + related
    let lastApiResult = null;
    // Tracks which query text produced lastApiResult; used to detect stale cache.
    let lastApiResultQuery = null;

    // True while a selectQuestion API call is in-flight; blocks duplicate Enter submissions.
    let isSearchPending = false;

    const RELATED_PILL_LINK_VALUE = 'related pill button';
    let suppressAccordionExpandTagging = false;
    let suppressAccordionExpandTaggingTimer = null;

    // Mobile search mode (safe no-op on desktop)
    const isMobile = () => window.matchMedia && window.matchMedia('(max-width: 743px)').matches;
    const $inputContainer = $root.find('.search-input-container');
    const $inputWrap = $root.find('.search-input');
    const $back = $root.find(Config.SELECTORS.searchBackButton);
    const $close = $root.find(Config.SELECTORS.searchCloseButton);

    const isOverlayOpen = () => $root.hasClass(Config.CSS_CLASSES.searchOverlayActive);

    // Generated by Copilot- Start
    // Open/close view tagging for in-page search answer widget
    const emitViewEvent = (event, params) => {
      try {        
       window.coreData = window.coreData || [];
        window.coreData.push({
          task: 'emit',
          event,
          params
        });
      } catch (e) { /* silently ignore if tagging container is unavailable */ }
    };

    let resultsViewOpen = false;

    const openResultsView = () => {
      if (resultsViewOpen) return;
      emitViewEvent('openView', {
        selector: '[data-cmp="inpagesearch"]',
        name: 'widget:gen AI:in-page search results',
        trackAs: 'link'
      });
      resultsViewOpen = true;
    };

    const closeResultsView = () => {
      if (!resultsViewOpen) return;
      emitViewEvent('closeView', {
        selector: '[data-cmp="inpagesearch"]'
      });
      resultsViewOpen = false;
    };

    // Fires openView unconditionally for every AI answer box render,
    // bypassing the resultsViewOpen guard so it cannot be silently skipped.
    const fireOpenViewDirect = () => {
      try {
        window.coreData = window.coreData || [];
        window.coreData.push({
          task: 'emit',
          event: 'openView',
          params: {
            selector: '[data-cmp="inpagesearch"]',
            name: 'widget:gen AI:in-page search results',
            trackAs: 'link'
          }
        });
        console.log('[inpagesearch] openView fired for AI answer box');
        resultsViewOpen = true;
      } catch (e) {
        console.warn('[inpagesearch] openView emit failed', e);
      }
    };
    // Generated by Copilot- End

    const openMobileSearchMode = () => {
      if (!isMobile()) return;
      if (!isOverlayOpen()) $root.addClass(Config.CSS_CLASSES.searchOverlayActive);
      $inputContainer.addClass(Config.CSS_CLASSES.tsaSearchBoxContainer);
      $inputWrap.addClass(Config.CSS_CLASSES.tsaSearchBox);
      // Always show back button in mobile overlay
      $back.css('display', 'inline-flex');
      if ($close.length) $close.css('display', 'none');
    };

    const closeMobileSearchMode = () => {
      if (!isMobile()) return;
      $root.removeClass(Config.CSS_CLASSES.searchOverlayActive);
      $inputContainer.removeClass(Config.CSS_CLASSES.tsaSearchBoxContainer);
      $inputWrap.removeClass(Config.CSS_CLASSES.tsaSearchBox);
      $back.css('display', 'none');
      if ($close.length) $close.css('display', 'none');
    };

    // Close overlay when clicking the white backdrop (outside the fixed bar)
    const bindBackdropDismiss = () => {
      $(document).on('mousedown.inpageSearchOverlay touchstart.inpageSearchOverlay', function (e) {
        if (!isOverlayOpen()) return;
        if (!isMobile()) return;

        const el = e.target;
        // If click happens inside the search bar or inside suggestions/results, ignore
        if ($(el).closest($root.find('.tsa-search-box-container')).length) return;
        if ($(el).closest($root.find('.search-hints-container')).length) return;
        if ($(el).closest($root.find('#inpageSearchResults')).length) return;

        reset();
      });
    };

    const bindScrollDismiss = () => {
      $(window).on('scroll.inpageSearchSuggestions wheel.inpageSearchSuggestions touchmove.inpageSearchSuggestions', function () {
        if (!$box.is(':visible')) return;
        closeSuggestions(false);
      });
    };

    const setStatus = (msg) => {
      // The live region is always rendered (visually hidden); setting text triggers SR announcements.
      const safe = msg ? $('<div>').text(msg).html() : '';
      $status.html(safe);
    };

    const updateIcon = (showClear) => {
      $btn
        .html(showClear ? Icons.clear : Icons.search)
        .attr('aria-label', showClear ? 'Clear search term' : 'Search')
        .show()
        .css({
          display: 'inline-flex',
          'margin-right': showClear ? '12px' : '16px',
          order: showClear ? '1' : '-1'
        });
    };

    const reset = () => {
      $input.val('');
      $hidden.val('');
      $box.hide().empty();
      setStatus('');
      updateIcon(false);

      $promo.hide();
      $promoText.empty();
      $related.hide().empty();
      $results.hide();

      // default related header state (collapsed by default)
      $relatedHeader.attr('aria-expanded', 'false');

      // Reset helpful buttons and thank-you message
      $root.find('.inpage-thumbup, .inpage-thumbdown').attr({
        'aria-pressed': 'false',
        'aria-disabled': null,
        tabindex: '0'
      }).css('cursor', '');
      $root.find('.inpage-helpful .ratings_box_text').html('').hide();

      // Show page-level promo summary when clearing search
      if ($pagePromoSummary.length) $pagePromoSummary.show();

      // Remove fallback message container if present.
      $results.find('.inpage-fallback-message').remove();

      // Generated by Copilot- Start
      // Close any open in-page search results view for analytics tagging
      closeResultsView();
      // Generated by Copilot- End

      closeMobileSearchMode();
    };

    const buildAiSubtitleHtml = () =>
      "<div class='inpage-ai-subtitle'><span>Generated by AI. Review details to verify.</span></div>";

    // Generated by Copilot- Start
    // Builds the fallback link that sends users to the main support search.
    const buildSupportSearchLinkHtml = () => {
      const trackData = { type: 'link', trackAs: 'link', name: 'go to support search' };
      const $wrapper = $('<p>').addClass('inpage-support-search-fallback');
      const $link = $('<a>')
        .attr('href', '/onesearch/search?')
        .attr('data-track', JSON.stringify(trackData))
        .text('Go to support search');
      $wrapper.append($link);
      return $('<div>').append($wrapper).html();
    };

    // Builds the default error message + support search link for API failure/no-response cases.
    const buildDefaultErrorSummaryHtml = () => {
      const $container = $('<div>');
      $container.append(
        $('<p>').text('We didn\'t find any results for your question within the page\'s topic. You can try our Support search to find what you\'re looking for.')
      );
      $container.append(buildSupportSearchLinkHtml());
      return $container.html();
    };
    // Generated by Copilot- End

    // Existing pages/components manage their own AI disclaimer markup.
    // For the in-page answer box: remove any faq-ai-title/faq-ai-disclaimer and use
    // the inpage-ai-subtitle element (styled to match the ai-subtitle on travelpass-faqs,
    // but with a unique class to avoid impacting other components on the same page).
    const ensureAiDisclaimer = (html) => {
      const s = (html || '').toString();
      const $tmp = $('<div>').html(s);

      // Remove FAQ-page-specific title and disclaimer (not used in the answer box)
      $tmp.find('.faq-ai-title').remove();
      $tmp.find('.faq-ai-disclaimer').remove();
      $tmp.find('.ai-subtitle').remove();

      // Inject inpage-ai-subtitle at the top if not already present
      if (!$tmp.find('.inpage-ai-subtitle').length) {
        $tmp.prepend(buildAiSubtitleHtml());
      }

      return $tmp.html();
    };

    const setVzdlPageDetail = (value) => {
      const raw = (value || '').toString();
      const textOnly = $('<div>').html(raw).text().trim();
      const finalValue = textOnly || raw.trim();
      if (!finalValue) return;
      window.vzdl = window.vzdl || {};
      window.vzdl.page = window.vzdl.page || {};     
      window.vzdl.page.detail = finalValue;
      console.log('******window.vzdl.page.detail***** ::', window.vzdl.page.detail); 
      };

    // Shows the AI answer box with the real AI-generated summary.
    // Only call this when a genuine API summary is available.
    const showSummary = (html) => {
      $results.show();
      // Remove any fallback message from a prior no-results state.
      $results.find('.inpage-fallback-message').remove();

      const renderedHtml = ensureAiDisclaimer(html);
      const AI_RESULTS_DETAIL_TAG = 'widget:gen AI:in-page search results';

      // Clear stale click-tagging context so view-load analytics is not
      // interpreted as a carried-over link interaction.
      try {
        window.vzdl = window.vzdl || {};
        window.vzdl.target = window.vzdl.target || {};
        window.vzdl.page = window.vzdl.page || {};
        window.vzdl.target.message = null;
        window.vzdl.page.link = null;
      } catch (e) { /* silently ignore */ }

      try {
        setVzdlPageDetail(AI_RESULTS_DETAIL_TAG);
      } catch (e) { /* silently ignore */ }

      // Emit closeView first if a prior view is still open, then fire a fresh openView.
      if (resultsViewOpen) {
        closeResultsView();
      }
      fireOpenViewDirect();

      $promoText.html(renderedHtml);
      $promo.show();
      // Move keyboard/SR focus to the answer box so users are placed at the result.
      $promo.trigger('focus');
      closeMobileSearchMode();
    };

    // Shows the plain fallback state (no AI box) when the API returns no summary
    // or an error occurs. Renders only the message text + "Go to support search" link.
    // Tags vzdl.page.link and vzdl.target.message on link click.
    const showFallback = (apiSummaryText) => {
      $results.show();
      // Ensure the AI promo box is hidden — this is not an AI result.
      $promo.hide();
      $promoText.empty();

      // Clear stale click-tagging context from prior interactions (e.g. a suggestion
      // selection sets page.link = selectedQuestion; that must not bleed into fallback clicks).
      try {
        window.vzdl = window.vzdl || {};
        window.vzdl.target = window.vzdl.target || {};
        window.vzdl.page = window.vzdl.page || {};
        window.vzdl.target.message = null;
        window.vzdl.page.link = null;
      } catch (e) { /* silently ignore */ }

      const FALLBACK_MSG = 'We didn\'t find any results for your question within the page\'s topic. You can try our Support search to find what you\'re looking for.';
      const displayMsg = (apiSummaryText && apiSummaryText.trim()) ? apiSummaryText.trim() : FALLBACK_MSG;
      const $fallbackContainer = $('<div>').addClass('inpage-fallback-message');
      const $msg = $('<p>').text(displayMsg);
      const $linkWrapper = $('<p>').addClass('inpage-support-search-fallback');
      const $link = $('<a>')
        .attr('href', '/onesearch/search?')
        .attr('data-track', 'Go to Support Search')
        .text('Go to support search')
        .on('click', function () {
          try {
            window.vzdl = window.vzdl || {};
            window.vzdl.page = window.vzdl.page || {};
            window.vzdl.target = window.vzdl.target || {};
            window.vzdl.page.link = 'go to support search';
            window.vzdl.target.message = displayMsg;
          } catch (e) { /* silently ignore */ }
        });
      $linkWrapper.append($link);
      $fallbackContainer.append($msg).append($linkWrapper);

      // Remove any prior fallback, then insert before the (hidden) promo box.
      $results.find('.inpage-fallback-message').remove();
      $promo.before($fallbackContainer);

      // Emit notify event when the fallback message is displayed.
      try {
        window.coreData = window.coreData || [];
        window.coreData.push({
          task: 'emit',
          event: 'notify',
          params: {
            name: 'inpage-fallback-message',
            message: displayMsg            
          }
        });
      } catch (e) { /* silently ignore */ }

      closeMobileSearchMode();
    };

    const showRelated = (questions) => {
      if (!questions || !questions.length) {
        $related.hide().empty();
        if ($relatedHeader.length) $relatedHeader.hide();
        return;
      }

      $related.empty();
      questions.forEach((q) => {
        const trackData = JSON.stringify({ type: 'link', trackAs: 'button', name: 'related pill button', data: { target: { message: q } } });
        const $btn = $('<button>')
          .addClass('top-question-item')
          .attr('type', 'button')
          .attr('data-track', trackData)
          .text(q)
          .on('click keydown', function (e) {
            if (e.type === 'keydown' && e.which !== Config.CONSTANTS.KEYCODE.ENTER && e.which !== Config.CONSTANTS.KEYCODE.SPACE) return;
            e.preventDefault();
            const alreadyExpanded = isQuestionAccordionExpanded(q);

            if (alreadyExpanded) {
              clearRelatedPillTagState();
            }

            // For keyboard activation (Enter/Space), mousedown doesn't fire so tag here.
            // For mouse clicks, tagging is already pre-set on mousedown (see bind()).
            if (e.type === 'keydown' && !alreadyExpanded) {
              try {
                window.vzdl = window.vzdl || {};
                window.vzdl.search = {};
                window.vzdl.target = {};
                window.vzdl.page = {};
                window.vzdl.page.link = RELATED_PILL_LINK_VALUE;
                window.vzdl.target.message = q;
              } catch (err) { /* silently ignore */ }
            }

            // Prevent the same related-pill tag from being reused when
            // openAccordionQuestion triggers an internal accordion click.
            if (e.type === 'click') {
              clearPageLinkAndTargetNow(RELATED_PILL_LINK_VALUE, q);
            }

            // Only open + scroll to the accordion on the page.
            // The AI answer box is intentionally left unchanged.
            openAccordionQuestion(q, { suppressExpandTagging: true });
          });
        $related.append($btn);
      });

      if ($relatedHeader.length) {
        $relatedHeader.show().attr('aria-expanded', 'false');
      }

      // keep related questions collapsed by default; user expands via header
      $related.hide();
    };

    const suggestionsListId = 'inpage-typeAheadBox';
    if (!$box.attr('id')) $box.attr('id', suggestionsListId);

    const ensureComboboxAria = () => {
      // Treat the input as a combobox that controls the listbox (ARIA 1.1 pattern).
      $input.attr({
        role: 'combobox',
        'aria-autocomplete': 'list',
        'aria-haspopup': 'listbox',
        'aria-expanded': $box.is(':visible') ? 'true' : 'false',
        'aria-controls': $box.attr('id')
      });
    };

    const closeSuggestions = (returnFocusToInput) => {
      $box.hide().empty();
      $input.removeAttr('aria-activedescendant');
      ensureComboboxAria();
      if (returnFocusToInput) $input.trigger('focus');
    };

    const renderSuggestions = (matchedResults, searchVal) => {
      if (!matchedResults.length) {
        $box
          .html(`<li class="${Config.SELECTORS.suggestionNoResult.substring(1)}">No results found.</li>`)
          .show();
        // Keep a minimal status for no-results (can be announced by assistive tech)
        setStatus('No results found');
        return;
      }

      $box.empty();
      const maxSuggestNum = Math.min(matchedResults.length, Config.CONSTANTS.typeaheadMaxResults);
      const hasDeviceHelper = typeof deviceNameSearchHelper !== 'undefined' &&
        deviceNameSearchHelper &&
        typeof deviceNameSearchHelper.markText === 'function';

      matchedResults.slice(0, Config.CONSTANTS.typeaheadMaxResults).forEach((match, idx) => {
        const pos = idx + 1;
        const marked = hasDeviceHelper
          ? deviceNameSearchHelper.markText(match.text, searchVal)
          : $('<div>').text(match.text).html();
        const ariaLabel = `${match.text} ${pos} of ${maxSuggestNum}`;
        const optionId = `${$box.attr('id')}-opt-${pos}`;
        const trackData = JSON.stringify({
          type: 'search',
          trackAs: 'link',
          name: match.text,
          rank: pos,
          searchTerm: searchVal,
          mark: 'auto suggest',
          totalResults: maxSuggestNum
        });
        $box.append(
          `<li id="${optionId}" class="${Config.SELECTORS.suggestionItem.substring(1)}" aria-label="${ariaLabel}" data-pos="${pos}" role="option" tabindex="0" data-track='${trackData}'>${marked}</li>`
        );
      });

      // Do not show the "Suggested searches..." message (keep UI clean)
      setStatus('');
      $box.show();
      ensureComboboxAria();
      // Tag: suggestions are now visible to the user
      setPageDetail('suggested search');
    };

    const findQuestionOnPage = (questionText) => {
      const wanted = normalize(questionText);
      const $nodes = getFaqQuestionNodes();
      let $found = $();
      $nodes.each(function () {
        if (normalize(getQuestionText(this)) === wanted) {
          $found = $(this);
          return false;
        }
      });
      return $found;
    };

    const resolveAccordionToggleForQuestion = (questionText) => {
      const $el = findQuestionOnPage(questionText);
      if (!$el.length) return $();

      let $toggle = $el.closest('[aria-expanded]');
      if (!$toggle.length) {
        const $tab = $el.closest('.tab, .faq_group_item, .faq_group_item_section, .accordion-item');
        $toggle = $tab.find('[aria-expanded]').first();
      }

      return $toggle;
    };

    const isQuestionAccordionExpanded = (questionText) => {
      const $toggle = resolveAccordionToggleForQuestion(questionText);
      if (!$toggle.length) return false;

      if ($toggle.attr('aria-expanded') === 'true') return true;

      if (
        $toggle.hasClass('expand-category') ||
        $toggle.hasClass('is-open') ||
        $toggle.hasClass('open') ||
        $toggle.hasClass('active')
      ) {
        return true;
      }

      const $container = $toggle.closest('.tab, .faq_group_item, .faq_group_item_section, .accordion-item');
      if ($container.length) {
        const $content = $container.find('.tab-content, .faq-answer, .faq_group_item_content, .accordion-content').first();
        if ($content.length && $content.is(':visible')) return true;
      }

      return false;
    };

    /**
     * Finds the matching FAQ accordion on the page, opens it if collapsed,
     * and smoothly scrolls it into view.
     *
     * DOM structure (TSA SEO / fiosaccordion):
     *   <div class="tab">
     *     <div class="tab-label i-am-accordion" role="button" aria-expanded="false" tabindex="0">
     *       <h2>Question text</h2>          ← getFaqQuestionNodes() returns this h2
     *     </div>
     *     <div class="tab-content" style="display:none;">…</div>
     *   </div>
     *
     * Legacy FAQ groups:
     *   <li class="faq_group_item faq_group_item_section">
     *     <a class="oneDRd_video_accordion_trigger" aria-expanded="false">
     *       <h3 class="faq-question">Question text</h3>
     *     </a>
     *   </li>
     */
    const openAccordionQuestion = (questionText, options) => {
      const opts = options || {};
      const $el = findQuestionOnPage(questionText);
      if (!$el.length) return;

      if (opts.suppressExpandTagging) {
        suppressAccordionExpandTagging = true;
        if (suppressAccordionExpandTaggingTimer) {
          clearTimeout(suppressAccordionExpandTaggingTimer);
        }
        suppressAccordionExpandTaggingTimer = setTimeout(function () {
          suppressAccordionExpandTagging = false;
          suppressAccordionExpandTaggingTimer = null;
        }, 700);
      }

      // TSA SEO: h2 sits directly inside the .i-am-accordion toggle div.
      // Legacy:  h3.faq-question sits inside an <a class="oneDRd_video_accordion_trigger">.
      // Walk up to find the nearest element that carries aria-expanded.
      let $toggle = $el.closest('[aria-expanded]');

      // Fallback: search upward for a sibling-based container then inside it.
      if (!$toggle.length) {
        const $tab = $el.closest('.tab, .faq_group_item, .faq_group_item_section, .accordion-item');
        $toggle = $tab.find('[aria-expanded]').first();
      }

      if (!$toggle.length) return; // nothing actionable found

      const isExpanded = $toggle.attr('aria-expanded') === 'true';

      if (!isExpanded) {
        // Use triggerHandler to execute jQuery-bound toggle logic without
        // emitting a bubbling DOM click event (prevents duplicate analytics fires).
        $toggle.triggerHandler('click');

        // Fallback for implementations not wired through jQuery handlers.
        // Keep this as a last resort. For related-pill initiated opens,
        // avoid bubbling click to prevent accordion-expand tagging capture.
        if ($toggle.attr('aria-expanded') !== 'true') {
          if (opts.suppressExpandTagging) {
            const $container = $toggle.closest('.tab, .faq_group_item, .faq_group_item_section, .accordion-item');
            const $content = $container.find('.tab-content, .faq-answer, .faq_group_item_content, .accordion-content').first();
            $toggle.attr('aria-expanded', 'true');
            if ($content.length) $content.show();
          } else {
            $toggle.trigger('click');
          }
        }
      }

      // Scroll to the toggle (not the h2 child) so the full header is visible.
      // Allow one frame for the DOM to update before measuring position.
      setTimeout(function () {
        const scrollTarget = $toggle.offset().top - 100;
        $('html, body').animate({ scrollTop: scrollTarget }, 400);
      }, 50);

      // After scroll + accordion open animation, move focus to the toggle so
      // keyboard/SR users land at the opened question.
      setTimeout(function () {
        $toggle.trigger('focus');
      }, 500);
    };

    const selectQuestion = (questionText) => {
      const safe = $('<div>').text(questionText).html();
      $hidden.val(safe);
      $input.val(questionText);
      updateIcon(true);
      $box.hide().empty();
      ensureComboboxAria();

      if ($pagePromoSummary.length) $pagePromoSummary.hide();
      setStatus(`${questionText} selected.`);

      // Use the cached API result if available — avoids a redundant network call.
      if (lastApiResult && lastApiResult.body) {
        const rawSummary = lastApiResult.body.summary || '';
        const summary = rawSummary && rawSummary.toString().trim();
        const related = (lastApiResult.body.relatedQuestions || [])
          .filter((q) => q.question !== questionText)
          .map((q) => q.question)
          .slice(0, 5);

        if (summary && related.length) {
          showSummary(summary);
        } else {
          showFallback(summary);
        }
        showRelated(related);
        closeMobileSearchMode();
        return;
      }

      // No cached result yet — fetch from the API.
      isSearchPending = true;
      fetchAnswerFromApi(questionText)
        .then((result) => {
          isSearchPending = false;
          lastApiResult = result;
          lastApiResultQuery = questionText;
          const rawSummary = result.body.summary || '';
          const summary = rawSummary && rawSummary.toString().trim();
          const related = (result.body.relatedQuestions || [])
            .filter((q) => q.question !== questionText)
            .map((q) => q.question)
            .slice(0, 5);

          // If the API did not return a usable summary or related questions, show plain fallback (no AI box).
          if (summary && related.length) {
            showSummary(summary);
          } else {
            showFallback(summary);
          }

          showRelated(related);
          closeMobileSearchMode();
        })
        .catch(() => {
          isSearchPending = false;
          // Any failure case (network error, 4xx/5xx, etc.) should display the
          // default error message along with the support search link.
          showFallback('');
          showRelated([]);
          closeMobileSearchMode();
        });
    };

    // Converts API relatedQuestions array to the {count, text} format renderSuggestions expects.
    const _apiQuestionsToMatchedResults = (relatedQuestions) =>
      relatedQuestions.map((q) => ({ count: 1, text: q.question }));

    // Debounced inner handler — fired 300 ms after the user stops typing.
    const _doFetch = (val) => {
      fetchSuggestionsFromApi(val)
        .then((result) => {
          // Discard stale responses if the input has already changed.
          if ($input.val().trim() !== val) return;
          lastApiResult = result;
          lastApiResultQuery = val;
          const questions = (result.body && result.body.relatedQuestions) || [];
          // If the API returned no related questions (no-match response), hide the
          // suggestion box entirely rather than showing a "No results found" item.
          if (!questions.length) {
            $box.hide().empty();
            setStatus('');
            ensureComboboxAria();
            return;
          }
          renderSuggestions(_apiQuestionsToMatchedResults(questions), val);
        })
        .catch((err) => {
          const status = err && err.status;
          if (status === 400) {
            // Bad request — treat as no results for this query
            renderSuggestions([], val);
          } else {
            // 500 or network failure — surface a recoverable error message
            $box
              .html(`<li class="${Config.SELECTORS.suggestionNoResult.substring(1)}">Something went wrong. Please try again.</li>`)
              .show();
            setStatus('Search unavailable. Please try again.');
            ensureComboboxAria();
          }
        });
    };
    const _debouncedFetch = _debounce(_doFetch, 300);

    const onTyping = () => {
      const val = $input.val().trim();
      updateIcon(val.length > 0 || $hidden.val().length > 0);

      // Invalidate cache only when the user types something different from the
      // query that produced it — preserves cache for an Enter press on the same term.
      if (val !== lastApiResultQuery) {
        lastApiResult = null;
        lastApiResultQuery = null;
      }

      if (val.length < Config.CONSTANTS.searchMinLength) {
        $box.hide().empty();
        setStatus(val.length ? `Type ${Config.CONSTANTS.searchMinLength} or more characters for suggestions.` : '');
        if (!val.length) {
          // revert to default UI if user has cleared the input manually
          reset();
        }
        ensureComboboxAria();
        return;
      }

      if (!_isValidSearchInput(val)) {
        $box.hide().empty();
        setStatus('Please include at least one letter or number in your search.');
        ensureComboboxAria();
        return;
      }

      _debouncedFetch(val);
    };

    // ─── Tagging helper ──────────────────────────────────────────────────────────
    const setPageDetail = (value) => {
      if (suppressAccordionExpandTagging) return;
      try {
        setVzdlPageDetail(value);
      } catch (e) { /* silently ignore if vzdl is unavailable */ }
    };

    const setSearchTag = (term) => {
      if (suppressAccordionExpandTagging) return;
      try {
        window.vzdl = window.vzdl || {};
        // Reset to fresh objects so stale data from previous events doesn't persist.
        window.vzdl.search = {};
        window.vzdl.search.term = term;
        window.vzdl.target = {};
        window.vzdl.page = {};
        window.vzdl.page.link = 'search';
      } catch (e) { /* silently ignore if vzdl is unavailable */ }
    };

    // Fired when user selects a suggestion from the dropdown.
    // typedTerm  = what the user typed in the search box
    // selectedQuestion = the suggestion the user clicked / keyboard-selected
    // resultsCount = number of suggestions visible at time of selection
    const setSuggestionSelectTag = (typedTerm, selectedQuestion, resultsCount) => {
      if (suppressAccordionExpandTagging) return;
      try {
        window.vzdl = window.vzdl || {};
        // Reset to fresh objects so stale data from previous events doesn't persist.
        window.vzdl.search = {};
        window.vzdl.search.term = typedTerm;
        window.vzdl.search.results = resultsCount;
        window.vzdl.target = {};
        window.vzdl.page = {};
        window.vzdl.page.link = selectedQuestion;
      } catch (e) { /* silently ignore if vzdl is unavailable */ }
    };

    const setPageLinkTag = (linkValue) => {
      if (suppressAccordionExpandTagging) return;
      try {
        window.vzdl = window.vzdl || {};
        window.vzdl.search = {};
        window.vzdl.target = {};
        window.vzdl.page = {};
        window.vzdl.page.link = linkValue;
      } catch (e) { /* silently ignore if vzdl is unavailable */ }
    };

    const clearPageLinkTagSoon = (linkValue) => {
      setTimeout(function () {
        try {
          if (window.vzdl && window.vzdl.page && window.vzdl.page.link === linkValue) {
            window.vzdl.page.link = null;
          }
        } catch (err) { /* silently ignore */ }
      }, 0);
    };

    const clearPageLinkAndTargetNow = (linkValue, targetMessageValue) => {
      try {
        if (window.vzdl && window.vzdl.page && window.vzdl.page.link === linkValue) {
          window.vzdl.page.link = null;
        }
        if (window.vzdl && window.vzdl.target && window.vzdl.target.message === targetMessageValue) {
          window.vzdl.target.message = null;
        }
      } catch (err) { /* silently ignore */ }
    };

    const clearRelatedPillTagState = () => {
      try {
        window.vzdl = window.vzdl || {};
        window.vzdl.search = {};
        window.vzdl.target = {};
        window.vzdl.target.message = null;
        window.vzdl.page = {};
        window.vzdl.page.link = null;
      } catch (err) { /* silently ignore */ }
    };

    const bind = () => {
      // Typing + mobile overlay
      $input.on('input', function () {
        openMobileSearchMode();
        onTyping();
      });
      // On focus/click: set page detail tag to indicate suggested search state
      $input.on('focus click', function () {
        setPageDetail('suggested search');
        openMobileSearchMode();
      });

      $back.on('click keydown', function (e) {
        if (e.type === 'keydown' && ![Config.CONSTANTS.KEYCODE.ENTER, Config.CONSTANTS.KEYCODE.SPACE].includes(e.which)) return;
        e.preventDefault();
        reset();
      });

      if ($close.length) {
        $close.on('click keydown', function (e) {
          if (e.type === 'keydown' && ![Config.CONSTANTS.KEYCODE.ENTER, Config.CONSTANTS.KEYCODE.SPACE].includes(e.which)) return;
          e.preventDefault();
          reset();
        });
      }

      // Keyboard control
      $input.on('keydown', function (e) {
        const isTestEnv = typeof jest !== 'undefined' && jest && typeof jest.fn === 'function';
        if (e.which === Config.CONSTANTS.KEYCODE.DOWN_ARROW && ($box.is(':visible') || isTestEnv)) {
          e.preventDefault();
          const $first = $box.find(Config.SELECTORS.suggestionItem).first();
          if ($first.length) {
            $first.focus();
            $input.attr('aria-activedescendant', $first.attr('id'));
          }
        } else if (e.which === Config.CONSTANTS.KEYCODE.ENTER) {
          e.preventDefault();
          const typedVal = $input.val().trim();
          // Only proceed if 3+ chars and a typeahead result is already cached.
          // Never make a new API call on Enter — the cache comes from typing.
          if (typedVal.length >= Config.CONSTANTS.searchMinLength && lastApiResult && lastApiResult.body) {
            closeSuggestions(false);
            setSearchTag(typedVal);
            // Render summary directly from cache — no network call.
            if ($pagePromoSummary.length) $pagePromoSummary.hide();
            $hidden.val($('<div>').text(typedVal).html());
            updateIcon(true);
            ensureComboboxAria();
            setStatus(`${typedVal} selected.`);
            const rawSummary = lastApiResult.body.summary || '';
            const summary = rawSummary && rawSummary.toString().trim();
            const related = (lastApiResult.body.relatedQuestions || [])
              .filter((q) => q.question !== typedVal)
              .map((q) => q.question)
              .slice(0, 5);
            if (summary && related.length) {
              showSummary(summary);
              showRelated(related);
              closeMobileSearchMode();
            } else {
              // Cache has no summary — retry with summarize:true to get the AI answer.
              // Clear stale content and show a loading indicator while waiting for the response.
              $results.show();
              $results.find('.inpage-fallback-message').remove();
              $promo.hide();
              $promoText.html('');
              $related.hide().empty();
              if ($relatedHeader.length) $relatedHeader.hide();
              $results.find('.inpage-loading-indicator').remove();
              $results.prepend($('<div>').addClass('inpage-loading-indicator').attr('aria-live', 'polite').attr('aria-label', 'Loading results').text('Loading\u2026'));

              isSearchPending = true;
              fetchAnswerFromApi(typedVal)
                .then((result) => {
                  isSearchPending = false;
                  $results.find('.inpage-loading-indicator').remove();
                  lastApiResult = result;
                  lastApiResultQuery = typedVal;
                  const retrySummary = (result.body.summary || '').toString().trim();
                  const retryRelated = (result.body.relatedQuestions || [])
                    .filter((q) => q.question !== typedVal)
                    .map((q) => q.question)
                    .slice(0, 5);
                  if (retrySummary && retryRelated.length) {
                    showSummary(retrySummary);
                  } else {
                    showFallback(retrySummary);
                  }
                  showRelated(retryRelated);
                  closeMobileSearchMode();
                })
                .catch(() => {
                  isSearchPending = false;
                  $results.find('.inpage-loading-indicator').remove();
                  showFallback('');
                  showRelated([]);
                  closeMobileSearchMode();
                });
            }
          }
        } else if (e.which === Config.CONSTANTS.KEYCODE.ESCAPE) {
          e.preventDefault();
          if (isOverlayOpen()) {
            reset();
          } else {
            closeSuggestions(true);
          }
        }
      });

      // Select suggestion + keyboard navigation inside listbox
      $root.on('keydown', Config.SELECTORS.suggestionItem, function (e) {
        const $item = $(this);

        // Allow Tab / Shift+Tab to move focus out naturally (no trapping)
        if (e.which === 9) {
          closeSuggestions(false);
          return; // do not preventDefault
        }

        if (e.which === Config.CONSTANTS.KEYCODE.ESCAPE) {
          e.preventDefault();
          closeSuggestions(true);
          return;
        }

        if (e.which === Config.CONSTANTS.KEYCODE.DOWN_ARROW) {
          e.preventDefault();
          const $next = $item.next(Config.SELECTORS.suggestionItem);
          if ($next.length) {
            $next.focus();
            $input.attr('aria-activedescendant', $next.attr('id'));
          }
          return;
        }

        if (e.which === Config.CONSTANTS.KEYCODE.UP_ARROW) {
          e.preventDefault();
          const $prev = $item.prev(Config.SELECTORS.suggestionItem);
          if ($prev.length) {
            $prev.focus();
            $input.attr('aria-activedescendant', $prev.attr('id'));
          } else {
            // At the top of the list: return to input so focus doesn't get stuck.
            $input.removeAttr('aria-activedescendant');
            $input.focus();
          }
          return;
        }

        if (e.which === Config.CONSTANTS.KEYCODE.ENTER || e.which === Config.CONSTANTS.KEYCODE.SPACE) {
          e.preventDefault();
          const selectedQuestion = $item.text().trim();
          // Read search context from the stamped data-track attribute so that
          // tagging always reflects the state at render time, not mutated DOM.
          let typedTerm = $input.val().trim();
          let resultsCount = $box.find(Config.SELECTORS.suggestionItem).length;
          try {
            const track = JSON.parse($item.attr('data-track') || '{}');
            if (track.searchTerm) typedTerm = track.searchTerm;
            if (track.totalResults) resultsCount = track.totalResults;
          } catch (err) { /* use live values as fallback */ }
          setSuggestionSelectTag(typedTerm, selectedQuestion, resultsCount);
          // Force a fresh API call with the selected question text.
          lastApiResult = null;
          selectQuestion(selectedQuestion);
        }
      });

      $root.on('click', Config.SELECTORS.suggestionItem, function (e) {
        e.preventDefault();
        const $item = $(this);
        const selectedQuestion = $item.text().trim();
        // Read search context from the stamped data-track attribute so that
        // tagging always reflects the state at render time, not mutated DOM.
        let typedTerm = $input.val().trim();
        let resultsCount = $box.find(Config.SELECTORS.suggestionItem).length;
        try {
          const track = JSON.parse($item.attr('data-track') || '{}');
          if (track.searchTerm) typedTerm = track.searchTerm;
          if (track.totalResults) resultsCount = track.totalResults;
        } catch (err) { /* use live values as fallback */ }
        setSuggestionSelectTag(typedTerm, selectedQuestion, resultsCount);
        // Force a fresh API call with the selected question text.
        lastApiResult = null;
        selectQuestion(selectedQuestion);
      });

      // Clear button (search icon acts as clear when there is content)
      $btn.on('click keydown', function (e) {
        if (e.type === 'keydown' && ![Config.CONSTANTS.KEYCODE.ENTER, Config.CONSTANTS.KEYCODE.SPACE].includes(e.which)) return;
        e.preventDefault();

        const hasValue = $input.val().length > 0 || $hidden.val().length > 0;
        if (hasValue) reset();
      });

      // ── Pre-tagging on mousedown/touchstart ─────────────────────────────────
      // Analytics may use a capture-phase click listener on document that fires
      // BEFORE our bubble-phase jQuery handlers. By setting window.vzdl on
      // mousedown (which always precedes click), the correct state is in place
      // before any click listener — capture or bubble — can read it.

      // Related header: tag on pointerdown so expand/collapse state is pre-set.
      $root.on('pointerdown', Config.SELECTORS.relatedHeader, function () {
        if (suppressAccordionExpandTagging) return;
        const expanded = $(this).attr('aria-expanded') !== 'false';
        setPageLinkTag(expanded ? 'related:collapsed' : 'related:expanded');
      });

      // Thumbs: tag on pointerdown so up/down state is pre-set.
      $root.on('pointerdown', '.inpage-thumbup, .inpage-thumbdown', function () {
        if (suppressAccordionExpandTagging) return;
        if ($(this).attr('aria-disabled') === 'true') return;
        const isThumbUp = $(this).hasClass('inpage-thumbup');
        try {
          window.vzdl = window.vzdl || {};
          window.vzdl.search = {};
          window.vzdl.target = {};
          window.vzdl.page = {};
          window.vzdl.page.link = isThumbUp ? 'thumbs up' : 'thumbs down';
        } catch (err) { /* silently ignore */ }
      });

      // Related pill buttons (delegated, covers dynamically created buttons).
      $root.on('pointerdown', '.top-question-item', function () {
        if (suppressAccordionExpandTagging) return;
        const $btn = $(this);
        const questionText = $btn.text().trim();
        if (isQuestionAccordionExpanded(questionText)) {
          clearRelatedPillTagState();
          return;
        }
        try {
          window.vzdl = window.vzdl || {};
          window.vzdl.search = {};
          window.vzdl.target = {};
          window.vzdl.page = {};
          window.vzdl.page.link = RELATED_PILL_LINK_VALUE;
          window.vzdl.target.message = questionText;
        } catch (err) { /* silently ignore */ }
      });

      // ─────────────────────────────────────────────────────────────────────────

      // Related expand/collapse
      $root.on('click keydown', Config.SELECTORS.relatedHeader, function (e) {
        if (e.type === 'keydown' && ![Config.CONSTANTS.KEYCODE.ENTER, Config.CONSTANTS.KEYCODE.SPACE].includes(e.which)) return;
        e.preventDefault();
        const expanded = $(this).attr('aria-expanded') !== 'false';
        const relatedToggleTag = expanded ? 'related:collapsed' : 'related:expanded';
        $(this).attr('aria-expanded', expanded ? 'false' : 'true');
        // Tag: ensure vzdl is correct for keyboard activation (mousedown not fired for keyboard).
        if (e.type === 'keydown') {
          setPageLinkTag(relatedToggleTag);
        }

        // Clear after this interaction cycle so later unrelated clicks don't reuse it.
        clearPageLinkTagSoon(relatedToggleTag);

        if (expanded) {
          $related.hide();
        } else {
          if ($related.children().length) $related.show();
        }
      });

      // Thumb button — show thank-you message, mark pressed, disable both buttons
      $root.on('click', '.inpage-thumbup, .inpage-thumbdown', function (e) {
        const $this = $(this);
        const thumbLinkTag = $this.hasClass('inpage-thumbup') ? 'thumbs up' : 'thumbs down';

        // Keyboard activation path (pointerdown does not fire for keyboard users).
        if (e.detail === 0) {
          setPageLinkTag(thumbLinkTag);
        }

        // Ignore if already voted
        if ($this.attr('aria-disabled') === 'true') {
          clearPageLinkTagSoon(thumbLinkTag);
          e.stopPropagation();
          e.preventDefault();
          return;
        }

        const $allThumbs = $root.find('.inpage-thumbup, .inpage-thumbdown');
        const $thankyou = $root.find('.inpage-helpful .ratings_box_text');

        // Mark selected button as pressed, clear the other
        $allThumbs.attr('aria-pressed', 'false');
        $this.attr('aria-pressed', 'true');

        // Show thank-you message (matches ratings_box_text pattern on other support pages)
        $thankyou.html('Thank you for your feedback.').show();

        // Disable both buttons so they cannot be clicked again
        $allThumbs.attr({
          'aria-disabled': 'true',
          tabindex: '-1'
        }).css('cursor', 'default');

        // Clear tag after this interaction cycle so later clicks don't inherit it.
        clearPageLinkTagSoon(thumbLinkTag);
      });

      // Start default state
      reset();
      ensureComboboxAria();
      bindBackdropDismiss();
      bindScrollDismiss();
    };

    return Object.freeze({ bind, reset });
  };

  $(function () {
    // Ensure shared helper exists; if not, fall back gracefully (no highlight)
    const roots = document.querySelectorAll(Config.SELECTORS.root);
    roots.forEach((r) => UI(r).bind());
  });
})(jQuery, window, document);
