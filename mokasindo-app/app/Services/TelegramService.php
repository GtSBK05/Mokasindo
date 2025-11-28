<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    protected $token;
    protected $baseUrl;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN');
        $this->baseUrl = "https://api.telegram.org/bot{$this->token}/";
    }

    public function sendMessage($chatId, $message)
    {
        // Validasi Token
        if (!$this->token) {
            return ['success' => false, 'error' => 'Token kosong di .env'];
        }

        try {
            // Kirim request ke API Telegram
            $response = Http::post($this->baseUrl . 'sendMessage', [
                'chat_id' => $chatId,
                'text'    => $message,
                'parse_mode' => 'HTML'
            ]);

            // Cek apakah Telegram menjawab "OK"
            if ($response->successful()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'error' => 'Telegram Error: ' . $response->body()];
            }

        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Koneksi Error: ' . $e->getMessage()];
        }
    }
}