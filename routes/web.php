<?php

use App\Http\Controllers\admin\FeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\TempImagesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.layouts.app');
})->middleware(['auth', 'verified'])->name('dashboard');

// ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {

    // Students routes
    Route::get('/students/list',[StudentController::class,'index'])->name('students.list');
    Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
    Route::post('/students',[StudentController::class,'store'])->name('students.store');
    Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
    Route::post('/students/{id}',[StudentController::class,'update'])->name('students.update');
    Route::get('/students/details/{id}',[StudentController::class,'details'])->name('students.details');

    //Fees routes
    Route::get('fees/detail/{id}',[FeeController::class,'feeDetail'])->name('fee.detail');
    Route::get('fees/create/{id}',[FeeController::class,'create'])->name('fee.create');
    Route::post('fees',[FeeController::class,'store'])->name('fee.store');
    Route::get('feetopay/{id}',[FeeController::class,'feetopay'])->name('feetopay');

    //Temp image

    Route::post('/upload-temp-image',[TempImagesController::class,'create'])->name('temp-images.create');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
