<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MyAppointmentController;
use App\Http\Controllers\ShowAppointmentController;
use App\Http\Controllers\ApprovedController;
use App\Http\Controllers\CancelController;
use App\Http\Controllers\AllDoctorShowController;
use App\Http\Controllers\EmaliViewController;


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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('add_doctor_view',[AdminController::class,'addDoctors']);

Route::post('upload_doctors',[UploadController::class,'uploadDoctor']);
Route::post('appointment',[AppointmentController::class,'appointment']);

//myAppointment_cancel_appointment_ShowAppointment
Route::get('myAppointment',[MyAppointmentController::class,'myAppointment']);
Route::get('cancel_appointment/{id}',[MyAppointmentController::class,'cancel_appointment']);
Route::get('ShowAppointment',[ShowAppointmentController::class,'ShowAppointment']);

//Approved_&_Cancel
Route::get('Approved/{id}',[ApprovedController::class,'Approved']);
Route::get('Cancel/{id}',[CancelController::class,'Cancel']);


//show_All_Doctors
Route::get('AllDoctorShow',[AllDoctorShowController::class,'AllDoctorShow']);
#deleted Doctor
Route::get('deletedDoctor/{id}',[AllDoctorShowController::class,'deletedDoctor']);
#upload doctor
Route::get('uploadDoctor/{id}',[AllDoctorShowController::class,'uploadDoctor']);
#edit_doctor
Route::post('editDoctor/{id}',[AllDoctorShowController::class,'editDoctor']);

#email_view
Route::get('EmaliView/{id}',[EmaliViewController::class,'EmaliView']);

#sandEmail
Route::post('sandEmail/{id}',[EmaliViewController::class,'sandEmail']);
