<?php
declare(strict_types=1);

require_once __DIR__ . '/../base-url.php';

http_response_code(404);

$requestedPath = isset($_GET['from']) ? trim((string) $_GET['from']) : '';
if ($requestedPath === '' && isset($_SERVER['REDIRECT_URL']) && is_string($_SERVER['REDIRECT_URL'])) {
    $requestedPath = trim($_SERVER['REDIRECT_URL']);
}
if ($requestedPath !== '' && !str_starts_with($requestedPath, '/')) {
    $requestedPath = '/' . $requestedPath;
}

$home = VZ_BASE_URL . '/';
$base = rtrim(VZ_BASE_URL, '/');

$quickLinks = [
    ['Phones', 'smartphones/'],
    ['Deals', 'deals/'],
    ['Plans', 'plans/unlimited/'],
    ['Home Internet', 'home/internet/'],
    ['Support', 'support/'],
    ['Contact us', 'support/contact-us/'],
];

vz_start_output_rewrite();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <title>Page not found | Verizon</title>
  <base href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">
  <style id="offline-not-found">
    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      min-height: 100vh;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #1a1a1a;
      background: #f6f6f6;
      display: flex;
      flex-direction: column;
    }
    a { color: #cd040b; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .vz-nf-header {
      background: #fff;
      border-bottom: 1px solid #d8dada;
      padding: 16px 20px;
    }
    .vz-nf-header__inner {
      max-width: 1272px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }
    .vz-nf-logo {
      display: inline-flex;
      align-items: center;
      font-size: 1.75rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      color: #cd040b;
      text-decoration: none;
    }
    .vz-nf-logo:hover { text-decoration: none; opacity: 0.9; }
    .vz-nf-logo span {
      background: linear-gradient(90deg, #cd040b 0%, #e4002b 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .vz-nf-header nav {
      display: flex;
      flex-wrap: wrap;
      gap: 8px 20px;
      font-size: 14px;
      font-weight: 500;
    }
    .vz-nf-header nav a { color: #1a1a1a; }
    .vz-nf-header nav a:hover { color: #cd040b; }
    .vz-nf-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px 56px;
    }
    .vz-nf-card {
      width: 100%;
      max-width: 560px;
      background: #fff;
      border: 1px solid #d8dada;
      border-radius: 8px;
      padding: 40px 32px 36px;
      text-align: center;
      box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    }
    .vz-nf-code {
      font-size: clamp(4rem, 12vw, 5.5rem);
      font-weight: 700;
      line-height: 1;
      margin: 0 0 8px;
      letter-spacing: -0.04em;
      color: #cd040b;
    }
    .vz-nf-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin: 0 0 12px;
      color: #1a1a1a;
    }
    .vz-nf-text {
      margin: 0 0 24px;
      color: #4a4a4a;
      font-size: 1rem;
    }
    .vz-nf-path {
      display: inline-block;
      max-width: 100%;
      margin: 0 0 28px;
      padding: 10px 14px;
      background: #f6f6f6;
      border: 1px solid #e8e8e8;
      border-radius: 4px;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: 13px;
      color: #333;
      word-break: break-all;
      text-align: left;
    }
    .vz-nf-path-label {
      display: block;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #6b6b6b;
      margin-bottom: 6px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .vz-nf-btn {
      display: inline-block;
      padding: 14px 32px;
      background: #cd040b;
      color: #fff !important;
      font-weight: 700;
      font-size: 1rem;
      border-radius: 4px;
      text-decoration: none !important;
      transition: background 0.15s ease;
    }
    .vz-nf-btn:hover {
      background: #a8030a;
      text-decoration: none !important;
    }
    .vz-nf-links {
      margin-top: 32px;
      padding-top: 28px;
      border-top: 1px solid #e8e8e8;
    }
    .vz-nf-links h2 {
      font-size: 0.8125rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #6b6b6b;
      margin: 0 0 16px;
    }
    .vz-nf-links ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px 20px;
    }
    .vz-nf-links li { margin: 0; }
    .vz-nf-links a {
      font-weight: 500;
      font-size: 15px;
    }
    .vz-nf-footer {
      background: #fff;
      border-top: 1px solid #d8dada;
      padding: 20px;
      text-align: center;
      font-size: 13px;
      color: #6b6b6b;
    }
    @media (max-width: 640px) {
      .vz-nf-header__inner { flex-direction: column; align-items: flex-start; }
      .vz-nf-header nav { justify-content: flex-start; }
      .vz-nf-card { padding: 32px 20px 28px; }
    }
  </style>
</head>
<body>
  <header class="vz-nf-header">
    <div class="vz-nf-header__inner">
      <a class="vz-nf-logo" href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>" title="Verizon home">
        <span>verizon</span>
      </a>
      <nav aria-label="Site sections">
        <a href="<?php echo htmlspecialchars($base . '/smartphones/', ENT_QUOTES, 'UTF-8'); ?>">Phones</a>
        <a href="<?php echo htmlspecialchars($base . '/deals/', ENT_QUOTES, 'UTF-8'); ?>">Deals</a>
        <a href="<?php echo htmlspecialchars($base . '/support/', ENT_QUOTES, 'UTF-8'); ?>">Support</a>
      </nav>
    </div>
  </header>

  <main class="vz-nf-main" id="main-content">
    <div class="vz-nf-card">
      <p class="vz-nf-code" aria-hidden="true">404</p>
      <h1 class="vz-nf-title">This page isn&rsquo;t available offline</h1>
      <p class="vz-nf-text">
        The page you requested is not part of this local Verizon mirror.
        Try the homepage or one of the links below.
      </p>
      <?php if ($requestedPath !== ''): ?>
      <div class="vz-nf-path" role="status">
        <span class="vz-nf-path-label">Requested path</span>
        <?php echo htmlspecialchars($requestedPath, ENT_QUOTES, 'UTF-8'); ?>
      </div>
      <?php endif; ?>
      <a class="vz-nf-btn" href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">Return to homepage</a>
      <div class="vz-nf-links">
        <h2>Popular pages</h2>
        <ul>
          <?php foreach ($quickLinks as [$label, $path]): ?>
          <li>
            <a href="<?php echo htmlspecialchars($base . '/' . $path, ENT_QUOTES, 'UTF-8'); ?>">
              <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>

  <footer class="vz-nf-footer">
    <p>Offline Verizon site mirror &mdash; navigation and content are limited to exported pages.</p>
  </footer>
</body>
</html>
