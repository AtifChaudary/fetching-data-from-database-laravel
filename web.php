<?php


use App\tour_places;
use App\hotel_data;
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
    return view('Body.index');
});

Route::get('hotel','GhoomLay_Controller@hotel');

Route::post('HotelBooking','GhoomLay_Controller@hotelBooking');
