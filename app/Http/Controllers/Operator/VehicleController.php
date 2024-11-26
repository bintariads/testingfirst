<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator\VehicleModel;
use Illuminate\Http\Request;
class VehicleController extends Controller
{
    private $vehicleModel = null;

    public function __construct()
    {
        $this->vehicleModel = new VehicleModel();
    }
    public function index()
    {
        return view('operator/vehicle/index');
    }

    public function create()
    {
        return view('operator/vehicle/create');
    }

    public function save(Request $request)
    {
        return response()->json(['status' => 200, 'message'=>'success']);
         $this->vehicleModel->store($request);
        // return view('operator/vehicle/create');
    }


}
