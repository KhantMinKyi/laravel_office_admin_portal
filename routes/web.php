<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin_user_list', function () {
    return view('users.admin_user_list');
});
Route::get('/normal_user_list', function () {
    return view('users.normal_user_list');
});
Route::get('/operation_user_list', function () {
    return view('users.operation_user_list');
});
