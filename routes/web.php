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
Route::get('/',                'Controller@index')            ->name('welcome');

Route::get('/faq',                'Controller@faq')            ->name('faq');

Route::get('/about',                'Controller@about')            ->name('about');

Route::get('/terms_condition',                'Controller@terms_condition')            ->name('terms_condition');


//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/faq', function () {
//    return view('faq');
//});
//Route::get('/about', function () {
//    return view('about');
//});
//Route::get('/terms_condition', function () {
//    return view('terms_condition');
//});