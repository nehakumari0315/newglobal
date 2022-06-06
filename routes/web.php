<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BusinessesController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SpecializationController;
use App\Http\Controllers\admin\ProfileController;


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

Route::get('dashboard',[IndexController::class,'index']);
Route::get('admin/login',[LoginController::class,'index']);
Route::get('admin/User',[UserController::class,'index']);
Route::get('admin/Banner',[BannerController::class,'index']);
Route::get('admin/Businesses',[BusinessesController::class,'index']);
Route::get('admin/Category',[CategoryController::class,'index']);
Route::get('admin/Specialization',[SpecializationController::class,'index']);
Route::get('admin/Profile',[ProfileController::class,'index']);

