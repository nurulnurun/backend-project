<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\BrandController;


use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Frontend\CustomerController;


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







// All Website Routes

Route::get('/', [WebController::class, 'webmaster'])->name('web.home');

Route::get('/customer/registration/form', [CustomerController::class, 'customer_registration_form'])->name('customer.registration');








// All Admin Panel Routes

Route::group(['prefix' =>'admin'], function(){

Route::get('/login', [UserController::class, 'loginForm'])->name('admin.Login');
Route::post('/login-from-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [HomeController::class, 'master'])->name('admin.master');

    Route::get('/users', [UserController::class, 'user_list'])->name('users.list');
    Route::get('/users/create/form', [UserController::class, 'user_create_form'])->name('user.create.form');
    Route::post('/users/store', [UserController::class, 'user_store'])->name('users.store');

    Route::get('/categories/list', [CategoriesController::class, 'categoriesList'])->name('Categories.List');
    Route::get('/create/new/category', [CategoriesController::class, 'create_new_category'])->name('Create.New.Category');
    Route::post('/category/post', [CategoriesController::class, 'category_post'])->name('category.post');
    Route::get('/categories/delete/{id}', [CategoriesController::class, 'category_delete'])->name('category.delete');

    Route::get('/products/list', [ProductsController::class, 'products_list'])->name('Products.List');
    Route::get('/create/form/products', [ProductsController::class, 'create_new_product'])->name('Create.New.Product');
    Route::post('/products/store', [ProductsController::class, 'product_post'])->name('Product.Post');
    Route::get('/products/edit/{id}', [ProductsController::class, 'products_edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductsController::class, 'products_update'])->name('products.update');
    Route::get('/products/delete/{id}', [ProductsController::class, 'products_delete'])->name('products.delete');

    Route::get('/brands/list', [BrandController::class, 'brandList'])->name('Brand.List');
    Route::get('/create/form/brands', [BrandController::class,'create_new_brand'])->name('Create.New.Brand');
    Route::post('/brands/store', [BrandController::class, 'brand_post'])->name('Brand.Post');
    Route::get('/brands/delete/{id}', [BrandController::class, 'brands_delete'])->name('brands.delete');

    Route::get('/logout',[UserController::class,'logout'])->name('Logout');

});
});




