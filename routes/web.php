<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

// admin route 
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin-profile', [AdminController::class, 'admin_profile'])->name('admin-profile');
Route::post('/profileaction', [AdminController::class, 'profileaction']);


Route::get('/logout',[AdminController::class,'logout'])->name('logout');

// user route
