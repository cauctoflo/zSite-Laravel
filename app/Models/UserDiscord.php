<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDiscord extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'id', 
        'username', 
        'discord_id', 
        'email', 
        'verified', 
        'avatar', 
        'language', 
        'created_at', 
        'updated_at'
    ];
}
