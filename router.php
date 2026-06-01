<?php
declare(strict_types=1);

@ini_set('memory_limit', '512M');
@ini_set('max_execution_time', '120');

require_once __DIR__ . '/includes/vz-php-polyfill.php';
require_once __DIR__ . '/base-url.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}

$path = vz_normalize_request_path($path);
$rootReal = realpath(__DIR__);

if (str_starts_with($path, '/assets/')) {
    $localFs = __DIR__ . $path;
    if (is_file($localFs)) {
        $contentType = 'application/octet-stream';
        if (function_exists('mime_content_type')) {
            $mt = mime_content_type($localFs);
            if (is_string($mt) && $mt !== '') {
                $contentType = $mt;
            }
        }
        header('Content-Type: ' . $contentType);
        header('Cache-Control: public, max-age=86400');
        readfile($localFs);
        exit;
    }
    vz_send_not_found($path);
}

if (str_ends_with($path, '.php')) {
    $relativePhp = ltrim($path, '/');
    $candidate = realpath(__DIR__ . '/' . $relativePhp);
    if (
        is_string($rootReal) &&
        is_string($candidate) &&
        str_starts_with($candidate, $rootReal . DIRECTORY_SEPARATOR) &&
        is_file($candidate)
    ) {
        $isContactSend = str_ends_with($relativePhp, 'support/contact-us/send.php');
        if ($isContactSend) {
            include $candidate;
        } else {
            vz_start_output_rewrite();
            include $candidate;
        }
        exit;
    }
    vz_send_not_found($path);
}

$route = trim($path, '/');

if ($route === 'index.php' || $route === 'index.html') {
    header('Location: ' . VZ_BASE_URL . '/', true, 301);
    exit;
}

if ($route === 'no-page' || str_starts_with($route, 'no-page/')) {
    vz_render_not_found_page($path);
}

if ($route === '') {
    $target = __DIR__ . '/index.php';
} else {
    $target = __DIR__ . '/' . $route . '/index.php';
}

if (!is_file($target)) {
    vz_send_not_found($path === '' ? '/' : $path);
}

vz_start_output_rewrite();
include $target;

function vz_not_found_url(string $fromPath): string
{
    $from = $fromPath === '' ? '/' : $fromPath;

    return VZ_BASE_URL . '/no-page/?from=' . rawurlencode($from);
}

function vz_send_not_found(string $fromPath): never
{
    header('Location: ' . vz_not_found_url($fromPath), true, 302);
    exit;
}

function vz_render_not_found_page(string $fromPath): never
{
    if ($fromPath !== '' && $fromPath !== '/no-page' && $fromPath !== '/no-page/') {
        $_GET['from'] = $fromPath;
    }

    $page = __DIR__ . '/no-page/index.php';
    if (!is_file($page)) {
        http_response_code(404);
        header('Content-Type: text/plain; charset=utf-8');
        echo '404 Not Found';
        exit;
    }

    vz_start_output_rewrite();
    include $page;
    exit;
}
