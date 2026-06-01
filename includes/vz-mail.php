<?php
declare(strict_types=1);

function vz_mail_config(): array
{
    static $config = null;
    if ($config !== null) {
        return $config;
    }

    $defaults = [
        'to' => 'admin@localhost',
        'from' => 'noreply@localhost',
        'from_name' => 'Verizon Contact Form',
        'subject_prefix' => '[Verizon Contact] ',
    ];

    $file = dirname(__DIR__) . '/mail.config.php';
    if (is_file($file)) {
        $loaded = require $file;
        if (is_array($loaded)) {
            $config = array_merge($defaults, $loaded);
            return $config;
        }
    }

    $config = $defaults;
    return $config;
}

function vz_send_contact_email(array $data): bool
{
    $cfg = vz_mail_config();
    $to = trim((string) ($cfg['to'] ?? ''));
    if ($to === '' || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $name = trim((string) ($data['name'] ?? ''));
    $email = trim((string) ($data['email'] ?? ''));
    $phone = trim((string) ($data['phone'] ?? ''));
    $message = trim((string) ($data['message'] ?? ''));

    if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $subject = ($cfg['subject_prefix'] ?? '[Contact] ') . $name;
    $body = "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= 'Phone: ' . ($phone !== '' ? $phone : '(not provided)') . "\n\n";
    $body .= "Message:\n{$message}\n";

    $from = trim((string) ($cfg['from'] ?? 'noreply@localhost'));
    $fromName = trim((string) ($cfg['from_name'] ?? 'Contact Form'));

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . vz_mail_encode_address($fromName, $from),
        'Reply-To: ' . vz_mail_encode_address($name, $email),
    ];

    return @mail($to, $subject, $body, implode("\r\n", $headers));
}

function vz_mail_encode_address(string $name, string $email): string
{
    $name = str_replace(["\r", "\n", '"'], '', $name);
    $email = trim($email);

    if ($name === '') {
        return $email;
    }

    return sprintf('"%s" <%s>', $name, $email);
}
