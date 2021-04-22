<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;


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
Route::namespace('Auth')->group(function () {
  Route::get('/login',[App\Http\Controllers\LoginController::class, 'show_login_form'])->name('login');
  Route::post('/login',[App\Http\Controllers\LoginController::class, 'process_login'])->name('login');
  Route::get('/register',[App\Http\Controllers\LoginController::class, 'show_signup_form'])->name('register');
  Route::post('/register',[App\Http\Controllers\LoginController::class, 'process_signup']);
  Route::post('/logout',[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});

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

Route::get('file', [FileController::class, 'create']); 
Route::post('file', [FileController::class, 'store']);

Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 
	'storeContactForm'])->name('contact-form.store');

Route::get('/buyforma', [App\Http\Controllers\OrderController::class, 'buyforma'])->name('buyforma');
Route::post('/buyforma', [App\Http\Controllers\OrderController::class, 
	'storeOrderForm'])->name('buyforma.store');

Route::get('/{lang}', [LocalizationController::class, 'index']); 




