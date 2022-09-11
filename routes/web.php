<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersConcursoController;
use App\Http\Controllers\DepartamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UsersConcursoController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registroParticipantes', [UsersConcursoController::class, 'store']);
Route::put('/darGanador', [UsersConcursoController::class, 'update']);
Route::get('/Ciudades/{id}',[DepartamentoController::class, 'getCiudades']);

Auth::routes();

