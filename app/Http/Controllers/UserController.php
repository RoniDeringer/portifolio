<?php

namespace App\Http\Controllers;

use App\Mail\EmailAPIOff;
use App\Mail\EmailExclusao;
use App\Models\ExclusaoSolicitacao;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Retorna a view com todos os usuários cadastrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.users.user-management', compact('users'));
    }

    /**
     * Exibe o formulário para criação de um novo usuário.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.user-create');
    }

    /**
     * Armazena um novo usuário no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('user-management')->with(['type' => 'alert-success', 'message' => 'Usuário criado com sucesso!']);
    }

    /**
     * Exibe os detalhes de um usuário específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Exibe o formulário para edição de um usuário.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.user-edit', compact('user'));
    }

    /**
     * Atualiza um usuário específico no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable',
            'confirm_password' => 'nullable|same:password',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('user-management')->with(['type' => 'alert-success', 'message' => 'Usuário atualizado com sucesso!']);
    }

    /**
     * Exclui um usuário específico do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user-management')->with(['type' => 'alert-success', 'message' => 'Usuário excluído com sucesso!']);
    }

    public function app_reset(Request $request)
    {
        $request->validate([
            'password' => 'required|numeric|digits:4',
            'confirm_password' => 'required|numeric|digits:4|same:password',
        ]);

        try {
            $url = env('API_baseUrl').'reset_password/' . $request->cpf . '/' . $request->token;

            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($url, [
                'token' => $request->token,
                'cpf' => $request->cpf,
                'password' => $request->password,
                'confirm_password' => $request->confirm_password
            ]);

            if($response->successful()){
                return redirect()->back()->with(['type' => 'alert-success', 'message' => 'Senha alterada com sucesso! Tente logar no aplicativo com sua nova senha.']);
            }else{
                $data = [
                    'nome' => 'TI Rede Russi',
                    'codigo' => $response->status(),
                    'mensagem' => 'Indisponível',
                    'cpf' => $request->cpf
                ];
                Mail::to('ti@rederussi.com.br')->send(new EmailAPIOff($data));
                return redirect()->back()->with(['type' => 'alert-danger', 'message' => 'Ocorreu um erro, certifique-se que o link de recuperação de senha é válido;']);
            }
        } catch (Exception $ex) {
            $data = [
                'nome' => 'TI Rede Russi',
                'codigo' => $ex->getCode(),
                'mensagem' => $ex->getMessage(),
                'cpf' => $request->cpf
            ];
            Mail::to('ti@rederussi.com.br')->send(new EmailAPIOff($data));
            Log::error('Erro de reset: '.$ex->getMessage());
            return redirect()->back()->with(['type' => 'alert-danger', 'message' => 'Ocorreu um erro, certifique-se que o link de recuperação de senha é válido;']);
        }
    }

    public function app_delete(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cpf_cnpj' => 'required|string|min:14|max:18',
        ]);

        // Armazena a solicitação no banco de dados
        $solicitacao = new ExclusaoSolicitacao();
        $solicitacao->nome = $request->nome;
        $solicitacao->email = $request->email;
        $solicitacao->cpf_cnpj = $request->cpf_cnpj;
        $solicitacao->save();

        // Enviar email solicitando exclusão
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'cpf_cnpj' => $request->cpf_cnpj,
        ];
        Mail::to('ti@rederussi.com.br')->send(new EmailExclusao($data));
        // Mail::to('matheus.reif@arealocal.com.br')->send(new EmailExclusao($data));
        return redirect()->back()->with(['type' => 'alert-success', 'message' => 'Sua solicitação de exclusão foi enviada! Pode demorar até 15 dias até a exclusão dos seus dados;']);
    }
}
