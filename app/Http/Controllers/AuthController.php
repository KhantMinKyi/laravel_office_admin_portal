<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return redirect('/')->with('error', 'Incorrect User Name');
        }
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password is Wrong , Try Again');
        }
        if ($user->user_type == 'admin') {
            auth()->login($user);
            return redirect('/admin');
        } else if ($user->user_type == 'user') {
            auth()->login($user);
            return redirect('/user');
        } else {
            return 'Error';
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->back()->with('success', 'You Have Been Logout');
    }
}
