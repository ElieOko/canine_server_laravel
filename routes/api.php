<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProfessionController;


Route::post('user/register', [UserController::class, 'register']);
Route::post('user/login', [UserController::class, 'login']);
Route::resource('profession', ProfessionController::class)->only(['index']);
Route::post('personnel/filter', [PersonnelController::class, 'filter']);

Route::middleware(['auth:sanctum'])->group(function () { 
    Route::resource('personnel', PersonnelController::class)->only(['index', 'store']);
})->missing(function (Request $request) {
    return response()->json([
        "message" => "url not found ".$request->fullUrl()
    ],404);
});
