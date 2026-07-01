<?php

namespace App\Livewire\Pages\Todos;

use App\Models\Todo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Delete Todo')]
class Delete extends Component
{
    public Todo $todo;

    public function delete()
    {
        $this->todo->delete();
        return $this->redirect(route('todos.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.todos.delete');
    }
}
