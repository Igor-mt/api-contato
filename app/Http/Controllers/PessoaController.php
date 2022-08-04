<?php

namespace App\Http\Controllers;

use App\Models\Pessoa as Pessoa;
use App\Http\Resources\Pessoa as PessoaResource;
use Illuminate\Http\Request;

class PessoaController extends Controller {

    public function index()
    {
    $pessoas = Pessoa::all();
        return PessoaResource::collection($pessoas);
    }

    public function store(Request $request){
    $pessoa = new Pessoa;
    $pessoa->nome = $request->input('nome');

    if( $pessoa->save() ){
      return new PessoaResource( $pessoa );
    }
    
}
    public function show($id)
    {
    $pessoa = Pessoa::findOrFail( $id );
    return new PessoaResource( $pessoa );
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail( $request->id );
        $pessoa->nome = $request->input('nome');
    
        if( $pessoa->save() ){
          return new PessoaResource( $pessoa );
        }
    }

    public function destroy($id)
    {
    $pessoa = Pessoa::findOrFail( $id );
    if( $pessoa->delete() ){
      return new PessoaResource( $pessoa );
    }
    }
}