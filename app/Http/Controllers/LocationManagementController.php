<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\City;
use App\Models\Department;
use App\Models\Township;
use Illuminate\Http\Request;

class LocationManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::with(['townships', 'users'])->get();
        $cities_count = City::all()->count();
        $townships = Township::with(['city', 'users'])->get();
        $townships_count = Township::all()->count();
        $branches = Branch::with(['city', 'township', 'users'])->get();
        $branches_count = Branch::all()->count();
        $departments = Department::with(['city', 'township', 'branch', 'users'])->get();
        $departments_count = Department::all()->count();

        return view('admins.location_management.location_management_index', [
            'cities'            => $cities,
            'townships'         => $townships,
            'branches'          => $branches,
            'departments'       => $departments,
            'cities_count'      => $cities_count,
            'townships_count'   => $townships_count,
            'branches_count'    => $branches_count,
            'departments_count' => $departments_count,
        ]);
    }
}
