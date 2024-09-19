<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request){
//        dd($request->all());
//        $validator = Validator($request->all(), ['email'=>'required|string|email','password'=>'required']);
        $validate = $request->validate(['email'=>'required|string|email','password'=>'required']);
//        dd($validator->errors());
        return 0;

    }
}
