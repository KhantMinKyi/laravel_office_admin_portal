<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $currentDate = Carbon::now();
        $lastSixMonth = [];
        $requestMonth = $request->month;
        for ($i = 0; $i <= 6; $i++) {
            $lastSixMonth[] = $currentDate->copy()->subMonth($i)->format(('Y-m'));
        }

        $query = Salary::with('user');
        if (isset($request->month)) {
            $year = date('Y', strtotime($request->month));
            $monthNumber = date('m', strtotime($request->month));
            $query->whereYear('pay_date', $year)
                ->whereMonth('pay_date', $monthNumber);
        }
        if (Auth::user()->user_type == 'user' && Auth::user()->is_operation == 0) {
            $query->where('user_id', Auth::user()->id);
        }
        if (Auth::user()->user_type == 'user' && Auth::user()->is_operation == 1) {
            $query->whereHas('user', function ($query) {
                $query->where('branch_id', Auth::user()->branch_id);
            });
        }


        $salaries = $query->get();
        if (Auth::user()->user_type == 'user') {
            return view('users.salary.salary_list', compact('salaries', 'lastSixMonth', 'requestMonth'));
        }
        return view('admins.salary.salary_list', compact('salaries', 'lastSixMonth', 'requestMonth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authenticatedUserId = Auth::id();

        // Retrieve users excluding the authenticated user
        $users = User::where('id', '!=', $authenticatedUserId)->get();
        if (Auth::user()->user_type == 'user') {
            return view('users.salary.salary_create',  compact('users'));
        }
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
        if (Auth::user()->user_type == 'user') {
            return redirect()->route('user_salary.index');
        }
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
        if (Auth::user()->user_type == 'user') {
            return  view('users.salary.salary_detail', compact(['salary']));
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
        if (Auth::user()->user_type == 'user') {
            return view('users.salary.salary_edit', compact(['salary', 'users']));
        }
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
        if (Auth::user()->user_type == 'user') {
            return redirect()->route('user_salary.index');
        }
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
        if (Auth::user()->user_type == 'user') {
            return redirect()->route('user_salary.index');
        }
        return redirect()->route('salary.index');
    }
    public function userSalaryList(Request $request)
    {

        $currentDate = Carbon::now();
        $lastSixMonth = [];
        $user_id = Auth::user()->id;
        $requestMonth = $request->month;

        for ($i = 0; $i <= 6; $i++) {
            $lastSixMonth[] = $currentDate->copy()->subMonth($i)->format(('Y-m'));
        }

        $query = Salary::with('user')->where('user_id', $user_id);
        if (isset($request->month)) {
            $year = date('Y', strtotime($request->month));
            $monthNumber = date('m', strtotime($request->month));
            $query->whereYear('pay_date', $year)
                ->whereMonth('pay_date', $monthNumber);
        }
        $salaries = $query->get();
        return view('salary_list', compact('salaries', 'lastSixMonth', 'requestMonth'));
    }
    public function salaryDetail(string $id)
    {
        $salary = Salary::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if (!$salary) {
            return redirect()->back();
        }

        return view('salary_detail', compact(['salary']));
    }
}
