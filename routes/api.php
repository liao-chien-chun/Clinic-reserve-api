<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\TreatmentItemController;
use App\Http\Controllers\Api\v1\DoctorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function() {
    // 取得所有治療項目
    Route::get('/treatment-items', [TreatmentItemController::class, 'index']);

    // 取得所有醫生與醫生治療項目
    Route::get('/doctor-items', [DoctorController::class, 'showDoctorItems']);
});