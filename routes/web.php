<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
	return view('guest.home');
})->name('home');

Auth::routes();


Route::middleware('auth')
->namespace('Admin')
->name('admin.')
->prefix('admin')
->group(function() {
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('/food', 'FoodController');
});


Route::get('{any?}', function(){
	return view('guest.home');
})->where('any', '.*');


// FIXME le rotet sono incasinate, ho provato a sistemarle ma poi cambia il funzionamento dei link, per ora ho ripristinato ma così non va bene xD