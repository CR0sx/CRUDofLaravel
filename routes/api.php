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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('student/all', [StudentController::class, 'getAllStudent']);
Route::get('student/id/{id}', [StudentController::class, 'getStudent']);
Route::get('student/search/name/', [StudentController::class, 'searchStudentName']);
Route::get('student/search/course/', [StudentController::class, 'searchStudentCourse']);
Route::post('student/add', [StudentController::class, 'createStudent']);
Route::put('student/edit/{id}', [StudentController::class, 'editStudent']);
Route::delete('student/delete/id/{id}', [StudentController::class, 'deleteStudent']);
