<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../includes/ConfigLoader.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * MailService Class
 * 
 * A dedicated service for sending emails using PHPMailer with configuration
 * loaded from environment variables (.env file).
 * 
 * Environment variables required (from .env):
 * - MailHost: SMTP server hostname (e.g., smtp.gmail.com)
 * - MailPort: SMTP server port (default: 587)
 * - MailUsername: SMTP authentication username
 * - MailPassword: SMTP authentication password
 * - MailFromAddress: Sender email address
 * - MailFromName: Sender display name
 * - MailEncryption: Encryption type - 'tls', 'ssl', or empty for none (default: tls)
 * - MailSMTPDebug: Debug level - 0 (off), 1 (client), 2 (client+server) (default: 0, optional)
 */
class MailService
{
    /**
     * Sends an email using PHPMailer with configuration from .env
     *
     * @param string $recipientEmail Recipient's email address
     * @param string $recipientName Recipient's display name
     * @param string $subject Email subject
     * @param string $body Email content (HTML or plain text)
     * @return bool True on success, false on failure
     */
    public static function send(
        string $recipientEmail,
        string $recipientName,
        string $subject,
        string $body
    ): bool {
        try {
            $smtpConfig = self::loadSmtpConfig();

            if (!self::validateConfig($smtpConfig)) {
                return false;
            }

            $mailer = self::configureMail($smtpConfig);

            $mailer->addAddress($recipientEmail, $recipientName);

            $mailer->Subject = $subject;
            $mailer->Body = $body;
            $mailer->isHTML(true);

            $result = $mailer->send();

            if ($result) {
                error_log("Email sent successfully to {$recipientEmail}");
            } else {
                error_log("PHPMailer failed to send to {$recipientEmail}: " . ($mailer->ErrorInfo ?? 'unknown'));
            }

            return $result;
        } catch (Exception $e) {
            error_log("PHPMailer Exception: " . $e->getMessage());
            return false;
        } catch (\Throwable $e) {
            error_log("Unexpected error in MailService: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Loads SMTP configuration from environment variables
     *
     * @return array Configuration array with SMTP settings
     */
    private static function loadSmtpConfig(): array
    {
        return [
            'host'       => ConfigLoader::env('MailHost'),
            'port'       => (int) ConfigLoader::env('MailPort', 587),
            'username'   => ConfigLoader::env('MailUsername'),
            'password'   => ConfigLoader::env('MailPassword'),
            'fromAddress' => ConfigLoader::env('MailFromAddress'),
            'fromName'   => ConfigLoader::env('MailFromName'),
            'encryption' => ConfigLoader::env('MailEncryption', 'tls'),
            'debugLevel' => (int) ConfigLoader::env('MailSMTPDebug', 0),
        ];
    }

    /**
     * Validates SMTP configuration
     *
     * @param array $config Configuration array to validate
     * @return bool True if valid, false otherwise
     */
    private static function validateConfig(array $config): bool
    {
        $required = ['host', 'username', 'password'];

        foreach ($required as $key) {
            if (empty($config[$key])) {
                error_log("Mail Configuration Error: Missing '{$key}' in .env file.");
                return false;
            }
        }

        // Ensure we have a From address; fallback to username if not provided
        if (empty($config['fromAddress'])) {
            error_log("Mail Warning: MailFromAddress not set in .env; using MailUsername");
        }

        return true;
    }

    /**
     * Configures and returns a PHPMailer instance
     *
     * @param array $config Configuration array from loadSmtpConfig()
     * @return PHPMailer Configured PHPMailer instance
     * @throws Exception
     */
    private static function configureMail(array $config): PHPMailer
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = $config['host'];
        $mail->Port = $config['port'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];

        $encryptionType = strtolower($config['encryption']);
        if ($encryptionType === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryptionType === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure = false;
        }

        if ($config['debugLevel'] > 0) {
            $mail->SMTPDebug = $config['debugLevel'];
            $mail->Debugoutput = function ($str, $level) {
                error_log("PHPMailer debug [{$level}]: {$str}");
            };
        }

        // Set sender
        $fromAddress = $config['fromAddress'] ?: $config['username'];
        $fromName = $config['fromName'] ?: 'Website';
        $mail->setFrom($fromAddress, $fromName);

        return $mail;
    }

    /**
     * Sends an email to multiple recipients
     *
     * @param array $recipients Array of ['email' => 'name'] pairs
     * @param string $subject Email subject
     * @param string $body Email content
     * @return bool True if all emails sent successfully, false otherwise
     */
    public static function sendToMultiple(array $recipients, string $subject, string $body): bool
    {
        $allSuccess = true;

        foreach ($recipients as $email => $name) {
            if (!self::send($email, $name, $subject, $body)) {
                $allSuccess = false;
            }
        }

        return $allSuccess;
    }
}
