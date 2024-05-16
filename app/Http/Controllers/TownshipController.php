<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'city_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        Township::create($validated);
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $township = Township::with('users')->find($id);
        return view('admins.partial_view.location_management.township.view_township_user', compact('township'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $township = Township::find($id);
        if (!$township) {
            return redirect()->back();
        }
        $cities = City::all();
        return view('admins.partial_view.location_management.township.edit_township', compact([
            'cities',
            'township',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $township = Township::find($id);
        if (!$township) {
            return redirect()->back();
        }
        $validated = $request->validate([
            'city_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        $township->update($validated);
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
