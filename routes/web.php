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
    return view('index');
});
Route::get('404', function () {
    return view('404');
});
Route::get('support', function () {
    return view('support');
});
Route::get('about', function () {
    return view('about');
});
Route::get('interns', function () {
    return view('interns');
});
Route::get('become-intern', function () {
    return view('become-intern');
});
Route::get('template', function () {
    return view('template');

});

Route::get('hng5/finalists', function () {
    return view('hng5-finalists');
});
Route::get('join-now', function () {
    return view('join-now');
});
Route::get('past-interns', function () {
    return view('past-interns');
});
Route::get('products', function () {
    return view('products');
});
Route::get('support', function () {
    return view('support');
});
