<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('seller')->group(function () {
   Route::view('/OverView', 'seller.pages.gig1');
});