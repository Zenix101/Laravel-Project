<?php

namespace App\Http\Controllers;

use App\Models\parkir;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showReportForm() {
        return view('admin.report');
    }
    public function generateReport(Request $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
    
        $parkingRecord = parkir::whereBetween('entry_time', [$request->start_date, $request->end_date])
            ->orWhereBetween('exit_time', [$request->start_date, $request->end_date])
            ->get();
    
            return view('admin-result', ['parkingRecord' => $parkingRecord]   );
    }
    
    
}
