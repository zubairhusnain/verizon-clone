import RouteHandler from "./rule-engine.js";
import {
  fetchApi,
  fetchApiData,
  setBlackRibbonContent,
  setLiveTilesContent,
  generateODEBody,
  generatePDMNBXBody,
  generatePDMODEBody,
  processData,
  setTagging,
  injectTile,
  injectTilesOnDealsPage,
  showOffersInDealsPage,
  fetchPzaiSortingTile,
} from "./pdm-utils.js";
async function pzn(url) {
  const jsonRule = await fetchApi(url);
  if (!jsonRule) return;
  const routeHandler = new RouteHandler(jsonRule);
  const fact = { vzdl };
  const computeResult = await routeHandler.compute(fact);
  return { computeResult, jsonRule };
}
const getCookie = (name) => {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else {
    begin += 2;
    var end = document.cookie.indexOf(";", begin);
    if (end == -1) {
      end = dc.length;
    }
  }
  // because unescape has been deprecated, replaced with decodeURI
  //return unescape(dc.substring(begin + prefix.length, end));
  return decodeURI(dc.substring(begin + prefix.length, end));
};

// Add this helper if not present
function setCookie(name, value, hours) {
    const date = new Date();
    date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
  }


async function getEcid() {
  return await new Promise((resolve) => {
    let identityEcid;
    let callCount = 0;
    const intervalID = setInterval(() => {
      if (callCount < 10) {
        let ecid = document.cookie
          .split("; ")
          .find((ck) => ck.startsWith("s_ecid"));
        identityEcid = ecid?.split("|")[1];
        if (!identityEcid) callCount += 1;
        else clearInterval(intervalID);
      } else {
        clearInterval(intervalID);
      }
      resolve(identityEcid);
    }, 200);
  });
}
async function fetchOffers(computeResult, blackribbon, ODE, PDM_NBX, PDM_ODE) {
  try {
    let identityEcid = await getEcid();
    let body;
    const checkCookie = getCookie("br_trgt_pers") === "true";
    if (!checkCookie) {
      console.log("Inside getcookie block");
      if (!computeResult || computeResult.type === "ODE") {
        body = generateODEBody(blackribbon, identityEcid);
        const data = await fetchApi(ODE, "POST", body);
        if (
          data?.errors?.length > 0 &&
          data?.errors[0] &&
          data?.errors[0].status === 404
        ) {
          window.coreData = window.coreData || [];
          window.coreData.push({
            task: "emit",
            event: "error",
            params: {
              id: data.errors[0].type,
              message: data.errors[0].detail,
            },
          });
          return null;
        }
        return data;
      } else if (computeResult.type === "PDM_NBX") {
        body = generatePDMNBXBody();
        //data = await fetchApi(PDM_NBX_URL, method, body);
      } else {
        body = generatePDMODEBody();
        //data = await fetchApi(PDM_ODE_URL, method, body);
      }
    } else {
      console.log("check cookie", checkCookie);
    }
  } catch (error) {
    console.error("Error while fetching data:", error);
  }
}
window.fetchPdmApiData = async function (postData = "") {
  const url = `${window.origin}/soe/digital/prospect/personalizationrecommendationsservice/pdm/nse`;
  let payload = {};
  if (postData !== "") {
    payload = { ...payload, ...postData };
  }
  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      channelId: "VZW-DOTCOM",
    },
    body: JSON.stringify(payload),
  };
  try {
    const response = await fetch(url, options);
    if (!response.ok) {
      throw new Error("Failed to fetch the data");
    } else {
      const finalResponse = await response.json();
      if (
        document.querySelector(".gnav20-promo-text") &&
        finalResponse?.response?.liveTiles?.[0]?.aemNode?.eyebrowCopy
      ) {
        document.querySelector(".gnav20-promo").style = "display: block";
        const span = document.querySelector(".gnav20-promo-text span");
        span.innerHTML =
          finalResponse.response?.liveTiles?.[0]?.aemNode?.eyebrowCopy;
      }
    }
  } catch (error) {
    throw error;
  }
};

