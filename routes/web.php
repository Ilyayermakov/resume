<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('home.index');
});

// Language
Route::get('locale/{locale}', [LocaleController::class, 'changeLocale'])->name('locale');

// Links
Route::get('home', [MainController::class, 'home'])->name('home');
Route::get('about_myself', [MainController::class, 'about_myself'])->name('about_myself');
Route::get('job', [MainController::class, 'job'])->name('job');
Route::get('qualification', [MainController::class, 'qualification'])->name('qualification');
Route::get('skills', [MainController::class, 'skills'])->name('skills');

