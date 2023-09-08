<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinks;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    $drinks = Drinks::all();
    return $drinks;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $drinks = drinks::create($request->all());
        return response()->json($drinks,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $drinks = drinks::findOrFail($id);
        $drinks->update($request->all());
        return response()->json($drinks,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
