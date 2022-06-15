<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Admin;
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

    function retornar_clientes($usuario, $nome='') {
        header("Content-type: application/json");
        if ((Admin::where('email', $id)->first()) and ($nome != '')) {
            $clientes = Cliente::all();
            foreach ($clientes as $cliente) {
                if ($cliente->nome == $nome) {
                    $dados_cliente = new stdClass();
                    $dados_cliente->nome = $cliente->nome;
                    $dados_cliente->email = $cliente->email;
                    $dados_cliente = json_encode($objCliente);
                    echo $dados_cliente;
                }
            }
        } elseif ((Admin::where('email', $id)->first()) and ($nome == '')) {
            $clientes = Cliente::all();
            $mensagem = '{"clientes": [';
            foreach ($clientes as $cliente) {
                $dados_cliente = new stdClass();
                $dados_cliente->nome = $cliente->nome;
                $dados_cliente->email = $cliente->email;
                $dados_cliente = json_decode(json_encode($objCliente));
                $mensagem = $mensagem . $dados_cliente . ', ';
            }
            $mensagem = rtrim($mensagem, ', ');
            $mensagem = $mensagem . ']}';
            echo json_encode($mensagem);
        } else {
            return '{"mensagem": "Acesso negado."}';
        }
    }
}
