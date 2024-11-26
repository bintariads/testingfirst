<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class StatusController extends Controller
{

    public function index()
    {
        $data['title'] = "Status";
        return view('status/index', $data);
    }
    public function create()
    {   $data['title'] = "Status";
        return view('status/create', $data);
    }
}
