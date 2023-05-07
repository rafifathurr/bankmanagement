<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::namespace('App\Http\Controllers')->group(function (){

    Route::prefix('auth')->name('login.')->group(function () {
        Route::get('/login', 'AuthController@index')->name('index');
        Route::post('/login', 'AuthController@authenticate')->name('authenticate');
        Route::post('/logout', 'AuthController@logout')->name('logout');
    });

    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', 'CustomerController@index')->name('index');
        Route::get('create', 'CustomerController@create')->name('create');
        Route::get('edit/{id}', 'CustomerController@edit')->name('edit');
        Route::post('store', 'CustomerController@store')->name('store');
        Route::post('update', 'CustomerController@update')->name('update');
        Route::post('destroy', 'CustomerController@destroy')->name('destroy');
    });

    Route::prefix('type')->name('type.')->group(function () {
        Route::get('/', 'TypeController@index')->name('index');
        Route::get('create', 'TypeController@create')->name('create');
        Route::post('store', 'TypeController@store')->name('store');
        Route::post('destroy', 'TypeController@destroy')->name('destroy');
    });

    Route::prefix('transactions')->name('transactions.')->group(function () {
        Route::get('/', 'TransactionsController@index')->name('index');
        Route::get('create', 'TransactionsController@create')->name('create');
        Route::post('store', 'TransactionsController@store')->name('store');

        Route::prefix('report')->name('report.')->group(function () {
            Route::get('/', 'TransactionsController@report')->name('index');
            Route::post('/scopeData', 'TransactionsController@scopeReport')->name('scopeData');
        });
        
    });

    Route::prefix('points')->name('points.')->group(function () {
        Route::get('/', 'PointsController@index')->name('index');
        Route::post('/scopeData', 'PointsController@scopeData')->name('scopeData');
    });

});
