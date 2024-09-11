<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MLController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/predict-purchase', [MLController::class, 'predictPurchase']);
