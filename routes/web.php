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
Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', function() {
        return "Manajemen Informatika";
});
Route::get('/teknik-informatika',function() {
    return "Teknik Informatika";
});
});

Route::get('/news/1', function () {
    echo('berita pertama');
});

Route::get('/news/2', function () {
    echo('berita kedua');
});

Route::get('/news/3', function () {
    echo('berita ketiga');
});

Route::prefix('sarana')->group(function() {
    Route::get('/perkantoran', function() {
        return "Perkantoran";
    });
    Route::get('/laboratorium', function() {
        return "Laboratorium";
    });
    Route::get('/kelas', function() {
        return "Kelas";
    });
    Route::get('/lainnya', function() {
        return('Lainnya');
    });
});
