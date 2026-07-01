<?php

namespace App\Livewire\Pages\Todos;

use App\Models\Todo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Todo List')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.todos.index', [
            'todos' => Todo::all(),
        ]);
    }
}
