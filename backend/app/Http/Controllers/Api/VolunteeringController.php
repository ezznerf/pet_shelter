<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volunteering;
use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    public function index()
    {
        return Volunteering::all();
    }
}
