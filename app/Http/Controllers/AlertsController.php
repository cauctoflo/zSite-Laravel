<?php

// app/Http/Controllers/AlertsController.php



namespace App\Http\Controllers;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

class AlertsController extends Controller
{
    public function index($status, $classe, $route, $type)
    {

    DiscordAlert::message("Nouvelles alertes LARAVEL ! <@&0113001966109462628>", [
        [
            "title" => "🚨 - Alerte MySQL",
            "description" => "Une **violation de sécurité** a été détectée dans le système **zPoq** impliquant une infraction **MySQL**. La requête a été interceptée dès son entrée sur [phpmyadmin](https://localhost/zadmin/phpmyadmin) et a été bloquée. \nPour obtenir plus de détails sur cet incident, veuillez suivre [ce lien](https://cdn.discordapp.com/icons/946378038009020446/bf0e3eccb3a8e4c4efca94c1ccca8a43.webp?size=512).\n",
            "timestamp" => "2024-03-29T07:00:00.000Z",
            "color" => '#A40617',
            "thumbnail" => [
                "url" => "https://cdn.discordapp.com/icons/946378038009020446/bf0e3eccb3a8e4c4efca94c1ccca8a43.webp?size=512"
            ],
                "fields" => [
                        [
                            "name" => "Heures",
                            "value" => "`⌛` 21/03/2024 21h02",
                            "inline" => true
                        ],
                        [
                            "name" => "Type",
                            "value" => "`⛓️` $type\n",
                            "inline" => true
                        ],
                        [
                            "name" => "Status",
                            "value" => "`🔴` $status",
                            "inline" => true
                        ],
                        [
                            "name" => "Classe",
                            "value" => "`⭐` $classe",
                            "inline" => true
                        ],
                        [
                            "name" => "Routes",
                            "value" => "`🔗` [Route]($route)",
                            "inline" => true
                        ],
                        [
                            "name" => "Plus",
                            "value" => "`🔻` [Accéder]($route)",
                            "inline" => true
                        ]
                    ]

                    ]
                ]);

    }
}
