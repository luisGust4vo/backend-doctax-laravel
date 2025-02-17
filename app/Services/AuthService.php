<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\DTOs\UserDTO;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(UserDTO $userDTO)
    {
        return $this->userRepository->create((array) $userDTO);
    }
}
