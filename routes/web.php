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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Add Students/create
Route::get('students/create',[App\Http\Controllers\StudentsController::class, 'create'])->name('create');

// add student list 
Route::get('students/list',[App\Http\Controllers\StudentsController::class, 'list'])->name('list');

// save students sa database 
Route::post('students/store',[App\Http\Controllers\StudentsController::class, 'store'])->name('store');