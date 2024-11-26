<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AssignderController extends Controller
{

    public function index()
    {
        $data['title'] = "Assignder";
        return view('assignder/index', $data);
    }
    public function create()
    {
        $data['title'] = "Assignder";
        return view('assignder/create', $data);
    }
}
