<?php

use App\Http\Controllers\appointmentController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\userController;
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

Route::view('/','homepage');
Route::view('/dashboard', 'admin.dashboard');
Route::view('/add-doctors', 'admin.add-doctors');
Route::view('/register', 'users.register');
Route::view('/view-doctors', 'admin.view-doctors');



Route::post('/book-appointment', [appointmentController::class, 'bookAppointment']);
Route::post('/add-doctor', [doctorController::class, 'addDoctor']);
Route::post('/register', [userController::class, 'SignUp']);
Route::post('/logout', [userController::class, 'Logout']);
Route::post('/login', [userController::class, 'Login']);



Route::get('/', [doctorController::class, 'getDoctors']);
Route::get('/view-doctors',[doctorController::class,'viewDoctors']);
Route::get('/single-doctor/{id}', [doctorController::class, 'singleDoctor']);