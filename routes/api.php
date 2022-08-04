<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List contatos
Route::get('contato', [ContatoController::class, 'index']);

// List single contato
Route::get('contato/{id}', [ContatoController::class, 'show']);

// Create new contato
Route::post('contato', [ContatoController::class, 'store']);

// Update contato
Route::put('contato/{id}', [ContatoController::class, 'update']);

// Delete contato
Route::delete('contato/{id}', [ContatoController::class,'destroy']);
