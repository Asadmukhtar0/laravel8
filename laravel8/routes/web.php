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
    Route::get('/badge','App\Http\Controllers\badgeController@index')->name('badge');
    Route::get('/teacher','App\Http\Controllers\teacherController@index')->name('teacher');
});

require __DIR__.'/auth.php';
