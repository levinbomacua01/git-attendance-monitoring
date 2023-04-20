<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attendancelogcontroller extends Controller
{
    public function index()
    {
        $attendanceLogs = AttendanceLog::with('user')->get();

        return view('attendance_logs.index', compact('attendanceLogs'));
    }

    public function store(Request $request)
    {
        $attendanceLog = new AttendanceLog;
        $attendanceLog->user_id = $request->user_id;
        $attendanceLog->date = now()->toDateString();
        $attendanceLog->time_in = now()->toTimeString();
        $attendanceLog->save();

        return redirect()->back();
}

public function update(Request $request, 