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


/*ROUTE VERS LA PAGE PRINCIPALE*/
Route::get('/','HomeController@home')->name('home');
/*ROUTE VERS LA PAGE CONTACT*/
Route::get('/contact','HomeController@contact')->name('contact');

/*ROUTE VERS LA PAGE SHOP*/
Route::get('/shop','ShopController@index')->name('shop.index');
/*ROUTE VERS LA PAGE show product*/
Route::get('/shop/{product}','ShopController@show')->name('shop.show');
/*ROUTE VERS LA PAGE CART*/
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('/cart/reset','CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

/*ROUTE VERS LA PAGE Choeckout*/
Route::get('/checkout','CheckoutController@checkout')->name('checkout.index');
Route::get('/checkout/success','CheckoutController@success')->name('checkout.success');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');

Route::get('/orders','HomeController@orders')->name('orders')->middleware('auth');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('/logout',function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');
