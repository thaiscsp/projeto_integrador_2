<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;
use Session;

class ClienteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_cadastrar_e_descadastrar_cliente() {
        // dados falsos para cliente teste
        $nome = 'nometeste';
        $email = 'nometeste@mail.com';

        // cadastra cliente teste
        $this->post('/', ['nome'=>$nome, 'email'=>$email]);

        // verifica que cliente teste está no banco de dados
        $clientes = Cliente::all();
        foreach($clientes as $cliente) {
            if($this->assertSame($nome, $cliente->nome) and $this->assertSame($email, $cliente->email)) {
                $this->assertSame('Usuário cadastrado com sucesso!', Session::get('mensagem'));
            }
        }

        // descadastra cliente teste
        $this->post('/descadastrar/' . $email);

        // verifica que cliente teste foi removido do banco
        $this->assertNull(
                    Cliente::select('nome', 'email')
                    ->where('email', '=', $email)
                    ->first()
            );

        // tenta descadastrar cliente inexistente
        $this->post('/descadastrar/' . 'teste@mail.com');
        $this->assertSame('Não existe cadastro para esse usuário.', Session::get('mensagem'));
    }
}
