<?php

use Illuminate\Support\Facades\Route;
use Spatie\DiscordAlerts\Facades\DiscordAlert;
// Remove the duplicate import statement for 'Http'
use Illuminate\Support\Facades\Http; 

use App\Http\Controllers\AlertsController;


// /**
//  * Récupère les canaux Discord d'une guilde spécifique.
//  *
//  * @param string $guildId L'identifiant de la guilde.
//  * @return \Illuminate\Http\JsonResponse La liste des noms des canaux.
//  */
// function getDiscordChannels2($guildId)
// {
// try {
// $response = Http::withHeaders([
// 'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
// ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/channels");

// $channels = $response->json();

// $channelNames = array_column($channels, 'name');
// $Type = array_column($channels, 'type');

// $channelData = [];
// for ($i = 0; $i < count($channelNames); $i++) {
// if ($Type[$i] != 4 && $Type[$i] != 2) {
// $channelData[] = [
// 'name' => $channelNames[$i],
// 'type' => $Type[$i]
// ];
// }
// }

// return response()->json(['channelData' => $channelData]);
// } catch (\Exception $e) {
// return response()->json(['error' => $e->getMessage()], 500);
// }
// }

// /**
//  * Récupère les rôles Discord d'une guilde spécifique.
//  *
//  * @param string $guildId L'identifiant de la guilde.
//  * @return \Illuminate\Http\JsonResponse La liste des noms des rôles.
//  */
// function getDiscordRoles($guildId)
// {
// try {
// $response = Http::withHeaders([
// 'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
// ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");

// $roles = $response->json();

// $roleNames = array_column($roles, 'name');

// return response()->json(['roleNames' => $roleNames]);
// } catch (\Exception $e) {
// return response()->json(['error' => $e->getMessage()], 500);
// }
// }

// /**
//   /**
//  * Get the ID of a specific Discord role.
//  *
//  * @param string $guildId The guild ID
//  * @param string $roleName The role name 
//  * @return int|null The role ID, or null if not found
//  */
// function getDiscordRoleId($guildId, $roleName)
// {

// $roles = getDiscordRoles($guildId)->original['roleNames'] ?? [];

// foreach ($roles as $role) {
// if ($role === $roleName) {

// $response = Http::withHeaders([
// 'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
// ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");

// $roles = $response->json();

// return array_column($roles, 'id', 'name')[$roleName];
// }
// }

// return null;
// }


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('maintenance');
});

Route::get('/discord', function () {
    return redirect('https://discord.gg/gQx7ht97VK');
});


// Route::post('/maintenance/endpoint', function (Illuminate\Http\Request $request) {
//     $email = $request->input('email'); // Récupérer la valeur de l'e-mail à partir de la requête
//     $users = new \App\Models\notif_user();
//     $users->email=$email;
//     $users->save();    

//     return view('maintenance');
// });



// Route::prefix('/discord-alert')->group(function () {
//     Route::get('/', function () {
//         DiscordAlert::message('alerte vide');
//     });

//     Route::get('/{name}/', function ($name) {
//         DiscordAlert::message("Nouvelles alertes route", [
//             [
//             "content" => "",
//             "tts" => false,
//             "embeds" => [
//                 [
//                     "id" => 652627557,
//                     "title" => "🚨 - Alerte MySQL",
//                     "description" => "Une **violation de sécurité** a été détectée dans le système **zPoq** impliquant une infraction **MySQL**. La requête a été interceptée dès son entrée sur https://localhost/zadmin/phpmyadmin et a été bloquée. \nPour obtenir plus de détails sur cet incident, veuillez suivre [ce lien](https://cdn.discordapp.com/icons/946378038009020446/bf0e3eccb3a8e4c4efca94c1ccca8a43.webp?size=512).\n",
//                     "timestamp" => "2024-03-29T07:00:00.000Z",
//                     "color" => 15409955,
//                     "thumbnail" => [
//                         "url" => "https://cdn.discordapp.com/icons/946378038009020446/bf0e3eccb3a8e4c4efca94c1ccca8a43.webp?size=512"
//                     ],
//                     "fields" => [
//                         [
//                             "id" => 289284705,
//                             "name" => "Heures",
//                             "value" => "`⌛` 21/03/2024 21h02",
//                             "inline" => true
//                         ],
//                         [
//                             "id" => 639824919,
//                             "name" => "Type",
//                             "value" => "`⛓️` Query\n",
//                             "inline" => true
//                         ],
//                         [
//                             "id" => 296612093,
//                             "name" => "Status",
//                             "value" => "`🔴` Bloquée",
//                             "inline" => true
//                         ],
//                         [
//                             "id" => 667871334,
//                             "name" => "Classe",
//                             "value" => "`⭐` 4",
//                             "inline" => true
//                         ],
//                         [
//                             "id" => 546763700,
//                             "name" => "Routes",
//                             "value" => "`🔗` https://localhost:8000/discord-alerts/route",
//                             "inline" => true
//                         ],
//                         [
//                             "id" => 87650270,
//                             "name" => "Plus",
//                             "value" => "`🔻` [Accéder](https://localhost:8000/discord-alerts/route)",
//                             "inline" => true
//                         ]
//                     ]
//                 ]
//             ],
//             "components" => [
//                 [
//                     "id" => 954088615,
//                     "type" => 1,
//                     "components" => [
//                         [
//                             "id" => 186123673,
//                             "type" => 2,
//                             "style" => 5,
//                             "label" => "test",
//                             "action_set_id" => "362318720",
//                             "url" => "https://hetrixtools.com/r/9096ae10ca07b4d046878d4c561aedb5/",
//                             "emoji" => [
//                                 "name" => "⛓️",
//                                 "animated" => false
//                             ]
//                         ]
//                     ]
//                 ]
//             ],
//             "actions" => [
//                 "362318720" => [
//                     "actions" => []
//                 ]
//             ],
//             "username" => "Alerts -  LARAVEL",
//             "avatar_url" => "https://cdn.discordapp.com/embed/avatars/0.png"
//         ]]);
//     });
// });


