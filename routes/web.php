<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\profile;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/doctors', [PagesController::class, 'doctors'])->name('doctors');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/blogs', [PagesController::class, 'blog'])->name('blogs');

Route::get('blogview/{id}', [PagesController::class, 'blogview'])->name('blogview');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');


Route::post('/booking/store', [BookingController::class, 'store'])->name('admin.booking.store');


Route::middleware('auth')->group(function () {

    //blog
    Route::get('/blog', [blogcontroller::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [blogcontroller::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/store', [blogcontroller::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/{id}/edit', [blogcontroller::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blog/{id}/update', [blogcontroller::class, 'update'])->name('admin.blog.update');
    Route::get('/blog/{id}/delete', [blogcontroller::class, 'delete'])->name('admin.blog.delete');


    //booking
    Route::get('/booking/{status}', [BookingController::class, 'index'])->name('admin.booking.index');
    Route::get('/booking/status/{id}/{status}', [BookingController::class, 'status'])->name('admin.booking.status');
    Route::get('/booking/status/{id}/delete', [BookingController::class, 'delete'])->name('admin.booking.delete');

    //view doctor controller frontend
    Route::get('/doctor/{id}/view', [PagesController::class, 'viewdoctor'])->name('viewdoctor');

    //patient
    Route::get('/patient', [PatientController::class, 'index'])->name('admin.patient.index');
    Route::get('/create/patient', [PatientController::class, 'create'])->name('admin.patient.create');
    Route::post('/store/patient', [PatientController::class, 'store'])->name('admin.patient.store');
    Route::get('/patient/{id}/edit', [PatientController::class, 'edit'])->name('admin.patient.edit');
    Route::post('/patient/{id}/update', [PatientController::class, 'update'])->name('admin.patient.update');
    Route::get('/patient/{id}/delete', [PatientController::class, 'delete'])->name('admin.patient.delete');

    //doctor
    Route::get('/doctor', [DoctorController::class, 'index'])->name('admin.doctor.index');
    Route::get('/create/doctor', [DoctorController::class, 'create'])->name('admin.doctor.create');
    Route::post('/store/doctor', [DoctorController::class, 'store'])->name('admin.doctor.store');
    Route::get('/doctor/{id}/edit', [DoctorController::class, 'edit'])->name('admin.doctor.edit');
    Route::post('/doctor/{id}/update', [DoctorController::class, 'update'])->name('admin.doctor.update');
    Route::get('/doctor/{id}/delete', [DoctorController::class, 'delete'])->name('admin.doctor.delete');

    //appointment
    Route::get('/appointment/{status}', [AppointmentController::class, 'index'])->name('admin.appointment.index');
    Route::post('/appointment/store',   [AppointmentController::class, 'store'])->name('admin.appointment.store');
    Route::get('/appointment/status/{id}/{status}', [AppointmentController::class, 'status'])->name('admin.appointment.status');
    Route::get('/appointment/status/{id}/delete', [AppointmentController::class, 'delete'])->name('admin.appointment.delete');

    //userappointment
    Route::get('/myappointment', [AppointmentController::class, 'myappointment'])->name('admin.appointment.myappointment');
    Route::get('/myappointment/{id}/deleteappointment', [AppointmentController::class, 'deleteappointment'])->name('admin.appointment.deleteappointment');

    //Doctor Appoinment
    Route::get('/doctorappointment', [AppointmentController::class, 'doctorappointment'])->name('admin.appointment.doctorappointment');
    Route::get('admin/doctorappointment/{id}/deletedoctor', [AppointmentController::class, 'deletedoctor'])->name('admin.appointment.deletedoctor');



    //profile route for admin
    Route::get('/index', [profile::class, 'index'])->name('admin.profile.index');
    Route::post('/updatemyprofile', [profile::class, 'update'])->name('admin.profile.update');

    //profile route for user/patient
    Route::get('/indexuser', [profile::class, 'indexuser'])->name('user.indexuser');
    Route::post('/update', [profile::class, 'update'])->name('user.update');

    //profile route for doctor
    Route::get('doctor/profile', [profile::class, 'indexdoctor'])->name('doctor.profile');
    Route::post('doctor/update', [profile::class, 'updatedoctor'])->name('doctor.update');
});

//pagecontroller

Route::middleware(['auth', 'ispatient'])->group(function () {
    Route::get('/userprofile', [PagesController::class, 'userprofile'])->name('userprofile');
});

Route::middleware(['auth', 'isDoctor'])->group(function () {
    Route::get('/doctorprofile', [PagesController::class, 'doctorprofile'])->name('doctorprofile');
});

//Dashboard Route for Admin,Patient and Doctor
Route::get('/dashboard', [DashboardController::class, 'patientindex'])->middleware(['auth', 'isadmin'])->name('dashboard');
Route::get('/user-dashboard', [DashboardController::class, 'userdashboard'])->middleware(['auth'])->name('userdashboard');
Route::get('/doctorprofile', [DashboardController::class, 'doctordashboard'])->middleware(['auth'])->name('doctorprofile');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
