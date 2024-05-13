<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationManagementController;
use App\Http\Controllers\SalaryController;
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

Route::prefix('admin')->middleware(['is_admin'])->group(function () {
    Route::get('/', function () {
        return view('admins.admin_index');
    });
    include __DIR__ . '/route_groups/users/admin_user.php';
    Route::resource('salary', SalaryController::class);
    Route::get('/location_management', [LocationManagementController::class, 'index']);
});
Route::prefix('user')->middleware(['is_user'])->group(function () {
    include __DIR__ . '/route_groups/users/user.php';

    Route::get('/', function () {
        return view('users.user_index');
    });
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
