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

Route::get('/', function () {return view('auth.login');});



//....................Main Page of navbar...............

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/albums', 'HomeController@show_album')->name('album');

Route::get('/about-us','HomeController@about_us')->name('about-us');

//...................Inside the main page.....................
Route::get('/venue-details/{id}','Backend\VenueController@showVenueDetails')->name('venue.details');

Auth::routes();


// ------------Admin route----------------------------------
Route::prefix('admin')->group(function(){

Route::get('/', 'Backend\AdminLoginController@showLoginForm')->name('admin.login');

Route::get('/login','Backend\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login', 'Backend\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/logout', 'Backend\AdminLoginController@logout')->name('admin.logout');

    Route::get('/dashboard', 'Backend\DashboardController@index')->name('admin.dashboard');

    Route::get('/add-venues', 'Backend\VenueController@showVenuePostForm')->name('admin.add-venues');

	Route::post('/add-venues', 'Backend\VenueController@showVenuePostForm')->name('admin.add-venues.submit');

    Route::get('/show-venue', 'Backend\VenueController@showVenueList')->name('admin.show-venue');

    Route::get('/edit-venue/{id}', 'Backend\VenueController@EditVenuePost')->name('admin.edit-venue');

    Route::post('/edit-venue/{id}', 'Backend\VenueController@EditVenuePost')->name('admin.update-venue');


    Route::get('/delete-venue/{id}', 'Backend\VenueController@deleteVenue')->name('admin.delete-venue');

});