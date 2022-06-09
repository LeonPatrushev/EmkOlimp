<?php

use App\Http\Controllers\AdditionalInformationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StageDateController;
use App\Models\Participant;
use App\Models\StageDate;
use Illuminate\Support\Facades\Route;


Route::get('/',[MainController::class, 'index'])->name('index');

Route::get('/admin/index', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');

Route::get('/admin/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/admin/login/login', [LoginController::class, 'login'])->name('login.login');

Route::post('/admin/register/register',[RegisterController::class,'create'])->middleware('auth')->name('register.create');

Route::get('/admin/logout',[LogoutController::class, 'index'])->name('logout.index');

Route::post('/participant/store',[ParticipantController::class, 'store'])->name('participant.store');
Route::post('/participant/update',[ParticipantController::class, 'update'])->middleware('auth')->name('participant.update');

Route::post('stage/update', [StageDateController::class,'update'])->middleware('auth')->name('stage.update');

Route::post('/info/update', [AdditionalInformationController::class, 'update'])->middleware('auth')->name('info.update');