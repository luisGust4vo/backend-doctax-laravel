<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if ($token = JWTAuth::attempt($credentials)) {
            return response()->json(compact('token'));
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Successfully logged out']);
    }

    // public function me()
    // {
    //     return response()->json(auth()->user());
    // }
}