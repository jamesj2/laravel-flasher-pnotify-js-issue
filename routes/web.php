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
    pnotify('From Pnotify','success');
    pnotify('From Pnotify with options','success', ['delay' => 1000]);

    sweetAlert('From Sweet Alert 1','success');
    sweetAlert('From Sweet Alert 2','info');

    return view('welcome');
});
