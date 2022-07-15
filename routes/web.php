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

Route::get('/', function () {
    return view('front.home');
});
Route::get('about-us', function () {
    return view('front.about-us');
});
Route::get('industries', function () {
    return view('front.industries');
});
Route::get('contact-us', function () {
    return view('front.contact-us');
});
Route::get('data-destruction', function () {
    return view('front.data-destruction');
});
Route::get('end-of-life-cycle-processing', function () {
    return view('front.end-of-life-cycle-processing');
});
Route::get('it-asset-remarketing', function () {
    return view('front.it-asset-remarketing');
});
Route::get('it-disposition', function () {
    return view('front.it-disposition');
});
Route::get('re-manufacturer', function () {
    return view('front.re-manufacturer');
});
Route::get('remarketing', function () {
    return view('front.remarketing');
});
