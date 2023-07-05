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
        Schema::create('user_items_pokemons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('pokemon_id');
            // Agrega otras columnas necesarias
    
            $table->foreign('user_id')->references('id')->on('usuarios');
            $table->foreign('item_id')->references('id')->on('Items');
            $table->foreign('pokemon_id')->references('id')->on('Pokemons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_items_pokemons');
    }
};
