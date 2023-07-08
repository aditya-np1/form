<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_datas;
use App\Http\Controllers\show_list;
use App\Http\Controllers\dbOPration;
use App\Http\Controllers\students;
use App\Http\Controllers\employee;

// use Illuminate\Support\Facades\DB;

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

Route::view('login','login');
Route::view('edit','edit');
Route::view('/','showlist');
Route::view('/dbopration','queryBuilder');
// Route::POST("login",[login::class,'getdata']);
Route::POST("login",[login_datas::class,'addData']);
Route::POST('/response',[show_list::class,'editData']);

Route::get('/',[show_list::class,'getData']);
Route::get('delete/{id}',[show_list::class,'dlt']);
Route::get('view/{id}',[show_list::class,'viewData']);
Route::get('edit/{id}',[show_list::class,'showData']);
Route::get('/dbopration',[dbOpration::class,'dbOprations']);
Route::get('/students',[students::class,'showdata']);
Route::get('/employee',[employee::class,'show']);;
