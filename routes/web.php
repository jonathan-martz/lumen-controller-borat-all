<?php

use Illuminate\Support\Facades\Route;

Route::post('/packages', [
    'middleware' => ['auth', 'xss', 'https'],
    'uses' => 'App\Http\Controllers\BoratReposController@select'
]);
