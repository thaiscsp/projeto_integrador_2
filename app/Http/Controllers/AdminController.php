<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Promocional;
use App\Models\Cliente;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

class AdminController extends Controller
{
    // teste - ok
    function enviar_emails(Request $request) {
        $clientes = Cliente::all();

        foreach ($clientes as $cliente) {
            Mail::to($cliente->email)->send(new Promocional($cliente->nome, $cliente->email));
        }

        $request->session()->flash('mensagem', '<br>E-mails enviados com sucesso.<br>');
        return redirect('/enviar');
    }

    // teste - ok
    function cadastrar_admin(Request $request) {
        $admin = new Admin();
        $admin->email = $request->input('email');
        $admin->senha = md5($request->input('senha'));
        $admin->save();

        Session::flash('mensagem', 'Admin cadastrado com sucesso.');

        return redirect('/admin/cadastro');
    }

    // teste - ok
    function remover_admin(Request $request) {
        $email_input = $request->input('email');
        $usuario = Session::get('usuario');

        if ($email_input == $usuario) {
            Session::flash('mensagem', 'Você não pode remover o admin que está usando no momento.');
            return redirect('/admin/remocao');    
        } else {
            $admins = Admin::all();
            foreach ($admins as $admin) {
                if (($admin->email==$email_input)) {
                    $admin_old = Admin::find($admin->id);
                    $admin_old->delete();
                    Session::flash('mensagem', 'Admin removido com sucesso.');
                
                }
            } 
        }
        return redirect('/admin/remocao');
    }

    // teste - ok
    function login(Request $request) {
        $email_input = $request->input('email');
        $senha_input = $request->input('senha');

        $admins = Admin::all();

        foreach ($admins as $admin) {
            if (($admin->email==$email_input) and (md5($senha_input) == $admin->senha)) {
                Session::put('usuario', $email_input);
                Session::flash('mensagem', 'Admin logado com sucesso.');
            }
        }

        return redirect('/');
    }

    // teste - ok
    function logout(Request $request) {
        Session::forget('usuario');

        Session::flash('mensagem', 'Você saiu da sua conta.');

        return redirect('/login');
    }
}
