<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormConroller extends Controller
{
    public function index()
    {
        return Form::with('shelter', 'volunteering')->get();
    }
}
