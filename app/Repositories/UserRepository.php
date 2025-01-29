<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        return User::all();
    }

    public function create(array $data)
    {
        // Criação do usuário no banco
        return User::create($data);
    }

    public function findById($id)
    {
        // Encontrar o usuário pelo ID
        return User::find($id);
    }

    public function update($id, array $data)
    {
        // Encontrar o usuário pelo ID
        $user = User::find($id);

        if ($user) {
            // Atualizar o usuário com os novos dados
            $user->update($data);
            return $user;
        }

        return null; // Caso o usuário não seja encontrado
    }

    public function delete($id)
    {
        // Encontrar o usuário pelo ID
        $user = User::find($id);

        if ($user) {
            // Excluir o usuário
            $user->delete();
            return true;
        }

        return false; // Caso o usuário não seja encontrado
    }
}