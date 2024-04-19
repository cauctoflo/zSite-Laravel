<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateModels extends Command
{
    protected $signature = 'generate:models';

    protected $description = 'Generate models for all tables in the database';

    public function handle()
    {
        // Récupérer les noms de toutes les tables
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        // Générer les modèles pour chaque table
        foreach ($tables as $table) {
            // Générer le nom du modèle en supprimant les éventuels préfixes de table
            $modelName = str_replace('_', '', ucwords($table, '_'));

            // Vérifier si le modèle existe déjà
            if (!class_exists("App\\Models\\$modelName")) {
                // Générer le modèle
                $this->call('make:model', ['name' => "Models\\$modelName"]);
            }
        }

        $this->info('All models have been generated successfully.');
    }
}
