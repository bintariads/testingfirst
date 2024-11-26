<?php


namespace App\Models\Operator;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VehicleModel extends Model
{
    public function getData()
    {
        $result = DB::table('users')
            ->join('role', 'users.role', 'role.roleID')
            ->join('operatorsite', 'users.userID', 'operatorsite.userID')
            ->join('terminal', 'operatorsite.terminalID', 'terminal.terminalID')
            ->select(
                'users.userID',
                'users.name',
                'users.email',
                'terminal.terminalName',
                'role.roleName',
                'users.status'
            )
            ->get();
        return $result;
    }

    public function store($request)
    {
        dd($request->file('frontCamera'), $request->file('leftCamera'));
        try {

            $fileDoc = $request->file('document');
            $filenameDOc = time() . '_' . $fileDoc->getClientOriginalName();
            $filePath = 'assets/img/vehicle/' . $filenameDOc;
            $fileDoc->move(public_path('assets/img/vehicle'), $filePath);

            $filenameFC= "";
            $filenameLC= "";
            $filenameRC= "";
            $filenameDC= "";

            if ($request->hasFile('frontCamera')) {
                $fileFC = $request->file('frontCamera');
                $filenameFC = time() . '_FC_' . $fileFC->getClientOriginalName();
                $filePathFC = 'assets/img/vehicle/' . $filenameFC;
                $fileFC->move(public_path('assets/img/vehicle'), $filePathFC);
            }

            if ($request->hasFile('leftCamera')) {
                $fileLC = $request->file('leftCamera');
                $filenameLC = time() . '_LC_' . $fileLC->getClientOriginalName();
                $filePathLC = 'assets/img/vehicle/' . $filenameLC;
                $fileLC->move(public_path('assets/img/vehicle'), $filePathLC);
            }

            if ($request->hasFile('rightCamera')) {
                $fileRC = $request->file('rightCamera');
                $filenameRC = time() . '_RC_' . $fileRC->getClientOriginalName();
                $filePathRC = 'assets/img/vehicle/' . $filenameRC;
                $fileRC->move(public_path('assets/img/vehicle'), $filePathRC);
            }

            if ($request->hasFile('driverCamera')) {
                $fileDC = $request->file('driverCamera');
                $filenameDC = time() . '_DC_' . $fileDC->getClientOriginalName();
                $filePathDC = 'assets/img/vehicle/' . $filenameDC;
                $fileDC->move(public_path('assets/img/vehicle'), $filePathDC);
            }

        } catch (\Throwable $th) {
            return FALSE;
        }
    }

    public function deleteData($request)
    {
        try {
            DB::table('users')->where('userID', $request->id)->delete();
            return TRUE;
        } catch (\Throwable $th) {
            return FALSE;
        }
    }



}
