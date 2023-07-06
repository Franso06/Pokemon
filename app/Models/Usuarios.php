<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table= 'usuarios';

    protected $fillable=[
        'id','nombre','correo','contrasena','created_at','updated_at','saldo'
    ];
    
    public function userItemsPokemons()
    {
    return $this->hasMany(UserItemsPokemon::class, 'user_id');
    }

    protected static function boot()
{
    parent::boot();

    static::created(function ($usuario) {
        $ultimoUsuario = self::latest()->first();

        $usuario->userItemsPokemons()->create([
            'user_id' => $ultimoUsuario->id,
            'item_id' => $itemId, // ID del item deseado
            'pokemon_id' => $pokemonId, // ID del pokemon deseado
        ]);
    });
}
}
