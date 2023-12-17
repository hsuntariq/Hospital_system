<?php

use App\Http\Controllers\appointmentController;
use App\Http\Controllers\doctorController;
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
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/dashboard/add-doctors', 'admin.add-doctors');



Route::post('/book-appointment', [appointmentController::class, 'bookAppointment']);
Route::post('/add-doctor', [doctorController::class, 'addDoctor']);
