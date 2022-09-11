<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('cms/admin/')->group(function(){
    Route::view('' , 'cms.parent');
    Route::view('temp' , 'cms.temp');

    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class , 'update'])->name('admins_update');

    Route::resource('doctors'  ,DoctorController::class );
    Route::post('doctors_update/{id}' , [DoctorController::class , 'update'])->name('doctors_update');

    Route::resource('categories' , CategoryController::class);
    Route::post('categories_update/{id}' , [CategoryController::class , 'update'])->name('categories_update');
});