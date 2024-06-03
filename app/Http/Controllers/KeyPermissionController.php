<?php

namespace App\Http\Controllers;

use App\Models\Key;
use App\Models\KeyPermission;
use App\Models\User;
use Illuminate\Http\Request;

class KeyPermissionController extends Controller
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
        $keys = Key::all();
        $users = User::all();
        return view('admins.key_permission.key_permission_create', compact('keys', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'key_id' => 'required',
            'key' => 'required',
        ]);
        KeyPermission::create($validated);
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
        $keys = Key::all();
        $users = User::all();
        $key_permission = KeyPermission::with('key_description', 'user')->where('id', $id)->first();
        if (!$key_permission) {
            return redirect()->back();
        }
        return view('admins.key_permission.key_permission_edit', compact('key_permission', 'keys', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $key_permission = KeyPermission::with('key_description', 'user')->where('id', $id)->first();
        if (!$key_permission) {
            return redirect()->back();
        }
        $validated = $request->validate([
            'user_id' => 'required',
            'key_id' => 'required',
            'key' => 'required',
        ]);
        $validated['is_granded'] = $request->is_granded ?? 0;
        $validated['is_active'] = $request->is_active ?? 0;
        // return $validated;
        $key_permission->update($validated);
        return redirect()->route('key.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
