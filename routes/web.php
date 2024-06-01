<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MedichineController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentAdminController;

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

Route::group(['middleware' => ['auth', 'role:admin']], function(){
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

Route::group(['middleware' => ['auth', 'role:doctor']], function(){
    // appointment
    Route::get('/doctor/appointment', [PlanController::class, 'index']);

    // plan
    Route::get('/doctor/plan', [PlanController::class, 'index']);
    Route::get('/doctor/plan/{plan:id}', [PlanController::class, 'show']);
    Route::put('/doctor/plan/{plan:id}', [PlanController::class, 'update']);
    Route::get('/doctor/create/plan', [PlanController::class, 'create']);
    Route::post('/doctor/plan', [PlanController::class, 'store']);
    Route::delete('/doctor/plan/{plan:id}', [PlanController::class, 'destroy'])->name('admin.plan.destroy');
});

Route::get('/admin/login', [AuthController::class, 'index']);
Route::post('/admin/login', [AuthController::class, 'store']);

Route::get('/admin/logout', [AuthController::class, 'destroy']);



Route::get('/', function () {
    return view('user.index');
});
Route::get('/facilities', function () {
    return view('user.facilities');
});
Route::get('/information', function () {
    return view('user.information');
});
Route::get('/doctor', function () {
    return view('user.doctor');
});
Route::get('/pharmacy', function () {
    return view('user.pharmacy');
});
Route::get('/location', function () {
    return view('user.location');
});
Route::get('/profile', function () {
    return view('user.profile');
});
