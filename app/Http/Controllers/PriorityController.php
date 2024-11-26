<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class PriorityController extends Controller
{

    public function index()
    {
        $data['title'] = "Priority";
        return view('priority/index', $data);
    }
    
    public function create()
    {
        $data['title'] = "Priority";
        return view('priority/create', $data);
    }
}
