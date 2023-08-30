<?php

use App\Http\Controllers\StudentController;
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

Route::get('/students/trash', [StudentController::class, 'trash'])->name('students.trash');
Route::put('/students/restoreAll', [StudentController::class, 'restoreAll'])->name('students.restoreAll');
Route::delete('/students/deleteAll', [StudentController::class, 'deleteAll'])->name('students.deleteAll');
Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index'])->name('home');
Route::patch('/students/{student}/restore', [StudentController::class, 'restore'])->name('students.restore');