Route::get('/alerts/{status}/{classe}/{type}', function ($status, $classe, $type) {
    $route = 'https://localhost' . request()->path();
    return (new AlertsController)->index($status, $classe, $route, $type);

});








Route::get('/home/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/t', function () {
    return view('home');
});


use App\Http\Controllers\DiscordController;

Route::get('/discord/callback', [DiscordController::class, 'handleCallback']);

//Route::get('/discord', function (Illuminate\Http\Request $request) {
//    return view('home')->with('request', $request);
//});
// Route::get('/dashboard/{server.id}/', function (Illuminate\Http\Request $request) {
//     return view('dashboard.index')->with('request', $request);
// });



use App\Http\Controllers\Discords;

use Illuminate\Http\Request;

use App\Http\Controllers\ModuleAccueilController;
use Illuminate\Database\PDO\SqlServerDriver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



// Route::get('/guilds', function () {
//     try {
//         // $token = 'MTExNzY5OTQ1Nzc3ODE5MjQxNA.Gl9u_1.ZyMAAK-QhBQRyKXrlrErhHAjx6MEbcRTQxjkmY'; // Replace with your valid Discord token
//         $response = Http::withHeaders([
//             // 'Authorization' => 'Bearer ' . $token,
//         ])->timeout(30)->get("https://discord.com/api/v10/guilds/1117701270543806476/roles");

//         $roles = $response->json();
//         return response()->json($roles);
//     } catch (\Exception $e) {
//         return response()->json(['error' => $e->getMessage()], 500);
//     }
// });





Route::get('/tests', [Discords::class, 'Index']);



Route::get('/user', function (Illuminate\Http\Request $request) {
    $userGuilds = $request->session()->get('userGuilds');
    
    $userInfo = json_decode($userGuilds, true);
    $names = array_column($userInfo, 'name');
    
    echo $request->session()->put('userInfo', $names);
    return response()->json(['userInfo' => $request->session()->get('userInfo')]);
});


Route::get('/dashboard/{serverid}/BVN/Save', function ($serverid) {
        return view('dashboard.Accueil.save')->with(['serverid' => $serverid]);

});

Route::get('/error/perm', function () {
    return view('Perm');
});
Route::get('/error/404', function () {
    return view('error.404');
});
Route::fallback(function () {
    return view('error/404');
});


// ROUTE DASHBOARD

Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/dashboard/{serverid}', function ($serverid) {
    return view('dashboard.index')->with('request', $serverid);
});
Route::get('/dashboard/{serverid}/{module}', function ($serverid, $modulename) {
    if (view()->exists('dashboard.'.$modulename . '.module')) {
        return view('dashboard.'.$modulename . '.module')->with(['serverid' => $serverid]);
    } else {
        return view('error.404');
    }
});


Route::get('/accueil', function () {
    return view('dashboard.Accueil.index');

});






Route::get('/view', [ModuleAccueilController::class, 'index']);



Route::get('/guilds/{guildId}/channels', [Discords::class, 'getDiscordChannels']);
Route::get('/guilds/{guildId}/roles', [Discords::class, 'getDiscordRoles']);




// Route::post('/dashboard/{serverid}/accueil/save', function ($serverid, Illuminate\Http\Request $request) {
//     // Récupérer les données pour le module 'Bvn' et l'ID de serveur spécifié
//     $accueilData = \App\Models\ModuleAccueil::where([
//         ['module', '=', 'Bvn'],
//         ['id', '=', $serverid]
//     ])->first();

