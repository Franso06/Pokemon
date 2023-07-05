<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table= 'Items';

    protected $fillable=[
        'id','Nombre','Efecto'
    ];

    public function userItemsPokemons()
    {
    return $this->hasMany(UserItemsPokemon::class, 'item_id');
    }
}
