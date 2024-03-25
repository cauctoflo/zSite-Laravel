<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_discords', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('discord_id');
            $table->string('email'); // Add email field
            $table->boolean('verified'); // Add verified field
            $table->string('avatar'); // Add avatar field
            $table->string('language'); // Add language field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_discords');
    }
};
