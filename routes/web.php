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

/** 
 * Front office routes
 * 1. Controllers will be in the directory App\Http\Controllers\FrontController
 * 
 * 
*/
Route::group(['namespace' => 'FrontController'], function(){
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/', 'PagesController@index')->name('index');
    Route::get('/register', 'PagesController@register')->name('front.register');
    Route::post('/register', 'PagesController@signup')->name('front.signup');
    Route::get('/login', 'PagesController@login')->name('front.login');
    Route::get('/logout', 'PagesController@logout')->name('front.logout');
    Route::post('/login', 'PagesController@signin')->name('front.signin');
    Route::get('/recipes', 'PagesController@recipes')->name('front.recipes');
    Route::get('/recipes/{slug}', 'PagesController@recipeSingle')->name('front.recipes.single');
    Route::get('/blog', 'PagesController@blog')->name('front.blog');
    Route::get('/blog/{slug}', 'PagesController@blogPost')->name('front.blog.post');
});


/** 
 * Admin routes
 * 1. Auth routes are prefixed with 'admin'
 * 
 * 
*/

Route::group(['prefix' => 'admin'], function (){
    Auth::routes();
});


