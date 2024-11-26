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
    
}
