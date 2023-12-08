<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PatientController;



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

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function(){
    Auth::routes();
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin' , 'middleware'=>['isAdmin' , 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class , 'index'])->name('admin.dashboard');
    Route::get('showDoctors', [DoctorController::class , 'showDoctors'])->name('admin.showDoctors');
    Route::post('savedoctor', [DoctorController::class , 'savedoctor'])->name('admin.savedoctor');
    Route::post('editdoctor/{doctor_id}', [DoctorController::class , 'editdoctor'])->name('admin.editdoctor');
    Route::delete('deletedoctor/{doctor_id}', [DoctorController::class , 'deletedoctor'])->name('admin.deletedoctor');
    Route::post('saveeditdoctor', [DoctorController::class , 'saveeditdoctor'])->name('admin.saveeditdoctor');

    Route::get('showRooms', [RoomController::class , 'showRooms'])->name('admin.showRooms');
    Route::post('saveRooms', [RoomController::class , 'saveRooms'])->name('admin.saveRooms');
    Route::post('editRooms/{room_id}', [RoomController::class , 'editRooms'])->name('admin.editRooms');
    Route::post('saveeditrooms', [RoomController::class , 'saveeditrooms'])->name('admin.saveeditrooms');
    Route::delete('deleteRooms/{room_id}', [RoomController::class , 'deleteRooms'])->name('admin.deleteRooms');

    




    Route::get('showNurses', [NurseController::class , 'showNurses'])->name('admin.showNurses');
    Route::post('saveNurse', [NurseController::class , 'saveNurse'])->name('admin.saveNurse');
    Route::post('editNurse/{nurse_id}', [NurseController::class , 'editNurse'])->name('admin.editNurse');
    Route::delete('deleteNurse/{nurse_id}', [NurseController::class , 'deleteNurse'])->name('admin.deleteNurse');
    Route::post('saveeditNurse', [NurseController::class , 'saveeditNurse'])->name('admin.saveeditNurse');

    
    Route::get('showpattients', [PatientController::class , 'showpattients'])->name('admin.showpattients');
    Route::post('savePatients', [PatientController::class , 'savePatients'])->name('admin.savePatients');
    Route::post('editPatients/{patient_id}', [PatientController::class , 'editPatients'])->name('admin.editPatients');
    Route::delete('deletePatients/{patient_id}', [PatientController::class , 'deletePatients'])->name('admin.deletePatients');
    Route::post('saveeditPatient', [PatientController::class , 'saveeditPatient'])->name('admin.saveeditPatient');

    
    Route::get('viewprofilepatint/{patient_id}', [PatientController::class , 'viewprofilepatint'])->name('admin.viewprofilepatint');

    Route::get('addperscription/{patient_id}', [PatientController::class , 'addperscription'])->name('admin.addperscription');

    



});


Route::group(['prefix' => 'user' , 'middleware'=>['isUser' , 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class , 'index'])->name('user.dashboard');
    Route::get('settings', [UserController::class , 'settings'])->name('user.settings');
});