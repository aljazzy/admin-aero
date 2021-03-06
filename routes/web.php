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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('units', 'UnitController');

Route::resource('units', 'GuzzleUnitController');
Route::resource('pesanans', 'GuzzlePesananController');
Route::resource('invoices', 'InvoiceController');
Route::resource('dashboards', 'DashboardController');
//Route::resource('login', 'GuzzleLoginController');