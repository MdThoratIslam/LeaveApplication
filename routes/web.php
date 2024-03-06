<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\UpazilasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UnionsController;
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
    Route::get('/users',            [UserController::class,'index'])->name('users.index');
    Route::get('/users-create',          [UserController::class,'create'])->name('create_user');
    Route::post('/users-store',          [UserController::class,'store'])->name('users.store');
    Route::get('/users-show/{id}',       [UserController::class,'show'])->name('users.show');
    Route::get('/users-edit/{id}',       [UserController::class,'edit'])->name('users.edit');
    Route::patch('/users-update/{id}',   [UserController::class,'update'])->name('users.update');
    Route::delete('/users-destroy/{id}', [UserController::class,'destroy'])->name('users.destroy');
    //==================================================================================================================

    // =================district route =================================================================================
    Route::get('/district-list',         [DistrictsController::class,'index'])->name('district.index');
    Route::get('/district-create',       [DistrictsController::class,'create'])->name('district.create');
    Route::post('/district-store',       [DistrictsController::class,'store'])->name('district.store');
    Route::get('/district-show/{id}',    [DistrictsController::class,'show']);
    Route::get('/district-edit/{id}',    [DistrictsController::class,'edit'])->name('district.edit');
    Route::patch('/district-update/{id}',[DistrictsController::class,'update'])->name('district.update');
    Route::delete('/district-destroy/{id}',[DistrictsController::class,'destroy'])->name('district.destroy');
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

    // =================Uninon route====================================================================================
    Route::get('/union-list',            [UnionsController::class,'index'])->name('union.index');
    Route::get('/union-create',          [UnionsController::class,'create'])->name('union.create');
    Route::post('/union-store',          [UnionsController::class,'store'])->name('union.store');
    Route::get('/union-show/{id}',       [UnionsController::class,'show']);
    Route::get('/union-edit/{id}',       [UnionsController::class,'edit'])->name('union.edit');
    Route::patch('/union-update/{id}',   [UnionsController::class,'update'])->name('union.update');
    Route::delete('/union-destroy/{id}', [UnionsController::class,'destroy'])->name('union.destroy');
    //==================================================================================================================



});

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resources([
    'roles' => RoleController::class,
    'permissions' => PermissionController::class
]);

require __DIR__.'/auth.php';
