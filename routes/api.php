<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List artigos
Route::get('contatos', [ContatoController::class, 'index']);

// List single artigo
Route::get('contato/{id}', [ContatoController::class, 'show']);

// Create new artigo
Route::post('contato', [ContatoController::class, 'store']);

// Update artigo
Route::put('contato/{id}', [ContatoController::class, 'update']);

// Delete artigo
Route::delete('contato/{id}', [ContatoController::class,'destroy']);