//     // Si aucune donnée n'est trouvée pour le module 'Bvn' et l'ID de serveur spécifié, retourner une erreur
//     if (!$accueilData) {
//         return response()->json(['error' => 'Aucune donnée trouvée pour l\'ID de serveur et le module donnés'], 404);
//     }

//     // Valider le champ de message
//     $data = $request->except('_token');
//     if (empty($data['message'])) {
//         return response()->json(['error' => 'Le champ message ne peut pas être vide'], 400);
//     }

//     // Mettre à jour les données uniquement si le module est 'Bvn'
//     $accueilData->toggle = !empty($data['message']);
//     $accueilData->type = "Message";
//     $accueilData->message = $data['message'];
//     $accueilData->channel = $data['channel1'];
//     $accueilData->role = $data['role'];
//     $accueilData->log = $data['channel3'];

//     $accueilData->save();

//     return response()->json([
//         'updatedData' => $accueilData
//     ]);
// });



Route::post('/dashboard/{serverid}/accueil/Bvn/save', function ($serverid, Illuminate\Http\Request $request) { 
    $data = \App\Models\ModuleAccueil::where('module', 'Bvn')->where('id', $serverid)->first();
    $aurData = \App\Models\ModuleAccueil::where('module', 'Aur')->where('id', $serverid)->get();
    $bmpData = \App\Models\ModuleAccueil::where('module', 'BMP')->where('id', $serverid)->get();

    if ($data) {
        $data->delete();
    }



    // Recrée les données pour les modules Aur et BMP avec les données sauvegardées
    foreach ($aurData as $data) {
        $aurModule = new \App\Models\ModuleAccueil();
        $aurModule->module = 'Aur';
        $aurModule->id = $data->id;
        $aurModule->toggle = $data->toggle;
        $aurModule->type = $data->type;
        $aurModule->message = $data->message;
        $aurModule->channel = $data->channel;
        $aurModule->role = $data->role;
        $aurModule->log = $data->log;
        $aurModule->save();
    }

    foreach ($bmpData as $data) {
        $bmpModule = new \App\Models\ModuleAccueil();
        $bmpModule->module = 'BMP';
        $bmpModule->id = $data->id;
        $bmpModule->toggle = $data->toggle;
        $bmpModule->type = $data->type;
        $bmpModule->message = $data->message;
        $bmpModule->channel = $data->channel;
        $bmpModule->role = $data->role;
        $bmpModule->log = $data->log;
        $bmpModule->save();
    }


    $accueilData = new \App\Models\ModuleAccueil();
    $accueilData->module = 'Bvn';
    $accueilData->id = $serverid;
    $accueilData->toggle = !empty($request->input('message'));
    $accueilData->type = "Message";
    $accueilData->message = $request->input('message');
    $accueilData->channel = $request->input('channel1')?? "-";

    $roleName = $request->input('role');
    $roleId = getDiscordRoleId($serverid, $roleName);

    $accueilData->role = $roleId ?? "-";
    $accueilData->log = $request->input('channel3') ?? "-";
    $accueilData->save();
    echo response()->json([
        'updatedData' => $accueilData
    ]);
    return redirect('/dashboard/' . $serverid);
});

