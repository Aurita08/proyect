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
    return view('welcome');
});


Route::get('/perfil',function (){
    return "hola Elmer";
});

Route::get('/perfil/cambiarperfil/{numCuenta}/{nombre}',function ($numCuenta,$nombre){
    return "cambiar Perfil ".$numCuenta ."  " .$nombre;
});

Route::get('/prueba', function () {
    return view('usuario.crear');
});

Route::get('/usuario/vistacrear', [UsuarioController::class,'index']);