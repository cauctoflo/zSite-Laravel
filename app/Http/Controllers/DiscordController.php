<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wohali\OAuth2\Client\Provider\Discord;
use App\Models\UserDiscord;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DiscordController extends Controller
{
    private $provider;

    public function __construct()
    {
        $this->provider = new Discord([
            'clientId' => '1117699457778192414',
            'clientSecret' => 'M7-tdx-51BSRNZaxDUoHh426DpJnqXDT',
            'redirectUri' => 'http://127.0.0.1:8000/discord/callback'
        ]);
    }

    public function handleCallback(Request $request)
    {
        $code = $request->code;

        if (!empty($code)) {
            try {
                $accessToken = $this->getAccessToken($code);
                $user = $this->getUserDetails($accessToken);
                
                $commonGuilds = $this->getCommonGuilds($accessToken);
                $this->getAllUserGuilds($accessToken);
                $userDiscord = $this->getOrCreateUserDiscord($user);
                $this->displayGuildIcons($commonGuilds);
                $this->saveUserDetails($user, $userDiscord, $accessToken);

                    // Store user and guilds in session
                $request->session()->put('user', $userDiscord);
                $request->session()->put('guilds', $commonGuilds);
                var_dump(session('user'));
    
                return view('home');

            } catch (\Exception $e) {
                Log::error('Échec de récupération des détails de l\'utilisateur ou de sauvegarde dans la base de données : ' . $e->getMessage());
                return view('errors.404');
            }
        } else {
            echo('error');
            return view('errors.404');
        }
    }

    public function someMethod()
    {
        $user = Session::get('user');
        $guilds = Session::get('guilds');
    
        return view('discord', ['user' => $user, 'guilds' => $guilds]);
    }

    private function getAccessToken($code)
    {
        return $this->provider->getAccessToken('authorization_code', [
            'code' => $code
        ]);
    }

    private function getUserDetails($accessToken)
    {
        return $this->provider->getResourceOwner($accessToken);
    }

    private function getOrCreateUserDiscord($user)
    {
        return UserDiscord::firstOrNew(['discord_id' => $user->getId()]);
    }

    public function getCommonGuilds($accessToken)
    {
        $botGuilds = $this->getBotGuilds();
        $userGuilds = $this->getUserGuilds($accessToken);

        return array_uintersect($userGuilds, $botGuilds, function ($userGuild, $botGuild) {
            return $userGuild['id'] - $botGuild['id'];
        });
    }

    private function getBotGuilds()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
        ])->timeout(60)->get('https://discord.com/api/v10/users/@me/guilds');

        return $response->json();
    }

    public function getUserGuilds($accessToken)
{
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $accessToken->getToken(),
    ])->timeout(30)->get('https://discord.com/api/v10/users/@me/guilds');

    $guilds = $response->json();
    session()->put('guilder', $guilds);

    $filteredGuilds = array_filter($guilds, function ($guild) {
        return isset($guild['id']) && ($guild['owner'] || ($guild['permissions'] & 8));
    });

    return $filteredGuilds;

}

    public function getAllUserGuilds($accessToken)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken->getToken(),
        ])->timeout(30)->get('https://discord.com/api/v10/users/@me/guilds');

        $guilds = $response->json();
        session()->put('guilder', $guilds);
    }


    private function displayGuildIcons($commonGuilds)
    {
        $discord = [];
        foreach ($commonGuilds as $guild) {
            $discord[] = [
                'id' => $guild['id'],
                'name' => $guild['name'],
                'icon' => $guild['icon'],
            ];
        }

        foreach ($discord as $guild) {
            echo '<img src="https://cdn.discordapp.com/icons/' . $guild['id'] . '/' . $guild['icon'] . '.png" alt="' . $guild['name'] . '">';
        }

        Log::info(json_encode($discord));
    }

    private function saveUserDetails($user, $userDiscord, $accessToken)
    {
        if (!$userDiscord->exists) {
            $userDiscord->username = $user->getUsername();
            $userDiscord->email = $user->getEmail();
            $userDiscord->discord_id = $user->getId();

            $response = Http::withHeaders([
                'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
            ])->timeout(30)->get('https://discord.com/api/v10/users/' . $user->getId());

            if ($response->successful()) {
                $discordUser = $response->json();
                Log::info($discordUser);
                $userDiscord->avatar = $discordUser['avatar'];
                Log::info($user->getUsername());
            }

            $userDiscord->save();
            Log::info('Détails de l\'utilisateur enregistrés avec succès');

            $userDetails = $user->toArray();
            Log::info('Détails de l\'utilisateur:', $userDetails);
        }
    }



/**
 * Récupère les canaux Discord d'une guilde spécifique.
 *
 * @param string $guildId L'identifiant de la guilde.
 * @return \Illuminate\Http\JsonResponse La liste des noms des canaux.
 */
function getDiscordChannels($guildId)
{
try {
$response = Http::withHeaders([
'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/channels");


$channels = $response->json();

$channelNames = array_column($channels, 'name');
$Type = array_column($channels, 'type');
//   $id = array_column($channels, 'id');

$channelData = [];
for ($i = 0; $i < count($channelNames); $i++) {
if ($Type[$i] != 4 && $Type[$i] != 2) {
$channelData[] = [
'name' => $channelNames[$i],
'type' => $Type[$i]
//   'id' => $id[$i]
];
}
}

return response()->json(['channelData' => $channelData]);
} catch (\Exception $e) {
return response()->json(['error' => $e->getMessage()], 500);
}
}



function getDiscordRoles($guildId)
{
try {
$response = Http::withHeaders([
'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");


$roles = $response->json();

$roleNames = array_column($roles, 'name');

return response()->json(['roleNames' => $roleNames]);
} catch (\Exception $e) {
return response()->json(['error' => $e->getMessage()], 500);
}
}



/**
 * Get the ID of a specific Discord role.
 *
 * @param string $guildId The guild ID
 * @param string $roleName The role name
 * @return int|null The role ID, or null if not found
 */
function getDiscordRoleId($guildId, $roleName)
{

$roles = $this->getDiscordRoles($guildId)->original['roleNames'] ?? [];

foreach ($roles as $role) {
if ($role === $roleName) {

$response = Http::withHeaders([
'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");




$roles = $response->json();

return array_column($roles, 'id', 'name')[$roleName];
}
}

return null;
}









/**
 * Get the ID of a specific Discord channel.
 *
 * @param string $guildId The guild ID
 * @param string $channelName The channel name
 * @return int|null The channel ID, or null if not found
 */
function getDiscordChannelId($guildId, $channelName)
{

    $response = Http::withHeaders([
    'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN')
    ])->timeout(30)->get("https://discord.com/api/v10/guilds/$guildId/channels");

    $channels = $response->json();

    foreach ($channels as $channel) {
        if ($channel['name'] === $channelName) {
        return $channel['id'];
        }
    }

return null;
}





}