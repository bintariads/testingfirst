<?php

namespace App\Http\Controllers\BEMobile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\UserActivityLog;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function index()
    {
        return view('operator.auth.login');
    }

    public function login(Request $request)
    {
            $credentials = $request->only('email', 'password');

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'Invalid credentials'], 401);
                }

                // Dapatkan pengguna yang berhasil login
                $user = Auth::user();

                // Simpan log aktivitas login
                UserActivityLog::create([
                    'userID' => $user->userID,
                    'action' => 'login',
                    'ipAddress' => $request->ip(),
                    'userAgent' => $request->header('User-Agent'),
                ]);

                return response()->json([
                    'token' => $token,
                    'message' => 'Login successful',
                    'data' => $user,
                ]);
            } catch (JWTException $e) {
                return response()->json(['error' => 'Could not create token'], 500);
            }
    }


    // public function logout(Request $request)
    // {
    //     // Hapus token pengguna yang login
    //     $request->user()->currentAccessToken()->delete();

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Logout successful'
    //     ]);
    // }

//     public function logout(Request $request)
// {

//     // try {
//         // Invalidate the token
//         JWTAuth::invalidate(JWTAuth::getToken());

//         // Optionally, you can log the logout action
//         $user = Auth::user();
//         UserActivityLog::create([
//             'userID' => $user->userID,
//             'action' => 'logout',
//             'ipAddress' => $request->ip(),
//             'userAgent' => $request->header('User-Agent'),
//         ]);

//         return response()->json(['message' => 'Logout successful']);
//     // } catch (JWTException $e) {
//     //     return response()->json(['error' => 'Could not log out'], 500);
//     // }
// }

public function logout(Request $request)
{
    // Retrieve the token from the request
    $token = $request->bearerToken();

dd($token);
    if (!$token) {
        return response()->json(['error' => 'Token is required'], 401);
    }

    // try {
        // Invalidate the token
        JWTAuth::invalidate($token);

        // Optionally, log the logout action
        $user = Auth::user();
        UserActivityLog::create([
            'userID' => $user->userID,
            'action' => 'logout',
            'ipAddress' => $request->ip(),
            'userAgent' => $request->header('User-Agent'),
        ]);

    //     return response()->json(['message' => 'Logout successful']);
    // } catch (JWTException $e) {
    //     return response()->json(['error' => 'Could not log out'], 500);
    // }
}
}
