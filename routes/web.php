<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MedichineController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentAdminController;
use App\Http\Controllers\UserController;

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

// admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // appointment
    Route::get('/admin/appointment', [AppointmentController::class, 'index']);

    // medichine
    Route::get('/admin/medichine', [MedichineController::class, 'index']);
    Route::get('/admin/medichine/{medichine:id}', [MedichineController::class, 'show']);
    Route::put('/admin/medichine/{medichine:id}', [MedichineController::class, 'update']);
    Route::get('/admin/create/medichine', [MedichineController::class, 'create']);
    Route::post('/admin/medichine', [MedichineController::class, 'store']);
    Route::delete('/admin/medichine/{medichine:id}', [MedichineController::class, 'destroy'])->name('admin.medichine.destroy');

    // news
    Route::get('/admin/news', [NewsController::class, 'index']);
    Route::get('/admin/news/{news:id}', [NewsController::class, 'show']);
    Route::put('/admin/news/{news:id}', [NewsController::class, 'update']);
    Route::get('/admin/create/news', [NewsController::class, 'create']);
    Route::post('/admin/news', [NewsController::class, 'store']);
    Route::delete('/admin/news/{news:id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');


    Route::get('/admin/appointment/{appointment:id}', [AuthController::class, 'index']);
    Route::put('/admin/appointment', [AuthController::class, 'index']);
});

// doctor
Route::group(['middleware' => ['auth', 'role:doctor']], function () {
    // appointment
    Route::get('/doctor/appointment', [PlanController::class, 'index']);

    // plan
    Route::get('/doctor/plan', [PlanController::class, 'index']);
    Route::get('/doctor/plan/{plan:id}', [PlanController::class, 'show']);
    Route::put('/doctor/plan/{plan:id}', [PlanController::class, 'update']);
    Route::get('/doctor/create/plan', [PlanController::class, 'create']);
    Route::post('/doctor/plan', [PlanController::class, 'store']);
    Route::delete('/doctor/plan/{plan:id}', [PlanController::class, 'destroy'])->name('doctor.plan.destroy');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'store']);

Route::get('/logout', [AuthController::class, 'destroy']);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/appointment/create/{doctor:id}', [AppointmentController::class, 'create']);
});


// guest
Route::get('/', [UserController::class, 'index']);
Route::get('/facilities', [UserController::class, 'facilities']);
Route::get('/information', [UserController::class, 'information']);
Route::get('/doctor', [UserController::class, 'doctor']);
Route::get('/pharmacy', [UserController::class, 'pharmacy']);
Route::get('/location', [UserController::class, 'location']);
Route::get('/profile', [UserController::class, 'profile']);
