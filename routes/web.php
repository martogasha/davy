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

Route::get('/h', function () {
    return view('welcome');
});
Route::get('/','ClientController@index');
Route::get('shop','ClientController@shop');
Route::get('blog','BlogController@blog');
Route::get('blog/{id}/{name}','BlogController@blogDetail');
Route::get('about','ClientController@about');
Route::get('services','ClientController@services');
Route::get('digitalMarketing','ClientController@digitalMarketing');
Route::get('corporate','ClientController@corporate');
Route::get('graphic','ClientController@graphic');
Route::get('large','ClientController@large');
Route::get('promotional','ClientController@promotional');
Route::get('promotionalItems','ClientController@promotionalItems');
Route::get('interiorDecor','ClientController@interiorDecor');
Route::get('cashBookReceipt','ClientController@cashBookReceipt');
Route::get('corporateBranding','ClientController@corporateBranding');
Route::get('digitalOffsetPrinting','ClientController@digitalOffsetPrinting');
Route::get('largeFormatPrinting','ClientController@largeFormatPrinting');
Route::get('screenPrinting','ClientController@screenPrinting');
Route::get('uvPrinting','ClientController@uvPrinting');
Route::get('embroideryServices','ClientController@embroideryServices');
Route::get('signage','ClientController@signage');
Route::get('digitalPrinting','ClientController@digitalPrinting');
Route::get('offset','ClientController@offset');
Route::get('productDetail/{id}','ClientController@productDetail');
Route::resource('cart','CartController');
Route::post('cartOne','CartController@cartOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('addByOne/{id}','CartController@addByOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('cartRemove/{id}','CartController@removeItem');
Route::get('checkout','ClientController@checkout');
Route::get('success','ClientController@success');
Route::get('ll','ClientController@login');
Route::get('rr','ClientController@register');
Route::get('Login','AuthController@login');
Route::get('Register','AuthController@register');
Route::post('userLogin','AuthController@userLogin')->name('userLogin');
Route::post('userRegister','AuthController@userRegister')->name('userRegister');
Route::get('getProductDetail','ClientController@getProductDetail');
Route::post('search','ClientController@search');
Route::get('contact','ClientController@contact');
Route::get('gallery','ClientController@gallery');
Route::post('storeContact','ClientController@storeContact')->name('contact');

//Admin Controller
Route::get('vlog','BlogController@adminBlog');
Route::get('edit/{id}','BlogController@edit');
Route::post('eBlog','BlogController@eBlog');
Route::get('admin','AdminController@admin');
Route::get('contactUs','AdminController@contact');
Route::get('products','AdminController@products');
Route::get('orders','AdminController@orders');
Route::get('reviews','AdminController@reviews');
Route::get('adminGallery','AdminController@gallery');
Route::get('editProduct/{id}','AdminController@edit');
Route::post('editProd','AdminController@editProd');
Route::post('deleteProduct','AdminController@delete');
Route::post('storeCategory','AdminController@storeCategory')->name('storeCategory');
Route::post('storeProducts','AdminController@storeProduct')->name('storeProduct');
Route::post('storeBlog','BlogController@storeBlog')->name('storeBlog');
Route::post('storeGalleryImage','AdminController@storeGalleryImage')->name('storeGalleryImage');
Route::post('editGalleryImage','AdminController@editGalleryImage')->name('editGalleryImage');
Route::post('deleteGalleryImage','AdminController@deleteGalleryImage')->name('deleteGalleryImage');
Route::get('editModal','AdminController@editModal');
Route::post('deleteContact','AdminController@deleteContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
