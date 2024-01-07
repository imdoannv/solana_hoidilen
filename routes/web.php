<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AssetController;


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
Route::post('/create-teacher', [UserController::class, 'store'])->name('createUser')->middleware('checkRole:admin');
Route::get('/create-teacher', function () {
    return view('admin.users.create');
})->middleware('checkRole:admin');
Route::get('/teacher', [UserController::class, 'index'])->middleware('checkRole:teacher');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin',[\App\Http\Controllers\DashboardController::class,'index'])->name('admin')->middleware('checkRole:teacher,admin');
Route::get('/form',function (){
    return view('admin.form');
})->name('form');

Route::resource('events', EventController::class)->middleware('checkRole:teacher,admin');
Route::resource('assets', AssetController::class)->middleware('checkRole:teacher,admin');


// Route::get('/',[\App\Http\Controllers\DashboardController::class,'index'])->name('admin');
