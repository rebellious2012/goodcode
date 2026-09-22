# 📱 Руководство: Отправка форм с сайта в Telegram-бот

Полное пошаговое руководство по подключению отправки заявок с любых сайтов в закрытую группу или личные сообщения Telegram.

---

## 📑 Содержание
1. [Подготовка Telegram (Бот + Группа)](#1-подготовка-telegram-бот--группа)
2. [Интеграция в проекты на Laravel](#2-интеграция-в-проекты-на-laravel)
3. [Интеграция в обычные HTML / PHP лендинги](#3-интеграция-в-обычные-html--php-лендинги)
4. [Защита от спама (Honeypot)](#4-защита-от-спама-honeypot)
5. [Частые ошибки и их решения](#5-частые-ошибки-и-их-решения)

---

## 1. Подготовка Telegram (Бот + Группа)

### Шаг 1.1: Создать бота
1. Откройте в Telegram официального бота [@BotFather](https://t.me/BotFather).
2. Отправьте команду `/newbot`.
3. Укажите видимое имя (например: `MyProject Leads`) и системный username (должен заканчиваться на `bot`, например: `myproject_leads_bot`).
4. Скопируйте полученный **токен**:
   ```text
   8330607492:AAH8r9OCF_Nv4rmOCcKVxyNwwvO6-ojkrzI
   ```

### Шаг 1.2: Создать группу для заявок
1. Создайте в Telegram новую группу (например: *«Заявки с сайта GoodCode»*).
2. Добавьте в эту группу созданного бота.
3. ⚠️ **КРИТИЧЕСКИ ВАЖНО**: Сделайте бота **Администратором группы**!  
   *По умолчанию у ботов включен режим приватности (Privacy Mode), и бот не видит сообщения в группах, пока не станет администратором.*

### Шаг 1.3: Получить Chat ID группы
* **Способ А (через artisan-команду в Laravel):**
  Если бот уже добавлен администратором, запустите:
  ```bash
  php artisan telegram:test
  ```
  Команда сама покажет таблицу со всеми чатами и их ID.
* **Способ Б (через браузер):**
  Напишите любое сообщение в группу, затем откройте в браузере:
  ```text
  https://api.telegram.org/bot<ВАШ_ТОКЕН>/getUpdates
  ```
  Найдите блок: `"chat":{"id": -100xxxxxxxxxx}`.  
  *ID группы всегда начинается со знака минус (например, `-1003962830538`). Копируйте со знаком минус!*

---

## 2. Интеграция в проекты на Laravel

### 2.1. Добавить переменные в `.env`
В конец файла `.env` каждого проекта добавьте:
```env
TELEGRAM_BOT_TOKEN=8330607492:AAH8r9OCF_Nv4rmOCcKVxyNwwvO6-ojkrzI
TELEGRAM_CHAT_ID=-1003962830538
TELEGRAM_VERIFY_SSL=true
```

### 2.2. Зарегистрировать в `config/services.php`
В массив в файле `config/services.php`:
```php
'telegram' => [
    'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    'chat_id' => env('TELEGRAM_CHAT_ID'),
    'verify_ssl' => env('TELEGRAM_VERIFY_SSL', true),
],
```

### 2.3. Создать сервис `app/Services/TelegramService.php`
Скопируйте этот класс в ваш проект:
```php
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
     * HTTP-клиент с поддержкой локальной разработки на Windows (обход cURL error 60)
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
     * Отправка произвольного HTML-сообщения в Telegram
     */
    public function sendMessage(string $text, ?string $chatId = null): array
    {
        $targetChatId = $chatId ?: $this->chatId;

        if (empty($this->token) || empty($targetChatId)) {
            Log::warning('Telegram: Bot Token или Chat ID не заданы в .env');
            return ['ok' => false, 'error' => 'Credentials not configured'];
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
            Log::error('Telegram send failed: ' . $e->getMessage());
            return ['ok' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Форматирование и отправка заявки формы
     */
    public function sendLead(array $data): array
    {
        $name = trim(($data['name'] ?? '') . ' ' . ($data['last_name'] ?? ''));
        $phone = trim($data['phone'] ?? '');
        $email = trim($data['email'] ?? '');
        $message = trim($data['message'] ?? $data['comment'] ?? '');

        $site = config('app.name', 'MyWebsite');
        $ip = request()->ip() ?? 'Unknown';

        $text = "🔔 <b>Новая заявка с сайта {$site}</b>\n\n";
        $text .= "👤 <b>Имя:</b> " . htmlspecialchars($name ?: 'Не указано', ENT_QUOTES) . "\n";

        if (!empty($phone)) {
            $text .= "📞 <b>Телефон:</b> " . htmlspecialchars($phone, ENT_QUOTES) . "\n";
        }
        if (!empty($email)) {
            $text .= "📧 <b>Email:</b> " . htmlspecialchars($email, ENT_QUOTES) . "\n";
        }
        if (!empty($message)) {
            $text .= "\n💬 <b>Сообщение:</b>\n" . htmlspecialchars($message, ENT_QUOTES) . "\n\n";
        }

        $text .= "📍 <b>IP:</b> <code>{$ip}</code>";

        return $this->sendMessage($text);
    }

    /**
     * Получение обновлений для поиска ID групп
     */
    public function getUpdates(): array
    {
        if (empty($this->token)) return ['ok' => false, 'error' => 'No token'];
        return $this->client()->get("https://api.telegram.org/bot{$this->token}/getUpdates")->json();
    }
}
```

### 2.4. Добавить команду тестирования `app/Console/Commands/TelegramTestCommand.php`
```php
<?php

namespace App\Console\Commands;

use App\Services\TelegramService;
use Illuminate\Console\Command;

class TelegramTestCommand extends Command
{
    protected $signature = 'telegram:test {--chat= : Specific chat ID}';
    protected $description = 'Проверка подключения Telegram бота и поиск Chat ID';

    public function handle(TelegramService $telegram): int
    {
        $chatId = $this->option('chat') ?: config('services.telegram.chat_id');
        $this->info("--- Проверка конфигурации Telegram ---");

        if (empty(config('services.telegram.bot_token'))) {
            $this->error("❌ TELEGRAM_BOT_TOKEN не задан в .env!");
            return Command::FAILURE;
        }

        if (empty($chatId)) {
            $this->warn("⚠️ TELEGRAM_CHAT_ID не задан. Ищем через getUpdates...");
            $updates = $telegram->getUpdates();
            $results = $updates['result'] ?? [];

            $foundChats = [];
            foreach ($results as $item) {
                $chat = $item['message']['chat'] ?? $item['my_chat_member']['chat'] ?? null;
                if ($chat && !isset($foundChats[$chat['id']])) {
                    $foundChats[$chat['id']] = [
                        'id' => $chat['id'],
                        'title' => $chat['title'] ?? ($chat['first_name'] ?? 'Личный чат'),
                    ];
                }
            }

            if (empty($foundChats)) {
                $this->warn("Сообщений не найдено. Напишите в группу и сделайте бота админом!");
                return Command::SUCCESS;
            }

            $this->table(['Chat ID', 'Название'], $foundChats);
            return Command::SUCCESS;
        }

        $res = $telegram->sendMessage("✅ <b>Тестовое сообщение</b> с сайта " . config('app.name'), $chatId);
        if ($res['ok']) {
            $this->info("🎉 Сообщение успешно доставлено в Telegram!");
            return Command::SUCCESS;
        }

        $this->error("❌ Ошибка: " . ($res['error'] ?? 'Неизвестно'));
        return Command::FAILURE;
    }
}
```

### 2.5. Контроллер обработки формы
```php
use App\Services\TelegramService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

public function submit(Request $request, TelegramService $telegram): JsonResponse
{
    // 1. Проверка Honeypot ловушки спам-ботов
    if ($request->filled('website_hp')) {
        return response()->json(['success' => true]);
    }

    // 2. Валидация
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'phone' => 'required|string|max:50',
        'message' => 'nullable|string|max:3000',
    ]);

    // 3. Отправка в Telegram
    $result = $telegram->sendLead($validated);

    if (!$result['ok']) {
        return response()->json(['success' => false, 'message' => 'Ошибка отправки'], 500);
    }

    return response()->json(['success' => true]);
}
```

### 2.6. Маршрут в `routes/web.php`
```php
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
```

---

## 3. Интеграция в обычные HTML / PHP лендинги

Для лендингов без Laravel (например, чистый HTML/PHP):

### Шаг 3.1: Создать файл `send.php` в корне сайта
```php
<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// 1. Защита от спам-ботов (Honeypot)
if (!empty($_POST['website_hp'])) {
    echo json_encode(['success' => true]);
    exit;
}

// 2. Настройки Telegram
$token   = "8330607492:AAH8r9OCF_Nv4rmOCcKVxyNwwvO6-ojkrzI";
$chat_id = "-1003962830538";
$site    = "EasyMoving"; // Название текущего сайта

// 3. Сбор полей
$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$comment = trim($_POST['comment'] ?? $_POST['message'] ?? '');
$ip      = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

if (empty($name) || empty($phone)) {
    http_response_code(422);
    echo json_encode(['error' => 'Заполните обязательные поля']);
    exit;
}

// 4. Формирование сообщения
$text  = "🔔 <b>Новая заявка: {$site}</b>\n\n";
$text .= "👤 <b>Имя:</b> " . htmlspecialchars($name, ENT_QUOTES) . "\n";
$text .= "📞 <b>Телефон:</b> " . htmlspecialchars($phone, ENT_QUOTES) . "\n";
if (!empty($comment)) {
    $text .= "💬 <b>Комментарий:</b> " . htmlspecialchars($comment, ENT_QUOTES) . "\n";
}
$text .= "\n📍 <b>IP:</b> <code>{$ip}</code>";

// 5. Отправка cURL
$ch = curl_init("https://api.telegram.org/bot{$token}/sendMessage");
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => 'HTML',
    ]),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false, // Для локалки Windows
    CURLOPT_TIMEOUT => 10,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Ошибка отправки в Telegram']);
}
```

### Шаг 3.2: Отправка формы из JavaScript (без перезагрузки страницы)
```html
<form id="orderForm">
    <!-- Скрытая ловушка спама: люди ее не видят, а спам-боты заполняют -->
    <div style="display:none !important;" aria-hidden="true">
        <input type="text" name="website_hp" tabindex="-1" autocomplete="off">
    </div>

    <input type="text" name="name" placeholder="Ваше имя" required>
    <input type="tel" name="phone" placeholder="Ваш телефон" required>
    <textarea name="comment" placeholder="Сообщение"></textarea>

    <button type="submit" id="submitBtn">Отправить заявку</button>
    <div id="formStatus" style="display:none; margin-top:10px;"></div>
</form>

<script>
document.getElementById('orderForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    const status = document.getElementById('formStatus');
    const originalText = btn.innerText;

    btn.disabled = true;
    btn.innerText = 'Отправка...';
    status.style.display = 'none';

    try {
        const res = await fetch('/send.php', {
            method: 'POST',
            body: new FormData(this)
        });
        const data = await res.json();

        if (res.ok && data.success) {
            status.innerText = 'Спасибо! Заявка успешно отправлена.';
            status.style.color = '#10b981';
            status.style.display = 'block';
            this.reset();
        } else {
            throw new Error(data.error || 'Ошибка отправки');
        }
    } catch (err) {
        status.innerText = err.message;
        status.style.color = '#ef4444';
        status.style.display = 'block';
    } finally {
        btn.disabled = false;
        btn.innerText = originalText;
    }
});
</script>
```

---

## 4. Защита от спама (Honeypot)

Спам-боты обходят сайты и автоматически заполняют любые найденные формы. Чтобы не подключать тяжелые капчи (Google reCAPTCHA / Cloudflare Turnstile):

1. Добавляется скрытый `<input>` с произвольным именем (например, `website_hp`):
   ```html
   <div style="display: none !important;" aria-hidden="true">
       <input type="text" name="website_hp" tabindex="-1" autocomplete="off">
   </div>
   ```
2. Реальный пользователь его **не видит** и оставляет пустым.
3. Спам-бот парсит DOM и обязательно заполнит это поле.
4. На сервере:
   ```php
   if (!empty($request->website_hp)) {
       // Тихо возвращаем успех, чтобы бот не пытался пробить защиту другими способами
       return response()->json(['success' => true]);
   }
   ```

---

## 5. Частые ошибки и их решения

### 1. `getUpdates` возвращает `{"ok":true,"result":[]}` (сообщений не видно)
* **Причина:** Включен Privacy Mode у бота.
* **Решение:** Назначьте бота **Администратором группы** (с минимальными правами). Администратор видит все сообщения группы.

### 2. `cURL error 60: SSL certificate problem: self-signed certificate in certificate chain`
* **Причина:** Локальный Windows PHP не имеет пути к корневым сертификатам `cacert.pem` или антивирус перехватывает SSL.
* **Решение:** В классе `TelegramService` уже встроен вызов `->withoutVerifying()` для локального окружения `app()->isLocal()`.

### 3. Бот не отправляет сообщение в группу (`chat not found` или `Unauthorized`)
* Убедитесь, что ID группы указан **со знаком минус** (например, `-1003962830538`).
* Убедитесь, что бот действительно состоит в этой группе и не был удален.
