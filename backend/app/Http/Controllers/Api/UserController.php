<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        $users = User::with('achivments', 'user_forms')->where('id', '=', $user)->get();
        return response()->json($users);
    }

    //todo реалтзовать чисто юзера с формами
    public function userForms($user)
    {
//        $users = User::with('achivments')->where('id', '=', $user)->get();

    }
}
