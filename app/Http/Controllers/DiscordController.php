<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wohali\OAuth2\Client\Provider\Discord;


class DiscordController extends Controller
{
    public function handleDiscord(Request $request)
    {
        dd('test');
        $provider = new Discord([
            'clientId' => '1117699457778192414',
            'clientSecret' => 'M7-tdx-51BSRNZaxDUoHh426DpJnqXDT',
            'redirectUri' => 'http://127.0.0.1:8000/discord/callback'
        ]);
        echo('test');
        $provider->getAccessToken('authorization_code', [
            'code' => $request->code
        ]);
    }
}

