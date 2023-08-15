<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'dashboard'])->name('dashboard');

// Task Routes
Route::get('add-task', [TaskController::class, 'addTask'])->name('addTask');
Route::post('storeTask', [TaskController::class, 'storeTask'])->name('storeTask');
Route::get('edit-task/{id}', [TaskController::class, 'editTask'])->name('editTask');
Route::post('updateTask', [TaskController::class, 'updateTask'])->name('updateTask');
Route::get('deleteTask/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');
