<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        $users = User::with('achivments')->where('id', '=', $user)->get();
        return response()->json($users);
    }
}
