<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // laravel way of doing $_GET business ?email=test@test.com
    $email = request('email');

    $values= ["key1"=>"value1", "key2"=>"value2"];
    $name = "massimo";
    return view('welcome', compact('values', 'name', 'email'));
});

Route::get('users/{id}', function ($id) {
    
}