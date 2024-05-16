<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\City;
use App\Models\Department;
use App\Models\Township;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
            'branch_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        Department::create($validated);
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Department::with('users')->find($id);
        return view('admins.partial_view.location_management.department.view_department_user', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        if (!$department) {
            return redirect()->back();
        }
        $cities = City::all();
        $townships = Township::all();
        $branches = Branch::all();
        return view('admins.partial_view.location_management.department.edit_department', compact([
            'department',
            'cities',
            'townships',
            'branches',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::find($id);
        if (!$department) {
            return redirect()->back();
        }
        $validated = $request->validate([
            'city_id' => 'required|numeric',
            'township_id' => 'required|numeric',
            'branch_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        $department->update($validated);
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
