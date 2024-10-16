<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports = Reports::all();
        return view('report.index', compact('reports'));
    }
}
