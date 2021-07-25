<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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

                    // All Frontend *************** 

Route::get('/', [AdminController::class, 'index']);
Route::get('/category/{id}', [FrontController::class, 'category']);
Route::get('/subcategory/{id}', [FrontController::class, 'subcategory']);
Route::get('/filter/{id}', [FrontController::class, 'filter']);
Route::get('/allcategory', [FrontController::class, 'allcategory']);
Route::get('/search/{id}', [FrontController::class, 'search']);
Route::post('/submit_data', [FrontController::class, 'submit_data']);


                    // All Admin Backend  *****************

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::get('/information', [AdminController::class, 'information']);
    Route::post('/footer_update', [AdminController::class, 'footer_update']);

                    // All Category ****************

    Route::get('/category', [AdminController::class, 'categories']);
    Route::post('/add_category', [AdminController::class, 'add_category']);
    Route::post('/get_category', [AdminController::class, 'get_category']);
    Route::post('/update_category', [AdminController::class, 'update_category']);
    Route::get('/category_delete/{id}', [AdminController::class, 'category_delete']);

    
    Route::get('/subcategory', [AdminController::class, 'subcategory']);
    Route::post('/add_sub_category', [AdminController::class, 'add_sub_category']);
    Route::post('/get_sub_category', [AdminController::class, 'get_sub_category']);
    Route::post('/update_subcategory', [AdminController::class, 'update_subcategory']);
    Route::get('/subcategory_delete/{id}', [AdminController::class, 'subcategory_delete']);

                    // Product *********************************
                    
    Route::get('/product', [AdminController::class, 'product']);
    Route::post('/add_product', [AdminController::class, 'add_product']);
    Route::post('/get_product', [AdminController::class, 'get_product']);
    Route::post('/update_product', [AdminController::class, 'update_product']);
    Route::get('/product_delete/{id}', [AdminController::class, 'product_delete']);





});
