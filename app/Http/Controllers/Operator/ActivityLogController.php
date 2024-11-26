<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator\AssetsControlModel;
use App\Models\Operator\VehicleModel;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    private $assetsControlModel = null;

    public function __construct()
    {
        $this->assetsControlModel = new AssetsControlModel();
    }
    public function index()
    {
        return view('operator/activityLog/index');
    }

    public function create()
    {
        return view('operator/activityLog/create');
    }

    public function save(Request $request)
    {
        $result =  $this->assetsControlModel->store($request);

        // return view('operator/vehicle/create');
    }


}
