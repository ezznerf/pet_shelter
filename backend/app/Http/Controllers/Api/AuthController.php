<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request) // инъекция зависимостей
    {
        $user = User::create($request->all());
        event(new Registered($user));

//        Auth::login($user);
        return response([
            'message' => 'Email verification link sent on your email.',
        ]);
    }

    public function login(LoginUserRequest $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Wrong Email or Password'
            ], 401);
        }

        $user = Auth::user();
        $user->tokens()->delete();
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('token')->plainTextToken
        ]);
    }

    public function logout(){
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'message' => "Token removed successfully",
        ]);
    }
}
