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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/wabout', function () {
    return view('about');
});

Route::get('/wportfolio', function () {
    return view('portfolio');
});

Route::get('/wblog', function () {
    return view('blog');
});

Route::get('/wcontact', function () {
    return view('contact');
});

Route::get('/{any}', function () {
    return view('index');
})->where(['any' => '.*']);
