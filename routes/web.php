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

Route::get('/home', function () {
    return view('home');
});
Route::get('/biodata', function () {
    $info=array(
        'title' => "Biodata",
        'np' => "Lalaaaaa",
        'nama' => "Clara Adriana Sidauruk",
        'ttl' => "Perdagangan, 24 Januari 2002",
        'jk' => "Perempuan",
        'tb' => "163",
        'bb' => "62",
        'agama' => "Kristen",
        'telp' => "082369012850",
        'email' => "clara.adrianaorc@gmail.com",
        'goldar' => "B",
        'alamat' => "Jl. Semanggi Barat no 5e, Malang",
        'motivasi' => "Cobalah untuk tidak menjadi orang yang sukses, tetapi menjadi orang yang bernilai."
    );
    return view('biodata', $info);
});
Route::get('/contact', function () {
    return view('contact');
});




