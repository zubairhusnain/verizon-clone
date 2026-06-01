<?php
declare(strict_types=1);

/**
 * Backward-compatible URL: POST/GET /support/contact-us/send.php
 * Form posts to index.php directly; this file forwards for old links.
 */
require_once __DIR__ . '/../../base-url.php';

$contactUrl = rtrim(VZ_BASE_URL, '/') . '/support/contact-us/';

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    require __DIR__ . '/index.php';
    exit;
}

header('Location: ' . $contactUrl, true, 303);
exit;
