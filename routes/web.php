<?php

use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGenreController;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/about', [BookController::class, 'about'])->name('about');
Route::get('/contact', [BookController::class, 'contact'])->name('contact');

Route::prefix('admin')->group(function () {
    Route::resource('book', AdminBookController::class);
    Route::resource('author', AdminAuthorController::class);
    Route::resource('genre', AdminGenreController::class);
    Route::get('/',[AdminController::class, 'index'])->name('admin.index');
});






/*Route::get('/', [AdminBookController::class, 'home'])->name('admin.home');
 Route::get('/about', [AdminBookController::class, 'about'])->name('admin.about');
 Route::get('/contact', [AdminBookController::class, 'contact'])->name('admin.contact');*/
