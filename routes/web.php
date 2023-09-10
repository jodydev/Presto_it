<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;

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
    //routes HomeController
Route::get('/', [HomeController::class ,'index'])->name('index');

    //routes AnnouncementController
Route::get('/annunci', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/annunci/crea', [AnnouncementController::class, 'create'])->name('announcements.create')->middleware(['auth']);
Route::get('/annunci/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
//trovare modo per mettere nome annuncio in url
//routes CategoryController
Route::get('/categoria/{id}', [CategoryController::class, 'show'])->name('categories.show');

