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
Route::get('/privacy', [HomeController::class ,'privacy'])->name('privacy');

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
//post per richiamare gli annunci all'interno della tabella del revisore
Route::post('/revisore/elencoAnnunci/{user_id}', [RevisorController::class , 'tableAnnouncement'])->middleware(['isRevisor'])->name('revisors.table');
//get per mostrare annuncio al revisore
Route::get('/revisore/mostraAnnuncio/{id_announcement}', [RevisorController::class , 'announcement'])->middleware(['isRevisor'])->name('revisors.announcement');
//route per richiedere di diventare revisore
Route::get('/diventa/revisore', [RevisorController::class , 'becomeRevisor'])->middleware(['auth'])->name('become.revisor');
//route per far diventare utente revisore
Route::get('/fai/revisore/{user}', [RevisorController::class , 'makeRevisor'])->name('make.revisor');
//cambio lingue
Route::post('/lingua/{lang}',[HomeController::class,'setLanguage'])->name('set_language_locale');

