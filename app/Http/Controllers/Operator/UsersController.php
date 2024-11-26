<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    private $userModel = null;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('operator/users/index');
    }

    public function create()
    {

        return view('operator/users/create');
    }

    public function getdata()
    {
        $result =  $this->userModel->getData();
        if ($result) {
            return response()->json(['status' => 200, 'message'=>'success','data'=> $result]);
        }

    }
    public function savedata(Request $request)
    {
        $result =  $this->userModel->store($request);
        if ($result) {
            return response()->json(['status' => 200, 'message'=>'success','data'=> $result]);
        }
        return view('operator/users/create');
    }

    public function delete(Request $request)
    {
        $result =  $this->userModel->deleteData($request);
        if ($result) {
            return response()->json(['status' => 200, 'message'=>'success','data'=> $result]);
        }
        return view('operator/users/create');
    }




}
