<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RevisorController;
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
Route::get('/contatti', [HomeController::class ,'contacts'])->name('contacts');

 //routes AnnouncementController
Route::get('/annunci', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/annunci/crea', [AnnouncementController::class, 'create'])->name('announcements.create')->middleware(['auth']);
Route::get('/annunci/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
Route::get('/annunci/ricerca/annuncio', [AnnouncementController::class, 'searchAnnouncements'])->name('announcements.search');

//trovare modo per mettere nome annuncio in url
//routes CategoryController
Route::get('/categoria/{id}', [CategoryController::class, 'show'])->name('categories.show');

//routes RevisorController
Route::get('/revisore/home', [RevisorController::class , 'index'])->middleware('isRevisor')->name('revisors.index');
//patch per accettare annuncio, la patch modifica un dato di una colonna
Route::patch('/revisore/accetta/{annuncio}', [RevisorController::class , 'acceptAnnouncement'])->middleware(['isRevisor'])->name('revisors.accept');
//patch per rifiutare annuncio
Route::patch('/revisore/rifiuta/{annuncio}', [RevisorController::class , 'declineAnnouncement'])->middleware(['isRevisor'])->name('revisors.decline');
//route per richiedere di diventare revisore
Route::get('/diventa/revisore', [RevisorController::class , 'becomeRevisor'])->middleware(['auth'])->name('become.revisor');
//route per far diventare utente revisore
Route::get('/fai/revisore/{user}', [RevisorController::class , 'makeRevisor'])->name('make.revisor');

