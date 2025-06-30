<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'] );
Route::get('/threads', [ThreadsController::class]);

Route::resource('threads',  App\Http\Controllers\ThreadsController::class );
