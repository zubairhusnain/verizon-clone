<?php
declare(strict_types=1);

function vz_decode_attr_url(string $url): string
{
    return html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function vz_verizon_hosts(): array
{
    return ['www.verizon.com', 'verizon.com', 'espanol.verizon.com'];
}

function vz_is_asset_path(string $path): bool
{
    return (bool)preg_match(
        '~\.(css|js|mjs|ashx|png|jpe?g|gif|webp|svg|ico|woff2?|ttf|eot|pdf|mp4|webm|map|json)(\?|#|$)~i',
        $path
    );
}

function vz_is_verizon_asset_path(string $path): bool
{
    if (vz_is_asset_path($path)) {
        return true;
    }

    return (bool)preg_match(
        '~^/(?:etc(?:\.clientlibs|/designs)|content/dam|dam|s7d\d|is/image|adobe/dynamicmedia)/~i',
        $path
    );
}

function vz_map_internal_path(string $path): string
{
    $path = vz_decode_attr_url(trim($path));
    $base = VZ_BASE_URL;

    if ($path === '' || $path === '/') {
        return $base . '/';
    }

    if (!str_starts_with($path, '/')) {
        return $path;
    }

    if (vz_is_verizon_asset_path($path) || vz_is_asset_path($path)) {
        return $base . '/assets/www.verizon.com' . $path;
    }

    $parts = parse_url($path);
    $routePath = $parts['path'] ?? $path;
    $query = isset($parts['query']) ? ('?' . $parts['query']) : '';
    $fragment = isset($parts['fragment']) ? ('#' . $parts['fragment']) : '';

    $route = trim($routePath, '/');
    if ($route === '' || $route === 'index.html' || $route === 'index.php') {
        return $base . '/' . $query . $fragment;
    }
    if (str_ends_with($route, '/index.html')) {
        $route = substr($route, 0, -strlen('/index.html'));
    }
    if (str_ends_with($route, '/index.php')) {
        $route = substr($route, 0, -strlen('/index.php'));
    }

    $url = $base . '/' . $route;
    if (str_ends_with($routePath, '/') && $route !== '') {
        $url .= '/';
    }

    return $url . $query . $fragment;
}

function vz_map_external_url(string $url): string
{
    $url = vz_decode_attr_url(trim($url));
    $base = VZ_BASE_URL;

    if (
        $url === '' ||
        preg_match('~^(?:mailto:|tel:|javascript:|data:|blob:|#)~i', $url)
    ) {
        return $url;
    }

    if (str_starts_with($url, '//')) {
        $url = 'https:' . $url;
    }

    if (str_starts_with($url, $base)) {
        return $url;
    }

    if (str_contains($url, '/assets/')) {
        $pos = strpos($url, '/assets/');
        if ($pos !== false) {
            return $base . substr($url, $pos);
        }
    }

    if (str_starts_with($url, '/') && !str_starts_with($url, '//')) {
        return vz_map_internal_path($url);
    }

    $parts = parse_url($url);
    if ($parts === false || !isset($parts['host'])) {
        return $base . '/';
    }

    $host = strtolower($parts['host']);
    $localHost = parse_url($base, PHP_URL_HOST);
    if (is_string($localHost) && $localHost !== '' && $host === strtolower($localHost)) {
        return $url;
    }

    $path = $parts['path'] ?? '/';
    $query = isset($parts['query']) ? ('?' . $parts['query']) : '';
    $fragment = isset($parts['fragment']) ? ('#' . $parts['fragment']) : '';

    if ($host === 'www.youtube.com' && preg_match('#^/embed/#i', $path)) {
        return $url;
    }

    if (in_array($host, vz_verizon_hosts(), true)) {
        if (vz_is_verizon_asset_path($path) || vz_is_asset_path($path)) {
            return $base . '/assets/www.verizon.com' . $path . $query . $fragment;
        }

        $route = trim($path, '/');
        if ($route === '' || $route === 'index.html' || $route === 'index.php') {
            return $base . '/';
        }
        if (str_ends_with($route, '/index.html')) {
            $route = substr($route, 0, -strlen('/index.html'));
        }
        if (str_ends_with($route, '/index.php')) {
            $route = substr($route, 0, -strlen('/index.php'));
        }

        return $base . '/' . $route . $query . $fragment;
    }

    $mirrored = __DIR__ . '/../assets/' . $host;
    if (is_dir($mirrored)) {
        return $base . '/assets/' . $host . $path . $query . $fragment;
    }

    return $url;
}

function vz_url_attr_names(): string
{
    return 'href|src|content|action|poster|cite|data-href|data-url|data-src|data-original|itemid';
}

function vz_rewrite_url_attributes(string $html, string $patternSuffix): string
{
    $attrs = vz_url_attr_names();

    return preg_replace_callback(
        '~\b(' . $attrs . ')=(["\'])(' . $patternSuffix . ')\2~i',
        static function (array $m): string {
            if (str_contains($m[3], '/assets/') || str_contains($m[3], '/verizon-clone/')) {
                return $m[0];
            }
            $next = vz_map_external_url($m[3]);
            return $m[1] . '=' . $m[2] . $next . $m[2];
        },
        $html
    ) ?? $html;
}

function vz_rewrite_root_relative_meta_urls(string $html): string
{
    $quotedBase = preg_quote(VZ_BASE_URL, '~');

    $html = preg_replace_callback(
        '~<link\b(?=[^>]*\brel=(["\'])canonical\1)[^>]*\bhref=(["\'])(/[^"\']*)\2~i',
        static function (array $m) use ($quotedBase): string {
            if (preg_match('~^' . $quotedBase . '~i', $m[3])) {
                return $m[0];
            }
            $url = vz_map_internal_path($m[3]);

            return preg_replace(
                '~\bhref=(["\'])' . preg_quote($m[3], '~') . '\1~',
                'href=$1' . $url . '$1',
                $m[0],
                1
            ) ?? $m[0];
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~<meta\b(?=[^>]*\bproperty=(["\'])og:url\1)[^>]*\bcontent=(["\'])(/[^"\']*)\2~i',
        static function (array $m) use ($quotedBase): string {
            if (preg_match('~^' . $quotedBase . '~i', $m[3])) {
                return $m[0];
            }
            $url = vz_map_internal_path($m[3]);

            return preg_replace(
                '~\bcontent=(["\'])' . preg_quote($m[3], '~') . '\1~',
                'content=$1' . $url . '$1',
                $m[0],
                1
            ) ?? $m[0];
        },
        $html
    ) ?? $html;

    return $html;
}

function vz_rewrite_global_verizon_text_urls(string $html): string
{
    return preg_replace_callback(
        '~(?<!["\'=/])\bhttps?://(?:www\.|espanol\.)?verizon\.com(/[^\s<>"\']*)?~i',
        static function (array $m): string {
            return vz_map_external_url($m[0]);
        },
        $html
    ) ?? $html;
}

function vz_rewrite_external_urls(string $html): string
{
    $html = vz_rewrite_url_attributes($html, 'https?://[^"\']+');
    $html = vz_rewrite_url_attributes($html, '//[^"\']+');
    $html = vz_rewrite_root_relative_meta_urls($html);
    $html = vz_rewrite_global_verizon_text_urls($html);

    return $html;
}
