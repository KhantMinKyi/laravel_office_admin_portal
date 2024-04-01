<?php

use App\Http\Controllers\LocationManagementController;
use App\Http\Controllers\UserController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admins.admin_index');
    });
    // Route::get('/admin_user_list', function () {
    //     return view('admins.users.admin_user_list');
    // });
    Route::get('/admin_user_list',[UserController::class,'adminUserList']);
    Route::get('/normal_user_list', function () {
        return view('admins.users.normal_user_list');
    });
    Route::get('/operation_user_list', function () {
        return view('admins.users.operation_user_list');
    });
    Route::get('/user_list', function () {
        return view('admins.users.index');
    });
    Route::get('/location_management', [LocationManagementController::class,'index']);
});
