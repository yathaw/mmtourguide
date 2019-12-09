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

Route::get('/', function () 
{
	
    return view('frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Frontend
Route::get('/about', 'HomeController@about');
Route::get('/howitworks', 'HomeController@howitworks');
Route::post('/search', 'HomeController@search');
Route::post('/book', 'BookController@book');


// Authentication
Route::prefix('register')->name('register.')->group(function()
{
	Route::get('/tourism', 'AuthController@tourism_view');
	Route::post('/tourism_register', 'AuthController@tourism_register');

	Route::get('/guide', 'AuthController@guide_view');
	Route::post('/guide_register', 'AuthController@guide_register');
	Route::post('/divisionsearch', 'AuthController@divisionsearch')->name('divisionsearch');
	Route::post('/countrysearch', 'AuthController@countrysearch')->name('countrysearch');


});

// Backend ( admin )
Route::prefix('admin')->name('admin.')->group(function()
{
	Route::get('dashboard', 'DashboardController@admin');
	Route::resource('division', 'DivisionController');
	Route::resource('region', 'RegionController');
	Route::resource('language', 'LanguageController');
	Route::resource('place', 'PlaceController');
	Route::resource('country', 'CountryController');

	Route::get('guide/new', 'GuideController@new');
	Route::get('guide/register', 'GuideController@register');
	Route::get('guide/reject', 'GuideController@reject');

	Route::resource('guide', 'GuideController');

	Route::resource('tourist', 'TouristController');
});



// Backend ( guide )
Route::prefix('tourguide')->name('tourguide.')->group(function()
{
	Route::get('dashboard', 'DashboardController@guide');
	Route::resource('guide', 'GuideController');
	Route::get('pricing','GuideController@pricing');
	Route::post('pricing','GuideController@pricingstore');



});


Route::get('guide/confirm/{id}', 'GuideController@confirm');