<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function registrar_usuario(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
