<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')  ;
});

Route::resource('threads',  App\Http\Controllers\ThreadsController::class );
