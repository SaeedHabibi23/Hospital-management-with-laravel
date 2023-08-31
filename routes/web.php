<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DoctorController;



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


    
    

});


Route::group(['prefix' => 'user' , 'middleware'=>['isUser' , 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class , 'index'])->name('user.dashboard');
    Route::get('settings', [UserController::class , 'settings'])->name('user.settings');
});