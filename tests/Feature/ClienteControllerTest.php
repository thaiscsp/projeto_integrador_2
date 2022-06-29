<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;
use Session, Str;

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
        $email = Str::random(10) . '@' . Str::random(6) . '.' . Str::random(3);

        // cadastra cliente teste
        $this->post('/', ['email-cadastro'=>$email]);

        // verifica que cliente teste está no banco de dados
        $clientes = Cliente::all();
        foreach($clientes as $cliente) {
            if($this->assertSame($email, $cliente->email)) {
                $this->assertSame('Usuário cadastrado com sucesso!', Session::get('mensagem'));
            }
        }

        // descadastra cliente teste
        $this->post('/descadastrar/' . $email);

        // verifica que cliente teste foi removido do banco
        $this->assertNull(
                    Cliente::select('email')
                    ->where('email', '=', $email)
                    ->first()
            );

        // tenta descadastrar cliente inexistente
        $email_inexistente = Str::random(10) . '@' . Str::random(6) . '.' . Str::random(3);
        $this->post('/descadastrar/' . $email_inexistente);
        $this->assertSame('Não existe cadastro para esse usuário.', Session::get('mensagem'));
    }
}
