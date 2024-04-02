<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdminUserRequest;
use App\Models\Branch;
use App\Models\City;
use App\Models\Department;
use App\Models\Township;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function adminUserList(){
        $admin_users =User::with('city','township','branch','department')->get();
        $cities = City::select('id','name')->get();
        $townships = Township::select('id','name')->get();
        $branches = Branch::select('id','name')->get();
        $departments = Department::select('id','name')->get();
        return view('admins.users.admin_user_list',[
            'admin_users' => $admin_users,
            'cities' => $cities,
            'townships' => $townships,
            'branches' => $branches,
            'departments' => $departments,
        ]);
    }
    public function viewAdminUserDetail(Request $request){
        $admin_user =User::with('city','township','branch','department')->find($request->user_id);
        return view('admins.partial_view.users.admin_user.view_user',[
            'admin_user' => $admin_user
        ]);
    }

    public function storeAdminUser(StoreUpdateAdminUserRequest $request){
        $validated = $request->validated();
        $validated['full_name']= $validated['first_name'] . ' '. $validated['last_name'];
        User::create($validated);
        return redirect('/admin/admin_user_list')->with('success','User Created Successfully!');
    }
}
