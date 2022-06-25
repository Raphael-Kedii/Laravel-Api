<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


//Get all students
Route::get('students',[StudentController::class,'getStudent']);

//Get specific student details
Route::get('student/{id}',[StudentController::class,'getStudentById']);

//Add new student
Route::post('addStudent',[StudentController::class,'addStudent']);

//Update student details
Route::put('updateStudent/{id}',[StudentController::class,'updateStudent']);

//Delete student
Route::delete('deleteStudent/{id}',[StudentController::class,'deleteStudent']);
