<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table= 'Items';

    protected $fillable=[
        'id','Nombre','Efecto'
    ];
}
