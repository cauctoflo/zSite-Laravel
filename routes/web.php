<?php

use Illuminate\Support\Facades\Route;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

use App\Http\Controllers\AlertsController;

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



Route::post('/maintenance/endpoint', function (Illuminate\Http\Request $request) {
    $email = $request->input('email'); // Récupérer la valeur de l'e-mail à partir de la requête
    $users = new \App\Models\notif_user();
    $users->email=$email;
    $users->save();    

    return view('maintenance');
});



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

Route::get('/discord', function (Illuminate\Http\Request $request) {
    return view('home')->with('request', $request);
});
// Route::get('/dashboard/{server.id}/', function (Illuminate\Http\Request $request) {
//     return view('dashboard.index')->with('request', $request);
// });

Route::get('/dashboard/{serverid}', function ($serverid) {
    return view('dashboard.index')->with('request', $serverid);
});

use App\Http\Controllers\Discords;



Route::get('/tests', [Discords::class, 'Index']);



Route::get('/user', function (Illuminate\Http\Request $request) {
    $userGuilds = $request->session()->get('userGuilds');
    
    $userInfo = json_decode($userGuilds, true);
    $names = array_column($userInfo, 'name');
    
    echo $request->session()->put('userInfo', $names);
    return response()->json(['userInfo' => $request->session()->get('userInfo')]);
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