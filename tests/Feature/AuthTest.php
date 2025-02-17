<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_pode_se_cadastrar()
    {
        $response = $this->post('/api/register', [
            'name' => 'Werton VG',
            'email' => 'test@example.com',
            'password' => '123123',
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com'
        ]);

        $response->assertStatus(201);
    }
}
