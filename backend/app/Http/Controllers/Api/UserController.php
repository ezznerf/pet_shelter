<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{
    use Notifiable;
    public function index()
    {
        return User::with('achivments', 'user_forms')->get();
    }
    public function show($user)
    {
        return User::with('achivments', 'user_forms')->where('id', '=', $user)->firstOrFail();
    }

    //todo реалтзовать чисто юзера с формами
    public function userForms($user)
    {
//        $users = User::with('achivments')->where('id', '=', $user)->get();

    }
}
