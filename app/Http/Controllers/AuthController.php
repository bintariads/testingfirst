<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserActivityLog;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
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
    public function logout(Request $request)
    {
        try {
            // Hapus token yang digunakan
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'message' => 'Logout successful'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to logout, please try again.'
            ], 500);
        }
    }
}
