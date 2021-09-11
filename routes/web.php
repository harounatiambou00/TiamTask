<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/registration', [UserController::class, 'registration'])->name('registration');

Route::get('/loginvalidation', [UserController::class, 'loginvalidation']);

Route::get('/task/create/{id}', [TaskController::class, 'create'])->name('create');

Route::post('/task/store/{user_id}', [TaskController::class, 'store'])->name('store');


Route::resource('task', TaskController::class);
Route::resource('user', UserController::class);
