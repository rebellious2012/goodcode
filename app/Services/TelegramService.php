<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    protected ?string $token;
    protected ?string $chatId;

    public function __construct()
    {
        $this->token = config('services.telegram.bot_token');
        $this->chatId = config('services.telegram.chat_id');
    }

    /**
     * Build HTTP client with SSL verification fallback for local Windows environments
     */
    protected function client(): PendingRequest
    {
        $client = Http::timeout(10);

        $verifySsl = config('services.telegram.verify_ssl');
        if ($verifySsl === false || ($verifySsl === null && app()->isLocal())) {
            $client = $client->withoutVerifying();
        }

        return $client;
    }

    /**
     * Send raw HTML message to Telegram chat
     */
    public function sendMessage(string $text, ?string $chatId = null): array
    {
        $targetChatId = $chatId ?: $this->chatId;

        if (empty($this->token)) {
            Log::warning('Telegram bot token is not configured in .env');
            return ['ok' => false, 'error' => 'Bot token is missing'];
        }

        if (empty($targetChatId)) {
            Log::warning('Telegram chat ID is not configured in .env');
            return ['ok' => false, 'error' => 'Chat ID is missing'];
        }

        try {
            $response = $this->client()->post("https://api.telegram.org/bot{$this->token}/sendMessage", [
                'chat_id' => $targetChatId,
                'text' => $text,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ]);

            $result = $response->json();

            if (!$response->successful() || !($result['ok'] ?? false)) {
                Log::error('Telegram API error', ['response' => $result]);
                return ['ok' => false, 'error' => $result['description'] ?? 'Telegram API error'];
            }

            return ['ok' => true];
        } catch (\Throwable $e) {
            Log::error('Failed to send Telegram message: ' . $e->getMessage());
            return ['ok' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Format and send contact form lead
     */
    public function sendLead(array $data): array
    {
        $firstName = trim($data['first_name'] ?? '');
        $lastName = trim($data['last_name'] ?? '');
        $fullName = trim("{$firstName} {$lastName}");

        $email = trim($data['email'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $company = trim($data['company'] ?? '');
        $service = trim($data['service'] ?? '');
        $budget = trim($data['budget'] ?? '');
        $message = trim($data['message'] ?? '');

        $siteName = config('app.name', 'CodElevator');
        $locale = strtoupper(app()->getLocale());
        $ip = request()->ip() ?? 'Unknown';

        $text = "🔔 <b>Новая заявка с сайта {$siteName}</b>\n\n";
        $text .= "👤 <b>Клиент:</b> " . htmlspecialchars($fullName, ENT_QUOTES) . "\n";
        $text .= "📧 <b>Email:</b> " . htmlspecialchars($email, ENT_QUOTES) . "\n";

        if (!empty($phone)) {
            $text .= "📞 <b>Телефон:</b> " . htmlspecialchars($phone, ENT_QUOTES) . "\n";
        }
        if (!empty($company)) {
            $text .= "🏢 <b>Компания:</b> " . htmlspecialchars($company, ENT_QUOTES) . "\n";
        }
        if (!empty($service)) {
            $text .= "🛠 <b>Услуга:</b> " . htmlspecialchars($service, ENT_QUOTES) . "\n";
        }
        if (!empty($budget)) {
            $text .= "💰 <b>Бюджет:</b> " . htmlspecialchars($budget, ENT_QUOTES) . "\n";
        }

        if (!empty($message)) {
            $text .= "\n💬 <b>Сообщение:</b>\n" . htmlspecialchars($message, ENT_QUOTES) . "\n\n";
        }

        $text .= "🌐 <b>Язык:</b> {$locale} | 📍 <b>IP:</b> <code>{$ip}</code>";

        return $this->sendMessage($text);
    }

    /**
     * Fetch recent updates to find Chat IDs
     */
    public function getUpdates(): array
    {
        if (empty($this->token)) {
            return ['ok' => false, 'error' => 'Bot token is missing'];
        }

        try {
            $response = $this->client()->get("https://api.telegram.org/bot{$this->token}/getUpdates");
            return $response->json();
        } catch (\Throwable $e) {
            return ['ok' => false, 'error' => $e->getMessage()];
        }
    }
}
