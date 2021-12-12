<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [StudentsController::class, 'index']);
Route::get('/edit/{id}', [StudentsController::class, 'edit']);
Route::get('/show/{id}',[StudentsController::class ,'show']);
Route::get('/create',[StudentsController::class ,'create']);
Route::post('/store',[StudentsController::class, 'store']);
Route::get('/update/{id}',[StudentsController::class, 'update']);
Route::get('/delete/{id}',[StudentsController::class, 'destroy']);

