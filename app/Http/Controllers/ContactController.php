<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
public function store(Request $request)
{
    $data = $request->validate([
        'first_name' => ['required', 'string', 'max:100'],
        'last_name'  => ['required', 'string', 'max:100'],
        'email'      => ['required', 'email', 'max:255'],
        'phone'      => ['nullable', 'string', 'max:30'],
        'message'    => ['required', 'string', 'max:5000'],
    ]);

    $text = "🔔 NEW PORTFOLIO CONTACT!\n\n"
        . "👤 Name: {$data['first_name']} {$data['last_name']}\n"
        . "📧 Email: {$data['email']}\n"
        . "📱 Phone: " . ($data['phone'] ?? 'Not provided') . "\n\n"
        . "💬 Message:\n{$data['message']}";

    try {
        $response = Http::timeout(15)->post(
            'https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN') . '/sendMessage',
            [
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => $text,
            ]
        );

        if (!$response->successful() || !$response->json('ok')) {
            Log::error('Telegram notification failed', [
                'response' => $response->json(),
            ]);

            return back()->withInput()->with(
                'error',
                'Sorry, something went wrong. Please try again.'
            );
        }

    } catch (\Exception $e) {
        Log::error('Telegram connection error: ' . $e->getMessage());

        return back()->withInput()->with(
            'error',
            'Unable to send your message right now.'
        );
    }

    return redirect()
        ->to(route('home') . '#contact')
        ->with('success', 'Thanks! Your message has been sent successfully.');
}
}