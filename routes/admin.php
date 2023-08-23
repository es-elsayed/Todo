<?php

use App\Http\Controllers\Admin\CompleteTaskController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PermissionRoleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TodoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CompleteTodoController;
use App\Http\Controllers\Admin\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group. Now create something great!
|
 */

Route::group(['middleware' => 'verified'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::post('permissions/{permission}/role', PermissionRoleController::class)->name('roles.permission')->middleware("can:roles-update");
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::put('todos/{todo}/complete', CompleteTodoController::class)->middleware('can:todos-update')->name('todos.complete');
    Route::resource('todos', TodoController::class);
    Route::put('tasks/{task}/complete', CompleteTaskController::class)->middleware('can:tasks-update')->name('tasks.complete');
    Route::resource('todos/{todo}/tasks', TaskController::class)->parameters([
        'tasks' => 'task', // Use 'task_id' instead of 'tasks' as the parameter name
        'todos' => 'todo', // Use 'todo_id' instead of 'todos' as the parameter name
    ]);
});
