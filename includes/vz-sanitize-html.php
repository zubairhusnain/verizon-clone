<?php
declare(strict_types=1);

function vz_marketing_url_fragments(): array
{
    return [
        'googletagmanager.com',
        'google-analytics.com',
        'googleadservices.com',
        'googleapis.com',
        'doubleclick.net',
        'quantummetric.com',
        'transcend.io',
        'transcend-cdn.com',
        'transcend.com',
        'qualtrics.com',
        'newrelic.com',
        'schemaapp.com',
        'evolv.ai',
        'liveperson.net',
        'bazaarvoice.com',
        'adsrvr.org',
        'innovid.com',
        'ispot.tv',
        'hotjar.com',
        'optimizely.com',
        'respframework.verizon.com',
        'adroll.com',
        'xg4ken.com',
        'tvsquared.com',
        'dotomi.com',
        'pulseinsights.com',
        'js.pulseinsights.com',
        'cookielaw.org',
        'onetrust.com',
        'clarip.com',
        'adobedtm.com',
        'adobedc.net',
        'demdex.net',
        'assets.adobedtm.com',
        'launch-',
        'google_tag',
        'gtag.js',
        'geo-redirect',
        'optanon',
        'airgap.js',
        'schema_highlighter',
        '/aep/pdm/',
    ];
}

function vz_is_marketing_url(string $url): bool
{
    $u = strtolower(html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    if ($u === '' || str_starts_with($u, 'javascript:')) {
        return false;
    }

    foreach (vz_marketing_url_fragments() as $part) {
        if (str_contains($u, $part)) {
            return true;
        }
    }

    return false;
}

function vz_inline_script_is_marketing(string $scriptTag): bool
{
    if (preg_match('~\bsrc=(["\'])([^"\']*)\1~i', $scriptTag, $m) && vz_is_marketing_url($m[2])) {
        return true;
    }

    $needles = [
        '_satellite',
        'googletagmanager',
        'google_tag_manager',
        'google_tag',
        'gtag(',
        'dataLayer.push',
        'gtm.start',
        'GTM-',
        'QuantumMetric',
        'OptanonWrapper',
        'OneTrust',
        'onetrust',
        'window.transcend',
        'window.airgap',
        'pulseinsights',
        'schema_highlighter',
        'maps.googleapis.com',
        'loadGoogleScript',
        'fbq(',
        'fbevents.js',
    ];

    foreach ($needles as $needle) {
        if (stripos($scriptTag, $needle) !== false) {
            return true;
        }
    }

    if (preg_match('~\bdata-airgap-id\s*=~i', $scriptTag)) {
        return true;
    }

    if (preg_match('~\bAIza[A-Za-z0-9_-]{20,}\b~', $scriptTag)) {
        return true;
    }

    return false;
}

function vz_sanitize_html(string $html): string
{
    $html = preg_replace_callback(
        '~<script\b[^>]*>[\s\S]*?</script>~i',
        static function (array $m): string {
            return vz_inline_script_is_marketing($m[0]) ? '' : $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~<script\b[^>]*/>~i',
        static function (array $m): string {
            return vz_inline_script_is_marketing($m[0]) ? '' : $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~<link\b[^>]*>~i',
        static function (array $m): string {
            if (preg_match('~\bhref=(["\'])([^"\']*)\1~i', $m[0], $href) && vz_is_marketing_url($href[2])) {
                return '';
            }
            return $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~<iframe\b[^>]*>[\s\S]*?</iframe>~i',
        static function (array $m): string {
            if (preg_match('~\bsrc=(["\'])([^"\']*)\1~i', $m[0], $src) && vz_is_marketing_url($src[2])) {
                return '';
            }
            return $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace(
        '~<!--\s*Google Tag Manager\s*-->[\s\S]*?<!--\s*End Google Tag Manager\s*-->~i',
        '',
        $html
    ) ?? $html;

    $html = preg_replace(
        '~<noscript\b[^>]*>[\s\S]*?googletagmanager[\s\S]*?</noscript>~i',
        '',
        $html
    ) ?? $html;

    $html = preg_replace('~<style id="onetrust-style">[\s\S]*?</style>~i', '', $html) ?? $html;
    $html = preg_replace(
        '~<div id="onetrust-consent-sdk"[\s\S]*?</div>\s*(?=<div style="visibility)~)i',
        '',
        $html
    ) ?? $html;
    $html = preg_replace('~<div class="onetrust-pc-dark-filter[^"]*"[^>]*>\s*</div>~i', '', $html) ?? $html;

    $html = preg_replace('~\bAIza[A-Za-z0-9_-]{20,}\b~', '', $html) ?? $html;

    return $html;
}
