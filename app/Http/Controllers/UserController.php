<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function adminUserList(){
        $admin_users =User::with('city','township','branch','department')->get();
        return view('admins.users.admin_user_list',[
            'admin_users' => $admin_users
        ]);
    }
    public function viewAdminUserDetail(Request $request){
        $admin_user =User::with('city','township','branch','department')->find($request->user_id);
        return view('admins.partial_view.users.admin_user.view_user',[
            'admin_user' => $admin_user
        ]);
    }
}
