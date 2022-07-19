<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [StudentController::class,'index'])->name('home');
Route::post('/create', [StudentController::class,'create'])->name('create.register');
Route::get('/st_mark', [StudentController::class,'showMarkForm'])->name('create.mark');
Route::post('/store', [StudentController::class,'store'])->name('store.mark');
Route::view('/find', 'student_mark_show')->name('find.mark');
Route::post('/show', [StudentController::class,'show'])->name('show.mark');
