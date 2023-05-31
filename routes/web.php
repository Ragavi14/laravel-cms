<?php

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


Route::get('set-password',[App\Http\Controllers\HomeController::class,'setpassword'])->name('set-password');
Route::post('registeruser',[App\Http\Controllers\Auth\RegisterController::class,'registeruser'])->name('reg');
Route::get('register',[App\Http\Controllers\Auth\RegisterController::class,'registerform'])->name('register');
Route::post('save_user',[App\Http\Controllers\Auth\RegisterController::class,'save_user'])->name('save_user');

Route::get('/', function () {
    return view('/auth/login');
});
Auth::routes();

Route::get('home1', [App\Http\Controllers\HomeController::class, 'index1'])->name('home1');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('homePage', [App\Http\Controllers\HomeController::class, 'homePage'])->name('homePage');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');

Route::get('create-content', [App\Http\Controllers\ContentController::class, 'create'])->name('create-content');
Route::post('save-content', [App\Http\Controllers\ContentController::class, 'store'])->name('save-content');
Route::get('list-content',[App\Http\Controllers\ContentController::class, 'index'])->name('list-content');
Route::get('edit-content/{id}', [App\Http\Controllers\ContentController::class, 'edit'])->name('edit-content');
Route::delete('destroy-content/{id}',  [App\Http\Controllers\ContentController::class, 'destroy'])->name('destroy-content');
Route::put('update-content/{id}', [App\Http\Controllers\ContentController::class, 'update'])->name('update-content');
Route::get('show-content',[App\Http\Controllers\ContentController::class, 'show'])->name('show-content');






