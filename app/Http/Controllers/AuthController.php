<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Services\AuthService;
use App\Http\Requests\UserRequest;
use App\DTOs\UserDTO;

class AuthController extends Controller
{

    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = JWTAuth::attempt($credentials)) {
            return response()->json(compact('token'));
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function register(UserRequest $request)
    {
        $userDTO = new UserDTO($request->validated());
        return response()->json($this->authService->createUser($userDTO), 201);
    }


    // public function logout()
    // {
    //     JWTAuth::invalidate(JWTAuth::getToken());
    //     return response()->json(['message' => 'Successfully logged out']);
    // }

    // public function me()
    // {
    //     return response()->json(auth()->user());
    // }
}
