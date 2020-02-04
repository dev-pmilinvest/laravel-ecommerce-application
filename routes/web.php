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

Route::view('/conditions-generales-de-ventes', 'site.pages.conditions-generales-de-ventes')->name('conditions-generales-de-ventes');
Route::view('/bienfaits-du-massage', 'site.pages.bienfaits-du-massage')->name('bienfaits-du-massage');
Route::view('/efficacite', 'site.pages.efficacite')->name('efficacite');
Route::view('/ingredients-composition', 'site.pages.ingredients-composition')->name('ingredients-composition');
Route::view('/temoignages', 'site.pages.temoignages')->name('temoignages');
Route::view('/effet-froid', 'site.pages.effet-froid')->name('effet-froid');
Route::view('/ingredients-composition', 'site.pages.ingredients-composition')->name('ingredients-composition');
Route::view('/laboratoire-natur-avignon', 'site.pages.laboratoire-natur-avignon')->name('laboratoire-natur-avignon');
Route::view('/mentions-legales', 'site.pages.mentions-legales')->name('mentions-legales');

Route::get('/', 'Site\CategoryController@home')->name('home');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');


Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');

    Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');

    Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');
});

Auth::routes();
require 'admin.php';
