<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleAccueil; // Assurez-vous d'importer le modèle correspondant
use App\Http\Controllers\Controller;

class ModuleAccueilController extends Controller
{
    public function __construct()
    {
        // Lis la table, met chaque colonne dans des variables
        $moduleAccueil = ModuleAccueil::all(); // Récupère toutes les lignes de la table module_accueil
        $module = $moduleAccueil->pluck('module')->toArray(); // Récupère les valeurs de la colonne 'module' et les met dans un tableau
        var_dump($module);
        echo '2';
        }

    private function index(Request $request) {
        // Récupère les données du modèle ModuleAccueil
        $moduleAccueil = ModuleAccueil::all();

        var_dump($moduleAccueil);
    
    }



}