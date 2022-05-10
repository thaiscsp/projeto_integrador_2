<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    function store() {
        $cliente = new Cliente();
        $cliente->nome = Request::input('nome');
        $cliente->email = Request::input('email');
        $cliente->save();

        return redirect('/');
    }
}
