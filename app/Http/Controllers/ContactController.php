<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function index(Request $request): View
    {
        return view('pages.contact');
    }

    /**
     * Handle the incoming request (backward compatibility).
     */
    public function __invoke(Request $request): View
    {
        return $this->index($request);
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request, TelegramService $telegram): JsonResponse
    {
        // Honeypot anti-spam trap: if filled by a bot, silently return success
        if ($request->filled('website_hp')) {
            return response()->json([
                'success' => true,
                'message' => __('contact.form_success_message'),
            ]);
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:150',
            'service' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:100',
            'message' => 'required|string|max:5000',
        ]);

        $result = $telegram->sendLead($validated);

        if (!$result['ok']) {
            return response()->json([
                'success' => false,
                'message' => 'Не удалось отправить заявку. Пожалуйста, повторите попытку позже.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => __('contact.form_success_message'),
        ]);
    }
}
