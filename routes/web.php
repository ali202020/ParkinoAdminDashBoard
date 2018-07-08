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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Routing CRUD for cards
Route::get('Card_store','CardController@store_code')->name('Card.store_code');
Route::get('Card','CardController@index')->name('Card.index');
Route::get('Card/create','CardController@create')->name('Card.create');
Route::delete('Card/{Card}','CardController@destroy')->name('Card.destroy');

//Routing CRUD for feedbacks
Route::resource('Feedback','FeedbackController');


//Routing CRUD for owners
Route::resource('Owner','OwnerController');


// //Routing CRUD for parkingareas
// Route::resource('Parking_area','ParkingAreaController');


//Routing CRUD for reservations
Route::resource('Reservation','ReservationController');

//Routing CRUD for users
Route::resource('User','UserController');


//test route
// Route::get('login',function(){return view('auth.login');});
