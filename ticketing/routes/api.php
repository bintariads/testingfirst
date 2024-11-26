<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function() {
    return response()->json([
        'message' => 'API Test'
    ]);
});

Route::middleware('auth:api')->get('/dashboard', function() {
    return response()->json([
        'message' => 'Dashboard'
    ]);
});
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);
