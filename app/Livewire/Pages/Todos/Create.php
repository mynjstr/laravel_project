<?php

namespace App\Livewire\Pages\Todos;

use App\Models\Todo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Create Todo')]
class Create extends Component
{
    public $title = '';
    public $description = '';

    public function save()
    {
        if (!auth()->user()->can(\App\Enums\PermissionEnum::CREATE_TODOS->value)) {
        session()->flash('error', 'You do not have permission to create todos.');
        return $this->redirect(route('todos.index'), navigate: true);
        }
        $this->validate([
            'title' => 'required|min:3',
            'description' => 'nullable',
        ]);

        Todo::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        return $this->redirect(route('todos.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.todos.create');
    }
}
