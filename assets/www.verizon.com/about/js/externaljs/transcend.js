(async function () {
  // ==================== FEATURE FLAG SYSTEM ====================
  /*
   * This script supports two modes via feature flag:
   * 
   * LEGACY MODE (default):
   * - Domestic-only implementation (original behavior)
   * - Always loads US bundle (b08625f4-86ff-4106-9034-a849ffc1f7f6)
   * - Shows US privacy banner for all users
   * - No international country detection or handling
   * 
   * NEW MODE (opt-in via useNewImpl()):
   * - International support enabled
   * - Detects user country via geolocation API
   * - Loads international bundle for opt-in/opt-out countries
   * - Shows appropriate banner based on user location
   * - Allows mocking countries for testing
   * 
   * USAGE:
   * - useNewImpl()            - Enable international support (requires page refresh)
   * - useOldImpl()      - Disable international support, use legacy mode (requires page refresh)
   * - checkIntlFeatureStatus() - Check current mode
   * - showPrivacyConfig()     - Display current configuration
   * - setUdnsCountry("uk")    - Mock user country (only works when intl enabled)
   * - getUdnsCountry()        - Show current/detected country
   */

  // ==================== CONSTANTS & CONFIGURATION ====================
  const SYNC_GRP =
    "3e1db8d7e927e65ebdea683143ab1db4511e86f8dfad7916b7808217b30683af";
  
  var isLowerEnv = /www98.verizon/i.test(location.host);
  var APIDomainName = isLowerEnv ? "www.verizonwireless.com" : "www.verizon.com";

  const script = document.createElement("script");
  
  const COOKIES = {
    USER_LOCATION_SESSION: "geoC",
    UDNS_LOG: "UDNS_LOG",
    MOCK_SAFARI: "mockSafari",
    BANNER_SESSION_COUNT: "UDNS_NTCS",
    INTL_FEATURE_FLAG: "UDNS_INTL_ENABLED",
    ONE_TRUST_CONSENT: "OptanonConsent",
    ONE_TRUST_CONSENT_COPIED: "UDNS_OT_COPIED"
  };

  // ==================== ONETRUST THROTTLE CONFIGURATION ====================
  // Phase 1: 0% (dark deployment - BAU for all users)
  // Phase 2: 10%
  // Phase 3: 50%
  // Phase 4: 100% (OT no longer loading)
  // Phase 5: Remove throttle logic entirely
  const OT_THROTTLE_PERCENTAGE = 0;

  const CONSTANTS = {
    COOKIES: COOKIES,
    TIME: {
      ONE_YEAR_FROM_NOW: new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toUTCString()
    }
  };

  const LS_KEYS = {
    INTL_FEATURE: "HANDLE_INTL_USERS",
    USER_LOCATION: "objGeo",
    MOCKED_USER_COUNTRY: "udnsMockLoc"
  };

  const BUNDLE_IDS = {
    DOMESTIC: "b08625f4-86ff-4106-9034-a849ffc1f7f6",
    INTERNATIONAL: "3af916e8-8603-4dab-8e11-bc4ab16e039e"
  };

    const ELEMENTS = {
    BANNER: {
      INTL: { TYPE: "AcceptOrRejectAllOrMoreChoices" },
      US: {
        ID_SELECTOR: "#transcend-consent-manager",
        MAIN_DIALOGUE_ID_SELECTOR: "#consentManagerMainDialog",
        TYPE: "PrivacyPolicyNotice",
      },
    },
    GLOBAL_FOOTER: "gnav20-footer-level-two",
  };
  
  const OPT_OUT_COUNTRIES = [
    "cn",
    "china",
    "il",
    "israel",
    "ph",
    "philippines",
    "sg",
    "singapore",
    "uy",
    "uruguay",
    "vn",
    "vietnam",
  ];
  const OPT_IN_COUNTRIES = [
    "eu",
    "european union",
    "br",
    "brazil",
    "ca",
    "canada",
    "co",
    "colombia",
    "et",
    "ethiopia",
    "is",
    "iceland",
    "in",
    "india",
    "id",
    "indonesia",
    "jp",
    "japan",
    "li",
    "liechtenstein",
    "my",
    "malaysia",
    "mx",
    "mexico",
    "ng",
    "nigeria",
    "no",
    "norway",
    "pe",
    "peru",
    "ru",
    "russia",
    "za",
    "south africa",
    "kr",
    "south korea",
    "ch",
    "switzerland",
    "th",
    "thailand",
    "tr",
    "turkey",
    "ae",
    "united arab emirates",
    "gb",
    "united kingdom",
    "uk",
    "united kingdom",
  ];

  // ==================== UTILITY FUNCTIONS ====================
  
  function getCk(cName) {
    var name = cName + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") {
        c = c.substring(1);
      }
      if (c.indexOf(name) === 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function setLclCk(cName, cVal, cExp = "") {
    document.cookie =
      cName +
      "=" +
      cVal +
      "; domain=." +
      window.location.hostname.match(
        /^(?:.*?\.)?([a-zA-Z0-9\-_]{3,}\.(?:\w{2,8}|\w{2,4}\.\w{2,4}))$/
      )[1] +
      "; path=/; expires=" +
      cExp;
  }

  cLog = function (txt, strc = 0) {
    if (window.UDNS_LOG > 0 || strc > 9 || isLowerEnv) {
      const e = new Error();
      if (!e.stack) {
        try {
          throw e;
        } catch (e) {
          if (!e.stack) {
          }
        }
      }
      const cLine = e.stack.toString().split(/\r\n|\n/);
      if(cLine.length < 3) {
        console.log("\u001b[33m" + "cLog unable to determine line number(cLine)");
      } else {
        const nLine = cLine[2].trim().split(/\:/);
        if(nLine.length < 3) {
          nLine[2] = "undefined";
          console.log("\u001b[33m" + "cLog unable to determine line number(nLine)");
        }
        console.log("\u001b[32m" + `line ${nLine[2]}: ${txt}`);
      }
    }
  };

  // ==================== HELPER FUNCTIONS ====================

  function isInternationalBundleLoaded() {
    return window.UDNS_ACTIVE_BUNDLE === BUNDLE_IDS.INTERNATIONAL;
  }

  function isDomesticBundleLoaded() {
    return window.UDNS_ACTIVE_BUNDLE === BUNDLE_IDS.DOMESTIC;
  }

  function isIntlFeatureEnabled() {
    return localStorage.getItem(LS_KEYS.INTL_FEATURE) === "1" || getCk(COOKIES.INTL_FEATURE_FLAG) === "1";
  }

  // ==================== TESTING/MOCK FUNCTIONS ====================

  // Feature flag to enable/disable international user handling
  window.useNewImpl = () => {
    try {
      localStorage.setItem(LS_KEYS.INTL_FEATURE, "1");
      return "International user handling enabled - refresh page to apply";
    } catch (e) {
      cLog("localStorage not available, using cookie fallback");
      setLclCk(COOKIES.INTL_FEATURE_FLAG, "1");
      return "International user handling enabled (cookie fallback) - refresh page to apply";
    }
  };

  window.useOldImpl = () => {
    try {
      localStorage.removeItem(LS_KEYS.INTL_FEATURE);
    } catch (e) {
      cLog("localStorage not available, clearing cookie");
    }
    setLclCk(COOKIES.INTL_FEATURE_FLAG, "", "Thu, 01 Jan 1970 00:00:00 GMT");
    return "Legacy (domestic-only) handling enabled - refresh page to apply";
  };

  window.checkIntlFeatureStatus = () => {
    const isEnabled = isIntlFeatureEnabled();
    return `International feature is currently ${isEnabled ? "ENABLED" : "DISABLED (using legacy)"}`;
  };
  
  window.setUdnsCountry = (country) => {
    if (!isIntlFeatureEnabled()) {
      return "International feature is disabled - run useNewImpl() first to enable international user handling";
    }
    
    if (!country) {
      // Clear mock - remove objGeo and geoC cookie
      localStorage.removeItem(LS_KEYS.USER_LOCATION);
      localStorage.removeItem(LS_KEYS.MOCKED_USER_COUNTRY);
      setLclCk(COOKIES.USER_LOCATION_SESSION, "");
      return "Cleared mocked country - will fetch fresh location on next page load";
    } else {
      country = country.trim().toLowerCase();
      
      // Don't validate - allow any country to be set
      // The script will handle unsupported countries by defaulting to domestic bundle
      
      // Update ctry in objGeo directly (preserve other properties if they exist)
      let existingGeoData = {};
      try {
        const storedGeo = localStorage.getItem(LS_KEYS.USER_LOCATION);
        if (storedGeo) {
          existingGeoData = JSON.parse(storedGeo);
        }
      } catch {
        // Invalid JSON, start fresh
      }
      const updatedGeoData = { ...existingGeoData, ctry: country };
      localStorage.setItem(LS_KEYS.USER_LOCATION, JSON.stringify(updatedGeoData));
      localStorage.setItem(LS_KEYS.MOCKED_USER_COUNTRY, country);
      setLclCk(COOKIES.USER_LOCATION_SESSION, "1");
      
      // Check if country is in supported lists
      const isIntlCountry = OPT_IN_COUNTRIES.includes(country) || OPT_OUT_COUNTRIES.includes(country);
      if (isIntlCountry) {
        return `Mocking user in ${country.toUpperCase()} (international) - reload page to load international bundle`;
      } else {
        return `Mocking user in ${country.toUpperCase()} (not in international lists) - reload page to load domestic bundle`;
      }
    }
  };

  window.getUdnsCountry = () => {
    try {
      const storedGeo = localStorage.getItem(LS_KEYS.USER_LOCATION);
      if (storedGeo) {
        const geoData = JSON.parse(storedGeo);
        const country = geoData?.ctry || "unknown";
        return `User is currently identified as being in ${country.toUpperCase()}`;
      }
    } catch {
      return "Unable to retrieve user country";
    }
    return "User country not yet determined";
  };

  window.useAirgapLogs = function () {
    setLclCk(COOKIES.UDNS_LOG, 1);
    return "subsequent page loads during this session will show related logs in green";
  };

  window.UDNS_LOG = Number(getCk(COOKIES.UDNS_LOG));

  // Safari browser mocking
  let safariBrowser = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
  if (getCk(COOKIES.MOCK_SAFARI) === "true") safariBrowser = true;

  window.mockSafari = (boolean = "true") => {
    setLclCk(COOKIES.MOCK_SAFARI, boolean);
    if(boolean === "true"){
      return "cookie expiration API will now be called on page refresh for the rest of the browser session"
    } else {
      return "cookie expiration API will not be called on page refresh for the rest of the browser session"
    }
  }

  // ==================== MODULE-LEVEL STATE ====================
  let resolvedUserLocation = "us";
  let resolvedBundleId = BUNDLE_IDS.DOMESTIC;
  let resolvedIntlEnabled = false;

  // ==================== AIRGAP INITIALIZATION ====================
  
  if (!self.airgap) {
    self.airgap = {
      readyQueue: [],
      ready(callback) {
        this.readyQueue.push(callback);
      },
      ...self.airgap,
    };
  }

  // ==================== USER LOCATION FUNCTIONS ====================
  
  async function getUserLocation() {
    cLog("getUserLocation() - fetching from API");
    let apiUrl = "https://www.verizon.com/business/geoloc.json";
    if (isLowerEnv) apiUrl = "https://www98.verizon.com/business/geoloc.json";
    
    try {
      const response = await fetch(apiUrl, { referrerPolicy: "origin" });
      if (!response.ok) {
        throw new Error(`Response status: ${response.status}`);
      }
      const userLocationData = await response.json();
      cLog(JSON.stringify(userLocationData));
      localStorage.setItem(LS_KEYS.USER_LOCATION, JSON.stringify(userLocationData));
      setLclCk(COOKIES.USER_LOCATION_SESSION, "1");
      return userLocationData?.ctry || "";
    } catch (error) {
      cLog(error.message);
      console.error("Error fetching user location:", error);
      return "";
    }
  }

  async function checkUserLocation() {
    cLog("checkUserLocation()");
    try {
      if (getCk(COOKIES.USER_LOCATION_SESSION) === "1") {
        const userLocationData = JSON.parse(localStorage.getItem(LS_KEYS.USER_LOCATION));
        cLog(`user location retrieved from local storage: ${JSON.stringify(userLocationData)}`);
        if (userLocationData?.ctry) {
          return userLocationData.ctry;
        }
      }
      // No valid cached location, fetch from API
      cLog("no user location value in local storage - checking user location");
      return await getUserLocation();
    } catch (e) {
      cLog("no user location value in local storage - checking user location");
      return await getUserLocation();
    }
  }

  // ==================== SAFARI COOKIE EXTENSION ====================
  
  extendCookieLife = async () => {
    console.log("extendCookieLife called");
    console.log("SYNC_GRP:" + SYNC_GRP);
    const cookieName = `tcm-${SYNC_GRP}`;
    console.log("APIDomainName:" + APIDomainName);
    const cookieExtensionUrl = `https://${APIDomainName}/soe/digital/peripheralsservice/nse/cSvc`;
    const fetchConfig = {
      method: "POST",
      headers: {
        "Target-Ck": cookieName,
        "Target-Ctl": `${cookieName}_s`,
        "Content-Type": "application/json",
        channelId: "VZW-MFA-ANDROID",
      },
    };

    try {
      const response = await fetch(cookieExtensionUrl, fetchConfig);
      const responseBody = await response.json();
      console.log("Response from cookie extension call:");
      console.log(responseBody);
    } catch (error) {
      //TODO - handle error
    }
  };

  // ==================== PRIVACY & CONSENT FUNCTIONS ====================
  
  function activeGPC() {
    return (
      navigator.globalPrivacyControl === true ||
      navigator.globalPrivacyControl === "true" ||
      navigator.globalPrivacyControl === 1 ||
      navigator.globalPrivacyControl === "1" ||
      window.UDNS_PARMS.get("UDNS_GPC") === "true"
    );
  }

  function gatherAEIData() {
    cLog("gatherAEIData()");
    function getKVal(val) {
      try {
        if (val.startsWith("ck!")) {
          return getCk(val.substring(3));
        } else {
          return eval(val);
        }
      } catch {
        return "";
      }
    }
    var kTJ = {
      UniqDNSUserID: "window.UDNS_ID",
      UDNS_THROTTLE: "window.UDNS_THROTTLE",
      _gid: "ck!_gid",
      "User-Agent": "navigator.userAgent",
      Invoca_Session: "ck!invoca_session",
    };
    var newAEIjson = {};
    newAEIjson.email = [
      {
        value: getKVal(
          "window.UDNS_RES.body.data.privacyChoiceOptOutResponse.emailId"
        ),
      },
    ];
    newAEIjson.phone = [{ value: "" }];
    newAEIjson.custom = [{}];
    var custWork = {};
    var custom = [];
    for (var x in kTJ) {
      custWork = { name: x, value: getKVal(kTJ[x]) };
      custom.push(custWork);
    }
    newAEIjson.custom = custom;
    window.UDNS_AEI = newAEIjson;
  }

  async function setProfGuest(priorPrefValue, newPrefValue) {
    cLog("setProfGuest()");
    gatherAEIData();
    var postJson = {
      visitorSessionId: window.UDNS_ID,
      requestType: "GPC",
      unifiedLogin: "false",
      emailId: "",
      firstName: "",
      lastName: "",
      mtn: "",
      globalOptOutPrefs: [
        {
          accountId: "",
          serviceType: "guest",
          role: "",
          optOutFlags: [
            { type: "DT", prevValue: priorPrefValue, newValue: newPrefValue },
          ],
        },
      ],
    };
    postJson.transcendJson = window.UDNS_AEI;
    const response = await fetch(
      "https://" +
        APIDomainName +
        "/soe/digital/prospect/dns/ccpa-core/updateGlobalOptOut",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(window.UDNS_AEI),
      }
    );
    if (!response.ok) {
      throw Error("HTTP error: " + response.status);
    }
    const update = response.json();
    cLog(`setProfGuest response: ${JSON.stringify(update)}`);
    window.UDNS_POST = update;
    try {
      if (update.statusCode != "200") {
        throw Error(
          "Guest Update Status: " +
            update.statusCode +
            " Text: " +
            update.statusMessage
        );
      }
      airgap.setConsent(
        window.airgapScriptLoadEvent,
        { SaleOfInfo: false },
        { metadata: { ...(airgap.getConsent().metadata || {}) } }
      );
    } catch (e) {
      cLog(e.message);
      return false;
    }
    return true;
  }

  async function syncUdnsId() {
    const UDNS_IDfromAirgapMetadata = airgap.getConsent().metadata?.UDNS_ID;

    let udns_id = "";
    if (UDNS_IDfromAirgapMetadata) {
      udns_id = UDNS_IDfromAirgapMetadata;
    } else {
      var sT = String(
        Math.random().toString(16) +
          Date.now().toString(16) +
          Math.random().toString(16)
      ).replace(/0*\./g, "");
      udns_id =
        sT.substring(0, 8) +
        "-" +
        sT.substring(8, 4) +
        "-4" +
        sT.substring(12, 3) +
        "-" +
        sT.substring(15, 4) +
        "-" +
        sT.substring(19, 12);
    }
    if (UDNS_IDfromAirgapMetadata != udns_id) {
      await airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
        ...(airgap.getConsent().metadata || {}),
        UDNS_ID: udns_id,
      });
    }
  }

  // ==================== DYNAMIC AIRGAP SCRIPT TAG CONFIGURATION ====================
  
  (async function configureAirgapScriptTag() {
    try {
      // Check if international feature is enabled
      resolvedIntlEnabled = isIntlFeatureEnabled();
      cLog(`International feature enabled: ${resolvedIntlEnabled}`);
      
      // Always resolve user location (needed in both legacy and new mode
      // to prevent showing US banner to international users)
      const mockedCountry = localStorage.getItem(LS_KEYS.MOCKED_USER_COUNTRY);
      if (mockedCountry) {
        resolvedUserLocation = mockedCountry.toLowerCase();
        cLog(`Using mocked country: ${resolvedUserLocation}`);
      } else {
        resolvedUserLocation = (await checkUserLocation()).toLowerCase();
      }
      cLog(`Resolved user location: ${resolvedUserLocation}`);

      if (resolvedIntlEnabled) {
        // NEW IMPLEMENTATION: International support enabled
        cLog("Using NEW implementation with international support");
        
        // Only use international bundle if country is in the supported lists
        // Otherwise default to domestic bundle
        if (OPT_IN_COUNTRIES.includes(resolvedUserLocation) || OPT_OUT_COUNTRIES.includes(resolvedUserLocation)) {
          resolvedBundleId = BUNDLE_IDS.INTERNATIONAL;
          cLog(`User in international country (${resolvedUserLocation}), loading intl bundle`);
        } else {
          resolvedBundleId = BUNDLE_IDS.DOMESTIC;
          cLog(`User country (${resolvedUserLocation}) not in international lists or is US, loading domestic bundle`);
        }
      } else {
        // OLD/LEGACY IMPLEMENTATION: Domestic-only (no international handling)
        cLog("Using LEGACY implementation (domestic-only, no international support)");
        resolvedBundleId = BUNDLE_IDS.DOMESTIC;
      }
      
      // Store on window immediately (before script loads) so they're available in airgap.ready
      window.UDNS_ACTIVE_BUNDLE = resolvedBundleId;
      window.UDNS_INTL_ENABLED = resolvedIntlEnabled;
      window.UDNS_USER_LOCATION = resolvedUserLocation;

      let airgapScriptUrl = `https://cdn.transcend.io/cm/${resolvedBundleId}/airgap.js`;
      if (isLowerEnv) airgapScriptUrl = `https://cdn.transcend.io/cm-test/${resolvedBundleId}/airgap.js`;
      script.src = airgapScriptUrl;
      script.defer = true;
      script.setAttribute(
        "data-sync-endpoint",
        "https://www.verizon.com/vendor/transcend/vz/xdi.html"
      );
      script.setAttribute("data-cfasync", "false");
      script.setAttribute("data-require-auth", "off");
      script.setAttribute("data-locale", "en");
      if(!isLowerEnv) script.setAttribute("data-privacy-policy","https://www.verizon.com/about/privacy/cookies/management?ssf")

      // Only set data-regime for international users when feature is enabled
      if (resolvedIntlEnabled && resolvedBundleId === BUNDLE_IDS.INTERNATIONAL) {
        let regionalExperience = "intl-opt-in";
        if (OPT_OUT_COUNTRIES.includes(resolvedUserLocation)) regionalExperience = "intl-opt-out";
        script.setAttribute("data-regime", regionalExperience);
        cLog(`Set data-regime to: ${regionalExperience}`);
      }

      script.onload = function(event) {
        console.log("Airgap script loaded");
        window.airgapScriptLoadEvent = event;
      };

      script.onerror = function(error) {
        console.error("Error loading airgap script:", error);
      };

      document.head.appendChild(script);
      cLog(`Script appended - Bundle: ${resolvedBundleId}, Location: ${resolvedUserLocation}`);
    } catch (error) {
      console.error("Error configuring airgap script tag:", error);
    }
  })();

  // ==================== PRIVACY BANNER IMPLEMENTATION ====================
  
  function preparePrivacyBanner() {
    cLog("preparePrivacyBanner()");
    
    // Safety check: Don't prepare US banner if international bundle is loaded
    if (isInternationalBundleLoaded()) {
      cLog("International bundle detected - skipping US banner preparation");
      return;
    }

    window.displayNTC = function () {
      cLog(
        "displayNTC() - add padding to the footer and displaying the banner"
      );

      setTimeout(function () {
        document.getElementsByClassName(
          ELEMENTS.GLOBAL_FOOTER
        )[0].style.paddingBottom = "90px";
      }, 1000);

      /* Log the display of the Privacy Banner */
      window.coreData = window.coreData || [];
      window.coreData.push({
        task: "emit",
        event: "openView",
        params: {
          selector: ELEMENTS.BANNER.US.ID_SELECTOR,
          name: "PRIVACY_BANNER_DISPLAY",
          trackAs: "link",
        },
      });

      transcend.showConsentManager({ viewState: ELEMENTS.BANNER.US.TYPE });

      transcend.addEventListener(
        "view-state-change",
        ({ detail: { viewState, previousViewState } }) => {
          cLog(`view-state-change event fired with viewState: ${viewState}`);
          if (
            viewState === "Hidden" &&
            previousViewState === ELEMENTS.BANNER.US.TYPE
          ) {
            cLog("banner has been closed");
            airgap
              .sync()
              .then(() =>
                airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
                  ...(airgap.getConsent().metadata || {}),
                  UDNS_NTCD: Date.now(),
                  UDNS_NTCV: 0,
                })
              )
              .then(() =>
                cLog(
                  "Set NTCD To " +
                    UDNS_NTCD +
                    " and removing padding from footer"
                )
              ),
              (document.getElementsByClassName(
                ELEMENTS.GLOBAL_FOOTER
              )[0].style.paddingBottom = "");

            window.coreData = window.coreData || [];
            window.coreData.push({
              task: "emit",
              event: "linkClick",
              params: {
                name: "privacy banner close",
                detail: "PRIVACY_BANNER_DISPLAY",
              },
            });
          } else {
            cLog("banner has been displayed on the page");
          }
        }
      );

      window.UDNS_NTC_VISUAL = Date.now();
    };

    function validateBannerDisplayOnAirgapLoad() {
      cLog("validateBannerDisplayOnAirgapLoad()");
      
      // Safety check: Don't validate if international bundle is loaded
      if (isInternationalBundleLoaded()) {
        cLog("International bundle detected - skipping banner validation");
        return;
      }
      
      var NTCinit = 0;
      for (let i = 500; i < 5001; i += 250) {
        setTimeout(() => {
          if (NTCinit === 0) {
            if (
              typeof transcend === "object" &&
              typeof transcend.addEventListener === "function"
            ) {
              cLog(
                "transcend loaded - ready to check if privacy banner should be displayed"
              );
              NTCinit = i;
              validateBannerDisplay();
            } else {
              //wait another 500ms for transcend to load
            }
          }
        }, i);
      }
    }

    const inApp = /(MY_VZW_APP|MFA)/i.test(
      (navigator && navigator.userAgent) || ""
    );
    const inFiosTV = /(client_id=VerizonTVAgent)/i.test(
      window.location.href || ""
    );
    const inStreamTV = /(client_id=StreamTVAgent)/i.test(
      window.location.href || ""
    );
    if (inApp != true && inFiosTV != true && inStreamTV != true) {
      validateBannerDisplayOnAirgapLoad();
    }

    function validateBannerDisplay() {
      cLog("validateBannerDisplay()");
      
      // Safety check: Don't display if international bundle is loaded
      if (isInternationalBundleLoaded()) {
        cLog("International bundle detected - not displaying US banner");
        return;
      }
      
      if (typeof transcend != "object") {
        cLog(
          "Transcend Not Yet Loaded - returning out of validateBannerDisplay"
        );
        return 0;
      }

      const airgapMetadata = airgap.getConsent().metadata;
      window.UDNS_NTCD = airgapMetadata?.UDNS_NTCD
        ? Number(airgapMetadata.UDNS_NTCD)
        : 0;
      let bannerDismissalDate = airgapMetadata?.UDNS_NTCD
        ? Number(airgapMetadata.UDNS_NTCD)
        : 0;
      let sessionsWithBanner = airgapMetadata?.UDNS_NTCV
        ? Number(airgapMetadata.UDNS_NTCV)
        : 0;

      cLog(
        `validateBannerDisplay() - setting window values regarding display of banner from airgap metadata\n
              airgapMetadata: ${JSON.stringify(airgapMetadata)}\n
              bannerDismissalDate: ${bannerDismissalDate}\n
              sessionsWithBanner: ${sessionsWithBanner}`
      );

      if (bannerDismissalDate < Date.now() - 7.776e9) {
        if (sessionsWithBanner < 2) {
          var bannerViewsInFirstTwoSessions = Number(getCk(COOKIES.BANNER_SESSION_COUNT));

          if (bannerViewsInFirstTwoSessions === 0) {
            setLclCk(COOKIES.BANNER_SESSION_COUNT, 1);
            sessionsWithBanner += 1;
            airgap
              .sync()
              .then(() =>
                airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
                  ...(airgap.getConsent().metadata || {}),
                  UDNS_NTCV: sessionsWithBanner,
                })
              )
              .then(() =>
                cLog(
                  "validateBannerDisplay() - first view of banner and first session with banner - displaying the privacy banner"
                )
              )
              .then(window.displayNTC());
          } else {
            /* Only show the banner to the first 3 pages in a session */
            if (bannerViewsInFirstTwoSessions < 3) {
              bannerViewsInFirstTwoSessions += 1;
              setLclCk(COOKIES.BANNER_SESSION_COUNT, bannerViewsInFirstTwoSessions);
              cLog(
                "validateBannerDisplay() - user has seen the banner less than 3 times in the first 2 sessions - displaying the privacy banner"
              );
              window.displayNTC();
            } else {
              cLog(
                "validateBannerDisplay() - user has seen the banner 3 times within 2 browser sessions - no privacy banner"
              );
            }
          }
        } else {
          cLog(
            "validateBannerDisplay() - this is the third session or greater on Verizon and the banner was displaying for the first 2 sessions - no privacy banner"
          );
          window.UDNS_NTCD = Date.now();
          airgap
            .sync()
            .then(() =>
              airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
                ...(airgap.getConsent().metadata || {}),
                UDNS_NTCD: window.UDNS_NTCD,
                UDNS_NTCV: 0,
              })
            )
            .then(() =>
              cLog(
                "validateBannerDisplay() - setting banner dismissal date to now and number of session visits with banner to 0 on window and airgap metadata"
              )
            );
        }
      } else {
        cLog("no privacy banner - has been dismissed in the last 90 days");
      }
    }
  }

  window.NTCpvc = function () {
    const isInternational = isInternationalBundleLoaded();
    const privacyPolicyUrl = isInternational 
      ? "https://www.verizon.com/about/privacy/international-policy"
      : "https://www.verizon.com/about/privacy";
    
    cLog(`NTCpvc() - opening new tab with ${isInternational ? 'international' : 'domestic'} privacy policy`);
    
    window.coreData = window.coreData || [];
    window.coreData.push({
      task: "emit",
      event: "linkClick",
      params: {
        name: "privacy banner policy link",
        detail: "PRIVACY_BANNER_DISPLAY",
      },
    });
    
    window.open(privacyPolicyUrl, "_blank");
  };

  window.resetUsBanner = function () {
    cLog("resetUsBanner() called");
    
    // Check if international bundle is loaded
    if (isInternationalBundleLoaded()) {
      cLog("International bundle is loaded - resetUsBanner() blocked");
      return "International bundle is currently loaded - use resetIntlBanner() instead";
    }
    
    cLog("Resetting US banner dismissal and session counts");
    airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
      ...(airgap.getConsent().metadata || {}),
      UDNS_NTCD: Date.now() - 7.777e9,
      UDNS_NTCV: 0,
    });
    setLclCk(COOKIES.BANNER_SESSION_COUNT, 0);
    return "US banner reset - reload page to view for US/domestic users";
  };

  window.resetIntlBanner = () => {
    const intlEnabled = localStorage.getItem(LS_KEYS.INTL_FEATURE) === "1" || getCk(COOKIES.INTL_FEATURE_FLAG) === "1";
    if (!intlEnabled) {
      return "International feature is disabled - this function only works when international support is enabled";
    }
    transcend.showConsentManager({
      viewState: ELEMENTS.BANNER.INTL.TYPE,
    });
    return "International banner will temporarily display until dismissed or next page load";
  };

  window.resetNTCVisits = function (visitCount = 0) {
    airgap.setConsentMetadata(window.airgapScriptLoadEvent, {
      ...(airgap.getConsent().metadata || {}),
      UDNS_NTCV: visitCount,
    });
    setLclCk(COOKIES.BANNER_SESSION_COUNT, 0);
    return `resetting number of visits with banner to ${visitCount} and number of sessions with banner to 0`;
  };

  // Helper function to show current configuration
  window.showPrivacyConfig = () => {
    const intlEnabled = isIntlFeatureEnabled();
    const activeBundle = window.UDNS_ACTIVE_BUNDLE || "not loaded yet";
    const userCountry = window.getUdnsCountry();
    
    console.log("=== Privacy Configuration ===");
    console.log(`International Feature: ${intlEnabled ? "ENABLED (NEW)" : "DISABLED (LEGACY)"}`);
    console.log(`Active Bundle: ${activeBundle}`);
    console.log(`${userCountry}`);
    console.log("============================");
    
    return {
      intlFeatureEnabled: intlEnabled,
      mode: intlEnabled ? "NEW (with international support)" : "LEGACY (domestic only)",
      activeBundle: activeBundle,
      userCountry: userCountry
    };
  };

  // ==================== ONETRUST THROTTLE & MIGRATION LOGIC ====================

  function getEffectiveThrottle() {
    // If useNewImpl() is set, treat throttle as 100%
    if (isIntlFeatureEnabled()) {
      return 100;
    }
    return OT_THROTTLE_PERCENTAGE;
  }

  function isUserInThrottle() {
    const throttle = getEffectiveThrottle();
    if (throttle <= 0) return false;
    if (throttle >= 100) return true;
    // Use a deterministic check based on a cookie or random assignment
    let throttleAssignment = getCk('UDNS_OT_THROTTLE');
    if (!throttleAssignment) {
      throttleAssignment = String(Math.floor(Math.random() * 100));
      setLclCk('UDNS_OT_THROTTLE', throttleAssignment);
    }
    return Number(throttleAssignment) < throttle;
  }

  function deleteCookie(name) {
    const domain = window.location.hostname.match(
      /^(?:.*?\.)?([a-zA-Z0-9\-_]{3,}\.(?:\w{2,8}|\w{2,4}\.\w{2,4}))$/
    )[1];
    document.cookie = name + '=; domain=.' + domain + '; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT';
    document.cookie = name + '=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT';
  }

  function setCookie(name, value, expires) {
    const domain = window.location.hostname.match(
      /^(?:.*?\.)?([a-zA-Z0-9\-_]{3,}\.(?:\w{2,8}|\w{2,4}\.\w{2,4}))$/
    )[1];
    document.cookie = name + '=' + value + '; domain=.' + domain + '; path=/; expires=' + expires;
  }

  async function copyOneTrustConsentToTranscend() {
    cLog('copyOneTrustConsentToTranscend()');

    let oneTrustConsent = getCk(CONSTANTS.COOKIES.ONE_TRUST_CONSENT);
    let oneTrustConsentCopied = getCk(CONSTANTS.COOKIES.ONE_TRUST_CONSENT_COPIED);

    if (!oneTrustConsent || oneTrustConsentCopied) {
      console.log('OneTrust consent cookie not found or already copied');
      return;
    }

    oneTrustConsent = decodeURIComponent(oneTrustConsent);

    // Extract C000 values from OneTrust string (format: C0001:1,C0002:1,...)
    const extractValue = (str, code) => {
      const regex = new RegExp(`${code}:(\\d)`);
      const match = str.match(regex);
      return match ? Number(match[1]) : null;
    };

    const performance = extractValue(oneTrustConsent, 'C0002');
    const functional = extractValue(oneTrustConsent, 'C0003');
    const targeting = extractValue(oneTrustConsent, 'C0004');

    window.airgap.setConsent(
      window.airgapScriptLoadEvent,
      {
        Functional: functional === 1,
        Analytics: performance === 1,
        Advertising: targeting === 1,
      },
      {
        confirmed: false,
        metadata: {
          ...(window.airgap.getConsent().metadata || {}),
        },
      }
    );

    setCookie(CONSTANTS.COOKIES.ONE_TRUST_CONSENT_COPIED, '1', CONSTANTS.TIME.ONE_YEAR_FROM_NOW);
  }

  /**
   * OneTrust Loading Logic:
   * - If throttle is active (> 0) and user is in throttle: don't load OT, copy consent if OT cookie exists
   * - If throttle is active and user is NOT in throttle: don't load OT if no OT cookie; BAU if OT cookie exists
   * - If throttle is not active (0): BAU (load OT normally)
   */
  function handleOneTrustLoading() {
    const throttle = getEffectiveThrottle();
    const otConsentCookie = getCk(CONSTANTS.COOKIES.ONE_TRUST_CONSENT);
    cLog(`OT Throttle: ${throttle}%, User in throttle: ${isUserInThrottle()}, OT cookie present: ${!!otConsentCookie}`);

    if (throttle > 0) {
      // Throttle is active
      if (isUserInThrottle()) {
        // User is in throttle - never load OT
        if (otConsentCookie) {
          // Copy consent values to Transcend, then delete OT cookie
          self.airgap.ready(async () => {
            await copyOneTrustConsentToTranscend();
            deleteCookie(CONSTANTS.COOKIES.ONE_TRUST_CONSENT);
            deleteCookie('OptanonAlertBoxClosed');
            cLog('OT cookie copied to Transcend and deleted');
          });
        } else {
          cLog('User in throttle, no OT cookie - OT will not load');
        }
        return; // Don't load OT
      } else {
        // User is NOT in throttle
        if (!otConsentCookie) {
          cLog('User not in throttle, no OT cookie - OT will not load');
          return; // Don't load OT
        } else {
          // BAU - load OT
          cLog('User not in throttle, OT cookie present - loading OT (BAU)');
          loadOneTrust();
        }
      }
    } else {
      // Throttle is not active - BAU
      cLog('Throttle not active - loading OT (BAU)');
      loadOneTrust();
    }
  }

  function loadOneTrust() {
    const otScript = document.createElement('script');
    otScript.src = 'https://cdn.cookielaw.org/scripttemplates/otSDKStub.js';
    otScript.type = 'text/javascript';
    otScript.charset = 'UTF-8';
    otScript.defer = true;
    otScript.setAttribute('data-domain-script', '6b3745af-fe59-4bf6-8e19-650ed92f9ee9');
    document.head.appendChild(otScript);
    cLog('OneTrust script loaded');
  }

  // Execute OneTrust throttle logic
  handleOneTrustLoading();

  // ==================== AIRGAP EVENT LISTENERS & INITIALIZATION ====================
  
  self.airgap.ready(async (airgap) => {
    cLog("self.airgap.ready callback");
    
    // Safari browser related code start
    let consentResolved = false;
    let timeoutId;

    function extendCookieWithTimeout () {
      timeoutId = setTimeout(() => extendCookieLife(), 2000);
    }
    // Safari browser related code end

    airgap.addEventListener(
      "consent-change",
      async ({ detail: { consent, oldConsent, changes } }) => {
        if (changes) {
          const optPrior = oldConsent.purposes.SaleOfInfo === true ? "N" : "Y";
          const optCur = consent.purposes.SaleOfInfo === true ? "N" : "Y";
          cLog("Previous opt out value: " + optPrior + " New value: " + optCur);
          if (activeGPC() && optPrior === "N" && optCur === "Y") {
            await setProfGuest(optPrior, optCur);
          }
        }
        // Safari browser related code start
        if (consentResolved && safariBrowser) {
          if (timeoutId) clearTimeout(timeoutId);
          extendCookieWithTimeout()
        }
        // Safari browser related code end
      }
    );
    
    syncUdnsId();
    
    // Banner display logic based on feature flag
    // Uses module-level vars (resolvedIntlEnabled, resolvedBundleId, resolvedUserLocation)
    // which are set BEFORE the airgap script is appended, avoiding race conditions
    cLog(`airgap.ready - intlEnabled: ${resolvedIntlEnabled}, bundle: ${resolvedBundleId}, location: ${resolvedUserLocation}`);
    
    if (resolvedIntlEnabled) {
      // NEW IMPLEMENTATION: Only show US banner if using domestic bundle
      if (resolvedBundleId === BUNDLE_IDS.DOMESTIC) {
        cLog("Domestic bundle loaded - will show US banner");
        preparePrivacyBanner();
      } else {
        cLog("International bundle loaded - banner handled by airgap script, no US banner");
        // Ensure no domestic banner shows
        return;
      }
    } else {
      // LEGACY IMPLEMENTATION: Only show US banner if user is in the US
      // For non-US users, OneTrust handles consent (loaded separately)
      if (resolvedUserLocation === "us" || resolvedUserLocation === "") {
        cLog("Legacy mode - user in US, showing US privacy banner");
        preparePrivacyBanner();
      } else {
        cLog(`Legacy mode - user in ${resolvedUserLocation}, skipping US banner (OneTrust handles consent)`);
      }
    }
    
    // Safari browser related code start
    airgap.addEventListener("consent-resolution", () => {
      consentResolved = true;
      if (safariBrowser)
        extendCookieWithTimeout()
    })
    // Safari browser related code end
  });

})();

