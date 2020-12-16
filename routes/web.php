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

Route::get('home', 'HomeController@index')->name('home');

Route::get('register', 'RegisterController@showRegisterForm')->name('auth.showRegisterForm');
Route::post('register', 'RegisterController@register')->name('auth.register');
Route::get('login', 'LoginController@showLoginForm')->name('auth.showLoginForm');
Route::post('login', 'LoginController@login')->name('auth.login');
Route::post('logout', 'LoginController@logout')->name('auth.logout');


Route::get('/login/{provider}', 'LoginController@redirectToProvider')->name('social-login');
Route::get('login/{provider}/callback', 'LoginController@callback')->name('social-callback');
