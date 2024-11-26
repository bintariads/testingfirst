<?php

use App\Http\Controllers\BEMobile\AuthController as BEMobileAuthController;
use App\Http\Controllers\Operator\ActivityLogController;
use App\Http\Controllers\Operator\AssetsControlController;
use App\Http\Controllers\Operator\AuthController;
use App\Http\Controllers\Operator\DashboardController;
use App\Http\Controllers\Operator\NotificationController;
use App\Http\Controllers\Operator\ReportController;
use App\Http\Controllers\Operator\TicketController;
use App\Http\Controllers\Operator\UsersController;

use App\Http\Controllers\Operator\VehicleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AssignderController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\DashParser;


Route::get('/', [BEMobileAuthController::class, 'index']);
Route::post('/login', [BEMobileAuthController::class, 'login']);

Route::middleware('auth')->post('/logout', [BEMobileAuthController::class, 'logout']);
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index']);
Route::group(['prefix' => ('/operator')], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UsersController::class, 'index']);
        Route::get('/create',[UsersController::class, 'create']);
        Route::get('/getdata',[UsersController::class, 'getdata']);
        Route::post('/save',[UsersController::class, 'savedata']);
        Route::post('/delete',[UsersController::class, 'delete']);
    });

    Route::group(['prefix' => 'ticket'], function () {
        Route::get('/', [TicketController::class, 'index']);
        Route::get('/create',[TicketController::class, 'create']);
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('/', [ReportController::class, 'index']);
        Route::get('/create',[ReportController::class, 'create']);
    });

    Route::group(['prefix' => 'notification'], function () {
        Route::get('/', [NotificationController::class, 'index']);
        Route::get('/create',[NotificationController::class, 'create']);
    });

    Route::group(['prefix' => 'vehicle'], function () {
        Route::get('/', [VehicleController::class, 'index']);
        Route::get('/create',[VehicleController::class, 'create']);
        Route::post('/save',[VehicleController::class, 'save']);
    });

});
Route::group(['prefix' => 'asset-management'], function () {
    Route::group(['prefix' => 'asset-control'], function () {
        Route::get('/', [AssetsControlController::class, 'index']);
        Route::get('/create',[AssetsControlController::class, 'create']);
        Route::post('/save',[AssetsControlController::class, 'save']);
    });
    Route::group(['prefix' => 'activity-log'], function () {
        Route::get('/', [ActivityLogController::class, 'index']);
        Route::get('/create',[ActivityLogController::class, 'create']);
        Route::post('/save',[ActivityLogController::class, 'save']);
    });

});

Route::group(['prefix' => ('/profil')], function () {
    Route::get('/', [profilController::class, 'index']);
    Route::get('/create', [profilController::class, 'create']);
});

Route::group(['prefix' => ('/setup')], function () {
    Route::group(['prefix' => ('/role')], function () {
        Route::get('/', [RoleController::class, 'index']);
        Route::get('/create', [RoleController::class, 'create']);
    });
    Route::group(['prefix' => ('/terminal')], function () {
        Route::get('/', [TerminalController::class, 'index']);
        Route::get('/create', [TerminalController::class, 'create']);
    });
    Route::group(['prefix' => ('/status')], function () {
        Route::get('/', [StatusController::class, 'index']);
        Route::get('/create', [StatusController::class, 'create']);
    });
    Route::group(['prefix' => ('/priority')], function () {
        Route::get('/', [PriorityController::class, 'index']);
        Route::get('/create', [PriorityController::class, 'create']);
    });
    Route::group(['prefix' => ('/language')], function () {
        Route::get('/', [LanguageController::class, 'index']);
        Route::get('/create', [LanguageController::class, 'create']);
    });
    Route::group(['prefix' => ('/category')], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/create', [CategoryController::class, 'create']);
    });
    Route::group(['prefix' => ('/assignder')], function () {
        Route::get('/', [AssignderController::class, 'index']);
        Route::get('/create', [AssignderController::class, 'create']);
    });
    Route::group(['prefix' => ('/plat')], function () {
        Route::get('/', [PlatController::class, 'index']);
    });
});
Route::group(['prefix' => ('/mobile')], function () {
    Route::get('/', [BEMobileAuthController::class, 'index']);
    Route::post('/login', [BEMobileAuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [BEMobileAuthController::class, 'logout']);
});

