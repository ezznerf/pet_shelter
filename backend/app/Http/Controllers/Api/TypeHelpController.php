<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TypeHelp;
use Illuminate\Http\Request;

class TypeHelpController extends Controller
{
    public function index()
    {
        return TypeHelp::all();
    }
}
