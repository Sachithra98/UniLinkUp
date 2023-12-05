<?php
//sachithra-start
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
//sachithra - end
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CheckLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\VoteController;

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
//sachithra-start
Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

// Route::get('admin', function () {
//     return view('admin');
// });

Route::get('forget', function () {
    return view('forget');
});

Route::get('/search', 'PostController@search')->name('search');

Route::get('/posts/{post}', 'PostController@show')->name('post.show');

Route::get('/admin_UMV', function () {
    return view('/Admin/admin_UMV');
});

Route::get('/admin_UME', function () {
    return view('/Admin/admin_UME');
});

Route::get('/admin_UMM', function () {
    return view('/Admin/admin_UMM');
});

Route::get('/Admin/admin_UMA', function () {
    return view('/Admin/admin_UMA');
});

Route::get('/admin_Role_UMR', function () {
    return view('/Admin/admin_Role_UMR');
});

Route::get('/admin_societies', function () {
    return view('/Admin/admin_societies');
});

Route::get('/index', function () {
    return view('index'); // You can change 'index' to the actual view name you want to load.
})->name('index');

Route::get('/admin_societies', function () {
    return view('/Admin/admin_societies');
});


Route::get('/admin_add_role', function () {
    return view('/Admin/admin_add_role');
});

Route::get('/admin_add_society', function () {
    return view('/Admin/admin_add_society');
});

Route::get('/admin_createaccV', function () {
    return view('/Admin/admin_createaccV');
});

Route::get('/admin_createaccE', function () {
    return view('/Admin/admin_createaccE');
});

Route::get('/admin_createaccM', function () {
    return view('/Admin/admin_createaccM');
});

Route::get('/admin_createaccS', function () {
    return view('/Admin/admin_createaccS');
});

Route::get('/admin_createaccA', function () {
    return view('/Admin/admin_createaccA');
});
Route::get('/admin_faculties', function () {
    return view('/Admin/admin_faculties');
});


Route::get('/admin_department', function () {
    return view('/Admin/admin_department');
});


Route::get('/admin_add_department', function () {
    return view('admin_add_department');
});



Route::get('/admin_add_faculty', function () {
    return view('/Admin/admin_add_faculty');
});


Route::post('/admin_add_faculty', [FacultyController::class, 'faculty'])->name('admin_add_faculty');
Route::post('/facultyInput', [FacultyController::class, 'facultyInput'])->name('facultyInput');

Route::get('/editor_create_event', function () {
    return view('/Editor/editor_create_event');
});

Route::get('/editor_create_notice', function () {
    return view('/Editor/editor_create_notice');
});

Route::get('/editor_create_poll', function () {
    return view('/Editor/editor_create_poll');
});

Route::get('/editor', function () {
    return view('/Editor/editor');
});
//sachithra-end



Route::post('/loginCheck', [CheckLoginController::class,'redirectToDashboard'])->name('loginCheck');
Route::get('/dashboard/editor', [DashboardController::class,'editor'])->name('editor.dashboard');
Route::get('/dashboard/moderator', [DashboardController::class,'moderator'])->name('moderator.dashboard');
Route::get('/dashboard/admin', [DashboardController::class,'admin'])->name('admin.dashboard');
Route::get('/dashboard/student', [DashboardController::class,'student'])->name('student.dashboard');

Route::get('/dashboard/generic', [DashboardController::class,'error'])->name('error.dashboard');

//sachithra-start
Route::get('/admin_add_department', function () {
    return view('/Admin/admin_add_department');
});
//sachithra-end

Route::post('/admin_add_department', [DepartmentController::class, 'department'])->name('admin_add_department');
Route::post('/departmentInput', [DepartmentController::class, 'departmentInput'])->name('departmentInput');

//sachithra-start
Route::get('admin_add_role', function () {
    return view('/Admin/admin_add_role');
});
//sachithra-end

Route::post('/admin_add_role', [RoleController::class, 'role'])->name('admin_add_role');
Route::post('/roleInput', [RoleController::class, 'roleInput'])->name('roleInput');


//sachithra-start
Route::get('/search', [PostController::class, 'search']);

//posts
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('Editor/editor_create_event', [PostController::class, 'data'])->name('data');


//for poll
Route::post('/editor_create_poll', [PollController::class, 'poll'])->name('poll');
Route::post('/pollInput', [PollController::class, 'store'])->name('store');

Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
//sachithra-end

Route::get('/editor_poll',[VoteController::class, 'index']);
Route::post('/vote',[VoteController::class, 'vote']);