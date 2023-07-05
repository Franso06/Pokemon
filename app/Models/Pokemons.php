<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    protected $table= 'Pokemons';

    protected $fillable=[
        'id','nombre','vida','daño','armadura'
    ];
    public function userItemsPokemons()
    {
    return $this->hasMany(UserItemsPokemon::class, 'pokemon_id');
    }
}
