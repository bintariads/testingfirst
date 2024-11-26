<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        return view('operator/report/index');
    }
    public function create()
    {
        return view('operator/report/create');
    }

}
