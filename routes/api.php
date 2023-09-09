<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//cliente
use App\Http\Controllers\ClientsController;
//servicios
use App\Http\Controllers\ServicesController;
//MUSICAS
use App\Http\Controllers\MusicController;
//sucursales
use App\Http\Controllers\BranchesController;
//estilista
use App\Http\Controllers\StylistsController;
//bebidas
use App\Http\Controllers\DrinksController;
//horarios
use App\Http\Controllers\ShedulesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//CLIENTES
Route::get('/clients',[ClientsController::class,'index']);
Route::post('/clients',[ClientsController::class,'store']);
Route::put('/clients/{id}',[ClientsController::class,'update']);

//servicios
Route::get('/servicios',[ServicesController::class,'index']);
Route::post('/servicios',[ServicesController::class,'store']);
Route::put('/servicios/{id}',[ServicesController::class,'update']);

//musicas MusicController
Route::get('/musics',[MusicController::class,'index']);
Route::post('/musics',[MusicController::class,'store']);
Route::put('/musics/{id}',[MusicController::class,'update']);

//sucursales
Route::get('/sucursale',[BranchesController::class,'index']);
Route::post('/sucursale',[BranchesController::class,'store']);
Route::put('/sucursale/{id}',[BranchesController::class,'update']);


//estilista
Route::get('/style',[StylistsController::class,'index']);
Route::post('/style',[StylistsController::class,'store']);
Route::put('/style/{id}',[StylistsController::class,'update']);


//bebidas
Route::get('/drinks',[DrinksController::class,'index']);
Route::post('/drinks',[DrinksController::class,'store']);
Route::put('/drinks/{id}',[DrinksController::class,'update']);


//horarios

Route::get('/she',[ShedulesController::class,'index']);
Route::post('/she',[ShedulesController::class,'store']);
Route::put('/she/{id}',[ShedulesController::class,'update']);
