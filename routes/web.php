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
    return view('welcome');
});
Route::get('/', function ($id) {
    echo "Selamat Datang $id";
    });
    Route::get('/about', function () {
        echo "2041720116-Arva Bayu Susanto";
        });
        Route::get('/article/{id}', function ($id) {
            echo "Halaman Artikel dengan ID $id";
            });
   