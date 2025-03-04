<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AB\Cliente;
use Illuminate\Http\Request;
use App\Models\Avaliacao;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $clientes = Cliente::join('site', 'site.id', '=', 'cliente.fk_site')
        ->select('cliente.*', 'site.status', 'site.data_center')
        ->orderBy('nome', 'asc')
        ->get();

       return view('pages.clientes.clientes', ['clientes' => $clientes]);
    }


    public function generateMultiTenacyByCliente($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['error' => 'Cliente não encontrado'], 404);
        }

        try {
            DB::statement("CREATE DATABASE $cliente->codigo");

            $cliente->update(['status' => 'ativo']);
            $cliente->save();

            return redirect()->route('clientes.index')->with(['type' => 'alert-success', 'message' => 'Tenant gerado com sucesso para o cliente ' . $cliente->nome]);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao gerar Tenant: ' . $e->getMessage());
        }
    }

}
