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

// Route::get('/', function () {
//     // return view('index');
    
// });

// Route::get('/','App\Http\Controllers\NavigationController@index')->name('main.main');
Route::get('/item','App\Http\Controllers\NavigationController@item');
Route::get('/helpDesk','App\Http\Controllers\NavigationController@helpDesk');
Route::get('/shoppingCart','App\Http\Controllers\NavigationController@shoppingCart');
Route::get('/wishList','App\Http\Controllers\NavigationController@wishList');
// Route::get('/categories','App\Http\Controllers\NavigationController@categories');
Route::get('/admin','App\Http\Controllers\ItemsController@admin');
Route::get('/items','App\Http\Controllers\ItemsController@index');
// Route::get('/items')

Route::get('/categories{cat}','App\Http\Controllers\ItemsController@category')->name('category.category');
// Route::get('/item{itemid}','App\Http\Controllers\ItemsController@itemDisplay')->name('item.item');
Route::get('/item','App\Http\Controllers\ItemsController@item');

Route::resource('items','App\Http\Controllers\ItemsController');

Route::get('/{items}','App\Http\Controllers\ItemsController@homeItems')->name('main.main');


