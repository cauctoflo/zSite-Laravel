<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wohali\OAuth2\Client\Provider\Discord;

class Discords extends Controller
{
    /**
     * Récupère le code OAUTH
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

                // Utilise le jeton d'accès pour obtenir les informations de l'utilisateur
                $userInfo = $provider->getResourceOwner($accessToken);

                // Redirige l'utilisateur vers une page de succès
                return $userInfo->toArray();

                
            } catch (\Exception $e) {
                return $e;
            }
        }

        // Redirige l'utilisateur vers la page de connexion Discord
        return redirect()->away('https://discord.com/api/oauth2/authorize?client_id=' . env('DISCORD_CLIENT_ID') . '&redirect_uri=' . env('DISCORD_REDIRECT_URI') . '&response_type=code&scope=identify');
    }

    private function getUserGuilds()
    {
        // Obtenir les guildes de l'utilisateur depuis l'API Discord si l'utilisateur a les permissions de propriétaire ou d'administrateur
        // ...
    }

    private function getBotGuilds()
    {
        // Obtenir les guildes du bot depuis l'API Discord - Token depuis .env
        // ...
    }

    private function getCommonGuilds()
    {
        // Entre le bot et l'utilisateur
        // ...
    }
}
