<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});


//Route::get('registrarse/create',[UsuarioController::class,'create'])->name('registrarse.create');
//Route::post('registrarse',[UsuarioController::class,'store'])->name('registrarse.store');
//Route::get('login', [UsuarioController::class,'login'])->name('login.index');

Route::get('/login/registrarse', function () {
    return view('login.registrarse');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/inventario', function () {
    return view('inventario.inventario');
});
Route::get('/pantalla_principal', function () {
    return view('pantalla_principal.pantalla_principal');
});
Route::get('/perfil', function () {
    return view('perfil.perfil');
});
Route::get('/pokedex', function () {
    return view('pokedex.pokedex');
});
// Route::get('datos', [ItemsController::class,'index'])->name('datos.index');
// =======
// Route::get('/juego', function () {
//     return view('juego.juego');
// });

