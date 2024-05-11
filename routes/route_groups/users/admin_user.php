<?php

use App\Http\Controllers\UserController;

Route::get('/admin_user_list', [UserController::class, 'adminUserList']);
// Route::get('/admin_user_list/get-admin_user-detail', function(){
//         return view('admins.partial_view.users.admin_user.view_user', ['user_id' => $_GET['user_id']]);
//     });
Route::get('/admin_user_list/get-admin_user-detail', [UserController::class, 'viewAdminUserDetail']);
Route::post('/admin_user_list/store-admin_user', [UserController::class, 'storeAdminUser']);



Route::get('/operation_user_list', [UserController::class, 'operationUserList']);

Route::get('/operation_user_list/get-operation_user-detail', [UserController::class, 'viewOperationUserDetail']);
Route::post('/operation_user_list/store-operation_user', [UserController::class, 'storeOperationUser']);


Route::get('/normal_user_list', [UserController::class, 'normalUserList']);

Route::get('/normal_user_list/get-normal_user-detail', [UserController::class, 'viewNormalUserDetail']);
Route::post('/normal_user_list/store-normal_user', [UserController::class, 'storeNormalUser']);
