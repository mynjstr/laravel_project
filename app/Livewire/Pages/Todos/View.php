<?php

namespace App\Livewire\Pages\Todos;

use App\Models\Todo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('View Todo')]
class View extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.pages.todos.view');
    }
}
