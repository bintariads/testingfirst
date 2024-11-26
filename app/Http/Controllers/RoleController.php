<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class RoleController extends Controller
{

    public function index()
    {
        $data['title'] = "Role";

        return view('role/index', $data);
    }
    
    public function create()
    {
        $data['title'] = "Role";
        return view('role/create', $data);
    }

    public function edit()
    {
        $data['title'] = "Role";
        return view('role/create', $data);
    }
}
