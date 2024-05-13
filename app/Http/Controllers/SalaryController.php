<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salary::with('user')->get();
        return view('admins.salary.salary_list', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authenticatedUserId = Auth::id();

        // Retrieve users excluding the authenticated user
        $users = User::where('id', '!=', $authenticatedUserId)->get();
        return view('admins.salary.salary_create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|numeric',
            'salary' => 'required|numeric',
            'pay_date' => 'required|date',
            'description' => 'nullable|string',
            'is_encrypted' => 'nullable|numeric',
        ]);
        Salary::create($validated);
        return redirect()->route('salary.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salary = Salary::find($id);
        if (!$salary) {
            return redirect()->back();
        }
        return view('admins.salary.salary_detail', compact(['salary']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salary = Salary::find($id);
        if (!$salary) {
            return redirect()->back();
        }
        $authenticatedUserId = Auth::id();

        // Retrieve users excluding the authenticated user
        $users = User::where('id', '!=', $authenticatedUserId)->get();
        return view('admins.salary.salary_edit', compact(['salary', 'users']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salary = Salary::find($id);
        if (!$salary) {
            return redirect()->back();
        }
        $validated = $request->validate([
            'user_id' => 'required|numeric',
            'salary' => 'required|numeric',
            'pay_date' => 'required|date',
            'description' => 'nullable|string',
            'is_encrypted' => 'nullable|numeric',
        ]);
        $salary->update($validated);
        return redirect()->route('salary.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salary::find($id);
        if (!$salary) {
            return redirect()->back();
        }
        $salary->delete();
        return redirect()->route('salary.index');
    }
}
