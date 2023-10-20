<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('forget', function () {
    return view('forget');
});

Route::get('/search', 'PostController@search')->name('search');

Route::get('/posts/{post}', 'PostController@show')->name('post.show');

Route::get('admin_UMV', function () {
    return view('admin_UMV');
});

Route::get('admin_UME', function () {
    return view('admin_UME');
});

Route::get('admin_UMM', function () {
    return view('admin_UMM');
});

Route::get('admin_UMA', function () {
    return view('admin_UMA');
});

Route::get('admin_Role_UMR', function () {
    return view('admin_Role_UMR');
});

Route::get('admin_societies', function () {
    return view('admin_societies');
});

Route::get('/index', function () {
    return view('index'); // You can change 'index' to the actual view name you want to load.
})->name('index');

Route::get('editor_notification', function () {
    return view('editor_notification');
});