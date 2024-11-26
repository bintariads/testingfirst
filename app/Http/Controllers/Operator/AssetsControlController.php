<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator\AssetsControlModel;
use App\Models\Operator\VehicleModel;
use Illuminate\Http\Request;
class AssetsControlController extends Controller
{
    private $assetsControlModel = null;

    public function __construct()
    {
        $this->assetsControlModel = new AssetsControlModel();
    }
    public function index()
    {
        $data['title'] = "Asset Control";
        return view('operator/assetsControl/index', $data);
    }

    public function create()
    {
        $data['title'] = "Assignder";
        return view('operator/assetsControl/create', $data);
    }

    public function save(Request $request)
    {
        $result =  $this->assetsControlModel->store($request);

        // return view('operator/vehicle/create');
    }


}
