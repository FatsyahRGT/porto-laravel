<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\BprogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortoController;



// Rute untuk menampilkan form login
// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/', [AuthController::class, 'showLoginForm']);

// Rute untuk memproses form login
Route::post('/login', [AuthController::class, 'login'])->name('action-login');

// Rute untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Rute untuk memproses form registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Rute untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//sidebar
Route::get('profile', [ProfController::class, 'index'])->name('profile.index');
Route::get('pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index');
Route::get('pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::get('keahlian', [KeahlianController::class, 'index'])->name('keahlian.index');
Route::get('bprog', [BprogController::class, 'index'])->name('bprog.index');
Route::get('project', [ProjectController::class, 'index'])->name('project.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

//sidebar profile
Route::get('profile/create', [ProfController::class, 'create'])->name('profile.create');
Route::get('profile/edit/{id}', [ProfController::class, 'edit'])->name('profile.edit');
Route::put('profile/update/{id}', [ProfController::class, 'update'])->name('profile.update');
Route::post('profile/store', [ProfController::class, 'store'])->name('profile.store');
Route::delete('profile/destroy/{id}', [ProfController::class, 'destroy'])->name('profile.destroy');

//sidebar pengalaman
Route::get('pengalaman/create', [PengalamanController::class, 'create'])->name('pengalaman.create');
Route::post('pengalaman/store', [PengalamanController::class, 'store'])->name('pengalaman.store');
Route::get('pengalaman/edit/{id}', [PengalamanController::class, 'edit'])->name('pengalaman.edit');
Route::put('pengalaman/update/{id}', [PengalamanController::class, 'update'])->name('pengalaman.update');
Route::delete('pengalaman/destroy/{id}', [PengalamanController::class, 'destroy'])->name('pengalaman.destroy');

//sidebar pendidikan
Route::get('pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
Route::post('pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::put('pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::delete('pendidikan/destroy/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

//sidebar keahlian
Route::get('keahlian/create', [KeahlianController::class, 'create'])->name('keahlian.create');
Route::post('keahlian/store', [KeahlianController::class, 'store'])->name('keahlian.store');
Route::get('keahlian/edit/{id}', [KeahlianController::class, 'edit'])->name('keahlian.edit');
Route::put('keahlian/update/{id}', [KeahlianController::class, 'update'])->name('keahlian.update');
Route::delete('keahlian/destroy/{id}', [KeahlianController::class, 'destroy'])->name('keahlian.destroy');

//sidebar  bprog
Route::get('bprog/create', [BprogController::class, 'create'])->name('bprog.create');
Route::post('bprog/store', [BprogController::class, 'store'])->name('bprog.store');
Route::get('bprog/edit/{id}', [BprogController::class, 'edit'])->name('bprog.edit');
Route::put('bprog/update/{id}', [BprogController::class, 'update'])->name('bprog.update');
Route::delete('bprog/destroy/{id}', [BprogController::class, 'destroy'])->name('bprog.destroy');

//sidebar  project
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('project/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

//untuk porto
Route::get('porto',  [PortoController::class, 'index'])->name('porto');
Route::get('porto/resume', [PortoController::class, 'resume'])->name('porto.resume');
Route::get('porto/project', [PortoController::class, 'project'])->name('porto.project');
Route::get('porto/contact', [PortoController::class, 'contact'])->name('porto.contact');
