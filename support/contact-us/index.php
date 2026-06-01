<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../../base-url.php';
require_once __DIR__ . '/../../includes/vz-mail.php';

$home = VZ_BASE_URL . '/';
$base = rtrim(VZ_BASE_URL, '/');
$pageBase = $base . '/support/contact-us/';

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
}

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $token = (string) ($_POST['csrf'] ?? '');
    $sessionToken = (string) ($_SESSION['contact_csrf'] ?? '');
    if ($token === '' || $sessionToken === '' || !hash_equals($sessionToken, $token)) {
        header('Location: ' . $pageBase . '?error=' . rawurlencode('Invalid form session. Please try again.'), true, 303);
        exit;
    }

    $ok = vz_send_contact_email([
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'message' => $_POST['message'] ?? '',
    ]);

    if ($ok) {
        $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
        header('Location: ' . $pageBase . '?sent=1', true, 303);
        exit;
    }

    header('Location: ' . $pageBase . '?error=' . rawurlencode('Could not send email. Check mail.config.php and server mail settings.'), true, 303);
    exit;
}

$sent = isset($_GET['sent']) && $_GET['sent'] === '1';
$error = isset($_GET['error']) ? trim((string) $_GET['error']) : '';

vz_start_output_rewrite();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact us | Verizon</title>
  <base href="<?php echo htmlspecialchars($pageBase, ENT_QUOTES, 'UTF-8'); ?>">
  <style id="offline-contact-page">
    *, *::before, *::after { box-sizing: border-box; }
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
    .vz-ct-header {
      background: #fff;
      border-bottom: 1px solid #d8dada;
      padding: 16px 20px;
    }
    .vz-ct-header__inner {
      max-width: 720px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }
    .vz-ct-logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: #cd040b;
      text-decoration: none;
    }
    .vz-ct-logo:hover { text-decoration: none; opacity: 0.9; }
    .vz-ct-back { font-size: 14px; font-weight: 500; color: #1a1a1a; }
    .vz-ct-main {
      flex: 1;
      padding: 40px 20px 56px;
    }
    .vz-ct-wrap {
      max-width: 560px;
      margin: 0 auto;
    }
    .vz-ct-card {
      background: #fff;
      border: 1px solid #d8dada;
      border-radius: 8px;
      padding: 32px 28px 28px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }
    .vz-ct-card h1 {
      margin: 0 0 8px;
      font-size: 1.75rem;
      font-weight: 700;
    }
    .vz-ct-card .lead {
      margin: 0 0 24px;
      color: #4a4a4a;
    }
    .vz-ct-alert {
      padding: 12px 14px;
      border-radius: 4px;
      margin-bottom: 20px;
      font-size: 15px;
    }
    .vz-ct-alert--ok {
      background: #e8f5e9;
      border: 1px solid #a5d6a7;
      color: #1b5e20;
    }
    .vz-ct-alert--err {
      background: #ffebee;
      border: 1px solid #ef9a9a;
      color: #b71c1c;
    }
    .vz-ct-field {
      margin-bottom: 18px;
    }
    .vz-ct-field label {
      display: block;
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 6px;
    }
    .vz-ct-field label .req { color: #cd040b; }
    .vz-ct-field input,
    .vz-ct-field textarea {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #c4c4c4;
      border-radius: 4px;
      font: inherit;
      color: inherit;
      background: #fff;
    }
    .vz-ct-field input:focus,
    .vz-ct-field textarea:focus {
      outline: none;
      border-color: #cd040b;
      box-shadow: 0 0 0 2px rgba(205, 4, 11, 0.15);
    }
    .vz-ct-field textarea {
      min-height: 140px;
      resize: vertical;
    }
    .vz-ct-submit {
      width: 100%;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      background: #cd040b;
      color: #fff;
      font: inherit;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
    }
    .vz-ct-submit:hover { background: #a8030a; }
    .vz-ct-footer {
      text-align: center;
      padding: 20px;
      font-size: 13px;
      color: #6b6b6b;
    }
  </style>
</head>
<body>
  <header class="vz-ct-header">
    <div class="vz-ct-header__inner">
      <a class="vz-ct-logo" href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">verizon</a>
      <a class="vz-ct-back" href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">&larr; Home</a>
    </div>
  </header>

  <main class="vz-ct-main" id="main-content">
    <div class="vz-ct-wrap">
      <div class="vz-ct-card">
        <h1>Contact us</h1>
        <p class="lead">Send us a message and we will get back to you by email.</p>

        <?php if ($sent): ?>
        <div class="vz-ct-alert vz-ct-alert--ok" role="status">
          Thank you. Your message was sent successfully.
        </div>
        <?php endif; ?>

        <?php if ($error !== ''): ?>
        <div class="vz-ct-alert vz-ct-alert--err" role="alert">
          <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
        </div>
        <?php endif; ?>

        <form method="post" action="" novalidate>
          <input type="hidden" name="csrf" value="<?php echo htmlspecialchars((string) $_SESSION['contact_csrf'], ENT_QUOTES, 'UTF-8'); ?>">

          <div class="vz-ct-field">
            <label for="name">Name <span class="req" aria-hidden="true">*</span></label>
            <input type="text" id="name" name="name" required autocomplete="name" maxlength="120">
          </div>

          <div class="vz-ct-field">
            <label for="email">Email <span class="req" aria-hidden="true">*</span></label>
            <input type="email" id="email" name="email" required autocomplete="email" maxlength="160">
          </div>

          <div class="vz-ct-field">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" autocomplete="tel" maxlength="40">
          </div>

          <div class="vz-ct-field">
            <label for="message">Message <span class="req" aria-hidden="true">*</span></label>
            <textarea id="message" name="message" required maxlength="5000"></textarea>
          </div>

          <button type="submit" class="vz-ct-submit">Send message</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="vz-ct-footer">
    <p>Offline Verizon mirror</p>
  </footer>
</body>
</html>
