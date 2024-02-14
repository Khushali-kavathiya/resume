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

Route::view('/personal_details','personal_details');
Route::view("/education",'education');
Route::view("/projects",'projects');
Route::view("/skill",'skill');
Route::view("/work_experience",'work_experience');