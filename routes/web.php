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
    return view('welcome');
});
Route::get('/routes', function () {
    return view('routes');
});
Route::get('/airport-search', 'FrontController@getAirport')->name('airport-search');
Route::get('/search', 'FrontController@searchFlight')->name('search');
Route::get('/searchnew', 'FrontController@searchflightnew')->name('searchnew');
Route::get('/contact-us', function () { return view('contact-us'); });
Route::get('/about-us', function () { return view('about-us'); });
Route::get('/domestic-flights', function () { return view('domestic-flights'); });
//Route::get('/booking-details', function () { return view('booking-details'); });
//Route::post('/booking-details', function () { return view('booking-details'); });

Route::post('/booking-details', 'FrontController@bookingDetailsFlight')->name('booking-details');
Route::post('/thank-you', 'FrontController@sendMailsAndThankyou')->name('thank-you');
Route::get('/thank-you', 'FrontController@sendMailsAndThankyou')->name('thank-you');

Route::get('/international-flights', function () { return view('international-flights'); });
Route::get('/round-trip', function () { return view('round-trip'); });
Route::get('/round-trip', function () { return view('round-trip'); });
Route::get('/group-travel', function () { return view('group-travel'); });
Route::get('/last-minute-travel', function () { return view('last-minute-travel'); });
Route::get('/red-eye-flights', function () { return view('red-eye-flights'); });
Route::get('/weekend-getaways', function () { return view('weekend-getaways'); });
Route::get('/flights-under-budgets', function () { return view('flights-under-budgets'); });
Route::get('/flights-by-class', function () { return view('flights-by-class'); });
Route::get('/last-minute-flights', function () { return view('last-minute-flights'); });
Route::get('/international-flights', function () { return view('international-flights'); });

//----------------------Routes------------------------------------------
Route::get('route/chicago-to-craotia',function(){ return view('routes.chicago-to-craotia'); });
Route::get('route/atlanta-to-mexico',function(){ return view('routes.atlanta-to-mexico'); });
Route::get('route/chicago-to-aruba',function(){ return view('routes.chicago-to-aruba'); });
Route::get('route/chicago-to-london',function(){ return view('routes.chicago-to-london'); });
Route::get('route/dallas-to-tel-aviv',function(){ return view('routes.dallas-to-tel-aviv'); });
Route::get('route/denver-to-new-zealand',function(){ return view('routes.denver-to-new-zealand'); });
Route::get('route/houston-to-mexico',function(){ return view('routes.houston-to-mexico'); });
Route::get('route/new-york-to-amsterdam',function(){ return view('routes.new-york-to-amsterdam'); });
Route::get('route/new-york-to-london',function(){ return view('routes.new-york-to-london'); });
Route::get('route/new-york-to-rome-italy',function(){ return view('routes.new-york-to-rome-italy'); });
Route::get('route/new-york-to-reyklavik',function(){ return view('routes.new-york-to-reyklavik'); });
Route::get('route/orlando-to-iceland',function(){ return view('routes.orlando-to-iceland'); });
Route::get('route/orlando-to-vancouver',function(){ return view('routes.orlando-to-vancouver'); });
Route::get('route/cairo-to-dubai',function(){ return view('routes.cairo-to-dubai'); });
Route::get('route/las-vegas-to-portland',function(){ return view('routes.las-vegas-to-portland'); });
Route::get('route/new-york-to-barcelona',function(){ return view('routes.new-york-to-barcelona'); });
Route::get('route/new-york-to-dubai',function(){ return view('routes.new-york-to-dubai'); });
Route::get('route/seattle-to-bangalore',function(){ return view('routes.seattle-to-bangalore'); });
Route::get('route/seattle-to-shanghai',function(){ return view('routes.seattle-to-shanghai'); });
