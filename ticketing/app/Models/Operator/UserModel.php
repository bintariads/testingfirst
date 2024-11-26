<?php


namespace App\Models\Operator;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserModel extends Model
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

            if ($request->hasFile('file')) {
                $request->validate([
                    'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = 'assets/img/users/' . $filename;
                $file->move(public_path('assets/img/users'), $filePath);

                $result = DB::table('users')
                ->insertGetId([
                    'password'          => bcrypt($request->password),
                    'name' => $request->name,
                    'email' => $request->email,
                    'profilPic'=> $filename,
                    'status' => 1,
                    'role' => $request->role,
                    'createdAt' => date('y-m-d'),
                    'updatedAt' => date('y-m-d'),
                ]);

                DB::table('operatorsite')
                    ->insert([
                        'userID' => $result,
                        'terminalID' => $request->terminal,
                        'status' => 1
                    ]);
                    return TRUE;
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
