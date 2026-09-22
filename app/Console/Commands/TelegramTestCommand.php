<?php

namespace App\Console\Commands;

use App\Services\TelegramService;
use Illuminate\Console\Command;

class TelegramTestCommand extends Command
{
    protected $signature = 'telegram:test {--chat= : Specific chat ID to test}';
    protected $description = 'Test Telegram bot configuration or find chat IDs';

    public function handle(TelegramService $telegram): int
    {
        $token = config('services.telegram.bot_token');
        $chatId = $this->option('chat') ?: config('services.telegram.chat_id');

        $this->info("--- Проверка конфигурации Telegram ---");

        if (empty($token)) {
            $this->error("❌ TELEGRAM_BOT_TOKEN не задан в файле .env!");
            $this->line("Добавьте в .env строку:\nTELEGRAM_BOT_TOKEN=ваш_токен");
            return Command::FAILURE;
        }

        $this->info("✔ Токен бота найден: " . substr($token, 0, 10) . '...');

        if (empty($chatId)) {
            $this->warn("⚠️ TELEGRAM_CHAT_ID не задан в .env. Пытаемся определить ID чатов через Telegram API...");
            $updates = $telegram->getUpdates();

            if (!($updates['ok'] ?? false)) {
                $this->error("Ошибка запроса к Telegram API: " . ($updates['error'] ?? 'Неизвестная ошибка'));
                return Command::FAILURE;
            }

            $results = $updates['result'] ?? [];
            if (empty($results)) {
                $this->warn("❗ Новых сообщений для бота не найдено.");
                $this->line("Что сделать:");
                $this->line("1. Напишите любое сообщение в созданную группу (например: 'тест' или '/start').");
                $this->line("2. Убедитесь, что бот добавлен в группу как участник или администратор.");
                $this->line("3. Снова запустите эту команду: php artisan telegram:test");
                return Command::SUCCESS;
            }

            $foundChats = [];
            foreach ($results as $item) {
                $chat = $item['message']['chat'] ?? $item['my_chat_member']['chat'] ?? null;
                if ($chat && !isset($foundChats[$chat['id']])) {
                    $foundChats[$chat['id']] = [
                        'id' => $chat['id'],
                        'title' => $chat['title'] ?? ($chat['first_name'] ?? 'Личный чат'),
                        'type' => $chat['type'] ?? 'unknown',
                    ];
                }
            }

            $this->info("\nНайдены следующие чаты/группы:");
            $this->table(['Chat ID', 'Название', 'Тип'], $foundChats);
            $this->line("Скопируйте нужный Chat ID в файл .env:");
            $this->line("TELEGRAM_CHAT_ID=найденный_id\n");
            return Command::SUCCESS;
        }

        $this->info("Отправка тестового сообщения в Chat ID: {$chatId}...");
        $res = $telegram->sendMessage("✅ <b>Тестовое сообщение</b>\n\nTelegram бот успешно подключен к проекту <b>" . config('app.name') . "</b>!", $chatId);

        if (!$res['ok']) {
            $this->error("❌ Не удалось отправить сообщение: " . ($res['error'] ?? 'Неизвестная ошибка'));
            return Command::FAILURE;
        }

        $this->info("🎉 Тестовое подключение успешно!");
        $this->info("Отправка примера реальной заявки с сайта...");

        $sampleLead = $telegram->sendLead([
            'first_name' => 'Александр',
            'last_name' => 'Петров',
            'email' => 'alex.petrov@example.com',
            'phone' => '+380 (99) 123-45-67',
            'company' => 'Tech Solutions Ltd',
            'service' => 'web-development',
            'budget' => '$25,000 - $50,000',
            'message' => 'Добрый день! Интересует разработка веб-сервиса с интеграцией CRM и Telegram-уведомлений. Хотели бы обсудить сроки и стоимость.',
        ]);

        if ($sampleLead['ok']) {
            $this->info("🎉 Пример заявки успешно доставлен в группу!");
        } else {
            $this->warn("⚠️ Заявка не доставлена: " . ($sampleLead['error'] ?? 'Ошибка'));
        }

        return Command::SUCCESS;
    }
}