async function getEpsilonData() {
  const sessionId = getCookie('taggingUUID') || null;
  const enableEpsilon = getCookie('enableEpsilon');
  const epsilonTriggered = getCookie('epsilonTriggered');
  const isLoggedIn = getCookie("loggedIn");
  
  // Check page name conditions
  const pageName = window?.vzdl?.page?.name;
  const allowedPageNames = ['gridwall_smartphones', 'internet', 'shop', 'deals'];
  const isAllowedPage = allowedPageNames.includes(pageName) || 
                       (pageName && pageName.includes('pdp_Smartphones'));

  if (isLoggedIn || !enableEpsilon || epsilonTriggered || !isAllowedPage) {
    // Do not execute API call if enableEpsilon cookie is not present or page is not allowed
    return;
  }
  
  const endpoint = `${window.origin}/soe/digital/prospect/personalizationrecommendationsservice/nse/getEpsilonData`;



  const payload = {
    source: "getEpsilonData",
    taggingUuId: sessionId,
    page: window.location.pathname,
    timestamp: new Date().toISOString()
  };

  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      channelId: "VZW-DOTCOM",
    },
    body: JSON.stringify(payload),
  };

  fetch(endpoint, options)
    .then(res => {
      if (!res.ok) throw new Error('HTTP ' + res.status);
      return res.json();
    })
    .then(data => {
      console.log('POST success:', data);
      window.launchApiResponse = data;
      // Set cookie only if status is SUCCESS
      if (data && data.status === "SUCCESS") {
        setCookie('epsilonTriggered', 'true', 24); // Set for 24 hours
      }
    })
    .catch(err => console.error('POST failed:', err));
}

(async function () {
  const pageName = window?.vzdl?.page?.name;
  if (pageName !== "" && pageName === "Check Order Status") {
    // Do Nothing
  } else {
    const env = location.hostname.indexOf("vzwqa") != -1 ? "dev" : "prod";
    const pdmResponse = await pzn(
      "/content/caas/vcg/services/pdmrules.model.isActive:true.json"
    );
    if (pdmResponse) {
      try {
        const { computeResult, jsonRule } = pdmResponse;
        const odeConfig = await fetchApi(
          "/etc/clientlibs/vcg/aep/pdm/js/config.json"
        );
        const { ODE, PDM_NBX, PDM_ODE } =
          odeConfig?.configuration?.decisionSystem ?? {};
        const { decisionScopes, dataStreamId } = odeConfig?.configuration ?? {};
        const { blackribbon } = decisionScopes?.[env] ?? null;
        const data = await fetchOffers(
          computeResult,
          blackribbon,
          `${ODE}${dataStreamId[env] ?? ""}`,
          PDM_NBX,
          PDM_ODE
        );
        if (data) {
          const {
            blackribbon_content,
            impression,
            offer_id,
            promo_tile_item = [],
            // blackribbon_placeholder,
            // liveTiles_content,
            // liveTiles_placeholder,
          } = processData(data);
          await setBlackRibbonContent(blackribbon_content);
          import("/etc/clientlibs/vcg/aep/pdm/js/carousel-min.js")
            .then(async () => {
              await injectTile(promo_tile_item);
            })
            .catch((error) => console.log(error));
          setTagging(impression);
        } else {
          gnav20.loadProspectPersonalizedRibbon();
        }
      } catch (error) {
        console.error("error in fetching ODE data:", error);
      }
    }
  }
  const customerRole = window?.vzdl?.user?.customerRole?.toLowerCase();
  if(customerRole === 'accountmanager' || customerRole === 'accountholder' || customerRole === 'accountowner' || customerRole === 'owner') {
    showOffersInDealsPage();
  }
  injectTilesOnDealsPage();
  fetchPzaiSortingTile();
  getEpsilonData();
  
})();