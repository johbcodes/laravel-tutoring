<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [HomeController::class, 'index']);

Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');


// Todos
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todos.update');

Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');
