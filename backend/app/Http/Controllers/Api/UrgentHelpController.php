<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UrgentHelp;
use Illuminate\Http\Request;

class UrgentHelpController extends Controller
{
    public function index()
    {
        return UrgentHelp::with(['shelter', 'photos'])->get();
    }
}
