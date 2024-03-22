<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Township;
use Illuminate\Http\Request;

class LocationManagementController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city_count = City::all()->count();
        $cities = City::with('townships')->paginate(10);
        $township_count = Township::all()->count();
        $townships = Township::with('city')->paginate(10);

        return view('admins.location_management.location_management_index',[
            'city_count'=>$city_count,
            'township_count'=>$township_count,
            'cities'=>$cities,
            'townships'=>$townships,
        ]);
    }
}
