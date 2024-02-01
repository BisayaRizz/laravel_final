<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rates;

class ratesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rates = rates::orderBy('created_at', 'DESC')->get();
  
        return view('rates.index', compact('rates'));
    }

    public function guests_rates()
    {
        $rates = rates::orderBy('created_at', 'DESC')->get();
  
        return view('guests.guests_rates', compact('rates'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rates.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        rates::create($request->all());
 
        return redirect()->route('rates')->with('success', 'Rates added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rates = rates::findOrFail($id);
  
        return view('rates.show', compact('rates'));
    }

    public function guest_show_rates(string $id)
    {
        $rates = rates::findOrFail($id);
  
        return view('guests.guests_show_rates', compact('rates'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rates = rates::findOrFail($id);
  
        return view('rates.edit', compact('rates'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rates = rates::findOrFail($id);
  
        $rates->update($request->all());
  
        return redirect()->route('rates')->with('success', 'Rates updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rates = rates::findOrFail($id);
  
        $rates->delete();
  
        return redirect()->route('rates')->with('success', 'Rates deleted successfully');
    }
}
