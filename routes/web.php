<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home',[HomeController::class,'index']);
/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
Route::middleware('auth')->prefix('admin')->group(function(){

    #ADMİN

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    #PRODUCT

    Route::prefix('product')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_products');
        Route::get('create',[\App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_add');
        Route::post('store',[\App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_create');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');
    });


    //product image gallery

    Route::prefix('image')->group(function (){
        Route::get('create/{id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    #SETTING

    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');




});


//Login
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('loginpage');
Route::get('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');




