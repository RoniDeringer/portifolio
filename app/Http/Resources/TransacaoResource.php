<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransacaoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tipo' => $this->tipo,
            'valor' => $this->valor,
            'data' => $this->data,
            'descricao' => strtoupper($this->descricao), // Convertendo a descrição para maiúsculas
            'funcionario' => $this->funcionario ? $this->funcionario->nome : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
