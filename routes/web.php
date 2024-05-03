<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign');
});

Route::post('/sign', [SignController::class, 'sign']);
