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
    return view('Front');
});
Route::get('/Front', function () {
    return view('Front');
});
Route::resource('laravel','project');
Route::get('/About', function () {
    return view('About');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/login_Requisioner', function () {
    return view('login_Requisioner');
});
Route::get('/login_DepartmentHead', function () {
    return view('login_DepartmentHead');
});
Route::get('/login_sectionhead', function () {
    return view('login_sectionhead');
});