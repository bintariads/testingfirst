<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index()
    {
        return view('operator/ticket/index');
    }
    public function create()
    {
        return view('operator/ticket/create');
    }

}
