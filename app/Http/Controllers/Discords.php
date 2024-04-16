<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wohali\OAuth2\Client\Provider\Discord;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
class Discords extends Controller
{
    /**
     * Récupère le code OAUTH et échange contre un jeton d'accès.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Vérifie si le code OAUTH est présent dans la requête
        if ($request->has('code')) {
            // Récupère le code OAUTH
            $code = $request->input('code');

            // Initialise le fournisseur d'authentification Discord
            $provider = new Discord([
                'clientId' => env('DISCORD_CLIENT_ID'),
                'clientSecret' => env('DISCORD_CLIENT_SECRET'),
                'redirectUri' => env('DISCORD_REDIRECT_URI'),
            ]);

            try {
                // Échange le code OAUTH contre un jeton d'accès
                $accessToken = $provider->getAccessToken('authorization_code', [
                    'code' => $code,
                ]);

                // Enregistre le jeton d'accès dans une session
                $request->session()->put('accessToken', $accessToken);

                // Utilise le jeton d'accès pour obtenir les informations de l'utilisateur
                $userInfo = $provider->getResourceOwner($accessToken);
                $userGuilds = $this->getCommonGuilds($request);
                $userUncommonGuilds = $this->getUserGuilds($request);

                // Sauvegarde les informations en session
                $request->session()->put('userInfo', $userInfo);
                $request->session()->put('userGuilds', $userGuilds);
                $request->session()->put('userUncommonGuilds', $userUncommonGuilds);

                // return $userUncommonGuilds;
                return redirect('/dashboard');

            } catch (\Exception $e) {
                return $e;
            }
        }
    }

    /**
     * Récupère les guildes de l'utilisateur.
     *
     * Cette fonction est utilisée pour récupérer les guildes dont l'utilisateur est membre.
     *
     * @param Request $request L'objet de requête HTTP.
     * @return array Les guildes de l'utilisateur.
     */
    private function getUserGuilds(Request $request)
    {
        $accessToken = $request->session()->get('accessToken');
        $guilds = Cache::remember('user_guilds', 60, function () use ($accessToken) {
            $retryCount = 0;
            $retryDelay = 1; // Delay in seconds before retrying

            while ($retryCount < 3) {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $accessToken->getToken(),
                ])->timeout(30)->get('https://discord.com/api/v10/users/@me/guilds');

                if ($response->successful()) {
                    $guilds = $response->json();
                    session()->put('guilder', $guilds);

                    $filteredGuilds = array_filter($guilds, function ($guild) {
                        return isset($guild['id']) && ($guild['owner'] || ($guild['permissions'] & 8));
                    });

                    return $filteredGuilds;
                } else {
                    $retryAfter = $response->header('Retry-After');
                    if ($retryAfter) {
                        sleep($retryAfter);
                    } else {
                        sleep($retryDelay);
                    }
                    $retryCount++;
                }
            }

            return [];
        });

        return $guilds;
    }

    /**
     * Récupère les guildes du bot.
     *
     * @return array Les guildes du bot.
     */
    private function getBotGuilds()
    {
        $guilds = Cache::remember('bot_guilds', 60, function () {
            $response = Http::withHeaders([
                'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
            ])->timeout(60)->get('https://discord.com/api/v10/users/@me/guilds');

            if ($response->successful()) {
                return $response->json();
            } else {
                return [];
            }
        });

        return $guilds;
    }

    /**
     * Récupère les guildes communes entre l'utilisateur et le bot.
     *
     * @param Request $request L'objet de requête HTTP.
     * @return string Les guildes communes sous forme de chaîne JSON.
     */
    private function getCommonGuilds(Request $request)
    {
        $botGuilds = $this->getBotGuilds();
        $userGuilds = $this->getUserGuilds($request);

        $commonGuilds = [];
        foreach ($botGuilds as $botGuild) {
            foreach ($userGuilds as $userGuild) {
                if ($botGuild['id'] === $userGuild['id']) {
                    $commonGuilds[] = $botGuild;
                    break;
                }
            }
        }

        $commonGuildsString = json_encode($commonGuilds);

        return $commonGuildsString;
    }
}
