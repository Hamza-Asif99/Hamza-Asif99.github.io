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

Route::get('/item','App\Http\Controllers\NavigationController@item');
Route::get('/helpDesk','App\Http\Controllers\NavigationController@helpDesk');
Route::get('/shoppingCart','App\Http\Controllers\NavigationController@shoppingCart');
Route::get('/wishList','App\Http\Controllers\NavigationController@wishList');
Route::get('/admin','App\Http\Controllers\ItemsController@admin');
Route::get('/items','App\Http\Controllers\ItemsController@index');

Route::get('/updateItem{id}','App\Http\Controllers\ItemsController@toUpdate')->name('toChange.toChange');

Route::get('/categories{cat}','App\Http\Controllers\ItemsController@category')->name('category.category');
Route::get('/item','App\Http\Controllers\ItemsController@item');

Route::get('/{itemsid}','App\Http\Controllers\ItemsController@destroy')->name('item.destroy');
Route::resource('items','App\Http\Controllers\ItemsController');

Route::get('/','App\Http\Controllers\ItemsController@homeItems')->name('main.main');

Route::post('/search','App\Http\Controllers\SearchController@search');

Route::get('/request','App\Http\Controllers\ItemsController@xmlhttprequest');

Auth::routes();

Route::resource('users','App\Http\Controllers\UsersController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
