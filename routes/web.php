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
Route::get('/news/','NewsController@news');
Route::get('/news/sharer','NewsController@newsSharer');
Route::get('/news-page/{id?}','NewsController@newsPage');
Route::get('/company','CompanyController@company');
Route::get('/contacts','ContactsController@contacts');
Route::get('/products/{id}','ProductController@products')->name('product');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pharma','PharmaController@pharma');
Route::get('/partners','PartnersController@partners');
Route::post('/mail','MailController@mail');
Route::post('/feedback','MailController@feedback');
Route::post('/med','MailController@med');
Route::post('/mail-register','MailController@mailRegister');
Route::post('/interview','MailController@interview');
Route::post('/mail-register','MailController@mailRegister');
Route::post('/pharma-spec','MailController@pharmaSpec');
Route::post('/pharma-cons','MailController@pharmaCons');
Route::post('/subscribe','MailController@subscribe');
Route::post('/order','MailController@order');
Route::get('/certificates','CertController@cert');
Route::get('/video','VideoController@video');
Route::get('/search','SearchController@search');

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

    Route::get('/banner','AdminController@banner');
    Route::post('/update-banner','UploadController@updateBanner');
    Route::get('/delete-banner','AdminController@deleteBanner');

    Route::get('/read-news','AdminController@readNews');
    Route::any('/add-news','UploadController@addNews');
    Route::get('/delete-news/{id?}','AdminController@deleteNews');
    Route::any('/edit-news/{id?}','UploadController@editNews')->name('edit-news');
    Route::get('/delete-news-slide/{id?}','AdminController@deleteNewsSlide');

    Route::get('/read-slider','AdminController@readSlider');
    Route::any('/add-slider','UploadController@addSlider');
    Route::any('/edit-slider/{id?}','UploadController@editSlider');
    Route::get('/delete-slider/{id?}','AdminController@deleteSlider');

    Route::get('/read-second-slider','AdminController@readSecondSlider');
    Route::any('/add-second-slider','UploadController@addSecondSlider');
    Route::any('/edit-second-slider/{id?}','UploadController@editSecondSlider');
    Route::get('/delete-second-slider/{id?}','AdminController@deleteSecondSlider');

    Route::get('/read-brands','AdminController@readBrands');
    Route::post('/add-brand','UploadController@addBrand');
    Route::get('/delete-brand/{id?}','AdminController@deleteBrand');

    Route::get('/read-all-products','AdminController@readAllProducts');
    Route::post('/add-product-main-page','AdminController@addProductMainPage');
    Route::post('/del-product-main-page','AdminController@delProductMainPage');

    Route::get('/read-contacts','AdminController@readContacts');
    Route::post('/update-contacts','AdminController@updateContacts');

    Route::get('/read-material','AdminController@readMaterial');
    Route::post('/update-material','AdminController@updateMaterial');

    Route::get('/read-company','AdminController@readCompany');
    Route::post('/update-company','UploadController@updateCompany');

    Route::get('/read-produceds','AdminController@readProduceds');
    Route::any('/add-produced','UploadController@addProduced');
    Route::any('/edit-produced/{id?}','UploadController@editProduced')->name('edit-produced');
    Route::get('/delete-produced/{id?}','AdminController@deleteProduced');

    Route::get('/read-partners','AdminController@readPartners');
    Route::post('/update-partner','AdminController@updatePartner');

    Route::get('/read-certificates','AdminController@readCert');
    Route::any('/add-cert','UploadController@addCert');
    Route::any('/edit-cert/{id?}','UploadController@editCert');
    Route::get('/delete-cert/{id?}','AdminController@deleteCert');

    Route::get('/read-video','AdminController@readVideo');
    Route::any('/add-video','UploadController@addVideo');
    Route::any('/edit-video/{id?}','UploadController@editVideo');
    Route::get('/delete-video/{id?}','AdminController@deleteVideo');

    Route::get('/social','AdminController@social');
    Route::post('/update-social','AdminController@updateSocial');

    Route::get('/documents','AdminController@docs');
    Route::any('/add-doc','UploadController@addDoc');
    Route::any('/edit-doc/{id?}','UploadController@editDoc')->name('edit-doc');
    Route::get('/delete-doc/{id?}','AdminController@deleteDoc');

    Route::get('/form','AdminController@form');
    Route::any('/add-form','AdminController@formAdd');
    Route::get('/delete-form/{id?}','AdminController@formDelete');

    Route::get('/edit-dispatch','AdminController@dispatchEdit');
    Route::get('/delete-dispatch/{id?}','AdminController@dispatchDelete');

    Route::get('/users','AdminController@users');
    Route::any('/edit-user/{id?}','AdminController@editUser')->name('edit-user');
    Route::any('/add-user','AdminController@addUser');
    Route::get('/delete-user/{id?}','AdminController@deleteUser');
    Route::any('/pass-reset/{id?}','AdminController@passReset');

    Route::get('/change','AdminController@change');
});
//должны идти самыми последними
/*Route::any('{query}',function() {
    return redirect('/');
})->where('query', '.*');*/

