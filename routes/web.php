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
    return view('welcome');
});

Route::get('/my_page', function () {
    return 'This is my page';
});

Route::get('/hello-world', function () {
    return 'Hello World! ! ! ! ! ! _ _ _';
});

Route::get('my-page-from-controller', 'MyPlaceController@index');

Route::get('posts', 'PostController@index');

Route::get('posts/create', 'PostController@create');
