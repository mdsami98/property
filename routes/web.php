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
    return view('frontEnd.home.home');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});
Route::get('/table', function () {
    return view('admin.table');
});
