<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class UsuarioItemsPokemon extends Model
{
    protected $table= 'user_items_pokemons';

    protected $fillable=[
        'user_id'
    ];
    
}
