<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\University;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function(Request $request) {
    return "hello";
});


// Universities 

Route::get('/university', [UniversityController::class, 'index']);
Route::post('/university', [UniversityController::class, 'store']);
Route::put('/university/{university}', [UniversityController::class, 'update']);
Route::delete('/university/{university}', [UniversityController::class, 'destroy']);


// College 

Route::get('/college', [CollegeController::class, 'index']);
Route::post('/college', [CollegeController::class, 'store']);
Route::put('/college/{college}', [CollegeController::class, 'update']);
Route::delete('/college/{college}', [CollegeController::class, 'destroy']);


// Student 

Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::put('/student/{student}', [StudentController::class, 'update']);
Route::delete('/student/{student}', [StudentController::class, 'destroy']);


Route::get('student/getUniByStudent', [StudentController::class, 'getUniByStudent']);

