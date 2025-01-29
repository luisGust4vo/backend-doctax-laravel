<?php
namespace App\Services;

use App\Repositories\UserRepository;
use App\DTOs\UserDTO;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }

    public function createUser(UserDTO $userDTO)
    {
        return $this->userRepository->create((array) $userDTO);
    }

    public function getUserById($id)
    {
        return $this->userRepository->findById($id);
    }

    public function updateUser($id, UserDTO $userDTO)
    {
        return $this->userRepository->update($id, (array) $userDTO);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->delete($id);
    }
}
