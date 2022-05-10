<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Promocional;

class AdminController extends Controller
{
    /*
    <?php
                                $conexao = AbreConexao();
                                $sql = "SELECT DISTINCT tipopessoa FROM pessoa ORDER BY tipopessoa;";
                                $resultado = mysqli_query($conexao, $sql);
                                while($retorno = mysqli_fetch_array($resultado)) {
                                    echo("<option value='" . $retorno["tipopessoa"] . "'>" . $retorno["tipopessoa"] . "</option>");
                                }
                            ?>*/

    function send_mail() {
        Mail::to('projetolaravelmail@gmail.com')->send(new Promocional());
        return redirect('/admin');
    }
}
