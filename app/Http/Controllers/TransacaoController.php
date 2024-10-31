<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransacaoStoreRequest;
use App\Http\Resources\TransacaoResource;
use App\Models\Transacao;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{
    public function index()
    {
        $transacoes = Transacao::all();
        return TransacaoResource::collection($transacoes);
    }

    public function create()
    {
        $funcionarios = Funcionario::all();
        return view('transacoes.create', compact('funcionarios'));
    }

    public function store(TransacaoStoreRequest $request)
    {
        Transacao::create($request->validated());

        return redirect()->route('transacoes.index')->with('success', 'Transação criada com sucesso!');
    }

    public function show(Transacao $transacao)
    {
        return view('transacoes.show', compact('transacao'));
    }

    public function edit(Transacao $transacao)
    {
        $funcionarios = Funcionario::all();
        return view('transacoes.edit', compact('transacao', 'funcionarios'));
    }

    public function update(Request $request, Transacao $transacao)
    {
        $request->validate([
            'tipo' => 'required|string',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'descricao' => 'nullable|string|max:500',
            'fk_funcionario' => 'nullable|exists:funcionario,id',
        ]);

        $transacao->update($request->all());

        return redirect()->route('transacoes.index')->with('success', 'Transação atualizada com sucesso!');
    }

    public function destroy(Transacao $transacao)
    {
        $transacao->delete();
        return redirect()->route('transacoes.index')->with('success', 'Transação excluída com sucesso!');
    }
}
