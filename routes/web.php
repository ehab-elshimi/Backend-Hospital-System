<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});
Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/home',[HomeController::class,'redirect']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::post('/upload_doctor',[AdminController::class,'upload'])->name('upload_doctor');
Route::get('/my_appointment',[HomeController::class,'myAppointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::get('/showappointments',[AdminController::class,'show_appointments'])->name('appointment');
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/delete/{id}',[AdminController::class,'cancel']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/adddoctor',[AdminController::class,'adddoctor'])->name('adddoctor');
Route::post('/datadoctor',[AdminController::class,'datadoctor'])->name('datadoctor');











