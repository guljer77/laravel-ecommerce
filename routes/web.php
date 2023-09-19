<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/dashboard','index')->name('dashboard');
    });
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/admin/all-category', 'index')->name('all-category');
        Route::get('/admin/add-category', 'add')->name('add-category');
        Route::post('/admin/store-category', 'store')->name('store-category');
        Route::get('/admin/edit-category/{id}', 'edit')->name('edit-category');
        Route::post('/admin/update-category/{id}', 'Update')->name('update-category');
        Route::get('/admin/delete-category/{id}', 'Delete')->name('delete-category');
    });
    Route::controller(SubcategoryController::class)->group(function (){
        Route::get('/admin/all-subcategory', 'index')->name('all-subcategory');
        Route::get('/admin/add-subcategory', 'add')->name('add-subcategory');
        Route::post('/admin/store-subcategory', 'store')->name('store-subcategory');
        Route::get('/admin/edit-subcategory/{id}', 'edit')->name('edit-subcategory');
        Route::post('/admin/update-subcategory/{id}', 'update')->name('update-subcategory');
        Route::get('/admin/delete-subcategory/{id}', 'Delete')->name('delete-subcategory');
    });
    Route::controller(ProductController::class)->group(function (){
        Route::get('/admin/all-product', 'index')->name('all-product');
        Route::get('/admin/add-product', 'add')->name('add-product');
        Route::post('/admin/store-product', 'store')->name('store-product');
        Route::get('/admin/edit-product/{id}', 'edit')->name('edit-product');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
