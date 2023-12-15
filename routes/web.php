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
    $name = 'Matteo';
    return view('home', compact('name'));
})->name('home');

Route::get('/about', function () {
    $data = [
        'name' => 'Gianpiero',
        'surname' => 'Filibestri',
        'age' => 25,
    ];
    return view('pages.about', $data);
})->name('about');

Route::get('/trending', function () {
    $data = [
        'games' => 'Videogiochi',
        'books' => 'Audiolibri',
        'cinema' => 'Marvel',
        'nomi' => 'belli'
    ];
    return view('pages.trending', $data);
})->name('trending');


