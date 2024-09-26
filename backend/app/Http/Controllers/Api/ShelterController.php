<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shelter;
use Illuminate\Http\Request;
use App\Models\User;

class ShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shelters = Shelter::with(['pets.photos', 'needs'])->get();
        return response()->json($shelters);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $shelter)
    {
        $shelter = Shelter::with(['pets'])->where('id', $shelter)->firstOrFail();
        return response()->json($shelter);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
