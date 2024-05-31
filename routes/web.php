<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    Route::get('/admin/appointment', [AppointmentController::class, 'index']);
    
    Route::get('/admin/appointment/{appointment:id}', [AuthController::class, 'index']);
    Route::put('/admin/appointment', [AuthController::class, 'index']);
});

Route::get('/admin/login', [AuthController::class, 'index']);
Route::post('/admin/login', [AuthController::class, 'store']);



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
