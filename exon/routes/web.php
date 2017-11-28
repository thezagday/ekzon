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
Auth::routes();

Route::get('/','FrontController@main');
Route::get('/lang','FrontController@lang');
Route::get('/catalog/{id?}','CatalogController@catalog')->name('catalog');
Route::get('/news','NewsController@news');
Route::get('/news-page/{id?}','NewsController@newsPage');
Route::get('/company','CompanyController@company');
Route::get('/contacts','ContactsController@contacts');
Route::get('/products/{id}','ProductController@products')->name('product');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin','AdminController@admin');

    Route::get('/parents','AdminController@parents');
    Route::any('/add-parent','AdminController@addParent');
    Route::any('/edit-parent/{id?}','AdminController@editParent');
    Route::get('/delete-parent/{id?}','AdminController@deleteParent');

    Route::get('/children/{id?}','AdminController@children')->name('children');
    Route::any('/add-child/{parent?}','AdminController@addChild')->name('add-child');
    Route::any('/edit-child/{id?}','AdminController@editChild');
    Route::get('/delete-child/{id?}','AdminController@deleteChild');

    Route::get('/read-products/{id?}','AdminController@readProducts')->name('read-products');
    Route::any('/edit-product/{id?}','UploadController@editProduct')->name('edit-product');
    Route::any('/add-product/{category?}','UploadController@addProduct')->name('add-product');
    Route::get('/delete-product/{id?}','AdminController@deleteProduct');

    Route::get('/read-news','AdminController@readNews');
    Route::any('/add-news','UploadController@addNews');
    Route::get('/delete-news/{id?}','AdminController@deleteNews');
    Route::any('/edit-news/{id?}','UploadController@editNews')->name('edit-news');
    Route::get('/delete-news-slide/{id?}','AdminController@deleteNewsSlide');

    Route::get('/read-slider','AdminController@readSlider');
    Route::any('/add-slider','UploadController@addSlider');
    Route::any('/edit-slider/{id?}','UploadController@editSlider');
    Route::get('/delete-slider/{id?}','AdminController@deleteSlider');

    Route::get('/read-brands','AdminController@readBrands');
    Route::post('/add-brand','UploadController@addBrand');
    Route::get('/delete-brand/{id?}','AdminController@deleteBrand');

    Route::get('/read-all-products','AdminController@readAllProducts');
    Route::post('/add-product-main-page','AdminController@addProductMainPage');
    Route::post('/del-product-main-page','AdminController@delProductMainPage');
});

