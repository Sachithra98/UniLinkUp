<?php
//sachithra-start
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;

//sachithra - end

//jayani-start
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeniedNoticeController;
use App\Http\Controllers\PublishNoticeController;

//jayani-end

use App\Http\Controllers\CheckLoginController;
use App\Http\Controllers\DashboardController;

//sachithra-start
use App\Http\Controllers\PostController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\societyController;
//sachithra - end

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\DeniedController;
use App\Http\Controllers\PublishController;



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

Route::get('admin', function () {
    return view('/Admin/admin');
});

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

Route::get('/moderator', function () {
    return view('/Moderator/moderator');
});

Route::get('/viewer', function () {
    return view('/Student/viewer');
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

//department 
Route::post('/admin_add_department', [DepartmentController::class, 'department'])->name('admin_add_department');
Route::post('/departmentInput', [DepartmentController::class, 'departmentInput'])->name('departmentInput');
Route::get('/admin_add_department', [DepartmentController::class, 'showDepartmentForm'])->name('showDepartmentForm'); 


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
Route::post('/postInput', [PostController::class, 'store'])->name('store');
Route::get('/editor_create_event', [PostController::class, 'data'])->name('data');
Route::post('/editor_create_event', [PostController::class, 'post'])->name('post');

//Society
Route::post('/storeSociety', [SocietyController::class, 'storeSociety'])->name('storeSociety');
// Route::get('/admin_add_society', [SocietyController::class, 'data'])->name('data');
Route::get('/admin_add_society', [SocietyController::class, 'society'])->name('society');

//notice
Route::post('/noticeInput', [NoticeController::class, 'store'])->name('store');
Route::get('/editor_create_notice', [NoticeController::class, 'data'])->name('data');
Route::post('/editor_create_notice', [NoticeController::class, 'notice'])->name('notice');


//for poll
Route::post('/editor_create_poll', [PollController::class, 'poll'])->name('poll');
Route::post('/pollInput', [PollController::class, 'store'])->name('store');
Route::get('/viewer_poll', [PollController::class, 'showAll'])->name('showAll');;


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

Route::get('/createReview', function () {
    return view('createReview');
})->name('createReview');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

//sachithra-end

//jayani-start
Route::get('/admin_createaccV', function () {
    return view('/Admin/admin_createaccV');
});
Route::post('/upload',[StudentController::class,'upload'])->name('upload');
Route::post('/studentInput',[StudentController::class,'studentInput'])->name('studentInput');
Route::get('/admin/add_society', [SocietyController::class, 'showAddSocietyForm']);
// routes/web.php
Route::post('/staffInput',[StaffController::class,'staffInput'])->name('staffInput');
Route::post('/moderatorInput',[ModeratorController::class,'moderatorInput'])->name('moderatorInput');
Route::post('/editorInput',[EditorController::class,'editorInput'])->name('editorInput');
Route::post('/adminInput',[AdminController::class,'adminInput'])->name('adminInput');






Route::get('/admin/department/create', [DepartmentController::class, 'showDepartmentForm'])->name('admin.department.create');
Route::post('/admin/department/store', [DepartmentController::class, 'storeDepartment'])->name('admin.department.store');
//jayani-end


//sachithra-start
Route::get('/admin_createaccE', [EditorController::class, 'data'])->name('data');
Route::get('/admin_createaccM', [ModeratorController::class, 'data'])->name('data');
Route::get('/admin_createaccS', [StaffController::class, 'data'])->name('data');
Route::get('/admin_createaccV', [StudentController::class, 'data'])->name('data');

//sachithra-end



//piyumi-reviews rote
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// routes/web.php

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');


// Route::get('Student/viewer_poll', [VoteController::class, 'index']);
// Route::post('/api/vote', [VoteController::class, 'vote']);
// end piyumi


Route::get('/moderator_poll', [PollController::class, 'showM'])->name('showM');;

Route::get('/moderator_denied_poll', function () {
    return view('/Moderator/moderator_denied_poll');
})->name('moderator_denied_poll');

Route::post('/deniedInput', [DeniedController::class, 'store'])->name('store');
Route::post('/moderator_denied_poll', [PollController::class, 'deniedpl'])->name('deniedpl');

Route::get('/editor_denied_poll', [DeniedController::class, 'showE'])->name('showE');;
Route::post('/update-denied/{poll_id}', [DeniedController::class, 'updateDenied'])->name('update_denied');



// Display the polls and vote results
Route::get('/polls', [VoteController::class, 'index'])->name('polls.index');

// // Handle the voting submission
Route::post('/vote', [VoteController::class, 'vote'])->name('vote.submit');

// Add data to publish_polls table
Route::post('/add-to-publish-poll/{pollId}', [PublishController::class, 'addDataToPublishPoll'])
    ->name('addDataToPublishPoll');

// Show viewer poll for publish_polls
Route::get('/viewer_poll', [PublishController::class, 'showAll'])
    ->name('showAll');

// Route::post('/api/vote', [VoteController::class, 'vote']);

Route::get('/moderator_notice', [NoticeController::class, 'showM'])->name('showM');

Route::get('/moderator_denied_notice', function () {
    return view('/Moderator/moderator_denied_notice');
})->name('moderator_denied_notice');

Route::post('/deniedInputN', [DeniedNoticeController::class, 'store'])->name('store');
Route::post('/moderator_denied_notice', [DeniedNoticeController::class, 'deniednts'])->name('deniednts');
Route::get('/editor_denied_notice', [DeniedNoticeController::class, 'showE'])->name('showE');
Route::post('/add-to-publish-notice/{NoticeId}', [PublishNoticeController::class, 'addDataToPublishNotice'])->name('addDataToPublishNotice');


Route::get('/viewer_notice', [PublishNoticeController::class, 'showAllN'])->name('showAllN');

// Example route in web.php
Route::delete('/delete-record/{pollId}', 'PublishNoticeController@deleteRecord');


//Route::get('/moderator_event', [//Controller::class, 'showM'])->name('showM');


Route::get('/moderator_denied_event', function () {
    return view('/Moderator/moderator_denied_event');
})->name('moderator_denied_event');