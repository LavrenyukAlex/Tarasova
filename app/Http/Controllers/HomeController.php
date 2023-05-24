<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Methods\Location;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function order(Request $request)
    {

        \App\Helpers\TelegramBot::send(env('TELEGRAM_CHAT_ID'), $request->post('name'));
        \App\Helpers\TelegramBot::send(env('TELEGRAM_CHAT_ID'), $request->post('phone'));

        return redirect('/order');

    }

    public function back()
    {
        return view('order');
    }
}
