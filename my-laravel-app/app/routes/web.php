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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('qiita', App\Http\Controllers\QiitaController::class);
// Route::get('/notion', [App\Http\Controllers\NotionController::class, 'index']);

Route::get('/users/show', [App\Http\Controllers\UserController::class, 'show'])->middleware('auth')->name('user.show');
// Route::get('/users/edit', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth')->name('user.edit');
Route::get('/users/update', [App\Http\Controllers\PostController::class, 'update'])->middleware('auth')->name('user.update');
// Route::get('/qiita', [App\Http\Controllers\QiitaController::class, 'search']);

