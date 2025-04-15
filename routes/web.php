<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
Route::get('/', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);

Route::get('details/{todo}', [TodoController::class, 'details']);

Route::get('/edit/{todo}', [TodoController::class, 'edit'])->name('todos.edit');

Route::put('/update/{todo}', [TodoController::class, 'update'])->name('todos.update');

Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::post('store-data', [TodoController::class, 'store'])->name('todo.store');