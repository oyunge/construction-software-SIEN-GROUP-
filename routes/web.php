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

Route::group(['middleware' => 'auth'], function () {





});

Route::get('/', function (){
    return view('auth/login');
});
Route::get('/admin', function (){
     return view('admin');
});
Route::get('/account', function (){
    return view('account');
});
Route::get('/constructionM' ,function(){
  return view('constructionM');
});
Route::get('/proc', function (){
    return view('proc');
});
Route::get('/register', function (){
     return view('register');
});
Route::get('/site', function (){
    return view('site');
});
Route::get('/store' ,function(){
  return view('store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
