<?php

namespace App\DTOs;

class UserDTO
{
    public string $name;
    public string $email;
    public string $password;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = bcrypt($data['password']); // Já criptografa a senha
    }
}
