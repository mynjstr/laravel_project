<div>
    <h1>Delete Todo</h1>
    <p>Are you sure you want to delete "{{ $todo->title }}"?</p>
    <button wire:click="delete">Yes, Delete</button>
    <a href="{{ route('todos.index') }}" wire:navigate>Cancel</a>
</div>
