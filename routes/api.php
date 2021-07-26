<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\UtilisateurController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("data",[home::class,'getData']);


// Utilisateur APIs
//All Utilisateur
Route::get("utilisateur",[UtilisateurController::class,'listAllUtilisateur']);

// Specific Utilisateur
Route::get("utilisateur/find",[UtilisateurController::class,'UtilisateurFindBy']);

//Post Utilisateur
Route::post("/utilisateur/add/{id}",[UtilisateurController::class,'create'])->name("create");
