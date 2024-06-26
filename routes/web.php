<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ClasseController;


Route::get('/', function () {
    return view('welcome');
})->middleware(['auth:sanctum', 'verified'])->name('welcome');

Route::get('/test', function () {
    return view('test');
});

Route::controller(StudentController::class)->prefix('students')->group(function () {
    Route::get('/',  'index')->name('students.index');
    Route::get('/update',  'update')->name('students.update');
});


// authentification


Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'registerUser']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/logout', [UserController::class, 'logoutUser'])->middleware(['auth:sanctum'])->name('logout');

Route::controller(TeacherController::class)->prefix("teachers")->group(function(){
    Route::get('/','index')->name('teachers.index');
    Route::get('create','create')->name('teachers.create');
    Route::post('store','store')->name('teachers.store');
    Route::get('show/{id}','show')->name('teachers.show');
    Route::get('edit/{id}','edit')->name('teachers.edit');
    Route::put('edit/{id}','update')->name('teachers.update');
    Route::delete('destroy/{id}','destroy')->name('teachers.destroy');
});



//student
Route::get('/students', [StudentController::class, 'getStudent'])->name('getStudent');
Route::get('/createStudent', [StudentController::class, 'createStudent'])->name('createStudent');
Route::post('/addStudent', [StudentController::class, 'addStudent'])->name('addStudent');
Route::get('students/show/{id}','show')->name('students.show');
Route::get('students/edit/{id}','edit')->name('students.edit');
Route::put('students/edit/{id}','update')->name('students.update');
Route::delete('students/destroy/{id}','destroy')->name('students.destroy');


//teacher


Route::get('/teacher', [TeacherController::class, 'getTeacher'])->name('getTeacher');
Route::get('/createTeacher', [TeacherController::class, 'create'])->name('createTeacher');
Route::post('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
Route::get('teachers/show/{id}','show')->name('teachers.show');
Route::get('teachers/edit/{id}','edit')->name('teachers.edit');
Route::put('teachers/edit/{id}','update')->name('teachers.update');
Route::delete('teachers/destroy/{id}','destroy')->name('teachers.destroy');



//payment


Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/createPayment', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/paymentstore', [PaymentController::class, 'store'])->name('payments.store');
Route::get('payments/show/{id}','show')->name('payments.show');
Route::get('payments/edit/{id}','edit')->name('payments.edit');
Route::put('payments/edit/{id}','update')->name('payments.update');
Route::delete('payments/destroy/{id}','destroy')->name('payments.destroy');


//formation

Route::get('/formations', [FormationController::class, 'getFormation'])->name('getFormation');
Route::get('/createFormation', [FormationController::class, 'createFormation'])->name('createFormation');
Route::post('/addFormation', [FormationController::class, 'addFormation'])->name('addFormation');
Route::get('formation/show/{id}','show')->name('formation.show');
Route::get('formation/edit/{id}','edit')->name('formation.edit');
Route::put('formation/edit/{id}','update')->name('formation.update');
Route::delete('formation/destroy/{id}','destroy')->name('formation.destroy');





//class

Route::get('/classes', [ClasseController::class, 'getClass'])->name('getClass');
Route::get('/createClass', [ClasseController::class, 'createClass'])->name('createClass');
Route::post('/addClass', [ClasseController::class, 'addClass'])->name('addClass');

// detail class
Route::get('/detailClass/{id}', [ClasseController::class, 'detailClass'])->name('detailClass');


