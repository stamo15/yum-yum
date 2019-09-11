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
    Route::get('/about', 'PagesController@about')->name('front.about');
});


/** 
 * Admin routes
 * 1. All routes are prefixed with 'admin'
 * 2. Recipes routes are also prefixed with 'recipes', and route names start with 'admin.recipes.'
 * 3. Blog routes are also prefixed with 'blog', and route names start with 'admin.blog.'
 * 4. Users routes are also prefixed with 'users', and route names start with 'admin.users.'
 * 
*/

Route::group(['prefix' => 'admin'], function (){
    Auth::routes();

    // Recipes routes
    Route::name('admin.recipes.')->namespace('BackController\AdminController')->group(function (){
        Route::group(['prefix' => 'recipes', 'middleware' => ['auth']], function (){
            Route::get('/dashboard', 'AdminRecipesController@dashboard')->name('dashboard');
        });
    });

    // Blog routes
    Route::name('admin.blog.')->namespace('BackController\AdminController')->group(function (){
        Route::group(['prefix' => 'blog', 'middleware' => ['auth']], function (){
            Route::get('/dashboard', 'AdminBlogController@dashboard')->name('dashboard');
        });
    });

    // Users routes
    Route::name('admin.users.')->namespace('BackController\AdminController')->group(function (){
        Route::group(['prefix' => 'users', 'middleware' => ['auth']], function (){
            Route::get('/dashboard', 'AdminUsersController@dashboard')->name('dashboard');
        });
    });
});


