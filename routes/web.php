<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('class.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');
Route::get('/books', [BookController::class, 'index']);
Route::get('create/class', [App\Http\Controllers\manage::class, 'create'])->name('create.class');
Route::post('store/class', [App\Http\Controllers\manage::class, 'store'])->name('store.class');
Route::get('class', [App\Http\Controllers\manage::class, 'index'])->name('class.index');
Route::get('class/delete/{id}', [App\Http\Controllers\manage::class, 'delete'])->name('class.delete');
Route::get('/search', [App\Http\Controllers\manage::class, 'search'])->name('search');
require __DIR__.'/auth.php';
