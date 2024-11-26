<?php


namespace App\Models\Operator;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AssetsControlModel extends Model
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
        try {
            if ($request->hasFile('document') && $request->hasFile('image')) {

                $fileDoc = $request->file('document');
                $filenameDOc = time() . '_' . $fileDoc->getClientOriginalName();
                $filePath = 'assets/img/vehicle/' . $filenameDOc;
                $fileDoc->move(public_path('assets/img/vehicle'), $filePath);

                $fileImg = $request->file('image');
                $filenameImg = time() . '_' . $fileImg->getClientOriginalName();
                $filePathImg = 'assets/img/vehicle/' . $filenameImg;
                $fileImg->move(public_path('assets/img/vehicle'), $filePathImg);

                // $result = DB::table('users')
                // ->insertGetId([
                //     'password'          => bcrypt($request->password),
                //     'name' => $request->name,
                //     'email' => $request->email,
                //     'profilPic'=> $filename,
                //     'status' => 1,
                //     'role' => $request->role,
                //     'createdAt' => date('y-m-d'),
                //     'updatedAt' => date('y-m-d'),
                // ]);

                // DB::table('operatorsite')
                //     ->insert([
                //         'userID' => $result,
                //         'terminalID' => $request->terminal,
                //         'status' => 1
                //     ]);
                //     return TRUE;
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
