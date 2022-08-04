<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PessoaController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// List contatos
Route::get('contatos', [ContatoController::class, 'index']);

// List single contato
Route::get('contato/{id}', [ContatoController::class, 'show']);

// Create new contato
Route::post('contato', [ContatoController::class, 'store']);

// Update contato
Route::put('contato/{id}', [ContatoController::class, 'update']);

// Delete contato
Route::delete('contato/{id}', [ContatoController::class,'destroy']);


// List Pessoa
Route::get('pessoas', [PessoaController::class, 'index']);

// List single Pessoa
Route::get('pessoa/{id}', [PessoaController::class, 'show']);

// Create new Pessoa
Route::post('pessoa', [PessoaController::class, 'store']);

// Update Pessoa
Route::put('pessoa/{id}', [PessoaController::class, 'update']);

// Delete Pessoa
Route::delete('pessoa/{id}', [PessoaController::class,'destroy']);
