<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boxers;

class boxersController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boxers = boxers::orderBy('created_at', 'DESC')->get();
  
        return view('boxers.index', compact('boxers'));
    }

    public function guest_boxers()
    {
        $boxers = boxers::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_boxers', compact('boxers'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boxers.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        boxers::create($request->all());
 
        return redirect()->route('boxers')->with('success', 'Boxers added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boxers = boxers::findOrFail($id);
  
        return view('boxers.show', compact('boxers'));
    }

    public function guest_show_boxers(string $id)
    {
        $boxers = boxers::findOrFail($id);
  
        return view('guests.guests_show_boxers', compact('boxers'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boxers = boxers::findOrFail($id);
  
        return view('boxers.edit', compact('boxers'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $boxers = boxers::findOrFail($id);
  
        $boxers->update($request->all());
  
        return redirect()->route('boxers')->with('success', 'Boxers updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $boxers = boxers::findOrFail($id);
  
        $boxers->delete();
  
        return redirect()->route('boxers')->with('success', 'Boxers deleted successfully');
    }
}
