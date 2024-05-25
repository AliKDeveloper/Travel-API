<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\LogoutController;
use App\Http\Controllers\Api\V1\TourController;
use App\Http\Controllers\Api\V1\TravelController;
use App\Http\Controllers\Api\V1\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('travel', [TravelController::class, 'index']);
Route::get('travel/{travel:slug}/tours', [TourController::class, 'index']);

Route::prefix('admin')->middleware(['auth:sanctum'])->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::post('travel', [Admin\TravelController::class, 'store']);
        Route::delete('travel/{travel}', [Admin\TravelController::class, 'delete']);

        Route::post('travel/{travel}/tours', [Admin\TourController::class, 'store']);
    });

    Route::put('travel/{travel}', [Admin\TravelController::class, 'update']);
    Route::delete('logout', LogoutController::class);
});

Route::post('login', LoginController::class)->name('login');
