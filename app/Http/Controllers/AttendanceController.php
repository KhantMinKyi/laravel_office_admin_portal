<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $currentDate = Carbon::now();
        $users = User::all();
        $lastSixMonth = [];
        $requestMonth = $request->month;
        $user_id = $request->user_id;
        for ($i = 0; $i <= 6; $i++) {
            $lastSixMonth[] = $currentDate->copy()->subMonth($i)->format(('Y-m'));
        }

        $query = Attendance::with('user');
        if (isset($request->month)) {
            $year = date('Y', strtotime($request->month));
            $monthNumber = date('m', strtotime($request->month));
            $query->whereYear('attendance_date', $year)
                ->whereMonth('attendance_date', $monthNumber);
        }
        if (isset($request->user_id)) {
            $query->where('user_id', $user_id);
        }
        $attendances = $query->get();
        // return $attendances;
        return view('admins.attendance.attendance_list', compact(['attendances', 'lastSixMonth', 'requestMonth', 'users', 'user_id']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $currentTime = Carbon::now('Asia/Yangon')->format('H:i:s');
        $currentDate = Carbon::now('Asia/Yangon')->format('Y-m-d');
        Attendance::create([
            'user_id' => $user_id,
            'time' => $currentTime,
            'attendance_date' => $currentDate,
        ]);
        if (Auth::user()->user_type == 'user') {
            return redirect()->route('users.user_attendance');
        }
        return redirect()->route('attendance.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendance = Attendance::find($id);
        if (!$attendance) {
            return redirect()->back();
        }
        if (Auth::user()->user_type == 'user') {
            return view('users.attendance.attendance_detail', compact(['attendance']));
        }
        return view('admins.attendance.attendance_detail', compact(['attendance']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userAttendance(Request $request)
    {
        $currentDate = Carbon::now();
        $lastSixMonth = [];
        $requestMonth = $request->month;
        $user_id = Auth::user()->id;
        for ($i = 0; $i <= 6; $i++) {
            $lastSixMonth[] = $currentDate->copy()->subMonth($i)->format(('Y-m'));
        }

        $query = Attendance::with('user')->where('user_id', $user_id);
        if (isset($request->month)) {
            $year = date('Y', strtotime($request->month));
            $monthNumber = date('m', strtotime($request->month));
            $query->whereYear('attendance_date', $year)
                ->whereMonth('attendance_date', $monthNumber);
        }
        $attendances = $query->get();
        // return $attendances;
        return view('users.attendance.attendance_list', compact(['attendances', 'lastSixMonth', 'requestMonth']));
    }
}
