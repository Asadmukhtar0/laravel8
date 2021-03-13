<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/student','App\Http\Controllers\studentController@index')->name('add.student');
    Route::post('/student','App\Http\Controllers\studentController@index')->name('student.store');
    Route::get('/badge','App\Http\Controllers\badgeController@index')->name('badge');
    Route::get('/badge/students/{id}','App\Http\Controllers\badgeController@search')->name('badge.search');
    Route::post('/badge','App\Http\Controllers\badgeController@store')->name('badge.store');
    Route::get('/teacher','App\Http\Controllers\teacherController@index')->name('teacher');
    Route::post('/teacher','App\Http\Controllers\teacherController@store')->name('teacher.store');
});
Route::get('send-email','App\Http\Controllers\mailController@html_email');
require __DIR__.'/auth.php';
