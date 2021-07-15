<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\IAmAliveController;
use App\Http\Controllers\Api\MeditationController;
use App\Http\Controllers\Api\PlayController;
use App\Http\Controllers\Api\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('i-am-alive', [IAmAliveController::class, 'handle']);
Route::post('auth/register', [AuthController::class, 'register']);

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Api\AuthController@login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/play/', [PlayController::class, 'play']);
    Route::post('/play/history', [PlayController::class, 'history']);
    Route::post('/play/calendar', [PlayController::class, 'calendar']);

    Route::post('/meditations', [MeditationController::class, 'list']);

    Route::post('/report/yearly', [ReportController::class, 'yearly']);
    Route::post('/report/monthly', [ReportController::class, 'monthly']);

    Route::get('/me', function (Request $request) {
        return auth()->user();
    });

    Route::post('auth/logout', [AuthController::class, 'logout']);
});
