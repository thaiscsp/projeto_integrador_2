<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Promocional;
use App\Models\Cliente;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Hash;
use DB, Session;

class AdminController extends Controller
{
    // teste - ok
    function enviar_emails(Request $request) {
        $clientes = Cliente::all();
        foreach ($clientes as $cliente) {
            Mail::to($cliente->email)->send(new Promocional($cliente->email));
        }
        $request->session()->flash('mensagem', '<br>E-mails enviados com sucesso.<br>');
        return redirect('/enviar');
    }

    function gerenciar_admins(Request $request) {
        // teste - ok
        if ($request->input('gerenciar-admins') == 'cadastrar-admin') {
            $admin = new Admin();
            $admin->email = $request->input('email-cadastro');
            $admin->senha = md5($request->input('senha-cadastro'));
            $admin->save();

            Session::flash('mensagem', 'Admin cadastrado com sucesso.');
        }
        // teste - ok
        elseif ($request->input('gerenciar-admins') == 'remover-admin') {
            $email_input = $request->input('email-remocao');
            $usuario = Session::get('usuario');

            if ($email_input == $usuario) {
                Session::flash('mensagem', 'Você não pode remover o admin que está usando no momento.');
                return redirect('/gerenciar-admins');    
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
        }
        return redirect('/gerenciar-admins');
    }
    
    // teste - ok
    function logout(Request $request) {
        Session::forget('usuario');

        Session::flash('mensagem', '<br>Você saiu da sua conta.');

        return redirect('/');
    }
    
    function admin_teste() {
        $admin_teste = new Admin();
        $admin_teste->email = 'adminteste@mail.com';
        $admin_teste->senha = md5('adminteste');
        $admin_teste->save();
        return redirect('/#');
    }
}
