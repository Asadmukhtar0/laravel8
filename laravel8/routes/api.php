<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/users','App\Http\Controllers\api\usersController@users');
Route::get('/teachers','App\Http\Controllers\api\teacherController@teachers');
Route::post('/add/teachers','App\Http\Controllers\api\teacherController@add');
Route::get('/teacher/{id}','App\Http\Controllers\api\teacherController@teacher');
