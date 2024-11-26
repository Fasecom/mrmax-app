<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Report;


class ReportController extends Controller
{
    public function index() {
        $reports = Report::all();
        return view('report.index', ['reports' => $reports]);
    }

    public function destroy($id) {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->back();
    }
    
    public function store(Request $request)
    {
        // Валидация данных
        $data = $request->validate([
            'description' => 'required|string|max:255', // Указаны корректные правила валидации
        ]);

        $data['number'] = uniqid();

        Report::create($data);
        return redirect()->back();
    }
    
    
}
