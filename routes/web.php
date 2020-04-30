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

Route::get('/', 'IndexController@index');
Route::get('/rekening-donasi', function () {
    return view('home.rekening');
});
Route::get('/faq', function () {
    return view('home.faq');
});
Route::get('/kontak-kami', function () {
    return view('home.kontak');
});
Route::get('/tentang-kami', function () {
    return view('home.tentang');
});
Route::get('/donasi', 'donationController@index');
Route::get('/konfirmasi-pembayaran', 'donationController@konfirmasipembayaran');

Route::post('/request-payment', 'donationController@payment');
Route::post('/confirmation-payment', 'donationController@confirmation');
// Route::get('/view', function () {
//     return view('home.paymentdone');

Route::get('/credential', 'SysController@index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
