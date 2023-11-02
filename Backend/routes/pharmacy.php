<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pharmacy\PrescriptionController ;
use App\Http\Controllers\Pharmacy\MedicineController ;


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

Route::middleware(['auth:sanctum' , 'access-to-pharmacy-panel'])->prefix('/pharmacy/panel')->group(function (){

    Route::post('/get-prescription' , [PrescriptionController::class , 'getPrescription']);
    Route::post('/delivery/{paymentId}' , [PrescriptionController::class , 'delivery']);

    Route::prefix('/medicine')->group(function (){
        Route::post('/add' , [MedicineController::class , 'add']);
        Route::post('/update/{id}' , [MedicineController::class , 'update']);
        Route::post('/delete/{id}' , [MedicineController::class , 'delete']);
        Route::get('/get-all' , [MedicineController::class , 'getAll']);
        Route::get('/{id}' , [MedicineController::class , 'get']);
    });
});
