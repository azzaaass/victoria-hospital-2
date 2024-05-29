<?php

use App\Http\Controllers\AuthAdminController;
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

Route::group(['middleware' => ['auth', 'role:1']], function(){

});

Route::get('/admin/login', [AuthAdminController::class, 'index']);

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