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

Route::get('/overmij', function () {
    $active = "about";
    return view('about', compact('active'));
});

Route::get('/opleiding', function () {
    $active = "education";
    return view('education.index', compact('active'));
});

Route::get('/opleiding/algemeneopleiding', function () {
    $active = "education";
    $active2 = "general";
    return view('education.general', compact('active', 'active2'));
});

Route::get('/opleiding/php', function () {
    $active = "education";
    $active2 = "php";
    return view('education.php', compact('active', 'active2'));
});

Route::get('/opleiding/laravel', function () {
    $active = "education";
    $active2 = "laravel";
    return view('education.laravel', compact('active', 'active2'));
});

Route::get('/contact', function () {
    $active = "contact";
    return view('contact', compact('active'));
});
