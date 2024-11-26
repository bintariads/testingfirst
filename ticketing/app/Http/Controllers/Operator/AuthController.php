<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private $model = null;

    // public function __construct()
    // {
    //     $this->model = new MahasiswaAuthModel;
    // }
    public function index()
    {
        return view('operator.auth.login');
    }

    // public function login_attempt(Request $request)
    // {
    //     $data = $this->model->get_mahasiswa($request);
    //     if ($data == NULL) {
    //         Session::flash('error', "Data yang Anda masukan tidak cocok. Pastikan username dan password Anda benar.");
    //         return redirect('/mahasiswa-login');
    //     }
    //     Session::flush();
    //     $this->set_session($data);
    //     return redirect('/mahasiswa');
    // }

    // public function set_session($data)
    // {
    //     Session::put([
    //         'id_user_mahasiswa'   => $data->id_user_mahasiswa,
    //         'id_registrasi_mahasiswa'   => $data->id_registrasi_mahasiswa,
    //         'id_mahasiswa'        => $data->id,
    //         'id_prodi'            => $data->id_prodi,
    //         'id_angkatan'         => $data->id_angkatan,
    //         'nama_mahasiswa'      => $data->nama_mahasiswa,
    //         'email'               => $data->email,
    //         'type'                => 1
    //     ]);

    //     return TRUE;
    // }

    // public function logout_mahasiswa()
    // {
    //     Session::flush();
    //     return redirect('/mahasiswa-login');
    // }
}
