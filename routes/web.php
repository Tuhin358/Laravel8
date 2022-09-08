<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/crud',[StudentController::class,'index']);
Route::post('/student/store',[StudentController::class,'store']);

// edit
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
// update

Route::post('/student/update/{id}',[StudentController::class,'update']);

// delete

Route::get('/student/delete/{id}',[StudentController::class,'delete']);


