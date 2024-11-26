<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        return view('operator/notification/index');
    }
    public function create()
    {
        return view('operator/notification/create');
    }

}
