<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class PlatController extends Controller
{

    public function index()
    {
        $data['title'] = "Plat";
        return view('plat/index', $data);
    }
    public function create()
    {
        return view('plat/create');
    }
}
