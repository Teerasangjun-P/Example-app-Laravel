<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    return view('welcome');
})->name('welcome');

Route::get('/index', function (){
    return view('index');
})->name('index');
