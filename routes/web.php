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
    $data = [
        'title' => 'primi passi con laravel',
        'nomePagina' => 'Pagina Bonus'
    ];

    $contents = [
        'content-1',
        'content-2',
        'content-3'
    ];

    return view('home', $data, compact('contents'));
})->name('homepage');