<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Cliente;
use App\Mail\Mensagem;
use Session, Mail;

class HomeController extends Controller
{
    function home(Request $request) {
        // Login
        if ($request->input('home') == 'acessar-painel-administrativo') {
                $email_input = $request->input('email-login');
                $senha_input = $request->input('senha-login');

                $admins = Admin::all();

                foreach ($admins as $admin) {
                    if (($admin->email==$email_input) and (md5($senha_input) == $admin->senha)) {
                            Session::put('usuario', $email_input);
                            Session::flash('mensagem', 'Admin logado com sucesso.');
                    }
                }
        }
        // teste - ok
        elseif ($request->input('home') == 'cadastrar-cliente') {
            $cliente = new Cliente();
            $cliente->email = $request->input('email-cadastro');
            $cliente->save();
            $request->session()->flash('mensagem', '<br>Usuário cadastrado com sucesso!');
        }
        elseif ($request->input('home') == 'enviar-mensagem') {
            $email = $request->input('email-mensagem');
            $nome = $request->input('nome-mensagem');
            $mensagem = $request->input('mensagem');
            Mail::to('projetolaravel@outlook.com')->send(new Mensagem($email, $nome, $mensagem));
            $request->session()->flash('mensagem', '<br>Mensagem enviada com sucesso!');
        }
        return redirect('/#');
    }
}
