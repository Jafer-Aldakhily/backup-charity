<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProjectController;

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

Route::get('admin/dash', function () {
    return 'hello';
});


// Admin users
Route::resource("/admin/users", AdminController::class);


// softDelete users

Route::get("/trash", [AdminController::class, "trashed"]);

Route::get("/restore/{id}", [AdminController::class, "restore"]);

// Route::get("/force-delete/{user}", [AdminController::class, "forceDelete"]);


// Admin projects
Route::resource("/admin/projects", ProjectController::class);
