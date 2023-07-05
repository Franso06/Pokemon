<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
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
        return view('login.registrarse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|unique:usuarios',
            'correo'=>'required|unique:usuarios',
            'contraseña'=>'required',
            'min:8',// Mínimo 8 caracteres
            'confirmed',// Debe coincidir con el campo de confirmación de contraseña

            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            // Debe contener al menos una letra minúscula, una letra mayúscula, un número y un carácter especial

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $usuario = new Usuario();

        $usuario->Nombre = $request->nombre;
        $usuario->Correo = $request->correo;
        $usuario->Contraseña = $request->contraseña;

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