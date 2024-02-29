<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\UpazilasController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::middleware(['auth', 'verified'])->group(function ()
{
    Route::get('/', function () {return view('pages.dashboard.index');})->name('dashboard');

    //============= Leave Application Route=============================================================================
    Route::get('/leave-list',           [LeaveController::class,'index'])->name('apply.index');
    Route::get('/leave-apply',          [LeaveController::class,'create'])->name('apply.create');
    Route::post('/leave-store',         [LeaveController::class,'store'])->name('apply.store');
    Route::get('/generate-pdf/{id}',    [LeaveController::class,'generatePDF'])->name('print');
    Route::get('/leave-edit/{id}',      [LeaveController::class,'edit'])->name('apply.edit');
    Route::patch('/leave-update/{id}',  [LeaveController::class,'update'])->name('apply.update');
    Route::delete('/leave-destroy/{id}',[LeaveController::class,'destroy'])->name('apply.destroy');
    //==================================================================================================================

    //============= User Route==========================================================================================
    Route::get('/users-list',            [RegisteredUserController::class,'index'])->name('users.index');
    Route::get('/users-create',          [RegisteredUserController::class,'create'])->name('create_user');
    Route::post('/users-store',          [RegisteredUserController::class,'store'])->name('users.store');
    Route::get('/users-show/{id}',       [RegisteredUserController::class,'show'])->name('users.show');
    Route::get('/users-edit/{id}',       [RegisteredUserController::class,'edit'])->name('users.edit');
    Route::patch('/users-update/{id}',   [RegisteredUserController::class,'update'])->name('users.update');
    Route::delete('/users-destroy/{id}', [RegisteredUserController::class,'destroy'])->name('users.destroy');
    //==================================================================================================================

    // =================district route =================================================================================
    Route::get('/district-list',         [DistrictController::class,'index'])->name('district.index');
    Route::get('/district-create',       [DistrictController::class,'create'])->name('district.create');
    Route::post('/district-store',       [DistrictController::class,'store'])->name('district.store');
    Route::get('/district-show/{id}',    [DistrictsController::class,'show']);
    Route::get('/district-edit/{id}',    [DistrictController::class,'edit'])->name('district.edit');
    Route::patch('/district-update/{id}',[DistrictController::class,'update'])->name('district.update');
    Route::delete('/district-destroy/{id}',[DistrictController::class,'destroy'])->name('district.destroy');
    //==================================================================================================================

    // =================Upazilas route==================================================================================
    Route::get('/upazila-list',          [UpazilasController::class,'index'])->name('upazila.index');
    Route::get('/upazila-create',        [UpazilasController::class,'create'])->name('upazila.create');
    Route::post('/upazila-store',        [UpazilasController::class,'store'])->name('upazila.store');
    Route::get('/upazila-show/{id}',     [UpazilasController::class,'show']);
    Route::get('/upazila-edit/{id}',     [UpazilasController::class,'edit'])->name('upazila.edit');
    Route::patch('/upazila-update/{id}', [UpazilasController::class,'update'])->name('upazila.update');
    Route::delete('/upazila-destroy/{id}',[UpazilasController::class,'destroy'])->name('upazila.destroy');
    //==================================================================================================================




});

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
