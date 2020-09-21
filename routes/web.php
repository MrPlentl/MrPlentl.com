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
### HOME ###
Route::get('/', function () {
        return view('resume-active');
})->name('index');

### ABOUT ###
Route::get('/about-brandon-plentl', function () {
    return view('about');
});

### ThaBamboozler ###
Route::get('/about-ThaBamboozler', function () {
    return view('about-thabamboozler');
});

### CONTACT ###
Route::get('/contact', function () {
    return view('contact');
});

### Chrome Theme Page ###
Route::get('/chrome-theme/minimalist-dark', function () {
    return view('chrome-themes');
});
