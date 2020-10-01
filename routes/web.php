<?php

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

Route::get('/','ProductControllers@index')->name('products.index');
Route::get('/slugs{slug}','ProductControllers@show')->name('products.show');

Route::post('/panier/ajouter','CartController@store')->name('cart.store');
Route::get('/panier/','CartController@index')->name('cart.index');
Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');
Route::get('/viderpanier', function () {
    Cart::destroy();
});
    

Auth::routes();
Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');

Route::get('/home', 'HomeController@index')->name('home');

