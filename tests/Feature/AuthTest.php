<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_pode_se_cadastrar()
    {
        $user = $this->post('/api/register', [
            'name' => 'Werton VGA',
            'email' => 'test@example.com',
            'password' => '123123',
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => '123123',
        ]);

        $response->assertStatus(200);

        $this->assertAuthenticatedAs($user);


        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com'
        ]);

        $response->assertStatus(201);
    }

    // public function test_usuario_nao_consegue_logar()
    // {
    //     $user = $this->post('/api/register', [
    //         'name' => 'Werton VG',
    //         'email' => 'test@example.com',
    //         'password' => '123123',
    //     ]);

    //     $response = $this->post('/login', [
    //         'email' => 'test@example.com',
    //         'password' => 'senhaerrada',
    //     ]);

    //     // Verificar se o login falhou (status 401 para API ou redirecionamento com erro)
    //     $response->assertStatus(401);

    //     // Verificar que o usuário não está autenticado
    //     $this->assertGuest();
    // }
}
