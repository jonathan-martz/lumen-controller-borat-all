<?php

use Illuminate\Support\Facades\Route;

Route::post('/repos', [
    'middleware' => ['auth', 'xss', 'https'],
    'uses' => 'App\Http\Controllers\BoratReposController@select'
]);
