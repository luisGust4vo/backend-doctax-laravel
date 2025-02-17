<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestDatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create(); // Exemplo usando o Factory para criar 10 usuários
    }
}
