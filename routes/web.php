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

Route::get('/home', [HomeController::class, 'index']);

Route::redirect('/anasayfa', destination:'/home')->name('anasayfa');

// Admin Start

Route::middleware('auth')->prefix('admin')->group(function () {

Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');


Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
Route::get('/category/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
Route::get('/category/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin_category_delete');
Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');



});

// Login Start

Route::get('/admin/login', [HomeController::class,'login'])->name('admin.login');

Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin.logincheck');
Route::get('/admin/logout', [HomeController::class,'logout'])->name('admin.logout');
// Login Stop

//Admin Stop



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
