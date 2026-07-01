<?php

namespace App\Livewire\Pages\Todos;

use App\Models\Todo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Edit Todo')]
class Edit extends Component
{
    public $title;
    public $description;
    public $is_completed;
    public Todo $todo;

    public function mount()
    {
        $this->title = $this->todo->title;
        $this->description = $this->todo->description;
        $this->is_completed = $this->todo->is_completed;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|min:3',
            'description' => 'nullable',
        ]);

        $this->todo->update([
            'title' => $this->title,
            'description' => $this->description,
            'is_completed' => $this->is_completed,
        ]);

        return $this->redirect(route('todos.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.todos.edit');
    }
}
