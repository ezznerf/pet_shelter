<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
//        $validator = Validator($request->all(), ['email'=>'required|string|email','password'=>'required', 'password_repeat'=>'required', 'name'=>'required']);
//        dd($validator->errors());
        $validate = $request->validate(['email'=>'required|string|email','password'=>'required|confirmed|min:8', 'password_confirmation'=>'required|min:8', 'name'=>'required']);

        return redirect()->route('home.index');
    }
}
