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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoriesController@index')->name('categories');

Route::get('/sub-categories', 'SubCategoriesController@allSubCategories')->name('sub-category');
Route::get('/sub-categories/{sub_categories}', 'SubCategoriesController@subCategory')->name('sub-categories');

Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/services/{sub_categories}', 'ServicesController@specificServices')->name('services');
Route::get('/details/{details}', 'ServicesController@serviceDetails')->name('services');
Route::post('/details', 'ServiceApplicationsController@store')->name('applications');


Route::get('/p/create-service', 'GetServiceController@create');
Route::post('/p', 'GetServiceController@store');

Route::get('/offers', 'OffersController@index');
Route::get('/offers/{sub_categories}', 'OffersController@offerServices')->name('services');
Route::get('/offerdetails/{details}', 'OffersController@offerDetails')->name('services');

// Route::get('/offers', 'OffersController@index');

Route::get('/o/create-offer', 'OfferServiceController@create');
Route::post('/o', 'OfferServiceController@store');

// Route::get('/notification', 'OrdersController@notification')->name('notification');

// Route::get('/notification/{id}', 'ServiceApplicationsController@store')->name('applications');
// Route::get('/applications', 'ServiceApplicationsController@index')->name('applications');

//Facebook Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
