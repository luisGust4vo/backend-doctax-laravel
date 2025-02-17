<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\DTOs\UserDTO;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers());
    }



    public function show($id)
    {
        return response()->json($this->userService->getUserById($id));
    }

    public function update(UserRequest $request, $id)
    {
        $userDTO = new UserDTO($request->validated());
        return response()->json($this->userService->updateUser($id, $userDTO));
    }

    public function destroy($id)
    {
        $this->userService->deleteUser($id);
        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}
