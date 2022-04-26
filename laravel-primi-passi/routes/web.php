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

/*HOME PAGE: */
Route::get('/', function () {
    $data = [
        'user_name' => 'Alice',
        'user_surname' => 'Pecci',
        'user_age' => 25,
        'birth_city' => 'Milano' 
    ];

    return view('home', $data);
})->name('homepage-route');


/*ABOUT US: */
Route::get('/aboutUs', function () {
    
    return view('aboutUs');
})->name('aboutUs-route');


/* WORK WITH US: */
Route::get('/workWithUs', function () {
    
    return view('workWithUs');
})->name('workWithUs-route');


/* CONTACTS: */
Route::get('/contacts', function () {
    
    return view('contacts');
})->name('contacts-route');
