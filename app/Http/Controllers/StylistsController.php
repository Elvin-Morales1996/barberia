<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stylists;

class StylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $style = Stylists::all();
        return $style;
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
        
        $style = Stylists::create($request->all());
        return response()->json($style,201);
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
        $style = Stylists::findOrFail($id);
        $style->update($request->all());
        return response()->json($style,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
