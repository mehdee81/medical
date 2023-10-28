<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\AuthController ;
use \App\Http\Controllers\Admin\CityController ;
use \App\Http\Controllers\Admin\ProvinceController ;
use App\Http\Controllers\ExamController;


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

Route::post('/register', [AuthController::class  , 'register']);

Route::post('/login', [AuthController::class  , 'login']);

Route::get('/cities' , [CityController::class , 'get'] );
Route::get('/provinces' , [ProvinceController::class , 'get'] );



Route::prefix('/exam')->group(function () {
    Route::post('/create', [ExamController::class, 'create']);
    Route::post('/save-answer/{exam}', [ExamController::class, 'saveAnswer']);
    Route::post('/get-all', [ExamController::class, 'getAll']);
});
