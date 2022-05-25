<?php

use App\Http\Controllers\addDoctorController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('web');

Route::get('/master', function () {
    return view('layouts.master');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware('auth');

Route::get('add_doctor', function () {
    return view('layouts.add_doctor');
})->middleware('auth');

Route::get('letterpad', function () {

    return view('layouts.letterpad');
});

Route::resource('doctor', DoctorController::class);
Route::get('doctor/{id}',[DoctorController::class,'show']);
Route::get('add_doctor',[addDoctorController::class,'detail']);
Route::post('add_doctor',[addDoctorController::class,'create']);
Route::get('delete/{id}',[addDoctorController::class,'delete']);
Route::post('edit/{id}',  [addDoctorController::class, 'edit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
