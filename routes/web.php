<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/', function () {
//    return view('tareas.index');
//});

Route::get('/', TareaController::class .'@index')->name('tareas.index');
Route::get('/tareas/create', TareaController::class . '@create')->name('tareas.create');
// adds a post to the database
Route::post('/tareas', TareaController::class .'@store')->name('tareas.store');
// returns a page that shows a full post
Route::get('/tareas/{tarea}', TareaController::class .'@show')->name('tareas.show');
// returns the form for editing a post
Route::get('/tareas/{tarea}/edit', TareaController::class .'@edit')->name('tareas.edit');
// updates a post
Route::put('/tareas/{tarea}', TareaController::class .'@update')->name('tareas.update');
// deletes a post
Route::delete('/tareas/{tarea}', TareaController::class .'@destroy')->name('tareas.destroy');

require __DIR__.'/auth.php';
