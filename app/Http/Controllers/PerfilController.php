<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function show($id)
    {
        $usuario = Usuario::select('nombre', 'correo', 'contraseña')->find($id);

        if (!$usuario) {
            abort(404); // Si el usuario no existe, muestra una página 404
        }

        return view('perfil', ['usuario' => $usuario]);
    }
}
