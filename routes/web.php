<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StroeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Website\IndexController;


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

Route::get('/temp', function () {
    return view('website.thankyou');
});
Route::prefix('cms/')->middleware('guest:admin,doctor')->group(function () {
    route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
    route::post('{guard}/login', [UserAuthController::class, 'login']);
    route::get('{guard}/register', [RegisterController::class, 'register'])->name('view.register');
    Route::Post('{guard}/confirm', [RegisterController::class, 'storeRegister']);
});

Route::get('/', function () {
    return view('website.index');
});
// Route::prefix('cms/')->middleware('guest:admin,doctor')->group(function () {
//     route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
//     route::post('{guard}/login', [UserAuthController::class, 'login']);
// });
Route::prefix('cms/admin')->middleware('auth:admin,doctor')->group(function () {
    Route::get('profile/edit', [UserAuthController::class, 'Profile'])->name('cms.auth.profile');
    Route::post('profile/update', [UserAuthController::class, 'upProfile'])->name('cms.auth.upprofile');
    Route::get('profile/edit', [UserAuthController::class, 'editProfile'])->name('cms.auth.profile-edit');
    Route::post('profile/update', [UserAuthController::class, 'updateProfile'])->name('cms.auth.update-profile');
    Route::get('password/edit', [SettingController::class, 'editPassword'])->name('cms.admin.edit-password');
    Route::post('update/password', [SettingController::class, 'updatePassword'])->name('cms.auth.update-password');

    route::get('/logout', [UserAuthController::class, 'logout'])->name('view.logout');
});

Route::prefix('cms/admin/')->middleware('auth:admin,doctor')->group(function () {
    Route::view('', 'cms.parent');
    Route::view('temp', 'cms.temp');
    Route::view('', 'cms.home')->name('home');

    Route::resource('admins', AdminController::class);
    Route::post('admins_update/{id}', [AdminController::class, 'update'])->name('admins_update');
    Route::get('restore/{id}', [AdminController::class, 'restore'])->name('restore');
    Route::delete('forceDelete/{id}', [AdminController::class, 'forceDelete']);
    Route::get('indexDelete', [AdminController::class, 'indexDelete'])->name('indexDelete');

    Route::resource('doctors', DoctorController::class);
    Route::post('doctors_update/{id}', [DoctorController::class, 'update'])->name('doctors_update');

    Route::resource('categories', CategoryController::class);
    Route::post('categories_update/{id}', [CategoryController::class, 'update'])->name('categories_update');

    Route::resource('suppliers', SupplierController::class);
    Route::post('suppliers_update/{id}', [SupplierController::class, 'update'])->name('suppliers_update');

    Route::resource('sales', SaleController::class);
    Route::post('sales_update/{id}', [SaleController::class, 'update'])->name('sales_update');

    Route::resource('customers', CustomerController::class);
    Route::post('customers_update/{id}', [CustomerController::class, 'update'])->name('customers_update');

    Route::resource('roles', RoleController::class);
    Route::post('roles_update/{id}', [RoleController::class, 'update'])->name('roles_update');

    Route::resource('permissions', PermissionController::class);
    Route::post('permissions_update/{id}', [PermissionController::class, 'update'])->name('permissions_update');

    Route::resource('roles.permissions', RolePermissionController::class);


    Route::resource('medicines', MedicineController::class);
    Route::post('medicines_update/{id}', [MedicineController::class, 'update'])->name('medicines_update');
    Route::get('/index/medicines/{id}', [MedicineController::class, 'indexMedicine'])->name('indexMedicine');
    Route::get('/create/medicines/{id}', [MedicineController::class, 'createMedicine'])->name('createMedicine');



    Route::resource('abouts', AboutController::class);
    Route::post('abouts_update/{id}', [AboutController::class, 'update'])->name('abouts_update');
    Route::get('/create/abouts/{id}', [AboutController::class, 'indexAbout'])->name('indexAbout');
    Route::get('/index/abouts/{id}', [AboutController::class, 'createAbout'])->name('createAbout');



    Route::resource('stores', StroeController::class);
    Route::post('stores_update/{id}', [StroeController::class, 'update'])->name('stores_update');
    Route::get('/index/stores/{id}', [StroeController::class, 'indexStore'])->name('indexStore');
    Route::get('/create/stores/{id}', [StroeController::class, 'createStore'])->name('createStore');

    // Route::resource('stores' , StoreController::class);



    Route::resource('medicines', MedicineController::class);
    Route::post('medicines_update/{id}', [MedicineController::class, 'update'])->name('medicines_update');
});

Route::prefix('/home')->group(function () {


    Route::get('index', [IndexController::class, 'index'])->name('website.index');
    Route::get('aboutUs', [IndexController::class, 'about'])->name('website.about');
    Route::get('checkout', [IndexController::class, 'checkout'])->name('website.checkout');
    Route::get('contact', [IndexController::class, 'contact'])->name('website.contact');
    Route::post('contact', [IndexController::class, 'storeContact']);

    Route::get('shopSingle', [IndexController::class, 'shopSingle'])->name('website.shopsingle');
    Route::get('shop', [IndexController::class, 'shop'])->name('website.shop');
    Route::get('thankyou', [IndexController::class, 'thank'])->name('website.thankyou');
    Route::get('cart', [IndexController::class, 'cart'])->name('website.cart');
});
// });