<?php

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
    return view('home.index');
});
Route::get('/rekening-donasi', function () {
    return view('home.rekening');
});
Route::get('/faq', function () {
    return view('home.faq');
});
Route::get('/kontak-kami', function () {
    return view('home.kontak');
});
Route::get('/donasi', 'donationController@index');
Route::get('/konfirmasi-pembayaran', 'donationController@konfirmasipembayaran');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
