<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransacaoStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Defina como true para permitir que todos os usuários façam a requisição.
    }

    public function rules()
    {
        return [
            'tipo'              => 'required|string',
            'valor'             => 'required|numeric',
            'data'              => 'required|date',
            'descricao'         => 'nullable|string|max:500',
            'fk_funcionario'    => 'nullable|exists:funcionario,id',
        ];
    }
}
