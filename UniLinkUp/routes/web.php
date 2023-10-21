<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;


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

Route::get('/admin_societies', function () {
    return view('admin_societies');
});


Route::get('admin_add_role', function () {
    return view('admin_add_role');
});

Route::get('admin_add_society', function () {
    return view('admin_add_society');
});

Route::get('admin_createaccV', function () {
    return view('admin_createaccV');
});

Route::get('admin_createaccE', function () {
    return view('admin_createaccE');
});

Route::get('admin_createaccM', function () {
    return view('admin_createaccM');
});

Route::get('admin_createaccS', function () {
    return view('admin_createaccS');
});

Route::get('admin_createaccA', function () {
    return view('admin_createaccA');
});

//sachithra
Route::get('admin_add_faculty', function () {
    return view('admin_add_faculty');
});


Route::post('/admin_add_faculty', [FacultyController::class, 'faculty'])->name('admin_add_faculty');
Route::post('/facultyInput', [FacultyController::class, 'facultyInput'])->name('facultyInput');

Route::get('editor_create_event', function () {
    return view('editor_create_event');
});

Route::get('editor_create_notice', function () {
    return view('editor_create_notice');
});

Route::get('editor_create_poll', function () {
    return view('editor_create_poll');
});

Route::get('editor', function () {
    return view('editor');
});

Route::get('admin_faculties', function () {
    return view('admin_faculties');
});
