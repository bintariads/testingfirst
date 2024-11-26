<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProfilController extends Controller
{

    public function index()
    {
        $data['title'] = "profil";

        return view('profil/index', $data);
    }
    
    public function create()
    {
        $data['title'] = "profil";
        return view('profil/create', $data);
    }

    public function edit()
    {
        $data['title'] = "Psrofil";
        return view('profil/create', $data);
    }
}
