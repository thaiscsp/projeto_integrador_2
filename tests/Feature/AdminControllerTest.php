<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use Session;
use DB;

class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_enviar_emails() {
        // cria e loga com admin teste
        $admin_teste = new Admin();
        $admin_teste->email = 'adminteste@mail.com';
        $admin_teste->senha = md5('adminteste');
        $admin_teste->save();
        $this->post('/login', ['email'=>$admin_teste->email, 'senha'=>'adminteste']);

        // se logado...
        if (Session::get('usuario')) {
            // enviar e-mails
            $this->post('/enviar');
            $this->assertStringContainsString('E-mails enviados com sucesso.', Session::get('mensagem'));
        }
    }

    public function test_cadastrar_e_remover_admin() {
        // loga com admin teste
        $admin_teste = new Admin();
        $admin_teste->email = 'adminteste@mail.com';
        $admin_teste->senha = md5('adminteste');
        $admin_teste->save();
        $this->post('/login', ['email'=>$admin_teste->email, 'senha'=>'adminteste']);

        // se logado...
        if (Session::get('usuario')) {
            // cadastrar novo admin
            $this->post('/admin/cadastro', ['email'=>'adminnovo@mail.com', 'senha'=>'adminnovo']);

            // verifica se novo admin está no banco de dados
            $admins = Admin::all();
            foreach($admins as $admin) {
                if($admin->email == 'adminnovo@mail.com') {
                    $this->assertSame('adminnovo@mail.com', $admin->email);
                    $this->assertSame(md5('adminnovo'), $admin->senha);
                    $this->assertSame('Admin cadastrado com sucesso.', Session::get('mensagem'));
                }
            }

            // tenta remover admin logado
            $this->post('/admin/remocao', ['email'=>$admin_teste->email]);
            $this->assertSame('Você não pode remover o admin que está usando no momento.', Session::get('mensagem'));

            // verifica se admin logado permanece no banco
            foreach($admins as $admin) {
                if ($admin_teste->email == $admin->email) {
                    $this->assertSame($admin_teste->email, $admin->email);
                    $this->assertSame($admin_teste->senha, $admin->senha);
                }
            }

            // remove admin cadastrado
            $this->post('/admin/remocao', ['email'=>'adminnovo@mail.com']);
            $this->assertSame('Admin removido com sucesso.', Session::get('mensagem'));

            // verifica se admin foi removido de fato
            $this->assertNull(
                    Admin::select('email', 'senha')
                    ->where('email', '=', 'adminnovo@mail.com')
                    ->first()
            );
        }
    }

    public function test_login_e_logout() {
        // cria e loga com admin teste
        $admin_teste = new Admin();
        $admin_teste->email = 'adminteste@mail.com';
        $admin_teste->senha = md5('adminteste');
        $admin_teste->save();
        $this->post('/login', ['email'=>$admin_teste->email, 'senha'=>'adminteste']);

        // certifica que 'adminteste@mail.com' está logado
        $this->assertSame($admin_teste->email, Session::get('usuario'));
        $this->assertSame('Admin logado com sucesso.', Session::get('mensagem'));

        // se logado...
        if (Session::get('usuario')) {
            //deslogar
            $this->post('/logout');
            $this->assertSame('Você saiu da sua conta.', Session::get('mensagem'));
            $this->assertSame(null, Session::get('usuario'));
        }
    }
}
