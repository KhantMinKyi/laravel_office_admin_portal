<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdminUserRequest;
use App\Models\Branch;
use App\Models\City;
use App\Models\Department;
use App\Models\Township;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function adminUserList()
    {
        $admin_users = User::with('city', 'township', 'branch', 'department')->where('user_type', 'admin')->paginate(10);
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        return view('admins.users.admin_user_list', [
            'admin_users' => $admin_users,
            'cities' => $cities,
            'townships' => $townships,
            'branches' => $branches,
            'departments' => $departments,
        ]);
    }
    public function operationUserList(Request $request)
    {
        $operation_users = User::with('city', 'township', 'branch', 'department')->where('user_type', 'user')
            ->where('is_operation', 1)->paginate(10);
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        $url = $request->getRequestUri();
        if ($url == '/admin/operation_user_list') {
            return view('admins.users.operation_user_list', [
                'operation_users' => $operation_users,
                'cities' => $cities,
                'townships' => $townships,
                'branches' => $branches,
                'departments' => $departments,
            ]);
        }
        if ($url = '/user/operation_user_list') {
            return view('users.users.operation_user_list', [
                'operation_users' => $operation_users,
                'cities' => $cities,
                'townships' => $townships,
                'branches' => $branches,
                'departments' => $departments,
            ]);
        }
    }
    public function normalUserList(Request $request)
    {
        $normal_users = User::with('city', 'township', 'branch', 'department')->where('user_type', 'user')
            ->where('is_operation', 0)->paginate(10);
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        $url = $request->getRequestUri();
        // return $url;
        if ($url == '/admin/normal_user_list') {
            return view('admins.users.normal_user_list', [
                'normal_users' => $normal_users,
                'cities' => $cities,
                'townships' => $townships,
                'branches' => $branches,
                'departments' => $departments,
            ]);
        }
        if ($url == '/user/normal_user_list') {
            return view('users.users.normal_user_list', [
                'normal_users' => $normal_users,
                'cities' => $cities,
                'townships' => $townships,
                'branches' => $branches,
                'departments' => $departments,
            ]);
        }
    }
    public function viewAdminUserDetail(Request $request)
    {
        $admin_user = User::with('city', 'township', 'branch', 'department')->find($request->user_id);
        return view('admins.partial_view.users.admin_user.view_user', [
            'admin_user' => $admin_user
        ]);
    }
    public function viewOperationUserDetail(Request $request)
    {
        $operation_user = User::with('city', 'township', 'branch', 'department')->find($request->user_id);
        return view('admins.partial_view.users.operation_user.view_user', [
            'operation_user' => $operation_user
        ]);
    }
    public function viewNormalUserDetail(Request $request)
    {
        $normal_user = User::with('city', 'township', 'branch', 'department')->find($request->user_id);
        return view('admins.partial_view.users.normal_user.view_user', [
            'normal_user' => $normal_user
        ]);
    }
    public function editAdminUserDetail($id)
    {
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        $admin_user = User::with('city', 'township', 'branch', 'department')->find($id);
        return view('admins.partial_view.users.admin_user.edit_user', [
            'admin_user' => $admin_user,
            'cities' => $cities,
            'townships' => $townships,
            'branches' => $branches,
            'departments' => $departments,
        ]);
    }
    public function editOperationUserDetail($id)
    {
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        $admin_user = User::with('city', 'township', 'branch', 'department')->find($id);
        return view('admins.partial_view.users.operation_user.edit_user', [
            'admin_user' => $admin_user,
            'cities' => $cities,
            'townships' => $townships,
            'branches' => $branches,
            'departments' => $departments,
        ]);
    }
    public function editNormalUserDetail($id)
    {
        $cities = City::select('id', 'name')->get();
        $townships = Township::select('id', 'name')->get();
        $branches = Branch::select('id', 'name')->get();
        $departments = Department::with('branch')->get();
        $admin_user = User::with('city', 'township', 'branch', 'department')->find($id);
        return view('admins.partial_view.users.normal_user.edit_user', [
            'admin_user' => $admin_user,
            'cities' => $cities,
            'townships' => $townships,
            'branches' => $branches,
            'departments' => $departments,
        ]);
    }
    public function storeUser(StoreUpdateAdminUserRequest $request)
    {
        $url = $request->getRequestUri();
        // return $url;
        $validated = $request->validated();
        $validated['full_name'] = $validated['first_name'] . ' ' . $validated['last_name'];
        // return $validated;
        // admin
        if ($url == '/admin/admin_user_list/store-admin_user') {
            $validated['user_type'] = 'admin';
            $validated['is_operation'] = '0';
            User::create($validated);
            return redirect('/admin/admin_user_list')->with('success', 'User Created Successfully!');
        }
        // operation
        else if ($url == '/admin/operation_user_list/store-operation_user') {
            $validated['user_type'] = 'user';
            $validated['is_operation'] = '1';
            User::create($validated);
            return redirect('/admin/operation_user_list')->with('success', 'User Created Successfully!');
        }
        // normal
        else if ($url == '/admin/normal_user_list/store-normal_user') {
            $validated['user_type'] = 'user';
            $validated['is_operation'] = '0';
            User::create($validated);
            return redirect('/admin/normal_user_list')->with('success', 'User Created Successfully!');
        }
    }
    public function userProfile($id)
    {
        $admin_user = User::with('city', 'township', 'branch', 'department')->find($id);
        return view('user_profile', [
            'admin_user' => $admin_user
        ]);
    }
    public function userUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($id, 'id')],
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|string',
            'nrc' => 'nullable',
            'gender' => 'required',
            'nationality' => 'nullable|string',
            'marital_status' => 'required',
            'degree' => 'nullable|string',
            'phone_1' => 'required|string',
            'phone_2' => 'nullable|string',
            'email' => ['required', 'string', Rule::unique('users', 'email')->ignore($id, 'id')],
            'address' => 'required|string',
            'father_name' => 'required|string',
            'contact_phone' => 'nullable|string',
            'start_date' => 'required|string',
            'position' => 'nullable|string',
            'city_id' => 'required|exists:App\Models\City,id',
            'township_id' => 'required|exists:App\Models\Township,id',
            'branch_id' => 'required|exists:App\Models\Branch,id',
            'department_id' => 'required|exists:App\Models\Department,id',
        ]);
        $validated['full_name'] = $validated['first_name'] . ' ' . $validated['last_name'];
        // return $validated;
        $admin_user = User::find($id);
        $admin_user->update($validated);
        return redirect()->back();
    }
}
