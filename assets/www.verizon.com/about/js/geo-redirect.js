/**
 * Geographical redirect script with multiple methods
 * This script supports both localStorage 'objGeo' and native browser geolocation
 */

// Configuration
const GEO_REDIRECT_CONFIG = {
  // Toggle between 'localStorage' and 'geolocation'
  method: 'geolocation', // Change to 'geolocation' for browser geolocation
  
  // Geolocation API options
  geolocationOptions: {
    enableHighAccuracy: true,
    timeout: 10000,
    maximumAge: 600000
  },
  
  // State/region mappings for redirection
  redirectRules: {
    'CA': '/about/our-company/small-business-supplier/overview',
    'CALIFORNIA': '/about/our-company/small-business-supplier/overview'
    // Add more state mappings as needed
  },
  
  // Geographic boundaries for states (latitude/longitude ranges)
  geoBoundaries: {
    california: {
      name: 'California',
      code: 'CA',
      redirectUrl: '/about/our-company/small-business-supplier/overview',
      bounds: {
        north: 42.009518,   // Northern border with Oregon
        south: 32.534156,   // Southern border with Mexico
        east: -114.131211,  // Eastern border with Nevada/Arizona
        west: -124.409591   // Pacific Ocean coastline
      }
    }
    // Add more states as needed:
    // texas: {
    //   name: 'Texas',
    //   code: 'TX', 
    //   redirectUrl: '/about/our-company/small-business-supplier/texas-program',
    //   bounds: {
    //     north: 36.500704,
    //     south: 25.837377,
    //     east: -93.508292,
    //     west: -106.645646
    //   }
    // }
  }
};

function checkPageEligibility() {
  // Check if current page is the target URL
  if (window.location.pathname !== '/about/our-company/small-business-supplier') {
    return false;
  }

  // Check if already on a program page to avoid redirect loops
  if (window.location.pathname.includes('overview') ||
      window.location.pathname.includes('our-partners') ||
      window.location.pathname.includes('doing-business-ca')) {
    return false;
  }

  return true;
}

function getLocationFromCoordinates(latitude, longitude) {
  // Check if coordinates fall within any defined geographic boundaries
  for (const [key, region] of Object.entries(GEO_REDIRECT_CONFIG.geoBoundaries)) {
    const { bounds } = region;
    
    if (latitude <= bounds.north && 
        latitude >= bounds.south && 
        longitude <= bounds.east && 
        longitude >= bounds.west) {
      
      console.log(`[Geo-Redirect] Coordinates match ${region.name}`);
      return {
        state: region.name,
        st: region.code,
        redirectUrl: region.redirectUrl,
        coordinates: { latitude, longitude }
      };
    }
  }
  
  console.log(`[Geo-Redirect] Coordinates (${latitude}, ${longitude}) do not match any defined regions`);
  return {
    state: 'Unknown',
    st: 'UNK',
    coordinates: { latitude, longitude }
  };
}

function performRedirect(locationData) {
  try {
    let redirectUrl = null;
    
    // Check if location data already has a redirectUrl (from coordinate matching)
    if (locationData.redirectUrl) {
      redirectUrl = locationData.redirectUrl;
    } else {
      // Fallback to original redirect rules for localStorage method
      for (const [key, url] of Object.entries(GEO_REDIRECT_CONFIG.redirectRules)) {
        if (locationData.state?.toUpperCase() === key ||
            locationData.st?.toUpperCase() === key ||
            locationData.region?.toUpperCase() === key ||
            locationData.city?.toLowerCase().includes(key.toLowerCase())) {
          redirectUrl = url;
          break;
        }
      }
    }

    // Perform redirect if a target URL was determined
    if (redirectUrl) {
      console.log('[Geo-Redirect] Redirecting to:', redirectUrl);
      window.location.href = redirectUrl;
    } else {
      console.log('[Geo-Redirect] No redirect rule matched for location:', locationData);
    }

  } catch (error) {
    console.error('[Geo-Redirect] Error in performRedirect:', error);
  }
}

function geoRedirectFromLocalStorage() {
  try {
    console.log('[Geo-Redirect] Using localStorage method');
    
    // Get objGeo from localStorage
    const objGeoString = localStorage.getItem('objGeo');
    
    if (!objGeoString) {
      console.log('[Geo-Redirect] No objGeo found in localStorage');
      return;
    }

    // Parse the objGeo data
    let objGeo;
    try {
      objGeo = JSON.parse(objGeoString);
    } catch (parseError) {
      console.error('[Geo-Redirect] Error parsing objGeo:', parseError);
      return;
    }

    console.log('[Geo-Redirect] Found objGeo:', objGeo);
    performRedirect(objGeo);

  } catch (error) {
    console.error('[Geo-Redirect] Error in geoRedirectFromLocalStorage:', error);
  }
}

async function geoRedirectFromBrowser() {
  try {
    console.log('[Geo-Redirect] Using browser geolocation method');
    
    // Check if geolocation is supported
    if (!navigator.geolocation) {
      console.error('[Geo-Redirect] Geolocation is not supported by this browser');
      return;
    }

    // Get user's location
    const position = await new Promise((resolve, reject) => {
      navigator.geolocation.getCurrentPosition(
        resolve,
        reject,
        GEO_REDIRECT_CONFIG.geolocationOptions
      );
    });
    console.log('[Geo-Redirect] Geolocation position obtained:', position);
    const { latitude, longitude } = position.coords;
    console.log('[Geo-Redirect] Got coordinates:', { latitude, longitude });

    // Use coordinate boundaries to determine location instead of external API
    const locationData = getLocationFromCoordinates(latitude, longitude);
    console.log('[Geo-Redirect] Location determined from coordinates:', locationData);
    
    performRedirect(locationData);

  } catch (error) {
    console.error('[Geo-Redirect] Error getting browser location:', error);
    
    // Fallback to localStorage method if geolocation fails
    console.log('[Geo-Redirect] Falling back to localStorage method');
    geoRedirectFromLocalStorage();
  }
}

function initGeoRedirect() {
  // Check if page is eligible for redirect
  if (!checkPageEligibility()) {
    return;
  }

  console.log('[Geo-Redirect] Initializing with method:', GEO_REDIRECT_CONFIG.method);
  
  // Choose redirect method based on configuration
  if (GEO_REDIRECT_CONFIG.method === 'geolocation') {
    geoRedirectFromBrowser();
  } else if (GEO_REDIRECT_CONFIG.method === 'localStorage') {
    geoRedirectFromLocalStorage();
  } else {
    console.error('[Geo-Redirect] Invalid method specified:', GEO_REDIRECT_CONFIG.method);
  }
}

console.log('[Geo-Redirect] document.readyState:', document.readyState);
// Execute redirect when DOM is ready
if (document.readyState === 'loading') {
  console.log('[Geo-Redirect] DOM is loading, waiting for DOMContentLoaded event');
  document.addEventListener('DOMContentLoaded', initGeoRedirect);
} else {
  initGeoRedirect();
}
