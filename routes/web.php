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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/around-the-world-in-80-days', function () {
    return view('80days');
});
Route::get('/the-picture-of-dorian-gray', function () {
    return view('dorian');
});
Route::get('/the-mysterious-island', function () {
    return view('island');
});
Route::get('/buyform', function () {
    return view('buyforma');
});
Route::get('/the-notebook', function () {
    return view('notebook');
});
Route::get('/the-master-and-margarita', function () {
    return view('masterandmargo');
});
Route::get('/war-and-peace', function () {
    return view('warandpeace');
});
Route::get('/the-little-prince', function () {
    return view('littleprince');
});
Route::get('/rameo-and-juliet', function () {
    return view('rameoandjuliet');
});
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 
	'storeContactForm'])->name('contact-form.store');
