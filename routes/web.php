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



// Route::group(['domain' => '{username}.'.env('APP_URL')], function()
// {
//   Route::get('/', function($username) {
//     return 'Anda mengunjungi akun ' . $username . ' '. env('APP_URL');
//   });
// });

// Route::group(['domain' => '{domain}'], function()
// {
//   Route::get('/', function($domain) {
//     return 'Anda mengunjungi akun ' . $domain . ' '. env('APP_URL');
//   });
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
