<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Promocional;
use App\Models\Cliente;
use App\Http\Controllers\AdminController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

class AdminController extends Controller
{

    function enviar_emails(Request $request) {
        $clientes = Cliente::all();

        foreach ($clientes as $cliente) {
            $nome = $cliente->nome;
            Mail::to($cliente->email)->send(new Promocional());
        }

        $request->session()->flash('mensagem', 'E-mails enviados com sucesso.<br>');
        return redirect('/enviar');
    }

    function cadastrar_admin(Request $request) {
        $admin = new Admin();
        $admin->email = $request->input('email');
        $admin->senha = Hash::make($request->input('senha'));
        $admin->save();

        Session::flash('mensagem', 'Admin cadastrado com sucesso.');

        return redirect('/admin/cadastro');
    }

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

    function login(Request $request) {
        $email_input = $request->input('email');
        $senha_input = $request->input('senha');

        $admins = Admin::all();

        foreach ($admins as $admin) {
            if (($admin->email==$email_input) and (Hash::check($senha_input, $admin->senha))) {
                Session::put('usuario', $email_input);
            }
        }

        return redirect('/');
    }

    function logout(Request $request) {
        Session::forget('usuario');

        Session::flash('mensagem', 'Você saiu da sua conta.');

        return redirect('/login');
    }
}
