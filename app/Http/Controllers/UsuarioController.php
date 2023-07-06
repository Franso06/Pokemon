<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\UsuarioItemsPokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::orderBy('created_at', 'asc')->get();  //returns values in ascending order
        //  return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return Usuario::findorFail();
        return view('login.registrarse');
    }

    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($usuario) {
            UsuarioItemsPokemon::create([
                'user_id' => $usuario->id,
                // Otros valores que desees asignar en la tabla
            ]);
        });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|unique:usuarios',
            'correo'=>'required|unique:usuarios',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        return redirect()->route('login.index');

    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
