<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $hello = [
        "greeting" => "hello",
        "object" => "world",
        "subject" => "Mario Rossi",
    ];

    return view('home', [
        "hello" => $hello,
    ]);
});

Route::get('/homepage', function () {


    return view('homepage');
})->name("homepage");

Route::get('/italian', function () {


    return view('italian');
})->name("italian");

Route::get('/spain', function () {


    return view('spain');
})->name("spain");

Route::get('/french', function () {


    return view('french');
})->name("french");

Route::get('/german', function () {


    return view('german');
})->name("german");

