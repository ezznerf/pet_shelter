<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function index(){
        $shelters = Shelter::all();
        return response()->json($shelters);
    }
}
