<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contato extends JsonResource
{
        public function toArray($request)
        {

                return [
                        'id' => $this->id,
                        'descricao' => $this->descricao,
                        'tipo' => $this->tipo,
                        'pessoa_id' => $this->pessoa_id
                ];
        }
}