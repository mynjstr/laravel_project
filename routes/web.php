<?php

use App\Livewire\Pages\Todos\Index as TodosIndex;
use App\Livewire\Pages\Todos\Create as TodosCreate;
use App\Livewire\Pages\Todos\View as TodosView;
use App\Livewire\Pages\Todos\Edit as TodosEdit;
use App\Livewire\Pages\Todos\Delete as TodosDelete;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', TodosIndex::class)->name('todos.index');
Route::get('/todos/create', TodosCreate::class)->name('todos.create');
Route::get('/todos/{todo}', TodosView::class)->name('todos.view');
Route::get('/todos/{todo}/edit', TodosEdit::class)->name('todos.edit');
Route::get('/todos/{todo}/delete', TodosDelete::class)->name('todos.delete');
