<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stats;

class statsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = stats::orderBy('created_at', 'DESC')->get();
  
        return view('stats.index', compact('stats'));
    }

    public function guests_stats()
    {
        $stats = stats::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_stats', compact('stats'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stats.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        stats::create($request->all());
 
        return redirect()->route('stats')->with('success', 'Stats added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stats = stats::findOrFail($id);
  
        return view('stats.show', compact('stats'));
    }

    
    public function guest_show_stats(string $id)
    {
        $stats = stats::findOrFail($id);
  
        return view('guests.guests_show_stats', compact('stats'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stats = stats::findOrFail($id);
  
        return view('stats.edit', compact('stats'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stats = stats::findOrFail($id);
  
        $stats->update($request->all());
  
        return redirect()->route('stats')->with('success', 'Stats updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stats = stats::findOrFail($id);
  
        $stats->delete();
  
        return redirect()->route('stats')->with('success', 'Stats deleted successfully');
    }
}
