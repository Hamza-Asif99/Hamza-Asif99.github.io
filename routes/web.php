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

Route::get('/','App\Http\Controllers\NavigationController@index');
Route::get('/item','App\Http\Controllers\NavigationController@item');
Route::get('/helpDesk','App\Http\Controllers\NavigationController@helpDesk');
Route::get('/shoppingCart','App\Http\Controllers\NavigationController@shoppingCart');
Route::get('/wishList','App\Http\Controllers\NavigationController@wishList');
Route::get('/categories','App\Http\Controllers\NavigationController@categories');

// Route::get("/{name}",function($name){
//     // echo $name;
//     return NavigationController('/','App\Http\Controllers\NavigationController@index([$name])');
// });

// Route::get('/item' ,function() {
//     return view('item');
// });
// Route::get('/wishList' ,function() {
//     return view('wishList');
// });
// Route::get('/shoppingCart' ,function() {
//     return view('shoppingCart');
// });
// Route::get('/categories' ,function() {
//     return view('categories');
// });
// Route::get('/helpDesk' ,function() {
//     return view('helpDesk');
// });


// Route::get('/wishList',wishList);
