<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\heavydivisions;

class heavydivisionsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heavydivisions = heavydivisions::orderBy('created_at', 'DESC')->get();
  
        return view('heavydivisions.index', compact('heavydivisions'));
    }
  
    public function guests_heavydivisions()
    {
        $heavydivisions = heavydivisions::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_heavydivisions', compact('heavydivisions'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('heavydivisions.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        heavydivisions::create($request->all());
 
        return redirect()->route('heavydivisions')->with('success', 'Heavydivisions added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $heavydivisions = heavydivisions::findOrFail($id);
  
        return view('heavydivisions.show', compact('heavydivisions'));
    }

    public function guest_show_heavydivisions(string $id)
    {
        $heavydivisions = heavydivisions::findOrFail($id);
  
        return view('guests.guests_show_heavydivisions', compact('heavydivisions'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $heavydivisions = heavydivisions::findOrFail($id);
  
        return view('heavydivisions.edit', compact('heavydivisions'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $heavydivisions = heavydivisions::findOrFail($id);
  
        $heavydivisions->update($request->all());
  
        return redirect()->route('heavydivisions')->with('success', 'Heavydivisions updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $heavydivisions = heavydivisions::findOrFail($id);
  
        $heavydivisions->delete();
  
        return redirect()->route('heavydivisions')->with('success', 'Heavydivisions deleted successfully');
    }
}
