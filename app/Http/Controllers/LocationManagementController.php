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
        $cities = City::with('townships')->paginate(10);
        $townships = Township::with('city')->paginate(10);
        $branches = Branch::with('city','township')->paginate(10);
        $departments = Department::with('city','township','branch')->paginate(10);

        return view('admins.location_management.location_management_index',[
            'cities'=>$cities,
            'townships'=>$townships,
            'branches'=>$branches,
            'departments'=>$departments,
        ]);
    }
}
