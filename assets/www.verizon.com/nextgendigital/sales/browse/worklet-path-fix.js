/**
 * Worklet Path Fix for Next.js with basePath
 *
 * This script ensures that audio worklet files are loaded with the correct
 * basePath in production builds. It must be loaded before the voice assistant
 * component initializes.
 */

(function () {
  if (typeof window === 'undefined') return;

  // Get basePath from various sources
  function getBasePath() {
    // Priority 1: Check process.env (injected by Next.js at build time)
    if (
      typeof process !== 'undefined' &&
      process.env &&
      process.env.NEXT_PUBLIC_BASE_PATH
    ) {
      return process.env.NEXT_PUBLIC_BASE_PATH;
    }

    // Priority 2: Check window location if it includes the known base path
    const knownBasePath = '/nextgendigital/sales/browse';
    if (window.location.pathname.startsWith(knownBasePath)) {
      return knownBasePath;
    }

    // Priority 3: Parse from current page URL
    const pathMatch = window.location.pathname.match(
      /^(\/[^\/]+\/[^\/]+\/[^\/]+)/
    );
    if (pathMatch && pathMatch[1].includes('nextgendigital')) {
      return pathMatch[1];
    }

    return '';
  }

  const BASE_PATH = getBasePath();

  // Store the original addModule function
  if (
    typeof AudioContext !== 'undefined' &&
    AudioContext.prototype.audioWorklet
  ) {
    const originalAddModule = AudioWorklet.prototype.addModule;

    AudioWorklet.prototype.addModule = function (moduleURL, options) {
      let fixedURL = moduleURL;

      // Only fix URLs that are relative and match our worklet files
      if (
        typeof moduleURL === 'string' &&
        !moduleURL.startsWith('http') &&
        !moduleURL.startsWith('blob:') &&
        (moduleURL.includes('pcm-player-processor.js') ||
          moduleURL.includes('pcm-recorder-processor.js'))
      ) {
        // If URL doesn't already include basePath and basePath exists, prepend it
        if (BASE_PATH && !moduleURL.startsWith(BASE_PATH)) {
          // Remove leading slash from moduleURL if present
          const cleanURL = moduleURL.startsWith('/')
            ? moduleURL.slice(1)
            : moduleURL;
          fixedURL = `${BASE_PATH}/${cleanURL}`;
          console.log(
            '[Worklet Path Fix] Corrected path from',
            moduleURL,
            'to',
            fixedURL
          );
        } else {
          console.log(
            '[Worklet Path Fix] Path already correct or no base path:',
            moduleURL
          );
        }
      }

      // Call original function with fixed URL
      return originalAddModule.call(this, fixedURL, options);
    };

    console.log(
      '[Worklet Path Fix] Audio worklet path correction installed with basePath:',
      BASE_PATH || '(none)'
    );
  } else {
    console.warn(
      '[Worklet Path Fix] AudioWorklet not available in this browser'
    );
  }
})();
