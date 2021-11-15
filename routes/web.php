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

// PUBLIC ROUTES
Route::get('/', 'PageController@index');

// AUTHENTICATION ROUTES
Auth::routes();

// ADMIN ROUTES
Route::middleware('auth')->namespace('Admin')->name('admin')->prefix('admin')->group(
    function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
    }
);

