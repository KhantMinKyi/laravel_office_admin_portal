<?php
use App\Http\Controllers\UserController;
Route::get('/admin_user_list',[UserController::class,'adminUserList']);
// Route::get('/admin_user_list/get-admin_user-detail', function(){
//         return view('admins.partial_view.users.admin_user.view_user', ['user_id' => $_GET['user_id']]);
//     });
Route::get('/admin_user_list/get-admin_user-detail', [UserController::class,'viewAdminUserDetail']);
