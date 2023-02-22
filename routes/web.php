<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;

Route::controller(Pages::class)->group(function(){
    Route::get('/','index')->name('view.inicio');
    Route::get('/inicio2','index_2')->name('view.inicio2');
    Route::get('/inicio3','index_3')->name('view.inicio3');
});