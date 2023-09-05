<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/articoli/crea', [AnnouncementController::class, 'create'])->name('announcements.create')
;
