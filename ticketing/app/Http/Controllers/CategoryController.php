<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class CategoryController extends Controller
{

    public function index()
    {
        $data['title'] = "Category";
        return view('category/index', $data);
    }
    public function create()
    {
        $data['title'] = "Category";
        return view('category/create', $data);
    }
}
