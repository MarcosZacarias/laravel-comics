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
    $title= "Homepage";
    $comics= config("db");

    // dd($comics);
    return view('home', compact("title", "comics"));
})->name("homepage");

Route::get('/about', function () {
$title= "about";

    return view('about', compact("title"));
})->name("about");