<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\InsuranceController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\QuestionController;
use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Admin\ExamTypeController ;
use \App\Http\Controllers\Admin\UserController ;
use \App\Http\Controllers\Admin\MedicineController ;


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

Route::middleware(['auth:sanctum' , 'access-to-admin-panel'])->prefix('/admin/panel')->group(function (){

    Route::prefix('/city')->group(function (){
        Route::post('/add' , [CityController::class , 'add']);
        Route::post('/delete/{id}' , [CityController::class , 'delete']);
        Route::get('/get' , [CityController::class , 'get']);
    });

    Route::prefix('/province')->group(function (){
        Route::post('/add' , [ProvinceController::class , 'add']);
        Route::post('/delete/{id}' , [ProvinceController::class , 'delete']);
        Route::get('/get' , [ProvinceController::class , 'get']);
    });

    Route::prefix('/insurance')->group(function (){
        Route::post('/add' , [InsuranceController::class , 'add']);
        Route::post('/delete/{id}' , [InsuranceController::class , 'delete']);
        Route::get('/get' , [InsuranceController::class , 'get']);
    });

    Route::prefix('/disease')->group(function (){
        Route::post('/add' , [DiseaseController::class , 'add']);
        Route::post('/delete/{id}' , [DiseaseController::class , 'delete']);
        Route::get('/get' , [DiseaseController::class , 'get']);
    });

//    Route::prefix('/user-disease')->group(function (){
//        Route::post('/add' , [UserInsuranceController::class , 'add']);
//        Route::post('/delete/{id}' , [UserInsuranceController::class , 'delete']);
//        Route::get('/get' , [UserInsuranceController::class , 'get']);
//    });

    Route::prefix('/question')->group(function (){
        Route::post('/add' , [QuestionController::class , 'add']);
        Route::post('/update/{id}' , [QuestionController::class , 'update']);
        Route::post('/delete/{id}' , [QuestionController::class , 'delete']);

        Route::get('/get-all' , [QuestionController::class , 'getAll']);
        Route::get('/{id}' , [QuestionController::class , 'get']);
    });

    Route::prefix('/options')->group(function (){
        Route::post('/add' , [OptionController::class , 'add']);
        Route::post('/update/{id}' , [OptionController::class , 'update']);
        Route::post('/delete/{id}' , [OptionController::class , 'delete']);
    });

    Route::prefix('/exam-type')->group(function (){
        Route::post('/add' , [ExamTypeController::class , 'add']);
        Route::post('/delete/{id}' , [ExamTypeController::class , 'delete']);
    });


    Route::prefix('/users')->group(function (){
        Route::post('/change-role/{id}' , [UserController::class , 'changeRole']);
        Route::post('/delete/{id}' , [UserController::class , 'delete']);
        Route::get('/get-all' , [UserController::class , 'getAll']);
        Route::get('/{id}' , [UserController::class , 'get']);
    });

    Route::prefix('/medicine')->group(function (){
        Route::post('/add' , [MedicineController::class , 'add']);
        Route::post('/update/{id}' , [MedicineController::class , 'update']);
        Route::post('/delete/{id}' , [MedicineController::class , 'delete']);
        Route::get('/get-all' , [MedicineController::class , 'getAll']);
        Route::get('/{id}' , [MedicineController::class , 'get']);
    });

});
