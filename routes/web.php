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
    $data = config('comics');
    // dd($data);
    // return view('home', [$data => $comics ]);
    return view('home', compact('data'));
})->name('home');

Route::get('comics/{index}', function ($index) {
    $data = config('comics');
    $comic = $data[$index];
    return view('comics.show', compact('comic'));
})->name('comics.show');

