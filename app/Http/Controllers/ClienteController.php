<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Admin;
use Session;

class ClienteController extends Controller
{
    // teste - ok
    function descadastrar_cliente($email) {
        if(Cliente::select('email')->where('email', $email)->first()) {
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
