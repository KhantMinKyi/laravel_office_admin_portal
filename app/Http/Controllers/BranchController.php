<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\City;
use App\Models\Township;
use Illuminate\Http\Request;

class BranchController extends Controller
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
            'township_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        Branch::create($validated);
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $branch = Branch::with('users')->find($id);
        return view('admins.partial_view.location_management.branch.view_branch_user', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $branch = Branch::find($id);
        if (!$branch) {
            return redirect()->back();
        }
        $cities = City::all();
        $townships = Township::all();
        return view('admins.partial_view.location_management.branch.edit_branch', compact([
            'cities',
            'townships',
            'branch',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $branch = Branch::find($id);
        if (!$branch) {
            return redirect()->back();
        }
        $validated = $request->validate([
            'city_id' => 'required|numeric',
            'township_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        $branch->update($validated);
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
