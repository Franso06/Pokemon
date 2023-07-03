<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemons;

class PokemonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pokemons::orderBy('created_at', 'asc')->get();  //returns values in ascending order

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return Pokemons::findorFail($id); //searches for the object in the database using its id and returns it.

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $this->validate($request, [ //inputs are not empty or null
            'nombre' => 'required',
            'efecto' => 'required',
        ]);
  
        $Pokemons = new Pokemons;
        $Pokemons->nombre = $request->input('nombre'); //retrieving user inputs
        $Pokemons->efecto = $request->input('efecto');  //retrieving user inputs
        $Pokemons->save(); //storing values as an object
        return $Pokemons; //returns the stored value if the operation was successful.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Pokemons::findorFail($id); //searches for the object in the database using its id and returns it.

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [ // the new values should not be null
            'nombre' => 'required',
            'efecto' => 'required',
        ]);
  
        $Pokemons = Pokemons::findorFail($id); // uses the id to search values that need to be updated.
        $Pokemons->nombre = $request->input('nombre'); //retrieves user input
        $Pokemons->efecto = $request->input('efecto');////retrieves user input
        $Pokemons->save();//saves the values in the database. The existing data is overwritten.
        return $Pokemons;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){ //receives an object's id
        $Pokemons = Pokemons::findorFail($id); //searching for object in database using ID
        if($Pokemons->delete()){ //deletes the object
            return 'deleted successfully'; //shows a message when the delete operation was successful.
        }
    }
}