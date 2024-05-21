<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LocationManagementController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TownshipController;
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

Route::prefix('admin')->middleware(['is_admin'])->group(function () {
    Route::get('/', function () {
        return view('admins.admin_index');
    });
    include __DIR__ . '/route_groups/users/admin_user.php';
    Route::resource('city', CityController::class);
    Route::resource('township', TownshipController::class);
    Route::resource('branch', BranchController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('salary', SalaryController::class);
    Route::resource('attendance', AttendanceController::class);
    Route::get('/location_management', [LocationManagementController::class, 'index'])->name('location.index');
    Route::get('/admin_profile/{id}', [UserController::class, 'userProfile'])->name('users.admin_profile');
    Route::get('/admin_salary_list', [SalaryController::class, 'userSalaryList'])->name('users.admin_salary_list');
});
Route::prefix('user')->middleware(['is_user'])->group(function () {
    include __DIR__ . '/route_groups/users/user.php';
    Route::get('/', function () {
        return view('users.user_index');
    });
    Route::resource('user_salary', SalaryController::class);
    Route::get('/user_profile/{id}', [UserController::class, 'userProfile'])->name('users.user_profile');
    Route::get('/user_salary_list', [SalaryController::class, 'userSalaryList'])->name('users.user_salary_list');
    Route::get('/salary_detail/{id}', [SalaryController::class, 'salaryDetail'])->name('users.salary_detail');
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
