<?php

namespace App\Http\Controllers;

use App\Models\Key;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keys = Key::latest()->get();
        return view('admins.key_management.key_management_list', compact('keys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.key_management.key_management_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'key' => 'required|string',
        ]);
        $validated['is_active'] = 1;
        $validated['is_encrypted'] = 1;
        Key::create($validated);

        return redirect()->route('key.index');
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
