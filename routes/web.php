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
Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index'])->name('home');
