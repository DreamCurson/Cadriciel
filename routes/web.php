<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\ForumController;

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

Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');

Route::get('/student/index', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/create', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/edit/student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/edit/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');


Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
Route::post('/forum/create', [ForumController::class, 'store'])->name('forum.store');
Route::get('/forum/{forum}', [ForumController::class, 'show'])->name('forum.show');
Route::get('edit/forum/{forum}', [ForumController::class, 'edit'])->name('forum.edit');
Route::put('edit/forum/{forum}', [ForumController::class, 'update'])->name('forum.update');
Route::delete('edit/forum/{forum}', [ForumController::class, 'destroy'])->name('forum.destroy');

Route::get('/document', [DocumentsController::class, 'index'])->name('document.index');
Route::get('/document/create', [DocumentsController::class, 'create'])->name('document.create');
Route::post('/document/create', [DocumentsController::class, 'store'])->name('document.store');
Route::get('edit/document/{document}', [DocumentsController::class, 'edit'])->name('document.edit');
Route::put('edit/document/{document}', [DocumentsController::class, 'update'])->name('document.update');
Route::delete('/document/{document}', [DocumentsController::class, 'destroy'])->name('document.destroy');