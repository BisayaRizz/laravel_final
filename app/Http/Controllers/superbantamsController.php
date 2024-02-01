<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superbantams;

class superbantamsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superbantams = superbantams::orderBy('created_at', 'DESC')->get();
  
        return view('superbantams.index', compact('superbantams'));
    }

    public function guests_superbantams()
    {
        $superbantams = superbantams::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_superbantams', compact('superbantams'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superbantams.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        superbantams::create($request->all());
 
        return redirect()->route('superbantams')->with('success', 'Superbantams added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superbantams = superbantams::findOrFail($id);
  
        return view('superbantams.show', compact('superbantams'));
    }

    public function guest_show_superbantams(string $id)
    {
        $superbantams = superbantams::findOrFail($id);
  
        return view('guests.guests_show_superbantams', compact('superbantams'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superbantams = superbantams::findOrFail($id);
  
        return view('superbantams.edit', compact('superbantams'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superbantams = superbantams::findOrFail($id);
  
        $superbantams->update($request->all());
  
        return redirect()->route('superbantams')->with('success', 'Superbantams updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superbantams = superbantams::findOrFail($id);
  
        $superbantams->delete();
  
        return redirect()->route('superbantams')->with('success', 'Superbantams deleted successfully');
    }
}
