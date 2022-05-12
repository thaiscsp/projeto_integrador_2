<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
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
}
