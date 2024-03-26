<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectricityController;
use App\Http\Controllers\WaterController;

// Route::get('/', [DashboardController::class, 'index'])
//     ->middleware(['auth:sanctum', 'verified'])
//     ->name('welcome');

        Route::middleware(['web', 'check.session'])->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('welcome');

        //student

        Route::get('/students', [StudentController::class, 'getStudent'])->name('getStudent');
        Route::get('/createStudent', [StudentController::class, 'createStudent'])->name('createStudent');
        Route::post('/addStudent', [StudentController::class, 'addStudent'])->name('addStudent');
        Route::get('/students/{id}/show', [StudentController::class, 'show'])->name('students.show');
        Route::get('/students/{id}/edit', [StudentController::class, 'editStudent'])->name('editStudent');
        Route::put('/students/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');
        Route::delete('/students/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');

        //teacher

        Route::get('/teacher', [TeacherController::class, 'getTeacher'])->name('getTeacher');
        Route::get('/createTeacher', [TeacherController::class, 'create'])->name('createTeacher');
        Route::post('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
        Route::get('/teacher/{id}/edit', [TeacherController::class, 'editTeacher'])->name('editTeacher');
        Route::put('/teacher/{id}', [TeacherController::class, 'updateTeacher'])->name('updateTeacher');
        Route::delete('/teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('deleteTeacher');
        Route::get('/teacher/{id}/show', [TeacherController::class, 'show'])->name('teacher.show');

        //payment

        Route::get('/payments', [PaymentController::class, 'getPayment'])->name('getPayment');
        Route::get('/createPayment', [PaymentController::class, 'create'])->name('createPayment');
        Route::post('/addPayment', [PaymentController::class, 'addPayment'])->name('addPayment');
        Route::get('/payment/{id}/edit', [PaymentController::class, 'editPayment'])->name('editPayment');
        Route::put('/payment/{id}', [PaymentController::class, 'updatePayment'])->name('updatePayment');
        Route::delete('/payments/{id}', [PaymentController::class, 'deletePayment'])->name('deletePayment');
        Route::get('/receipt/{id}', [PaymentController::class, 'receipt'])->name('receipt');

        //formation

        Route::get('/formations', [FormationController::class, 'getFormation'])->name('getFormation');
        Route::get('/createFormation', [FormationController::class, 'createFormation'])->name('createFormation');
        Route::post('/addFormation', [FormationController::class, 'addFormation'])->name('addFormation');
        Route::delete('/formation/{id}', [FormationController::class, 'deleteFormation'])->name('deleteFormation');

        //class

        Route::get('/classes', [ClasseController::class, 'getClass'])->name('getClass');
        Route::get('/createClass', [ClasseController::class, 'createClass'])->name('createClass');
        Route::post('/addClass', [ClasseController::class, 'addClass'])->name('addClass');
        Route::get('/class/{id}/edit', [ClasseController::class, 'editClass'])->name('editClass');
        Route::put('/class/{id}', [ClasseController::class, 'updateClass'])->name('updateClass');
        Route::delete('/class/{id}', [ClasseController::class, 'deleteClass'])->name('deleteClass');

        // detail class
        Route::get('/detailClass/{id}', [ClasseController::class, 'detailClass'])->name('detailClass');

        
        Route::get('/bills', function () {
            return view('bills.bills');
        })->name('getBills');

        // Electricity
        Route::get('/electricity', [ElectricityController::class, 'getElectricity'])->name('getElec');
        Route::get('/createElec', [ElectricityController::class, 'create'])->name('createElec');
        Route::post('/addElec', [ElectricityController::class, 'addElectricity'])->name('addElec');
        Route::get('/editElec/{id}', [ElectricityController::class, 'editElec'])->name('editElec');
        Route::put('/updateElec/{id}', [ElectricityController::class, 'updateElec'])->name('updateElec');
        Route::delete('/electricity/{id}', [ElectricityController::class, 'deleteElectricity'])->name('deleteElectricity');


        // Water
        Route::get('/water', [WaterController::class, 'getWater'])->name('getWater');
        Route::get('/createWater', [WaterController::class, 'create'])->name('createWater');
        Route::post('/addWater', [WaterController::class, 'addWater'])->name('addWater');
        Route::get('/editWater/{id}', [WaterController::class, 'editWater'])->name('editWater');
        Route::put('/updateWater/{id}', [WaterController::class, 'updateWater'])->name('updateWater');

    });
    

Route::get('/test', function () {
    return view('test');
});

// Route::controller(StudentController::class)->prefix('students')->group(function () {
//     Route::get('/',  'index')->name('students.index');
//     Route::get('/update',  'update')->name('students.update');
// });


// authentification

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'registerUser']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/logout', [UserController::class, 'logoutUser'])->middleware(['auth:sanctum'])->name('logout');
