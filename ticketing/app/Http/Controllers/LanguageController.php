<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class LanguageController extends Controller
{

    public function index()
    {
        $data['title'] = "Language";
        return view('language/index', $data);
    }
    public function create()
    {
        $data['title'] = "Language";
        return view('language/create', $data);
    }
}
