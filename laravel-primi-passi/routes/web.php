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
    $data = [
        'user_name' => 'Alice',
        'user_surname' => 'Pecci',
        'user_age' => 25,
        'birth_city' => 'Milan' 
    ];
    
    return view('home', $data);
});
