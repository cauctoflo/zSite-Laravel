<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleAccueil extends Model
{
    use HasFactory;

    protected $table = 'module_accueil'; // Replace 'your_table_name' with the actual table name

    protected $fillable = [
        'module',
        'toggle',
        'type',
        'message',
        'channel',
        'role',
        'log',
    ];

    // Your additional model code goes here

}
