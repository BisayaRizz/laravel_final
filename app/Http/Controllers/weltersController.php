<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\welters;

class weltersController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welters = welters::orderBy('created_at', 'DESC')->get();
  
        return view('welters.index', compact('welters'));
    }

    public function guests_welters()
    {
        $welters = welters::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_welters', compact('welters'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welters.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        welters::create($request->all());
 
        return redirect()->route('welters')->with('success', 'Welters added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $welters = welters::findOrFail($id);
  
        return view('welters.show', compact('welters'));
    }

    public function guest_show_welters(string $id)
    {
        $welters = welters::findOrFail($id);
  
        return view('guests.guests_show_welters', compact('welters'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $welters = welters::findOrFail($id);
  
        return view('welters.edit', compact('welters'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $welters = welters::findOrFail($id);
  
        $welters->update($request->all());
  
        return redirect()->route('welters')->with('success', 'Welters updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $welters = welters::findOrFail($id);
  
        $welters->delete();
  
        return redirect()->route('welters')->with('success', 'Welters deleted successfully');
    }
}
