<?php

use Illuminate\Support\Facades\Route;

Route::get('/repos/all', [
    'middleware' => ['auth', 'xss', 'https'],
    'uses' => 'App\Http\Controllers\BoratAllController@select'
]);
