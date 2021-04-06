<?php

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
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-email', 'JobController@processQueue')->middleware('auth');
Route::group( ['prefix' => 'admin'],function () {
    Route::match(['get', 'post'], '/login', 'Auth\AuthController@login')->name('login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