Route::post('/dashboard/{serverid}/accueil/Aur/save', function ($serverid, Illuminate\Http\Request $request) { 
    $data = \App\Models\ModuleAccueil::where('module', 'Aur')->where('id', $serverid)->first();
    $aurData = \App\Models\ModuleAccueil::where('module', 'Bvn')->where('id', $serverid)->get();
    $bmpData = \App\Models\ModuleAccueil::where('module', 'BMP')->where('id', $serverid)->get();

    if ($data) {
        $data->delete();
    }

    // Recrée les données pour les modules Aur et BMP avec les données sauvegardées
    foreach ($aurData as $data) {
        $aurModule = new \App\Models\ModuleAccueil();
        $aurModule->module = 'Bvn';
        $aurModule->id = $data->id;
        $aurModule->toggle = $data->toggle;
        $aurModule->type = $data->type;
        $aurModule->message = $data->message;
        $aurModule->channel = $data->channel;
        $aurModule->role = $data->role;
        $aurModule->log = $data->log;
        $aurModule->save();
    }

    foreach ($bmpData as $data) {
        $bmpModule = new \App\Models\ModuleAccueil();
        $bmpModule->module = 'BMP';
        $bmpModule->id = $data->id;
        $bmpModule->toggle = $data->toggle;
        $bmpModule->type = $data->type;
        $bmpModule->message = $data->message;
        $bmpModule->channel = $data->channel;
        $bmpModule->role = $data->role;
        $bmpModule->log = $data->log;
        $bmpModule->save();
    }


    $accueilData = new \App\Models\ModuleAccueil();
    $accueilData->module = 'Aur';
    $accueilData->id = $serverid;
    $accueilData->toggle = !empty($request->input('message'));
    $accueilData->type = "Message";
    $accueilData->message = $request->input('message');
    $accueilData->channel = $request->input('channel1')?? "-";
    $roleName = $request->input('role');
    $roleId = getDiscordRoleId($serverid, $roleName);

    $accueilData->role = $roleId ?? "-";
    $accueilData->log = $request->input('channel3') ?? "-";
    $accueilData->save();
    echo response()->json([
        'updatedData' => $accueilData
    ]);
    return redirect('/dashboard/' . $serverid);
});
Route::post('/dashboard/{serverid}/accueil/BMP/save', function ($serverid, Illuminate\Http\Request $request) { 
    $data = \App\Models\ModuleAccueil::where('module', 'BMP')->where('id', $serverid)->first();
    $aurData = \App\Models\ModuleAccueil::where('module', 'Bvn')->where('id', $serverid)->get();
    $bmpData = \App\Models\ModuleAccueil::where('module', 'Aur')->where('id', $serverid)->get();

    if ($data) {
        $data->delete();
    }

    // Recrée les données pour les modules Aur et BMP avec les données sauvegardées
    foreach ($aurData as $data) {
        $aurModule = new \App\Models\ModuleAccueil();
        $aurModule->module = 'Aur';
        $aurModule->id = $data->id;
        $aurModule->toggle = $data->toggle;
        $aurModule->type = $data->type;
        $aurModule->message = $data->message;
        $aurModule->channel = $data->channel;
        $aurModule->role = $data->role;
        $aurModule->log = $data->log;
        $aurModule->save();
    }

    foreach ($bmpData as $data) {
        $bmpModule = new \App\Models\ModuleAccueil();
        $bmpModule->module = 'Bvn';
        $bmpModule->id = $data->id;
        $bmpModule->toggle = $data->toggle;
        $bmpModule->type = $data->type;
        $bmpModule->message = $data->message;
        $bmpModule->channel = $data->channel;
        $bmpModule->role = $data->role;
        $bmpModule->log = $data->log;
        $bmpModule->save();
    }
    $accueilData = new \App\Models\ModuleAccueil();


    $accueilData->module = 'BMP';
    $accueilData->id = $serverid;
    $accueilData->toggle = !empty($request->input('message'));
    $accueilData->type = "Message";
    $accueilData->message = $request->input('message');
    $accueilData->channel = $request->input('channel1')?? "-";
    $roleName = $request->input('role');
    $roleId = getDiscordRoleId($serverid, $roleName);

    $accueilData->role = $roleId ?? "-";
    $accueilData->log = $request->input('channel3') ?? "-";
    $accueilData->save();
    echo response()->json([
        'updatedData' => $accueilData
    ]);
    return redirect('/dashboard/' . $serverid);
});



// Route::post('/dashboard/{serverid}/accueil/save', function ($serverid, Illuminate\Http\Request $request) {
//     $data2 = $request->except('_token');
//     $accueilData = \App\Models\ModuleAccueil::where('module', 'Bvn')->where('id', $serverid)->first();
//     if ($accueilData) {
//         $accueilData->toggle = !empty($data2['message']);
//         $accueilData->type = "Message";
//         $accueilData->message = $data2['message'];
//         $accueilData->channel = $data2['channel1'];
//         $accueilData->role = $data2['role'];
//         $accueilData->log = $data2['channel3'];
//         $accueilData->save();
//     }
// });



Route::get('/dashboard/{serverid}/accueil/data', function ($serverid) {
    $moduleAccueil = \App\Models\ModuleAccueil::all();
    $data = \App\Models\ModuleAccueil::where('id', $serverid)->where('module', 'Bvn')->get();
    if ($data->isNotEmpty()) {
        return response()->json(["allData" => $moduleAccueil->where('id', $serverid), "filteredData" => $data]);
    } else {
        return response()->json(['message' => 'No data found for the given server ID and module']);
    }
});

use App\Models\BotDashboard;
Route::get('/create-table', function () {


    $moduleAccueil = new BotDashboard();
    $moduleAccueil->tag = 'Accueil';
    $moduleAccueil->premium = false;
    $moduleAccueil->title = 'Module Accueil';
    $moduleAccueil->description = 'Bienvenue sur notre site !';
    $moduleAccueil->afficher = true;
    $moduleAccueil->save();
    
});