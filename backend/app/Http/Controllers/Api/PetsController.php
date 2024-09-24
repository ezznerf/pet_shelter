<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        return Pets::with(['photos'])->get();
    }

    public function show(string $pet){
        $pet = Pets::with(['photos'])->where('id', $pet)->FirstOrFail();
        return response()->json($pet);
    }
}
