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

Route::group(['middleware' => ['web']], function() {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome');
    Route::get('/login', 'App\Http\Controllers\WelcomeController@login');
    Route::get('/login/auth', 'App\Http\Controllers\UserController@login');
    Route::get('/logout', 'App\Http\Controllers\UserController@logout');
});
