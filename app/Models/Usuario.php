<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuarios';

    protected $fillable=[
        'id','nombre','correo','contrasena','created_at','updated_at','saldo'
    ];

    public function userItemsPokemons()
    {
    return $this->hasMany(UserItemsPokemon::class, 'user_id');
    }
}
