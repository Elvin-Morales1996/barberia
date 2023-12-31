<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    
    public function index()
    {
        //  
        $clients = Clients ::all();
        return $clients;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * crear un nuevo cliente
     */
    public function store(Request $request)
    {
        //
        $clients = Clients::create($request->all());
        return response()->json($clients,201);
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
        //modificar por medio de id
        $clients = Clients::findOrFail($id);
        $clients->update($request->all());
        return response()->json($clients,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
