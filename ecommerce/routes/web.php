<?php

use App\Http\Controllers\admin\AdminBrandController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminColorController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminSizeController;
use App\Http\Controllers\admin\AdminSubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as ProductFont;

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
//admin

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index']);

    Route::get('admin/list', [AdminController::class, 'index']);
    Route::get('admin/create', [AdminController::class, 'create']);
    Route::post('admin/create', [AdminController::class, 'store']);
    Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/delete/{id}', [AdminController::class, 'destroy']);
    //Category
    Route::get('admin/category', [AdminCategoryController::class, 'index']);
    Route::get('admin/category/create', [AdminCategoryController::class, 'create']);
    Route::post('admin/category/create', [AdminCategoryController::class, 'store']);
    Route::get('admin/category/edit/{id}', [AdminCategoryController::class, 'edit']);
    Route::post('admin/category/edit/{id}', [AdminCategoryController::class, 'update']);
    Route::get('admin/category/delete/{id}', [AdminCategoryController::class, 'destroy']);
    //SubCategory
    Route::get('admin/sub_category', [AdminSubCategoryController::class, 'index']);
    Route::get('admin/sub_category/create', [AdminSubCategoryController::class, 'create']);
    Route::post('admin/sub_category/create', [AdminSubCategoryController::class, 'store']);
    Route::get('admin/sub_category/edit/{id}', [AdminSubCategoryController::class, 'edit']);
    Route::post('admin/sub_category/edit/{id}', [AdminSubCategoryController::class, 'update']);
    Route::get('admin/sub_category/delete/{id}', [AdminSubCategoryController::class, 'destroy']);
    Route::post('admin/get_sub_cate', [AdminSubCategoryController::class, 'get_sub_cate']);
    //Brand
    Route::get('admin/brand', [AdminBrandController::class, 'index']);
    Route::get('admin/brand/create', [AdminBrandController::class, 'create']);
    Route::post('admin/brand/create', [AdminBrandController::class, 'store']);
    Route::get('admin/brand/edit/{id}', [AdminBrandController::class, 'edit']);
    Route::post('admin/brand/edit/{id}', [AdminBrandController::class, 'update']);
    Route::get('admin/brand/delete/{id}', [AdminBrandController::class, 'destroy']);
    //Color
    Route::get('admin/color', [AdminColorController::class, 'index']);
    Route::get('admin/color/create', [AdminColorController::class, 'create']);
    Route::post('admin/color/create', [AdminColorController::class, 'store']);
    Route::get('admin/color/edit/{id}', [AdminColorController::class, 'edit']);
    Route::post('admin/color/edit/{id}', [AdminColorController::class, 'update']);
    Route::get('admin/color/delete/{id}', [AdminColorController::class, 'destroy']);
    //Size
    Route::get('admin/size', [AdminSizeController::class, 'index']);
    Route::get('admin/size/create', [AdminSizeController::class, 'create']);
    Route::post('admin/size/create', [AdminSizeController::class, 'store']);
    Route::get('admin/size/edit/{id}', [AdminSizeController::class, 'edit']);
    Route::post('admin/size/edit/{id}', [AdminSizeController::class, 'update']);
    Route::get('admin/size/delete/{id}', [AdminSizeController::class, 'destroy']);
    //Product
    Route::get('admin/product', [AdminProductController::class, 'index']);
    Route::get('admin/product/create', [AdminProductController::class, 'create']);
    Route::post('admin/product/create', [AdminProductController::class, 'store']);
    Route::get('admin/product/edit/{id}', [AdminProductController::class, 'edit']);
    Route::post('admin/product/edit/{id}', [AdminProductController::class, 'update']);
    Route::get('admin/product/delete/{id}',[AdminProductController::class, 'destroy']);
    
    Route::get('admin/product/image_delete/{id}', [AdminProductController::class, 'image_delete']);
});
Route::get('admin', [AuthController::class, 'login_admin']);
Route::post('admin', [AuthController::class, 'auth_login_admin']);
Route::get('admin/logout', [AuthController::class, 'logout_admin']);

Route::get('index',[HomeController::class,'index']);

Route::post('auth_register',[AuthController::class,'auth_register']);
Route::post('auth_login',[AuthController::class,'auth_login']);
Route::get('activate/{id}',[AuthController::class,'activate_email']);
Route::get('logout', [AuthController::class, 'logout']);


//product

Route::get('{slug?}',[ProductFont::class,'index']);