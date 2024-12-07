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
        $data = $request->validate([
            'description' => 'required|string|max:20',
        ]);

        $data['number'] = uniqid();
    
        Report::create($data);
    
        //return redirect()->route('reports.index');
        return redirect()->back();
    }
    
    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => 'required|exists:reports,id',
            'description' => 'required|string|max:20',
        ]);
    
        $report = Report::findOrFail($data['id']);
    
        $report->update(['description' => $data['description']]);
    
        // Перенаправить обратно с сообщением об успехе
        return redirect()->back();
    }

    
}
