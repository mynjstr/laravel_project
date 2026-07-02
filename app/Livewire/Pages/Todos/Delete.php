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
        if (!auth()->user()->can(\App\Enums\PermissionEnum::CREATE_TODOS->value)) {
            session()->flash('error', 'You do not have permission to create todos.');
            return $this->redirect(route('todos.index'), navigate: true);
        }
        $this->todo->delete();
        activity()
            ->causedBy(auth()->user())
            ->performedOn($this->todo)
            ->log("User deleted Todo #{$this->todo->id}");
        return $this->redirect(route('todos.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.todos.delete');
    }
}
