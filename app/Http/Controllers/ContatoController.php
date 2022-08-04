<?php

namespace App\Http\Controllers;

use App\Models\Contato as Contato;
use App\Http\Resources\Contato as ContatoResource;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return ContatoResource::collection($contatos);
    }

    public function store(Request $request)
    {
        $contato = new Contato;
        $contato->descricao = $request->input('descricao');
        $contato->tipo = $request->input('tipo');
        $contato->pessoa_id = $request->input('pessoa_id');

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
        $contato->descricao = $request->input('descricao');
        $contato->tipo = $request->input('tipo');
        $contato->pessoa_id = $request->input('pessoa_id');

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
