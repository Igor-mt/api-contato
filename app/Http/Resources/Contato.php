<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
    
class Contato extends JsonResource {
public function toArray($request){

        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco
        ];
}
}

