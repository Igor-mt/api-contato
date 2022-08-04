<?php

namespace App\Http\Controllers;

use App\Models\Contato as Contato;
use App\Http\Resources\Contato as ContatoResource;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contato = Contato::all();
        return ContatoResource::collection($contato);
    }

    public function store(Request $request)
    {
        $contato = new Contato;
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->endereco = $request->input('endereco');

        if ($contato->save()) {
            return new ContatoResource($contato);
        }
    }

    public function show($id)
    {
        $contato = Contato::findOrFail($id);
        return new ContatoResource($contato);
    }

    public function update(Request $request, $id)
    {
        $contato = Contato::findOrFail($request->id);
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->endereco = $request->input('endereco');

        if ($contato->save()) {
            return new ContatoResource($contato);
        }
    }
    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        if ($contato->delete()) {

            return new ContatoResource($contato);
        }
    }
}
