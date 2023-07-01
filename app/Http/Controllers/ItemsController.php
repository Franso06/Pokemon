<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Items;

class ItemsController extends Controller
{
    public function index()
    {
        $items = DB::table('Items')
                    ->select('Items.*')
                    ->get();  
        // dd($items);
        return view('items'->with('Items',$items));
    }
    // public function index()
    // {    
    //     return "hola";
    // }
}
