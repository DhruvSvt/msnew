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
    return view('index');
})->name('home');

Route::view('about-us', 'about')->name('about');
Route::view('service', 'service')->name('service');
Route::view('certifications', 'certifications')->name('certifications');
Route::view('gallery', 'gallery')->name('gallery');
Route::view('carrier', 'carrier')->name('carrier');
Route::view('contact-us', 'contact')->name('contact');
