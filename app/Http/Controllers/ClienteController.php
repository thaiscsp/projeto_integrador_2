<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Session;

class ClienteController extends Controller
{
    // teste - ok
    function cadastrar_cliente(Request $request) {
        try {
            $cliente = new Cliente();
            $cliente->nome = $request->input('nome');
            $cliente->email = $request->input('email');
            $cliente->save();

            $request->session()->flash('mensagem', 'Usuário cadastrado com sucesso!');

            return redirect('/');
        } catch (Exception $erro) {
            report($erro);
            $request->session()->flash('mensagem', 'Erro ao cadastrar usuário: ' . $erro->getMessage());
            return redirect('/');
        }
    }

    // teste - ok
    function descadastrar_cliente($email) {
        if(Cliente::select('nome', 'email')->where('email', $email)->first()) {
            $clientes = Cliente::all();

            foreach($clientes as $cliente) {
                if($cliente->email == $email) {
                    $cliente->delete();
                }
            }

            Session::flash('mensagem', 'Usuário descadastrado com sucesso.');
            return redirect('/');
        } else {
            Session::flash('mensagem', 'Não existe cadastro para esse usuário.');
            return redirect('/');
        }
        
    }
}
