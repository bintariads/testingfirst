<?php

namespace App\Models\BEMobileModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AuthModel extends Model
{
    public function get_user($request)
    {
        $result = DB::table('user')
                    ->join('tb_dosen','tb_user_dosen.id_dosen','tb_dosen.id')
                    ->select('tb_user_dosen.id_user_dosen','tb_dosen.*')
                    ->where([
                        'tb_user_dosen.username'    =>$request->username,
                        'tb_user_dosen.password'    =>md5($request->password),
                        'tb_user_dosen.soft_delete' =>0,
                        'tb_user_dosen.status'      =>0
                    ])
                    ->first();
        return $result;
    }
}
