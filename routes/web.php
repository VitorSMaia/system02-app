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

Route::view('/', 'welcome');
Route::view('/login','auth.login')->name('auth.login');
Route::post('/login',[\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get('/logout',[\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');


Route::get('/post/{id?}',function ($id) {
    return view('post.details.index',['id' => $id]);
})->name('post.details');


//Route::view('/post/{id?}','post.details.index')->name('post.details');;
//Route::view('/login','auth.login')->name('auth.login');
