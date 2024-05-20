<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\AdminStudentController;

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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/admin', function(){
    return view('admin');
})->name('admin');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource("/students", StudentController::class);
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('students/{student_id}/diagnoses/create', [DiagnosisController::class, 'create'])->name('diagnoses.create');
    Route::resource('diagnoses', DiagnosisController::class)->except(['create']);

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('students', AdminStudentController::class);
        Route::post('/students', [AdminStudentController::class, 'store'])->name('students.store');
        Route::get('/students/{student_id}/diagnoses/create', [DiagnosisController::class, 'create'])->name('diagnoses.create');
    });
});
