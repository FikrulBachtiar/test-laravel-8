<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;

Route::get('/', function () { return redirect('/home'); });

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user/list', [HomeController::class, 'get_user'])->name('user.list');
Route::post('/user/add', [HomeController::class, 'user_add'])->name('user.add');
Route::get('/user/{id}', [HomeController::class, 'get_user_by_id'])->name('user.getByID');
Route::delete('/user/{id}', [HomeController::class, 'delete_user'])->name('user.delete');
Route::delete('/family/{id}', [HomeController::class, 'delete_family'])->name('family.delete');
Route::put('/user/update', [HomeController::class, 'user_update'])->name('user.update');
