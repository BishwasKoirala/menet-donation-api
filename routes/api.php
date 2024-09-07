<?php

use App\Http\Controllers\CheckoutSessionController;
use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;

Route::get('/donor',[DonorController::class,'index']);
Route::get('donor/{donor_external_id}',[DonorController::class,'get']);
Route::post('/donor',[DonorController::class,'create']);
Route::get('/checkout-session',[CheckoutSessionController::class,'create']);