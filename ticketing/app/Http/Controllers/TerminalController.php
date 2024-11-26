<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class TerminalController extends Controller
{

    public function index()
    {
        $data['title'] = "Terminal";

        return view('terminal/index', $data);
    }
    public function create()
    {
        $data['title'] = "Terminal";
        return view('terminal/create', $data);
    }
}
