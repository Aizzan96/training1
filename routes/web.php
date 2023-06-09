<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicantController;

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

Auth::routes() ;

Route::get('/home', [HomeController::class, 'index'])->name('todolist.home');

Route::get('/create', [HomeController::class,'create'])->name('todolist.create');
Route::post('/store', [HomeController::class,'store'])->name('todolist.store');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('todolist.edit');
Route::post('/update', [HomeController::class, 'update'])->name('todolist.update');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('todolist.edit');
Route::delete('/home/{id}', [HomeController::class, 'delete'])->name('todolist.delete'); //delete
// Route::delete('/home/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('todolist.delete');
// Route::delete('/home/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('todolist.delete');
Route::get('/applicants/index', [ApplicantController::class, 'index'])->name('applicants.index');
Route::get('/applicants/create', [ApplicantController::class, 'create'])->name('applicants.create');
Route::post('/applicants/store', [ApplicantController::class, 'store'])->name('applicants.store');
Route::delete('/applicants/{id}', [ApplicantController::class, 'delete'])->name('applicants.delete');


