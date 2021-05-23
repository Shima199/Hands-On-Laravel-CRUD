<?php

use Illuminate\Support\Facades\Route;

Route::resource('cats', 'App\Http\Controllers\catController');
Route::get('/', function () {
    return view('welcome');
});
