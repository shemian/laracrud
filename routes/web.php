<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::get('/addStudentRoute', [CrudController::class, 'create'])->name('create');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/storeStudentRoute', [CrudController::class, 'store'])->name('store');
Route::put('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::get('/delete/{id}', [CrudController::class, 'destroy'])->name('delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
