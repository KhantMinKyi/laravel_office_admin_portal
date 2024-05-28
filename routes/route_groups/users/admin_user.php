<?php

use App\Http\Controllers\UserController;

Route::get('/admin_user_list', [UserController::class, 'adminUserList']);
Route::get('/admin_user_list/get-admin_user-detail', [UserController::class, 'viewAdminUserDetail']);
Route::get('/admin_user_list/edit-admin_user-detail/{id}', [UserController::class, 'editAdminUserDetail']);
Route::post('/admin_user_list/store-admin_user', [UserController::class, 'storeUser']);



Route::get('/operation_user_list', [UserController::class, 'operationUserList']);
Route::get('/operation_user_list/get-operation_user-detail', [UserController::class, 'viewOperationUserDetail']);
Route::get('/operation_user_list/edit-operation_user-detail/{id}', [UserController::class, 'editOperationUserDetail']);
Route::post('/operation_user_list/store-operation_user', [UserController::class, 'storeUser']);


Route::get('/normal_user_list', [UserController::class, 'normalUserList']);
Route::get('/normal_user_list/get-normal_user-detail', [UserController::class, 'viewNormalUserDetail']);
Route::get('/normal_user_list/edit-normal_user-detail/{id}', [UserController::class, 'editNormalUserDetail']);
Route::post('/normal_user_list/store-normal_user', [UserController::class, 'storeUser']);

Route::get('/user_list', function () {
    return view('admins.users.index');
});
