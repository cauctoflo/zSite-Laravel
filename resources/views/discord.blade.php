<?php

use Wohali\OAuth2\Client\Provider\Discord;
use App\Models\UserDiscord;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

// Création de l'instance du fournisseur Discord
$provider = new Discord([
    'clientId' => '1117699457778192414',
    'clientSecret' => 'M7-tdx-51BSRNZaxDUoHh426DpJnqXDT',
    'redirectUri' => 'http://127.0.0.1:8000/discord/callback'
]);

// Récupération du code d'autorisation
$code = request()->code;

if (!empty($code)) {
    try {
        // Obtention du jeton d'accès
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $code
        ]);

        // Obtention des détails de l'utilisateur à partir du jeton d'accès
        $user = $provider->getResourceOwner($accessToken);

        
        // Vérification si l'utilisateur existe déjà
        $userDiscord = UserDiscord::firstOrNew(['discord_id' => $user->getId()]);
        Log::info(json_encode($user->toArray()));
        Log::info(json_encode($userDiscord->toArray()));
        // Récupération des détails de l'utilisateur à partir de l'API Discord
        $response = Http::withHeaders([
            'Authorization' => 'Bot MTExNzY5OTQ1Nzc3ODE5MjQxNA.Gxrw6o.bNsXnRUKPk82PFdnQOks_Pzrt2XhzBl3jNeONg',
        ])->timeout(30)->get('https://discord.com/api/v10/users/' . $user->getId());

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken->getToken(),
        ])->timeout(30)->get('https://discord.com/api/v10/users/@me/guilds');

        $guilds = $response->json();
        $filteredGuilds = array_filter($guilds, function ($guild) {
            // Vérifie si l'utilisateur est propriétaire ou a la permission d'administrateur
            return isset($guild['id']) && ($guild['owner'] || ($guild['permissions'] & 8));
        });

        $discord = [];
        foreach ($filteredGuilds as $guild) {
            $discord[] = [
                'id' => $guild['id'],
                'name' => $guild['name'],
                'icon' => $guild['icon'],
            ];
        }

        // Affichage des icônes des guildes filtrées
        foreach ($discord as $guild) {
            echo '<img src="https://cdn.discordapp.com/icons/' . $guild['id'] . '/' . $guild['icon'] . '.png" alt="' . $guild['name'] . '">';
        }

        // Journalisation des guildes filtrées
        Log::info(json_encode($discord));

        Log::info(json_encode($filteredGuilds));


        $discordUser = $response->json();

        if (!$userDiscord->exists) {
            // Insertion des détails de l'utilisateur dans la base de données
            $userDiscord->username = $user->getUsername();
            $userDiscord->email = $user->getEmail();
            $userDiscord->discord_id = $user->getId(); // Ajout de 'discord_id' à la propriété fillable

            if ($response->successful()) {
                Log::info($discordUser);
                $userDiscord->avatar = $discordUser['avatar'];
                Log::info($user->getUsername());
            }

            $userDiscord->save();
            Log::info('Détails de l\'utilisateur enregistrés avec succès');

            $userDetails = $user->toArray();
            Log::info('Détails de l\'utilisateur:', $userDetails);
        }

    } catch (\Exception $e) {
        Log::error('Échec de récupération des détails de l\'utilisateur ou de sauvegarde dans la base de données : ' . $e->getMessage());
        return view('error/404');
    }
} else {
    echo('error');
    return view('error/404');
}
?>