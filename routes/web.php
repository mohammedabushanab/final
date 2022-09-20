<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StroeController;
use App\Http\Controllers\SupplierController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('cms/')->middleware('guest:admin,doctor')->group(function(){
    route::get('{guard}/login' , [UserAuthController::class, 'showLogin'])->name('view.login');
    route::post('{guard}/login'  ,[UserAuthController::class, 'login']);
});
Route::prefix('cms/admin')->middleware('auth:admin,doctor')->group(function(){
    route::get('/logout' , [UserAuthController::class, 'logout'])->name('view.logout');

});

Route::prefix('cms/admin/')->middleware('auth:admin,doctor')->group(function(){
    Route::view('' , 'cms.parent');
    Route::view('temp' , 'cms.temp');

    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class , 'update'])->name('admins_update');

    Route::resource('doctors'  ,DoctorController::class );
    Route::post('doctors_update/{id}' , [DoctorController::class , 'update'])->name('doctors_update');

    Route::resource('categories' , CategoryController::class);
    Route::post('categories_update/{id}' , [CategoryController::class , 'update'])->name('categories_update');

    Route::resource('suppliers' , SupplierController::class);
    Route::post('suppliers_update/{id}' , [SupplierController::class , 'update'])->name('suppliers_update');

    Route::resource('sales' , SaleController::class);
    Route::post('sales_update/{id}' , [SaleController::class , 'update'])->name('sales_update');

    Route::resource('customers' , CustomerController::class);
    Route::post('customers_update/{id}' , [CustomerController::class , 'update'])->name('customers_update');


    Route::resource('medicines' , MedicineController::class);
    Route::post('medicines_update/{id}' , [MedicineController::class , 'update'])->name('medicines_update');
    Route::get('/index/medicines/{id}', [MedicineController::class, 'indexMedicine'])->name('indexMedicine');
    Route::get('/create/medicines/{id}', [MedicineController::class, 'createMedicine'])->name('createMedicine');



    Route::resource('abouts' , AboutController::class);
    Route::post('abouts_update/{id}' , [AboutController::class , 'update'])->name('abouts_update');
    Route::get('/create/abouts/{id}', [AboutController::class, 'indexAbout'])->name('indexAbout');
    Route::get('/index/abouts/{id}', [AboutController::class, 'createAbout'])->name('createAbout');



    Route::resource('stores' , StroeController::class);
    Route::post('stores_update/{id}' , [StroeController::class , 'update'])->name('stores_update');
    Route::get('/index/stores/{id}', [StroeController::class, 'indexStore'])->name('indexStore');
    Route::get('/create/stores/{id}', [StroeController::class, 'createStore'])->name('createStore');

    // Route::resource('stores' , StoreController::class);

    Route::resource('medicines' , MedicineController::class);
    Route::post('medicines_update/{id}' , [MedicineController::class , 'update'])->name('medicines_update');
});
