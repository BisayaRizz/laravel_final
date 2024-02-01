<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\records;

class recordsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = records::orderBy('created_at', 'DESC')->get();
  
        return view('records.index', compact('records'));
    }
    
    public function guest_records()
    {
        $records = records::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_records', compact('records'));
    }


  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('records.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        records::create($request->all());
 
        return redirect()->route('records')->with('success', 'Records added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $records = records::findOrFail($id);
  
        return view('records.show', compact('records'));
    }

    public function guest_show_records(string $id)
    {
        $records = records::findOrFail($id);
  
        return view('guests.guests_show_records', compact('records'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $records = records::findOrFail($id);
  
        return view('records.edit', compact('records'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $records = records::findOrFail($id);
  
        $records->update($request->all());
  
        return redirect()->route('records')->with('success', 'Records updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $records = records::findOrFail($id);
  
        $records->delete();
  
        return redirect()->route('records')->with('success', 'Records deleted successfully');
    }
}
